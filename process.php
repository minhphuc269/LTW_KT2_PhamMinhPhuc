<?php
require_once 'db.php';
$db=new Db();
if(isset($_POST['THEM'])){
    
    $data=[
        'name'=>$_POST['name'],
        'slug'=>$_POST['slug'],
        'description'=>$_POST['name'],
        'sort_order'=>$_POST['sort_order'],
        'status'=>$_POST['status'],
        'created_at'=>date('Y-m-d H:i:s'),
        'created_by'=>1,
    ];
    //
    if(strlen($_FILES["image"]["name"]>0))
    {
        $target_dir = "images/brand/";
        $target_file = $target_dir . basename($_FILES["image"]["name"]);
        $extension = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        if(in_array($extension,['jpg','png','jpeg','webp','gif']))
        {
            $filename=date('YmdHis').".".$extension;
            move_uploaded_file($_FILES["image"]["tmp_name"],$target_dir.$filename);
            $data['image']=$filename;
        }
    }
    
    //
    $db->insert($data);
    header("location:index.php");
}

if(isset($_POST['CAPNHAT'])){
    $id=$_POST['id'];
    $data=$db->getOne($id);
    $data['name']=$_POST['name'];
    $data['slug']=$_POST['slug'];
    $data['description']=$_POST['description'];
    $data['sort_order']=$_POST['sort_order'];
    $data['status']=$_POST['status'];
    $data['updated_at']=date('Y-m-d H:i:s');
    $data['updated_by']=1;
    //
    if(strlen($_FILES["image"]["name"]>0))
    {
        $target_dir = "images/brand/";
        //xóa hình cũ
        unlink($target_dir.$data['image']);
        $target_file = $target_dir . basename($_FILES["image"]["name"]);
        $extension = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        if(in_array($extension,['jpg','png','jpeg','webp','gif']))
        {
            $filename=date('YmdHis').".".$extension;
            move_uploaded_file($_FILES["image"]["tmp_name"],$target_dir.$filename);
            $data['image']=$filename;
        }
    }
    
    //
    $db->update($data,$id);
    header("location:index.php");
}