<?php
session_start();
session_destroy();
header('Location: http://localhost/praktekweb-main/index.php?error=Anda Telah Logout');
?>