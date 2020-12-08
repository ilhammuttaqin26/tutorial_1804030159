<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style type="text/css">
body{	
}
#isi_guestbook {
	height: 400px;
}
#isi_guestbook h3 {
	font-size:19px;
	text-align:center;
}

</style>
</head>

<body>
<div id="isi_guestbook">
	<h3> GUEST BOOK </h3>
<form id="form1" name="form1" method="post" action="index.php?id=tampilan">
  <table width="597" border="1" align="center">
    <tr>
      <td width="150">NAMA</td>
      <td width="431"><label for="nama"></label>
      <input type="text" name="nama" id="nama" /></td>
    </tr>
    <tr>
      <td>EMAIL</td>
      <td><label for="email"></label>
      <input type="text" name="email" id="email" /></td>
    </tr>
    <tr>
      <td>SARAN</td>
      <td><label for="saran"></label>
      <textarea name="saran" id="saran" cols="45" rows="5"></textarea></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input type="submit" name="button" id="button" value="Submit" />
      <input type="reset" name="button2" id="button2" value="Reset" /></td>
    </tr>
  </table>
</form>
</div>
</body>
</html>