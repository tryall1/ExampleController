<?php

class SiteController extends BaseControllerClass
{

    /**
     * @var object
     */
    private $_obj;

    /**
     *
     */
    function ActionIndex()
    {
        $this->_obj = new \IndexController\Index();
    }

    function ActionContent()
    {
        $this->_obj = new \ContentController\Content();
    }

    function ActionAbout()
    {
        $this->_obj = new \AboutController\About();
    }
}