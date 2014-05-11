<?php

class IndexController extends \Phalcon\Mvc\Controller
{

    public function indexAction()
    {
        //echo "<h1>Hello!</h1>";
        $user = new Users();
        $this->view->name = "suriyun";
        $this->view->items=users::find();
      }
}