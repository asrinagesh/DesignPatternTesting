<?php
     /*
      * A simple factory is not really a design pattern but it encapsulates the object instantiation process.
      * This class helps manage the addition of new toys for the overall ToysFactory. This allows the classes
      * to be open for extension but closed for modification.
      *
      */ 
     class SimpleFactory {
	public funtion createToy($toyName) {
	    $toy = null;
	    
	    // checks what the toy is and then calls its respective function
	    if ($toyName == 'car') {
		$toy = new Car();
	    } else if ($toyName == 'helicopter') {
	        $toy = new Helicopter();
	    }
	
	    return $toy;
	}
     }
	
