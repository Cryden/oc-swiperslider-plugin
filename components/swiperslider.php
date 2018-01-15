<?php namespace dmitrybykov\Swiper\Components;

use dmitrybykov\Swiper\models\Slider as Slider;

class swiperSlider extends \Cms\Classes\ComponentBase
{
    public $slider;
    
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
        $this->slider = $this->page['slider'] = $this->loadSlider();

    }

    
    public function onRender()
    {
        $this->slider = $this->page['slider'] = $this->loadSlider();
    }

    protected function loadSlider()
    {
        $slider_id = $this->property('slider');
        $slider = new Slider;
        $slider = $slider->where('id', $slider_id)->first();
        return $slider;
    }

    public function defineProperties()
    {
        return [
            'slider' => [
                'title'       => 'slider',
                'description' => 'select slider',
                'type'        => 'dropdown'
            ]
        ];
    }

    public function getSliderOptions()
    {
        return Slider::lists('slider_name', 'id');
    }

}