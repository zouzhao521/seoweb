<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
    <head>
        <title>欢迎使用boyou管理系统</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <meta name="description" content="Expand, contract, animate forms with jQuery wihtout leaving the page" />
        <meta name="keywords" content="expand, form, css3, jquery, animate, width, height, adapt, unobtrusive javascript"/>
		<link rel="shortcut icon" href="../favicon.ico" type="image/x-icon"/>
        <link rel="stylesheet" type="text/css" href="/seoweb/boyou/Public/css/style.css" />
    </head>
    <body style="background: #fff">
		<div class="wrapper">
			<!-- <h1>Welcome to Switch System</h1>
			<h2>Demo: click the <span>Switch System</span> to see the form animating and switching</h2> -->
			<div class="content" style="margin-top: 150px;">
				<div id="form_wrapper" class="form_wrapper">
					<form class="login active" action="/seoweb/boyou/manage.php?s=/Manage/Index/CheckLogin" method="post">
						<h3>Login</h3>
						<div>
							<label>Username:</label>
							<input type="text" name="name" />
							<span class="error">This is an error</span>
						</div>
						<div>
							<label>Password:</label>
							<input type="password" name="pwd" />
							<span class="error">This is an error</span>
						</div>
						<div class="bottom">
							
							<input type="submit" value="Login"></input>
							
							<div class="clear"></div>
						</div>
					</form>

				</div>
				<div class="clear"></div>
			</div>
		</div>

    </body>
</html>