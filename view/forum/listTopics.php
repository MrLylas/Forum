<?php
    $category = $result["data"]['category']; 
    $topics = $result["data"]['topics'];   
?>

<h1>Liste des topics</h1>


<?php
if ($topics){
    foreach($topics as $topic ){ ?>
        <a class="topic-link" href="index.php?ctrl=forum&action=listPostsByTopic&id=<?= $topic->getId() ?>">
            <div class="topic-card">
                <p><?= $topic ?> par <?= $topic->getUser() ?></p><br>
                <?= $topic->getTopicText() ?><br><br>
                <?= $topic->getTopicDate() ?><br>
                <i class="fa-regular fa-heart"></i>
                <i class="fa-regular fa-comment"></i>
            </div>
        </a>
    <?php }
}else{
    echo "There's nothing here m8";
}