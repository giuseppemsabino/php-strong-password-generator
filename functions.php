<?php 




    $password = '';


    if(isset($_GET['length'])) {
        
        $letters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';
        $numbers = '0123456789';
        $symbols = '!@#$%^&*()_+-=<>?';

        $alloptions = '';


        if(isset($_GET['letters']) && $_GET['letters'] == 'on'){
            $alloptions .= $letters;
        }
        if(isset($_GET['numbers']) && $_GET['numbers'] == 'on'){
            $alloptions .= $numbers;
        } if(isset($_GET['symbols']) && $_GET['symbols'] == 'on'){
            $alloptions .= $symbols;
        }

      
    
        // $alloptions = $letters . $numbers . $symbols;
        // echo $alloptions;
        
        
    
    
        for ($i = 0 ; $i < $_GET['length']; $i++){
            $randomOption= rand(0, strlen($alloptions) - 1);
        $randomUnit= substr($alloptions, $randomOption, 1);
           $password .= $randomUnit;
            
        }
    }

?>