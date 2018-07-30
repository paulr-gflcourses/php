<?php 

class Model
{ 
    private $array;
   public function __construct()
   {
        //$this->array = array('%TITLE%'=>'Contact Form', '%ERRORS%'=>'Empty field', '%ERRNAME%'=>'', '%ERRMAIL%'=>'','%ERRSUBJECT%'=>'', '%ERRMSG%'=>'', '%NAME%'=>'', '%EMAIL%'=>'', '%SUBJECT%'=>'', '%MESSAGE%'=>'');	
       $this->array = array('%TITLE%'=>'Contact Form', '%ERR_NAME%'=>'',
           '%ERR_EMAIL%'=>'','%ERR_SUBJECT%'=>'', '%ERR_MESSAGE%'=>'', 
           '%NAME%'=>'', '%EMAIL%'=>'', '%SUBJECT%'=>'', '%MESSAGE%'=>'');	
   }
   	
	public function getArray()
   {	    
		return $this->array;	
   }
	
	public function checkForm() {
        $isValid=true;
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];
        $subject = $_POST['subject'];
        //echo "$name, $email, $message, $subject";
        if (!$name)
        {
            $this->array['%ERR_NAME%'] = ERR_NAME;
            $isValid=false;
        } 
        if (!$email)
        {
            $this->array['%ERR_EMAIL%'] = ERR_EMAIL;
            $isValid=false;

        }
        if ((!$message)||(strlen($message)<5))
        {
            $this->array['%ERR_MESSAGE%'] = ERR_MESSAGE;
            $isValid=false;
        }

        if (!$isValid)
        {
            $this->array['%NAME%'] = $name;
            $this->array['%EMAIL%'] = $email;
            $this->array['%MESSAGE%'] = $message;
        }
		return $isValid;			
	}
   
	public function sendEmail()
	{
		// return mail()
        echo "<strong>mail have sent!<strong>";
	}		
}
