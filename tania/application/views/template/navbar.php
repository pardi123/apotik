<!-- TopBar -->
<nav class="navbar navbar-expand navbar-light bg-navbar topbar mb-4 static-top">
	<button id="sidebarToggleTop" class="btn btn-link rounded-circle mr-3">
		<i class="fa fa-bars"></i>
	</button>
	<ul class="navbar-nav ml-auto">
		<li class="nav-item dropdown no-arrow">

			<div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
				 aria-labelledby="searchDropdown">
				<form class="navbar-search">
					<div class="input-group">
						<input type="text" class="form-control bg-light border-1 small" placeholder="What do you want to look for?"
							   aria-label="Search" aria-describedby="basic-addon2" style="border-color: #3f51b5;">
						<div class="input-group-append">
							<button class="btn btn-primary" type="button">
								<i class="fas fa-search fa-sm"></i>
							</button>
						</div>
					</div>
				</form>
			</div>
		</li>
		<li class="nav-item dropdown no-arrow mx-1">
			<a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown"
			   aria-haspopup="true" aria-expanded="false">
				<i class="fas fa-bell fa-fw"></i>
			</a>
			<div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
				 aria-labelledby="alertsDropdown">
				<h6 class="dropdown-header">
					Pemberitahuan
				</h6>
				


				<a class="dropdown-item text-center small text-gray-500" href="<?=base_url()?>notifikasi">Show All Alerts</a>
			</div>
		</li>
		<li class="nav-item dropdown no-arrow mx-1">
			<a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown"
			   aria-haspopup="true" aria-expanded="false">
				<i class="fas fa-envelope fa-fw"></i>
			</a>
			<div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
				 aria-labelledby="messagesDropdown">
				<h6 class="dropdown-header">
					Message Center
				</h6>
			
			</div>
		</li>

		<div class="topbar-divider d-none d-sm-block"></div>
		<li class="nav-item dropdown no-arrow">
			<a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown"
			   aria-haspopup="true" aria-expanded="false">
				<img class="img-profile rounded-circle" src="<?=base_url()?>assets/img/boy.png" style="max-width: 60px">
				<span class="ml-2 d-none d-lg-inline text-white small">Test</span>
			</a>
			<div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
				<a class="dropdown-item" href="<?=base_url()?>admin-profile">
					<i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
					Profile
				</a>
				<a class="dropdown-item" href="#">
					<i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
					Settings
				</a>
				<a class="dropdown-item" href="#">
					<i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
					Activity Log
				</a>
				<div class="dropdown-divider"></div>
				<a class="dropdown-item" href="<?=base_url()?>logout">
					<i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
					Logout
				</a>
			</div>
		</li>
	</ul>
</nav>
<!-- Topbar -->

<div class="container-fluid" id="container-wrapper">
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800"><?=$title?></h1>
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="..">Dashboard</a></li>
	
			<li class="breadcrumb-item active" aria-current="page">Logout</li>
		</ol>
	</div>


