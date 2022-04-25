<?php
var_dump($data);
foreach ($data['users'] as $user){
    echo "INFORMATION:".$user->user_name;
}
require APPROOT . "/views/includes/head.php";
?>
<div id="section-landind">
    <?php
    require APPROOT . "/views/includes/navigation.php"
    ?>
</div>