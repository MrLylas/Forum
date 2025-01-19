<?php 
    // $topics = $result["data"]['topics'];   
    $users = $result["data"]['posts']; 
    ?>

<h1>Liste des post</h1>


<?php
foreach($users as $user){ ?>
    <p><?= $user->getuserNickName() ?></p>
<?php }
