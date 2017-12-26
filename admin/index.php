<?php 
include "../class/users.php";
$cat=new users;
$category=$cat->cat_shows();
// print_r($category);
 ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Admin</title>
  <link rel="stylesheet" type="text/css" href="sss/style.css">
</head>
<body>

<div class="admin-panel clearfix">
  <div class="slidebar">
    <div class="logo">
      <a href=""></a>
    </div>
    <ul>
      <li><a href="#dashboard" id="targeted">Add questions</a></li>
      <li><a href="#posts">posts</a></li>
      <li><a href="#media">media</a></li>
      <li><a href="#pages">pages</a></li>
      <li><a href="#links">links</a></li>
      <li><a href="#comments">comments</a></li>
      <li><a href="#widgets">widgets</a></li>
      <li><a href="#plugins">plugins</a></li>
      <li><a href="#users">users</a></li>
      <li><a href="#tools">tools</a></li>
      <li><a href="#settings">settings</a></li>
    </ul>
  </div>
  <div class="main">
    <ul class="topbar clearfix">
      <li><a href="#"></a></li>
      <li><a href="#"></a></li>
      <li><a href="#"></a></li>
      <li><a href="#"></a></li>
      <li><a href="#"></a></li>
    </ul>
    <div class="mainContent clearfix">
      <div id="dashboard">
        <h2 class="header"><span class="icon"></span>Dashboard</h2>
          
        <!--form-->
        <div class="overlay">
          <?php 
          if(isset($_GET['msg']) && !empty($_GET['msg']))
          {
              // echo "<p>data insert successfully</p>";
              header("location: http://localhost/regna/here.php");
          }
           ?>

<form method="post" action="add_quiz.php">
   <div class="con">
   <header class="head-form">
   <div class="field-set">
         <p>Question</p>
         <input type="text" class="form-input" name="qus" placeholder="Enter question" required>
      <br>
    <br>  
       <p>option-1</p>
   <div class="field-set">
         <input type="text" class="form-input" name="op1" placeholder="Enter option-1" required>
      <br>
      <br>
      <p>option-2</p>
      <br>
   <div class="field-set">
         <input type="text" class="form-input" name="op2" placeholder="Enter option-2" required>
      <br>
      <br>
      <p>option-3</p>
      <br>
   <div class="field-set">
         <input type="text" class="form-input" name="op3" placeholder="Enter option-3" required>
      <br>
        <br>
        <p>option-4</p>
       <br>
   <div class="field-set">
         <input type="text" class="form-input" name="op4" id="email" placeholder="Enter option-4" required>
      <br>  
      <br>
        <p>answer</p>
       <br>
   <div class="field-set">
         <input type="text" class="form-input" name="ans" id="email" placeholder="Enter answer" required>
      <br>  
      <br>
  <div class="select">
    <select id="sell" name="cat">

      <option value="">Choose Category</option>
      <?php 
      foreach($category as $c)
      {
          echo "<option value=".$c['id'].">".$c['cat_name']."</option>";
      }
       ?>
    </select>
  </div>
</div>
      <button type="submit" class="log-in">submit</button>
   </div>
   </div>
  </div>
</form>
</div>

</body>
</html>

<script>
function show() {
    var p = document.getElementById('pwd');
    p.setAttribute('type', 'text');
}

function hide() {
    var p = document.getElementById('pwd');
    p.setAttribute('type', 'password');
}

var pwShown = 0;

document.getElementById("eye").addEventListener("click", function () {
    if (pwShown == 0) {
        pwShown = 1;
        show();
    } else {
        pwShown = 0;
        hide();
    }
}, false);


</script>