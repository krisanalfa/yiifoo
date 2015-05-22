<?php namespace app\controllers;

use app\Inspiring;
use yii\web\Controller;

/**
 * Controller is the base class of web controllers.
 *
 * @author Krisan Alfa Timur <krisanalfa@docotel.co.id>
 */
class SiteController extends Controller
{
    /**
     * Controllers are composed of actions which are the most basic units that end users can address and request for execution. A controller can have one or multiple actions. This method is reponsible to show the index page.
     *
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index', [

            'inspire' => Inspiring::make()->random(),

        ]);
    }
}
