<?php

namespace Skel\Service;

use Silex\Application;
use Silex\ServiceProviderInterface;
use Skel\Controller\IndexController;

class ControllerProvider implements ServiceProviderInterface
{
    public function register(Application $app)
    {
        $app['controller.index'] = $app->share(function() use ($app) {
            return new IndexController($app);
        });
    }

    public function boot(Application $app)
    {
    }
}