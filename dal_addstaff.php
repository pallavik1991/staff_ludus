<?php
include_once '/config/database.php';
include_once '/objects/staff.php';

$database = new Database();
$db = $database->getConnection();
$staff = new Staff($db);
$msg="";
 
    try{

          if (empty($_POST["param_name"]))  
            $msg.= "Name is required ";
        
        else if (!preg_match ("/^[a-zA-Z\s.]{3,20}$/",$_POST["param_name"]))
              $msg.="Name should be minimum of 3-20 alphabets";
        else
      
              $staff->name=$_POST["param_name"];   
      
    	$staff->gender=$_POST["param_gender"];
        $staff->designation=$_POST["param_designation"];
        $staff->birthdate=$_POST["param_birthdate"];
        $staff->qualification=$_POST["param_qualification"];
        $staff->experience=$_POST["param_exp"];
        $staff->prevschool=$_POST["param_prevschool"];
        $staff->expyears=$_POST["param_expyears"];
        $staff->prevschooladdress=$_POST["param_prevschooladdress"];
        $staff->prevschoolcode=$_POST["param_prevschoolcode"];
        $staff->adhaarno=$_POST["param_adhaar"];
        $staff->bloodgroup=$_POST["param_bloodgp"];
        $staff->address=$_POST["param_address"];
        $staff->mobile=$_POST["param_mobile"];
        $staff->fathername=$_POST["param_fathername"];
        $staff->mothername=$_POST["param_mothername"];
        $staff->fatheradhaar=$_POST["param_fatheradhaar"];
        $staff->motheradhaar=$_POST["param_motheradhaar"];



         if(empty($msg))
        {


        if($staff->create()){
            $msg="Success";
           
        }
    // if unable to create , tell the user
    else{
         $msg= "Unable";
        }
         echo json_encode($msg);
    }
    else
    {
    	 echo json_encode($msg);
    }
    
    }
    catch(Exception $ex)
    {
        $msg=$ex.errorMessage();
    }
    finally{
        //echo $msg;
    }
 
?>
