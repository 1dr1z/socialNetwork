<?php 
include("includes/header.php");
$mysqli = new mysqli("localhost", "root", "", "social"); 
$query = "SELECT * FROM users";
 
 
echo '<table border="0" cellspacing="2" cellpadding="2" class="users-table"> 
      <tr class="users-header-row"> 
          <td> <font face="Arial">First Name</font> </td> 
          <td> <font face="Arial">Last Name</font> </td> 
          <td> <font face="Arial">Username</font> </td> 
          <td> <font face="Arial">Email</font> </td> 
          <td> <font face="Arial">Delete User</font> </td> 
      </tr>';
 
if ($result = $mysqli->query($query)) {
    while ($row = $result->fetch_assoc()) {
        $field1name = $row["first_name"];
        $field2name = $row["last_name"];
        $field3name = $row["username"];
        $field4name = $row["email"];
        $field5name = "<a href='delete.php?id=".$row["id"]."'>Delete user</a>";
 
        echo '<tr class="users-row"> 
                  <td>'.$field1name.'</td> 
                  <td>'.$field2name.'</td> 
                  <td>'.$field3name.'</td> 
                  <td>'.$field4name.'</td> 
                  <td>'.$field5name.'</td> 
              </tr>';
    }
    $result->free();
} 
?>
