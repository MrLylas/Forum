<?php 
    // $topics = $result["data"]['topics'];   
    $posts = $result["data"]['posts']; 
    ?>

<h1>Liste des post</h1>


<?php
if($posts){
foreach($posts as $post){ ?>
    <p><?= $post->getPostText() ?></p>
<?php }}else{
    echo "There's nothing here m8";
}
