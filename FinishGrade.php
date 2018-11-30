<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		div{
			font-size: 40px;
			color: green;
            margin: 100px;
		}

    table{
         background-color:rgb(120,70,150);
         color: rgb(20,170,250);
         border-radius: 20px 20px 20px 20px;
    }
    td{
    	border-radius: 20px 20px 20px 20px;
    }
		span{
			color: rgb(240,10,240);
		}
		a{
			color: rgb(10,30,200);
		}
	</style>
</head>
<body>
	<?php  session_start(); 
    ?>
 <div align="center" >
 <table border="1">
       <tr>
 		<td>Thank you Mr :                                  </td>
 		<td><span><?php echo $_SESSION['myname'];  ?></span></td>
 		</tr>
 		<tr>
 		<td>Cite         :                                  </td>
 		<td><span><?php echo $_SESSION['mycite'];  ?></span></td>
 		</tr>
 		<tr>
 		<td>Phone Number :                                  </td>
 		<td><span><?php echo $_SESSION['myphone']; ?></span></td>
 		</tr>
 		<tr>
 		<td colspan="2">===============> Your Money <================</td>
 		</tr>
 		<tr>
 			<td colspan="2"><p style="margin:0px 0px 0px 450px">
 		               <?php echo $_SESSION['result']." $"; ?>
 		    </p> </td>
 		 </tr>

 	<tr>
 	<td colspan="2">
 		<a href="Home.php" style="margin:0px 0px 0px 100px">Are you want play new Game By Same Name?</a></td>
 	</tr>
 	<tr>
 	<td colspan="2">
 		<a href="login.php" style="margin:0px 0px 0px 100px">Are you want play new Game By New Name?</a></td>
 	</tr>
 	</table>
 </div>
 <?php
 	  	$_SESSION['result']=0;
    	$_SESSION['numqus']=0;
    	 $_SESSION['ex']="";
   ?>
</body>
</html>