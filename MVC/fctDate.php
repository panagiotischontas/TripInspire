<?php

function getDateFormat($data,$format){

    $frontCheck = strpos($data,'.');
    $wizzCheck = strpos($data,'-');
    $kiwiCheck = strpos($data,'/');

    if($frontCheck){
        $zi = strtok($data, ".");
        $luna = strtok(".");
        $an = strtok(".");
    }
    else if($wizzCheck){
        $an = strtok($data, "-");
        $luna = strtok("-");
        $zi = strtok("-");
    }
    else if($kiwiCheck){
        $zi = strtok($data, "/");
        $luna = strtok("/");
        $an = strtok("/");
    }
    else{
        $an = '20'.substr($data,0,2);
        $luna = substr($data,2,2);
        $zi = substr($data,4,2);
    }
    switch($format){
        case "wizz":
            return $an.'-'.$luna.'-'.$zi;
        case "kiwi":
            return $zi.'/'.$luna.'/'.$an;
        case "sky":
            return substr($an,2).$luna.$zi;
        default:
            echo "Format adaugat invalid";
    }
}

 ?>
