<?php 

class Model
{ 
    private $array;
   public function __construct()
   {
        $this->array = array('%TITLE%'=>'Contact Form', '%ERRORS%'=>'Empty field');	
   }
   	
	public function getArray()
   {	    
		return $this->array;	
   }

    public function getPage($url,$search)
    {   
        $ch = curl_init($url);
        curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
        $result = curl_exec($ch);
        echo $result;
        curl_close($ch);
        
    }    
   
}
