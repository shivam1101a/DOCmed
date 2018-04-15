<?php
include "connection.php";
if(isset($_GET['id'])){
&sql="delete from registration where id = '".$_GET['id']."'";
$result = mysql_query($sql);
}
$sql = "select * from registration";
$result = mysql_query($sql);
?>
<html>
    <body>
        <table width = "100%" border = "1" cellspacing = "1" cellpadding = "1">
            <tr>
                <td>Name</td>
                <td>Age</td>
                <td>Gender</td>
                <td>Weight</td>
                <td>Height</td>
                <td>Phone no:</td>
                <td>Email</td>
                <td>Password</td>
            </tr>
        </table>
    </body>
</html>
