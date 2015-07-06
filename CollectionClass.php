<?php

namespace CollectionClass;

class Collection implements \Collection\CollectionInterface
{

    /**
     * @var array
     * Хранение переданных при создании экземпляра класса значений
     */
    private $_data = [];

    public function __constructor(array $data = [])
    {
        $this->_data = $data;
    }

    /**
     * Установка данных
     * @param $key
     * @param $value
     * @throws \Exception
     */
    public function set($key, $value)
    {
        if ($this->check($key)) {
            throw new \Exception('Данные с ключом ' . $key . ' уже существуют');
        } else {
            $this->_data[$key] = $value;
            return true;
        }
    }

    /**
     * Получение данных
     * @param $key
     * @return null
     */
    public function get($key)
    {
        if (!$this->check($key)) {
            return null;
        } else {
            return $this->_data[$key];
        }
    }

    /**
     * Проверка на существование значения
     * @param $key
     * @return bool
     */
    public function check($key)
    {
        return isset($this->_data[$key]);
    }

    /**
     * Удаление данных
     * @param $key
     * @throws \Exception
     */
    public function del($key)
    {
        if (!$this->check($key)) {
            throw new \Exception('Переданный ключ пуст');
        } else {
            unset($this->_data[$key]);
        }
    }

    /**
     * Обновление данных
     * @param $key
     * @param $value
     * @throws \Exception
     */
    public function update($key, $value)
    {
        if (!$this->check($key)) {
            throw new \Exception('Ключа ' . $key . 'не существует');
        } else {
            $this->_data[$key] = $value;
        }
    }

}