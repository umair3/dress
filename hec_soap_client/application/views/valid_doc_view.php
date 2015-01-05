<?php require_once('header_view.php'); ?>

	<div class="column-wrap standalone what-is-ci">	
		<section class="column colspan-12">
			<h2>Validate Document</h2>
			<form method="post" action="">
			<table>
				<tr>
					<td>Document Type: *</td>
					<td>
						<select id="search_criteria" name="search_criteria">
							<option>Choose</option>
							<option>Registeration</option>
							<option>Transcript</option>
							<option>Degree</option>
						</select>
					</td>
				</tr>
				<tr>
					<td>Search Criteria: *</td>
					<td>
						<select id="search_criteria" name="search_criteria">
							<option>Choose</option>
							<option>Certificate No</option>
							<option>Roll No</option>
						</select>
					</td>
				</tr>
				<tr>
					<td>Search Value: *</td>
					<td>
						<input type="text" id="search_criteria" name="search_criteria" value=""/>
					</td>
				</tr>
				<tr>
					<td>University: *</td>
					<td>
						<select id="search_criteria" name="search_criteria">
							<option>Choose</option>
							<?php echo $institute_options; ?>
						</select>
					</td>
				</tr>
				<tr>
					<td></td>
					<td>
						<input type="submit" value="Validate Document"/>
					</td>
				</tr>
			</table>
			</form>
		</section>			
		<?php if ($posted==1) { ?>
		<section class="column colspan-12">
			
			
			<table>
				<tr>
					<td>Document Type: </td>
					<td>
						<?php echo $documentType;?>
					</td>
				</tr>
				<tr>
					<td>Level: </td>
					<td>
						<?php echo $level;?>
					</td>
				</tr>
				<tr>
					<td>Exam System: </td>
					<td>
						<?php echo $examSystem;?>
					</td>
				</tr>
				<tr>
					<td>Title: </td>
					<td>
						<?php echo $title;?>
					</td>
				</tr>
				<tr>
					<td>Serial#</td>
					<td>
						<?php echo $serialNo;?>
					</td>
				</tr>
				<tr>
					<td>Reg#</td>
					<td>
						<?php echo $registrationNo;?>
					</td>
				</tr>
				<tr>
					<td>Roll#</td>
					<td>
						<?php echo $rollNo;?>
					</td>
				</tr>
				<tr>
					<td>Date Issued: </td>
					<td>
						<?php echo $date;?>
					</td>
				</tr>
				<tr>
					<td>First Name: </td>
					<td>
						<?php echo $firstName;?>
					</td>
				</tr>
				<tr>
					<td>Last Name: </td>
					<td>
						<?php echo $lastName;?>
					</td>
				</tr>
				<tr>
					<td>Awarding Institute: </td>
					<td>
						<?php echo $institute;?>
					</td>
				</tr>
				<tr>
					<td>Image: </td>
					<td>
						<a href="<?php echo $image;?>" target="_blank" >view image</a>
					</td>
				</tr>
			</table>
			
		</section>	
		<?php } ?>	
	</div>

		</section>
		
	</section><!-- /#wrap -->
	
	</body>
</html>