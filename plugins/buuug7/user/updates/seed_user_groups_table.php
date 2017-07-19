<?php namespace Buuug7\User\Updates;

use Schema;
use October\Rain\Database\Updates\Seeder;
use RainLab\User\Models\UserGroup;

class SeedUserGroupsTable extends Seeder
{
    public function run()
    {
        if(!UserGroup::where('code','tong-ji-shu-ju-yong-hu-zu')->exists()){
            UserGroup::create([
                'name' => '统计数据用户组',
                'code' => 'tong-ji-shu-ju-yong-hu-zu',
                'description' => '统计数据用户组',
            ]);
        }

    }
}

