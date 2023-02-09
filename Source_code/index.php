<?php
error_reporting(1);
include('database/db.php');
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>ONLINE EXAM</title>
<link rel="stylesheet" href="css/style.css" />
<link rel="stylesheet" href="css/jquery.virtualKeyboard.css" />
<script type="text/javascript">
document.onkeydown = function (e) {
        return false;
}
</script>
<style type="text/css">
input[type=text].virtualKeyboard
{
width:320px;
border-radius:6px;
padding:10px;
outline:none;
text-transform:uppercase;
}
</style>
</head>

<body rightmargin="0" leftmargin="0" topmargin="0" onkeydown="return (event.keyCode != 116)">
<div class="header" style="background-color:#3AA56A;">
<center><h1 style="text-transform:uppercase; font-size:50px; padding-top:20px; padding-left:30px; color:#FFFFFF;">ONLINE COMPUTER BASED EXAM</h1></center>
</div>
<div class="main" style="height:457px; margin-left:-9px;">
<div class="set">

	<form action="login.php" method="post">
    <input name="user" type="text" class="virtualKeyboard" placeholder="REGISTRATION NUMBER" value=""><br /><br />
   
  <input name="pass" type="text" class="virtualKeyboard" placeholder="PASSWORD" value=""><br /><br />
  <input name="login" type="submit" value="LOGIN" class="login">
  </form>
  <span class="red">
  <?php
  if($_GET['msg'])
  {
  echo $_GET['msg'];
  }
  ?></span>
      </div>
	
</div>

 <div class="footer" style="margin-left:-9px; padding-bottom:10px; color:#000000;">
<?php include('footer.html');?>
</div> 
   <script src="http://code.jquery.com/jquery-1.11.2.min.js"></script>
    <script src="js/jquery.virtualKeyboard.js"></script>
    <script>
        $('.virtualKeyboard').vkb();
    </script>
</body>
</html>
