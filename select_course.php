<!-- =======================================================
    20-MAR-19   A-01-01     aadake     ##1     Created.
    ======================================================= -->
<?php
require 'db.php';
$sql = "SELECT * FROM Course_Details";

$result = mysqli_query($connection,$sql);


if ($result) {
//printf("Error: %s\n", mysqli_error($connection));
exit();
}
else{
$res = "<select name=course>";
while($row = mysqli_fetch_array($result) ){
 $Course_Name = $row['Course_Name'];
 $Course_Fees = $row['Course_Fees'];
 $res += "<option value=".$Course_Fees.">".$Course_Name."</option>";
 
}
$res +="</select>";
echo $res;
}
?>