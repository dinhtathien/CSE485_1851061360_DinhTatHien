<?php
$id=$_GET['id'];
if (isset($_POST['sbm'])) {
    $title=$_POST['title'];
    $contentPost=$_POST['contentPost'];
    $sql = "UPDATE services 
    SET title='$title',
        content = '$contentPost'
        WHERE id= $id
    ";
    
    if(mysqli_query($conn,$sql)){
        header("location: index.php?category=manageServices");
    }
    
}
?>
<div class="col-12 mt-5">
    <div class="card table-big-boy">
        <div class="card-header ">
            <h4 class="card-title">Edit Post</h4>
            <br />
        </div>
        <div class="card-body" id="newUserForm">
        <form role="form" method="post" enctype="multipart/form-data">
        <?php
            $sql="select * from services where id=$id";
            $result=mysqli_query($conn,$sql);
           
            $row=mysqli_fetch_array($result);
        ?>
            <div class="form-group">
                <label class="col-form-label">Title</label>
                <input type="text" class="form-control" name="title" id="title" value="<?php echo $row['title'] ?>"/>
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
