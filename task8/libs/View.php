<?php

class View
{
	private $forRender;
	private $file;

	public function __construct($template)
	{       
		  $this->file = file_get_contents($template);
	}

	public function addToReplace($mArray)
	{
	  foreach($mArray as $key=>$val)
	   {
			$this->forRender[$key] = $val;
	   }
	}

	public function templateRender()
	{
		foreach($this->forRender as $key=>$val)
		{
            $replacedValue = PLACEHOLDER.$key.PLACEHOLDER;
			$this->file = str_replace($replacedValue, $val, $this->file);
		}													
		echo $this->file;
    }
}
