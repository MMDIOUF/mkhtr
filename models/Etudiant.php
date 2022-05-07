<?php
class Etudiant extends User{
        
    private string $nomComplet;
    private string $matricule;

           
        public array $inscriptions=[];
        public function inscriptions():array{
            return [];
            }

        
    
    public function __construct(){
         
    }

    
public function setNomComplet(string $nomComplet):void{
    $this->nomComplet=$nomComplet;
}
public function setMatricule(string $matricule):void{
    $this->matricule=$matricule;
}
public function getNomComplet():string{
    return $this->nomComplet;
}
public function getMatricule():string{
    return $this->matricule;
}
public function getInscriptions()
{
    return $this->inscriptions;
}
public function setInscriptions($inscriptions)
{
    $this->inscriptions = $inscriptions;

        return $this;
}
}
        