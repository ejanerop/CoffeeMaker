<?php


trait Heatable
{
    private bool $extraHot = false;

    public function isHot() {
        return $this->extraHot;
    }    
    
}