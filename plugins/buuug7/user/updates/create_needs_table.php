<?php namespace Buuug7\User\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateNeedsTable extends Migration
{
    public function up()
    {
        Schema::create('buuug7_user_needs', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->string('title');
            $table->text('description')->nullable();
            $table->string('contact_phone')->nullable();
            $table->boolean('featured')->default(0);
            $table->boolean('checked')->default(0);
            $table->timestamp('checked_at')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('buuug7_user_needs');
    }
}
