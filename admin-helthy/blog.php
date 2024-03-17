
    <?php
    include '../config/functions.php';
    include 'head.php';
    include 'sidebar.php';
    include 'header.php';
    if (!isset($_SESSION["user"])) {
        header("Location:login.php");
    }

        if($_GET["delete"]){
            Delete('blog',$_GET["delete"] );
            header("location:blog.php");
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
                            <a href="add-blog.php" class="btn btn-primary btn-blog mb-3" ><i class="feather-plus-circle me-1"></i> Add New</a>
                        </div>
                    </div>
                    
                    <div class="row">
                        
                    <?php  
                    $blogs=selectAll("blog");
                    foreach($blogs as $blog):

                    ?>
                        <!-- Blog Post -->
                        <div class="col-md-6 col-xl-4 col-sm-12 d-flex">
                            <div class="blog grid-blog flex-fill">
                                <div class="blog-image">
                                    <a href="blog-details.php">
                                        <img class="img-fluid" src="../images/<?php echo $blog['img'] ?>" alt="Post Image" style="width: 400px; height: 300px; object-fit:cover; " ></a>
                                </div>
                                <div class="blog-content">
                                    
                                    <h3 class="blog-title"><a href="blog-details.php">
                                    <?php echo $blog['title'] ?>.</a></h3>
                                    <p><?php echo $blog['descriptions'] ?></p>
                                </div>
                                <div class="row">
                                    <div class="edit-options">
                                        <div class= "edit-delete-btn">
                                            <a href="edit-blog.php?id=<?php echo $blog['id'] ?>" class="text-success"  ><i class="feather-edit-3 me-1"></i> Edit</a>
                                            <a href="blog.php?delete=<?php echo $blog['id'] ?>" class="text-danger" data-bs-toggle="modal" data-bs-target="#deleteModal"><i class="feather-trash-2 me-1"></i> Delete</a>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>										
                        </div>
                        <!-- /Blog Post -->
                        <?php endforeach;?>
                    </div>
                    <!-- Pagination -->
                        <div class="row ">
                            <div class="col-md-12">
                                <div class="pagination-tab  d-flex justify-content-center">
                                    <ul class="pagination mb-0">
                                        <li class="page-item disabled">
                                            <a class="page-link" href="#" tabindex="-1"><i class="feather-chevron-left mr-2"></i>Previous</a>
                                        </li>
                                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item ">
                                            <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item"><a class="page-link" href="#">4</a></li>
                                        <li class="page-item">
                                            <a class="page-link" href="#">Next<i class="feather-chevron-right ml-2"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- /Pagination -->
                        <!-- Modal -->
            <div class="modal fade contentmodal" id="deleteModal" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content doctor-profile">
                        <div class="modal-header pb-0 border-bottom-0  justify-content-end">
                            <button type="button" class="close-btn" data-bs-dismiss="modal" aria-label="Close"><i class="feather-x-circle"></i></button>
                        </div>
                        <div class="modal-body">
                            <div class="delete-wrap text-center">
                                <div class="del-icon"><i class="feather-x-circle"></i></div>
                                <h2>Sure you want to delete</h2>
                                <div class="submit-section">
                                    <a href="blog.php?delete=<?php echo $blog['id'] ?>" class="btn btn-success me-2">Yes</a>
                                    <a href="#" class="btn btn-danger" data-bs-dismiss="modal">No</a>
                                </div>								
                            </div>
                        </div>
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
