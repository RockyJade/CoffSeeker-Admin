<?php 

if(!isset($_POST["name"])){
    die("請依正常管道到此頁");
}

require_once("../../../db_connect.php");

$id=$_POST["categories_id"];
$name=$_POST["name"];
//var_dump($name);

$sql="INSERT INTO categories (categories_name) VALUES ('$name')";

if($conn->query($sql) === TRUE){
    $latesId=$conn->insert_id;
    echo " 新增分類資料表完成,id為$latesId";
    header("location: ../../category.php");
}else{
    echo "新增分類資料表錯誤：". $conn->error;
}

$conn->close();

?>