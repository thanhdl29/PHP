<?php
//Đóng gói
//public, private, protected
class Car {
    private $model;
    protected $color;
    public function setModel($model) {
        $this->model = $model;
    }
    public function getModel() {
        return $this->model;
    }
    
}

class toyota extends Car{
    public function setModel($model) {
        
    }
}

$toyota = new toyota('a001');
//echo $toyota->color;