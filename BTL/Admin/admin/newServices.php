<?php

if (isset($_POST['sbm'])) {
    $title=$_POST['title'];
    $content=$_POST['content'];
    $sql = "INSERT INTO services (title, content)
    VALUES ('$title','$content')";
    if(mysqli_query($conn,$sql)){
        header("location: index.php?category=manageServices");
    }
    
}
?>
<div class="col-12 mt-3">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">New Services</h4>
            <p class="card-category">Create a new Services</p>
        </div>
        <form role="form" method="post" enctype="multipart/form-data">
        <div class="card-body" id="newUserForm">
            <div class="form-group">
                <label class="col-form-label">Title</label>
                <input type="text" class="form-control" name="title" id="title" maxlength="30" />
            </div>
            <div class="form-group">
                <label class="col-form-label">Content</label>
                <input type="text" class="d-block mw-auto w-100 form-fields form-control w-25" name="content" id="content" />
            </div>
            <div class="card-bottom">
                <input type="submit" class="btn btn-info d-block ml-auto" id="newUserBtn" name="sbm" value="ADD NEW" />
            </div>
        </div>
        </form>
    </div>
</div>
