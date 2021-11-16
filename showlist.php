<!DOCTYPE html>
<html>
<head>
    <title>the list of users</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <style>
        table{
            border-collapse: collapse;
            width: 100%;
            color: black
            text-align: center;
        }
        th{
            background-color: cornflowerblue;
            color: black;
        }
        
    </style>
</head>

<body>
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
    </center><br><br>
    
    <table>
                <tr>
                    <th>first_name</th>
                    <th>last_name</th>
                    <th>address</th>
                    <th>phone_number</th>
                    <th>gender</th>
                    <th>birthdate</th>
        
                </tr>
    
        
        <?php
        $conn=mysqli_connect("localhost","root","","userdatabase");
        if($conn->connect_error){
            die("connection failed:".$conn->connect_error);
        }
        $conn->set_charset("utf-8");
        $sql="SELECT firstname,lastname,address,phonenumber,gender,birthdate FROM usertable";
        $result=$conn->query($sql);
        
        
        
        if($result->num_rows >0){
            while($row = $result -> fetch_assoc()){
                
                echo "<tr><td>".$row["firstname"]."</td><td>".$row["lastname"]."</td><td>".$row["address"]."</td><td>".$row["phonenumber"]."</td><td>".$row["gender"]."</td><td>".$row["birthdate"]."</tr>";
            }
            echo '
            
            </table>
            
            ';
        }
        else{
            echo "no result";
        }
        
        ?>
    </table>
    
</body>
</html>