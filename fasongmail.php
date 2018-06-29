<?php
	header("content-type:text/html;charset=utf-8");


	$int = $_POST["shuzi"];
 
	if(!filter_var($int, FILTER_VALIDATE_INT))
	{
	    echo("不是一个合法的整数");
	}
	else
	{
	    echo("是个合法的整数");
	}

?>