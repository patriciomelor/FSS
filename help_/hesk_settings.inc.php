<?php
// Settings file for HESK 2.6.8

// ==> GENERAL

// --> General settings
$hesk_settings['site_title']='Mesa de Ayuda Agencia FSS';
$hesk_settings['site_url']='http://www.fss.cl';
$hesk_settings['webmaster_mail']='helpdesk@fss.cl';
$hesk_settings['noreply_mail']='helpdesk@fss.cl';
$hesk_settings['noreply_name']='Help Desk';

// --> Language settings
$hesk_settings['can_sel_lang']=1;
$hesk_settings['language']='Espanol';
$hesk_settings['languages']=array(
'English' => array('folder'=>'en','hr'=>'------ Reply above this line ------'),
'Espanol' => array('folder'=>'es','hr'=>'------ Responder arriba de esta linea ------'),
);

// --> Database settings
$hesk_settings['db_host']='localhost';
$hesk_settings['db_name']='fsscl_c9helpdesk';
$hesk_settings['db_user']='fsscl_c9fss';
$hesk_settings['db_pass']='fbMgY@M4';
$hesk_settings['db_pfix']='hesk_';
$hesk_settings['db_vrsn']=1;


// ==> HELP DESK

// --> Help desk settings
$hesk_settings['hesk_title']='Help Desk Agencia FSS';
$hesk_settings['hesk_url']='http://www.fss.cl/help';
$hesk_settings['admin_dir']='admin';
$hesk_settings['attach_dir']='attachments';
$hesk_settings['max_listings']=30;
$hesk_settings['print_font_size']=12;
$hesk_settings['autoclose']=7;
$hesk_settings['max_open']=0;
$hesk_settings['new_top']=0;
$hesk_settings['reply_top']=0;

// --> Features
$hesk_settings['autologin']=1;
$hesk_settings['autoassign']=0;
$hesk_settings['custclose']=1;
$hesk_settings['custopen']=1;
$hesk_settings['rating']=0;
$hesk_settings['cust_urgency']=1;
$hesk_settings['sequential']=1;
$hesk_settings['time_worked']=1;
$hesk_settings['spam_notice']=1;
$hesk_settings['list_users']=0;
$hesk_settings['debug_mode']=0;
$hesk_settings['short_link']=0;
$hesk_settings['select_cat']=0;
$hesk_settings['select_pri']=0;

// --> SPAM Prevention
$hesk_settings['secimg_use']=1;
$hesk_settings['secimg_sum']='Z71MMPBV1U';
$hesk_settings['recaptcha_use']=0;
$hesk_settings['recaptcha_public_key']='';
$hesk_settings['recaptcha_private_key']='';
$hesk_settings['question_use']=0;
$hesk_settings['question_ask']='Which number is lower <b>9</b> or <b>7</b>:';
$hesk_settings['question_ans']='7';

// --> Security
$hesk_settings['attempt_limit']=11;
$hesk_settings['attempt_banmin']=5;
$hesk_settings['reset_pass']=1;
$hesk_settings['email_view_ticket']=0;

// --> Attachments
$hesk_settings['attachments']=array (
'use' => 1,
'max_number' => 2,
'max_size' => 2097152,
'allowed_types' => array('.gif','.jpg','.png','.zip','.rar','.csv','.doc','.docx','.xls','.xlsx','.txt','.pdf')
);


// ==> KNOWLEDGEBASE

// --> Knowledgebase settings
$hesk_settings['kb_enable']=1;
$hesk_settings['kb_wysiwyg']=1;
$hesk_settings['kb_search']=2;
$hesk_settings['kb_search_limit']=10;
$hesk_settings['kb_views']=1;
$hesk_settings['kb_date']=1;
$hesk_settings['kb_recommendanswers']=1;
$hesk_settings['kb_rating']=1;
$hesk_settings['kb_substrart']=200;
$hesk_settings['kb_cols']=2;
$hesk_settings['kb_numshow']=3;
$hesk_settings['kb_popart']=6;
$hesk_settings['kb_latest']=6;
$hesk_settings['kb_index_popart']=3;
$hesk_settings['kb_index_latest']=3;
$hesk_settings['kb_related']=5;


