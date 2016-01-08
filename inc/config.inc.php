<?PHP

      DEFINE('SQL_HOST', '25.150.155.100');
      DEFINE('SQL_USER', 'root');
      DEFINE('SQL_PASS', 'root');

      DEFINE('SQL_HP_HOST', '25.150.155.100');
      DEFINE('SQL_HP_USER', 'root');
      DEFINE('SQL_HP_PASS', 'root');
      DEFINE('SQL_HP_DB', 'account');
      
      $serverSettings['titel_page']="BeispielMT2 - Homepage";         // Webseiten-Titel
      $serverSettings['titel']="BeispielMT2";                           // Servername
      $serverSettings['url']="http://www.beispielmt2.de/mein/script";                     // URL zur Seite (ohne letzten "/")
      $serverSettings['server_ip']="";                         // Server-IP
      $serverSettings['register_on']=true;                              // Registration aktiviert (ja = true / nein = false)
      $serverSettings['mail_activation']=false;                          // Mailaktivierung (ja = true / nein = false)
      $serverSettings['page_entries']=30;                               // Eintr�ge pro Seite
      $serverSettings['reg_mail']='reg@beispielmt2.de';                   // E-Mail-Absender bei Registration
      $serverSettings['pass_mail']='passwort@beispielmt2.de';                 // E-Mail-Absender bei Passwortreset
	  $serverSettings['tombola']=true;									// Tombola aktiviert (ja = true / nein = false)
	  $tombolaPrice='100';												// Wie viel ein Ticket kostet	  
      
      require("daten.inc.php");
      
    ?>