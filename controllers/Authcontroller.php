<?php 

namespace app\controllers;

use app\core\Controller;
use app\core\Request;

class Authcontroller extends Controller{
    public function login (Request $request){
        $this->setLayout('Auth');
        if ($request->isGet()){
            return $this->render('login');
        }
        return "loggin you in";
    }
    
    public function register (Request $request){
        $this->setLayout('Auth');
        if ($request->isGet()){
            return $this->render('register');
        }
        return "handling submitted data";
    }
}