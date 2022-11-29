<?php
$name = filter_input(INPUT_POST, 'name');
$email = filter_input(INPUT_POST, 'email');
$phone = filter_input(INPUT_POST, 'phone');
$message = filter_input(INPUT_POST, 'message');

if(!empty($name))
{
    if(!empty($email))
    {
        if(!empty($phone))
        {
            if(!empty($message))
            {

                $host= "localhost";
                $dbusername= "root";
                $dbpassword= "";
                $dbname= "contact1";

                $conn = mysqli_connect($host, $dbusername, $dbpassword,$dbname);
                if(mysqli_connect_error())
                {
                    die("Connect Error" .mysqli_connect_error());
                }
                $sql_query= "INSERT INTO contact101 (Name,Email,PhoneNumber,Message) VALUES ('$name','$email','$phone','$message')";
                            if($conn->query($sql_query))
                {
                    echo "New record is inserted sucessfully";
                }
                else
                {
                    echo "Error:".$sql."".mysqli_error($conn);
                }

            }

            else
            {
            
                echo "Message should not be empty";
                die();
            }

        }



        else
        {
            echo "Phone Number should not be empty";
            die();
        }


    }


    else
    {
        echo "Email should not be empty";
        die();
    }


}



else
{
    echo "Name should not be empty";
    die();
}


mysqli_close($conn);


?>
