<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!-- Meta -->
		<meta name="description" content="Responsive Bootstrap4 Dashboard Template">
		<meta name="author" content="ParkerThemes">
		<link rel="shortcut icon" href="img/fav.png" />

		<!-- Title -->
		<title>Rasi Admin Template</title>

		<!-- *************
			************ Common Css Files *************
		************ -->
		<!-- Bootstrap css -->
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<!-- Icomoon Font Icons css -->
		<link rel="stylesheet" href="fonts/style.css">
		<!-- Main css -->
		<link rel="stylesheet" href="css/main.css">

		<!-- ************************* Vendor Css Files *************-->
		<link rel="stylesheet" href="vendor/customcss/customstyle.css" />

	</head>

	<body>




		<!-- Form Start -->

<div class="container">
<div class="card">
	<div class="card-header">
		Customer Bulk Upload
	</div>
<form action="" method="post" enctype="multipart/form-data">
<div class="card-body">

<div class="row">
<div class="col-xl-3 col-lg-3 col-md-4 col-sm-4 col-12">
</div>
<div class="col-xl-6 col-lg-6 col-md-4 col-sm-4 col-12">
<div class="form-group">
<div id="insertsuccess"></div>
<label class="label">Select Excel</label>
<input type="file" name="customerbulk" id="customerbulk" class="form-control">
</div>
</div> 
</div>
<div class="col-xl-3 col-lg-3 col-md-4 col-sm-4 col-12">
</div>
</div>


<div class="row">
<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
</div>
<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
<button type="submit" name="submitcustomerbulkbtn" id="submitcustomerbulkbtn" class="btn btn-success  form-control"><i class="fas fa-upload"></i>&nbsp Upload</button>
</div>
<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
</div>
</div>
<br />			    
</form>
</div>
</div>

		<!-- Required jQuery first, then Bootstrap Bundle JS -->
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.bundle.min.js"></script>
		<script src="js/moment.js"></script>
		<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

		<!-- Main JS -->
		<script src="js/main.js"></script>
		<script src="js/taxmaster.js"></script>

		<!-- Slimscroll JS -->
		<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

		<script type="text/javascript">
		$(document).on("click", "#submitcustomerbulkbtn", function () {
		// alert("I came here");
		var customerexcel=$("#customerbulk").val();
			$.ajax({
            url: 'ajaxcustomerbulkupload.php',
            type: 'POST',
            enctype: 'multipart/form-data',
            data: {"customerexcel":customerexcel},
            cache: false,
            success:function(response){
            	$("#insertsuccess").html(response);
            }
            });
		});

		</script>
	</body>