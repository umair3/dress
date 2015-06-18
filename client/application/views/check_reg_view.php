<?php require_once('header_view.php'); ?>

	<div class="column-wrap standalone what-is-ci">	
		<section class="column colspan-12">
			<h2>Check Registration</h2>
			<form method="post" action="">
			<table>
				<tr>
					<td>Search Criteria: *</td>
					<td>
						<select id="search_criteria" name="search_criteria">
							<option>Choose</option>
							<option>NIC</option>
							<option>Reg</option>
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
						<input type="submit" value="Check Registration"/>
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
				
			</table>
			
		</section>	
		<?php } ?>
	</div>

		</section>
		
	</section><!-- /#wrap -->
	
	</body>
</html>