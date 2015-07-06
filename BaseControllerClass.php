<?php


Abstract class BaseControllerClass
{

    /**
     * Объект "хранилища"
     * @var CollectionClass\Collection
     */
    protected $_registry;

    function __constructor(\CollectionClass\Collection $registry)
    {
        $this->_registry = $registry;
    }

    abstract function ActionIndex();

    abstract function ActionContent();

    abstract function ActionAbout();

} 