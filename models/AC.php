<?php 
//RP herite de User
class AC extends User{
   
    public function __construct()
    {
        $this->role="ROLE_AC";
    }
    
       /**
       * Set the value of role
       *
       * @return  self
       */ 
       public function setRole($role)
        {
            return $this;
        }
}