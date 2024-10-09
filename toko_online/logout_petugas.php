<?php
session_start();
session_destroy();
header (header : "location:login_petugas.php?pesan=logout");
?>