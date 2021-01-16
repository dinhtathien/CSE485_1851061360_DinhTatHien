<?php

if (isset($_POST['sbm'])) {
    $cat=$_POST['category'];
    $title=$_POST['title'];
    $cont=$_POST['contentPost'];
    $sql = "INSERT INTO posts (title, content,categories_id )
    VALUES ('$title','$cont',$cat)";
    if(mysqli_query($conn,$sql)){
        header("location: index.php?category=managePost");
    }
    
}
?>




<div class="col-12 mt-5">
    <div class="card table-big-boy">
        <div class="card-header ">
            <h4 class="card-title">New Post</h4>
            <p class="card-category">Create a new post</p>
            <br />
        </div>
        <div class="card-body" id="newUserForm">
        <form role="form" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="permission">Category</label>
                <select class="custom-select p-13" name="category" id="category">
                <?php
                    $sql="SELECT * FROM categories ORDER BY id";
                    $res=mysqli_query($conn,$sql);
                    while($row=mysqli_fetch_assoc($res)){
                ?>
                <option value="<?php echo $row['id'] ?>"><?php echo $row['name']?></option>
                <?php 
                    }  
                ?>
                </select>
            </div>
            <div class="form-group">
                <label class="col-form-label">Title</label>
                <input type="text" class="form-control" name="title" id="title">

            </div> 
            <div class="form-group">
                <label class="col-form-label">Content</label>
                <textarea rows="10" cols="150" name="contentPost" id="contentPost" class="form-control" placeholder="Here can be your description" value=""></textarea>
            </div>       
            <button type="submit" name="sbm" class="btn btn-primary">Thêm mới</button>
            <button type="reset" class="btn btn-default">Làm mới</button>
        </form>
        </div>
    </div>
</div>
