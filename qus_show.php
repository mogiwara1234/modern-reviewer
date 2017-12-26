<?php 
include "class/users.php";
$qus=new users;
$cat=isset($_GET['cat'])? $_GET['cat'] : '';
$qus->qus_show($cat);
$_SESSION['cat']=$cat;
  
 ?>

<!DOCTYPE html>
<html>
<title></title>
<link rel="stylesheet" type="text/css" href="ssc/style.css">
<script type="text/javascript">
  function timeout()
  {
    var minute=Math.floor(timeLeft/60);
    
    var second=timeLeft%60;
    var mint=checktime(minute);
    var sec=checktime(second);
    if(timeLeft<=0)
    {   
        clearTimeout(tm);  
        document.getElementById("form1").submit();
    }
    else
    {

       document.getElementById("time").innerHTML=mint+":"+sec;
    }
    timeLeft--;
    var tm= setTimeout(function(){timeout()},1000);
  }
  function checktime(msg)
  {
    if(msg<10)
    {
       msg="0"+msg;
    }
    return msg;
  }
      
</script>

<head>
</head>
<body onload="timeout()" onkeydown="return (event.keyCode != 116)">
  <div class="container">
<center><h2>Quiz</h2></center></div>
  <script type="text/javascript">
    var timeLeft=3*60;  

  </script>
<div id="time"><font face="verdana" color="blue" style="float:right"><h3>timeout</h3></font></div>
<br>
<form method="post" id="form1" action="answer.php">
<?php
$i=1; 

shuffle($qus->qus);

foreach($qus->qus as $qust) {?>

<table>
  <tr>
    <div class="important">
    <th><?php echo $i;?> <?php echo $qust['question'];?> </th>
  </tr>
  <?php if(isset($qust['quest1'])) {?>
  <tr>
    <td>&nbsp;1&emsp;<input type="radio" value="0" name="<?php echo $qust['id']; ?>" />&nbsp;<?php echo $qust['quest1'];?></td>
  </tr>
  <?php } ?>
  <?php if(isset($qust['quest2'])) {?>
   <tr>
    <td>&nbsp;2&emsp;<input type="radio" value="1" name="<?php echo $qust['id']; ?>" />&nbsp;<?php echo $qust['quest2'];?></td>
  </tr>
  <?php } ?>
  <?php if(isset($qust['quest3'])) {?>
   <tr>
    <td>&nbsp;3&emsp;<input type="radio" value="2" name="<?php echo $qust['id']; ?>" />&nbsp;<?php echo $qust['quest3'];?></td>
  </tr>
  <?php } ?>
  <?php if(isset($qust['quest4'])) {?>
   <tr>
    <td>&nbsp;4&emsp;<input type="radio" value="3" name="<?php echo $qust['id']; ?>" />&nbsp;<?php echo $qust['quest4'];?></td>
  </tr>
  </div>
  <?php } ?>
    <tr>
    <td><input type="radio" checked="checked" style="display: none" value="no_attempt" name="<?php echo $qust['id']; ?>" /></td>
  </tr>
</table>
<?php $i++;} ?>

<center><button class="button"><span>Submit </span></button></center>
</form>

</body>
</html>



