<?php namespace Buuug7\News\Updates;

use October\Rain\Database\Updates\Migration;
use DbDongle;

class UpdateTimestampsNullable extends Migration
{
    public function up()
    {
        DbDongle::disableStrictMode();

        DbDongle::convertTimestamps('buuug7_news_posts');
        DbDongle::convertTimestamps('buuug7_news_categories');
    }

    public function down()
    {
        // ...
    }
}
