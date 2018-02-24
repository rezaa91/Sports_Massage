<?php

$jquery = "includes/jquery-3.1.1.min.js";
$stylesheet1 = "index.css";
$js_file = 'index.js';
include('includes/header.html');

?>



<!--main header-->

	<div id="main_header">
		<div class="container-fluid">
			<div id="header_text" class="text-center">
				<h1>CALLUM BENSON</h1>
				<h3>SPORTS MASSAGE &amp; PERSONAL TRAINING</h3>

				<!--inline buttons-->
				<div class="row">
					<div class="col-xs-12">
						<div class="container text-center" id="main_header_btn">
							<div class="btn-group btn-inline">
								<a href="http://localhost/benson/sports_massage/" class="btn btn-info">SPORTS MASSAGE</a>
								<a href="http://localhost/benson/personal_training/" class="btn btn-primary">PERSONAL TRAINING</a>
							</div>
						</div>
					</div>
				</div><!--end of inline buttons-->

			</div>
		</div>
	</div><!--end of main header-->





	<!--about me section-->
	<div class="container">
		<div class="page-header">
			<h2>Who Am I?<small> All about me.</small></h2>
		</div>
		<div class="row">
			<div class="col-sm-4">
				<img src="Official Pics/callum_profile.jpg" class="img-responsive img-rounded" id="profile_pic"><br />
			</div><!--end of pic-->
			<div class="col-sm-8">
				<h4>Callum Benson.</h4>
				<p>My name is Callum Benson and I have been in the fitness industry since 2010. I joined the RAF as a Physical Training Instructor where I quickly became very interested in Strength and Conditioning (S+C), and Injuries - treatment and prevention. I have completed numerous qualifications in S+C and I am currently working towards a UKSCA accreditation whilst studying BSc (Hons) in Sport and Exercise Science. I completed a qualification in Sports Massage in 2014 and completed an Exercise Rehabilitation Instructor course at DMRC Headley Court. I have gained lots of experience working with numerous multi disciplinary teams and sports teams at various places in the UK and Europe. </p>
				<p>During a consultation I will assess a patient’s movement pattern and address any abnormalities though massage with the prescription of exercises for the patient take away to supplement their recovery.</p>
			</div><!--end of text-->
			
		</div><!--end of row-->
		<hr />
	</div><!--end of about section-->







	



	<!--services section-->
	<div class="container">
		<div class="page-header">
			<h2>Services. <small>What do we offer?</small></h2>
		</div>

		<div class="row">
			<div class="col-md-5">
				<div class="panel panel-default">
					<div class="panel-heading">
						<div class="panel-title text-center">
							<h4>SPORTS MASSAGE</h4>
						</div>
					</div><!--end of panel heading-->
					<div class="panel-body">
						<p>Find out about our sports massage packages by clicking the link below.</p>
						<p>Sports massage has various benefits listed below:</p>
						<ul class="text-center">
							<li>Increased circulation</li>
							<li>Reduced onset of muscle soreness</li>
							<li>Relaxation</li>
						</ul>
						<img src="Official pics/massage_home.jpg" class="img-responsive img-rounded">
					</div><!--end of panel body-->
					<div class="panel-footer text-center">
						<a href="http://localhost/benson/sports_massage/" class="block">Find out more</a>
					</div><!--end of panel footer-->
				</div>
			</div><!--end of sport massage-->
			<div class="col-md-5 col-md-offset-2">
				<div class="panel panel-default">
					<div class="panel-heading">
						<div class="panel-title text-center">
							<h4>PERSONAL TRAINING</h4>
						</div>
					</div><!--end of panel heading-->
					<div class="panel-body">
						<p>Find out about our personal training packages by clicking the link below.</p>
						<p>What is included in our personal training packages:</p>
						<ul class="text-center">
							<li>Personalised programme</li>
							<li>Nutritional tracking*</li>
							<li>And more...</li>
						</ul>
						<img src="Official pics/IMG_1041-7.jpg" class="img-responsive img-rounded">
					</div><!--end of panel body-->
					<div class="panel-footer text-center">
						<a href="http://localhost/benson/personal_training/" class="block">Find out more</a>
					</div><!--end of panel footer-->
				</div>
			</div><!--end of personal trg-->
		</div>
		<hr />
	</div><!--end of services-->




	<!--how to book-->
	<div class="container">
		<div class="page-header">
			<h2>How to Book?<small> Follow the simple steps below...</small></h2>
		</div>

		<div class="row">

			<div class="col-md-4">
				<div class="panel panel-default">
					<div class="panel-heading">
						<div class="panel-title">
							<h3 class="text-center"><strong>1.</strong></h3>
						</div>
					</div>
					<div class="panel-body text-center">
						<h4>Click the button below:</h4>
						<a href="http://localhost/benson/contact/" class="btn btn-block btn-primary">BOOK NOW!</a>
					</div>
				</div>
			</div><!--end of panel 1-->

			<div class="col-md-4">
				<div class="panel panel-default">
					<div class="panel-heading">
						<div class="panel-title">
							<h3 class="text-center"><strong>2.</strong></h3>
						</div>
					</div>
					<div class="panel-body text-center">
						<h4>Await a confirmation via SMS and/or email</h4><br />
					</div>
				</div>
			</div><!--end of panel 2-->

			<div class="col-md-4">
				<div class="panel panel-default">
					<div class="panel-heading">
						<div class="panel-title">
							<h3 class="text-center"><strong>3.</strong></h3>
						</div>
					</div>
					<div class="panel-body text-center">
						<h4>Arrive at the clinic at your agreed appointment time</h4><br />
					</div>
				</div>
			</div><!--end of panel 3-->
		</div>
		<hr />
	</div><!--end of how to book-->



	<!--FAQS-->
	<div class="container">
		<div class="page-header">
			<h2>FAQs<small> Common questions, answered.</small></h2>
		</div>
		<div class="panel-group" id="accordion">
			<div class="panel panel-default">

				<div class="panel-heading">
					<div class="panel-title">
						<a href="#collapse-1" class="btn-block block" data-toggle="collapse" data-parent="accordion">What should I wear?</a>
					</div>
				</div>
				<div class="collapse panel-collapse" id="collapse-1">
					<div class="panel-body">
                        <p>Sports Massage – T-shirt and shorts is preferred. Changing facilities are available.</p> 

                        <p>Personal Training – Gym clothing and appropriate footwear. I can help advise on footwear and recommended retailers that will offer exclusive discount.</p>
					</div>
				</div><!--end of Q1-->


				<div class="panel-heading">
					<div class="panel-title">
						<a href="#collapse-2" class="btn-block block" data-toggle="collapse" data-parent="accordion">What should I expect?</a>
					</div>
				</div>
				<div class="collapse panel-collapse" id="collapse-2">
					<div class="panel-body">
						<p>Sports Massage – Initially you will be asked questions to learn about the reason for your visit. A visual and movement examination will then be carried out followed by some specific tests if required. Once the areas that require improvement have been established, the hands on treatment will take place. Advice will be given with regards to rehabilitation exercise at the end of the session if required.</p>

                        <p>Personal Training – Initial questionnaire to establish client’s goals and previous medical and training history. A movement examination will be conducted to determine areas for improvement and injury prevention. A specific warm up will take place followed by some testing if required. The main session will then start which might be a mixture of weighted exercises and conditioning, all specific towards the client’s needs and goals. The session will conclude following a cool down.</p>
					</div>
				</div><!--end of Q2-->


				<div class="panel-heading">
					<div class="panel-title">
						<a href="#collapse-3" class="btn-block block" data-toggle="collapse" data-parent="accordion">What are the benefits of Sports Massage?</a>
					</div>
				</div>
				<div class="collapse panel-collapse" id="collapse-3">
					<div class="panel-body">
						<p>The benefits of sports massage include; reduced onset of muscle soreness (post activity), increased circulation, relaxation of tight muscle groups, minimise fascial adhesions between muscle fibres, assists in cool down (post activity) and removes any waste metabolic products. This can be invaluable in the prevention and recovery of injuries along with helping you achieve your optimal performance.</p>
					</div>
				</div><!--end of Q3-->



				<div class="panel-heading">
					<div class="panel-title">
						<a href="#collapse-4" class="btn-block block" data-toggle="collapse" data-parent="accordion">Is Sports Massage painful?</a>
					</div>
				</div>
				<div class="collapse panel-collapse" id="collapse-4">
					<div class="panel-body">
						<p>Sports massage can be uncomfortable depending on how tense your muscles are. Discomfort felt during and after a sports massage is completely normal, but this discomfort should never cause you so much pain it is unbearable.</p> 
                        <p>Muscles are designed to stretch and contract constantly throughout the day. If a muscle spends a long time in a constant shorted position (seated in the same position all day) or is constantly contracted (at the gym) it will cause the muscle to become tight, reducing blood flow to the area. The muscle will then become harder to stretch and manipulate under the therapists hands (or elbow!). The more relaxed you are going into a massage the less discomfort you will feel. Regular stretching and foam rolling will help loosen your muscles and you will have a much more comfortable experience.</p>
					</div>
				</div><!--end of Q4-->

				<div class="panel-heading">
					<div class="panel-title">
						<a href="#collapse-5" class="btn-block block" data-toggle="collapse" data-parent="accordion">What are the contra-indications of Sports Massage?</a>
					</div>
				</div>
				<div class="collapse panel-collapse" id="collapse-5">
					<div class="panel-body">
                        <p>Contra-indications are where a massage should not be performed. Treatment can sometimes be more detrimental than beneficial, and in some cases can cause serious medial issues.</p> 

                        <p>Here is a basic list of massage contra-indications, for further information please contact us. If in doubt always seek medical advice from your doctor.</p>
                        
                        <ul style='list-style:circle; padding-left:20px;'>
                            <li>Open wounds</li>
                            <li>Muscle of tendon ruptures within the acute stage (First 48-72 hours)</li>
                            <li>Burns, Chilblains or broken bones</li>
                            <li>Periostitis – inflammation of the sheath surrounding the bone</li>
                            <li>Bursitis</li>
                            <li>Rheumatoid arthritis or gout</li>
                            <li>Infections to skin</li>
                            <li>Bleeding disorders</li>
                            <li>Tumors</li>
                            <li>Cancer</li>
                            <li>Osteoporosis</li>
                            <li>Pregnancy in the fist trimester</li>
                        </ul>
					</div>
				</div><!--end of Q5-->

			</div>
		</div>
		<hr />
	</div>



	<!--preview testomonials-->
	<div class="jumbotron">
		<div class="container">
			<blockquote>
				<em>"Relaxed, friendly and knowledgeable. Very understanding, explains what he is doing and puts you at ease throughout the treatment. 
				Will definitely be going back and would 100% recommend him."</em>

				<footer>Charlotte Lewis</footer>
			</blockquote>

			<div class="text-right">
				<a href="https://www.facebook.com/pg/CallumBensonSportsMassageTherapy/reviews/?ref=page_internal" target="_blank">Check out more testomonials</a>
			</div>
		</div>
	</div><!--end of preview testomonials-->





	<!--back to top btn-->
	<div class="container" style="margin-bottom:25px">
		<a href="#">Back to top.</a>
	</div><!--back to top btn-->


<?php

include('includes/footer.html');

?>




	