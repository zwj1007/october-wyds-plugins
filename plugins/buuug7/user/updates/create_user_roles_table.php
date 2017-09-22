<?php namespace Buuug7\Statistics\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateUserRolesTable extends Migration
{
    /*
     * 最近的october 5.5 升级出错解决
     * 为了解决引用后台的权限,而前台没有权限表roles报错
     * */
    public function up()
    {
        Schema::create('roles', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name')->unique('role_unique');
            $table->string('code')->nullable()->index('role_code_index');
            $table->text('description')->nullable();
            $table->text('permissions')->nullable();
            $table->boolean('is_system')->default(0);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('roles');
    }
}
