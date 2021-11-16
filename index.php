<?php
require_once('config.php');

?>



<!DOCTYPE html>
<html>
<head>
    <title>registration</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
 </head>

<body>
    <div>
        <?php
            if(isset($_POST['create'])){
                $firstname=$_POST['firstname'];
                $lastname=$_POST['lastname'];
                $address=$_POST['address'];
                $phonenumber=$_POST['phonenumber'];
                $sex=$_POST['sex'];
                $birthdate=$_POST['birthdate'];
                
                $sql="INSERT INTO usertable (firstname,lastname,address,phonenumber,gender,birthdate) VALUES(?,?,?,?,?,?)";
                $stminsert=$db->prepare($sql);
                $result=$stminsert->execute([$firstname,$lastname,$address,$phonenumber,$sex,$birthdate]);
                if($result){
                    echo "successfully saved";
                }
                else{
                    echo"error";
                }
                
                echo $firstname ,"  ",$lastname,"   ",$address,"    ",$phonenumber,"    ",$sex,"    ",$birthdate;
                
                
               
                
            }
        ?>
    
    </div>
    
    <div>
        <center>
        <div>
            
            
            <br>
            <a href="index.php">
                <input class="btn btn-primary" type="submit" name="signup" value="sign up" />
            </a>
            
            <a href="showlist.php">
                <input class="btn btn-primary" type="submit" name="showlist" value="show list" />
            </a>
            
            <a href="editlist.php">
                <input class="btn btn-primary" type="submit" name="edit" value="edit" />
            </a>
            
            
            
            <hr class="mb-3">
        </div>
        </center>
        
        
        <form action="index.php" method="post">
            <div class="container">
                <div class="row">
                    <div class="col-sm-3">
                        <h1>registration</h1>
                        <hr class="mb-3">
            
                        <label for="firstname"><b>first name :</b></label>
                        <input class="form-control" type="text" name="firstname" required>
                        <label for="lastname"><b>last name :</b></label>
                        <input class="form-control" type="text" name="lastname" required>
                        
            
                        <label for="address"><b>address :</b></label>
                        <input class="form-control" type="text" name="address" required>
                        
            
                        <label for="phonenumber"><b>phone number :</b></label>
                        <input class="form-control" type="text" name="phonenumber" required>
                        <br>
            
                        <label for="sex"><b>gender :</b></label><br>
                        <input type="radio" name="sex" value="male" /> Male<br />
                        <input type="radio" name="sex" value="female" /> Female
                        <br><br>
            
                        <label for="birthdate"><b>birthdate :</b></label>
                        <input class="form-control" type="date" name="birthdate" id="birhdate" required>
                        
                        
                        <hr class="mb-3">
                        <input class="btn btn-primary" type="submit" id="register" name="create"  value="sign up" />
                    </div>
                    
                </div>
            </div>
            
        </form>
    
    </div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>    
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script type="text/javascript">
     $(function(){
         $('#register').click(function(){
             Swal.fire({
                    'title':'regisration',
                    'text':'seccessfully saved.',
                    'type':'seccess'
              })
          });
                    
      });
          
    </script>

</body>
</html>