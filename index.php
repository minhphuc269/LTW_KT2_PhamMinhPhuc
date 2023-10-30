<?php
require_once 'db.php';
$db=new Db();
$list=$db->getAll();
$count=$db->getCount();
?>
<?php require_once 'header.php';?>
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-6">
                        <strong>Danh sách thương hiệu (<?=$count;?>)</strong>
                    </div>
                    <div class="col-6 text-end">
                        <a class="btn btn-sm btn-success"href="create.php">Thêm mới thương hiệu</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th style="width:20px;">#</th>
                            <th style="width:100px;">Hình</th>
                            <th>Tên thương hiệu</th>
                            <th>Chức năng</th>
                            <th style="width:20px;">id</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($list as $item):?>
                            <tr>
                            <td><input type="checkbox"></td>
                            <td><img class="img-fluid" src="images/brand/<?=$item['image'];?>" alt=""></td>
                            <td><?=$item['name'];?></td>
                            <td>
                                <?php if($item['status']==1):?>
                                    <a href="status.php?id=<?=$item['id'];?>" class="btn btn-sm btn-success">
                                    <i class="fa fa-toggle-on" aria-hidden="true"></i>
                                </a>
                                <?php else:?>
                                    <a href="status.php?id=<?=$item['id'];?>" class="btn btn-sm btn-danger">
                                    <i class="fa fa-toggle-off" aria-hidden="true"></i>
                                </a>
                                <?php endif;?>
                                
                                <a href="edit.php?id=<?=$item['id'];?>" class="btn btn-sm btn-primary">
                                    <i class="fa fa-edit" aria-hidden="true"></i>
                                </a>
                                <a href="delete.php?id=<?=$item['id'];?>" class="btn btn-sm btn-danger">
                                    <i class="fa fa-trash" aria-hidden="true"></i>
                                </a> 
                            </td>
                                <td><?=$item['id'];?></td>
                            </tr>
                        <?php endforeach;?>
                    </tbody>
                </table>
            </div>
        </div>
<?php require_once 'footer.php';?>