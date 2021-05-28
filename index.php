<?php

///////////autoload function//////

spl_autoload_register(function ($class) {

    if (stristr($class, "Controller")) {
        require "controllers/" . $class . ".php";
    } else {
        require "models/" . $class . ".php";
    }
});
///////////PHPMAILER-AUTOLOAD////////

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
/////////loading pages //////////////////

if (!isset($_GET['page'])) {
//loading home page
    $controller = new PortfolioController();
    $controller->display();
} else {
    switch ($_GET['page']) {

        ///////////////PORTFOLIO///////////////
        case 'portflio':
            $controller = new ShowPortfolioDetailsController();
            $controller->showportfolio();
            break;
        case 'portflioen':
            $controller = new PortfolioController();
            $controller->displayEnglish();
            break;
        case 'portfliofr':
            $controller = new PortfolioController();
            $controller->display();
            break;
        case 'contact':
            $controller = new ContactController();
            $controller->SendEmail();
            break;
    }
}