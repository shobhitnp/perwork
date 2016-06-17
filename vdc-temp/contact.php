<?php include('header.php');?>
<div class="container main contact">
	<div class="row">
		
		<div class="col-md-6 col-sm-6 col-xs-12 con-col">
			<div class="row">
				<div class="col-md-6 col-sm-6 col-xs-12 form-group">
					<label>Name:</label>
					<input type="text" name="name" />
				</div>
				<div class="col-md-6 col-sm-6 col-xs-12 form-group">
					<label>Address:</label>
					<input type="text" name="address" />
				</div>
				<div class="col-md-6 col-sm-6 col-xs-12 form-group">
					<label>Phone:</label>
					<input type="text" name="phone" />
				</div>
				<div class="col-md-6 col-sm-6 col-xs-12 form-group">
					<label>E-mail:</label>
					<input type="text" name="e-mail" />
				</div>

				<div class="col-md-12 col-sm-12 col-xs-12 form-group">
					<label>Your Message:</label>
					<textarea cols="5" rows="5" placeholder="Type Your Message"></textarea>
				</div>
				<div class="col-md-12 col-sm-12 col-xs-12 form-group">
					<a class="btn btn-primary">Send Your Message</a>
				</div>
			</div>
		</div>

		<div class="col-md-6 col-sm-6 col-xs-12 con-col">
			<p>Phone:01-4445567<br/>
			Tangram, Baglung<br/>
			Dhaulagiri, Nepal</p>
			<div class="map">
				This is place for google map
			</div>
		</div>

	</div>
</div>

<?php include('footer.php');?>