<?php
$sql="SELECT * FROM about_me";
$res=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($res);
if (isset($_POST['sbm'])) {
    $name=$_POST['name'];
    $age=$_POST['age'];
    $phone=$_POST['phone'];
    $workplace=$_POST['workplace'];
    $position=$_POST['position'];
    $email=$_POST['email'];
    $education=$_POST['education'];
    $add=$_POST['add'];
    $sql = "UPDATE about_me 
    SET name='$name',
        age = '$age',
        sđt = '$phone',
        workplace = '$workplace',
        position = '$position',
        email = '$email',
        education = '$education',
        add = '$add'
        where id = 1
    ";
    if(mysqli_query($conn,$sql)){
        header("location: index.php?category=home");
    }
    
}


?>
<div class="col-12 mt-3">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">About Me</h4>
        </div>
        <form role="form" method="post" enctype="multipart/form-data">
        <div class="card-body" id="newUserForm">
            <div class="form-group">
                <label class="col-form-label">Name</label>
                <input type="text" class="form-control" name="name" id="Name" maxlength="30" value="<?php echo $row['name'] ?>" >
            </div>
            <div class="form-group">
                <label class="col-form-label">Age</label>
                <input type="text" class="d-block mw-auto w-100 form-fields form-control w-25" name="age" id="age" value="<?php echo $row['age'] ?>"/>
            </div>
            <div class="form-group">
                <label class="col-form-label">Phone</label>
                <input type="text" class="form-control" name="phone" id="phone" maxlength="30" value="<?php echo $row['sđt'] ?>"/>
            </div>
            <div class="form-group">
                <label class="col-form-label">Workplace</label>
                <input type="text" class="form-control" name="workplace" id="workplace" maxlength="30" value="<?php echo $row['workplace'] ?>"/>
            </div>
            <div class="form-group">
                <label class="col-form-label">Position</label>
                <input type="text" class="form-control" name="position" id="position" maxlength="30" value="<?php echo $row['position'] ?>"/>
            </div>
            <div class="form-group">
                <label class="col-form-label">Email</label>
                <input type="text" class="form-control" name="email" id="email" maxlength="30" value="<?php echo $row['email'] ?>"/>
            </div>
            <div class="form-group">
                <label class="col-form-label">Education</label>
                <input type="text" class="form-control" name="education" id="education" maxlength="30" value="<?php echo $row['education'] ?>"/>
            </div>
            <div class="form-group">
                <label class="col-form-label">Address</label>
                <input type="text" class="form-control" name="add" id="add" maxlength="30" value="<?php echo $row['add'] ?>"/>
            </div>
            <div class="card-bottom">
                <input type="submit" class="btn btn-info d-block ml-auto" id="newUserBtn" name="sbm" value="Update" />
            </div>
        </div>
        </form>
    </div>
</div>
