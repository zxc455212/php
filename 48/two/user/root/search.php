<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>無標題文件</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<script>
	$(function(){
		$('button').click(function(){
			$.ajax({
				url:'get.php',
				type:'POST',
				data:{
					'user':$('#text').val()
				},
				success:function(e){
					$('#div1').html(e);
				}
		})
		})
	});	
</script>
</head>
<body>
<code>
</code>
	<div id="div1"></div>
	<input type="text" class="ui-corner-all" id="text" />
    <button>Click</button>
</body>
</html>