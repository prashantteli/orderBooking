<div class="container-fluid">
	<!-- Page Heading -->
	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header">Suppliers</h1>
			<ol class="breadcrumb">
				<li class="">Purchase</li>
				<li class="active">Supplier</li>
			</ol>
		</div>
	</div>
	<!-- /.row -->
	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">Add Supplier</h3>
				</div>
				<div class="panel-body">
					<form action="saveSupplier" method="post">
						<div class="row">
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
								<div class="form-group">
									<input class="form-control" name="company_name" id="company_name"
										placeholder="Company Name" />
								</div>
							</div>
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
								<div class="form-group">
									<input class="form-control" name="contact_person" id="contact_person"
										placeholder="Contact Person" />
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
								<div class="form-group">
									<input class="form-control" name="contact_number_1" id="contact_number_1"
										placeholder="Contact Number - 1" />
								</div>
							</div>
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
								<div class="form-group">
									<input class="form-control" name="contact_number_2" id="contact_number_2"
										placeholder="Contact Number - 2" />
								</div>
							</div>
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
								<div class="form-group">
									<input class="form-control" name="email" id="email" placeholder="Email" />
								</div>
							</div>
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
								<div class="form-group">
									<input class="form-control" name="addr_1" id="addr_1"
										placeholder="Address-1" />
								</div>
							</div>
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
								<div class="form-group">
									<input class="form-control" name="addr_2" id="addr_2"
										placeholder="Address-2" />
								</div>
							</div>
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
								<div class="form-group">
									<input class="form-control" name="addr_3" id="addr_3"
										placeholder="Address-3" />
								</div>
							</div>
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
								<div class="form-group">
									<input class="form-control" name="city" id="city" placeholder="City" />
								</div>
							</div>
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
								<div class="form-group">
									<select class="form-control" name="state" id="state">
										<option value="select">State</option>
									</select>
								</div>
							</div>
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
								<div class="form-group">
									<select class="form-control" name="country" id="country">
										<option value="select">Country</option>
									</select>
								</div>
							</div>
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
								<div class="form-group">
									<input class="form-control" name="pin" id="pin"
										placeholder="PIN Code" />
								</div>
							</div>
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
								<div class="form-group">
									<input class="form-control" name="landmark" id="landmark"
										placeholder="Nearest Landmark" />
								</div>
							</div>
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-right">
								<button type="submit" class="btn btn-primary">Add</button>
								<button type="reset" class="btn btn-primary">Cancel</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- /.row -->

<!-- /.container-fluid -->