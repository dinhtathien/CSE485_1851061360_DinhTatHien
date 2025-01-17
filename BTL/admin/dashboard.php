<?php
    require('mysqli_connect.php');
    $user_name=$_SESSION["user"]["fullname"];

// if (!isset($_SESSION['level'])) {
//     header('Location: index.php');
// }
?>
<html lang="en">

<head>
    <title>Dashboard</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="admin/style.css">
    <link rel="stylesheet" type="text/css" href="admin/assets/css/style.css">
    <script src="admin/ckeditor/ckeditor.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
</head>

<body>

    <div class="alert alert-success notify-success p-13" role="alert">
    </div>
    <div class="wrapper">
        <div class='sidebar'>
            <div class="sidebar-wrapper">
                <div class="logo">
                    <img class="img-logo" src="./images/anhdaidien.jpg" alt="Logo" />
                    <a class="link-hcmedia" href="index.php" alt="Trang chủ">Đinh Tất Hiển</a>
                </div>
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?category=home">
                            <i class="nc-icon nc-grid-45"></i>
                            <span class="nav-item-title">HOME</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?category=aboutme">
                            <i class="nc-icon nc-single-02"></i>
                            <span class="nav-item-title">ABOUT ME</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#component1">
                            <i class="nc-icon nc-single-copy-04"></i>
                            <span class="nav-item-title">RESUME<i class="fas fa-caret-down"></i></span>
                        </a>
                        <ul class="nav collapse" id="component1">
                            <li class="nav-item nav-child">
                                <a class="nav-link" href="index.php?category=manageResume">
                                    <span class="link-name-normal nav-item-title">Manager Resume</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#component2">
                            <i class="nc-icon nc-single-copy-04"></i>
                            <span class="nav-item-title">SERVICES<i class="fas fa-caret-down"></i></span>
                        </a>
                        <ul class="nav collapse" id="component2">
                            <li class="nav-item nav-child">
                                <a class="nav-link" href="index.php?category=manageServices">
                                    <span class="link-name-normal nav-item-title">Manager Services</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#component3">
                            <i class="nc-icon nc-single-copy-04"></i>
                            <span class="nav-item-title">PORTFOLIO<i class="fas fa-caret-down"></i></span>
                        </a>
                        <ul class="nav collapse" id="component3">
                            <li class="nav-item nav-child">
                                <a class="nav-link" href="index.php?category=newPost">
                                    <span class="link-name-normal nav-item-title">Add Image</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#component4">
                            <i class="nc-icon nc-single-02"></i>
                            <span class="nav-item-title">ACC<i class="fas fa-caret-down"></i></span>
                        </a>
                        <ul class="nav collapse" id="component4">
                            <li class="nav-item nav-child">
                                <a class="nav-link" href="index.php?category=manageAcc">
                                    <span class="link-name-normal nav-item-title">Manager Accounts</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
        <div class='main-content white-space'>
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                    <div class="navbar-wrapper">
                        <div class="sidebar-toggle">
                            <button id="btn-toggle" class="sidebar-toggle-btn">
                                <i class="fas fa-ellipsis-v"></i>
                            </button>
                        </div>
                        <div>
                            <div class="nav-search w25vw ">
                                <input type="text" class="form-control" placeholder="Tìm kiếm..." />
                                <i class="nc-icon nc-zoom-split"></i>
                            </div>
                            <div class="users-wrapper">
                                <div class="users-info">
                                    <span><?php echo $user_name ?></span>
                                </div>
                                <ul class="nav users-dropdown" id="component3">
                                    <li class="nav-item">
                                        <a class="nav-link" href="index.php?category=changepass&id=<?php $user_id=$_SESSION['user']['id'];echo $user_id?>">
                                            <i class="nc-icon nc-refresh-02"></i>
                                            <span class="link-name-normal">Change Password</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="./admin/logout.php">
                                            <i class="nc-icon nc-button-power"></i>
                                            <span class="link-name-normal text-danger">Logout</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
            <?php
            if (isset($_GET['category'])) {
                $category = $_GET['category'];
            } else {
                $category = '';
            }
            switch ($category) {
                case "home":
                    include('admin/home.php');
                    break;
                case "aboutme":
                    include('admin/aboutme.php');
                    break;
                case "newPost":
                    include('admin/newPosts.php');
                    break;
                case "newAccount":
                    include('admin/newAccount.php');
                    break;
                case "manageAcc":
                    include('admin/manageAcc.php');
                    break;
                case "manageServices":
                    include('admin/manageServices.php');
                    break;
                case "manageResume":
                    include('admin/manageResume.php');
                    break;
                case "editacc":
                    include('admin/editacc.php');
                    break;
                case "changepass":
                    include('changePassword.php');
                    break;
                default:
                    include('admin/home.php');
                    break;
            }
            ?>
        </div>
    </div>
    <script>
        if ($("#contentPost").length) {
            CKEDITOR.replace('contentPost',
            {

                filebrowserBrowseUrl : 'admin/ckfinder/ckfinder.html',
                filebrowserImageBrowseUrl : 'admin/ckfinder/ckfinder.html?type=Images',
                filebrowserFlashBrowseUrl : 'admin/ckfinder/ckfinder.html?type=Flash',
                filebrowserUploadUrl : 'admin/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
                filebrowserImageUploadUrl : 'admin/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
                filebrowserFlashUploadUrl : 'admin/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash'

            });
        }
    </script>
    <script src="js/editSubject.js"></script>
    <script src="js/changePass.js"></script>
    <script src="admin/assets/js/script.js"></script>
    <script src="admin/assets/js/index.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>
</html>
