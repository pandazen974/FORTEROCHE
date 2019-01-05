<?php

namespace Forteroche\model\blog;

class Post{
    private $id;
    private $title;
    private $content;
    private $postDate;
    
public function __construct(array $donnees)
  {
    $this->hydrate($donnees);
  }
    
public function hydrate(array $donnees)
{
  foreach ($donnees as $key => $value)
  {
    
    $method = 'set'.ucfirst($key);
        
    
    if (method_exists($this, $method))
    {
      
      $this->$method($value);
    }
  }
}

//GETTERS
     public function id()

  {

    return $this->_id;

  }

  

  public function title()

  {

    return $this->_title;

  }

  

  public function content()

  {

    return $this->_content;

  }
  
  public function postDate()
          
  {
      
      return $this->_postDate;
  }


  
    
//SETTERS
  public function setId($id)

  {
      $this->_id = $id;
  }

  

  public function setTitle($title)

  {
      $this->_title = $title;
  }

  

  public function setContent($content)

  {
      $this->_content = $content;
  }

   public function setPostDate($postDate)
 
  { 
      $this->_postDate= $postDate;  
  }
  


}

