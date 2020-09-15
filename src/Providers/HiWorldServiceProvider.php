<?php
namespace HelloWorld\Providers;


use Plenty\Plugin\ServiceProvider;

class HiWorldServiceProvider extends ServiceProvider
{

    /**
     * Register the service provider.
     */

    public function register()
    {
        $this->getApplication()->register(HiWorldRouteServiceProvider::class);

    }
}