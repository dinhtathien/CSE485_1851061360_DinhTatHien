<div class="user-management col-12 mt-3">
    <div class="card">
        <div class="card-header">
            <h3 class="text-center">SERVICES</h3>
            <div class="status-bar mt-3 d-flex">
                <form>
                    <input type="text" class="textbox" placeholder="Search" />
                </form>
                <button title="Tìm kiếm" type="submit" class="button"><i class="fas fa-search"></i></button>
                <a class="text-decoration-none ml-auto" href="index.php?category=newPost"><input type="button" class="btn btn-outline-secondary" value="Thêm Services" /></a>
            </div>
        </div>
        <div class="card-body">
            <div class="list-users mt-5 table-responsive">
                <table class="table table-hover text-center" id="showUser">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Title</th>
                            <th scope="col">Content</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                        $sql = "SELECT * FROM services";
                        $post = mysqli_query($conn, $sql);
                        while($posts = mysqli_fetch_array($post)  ) {
                    ?>
                        <tr>
                            <td><?php echo $posts['id']; ?></td>
                            <td><?php echo $posts['title'];?></td>
                            <td><?php echo $posts['content']; ?></td>
                            <td class="d-flex justify-content-end">
                                <button type="button" class="btn btn-outline-secondary mr-2"><i class="fas fa-info"></i></button>
                                <button type="button" class="btn btn-outline-info mr-2" data-toggle="modal" data-target="#editUser" data-user="<?=$rowUser['userID'];?>" id="editUserBtn" ><i class="fas fa-edit"></i></button>
                                <button type="button" class="btn btn-outline-danger" data-toggle="modal" data-target="#confirm-delete" data-user="<?=$rowUser['userID'];?>" id ="deleteUserBtn"><i class="fas fa-trash-alt"></i></button>
                            </td>
                        </tr>
                        <?php }?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<?php include('admin/modal/editPost.php'); ?>
<?php include('admin/modal/confirmDelete.php'); ?>
