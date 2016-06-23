<?php 
    /*
     * Commannd interface's purpose is to encapsulate invocation and decoupling. Uses a Command
     * to delegate the method call against the Reciever to execute it. The pattern also features
     * a undo function which reverses the execute method.
     *
     */
     interface CommandInterface {
	// does not care what the execute is, just passes the message along
        public function execute();
     }
