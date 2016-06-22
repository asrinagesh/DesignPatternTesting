<?php
    /*
     * A California branch toy factory that extends the ToysFactory. It just needs to 
     * implement the createToy method in ToysFacory in its subclass to define the 
     * abstract Factory
     *
     */
     class CaToysFactory extends ToysFactory {
         
         public function createToy($toyName);
	    $toy = null;
            
            if ($toyName == 'car') {
                $toy = new CaCar();
            } else if ($toyName == 'helicopter') {
                $toy = new CaHelicopter();
            }

	    return $toy;
         } 
     }
