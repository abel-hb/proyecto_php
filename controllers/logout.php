<!-- Destruir la sesión de usuario actual -->

<?php
//session_start();
session_unset($_SESSION['email']);
session_destroy();

header('location: ../login.html');
?>