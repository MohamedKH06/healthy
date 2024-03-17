<?php 
include '../config/functions.php';
include 'head.php';
include 'sidebar.php';
include 'header.php';
if (!isset($_SESSION["user"])) {
	header("Location:login.php");
}
    ?>

<body class="nk-body bg-lighter npc-default has-sidebar no-touch nk-nio-theme">

    <!-- Main Wrapper -->
    <div class="main-wrapper">



        <!-- Page Wrapper -->
        <div class="page-wrapper">
            <div class="content container-fluid">

                <!-- Page Header -->
                <!-- Blog List -->
                <div class="row">
                    <div class="col-md-9">
                        <ul class="list-links mb-4">
                            <li class="active"><a href="blog.php">Active Blog</a></li>
                            <li><a href="pending-blog.php">Pending Blog</a></li>
                        </ul>
                    </div>
                    <div class="col-md-3 text-md-end">
                        <a href="add-blog.php" class="btn btn-primary btn-blog mb-3"><i
                                class="feather-plus-circle me-1"></i> Add New</a>
                    </div>
                </div>

                <!-- top tean -->
                <div class="row">

                    <div class="col-md-6 col-xl-4 col-sm-12 d-flex">
                        <div class="blog grid-blog flex-fill">
                            <h1>top team</h1>
                            <div class="blog-image">
                                <a href="blog-details.php"><img class="img-fluid" src="assets/img/category/blog-1.jpg"
                                        alt="Post Image"></a>
                            </div>
                            <div class="blog-content">

                                <h3 class="blog-title"><a href="blog-details.php">
                                        NAME</a></h3>

                                <h5>sab Name</h5>
                                <p>Description</p>
                            </div>
                            <div class="row">
                                <div class="edit-options">
                                    <div class="edit-delete-btn">
                                        <a href="edit-blog.php" class="text-success"><i class="feather-edit-3 me-1"></i>
                                            Edit</a>
                                        <a href="#" class="text-danger" data-bs-toggle="modal"
                                            data-bs-target="#deleteModal"><i class="feather-trash-2 me-1"></i>
                                            Delete</a>
                                    </div>
                                    <div class="text-end inactive-style">
                                        <a href="javascript:void(0);" class="text-danger" data-bs-toggle="modal"
                                            data-bs-target="#deleteNotConfirmModal"><i class="feather-eye-off me-1"></i>
                                            Inactive</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- top team -->

                <div class="row">

                    <!-- Blog Post -->
                    <div class="col-md-6 col-xl-4 col-sm-12 d-flex">
                        <div class="blog grid-blog flex-fill">
                            <div class="blog-image">
                                <a href="blog-details.php"><img class="img-fluid" src="assets/img/category/blog-1.jpg"
                                        alt="Post Image"></a>


                            </div>
                            <div class="blog-content">
                                <ul class="entry-meta meta-item">
                                    <li>
                                        <div class="post-author">
                                            <a href="profile.php">
                                                <img src="assets/img/profiles/avatar-12.jpg" alt="Post Author">
                                                <span>
                                                    <span class="post-title">Alex Campbell</span>
                                                    <span class="post-date"><i class="far fa-clock"></i> 4 Dec
                                                        2022</span>
                                                </span>
                                            </a>
                                        </div>
                                    </li>
                                </ul>
                                <h3 class="blog-title"><a href="blog-details.php">
                                        Lorem Ipsum es simplemente</a></h3>
                                <p>Lorem ipsum dolor sit amet, con</p>
                            </div>
                            <div class="row">
                                <div class="edit-options">
                                    <div class="edit-delete-btn">
                                        <a href="edit-blog.php" class="text-success"><i class="feather-edit-3 me-1"></i>
                                            Edit</a>
                                        <a href="#" class="text-danger" data-bs-toggle="modal"
                                            data-bs-target="#deleteModal"><i class="feather-trash-2 me-1"></i>
                                            Delete</a>
                                    </div>
                                    <div class="text-end inactive-style">
                                        <a href="javascript:void(0);" class="text-danger" data-bs-toggle="modal"
                                            data-bs-target="#deleteNotConfirmModal"><i class="feather-eye-off me-1"></i>
                                            Inactive</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Blog Post -->