// ==> EMAIL

// --> Email sending
$hesk_settings['smtp']=1;
$hesk_settings['smtp_host_name']='smtp.gmail.com';
$hesk_settings['smtp_host_port']=25;
$hesk_settings['smtp_timeout']=20;
$hesk_settings['smtp_ssl']=0;
$hesk_settings['smtp_tls']=1;
$hesk_settings['smtp_user']='helpdesk@fss.cl';
$hesk_settings['smtp_password']='Agencia2022';

// --> Email piping
$hesk_settings['email_piping']=0;

// --> POP3 Fetching
$hesk_settings['pop3']=0;
$hesk_settings['pop3_job_wait']=15;
$hesk_settings['pop3_host_name']='mail.domain.com';
$hesk_settings['pop3_host_port']=110;
$hesk_settings['pop3_tls']=0;
$hesk_settings['pop3_keep']=0;
$hesk_settings['pop3_user']='';
$hesk_settings['pop3_password']='';

// --> Email loops
$hesk_settings['loop_hits']=5;
$hesk_settings['loop_time']=300;

// --> Detect email typos
$hesk_settings['detect_typos']=1;
$hesk_settings['email_providers']=array('gmail.com','hotmail.com','hotmail.co.uk','yahoo.com','yahoo.co.uk','aol.com','aol.co.uk','msn.com','live.com','live.co.uk','mail.com','googlemail.com','btinternet.com','btopenworld.com');

// --> Notify customer when
$hesk_settings['notify_new']=1;
$hesk_settings['notify_skip_spam']=1;
$hesk_settings['notify_spam_tags']=array('Spam?}','***SPAM***','[SPAM]','SPAM-LOW:','SPAM-MED:');
$hesk_settings['notify_closed']=1;

// --> Other
$hesk_settings['strip_quoted']=1;
$hesk_settings['eml_req_msg']=0;
$hesk_settings['save_embedded']=1;
$hesk_settings['multi_eml']=0;
$hesk_settings['confirm_email']=1;
$hesk_settings['open_only']=1;


// ==> TICKET LIST

$hesk_settings['ticket_list']=array('trackid','lastchange','name','subject','status','owner','lastreplier','time_worked','custom1','custom3','custom4');

// --> Other
$hesk_settings['submittedformat']='2';
$hesk_settings['updatedformat']='2';


// ==> MISC

// --> Date & Time
$hesk_settings['diff_hours']=1;
$hesk_settings['diff_minutes']=0;
$hesk_settings['daylight']=0;
$hesk_settings['timeformat']='Y-m-d H:i:s';

// --> Other
$hesk_settings['ip_whois']='http://whois.domaintools.com/{IP}';
$hesk_settings['maintenance_mode']=0;
$hesk_settings['alink']=1;
$hesk_settings['submit_notice']=0;
$hesk_settings['online']=0;
$hesk_settings['online_min']=10;
$hesk_settings['check_updates']=1;


// ==> CUSTOM FIELDS

