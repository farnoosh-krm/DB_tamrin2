

<?php
include "proces.php";
$firstname="";
$lastname="";
$address="";
$phonenumber="";
$gender="";
$birthdate=""
?>
<?php
    
    $result=mysqli_query($link,"select * from usertable");
    while($row=mysqli_fetch_array($result)){
        $firstname=$row["firstname"];
        $lastname=$row["lastname"];
        $address=$row["address"];
        $phonenumber=$row["phonenumber"];
        $gender=$row["gender"];
        $birthdate=$row["birthdate"];
}
?>


<html>
<head>
    
    <title>update</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    
</head>
    
<body>
    <br><br><br>
    
   <form  action="update.php" name="editform" method="post">
            <div class="form-row align-items-center">
                <div class="col-auto">
                <label class="sr-only" for="firstname">first_name</label>
                <input type="text" class="form-control mb-2" id="firstname" placeholder="firstname" value="<?php echo $firstname; ?>">
            </div>
            <div class="form-row align-items-center">
                <div class="col-auto">
                <label class="sr-only" for="lastname">last_name</label>
                <input type="text" class="form-control mb-2" id="lastname" placeholder="lastname" value="<?php echo $lastname; ?>">
            </div>
            <div class="form-row align-items-center">
                <div class="col-auto">
                <label class="sr-only" for="addreaa">address</label>
                <input type="text" class="form-control mb-2" id="address" placeholder="address" value="<?php echo $address; ?>">
            </div>
            <div class="form-row align-items-center">
                <div class="col-auto">
                <label class="sr-only" for="phonenumber">phonenumber</label>
                <input type="text" class="form-control mb-2" id="phonenumber" placeholder="phonenumber" value="<?php echo $phonenumber; ?>">
            </div>
            <div class="form-row align-items-center">
                <div class="col-auto">
                <label class="sr-only" for="gender">gender</label>
                <select class="form-control mb-2" id="gender" name="gender" value="<?php echo $gender; ?>">
                    <option>male</option>
                    <option>faemale</option>
                </select>
            </div>
            <div class="form-row align-items-center">
                <div class="col-auto">
                <label class="sr-only" for="datebirth">datebirth</label>
                <input type="date" class="form-control mb-2" id="datebirth" value="<?php echo $birthdate; ?>" >
            </div>
            
            <div class="form-row align-items-center">
            <div class="col-auto">
            <button type="submit" class="btn btn-primary mb-2" name="updatee" id="update">update</button>
            </div>
            </div>
            </div>
            </div>
            </div>
            </div>
            </div>
            </div>
        </form>
    <hr class="mb-2"><br> 
    
    
</body>
    
<?php
    if(isset($_POST["update"])){
        mysqli_query($link,"update usertable set firstname='$_POST[firstname]',lastname='$_POST[lastname]',address='$_POST[address]',phonenumber='$_GET[phonenumber]',gender='$_POST[gender]',birthdate='$_POST[birthdate]',");
        
    }
?>

    
</html>





