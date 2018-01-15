<?php namespace dmitrybykov\Swiper;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerSettings()
    {
    }

    public function registerComponents()
    {
        return [
            'dmitrybykov\Swiper\Components\swiperSlider' => 'swiperSlider'
        ];
    }

}
