<?php 
//error_function(error_level,error_message,error_file,error_line,error_context)
    function customError($errno, $errstr) {
        echo "<b>Error:</b> [$errno] $errstr<br>";
        //echo "Ending Script";
        die();
    }
    
    //set error handler
    set_error_handler("customError",E_USER_WARNING);
    
    //trigger error
    //echo($test);
    
    //enother ex
    $test = 2;
    if($test >=1){
        trigger_error("Value must be 1 or below", E_USER_WARNING);
    }
?>