<?php

/**
 * App Core Class
 * Creates URL & loads core controller
 * URL Format - /controller/method/params
 */

class Core
{
  protected $currentController = 'Pages';
  protected $currentMethod = 'Index';
  protected $params = [];

  public function __constrct()
  {
    $this->getUrl();
  }

  public function getUrl()
  {
    echo $_GET['url'];
  }
}
