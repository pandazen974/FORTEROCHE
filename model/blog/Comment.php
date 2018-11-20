<?php

namespace Forteroche\model\blog;

class Comment{
 // attributs
    private $id;
    private $postId;
    private $author;
    private $comment_date;
    
public function __construct(array $donnees)
  {
    $this->hydrate($donnees);
  }
    
public function hydrate(array $donnees)
{
  foreach ($donnees as $key => $value)
  {
    // On rÃ©cupÃ¨re le nom du setter correspondant Ã  l'attribut.
    $method = 'set'.ucfirst($key);
        
    // Si le setter correspondant existe.
    if (method_exists($this, $method))
    {
      // On appelle le setter.
      $this->$method($value);
    }
  }
}

//GETTERS
     public function id()

  {

    return $this->_id;

  }

  

  public function postId()

  {

    return $this->_postId;

  }

  

  public function author()

  {

    return $this->_author;

  }
  
  public function comment()
  {
      
    return $this->_comment;
      
  }
  
  public function commentDate()
  {
    return $this->_commentDate;
  }

  
    
//SETTERS
  public function setId($id)

  {

    

      $this->_id = $id;

    

  }

  

  public function setPostId($postId)

  {

    // On vÃ©rifie qu'il s'agit bien d'une chaÃ®ne de caractÃ¨res.

   

      $this->_postId = $postId;

    

  }

  

  public function setAuthor($author)

  {

    

      $this->_author = $author;

    

  }
  
  public function setComment($comment)
  
  {
      
      $this->_comment=$comment;
  }
  
  public function setCommentDate($commentDate)
          
  {
      
      $this->_commentDate=$commentDate;
  }
  
    
}
