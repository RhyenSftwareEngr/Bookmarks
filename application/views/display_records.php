<html>
<head>
<title>Display records</title>
<style>
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
</style>
</head>
 
<body>
<table width="600" border="0" cellspacing="5" cellpadding="5">
  <tr style="background:#CCC">
    <th>Sr No</th>
    <th>First_name</th>
    <th>Last_name</th>
    <th>Email Id</th>
  </tr>
  <?php
  $i=1;
  foreach($data as $row)
  {
  echo "<tr>";
  echo "<td>".$i."</td>";
  echo "<td>".$row->first_name."</td>";
  echo "<td>".$row->last_name."</td>";
  echo "<td>".$row->email."</td>";
  echo "</tr>";
  $i++;
  }
   ?>
</table>
</body>
</html>