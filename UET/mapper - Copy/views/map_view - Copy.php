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
			  <div class="completed-step"><a href="<?php echo base_url().index_page().'/wizard/db_creds/'; ?>"><span>1</span>Database Credentials</a></div>
			  <div class="active-step"><a href="<?php echo base_url().index_page().'/wizard/map/'; ?>"><span>2</span>Map Columns To XML Tags</a></div>
			  <div><a href="#"><span>3</span> Review Maps</a></div>
			  <div><a href="#"><span>4</span> Finish</a></div>
			</div>
		</div>
	</div>

	<div class="column-wrap standalone what-is-ci">	
		<section class="column colspan-12">
			<h2>Map Database To XML</h2>
			<p>Add the tables and columns to the corresponding tags. Each Type of XML Schema has its own Mapping, for example, DEGREE has its own Map while REGISTRATION has its own.</p>
			<h3>Map DEGREE XML Schema to DB Columns</h3>
			<form method="post" action="">
			<table>
				<tr>
					<th>Mapping XML Tag</th>
					<th>DB Table</th>
					<th>DB Column</th>
				</tr>
				<tr>
					<td>&lt;documentType&gt;</td>
					<td>DEGREE</td>
					<td>DEGREE</td>
				</tr>
				<tr>
					<td>&lt;level&gt;</td>
					<td>
						<select>
							<option value="">choose</option>
							<?php 
							if (isset($tables_select_options)) {
								echo $tables_select_options;
							}
							?>
						</select>
					</td>
					<td>
						<select>
							<option>choose</option>
						</select>
					</td>
				</tr>
				<tr>
					<td>&lt;examSystem&gt;</td>
					<td>
						<select>
							<option>choose</option>
							<?php 
							if (isset($tables_select_options)) {
								echo $tables_select_options;
							}
							?>
						</select>
					</td>
					<td>
						<select>
							<option>choose</option>
						</select>
					</td>
				</tr>
				<tr>
					<td>&lt;title&gt;</td>
					<td>
						<select>
							<option>choose</option>
							<?php 
							if (isset($tables_select_options)) {
								echo $tables_select_options;
							}
							?>
						</select>
					</td>
					<td>
						<select>
							<option>column1</option>
							<?php 
							if (isset($tables_select_options)) {
								echo $tables_select_options;
							}
							?>
						</select>
					</td>
				</tr>
				<tr>
					<td>&lt;serialNo&gt;</td>
					<td>
						<select>
							<option>choose</option>
							<?php 
							if (isset($tables_select_options)) {
								echo $tables_select_options;
							}
							?>
						</select>
					</td>
					<td>
						<select>
							<option>choose</option>
						</select>
					</td>
				</tr>
				<tr>
					<td>&lt;registrationNo&gt;</td>
					<td>
						<select>
							<option>choose</option>
							<?php 
							if (isset($tables_select_options)) {
								echo $tables_select_options;
							}
							?>
						</select>
					</td>
					<td>
						<select>
							<option>choose</option>
						</select>
					</td>
				</tr>
				<tr>
					<td>&lt;rollNo&gt;</td>
					<td>
						<select>
							<option>choose</option>
							<?php 
							if (isset($tables_select_options)) {
								echo $tables_select_options;
							}
							?>
						</select>
					</td>
					<td>
						<select>
							<option>choose</option>
						</select>
					</td>
				</tr>
				<tr>
					<td>&lt;date&gt;</td>
					<td>
						<select>
							<option>choose</option>
							<?php 
							if (isset($tables_select_options)) {
								echo $tables_select_options;
							}
							?>
						</select>
					</td>
					<td>
						<select>
							<option>choose</option>
						</select>
					</td>
				</tr>
				<tr>
					<td>&lt;firstName&gt;</td>
					<td>
						<select>
							<option>choose</option>
							<?php 
							if (isset($tables_select_options)) {
								echo $tables_select_options;
							}
							?>
						</select>
					</td>
					<td>
						<select>
							<option>choose</option>
						</select>
					</td>
				</tr>
				<tr>
					<td>&lt;lastName&gt;</td>
					<td>
						<select>
							<option>choose</option>
							<?php 
							if (isset($tables_select_options)) {
								echo $tables_select_options;
							}
							?>
						</select>
					</td>
					<td>
						<select>
							<option>choose</option>
						</select>
					</td>
				</tr>
				<tr>
					<td>&lt;institute&gt;</td>
					<td>
						<select>
							<option>choose</option>
							<?php 
							if (isset($tables_select_options)) {
								echo $tables_select_options;
							}
							?>
						</select>
					</td>
					<td>
						<select>
							<option>choose</option>
						</select>
					</td>
				</tr>
				
				<tr>
					<td></td>
					<td>
						<input type="submit" value="Save"/>
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
<?php 
	$column_select_options['students'];
?>
<script type="text/javascript">
	var tables;
	tables = [
		'students' = {
	
		},
		'degrees' = {
	
		},
	];
 /*function table_columns(tag, table){
	
	var options = '"';
	<?php
	foreach($column_select_options['students'] as $t) {
		echo 'options=<option>'.$t.'</option>';
	}?>
	options = '"';
	
 }*/
 
 function table_columns (tag, table) {
	if (table=='students') {
		document.getElementById(tag+'_column_select_list').innerHTML = '<select><option>RegNo</option><option>FirstName</option><option>LastName</option></select>';
	} else {
		document.getElementById(tag+'_column_select_list').innerHTML = '<select><option>RegNo</option><option>FirstName</option><option>LastName</option></select>';
	}
 }
</script>
	
	</body>
</html>