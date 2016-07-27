<!DOCTYPE html>
<html lang="en" class="no-js">
<!-- BEGIN HEAD -->
<head>
<meta charset="utf-8">
<title>HRD OnWeb</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="width=device-width, initial-scale=1" name="viewport">
<meta name="description" content="Website HRD untuk Pendataan tentang HRD">    
<meta name="Developer" content="Jama' Rochmad M - 085640969727">
<meta name="Author" content="@HOM Kudus by Horison">
<meta name="robots" content="all" />
<meta name="robots" content="index, follow" />
<meta name="Googlebot" content="index,follow" />

<!-- BEGIN GLOBAL MANDATORY STYLES -->
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css">
<link href="<?php echo base_url(); ?>assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url(); ?>assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url(); ?>assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url(); ?>assets/global/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css"/>
<!-- END GLOBAL MANDATORY STYLES -->

<!-- BEGIN PAGE LEVEL STYLES DATATABLES -->
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/global/plugins/select2/select2.css"/>
<?php 
$mn   = $this->uri->segment(3);
$rp   = $this->uri->segment(1);
if (empty($mn) && $rp <> 'report') { 
?>
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/global/plugins/datatables/extensions/ColReorder/css/dataTables.colReorder.min.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.css"/>
<?php } ?>

<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/datepicker/css/datepicker.css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/datepicker/css/daterangepicker-bs3.css">

<!-- END PAGE LEVEL STYLES -->
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/bootstrap-fileupload/bootstrap-fileupload.css" />

<!-- Profil -->
<link href="<?php echo base_url(); ?>assets/admin/pages/css/profile.css" rel="stylesheet" type="text/css"/>
<!-- Error Page -->
<link href="<?php echo base_url(); ?>assets/admin/pages/css/error.css" rel="stylesheet" type="text/css"/>
<!-- Full Calendar -->
<link href="<?php echo base_url(); ?>assets/global/plugins/fullcalendar/fullcalendar.min.css" rel="stylesheet"/>
<!-- Time Picker -->
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/global/plugins/bootstrap-timepicker/css/bootstrap-timepicker.min.css"/>

<!-- BEGIN THEME STYLES -->
<!-- DOC: To use 'rounded corners' style just load 'components-rounded.css' stylesheet instead of 'components.css' in the below style tag -->
<link href="<?php echo base_url(); ?>assets/global/css/components-rounded.css" id="style_components" rel="stylesheet" type="text/css">
<link href="<?php echo base_url(); ?>assets/global/css/plugins.css" rel="stylesheet" type="text/css">
<link href="<?php echo base_url(); ?>assets/admin/layout3/css/layout.css" rel="stylesheet" type="text/css">
<link href="<?php echo base_url(); ?>assets/admin/layout3/css/themes/default.css" rel="stylesheet" type="text/css" id="style_color">
<link href="<?php echo base_url(); ?>assets/admin/layout3/css/custom.css" rel="stylesheet" type="text/css">
<!-- END THEME STYLES -->

<script src="<?php echo base_url(); ?>assets/global/plugins/jquery.min.js" type="text/javascript"></script>

<link rel="shortcut icon" href="<?php echo base_url(); ?>img/icon.png" />
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<!-- DOC: Apply "page-header-menu-fixed" class to set the mega menu fixed  -->
<!-- DOC: Apply "page-header-top-fixed" class to set the top menu fixed  -->
<body class="page-container-bg-solid page-header-top-fixed">
<!-- BEGIN HEADER -->
<?php echo $_header; ?>
<!-- END HEADER -->

<!-- BEGIN PAGE CONTAINER -->
<?php echo $content; ?>
<!-- END PAGE CONTAINER -->

<!-- BEGIN FOOTER -->
<?php echo $_footer; ?>
<!-- END FOOTER -->

<!-- BEGIN JAVASCRIPTS (Load javascripts at bottom, this will reduce page load time) -->
<!-- BEGIN CORE PLUGINS -->
<script src="<?php echo base_url(); ?>assets/global/plugins/jquery-migrate.min.js" type="text/javascript"></script>
<!-- IMPORTANT! Load jquery-ui.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
<script src="<?php echo base_url(); ?>assets/global/plugins/jquery-ui/jquery-ui.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/global/plugins/jquery.cokie.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/global/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>
<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script type="text/javascript" src="<?php echo base_url(); ?>assets/global/plugins/select2/select2.min.js"></script>

