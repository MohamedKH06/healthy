<?php 
include '../config/functions.php';
include 'head.php';
include 'sidebar.php'; 
include 'header.php';
if (!isset($_SESSION["user"])) {
	header("Location:login.php");
}
$id= @$_GET['id'];
$blog=selectOne("blog", @$_GET['id']);

$blog_title = @$_POST['blog_title'];
$blog_img = @$_FILES['blog_img']["name"];
$blog_ds = @$_POST['blog_ds'];
$blog_date = @$_POST['blog_date'];


if (isset($_POST['edit_blog'])) {
    $dist = '../images/' . "$blog_img";
    if (move_uploaded_file($_FILES['blog_img']['tmp_name'], $dist)) {
        $data = [
            "title" => $blog_title,
            "date" => $blog_date,
            "img" => $blog_img,
            "descriptions" => $blog_ds,
        ];
        update('blog', $data, $_GET['id']);
        header("location:edit-blog.php?id=$id");
    } else {
        $data = [
            "date" => $blog_date,
            'title' => $blog_title,
            'descriptions' => $blog_ds,
        ];
        update('blog', $data, $_GET['id']);
        header("location:edit-blog.php?id=$id");
    }
}
?>
	<body class="nk-body bg-lighter npc-default has-sidebar no-touch nk-nio-theme">
	
		<!-- Main Wrapper -->
		<div class="main-wrapper">
		

			<!-- Page Wrapper -->
			<div class="page-wrapper">
				<div class="content container-fluid">
                    <div class="row">
                        <div class="col-xl-8 offset-xl-2">
                        
                            <!-- Page Header -->
                            <div class="page-header">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <h3 class="page-title">Edit Post</h3>
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
                                                    <input type="text" class="form-control" name="blog_title" value="<?php echo $blog['title'] ?>" >
                                                    
                                                </div>
                                            </div>
											<div class="col-lg-12 col-md-12">
                                            <div class="form-group">
                                                    <label>date<span class="text-danger">*</span></label>
                                                    <input type="date" class="form-control" value="<?php echo $blog['date'] ?>" name="blog_date">
                                                </div>
											</div>
											
                                            <div class="col-lg-12 col-md-12">
                                                <div class="form-group">
                                                    <label>Blog Image</label>
                                                    <div class="change-photo-btn">
                                                        <div>
                                                        <p>Add Image</p></div>
                                                        <input type="file" class="upload">
                                                    </div>
                                                    <img class="img-fluid" src="../images/<?php echo $blog['img'] ?>"
                                                        style="width:100%;object-fit:cover;height: 300px;">
                                                </div>
                                            </div>
                                            <div class="col-lg-12 col-md-12">
                                                <div class="form-group">
                                                    <label>Description</label>
                                                    <textarea id="editor" name="blog_ds">
                                                    <?php echo $blog['descriptions'] ?>

                                                    </textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=" blog-categories-btn pt-0">
                                    <div class="bank-details-btn ">
                                        <button class="btn btn-primary me-2" name="edit_blog" >Edit Post</button>
                                    </div>
                                </div>
                            </div> 
                            </form>
                        </div>
                    </div>
                </div>
			</div>
			<!-- /Page Wrapper -->

		</div>
		<!-- /Main Wrapper -->
		<?php include 'footerAd.php' ?>
	</body>
