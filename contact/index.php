<?php
$jquery = "../includes/jquery-3.1.1.min.js";
$stylesheet1 = "contact.css";
$js_file = "contact.js";
include('../includes/header.html');

if($_SERVER['REQUEST_METHOD'] == "POST"){
    $errors = array(); //initialise errors array
    
    //validate input boxes
    if(isset($_POST['name']) && !empty($_POST['name'])){
        $name = $_POST['name'];
    }else{
        $name = null;
        $errors[] = "Please input your name";
    }
    
    if(isset($_POST['email']) && !empty($_POST['email'])){
        $email = $_POST['email'];
    }else{
        $email = null;
        $errors[] = "Please input your email";
    }
    
    if(isset($_POST['mobile']) && !empty($_POST['mobile']) && is_numeric($_POST['mobile'])){
        $mobile = $_POST['mobile'];
    }else{
        $mobile = null;
        $errors[] = "Please input your mobile";
    }
    
    if(!empty($_POST['comments'])){
        $comments = $_POST['comments'];
    }else{
        $comments = null;
        $errors[] = "Please input your comments";
    }
    
    if(isset($_POST['package'])){
        $package = $_POST['package'];
    }else{
        $package = null;
        $errors[] = "Please choose a package from the list";
    }
    
    
    if($name && $email && $mobile && $comments){
        $to = "callumBenson@Callumbensonsportsmassagetherapy.co.uk";
        $subject = "Website submission form from $name";
        $body = 'interested in <b>' .$package.'</b>'. $comments . '<br/><b>Mobile:' .$mobile.'</b>';
        $body = wordwrap($body,70);
        $headers = "From: $email";
        
        mail($to, $subject, $body, $headers);
        $msg = "Email recieved. We will contact you shortly";
        
        $_POST = array();
        
    }else{
        $msg = "<h4>Sorry, we could not send the form due to the following reasons:</h4>";
        foreach($errors as $list){
            $msg .= "<li>$list</li>";
        }
    }
    
}

?>



		<div id="wrapper"><!--div wrapper-->



			<!--header-->
			<div class="container">
				<div class="page-header">
					<h2>CONTACT US. <small>Book Your Session Now!</small></h2>
				</div>

				<div class="row">
                    
					<div class="col-md-4">
						<p>Please fill in the form on the right to submit your interest. We will aim to contact you within 24 hours.</p>
						<p>To book, please contact via phone, email, SMS or post:</p><br />
						<address>
							<strong>CALLUM BENSON SPORTS MASSAGE</strong>
							<br />Red Roof Clinic
							<br />Lincoln
							<br />Lincolnshire
							<br />LN5 9SA
							<br /><br /><strong>Tel:</strong> 07946 455580
							<br /><strong>Email:</strong> callum_benson@hotmail.com
						</address>
					</div>
                    
					<div class="col-md-8">
						<form role="form" action="index.php" method="post">
							<div class="form-group form-horizontal">
                                
                                
                                
                                    <!--name-->
                                    <label class="col-md-4 control-label" for="name">
                                        Name:
                                    </label>
                                    <div class="col-md-8">
                                        <input type="text" id="form-0" class="form-control" name="name" value="<?php if(isset($_POST['name'])){echo $_POST['name'];} ?>"/>
                                    </div><!--end of name-->

                                    <!--email-->
                                    <label class="col-md-4 control-label" for="email">
                                        Email:
                                    </label>
                                    <div class="col-md-8">
                                        <input type="email" id="form-1" class="form-control" name="email" value="<?php if(isset($_POST['email'])){echo $_POST['email'];} ?>"/>
                                    </div><!--end of email-->

                                    <!--phone-->
                                    <label class="col-md-4 control-label" for="phone">
                                        Mobile:
                                    </label>
                                    <div class="col-md-8">
                                        <input type="text" id="form-2" class="form-control" name="mobile" value="<?php if(isset($_POST['mobile'])){echo $_POST['mobile'];} ?>"/>
                                    </div><!--end of phone-->

                                    <!--package-->
                                    <label class="col-md-4 control-label" for="name">
                                        Package:
                                    </label>
                                    <div class="col-md-8">
                                        <select name="package" class="form-control" id="form-3">
                                            <option value="1massage" <?php if(isset($_POST['package']) && $_POST['package'] == "1massage"){echo "selected";} ?> >* 1 hour sports massage * -- £40.00</option>
                                            <option value="1/2massage" <?php if(isset($_POST['package']) && $_POST['package'] == "1/2massage"){echo "selected";} ?>>30 minutes sports massage -- £30.00</option>
                                            <option value="taping" <?php if(isset($_POST['package']) && $_POST['package'] == "taping"){echo "selected";} ?>>Kinesio taping -- £15.00</option>
                                            <option value="pt_gold1" <?php if(isset($_POST['package']) && $_POST['package'] == "pt_gold1"){echo "selected";} ?>>* PT 6 week GOLD * -- £399.00</option>
                                            <option value="pt_gold2" <?php if(isset($_POST['package']) && $_POST['package'] == "pt_gold2"){echo "selected";} ?>>* PT 12 week GOLD * -- £760.00</option>
                                            <option value="pt_silver1" <?php if(isset($_POST['package']) && $_POST['package'] == "pt_silver1"){echo "selected";} ?>>PT 6 week SILVER -- £199.00</option>
                                            <option value="pt_silver2" <?php if(isset($_POST['package']) && $_POST['package'] == "pt_silver2"){echo "selected";} ?>>PT 12 week SILVER -- £389.00</option>
                                        </select>
                                    </div><!--end of package-->

                                    <!--comments-->
                                    <label class="col-md-4 control-label" for="comments">
                                        Comments:
                                    </label>
                                    <div class="col-md-8">
                                        <textarea class="form-control" rows="10" id="form-4" placeholder="please leave any comments which you have here..." name="comments"><?php if(isset($_POST['comments'])){echo $_POST['comments'];} ?></textarea>
                                    </div><!--end of comments-->

                                    <!--submit-->
                                    <div class="col-md-8 col-md-offset-4">
                                        <p id="error_msg"><button type="submit" class="btn btn-info" id="contact_submit">Submit</button></p>

                                    </div><!--end of submit-->
                                    <div id="message"><?php if(isset($msg)){echo $msg;} ?></div>
                                
								
							</div><!--end of form-group-->
						</form><!--end of form-->
                        
                        
					</div>
				</div>

			</div>
		


<?php
include('../includes/footer.html');            
?>