<?php 
$mn 	= $this->uri->segment(3);
$rp   = $this->uri->segment(1);
if (empty($mn) && $rp <> 'report') { 
?>
   <script type="text/javascript" src="<?php echo base_url(); ?>assets/global/plugins/datatables/media/js/jquery.dataTables.min.js"></script>
   <script type="text/javascript" src="<?php echo base_url(); ?>assets/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.js"></script>
   <script type="text/javascript" src="<?php echo base_url(); ?>assets/global/plugins/datatables/extensions/TableTools/js/dataTables.tableTools.min.js"></script>
   <script type="text/javascript" src="<?php echo base_url(); ?>assets/global/plugins/datatables/extensions/ColReorder/js/dataTables.colReorder.min.js"></script>
<?php } ?>

<!-- CKEditor -->
<script type="text/javascript" src="<?php echo base_url(); ?>assets/ckeditor/ckeditor.js" charset="utf-8"></script>
<!-- FileUpload -->
<script type="text/javascript" src="<?php echo base_url(); ?>assets/bootstrap-fileupload/bootstrap-fileupload.js"></script>
<!-- END PAGE LEVEL PLUGINS -->

<?php 
$mn = $this->uri->segment(3);
$isi = substr($mn, 0,3);
$rp = $this->uri->segment(1);
if ($isi == 'add' || $isi == 'edi' || $isi == 'sav' || $rp == 'report') {
?>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/datepicker/js/bootstrap-datepicker.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/datepicker/js/moment.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/datepicker/js/daterangepicker.js"></script>
<script src="<?php echo base_url(); ?>js/advanced-form-components.js"></script>
<?php } ?>

<script src="<?php echo base_url(); ?>assets/admin/pages/scripts/components-pickers.js"></script>
<script src="<?php echo base_url(); ?>assets/admin/pages/scripts/table-advanced.js"></script>
<script src="<?php echo base_url(); ?>assets/admin/pages/scripts/form-samples.js"></script>

<script type="text/javascript" src="<?php echo base_url(); ?>assets/global/plugins/bootstrap-timepicker/js/bootstrap-timepicker.min.js"></script>

<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="<?php echo base_url(); ?>assets/global/scripts/metronic.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/admin/layout3/scripts/layout.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/admin/layout3/scripts/demo.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/admin/pages/scripts/index3.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/admin/pages/scripts/components-editors.js"></script>
<script src="<?php echo base_url(); ?>assets/admin/pages/scripts/profile.js" type="text/javascript"></script>
<!-- END PAGE LEVEL SCRIPTS -->

<script>
jQuery(document).ready(function() {    
   Metronic.init(); // init metronic core componets
   Layout.init(); // init layout
   Demo.init(); // init demo(theme settings page)
   //QuickSidebar.init(); // init quick sidebar
   //Index.init(); // init index page
   //Tasks.initDashboardWidget(); // init tash dashboard widget
   TableAdvanced.init();   
   FormSamples.init();   
   ComponentsPickers.init();
   ComponentsEditors.init();
   Profile.init(); // init page demo
});
</script>
<!-- END JAVASCRIPTS -->

