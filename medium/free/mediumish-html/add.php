   <?php $add = "active";?>
   <?php include("db.php");?>
   <?php include('header.php');?>
 <?php
   $msg = "";
   $msgClass = ""; 
     if(filter_has_var(INPUT_POST , 'submit')){
       $name = mysqli_real_escape_string($conn , $_POST['name']) ;
       $title = mysqli_real_escape_string($conn , $_POST['title']) ;
       $userurl = mysqli_real_escape_string($conn , $_POST['userurl']) ;
       $image = mysqli_real_escape_string($conn , $_POST['image']) ;
       $post = mysqli_real_escape_string($conn , $_POST['post']) ;
       $about = mysqli_real_escape_string($conn , $_POST['about']) ;    
      if(!empty($name) && !empty($title) && !empty($post)){
             $query = "INSERT INTO recent(username , title , imageURL , userURL , post , about ) VALUES('$name' , '$title' , '$image' , '$userurl' , '$post'  , '$about')";

             if(mysqli_query($conn , $query)){
               header("Location:index.php");
             }
                   
          }else{
            $msg = "All Asteriked Fields Must Not Be Empty";
            $msgClass = "alert-danger";
          }



     }


 ?>


           <div class="container my-3 mx-auto p-3">
              <center><h2 class="post-head my-3 px-4 py-2">Add Post</h2></center>
              <div class="alert <?php echo $msg ? $msgClass : " " ?>">
               <?php echo $msg ? $msg : "" ?>
              </div>
              <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
                 <div class="row">
                   <div class="col-md-6 form-group">
                   <label for="name">Username: <span style="color:red;">*</span></label>
                   <input type="text" name="name"  class="form-control" >
                   </div>
                   <div class="col-md-6 form-group">
                   <label for="title">Title: <span style="color:red;">*</span></label>
                 <input type="text" name="title" id="" class="form-control" placeholder ="Enter Your Post Title">
                   </div>
                 </div>
                 <div class="row">
                 <div class="form-group col-md-6">
                 <label for="userurl">User-Image URL: </label>
                  <input type="text" name="userurl" id="" class="form-control">
                 </div>
                 <div class="form-group col-md-6">
                 <label for="image">Post Image:</label>
                 <input type="text" name="image" id="" placeholder="Add An Optional Image URL" class="form-control">
                 </div>
                 </div>
                 <div class="row">
                 </div>
                   <div class="row">
                     <div class="form-group col-md-6">
                     <label for="post">Post: <span style="color:red;">*</span></label>
                     <textarea name="post" id="" cols="30" rows="10" class="form-control"></textarea>
                     </div>
                     <div class="form-group col-md-6">
                     <label for="about">About:</label>
                     <textarea name="about" id="" cols="30" rows="10" class="form-control" placeholder="Write A Few Things About You....Make It Enticing To Make Front Page"></textarea>
                     </div>
                   </div>
                   <input type="submit" value="Submit" class ="d-flex  btn btn-success py-2 px-3 my-3 mx-auto" name="submit">
              </form>
           </div>


<div class="container margtop3rem">
<a class="twitter-grid" href="https://twitter.com/TwitterDev/timelines/539487832448843776">WowThemesNet Tweets</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
</div>
<?php include 'footer.php';?>