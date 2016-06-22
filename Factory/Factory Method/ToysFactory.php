<?php
    /*
     * A factory that allows modifications for different types of branches that may create the
     * toy differently. The differnt branches of toy makers can just implement this general Toy 
     * factory in their subclass.
     *
     */ 
    abstract class ToysFactory {
 
       public function produceToy($toyName) {
 	 $toy = null;
	 $toy = $this->createToy($toyName);
	 $toy->prepare();
	 $toy->package();
	 $toy->label();
	
         return $toy;	      
       }
       
       // abstract:  A factory method is abstract so the subclasses are counted on to handle
       //            object creation
       //
       // createToy: A factory method isolates the client from knowing what kind of concrete
       //            Produc is actually created
       //
       // toyName:   A factory method may be paramterized to select several variations of the 
       //            product
       abstract public function createToy($toyName);
    }
