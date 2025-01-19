<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="<?= $meta_description ?>">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <script src="https://cdn.tiny.cloud/1/zg3mwraazn1b2ezih16je1tc6z7gwp5yd4pod06ae5uai8pa/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" integrity="sha256-h20CPZ0QyXlBuAw7A+KluUYx/3pK+c7lYEpqLTlxjYQ=" crossorigin="anonymous" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="<?= PUBLIC_DIR ?>/css/style.css">
        <title>FORUM</title>
    </head>
    <body>
        <nav id="top-bar">
            <a href="/">
                <img id="logo-topicoeur" src="public/img/Topicoeur.png" alt="Logo Topicoeur">
            </a>
            <div class="search-bar">
                <input class="search" type="text" placeholder="Search" >
            </div>
            <button id="submit-btn" type="submit"><img src="public/img/MagnifyingGlass.png" alt="Search logo"></button>
            <a href="index.php?ctrl=home&action=users">Voir la liste des gens</a>
            <?php
            if(App\Session::isAdmin()){
                ?>
            <a href="index.php?ctrl=home&action=users">Voir la liste des gens</a>
            <?php } ?>

            <div class="connect">
                <?php
                // si l'utilisateur est connecté 
                if(App\Session::getUser()){
                    ?>
                    <a href="index.php?ctrl=security&action=profile"><span class="fas fa-user"></span>&nbsp;<?= App\Session::getUser()?></a>
                    <a href="index.php?ctrl=security&action=logout">Déconnexion</a>
                    <?php
                }
                else{
                    ?>
                    <a href="index.php?ctrl=security&action=login"><div class="login-btn">Connexion</div></a>
                    <a href="index.php?ctrl=security&action=register"><div class="signin-btn">Inscription</div></a>
                    <?php
                }
                ?>
            </div>
        </nav>
        <div class="container">
            <nav id="side-bar">
                <a href="/"><img src="public/img/Home.png" alt="Home"> Home</a>
                <a href="/"><img src="public/img/Star.png" alt="Popular">Popular</a>
                <a id="cat-list" href="index.php?ctrl=forum&action=index"><img src="public/img/Categories.png" alt="Popular">Categories</a>
                <hr>
                <hr>
                <footer>
                    <p> 
                        <a href="#"><img src="public/img/Rules.png" alt="Home">Our Rules</a>
                        <a href="#"><img src="public/img/PrivacyPolicy.png" alt="Home">Privacy Policy</a>
                        &copy; <?= date_create("now")->format("Y") ?> 
                    </p>
                </footer>
            </nav>
            <div id="wrapper"> 
                <div id="mainpage">
                    <!-- c'est ici que les messages (erreur ou succès) s'affichent-->
                    <h3 class="message" style="color: red"><?= App\Session::getFlash("error") ?></h3>
                    <h3 class="message" style="color: green"><?= App\Session::getFlash("success") ?></h3>
                    <header>
                    </header>
                    
                    <main id="forum">
                        <?= $page ?>
                    </main>
                </div>
            </div>
        </div>
        <script
            src="https://code.jquery.com/jquery-3.4.1.min.js"
            integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
            crossorigin="anonymous">
        </script>
        <script>
            $(document).ready(function(){
                $(".message").each(function(){
                    if($(this).text().length > 0){
                        $(this).slideDown(500, function(){
                            $(this).delay(3000).slideUp(500)
                        })
                    }
                })
                $(".delete-btn").on("click", function(){
                    return confirm("Etes-vous sûr de vouloir supprimer?")
                })
                tinymce.init({
                    selector: '.post',
                    menubar: false,
                    plugins: [
                        'advlist autolink lists link image charmap print preview anchor',
                        'searchreplace visualblocks code fullscreen',
                        'insertdatetime media table paste code help wordcount'
                    ],
                    toolbar: 'undo redo | formatselect | ' +
                    'bold italic backcolor | alignleft aligncenter ' +
                    'alignright alignjustify | bullist numlist outdent indent | ' +
                    'removeformat | help',
                    content_css: '//www.tiny.cloud/css/codepen.min.css'
                });
            })
        </script>
    <script src="<?= PUBLIC_DIR ?>/js/script.js"></script>
    </body>
</html>