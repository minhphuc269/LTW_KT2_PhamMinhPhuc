<?php require_once 'header.php';?>
<form action="process.php" method="post" enctype="multipart/form-data">
<div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-6">
                        <strong>Thêm thương hiệu</strong>
                    </div>
                    <div class="col-6 text-end">
                        <a class="btn btn-sm btn-info"href="index.php">Về danh sách</a>
                        <button type="submit" name="THEM" class="btn btn-sm btn-success">Lưu[Thêm]</button>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-9">
                        <div class="mb-3">
                            <label form="name">Tên thương hiệu</label>
                            <input type="text" name="name" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label form="slug">slug</label>
                            <input type="text" name="slug" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label form="description">Mô tả</label>
                            <textarea name="description" id="description" class="form-control"></textarea>
                        </div>
                    </div>
                    
                    <div class="col-md-3">
                        <div class="mb-3">
                            <label form="image">Hình ảnh</label>
                            <input type="file" name="image" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label form="sort_order">Sắp xếp</label>
                            <select name="sort_order" id="sort_order" class="form-control">
                                <option value="1">None</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label form="status">Trạng thái</label>
                            <select name="status" id="status" class="form-control">
                                <option value="1">Xuất bản</option>
                                <option value="2">Không xuất bản</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</form>
<?php require_once 'footer.php';?>