<!DOCTYPE html>  
<html>
<head>
<title>Registration form</title>
</head>
 
<body>
	<form method="post" action="<?= base_url() ?>Crud/savedata">
		<table width="600" border="1" cellspacing="5" cellpadding="5">
  <tr>
    <td width="230">First Name </td>
    <td width="329"><input type="text" name="first_name"/></td>
  </tr>
  <tr>
    <td>Last Name </td>
    <td><input type="text" name="last_name"/></td>
  </tr>
  <tr>
    <td>Email ID </td>
    <td><input type="email" name="email"/></td>
  </tr>
  <tr>
    <td colspan="2" align="center"><input type="submit" name="save" value="Save Data"/></td>
  </tr>
</table>
<table width="600" border="0" cellspacing="5" cellpadding="5">
  <tr style="background:#CCC">
    <th>Sr No</th>
    <th>First_name</th>
    <th>Last_name</th>
    <th>Email Id</th>
  </tr>
 <!-- <?php var_dump($info); ?> -->
  <?php
 
  $i=1;
  foreach($info as $row)
  {
  echo "<tr>";
  echo "<td>".$i."</td>";
  echo "<td>".$row['first_name']."</td>";
  echo "<td>".$row['last_name']."</td>";
  echo "<td>".$row['email']."</td>";
  echo "</tr>";
  $i++;
  }
   ?>
</table>
 
	</form>
</body>
</html>