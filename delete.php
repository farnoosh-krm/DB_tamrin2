<?php
include "proces.php";
$phonenumber=$_GET["phonenumber"];
mysqli_query($link,"delete from usertable where phonenumber=$phonenumber");
?>

<script type="text/javascript">
    window.location="editlist.php";    
</script>