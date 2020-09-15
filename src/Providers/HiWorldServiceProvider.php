<?php
namespace helloworld\Providers;


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