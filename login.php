<!DOCTYPE html>
<html>
<head>
	<title>index</title>
	<style type="text/css">
		div{
			font-size: 50px;
			color: green;
            margin: 100px;
		}
  input{
        font-size: 40px;
        color: green;
        text-align: center;
    }
    table{
         background-color:rgb(120,70,150);
    }

	</style>
</head>
<body>
	<?php
	if(isset($_POST['submit']))
	{
         session_start();
         $_SESSION['myname']=$_POST['txtname'];
         $_SESSION['mycite']=$_POST['txtcite'];
         $_SESSION['myphone']=$_POST['txtphone'];
         header("Location:Home.php");
     }
	?>
    <div align="center">
          <marquee width="50%" direction="left">Welcome In My Web Site</marquee>
    	<form action="login.php" method="post">
            <table >
    <tr>
        <td>	Enter Your name                                    </td>
    	<td>    <input type="text" name="txtname" required=""></td></td>
    </tr>
    <tr>
    	<td>    Enter Your Cite                                    </td>
        <td> <input type="text" name="txtcite" required="">        </td>
    </tr>
    <tr>
    	<td>   Enter your phone                                    </td>
        <td><input type="text" name="txtphone" required="">        </td>
    </tr>
    <tr>
        <td colspan="2"><br>
            <input type="submit" name="submit" value="Start Game" style="margin:0px 0px 0px 300px ;background-color: green; color: red;" > 
        </td>
    </tr>
        </table>
       	</form>
    </div>
</body>
</html>