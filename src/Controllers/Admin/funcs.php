
<?php
function totalRecord($con){
    $sql = "SELECT COUNT(id) AS total FROM posts";
    return mysqli_query($con,$sql);
}
?>