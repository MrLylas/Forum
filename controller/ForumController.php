<?php
namespace Controller;

use App\Session;
use App\AbstractController;
use App\ControllerInterface;
use Model\Managers\CategoryManager;
use Model\Managers\TopicManager;
use Model\Managers\PostManager;
use Model\Managers\UserManager;

class ForumController extends AbstractController implements ControllerInterface{

    public function index() {
        
        // créer une nouvelle instance de CategoryManager
        $categoryManager = new CategoryManager();
        // récupérer la liste de toutes les catégories grâce à la méthode findAll de Manager.php (triés par nom)
        $categories = $categoryManager->findAll(["categoryName", "DESC"]);
        // le controller communique avec la vue "listCategories" (view) pour lui envoyer la liste des catégories (data)
        return [
            "view" => VIEW_DIR."forum/listCategories.php",
            "meta_description" => "Liste des catégories du forum",
            "data" => [
                "categories" => $categories
            ]
        ];
    }

    public function listTopicsByCategory($id) {

        $topicManager = new TopicManager();
        $categoryManager = new CategoryManager();
        $category = $categoryManager->findOneById($id);
        $topics = $topicManager->findTopicsByCategory($id);

        return [
            "view" => VIEW_DIR."forum/listTopics.php",
            "meta_description" => "Liste des topics par catégorie : ".$category,
            "data" => [
                "category" => $category,
                "topics" => $topics
            ]
        ];
    }

    public function listPostsByTopic($id){

        $postManager = new PostManager();
        // $topicManager = new TopicManager();
        // $topic = $topicManager->findOneById($id);
        $posts = $postManager->findPostByTopics($id);
       
        return [
            "view" => VIEW_DIR."forum/listPosts.php",
            "meta_description" => "Posts List by Topic : "//.$topic->getTopicName()
            ,
            "data" => [
                // "topic" => $topic,
                "posts" => $posts
            ]
        ];
    }

    public function addCategoryForm(){

        return [
            "view" => VIEW_DIR."forum/addCategoryForm.php",
            "meta_description" => "Add Category Form : "
            ]
        ;
    }

    public function addCategory(){

        if(isset($_POST['submit'])){
            add($_POST);
        }
    }
}