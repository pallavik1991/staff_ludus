<?php
include_once '/config/database.php';
include_once '/objects/staff.php';

$database = new Database();
$db = $database->getConnection();
$staff = new Staff($db);
$msg="";
$date=date('Y-m-d');
 
    try{

          if (empty($_POST["param_name"]))  
            $msg.= " Name is required ";
        
        else if (!preg_match ("/^[a-zA-Z\s.]{3,20}$/",$_POST["param_name"]))
              $msg.="<br> Name should be minimum of 3-20 alphabets";
        else
      
              $staff->name=$_POST["param_name"];   
      
    	$staff->gender=$_POST["param_gender"];
        $staff->designation=$_POST["param_designation"];

        if (empty($_POST["param_birthdate"]))  
            $msg.= "<br> Birth Date is required ";
        else if ($_POST["param_birthdate"]>=$date)
              $msg.="<br> Enter Valid Birthdate";
        else  
            $staff->birthdate=$_POST["param_birthdate"];

        if (empty($_POST["param_qualification"]))  
            $msg.= "<br> Qualification is required ";
        else 
            $staff->qualification=$_POST["param_qualification"];

        if (empty($_POST["param_adhaar"]))  
            $msg.= "<br> Aadhaar Number is required ";
        else 
            $staff->adhaarno=$_POST["param_adhaar"];

        if (empty($_POST["param_address"]))  
            $msg.= "<br> Address is required ";
        else 
            $staff->address=$_POST["param_address"];

            $staff->bloodgroup=$_POST["param_bloodgp"];

        if (empty($_POST["param_mobile"]))  
            $msg.= "<br> Mobile Number is required ";
        else if (!preg_match ("/^[0-9]{10}$/",$_POST["param_mobile"]))
              $msg.="Mobile number should contain only 10 digits";
        else
              $staff->mobile=$_POST["param_mobile"];

        if (empty($_POST["param_fathername"]))  
            $msg.= "<br> Father Name is required ";
        
        else if (!preg_match ("/^[a-zA-Z\s.]{3,20}$/",$_POST["param_fathername"]))
              $msg.="<br> Father Name should be minimum of 3-20 alphabets";
        else
              $staff->fathername=$_POST["param_fathername"];

        if (empty($_POST["param_mothername"]))  
            $msg.= "<br> Mother Name is required ";
        
        else if (!preg_match ("/^[a-zA-Z\s.]{3,20}$/",$_POST["param_mothername"]))
              $msg.="<br> Mother Name should be minimum of 3-20 alphabets";
        else
              $staff->mothername=$_POST["param_mothername"];

        if (empty($_POST["param_fatheradhaar"]))  
            $msg.= "<br> Father Aadhaar Number is required ";
        
        else  
            $staff->fatheradhaar=$_POST["param_fatheradhaar"];

        if (empty($_POST["param_motheradhaar"]))  
            $msg.= "<br> Mother Aadhaar Number is required ";
        
        else
            $staff->motheradhaar=$_POST["param_motheradhaar"];

        $staff->experience=$_POST["param_exp"];

        if($staff->experience=='Y'){
        if (empty($_POST["param_prevschool"]))  
            $msg.= "<br> Previous School Name is required ";
        
        else if (!preg_match ("/^[a-zA-Z\s.]{3,100}$/",$_POST["param_prevschool"]))
              $msg.="<br> School Name should be minimum of 3 alphabets";
        else
             $staff->prevschool=$_POST["param_prevschool"];

         if (empty($_POST["param_expyears"]))  
            $msg.= "<br> Experience years is required ";
        
        else if ($_POST["param_expyears"]<0 || $_POST["param_expyears"]>45)
              $msg.="<br> Enter Valid Experience";
        else
              $staff->expyears=$_POST["param_expyears"];

        if (empty($_POST["param_prevschooladdress"]))  
            $msg.= "<br> Previous School Address is required ";
        
        else if (!preg_match ("/^[a-zA-Z\s.]{3,200}$/",$_POST["param_prevschool"]))
              $msg.="<br> School Address should be minimum of 3 alphabets";
        else
              $staff->prevschooladdress=$_POST["param_prevschooladdress"];
        
        if (empty($_POST["param_prevschoolcode"]))  
            $msg.= "<br> Previous School Code Address is required ";
        
        else
        $staff->prevschoolcode=$_POST["param_prevschoolcode"];
        }


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
