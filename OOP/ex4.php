<?php
// Da hình
interface Shape {
    public function draw();
}

class Circle implements Shape {
    public function draw() {
        return "Draw Circle";
    }
}

class Rectangle implements Shape {
    public function draw() {
        return "Draw Rectangle";
    }
}