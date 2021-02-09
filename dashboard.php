
<!DOCTYPE html>
<html lang="en">
<?php
$con = mysqli_connect("localhost","root","","register");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  else
  {
   

    if(count($_POST)>0) {
      $sql = "INSERT INTO company (comp_name, comp_desc) VALUES ('" . $_POST["addcompany"] . "','" . $_POST["addcompdesc"] . "')";
      mysqli_query($con,$sql);
      $current_id = mysqli_insert_id($con);
      if(!empty($current_id)) {
        $message = "New Company Added Successfully";
        header("Location: dashboard.php");
      }
    }
  

 
      ?>
<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">

  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
   CAREPOINT
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
  <!-- CSS Files -->
  <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="assets/css/paper-dashboard.css?v=2.0.1" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="assets/demo/demo.css" rel="stylesheet" />
</head>

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="white" data-active-color="danger">
      <div class="logo">
      
          <!-- <p>CT</p> -->
        </a>
        <a href="" class="simple-text logo-normal">
          MAGCOOP
          <!-- <div class="logo-image-big">
            <img src="../assets/img/logo-big.png">
          </div> -->
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="active ">
            <a href="">
              <i class="nc-icon nc-bank"></i>
              <p>Dashboard</p>
            </a>
          </li>
          <li>
            <a href="">
              <i class="nc-icon nc-diamond"></i>
              <p>Laboratory</p>
            </a>
          </li>
          <!--
          <li>
            <a href="./map.html">
              <i class="nc-icon nc-pin-3"></i>
              <p>Maps</p>
            </a>
          </li>
          <li>
            <a href="./notifications.html">
              <i class="nc-icon nc-bell-55"></i>
              <p>Notifications</p>
            </a>
          </li>
          <li>
            <a href="./user.html">
              <i class="nc-icon nc-single-02"></i>
              <p>User Profile</p>
            </a>
          </li>
          <li>
            <a href="./tables.html">
              <i class="nc-icon nc-tile-56"></i>
              <p>Table List</p>
            </a>
          </li>
          <li>
            <a href="./typography.html">
              <i class="nc-icon nc-caps-small"></i>
              <p>Typography</p>
            </a>
          </li>
          <li class="active-pro">
            <a href="./upgrade.html">
              <i class="nc-icon nc-spaceship"></i>
              <p>Upgrade to PRO</p>
            </a>
          </li>-->
        </ul>
      </div>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-absolute fixed-top navbar-transparent"  >
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-toggle">
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
            </div>
            <a class="navbar-brand">File Management </a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navigation">
         
            <ul class="navbar-nav">
            <li class="nav-item">
           
            <a href="main.php">Home</a>
                 
              </li>
            &nbsp&nbsp
              <li class="nav-item">
                
            <a href="logout.php">Logout</a>
                 
              </li>


            
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card ">
              <div class="card-header ">
              
              <?php $results = mysqli_query($con, "SELECT * FROM company"); ?>

              <form name="frmUser" method="post" action="">
                  <div style="">
                  <div class="message"><?php if(isset($message)) { echo $message; } ?></div>
                 
                  <div align="right" style="padding-bottom:5px; "> <a href="#addCompanyModal" class="btn btn-success" data-toggle="modal"><span>Add New Company</span></a></div>
                  <table width="500" class="table table-hover table-bordered table-striped">
                   
                  <thead class="thead"  style="background-color:#38d39f"  >
                  <tr>
                    <th scope="col">Company</th>
                    <th scope="col">Description</th>
                  
                   <!-- <th scope="col">CRUD Actions</th> -->
                  </tr>
                </thead>
                      <?php
                        $i=0;
                        while($row = mysqli_fetch_array($results)) {
                        if($i%2==0)
                        $classname="evenRow";
                        else
                        $classname="oddRow";
                        ?>
                        <tr class="<?php if(isset($classname)) echo $classname;?>">
                        <td><?php echo $row["comp_name"]; ?></td>
                        <td><?php echo $row["comp_desc"]; ?></td>
                      </tr>
                      
                        <?php
                        $i++;
                        }
                        ?>
                  </table>
                </form>
                                    
                       
              </div>
            </div>
          </div>
        </div>
      


        <div id="addCompanyModal" class="modal fade">
        <div class="modal-dialog">
          <div class="modal-content">
            <form method="post">
              <div class="modal-header">						
                <h4 class="modal-title">Add Company</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              </div>
              <div class="modal-body">					
                <div class="form-group">
                  <label>Company</label>
                  <input type="text" name="addcompany" class="form-control" required>
                </div>
                <div class="form-group">
                  <label>Description</label>
                  <input type="text" name="addcompdesc" class="form-control" required>
                </div>		
              </div>
              <div class="modal-footer">
                <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                <input type="submit" name="submit" value="Submit" class="btnSubmit btn btn-primary" style="background-color:#38d39f">
              </div>
            </form>
          </div>
        </div>
      </div>



      </div>
    
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="../assets/js/core/jquery.min.js"></script>
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chart JS -->
  <script src="../assets/js/plugins/chartjs.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="../assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/paper-dashboard.min.js?v=2.0.1" type="text/javascript"></script><!-- Paper Dashboard DEMO methods, don't include it in your project! -->
  <script src="../assets/demo/demo.js"></script>
  <script>
    $(document).ready(function() {
      // Javascript method's body can be found in assets/assets-for-demo/js/demo.js
      demo.initChartsPages();
    });
  </script>

<?php } ?>
</body>

</html>
