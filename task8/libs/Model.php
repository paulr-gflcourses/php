<?php 

class Model
{ 
    private $array;
    public function __construct()
    {
        $this->array = array('TITLE'=>'Google searcher', 
            'ERRORS'=>'', 'SEARCH_RESULT'=>'');	
    }

    public function getArray()
    {	    
        return $this->array;	
    }

    public function getPage()
    {   
        $search = $_POST['search'];
        try
        {
            $response = $this->search(URL_SEARCH, $search);
            $result = $this->processResponse($response);
            $this->array['SEARCH_RESULT'] = $result;
        }catch(Exception $e)
        {
            $this->array['ERRORS'] = $e->getMessage();
        }

    }    

    private function search($url, $search)
    {
        $ch=curl_init();
        curl_setopt($ch, CURLOPT_URL, $url.$search);
        curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_USERAGENT, USER_AGENT);
        $result = curl_exec($ch);
        $errno = curl_errno($ch);
        $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);
        if ($errno)
        {
            throw new Exception(ERR_CONNECT);
        }else if (200 !== $httpCode)
        {
            throw new Exception(ERR_HTTP_CODE.' Code: '.$httpCode);
        }
        return $result;
    }

    private function processResponse($response)
    {
        $dom = new DOMDocument;
        $dom->loadHTML($response);

        //$divs = $dom->getElementsByTagName("div");
        //echo $divs->saveHTML();
        $html = $dom->saveHTML();
        //$html = '';
        return $html;
    }

}
