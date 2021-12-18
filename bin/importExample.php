<?php

use application\controllers\YiiNameSpacedController;
use NaokiTsuchiya\AdventCalendar2021\PSR4NameSpacedController;

require __DIR__ . '/../vendor/autoload.php';
require __DIR__ . '/../vendor/yiisoft/yii/framework/yii.php';

echo class_exists(CController::class) . PHP_EOL; // yii core component

echo get_include_path() . PHP_EOL;

Yii::setPathOfAlias('application', __DIR__ . '/../public/protected');
Yii::import('application.controllers.*');
Yii::import('application.components.*');
Yii::import('application.models.*');

echo get_include_path() . PHP_EOL;

echo class_exists(SiteController::class) . PHP_EOL; // include from include_path
echo class_exists(UserIdentity::class) . PHP_EOL; // include from include_path
echo class_exists(ContactForm::class) . PHP_EOL; // include from include_path
echo class_exists(YiiNameSpacedController::class) . PHP_EOL; // include from alias path
echo class_exists(PSR4NameSpacedController::class) . PHP_EOL; // include from composer autoloader
