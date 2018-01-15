<?php namespace dmitrybykov\Swiper\Components;

class swiperSlider extends \Cms\Classes\ComponentBase
{
    public function componentDetails()
    {
        return [
            'name' => 'Slider',
            'description' => 'Displays a Swiper slider.'
        ];
    }

    public function onRun()
    {
        $this->addCss('/plugins/dmitrybykov/Swiper/bower_components/swiper/dist/css/swiper.min.css');
        $this->addJs('/plugins/dmitrybykov/Swiper/bower_components/swiper/dist/js/swiper.min.js');
    }

}