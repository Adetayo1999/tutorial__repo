<?php
$name = $_GET['user'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $name?>'s Page</title>
</head>
<body> 
   <h3>Logged In As <?php echo $name ?></h3>

   
    <form>
     <input type="number" name="number" placeholder="How Many Users ?">
     <button type="submit">Request User</button>
    </form>
      <ul id="users">
       
      </ul>
   <script src="Script.js"></script>
</body>
</html>