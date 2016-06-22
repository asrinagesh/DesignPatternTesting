<?php
    /*
     * A New York branch toy factory that extends the ToysFactory. It just needs to 
     * implement the createToy method in ToysFacory in its subclass to define the 
     * abstract Factory
     *
     */
     class NyToysFactory extends ToysFactory {
         
         public function createToy($toyName);
	    $toy = null;
            
            if ($toyName == 'car') {
                $toy = new NyCar();
            } else if ($toyName == 'helicopter') {
                $toy = new NyHelicopter();
            }

	    return $toy;
         } 
     }
