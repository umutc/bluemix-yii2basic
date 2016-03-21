Yii 2 Basic Project Template For IBM Bluemix CloudFoundry
============================
1- Download project via zip</br>
2- Open zip</br>
3- Run this command</br>
cd C:\xampp\htdocs\app -> folder of your project file</br>
composer install</br>
============================
Before cf push open web/index.php and comment out the following two lines.</br>
defined('YII_DEBUG') or define('YII_DEBUG', true);
defined('YII_ENV') or define('YII_ENV', 'dev');