<?php


namespace FileSender;


class ServiceProvider extends \Illuminate\Support\ServiceProvider
{

    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/')
    }

}