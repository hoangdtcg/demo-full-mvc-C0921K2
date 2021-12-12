<?php
if (isset($_SESSION['user'])) {
    $user = $_SESSION['user'];
} else {
    header("Location:index.php?page=login");
}
?>
<div class="container">
    <div class="row profile">
        <?php include "app/views/layout/profile.php"?>
    </div>
</div>