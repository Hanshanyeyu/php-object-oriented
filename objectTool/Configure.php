<?php

abstract class Configure
{
    protected $source;
    protected $params = [];

    private function __construct($source)
    {
        $this->source = $source;
    }

    public static function getInstance($source)
    {
        if(preg_match('/xml/', $source)) {
            return new XMLConfigure($source);
        }

        return new JSONConfigure($source);
    }

    public function addParam($key, $value)
    {
        $this->params[$key] = $value;
    }

    public function getParams()
    {
        $this->params;
    }

    public abstract function read();

    public abstract function write();
}