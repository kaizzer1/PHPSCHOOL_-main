<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
// Echo session variables that were set on previous page
echo "Meu nome é " . $_SESSION["Nome"] . ".<br>"; 
echo "Minha cor favorita é " . $_SESSION["corfav"] . ".<br>";
echo "Meu animal favorito é " . $_SESSION["animalfav"]. ".<br>" ;
; 
?>

</body>
</html>