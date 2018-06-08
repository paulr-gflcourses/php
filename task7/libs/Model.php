<?php 

class Model
{ 
    private $array;
   public function __construct()
   {
        $this->array = array('%TITLE%'=>'Contact Form', '%ERRORS%'=>'Empty field', '%ERRNAME%'=>'', '%ERRMAIL%'=>'','%ERRSUBJECT%'=>'', '%ERRMSG%'=>'', '%NAME%'=>'', '%EMAIL%'=>'', '%SUBJECT%'=>'', '%MESSAGE%'=>'');	
   }
   	
	public function getArray()
   {	    
		return $this->array;	
   }
	
	public function checkForm() {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];
        $subject = $_POST['subject'];
        echo "$name, $email, $message, $subject";
        if (!$name)
        {
            $this->array['%ERRNAME%'] = 'Name cannot be empty!';
        } 
        if (!$email)
        {
            $this->array['%ERRMAIL%'] = 'E-mail cannot be empty!';
        }
        if ((!$message)||(strlen($message)<5))
        {
            $this->array['%ERRMSG%'] = 'Message cannot contain less than 5 symbols!';
            $this->array['%MESSAGE%'] = $message;
        }
		return true;			
	}
   
	public function sendEmail()
	{
		// return mail()
        echo "<strong>mail have sent!<strong>";
	}		
}
