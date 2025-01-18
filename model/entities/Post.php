<?php
namespace Model\Entities;

use App\Entity;

/*
    En programmation orientée objet, une classe finale (final class) est une classe que vous ne pouvez pas étendre, c'est-à-dire qu'aucune autre classe ne peut hériter de cette classe. En d'autres termes, une classe finale ne peut pas être utilisée comme classe parente.
*/

final class Post extends Entity{

    private $id;
    private $postText;
    private $postDate;
    private $user;
    private $topic;

    public function __construct($data){         
        $this->hydrate($data);        
    }
    
    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of postText
     */ 
    public function getPostText()
    {
        return $this->postText;
    }

    /**
     * Set the value of postText
     *
     * @return  self
     */ 
    public function setPostText($postText)
    {
        $this->postText = $postText;

        return $this;
    }

    /**
     * Get the value of postDate
     */ 
    public function getPostDate()
    {
        return $this->postDate;
    }

    /**
     * Set the value of postDate
     *
     * @return  self
     */ 
    public function setPostDate($postDate)
    {
        $this->postDate = $postDate;

        return $this;
    }
    /**
     * Get the value of user
     */ 
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set the value of user
     *
     * @return  self
     */ 
    public function setUser($user)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get the value of topic
     */ 
    public function getTopic()
    {
        return $this->topic;
    }

    /**
     * Set the value of topic
     *
     * @return  self
     */ 
    public function setTopic($topic)
    {
        $this->topic = $topic;

        return $this;
    }
    public function __toString(){

        return $this->postText;
        
    }

}