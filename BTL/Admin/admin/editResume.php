<?php
$id=$_GET['id'];
if (isset($_POST['sbm'])) {
    $title=$_POST['title'];
    $time=$_POST['time'];
    $add=$_POST['add'];
    $contentPost =$_POST['contentPost'];
    $sql = "UPDATE resume 
    SET title='$title',
        time='$time',
        address='$add',
        content = '$contentPost'
        WHERE id= $id
    ";
    if(mysqli_query($conn,$sql)){
        header("location: index.php?category=manageResume");
    }
    
}
?>
<div class="col-12 mt-5">
    <div class="card table-big-boy">
        <div class="card-header ">
            <h4 class="card-title">Edit Resume</h4>
            <br />
        </div>
        <?php
            $sql="select * from resume where id=$id";
            $result=mysqli_query($conn,$sql);
            $row=mysqli_fetch_array($result);
        ?>
        <div class="card-body" id="newUserForm">
        <form role="form" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label class="col-form-label">Title</label>
                <input type="text" class="form-control" name="title" id="title" value="<?php echo $row['title'] ?>"/>
            </div> 
            <div class="form-group">
                <label class="col-form-label">Time</label>
                <input type="text" class="form-control" name="time" id="time" value="<?php echo $row['time'] ?>"/>
            </div> 
            <div class="form-group">
                <label class="col-form-label">Address</label>
                <input type="text" class="form-control" name="add" id="add" value="<?php echo $row['address'] ?>"/>
            </div> 
            <div class="form-group">
                <label class="col-form-label">Content</label>
                <textarea rows="10" cols="150" name="contentPost" id="contentPost" class="form-control" placeholder="Here can be your description" value="<?php echo $row['content'] ?>"></textarea>
            </div>        
            <input type="submit" class="btn btn-info d-block ml-auto" id="newUserBtn" name="sbm" value="Perform" />
        </form>
        </div>
    </div>
</div>
