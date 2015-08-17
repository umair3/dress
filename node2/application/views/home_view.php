<!DOCTYPE html>
<html>
	<head>
		<title>DRESS</title>
		<link href="<?php echo base_url('resources/css/common.css'); ?>" type="text/css" rel="stylesheet">
		<link href="<?php echo base_url('resources/css/flexslider.css'); ?>" type="text/css" rel="stylesheet">
		<style type="text/css">
/* = STEPS CONTAINER
----------------------------*/
.wizard-steps {
    margin:20px 10px 0px 10px;
    padding:0px;
    position: relative;
    clear:both;
    font-family:"Helvetica Neue", Helvetica, Arial, sans-serif;
    font-weight: bold;
}
.wizard-steps div {
    position:relative;
}
/* = STEP NUMBERS
----------------------------*/
.wizard-steps span {
    display: block;
    float: left;
    font-size: 10px;
    text-align:center;
    width:15px;
    margin: 2px 5px 0px 0px;
    line-height:15px;
    color: #ccc;
    background: #FFF;
    border: 2px solid #CCC;
    -webkit-border-radius:10px;
    -moz-border-radius:10px;
    border-radius:10px;
}
/* = DEFAULT STEPS
----------------------------*/
.wizard-steps a {
    position:relative;
    display:block;
    width:auto;
    height:24px;
    margin-right: 18px;
    padding:0px 10px 0px 3px;
    float: left;
    font-size:11px;
    line-height:24px;
    color:#666;
    background: #F0EEE3;
    text-decoration:none;
    text-shadow:1px 1px 1px rgba(255,255,255, 0.8);
}
.wizard-steps a:before {
    width:0px;
    height:0px;
    border-top: 12px solid #F0EEE3;
    border-bottom: 12px solid #F0EEE3;
    border-left:12px solid transparent;
    position: absolute;
    content: "";
    top: 0px;
    left: -12px;
}
.wizard-steps a:after {
    width: 0;
    height: 0;
    border-top: 12px solid transparent;
    border-bottom: 12px solid transparent;
    border-left:12px solid #F0EEE3;
    position: absolute;
    content: "";
    top: 0px;
    right: -12px;
}
 
/* = COMPLETED STEPS
----------------------------*/
 
.wizard-steps .completed-step a {
    color:#163038;
    background: #A3C1C9;
}
.wizard-steps .completed-step a:before {
    border-top: 12px solid #A3C1C9;
    border-bottom: 12px solid #A3C1C9;
}
.wizard-steps .completed-step a:after {
    border-left: 12px solid #A3C1C9;
}
.wizard-steps .completed-step span {
    border: 2px solid #163038;
    color: #163038;
    text-shadow:none;
}
/* = ACTIVE STEPS
----------------------------*/
.wizard-steps .active-step a {
    color:#A3C1C9;
    background: #163038;
    text-shadow:1px 1px 1px rgba(0,0,0, 0.8);
}
.wizard-steps .active-step a:before {
    border-top: 12px solid #163038;
    border-bottom: 12px solid #163038;
}
.wizard-steps .active-step a:after {
    border-left: 12px solid #163038;
}
.wizard-steps .active-step span {
    color: #163038;
    -webkit-box-shadow:0px 0px 2px rgba(0,0,0, 0.8);
    -moz-box-shadow:0px 0px 2px rgba(0,0,0, 0.8);
    box-shadow:0px 0px 2px rgba(0,0,0, 0.8);
    text-shadow:none;
    border: 2px solid #A3C1C9;
}
/* = HOVER STATES
----------------------------*/
.wizard-steps .completed-step:hover a, .wizard-steps .active-step:hover a {
    color:#fff;
    background: #8F061E;
    text-shadow:1px 1px 1px rgba(0,0,0, 0.8);
}
.wizard-steps .completed-step:hover span, .wizard-steps .active-step:hover span {
    color:#8F061E;
}
.wizard-steps .completed-step:hover a:before, .wizard-steps .active-step:hover a:before {
    border-top: 12px solid #8F061E;
    border-bottom: 12px solid #8F061E;
}
.wizard-steps .completed-step:hover a:after, .wizard-steps .active-step:hover a:after {
    border-left: 12px solid #8F061E;
}
		</style>
	</head>
	<body class="ci landing-page">
		<section id="wrap">

		<section class="content">

	<div class="full-width feature">
		<div class="column-wrap talking-points dim leadin">
			<div class="wizard-steps">
			  <div class="active-step"><a href="#home">Home</a></div>
			  <div><a href="#step-one"><span>1</span>Database Credentials</a></div>
			  <div><a href="#step-two"><span>2</span>Map Columns To XML Tags</a></div>
			  <div><a href="#"><span>3</span> Review Maps</a></div>
			  <div><a href="#"><span>4</span> Finish</a></div>
			</div>
		</div>
	</div>

	<div class="column-wrap standalone what-is-ci">	
		<section class="column colspan-12">
			<h2>Semi-Automated DB To DRESS XML Mapper</h2>
			<p>Follow the instructions to create a soap service for the HEC portal with the help of this browser based GUI interface.</p>
			<h3>Requirements</h3>
			<ul class="checklist column colspan-8">
				<li>PHP 5.5</li>
				<li>MySQL 5.6</li>
			</ul>	
			<ul class="checklist column colspan-8">
				<li>Apache 2.2</li>
				<li>SOAP extension enabled</li>
			</ul>
			<form action="<?php echo base_url().index_page().'/wizard/db_creds/'; ?>" method="get">
			<p style="float:right"><input type="submit" value="Begin" /></p>
			</form>
		</section>					
	</div>

		</section>
		
	</section><!-- /#wrap -->
	
	</body>
</html>