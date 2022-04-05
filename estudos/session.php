<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
// Set session variables
$_SESSION["Nome"] = "Alanis";
$_SESSION["corfav"] = "azul";
$_SESSION["animalfav"] = "cachorro";


echo "Session variables are set.";
?>

</body>
</html>