<?php 
error_reporting(0);
//ob_start();
error_reporting(7);
session_start();

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
<div id="main">
<div id="installtion" align="center"></div>
<div>
<form id="install" name="install" method="post" action="" class="form" style="width:450px;">
<fieldset>
	<legend style="font-size:24px">Install</legend><br />
    
    <input type="radio" name="new" id="new" value="new" />
    <label style="font-size:20px;  width:50%"> New Installation </label>  <br />
    <br /><br />
    <label style="font-size:20px; width:50%"> Recover </label>
    <input type="radio" name="recover" id="recover"/>
     <br />
    <br /><br />
	<input type="hidden" name="module" value="2" id="module" />
	<div style="float:left; width:100px; margin:8px 0 0 123px;">
	<span class="buttons">
		<button type="button" class="positive" onclick="link()">
			<img src="images/tick.png" alt=""/>
			Next
		</button>
	</span>
	</div>
</fieldset>
</form>
</div>
</div>
</body>
</html>
<script language="javascript" type="text/javascript">

function link(){
	if(document.getElementById("new").checked==true){
		window.location.replace("installation_step2.php?check=new");
	}else if(document.getElementById("recover").checked==true){
		window.location.replace("installation_step2.php?check=recover");
		}else {
			
			alert("Please select one option");
			
			}
	}

</script>
<?php //ob_flush();?>