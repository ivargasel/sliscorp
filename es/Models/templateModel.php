<?php
class templateModelClass
{
    public static function linkModel($link)
    {
        if (
            $link == "Home" ||
            $link == "Solutions" ||
            $link == "Fintech" || 
            $link == "Digital-Financial" ||
            $link == "Customer-Value" || 
            $link == "Contact" || 
            $link == "Blockchain" ||
            $link == "Covered-Processes") 
        {
            $response = "Views/".$link.".php";
        } 
        else if ($link == "index.php") {
            $response = "index.php";
        } 
        else {
            $response = "index.php";
        }

        return $response;
    }
}