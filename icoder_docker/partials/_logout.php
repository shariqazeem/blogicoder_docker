<?php
session_start();
ob_start();
echo '<div class="alert alert-warning alert-dismissible fade show my-3" role="alert">
    <strong>Logging you out, please wait...</strong>
    <div class="spinner-border spinner-border-sm text-warning ms-2" role="status">
        <span class="visually-hidden">Loading...</span>
    </div>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
header("refresh:2;url=/index.php");
session_destroy();
ob_end_flush();
?>
