<?php
include '../config/functions.php';
include 'head.php';
include 'sidebar.php';
include 'header.php';
if (!isset($_SESSION["user"])) {
    header("Location:login.php");
}

$about = selectOne('about', 1);

$about_title = @$_POST['about_title'];
$about_img = @$_FILES['about_img']["name"];
$about_ds = @$_POST['about_ds'];


if (isset($_POST['add_about'])) {
    $dist = '../images/' . "$about_img";
    if (move_uploaded_file($_FILES['about_img']['tmp_name'], $dist)) {
        $data = [
            "title" => $about_title,
            "img" => $about_img,
            "descriptions" => $about_ds,
        ];
        update('about', $data, 1);
        header('location:edit-about.php');
    } else {
        $data = [
            'title' => $about_title,
            'descriptions' => $about_ds,
        ];
        update('about', $data, 1);
        header('location:edit-about.php');
    }
}

?>

<body>

    <!-- Main Wrapper -->
    <div class="main-wrapper">
        <!-- Page Wrapper -->
        <div class="page-wrapper">
            <div class="content container-fluid">

                <!-- Page Header -->
                <div class="page-header">
                    <div class="row align-items-center">
                        <div class="col">
                            <h3 class="page-title">Edit About</h3>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                                <li class="breadcrumb-item active">About</li>
                            </ul>
                        </div>

                    </div>
                </div>
                <!-- /Page Header -->
                <div class="row">
                    <div class="col-xl-8 offset-xl-2">

                        <!-- Page Header -->
                        <div class="page-header">
                            <div class="row">
                                <div class="col-sm-12">
                                    <h3 class="page-title">Edit About</h3>
                                </div>
                            </div>
                        </div>
                        <!-- /Page Header -->
                        <form method="post" enctype="multipart/form-data">
                            <div class="card">
                                <div class="card-body">
                                    <div class="bank-inner-details">
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12">
                                                <div class="form-group">
                                                    <label>Title<span class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" name="about_title"
                                                        value="<?php echo $about['title'] ?>">
                                                </div>
                                            </div>

                                            <div class="col-lg-12 col-md-12">
                                                <div class="form-group">
                                                    <label>About Image</label>
                                                    <div class="change-photo-btn">
                                                        <div>
                                                            <p>Add Image</p>
                                                        </div>
                                                        <input type="file" class="upload" name="about_img">
                                                    </div>

                                                    <img class="img-fluid" src="../images/<?php echo $about['img'] ?>"
                                                        style="width:100%;object-fit:cover;height: 300px;">
                                                </div>
                                            </div>
                                            <div class="col-lg-12 col-md-12">
                                                <div class="form-group">
                                                    <label>Description</label>
                                                    <textarea id="editor" name="about_ds">
                                                        <?php echo $about['descriptions'] ?>
                                                    </textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=" blog-categories-btn pt-0">
                                    <div class="bank-details-btn ">
                                        <button class="btn btn-primary me-2" name="add_about">Add Post</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

            </div>

        </div>
    </div>
    <!-- /Page Wrapper -->

    </div>
    <!-- /Main Wrapper -->
    <?php include 'footerAd.php' ?>
</body>