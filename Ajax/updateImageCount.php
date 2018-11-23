<?php
include '../config.php';

if(isset($_POST["imageUrl"])){
    $query = $con->prepare("UPDATE images SET 
                            clicks = clicks + 1 WHERE
                            image_url = :imageUrl");
    $query->bindParam(":imageUrl", $_POST["imageUrl"]);
    $query->execute();
}
else{
    echo "No link passed to page";
}

?>