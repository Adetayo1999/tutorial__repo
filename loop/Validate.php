<?php
 if(filter_has_var(INPUT_POST , 'submit')){
    $name =  htmlentities( $_POST['name']);
    $email = $_POST['email'];
    $password = $_POST['password'];

    if(!empty($name) && !empty($email) & !empty($password)){
          if(strlen($name) > 4){
            if(filter_var($email , FILTER_VALIDATE_EMAIL)){
               if(strlen($password) >= 5){
                echo "Form Successfully Submitted";
               }
               else{
                   echo "Password Must Be From 5 Chars and above";
               }
            }else{
                echo "Email Is Not Valid";
            }
          }else{
              echo "Name Must Be More Than Four Characters";
          }
    }else{
        echo "All Fields Must Not Be Empty";
    }
 }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
       Name:
       <input type="text" name="name" id="">
       <br>
       Email:
       <input type="text" name="email" id="">
       <br>
       Password:
       <input type="password" name="password" id="">
      <br>
      <input type="submit" value="Submit" name ="submit">
    </form>
    <br>
    <hr>
    <?php echo $_POST['name'] ? $name : " No User"?>
</body>
</html>