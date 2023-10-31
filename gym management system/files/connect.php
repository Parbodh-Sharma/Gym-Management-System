<?php
$fname=filter_input(INPUT_POST , 'fname');
$email=filter_input(INPUT_POST , 'email');
$number=filter_input(INPUT_POST , 'number');
$contact=filter_input(INPUT_POST , 'contact');
$message=filter_input(INPUT_POST , 'message');
if(!empty($fname)){
    if(!empty($email)){
        if(!empty($number)){
        if(!empty($contact)){
            if(!empty($message)){
            $host = "localhost" ;
            $dbusername= "root" ;
            $dbpassword= "" ;
            $dbname= "contactus" ;
            $conn= new mysqli ($host ,   $dbusername ,  $dbpassword ,  $dbname) ;
            if(mysqli_connect_error()){
                die('Connect Error (' . mysqli_connect_errno() . ')' . mysqli_connect_error());
            }
            else{
                $sql="INSERT INTO registrations (fname, email, number, contact,message)values('$fname' , '$email' , '$number' , '$contact', '$message' )";
                if($conn -> query($sql)){
                    echo "New record inserted successfully......" ;
                } 
                else{
                    echo "Error: " . $sql . "<br>" . $conn -> error ;
                }
                $conn -> close();
            }
        }
        else{
            echo "Name should not be empty" ; 
            die();
        }
    }
    else{
        echo "Email should not be empty" ;
    }

}
}
}
?>