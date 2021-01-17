<?php

if (isset($_POST['sbm'])) {
    $title=$_POST['title'];
    $time=$_POST['time'];
    $add=$_POST['add'];
    $contentPost=$_POST['contentPost'];
    $sql = "INSERT INTO resume (title, time, address ,content)
    VALUES ('$title','$time','$add', '$contentPost')";
    if(mysqli_query($conn,$sql)){
        header("location: index.php?category=manageResume");
    }
    
}
?>
<div class="col-12 mt-3">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">New Resume</h4>
            <p class="card-category">Create a new resume</p>
        </div>
        <form role="form" method="post" enctype="multipart/form-data">
        <div class="card-body" id="newUserForm">
            <div class="form-group">
                <label class="col-form-label">Title</label>
                <input type="text" class="form-control" name="title" id="title" maxlength="30" />
            </div>
            <div class="form-group">
                <label class="col-form-label">Time</label>
                <input type="text" class="d-block mw-auto w-100 form-fields form-control w-25" name="time" id="time" />
            </div>
            <div class="form-group">
                <label class="col-form-label">Address</label>
                <input type="text" class="d-block mw-auto w-100 form-fields form-control w-25" name="add" id="add" />
            </div>
            <div class="form-group">
                <label class="col-form-label">Content</label>
                <textarea rows="10" cols="150" name="contentPost" id="contentPost" class="form-control" placeholder="Here can be your description" value="<?php echo $row['content'] ?>"></textarea>
            </div>    
            <div class="card-bottom">
                <input type="submit" class="btn btn-info d-block ml-auto" id="newUserBtn" name="sbm" value="ADD NEW" />
            </div>
        </div>
        </form>
    </div>
</div>
