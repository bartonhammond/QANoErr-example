<?php
namespace pages;
use Wisnet\BehatPom\Utility;
use Wisnet\BehatPom\Base;

//baseUrl: http://crossbrowsertesting.github.io
//pageUrl: /login-form.html
//selector: //div[@class='container']
//trim: true
//version: 0.0.8
//date: Mon Sep 10 2018 10:48:49 GMT-0500 (Central Daylight Time)

/*
*  Extend class provides support for overriding all the functions
*/
if (file_exists('features/bootstrap/pages/LoginFormExtend.php')){
    include 'features/bootstrap/pages/LoginFormExtend.php';
}
class LoginForm extends Base {
  protected $path = "/login-form.html";
  
  protected $elements = [
  //Links
   //Textboxes
    "username" =>
    [
      "xpath" => "//*[@id='username']"
    ],
    "password" =>
    [
      "xpath" => "//*[@id='password']"
    ],
   //Selects
    //TextAreas
   //Buttons
    "submit" =>
    [
      "xpath" => "//*[@id='submit']"
    ]
   
  ];
   /*
   * Create variable if LoginForm exists
   */
    public function __construct($session, $factory, $parameters) {
        parent::__construct($session, $factory, $parameters);

        if (file_exists('features/bootstrap/pages/LoginFormExtend.php')) {
            $this->extend = new \pages\LoginFormExtend;
             $this->extend->addToElements($this);  	    
        }
    }
}
