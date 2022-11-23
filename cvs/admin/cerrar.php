<?php
 session_start();
   unset($_SESSION['nombre']);
		session_destroy();
		?> <script type="text/javascript">window.location.href="http://www.fss.cl/";</script> <?php
?>
