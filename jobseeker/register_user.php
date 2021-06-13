  <?php
    session_start();
      if(!isset($_SESSION['user_id'])){
        header('location: ../basic_reg.php?msg=first_reg_basic');
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
        <link href="../css/jobseeker.css" rel="stylesheet">
        <title>Complete Profile</title>
    </head>
    <body>

        <nav class="navbar" id="insidenav">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#">Job Application</a>
                </div>
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#">Jobseeker Registration</a></li>

               </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="../login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
               </ul>
             </div>
         </nav>

<div class="container">

    <div class="container">
        <div class="jumbotron">
            <h1>Complete Your Profile & find Jobs</h1>
           
        </div>

    <FORM id="reguser" onsubmit="return checkForm()" METHOD="post" ACTION="process_user.php" enctype="multipart/form-data" class="form-horizontal">



    <div class="page-header"></div>
    <h3 class="h3style">Your Information</h3>



   <div class="form-group">
        <label class="control-label col-sm-3" for="name">Mention your Full Name:</label>
                <div class="col-sm-4">
                    <input type="text" id="uname" placeholder="Your Name" name="uname" class="form-control"
                    required onblur="validate('username','nameerror',this.value)">
                </div>
         <label id="nameerror" class="error"></label>
    </div>

<div class="form-group">
    <label class="control-label col-sm-3" for="address"> Address: </label>
        <div class="form-inline col-sm-7">
               <input type="text" id="address" placeholder="Building No." name="BuildId" class="form-control" style="width:100px;" required onblur="validate('buildno','buildnoerror',this.value)">

                <input type="text" id="address" placeholder="Street Name" name="StreetId" class="form-control" style="width:200px;" required onblur="validate('streetname','streetnameerror',this.value)">

                <input type="number" id="address" placeholder="Pincode" name="Pin" class="form-control" style="width:100px;" required onblur="validate('pinno','pinnoerror',this.value)">
                <label id="buildnoerror" class="error"></label>
                <label id="streetnameerror" class="error"></label>
                <label id="pinnoerror" class="error"></label>
        </div>

</div>
 <div class="form-group">
     <label class="control-label col-sm-3" for="mobno">Enter your Mobile number:</label>
                 <div class="col-sm-3"><input type="text" name="mobno" placeholder=" Mobile number" class="form-control" id="mobno"
                    required onblur="validate('mobilenum','mobnoerror',this.value)">
                 </div>
                  <label id="mobnoerror" class="error"></label>
      </div>
<div class="form-group">
    <label class="control-label col-sm-3" for="Location"> Location: </label>
        <div class="form-inline col-sm-7" >
               <input type="text" id="Location" placeholder="Country" name="Country" class="form-control" style="width:130px;" required onblur="validate('country','countryerror',this.value)">

                <input type="text" id="Location" placeholder="State" name="State" class="form-control" style="width:130px;" required onblur="validate('state','stateerror',this.value)">

                <input type="text" id="Location" placeholder="City" name="City" class="form-control" style="width:130px;" required onblur="validate('city','cityerror',this.value)">
                <label id="countryerror" class="error"></label>
                <label id="stateerror" class="error"></label>
                <label id="cityerror" class="error"></label>
        </div>
</div>

<div class="page-header"> </div>

        <div class="form-group form-inline col-sm-10">

        <button class="btn btn-success" type="submit"  id="reg" value="submit">Create Profile</button>
        <label class="col-sm-2"></label>
        <button class="btn btn-danger" type="reset" id="reset"> Reset </button>

</div>

    </form>

        <script type="text/javascript" src="../js/validate.js"></script>
    <script src="../js/jquery-1.12.0.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script type="text/javascript">
            function checkForm() {

                // Fetching values from all input fields and storing them in variables.
                var name = document.getElementById("nameerror").innerHTML;
                var address1 = document.getElementById("buildnoerror").innerHTML;
                var address2 = document.getElementById("streetnameerror").innerHTML;
                var address3 = document.getElementById("pinnoerror").innerHTML;
                var mobno = document.getElementById("mobnoerror").innerHTML;
                var location1 = document.getElementById("countryerror").innerHTML;
                var location2 = document.getElementById("stateerror").innerHTML;
                var location3 = document.getElementById("cityerror").innerHTML;
                // var skills = document.getElementById("skillerror").innerHTML;
                //Check input Fields Should not be blanks.

                if(name == "" && address1 == "" && address2 == "" && address3 == "" && mobno == '' && skills =='') {
                    //document.getElementById("reguser").submit();
                                     return true;
                }
                else {
                alert("Fill in with correct information");
                                     return false;

                }
            }


 </script>
    </body>
    </html>
