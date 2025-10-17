<?php
session_start();        // Mulai session dulu
session_unset();        // Hapus semua variabel session
session_destroy();      // Hancurkan session
header("Location: index.html");  // Arahkan balik ke halaman login
exit;
?>