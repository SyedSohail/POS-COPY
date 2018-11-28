<?php 
error_reporting(0);
//ob_start();
error_reporting(7);
session_start();
$state=$_GET['check'];

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Installation</title>
<link rel="stylesheet" type="text/css" href="includes/css/all.css"/>
<script language="javascript" src="includes/js/jquery.js"></script>
</head>
<body style="background-color:#FFF;">
<div id="main_pos" align="center">
<div id="installtion"><!-- --></div>
<form id="install" name="install" method="post" action="" class="form" style="width:550px;">
<fieldset>
	<legend style="font-size:18px;"><?php if($state == "new"){echo "New"; ?> Installation <?php }else{ echo "Recovery";} ?></legend><br />
    <table style="font-size:16px;">
    <tbody>
    <tr>
    <td style="width:50%">Counter Name</td>
    <td style="width:50%">
    <select id="counter" name="counter">
    <option value="0">0</option>
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    </select>
    </td>
    </tr>
    <tr>
    <td style="width:50%">Database Name</td>
    <td style="width:50%">
    <input type="text" name="dbname" id="dbname"/>
    </td>
    </tr>
    <tr>
    <td style="width:50%">Database password</td>
    <td style="width:50%">
    <input type="text" name="dbpass" id="dbpass"/>
    </td>
    </tr>
    <tr>
    <td style="width:50%">User Name</td>
    <td style="width:50%">
    <input type="text" name="username" id="username"/>
    </td>
    </tr>
    <tr>
    <td style="width:50%">User Password</td>
    <td style="width:50%">
    <input type="text" name="userpass" id="userpass"/>
    </td>
    </tr>
    <br /><br />
    </tbody>
    </table>
    <br /><br />
    <input type="hidden" name="status" value="<?php echo $state; ?>" id="status" />
	<div style="float:left; width:100px; margin:8px 0 0 123px;">
	<span class="buttons">
		<button type="button" class="positive" onclick="subfrm();">
			<img src="images/tick.png" alt=""/>
			Next
		</button>
	</span>
	</div>
</fieldset>
</form>
</div>
<script type="text/javascript" language="javascript">

function subfrm(){
	
	if(document.getElementById('counter').value == 0)
	{
		alert("Please select counter");
	}else if(document.getElementById('dbname').value == "")
	{
		alert("Please enter Databasename ");
	}else if(document.getElementById('dbpass').value == "")
	{
		alert("Please enter Database password");
	}else if(document.getElementById('username').value == "")
	{
		alert("Please enter User name");
	}else if(document.getElementById('userpass').value == "")
	{
		alert("Please enter User password");
	}else
	{
		
		$.ajax({
   		 
		 type: "POST",
    	 url: '../common/posinstallation.php',
		 data: $("#install").serialize(), 
		 success: function(data) {
          alert(data);
     }
	
}); 	
		
	}
}

</script>
</body>
</html>