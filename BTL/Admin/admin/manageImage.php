<div class="user-management col-12 mt-3">
    <div class="card">
        <div class="card-header">
            <h3 class="text-center">PORTFOLIO</h3>
            <div class="status-bar mt-3 d-flex">
                <form>
                    <input type="text" class="textbox" placeholder="Search" />
                </form>
                <button title="Tìm kiếm" type="submit" class="button"><i class="fas fa-search"></i></button>
            </div>
        </div>
        <div class="card-body">
            <div class="list-users mt-5 table-responsive">
                <table class="table table-hover text-center" id="showUser">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Ảnh</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                        $sql = "SELECT * FROM portfolio";
                        $post = mysqli_query($conn, $sql);
                        while($posts = mysqli_fetch_array($post)  ) {
                    ?>
                        <tr>
                            <td><?php echo $posts['id']; ?></td>
                            <td><?php echo $posts['title'];?></td>
                            <td class="d-flex justify-content-end">
                                <button type="button" class="btn btn-outline-secondary mr-2"><i class="fas fa-info"></i></button>
                                <button type="button" class="btn btn-outline-info mr-2" ><a href="index.php?category=upImage&id=<?php echo $posts['id'] ?>"><i class="fas fa-edit"></i></a></button>
                                <button type="button" class="btn btn-outline-danger" ><a href="admin/deleteacc.php?id=<?php echo $posts['id'] ?>"><i class="fas fa-trash-alt"></i></a></button>
                            </td>
                        </tr>
                        <?php }?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
