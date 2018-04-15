<?php

while($row = mysql_fetch_object($result)){


?>
    <tr>
        <td>
            <?php echo $row->name;?>
        </td>
        <td>
            <?php echo $row->age;?>
        </td>
        <td>
            <?php echo $row->gender;?>
        </td>
        <td>
            <?php echo $row->weight;?>
        </td>
        <td>
            <?php echo $row->height;?>
        </td>
        <td>
            <?php echo $row->email;?>
        </td>
        <td>
            <?php echo $row->phone;?>
        </td>
        <td>G
            <?php echo $row->pwd;?>
        </td>
        <td> <a href="listing.php?id =
            <?php echo $row->id;?>" onclick="return confirm('Are You Sure')">Delete
        </a> | <a href="Sign_up1.php?id =
            <?php echo $row->id;?>" onclick="return confirm('Are You Sure')">Edit
        </a> </td>
        <tr>
            <? php } ?>
