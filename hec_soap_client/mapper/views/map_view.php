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
			
			<?php 
			if(isset($degree_map)){ 
			?>
			<h3>Map DEGREE XML Schema to DB Columns <img width="16" src="<?php echo base_url('resources/images/completed.png'); ?>" /></h3>
			<div>
				<pre>
						<?php echo json_encode(json_decode($degree_map),JSON_PRETTY_PRINT); ?>
					
				</pre>
			</div>
            <?php 
			} else {
			?>
            <h3>Map DEGREE XML Schema to DB Columns</h3> 
			<form method="post" action="">
			<table>
				<tr>
					<th>Mapping XML Tag</th>
					<th>DB Table</th>
					<th>DB Column</th>
				</tr>
				<tr>
					<td>&lt;docType&gt;</td>
					<td>DEGREE</td>
					<td>DEGREE</td>
				</tr>
				<?php
				foreach ($degree_tags as $degree_tag) {
				?>
				<tr>
					<td>&lt;<?php echo $degree_tag; ?>&gt;</td>
					<td>
						<select id="degree_table_<?php echo $degree_tag; ?>" name="degree_table_<?php echo $degree_tag; ?>" onchange=showFields(this.name,this.value)>
							<option value="">choose</option>
							<?php 
							if (isset($tables_select_options)) {
								echo $tables_select_options;
							}
							?>
						</select>
					</td>
					<td>
						<select id="degree_table_<?php echo $degree_tag; ?>_field" name="degree_table_<?php echo $degree_tag; ?>_field">
							<option>choose</option>
						</select>
					</td>
				</tr>
				<?php
				}
				?>
				
			</table>
			<input id="degree_join_count" name="degree_join_count" value="0" type="hidden" />
			<table  id="degree_join_table">
				<tr>
					<th>DB Table</th>
					<th>DB Column</th>
					<th>JOIN Type</th>
					<th>JOIN ON DB Table</th>
					<th>JOIN ON DB Column</th>
				</tr>
				
				
			</table>
			<a href="javascript:void(0)" onclick="showJoinRow('degree')">Add Join</a>
			<p><input type="submit" name="degree" value="Save" /></p>
			<br/>
			</form>
			<?php } ?>
            
            
			
			<form action="<?php echo base_url().index_page().'/wizard/review_maps/'; ?>" method="get">
			<p style="float:right"><input type="submit" value="Next" /></p>
			</form>
		</section>					
	</div>

		</section>
		
	</section><!-- /#wrap -->
<?php 
	$column_select_options['students'];
	//print_r($tables_array);
?>
<script type="text/javascript">
   var tables_array = [];
   <?php
   // Creating arrays of fields for all tables.
   foreach($tables_array as $key=>$table) {
		$table_fields = '';
		$table_name = '';
		$table_name = $key;
		foreach($table as $field){
			if($table_fields == ''){
				$table_fields.="'".$field."'";
			}else{
				$table_fields.=",'".$field."'";
			}
		}
		echo "tables_array['".$table_name."'] = [".$table_fields."]; ";
   }
   ?>
	
 function showFields(select_list_name,table) {
	
	console.log('showFields called by '+select_list_name+' having value ' +table);
	
	table_field_select_list = document.getElementById(select_list_name+'_field');
	
	// Empty Select List first
	for (var option in table_field_select_list){
		table_field_select_list.remove(option);
	}
	// Add options in emptied select list
	for (i = 0; i < tables_array[table].length; i++ ) {
		table_field_select_list.options[table_field_select_list.options.length]=new Option(tables_array[table][i], tables_array[table][i], false, false);
	}
	
	//table_field_select_list.options[table_field_select_list.options.length]=new Option("Movies", "moviesvalue", false, false);
	
 }
 
 function showJoinFields(select_list_name,table) {
	
	console.log('showJoinFields called by '+select_list_name+' having value ' +table);
	
	table_field_select_list = document.getElementById(select_list_name+'_field');
	
	// Empty Select List first
	for (var option in table_field_select_list){
		table_field_select_list.remove(option);
	}
	// Add options in emptied select list
	for (i = 0; i < tables_array[table].length; i++ ) {
		table_field_select_list.options[table_field_select_list.options.length]=new Option(tables_array[table][i], tables_array[table][i], false, false);
	}
	
	//table_field_select_list.options[table_field_select_list.options.length]=new Option("Movies", "moviesvalue", false, false);
	
 }
 
 function showJoinRow(mapping) {
	
	console.log('showJoinRow called by ' + mapping);
	
	join_table = document.getElementById(mapping+'_join_table');
	
	degree_join_count = document.getElementById('degree_join_count');
	degree_join_count.value = (parseInt(degree_join_count.value)+1);
	
	var i = degree_join_count.value;
	
	// Adding row to Join Table
	var row = join_table.insertRow(join_table.rows.length);
    var cell0 = row.insertCell(0);
    var cell1 = row.insertCell(1);
	var cell2 = row.insertCell(2);
	var cell3 = row.insertCell(3);
	var cell4 = row.insertCell(4);
    
	cell0.innerHTML = '<select id="degree_join_table_'+i+'" name="degree_join_table_'+i+'" onchange=showJoinFields(this.name,this.value)><option value="">choose</option><?php if (isset($tables_select_options)) {echo $tables_select_options;} ?>	</select>';
    
	cell1.innerHTML = '<select id="degree_join_table_'+i+'_field" name="degree_join_table_'+i+'_field"><option>choose</option></select>';
	
	cell2.innerHTML = '<select id="degree_join_type_'+i+'" name="degree_join_type_'+i+'"><option value="JOIN">JOIN</option><option value="LEFT JOIN">LEFT JOIN</option><option value="RIGHT JOIN">RIGHT JOIN</option></select>';
	
	cell3.innerHTML = '<select id="degree_joinon_table_'+i+'" name="degree_joinon_table_'+i+'" onchange=showJoinFields(this.name,this.value)><option value="">choose</option><?php if (isset($tables_select_options)) {echo $tables_select_options;} ?>	</select>';
	
	cell4.innerHTML = '<select id="degree_joinon_table_'+i+'_field" name="degree_joinon_table_'+i+'_field"><option>choose</option></select>';
		
 }
</script>
	
	</body>
</html>