<?php namespace Buuug7\User\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateCompaniesTable extends Migration
{
    public function up()
    {
        Schema::create('buuug7_user_companies', function(Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name')->nullable();
            $table->string('slug');
            $table->string('address')->nullable();
            $table->string('contact_phone')->nullable();
            //$table->string('logo')->nullable();
            $table->string('description')->nullable();
            $table->longText('detail')->nullable();
            $table->integer('user_id')->unsigned();
            $table->boolean('checked')->default(0);
            $table->timestamp('checked_at')->nullable();
            $table->enum('status', ['un_committed','committed','checking', 'passed', 'not_passed'])->default('un_committed');;
            $table->text('not_passed_message')->nullable();;
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('buuug7_user_companies');
    }
}
