<?php
namespace Model\Entities;

use App\Entity;

/*
    En programmation orientée objet, une classe finale (final class) est une classe que vous ne pouvez pas étendre, c'est-à-dire qu'aucune autre classe ne peut hériter de cette classe. En d'autres termes, une classe finale ne peut pas être utilisée comme classe parente.
*/

final class Topic extends Entity{

    private $id;
    private $topicName;
    private $topicText;
    private $user;
    private $category;
    private $topicDate;
    private $closed;

    public function __construct($data){         
        $this->hydrate($data);        
    }

    /**
     * Get the value of id
     */ 
    public function getId(){
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id){
        $this->id = $id;
        return $this;
    }

        /**
     * Get the value of id
     */ 
    public function getTopicName(){
        return $this->topicName;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setTopicName($topicName){
        $this->topicName = $topicName;
        return $this;
    }

    /**
     * Get the value of user
     */ 
    public function getUser(){
        return $this->user;
    }

    /**
     * Set the value of user
     *
     * @return  self
     */ 
    public function setUser($user){
        $this->user = $user;
        return $this;
    }

    
    /**
     * Get the value of category
     */ 
    public function getCategory()
    {
        return $this->category;
    }
    
    /**
     * Set the value of category
     *
     * @return  self
     */ 
    public function setCategory($category)
    {
        $this->category = $category;
        
        return $this;
    }
    /**
     * Get the value of topicDate
     */ 
    public function getTopicDate()
    {
        return $this->topicDate;
    }

    /**
     * Set the value of topicDate
     *
     * @return  self
     */ 
    public function setTopicDate($topicDate)
    {
        $this->topicDate = $topicDate;

        return $this;
    }
    /**
     * Get the value of closed
     */ 
    public function getClosed()
    {
        return $this->closed;
    }

    /**
     * Set the value of closed
     *
     * @return  self
     */ 
    public function setClosed($closed)
    {
        $this->closed = $closed;

        return $this;
    }
    /**
     * Get the value of topicText
     */ 
    public function getTopicText()
    {
        return $this->topicText;
    }

    /**
     * Set the value of topicText
     *
     * @return  self
     */ 
    public function setTopicText($topicText)
    {
        $this->topicText = $topicText;

        return $this;
    }
    public function __toString(){

        return $this->topicName;
        
    }



}