$hesk_settings['custom_fields']=array (
'custom1'=>array('use'=>1,'place'=>0,'type'=>'select','req'=>1,'name'=>'Área donde trabajas','maxlen'=>255,'value'=>'{HESK_SELECT}Admin &amp; Finanzas#HESK#Bodega#HESK#Comercial#HESK#FaserCargo#HESK#Gerencia#HESK#Informática#HESK#Legal#HESK#Operaciones#HESK#RRHH#HESK#Técnicos#HESK#Transporte'),
'custom2'=>array('use'=>0,'place'=>0,'type'=>'text','req'=>0,'name'=>'Custom field 2','maxlen'=>255,'value'=>''),
'custom3'=>array('use'=>1,'place'=>0,'type'=>'select','req'=>1,'name'=>'Tipo Solicitud','maxlen'=>255,'value'=>'{HESK_SELECT}Incidente#HESK#Requerimiento#HESK#Consulta'),
'custom4'=>array('use'=>1,'place'=>0,'type'=>'select','req'=>1,'name'=>'Categoria de Solicitud','maxlen'=>255,'value'=>'{HESK_SELECT}Accesorios y periféricos#HESK#Computador o Notebook#HESK#Correo Electrónico#HESK#Impresora o escáner#HESK#Redes y Wifi#HESK#Sigad#HESK#Sitios Web#HESK#Softland#HESK#Telefonía Fija#HESK#Telefonía Móvil#HESK#Otro'),
'custom5'=>array('use'=>1,'place'=>0,'type'=>'select','req'=>1,'name'=>'Sucursal donde trabajas','maxlen'=>255,'value'=>'{HESK_SELECT}Aeropuerto#HESK#Arica#HESK#Lampa#HESK#Los Andes#HESK#Valparaíso#HESK#San Antonio#HESK#Santiago#HESK#Talcahuano'),
'custom6'=>array('use'=>1,'place'=>0,'type'=>'text','req'=>1,'name'=>'Teléfono de Contacto','maxlen'=>255,'value'=>''),
'custom7'=>array('use'=>0,'place'=>0,'type'=>'text','req'=>0,'name'=>'Custom field 7','maxlen'=>255,'value'=>''),
'custom8'=>array('use'=>0,'place'=>0,'type'=>'text','req'=>0,'name'=>'Custom field 8','maxlen'=>255,'value'=>''),
'custom9'=>array('use'=>0,'place'=>0,'type'=>'text','req'=>0,'name'=>'Custom field 9','maxlen'=>255,'value'=>''),
'custom10'=>array('use'=>0,'place'=>0,'type'=>'text','req'=>0,'name'=>'Custom field 10','maxlen'=>255,'value'=>''),
'custom11'=>array('use'=>0,'place'=>0,'type'=>'text','req'=>0,'name'=>'Custom field 11','maxlen'=>255,'value'=>''),
'custom12'=>array('use'=>0,'place'=>0,'type'=>'text','req'=>0,'name'=>'Custom field 12','maxlen'=>255,'value'=>''),
'custom13'=>array('use'=>0,'place'=>0,'type'=>'text','req'=>0,'name'=>'Custom field 13','maxlen'=>255,'value'=>''),
'custom14'=>array('use'=>0,'place'=>0,'type'=>'text','req'=>0,'name'=>'Custom field 14','maxlen'=>255,'value'=>''),
'custom15'=>array('use'=>0,'place'=>0,'type'=>'text','req'=>0,'name'=>'Custom field 15','maxlen'=>255,'value'=>''),
'custom16'=>array('use'=>0,'place'=>0,'type'=>'text','req'=>0,'name'=>'Custom field 16','maxlen'=>255,'value'=>''),
'custom17'=>array('use'=>0,'place'=>0,'type'=>'text','req'=>0,'name'=>'Custom field 17','maxlen'=>255,'value'=>''),
'custom18'=>array('use'=>0,'place'=>0,'type'=>'text','req'=>0,'name'=>'Custom field 18','maxlen'=>255,'value'=>''),
'custom19'=>array('use'=>0,'place'=>0,'type'=>'text','req'=>0,'name'=>'Custom field 19','maxlen'=>255,'value'=>''),
'custom20'=>array('use'=>0,'place'=>0,'type'=>'text','req'=>0,'name'=>'Custom field 20','maxlen'=>255,'value'=>'')
);

#############################
#     DO NOT EDIT BELOW     #
#############################
$hesk_settings['hesk_version']='2.6.8';
if ($hesk_settings['debug_mode'])
{
    error_reporting(E_ALL);
}
else
{
    error_reporting(0);
}
if (!defined('IN_SCRIPT')) {die('Invalid attempt!');}