<?php namespace dmitrybykov\Swiper\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableDeleteDmitrybykovSwiperSliderContents extends Migration
{
    public function up()
    {
        Schema::dropIfExists('dmitrybykov_swiper_slider_contents');
    }
    
    public function down()
    {
        Schema::create('dmitrybykov_swiper_slider_contents', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
        });
    }
}