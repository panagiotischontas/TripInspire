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

//teste

echo getDateFormat("20.08.2019","wizz");
echo '<br>';
echo getDateFormat("20.08.2019","kiwi");
echo '<br>';
echo getDateFormat("20.08.2019","sky");

echo '<br>';echo '<br>';


echo getDateFormat("20/08/2019","wizz");
echo '<br>';
echo getDateFormat("20/08/2019","kiwi");
echo '<br>';
echo getDateFormat("20/08/2019","sky");

echo '<br>';echo '<br>';

echo getDateFormat("2019-08-20","wizz");
echo '<br>';
echo getDateFormat("2019-08-20","kiwi");
echo '<br>';
echo getDateFormat("2019-08-20","sky");

echo '<br>';echo '<br>';

echo getDateFormat("190820","wizz");
echo '<br>';
echo getDateFormat("190820","kiwi");
echo '<br>';
echo getDateFormat("190820","sky");

?>