<!DOCTYPE html>
<html dir="ltr" lang="en-US">
	<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="author" content="zytheme" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<meta name="description" content="Real Estate html5 template">
		<link href="assets/images/favicon/favicon.png" rel="icon">
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i%7CPoppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
		<link href="assets/css/external.css" rel="stylesheet">
		<link href="assets/css/bootstrap.min.css" rel="stylesheet">
		<link href="assets/css/style.css" rel="stylesheet">
		<!--[if lt IE 9]>
		<script src="assets/js/html5shiv.js"></script>
		<script src="assets/js/respond.min.js"></script>
		<![endif]-->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	</head>
	<body>
		<div id="wrapper" class="wrapper clearfix">
		
				<?php include 'navbar.php'; ?>	
		
		</div>
		</nav>
	</header>
		<section id="heroSearch" class="hero-search mtop-100 pt-0 pb-0">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12">
					<div class="slider--content">
						<form class="mb-0" method="post" action="funcReports.php" enctype="multipart/form-data">
							<div class="form-box search-properties">
								<div class="row"><br>
									<div class="col-xs-12 col-sm-6 col-md-4">
										<div class="form-group">
											<div class="select--box">
												<input type="text" name="incident" class="form-control" id="select-incident" placeholder="Incident" required>
											</div>
										</div>
									</div>
									<div class="col-xs-12 col-sm-6 col-md-4">
										<div class="form-group">
											<div class="select--box">
												<input type="text" name="incidentplace" class="form-control" id="select-incidentplace" placeholder="Incident Place">
											</div>
										</div>
									</div>
									<div class="col-xs-12 col-sm-6 col-md-4">
										<div class="form-group">
											<div class="select--box">
												<input type="text" name="complainant" class="form-control" id="select-complainant" placeholder=" Complainant" required>
											</div>
										</div>
									</div>
									<div class="col-xs-12 col-sm-6 col-md-4">
										<div class="form-group">
											<div class="select--box">
												<input type="text" name="complainee" class="form-control" id="select-complainee" placeholder=" Complainee" required>
											</div>
										</div>
									</div>
									<div class="col-xs-12 col-sm-6 col-md-4">
										<div class="form-group">
											<div class="select--box">
												<input type="text" name="witness1" class="form-control" id="select-witness1" placeholder="Witness 1">
											</div>
										</div>
									</div>
									<div class="col-xs-12 col-sm-6 col-md-4">
										<div class="form-group">
											<div class="select--box">
												<input type="text" name="witness2" class="form-control" id="select-witness2" placeholder="Witness 2">
											</div>
										</div>
									</div>
									<div class="col-xs-12 col-sm-6 col-md-12">
										<div class="form-group">
											<div class="select--box">
												<input type="text" name="narrative" class="form-control" id="select-narrative" placeholder="Narrative" required>
											</div>
										</div>
									</div>
									<div class="col-xs-12 col-sm-6 col-md-6">
										<div class="form-group">
											<div class="select--box">
												<input type="datetime-local" name="dateandtime" class="form-control" id="select-dateandtime" placeholder="Date and Time" required>
											</div>
										</div>
									</div>
									<div class="col-xs-12 col-sm-6 col-md-6">
										<input type="submit" value="Add to Records" name="submit" class="btn btn--primary btn--block">
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<div class="carousel slider-navs" data-slide="1" data-slide-rs="1" data-autoplay="true" data-nav="true" data-dots="false" data-space="0" data-loop="true" data-speed="800">
			<div class="slide--item bg-overlay bg-overlay-dark3">
				<div class="bg-section">
					<img src="../bg1.jpg" alt="background">
				</div>
			</div>
			<div class="slide--item bg-overlay bg-overlay-dark3">
				<div class="bg-section">
					<img src="../bg2.jpg" alt="background">
				</div>
			</div>
			<div class="slide--item bg-overlay bg-overlay-dark3">
				<div class="bg-section">
					<img src="../bg3.jpg" alt="background">
				</div>
			</div>
		</div>
	</section>
	<section id="properties-carousel" class="properties-carousel pt-90 pb-90">
		<div class="container">
			<div class="row">
				<center><h5>Reports List</h5>
			Search: <input id="myInput" class="form-control" style="display:inline;width: 50%;" type="text" placeholder="Search by ID, Name, Address, Contact Number, and etc."></center><br>
			<?php 

			$email = $_SESSION['email'];
			$logid = $_SESSION['logid'];

			$sql = "SELECT * FROM reports";

                        echo 
                        "
                        <div class='container' style='width:1500px;margin-left:-130px'>
                        <table class='table table-striped'>
                        <thead>
                        <tr style = 'height: 30px;'>
                        <th style = 'width: 180px;'>Report ID</th>
                        <th style = 'width: 250px;'>Incident</th>
                        <th style = 'width: 250px;'>Place</th>
                        <th style = 'width: 150px;'>Complainant</th>
                        <th style = 'width: 150px;'>Complainee</th>
                        <th style = 'width: 150px;'>Witness 1</th>
                        <th style = 'width: 150px;'>Witness 2</th>
                        <th style = 'width: 450px;'>Narrative</th>
                        <th style = 'width: 300px;'>Date and Time</th>
                        <th style = 'width: 450px;'>Status</th>
                        <th style = 'width: 450px;'>Action</th>
                        </tr>";

                        $result = mysqli_query($cn,$sql);
                        
                        while($row = mysqli_fetch_assoc($result))
                        {       
                        	$query = mysqli_query($cn, "SELECT * FROM reports");
                        	$disp = mysqli_fetch_assoc($query);

                                echo"<tbody id='myTable'>";
                                echo "<tr>";
                                
                                echo "<td>" . $row['reportid'] . " </td> ";
                                echo "<td>" . $row['incident'] . " </td> ";
                                echo "<td>" . $row['incidentplace'] . " </td> ";
                                echo "<td>" . $row['complainant'] . " </td> ";
                                echo "<td>" . $row['complainee'] . " </td> ";
                                echo "<td>" . $row['witness1'] . " </td> ";
                                echo "<td>" . $row['witness2'] . " </td> ";
                                echo "<td>" . $row['narrative'] . " </td> ";
                                echo "<td>" . $row['dateandtime'] . "  </td> ";

                                if ($row['status'] == "0")
                                {
                                	$stat = "Active";
                                }
                                else {
                                	$stat = "Archived";
                                }

                                echo "<td>" . $stat . "</td> ";

                                echo "<td><a class='btn btn-success' style='width:49%;border:1px solid black;color:black' href='viewReports.php?id=" . $row['reportid'] . "'>Edit</a> ";

                                if ($row['status'] == "0")
                                {
                                	echo "<a class='btn btn-warning' style='width:49%;border:1px solid black;color:black' href='archiveReports.php?id=" . $row['reportid'] . "'>Archive</a></td> ";
                                }
                                else {
                                	echo "<a class='btn btn-warning' style='width:49%;border:1px solid black;color:black' href='activateReports.php?id=" . $row['reportid'] . "'>Restore</a></td> ";
                                }

                	}
                	echo '</table><br>';
                	?>
			</div>
		</div>
	</section>
	<script>
		$(document).ready(function(){
		  $("#myInput").on("keyup", function() {
		    var value = $(this).val().toLowerCase();
		    $("#myTable tr").filter(function() {
		      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
		    });
		  });
		});
	</script>
<script data-cfasync="false" src="../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="assets/js/jquery-2.2.4.min.js"></script>
<script src="assets/js/plugins.js"></script>
<script src="assets/js/functions.js"></script>
<script src="assets/loadGeo.js"></script>



<script>
	var myArray = []
	

	$.ajax({
		method:'GET',
		url:'homerentalsystem/user/assets/geo_api.json',
		// url:'https://reqres.in/api/users',
		success:function(response){
			myArray = response.data
			// buildTable(myArray)
			console.log(myArray)
		}
	})



	function buildTable(data){
		var dropdown = document.getElementById('select-location')

		for (var i = 0; i < data.length; i++){
			var row = `	<option>${data[i].province_list}</option> `
			table.innerHTML += row


		}
	}

</script>


</body>
<!-- index Sun, 18 Jul 2021 09:33:18 GMT -->
</html>