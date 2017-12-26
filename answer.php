 <?php 
 include "class/users.php";
 $ans=new users;
 $answer=$ans->answer($_POST);
 ?> 

 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<title>answer</title>
 	<link rel="stylesheet" type="text/css" href="css/style.css">
 </head>
 <body>
 	<center>
 	 <?php 
 	 $total_qus=$answer['right']+$answer['wrong']+$answer['no_answer'];
 	 $attempt_qus=$answer['right']+$answer['wrong'];
 	  ?>
 	  <br>
 	  <center><h3>Your quiz result</h3></center>
<table>
  <thead>
    <tr>
      <th scope="col">total number of questions</th>
      <th scope="col"><?php echo $total_qus;?></th>
      <th scope="col"></th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td data-label="Account">attempted questions</td>
      <td data-label="Due Date"><?php echo $attempt_qus;?></td>
      <td data-label="Amount"></td>
      <td data-label="Period"></td>
    </tr>
    <tr>
      <td scope="row" data-label="Account">Right answer</td>
      <td data-label="Due Date"><?php echo $answer['right'];?></td>
      <td data-label="Amount"></td>
      <td data-label="Period"></td>
    </tr>
    <tr>
      <td scope="row" data-label="Account">Wrong answer</td>
      <td data-label="Due Date"><?php echo $answer['wrong'];?></td>
      <td data-label="Amount"></td>
      <td data-label="Period"></td>
    </tr>
     <tr>
      <td scope="row" data-label="Account">No answer</td>
      <td data-label="Due Date"><?php echo $answer['no_answer'];?></td>
      <td data-label="Amount"></td>
      <td data-label="Period"></td>
    </tr>
      <tr>
      <td scope="row" data-label="Account">Your result</td>
      <td data-label="Due Date">
      	<?php
      	$per=($answer['right']*100)/($total_qus);

      	echo $per."%";
      ?></td>
      <td data-label="Amount"></td>
      <td data-label="Period"></td>
    </tr>
  </tbody>
</table>
 </body>
 </html>



<style>
	body {
  font-family: "Open Sans", sans-serif;
  line-height: 1.25;
}
table {
  border: 1px solid #ccc;
  border-collapse: collapse;
  margin: 0;
  padding: 0;
  width: 100%;
  table-layout: fixed;
}
table caption {
  font-size: 1.5em;
  margin: .5em 0 .75em;
}
table tr {
  background: #f8f8f8;
  border: 1px solid #ddd;
  padding: .35em;
}
table th,
table td {
  padding: .625em;
  text-align: center;
}
table th {
  font-size: .85em;
  letter-spacing: .1em;
  text-transform: uppercase;
}
@media screen and (max-width: 600px) {
  table {
    border: 0;
  }
  table caption {
    font-size: 1.3em;
  }
  table thead {
    border: none;
    clip: rect(0 0 0 0);
    height: 1px;
    margin: -1px;
    overflow: hidden;
    padding: 0;
    position: absolute;
    width: 1px;
  }
  table tr {
    border-bottom: 3px solid #ddd;
    display: block;
    margin-bottom: .625em;
  }
  table td {
    border-bottom: 1px solid #ddd;
    display: block;
    font-size: .8em;
    text-align: right;
  }
  table td:before {

    content: attr(data-label);
    float: left;
    font-weight: bold;
    text-transform: uppercase;
  }
  table td:last-child {
    border-bottom: 0;
  }
}
</style>