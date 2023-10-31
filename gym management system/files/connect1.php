<?php
$name=filter_input(INPUT_POST , 'name');
$mno=filter_input(INPUT_POST , 'mno');
$mail=filter_input(INPUT_POST , 'mail');
$phone=filter_input(INPUT_POST , 'phone');

if(!empty($name)){
    if(!empty($mno)){
        if(!empty($mail)){
        if(!empty($phone)){
            $host = "localhost" ;
            $dbusername= "root" ;
            $dbpassword= "" ;
            $dbname= "admission" ;
            $conn= new mysqli ($host ,   $dbusername ,  $dbpassword ,  $dbname) ;
            if(mysqli_connect_error()){
                die('Connect Error (' . mysqli_connect_errno() . ')' . mysqli_connect_error());
            }
            else{
                $sql="INSERT INTO user (name, mno, mail,phone)values('$name' , '$mno' , '$mail' , '$phone')";
                if($conn -> query($sql)){
                    echo "New records inserted successfully" ;
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

?>