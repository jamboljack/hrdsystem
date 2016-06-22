<style>	
	#external-events .fc-event {
		margin: 5px 0;
		height: 10pt;		
		cursor: pointer;
	} 
</style>

<div class="page-container">
	<!-- BEGIN PAGE HEAD -->
	<div class="page-head">
		<div class="container">
			<!-- BEGIN PAGE TITLE -->
			<div class="page-title">
				<h1>Dashboard <small>Statistics & Reports</small></h1>
			</div>
			<!-- END PAGE TITLE -->				
		</div>
	</div>
	<!-- END PAGE HEAD -->
	<!-- BEGIN PAGE CONTENT -->
	<div class="page-content">
		<div class="container">
			<!-- BEGIN PAGE BREADCRUMB -->
			<ul class="page-breadcrumb breadcrumb">
				<li>
					<a href="<?php echo base_url(); ?>">Home</a><i class="fa fa-circle"></i>
				</li>
				<li class="active">
					 Dashboard
				</li>
			</ul>
			<!-- END PAGE BREADCRUMB -->

			<!-- BEGIN PAGE CONTENT INNER -->
			<div class="row margin-top-10">
				<div class="col-md-12 col-sm-12">					
					<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
						<div class="dashboard-stat blue-madison">
							<div class="visual">
								<i class="fa fa-users"></i>
							</div>
							<div class="details">
								<div class="number">
									<?php 
				                    $employee = count($dataemployee);
				                    echo number_format($employee);
				                    ?>
								</div>
								<div class="desc">
									 Total Employee
								</div>
							</div>
							<a class="more" href="<?php echo site_url('emp/employee') ;?>">
							View more <i class="m-icon-swapright m-icon-white"></i>
							</a>							
						</div>
					</div>
					<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
						<div class="dashboard-stat red-intense">
							<div class="visual">
								<i class="fa fa-share-square-o"></i>
							</div>
							<div class="details">
								<div class="number">
									<?php 
				                    $resign = count($dataresign);
				                    echo number_format($resign);
				                    ?>
								</div>
								<div class="desc">
									 Total Resign
								</div>
							</div>
							<a class="more" href="<?php echo site_url('emp/resign') ;?>">
							View more <i class="m-icon-swapright m-icon-white"></i>
							</a>							
						</div>
					</div>
					<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
						<div class="dashboard-stat green-haze">
							<div class="visual">
								<i class="fa fa-child"></i>
							</div>
							<div class="details">
								<div class="number">
									<?php 
				                    $student = count($datastudent);
				                    echo number_format($student);
				                    ?>
								</div>
								<div class="desc">
									Total Student
								</div>
							</div>
							<a class="more" href="<?php echo site_url('practice/student') ;?>">
							View more <i class="m-icon-swapright m-icon-white"></i>
							</a>							
						</div>
					</div>
					<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
						<div class="dashboard-stat purple-plum">
							<div class="visual">
								<i class="fa fa-user"></i>
							</div>
							<div class="details">
								<div class="number">
									<?php 
				                    $users = count($datausers);
				                    echo number_format($users);
				                    ?>
								</div>
								<div class="desc">
									 Total Users
								</div>
							</div>
							<a class="more" href="<?php echo site_url('sistem/users') ;?>">
							View more <i class="m-icon-swapright m-icon-white"></i>
							</a>							
						</div>
					</div>
					<!-- END PORTLET-->
				</div>				
			</div>

			<!-- Calendar -->
			<div class="row">
				<div class="col-md-12">
					<div class="portlet box red calendar">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-calendar"></i>Calendar
							</div>
						</div>
						<div class="portlet-body">
							<div class="row">									
								<div class="col-md-12 col-sm-12">
									<div id="calendar" class="has-toolbar"></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-md-6">
				<!-- BEGIN CHART PORTLET-->
					<div class="portlet light">
						<div class="portlet-title">
							<div class="caption">
								<i class="icon-bar-chart font-green-haze"></i>
								<span class="caption-subject bold uppercase font-green-haze"> GENDER CHART</span>
							</div>
							<div class="tools">
								<a href="javascript:;" class="collapse"></a>
								<a href="javascript:;" class="fullscreen"></a>								
							</div>
						</div>
						<div class="portlet-body">
							<div id="chart_gender" class="chart" style="height: 300px;"></div>
						</div>
					</div>
				<!-- END CHART PORTLET-->
				</div>
				<div class="col-md-6">
				<!-- BEGIN CHART PORTLET-->
					<div class="portlet light">
						<div class="portlet-title">
							<div class="caption">
								<i class="icon-bar-chart font-green-haze"></i>
								<span class="caption-subject bold uppercase font-green-haze"> EDUCATION CHART</span>
							</div>
							<div class="tools">
								<a href="javascript:;" class="collapse"></a>
								<a href="javascript:;" class="fullscreen"></a>								
							</div>
						</div>
						<div class="portlet-body">
							<div id="chart_education" class="chart" style="height: 300px;"></div>
						</div>
					</div>
				<!-- END CHART PORTLET-->
				</div>
			</div>

			<div class="row">
				<div class="col-md-6">
				<!-- BEGIN CHART PORTLET-->
					<div class="portlet light">
						<div class="portlet-title">
							<div class="caption">
								<i class="icon-bar-chart font-green-haze"></i>
								<span class="caption-subject bold uppercase font-green-haze"> RELIGION CHART</span>
							</div>
							<div class="tools">
								<a href="javascript:;" class="collapse"></a>
								<a href="javascript:;" class="fullscreen"></a>								
							</div>
						</div>
						<div class="portlet-body">
							<div id="chart_religion" class="chart" style="height: 300px;"></div>
						</div>
					</div>
				<!-- END CHART PORTLET-->
				</div>
				<div class="col-md-6">
				<!-- BEGIN CHART PORTLET-->
					<div class="portlet light">
						<div class="portlet-title">
							<div class="caption">
								<i class="icon-bar-chart font-green-haze"></i>
								<span class="caption-subject bold uppercase font-green-haze"> MARRIAGE CHART</span>
							</div>
							<div class="tools">
								<a href="javascript:;" class="collapse"></a>
								<a href="javascript:;" class="fullscreen"></a>								
							</div>
						</div>
						<div class="portlet-body">
							<div id="chart_marriage" class="chart" style="height: 300px;"></div>
						</div>
					</div>
				<!-- END CHART PORTLET-->
				</div>
			</div>			

		</div>			
		<!-- END PAGE CONTENT INNER -->
	</div>

</div>