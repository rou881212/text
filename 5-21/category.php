<?php
require_once("../db_connect.php");

$sqlCategory="SELECT * FROM category ORDER BY id ASC";
$resultCate=$conn->query($sqlCategory);
$cateRows=$resultCate->fetch_all(MYSQLI_ASSOC);


?>
<pre>
    <?php print_r($cateRows); ?>
</pre>
<?php
$category=[];
foreach($cateRows as $cate){
    $category[$cate["id"]]=$cate["name"];
}
?>
<pre>
     <?php print_r($category); ?>
</pre>