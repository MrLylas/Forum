<?php 
    // $topics = $result["data"]['topics'];   
    $users = $result["data"]['user']; 
    ?>

<h1>Liste des post</h1>


<?php
foreach($users as $user){ ?>
    <p><?= $user->users() ?></p>
<?php }
