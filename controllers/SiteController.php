<?php

namespace app\controllers;

use app\core\Application;
use JotForm;

class SiteController
{

    public static function contact()
    {

        return Application::$app->router->renderView('contact');
    }

    public static function handleContact()
    {
        return 'Handling submitted data';
    }



    public static function listjotform()
    {
        $jotformAPI = new JotForm("a603212f0bf956cc035c2a1e92b58913");
        $userInfo = $jotformAPI->getUser();
        var_dump($userInfo);
        return '';
    }


}