<?php
    /*
     * Receiver is a service that can only be concrete. Knows how to execute 
     * and complete the task.
     *
     */
    class Receiver {
        private $enableDate = false;
        private $output = array();

	public function write($str) {
	    if ($this->$enableDate) {
	        $str .= ' ['.date('Y-m-d').']';
	    }
	
	    $this->output[] = $str;
	}
	
	public function getOutput() {
	    return impolde("\n", $this->output);	
	}

	// displays the message date
	public function enableDate() {
	   $this->enableDate = true;
	}
	
	// disables the message date 
	public function disableDate() {
	   $this->enableDate = false;
	}
   }
