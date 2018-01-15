<?php namespace dmitrybykov\Swiper\Components;

use dmitrybykov\Swiper\models\Slider as Slider;
use dmitrybykov\Swiper\models\SliderPreset as SliderPreset;

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
        $this->slider_preset = $this->page['slider_preset'] = $this->loadSliderPreset();

    }

    
    public function onRender()
    {
        $this->slider = $this->page['slider'] = $this->loadSlider();
        $this->slider_preset = $this->page['slider_preset'] = $this->loadSliderPreset();
    }

    protected function loadSlider()
    {
        $slider_id = $this->property('slider');
        $slider = new Slider;
        $slider = $slider->where('id', $slider_id)->first();
        return $slider;
    }

    protected function loadSliderPreset()
    {
        $slider_preset_id = $this->property('preset');
        $slider_preset = new SliderPreset;
        $slider_preset = $slider_preset->where('id', $slider_preset_id)->first();
        return $slider_preset;
    }

    public function defineProperties()
    {
        return [
            'slider' => [
                'title'       => 'slider',
                'description' => 'select slider',
                'type'        => 'dropdown'
            ],
            'preset' => [
                'title'       => 'preset',
                'description' => 'select preset',
                'type'        => 'dropdown'
            ]
        ];
    }

    public function getSliderOptions()
    {
        return Slider::lists('slider_name', 'id');
    }

    public function getPresetOptions()
    {
        return SliderPreset::lists('name', 'id');
    }

}