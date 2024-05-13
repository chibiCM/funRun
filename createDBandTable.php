<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <style>
        .centerhere{
            display: flex;
            justify-content: center;
            align-items: center;
            align-content: center;
            flex-wrap: nowrap;
        }

        .centerhereholder {
            height: 100vh;
            display: flex;
             align-items: center;
        }

        #id-createDBandTBL{
            width: 200px;
            background-color: limegreen;
            height: 100px;
            font-size: 25px;
            border-radius: 25px;
            cursor: pointer;
        }

        form{
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;   
        }
    </style>
</head>
<body>



<div class="centerhere w-100 h-100">
    <div class="centerhereholder w-80 h-80">
        <form method="post">
        <p center="text-center">Please ensure Apache and MySQL are started on xampp</p>
        <input type="submit" name="createDBandTBL" id="id-createDBandTBL" value="Create">
        </form>
    </div>
</div>

<?php




if(isset($_POST['createDBandTBL']))
{
    $servername = "localhost";
    $username = "root";
    $password = "";
    //
    
    
    // Create connection
    

//
    $createdbSQL = "CREATE DATABASE db_samplethis;";

    $dbname = "db_samplethis";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->query($createdbSQL) === TRUE) {
        echo "Database created successfully";
      } else {
        echo "Error: " . $createdbSQL . "<br>" . $conn->error;
      }

    $createtblSQL = "CREATE TABLE tbl_runforearth(
    runnerID INT(11) AUTO_INCREMENT PRIMARY KEY,
    firstName VARCHAR(255) NOT NULL,
    lastName VARCHAR(255) NOT NULL,
    comAddress VARCHAR(255) NOT NULL,
    gender VARCHAR(50) NOT NULL,
    nBday DATE NOT NULL,
    contactNum VARCHAR(255) NULL,
    emailAdd VARCHAR(255) NOT NULL,
    shirtSize VARCHAR(50) NOT NULL,
    theAge INT(50) NOT NULL,
    jRsR VARCHAR(50) NOT NULL,
    regTime	VARCHAR(255) NOT NULL)";

if ($conn->query($createtblSQL) === TRUE) {
    echo "table created successfully";
  } else {
    echo "Error: " . $createtblSQL . "<br>" . $conn->error;
  }

