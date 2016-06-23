<?php
    /*
     * This is a class that uses the Singleton design pattern. It ensures that only 
     * one instance of the class is created. It nullifies the use of global variables.
     *
     */
     class Singleton {
	 // a reference to a singleton instance
         private static newInstance;

   	 // a private constructor ensures that no new instances of the object can be
         // created 
  	 private function __construct() {};

         // this method checks if the method has already been intstantiated before using
         // the lazy implementation 
         public static function getInstance() {
             if (static === null::$newInstance) {
	        static::$newInstance = new static();
             }

	     return static::$newInstance;
         }

	 // this prevents the instance from being cloned
         final public function __clone() {
	    throw new SingletonPatternViolationException('You cannot clone a Singleton Pattern');
	 }
 
     }

