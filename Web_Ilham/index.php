<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Website KAMI</title>
<link href="style1.css" rel="stylesheet" type="text/css" />
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&display=swap" rel="stylesheet">
</head>

<body>
<div id="utama">
    
	  <div id="header">
      	<h1> WEBSITE ILHAM MUTTAQIN </h1>
      </div>
      <div id="menu_kiri">
	   	<a href="index.php?id=beranda"> <div class="menu">Beranda</div> </a>
       	<a href="index.php?id=myprofil"> <div class="menu">myprofil</div> </a>
       	<a href="index.php?id=guestbook"> <div class="menu">guestbook</div> </a>
      </div>
  <div id="konten"><?php include"isi.php";?></div>
      <div id="footer"><span>Copyright@2020 Ilham Muttaqin</span></div>
      	   
  </div>
</body>
</html>