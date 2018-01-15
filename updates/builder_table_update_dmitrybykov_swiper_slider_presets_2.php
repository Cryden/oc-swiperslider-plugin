<?php namespace dmitrybykov\Swiper\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateDmitrybykovSwiperSliderPresets2 extends Migration
{
    public function up()
    {
        Schema::table('dmitrybykov_swiper_slider_presets', function($table)
        {
            $table->boolean('pagination');
            $table->boolean('navigation');
            $table->boolean('scrollbar');
        });
    }
    
    public function down()
    {
        Schema::table('dmitrybykov_swiper_slider_presets', function($table)
        {
            $table->dropColumn('pagination');
            $table->dropColumn('navigation');
            $table->dropColumn('scrollbar');
        });
    }
}
