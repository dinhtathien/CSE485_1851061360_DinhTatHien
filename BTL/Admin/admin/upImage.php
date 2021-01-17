<?php
$id=$_GET['id'];
if (isset($_POST['sbm'])) {
    $title=$_POST['title'];
    $contentPost=$_POST['contentPost'];
    $sql = "UPDATE portfolio 
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
            <h4 class="card-title">Add Image</h4>
            <br />
        </div>
        <div class="card-body" id="newUserForm">
        <form role="form" method="post" enctype="multipart/form-data">
        <?php
            $sql="select * from portfolio where id=$id";
            $result=mysqli_query($conn,$sql);
           
            $row=mysqli_fetch_array($result);
        ?>
            <div class="form-group">
                <label class="col-form-label">ID</label>
                <input type="text" class="form-control" name="title" id="title" value="<?php echo $row['title'] ?>"/>
            </div> 
                <div class="form-group">
                    <label>Ảnh</label>
                        <input required type="file" name="image">
                        <br>
                    <div>
                        <img width="160px" height="215" src="./image/portfolio/port1.JPG">
                    </div>
                </div> 
            <input type="submit" class="btn btn-info d-block ml-auto" id="newUserBtn" name="sbm" value="Perform" />
        </form>
        </div>
    </div>
</div>


    <!--/.main-->
                        