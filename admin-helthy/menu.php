<?php include 'head.php';
include 'sidebar.php';
include 'header.php'
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
                            <li class="active"><a href="blog.php">Active menu</a></li>
                            <li><a href="pending-blog.php">Pending menu</a></li>
                        </ul>
                    </div>
                    <div class="col-md-3 text-md-end">
                        <a href="add-blog.php" class="btn btn-primary btn-blog mb-3"><i
                                class="feather-plus-circle me-1"></i> Add New</a>
                    </div>
                </div>

                <!--  Breakfast -->
                <div class="row">

                    <div class="col-md-6 col-xl-4 col-sm-12 d-flex">
                        <div class="blog grid-blog flex-fill">
                            <h1> Breakfast</h1>
                            
                            <div class="blog-content">

                                <h3 class="blog-title"><a href="blog-details.php">
                                        NAME</a></h3>

                                <h5>prix <span>$</span></h5>
                                <p>Description
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati id temporibus ut magni nobis praesentium nostrum, facere aut aliquam itaque totam mollitia, provident esse eaque sit nihil sed, nesciunt ea.
                                </p>
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
                <!--  Breakfast -->

                <!--  Lunch -->
                <div class="row">

                    <div class="col-md-6 col-xl-4 col-sm-12 d-flex">
                        <div class="blog grid-blog flex-fill">
                            <h1> Lunch</h1>
                            
                            <div class="blog-content">

                                <h3 class="blog-title"><a href="blog-details.php">
                                        NAME</a></h3>

                                <h5>prix <span>$</span></h5>
                                <p>Description
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati id temporibus ut magni nobis praesentium nostrum, facere aut aliquam itaque totam mollitia, provident esse eaque sit nihil sed, nesciunt ea.
                                </p>
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
                <!--  Lunch -->


                <!--  Dinner -->
                <div class="row">

                    <div class="col-md-6 col-xl-4 col-sm-12 d-flex">
                        <div class="blog grid-blog flex-fill">
                            <h1> Dinner</h1>
                            
                            <div class="blog-content">

                                <h3 class="blog-title"><a href="blog-details.php">
                                        NAME</a></h3>

                                <h5>prix <span>$</span></h5>
                                <p>Description
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati id temporibus ut magni nobis praesentium nostrum, facere aut aliquam itaque totam mollitia, provident esse eaque sit nihil sed, nesciunt ea.
                                </p>
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
                <!--  Dinner -->


                

            


            </div>
        </div>


        <!-- /Main Wrapper -->

        <?php include 'footerAd.php' ?>

</body>