$inserttblSQL = "INSERT INTO tbl_runforearth
(firstName, lastName, comAddress, gender, nBday, contactNum, emailAdd, shirtSize, theAge, jRsR, regTime) VALUES 
(Juan,Dela Cruz,123 Rizal St. Makati City,Male,2000-01-15,09123456789,juan.delacruz@example.com,Medium,23,Senior,Thursday, 27-Jul-2023 04:32:35 AM PHT),
(Maria,Santos,456 Sampaguita Ave., Quezon City,Female,2020-04-28,09187654321,maria.santos@example.com,Small,3,Junior,Thursday, 27-Jul-2023 04:36:10 AM PHT),
(Jose,Reyes,789 Narra St. Caloocan City,Male,1995-10-10,NULL,jose.reyes@example.com,Extra Large,27,Senior,Thursday, 27-Jul-2023 04:36:10 AM PHT),
(Ana,Garcia,321 Sampaloc Ave., Pasig City,Female,2015-02-10,NULL,ana.garcia@example.com,Medium,8,Junior,Thursday, 27-Jul-2023 04:38:23 AM PHT),
(Miguel,Ramos,111 Tamarind St. Mandaluyong City,Male,1992-02-11,09171234567,miguel.ramos@example.com,Large,31,Senior,Thursday, 27-Jul-2023 04:38:23 AM PHT),
(Sofia,Tan,222 Kamias St. Manila City,Female,1987-12-03,09209876543,sofia.tan@example.com,Small,35,Senior,Thursday, 27-Jul-2023 04:39:03 AM PHT),
(Rafael,Santos,789 Sunflower St. Quezon City,Male,1970-12-05,09155678901,rorafael.santos@example.com,Large,52,Senior,Thursday, 27-Jul-2023 04:45:33 AM PHT),
(Rose,Santos,789 Sunflower St. Quezon City,Female,1972-12-07,09222345678,rorafael.santos@example.com,Medium,50,Senior,Thursday, 27-Jul-2023 04:45:33 AM PHT),
(Rica,Santos,789 Sunflower St. Quezon City,Female,1990-02-22,09163456789,rica.santos@example.com,Small,33,Senior,Thursday, 27-Jul-2023 04:45:33 AM PHT),
(Rico,Santos,789 Sunflower St. Quezon City,Male,1990-02-22,09127654321,ric01.santos@example.com,Large,33,Senior,Thursday, 27-Jul-2023 04:45:33 AM PHT),
(Lourdes,Garcia,456 Acacia St. Makati City,Female,2018-07-18,09171234567,lourdes.garcia@example.com,Medium,5,Junior,Thursday, 27-Jul-2023 04:46:55 AM PHT),
(Roberto,Reyes,321 Mango St. Pasig City,Male,2007-05-23,NULL,roberto.reyes@example.com,Small,16,Junior,Thursday, 27-Jul-2023 04:47:59 AM PHT),
(Rosario,Tan,111 Orchid St. Mandaluyong City,Female,1994-11-08,NULL,rosario.tan@example.com,Small,28,Senior,Thursday, 27-Jul-2023 04:51:34 AM PHT),
(Emmanuel,Ramos,222 Cherry St. Manila City,Male,2010-03-09,NULL,emmanuel.ramos@example.com,Medium,13,Junior,Thursday, 27-Jul-2023 04:51:34 AM PHT),
(Teresa,Dela Cruz,123 Pine St. Makati City,Female,2009-07-06,09209876543,teresa.delacruz@example.com,Small,14,Junior,Thursday, 27-Jul-2023 04:51:34 AM PHT),
(Pedro,Santos,789 Rose St. Quezon City,Male,2005-01-05,09155678901,pedro.santos@example.com,Extra Large,18,Junior,Thursday, 27-Jul-2023 04:51:34 AM PHT),
(Anita,Garcia,456 Tulip St. Makati City,Female,1993-12-04,09222345678,anita.garcia@example.com,Small,29,Senior,Thursday, 27-Jul-2023 04:53:16 AM PHT),
(Miguelito,Reyes,321 Cherry Blossom St. Pasig City,Male,2017-02-10,09163456789,miguelito.reyes@example.com,Large,6,Junior,Thursday, 27-Jul-2023 04:59:45 AM PHT),
(Gabriel,Ramos,222 Acacia St. Manila City,Male,2000-12-11,09127654321,gabriel.ramos@example.com,Large,22,Senior,Thursday, 27-Jul-2023 04:59:45 AM PHT),
(Rosalinda,Dela Cruz,123 Magnolia St. Makati City,Female,1986-02-03,09127654321,rosalinda.delacruz@example.com,Medium,37,Senior,Thursday, 27-Jul-2023 04:59:45 AM PHT),
(Alejandro,Santos,789 Orchid St. Quezon City,Male,2011-12-25,NULL,alejandro.santos@example.com,Extra Large,11,Junior,Thursday, 27-Jul-2023 04:59:45 AM PHT),
(Ramon,Reyes,321 Tulip St. Pasig City,Male,1997-05-28,NULL,ramon.reyes@example.com,Extra Large,26,Senior,Thursday, 27-Jul-2023 05:04:38 AM PHT),
(Cris,Tan,111 Pine St. Mandaluyong City,Male,1993-08-21,NULL,cristina.tan@example.com,Large,29,Senior,Thursday, 27-Jul-2023 05:05:36 AM PHT)";
}

if ($conn->query($inserttblSQL) === TRUE) {
    echo "Data inserted successfully";
  } else {
    echo "Error: " . $inserttblSQL . "<br>" . $conn->error;
  }
  

  
  

  
  
  

?>

</body>
</html>