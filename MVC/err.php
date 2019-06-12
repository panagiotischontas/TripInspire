<?php

function shutDownFunction() {
    $error = error_get_last();
    // fatal error, E_ERROR === 1
    if ($error['type'] === E_ERROR) {
        //do your stuff
        echo "EROARE!!";
    }
}
register_shutdown_function('shutDownFunction');


 ?>
