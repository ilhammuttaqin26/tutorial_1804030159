<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style type="text/css">
body{	
}
#isi_tampilan {
	height: 400px;
}
#isi_tampilan h3 {
	font-size:19px;
	text-align:center;
}

</style>
</head>

<body>
<div id="isi_tampilan">
<h3>TAMPILAN FORM GUESTBOOK</h3>
<form id="form1" name="form1" method="post" action="">
  <table width="597" border="1" align="center">
    <tr>
      <td width="150">NAMA</td>
      <td width="431"><label for="nama">
      	<?php echo $_POST ['nama']; ?>
      </label>&nbsp;</td>
    </tr>
    <tr>
      <td>EMAIL</td>
      <td><label for="email">
      	<?php echo $_POST ['email']; ?>
      </label>&nbsp;</td>
    </tr>
    <tr>
      <td>SARAN</td>
      <td><label for="textarea"></label>
        <textarea name="textarea" cols="45" rows="5" readonly="readonly" id="textarea"><?php echo $_POST ['saran']; ?>
        </textarea></td>
    </tr>
  </table>
</form>
</div>
</body>
</html>