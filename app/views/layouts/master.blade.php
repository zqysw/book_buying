<!DOCTYPE HTML>
<html lang="en">
<head>
	<title>主页</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script type = "text/javascript" src = "/book_buying/public/bootstrap/js/bootstrap.js"></script> 
	<script type = "text/javascript" src = "/book_buying/public/bootstrap/js/bootstrap.min.js"></script> 
	<link rel = "stylesheet" type = "text/css" href = "/book_buying/public/bootstrap/css/bootstrap.min.css">
	<link rel = "stylesheet" type = "text/css" href = "/book_buying/public/bootstrap/css/bootstrap-responsive.css">
	<link rel = "stylesheet" type = "text/css" href = "/book_buying/public/bootstrap/css/bootstrap.css">
	<link rel = "stylesheet" type = "text/css" href = "/book_buying/public/bootstrap/css/bootstrap-responsive.min.css">
	<link rel = "stylesheet" type = "text/css" href = "/book_buying/public/css/land.css">
	<link rel = "stylesheet" type = "text/css" href = "/book_buying/public/css/masterblade.css">
	
</head>
<body>
	<caption>
	<div class = "top">
		<p class = "systemname">创新创业实验班购书系统</p>
	</div>
	</caption>
	


	<div class = "sidebar">
		<ul class = "connect">
		<li><a href ="book_recommend.blade.php" ><b>图书推荐</b></a></li><br>
		<li><a href ="show_books.blade.php"  target = "_self"><b>查看推荐</b></a></li><br>
		<li><a href ="personal.blade.php" target = "_self"><b>个人中心</b></a></li><br>
		<li><a href ="manager.blade.php"  target = "_self"><b>管理员中心</b></a></li>
 		</ul>
	</div>
	
	<div class  ="container">
		 @yield('content')
	</div>	



	<footer>
		<div class ="footer">
			<p class = "banquan">版权所有&copy;2014杭电软件工程创新创业实验班</p>
		</div>
	</footer>

</body>
</html>