<?php
$input = $argv[1];
function countdown($input){
    if(!is_numeric($input)){
        throw new exception("Wel een nummer in tikken.");
        exit;
    }
        if ($input < 0 || $input > 10) {
            throw new Exception("je kan aleen een getal tussen 0 - 10 gebruiken.", 1);
    } 
    for ($i=$input; $i >= 0 ; $i--) { 
        echo $i . " Seconden\n";
        }
}
try{
    echo countdown($input);
}
catch(exception $error){
error_log($error, 3, "error.log");
    echo ''.$error->getMessage();
    exit;
}
echo $input . ' is goed BOB.';
exit;