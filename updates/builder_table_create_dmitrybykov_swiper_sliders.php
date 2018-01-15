<?php namespace dmitrybykov\Swiper\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateDmitrybykovSwiperSliders extends Migration
{
    public function up()
    {
        Schema::create('dmitrybykov_swiper_sliders', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('slider_name');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('dmitrybykov_swiper_sliders');
    }
}
