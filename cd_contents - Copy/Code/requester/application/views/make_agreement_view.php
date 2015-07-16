<?php require_once('header_view.php'); ?>

	<div class="column-wrap standalone what-is-ci">	
		<section class="column colspan-12">
			<h2>Make Aggrement</h2>
			<form method="post" action="">
			<table>
				<tr>
					<td>Web Service URL: *</td>
					<td>
						<input type="text" id="uni_webservice_url" name="uni_webservice_url" value=""/>
					</td>
				</tr>
				<tr>
					<td>University: *</td>
					<td>
						<input type="text" id="uni_name" name="uni_name" value=""/>
					</td>
				</tr>
				<tr>
					<td>Description: </td>
					<td>
						<textarea id="uni_description" name="uni_description"></textarea>
					</td>
				</tr>
				<tr>
					<td>API Access Key: </td>
					<td>
						<input type="password" id="uni_api_access_key" name="uni_api_access_key" />
					</td>
				</tr>
				<tr>
					<td></td>
					<td>
						<input type="submit" value="Make Agreement"/>
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