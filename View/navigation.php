<?php
    require_once(__DIR__ . "/../model/config.php");
    require_once(__DIR__ . "/../controller/login-verify.php");
    
    if(!authenticateUser()) {
        header("Location: " . $path . "index.php");
        die();
    }
?>
<nav>    
    <ul>
        <li><a href = "<?php echo $path . ""?>">Blog post form</a></li>               
    </ul>
</nav>
