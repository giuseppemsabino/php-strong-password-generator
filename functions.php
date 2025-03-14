<?php 



function passwordCreator() {
    $password = '';
    for ($i = 0; $i < 8; $i++) {
        $password .= rand(0, 9);
    }
    return $password;
}

?>