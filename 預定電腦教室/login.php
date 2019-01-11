<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>無標題文件</title>
<script src="tools/jquery.js"></script>
<script src="tools/jquery-ui.js"></script>
<script>
	$(function(){
		$('[type=checkbox]').change(function(){
			if($('[name=check]').prop('checked') == true){
				sessionStorage.setItem('cbool',true);
			}else{
				sessionStorage.setItem('cbool',false);
			}
		})
	})
</script>

<style>
	#navbar{
		font-size:24px;
		color:white;
	}

	a{
		color:white;
		text-decoration:blink;
		font-size:20px;
	}

	span{
		color:white;
		font-size:20px;
	}

	span:hover{
		cursor:pointer;
	}
</style>
</head>

<body>
	<div style="background-color:#39C">
		<span id="navbar" width="80%;">Data Processing</span>
			<span style="margin:520px;">
				<?php
					session_start();
					if(isset($_SESSION['cbool'])== "" || $_SESSION['cbool'] == false){
				?>
					<a href="./login.php">登入</a>
				<?php }else{ ?>
					<a href="./logout.php">登出</a>
				<?php } ?>
				<span onclick="location.href='./computer.php'">動態</span>
				<span onclick="location.reload();">刷新</span>
				<span>設定</span>
			</span>
    </div>  
	<div align="center">
        <?php
			if(isset($_SESSION['check']) == false){
				$_SESSION['check'] = 0;
			}
		?>
        <form method="POST" action="loggin.php">
            <p>帳號:<input type="text" name="user" /></p>
            <p>密碼:<input type="password" name="pwd" /></p>
            <p>記住我:<input type="checkbox"  name="check" /><input type="submit" value="登入" /></p>
        </form>
    </div>
</body>
</html>