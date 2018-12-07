<?php

namespace Forteroche\model\admin;

class User{
    private $id;
    private $pseudo;
    private $pass;
    private $email;
    
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
     public function pseudo()

  {

    return $this->_pseudo;

  }

  

  public function pass()

  {

    return $this->_pass;

  }

  

  public function email()

  {

    return $this->_email;

  }
  
  //SETTERS
  public function setId($id)

  {

    

      $this->_id = $id;

    

  }

  

  public function setPseudo($pseudo)

  {

    // On vÃ©rifie qu'il s'agit bien d'une chaÃ®ne de caractÃ¨res.

   

      $this->_pseudo = $pseudo;

    

  }

  

  public function setPass($pass)

  {

    

      $this->_pass = $pass;

    

  }
  
  public function setEmail($email)
  
  {
      
      $this->_email=$email;
  }
  
   
}

