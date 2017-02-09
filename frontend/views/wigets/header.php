<?php
namespace frontend\wiget;

use yii\base\Widget;
use yii\helpers\Html;

class header extends Widget
{
    public $message;

    public function init()
    {
        parent::init();
       
    }

    public function run()
    {
        return $this->render('header');
    }
}