<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="filecss.css">
</head>
<body>
	
<div align="center" id="div2">
	<?php
	include_once("database.php") ;
	session_start();
	
	if (!isset($_POST['ans1']) && !isset($_POST['ans2']) && !isset($_POST['ans3']) && !isset($_POST['ans4'])) {
	  $_SESSION['result']=0;
	  $_SESSION['$id']=rand(1,8);
      $row=$db->getRows('Select * from ans where id=?',array($_SESSION['$id']));
      $_SESSION['numqus']=1;
	}
 elseif((isset($_POST['ans1']) && $_SESSION['ans']==1 && $_SESSION['numqus']<=3) || 
	    (isset($_POST['ans2']) && $_SESSION['ans']==2 && $_SESSION['numqus']<=3) ||
	    (isset($_POST['ans3']) && $_SESSION['ans']==3 && $_SESSION['numqus']<=3) || 
	    (isset($_POST['ans4']) && $_SESSION['ans']==4 && $_SESSION['numqus']<=3))
    {
    	$_SESSION['result']+=10;
    	$_SESSION['numqus']+=1;
    	$db->phpAlert($_SESSION['result']);
    	$_SESSION['$id']+=1;
        $row=$db->getRows('Select * from ans where id=?',array($_SESSION['$id']));
    }
 elseif((isset($_POST['ans1']) && $_SESSION['ans']!=1 && $_SESSION['numqus']<=3) || 
	    (isset($_POST['ans2']) && $_SESSION['ans']!=2 && $_SESSION['numqus']<=3) ||
	    (isset($_POST['ans3']) && $_SESSION['ans']!=3 && $_SESSION['numqus']<=3) || 
	    (isset($_POST['ans4']) && $_SESSION['ans']!=4 && $_SESSION['numqus']<=3))
    {
    	$_SESSION['numqus']+=1;
    	$db->phpAlert($_SESSION['result']);
    	$_SESSION['$id']+=1;
        $row=$db->getRows('Select * from ans where id=?',array($_SESSION['$id']));
    }
    else
    {
    	if((isset($_POST['ans1']) && $_SESSION['ans']==1) || 
	       (isset($_POST['ans2']) && $_SESSION['ans']==2) ||
	       (isset($_POST['ans3']) && $_SESSION['ans']==3) || 
	       (isset($_POST['ans4']) && $_SESSION['ans']==4))
    	{
    	$_SESSION['result']+=10;
        }   
    	header("Location:FinishGrade.php") ;
    }

foreach ($row as $item) {
	?>
	<p></p>
	<form action="Home.php" method="post" name="fr1">
	<input type="text" name="txtans" readonly="" style="width: 1000px " value="<?php echo($item['anse']) ?>"><br>
	<input type="submit" name="ans1" value=" <?php echo($item['n1'])   ?>   " style="width: 500px">
	<input type="submit" name="ans2" value=" <?php echo($item['n2'])   ?>   " style="width: 500px"><br><br>
	<h1 id="time">Time</h1>
	<input type="submit" name="ans3" value=" <?php echo($item['n3'])   ?>   " style="width: 500px">
	<input type="submit" name="ans4" value=" <?php echo($item['n4'])   ?>   " style="width: 500px"><br>
	<?php
      $_SESSION['ans']=$item['n5'];
	 }   ?>
	</form>
</div>
<div align="center" id="div3">
	<form name="fr" action="choose.php" method="post" >
		<input type="button" name="btn5" value="Start" style="margin:0px 500px 0px 0px,width:500px ;background-color: green; color: red;" onclick="f4()">
		<br>
		<input type="submit" name="btn7" value="New Game" style="margin:0px 350px 0px 0px,width:500px ;background-color: green; color: red;">
		<input type="submit" name="btn8" value="Finish Game" style="margin:0px 350px 0px 0px,width:500px ;background-color: green; color: red;">
		<input type="submit" name="btn9" value="Exit" style="background-color: green; color: red;">
	</form>
</div>
      <script src="temer.js"></script>
      <script type="text/javascript">f4();</script>
</body>
</html>