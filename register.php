<?php
$servername = "localhost";
$username = "root";
$password = "Javaisheart@2023";
$dbname = "db_runforearth";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?> 


<?php require_once('head.php'); ?>
<body class="register-page">


<div class="container-fluid nav-fluid-container">
  <div class="container">

  <?php require_once('navigation.php'); ?>

  </div>
</div>



<div class="regp-section1-holder">
  <div class="container regp-section1 d-flex flex-column align-items-center py-5">

    
    <div class="form-and-text-holder">
      <div class="text-holder d-flex flex-column align-items-center text-center mx-auto">
        <div class="sign-up-title">SIGN UP</div>
        <img src="img/section-divider.png">
        <div class="sign-up-text pt-2">This is a sample text only. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur cursus massa quis erat mollis ullamcorper. Duis aliquam est eget gravida hendrerit.</div>
      </div>

      <form name ="form1" class="form-holder py-4" method="post" action="">
      <div id="form-and-text-holder-outer">  
        <div class="loop-form-holder">
          

        <?php $phpregCounter = 0; ?>

        <input type="hidden" value="'<?php echo $phpregCounter; ?>" name="check<?php echo $phpregCounter; ?>">
          <div class="row">
            <div class="col-lg-6 col-sm-12">
              <input type="text" class="form-control" placeholder="First name" oninput="this.value = this.value.replace(/[^a-zA-Z\s'-]/g, '');" name="fName[<?php echo $phpregCounter; ?>]" >
            </div>
            <div class="col-lg-6 col-sm-12">
              <input type="text" class="form-control" placeholder="Last name" oninput="this.value = this.value.replace(/[^a-zA-Z\s'-]/g, '');" name="lName[<?php echo $phpregCounter; ?>]" >
            </div>
          </div>

          <div class="row">
            <div class="col">
              <input type="text" class="form-control" placeholder="Complete Address" name="cAdd[<?php echo $phpregCounter; ?>]" >
              </div>
          </div>        
          

          <div class="row">
            <div class="col">
              <select id="idgender" name="namegender[<?php echo $phpregCounter; ?>]" class="form-control classgender">
                <option value="Gender" selected>Gender</option><!-- seems after removing the disabled here the error gone: the Warning: Undefined array key-->
                <option value="Male">Male</option>
                <option value="Female">Female</option>
              </select>
            </div>
          </div>

          <div class="row">
            <div class="col-lg-6 col-sm-12">
              <input placeholder="Birthday" max="1900-01-01" class="form-control" type="text" onfocus="(this.type='date')" onblur="(this.type='text')" id="date" name="bDay[<?php echo $phpregCounter; ?>]" >
            </div>
            <div class="col-lg-6 col-sm-12">
              <input type="tel" oninput="this.value = this.value.replace(/[^0-9]/g, '');" class="form-control" placeholder="Contact Number" name="cNum[<?php echo $phpregCounter; ?>]">
            </div>
          </div>

          <div class="row pb-3">
            <div class="col-lg-6 col-sm-12">
              <input type="email" class="form-control" placeholder="Email Address" name="eAdd[<?php echo $phpregCounter; ?>]" >
            </div>
            <div class="col-lg-6 col-sm-12">
            <select id="idshirtsize" name="sSize[<?php echo $phpregCounter; ?>]" class="form-control classshirtsize">
                <option value="Shirt size" selected>Shirt size</option>
                <option value="Small">Small</option>
                <option value="Medium">Medium</option>
                <option value="Large">Large</option>
                <option value="Extra Large">Extra Large</option>
              </select>
            </div>
          </div>
        </div><!-- end of form-loop-holder-->
      </div><!-- form-and-text-holder-outer-->
 

        <div class="row my-0 py-0">
          <div class="col-lg-6 col-sm-12 my-0 py-0 d-flex align-items-center">
            
              <div class="add-value-btn-text">
               <input type="button" class="add-value-btn-text" value="+" onclick="func_funcAddMoreReg()" name="name-add-value-btn">
              </div>
            
            <div class="add-more-part-text">&nbsp; Add more participants</div>

            
            
            <script>
      var regCounter = "<?php $phpregCounter ?>" ;
      
      regCounter = "<?php $phpregCounter ?>" + regCounter;
     //var regCounter = 1
      function func_funcAddMoreReg(){
        
       // regCounter++;
        

        regCounter++;
        
        var additionalReg = '<img src="img/section-divider.png" class="m-auto d-flex pb-2"><div class="loop-form-holder">'+
        '<input type="hidden" value="'+ regCounter+ '" name="check'+ regCounter+ '" readonly>'+
            '<div class="row">'+
                '<div class="col-lg-6 col-sm-12">'+
                '<input type="text" class="form-control" placeholder="First name" oninput="this.value = this.value.replace(/[^a-zA-Z\\s\'-]/g, \'\');" name="fName[' + regCounter + ']" >'+
                '</div>'+
                '<div class="col-lg-6 col-sm-12">'+
                  '<input type="text" class="form-control" placeholder="Last name" oninput="this.value = this.value.replace(/[^a-zA-Z\\s\'-]/g, \'\');" name="lName[' + regCounter + ']" >'+
                  '</div>'+
              '</div>'+
    
              '<div class="row">'+
                '<div class="col">'+
                  '<input type="text" class="form-control" placeholder="Complete Address" name="cAdd[' + regCounter + ']" >'+
                  '</div>'+
              '</div>'+        
              '<div class="row">'+
                '<div class="col">'+
                  '<select id="idgender" name="namegender[' + regCounter + ']" class="form-control classgender">'+
                    '<option value="Gender" selected>Gender</option>'+
                    '<option value="Male">Male</option>'+
                    '<option value="Female">Female</option>'+
                    '</select>'+
                    '</div>'+
              '</div>'+
            '</div>'+
            '<div class="row">'+
            '<div class="col-lg-6 col-sm-12">'+
              '<input placeholder="Birthday" max="1900-01-01" class="form-control" type="text" onfocus="this.type=\'date\'" onblur="this.type=\'text\'" id="date" name="bDay[' + regCounter + ']" >'+
            '</div>'+
            '<div class="col-lg-6 col-sm-12">'+
              '<input type="tel" class="form-control" oninput="this.value = this.value.replace(/[^0-9]/g, \'\');" placeholder="Contact Number" name="cNum[' + regCounter + ']">'+
            '</div>'+
          '</div>'+
          '<div class="row pb-3">'+
            '<div class="col-lg-6 col-sm-12">'+
              '<input type="email" class="form-control" placeholder="Email Address" name="eAdd[' + regCounter + ']" >'+
            '</div>'+
            '<div class="col-lg-6 col-sm-12">'+
            '<select id="idshirtsize" name="sSize[' + regCounter + ']" class="form-control classshirtsize">'+
                '<option value="Shirt size" selected>Shirt size</option>'+
                '<option value="Small">Small</option>'+
                '<option value="Medium">Medium</option>'+
                '<option value="Large">Large</option>'+
                '<option value="Extra Large">Extra Large</option>'+
              '</select>'+
            '</div>'+
          '</div>';

        // document.getElementById('form-and-text-holder-outer').innerHTML += additionalReg;

        document.getElementById('form-and-text-holder-outer').insertAdjacentHTML("beforeend", additionalReg);

        }
    </script>
    
    



          </div>
          <div class="col-lg-6 col-sm-12 d-flex">
            <div class="lbl-TC d-flex">
              <input type="checkbox" id="idTC" name="nameTC" class="classTC">
              <label for="idTC" class="mt-1">&nbsp; I have read and understand the Terms and Conditions</label>
            </div>
          </div>
        </div>

        <div class="row pt-4 regFRM-BTN-holder">
          <input type="submit" class="greenBTN" value="SUBMIT" id="idSUBMIT" name="nameSUBMIT">
        </div>




      </form>




