<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?= base_url('Assets/bookmarks.css'); ?>">
</head>
<body>
    <h1>Add a Bookmark</h1>
    <form action="<?= base_url() ?>Bookmarks/savedata" method="post">
        <input type="hidden" name="bookmarked">
    <label for="names">Name:</label>
         <input type="text" name="name"><br>
         <label for="url">URL:</label>
         <input type="url" name="url" id=""><br>
        <label for="folder">Folder:</label>
    <select name="folder_type">
    <option value="fave">Favorites</option>
    <option value="Others">Others</option>
</select>
<br>
<br>
<input name="clicked" type="submit" value="Add">
    </form>
    <h2>Bookmarks</h2>
    
    <table width="600" border="0" cellspacing="5" cellpadding="5">
  <tr style="background:#CCC">
    <th>Folder</th>
    <th>Name</th>
    <th>Url</th>
    <th>Action</th>
  </tr>
  <?php
 $i=1;
  if(isset($_POST['name'])){
    
  foreach($data as $row)
  {
  echo "<tr>";
  echo "<td>".$i."</td>";
  echo "<td>".$row->Name."</td>";
  echo "<td>".$row->Url."</td>";
  echo "<td>"."<a href='#'> Delete</a></td>";
//   echo "<td>".$row->email."</td>";
  echo "</tr>";
  $i++;
  }
}
   ?>
   
</table>
</body>
</html>