<?PHP
  if(isset($_SESSION['user_admin']) && checkInt($_SESSION['user_admin']) && $_SESSION['user_admin']>=0) {
    ?>
    <div id="userInfo">
      <a href="index.php?s=logout">Logout</a><br>
      <a href="index.php?s=login">Userpanel</a><br>
      <a href="index.php?s=itemshop">Itemshop</a><br>
	  <a href="index.php?s=vote">Vote4Coins</a><br>
	  <a href="index.php?s=spenden">Spenden</a><br>
	  <a href="index.php?s=charaktere">Charaktere</a><br>
	  <a href="index.php?s=passwort">Daten &auml;ndern</a><br>
      <?PHP
        if($_SESSION['user_admin']>0) { echo'<a href="index.php?s=admin">Admin</a>'; }
      ?>
    </div>
    <?PHP
  }
  else {
  ?>
	<div style="min-height:150px;">
 
    <form action="index.php?s=userpanel" method="POST">
		<input type="text" class="username" name="userid" maxlength="16"/><br>
		<input type="password" class="passwort" name="userpass" maxlength="16"/><br>
		<input type="submit" class="btn" name="submit" style="margin-right:160px;" value="Login">
	</form>
	<div style="margin-top:-35px;">
		<a href="index.php?s=lostpw" style="margin-left:100px; font-size:13px;">Accountdaten vergessen?</a><br>
		<a href="index.php?s=register" style="margin-left:100px; font-size:13px;">Auf dem Server registrieren</a>
	</div>
	</div>
  <?PHP
  }
?>