<?php if ($this->uri->segment(1) == 'home') { ?>
<script src="<?php echo base_url(); ?>assets/global/plugins/amcharts/amcharts/amcharts.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/global/plugins/amcharts/amcharts/pie.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/global/plugins/moment.min.js"></script>
<script src="<?php echo base_url(); ?>assets/global/plugins/jquery-ui.custom.min.js"></script>
<script src="<?php echo base_url(); ?>assets/global/plugins/fullcalendar/fullcalendar.min.js"></script>

<script>
/* Gender */
var chart = AmCharts.makeChart("chart_gender", {
   "type": "pie",
   "theme": "light",
   "fontFamily": 'Open Sans',         
   "color": '#888888',
   "dataProvider": [{
      "Gender": "Male",
      "Total": <?php echo $employee_male; ?>
   }, {
      "Gender": "Female",
      "Total": <?php echo $employee_female; ?>
   }],
      "valueField": "Total",
      "titleField": "Gender",
      "exportConfig": {
         menuItems: [{
         icon: Metronic.getGlobalPluginsPath() + "amcharts/amcharts/images/export.png",
         format: 'png'
      }]
   }
});

$('#chart_gender').closest('.portlet').find('.fullscreen').click(function() {
   chart.invalidateSize();
});

/* Education */
var chart = AmCharts.makeChart("chart_education", {
   "type": "pie",
   "theme": "light",
   "fontFamily": 'Open Sans',         
   "color": '#888',
   "dataProvider": <?php echo $render_education; ?>,
      "valueField": "Total",
      "titleField": "Education",
      "exportConfig": {
         menuItems: [{
         icon: Metronic.getGlobalPluginsPath() + "amcharts/amcharts/images/export.png",
         format: 'png'
      }]
   }
});

$('#chart_education').closest('.portlet').find('.fullscreen').click(function() {
   chart.invalidateSize();
});

/* Religion */
var chart = AmCharts.makeChart("chart_religion", {
   "type": "pie",
   "theme": "light",
   "fontFamily": 'Open Sans',         
   "color": '#888',
   "dataProvider": <?php echo $render_religion; ?>,
      "valueField": "Total",
      "titleField": "Religion",
      "exportConfig": {
         menuItems: [{
         icon: Metronic.getGlobalPluginsPath() + "amcharts/amcharts/images/export.png",
         format: 'png'
      }]
   }
});

$('#chart_religion').closest('.portlet').find('.fullscreen').click(function() {
   chart.invalidateSize();
});

/* Marriage */
var chart = AmCharts.makeChart("chart_marriage", {
   "type": "pie",
   "theme": "light",
   "fontFamily": 'Open Sans',         
   "color": '#888',
   "dataProvider": <?php echo $render_marriage; ?>,
      "valueField": "Total",
      "titleField": "Marriage",
      "exportConfig": {
         menuItems: [{
         icon: Metronic.getGlobalPluginsPath() + "amcharts/amcharts/images/export.png",
         format: 'png'
      }]
   }
});

$('#chart_marriage').closest('.portlet').find('.fullscreen').click(function() {
   chart.invalidateSize();
});

</script> 

<script>
/* initialize the calendar
-----------------------------------------------------------------*/
var h = {};
if (Metronic.isRTL()) {
   if ($('#calendar').parents(".portlet").width() <= 720) {
      $('#calendar').addClass("mobile");
      h = {
         right: 'title, prev, next',
         center: '',
         left: 'agendaDay, agendaWeek, month, today'
      };
   } else {
      $('#calendar').removeClass("mobile");
      h = {
         right: 'title',
         center: '',
         left: 'agendaDay, agendaWeek, month, today, prev,next'
      };
   }
} else {
   if ($('#calendar').parents(".portlet").width() <= 720) {
      $('#calendar').addClass("mobile");
      h = {
         left: 'title, prev, next',
         center: '',
         right: 'today,month,agendaWeek,agendaDay'
      };
   } else {
      $('#calendar').removeClass("mobile");
      h = {
         left: 'title',
         center: '',
         right: 'prev,next,today,month,agendaWeek,agendaDay'
      };
   }
}
$('#calendar').fullCalendar('destroy');
$('#calendar').fullCalendar({
   header: h,
      defaultView: 'month', 
      slotMinutes: 15,
      editable: true,
      droppable: true,
      drop: function(date, allday) {         
         var originalEventObject = $(this).data('eventObject');               
         var copiedEventObject = $.extend({}, originalEventObject);      
         copiedEventObject.start = date;         
         $('#calendar').fullCalendar('renderEvent', copiedEventObject, true);         
            if ($('#drop-remove').is(':checked')) {         
            $(this).remove();
         }
      },
      events: <?php echo $render_event; ?>
});
</script>
<?php } ?>

</body>
<!-- END BODY -->
</html>