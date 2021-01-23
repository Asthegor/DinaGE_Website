<?php

class File
{
    public $LastVersion;
    public $Count;

}

class Files
{
    private $CounterPath = './counters/';
    private $FilesPath = './files/';


    public function getNbDownloads($FileName = null)
    {
        if ($FileName == null)
            return 0;
        
        $count = 0;
        $counterFileName = $CounterPath.$FileName.'_counter.txt';
        if (file_exists($counterFileName))
        {
            $fp = fopen($counterFileName, "r");
            $count = fread($fp, 1024);
            fclose($fp);
        }
        else
        {
            $fp = fopen($counterFileName, "w+");
            fwrite($fp, $count);
            fclose($fp);
        }
        return $count;
    }

    public function getFiles()
    {

    }

}
?>