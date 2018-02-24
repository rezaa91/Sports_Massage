<?php
$active_tab='active';
$jquery = "../includes/jquery-3.1.1.min.js";
$stylesheet1 = "../index.css";
$stylesheet2 = "../includes/services.css";
$js_file = "../includes/services.js";
include('../includes/header.html');
?>


	


	



	<!--pt carousel-->
	<div id="carousel-wrapper">
		<div class="carousel slide" data-ride="carousel" id="pt_carousel">
			<div class="carousel-indicators">
				<li class="active" data-slide-to="0" data-target="#pt_carousel"></li>
				<li data-slide-to="1" data-target="#pt_carousel"></li>
				<li data-slide-to="2" data-target="#pt_carousel"></li>
			</div><!--end carousel indicator-->
			
			<div class="carousel-inner">
				<div class="item active">
					<img src="../Official pics/IMG_1041-7.jpg" style="width:100%; height:100vh">
					<div class="carousel-caption">
						<h1>PERSONAL TRAINING.</h1>
						<h3>GET FIT.</h3>
					</div>
				</div>

				<div class="item">
					<img src="../Official pics/IMG_1026-2.jpg" style="width:100%; height:100vh">
					<div class="carousel-caption">
						<h1>PERSONAL TRAINING.</h1>
						<h3>GET RIPPED.</h3>
					</div>
				</div>

				<div class="item">
					<img src="../Official pics/IMG_1055-11.jpg" style="width:100%; height:100vh">
					<div class="carousel-caption">
						<h1>PERSONAL TRAINING.</h1>
						<h3>GET ACTIVE.</h3>
					</div>
				</div>
			</div><!--end carousel-inner-->
			<!--carousel controls-->
			<a href="#pt_carousel" class="left carousel-control" data-slide="prev">
				<span class="glyphicon glyphicon-chevron-left"></span>
			</a>

			<a href="#pt_carousel" class="right carousel-control" data-slide="next">
				<span class="glyphicon glyphicon-chevron-right"></span>
			</a><!--end of carousel controls-->

		</div><!--end of carousel-->
	</div>






	<!--benefits-->
	<div class="container">
		<div class="page-header">
			<h2>What's included? <small>Personal Training packages tailored to you.</small></h2>
		</div>

		<div class="row">
			<div class="col-md-8">
				<h4><span class="glyphicon glyphicon-pencil"></span> Personalised Programme.</h4>
				<p>Our programmes are designed and written specially for you! There is no ‘off the shelf’ or one size fits all. The programmes are personalised to enable you to achieve your goals and continue to set new targets.</p>
			</div><!--end of text-->
			<div class="col-md-4">
				<img src="../Official pics/IMG_1023-1.jpg" class="img-rounded img-responsive"><br />
			</div><!--end of pic 1-->

			

			<div class="col-md-8">
				<h4><span class="glyphicon glyphicon-plus"></span> Strength Testing.</h4>
				<p>At the start of our programmes we will conduct a series of tests depending on your goals. These are specific towards your needs and may be strength, power, body composition etc.</p>
			</div><!--end of text-->
			<div class="col-md-4">
				<img src="../Official pics/IMG_1033-5.jpg" class="img-rounded img-responsive"><br />
			</div><!--end of pic 3-->

			<div class="col-md-8">
				<h4><span class="glyphicon glyphicon-check"></span> One 2 One Personal Training. <small>*Gold package only*</small></h4>
				<p>Exclusive for our ‘Gold Standard’ package is one to one personal training. The information, delivery and encouragement will be invaluable in reaching your goals.</p>
			</div><!--end of text-->
			<div class="col-md-4">
				<img src="../Official pics/IMG_1044-8.jpg" class="img-rounded img-responsive"><br />
			</div><!--end of pic 4-->

			<div class="col-md-8">
				<h4><span class="glyphicon glyphicon-cutlery"></span> Nutritional Tracking.<small> *Gold package only*</small></h4>
				<p>Another benefit to the gold package is nutritional tracking. Here you will develop your knowledge on what to eat and just how much you should be eating. You will learn the importance of certain food groups and when is best to have them throughout the day. </p>
			</div><!--end of text-->
			<div class="col-md-4">
				<img src="../Official pics/IMG_1047-10.jpg" class="img-rounded img-responsive"><br />
			</div><!--end of pic 5-->

		</div><!--end of row-->
		<hr />
	</div><!--end of benefits-->








	<!--packages-->
	<div class="container">
		<div class="page-header">
			<h2>Packages. <small>Relax with one of our popular packages.</small></h2>
		</div>

		<div class="row">

			<div class="col-md-6">
				<div class="panel panel-default">
					<div class="panel-heading">
						<div class="panel-title text-center">
							<span class="glyphicon glyphicon-star"></span><span class="glyphicon glyphicon-star"></span><span class="glyphicon glyphicon-star"></span>
							<h3>PERSONAL TRAINING<br /><small>GOLD</small></h3>
						</div>
					</div><!--end panel heading-->
					<div class="panel-body">
						<ul>
							<li>6 and 12 week programmes available</li>
							<li>Movement pattern consultation</li>
							<li>Strength testing</li>
                            <li>1 PT session per week</li>
                            <li>Nutrition tracking</li>
						</ul>
					</div><!--end panel body-->
					<div class="panel-footer text-center">
						<h4>FROM £399</h4>
					</div><!--end panel footer-->
				</div><!--end panel 1-->
			</div>


			<div class="col-md-6">
				<div class="panel panel-default">
					<div class="panel-heading">
						<div class="panel-title text-center">
							<span class="glyphicon glyphicon-star"></span><span class="glyphicon glyphicon-star"></span>
							<h3>PERSONAL TRAINING<br /><small>SILVER</small></h3>
						</div>
					</div><!--end panel heading-->
					<div class="panel-body">
						<ul>
							<li>6 and 12 week programmes available</li>
							<li>Movement pattern consultation</li>
							<li>Strength testing</li>
                            <li>-</li>
                            <li>-</li>
						</ul>
					</div><!--end panel body-->
					<div class="panel-footer text-center">
						<h4>FROM £199</h4>
					</div><!--end panel footer-->
				</div><!--end panel 2-->
			</div>

		</div><!--end of row-->
		<p>Be sure to check out our <a href="http://localhost/benson/sports_massage/">Sports Massage</a> packages too.</p>
		<hr /><br />
	</div><!--end of packages-->



	<!--back to top btn-->
	<div class="container" style="margin-bottom:25px">
		<a href="#">Back to top.</a>
	</div><!--back to top btn-->




<?php
include('../includes/footer.html');
?>