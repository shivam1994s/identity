<!-- start sidebar menu -->
<div class="sidebar-container">
	<div class="sidemenu-container navbar-collapse collapse fixed-menu">
		<div id="remove-scroll">
			<ul class="sidemenu page-header-fixed p-t-20" data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
				<li class="sidebar-toggler-wrapper hide">
					<div class="sidebar-toggler">
						<span></span>
					</div>
				</li>
				<li class="sidebar-user-panel">
					<div class="user-panel">
						<div class="row">
								<div class="sidebar-userpic">
									<img alt="" class="img-circle " src="<?=  Auth::user()->image ? asset('storage/'.Auth::user()->image) : asset('assets/img/user_dp.jpg')  ?>" />
								</div>
							</div>
							<div class="profile-usertitle">
								<div class="sidebar-userpic-name"><?=  Auth::user()->name ?></div>
								<div class="profile-usertitle-job"> Administrator </div>
							</div>
							<div class="sidebar-userpic-btn">
								<a class="tooltips" href="" data-placement="top" data-original-title="Profile">
									<i class="material-icons">person_outline</i>
								</a>
								<a class="tooltips" href="" data-placement="top" data-original-title="Appointment">
									<i class="material-icons">hotel</i>
								</a>
								<a class="tooltips" href="<?= route('logout') ?>" onclick="event.preventDefault();
										document.getElementById('logout-form').submit();" data-placement="top" data-original-title="Logout">
									<i class="material-icons">input</i>
								</a>
							</div>
							<form id="logout-form" action="<?= route('logout') ?>" method="POST" style="display: none;">
							   <?= csrf_field() ?>
							</form>
					</div>
				</li>
				<li class="nav-item start">
					<a href="<?= url('home') ?>" class="nav-link nav-toggle">
						<i class="material-icons">dashboard</i>
						<span class="title">Dashboard</span>
					</a>
				</li>
				<!--<li class="nav-item">
					<a href="" class="nav-link nav-toggle">
						<i class="material-icons">view_quilt</i>
						<span class="title">Appointment</span>
					</a>
				</li>-->
				<!--
				<li class="nav-item">
					<a href="#" class="nav-link nav-toggle">
						<i class="material-icons">hotel</i>
						<span class="title">My Hotels</span>
						<span class="arrow"></span>
					</a>
					
					<ul class="sub-menu">
						<li class="nav-item">
							<a href="#" class="nav-link ">
								<span class="title">New Hotel</span>
							</a>
						</li>
						<li class="nav-item">
							<a href="#" class="nav-link ">
								<span class="title">View Hotel</span>
							</a>
						</li>
						<li class="nav-item">
							<a href="#" class="nav-link ">
								<span class="title">Edit Hotel</span>
							</a>
						</li>
					</ul>
				</li> -->
				
				<li class="nav-item">
					<a href="#" class="nav-link nav-toggle">
						<i class="material-icons">group</i>
						<span class="title">Patient Info</span>
						<span class="arrow"></span>
					</a>
					<ul class="sub-menu">
						<li class="nav-item">
							<a href="" class="nav-link ">
								<span class="title">Add New Patient</span>
							</a>
						</li>
						<li class="nav-item">
							<a href="" class="nav-link ">
								<span class="title">View Patient Info</span>
							</a>
						</li>
					</ul>
				</li>
				
				<li class="nav-item">
					<a href="#" class="nav-link nav-toggle">
						<i class="material-icons">event_note</i>
						<span class="title">Appointment Detail</span>
						<span class="arrow"></span>
					</a>
					<ul class="sub-menu">
						<li class="nav-item">
							<a href="" class="nav-link ">
								<span class="title">Add New Appointment</span>
							</a>
						</li>
						<li class="nav-item">
							<a href="" class="nav-link ">
								<span class="title">View Appointment Detail</span>
							</a>
						</li>
					</ul>
				</li>
				<li class="nav-item">
					<a href="" class="nav-link nav-toggle">
						<i class="material-icons f-left">filter_list</i>
						<span class="title">Offer/Coupon</span>
					</a>
				</li>
				
				<li class="nav-item">
					<a href="" class="nav-link nav-toggle">
						<i class="material-icons">hotel</i>
						<span class="title">Payment</span>
					</a>
				</li>
				
				<li class="nav-item">
					<a href="" class="nav-link nav-toggle">
						<i class="material-icons">description</i>
						<span class="title">FAQ</span>
					</a>
				</li>
				
				<li class="nav-item">
					<a href="" class="nav-link nav-toggle">
						<i class="material-icons">notifications</i>
						<span class="title">Notification</span>
					</a>
				</li>
				
				<!--<li class="nav-item">
					<a href="#" class="nav-link nav-toggle">
						<i class="material-icons">description</i>
						<span class="title">Extra Pages</span>
						<span class="arrow"></span>
					</a>
					<ul class="sub-menu">
						<li class="nav-item">
							<a href="#" class="nav-link ">
								<span class="title">Contact</span>
							</a>
						</li>
						<li class="nav-item">
							<a href="#" class="nav-link ">
								<span class="title">Faq</span>
							</a>
						</li>
					</ul>
				</li>-->
				
				
			</ul>
		</div>
	</div>
</div>
<!-- end sidebar menu --> 