<!-- Blog Post -->
<div class="col-md-6 col-xl-4 col-sm-12 d-flex">
                        <div class="blog grid-blog flex-fill">
                            <div class="blog-image">
                                <a href="blog-details.php"><img class="img-fluid" src="assets/img/category/blog-1.jpg"
                                        alt="Post Image"></a>


                            </div>
                            <div class="blog-content">
                                <ul class="entry-meta meta-item">
                                    <li>
                                        <div class="post-author">
                                            <a href="profile.php">
                                                <img src="assets/img/profiles/avatar-12.jpg" alt="Post Author">
                                                <span>
                                                    <span class="post-title">Alex Campbell</span>
                                                    <span class="post-date"><i class="far fa-clock"></i> 4 Dec
                                                        2022</span>
                                                </span>
                                            </a>
                                        </div>
                                    </li>
                                </ul>
                                <h3 class="blog-title"><a href="blog-details.php">
                                        Lorem Ipsum es simplemente</a></h3>
                                <p>Lorem ipsum dolor sit amet, con</p>
                            </div>
                            <div class="row">
                                <div class="edit-options">
                                    <div class="edit-delete-btn">
                                        <a href="edit-blog.php" class="text-success"><i class="feather-edit-3 me-1"></i>
                                            Edit</a>
                                        <a href="#" class="text-danger" data-bs-toggle="modal"
                                            data-bs-target="#deleteModal"><i class="feather-trash-2 me-1"></i>
                                            Delete</a>
                                    </div>
                                    <div class="text-end inactive-style">
                                        <a href="javascript:void(0);" class="text-danger" data-bs-toggle="modal"
                                            data-bs-target="#deleteNotConfirmModal"><i class="feather-eye-off me-1"></i>
                                            Inactive</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Blog Post -->
                    <!-- Blog Post -->
                    <div class="col-md-6 col-xl-4 col-sm-12 d-flex">
                        <div class="blog grid-blog flex-fill">
                            <div class="blog-image">
                                <a href="blog-details.php"><img class="img-fluid" src="assets/img/category/blog-1.jpg"
                                        alt="Post Image"></a>


                            </div>
                            <div class="blog-content">
                                <ul class="entry-meta meta-item">
                                    <li>
                                        <div class="post-author">
                                            <a href="profile.php">
                                                <img src="assets/img/profiles/avatar-12.jpg" alt="Post Author">
                                                <span>
                                                    <span class="post-title">Alex Campbell</span>
                                                    <span class="post-date"><i class="far fa-clock"></i> 4 Dec
                                                        2022</span>
                                                </span>
                                            </a>
                                        </div>
                                    </li>
                                </ul>
                                <h3 class="blog-title"><a href="blog-details.php">
                                        Lorem Ipsum es simplemente</a></h3>
                                <p>Lorem ipsum dolor sit amet, con</p>
                            </div>
                            <div class="row">
                                <div class="edit-options">
                                    <div class="edit-delete-btn">
                                        <a href="edit-blog.php" class="text-success"><i class="feather-edit-3 me-1"></i>
                                            Edit</a>
                                        <a href="#" class="text-danger" data-bs-toggle="modal"
                                            data-bs-target="#deleteModal"><i class="feather-trash-2 me-1"></i>
                                            Delete</a>
                                    </div>
                                    <div class="text-end inactive-style">
                                        <a href="javascript:void(0);" class="text-danger" data-bs-toggle="modal"
                                            data-bs-target="#deleteNotConfirmModal"><i class="feather-eye-off me-1"></i>
                                            Inactive</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Blog Post -->
                </div>


            </div>
        </div>


        <!-- /Main Wrapper -->

        <?php include 'footerAd.php' ?>

</body>