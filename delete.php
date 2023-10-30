<?php
require_once 'db.php';
$db=new Db();
$id=$_REQUEST['id'];
$data=$db->getOne($id);
if(count($data)>0){
    $target_dir = "images/brand/";
    //xóa hình cũ
    unlink($target_dir.$data['image']);
    $db->delete($id);
}
header("location:index.php");