<?php




if(isset($_POST["nameSUBMIT"]))
{
    $fNames = $_POST['fName'];
    $lNames = $_POST['lName'];
    $cAdds = $_POST['cAdd'];
    $namegenders = $_POST['namegender'];
    $bDays = $_POST['bDay'];
    $cNums = $_POST['cNum'];
    $eAdds = $_POST['eAdd'];
    $sSizes = $_POST['sSize'];


    $date = new DateTime('now', new DateTimeZone('Asia/Manila'));
    $dateHolderwithoutPHT = $date->format('l, d-M-Y h:i:s A');
    $dateHolder = $dateHolderwithoutPHT . " PHT";

    for ($i = 0; $i < count($fNames); $i++) 
    {
        $fName = $conn->real_escape_string($fNames[$i]);
        $lName = $conn->real_escape_string($lNames[$i]);
        $cAdd = $conn->real_escape_string($cAdds[$i]);
        $namegender = $namegenders[$i];
        $bDay = $conn->real_escape_string($bDays[$i]);
        $bdate = date("y-m-d", strtotime($bDay));
        $cNum = $conn->real_escape_string($cNums[$i]);
        $eAdd = $conn->real_escape_string($eAdds[$i]);
        $sSize = $sSizes[$i];


        if(!empty($fName))
        {
            if(strlen($fName) > 2)
            {
                if(!empty($lName))
                {
                    if(!empty($cAdd))
                    {
                        if($namegender != "Gender")
                        {
                            if(!empty($bDay))
                            {
                                $birthday = $bdate;

                                $dateOfBirth = $bDay;
                                $today = date("Y-m-d");
                                $diff = date_diff(date_create($dateOfBirth), date_create($today));
                                $theYear = $diff->format('%y');
                                $theMonth = $diff->format('%m');
                                $theDay = $diff->format('%d');

                                
                                //$dateHolderYear = date('y');
                                //$dateHolderMonth = date('m');
                                //$dateHolderDay = date('d');

                                //echo "month".$dateHolderDay."<br>";
                                //echo "month".$dateHolderMonth."<br>";
                                //echo "month".$dateHolderDay."<br>";
                                //echo $theYear;
                                if($theYear < 110)
                                {
                                  if($theYear > 0 || $theMonth > 0 || $theDay > 0)
                                  {
                                      //echo $theYear;
                                    // echo $theMonth;
                                      //echo $theDay;
                                      if($theYear <= 18)
                                      {
                                          $jRsR = "Junior";
                                          //echo $jRsR;
                                      }
                                      else
                                      {
                                          $jRsR = "Senior";
                                          //echo $jRsR;
                                      }//($theYear <= 18)

                                      if(!empty($eAdd))
                                      {
                                          if($sSize != "Shirt size")
                                          {
                                              if(isset($_POST["nameTC"]))
                                              {
                                                  $insertregister = "INSERT INTO tbl_runforearth (firstName, lastName, comAddress, gender, nBday, emailAdd, shirtSize, jRsR, theAge, regTime, contactNum) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

                                                  $stmt = $conn->prepare($insertregister);

                                                  if ($stmt) 
                                                  {
                                                      // Check if $cNum is empty and set the parameter value accordingly
                                                      $cNumValue = !empty($cNum) ? $cNum : NULL;
                  
                                                      // Use $cNumValue in the bind_param method
                                                      $stmt->bind_param("sssssssssss", $fName, $lName, $cAdd, $namegender, $bdate, $eAdd, $sSize, $jRsR, $theYear, $dateHolder, $cNumValue);
                                                      
                                                      if ($stmt->execute()) 
                                                      {
                                                          //echo "PERMANENT INSERTED";

                                                          // Create temporary table if it doesn't exist
                                                          $conn->query("CREATE TEMPORARY TABLE IF NOT EXISTS temp_participants (
                                                              theid INT AUTO_INCREMENT PRIMARY KEY,
                                                              tfirstName VARCHAR(255),
                                                              tlastName VARCHAR(255),
                                                              tjRsR VARCHAR(50),     
                                                              tgender VARCHAR(255),
                                                              tshirtSize VARCHAR(255),
                                                              tregTime VARCHAR(255)
                                                          )");
                                                          
                                                              // Insert data into temporary table                                                    
                                                              //echo "1  ";                                                        
                                                              for ($j = 0; $j < count($fNames); $j++)
                                                            // echo "2  "; 
                                                              {
                                                              //   echo "3  ";    
                                                                  $tempinsertregister = "INSERT INTO temp_participants (tfirstName, tlastName, tjRsR, tgender, tshirtSize, tregTime) VALUES (?, ?, ?, ?, ?, ?)";
                                                                // echo "4  ";
                                                                  $stmt_temp = $conn->prepare($tempinsertregister);
                                                                // echo "5  ";
                                                                  $stmt_temp->bind_param("ssssss", $fNames[$j], $lNames[$j], $jRsR, $namegenders[$j], $sSizes[$j], $dateHolder);
                                                                // echo "6  ";
                                                                  if ($stmt_temp->execute()) 
                                                                  {
                                                                      //echo "TEMP INSERTED <br>";
                                                                  } 
                                                                  else 
                                                                  {
                                                                      echo "Error: " . $stmt_temp->error . "<br>";
                                                                  }
                                                                // echo "7  ";
                                                              }

                                                              //testing if na insert 
                                                            // $sql_temp = "SELECT * FROM temp_participants";
                                                            // if($results_temp = $conn->query($sql_temp)) 
                                                            // {
                                                                  //while ($row_temp = mysqli_fetch_array($results_temp)) 
                                                              //   while ($row_temp=$results_temp->fetch_assoc())
                                                                //  {
                                                              //   echo $row_temp['tfirstName']."<br>";
                                                                //  }
                                                            // }
                                                          
                                                          ?>
                                                          
                                                          <!-- Modal HTML -->
                                                          <div id="myModal" class="modal">
                                                              <div class="modal-content">
                                                                  <div class="modal-title">Congratulations!</div>
                                                                  <div class="cust-hr"></div>
                                                                  <div class="modal-p">
                                                                  <p>You have successfully registered to the event</p>
                                                                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed arcu diam, placerat ac porta ac, mollis vel odio. Vestibulum ornare justo augue, vitae ultricies orci malesuada quis. Suspendisse at libero bibendum, lobortis ante ac, commodo dolor. Aliquam pretium et orci non faucibus. Nullam et odio pretium, facilisis lorem non, ornare nulla. Aliquam congue erat in ante faucibus tincidunt. Mauris laoreet ex risus, non imperdiet quam sagittis vitae. Integer iaculis iaculis elit, vitae scelerisque nisl. Proin non elit sed arcu condimentum ornare. Fusce arcu dolor, tristique ut ex vitae, consectetur volutpat tortor. Aliquam rutrum pretium mauris nec vestibulum. Fusce porta massa et arcu porta, a auctor nibh convallis. Nullam id nulla bibendum, vehicula lacus eu, scelerisque eros. Donec est odio, dapibus quis scelerisque eu, interdum rutrum ex.</p>
                                                                  </div>
                                                                  <div class="row">
                                                                  <div class="col-lg-6 col-12-sm text-start">Participant's</div>
                                                                  <div class="col-lg-6 col-12-sm text-end participantdatereg">Date Registered: 
                                                                      <?php 
                                                                      $temptblDateHolder = "SELECT tregTime FROM temp_participants LIMIT 1";
                                                                      if ($results_temptblDateHolder = $conn->query($temptblDateHolder)) {
                                                                          if ($row_temptblDateHolder = $results_temptblDateHolder->fetch_assoc()) {
                                                                          $tregTime = $row_temptblDateHolder['tregTime'];
                                                                              echo $tregTime;
                                                                          }
                                                                      }
                                                                      
                                                                      ?>
                                                                          
                                                                  </div>
                                                                  </div>
                                                                  <?php  
                                                                  echo "<table class='mb-3 modalTBL modalTBLshowDes'>";
                                                                  echo "<tr>";
                                                                  echo "<th>Name</th>";
                                                                  echo "<th>Race Category</th>";
                                                                  echo "<th>Race Segment</th>";
                                                                  echo "<th>Race Shirt Size</th>";
                                                                  echo "</tr>";
                                                                  $sql_temp = "SELECT * FROM temp_participants";
                                                                  if($results_temp = $conn->query($sql_temp)) 
                                                                  {
                                                                  //while ($row_temp = mysqli_fetch_array($results_temp)) 
                                                                  while ($row_temp=$results_temp->fetch_assoc())
                                                                  {
                                                                      echo "<tr>";
                                                                      echo "<td>" . $row_temp['tfirstName'] . " ". $row_temp['tlastName']."</td>";
                                                                      echo "<td class='text-uppercase'>" . $row_temp['tjRsR'] . "</td>";
                                                                      echo "<td>" . $row_temp['tgender'] . "</td>";
                                                                      echo "<td>" . $row_temp['tshirtSize'] . "</td>";
                                                                      echo "</tr>";
                                                                  }
                                                                  }
                                                                  echo "</table>";
                                                                  ?>

                                                                  
                                                                  <?php  
                                                                  echo "<table class='mb-3 modalTBL modalTBLshowMob'>";
                                                                  $sql_temp = "SELECT * FROM temp_participants";
                                                                  if($results_temp = $conn->query($sql_temp)) 
                                                                  {
                                                                  //while ($row_temp = mysqli_fetch_array($results_temp)) 
                                                                  while ($row_temp=$results_temp->fetch_assoc())
                                                                  {
                                                                      echo "<tr>";
                                                                      echo    "<th class='pt-3'>Name</th>";
                                                                      echo "</tr>";
                                                                      echo "<tr>";
                                                                      echo    "<td>" . $row_temp['tfirstName'] . " ". $row_temp['tlastName']."</td>";
                                                                      echo "</tr>";
                                                                      echo "<tr>";
                                                                      echo    "<th>Race Category</th>";
                                                                      echo "</tr>";
                                                                      echo "<tr>";
                                                                      echo    "<td class='text-uppercase'>" . $row_temp['tjRsR'] . "</td>";
                                                                      echo "</tr>";
                                                                      echo "<tr>";
                                                                      echo    "<th>Race Segment</th>";
                                                                      echo "</tr>";
                                                                      echo "<tr>";
                                                                      echo    "<td>" . $row_temp['tgender'] . "</td>";
                                                                      echo "</tr>";
                                                                      echo "<tr>";
                                                                      echo    "<th>Race Shirt Size</th>";
                                                                      echo "</tr>";
                                                                      echo "<tr >";
                                                                      echo    "<td class='separtor-modalTBLshowMob pb-3'>" . $row_temp['tshirtSize'] . "</td>";
                                                                      echo "</tr>";
                                                                  }
                                                                  }
                                                                  echo "</table>";
                                                                  ?>   



                                                                  <span class="close greenBTN">BACK</span>
                                                              </div>
                                                              </div> 
                                                              <script>
                                                              // Check condition and show modal if condition is met
                                                              var modal = document.getElementById("myModal");
                                                              modal.style.display = "block";
                                                              
                                                              // Close the modal when the close button is clicked
                                                              var closeBtn = modal.querySelector(".close");
                                                              closeBtn.addEventListener("click", function() {
                                                                  modal.style.display = "none";
                                                              });
                                                              
                                                              // Close the modal when the user clicks outside of it
                                                              window.addEventListener("click", function(event) {
                                                                  if (event.target == modal) {
                                                                  modal.style.display = "none";
                                                                  }
                                                              });
                                                              </script>                                                         


                                                          <?php
                                                      }//if ($stmt->execute()) 
                                                      else
                                                      {
                                                          echo "Error from ($stmt - > execute()): " . $stmt->error . "<br>";
                                                      }
                                                  }// if ($stmt)
                                                  else
                                                  {
                                                      echo "Error from ($stmt - > execute()): " . $stmt->error . "<br>";
                                                  }
                                              }
                                              else
                                              {
                                                  echo "<div class='error-mes'><span class='thewarning'> Please check Terms and Conditions</span></div>";
                                              }//if(isset($_POST["nameTC"])
                                          }
                                          else
                                          {
                                              echo "<div class='error-mes'><span class='thewarning'> Please specify Shirt Size</span></div>";
                                          }//if($sSize != "Shirt size")
                                      }
                                      else
                                      {
                                          echo "<div class='error-mes'><span class='thewarning'> Please add email address</span></div>";
                                      }

                                  }
                                  else
                                  {
                                      echo "<div class='error-mes'><span class='thewarning'> Please enter a valid birth date</span></div>";
                                  }
                                }
                                else
                                {
                                  echo "<div class='error-mes'><span class='thewarning'> Please enter a valid birth date</span></div>";
                                }

                            }
                            else
                            {
                                echo "<div class='error-mes'><span class='thewarning'> Please specify date of birth</span></div>";
                            }//if(!empty($bDay))
                        }
                        else
                        {
                            echo "<div class='error-mes'><span class='thewarning'> Please specify gender</span></div>";
                        }//if($namegender != "Gender")
                    }
                    else
                    {
                        echo "<div class='error-mes'><span class='thewarning'> Please add Complete Address</span></div>";
                    }//if(!empty($cAdd))
                }
                else
                {
                    echo "<div class='error-mes'><span class='thewarning'> Please add Last Name</span></div>";
                }//if(!empty($lName))
            }
            else
            {
                echo "<div class='error-mes'><span class='thewarning'> First Name should not be less than 2 letters</span></div>";
            }  //(strlen($fName) > 2)
        }
        else
        {
          echo "<div class='error-mes'><span class='thewarning'> Please add First Name</span></div>";
        }//(!empty($fName))

    }//for loop end
}//if(isset($_POST["nameSUBMIT"]))



  



?>







    </div><!-- form-and-text-holder -->

  </div>
</div>





<div class="container-fluid regp-blue-bot"></div>












<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>




