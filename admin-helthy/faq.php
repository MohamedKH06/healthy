<?php
include '../config/functions.php';
include 'head.php';
include 'sidebar.php';
include 'header.php';
if (!isset($_SESSION["user"])) {
    header("Location:login.php");
}

if (@$_GET["delete"]) {
    Delete('faq_top', $_GET["delete"]);
    header("location:faq.php");
}

if (@$_GET["delete"]) {
    Delete('question_answer', $_GET["delete"]);
    header("location:faq.php");
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
                            <li class="active"><a href="blog.php">Active menu</a></li>
                            <li><a href="pending-blog.php">Pending menu</a></li>
                        </ul>
                    </div>
                    <div class="col-md-3 text-md-end">
                        <a href="add-blog.php" class="btn btn-primary btn-blog mb-3"><i
                                class="feather-plus-circle me-1"></i> Add New</a>
                    </div>
                </div>

                <!--  faq -->

                <div class="row">
                    <?php
                    $faqT = selectAll("faq_top");
                    foreach ($faqT as $faqT):

                        ?>
                        <div class="col-md-6 col-xl-4 col-sm-12 d-flex">
                            <div class="blog grid-blog flex-fill">
                                <div class="blog-content">
                                    <p class="blog-title"><a href="blog-details.php">
                                            <?php echo $faqT['title'] ?>
                                        </a></p>
                                    <div class="blog-image">
                                        <a href="blog-details.php"><img class="img-fluid"
                                                src="../images/<?php echo $faqT['img'] ?>" alt="Post Image"
                                                style="width: 100%; height: 450px; object-fit: cover; "></a>
                                    </div>
                                    <div class="edit-options">
                                        <div class="edit-delete-btn">
                                            <a href="edit-faq.php?id=<?php echo $faqT['id'] ?>" class="text-success"><i
                                                    class="feather-edit-3 me-1"></i>
                                                Edit</a>
                                            <a href="faq.php?delete=<?php echo $faqT['id'] ?>" class="text-danger"
                                                data-bs-toggle="modal" data-bs-target="#deleteModal"><i
                                                    class="feather-trash-2 me-1"></i>
                                                Delete</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach ?>
                </div>


                <div class="row">
                    <?php
                    $faqs = selectAll("question_answer");
                    foreach ($faqs as $faq):

                        ?>
                        <div class="col-md-6 col-xl-4 col-sm-12 d-flex">
                            <div class="blog grid-blog flex-fill">
                                <div class="blog-content">
                                    <p class="blog-title"><a href="blog-details.php">
                                            <?php echo $faq['question'] ?>
                                        </a></p>
                                    <p>
                                        <?php echo $faq['answer'] ?>
                                    </p>
                                    <div class="edit-options">
                                        <div class="edit-delete-btn">
                                            <a href="edit-faq.php?id=<?php echo $faq['id'] ?>" class="text-success"><i
                                                    class="feather-edit-3 me-1"></i>
                                                Edit</a>
                                            <a href="faq.php?delete=<?php echo $faq['id'] ?>" class="text-danger"
                                                data-bs-toggle="modal" data-bs-target="#deleteModal1"><i
                                                    class="feather-trash-2 me-1"></i>
                                                Delete</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    <?php endforeach ?>
                </div>
                <!--  faq -->

                <!-- Modal top -->
                <div class="modal fade contentmodal" id="deleteModal" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content doctor-profile">
                            <div class="modal-header pb-0 border-bottom-0  justify-content-end">
                                <button type="button" class="close-btn" data-bs-dismiss="modal" aria-label="Close"><i
                                        class="feather-x-circle"></i></button>
                            </div>
                            <div class="modal-body">
                                <div class="delete-wrap text-center">
                                    <div class="del-icon"><i class="feather-x-circle"></i></div>
                                    <h2>Sure you want to delete</h2>
                                    <div class="submit-section">
                                        <a href="faq.php?delete=<?php echo $faqT['id'] ?>"
                                            class="btn btn-success me-2">Yes</a>
                                        <a href="#" class="btn btn-danger" data-bs-dismiss="modal">No</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Modal faq -->
                <div class="modal fade contentmodal" id="deleteModal1" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content doctor-profile">
                            <div class="modal-header pb-0 border-bottom-0  justify-content-end">
                                <button type="button" class="close-btn" data-bs-dismiss="modal" aria-label="Close"><i
                                        class="feather-x-circle"></i></button>
                            </div>
                            <div class="modal-body">
                                <div class="delete-wrap text-center">
                                    <div class="del-icon"><i class="feather-x-circle"></i></div>
                                    <h2>Sure you want to delete</h2>
                                    <div class="submit-section">
                                        <a href="faq.php?delete=<?php echo $faq['id'] ?>"
                                            class="btn btn-success me-2">Yes</a>
                                        <a href="#" class="btn btn-danger" data-bs-dismiss="modal">No</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>







            </div>
        </div>


        <!-- /Main Wrapper -->

        <?php include 'footerAd.php' ?>

</body>