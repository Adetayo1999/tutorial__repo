<?php
class Customer{
    // Public means you can access the prop outside the class
    // Protected can be accessed from an extended class but not outside
    // private is only for the class alone
    private $id;
     protected  $name;
    protected $email;
    private $balance;
    
    public function __construct($id , $name , $email , $balance){
        $this->id = $id;
        $this->name = $name;
        $this->email = $email;
        $this->balance = $balance;
    }
    public function getCustomer(){
        return "Hello " . $this->name . " You Have And ID of ". $this->id;
    }
}

$customer = new Customer( 007 , "James Bond" , "test@test.com" , 56);
// echo $customer->getCustomer();

echo"<pre>Person: ". print_r($customer , true) ."   </pre>";

 class Person extends Customer{
     public $plan;

     public function __construct($id , $name , $email , $balance , $plan){
             parent::__construct($id , $name , $email , $balance);
                  $this->plan = $plan;
     }

      public function getEmail(){
          return "Hello $this->name mail has been sent to $this->email for subscribing to our channel";
      }
 }
 $subscribe = new Person(12 , "Michael Faraday" , "mike@gmail.com" , 45 , true );

//  echo $subscribe->getEmail();
echo"<pre>Person: ". print_r($subscribe , true) ."   </pre>";







// Static Tutorials
class Account{
    public $username;
    public $password;
    public static $passLen = 5;
    
    public static function getPassLen(){
        return self:: $passLen;
    }
}  
// echo Account::getPassLen();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP CLASSES</title>
</head>
<body>
    <script>
    
     class Person {
         constructor($id , $name , email ,  $age){
           
             this.id = $id;
             this.name = $name;
             this.email = email
             this.age = $age
      
         }
         getPerson(){
             return `Hello ${this.name} Your ID is ${this.id} and age is ${this.age}`
         }
     }
    //  const Jeremy = new Person(20 , "Jeremy Kepler" , "kepler@yahoo.co.uk" , 45);
    // //   console.log(Jeremy.getPerson());
    // const Hullo = "<pre>Person: "+ Jeremy +"</pre>";
    //   console.log(Hullo);
    </script>
</body>
</html>