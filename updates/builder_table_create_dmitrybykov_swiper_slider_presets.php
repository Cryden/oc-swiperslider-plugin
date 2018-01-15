<?php namespace dmitrybykov\Swiper\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateDmitrybykovSwiperSliderPresets extends Migration
{
    public function up()
    {
        Schema::create('dmitrybykov_swiper_slider_presets', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('dmitrybykov_swiper_slider_presets');
    }
}
