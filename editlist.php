<?php
##require_once('config.php');
include "proces.php";
?>



<!DOCTYPE html>
<html>
<head>
    <title>update</title>
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
                <input class="btn btn-primary" type="submit" name="editt" value="edit" />
            </a>
            
            
            
            <hr class="mb-3">
        </div>
        </center>
        
        
        
    
    <table>
        <thead>
            <tr>
                <th>first_name</th>
                <th>last_name</th>
                <th>address</th>
                <th>phone_number</th>
                <th>gender</th>
                <th>birthdate</th>
                <th>edit</th>
                <th>delete</th>
            </tr>
        
        </thead>
        
        <tbody>
            
            <?php
                $res=mysqli_query($link,"select * from usertable ");
                while($row=mysqli_fetch_array($res)){
                    echo "<tr>";
                    echo "<td>"; echo $row["firstname"]; echo "</td>";
                    echo "<td>"; echo $row["lastname"]; echo "</td>";
                    echo "<td>"; echo $row["address"]; echo "</td>";
                    echo "<td>"; echo $row["phonenumber"]; echo "</td>";
                    echo "<td>"; echo $row["gender"]; echo "</td>";
                    echo "<td>"; echo $row["birthdate"]; echo "</td>";
                    echo "<td>";  ?> <a href="update.php?phonenumber=<?php echo $row["phonenumber"]; ?>"><button type="button" class="btn btn-success">edit</button></a>  <?php echo "</td>";
                    echo "<td>";  ?> <a href="delete.php?phonenumber=<?php echo $row["phonenumber"]; ?>"><button type="button" class="btn btn-danger">delete</button></a> <?php echo "</td>";
                    echo "</tr>";
                }
            
            
            ?>
            
        </tbody>
    </table>


</body>
    


    
    
</html>