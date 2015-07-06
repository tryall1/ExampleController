<?php

namespace Collection;

Interface CollectionInterface
{

    public function set($key, $value);

    public function get($key);

    public function check($key);

    public function del($key);

    public function update($key, $value);

}