<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<script>
	$(function() {
  $(window).scroll(function() {
    if($(this).scrollTop() != 0) {
      $("#toTop").fadeIn(); 
    } else {
      $("#toTop").fadeOut();
    }
  });
  $("body").append("<div id=\"toTop\" style=\"border:1px solid #444;background:#333;color:#fff;text-align:center;padding:10px 13px 7px 13px;position:fixed;bottom:10px;right:10px;cursor:pointer;display:none;font-family:verdana;font-size:22px;\">^</div>");
  $("#toTop").click(function() {
    $("body,html").animate({scrollTop:0},800);
  });
});
	</script>
</head>
<body>
	<a id="toTop">回到顶部</a>
</body>
</html>
