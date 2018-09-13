<?php
namespace pages;
use Wisnet\BehatPom\Utility;

class LoginFormExtend {
    public function addToElements($parent) {
        $xpath = array("xpath" => "//div[@class='ng-binding ng-scope alert alert-danger']");
        $parent->_addToElements("Username or password is incorrect", $xpath);

        $xpath = array("xpath" => "//div[@class='progress']");
        $parent->_addToElements("Verifying credentials", $xpath);

        $xpath = array("xpath" => "//p[@id='logged-in']");
        $parent->_addToElements("You are now logged in!", $xpath);

    }    
}
