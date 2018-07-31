<?php 

class Model
{ 
    private $array;
    public function __construct()
    {
        $this->array = array('%TITLE%'=>'Contact Form', 
            '%ERR_NAME%'=>'', '%ERR_EMAIL%'=>'','%ERR_SUBJECT%'=>'', 
            '%ERR_MESSAGE%'=>'', '%ERR_SENDING%'=>'',
            '%NAME%'=>'', '%EMAIL%'=>'', '%SUBJECT%'=>'', '%MESSAGE%'=>'');	
    }

    public function getArray()
    {	    
        return $this->array;	
    }

    public function checkForm() 
    {
        $isValid=true;
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];
        $subject = $_POST['subject'];
        if (!$name)
        {
            $this->array['%ERR_NAME%'] = ERR_NAME;
            $isValid=false;
        } 
        if ((!$email)||(!filter_var($email, FILTER_VALIDATE_EMAIL)))
        {
            $this->array['%ERR_EMAIL%'] = ERR_EMAIL;
            $isValid=false;

        }
        if (!$subject)
        {
            $this->array['%ERR_SUBJECT%'] = ERR_SUBJECT;
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
            $this->array['%SUBJECT%'] = $subject;
            $this->array['%MESSAGE%'] = $message;
        }
        return $isValid;			
    }

    public function sendEmail()
    {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];
        $subject = $_POST['subject'];

        $ip = $_SERVER['REMOTE_ADDR'];
        $time = $_POST['time'];

        $to = ADMIN_MAIL;
        $headers = "From: $email\r\n";
        $headers .= "Reply-To: $email\r\n";
        $mailMessage = "
            name: $name\r\n
            email: $email\r\n
            subject: $subject\r\n
            message: $message\r\n 
            _______\r\n
            client IP: $ip\r\n
            client time: $time\r\n"; 

        if (!mail($to, $subject, $mailMessage, $headers))
        {
            $this->array['%NAME%'] = $name;
            $this->array['%EMAIL%'] = $email;
            $this->array['%SUBJECT%'] = $subject;
            $this->array['%MESSAGE%'] = $message;
            $this->array['%ERR_SENDING%'] = ERR_SENDING;
        }
    }		
}
