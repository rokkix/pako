<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
     <head>
             <meta http-equiv="Content-Type" content="text/html; charset=windows-1251" />
             <title>√алере¤ на jQuery в четыре строчки | pcvector.net</title>
			 <link rel="shortcut icon" href="/favicon.ico" />
			 <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
			 <style type="text/css">
			 body {background: #ffffff url(http://pcvector.net/templates/pcv/images/bg_grid.png);}
			 #page { width: 585px; margin: 30px auto; }
			 #thumbs { padding-top: 10px; overflow: hidden; }
			 #thumbs img, #largeImage { border: 1px solid gray; padding: 4px; background-color: white; cursor: pointer; }
			 #thumbs img { float: left; margin-right: 6px; }
			 #description { background: black; color: white; position: absolute; bottom: 0; padding: 10px 20px; width: 525px; margin: 5px; }
			 #panel { position: relative; }
			 </style>
	 </head>
	 
     <body>
<div id="page">
	 
<div id="gallery">
	<div id="panel">
		<img id="largeImage" src="images/image_01_large.jpg" />
		<div id="description">»гра Rage</div>
	</div>

	<div id="thumbs">

        <img src="images/image_01_thumb.jpg" alt="ќписание 1" />
        <img src="images/image_02_thumb.jpg" alt="ќписание 2" />
        <img src="images/image_03_thumb.jpg" alt="ќписание 3" />
        <img src="images/image_04_thumb.jpg" alt="ќписание 4" />
        <img src="images/image_05_thumb.jpg" alt="ќписание 5" />
	</div>
</div>

</div>

<script>
$('#thumbs').delegate('img','click', function(){
	$('#largeImage').attr('src',$(this).attr('src').replace('thumb','large'));
	$('#description').html($(this).attr('alt'));
});
</script>

</div>
	 
<!-- pcvector.net -->
<script type="text/javascript" src="/templates/pcv/js/pcvector.js"></script>
<!-- /pcvector.net -->
     </body>

</html>	 