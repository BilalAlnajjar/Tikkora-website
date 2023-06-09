<?php require_once 'inc/header.php'; ?>

<!-- PAGE -->
<div class="page">
	<div class="page-main">

		<!-- Sidebar -->
		<?php require_once 'inc/sidebar.php'; ?>
		<!-- /Sidebar -->

		<!-- Top Header Mobile -->
		<?php require_once 'inc/top-mobile.php'; ?>
		<!-- /Top Header Mobile  -->

		<div class="app-content">
			<div class="side-app x-active">
				<!-- Top Header Full -->
				<?php $title_view = 'Social Media'; ?>
				<?php require_once 'inc/top-full.php'; ?>
				<!-- /Top Header Full -->

				<!-- ============== START CONTENT ==============  -->
				<!-- ROW-1 OPEN -->
				<div class="row">
					<div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
							<div class="card-body">
								<div class="btn-list">
									<a href="add_social.blade.php"><button" class="btn btn-primary"><i class="fe fe-plus mr-2"></i>Add</button></a>
								</div>
							</div>
					</div><!-- COL END -->
				</div>

				<div class="row row-cards row-deck">
					<div class="col-md-4">
						<div class="card">
							<img class="card-img-topbr-tr-0 br-tl-0" src="assets/images/media/19.jpg" alt="Card image cap">
							<div class="card-header">
								<h5 class="card-title">Facebook</h5>
							</div>
							<div class="card-body">
								<a class="btn btn-sm btn-primary" href="add_social.blade.php"><i class="fa fa-edit"></i> Edit</a>
							<a class="btn btn-sm btn-danger" href="#"><i class="fa fa-trash"></i> Delete</a>
							<div class="material-switch pull-right">
								<input id="someSwitchOptionSuccess1" name="someSwitchOption001" type="checkbox"/>
								<label for="someSwitchOptionSuccess1" class="label-success"></label>
							</div>
							</div>
						</div>
					</div><!-- COL-END -->
					<div class="col-md-4">
						<div class="card">
							<img class="card-img-topbr-tr-0 br-tl-0" src="assets/images/media/19.jpg" alt="Card image cap">
							<div class="card-header">
								<h5 class="card-title">Instgram</h5>
							</div>
							<div class="card-body">
								<a class="btn btn-sm btn-primary" href="add_social.blade.php"><i class="fa fa-edit"></i> Edit</a>
							<a class="btn btn-sm btn-danger" href="#"><i class="fa fa-trash"></i> Delete</a>
							<div class="material-switch pull-right">
								<input id="someSwitchOptionSuccess2" name="someSwitchOption001" type="checkbox"/>
								<label for="someSwitchOptionSuccess2" class="label-success"></label>
							</div>
							</div>
						</div>
					</div><!-- COL-END -->
					<div class="col-md-4">
						<div class="card">
							<img class="card-img-topbr-tr-0 br-tl-0" src="assets/images/media/19.jpg" alt="Card image cap">
							<div class="card-header">
								<h5 class="card-title">Youtube</h5>
							</div>
							<div class="card-body">
								<a class="btn btn-sm btn-primary" href="add_social.blade.php"><i class="fa fa-edit"></i> Edit</a>
							<a class="btn btn-sm btn-danger" href="#"><i class="fa fa-trash"></i> Delete</a>
							<div class="material-switch pull-right">
								<input id="someSwitchOptionSuccess3" name="someSwitchOption001" type="checkbox"/>
								<label for="someSwitchOptionSuccess3" class="label-success"></label>
							</div>
							</div>
						</div>
					</div><!-- COL-END -->
				</div>
				<!-- ROW-1 CLOSED -->
				<!-- ============== END CONTENT ==============  -->



	<!-- Copyright -->
	<?php require_once 'inc/copyright.php'; ?>
	<!-- /Copyright -->
</div>
<!-- Footer -->
<?php require_once 'inc/footer.php'; ?>
<!-- /Footer -->
