<?php

class IndexController extends ControllerBase
{

    public function indexAction()
    {

        $loader = new \Phalcon\Loader();

        /**
         * We're a registering a set of directories taken from the configuration file
         */
        $loader->registerDirs(
            array(
                '../app/helpers/'
            )
        )->register();

        $test = new TestHelper();
        $test->dosth('dkaldlasda');
        die;
    }

}

