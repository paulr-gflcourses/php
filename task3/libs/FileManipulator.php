<?php
class FileManipulator{


    private $file;
    private $fname;

    function __construct($fname)
    {
        $errors=[];
        if(file_exists(FILE_DIR.$fname))
        {
            $this->file = file(FILE_DIR.$fname);
            $this->fname = $fname;
        }else
        {
            throw new Exception("$fname: ".ERR_FILE_NOT_FOUND);
        }
    }

    function getStringFromFile($snum)
    {
        if (!$this->isValidLineNum($snum))
        {
            throw new Exception("$this->fname: ".ERR_FILE_OFFSET_LINE." (line $snum)");
        }
        return $this->file[$snum];
    }


    function getCharFromFile($snum, $cnum)
    {
        $line = $this->getStringFromFile($snum);
        if (!$this->isValidCharNum($line, $cnum))
        {
            throw new Exception("$this->fname: ".ERR_FILE_OFFSET_CHAR." (char $cnum on line $snum)");
        }
        return $line[$cnum];
    }

    function changeStringFromFile($snum, $line)
    {
        if (!$this->isValidLineNum($snum))
        {
            throw new Exception("$this->fname: ".ERR_FILE_WRITING_LINE." (line $snum)");
        }
        return $this->file[$snum]=$line."\n";
    }

    function changeCharFromFile($snum, $cnum, $char)
    {
        if (!$this->isValidLineNum($snum)||!$this->isValidCharNum($this->file[$snum], $cnum))
        {
            throw new Exception("$this->fname: ".ERR_FILE_WRITING_CHAR." (char $cnum on line $snum)");
        }
        return $this->file[$snum][$cnum] = $char;
    }

    function isValidLineNum($snum)
    {
        return is_numeric($snum)&& $snum>=0 && $snum<count($this->file);
    }

    function isValidCharNum($line, $cnum)
    {
            return is_numeric($cnum) && $cnum>=0 && $cnum<strlen($line);
    }

    function saveFile()
    {
        if (is_writable(FILE_DIR))
        {
            $success = file_put_contents(FILE_DIR.FNAME_CHANGED, $this->file);
            if (!$success)
            {
                throw new Exception(FNAME_CHANGED.": ".ERR_FILE_WRITING);
            }
        }else
        {
            throw new Exception(FILE_DIR.": ".ERR_FILEDIR_NOT_WRITABLE);
        }
    }

    function printFileByString()
    {
        $filePrintedLines = ''; 
        for ($snum=0; $snum<count($this->file); $snum++)
        {
            $filePrintedLines .= $this->getStringFromFile($snum); 
        }
        return $filePrintedLines;
    }

    function printFileByChar(){
        $filePrintedChars = '';
        for ($snum=0; $snum<count($this->file); $snum++)
        {
            for ($cnum=0;$cnum<strlen($this->file[$snum]);$cnum++)
            {
                $filePrintedChars .= $this->getCharFromFile($snum, $cnum); 
            }
        }
        return $filePrintedChars;
    }

}
?>
