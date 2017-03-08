<?php
session_start();
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Wel come to Online Exam</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">

</head>
<style>
html {
  background: url(book.jpg) no-repeat center fixed;
  background-size: COVER;
}
.floating-box {
    float: right;
    width: 300px;
    height: 100px;
	padding: 14px 16px;
    margin: 10px;
    border: 3px solid ;
}



body {
  color: white;
}
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
}

li {
    float: right;
}

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover:not(.active) {
    background-color: #111;
}

.active {
    background-color: #4CAF50;
}
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
}

li {
    float: left;
}

li b {
    display: block;
    color: yellow;
    font-size: 30px;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}
div.ex1 {
    width:700px;
    margin: 150px 150px 120px 80px;
   
}
.button {
    background-color:grey;
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
}
p {
       outline-color: grey;
       font-size: 40px;
}
p.solid {outline-style: solid;}


</style>

<body>
<?php
include("header.php");
include("database.php");
extract($_POST);

if(isset($submit))
{
	$rs=mysql_query("select * from mst_user where login='$loginid' and pass='$pass'");
	if(mysql_num_rows($rs)<1)
	{
		$found="N";
	}
	else
	{
		$_SESSION[login]=$loginid;
	}
}
if (isset($_SESSION[login]))
{
echo "<h1 align=center>Welcome to Online Exam</h1>";
		echo '<table width="28%"  border="0" align="center">
  <tr>
    <td width="7%" height="65" valign="bottom"></td>
    <td width="93%" valign="bottom" bordercolor="#0000FF"> <a href="sublist.php" class="button">Subject for Quiz </a>
  </tr>
  <tr>
    <td height="58" valign="bottom"></td>
    <td valign="bottom"> <a href="result.php" class="button">Result </a>  </tr>
</table>';
   
		exit;
		

}


?>
<body>
<ul>
   <li><b href="#test you">&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
 TEST YOU</a> &nbsp &nbsp
 &nbsp &nbsp &nbsp &nbsp  &nbsp
 &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp &nbsp
 &nbsp &nbsp &nbsp</li>
  <li><a href="#home">HOME</a></li>

    
  <li><a href="signup.php" target="_blank">SIGN UP</a></li>

</ul>
<div class="floating-box"><form name="form1" method="post" action="">
      <table width="200" border="0">
        <tr>
          <td><span class="style2">Login ID </span></td>
          <td><input name="loginid" type="text" id="loginid2"></td>
        </tr>
        <tr>
          <td><span class="style2">Password</span></td>
          <td><input name="pass" type="password" id="pass2"></td>
        </tr>
        <tr>
          <td colspan="2"><span class="errors">
            <?php
		  if(isset($found))
		  {
		  	echo "Invalid Username or Password";
		  }
		  ?>
          </span></td>
          </tr>
        <tr>
          <td colspan=2 align=center class="errors">
		  <input name="submit" type="submit" id="submit" value="Login">		  </td>
      
     
    </form></td>
  </tr>
</table></div>

<div class="ex1"><p class="solid"> &nbsp IF YOU ARE DETERMINED<BR> &nbsp 
TO LEARN <BR> &nbsp NO ONE CAN STOP YOU!!</p></div>


</body>
      
    
    








</html>
