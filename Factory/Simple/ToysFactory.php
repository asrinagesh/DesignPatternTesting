<?php
    /*
     * A Toy Factory that utilizes the Simple Factory Design Pattern. The concrete class 
     * has been instantiated by the SimpleFactory. 
     *		
     */
    class ToysFactory {
	public $simpleFactory;

	public function __construct(SimpleFactory $simpleFactory) {
	     $this->simpleFactory = $simpleFactory;
	}	

	public function produceToy($toyName) {
		$toy = null;
		
		// uses simpleFactory to create the toy depending on what type
		// of toy it is
		$toy = $this->simpleFactory->createToy($toyName);

		$toy->prepare();
		$toy->package();
		$toy->label();

		return $toy;
	}
     }
