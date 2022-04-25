<?php
var_dump($data);
foreach ($data['users'] as $user){
    echo "INFORMATION:".$user->user_name;
}
?>