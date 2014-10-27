<!DOCTYPE html>
<html>
	<head>
		<title>SDRES</title>
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
			  <div class="completed-step"><a href="<?php echo base_url().index_page().'/'; ?>">Home</a></div>
			  <div class="active-step"><a href="<?php echo base_url().index_page().'/wizard/db_creds/'; ?>"><span>1</span>Database Credentials</a></div>
			  <div><a href="#step-two"><span>2</span>Map Columns To XML Tags</a></div>
			  <div><a href="#"><span>3</span> Review Maps</a></div>
			  <div><a href="#"><span>4</span> Finish</a></div>
			</div>
		</div>
	</div>

	<div class="column-wrap standalone what-is-ci">	
		<section class="column colspan-12">
			<h2>Database Credentials</h2>
			<form method="post" action="">
			<table>
				<tr>
					<td>Host: *</td>
					<td>
						<input type="text" id="host" name="host" value="<?php if (isset($db_creds->host)) {echo $db_creds->host;} ?>"/>
					</td>
				</tr>
				<tr>
					<td>Port: *</td>
					<td>
						<input type="text" id="port" name="port" value="<?php if (isset($db_creds->port)) {echo $db_creds->port;} ?>"/>
					</td>
				</tr>
				<tr>
					<td>User: *</td>
					<td>
						<input type="text" id="user" name="user" value="<?php if (isset($db_creds->user)) {echo $db_creds->user;} ?>"/>
					</td>
				</tr>
				<tr>
					<td>Password: *</td>
					<td>
						<input type="password" id="password" name="password" value="<?php if (isset($db_creds->password)) {echo $db_creds->password;} ?>"/>
					</td>
				</tr>
				<tr>
					<td>Database: *</td>
					<td>
						<input type="text" id="database" name="database" value="<?php if (isset($db_creds->database)) {echo $db_creds->database;} ?>"/>
					</td>
				</tr>
				<tr>
					<td></td>
					<td>
						<input type="submit" value="Connect"/>
					</td>
				</tr>
			</table>
			</form>
			
			
			<form action="http://localhost/projects/thesis/hec_soap_client/mapper.php/wizard/map/" method="get">
			<p style="float:right"><input type="submit" value="Next" /></p>
			</form>
		</section>					
	</div>

		</section>
		
	</section><!-- /#wrap -->
	
	</body>
</html>