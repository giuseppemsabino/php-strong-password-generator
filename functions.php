<?php 




    $password = '';


    if(isset($_GET['length'])) {
        
        $uppercase = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $lowercase = 'abcdefghijklmnopqrstuvwxyz';
        $numbers = '0123456789';
        $symbols = '!@#$%^&*()_+-=<>?';
    
        $alloptions = $uppercase . $lowercase . $numbers . $symbols;
        // echo $alloptions;
        
        
    
    
        for ($i = 0 ; $i < $_GET['length']; $i++){
            $randomOption= rand(0, strlen($alloptions) - 1);
        $randomUnit= substr($alloptions, $randomOption, 1);
           $password .= $randomUnit;
            
        }
    }

?>