<?php 
$uri  = $this->uri->segment(2);
$uri2 = $this->uri->segment(1);

if (empty($uri) && empty($uri2)) {
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
	$absent      = '';
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
	$company      = '';
	$inbox       = '';
	$outbox      = '';
	$intern_mail = '';
	$decree      = '';
	$memo        = '';
	$practice    = '';
	$school      = '';
	$proposal    = '';
	$student     = '';
	$system      = '';
	$users       = '';
	$event       = '';
	$report      = '';
	$list1		 = '';
	$listmaster  = '';
	$list2		 = '';	
	$listemployee= '';
	$listdetail  = '';
	$liststatus  = '';
	$list3		 = '';	
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
	$absent      = '';
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
	$company      = '';
	$inbox       = '';
	$outbox      = '';
	$intern_mail = '';
	$decree      = '';
	$memo        = '';
	$practice    = '';
	$school      = '';
	$proposal    = '';
	$student     = '';
	$system      = '';
	$users       = '';
	$event       = '';
	$report      = '';
	$list1		 = '';
	$listmaster  = '';
	$list2		 = '';	
	$listemployee= '';
	$listdetail  = '';
	$liststatus  = '';
	$list3		 = '';	
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
	$absent      = '';
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
	$company      = '';
	$inbox       = '';
	$outbox      = '';
	$intern_mail = '';
	$decree      = '';
	$memo        = '';
	$practice    = '';
	$school      = '';
	$proposal    = '';
	$student     = '';
	$system      = '';
	$users       = '';
	$event       = '';
	$report      = '';
	$list1		 = '';
	$listmaster  = '';
	$list2		 = '';	
	$listemployee= '';	
	$listdetail  = '';
	$liststatus  = '';
	$list3		 = '';	
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
	$absent      = '';
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
	$company      = '';
	$inbox       = '';
	$outbox      = '';
	$intern_mail = '';
	$decree      = '';
	$memo        = '';
	$practice    = '';
	$school      = '';
	$proposal    = '';
	$student     = '';
	$system      = '';
	$users       = '';
	$event       = '';
	$report      = '';
	$list1		 = '';
	$listmaster  = '';
	$list2		 = '';	
	$listemployee= '';
	$listdetail  = '';
	$liststatus  = '';
	$list3		 = '';	
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
	$absent      = '';
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
	$company      = '';
	$inbox       = '';
	$outbox      = '';
	$intern_mail = '';
	$decree      = '';
	$memo        = '';
	$practice    = '';
	$school      = '';
	$proposal    = '';
	$student     = '';
	$system      = '';
	$users       = '';
	$event       = '';
	$report      = '';
	$list1		 = '';
	$listmaster  = '';
	$list2		 = '';	
	$listemployee= '';
	$listdetail  = '';
	$liststatus  = '';
	$list3		 = '';	
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
	$absent      = '';
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
	$company      = '';
	$inbox       = '';
	$outbox      = '';
	$intern_mail = '';
	$decree      = '';
	$memo        = '';
	$practice    = '';
	$school      = '';
	$proposal    = '';
	$student     = '';
	$system      = '';
	$users       = '';
	$event       = '';
	$report      = '';
	$list1		 = '';
	$listmaster  = '';
	$list2		 = '';	
	$listemployee= '';
	$listdetail  = '';
	$liststatus  = '';
	$list3		 = '';	
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
	$absent      = '';
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
	$company      = '';
	$inbox       = '';
	$outbox      = '';
	$intern_mail = '';
	$decree      = '';
	$memo        = '';
	$practice    = '';
	$school      = '';
	$proposal    = '';
	$student     = '';
	$system      = '';
	$users       = '';
	$event       = '';
	$report      = '';
	$list1		 = '';
	$listmaster  = '';
	$list2		 = '';	
	$listemployee= '';
	$listdetail  = '';
	$liststatus  = '';
	$list3		 = '';	
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
	$absent      = '';
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
	$company      = '';
	$inbox       = '';
	$outbox      = '';
	$intern_mail = '';
	$decree      = '';
	$memo        = '';
	$practice    = '';
	$school      = '';
	$proposal    = '';
	$student     = '';
	$system      = '';
	$users       = '';
	$event       = '';
	$report      = '';
	$list1		 = '';
	$listmaster  = '';
	$list2		 = '';	
	$listemployee= '';
	$listdetail  = '';
	$liststatus  = '';
	$list3		 = '';	
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
	$absent      = '';
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
	$company      = '';
	$inbox       = '';
	$outbox      = '';
	$intern_mail = '';
	$decree      = '';
	$memo        = '';
	$practice    = '';
	$school      = '';
	$proposal    = '';
	$student     = '';
	$system      = '';
	$users       = '';
	$event       = '';
	$report      = '';
	$list1		 = '';
	$listmaster  = '';
	$list2		 = '';	
	$listemployee= '';
	$listdetail  = '';
	$liststatus  = '';
	$list3		 = '';	
} elseif ($uri=='absent') {
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
	$position    = '';
	$absent      = 'active';
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
	$company      = '';
	$inbox       = '';
	$outbox      = '';
	$intern_mail = '';
	$decree      = '';
	$memo        = '';
	$practice    = '';
	$school      = '';
	$proposal    = '';
	$student     = '';
	$system      = '';
	$users       = '';
	$event       = '';
	$report      = '';
	$list1		 = '';
	$listmaster  = '';
	$list2		 = '';	
	$listemployee= '';
	$listdetail  = '';
	$liststatus  = '';
	$list3		 = '';	
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
	$absent      = '';
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
	$company      = '';
	$inbox       = '';
	$outbox      = '';
	$intern_mail = '';
	$decree      = '';
	$memo        = '';
	$practice    = '';
	$school      = '';
	$proposal    = '';
	$student     = '';
	$system      = '';
	$users       = '';
	$event       = '';
	$report      = '';
	$list1		 = '';
	$listmaster  = '';
	$list2		 = '';	
	$listemployee= '';
	$listdetail  = '';
	$liststatus  = '';
	$list3		 = '';	
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
	$absent      = '';
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
	$company      = '';
	$inbox       = '';
	$outbox      = '';
	$intern_mail = '';
	$decree      = '';
	$memo        = '';
	$practice    = '';
	$school      = '';
	$proposal    = '';
	$student     = '';
	$system      = '';
	$users       = '';
	$event       = '';
	$report      = '';
	$list1		 = '';
	$listmaster  = '';
	$list2		 = '';	
	$listemployee= '';
	$listdetail  = '';
	$liststatus  = '';
	$list3		 = '';	
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
	$absent      = '';
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
	$company      = '';
	$inbox       = '';
	$outbox      = '';
	$intern_mail = '';
	$decree      = '';
	$memo        = '';
	$practice    = '';
	$school      = '';
	$proposal    = '';
	$student     = '';
	$system      = '';
	$users       = '';
	$event       = '';
	$report      = '';
	$list1		 = '';
	$listmaster  = '';
	$list2		 = '';	
	$listemployee= '';
	$listdetail  = '';
	$liststatus  = '';
	$list3		 = '';	
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
	$absent      = '';
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
	$company      = '';
	$inbox       = '';
	$outbox      = '';
	$intern_mail = '';
	$decree      = '';
	$memo        = '';
	$practice    = '';
	$school      = '';
	$proposal    = '';
	$student     = '';
	$system      = '';
	$users       = '';
	$event       = '';
	$report      = '';
	$list1		 = '';
	$listmaster  = '';
	$list2		 = '';	
	$listemployee= '';
	$listdetail  = '';
	$liststatus  = '';
	$list3		 = '';	
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
	$absent      = '';
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
	$company      = '';
	$inbox       = '';
	$outbox      = '';
	$intern_mail = '';
	$decree      = '';
	$memo        = '';
	$practice    = '';
	$school      = '';
	$proposal    = '';
	$student     = '';
	$system      = '';
	$users       = '';
	$event       = '';
	$report      = '';
	$list1		 = '';
	$listmaster  = '';
	$list2		 = '';	
	$listemployee= '';
	$listdetail  = '';
	$liststatus  = '';
	$list3		 = '';	
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
	$absent      = '';
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
	$company      = '';
	$inbox       = '';
	$outbox      = '';
	$intern_mail = '';
	$decree      = '';
	$memo        = '';
	$practice    = '';
	$school      = '';
	$proposal    = '';
	$student     = '';
	$system      = '';
	$users       = '';
	$event       = '';
	$report      = '';
	$list1		 = '';
	$listmaster  = '';
	$list2		 = '';	
	$listemployee= '';
	$listdetail  = '';
	$liststatus  = '';	
	$list3		 = '';
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
	$absent      = '';
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
	$company      = '';
	$inbox       = '';
	$outbox      = '';
	$intern_mail = '';
	$decree      = '';
	$memo        = '';
	$practice    = '';
	$school      = '';
	$proposal    = '';
	$student     = '';
	$system      = '';
	$users       = '';
	$event       = '';
	$report      = '';
	$list1		 = '';
	$listmaster  = '';
	$list2		 = '';	
	$listemployee= '';
	$listdetail  = '';
	$liststatus  = '';
	$list3		 = '';	
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
	$absent      = '';
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
	$company      = '';
	$inbox       = '';
	$outbox      = '';
	$intern_mail = '';
	$decree      = '';
	$memo        = '';
	$practice    = '';
	$school      = '';
	$proposal    = '';
	$student     = '';
	$system      = '';
	$users       = '';
	$event       = '';
	$report      = '';
	$list1		 = '';
	$listmaster  = '';
	$list2		 = '';	
	$listemployee= '';
	$listdetail  = '';
	$liststatus  = '';
	$list3		 = '';	
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
	$absent      = '';
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
	$company      = '';
	$inbox       = '';
	$outbox      = '';
	$intern_mail = '';
	$decree      = '';
	$memo        = '';
	$practice    = '';
	$school      = '';
	$proposal    = '';
	$student     = '';
	$system      = '';
	$users       = '';
	$event       = '';
	$report      = '';
	$list1		 = '';
	$listmaster  = '';
	$list2		 = '';	
	$listemployee= '';
	$listdetail  = '';
	$liststatus  = '';
	$list3		 = '';	
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
	$absent      = '';
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
	$company      = '';
	$inbox       = '';
	$outbox      = '';
	$intern_mail = '';
	$decree      = '';
	$memo        = '';
	$practice    = '';
	$school      = '';
	$proposal    = '';
	$student     = '';
	$system      = '';
	$users       = '';
	$event       = '';
	$report      = '';
	$list1		 = '';
	$listmaster  = '';
	$list2		 = '';	
	$listemployee= '';
	$listdetail  = '';
	$liststatus  = '';
	$list3		 = '';	
} elseif ($uri=='company') {
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
	$absent      = '';
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
	$company      = 'active';
	$inbox       = '';
	$outbox      = '';
	$intern_mail = '';
	$decree      = '';
	$memo        = '';
	$practice    = '';
	$school      = '';
	$proposal    = '';
	$student     = '';
	$system      = '';
	$users       = '';
	$event       = '';
	$report      = '';
	$list1		 = '';
	$listmaster  = '';
	$list2		 = '';	
	$listemployee= '';
	$listdetail  = '';
	$liststatus  = '';
	$list3		 = '';	
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
	$absent      = '';
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
	$company      = '';
	$inbox       = 'active';
	$outbox      = '';
	$intern_mail = '';
	$decree      = '';
	$memo        = '';
	$practice    = '';
	$school      = '';
	$proposal    = '';
	$student     = '';
	$system      = '';
	$users       = '';
	$event       = '';
	$report      = '';
	$list1		 = '';
	$listmaster  = '';
	$list2		 = '';	
	$listemployee= '';
	$listdetail  = '';
	$liststatus  = '';
	$list3		 = '';	
} elseif ($uri=='outbox') {
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
	$absent      = '';
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
	$company      = '';
	$inbox       = '';
	$outbox      = 'active';
	$intern_mail = '';
	$decree      = '';
	$memo        = '';
	$practice    = '';
	$school      = '';
	$proposal    = '';
	$student     = '';
	$system      = '';
	$users       = '';
	$event       = '';
	$report      = '';
	$list1		 = '';
	$listmaster  = '';
	$list2		 = '';	
	$listemployee= '';
	$listdetail  = '';
	$liststatus  = '';
	$list3		 = '';	
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
	$absent      = '';
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
	$company      = '';
	$inbox       = '';
	$outbox      = '';
	$intern_mail = 'active';
	$decree      = 'active';
	$memo        = '';
	$practice    = '';
	$school      = '';
	$proposal    = '';
	$student     = '';
	$system      = '';
	$users       = '';
	$event       = '';
	$report      = '';
	$list1		 = '';
	$listmaster  = '';
	$list2		 = '';	
	$listemployee= '';
	$listdetail  = '';
	$liststatus  = '';
	$list3		 = '';	
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
	$absent      = '';
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
	$company      = '';
	$inbox       = '';
	$outbox      = '';
	$intern_mail = 'active';
	$decree      = '';
	$memo        = 'active';
	$practice    = '';
	$school      = '';
	$proposal    = '';
	$student     = '';
	$system      = '';
	$users       = '';
	$event       = '';
	$report      = '';
	$list1		 = '';
	$listmaster  = '';
	$list2		 = '';	
	$listemployee= '';
	$listdetail  = '';
	$liststatus  = '';
	$list3		 = '';	
} elseif ($uri=='school') {
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
	$absent      = '';
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
	$company      = '';
	$inbox       = '';
	$outbox      = '';
	$intern_mail = '';
	$decree      = '';
	$memo        = '';
	$practice    = 'active';
	$school      = 'active';
	$proposal    = '';
	$student     = '';
	$system      = '';
	$users       = '';
	$event       = '';
	$report      = '';
	$list1		 = '';
	$listmaster  = '';
	$list2		 = '';	
	$listemployee= '';
	$listdetail  = '';
	$liststatus  = '';
	$list3		 = '';	
} elseif ($uri=='proposal') {
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
	$absent      = '';
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
	$company      = '';
	$inbox       = '';
	$outbox      = '';
	$intern_mail = '';
	$decree      = '';
	$memo        = '';
	$practice    = 'active';
	$school      = '';
	$proposal    = 'active';
	$student     = '';
	$system      = '';
	$users       = '';
	$event       = '';
	$report      = '';
	$list1		 = '';
	$listmaster  = '';
	$list2		 = '';	
	$listemployee= '';
	$listdetail  = '';
	$liststatus  = '';
	$list3		 = '';	
} elseif ($uri=='student') {
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
	$absent      = '';
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
	$company      = '';
	$inbox       = '';
	$outbox      = '';
	$intern_mail = '';
	$decree      = '';
	$memo        = '';
	$practice    = 'active';
	$school      = '';
	$proposal    = '';
	$student     = 'active';
	$system      = '';
	$users       = '';
	$event       = '';
	$report      = '';
	$list1		 = '';
	$listmaster  = '';
	$list2		 = '';
	$listemployee= '';
	$listdetail  = '';
	$liststatus  = '';
	$list3		 = '';	
} elseif ($uri == 'users') {
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
	$absent      = '';
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
	$company      = '';
	$inbox       = '';
	$outbox      = '';
	$intern_mail = '';
	$decree      = '';
	$memo        = '';
	$practice    = '';
	$school      = '';
	$proposal    = '';
	$student     = '';
	$system      = 'active';
	$users       = 'active';
	$event       = '';
	$report      = '';
	$list1		 = '';
	$listmaster  = '';
	$list2		 = '';	
	$listemployee= '';
	$listdetail  = '';
	$liststatus  = '';
	$list3		 = '';	
} elseif ($uri == 'event') {
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
	$absent      = '';
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
	$company      = '';
	$inbox       = '';
	$outbox      = '';
	$intern_mail = '';
	$decree      = '';
	$memo        = '';
	$practice    = '';
	$school      = '';
	$proposal    = '';
	$student     = '';
	$system      = 'active';
	$users       = '';
	$event       = 'active';
	$report      = '';
	$list1		 = '';
	$listmaster  = '';
	$list2		 = '';	
	$listemployee= '';
	$listdetail  = '';
	$liststatus  = '';
	$list3		 = '';	
} elseif ($uri == 'listmaster') {
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
	$absent      = '';
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
	$company      = '';
	$inbox       = '';
	$outbox      = '';
	$intern_mail = '';
	$decree      = '';
	$memo        = '';
	$practice    = '';
	$school      = '';
	$proposal    = '';
	$student     = '';
	$system      = '';
	$users       = '';
	$event       = '';
	$report      = 'active';
	$list1		 = 'active';
	$listmaster  = 'active';
	$list2		 = '';	
	$listemployee= '';	
	$listdetail  = '';
	$liststatus  = '';
	$list3		 = '';
} elseif ($uri == 'listemployee') {
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
	$absent      = '';
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
	$company      = '';
	$inbox       = '';
	$outbox      = '';
	$intern_mail = '';
	$decree      = '';
	$memo        = '';
	$practice    = '';
	$school      = '';
	$proposal    = '';
	$student     = '';
	$system      = '';
	$users       = '';
	$event       = '';
	$report      = 'active';
	$list1		 = 'active';
	$listmaster  = '';
	$list2		 = 'active';	
	$listemployee= 'active';
	$listdetail  = '';
	$liststatus	 = '';
	$list3		 = '';	
} elseif ($uri == 'listemployeedetail') {
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
	$absent      = '';
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
	$company      = '';
	$inbox       = '';
	$outbox      = '';
	$intern_mail = '';
	$decree      = '';
	$memo        = '';
	$practice    = '';
	$school      = '';
	$proposal    = '';
	$student     = '';
	$system      = '';
	$users       = '';
	$event       = '';
	$report      = 'active';
	$list1		 = 'active';
	$listmaster  = '';
	$list2		 = 'active';	
	$listemployee= '';
	$listdetail  = 'active';
	$liststatus	 = '';
	$list3		 = '';
} elseif ($uri == 'listemployeestatus') {
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
	$absent      = '';
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
	$company      = '';
	$inbox       = '';
	$outbox      = '';
	$intern_mail = '';
	$decree      = '';
	$memo        = '';
	$practice    = '';
	$school      = '';
	$proposal    = '';
	$student     = '';
	$system      = '';
	$users       = '';
	$event       = '';
	$report      = 'active';
	$list1		 = 'active';
	$listmaster  = '';
	$list2		 = 'active';	
	$listemployee= '';
	$listdetail  = '';
	$liststatus	 = 'active';
	$list3		 = '';
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
	$absent      = '';
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
	$company      = '';
	$inbox       = '';
	$outbox      = '';
	$intern_mail = '';
	$decree      = '';
	$memo        = '';
	$practice    = '';
	$school      = '';
	$proposal    = '';
	$student     = '';
	$system      = '';
	$users       = '';
	$event       = '';
	$report      = '';
	$list1		 = '';
	$listmaster  = '';
	$list2		 = '';	
	$listemployee= '';
	$listdetail  = '';
	$liststatus	 = '';
	$list3		 = '';	
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
			<a href="#" class="menu-toggler"></a>
			<!-- END RESPONSIVE MENU TOGGLER -->
			<!-- BEGIN TOP NAVIGATION MENU -->
			<div class="top-menu">
				<ul class="nav navbar-nav pull-right">
					<li class="dropdown dropdown-extended dropdown-notification dropdown-dark" id="header_notification_bar">
						<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
							<?php		                        
		                        $dataultah = $this->home_model->select_birthday()->result();
		                        $jumlah = count($dataultah);
	                        ?>
	                    	<i class="icon-present"></i>
							<span class="badge badge-default"><?php echo $jumlah; ?></span>
	                    </a>
	                    <ul class="dropdown-menu">
	                    	<li class="external">	                    		
	                        	<h3>You have
	                            <strong><?php echo $jumlah; ?> Employee</strong> Birthday</h3>
	                            <!-- <a href="<?php echo site_url('emp/birthday'); ?>">view all</a>-->	
							</li>
	                        <li>
	                        	<ul class="dropdown-menu-list scroller" style="height: 250px;" data-handle-color="#637283">
	                            	<?php 
	                            	foreach($dataultah as $r) {
	                            	?>
	                            	<li>
	                                	<a href="javascript:;">
	                                    	<span class="time"><?php echo $r->emp_birthdate; ?></span>
	                                        <span class="details">
	                                        <span class="label label-sm label-icon label-success">
	                                        <i class="fa fa-user"></i>
	                                        </span> <?php echo $r->emp_name; ?></span>
										</a>
									</li>
									<?php 
									}
									?>
	                            </ul>
	                        </li>
	                    </ul>
					</li>
					<!-- BEGIN USER LOGIN DROPDOWN -->
					<li class="dropdown dropdown-user dropdown-dark">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">						
						<img alt="" class="img-circle" src="<?php echo base_url(); ?>icon/<?php echo $this->session->userdata('avatar'); ?>">
						<span class="username username-hide-mobile"><?php echo $this->session->userdata('nama'); ?></span>
						</a>
						<ul class="dropdown-menu dropdown-menu-default">
							<li>
								<a href="<?php echo site_url('sistem/profil'); ?>">
								<i class="icon-user"></i> My Profile </a>
							</li>							
							<li class="divider">
							</li>
							<li>
								<a href="<?php echo site_url('login/logout'); ?>">
								<i class="icon-key"></i> Log Out </a>
							</li>
						</ul>
					</li>					
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
						<a data-hover="megamenu-dropdown" data-close-others="true" data-toggle="dropdown" href="#">
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
									<li class="<?php echo $absent; ?>">
										<a href="<?php echo site_url('master/absent'); ?>">
										Absent </a>
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
						<a data-hover="megamenu-dropdown" data-close-others="true" data-toggle="dropdown" href="#">
						Mail Administration <i class="fa fa-angle-down"></i>
						</a>
						<ul class="dropdown-menu pull-left">
							<li class="<?php echo $mail_inbox; ?> dropdown-submenu">
								<a href="#">
								<i class="icon-envelope-open"></i>
								Inbox & Outbox</a>
								<ul class="dropdown-menu">
									<li class="<?php echo $company; ?>">
										<a href="<?php echo site_url('mail/company'); ?>">
										Company</a>
									</li>
									<li class="<?php echo $inbox; ?>">
										<a href="<?php echo site_url('mail/inbox'); ?>">
										Inbox Mail</a>
									</li>
									<li class="<?php echo $outbox; ?>">
										<a href="<?php echo site_url('mail/outbox'); ?>">
										Outbox Mail</a>
									</li>									
								</ul>
							</li>
							<li class="<?php echo $intern_mail; ?> dropdown-submenu">
								<a href="#">
								<i class="icon-envelope-letter"></i>
								Internal</a>
								<ul class="dropdown-menu">
									<li class="<?php echo $decree; ?>">
										<a href="<?php echo site_url('mail/decree'); ?>">
										Decree Mail</a>
									</li>
									<li class="<?php echo $memo; ?>">
										<a href="<?php echo site_url('mail/memo'); ?>">
										Memo</a>
									</li>									
								</ul>
							</li>							
						</ul>
					</li>
					<li class="menu-dropdown classic-menu-dropdown <?php echo $practice; ?>">
						<a data-hover="megamenu-dropdown" data-close-others="true" data-toggle="dropdown" href="#">
						Practical Work <i class="fa fa-angle-down"></i>
						</a>
						<ul class="dropdown-menu pull-left">
							<li class="<?php echo $school; ?>">
								<a href="<?php echo site_url('practice/school'); ?>">
								<i class="icon-home"></i>
								School 
								</a>								
							</li>
							<li class="<?php echo $proposal; ?>">
								<a href="<?php echo site_url('practice/proposal'); ?>">
								<i class="icon-envelope"></i>
								Proposal 
								</a>								
							</li>
							<li class="<?php echo $student; ?>">
								<a href="<?php echo site_url('practice/student'); ?>">
								<i class="icon-user"></i>
								Students 
								</a>								
							</li>
						</ul>
					</li>					
					<li class="menu-dropdown classic-menu-dropdown <?php echo $system; ?>">
						<a data-hover="megamenu-dropdown" data-close-others="true" data-toggle="dropdown" href="#">
						System <i class="fa fa-angle-down"></i>
						</a>
						<ul class="dropdown-menu pull-left">
							<li class="<?php echo $users; ?>">
								<a href="<?php echo site_url('sistem/users'); ?>">
								<i class="icon-user"></i>
								Users 
								</a>								
							</li>
							<li class="<?php echo $event; ?>">
								<a href="<?php echo site_url('sistem/event'); ?>">
								<i class="icon-calendar"></i>
								Calendar Event 
								</a>								
							</li>							
						</ul>
					</li>
					<!-- Report Menu -->
					<li class="menu-dropdown classic-menu-dropdown <?php echo $report; ?>">
						<a data-hover="megamenu-dropdown" data-close-others="true" data-toggle="dropdown" href="#">
						Report <i class="fa fa-angle-down"></i>
						</a>
						<ul class="dropdown-menu pull-left">							
							<li class="<?php echo $list1; ?> dropdown-submenu">
								<a href="#">
								<i class="icon-notebook"></i>
								Employee </a>
								<ul class="dropdown-menu">
									<li class="<?php echo $listmaster; ?>">
										<a href="<?php echo site_url('report/listmaster'); ?>">
										<i class="icon-notebook"></i>
										Master </a>
									</li>
									<li class="<?php echo $list2; ?> dropdown-submenu">
										<a href="#">
										<i class="icon-notebook"></i>
										Data Employee </a>
										<ul class="dropdown-menu">
											<li class="<?php echo $listemployee; ?>">
												<a href="<?php echo site_url('report/listemployee'); ?>">
												List of Employee</a>
											</li>
											<li class="<?php echo $listdetail; ?>">
												<a href="<?php echo site_url('report/listemployeedetail'); ?>">
												Employee Details</a>
											</li>
											<li class="<?php echo $liststatus; ?>">
												<a href="<?php echo site_url('report/listemployeestatus'); ?>">
												List of Status Employee</a>
											</li>
											<li class=" ">
												<a href="<?php echo site_url('report/listinsurance'); ?>">
												List of Insurance </a>
											</li>											
										</ul>
									</li>
									<li class="<?php echo $list3; ?> dropdown-submenu">
										<a href="#">
										<i class="icon-notebook"></i>
										Reward & Punishment </a>
										<ul class="dropdown-menu">
											<li class=" ">
												<a href="<?php echo site_url('report/listreward'); ?>">
												List of Reward</a>
											</li>
											<li class=" ">
												<a href="<?php echo site_url('report/listpunishment'); ?>">
												 List of Punishment</a>
											</li>											
										</ul>
									</li>
									<li class=" ">
										<a href="<?php echo site_url('report/listmutation'); ?>">
										<i class="icon-notebook"></i>
										Mutation </a>
									</li>
									<li class=" ">
										<a href="<?php echo site_url('report/listresign'); ?>">
										<i class="icon-notebook"></i>
										Resign </a>
									</li>
								</ul>
							</li>
							<!-- Mail Report -->
							<li class=" dropdown-submenu">
								<a href="#">
								<i class="icon-notebook"></i>
								Mail Administration </a>
								<ul class="dropdown-menu">
									<li class=" dropdown-submenu">
										<a href="#">
										<i class="icon-notebook"></i>
										Inbox & Outbox </a>
										<ul class="dropdown-menu">
											<li class=" ">
												<a href="<?php echo site_url('report/listcompany'); ?>">
												Company List</a>
											</li>
											<li class=" ">
												<a href="<?php echo site_url('report/listinbox'); ?>">
												Inbox Mail </a>
											</li>
											<li class=" ">
												<a href="<?php echo site_url('report/listoutbox'); ?>">
												Outbox Mail </a>
											</li>											
										</ul>
									</li>
									<li class=" dropdown-submenu">
										<a href="#">
										<i class="icon-notebook"></i>
										Internal </a>
										<ul class="dropdown-menu">
											<li class=" ">
												<a href="<?php echo site_url('report/listdecree'); ?>">
												Decree Mail </a>
											</li>
											<li class=" ">
												<a href="<?php echo site_url('report/listmemo'); ?>">
												Memo </a>
											</li>											
										</ul>
									</li>									
								</ul>
							</li>
							<!-- Practical Work Report -->
							<li class=" dropdown-submenu">
								<a href="#">
								<i class="icon-notebook"></i>
								Practical Work </a>
								<ul class="dropdown-menu">
									<li class=" ">
										<a href="<?php echo site_url('report/listschool'); ?>">
										<i class="icon-notebook"></i>
										School List </a>
									</li>
									<li class=" ">
										<a href="<?php echo site_url('report/listproposal'); ?>">
										<i class="icon-notebook"></i>
										Proposal List </a>
									</li>
									<li class=" ">
										<a href="<?php echo site_url('report/liststudent'); ?>">
										<i class="icon-notebook"></i>
										Student List </a>
									</li>
								</ul>
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