<?php 
include '../config/functions.php';
include 'head.php';
	include 'sidebar.php';
	include 'header.php';
    
if (!isset($_SESSION["user"])) {
	header("Location:login.php");
}

// add thn chaf pex and the title
$faq_title = $_POST['faq_title'];
$faq_img = @$_FILES['faq_img']["name"];

if (isset($_POST['add-faq'])) {
    $dist = '../images/' . "$faq_img";
    if (!empty($faq_title)) {
        if (move_uploaded_file($_FILES['faq_img']['tmp_name'], $dist)) {
            $data = [
                "title" => $faq_title,

                "img" => $faq_img,

            ];
            add('faq_top', $data);
            header('location:faq.php?msg=added successfully');
        } else {
            $data = [

                'title' => $faq_title,

            ];
            add('faq_top', $data);
            header('location:faq.php?msg=added successfully');
        }
    }
}
// add the questions 
if (isset($_POST['add-questions'])) {
    $faq_question = $_POST['faq_question'];
    $faq_answer = $_POST['faq_answer'];

    if (!empty($faq_question) && !empty($faq_answer)) {
        $data = [
            "question" => $faq_question,
            "answer" => $faq_answer,
        ];
        add('question_answer', $data);
        header('location:faq.php?msg=added successfully');
    } else {
        header('location:faq.php?msg=question and answer are required');
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
                                        <h3 class="page-title">add Titel and img</h3>
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
                                                    <input type="text" class="form-control"  name="faq_title" >
                                                </div>
                                            </div>

                                            
											
                                            <div class="col-lg-12 col-md-12">
                                                <div class="form-group">
                                                    <label>Blog Image</label>
                                                    <div class="change-photo-btn">
                                                        <div>
                                                        <p>Add Image</p></div>
                                                        <input type="file" class="upload" name="faq_img" >
                                                    </div>
                                                    <img class="img-fluid" src=""
                                                        style="width:100%;object-fit:cover;height: 300px;">
                                                </div>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class=" blog-categories-btn pt-0">
                                    <div class="bank-details-btn ">
                                        <button name="add-faq" class="btn btn-primary me-2">Add Post</button>
                                    </div>
                                </div>
                            </div> 
                            </form>              

                            <div class="row">
                        <div class="col-xl-12 ">
                        
                            <!-- Page Header -->
                            <div class="page-header">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <h3 class="page-title">Add questions</h3>
                                    </div>
                                </div>
                            </div>
                            <!-- /Page Header -->
                            <form method="post">
                            <div class="card">
                                <div class="card-body">
                                    <div class="bank-inner-details">
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12">
                                                <div class="form-group">
                                                    <label>The questions<span class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" name="faq_question" >
                                                </div>
                                            </div>
                                            <div class="col-lg-12 col-md-12">
                                                <div class="form-group">
                                                    <label>The answer</label>
                                                    <textarea id="editor" name="faq_answer" ></textarea>
                                                </div>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class=" faq-categories-btn pt-0">
                                    <div class="bank-details-btn ">
                                        <button class="btn btn-primary me-2 nam" name="add-questions" >Add a questions</button>
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
		
<?php 
include 'footerAd.php';
?>


	</body>