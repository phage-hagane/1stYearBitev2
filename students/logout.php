<?php
 session_start();

 session_destroy();
?>
<script>
    alert("logout");

    window.location.href="../index.php";
</script>