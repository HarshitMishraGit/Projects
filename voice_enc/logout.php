<?php 


session_start();
// echo "logging you out............";

session_destroy();

echo '<script>
alert("You are logged out");
window.location="./index.php";
</script>';
?>