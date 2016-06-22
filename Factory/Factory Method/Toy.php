<?php
    /*
     * Factory Method: Defines an interface for creating an object, but lets classes
     * that implement the interface decide which class to instantiate. The Factory 
     * method lets a class defer instantiation to subclass. 
     *
     * Toy is a abstract class with functions prepare(), package(), and label()
     *
     */
    abstract class Toy {
       public $name = '';
       public $price = 0;
       
       public function prepare() {
          echo $this->name. ' is prepared';
       }

       public function package() {
          echo $this->name. ' is packaged';
       }
	
       public function label() {
	  echo $this->name. 'is priced at'.$this->price;	
       }
    }
