 <!-- <?php
// $hello = [23 , 22 , 15 , 9 , 18 , 20 , 21 , 24 , 30 , 55];

// foreach($hello as $helli){
//     if(($helli % 3 ) === 0){
//         echo "<p style='color:red;'>This is a multiple of three $helli<p/>";
//     }else{
//        echo "<p style='color:green;'>This is not a multiple of three $helli<p/>";
//     }
// }
for($i = 1; $i <= 400 ; $i++){
    if(($i % 3 ) === 0){
                echo "<p style='color:red;'>This is a multiple of three $i<p/>";
            }else{
               echo "<p style='color:green;'>This is not a multiple of three $i<p/>";
            }
}

?>  -->

<!-- <?php
class Vehicle {
    public $type;
    public $name;
   function __construct($type , $name){
         $this->type = $type;
         $this->name = $name;
   }
   function getInfo(){
       return "The Make Of ".$this->name. " is ".$this->type;
   }

}



$camry = new Vehicle("Camry" , "Toyota");
echo $camry->getInfo(); 




?> -->

<?php

// echo $_SERVER["HTTP_USER_AGENT"];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form enctype="multipart/form-data" action="<?php $_SERVER["PHP_SELF"]?>" method="post">
    <input type="hidden" name="max_file" value="160000">
    <br>
    <label for="send">Send File:</label>
    <input type="file" name="file" id="">
    <br>
    <input type="submit" value="Upload" name="upload">
    </form>
</body>
</html>