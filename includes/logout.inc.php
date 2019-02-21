<?php
$_SESSION['login'] = 0;
session_destroy();
echo "<script>document.location.href='http://localhost/php-rfd/'</script>";
