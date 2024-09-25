<?php
session_start();
if ($_SESSION['status_login'] != true) {
    header('location: index.php');
}
?>
<?php
include "header.php";
?>
<h2 class="welcom-title">Selamat datang <?= $_SESSION['nama'] ?> di website.</h2>
<?php
include "footer.php";
?>