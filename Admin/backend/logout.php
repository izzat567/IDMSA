<?php
// Start the session
session_start();

// Destroy all sessions
session_unset();
session_destroy();

// Redirect to login page (or home page)
header("location:../../User/index.php");
exit();
?>