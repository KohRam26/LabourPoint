<?php
include_once('../config.php');
session_start();
if(!isset($_SESSION['id'])){
    header('location:../login.php?msg=please_login');
}
?>
<!DOCTYPE HTML>
<html>
    <head>
		<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../bootstrap/dist/css/bootstrap.min.css">
    <link href="../css/main.css" rel="stylesheet">
    <link href="../css/employer.css" rel="stylesheet">
    <title> Add Ads </title>
    </head>
    <body>
    <div id="nav">
        <nav>
            <div class="navbar" id="insidenav">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#">Job Application</a>
                </div>

                <ul class="nav navbar-nav">
                    <li><a href="../employer/profile.php"><?php echo $_SESSION['name']; ?><span class="sr-only">(current)</span></a></li>
                    <li class="active"><a href="#">Add Ads</a></li>

                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Menu<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="post_jobs.php">Add Ads</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="managejobs.php">Manage Ads</a></li>
                        </ul>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Account<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                          <li><a href="edit_profile.php">Edit Profile</a></li>
                          <li role="separator" class="divider"></li>
                          <li><a href="change_pass.php">Change Password</a></li>
                        </ul>
                    </li>
                    <li><a href="../logout.php">Logout</a></li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </div><!-- /.container-fluid -->


        <div class="container">
        <br/>
        <center><h2>Post Jobs </h2></center>
        <div class="page-header" style="background: #f4511e"></div>
        <h3> Job Details: </h3>
          <div class="page-header" />
        <form id="job_post" role="form" onsubmit="return checkForm();" method="post" class="form-horizontal" action="process_postjob.php">

            <div class="form-group">
                <label for="desig" class="control-label col-sm-2">Job Title/ Designation:</label>
                 <div class="col-sm-4">
                      <input type="text" class="form-control" name="desig" id="desig" >
                 </div>
                 <label id="deser" class="error"></label>
            </div>



             <div class="form-group">
                <label for="job_desc" class="control-label col-sm-2">Job Description:</label>
                  <div class="col-sm-5">  <textarea class="form-control" rows="5" id="job_desc" name="jobdesc" ></textarea> </div>
                <label class="error" id="jober"></label>
            </div>

             <div class="form-inline form-group">
                
             </div>

            <div class="form-inline form-group">
                <label for="pay-div" class="control-label col-sm-2">Basic Pay:</label>
                  <div class="col-sm-4" id="pay-div">
                         <select class="form-control" id="money" name="money">
                           <option value="Rs"> Rs </option>
                           <option value="USD"> USD </option>
                           </select>
                        <input type="text" class="form-control" id="pay" name="pay" required onblur="validate('digit','payer',this.value)">
                   </div>
                   <label class="error" id="payer"></label>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2">Job Category:</label>
                <div class="col-sm-5">
                <select name="jobtype" id="jobtype" class="form-control"  required>
                    <option selected="selected" value="">- Select a category -</option>
                    <option value="Janitor">Janitor</option>
                    <option value="Plumber">Plumber</option>
                    <option value="Electrician">Electrician</option>
                    <option value="Watchman">Watchman</option>
                    <option value="Repairman">Repairman</option>

                </select>
                </div>
            </div>
           
                    </div>
                </div>
                <div class="form-group">
                    
                </div>
                <div class="page-header" />
              
                <div class="form-group col-sm-2">
                     <button class="btn btn-lg btn-primary btn-block" type="submit" id="postbtn">Post Job</button>
        </form>
           </div>
    </body>

    <script>
             function checkForm() {
            // Fetching values from all input fields and storing them in variables.
            var desig = document.getElementById("deser").innerHTML;
            var desc = document.getElementById("jober").innerHTML;
            var pay = document.getElementById("payer").innerHTML;
            //Check input Fields Should not be blanks.

            if(desig == '' && desc == '' && pay=='') {
               return true;

            }
            else {
            alert("Fill in with correct information");
                return false;

            }
        }
  </script>
 <script type="text/javascript" src="../js/validate.js"></script>
 <script src="../js/jquery-1.12.0.min.js"></script>
 <script src="../js/bootstrap.min.js"></script>

</html>
