<?php 
include "class/users.php";
$email=$_SESSION['email'];
$profile=new users;
$profile->users_profile($email);
$profile->cat_shows();    


 ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Online Quiz</h2>
  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#home">Home</a></li>
    <li><a data-toggle="tab" href="#menu1">Profile</a></li>
    <li><a data-toggle="tab" href="#menu2">Menu 2</a></li>
    <li style="float:right;"><a href="session_logout.php">Logout</a></li>

  </ul>

  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
      <h3></h3>
      <center><button type="button" class="btn btn-primary" data-toggle="tab" href="#select">Start Quiz</button></center>
        <div class="col-sm-4"></div>
        <div class="col-sm-4"><br>
        <div id="select" class="tab-pane fade">

          <form method="get" action="qus_show.php">
          <select class="form-control" id="" name="cat">
            <option>Select Subjects</option>
            <?php 
            foreach ($profile->cat as $category) 
            {
              ?>
            <option value="<?php echo $category['id'];?>"><?php echo $category['cat_name'];?></option>
            <?php     }?>
          </select><br> 
          <center><input type="submit" value="submit" class="btn btn-primary" /></center>
            </form>


          </div>       
       </div>
       <div class="col-sm-4"></div>       
    </div>
    <div id="menu1" class="tab-pane fade">
      <h3>Showing profile</h3>

      <table class="table">
    <thead>
      <tr>
        <th>id</th>
        <th>firstname</th>
         <th>lastname</th>
           <th>email</th>
      </tr>
    </thead>
    <tbody>

      <?php 
      foreach($profile->data as $prof)
      {
        ?>
      <tr>
        <td><?php echo $prof['id'];?></td>
        <td><?php echo $prof['firstname'];?></td>
        <td><?php echo $prof['lastname'];?></td>
        <td><?php echo $prof['email'];?></td>
      </tr>
     </tbody>
     <?php   }?>
  </table>
    </div>
    <div id="menu2" class="tab-pane fade">
      <h3>Menu 2</h3>
      <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
    </div>
    <div id="menu3" class="tab-pane fade">
      <h3>Menu 3</h3>
      <p>Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
    </div>
  </div>
</div>

</body>
</html>
