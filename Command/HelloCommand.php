<?php 
    /*
     * Concerte class that simply calls print on the Recevier but an eternal invoker just
     * the execute.
     *
     */ 
     class HelloCommand implements CommandInterface {
     
        protected $output;
	
	public function __contruct(Receiver $console) {
    	   $this->output = $console;
	}

	public function execute() {
	   $this->output->write("Simple Test");
	}
     }
