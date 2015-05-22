<?php namespace app\controllers;

use Yii;
use yii\web\Controller;

/**
 * Controller is the base class of web controllers.
 *
 * @author Krisan Alfa Timur <krisanalfa@docotel.co.id>
 */
class ContainerController extends Controller
{
    /**
     * Initialization of controller.
     *
     * @return void
     */
    public function init()
    {
        Yii::$container->setSingleton('description', function ()
        {
            return 'A dependency injection (DI) container is an object that knows how to instantiate and configure objects and all their dependent objects.';
        });
    }

    /**
     * Controllers are composed of actions which are the most basic units that end users can address and request for execution. A controller can have one or multiple actions. This method is reponsible to show the container index page.
     *
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index', [

            'inspires' => Yii::$container->get('app\Inspiring')->random(3),
            'description' => Yii::$container->get('description'),

        ]);
    }
}
