<?php namespace dmitrybykov\Swiper\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateDmitrybykovSwiperSliderContents extends Migration
{
    public function up()
    {
        Schema::create('dmitrybykov_swiper_slider_contents', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('dmitrybykov_swiper_slider_contents');
    }
}
