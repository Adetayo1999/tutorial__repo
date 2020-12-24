


<?php

if(filter_has_var(INPUT_POST , 'submit')){
     $name = $_POST["name"];
     $pass = $_POST["passcode"];

     if(!empty($name) && !empty($pass)){
         header("Location:user.php?user=".$name);
     }else{
             echo "<center><b>Fields Cannot Be Empty</b></center>";        
     }
}




?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page</title>
</head>
<body>
 <br>
 <hr>
  <br>
    <center>
    <form action="<?php echo $_SERVER["PHP_SELF"]?>" method="post">
      Username:
      <input type="text" name="name" id="name" value="<?php echo $_POST['name'] ? $name : "" ?>" >
      <br>
     <br>  
      Passcode:
      <input type="password" name="passcode" id="passcode">
      <br><br>
     <button type="submit" id="submit" name="submit">Submit</button>
    </form>
    </center>
  
</body>
</html>