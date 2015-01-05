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
	</div>

		</section>
		
	</section><!-- /#wrap -->
	
	</body>
</html>