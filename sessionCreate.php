<?php 
    session_start();
?>

<!DOCTYPE html>
<html>
<head>
</head>
<body>
    <?php 
        $_SESSION["favcolor"] = "green";
        $_SESSION["favanimal"] = "cat";
        echo "Session Variable are set";
    ?>
</body>
</html>