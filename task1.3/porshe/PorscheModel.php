<?php
require_once __DIR__ . '/../AbstractClass.php';


 class PorscheModel extends AbstractClass
 {
     protected $color;
     protected $speed;
     protected $date;
     protected $transmission;
  
     public function __construct($color, $speed, $date, $transmission)
     {
       $this->color = $color;
       $this->speed = $speed;
       $this->date = $date;
       $this->transmission = $transmission;
       
     }
     
     public function getColor()
     {
       return $this->color;
     }
     
     public function getSpeed()
     {
       return $this->speed;
     }
     
     public function getDate()
     {
       return $this->date;
     }
    
    public function getTransmission()
     {
       return $this->transmission;
     }
  
  

     
 }

  
  
 