



<?php

        $Fname = $_POST["Fname"];
        $Lname = $_POST["Lname"];
        $dob = $_POST["dob"];
        $IDn = $_POST["IDn"];
        $address = $_POST["address"];
        $registration = $_POST["registration"];
        $mobile = $_POST["mobile"];
        $information = $_POST["information"];
        
        if(!empty($Fname) && strlen($Fname) >= 2 && strlen($Fname) <= 20){
            if(!empty($Lname) && strlen($Lname) >= 3 && strlen($Lname) <= 50){
                if(!empty($dob)){
                    if(!empty($IDn) && strlen($IDn) == 11 && is_numeric($IDn)){
                        if(!empty($address) && strlen($address) <= 70){
                            echo "First Name:", $Fname, "<br>";
                            echo "Last Name:", $Lname, "<br>";
                            echo "Date of Birth:", $dob, "<br>";
                            echo "ID Number:", $IDn, "<br>";
                            echo "Address:", $address, "<br>";
                            echo "Registration Date:", $registration, "<br>";
                            echo "Mobile Number:", $mobile, "<br>";
                            echo "Additional Information:", $information, "<br>";
                        }else {
                            echo "Please correct the mistakes and try again.";
                        }
                    }else {
                        echo "Please correct the mistakes and try again.";
                    }
                }else {
                    echo "Please correct the mistakes and try again.";
                }
            }else {
                echo "Please correct the mistakes and try again.";
            }
        } else {
            echo "Please correct the mistakes and try again.";
        }
    ?>