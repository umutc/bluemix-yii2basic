Yii 2 Basic Project Template For IBM Bluemix CloudFoundry
==
Install
==
1- Download project via zip</br>
2- Open zip</br>
3- Run this command "cd C:\xampp\htdocs\app" -> folder of your project file</br>
4- Run this command "composer install"       -> install depencies</br>
Pus to CloudFoundry
==
Before cf push open web/index.php and comment out the following two lines.</br>
defined('YII_DEBUG') or define('YII_DEBUG', true);
defined('YII_ENV') or define('YII_ENV', 'dev');
