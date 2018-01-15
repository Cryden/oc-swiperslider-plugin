<?php namespace dmitrybykov\Swiper\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateDmitrybykovSwiperSliderPresets extends Migration
{
    public function up()
    {
        Schema::table('dmitrybykov_swiper_slider_presets', function($table)
        {
            $table->text('css');
            $table->text('js');
        });
    }
    
    public function down()
    {
        Schema::table('dmitrybykov_swiper_slider_presets', function($table)
        {
            $table->dropColumn('css');
            $table->dropColumn('js');
        });
    }
}
