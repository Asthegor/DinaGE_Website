<?php

class ToolsModel extends Model
{
    public function Index()
    {
        return array_reverse(glob("files/tools/*.zip"));
    }

}
?>