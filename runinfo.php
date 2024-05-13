


<?php include('dbconn.php'); ?>
<?php include('head.php'); ?>
<body class="runinfo">


<div class="container-fluid nav-fluid-container">
  <div class="container">

  <?php include('navigation.php'); ?>

  </div>
</div>







<div class="section1-holder-runifo">
  <div class="container section1-runifo d-flex flex-column align-items-center pt-5">
    <div class="listofpartitle">List of Participants</div>
      <div id="browsingtable" class="w-100">You are browsing: all participants</div>
            <?php 

            error_reporting(E_ALL);
            ini_set('display_errors', 1);

            session_start();

            if (!isset($_SESSION['active_table'])) 
            {
                $_SESSION['active_table'] = 'tbl_runforearth';
            }

            if(!isset($_SESSION['showEntryName']))
            {
              $_SESSION['showEntryName'] = 5;
            }

            if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['showEntryName'])) {
              $_SESSION['showEntryName'] = $_POST['showEntryName'];
            }            


            ?>

    <div class="cust-hr"></div>
    <div class="row onmob">
          <div class="sorterCol col-xl-2 col-lg-3 col-md-12 d-flex pb-3">
            <div class="sorterColinnerCol d-flex flex-wrap align-content-start">
              <table class="tableSorter">
                <tbody class= "tbodySorter">
                  <form method="post" action="runinfo.php">
                    <tr class="sortRow"><td><input type="submit" name="btn-all" value="All" class="sortRowButtons"></td></tr>  
                    <tr class="sortRow"><td><input type="submit" name="btn-juniors" value="Juniors(39 - below)" class="sortRowButtons"></td></tr>
                    <tr class="sortRow"><td><input type="submit" name="btn-all-40-above" value="All(40 - above)" class="sortRowButtons"></td></tr>
                    <tr class="sortRow"><td><input type="submit" name="btn-contact-persons" value="Contact Persons" class="sortRowButtons"></td></tr>
                  </form>
                </tbody>
              </table>
            </div>  
          </div> 
          <div class="sorterResultCol col-xl-10 col-lg-9 col-md-12 pb-2">
            <div class="all-top py-2" style="background-color: lightgray">All</div>
            <div class="sortRow">
              <div class="sorterResultColInner">
                <div class="row totalMF pt-2">
                  <div class="col-lg-8">
                    <div class="row">
                      <div class="col-4">Total: <div id="totaltext"></div></div>
                      <div class="col-4">Male: <div id="allmaletext"></div></div>
                      <div class="col-4">Female: <div id="allfemaletext"></div></div>
                    </div>
                  </div>
                </div>

                <div class="row py-3">
                  <div class="col-lg-6 col-sm-12">
                    <div class="showEntries d-flex">
                      Show &nbsp;
                        <form method="post" action="">
                          <select name="showEntryName" class="" id="perPage" onchange="this.form.submit()">
                            <option value="5" <?php if($_SESSION['perPage'] == 5){ echo "selected";}?>>5</option>
                            <option value="10" <?php if($_SESSION['perPage'] == 10){ echo "selected";}?>>10</option>
                          </select>
                          </form>
                      &nbsp; entries
                    </div>
                  </div>
                  <div class="col-lg-6 col-sm-12">
                    <div class="searchBar">
                          <form method="post" action="">
                            <label><b>Search</b></label>
                            <input type="text" name="theSearch" class="classtheSearch">
                          </form>
                    </div>     
                  </div>
                </div>

                <table class="tableResult">
                <tbody class="tbodyResult">
                  <tr class="thtableResult">
                <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" class="sortholderform">
                  <th class="thethtableresult hidemo">
                      <div class="row">
                        <div class="col-8"><div class="hundred">#</div> 
                        </div>
                        <div class="col-4">
                           <div class="sortholder">
                            <input type="submit" name="sortASCid" class="classsortASC" value="▲">
                            <input type="submit" name="sortDESCid" class="classsortDESC" value="▼">
                          </div>                          
                        </div>
                      </div>
                    </th>
                    <th class="thethtableresult hidemo">
                      <div class="row">
                        <div class="col-8"><div class="hundred">Name</div> 
                        </div>
                        <div class="col-4">
                          <div class="sortholder">
                            <input type="submit" name="sortASCName" class="classsortASC" value="▲">
                            <input type="submit" name="sortDESCName" class="classsortDESC" value="▼">
                          </div>                          
                         </div>
                      </div>
                    </th>
                    <th class="thethtableresult hidemo">
                      <div class="row">
                        <div class="col-8"><div class="hundred">Age</div> 
                        </div>
                        <div class="col-4">
                          <div class="sortholder">
                            <input type="submit" name="sortASCAge" class="classsortASC" value="▲">
                            <input type="submit" name="sortDESCAge" class="classsortDESC" value="▼">
                          </div>                          
                         </div>
                      </div>
                    </th>
                    <th class="thethtableresult hidemo">
                      <div class="row">
                        <div class="col-8">Gender
                        </div>
                        <div class="col-4">
                          <div class="sortholder">
                            <input type="submit" name="sortASCGender" class="classsortASC" value="▲">
                            <input type="submit" name="sortDESCGender" class="classsortDESC" value="▼">
                          </div>                          
                         </div>
                      </div>
                    </th>
                    <th class="thethtableresult hidemo">
                      <div class="row">
                        <div class="col-8">Address
                        </div>
                        <div class="col-4">
                          <div class="sortholder">
                            <input type="submit" name="sortASCAddress" class="classsortASC" value="▲">
                            <input type="submit" name="sortDESCAddress" class="classsortDESC" value="▼">
                          </div>                          
                         </div>
                      </div>                      
                    </th>
                    <th class="thethtableresult hidemo">
                      <div class="row">
                        <div class="col-8">Email Address
                        </div>
                        <div class="col-4">
                          <div class="sortholder">
                            <input type="submit" name="sortASCEmailAdd" class="classsortASC" value="▲">
                            <input type="submit" name="sortDESCEmailAdd" class="classsortDESC" value="▼">
                          </div>                          
                         </div>
                      </div>                        
                    </th>
                    <th class="thethtableresult hidemo">
                      <div class="row">
                        <div class="col-8">Contact Number
                        </div>
                        <div class="col-4">
                          <div class="sortholder">
                            <input type="submit" name="sortASCcNum" class="classsortASC" value="▲">
                            <input type="submit" name="sortDESCcNum" class="classsortDESC" value="▼">
                          </div>                          
                         </div>
                      </div>                         
                    </th>
                    <th class="thethtableresult hidemo">
                      <div class="row">
                        <div class="col-8">Date Registered
                        </div>
                        <div class="col-4">
                          <div class="sortholder">
                            <input type="submit" name="sortASCdateReg" class="classsortASC" value="▲">
                            <input type="submit" name="sortDESCdateReg" class="classsortDESC" value="▼">
                          </div>                          
                         </div>
                      </div>                       
                    </th>
                </form>
                  </tr>
                    <?php
                              if (isset($_GET['page_no']) && $_GET['page_no']!="")
                              {
                              $page_no = $_GET['page_no'];
                              } else 
                              {
                              $page_no = 1;
                              }
                  
                              //$total_records_per_page = $_SESSION['showEntryName'];

                              if (isset($_POST['showEntryName'])) 
                              {
                                //$showEntryName = $_POST['showEntryName'];
                                //$total_records_per_page = $showEntryName;

                                $_SESSION['perPage'] = $_POST['showEntryName'];

                                $total_records_per_page = $_SESSION['perPage'];
                              }

                             //  else {
                                // Set a default value or handle the case when no option is selected
                               // $total_records_per_page = 5; // Default value
                              //}                      

                              $total_records_per_page = $_SESSION['perPage'];


                              $offset = ($page_no - 1) * $total_records_per_page;
                              $previous_page = $page_no - 1;
                              $next_page = $page_no + 1;
                              
                              
                         

                              //if sorting option/button is clicked
                                if(isset($_POST['btn-all']))
                                { 
                                  $usesql = "SELECT * FROM tbl_runforearth LIMIT $offset, $total_records_per_page";

                                  //to detect with table is being used, it is needed to know which table is being used for the ASC/DESC sorting
                                  $_SESSION['active_table'] = 'tbl_runforearth';
                                  
                                }
                                elseif(isset($_POST['btn-juniors']))
                                {
                                  $conn->query("DROP TABLE IF EXISTS tblbelow39");
                                  $conn->query("CREATE TABLE tblbelow39 (UNIQUE (runnerID)) SELECT * FROM tbl_runforearth WHERE theAge <= 39;");

                                  $usesql = "SELECT * FROM tblbelow39 LIMIT $offset, $total_records_per_page";
                                  
                                 // $whattable = "tblbelow39";
                                 $_SESSION['active_table'] = 'tblbelow39';

                                }
                                elseif(isset($_POST['btn-all-40-above']))
                                {
                                 
                                  //$conn->query("CREATE TEMPORARY TABLE temp_tableSort SELECT * FROM temp_table;"); 
                                  $conn->query("DROP TABLE IF EXISTS tblabove40");
                                  $conn->query("CREATE TABLE tblabove40 (UNIQUE (runnerID)) SELECT * FROM tbl_runforearth WHERE theAge >= 40;");

                                  $usesql = "SELECT * FROM tblabove40 LIMIT $offset, $total_records_per_page";
                                  
                                  //$whattable = "tblabove40";
                                  $_SESSION['active_table'] = 'tblabove40';

                                }
                                elseif(isset($_POST['btn-contact-persons']))
                                {
                                  $conn->query("DROP TABLE IF EXISTS tblcontact");
                                  $conn->query("CREATE TABLE tblcontact (UNIQUE (runnerID)) SELECT * FROM tbl_runforearth WHERE contactNum IS NOT NULL;");

                                  //$usesql = "SELECT * FROM tblcontact LIMIT $offset, $total_records_per_page";
                                  $usesql = "SELECT * FROM tblcontact LIMIT $offset, $total_records_per_page";

                                  //$whattable = "tblcontact";
                                  $_SESSION['active_table'] = 'tblcontact';

                                }
                                elseif(isset($_POST['theSearch']))
                                {
                                  $theSearch = $_POST['theSearch'];

                                  /*$conn->query("DROP TABLE tbl_search");
                                  $conn->query("SELECT * INTO tbl_search from tbl_runforearth WHERE 
                                  (runnerID LIKE '%$theSearch%') OR 
                                  (firstName LIKE '%$theSearch%') OR 
                                  (theAge LIKE '%$theSearch%') OR 
                                  (gender LIKE '%$theSearch%') OR 
                                  (comAddress LIKE '%$theSearch%') OR 
                                  (emailAdd LIKE '%$theSearch%') OR 
                                  (contactNum LIKE '%$theSearch%') OR 
                                  (regTime LIKE '%$theSearch%');");*/
                                  
                                 
                                    // Drop the existing tbl_search table if it exists
                                    $conn->query("DROP TABLE IF EXISTS tbl_search");

                                    // Create the tbl_search table and insert data into it
                                    $conn->query("CREATE TABLE tbl_search AS
                                                  SELECT *
                                                  FROM tbl_runforearth
                                                  WHERE 
                                                    runnerID LIKE '%$theSearch%' OR
                                                    firstName LIKE '%$theSearch%' OR
                                                    theAge LIKE '%$theSearch%' OR
                                                    gender LIKE '%$theSearch%' OR
                                                    comAddress LIKE '%$theSearch%' OR
                                                    emailAdd LIKE '%$theSearch%' OR
                                                    contactNum LIKE '%$theSearch%' OR
                                                    regTime LIKE '%$theSearch%'");

                                    
                                    $usesql = "SELECT * FROM tbl_search LIMIT $offset, $total_records_per_page";

                                    $_SESSION['active_table'] = 'tbl_search';
                                    
                                }
                                else
                                {
                                  $usesql = "SELECT * FROM tbl_runforearth LIMIT $offset, $total_records_per_page";
                                }


                                //for sorting ASC / DESC
                                if( ($_SESSION['active_table'] === 'tblbelow39') OR (isset($_POST['btn-juniors'])) )
                                {

                                  $usesql = "SELECT * FROM tblbelow39 LIMIT $offset, $total_records_per_page";

                                  //pagi
                                  $result_count = mysqli_query($conn,"SELECT COUNT(*) As total_records FROM tblbelow39 WHERE theAge <= 39;");


                                  //total = male + female from tblbelow39
                                  $allMale = "SELECT COUNT(*) AS male FROM tblbelow39 WHERE gender = 'Male';";
                                  $resultMale = $conn->query($allMale);
                                  if ($resultMale) {
                                  $rowMale = $resultMale->fetch_assoc();
                                  $maleCount = $rowMale['male'];
                                  }

                                  $allFemale = "SELECT COUNT(*) AS female FROM tblbelow39 WHERE gender = 'Female';";

                                  $resultFemale = $conn->query($allFemale);
                                  if ($resultFemale) {
                                    $rowfemale = $resultFemale->fetch_assoc();
                                    $femaleCount = $rowfemale['female'];
                                  }

                                  $totalMF = $maleCount + $femaleCount ;

                                  ?>  
                                  <script>
                                  document.getElementById("totaltext").innerHTML = "<?php echo $totalMF; ?>";
                                  document.getElementById("allmaletext").innerHTML = "<?php echo $maleCount; ?>";
                                  document.getElementById("allfemaletext").innerHTML = "<?php echo $femaleCount; ?>";
                                  document.getElementById("browsingtable").innerHTML = "<?php echo "You are browsing: participants below 39 years old"; ?>";
                                  </script> 
                                  <?php  

                                    //sort
                                    if(isset($_POST['sortASCid']))
                                    {
                                      $usesql = "SELECT * FROM tblbelow39 ORDER BY runnerID ASC LIMIT $offset, $total_records_per_page;";
                                    }
                                    if(isset($_POST['sortDESCid']))
                                    {
                                    $usesql = "SELECT * FROM tblbelow39 ORDER BY runnerID DESC LIMIT $offset, $total_records_per_page";
                                    }
                                    
                                    //sort
                                    if(isset($_POST['sortASCName']))
                                    {
                                      $usesql = "SELECT * FROM tblbelow39 ORDER BY firstName ASC LIMIT $offset, $total_records_per_page;";
                                    }
                                    if(isset($_POST['sortDESCName']))
                                    {
                                    $usesql = "SELECT * FROM tblbelow39 ORDER BY firstName DESC LIMIT $offset, $total_records_per_page";
                                    }

                                    //sort
                                    if(isset($_POST['sortASCAge']))
                                    {
                                      $usesql = "SELECT * FROM tblbelow39 ORDER BY theAge ASC LIMIT $offset, $total_records_per_page;";
                                    }
                                    if(isset($_POST['sortDESCAge']))
                                    {
                                    $usesql = "SELECT * FROM tblbelow39 ORDER BY theAge DESC LIMIT $offset, $total_records_per_page";
                                    }

                                    //sort
                                    if(isset($_POST['sortASCGender']))
                                    {
                                      $usesql = "SELECT * FROM tblbelow39 ORDER BY gender ASC LIMIT $offset, $total_records_per_page;";
                                    }
                                    if(isset($_POST['sortDESCGender']))
                                    {
                                    $usesql = "SELECT * FROM tblbelow39 ORDER BY gender DESC LIMIT $offset, $total_records_per_page";
                                    }

                                    //sort
                                    if(isset($_POST['sortASCAddress']))
                                    {
                                      $usesql = "SELECT * FROM tblbelow39 ORDER BY comAddress ASC LIMIT $offset, $total_records_per_page;";
                                    }
                                    if(isset($_POST['sortDESCAddress']))
                                    {
                                    $usesql = "SELECT * FROM tblbelow39 ORDER BY comAddress DESC LIMIT $offset, $total_records_per_page";
                                    }

                                    //sort
                                    if(isset($_POST['sortASCEmailAdd']))
                                    {
                                      $usesql = "SELECT * FROM tblbelow39 ORDER BY emailAdd ASC LIMIT $offset, $total_records_per_page;";
                                    }
                                    if(isset($_POST['sortDESCEmailAdd']))
                                    {
                                    $usesql = "SELECT * FROM tblbelow39 ORDER BY emailAdd DESC LIMIT $offset, $total_records_per_page";
                                    }

                                    //sort
                                    if(isset($_POST['sortASCcNum']))
                                    {
                                      $usesql = "SELECT * FROM tblbelow39 ORDER BY contactNum ASC LIMIT $offset, $total_records_per_page;";
                                    }
                                    if(isset($_POST['sortDESCcNum']))
                                    {
                                    $usesql = "SELECT * FROM tblbelow39 ORDER BY contactNum DESC LIMIT $offset, $total_records_per_page";
                                    }

                                    //sort
                                    if(isset($_POST['sortASCdateReg']))
                                    {
                                      $usesql = "SELECT * FROM tblbelow39 ORDER BY regTime ASC LIMIT $offset, $total_records_per_page;";
                                    }
                                    if(isset($_POST['sortDESCdateReg']))
                                    {
                                    $usesql = "SELECT * FROM tblbelow39 ORDER BY regTime DESC LIMIT $offset, $total_records_per_page";
                                    }

                                    
                                } 
                                elseif( ($_SESSION['active_table'] === 'tblabove40') OR (isset($_POST['btn-all-40-above'])) )
                                {

                                  $usesql = "SELECT * FROM tblabove40 LIMIT $offset, $total_records_per_page";


                                  //total = male + female from tblabove40
                                  $allMale = "SELECT COUNT(*) AS male FROM tblabove40 WHERE gender = 'Male';";
                                  $resultMale = $conn->query($allMale);
                                  if ($resultMale) {
                                  $rowMale = $resultMale->fetch_assoc();
                                  $maleCount = $rowMale['male'];
                                  }

                                  $allFemale = "SELECT COUNT(*) AS female FROM tblabove40 WHERE gender = 'Female';";

                                  $resultFemale = $conn->query($allFemale);
                                  if ($resultFemale) {
                                    $rowfemale = $resultFemale->fetch_assoc();
                                    $femaleCount = $rowfemale['female'];
                                  }

                                  $totalMF = $maleCount + $femaleCount ;

                                  ?>  
                                  <script>
                                  document.getElementById("totaltext").innerHTML = "<?php echo $totalMF; ?>";
                                  document.getElementById("allmaletext").innerHTML = "<?php echo $maleCount; ?>";
                                  document.getElementById("allfemaletext").innerHTML = "<?php echo $femaleCount; ?>";
                                  document.getElementById("browsingtable").innerHTML = "<?php echo "You are browsing: participants 40 years old and above"; ?>";

                                  </script> 
                                  <?php 



                                  $result_count = mysqli_query($conn,"SELECT COUNT(*) As total_records FROM tblabove40 WHERE theAge >= 40;");
                                  //sort
                                  if(isset($_POST['sortASCid']))
                                  {
                                    $usesql = "SELECT * FROM tblabove40 ORDER BY runnerID ASC LIMIT $offset, $total_records_per_page;";
                                  }
                                  if(isset($_POST['sortDESCid']))
                                  {
                                  $usesql = "SELECT * FROM tblabove40 ORDER BY runnerID DESC LIMIT $offset, $total_records_per_page";
                                  }
                                  
                                  //sort
                                  if(isset($_POST['sortASCName']))
                                  {
                                    $usesql = "SELECT * FROM tblabove40 ORDER BY firstName ASC LIMIT $offset, $total_records_per_page;";
                                  }
                                  if(isset($_POST['sortDESCName']))
                                  {
                                  $usesql = "SELECT * FROM tblabove40 ORDER BY firstName DESC LIMIT $offset, $total_records_per_page";
                                  }

                                  //sort
                                  if(isset($_POST['sortASCAge']))
                                  {
                                    $usesql = "SELECT * FROM tblabove40 ORDER BY theAge ASC LIMIT $offset, $total_records_per_page;";
                                  }
                                  if(isset($_POST['sortDESCAge']))
                                  {
                                  $usesql = "SELECT * FROM tblabove40 ORDER BY theAge DESC LIMIT $offset, $total_records_per_page";
                                  }

                                  //sort
                                  if(isset($_POST['sortASCGender']))
                                  {
                                    $usesql = "SELECT * FROM tblabove40 ORDER BY gender ASC LIMIT $offset, $total_records_per_page;";
                                  }
                                  if(isset($_POST['sortDESCGender']))
                                  {
                                  $usesql = "SELECT * FROM tblabove40 ORDER BY gender DESC LIMIT $offset, $total_records_per_page";
                                  }

                                  //sort
                                  if(isset($_POST['sortASCAddress']))
                                  {
                                    $usesql = "SELECT * FROM tblabove40 ORDER BY comAddress ASC LIMIT $offset, $total_records_per_page;";
                                  }
                                  if(isset($_POST['sortDESCAddress']))
                                  {
                                  $usesql = "SELECT * FROM tblabove40 ORDER BY comAddress DESC LIMIT $offset, $total_records_per_page";
                                  }

                                  //sort
                                  if(isset($_POST['sortASCEmailAdd']))
                                  {
                                    $usesql = "SELECT * FROM tblabove40 ORDER BY emailAdd ASC LIMIT $offset, $total_records_per_page;";
                                  }
                                  if(isset($_POST['sortDESCEmailAdd']))
                                  {
                                  $usesql = "SELECT * FROM tblabove40 ORDER BY emailAdd DESC LIMIT $offset, $total_records_per_page";
                                  }

                                  //sort
                                  if(isset($_POST['sortASCcNum']))
                                  {
                                    $usesql = "SELECT * FROM tblabove40 ORDER BY contactNum ASC LIMIT $offset, $total_records_per_page;";
                                  }
                                  if(isset($_POST['sortDESCcNum']))
                                  {
                                  $usesql = "SELECT * FROM tblabove40 ORDER BY contactNum DESC LIMIT $offset, $total_records_per_page";
                                  }

                                  //sort
                                  if(isset($_POST['sortASCdateReg']))
                                  {
                                    $usesql = "SELECT * FROM tblabove40 ORDER BY regTime ASC LIMIT $offset, $total_records_per_page;";
                                  }
                                  if(isset($_POST['sortDESCdateReg']))
                                  {
                                  $usesql = "SELECT * FROM tblabove40 ORDER BY regTime DESC LIMIT $offset, $total_records_per_page";
                                  }

                                } 
                                elseif( ($_SESSION['active_table'] === 'tblcontact') OR (isset($_POST['btn-contact-persons'])) )
                                {

                                  $usesql = "SELECT * FROM tblcontact LIMIT $offset, $total_records_per_page";
                                                                    //
                                  $allMale = "SELECT COUNT(*) AS male FROM tblcontact WHERE gender = 'Male';";
                                  $resultMale = $conn->query($allMale);
                                  if ($resultMale) {
                                  $rowMale = $resultMale->fetch_assoc();
                                  $maleCount = $rowMale['male'];
                                  }

                                  $allFemale = "SELECT COUNT(*) AS female FROM tblcontact WHERE gender = 'Female';";

                                  $resultFemale = $conn->query($allFemale);
                                  if ($resultFemale) {
                                    $rowfemale = $resultFemale->fetch_assoc();
                                    $femaleCount = $rowfemale['female'];
                                  }

                                  $totalMF = $maleCount + $femaleCount ;

                                  ?>  
                                  <script>
                                  document.getElementById("totaltext").innerHTML = "<?php echo $totalMF; ?>";
                                  document.getElementById("allmaletext").innerHTML = "<?php echo $maleCount; ?>";
                                  document.getElementById("allfemaletext").innerHTML = "<?php echo $femaleCount; ?>";
                                  document.getElementById("browsingtable").innerHTML = "<?php echo "You are browsing: participants with contact number"; ?>";
                                  </script> 
                                  <?php
                                  
                                  $result_count = mysqli_query($conn,"SELECT COUNT(*) As total_records FROM tblcontact WHERE contactNum IS NOT NULL;");

                                  //sort
                                  if(isset($_POST['sortASCid']))
                                  {
                                    $usesql = "SELECT * FROM tblcontact ORDER BY runnerID ASC LIMIT $offset, $total_records_per_page;";
                                  }
                                  if(isset($_POST['sortDESCid']))
                                  {
                                  $usesql = "SELECT * FROM tblcontact ORDER BY runnerID DESC LIMIT $offset, $total_records_per_page";
                                  }
                                  
                                  //sort
                                  if(isset($_POST['sortASCName']))
                                  {
                                    $usesql = "SELECT * FROM tblcontact ORDER BY firstName ASC LIMIT $offset, $total_records_per_page;";
                                  }
                                  if(isset($_POST['sortDESCName']))
                                  {
                                  $usesql = "SELECT * FROM tblcontact ORDER BY firstName DESC LIMIT $offset, $total_records_per_page";
                                  }

                                  //sort
                                  if(isset($_POST['sortASCAge']))
                                  {
                                    $usesql = "SELECT * FROM tblcontact ORDER BY theAge ASC LIMIT $offset, $total_records_per_page;";
                                  }
                                  if(isset($_POST['sortDESCAge']))
                                  {
                                  $usesql = "SELECT * FROM tblcontact ORDER BY theAge DESC LIMIT $offset, $total_records_per_page";
                                  }

                                  //sort
                                  if(isset($_POST['sortASCGender']))
                                  {
                                    $usesql = "SELECT * FROM tblcontact ORDER BY gender ASC LIMIT $offset, $total_records_per_page;";
                                  }
                                  if(isset($_POST['sortDESCGender']))
                                  {
                                  $usesql = "SELECT * FROM tblcontact ORDER BY gender DESC LIMIT $offset, $total_records_per_page";
                                  }

                                  //sort
                                  if(isset($_POST['sortASCAddress']))
                                  {
                                    $usesql = "SELECT * FROM tblcontact ORDER BY comAddress ASC LIMIT $offset, $total_records_per_page;";
                                  }
                                  if(isset($_POST['sortDESCAddress']))
                                  {
                                  $usesql = "SELECT * FROM tblcontact ORDER BY comAddress DESC LIMIT $offset, $total_records_per_page";
                                  }

                                  //sort
                                  if(isset($_POST['sortASCEmailAdd']))
                                  {
                                    $usesql = "SELECT * FROM tblcontact ORDER BY emailAdd ASC LIMIT $offset, $total_records_per_page;";
                                  }
                                  if(isset($_POST['sortDESCEmailAdd']))
                                  {
                                  $usesql = "SELECT * FROM tblcontact ORDER BY emailAdd DESC LIMIT $offset, $total_records_per_page";
                                  }

                                  //sort
                                  if(isset($_POST['sortASCcNum']))
                                  {
                                    $usesql = "SELECT * FROM tblcontact ORDER BY contactNum ASC LIMIT $offset, $total_records_per_page;";
                                  }
                                  if(isset($_POST['sortDESCcNum']))
                                  {
                                  $usesql = "SELECT * FROM tblcontact ORDER BY contactNum DESC LIMIT $offset, $total_records_per_page";
                                  }

                                  //sort
                                  if(isset($_POST['sortASCdateReg']))
                                  {
                                    $usesql = "SELECT * FROM tblcontact ORDER BY regTime ASC LIMIT $offset, $total_records_per_page;";
                                  }
                                  if(isset($_POST['sortDESCdateReg']))
                                  {
                                  $usesql = "SELECT * FROM tblcontact ORDER BY regTime DESC LIMIT $offset, $total_records_per_page";
                                  }

                                } 
                                elseif( ($_SESSION['active_table'] === 'tbl_search') OR (isset($_POST['theSearch'])) )
                                {

                                  $usesql = "SELECT * FROM tbl_search LIMIT $offset, $total_records_per_page";

                                  $allMale = "SELECT COUNT(*) AS male FROM tbl_search WHERE gender = 'Male';";
                                  $resultMale = $conn->query($allMale);
                                  if ($resultMale) {
                                  $rowMale = $resultMale->fetch_assoc();
                                  $maleCount = $rowMale['male'];
                                  }

                                  $allFemale = "SELECT COUNT(*) AS female FROM tbl_search WHERE gender = 'Female';";

                                  $resultFemale = $conn->query($allFemale);
                                  if ($resultFemale) {
                                    $rowfemale = $resultFemale->fetch_assoc();
                                    $femaleCount = $rowfemale['female'];
                                  }

                                  $totalMF = $maleCount + $femaleCount ;

                                  ?>  
                                  <script>
                                  document.getElementById("totaltext").innerHTML = "<?php echo $totalMF; ?>";
                                  document.getElementById("allmaletext").innerHTML = "<?php echo $maleCount; ?>";
                                  document.getElementById("allfemaletext").innerHTML = "<?php echo $femaleCount; ?>";
                                  document.getElementById("browsingtable").innerHTML = "<?php echo "You are browsing: participants based on your search result"; ?>";

                                  </script> 
                                  <?php                                 
                                 
                                  $result_count = mysqli_query($conn,"SELECT COUNT(*) As total_records FROM tbl_search");
                                  //sort
                                  if(isset($_POST['sortASCid']))
                                  {
                                    $usesql = "SELECT * FROM tbl_search ORDER BY runnerID ASC LIMIT $offset, $total_records_per_page;";
                                  }
                                  if(isset($_POST['sortDESCid']))
                                  {
                                  $usesql = "SELECT * FROM tbl_search ORDER BY runnerID DESC LIMIT $offset, $total_records_per_page";
                                  }
                                  
                                  //sort
                                  if(isset($_POST['sortASCName']))
                                  {
                                    $usesql = "SELECT * FROM tbl_search ORDER BY firstName ASC LIMIT $offset, $total_records_per_page;";
                                  }
                                  if(isset($_POST['sortDESCName']))
                                  {
                                  $usesql = "SELECT * FROM tbl_search ORDER BY firstName DESC LIMIT $offset, $total_records_per_page";
                                  }

                                  //sort
                                  if(isset($_POST['sortASCAge']))
                                  {
                                    $usesql = "SELECT * FROM tbl_search ORDER BY theAge ASC LIMIT $offset, $total_records_per_page;";
                                  }
                                  if(isset($_POST['sortDESCAge']))
                                  {
                                  $usesql = "SELECT * FROM tbl_search ORDER BY theAge DESC LIMIT $offset, $total_records_per_page";
                                  }

                                  //sort
                                  if(isset($_POST['sortASCGender']))
                                  {
                                    $usesql = "SELECT * FROM tbl_search ORDER BY gender ASC LIMIT $offset, $total_records_per_page;";
                                  }
                                  if(isset($_POST['sortDESCGender']))
                                  {
                                  $usesql = "SELECT * FROM tbl_search ORDER BY gender DESC LIMIT $offset, $total_records_per_page";
                                  }

                                  //sort
                                  if(isset($_POST['sortASCAddress']))
                                  {
                                    $usesql = "SELECT * FROM tbl_search ORDER BY comAddress ASC LIMIT $offset, $total_records_per_page;";
                                  }
                                  if(isset($_POST['sortDESCAddress']))
                                  {
                                  $usesql = "SELECT * FROM tbl_search ORDER BY comAddress DESC LIMIT $offset, $total_records_per_page";
                                  }

                                  //sort
                                  if(isset($_POST['sortASCEmailAdd']))
                                  {
                                    $usesql = "SELECT * FROM tbl_search ORDER BY emailAdd ASC LIMIT $offset, $total_records_per_page;";
                                  }
                                  if(isset($_POST['sortDESCEmailAdd']))
                                  {
                                  $usesql = "SELECT * FROM tbl_search ORDER BY emailAdd DESC LIMIT $offset, $total_records_per_page";
                                  }

                                  //sort
                                  if(isset($_POST['sortASCcNum']))
                                  {
                                    $usesql = "SELECT * FROM tbl_search ORDER BY contactNum ASC LIMIT $offset, $total_records_per_page;";
                                  }
                                  if(isset($_POST['sortDESCcNum']))
                                  {
                                  $usesql = "SELECT * FROM tbl_search ORDER BY contactNum DESC LIMIT $offset, $total_records_per_page";
                                  }

                                  //sort
                                  if(isset($_POST['sortASCdateReg']))
                                  {
                                    $usesql = "SELECT * FROM tbl_search ORDER BY regTime ASC LIMIT $offset, $total_records_per_page;";
                                  }
                                  if(isset($_POST['sortDESCdateReg']))
                                  {
                                  $usesql = "SELECT * FROM tbl_search ORDER BY regTime DESC LIMIT $offset, $total_records_per_page";
                                  }

                                } 
                                else 
                                {
                                  $usesql = "SELECT * FROM tbl_runforearth LIMIT $offset, $total_records_per_page";
                                  
                                  $allMale = "SELECT COUNT(*) AS male FROM tbl_runforearth WHERE gender = 'Male';";
                                  $resultMale = $conn->query($allMale);
                                  if ($resultMale) {
                                  $rowMale = $resultMale->fetch_assoc();
                                  $maleCount = $rowMale['male'];
                                  }

                                  $allFemale = "SELECT COUNT(*) AS female FROM tbl_runforearth WHERE gender = 'Female';";

                                  $resultFemale = $conn->query($allFemale);
                                  if ($resultFemale) {
                                    $rowfemale = $resultFemale->fetch_assoc();
                                    $femaleCount = $rowfemale['female'];
                                  }

                                  $totalMF = $maleCount + $femaleCount ;

                                  ?>  
                                  <script>
                                  document.getElementById("totaltext").innerHTML = "<?php echo $totalMF; ?>";
                                  document.getElementById("allmaletext").innerHTML = "<?php echo $maleCount; ?>";
                                  document.getElementById("allfemaletext").innerHTML = "<?php echo $femaleCount; ?>";
                                  document.getElementById("browsingtable").innerHTML = "<?php echo "You are browsing: all participants"; ?>";
                                  </script> 
                                  <?php  
                                  

                                  $result_count = mysqli_query($conn,"SELECT COUNT(*) As total_records FROM tbl_runforearth");
                                  //sort
                                  if(isset($_POST['sortASCid']))
                                  {
                                    $usesql = "SELECT * FROM tbl_runforearth ORDER BY runnerID ASC LIMIT $offset, $total_records_per_page;";
                                  }
                                  if(isset($_POST['sortDESCid']))
                                  {
                                  $usesql = "SELECT * FROM tbl_runforearth ORDER BY runnerID DESC LIMIT $offset, $total_records_per_page";
                                  }
                                  
                                  //sort
                                  if(isset($_POST['sortASCName']))
                                  {
                                    $usesql = "SELECT * FROM tbl_runforearth ORDER BY firstName ASC LIMIT $offset, $total_records_per_page;";
                                  }
                                  if(isset($_POST['sortDESCName']))
                                  {
                                  $usesql = "SELECT * FROM tbl_runforearth ORDER BY firstName DESC LIMIT $offset, $total_records_per_page";
                                  }

                                  //sort
                                  if(isset($_POST['sortASCAge']))
                                  {
                                    $usesql = "SELECT * FROM tbl_runforearth ORDER BY theAge ASC LIMIT $offset, $total_records_per_page;";
                                  }
                                  if(isset($_POST['sortDESCAge']))
                                  {
                                  $usesql = "SELECT * FROM tbl_runforearth ORDER BY theAge DESC LIMIT $offset, $total_records_per_page";
                                  }

                                  //sort
                                  if(isset($_POST['sortASCGender']))
                                  {
                                    $usesql = "SELECT * FROM tbl_runforearth ORDER BY gender ASC LIMIT $offset, $total_records_per_page;";
                                  }
                                  if(isset($_POST['sortDESCGender']))
                                  {
                                  $usesql = "SELECT * FROM tbl_runforearth ORDER BY gender DESC LIMIT $offset, $total_records_per_page";
                                  }

                                  //sort
                                  if(isset($_POST['sortASCAddress']))
                                  {
                                    $usesql = "SELECT * FROM tbl_runforearth ORDER BY comAddress ASC LIMIT $offset, $total_records_per_page;";
                                  }
                                  if(isset($_POST['sortDESCAddress']))
                                  {
                                  $usesql = "SELECT * FROM tbl_runforearth ORDER BY comAddress DESC LIMIT $offset, $total_records_per_page";
                                  }

                                  //sort
                                  if(isset($_POST['sortASCEmailAdd']))
                                  {
                                    $usesql = "SELECT * FROM tbl_runforearth ORDER BY emailAdd ASC LIMIT $offset, $total_records_per_page;";
                                  }
                                  if(isset($_POST['sortDESCEmailAdd']))
                                  {
                                  $usesql = "SELECT * FROM tbl_runforearth ORDER BY emailAdd DESC LIMIT $offset, $total_records_per_page";
                                  }

                                  //sort
                                  if(isset($_POST['sortASCcNum']))
                                  {
                                    $usesql = "SELECT * FROM tbl_runforearth ORDER BY contactNum ASC LIMIT $offset, $total_records_per_page;";
                                  }
                                  if(isset($_POST['sortDESCcNum']))
                                  {
                                  $usesql = "SELECT * FROM tbl_runforearth ORDER BY contactNum DESC LIMIT $offset, $total_records_per_page";
                                  }

                                  //sort
                                  if(isset($_POST['sortASCdateReg']))
                                  {
                                    $usesql = "SELECT * FROM tbl_runforearth ORDER BY regTime ASC LIMIT $offset, $total_records_per_page;";
                                  }
                                  if(isset($_POST['sortDESCdateReg']))
                                  {
                                  $usesql = "SELECT * FROM tbl_runforearth ORDER BY regTime DESC LIMIT $offset, $total_records_per_page";
                                  }

                                } 

                                $total_records = mysqli_fetch_array($result_count);
                                $total_records = $total_records['total_records'];
                                $total_no_of_pages = ceil($total_records / $total_records_per_page);
                                $second_last = $total_no_of_pages - 1; // total pages minus 1


                               // var_dump($_POST);
                               // echo "<br>";
                               // var_dump($_GET['page_no']);
                                                

                                $result = $conn->query($usesql);

                                if ($result->num_rows > 0)
                                {
                                  $total_rows = $result->num_rows;
                                  while($row = $result->fetch_assoc() )
                                  {
                                    
                                    if($row['theAge'] < 1)
                                    {
                                      $ageifLessOne = "Less than 1 yr old";
                                    }
                                    else
                                    {
                                      $ageifLessOne = $row['theAge'] . " yrs old";
                                    }

                                      echo '<tr class="resRow hidemo">';
                                      echo '<td class="classrunnerID">' . $row['runnerID'] . '</td>';
                                      echo '<td>' . $row['firstName'] . ' ' . $row['lastName'] . '</td>';
                                      echo '<td>' . $ageifLessOne . '</td>';
                                      echo '<td>' . $row['gender'] . '</td>';
                                      echo '<td>' . $row['comAddress'] . '</td>';
                                      echo '<td>' . $row['emailAdd'] . '</td>';
                                      echo '<td>' . $row['contactNum'] . '</td>';
                                      echo '<td>' . $row['regTime'] . '</td>';
                                       echo '</tr>';

                                       echo '<tr class="resRow hidedes">';
                                        echo ' <th class="thethtableresult"># :</th>';
                                       echo '<td class="classrunnerID">' . $row['runnerID'] . '</td>';
                                       echo '</tr>';

                                       echo '<tr class="resRow hidedes">';
                                       echo ' <th class="thethtableresult">Name :</th>';
                                       echo '<td>' . $row['firstName'] . ' ' . $row['lastName'] . '</td>';
                                       echo '</tr>';

                                       echo '<tr class="resRow hidedes">';
                                       echo ' <th class="thethtableresult">Age :</th>';
                                       echo '<td>' . $ageifLessOne . '</td>';
                                       echo '</tr>';

                                       echo '<tr class="resRow hidedes">';
                                        echo ' <th class="thethtableresult">Gender :</th>';
                                        echo '<td>' . $row['gender'] . '</td>';
                                       echo '</tr>';

                                       echo '<tr class="resRow hidedes">';
                                        echo ' <th class="thethtableresult">Address :</th>';
                                       echo '<td>' . $row['comAddress'] . '</td>';
                                       echo '</tr>';

                                       echo '<tr class="resRow hidedes">';
                                       echo ' <th class="thethtableresult">Email Address :</th>';
                                       echo '<td>' . $row['emailAdd'] . '</td>';
                                       echo '</tr>';

                                       echo '<tr class="resRow hidedes">';
                                       echo ' <th class="thethtableresult">Contact Number :</th>';
                                       echo '<td class="contactNum">' . $row['contactNum'] . '</td>';
                                       echo '</tr>';

                                       echo '<tr class="resRow hidedes mobtr">';
                                       echo ' <th class="thethtableresult">Date Registered :</th>';
                                       echo '<td>' . $row['regTime'] . '</td>';
                                        echo '</tr>';
                                  }
                                }
                                else 
                                {
                                  echo "<tr><td colspan='8'><div class='text-center'>Please try selecting list on the left. Otherwise, no results found</div></td></tr>";
                                  //die("Query error: " . $conn->error());
                                }
                              ?>
                  </tbody>  
                </table>         


                <div class="row d-flex align-items-center pt-2">
                  <div class="col-lg-6 col-sm-12">
                    <div class="showpageof">
                    <?php
                      $first_record = $offset + 1;
                      $last_record = min($offset + $total_records_per_page, $total_records);
                      
                      echo "Showing " . $first_record . " - " . $last_record . " of " . $total_records . " entries";
                    ?>
                      
                    </div>
                  </div>
                  <div class="col-lg-6 col-sm-12">
                  <ul class="pagination ulpagi d-flex align-items-center">
                    <li <?php if($page_no <= 1){ echo "class='d-none'"; } ?>>
                      <a <?php if($page_no > 1){echo "href='?page_no=$previous_page'";} ?>>
                      Previous &nbsp;</a>
                    </li>
                        
                    <li>
                      <div class="abox"><?php echo $page_no; ?></div>
                    </li>

                    <li <?php if($page_no >= $total_no_of_pages){echo "class='d-none'";} ?>>
                      <a <?php if($page_no < $total_no_of_pages) {echo "href='?page_no=$next_page'";} ?>>&nbsp; Next</a>
                    </li>
                  </ul>
                  </div>
                </div>  

                <?php
                  if($_SESSION['active_table'] === 'tblbelow39')
                  {
                    $usesql = "SELECT * FROM tblbelow39 LIMIT $offset, $total_records_per_page";
                    //pagi
                    $result_count = mysqli_query($conn,"SELECT COUNT(*) As total_records FROM tblbelow39 WHERE theAge <= 39;");
                  }
                  elseif($_SESSION['active_table'] === 'tblabove40')
                  {
                    $usesql = "SELECT * FROM tblabove40 LIMIT $offset, $total_records_per_page";
                    //pagi
                    $result_count = mysqli_query($conn,"SELECT COUNT(*) As total_records FROM tblabove40 WHERE theAge >= 40;");
                  }
                  elseif($_SESSION['active_table'] === 'tblcontact')
                  {
                    $usesql = "SELECT * FROM tblcontact LIMIT $offset, $total_records_per_page";
                    //pagi
                    $result_count = mysqli_query($conn,"SELECT COUNT(*) As total_records FROM tblcontact WHERE contactNum IS NOT NULL;");
                  }
                  elseif($_SESSION['active_table'] === 'tbl_search')
                  {
                    $usesql = "SELECT * FROM tbl_search LIMIT $offset, $total_records_per_page";
                    //pagi
                    $result_count = mysqli_query($conn,"SELECT COUNT(*) As total_records FROM tbl_search");
                  }
                  else
                  {
                    $usesql = "SELECT * FROM tbl_runforearth LIMIT $offset, $total_records_per_page";
                    //pagi
                    $result_count = mysqli_query($conn,"SELECT COUNT(*) As total_records FROM tbl_runforearth");
                  }

                ?>


            </div> <!-- sorterResultColInner -->            
            </div> <!-- sortRow -->
          </div> <!-- sorterResultCol -->
        
    </div> <!-- row -->
  </div> <!-- section1-runifo -->
</div><!-- section1-holder-runifo -->



  <div class="container-fluid-water-img-holder">
    <div class="container-fluid-water-img"></div>
    <div class="water-img img-fluid"><img src="img/background.png"></div>
  </div>


<div class="container-fluid blue-bot"></div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>




