<?php

namespace Forteroche\blog;

class Post{
 // attributs
    private $id;
    private $title;
    private $content;
    
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

  

  public function title()

  {

    return $this->_title;

  }

  

  public function content()

  {

    return $this->_content;

  }

  
    
//SETTERS
  public function setId($id)

  {

    

      $this->_id = $id;

    

  }

  

  public function setTitle($title)

  {

    // On vÃ©rifie qu'il s'agit bien d'une chaÃ®ne de caractÃ¨res.

   

      $this->_title = $title;

    

  }

  

  public function setContent($content)

  {

    

      $this->_content = $content;

    

  }

  


}

