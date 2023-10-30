<?php
require_once 'db.php';
$db=new Db();
$id=$_REQUEST['id'];
$data=$db->getOne($id);
$data['status']=($data['status']==1)?2:1;
$data['updated_at']=date('Y-m-d H:i:s');
$data['updated_by']=1;
$db->update($data,$id);
header("location:index.php");