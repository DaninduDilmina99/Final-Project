<?php

$Name= $_GET['donator_name'];
$Email=$_GET['donator_email'];
$Phone_Number=$_GET['donator_phone'];
$Gender=$_GET['donator_gendr'];

echo "<table border='2'>
<tr>
<td>Name</td>
<td>Email</td>
<td>Phone_Number</td>
<td>Gender</td>
</tr>
<tr>
<td>$Name</td>
<td>$Email</td>
<td>$Phone_Number</td>
<td>$Gender</td>
</tr>
</table>";




?>