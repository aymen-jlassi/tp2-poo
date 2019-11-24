<?php
include 'dbconnect.class.php';

class etudiant
{
    private $cnx;
    public function __construct()
    {
        $db=new basedonnees;
        $this->cnx = $db->connectdb();
    }
    public function readallstudents()
    { 
        try {
            $req ='SELECT * FROM students';
            $result = $this->cnx->prepare($req);
            $result->execute();
            return $result;
        } catch (Exception $e) {
            echo $e->getMessage();
        
        }
    }
    public function getbyid($id)
    {
        $res="SELECT * FROM students where id=:id";
        $res=$this->cnx->prepare($res);
        $res->bindParam(':id',$id);
        $res->execute();
        return $res;
    }
    public function crateatudiant($firstname, $lastname, $email, $phone)
    {
        try{
            $sql="INSERT into students(firstname,lastname,email,phone) values (:firs, :las ,:email, :phone)";
            $result = $this->cnx->prepare($sql);
            $result->bindParam(":firs",$firstname);
            $result->bindParam(":las",$lastname);
            $result->bindParam(":email",$email);
            $result->bindParam(":phone",$phone);
            $result->execute();
            return $result;
        }catch (PDOException $ex){
            echo $ex->getMessage();
        }
    }
    public function modifetudiant( $id, $firstname, $lastname, $email, $phone)
    {
        try {
            $seq="UPDATE students SET firstname=:firstname, lastname=:lastname, email=:email, phone=:phone WHERE id='$id'";
            $result= $this->cnx->prepare($seq);
            $result->bindParam(':firstname',$firstname);
            $result->bindParam(':lastname',$lastname);
            $result->bindParam(':email',$email);
            $result->bindParam(':phone',$phone);
            $result->execute();
            return $result;
       
        } catch (PDOException $ex) {
            echo $ex->getMessage();
        }


    }
    public function delete($id)
    {
        try {
            $req="DELETE FROM students WHERE id=:id";
            $res= $this->cnx->prepare($req);
            $res->bindParam(':id',$id);
            $res->execute();
            return $res;
        } catch (PDOException $ex) {
            echo $ex->getMessage();
            
        }




    }

    


}
?>