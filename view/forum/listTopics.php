<?php
    $category = $result["data"]['category']; 
    $topics = $result["data"]['topics'];  
?>

<h1>Liste des topics</h1>

<?php
foreach($topics as $topic ){ ?>
    <div class="topic-card">
    <p><a href="#"><?= $topic ?></a> par <?= $topic->getUser() ?></p><br>
        <?= $topic->getTopicText() ?><br><br>
        <?= $topic->getTopicDate() ?>
    </div>
<?php }
