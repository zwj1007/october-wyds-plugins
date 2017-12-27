<?php namespace Buuug7\User\Console;

use Backend\Models\ImportModel;
use Carbon\Carbon;
use Illuminate\Console\Command;
use League\Csv\Reader;
use October\Rain\Exception\ValidationException;
use RainLab\User\Facades\Auth;
use RainLab\User\Models\UserGroup;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\InputArgument;

class ImportUsers extends Command
{
    /**
     * @var string The console command name.
     */
    protected $name = 'user:importusers';

    /**
     * @var string The console command description.
     */
    protected $description = 'import users from cvs file';

    /**
     * Execute the console command.
     * @return void
     */
    public function handle()
    {
        $this->output->writeln('start import');
        $filePath = plugins_path('buuug7/user/users.csv');

        $csv = Reader::createFromPath($filePath);
        $csv->setOffset(1);
        $count = count($csv->fetchAll());

        $bar = $this->output->createProgressBar($count);

        $created_at = Carbon::now();

        $nbInsert = $csv->each(function ($row) use ($bar, $created_at) {
            $created_at = $created_at->subHour(1);
            $bar->advance();
            return $this->createUser($row, $created_at);
        });
    }


    /**
     * create one user by a csv row
     * @param $row  csv row
     * @param $created_at user created time
     * @return bool
     */
    protected function createUser($row, $created_at)
    {
        $name = $row[1];
        $home_address = $row[2];
        $id_card_number = $row[3];
        $phone_number = $row[4] ? $row[4] : null;
        // 邮箱基于手机号码，格式为 手机号码@qq.com
        $email = $phone_number ? $phone_number . '@qq.com' : null;
        // 手机号码后六位
        $password = substr($phone_number, -6);

        // 邮箱不存在直接跳过
        if (!$email) {
            $this->output->writeln('');
            $this->error(' 邮箱为空，跳过添加！');
            $row[] = ' 邮箱为空，跳过添加！';
            trace_log($row);
            return true;
        } else {

            $user = Auth::findUserByLogin($email);
            // 如果用户存在，直接跳过
            if ($user) {
                $this->error(' 邮箱已经存在，跳过添加！');
                $row[] = ' 邮箱已经存在，跳过添加！';
                trace_log($row);
                return true;
            } else {
                try {
                    $u = Auth::register([
                        'name' => $name,
                        'email' => $email,
                        'password' => $password,
                        'password_confirmation' => $password,
                        'id_card_number' => $id_card_number,
                        'phone_number' => $phone_number,
                        'home_address' => $home_address,
                    ], true);
                    $u->created_at = $created_at;
                    $u->activated_at = $created_at->addMinute(30);
                    $u->save();
                    $peiXunGroup = UserGroup::where('code', 'pei-xun-yong-hu-zu')->first();
                    if ($peiXunGroup) {
                        $u->groups()->attach($peiXunGroup->id);
                    }
                } catch (ValidationException $e) {
                    $row[] = $e->getMessage();
                    trace_log($row);
                    return true;
                }

                $this->info(' 成功添加一个用户！');
                return true;
            }
        }
    }

    /**
     * Get the console command arguments.
     * @return array
     */
    protected function getArguments()
    {
        return [];
    }

    /**
     * Get the console command options.
     * @return array
     */
    protected function getOptions()
    {
        return [];
    }
}
