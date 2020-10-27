<?php

class Proveedor {
    private $id;
    public function getId(){
        return $this->id;
    }
    public function setId($id){
        $this->id=$id;
    }

    private $descripcion;
    public function getDescripcion(){
        return $this->descripcion;
    }
    public function setDescripcion($desc){
        $this->descripcion=$desc;
    }
}