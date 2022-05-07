<?php
class Inscription implements IModel{
    private DateTime $dateIns;
    private string $annee;

    public function insert(){
        $sql="insert into inscriptions(dateIns,annee) value({$this->dateIns},{$this->annee})";
    }
    public function update(){
        $sql="update users set dateIns={$this->dateIns},annee={$this->annee} where id={$this->id}";
    }
    public static function selectAll(){
        $sql="select * from inscriptions";
    }
    public static function delete(int $id){
        $sql="delete from inscriptions where id={$id}";
    } 
    public static function selectById(int $id){
        $sql="select * from inscriptions where id={$id}";
    }
    //les attributs navigationnels
    //many to one avec classe
    private Classe $classe;
    public function classe():Classe{
        $sql="select c.* from inscriptions i,classes c where c.id=i.classe_id and i.id={$this->id}";
        return new Classe();
    }
    //many to one avec Etudiant
    private Etudiant $etudiant;
    public function etudiant():Etudiant{
        $sql="select c.* from inscriptions i,etudiants e where e.id=i.etudiant_id and i.id={$this->id}";
        return new Etudiant();
    }

    public function __construct(){}

    /**
     * Get the value of dateIns
     */ 
    public function getDateIns()
    {
        return $this->dateIns;
    }

    /**
     * Set the value of dateIns
     *
     * @return  self
     */ 
    public function setDateIns($dateIns)
    {
        $this->dateIns = $dateIns;

        return $this;
    }

    /**
     * Get the value of annee
     */ 
    public function getAnnee()
    {
        return $this->annee;
    }

    /**
     * Set the value of annee
     *
     * @return  self
     */ 
    public function setAnnee($annee)
    {
        $this->annee = $annee;

        return $this;
    }

    /**
     * Get the value of classe
     */ 
    public function getClasse()
    {
        return $this->classe;
    }

    /**
     * Set the value of classe
     *
     * @return  self
     */ 
    public function setClasse($classe)
    {
        $this->classe = $classe;

        return $this;
    }

     /**
      * Get the value of etudiant
      */ 
     public function getEtudiant()
     {
          return $this->etudiant;
     }

     /**
      * Set the value of etudiant
      *
      * @return  self
      */ 
     public function setEtudiant($etudiant)
     {
          $this->etudiant = $etudiant;

          return $this;
     }
}