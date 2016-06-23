<?php 
    /*
     * Invoker holds the command for it to be executed, does not really know 
     * what the command is or how to perform the command. 
     *
     */
    class Invoker {
		//new command interface    	
		protected $command;
	
		public function setCommand(CommandInterface $cmd) {
	    	$this->command = $cmd;
		}

		public function run() {
	   		$this->command->execute();
		}
    }
