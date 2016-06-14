<?php 
$uri = $this->uri->segment(2);

if (empty($uri)) {
	$dashboard   = 'active';
	$menu_1      = '';
	$master      = '';
	$blood       = '';
	$marriage    = '';
	$religion    = '';
	$education   = '';
	$relation    = '';
	$status      = '';
	$department  = '';
	$position    = '';
	$data        = '';
	$employee    = '';
	$record      = '';
	$kesehatan   = '';
	$tenaga      = '';
	$rewpun      = '';
	$rewtype     = '';
	$rewtran     = '';
	$puntype     = '';
	$puntran     = '';
	$mutation    = '';
	$resign      = '';
	$mail        = '';
	$mail_inbox  = '';
	$sender      = '';
	$inbox       = '';
	$intern_mail = '';
	$decree      = '';
	$memo        = '';
} elseif ($uri=='blood') {
	$dashboard   = '';
	$menu_1      = 'active';
	$master      = 'active';
	$blood       = 'active';
	$marriage    = '';
	$religion    = '';
	$education   = '';
	$relation    = '';
	$status      = '';
	$department  = '';
	$position    = '';
	$data        = '';
	$employee    = '';
	$record      = '';
	$kesehatan   = '';
	$tenaga      = '';
	$rewpun      = '';
	$rewtype     = '';
	$rewtran     = '';
	$puntype     = '';
	$puntran     = '';
	$mutation    = '';
	$resign      = '';
	$mail        = '';
	$mail_inbox  = '';
	$sender      = '';
	$inbox       = '';
	$intern_mail = '';
	$decree      = '';
	$memo        = '';
} elseif ($uri=='marriage') {
	$dashboard   = '';
	$menu_1      = 'active';
	$master      = 'active';
	$blood       = '';
	$marriage    = 'active';
	$religion    = '';
	$education   = '';
	$relation    = '';
	$status      = '';
	$department  = '';
	$position    = '';
	$data        = '';
	$employee    = '';
	$record      = '';
	$kesehatan   = '';
	$tenaga      = '';
	$rewpun      = '';
	$rewtype     = '';
	$rewtran     = '';
	$puntype     = '';
	$puntran     = '';
	$mutation    = '';
	$resign      = '';
	$mail        = '';
	$mail_inbox  = '';
	$sender      = '';
	$inbox       = '';
	$intern_mail = '';
	$decree      = '';
	$memo        = '';
} elseif ($uri=='religion') {
	$dashboard   = '';
	$menu_1      = 'active';
	$master      = 'active';
	$blood       = '';
	$marriage    = '';
	$religion    = 'active';
	$education   = '';
	$relation    = '';
	$status      = '';
	$department  = '';
	$position    = '';
	$data        = '';
	$employee    = '';
	$record      = '';
	$kesehatan   = '';
	$tenaga      = '';
	$rewpun      = '';
	$rewtype     = '';
	$rewtran     = '';
	$puntype     = '';
	$puntran     = '';
	$mutation    = '';
	$resign      = '';
	$mail        = '';
	$mail_inbox  = '';
	$sender      = '';
	$inbox       = '';
	$intern_mail = '';
	$decree      = '';
	$memo        = '';
} elseif ($uri=='education') {
	$dashboard   = '';
	$menu_1      = 'active';
	$master      = 'active';
	$blood       = '';
	$marriage    = '';
	$religion    = '';
	$education   = 'active';
	$relation    = '';
	$status      = '';
	$department  = '';
	$position    = '';
	$data        = '';
	$employee    = '';
	$record      = '';
	$kesehatan   = '';
	$tenaga      = '';
	$rewpun      = '';
	$rewtype     = '';
	$rewtran     = '';
	$puntype     = '';
	$puntran     = '';
	$mutation    = '';
	$resign      = '';
	$mail        = '';
	$mail_inbox  = '';
	$sender      = '';
	$inbox       = '';
	$intern_mail = '';
	$decree      = '';
	$memo        = '';
} elseif ($uri=='relation') {
	$dashboard   = '';
	$menu_1      = 'active';
	$master      = 'active';
	$blood       = '';
	$marriage    = '';
	$religion    = '';
	$education   = '';
	$relation    = 'active';
	$status      = '';
	$department  = '';
	$position    = '';
	$data        = '';
	$employee    = '';
	$record      = '';
	$kesehatan   = '';
	$tenaga      = '';
	$rewpun      = '';
	$rewtype     = '';
	$rewtran     = '';
	$puntype     = '';
	$puntran     = '';
	$mutation    = '';
	$resign      = '';
	$mail        = '';
	$mail_inbox  = '';
	$sender      = '';
	$inbox       = '';
	$intern_mail = '';
	$decree      = '';
	$memo        = '';
} elseif ($uri=='status') {
	$dashboard   = '';
	$menu_1      = 'active';
	$master      = 'active';
	$blood       = '';
	$marriage    = '';
	$religion    = '';
	$education   = '';
	$relation    = '';
	$status      = 'active';
	$department  = '';
	$position    = '';
	$data        = '';
	$employee    = '';
	$record      = '';
	$kesehatan   = '';
	$tenaga      = '';
	$rewpun      = '';
	$rewtype     = '';
	$rewtran     = '';
	$puntype     = '';
	$puntran     = '';
	$mutation    = '';
	$resign      = '';
	$mail        = '';
	$mail_inbox  = '';
	$sender      = '';
	$inbox       = '';
	$intern_mail = '';
	$decree      = '';
	$memo        = '';
} elseif ($uri=='department') {
	$dashboard   = '';
	$menu_1      = 'active';
	$master      = 'active';
	$blood       = '';
	$marriage    = '';
	$religion    = '';
	$education   = '';
	$relation    = '';
	$status      = '';
	$department  = 'active';
	$position    = '';
	$data        = '';
	$employee    = '';
	$record      = '';
	$kesehatan   = '';
	$tenaga      = '';
	$rewpun      = '';
	$rewtype     = '';
	$rewtran     = '';
	$puntype     = '';
	$puntran     = '';
	$mutation    = '';
	$resign      = '';
	$mail        = '';
	$mail_inbox  = '';
	$sender      = '';
	$inbox       = '';
	$intern_mail = '';
	$decree      = '';
	$memo        = '';
} elseif ($uri=='position') {
	$dashboard   = '';
	$menu_1      = 'active';
	$master      = 'active';
	$blood       = '';
	$marriage    = '';
	$religion    = '';
	$education   = '';
	$relation    = '';
	$status      = '';
	$department  = '';
	$position    = 'active';
	$data        = '';
	$employee    = '';
	$record      = '';
	$kesehatan   = '';
	$tenaga      = '';
	$rewpun      = '';
	$rewtype     = '';
	$rewtran     = '';
	$puntype     = '';
	$puntran     = '';
	$mutation    = '';
	$resign      = '';
	$mail        = '';
	$mail_inbox  = '';
	$sender      = '';
	$inbox       = '';
	$intern_mail = '';
	$decree      = '';
	$memo        = '';
} elseif ($uri=='employee') {
	$dashboard   = '';
	$menu_1      = 'active';
	$master      = '';
	$blood       = '';
	$marriage    = '';
	$religion    = '';
	$education   = '';
	$relation    = '';
	$status      = '';
	$department  = '';
	$position    = '';
	$data        = 'active';
	$employee    = 'active';
	$record      = '';
	$kesehatan   = '';
	$tenaga      = '';
	$rewpun      = '';
	$rewtype     = '';
	$rewtran     = '';
	$puntype     = '';
	$puntran     = '';
	$mutation    = '';
	$resign      = '';
	$mail        = '';
	$mail_inbox  = '';
	$sender      = '';
	$inbox       = '';
	$intern_mail = '';
	$decree      = '';
	$memo        = '';
} elseif ($uri=='record') {
	$dashboard   = '';
	$menu_1      = 'active';
	$master      = '';
	$blood       = '';
	$marriage    = '';
	$religion    = '';
	$education   = '';
	$relation    = '';
	$status      = '';
	$department  = '';
	$position    = '';
	$data        = 'active';
	$employee    = '';
	$record      = 'active';
	$kesehatan   = '';
	$tenaga      = '';
	$rewpun      = '';
	$rewtype     = '';
	$rewtran     = '';
	$puntype     = '';
	$puntran     = '';
	$mutation    = '';
	$resign      = '';
	$mail        = '';
	$mail_inbox  = '';
	$sender      = '';
	$inbox       = '';
	$intern_mail = '';
	$decree      = '';
	$memo        = '';
} elseif ($uri=='healthy_insurance') {
	$dashboard   = '';
	$menu_1      = 'active';
	$master      = '';
	$blood       = '';
	$marriage    = '';
	$religion    = '';
	$education   = '';
	$relation    = '';
	$status      = '';
	$department  = '';
	$position    = '';
	$data        = 'active';
	$employee    = '';
	$record      = '';
	$kesehatan   = 'active';
	$tenaga      = '';
	$rewpun      = '';
	$rewtype     = '';
	$rewtran     = '';
	$puntype     = '';
	$puntran     = '';
	$mutation    = '';
	$resign      = '';
	$mail        = '';
	$mail_inbox  = '';
	$sender      = '';
	$inbox       = '';
	$intern_mail = '';
	$decree      = '';
	$memo        = '';
} elseif ($uri=='employment_insurance') {
	$dashboard   = '';
	$menu_1      = 'active';
	$master      = '';
	$blood       = '';
	$marriage    = '';
	$religion    = '';
	$education   = '';
	$relation    = '';
	$status      = '';
	$department  = '';
	$position    = '';
	$data        = 'active';
	$employee    = '';
	$record      = '';
	$kesehatan   = '';
	$tenaga      = 'active';
	$rewpun      = '';
	$rewtype     = '';
	$rewtran     = '';
	$puntype     = '';
	$puntran     = '';
	$mutation    = '';
	$resign      = '';
	$mail        = '';
	$mail_inbox  = '';
	$sender      = '';
	$inbox       = '';
	$intern_mail = '';
	$decree      = '';
	$memo        = '';
} elseif ($uri=='reward') {
	$dashboard   = '';
	$menu_1      = 'active';
	$master      = '';
	$blood       = '';
	$marriage    = '';
	$religion    = '';
	$education   = '';
	$relation    = '';
	$status      = '';
	$department  = '';
	$position    = '';
	$data        = '';
	$employee    = '';
	$record      = '';
	$kesehatan   = '';
	$tenaga      = '';
	$rewpun      = 'active';
	$rewtype     = 'active';
	$rewtran     = '';
	$puntype     = '';
	$puntran     = '';
	$mutation    = '';
	$resign      = '';
	$mail        = '';
	$mail_inbox  = '';
	$sender      = '';
	$inbox       = '';
	$intern_mail = '';
	$decree      = '';
	$memo        = '';
} elseif ($uri=='transaction_reward') {
	$dashboard   = '';
	$menu_1      = 'active';
	$master      = '';
	$blood       = '';
	$marriage    = '';
	$religion    = '';
	$education   = '';
	$relation    = '';
	$status      = '';
	$department  = '';
	$position    = '';
	$data        = '';
	$employee    = '';
	$record      = '';
	$kesehatan   = '';
	$tenaga      = '';
	$rewpun      = 'active';
	$rewtype     = '';
	$rewtran     = 'active';
	$puntype     = '';
	$puntran     = '';
	$mutation    = '';
	$resign      = '';
	$mail        = '';
	$mail_inbox  = '';
	$sender      = '';
	$inbox       = '';
	$intern_mail = '';
	$decree      = '';
	$memo        = '';
} elseif ($uri=='punishment') {
	$dashboard   = '';
	$menu_1      = 'active';
	$master      = '';
	$blood       = '';
	$marriage    = '';
	$religion    = '';
	$education   = '';
	$relation    = '';
	$status      = '';
	$department  = '';
	$position    = '';
	$data        = '';
	$employee    = '';
	$record      = '';
	$kesehatan   = '';
	$tenaga      = '';
	$rewpun      = 'active';
	$rewtype     = '';
	$rewtran     = '';
	$puntype     = 'active';
	$puntran     = '';
	$mutation    = '';
	$resign      = '';
	$mail        = '';
	$mail_inbox  = '';
	$sender      = '';
	$inbox       = '';
	$intern_mail = '';
	$decree      = '';
	$memo        = '';
} elseif ($uri=='transaction_punishment') {
	$dashboard   = '';
	$menu_1      = 'active';
	$master      = '';
	$blood       = '';
	$marriage    = '';
	$religion    = '';
	$education   = '';
	$relation    = '';
	$status      = '';
	$department  = '';
	$position    = '';
	$data        = '';
	$employee    = '';
	$record      = '';
	$kesehatan   = '';
	$tenaga      = '';
	$rewpun      = 'active';
	$rewtype     = '';
	$rewtran     = '';
	$puntype     = '';
	$puntran     = 'active';
	$mutation    = '';
	$resign      = '';
	$mail        = '';
	$mail_inbox  = '';
	$sender      = '';
	$inbox       = '';
	$intern_mail = '';
	$decree      = '';
	$memo        = '';
} elseif ($uri=='mutation') {
	$dashboard   = '';
	$menu_1      = 'active';
	$master      = '';
	$blood       = '';
	$marriage    = '';
	$religion    = '';
	$education   = '';
	$relation    = '';
	$status      = '';
	$department  = '';
	$position    = '';
	$data        = '';
	$employee    = '';
	$record      = '';
	$kesehatan   = '';
	$tenaga      = '';
	$rewpun      = '';
	$rewtype     = '';
	$rewtran     = '';
	$puntype     = '';
	$puntran     = '';
	$mutation    = 'active';
	$resign      = '';
	$mail        = '';
	$mail_inbox  = '';
	$sender      = '';
	$inbox       = '';
	$intern_mail = '';
	$decree      = '';
	$memo        = '';
} elseif ($uri=='resign') {
	$dashboard   = '';
	$menu_1      = 'active';
	$master      = '';
	$blood       = '';
	$marriage    = '';
	$religion    = '';
	$education   = '';
	$relation    = '';
	$status      = '';
	$department  = '';
	$position    = '';
	$data        = '';
	$employee    = '';
	$record      = '';
	$kesehatan   = '';
	$tenaga      = '';
	$rewpun      = '';
	$rewtype     = '';
	$rewtran     = '';
	$puntype     = '';
	$puntran     = '';
	$mutation    = '';
	$resign      = 'active';
	$mail        = '';
	$mail_inbox  = '';
	$sender      = '';
	$inbox       = '';
	$intern_mail = '';
	$decree      = '';
	$memo        = '';
} elseif ($uri=='sender') {
	$dashboard   = '';
	$menu_1      = '';
	$master      = '';
	$blood       = '';
	$marriage    = '';
	$religion    = '';
	$education   = '';
	$relation    = '';
	$status      = '';
	$department  = '';
	$position    = '';
	$data        = '';
	$employee    = '';
	$record      = '';
	$kesehatan   = '';
	$tenaga      = '';
	$rewpun      = '';
	$rewtype     = '';
	$rewtran     = '';
	$puntype     = '';
	$puntran     = '';
	$mutation    = '';
	$resign      = '';
	$mail        = 'active';
	$mail_inbox  = 'active';
	$sender      = 'active';
	$inbox       = '';
	$intern_mail = '';
	$decree      = '';
	$memo        = '';
} elseif ($uri=='inbox') {
	$dashboard   = '';
	$menu_1      = '';
	$master      = '';
	$blood       = '';
	$marriage    = '';
	$religion    = '';
	$education   = '';
	$relation    = '';
	$status      = '';
	$department  = '';
	$position    = '';
	$data        = '';
	$employee    = '';
	$record      = '';
	$kesehatan   = '';
	$tenaga      = '';
	$rewpun      = '';
	$rewtype     = '';
	$rewtran     = '';
	$puntype     = '';
	$puntran     = '';
	$mutation    = '';
	$resign      = '';
	$mail        = 'active';
	$mail_inbox  = 'active';
	$sender      = '';
	$inbox       = 'active';
	$intern_mail = '';
	$decree      = '';
	$memo        = '';
} elseif ($uri=='decree') {
	$dashboard   = '';
	$menu_1      = '';
	$master      = '';
	$blood       = '';
	$marriage    = '';
	$religion    = '';
	$education   = '';
	$relation    = '';
	$status      = '';
	$department  = '';
	$position    = '';
	$data        = '';
	$employee    = '';
	$record      = '';
	$kesehatan   = '';
	$tenaga      = '';
	$rewpun      = '';
	$rewtype     = '';
	$rewtran     = '';
	$puntype     = '';
	$puntran     = '';
	$mutation    = '';
	$resign      = '';
	$mail        = 'active';
	$mail_inbox  = '';
	$sender      = '';
	$inbox       = '';
	$intern_mail = 'active';
	$decree      = 'active';
	$memo        = '';
} elseif ($uri=='memo') {
	$dashboard   = '';
	$menu_1      = '';
	$master      = '';
	$blood       = '';
	$marriage    = '';
	$religion    = '';
	$education   = '';
	$relation    = '';
	$status      = '';
	$department  = '';
	$position    = '';
	$data        = '';
	$employee    = '';
	$record      = '';
	$kesehatan   = '';
	$tenaga      = '';
	$rewpun      = '';
	$rewtype     = '';
	$rewtran     = '';
	$puntype     = '';
	$puntran     = '';
	$mutation    = '';
	$resign      = '';
	$mail        = 'active';
	$mail_inbox  = '';
	$sender      = '';
	$inbox       = '';
	$intern_mail = 'active';
	$decree      = '';
	$memo        = 'active';
} else {
	$dashboard   = 'active';
	$menu_1      = '';
	$master      = '';
	$blood       = '';
	$marriage    = '';
	$religion    = '';
	$education   = '';
	$relation    = '';
	$status      = '';
	$department  = '';
	$position    = '';
	$data        = '';
	$employee    = '';
	$record      = '';
	$kesehatan   = '';
	$tenaga      = '';
	$rewpun      = '';
	$rewtype     = '';
	$rewtran     = '';
	$puntype     = '';
	$puntran     = '';
	$mutation    = '';
	$resign      = '';
	$mail        = '';
	$mail_inbox  = '';
	$sender      = '';
	$inbox       = '';
	$intern_mail = '';
	$decree      = '';
	$memo        = '';
}
?>
<div class="page-header">
	<!-- BEGIN HEADER TOP -->
	<div class="page-header-top">
		<div class="container">
			<!-- BEGIN LOGO -->
			<div class="page-logo">
				<a href="<?php echo base_url(); ?>"><img src="<?php echo base_url(); ?>img/logo-home.png" alt="logo" class="logo-default"></a>
			</div>
			<!-- END LOGO -->
			
			<!-- BEGIN RESPONSIVE MENU TOGGLER -->
			<a href="javascript:;" class="menu-toggler"></a>
			<!-- END RESPONSIVE MENU TOGGLER -->
			<!-- BEGIN TOP NAVIGATION MENU -->
			<div class="top-menu">
				<ul class="nav navbar-nav pull-right">								
					<!-- BEGIN USER LOGIN DROPDOWN -->
					<li class="dropdown dropdown-user dropdown-dark">
						<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
						<img alt="" class="img-circle" src="<?php echo base_url(); ?>assets/admin/layout3/img/avatar9.jpg">
						<span class="username username-hide-mobile"><?php echo $this->session->userdata('nama'); ?></span>
						</a>
						<ul class="dropdown-menu dropdown-menu-default">
							<li>
								<a href="<?php echo site_url('profil'); ?>">
								<i class="icon-user"></i> My Profile </a>
							</li>							
							<li class="divider">
							</li>
							<li>
								<a href="<?php echo site_url('lock_system'); ?>">
								<i class="icon-lock"></i> Lock Screen </a>
							</li>
							<li>
								<a href="<?php echo site_url('login/logout'); ?>">
								<i class="icon-key"></i> Log Out </a>
							</li>
						</ul>
					</li>
					<!-- END USER LOGIN DROPDOWN -->
					<!-- BEGIN USER LOGIN DROPDOWN -->
					<!--<li class="dropdown dropdown-extended quick-sidebar-toggler">
	                    <span class="sr-only">Toggle Quick Sidebar</span>
	                    <i class="icon-logout"></i>
	                </li> -->
					<!-- END USER LOGIN DROPDOWN -->
				</ul>
			</div>
			<!-- END TOP NAVIGATION MENU -->
		</div>
	</div>
	<!-- END HEADER TOP -->
	<!-- BEGIN HEADER MENU -->
	<div class="page-header-menu">
		<div class="container">
			<!-- BEGIN HEADER SEARCH BOX -->
			<form class="search-form" action="extra_search.html" method="GET">
				<div class="input-group">
					<input type="text" class="form-control" placeholder="Search" name="query">
					<span class="input-group-btn">
					<a href="javascript:;" class="btn submit"><i class="icon-magnifier"></i></a>
					</span>
				</div>
			</form>
			<!-- END HEADER SEARCH BOX -->
			<!-- BEGIN MEGA MENU -->
			<!-- DOC: Apply "hor-menu-light" class after the "hor-menu" class below to have a horizontal menu with white background -->
			<!-- DOC: Remove data-hover="dropdown" and data-close-others="true" attributes below to disable the dropdown opening on mouse hover -->
			<div class="hor-menu ">
				<ul class="nav navbar-nav">
					<li class="<?php echo $dashboard; ?>">
						<a href="<?php echo base_url(); ?>">Dashboard</a>
					</li>					
					<li class="menu-dropdown classic-menu-dropdown <?php echo $menu_1; ?>">
						<a data-hover="megamenu-dropdown" data-close-others="true" data-toggle="dropdown" href="javascript:;">
						Employee <i class="fa fa-angle-down"></i>
						</a>
						<ul class="dropdown-menu pull-left">
							<li class="<?php echo $master; ?> dropdown-submenu">
								<a href="#">
								<i class="icon-folder-alt"></i>
								Master Data </a>
								<ul class="dropdown-menu">									
									<li class="<?php echo $blood; ?>">
										<a href="<?php echo site_url('master/blood'); ?>">
										Blood </a>
									</li>
									<li class="<?php echo $marriage; ?>">
										<a href="<?php echo site_url('master/marriage'); ?>">
										Marriage </a>
									</li>									
									<li class="<?php echo $religion; ?>">
										<a href="<?php echo site_url('master/religion'); ?>">
										Religion </a>
									</li>
									<li class="<?php echo $education; ?>">
										<a href="<?php echo site_url('master/education'); ?>">
										Education </a>
									</li>
									<li class="<?php echo $relation; ?>">
										<a href="<?php echo site_url('master/relation'); ?>">
										Relation </a>
									</li>
									<li class="<?php echo $status; ?>">
										<a href="<?php echo site_url('master/status'); ?>">
										Status </a>
									</li>
									<li class="<?php echo $department; ?>">
										<a href="<?php echo site_url('master/department'); ?>">
										Department </a>
									</li>
									<li class="<?php echo $position; ?>">
										<a href="<?php echo site_url('master/position'); ?>">
										Position </a>
									</li>
								</ul>
							</li>
							<li class="<?php echo $data; ?> dropdown-submenu">
								<a href="#">
								<i class="icon-users"></i>
								Data Employee </a>
								<ul class="dropdown-menu">
									<li class="<?php echo $employee; ?>">
										<a href="<?php echo site_url('emp/employee'); ?>">
										All Employee
										</a>
									</li>									
									<li class="<?php echo $record; ?>">
										<a href="<?php echo site_url('emp/record'); ?>">
										Record Employee
										</a>
									</li>
									<li class="<?php echo $kesehatan; ?>">
										<a href="<?php echo site_url('emp/healthy_insurance'); ?>">
										Healthy Insurance
										</a>
									</li>
									<li class="<?php echo $tenaga; ?>">
										<a href="<?php echo site_url('emp/employment_insurance'); ?>">
										Employment Insurance
										</a>
									</li>								
								</ul>								
							</li>
							<li class="<?php echo $rewpun; ?> dropdown-submenu">
								<a href="#">
								<i class="icon-trophy"></i>
								Reward & Punishment </a>
								<ul class="dropdown-menu">
									<li class="<?php echo $rewtype; ?>">
										<a href="<?php echo site_url('rew-pun/reward'); ?>">
										Reward Type
										</a>
									</li>
									<li class="<?php echo $rewtran; ?>">
										<a href="<?php echo site_url('rew-pun/transaction_reward'); ?>">
										Transaction Reward
										</a>
									</li>
									<li class="<?php echo $puntype; ?>">
										<a href="<?php echo site_url('rew-pun/punishment'); ?>">
										Punishment Type
										</a>
									</li>
									<li class="<?php echo $puntran; ?>">
										<a href="<?php echo site_url('rew-pun/transaction_punishment'); ?>">
										Transaction Punishment
										</a>
									</li>								
								</ul>
							</li>
							<li class="<?php echo $mutation; ?>">
								<a href="<?php echo site_url('emp/mutation'); ?>">
								<i class="icon-shuffle"></i>
								Mutation </a>								
							</li>
							<li class="<?php echo $resign; ?>">
								<a href="<?php echo site_url('emp/resign'); ?>">
								<i class="icon-share-alt"></i>
								Resign </a>								
							</li>
						</ul>
					</li>
					<li class="menu-dropdown classic-menu-dropdown <?php echo $mail; ?>">
						<a data-hover="megamenu-dropdown" data-close-others="true" data-toggle="dropdown" href="javascript:;">
						Mail Administration <i class="fa fa-angle-down"></i>
						</a>
						<ul class="dropdown-menu pull-left">
							<li class="<?php echo $mail_inbox; ?> dropdown-submenu">
								<a href="#">
								<i class="icon-envelope-open"></i>
								Mail Inbox </a>
								<ul class="dropdown-menu">
									<li class="<?php echo $sender; ?>">
										<a href="<?php echo site_url('mail/sender'); ?>">
										Sender </a>
									</li>
									<li class="<?php echo $inbox; ?>">
										<a href="<?php echo site_url('mail/inbox'); ?>">
										Data Inbox </a>
									</li>									
								</ul>
							</li>
							<li class="<?php echo $intern_mail; ?> dropdown-submenu">
								<a href="#">
								<i class="icon-envelope-letter"></i>
								Internal Mail </a>
								<ul class="dropdown-menu">
									<li class="<?php echo $decree; ?>">
										<a href="<?php echo site_url('mail/decree'); ?>">
										Decree (Surat Keputusan) </a>
									</li>
									<li class="<?php echo $memo; ?>">
										<a href="<?php echo site_url('mail/memo'); ?>">
										Memo Internal </a>
									</li>									
								</ul>
							</li>							
						</ul>
					</li>
					<li class="menu-dropdown classic-menu-dropdown ">
						<a data-hover="megamenu-dropdown" data-close-others="true" data-toggle="dropdown" href="javascript:;">
						PraKerin <i class="fa fa-angle-down"></i>
						</a>
						<ul class="dropdown-menu pull-left">
							<li class=" dropdown-submenu">
								<a href=":;">
								<i class="icon-briefcase"></i>
								Data PraKerin </a>
								<ul class="dropdown-menu">
									<li class=" ">
										<a href="<?php echo site_url('proposal'); ?>">
										Proposal </a>
									</li>
									<li class=" ">
										<a href="<?php echo site_url('prakerin'); ?>">
										List PraKerin </a>
									</li>									
								</ul>
							</li>							
						</ul>
					</li>					
					<li class="menu-dropdown classic-menu-dropdown ">
						<a data-hover="megamenu-dropdown" data-close-others="true" data-toggle="dropdown" href="javascript:;">
						System <i class="fa fa-angle-down"></i>
						</a>
						<ul class="dropdown-menu pull-left">
							<li class="">
								<a href=":;">
								<i class="icon-user"></i>
								Users 
								</a>								
							</li>							
						</ul>
					</li>
				</ul>
			</div>
			<!-- END MEGA MENU -->
		</div>
	</div>
	<!-- END HEADER MENU -->
</div>