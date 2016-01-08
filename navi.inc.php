<ul>
  <li><a href="index.php">Home</a></li>
  <li><a href="index.php?s=news">News</a></li>
  <li><a href="index.php?s=events">Events</a></li>
  <li><a href="index.php?s=rankings">Rangliste</a></li>
<?PHP
  if(isset($_SESSION['user_admin']) && checkInt($_SESSION['user_admin']) && $_SESSION['user_admin']>=0) {
    echo'<li><a href="index.php?s=itemshop">Itemshop</a></li>';
    echo'<li><a href="index.php?s=login">Account</a></li>';
  }
  else {
    echo'<li><a href="index.php?s=register">Registrierung</a></li>';
    echo'<li><a href="index.php?s=login">Anmelden</a></li>';
  }
?>
  <li><a href="index.php?s=downloads">Downloads</a></li>
</ul>