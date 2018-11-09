<?php
/* sys/common */
$lang->colon      = ' : ';
$lang->ellipsis   = '…';
$lang->prev       = '‹';
$lang->next       = '›';
$lang->unfold     = '+';
$lang->fold       = '-';
$lang->percent    = '%';
$lang->laquo      = '&laquo;';
$lang->raquo      = '&raquo;';
$lang->minus      = ' - ';
$lang->hyphen     = '-';
$lang->slash      = ' / ';
$lang->semicolon  = ';';
$lang->RMB        = '￥';
$lang->divider    = "<span class='divider'>{$lang->raquo}</span> ";
$lang->at         = ' At ';
$lang->by         = ' By ';
$lang->ditto      = 'Ditto';
$lang->etc        = 'Etc.';
$lang->importIcon = "<i class='icon-download-alt'> </i>";
$lang->exportIcon = "<i class='icon-upload-alt'> </i>";

$lang->apps = new stdclass();
$lang->apps->crm        = 'CRM';
$lang->apps->cash       = 'CASH';
$lang->apps->oa         = 'OA';
$lang->apps->doc        = 'DOC';
$lang->apps->proj       = 'PROJ';
$lang->apps->sys        = 'SYSTEM';
$lang->apps->team       = 'TEAM';
$lang->apps->superadmin = 'ADMIN';

$lang->ranzhi    = 'Zdoo';
$lang->agreement = "I have read and agreed to  <a href='http://zpl.pub/page/zplv11.html' target='_blank'>Z PUBLIC LICENSE 1.2</a>, <span class='text-danger'>and will keep the logos and links of Zdoo.</span>";
$lang->poweredBy = "<a href='http://www.zdoo.org/?v=%s' target='_blank'>{$lang->ranzhi} %s</a>";
$lang->ipLimited = "<html><head><meta http-equiv='Content-Type' content='text/html; charset=utf-8' /></head><body>Sorry, your current IP is blocked. Please contact the Administrator to get privilege.</body></html>";

$lang->IE6Alert = <<<EOT
    <div class='alert alert-danger' style='margin-top:100px;'>
      <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
      <h2>Please use IE(>8), firefox, chrome, safari, opera to visit this site.</h2>
      <p>Stop using IE6!</p>
      <p>IE6 is too outdated that we should stop using it. <br/></p>
      <a href='https://www.google.com/intl/zh-hk/chrome/browser/' class='btn btn-primary btn-lg' target='_blank'>Chrome</a>
      <a href='http://www.firefox.com/' class='btn btn-primary btn-lg' target='_blank'>Firefox</a>
      <a href='http://www.opera.com/download' class='btn btn-primary btn-lg' target='_blank'>Opera</a>
      <p></p>
    </div>
EOT;

$lang->theme             = 'Theme';
$lang->themes['default'] = 'Default';
$lang->themes['clear']   = 'Clear';

$lang->home             = 'Home';
$lang->welcome          = '%s Zdoo';
$lang->messages         = "<strong><i class='icon-comment-alt'></i> %s</strong>";
$lang->todayIs          = 'Today is %s, ';
$lang->today            = 'Today';
$lang->aboutUs          = 'About';
$lang->about            = 'About';
$lang->link             = 'Links';
$lang->frontHome        = 'Front';
$lang->forumHome        = 'Forum';
$lang->bookHome         = 'Book';
$lang->register         = 'Register';
$lang->logout           = 'Logout';
$lang->login            = 'Login';
$lang->account          = 'Username';
$lang->password         = 'Password';
$lang->all              = 'All';
$lang->changePassword   = 'Change password';
$lang->currentPos       = 'Current Page';
$lang->categoryMenu     = 'Manage Category';
$lang->basicInfo        = 'Basic Info';
$lang->chooseUserToMail = 'Choose users to send notice...';

$lang->reset          = 'Reset';
$lang->add            = 'Add';
$lang->edit           = 'Edit';
$lang->copy           = 'Copy';
$lang->and            = 'And';
$lang->or             = 'Or';
$lang->hide           = 'Hide';
$lang->delete         = 'Delete';
$lang->close          = 'Close';
$lang->finish         = 'Finish';
$lang->cancel         = 'Cancel';
$lang->import         = 'Import';
$lang->export         = 'Export';
$lang->setFileName    = 'File Name';
$lang->setFileNum     = 'File Number';
$lang->setFileType    = 'File Type';
$lang->setCharset     = 'Charset';
$lang->save           = 'Save';
$lang->saved          = 'Saved';
$lang->confirm        = 'Confirm';
$lang->preview        = 'Preview';
$lang->goback         = 'Back';
$lang->assign         = 'Assign';
$lang->start          = 'Start';
$lang->create         = 'Add';
$lang->forbid         = 'Forbid';
$lang->activate       = 'Activate';
$lang->ignore         = 'Ignore';
$lang->view           = 'View';
$lang->detail         = 'Details';
$lang->more           = 'More';
$lang->actions        = 'Actions';
$lang->history        = 'History';
$lang->reverse        = 'Reverse';
$lang->switchDisplay  = 'Switch Display';
$lang->feature        = 'Features';
$lang->year           = 'Year';
$lang->month          = 'Month';
$lang->day            = 'Day';
$lang->loading        = 'Loading...';
$lang->saveSuccess    = 'Saved.';
$lang->setSuccess     = 'Saved.';
$lang->sendSuccess    = 'Sent.';
$lang->fail           = 'Failed.';
$lang->noResultsMatch = 'No match found.';
$lang->searchMore     = "More results：";
$lang->files          = 'Files';
$lang->addFiles       = 'Add Files ';
$lang->comment        = 'Comment';
$lang->selectAll      = 'All';
$lang->selectReverse  = 'Inverse';
$lang->continueSave   = 'Continue To Save';
$lang->submitting     = 'Saving...';
$lang->yes            = 'YES';
$lang->no             = 'NO';
$lang->signIn         = 'Sign in';
$lang->signOut        = 'Sign out';
$lang->sort           = 'Ranking';
$lang->required       = 'Required';
$lang->custom         = 'Custom';
$lang->refresh        = 'Refresh';

$lang->exportAll      = 'Export All';
$lang->exportThisPage = 'Export This Page';
$lang->exportTemplate = 'Export Template';
$lang->exportExcel    = 'Export Excel';
$lang->exportWord     = 'Export Word';
$lang->importFile     = 'File';
$lang->importSuccess  = 'Imported.';
$lang->importFail     = 'Failed.';

$lang->lifetime = new stdclass();
$lang->lifetime->createdBy    = 'Created By';
$lang->lifetime->assignedTo   = 'Assigned to';
$lang->lifetime->signedBy     = 'Signed By';
$lang->lifetime->closedBy     = 'Closed By';
$lang->lifetime->closedReason = 'Closed Reason';
$lang->lifetime->lastEdited   = 'Last Edited';

$lang->setOkFile = <<<EOT
<h5>For security reason, please do these steps. </h5>
<p>Create %s file. If this file exists already, reopen it and save again.</p>
EOT;

$lang->js = new stdclass();
$lang->js->confirmDelete         = 'Do you want to delete it?';
$lang->js->confirmFinish         = 'Do you want to finish it?';
$lang->js->deleteing             = 'Deleting...';
$lang->js->doing                 = 'Processing...';
$lang->js->timeout               = 'Timeout';
$lang->js->confirmDiscardChanges = 'Discard changes?';
$lang->js->yes                   = 'Yes';
$lang->js->no                    = 'No';
$lang->js->installZipExtension   = "Php-zip extension is required to export .xlsx file.";

$lang->company = new stdclass();
$lang->company->contactUs = 'Contact';
$lang->company->address   = 'Address';
$lang->company->phone     = 'Phone';
$lang->company->email     = 'Email';
$lang->company->fax       = 'Fax';
$lang->company->qq        = 'QQ';
$lang->company->weibo     = 'Weibo';
$lang->company->weixin    = 'Wechat';
$lang->company->wangwang  = 'Wangwang';

$lang->menu = new stdclass();

$lang->index   = new stdclass();
$lang->user    = new stdclass();
$lang->file    = new stdclass();
$lang->admin   = new stdclass();
$lang->tree    = new stdclass();
$lang->mail    = new stdclass();
$lang->dept    = new stdclass();
$lang->thread  = new stdclass();
$lang->block   = new stdclass();
$lang->action  = new stdclass();
$lang->effort  = new stdclass();
$lang->setting = new stdclass();
$lang->task    = new stdclass();
$lang->schema  = new stdclass();
$lang->package = new stdclass();

$lang->admin->common = 'Admin';

$lang->menu->sys = new stdclass();
$lang->menu->sys->company = 'Company|company|setbasic|';
$lang->menu->sys->user    = 'User|user|admin|';
$lang->menu->sys->group   = 'Privilege|group|browse|';
$lang->menu->sys->entry   = 'App|entry|admin|';
$lang->menu->sys->system  = 'System|mail|admin|';
$lang->menu->sys->package = 'Extension|package|browse|';

$lang->message = new stdclass(); 
$lang->blog    = new stdclass(); 
$lang->group   = new stdclass(); 

$lang->entry       = new stdclass();
$lang->entry->menu = new stdclass();
$lang->entry->menu->admin    = array('link' => 'API|entry|admin|', 'alias' => 'edit, integration, style, zentaoAdmin');
$lang->entry->menu->create   = array('link' => 'Create|entry|create|');
$lang->entry->menu->webapp   = 'App|webapp|obtain|';
$lang->entry->menu->category = 'Category|entry|category|';

$lang->system       = new stdclass();
$lang->system->menu = new stdclass();
$lang->system->menu->mail   = array('link' => 'EMail|mail|admin|', 'alias' => 'detect,edit,save,test');
$lang->system->menu->trash  = array('link' => 'Trash|action|trash|');
$lang->system->menu->cron   = 'Cron|cron|index|';
$lang->system->menu->backup = 'Backup|backup|index|';

$lang->article = new stdclass();
$lang->article->menu = new stdclass();
$lang->article->menu->admin  = 'Browse|article|admin|';
$lang->article->menu->tree   = 'Category|tree|browse|type=article';
$lang->article->menu->create = array('link' => 'Add|article|create|type=article', 'float' => 'right');

$lang->menuGroups = new stdclass();

$lang->menu->dashboard = new stdclass();
$lang->menu->dashboard->todo     = 'To-do|todo|calendar|';
$lang->menu->dashboard->task     = 'Task|my|task|';
$lang->menu->dashboard->project  = 'Project|my|project|';
$lang->menu->dashboard->order    = 'Order|my|order|';
$lang->menu->dashboard->contract = 'Contract|my|contract|';
$lang->menu->dashboard->review   = 'Review|my|review|';
$lang->menu->dashboard->company  = 'Company|my|company|';
$lang->menu->dashboard->dynamic  = 'Dynamic|my|dynamic|';
$lang->menu->dashboard->contact  = 'Contact|my|contact|';

if(!isset($lang->customer)) $lang->customer = new stdclass();
$lang->customer->menu = new stdclass();
$lang->customer->menu->browse      = 'All Customers|customer|browse|mode=all';
$lang->customer->menu->assignedTo  = 'Assigned To Me|customer|browse|mode=assignedtome';
$lang->customer->menu->contactedBy = 'Contacted By Me|customer|browse|mode=contactedby';
$lang->customer->menu->past        = 'Urgently need contacted|customer|browse|mode=past';
$lang->customer->menu->today       = 'Contact Today|customer|browse|mode=today';
$lang->customer->menu->tomorrow    = 'Contact Tomorrow|customer|browse|mode=tomorrow';
$lang->customer->menu->thisweek    = 'Contact This Week|customer|browse|mode=thisweek';
$lang->customer->menu->thismonth   = 'Contact This Month|customer|browse|mode=thismonth';
$lang->customer->menu->public      = 'Public Customers|customer|browse|mode=public';
$lang->customer->menu->report      = 'Report|report|browse|module=customer';

if(!isset($lang->provider)) $lang->provider = new stdclass();
$lang->provider->menu = new stdclass();
$lang->provider->menu->browse = array('link' => 'All Providers|provider|browse|', 'alias' => 'create,edit,view');

if(!isset($lang->product)) $lang->product = new stdclass();
$lang->product->menu = new stdclass();
$lang->product->menu->browse     = 'All Products|product|browse|mode=browse&status=all';
$lang->product->menu->normal     = 'Normal|product|browse|mode=browse&status=normal';
$lang->product->menu->developing = 'Developing|product|browse|mode=browse&status=developing';
$lang->product->menu->offline    = 'Offline|product|browse|mode=browse&status=offline';
$lang->product->menu->category   = 'Category|tree|browse|type=product&startModule=&root=&from=product';

$lang->todo = new stdclass();
$lang->todo->menu = new stdclass();
$lang->todo->menu->calendar        = 'Calendar|todo|calendar|';
$lang->todo->menu->all             = 'All Todos|todo|browse|mode=all';
$lang->todo->menu->assignedToOther = 'Other Todos|todo|browse|mode=assignedtoother';
$lang->todo->menu->assignedToMe    = 'My Todos|todo|browse|mode=assignedtome';
$lang->todo->menu->undone          = 'Unfinished|todo|browse|mode=undone';
$lang->todo->menu->future          = 'Wait|todo|browse|mode=future';
 
$lang->my = new stdclass();
$lang->my->review = new stdclass();
$lang->my->review->menu = new stdclass();
$lang->my->review->menu->all      = 'All|my|review|type=all';
$lang->my->review->menu->attend   = 'Attend|my|review|type=attend';
$lang->my->review->menu->leave    = 'Leave|my|review|type=leave';
$lang->my->review->menu->makeup   = 'Makeup|my|review|type=makeup';
$lang->my->review->menu->overtime = 'Overtime|my|review|type=overtime';
$lang->my->review->menu->lieu     = 'Lieu|my|review|type=lieu';
$lang->my->review->menu->refund   = 'Refund|my|review|type=refund';

$lang->my->order = new stdclass();
$lang->my->order->menu = new stdclass();
$lang->my->order->menu->past       = 'Urgent|my|order|type=past';
$lang->my->order->menu->today      = 'Today|my|order|type=today';
$lang->my->order->menu->tomorrow   = 'Tomorrow|my|order|type=tomorrow';
$lang->my->order->menu->assignedTo = 'Assigned To Me|my|order|type=assignedTo';
$lang->my->order->menu->createdBy  = 'Created By Me|my|order|type=createdBy';
$lang->my->order->menu->signedBy   = 'Signed By Me|my|order|type=signedBy';
$lang->my->order->menu->all        = 'All|my|order|type=all';

$lang->my->contract = new stdclass();
$lang->my->contract->menu = new stdclass();
$lang->my->contract->menu->unfinished  = 'Unfinished|my|contract|type=unfinished';
$lang->my->contract->menu->finished    = 'Finished|my|contract|type=finished';
$lang->my->contract->menu->canceled    = 'Cancelled|my|contract|type=canceled';
$lang->my->contract->menu->returnedBy  = 'Paid|my|contract|type=returnedBy';
$lang->my->contract->menu->deliveredBy = 'Delivered|my|contract|type=deliveredBy';

$lang->my->task = new stdclass();
$lang->my->task->menu = new stdclass();
$lang->my->task->menu->assignedToMe = 'Assigned To Me|my|task|type=assignedTo';
$lang->my->task->menu->createdByMe  = 'Created By Me|my|task|type=createdBy';
$lang->my->task->menu->finishedByMe = 'Finished By Me|my|task|type=finishedBy';
$lang->my->task->menu->closedByMe   = 'Closed By Me|my|task|type=closedBy';
$lang->my->task->menu->canceledByMe = 'Cancelled By Me|my|task|type=canceledBy';
$lang->my->task->menu->unclosed     = 'Unclosed|my|task|type=unclosed';

$lang->my->dynamic = new stdclass();
$lang->my->dynamic->menu = new stdclass();
$lang->my->dynamic->menu->today      = 'Today|my|dynamic|period=today';
$lang->my->dynamic->menu->yesterday  = 'Yesterday|my|dynamic|period=yesterday';
$lang->my->dynamic->menu->twodaysago = 'The Day Before Yesterday|my|dynamic|period=twodaysago';
$lang->my->dynamic->menu->thisweek   = 'This Week|my|dynamic|period=thisweek';
$lang->my->dynamic->menu->lastweek   = 'Last Week|my|dynamic|period=lastweek';
$lang->my->dynamic->menu->thismonth  = 'This Month|my|dynamic|period=thismonth';
$lang->my->dynamic->menu->lastmonth  = 'Last Month|my|dynamic|period=lastmonth';
$lang->my->dynamic->menu->all        = 'All|my|dynamic|period=all';

$lang->my->company = new stdclass();

$lang->mail = new stdclass();
$lang->mail->menu = $lang->system->menu;
$lang->menuGroups->mail = 'system';

$lang->action = new stdclass();
$lang->action->menu = $lang->system->menu;
$lang->menuGroups->action = 'system';

$lang->cron = new stdclass();
$lang->cron->menu = $lang->system->menu;
$lang->menuGroups->cron = 'system';

$lang->backup = new stdclass();
$lang->backup->menu = $lang->system->menu;
$lang->menuGroups->backup = 'system';

$lang->error = new stdclass();
$lang->error->length       = array("<strong>%s</strong> length should be <strong>%s</strong>", "<strong>%s</strong> length should between <strong>%s</strong> and <strong>%s</strong>.");
$lang->error->reg          = "<strong>%s</strong> should like <strong>%s</strong>";
$lang->error->unique       = "<strong>%s</strong> has <strong>%s</strong> already. If you are sure this record has been deleted, you can restore it in admin panel, trash page.";
$lang->error->notempty     = "<strong>%s</strong> can not be empty.";
$lang->error->empty        = "<strong>%s</strong> must be empty.";
$lang->error->equal        = "<strong>%s</strong> must be <strong>%s</strong>.";
$lang->error->gt           = "<strong>%s</strong> should be greater than <strong>%s</strong>.";
$lang->error->ge           = "<strong>%s</strong> should be not less than <strong>%s</strong>.";
$lang->error->lt           = "<strong>%s</strong> should be less than <strong>%s</strong>";
$lang->error->le           = "<strong>%s</strong> should be no greater than <strong>%s</strong>.";
$lang->error->in           = '<strong>%s</strong> must in<strong>%s</strong>。';
$lang->error->int          = array("<strong>%s</strong> should be interger", "<strong>%s</strong> should between <strong>%s - %s</strong>.");
$lang->error->float        = "<strong>%s</strong> should be a interger or float.";
$lang->error->email        = "<strong>%s</strong> should be email.";
$lang->error->URL          = "<strong>%s</strong> should be url.";
$lang->error->date         = "<strong>%s</strong> should be date";
$lang->error->code         = '<strong>%s</strong> should be a combination of letters or numbers.';
$lang->error->account      = "<strong>%s</strong> should be a valid account.";
$lang->error->passwordsame = "Passwords must be the same";
$lang->error->passwordrule = "Password should 6 characters at least.";
$lang->error->captcha      = 'Captcah error.';
$lang->error->noWritable   = '%s cannot write. Please modify permissions!';
$lang->error->noConvertFun = 'Iconv and mb_convert_encoding do not exist. You cannot convert data into the desired coding!';
$lang->error->noCurlExt    = 'No curl extension.';
$lang->error->notInt       = '<strong>%s</strong> should be not a interger.';
$lang->error->pasteImg     = 'Your browser does not support paste pictures.';
$lang->error->accessDenied = 'Access Denied';
$lang->error->deny         = "Sorry, you don't have the permission to access <b>%s</b>'s <b>%s</b>. Please contact the administrator.";

$lang->pager = new stdclass();
$lang->pager->noRecord     = "No records yet.";
$lang->pager->digest       = "<strong>%s</strong> records, <strong>%s</strong> per page, <strong>%s/%s</strong> ";
$lang->pager->recPerPage   = "<strong>%s</strong> per page";
$lang->pager->first        = " First";
$lang->pager->pre          = " Prev";
$lang->pager->next         = " Next";
$lang->pager->last         = " Last";
$lang->pager->locate       = "GO!";
$lang->pager->showMore     = 'Show more <i class="icon icon-double-angle-down"></i>';
$lang->pager->noMore       = 'No more';
$lang->pager->showTotal    = 'Show <strong>%s</strong> of <strong>%s</strong>';
$lang->pager->previousPage = "Previous";
$lang->pager->nextPage     = "Next";
$lang->pager->summery      = "<strong>%s-%s</strong> of <strong>%s</strong>.";

$lang->excel = new stdClass();
$lang->excel->canNotRead = 'Cannot resolve this file.';

$lang->excel->error = new stdclass();
$lang->excel->error->info   = 'The value you entered is not in the drop-down list.';
$lang->excel->error->title  = 'Input error.';
$lang->excel->error->noFile = 'No file.';
$lang->excel->error->noData = 'No valid data.';

$lang->excel->title = new stdclass();
$lang->excel->title->contact  = 'Contact';
$lang->excel->title->sysValue = 'System value';

$lang->excel->help = new stdclass();
$lang->excel->help->contact = "'realname' is required. This data will be ignored if empty.";

$lang->date = new stdclass();
$lang->date->minute = 'minute';
$lang->date->day    = 'day';

$lang->genderList = new stdclass();
$lang->genderList->m = 'Male';
$lang->genderList->f = 'Female';
$lang->genderList->u = '';

$lang->datepicker = new stdclass();

$lang->datepicker->dpText = new stdclass();
$lang->datepicker->dpText->TEXT_OR          = 'Or ';
$lang->datepicker->dpText->TEXT_PREV_YEAR   = 'Last Year';
$lang->datepicker->dpText->TEXT_PREV_MONTH  = 'Last Month';
$lang->datepicker->dpText->TEXT_PREV_WEEK   = 'Last Week';
$lang->datepicker->dpText->TEXT_YESTERDAY   = 'Yesterday';
$lang->datepicker->dpText->TEXT_THIS_YEAR   = 'This Year';
$lang->datepicker->dpText->TEXT_THIS_MONTH  = 'This Month';
$lang->datepicker->dpText->TEXT_THIS_WEEK   = 'This Week';
$lang->datepicker->dpText->TEXT_TODAY       = 'Today';
$lang->datepicker->dpText->TEXT_NEXT_YEAR   = 'Next Year';
$lang->datepicker->dpText->TEXT_NEXT_MONTH  = 'Next Month';
$lang->datepicker->dpText->TEXT_CLOSE       = 'Close';
$lang->datepicker->dpText->TEXT_DATE        = 'select time frame';
$lang->datepicker->dpText->TEXT_CHOOSE_DATE = 'Choose date';

$lang->datepicker->dayNames     = array('Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday');
$lang->datepicker->abbrDayNames = array('Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat');
$lang->datepicker->monthNames   = array('January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December');

$lang->currencyList['rmb']  = 'RMB Yuan';
$lang->currencyList['usd']  = 'US Dollar';
$lang->currencyList['hkd']  = 'HongKong Dollar';
$lang->currencyList['twd']  = 'New Taiwan Dollar';
$lang->currencyList['euro'] = 'Euro';
$lang->currencyList['dem']  = 'Deutsche Mark';
$lang->currencyList['chf']  = 'Swiss Franc';
$lang->currencyList['frf']  = 'French Franc';
$lang->currencyList['gbp']  = 'Pound';
$lang->currencyList['nlg']  = 'Florin';
$lang->currencyList['cad']  = 'Canadian Dollar';
$lang->currencyList['sur']  = 'Rouble';
$lang->currencyList['inr']  = 'Indian Rupee';
$lang->currencyList['aud']  = 'Australian Dollar';
$lang->currencyList['nzd']  = 'New Zealand Dollar';
$lang->currencyList['thb']  = 'Thai Baht';
$lang->currencyList['sgd']  = 'Singapore Dollar';

$lang->currencySymbols['rmb']  = '￥';
$lang->currencySymbols['usd']  = '$';
$lang->currencySymbols['hkd']  = 'HK$';
$lang->currencySymbols['twd']  = 'NT$';
$lang->currencySymbols['euro'] = 'ECU';
$lang->currencySymbols['dem']  = 'DM';
$lang->currencySymbols['chf']  = 'SF';
$lang->currencySymbols['frf']  = 'FF';
$lang->currencySymbols['gbp']  = '￡';
$lang->currencySymbols['nlg']  = 'F';
$lang->currencySymbols['cad']  = 'CAN$';
$lang->currencySymbols['sur']  = 'Rbs';
$lang->currencySymbols['inr']  = 'Rs';
$lang->currencySymbols['aud']  = 'A$';
$lang->currencySymbols['nzd']  = 'NZ$';
$lang->currencySymbols['thb']  = 'B';
$lang->currencySymbols['sgd']  = 'S$';

$lang->currencyTip['w'] = '';
$lang->currencyTip['y'] = '';

if(!defined('DT_DATETIME1'))  define('DT_DATETIME1',  'Y-m-d H:i:s');
if(!defined('DT_DATETIME2'))  define('DT_DATETIME2',  'Y-m-d H:i');
if(!defined('DT_DATETIME3'))  define('DT_DATETIME3',  'y-m-d H:i');
if(!defined('DT_MONTHTIME1')) define('DT_MONTHTIME1', 'n/d H:i');
if(!defined('DT_MONTHTIME2')) define('DT_MONTHTIME2', 'F j, H:i');
if(!defined('DT_DATE1'))      define('DT_DATE1',      'Y-m-d');
if(!defined('DT_DATE2'))      define('DT_DATE2',      'Ymd');
if(!defined('DT_DATE3'))      define('DT_DATE3',      'F j, Y ');
if(!defined('DT_DATE4'))      define('DT_DATE4',      'M j');
if(!defined('DT_DATE5'))      define('DT_DATE5',      'M Y');
if(!defined('DT_TIME1'))      define('DT_TIME1',      'H:i:s');
if(!defined('DT_TIME2'))      define('DT_TIME2',      'H:i');

include (dirname(__FILE__) . '/menuOrder.php');
/* cash/common */
$lang->app = new stdclass();
$lang->app->name = 'CASH';

$lang->menu->cash = new stdclass();
$lang->menu->cash->dashboard = 'Home|dashboard|index|';
$lang->menu->cash->all       = 'All|trade|browse|mode=all';
$lang->menu->cash->in        = 'Income|trade|browse|mode=in';
$lang->menu->cash->out       = 'Expense|trade|browse|mode=out';
$lang->menu->cash->transfer  = 'Transfer|trade|browse|mode=transfer';
$lang->menu->cash->invest    = 'Invest|trade|browse|mode=invest';
$lang->menu->cash->loan      = 'Loan|trade|browse|mode=loan';
$lang->menu->cash->check     = 'Reconcile|depositor|check|';
$lang->menu->cash->report    = 'Report|trade|report|';
$lang->menu->cash->depositor = 'Account|depositor|index|';
$lang->menu->cash->provider  = 'Supplier|provider|index|';
//$lang->menu->cash->contact   = 'Contact|contact|browse|';
$lang->menu->cash->setting   = 'Settings|tree|browse|type=in|';

if(!isset($lang->depositor)) $lang->depositor = new stdclass();

if(!isset($lang->trade)) $lang->trade = new stdclass();
$lang->trade->menu = new stdclass();

if(!isset($lang->contact)) $lang->contact = new stdclass();
$lang->contact->menu = new stdclass();
$lang->contact->menu->browse = array('link' => 'Contacts|contact|browse|', 'alias' => 'create,edit,view');

if(!isset($lang->report)) $lang->report = new stdclass();
$lang->report->menu = new stdclass();
$lang->report->menu->annual  = 'Annual balance sheet|trade|report|';
$lang->report->menu->compare = 'Annual Comparison sheet|trade|compare|';
$lang->report->menu->export  = 'Profit and loss statement|trade|export2Excel|mode=depositor';
$lang->report->menu->setting = 'Report Unit|trade|setReportUnit|';

$lang->setting = new stdclass();
$lang->setting->menu = new stdclass();
$lang->setting->menu->income       = 'Income|tree|browse|type=in|';
$lang->setting->menu->expend       = 'Expense|tree|browse|type=out|';
$lang->setting->menu->currency     = 'Currency|setting|lang|module=common&field=currencyList';
$lang->setting->menu->schema       = 'Template|schema|browse|';
$lang->setting->menu->tradePriv    = 'Privilege|group|managetradepriv|';
$lang->setting->menu->tradeSetting = 'Settings|trade|tradeSetting|';
include(dirname(__FILE__) . '/menuOrder.php');
/* crm/common */
$lang->app = new stdclass();
$lang->app->name = 'CRM';

$lang->menu->crm = new stdclass();
$lang->menu->crm->dashboard = 'Home|dashboard|index|';
$lang->menu->crm->order     = 'Order|order|index|';
$lang->menu->crm->contract  = 'Contract|contract|browse|mode=unfinished';
$lang->menu->crm->customer  = 'Customer|customer|index|';
$lang->menu->crm->provider  = 'Supplier|provider|browse|';
$lang->menu->crm->contact   = 'Contact|contact|index|';
$lang->menu->crm->leads     = 'List|leads|browse|';
$lang->menu->crm->product   = 'Product|product|index|';
$lang->menu->crm->setting   = 'Settings|setting|lang|module=product&field=statusList';

if(!isset($lang->order)) $lang->order = new stdclass();
$lang->order->menu = new stdclass();
$lang->order->menu->browse      = 'All|order|browse|mode=all';
$lang->order->menu->assignedTo  = 'Assigned To Me|order|browse|mode=assignedtome';
$lang->order->menu->contactedBy = 'Contacted By Me|order|browse|mode=contactedby';
$lang->order->menu->past        = 'Urgent|order|browse|mode=past';
$lang->order->menu->today       = 'Today|order|browse|mode=today';
$lang->order->menu->tomorrow    = 'Tomorrow|order|browse|mode=tomorrow';
$lang->order->menu->thisweek    = 'This Week|order|browse|mode=thisweek';
$lang->order->menu->thismonth   = 'This Month|order|browse|mode=thismonth';
$lang->order->menu->public      = 'Public|order|browse|mode=public';
$lang->order->menu->report      = 'Report|report|browse|module=order';

if(!isset($lang->contact)) $lang->contact = new stdclass();
$lang->contact->menu = new stdclass();
$lang->contact->menu->browse      = 'All Contacts|contact|browse|mode=all';
$lang->contact->menu->contactedBy = 'Contacted By Me|contact|browse|mode=contactedby';
$lang->contact->menu->past        = 'Urgent|contact|browse|mode=past';
$lang->contact->menu->today       = 'Today|contact|browse|mode=today';
$lang->contact->menu->tomorrow    = 'Tomorrow|contact|browse|mode=tomorrow';
$lang->contact->menu->thisweek    = 'This Week|contact|browse|mode=thisweek';
$lang->contact->menu->thismonth   = 'This Month|contact|browse|mode=thismonth';

if(!isset($lang->leads)) $lang->leads = new stdclass();
$lang->leads->menu = new stdclass();
$lang->leads->menu->assignedToNull = 'Assigned to Null|leads|assignedToNull|';
$lang->leads->menu->assignedTo     = 'Assigned to Me|leads|browse|mode=assignedTo';
$lang->leads->menu->next           = 'Next contact|leads|browse|mode=next';
$lang->leads->menu->ignoredBy      = 'Ignored by Me|leads|browse|mode=ignoredBy&status=ignore';
$lang->leads->menu->public         = 'Public|leads|browse|mode=all&status=ignore';
$lang->leads->menu->setting        = 'Settings|leads|setting|';

if(!isset($lang->contract)) $lang->contract = new stdclass();
$lang->contract->menu = new stdclass();
$lang->contract->menu->browse       = 'All|contract|browse|mode=all';
$lang->contract->menu->contactedBy  = 'Contacted By Me|contract|browse|mode=contactedby';
$lang->contract->menu->unfinished   = 'Unfinished|contract|browse|mode=unfinished';
$lang->contract->menu->unreceived   = 'Receiving|contract|browse|mode=unreceived';
$lang->contract->menu->undeliveried = 'Delivering|contract|browse|mode=undeliveried';
$lang->contract->menu->finished     = 'Finished|contract|browse|mode=finished';
$lang->contract->menu->canceled     = 'Cancelled|contract|browse|mode=canceled';
$lang->contract->menu->expired      = 'Expired|contract|browse|mode=expired';
$lang->contract->menu->expire       = 'Expire Soon|contract|browse|mode=expire';
$lang->contract->menu->report       = 'Report|report|browse|module=contract';

$lang->setting = new stdclass();
$lang->setting->menu = new stdclass();
$lang->setting->menu->product         = 'Product Status|setting|lang|module=product&field=statusList&appName=sys';
$lang->setting->menu->productCategory = 'Product Category|tree|browse|type=product&startModule=&root=&from=setting';
$lang->setting->menu->customerSource  = 'Customer Source|setting|lang|module=customer&field=sourceList&appName=sys';
$lang->setting->menu->customerType    = 'Customer Status|setting|lang|module=customer&field=typeList&appName=sys';
$lang->setting->menu->customerSize    = 'Customer Size|setting|lang|module=customer&field=sizeNameList&appName=sys';
$lang->setting->menu->customerLevel   = 'Customer Level|setting|lang|module=customer&field=levelNameList&appName=sys';
$lang->setting->menu->customerStatus  = 'Customer Status|setting|lang|module=customer&field=statusList&appName=sys';
$lang->setting->menu->area            = 'Area|tree|browse|type=area|';
$lang->setting->menu->industry        = 'Industry|tree|browse|type=industry|';
$lang->setting->menu->currency        = 'Currency|setting|lang|module=common&field=currencyList';
$lang->setting->menu->salesGroup      = array('link' => 'Sales Team|sales|browse|', 'alias' => 'create,edit');
$lang->setting->menu->customerPool    = 'Customer Pool|setting|customerpool||';

if(!isset($lang->sales)) $lang->sales = new stdclass();
$lang->sales->menu = $lang->setting->menu;

$lang->dashboard = new stdclass();
if(!isset($lang->resume))  $lang->resume  = new stdclass();
if(!isset($lang->address)) $lang->address = new stdclass();
include (dirname(__FILE__) . '/menuOrder.php');
/* doc/common */
$lang->app = new stdclass();
$lang->app->name = 'DOC';

$lang->menu->doc = new stdclass();
$lang->menu->doc->dashboard = 'Document|doc|index|';
$lang->menu->doc->project   = 'Project|doc|alllibs|type=project';
$lang->menu->doc->custom    = 'Custom|doc|alllibs|type=custom';

$lang->dashboard = new stdclass();

if(!isset($lang->doc)) $lang->doc = new stdclass();

include (dirname(__FILE__) . '/menuOrder.php');
/* oa/common */Company Attend<?php
$lang->app = new stdclass();
$lang->app->name = 'OA';

$lang->menu->oa = new stdclass();
$lang->menu->oa->dashboard = 'Home|dashboard|index|';
$lang->menu->oa->my        = 'Review|my|review|';
$lang->menu->oa->announce  = 'Announce|announce|index|';
$lang->menu->oa->attend    = 'Attendance|attend|personal|';
$lang->menu->oa->leave     = 'Leave|leave|personal|';
$lang->menu->oa->makeup    = 'Makeup|makeup|personal|';
$lang->menu->oa->overtime  = 'Overtime|overtime|personal|';
$lang->menu->oa->lieu      = 'Leave In Lieu|lieu|personal|';
$lang->menu->oa->trip      = 'Trip|trip|personal|';
$lang->menu->oa->egress    = 'Egress|egress|personal|';
$lang->menu->oa->refund    = 'Reimburse|refund|personal|';
$lang->menu->oa->holiday   = 'Holiday|holiday|browse|';
$lang->menu->oa->setting   = 'Settings|setting|modules|app=oa';

$lang->menu->dashboard = $lang->menu->oa;

$lang->dashboard = new stdclass();

if(!isset($lang->announce)) $lang->announce = new stdclass();
$lang->announce->menu = new stdclass();
$lang->announce->menu->browse   = array('link' => 'Announcement|announce|browse|', 'alias' => 'create,edit,view');
$lang->announce->menu->category = 'Category|tree|browse|type=announce|';

if(!isset($lang->attend)) $lang->attend = new stdclass();
$lang->attend->menu = new stdclass();
$lang->attend->menu->personal   = 'My attendance|attend|personal|';
$lang->attend->menu->department = 'Department|attend|department|';
$lang->attend->menu->company    = 'Company|attend|company|';
$lang->attend->menu->detail     = 'Details|attend|detail|';
$lang->attend->menu->review     = 'Review|attend|browsereview|';
$lang->attend->menu->stat       = 'Report|attend|stat|';
$lang->attend->menu->settings   = array('link' => 'Settings|attend|settings|', 'alias' => 'personalsettings,setmanager');

if(!isset($lang->leave)) $lang->leave = new stdclass();
$lang->leave->menu = new stdclass();
$lang->leave->menu->personal     = 'My leave|leave|personal|';
$lang->leave->menu->browseReview = 'Review by me|leave|browsereview|';
$lang->leave->menu->company      = 'All|leave|company|';
$lang->leave->menu->settings     = 'Settings|leave|setReviewer|';

if(!isset($lang->makeup)) $lang->makeup = new stdclass();
$lang->makeup->menu = new stdclass();
$lang->makeup->menu->personal     = 'My makeup|makeup|personal|';
$lang->makeup->menu->browseReview = 'Review by me|makeup|browsereview|';
$lang->makeup->menu->company      = 'All|makeup|company|';
$lang->makeup->menu->settings     = 'Settings|makeup|setReviewer|';

if(!isset($lang->overtime)) $lang->overtime = new stdclass();
$lang->overtime->menu = new stdclass();
$lang->overtime->menu->personal     = 'My overtime|overtime|personal|';
$lang->overtime->menu->browseReview = 'Review by me|overtime|browsereview|';
$lang->overtime->menu->company      = 'All|overtime|company|';
$lang->overtime->menu->settings     = 'Settings|overtime|setReviewer|';

if(!isset($lang->lieu)) $lang->lieu = new stdclass();
$lang->lieu->menu = new stdclass();
$lang->lieu->menu->personal     = 'My lieu|lieu|personal|';
$lang->lieu->menu->browseReview = 'Review By Me|lieu|browsereview|';
$lang->lieu->menu->company      = 'All|lieu|company|';
$lang->lieu->menu->settings     = 'Settings|lieu|setReviewer|';

if(!isset($lang->trip)) $lang->trip = new stdclass();
$lang->trip->menu = new stdclass();
$lang->trip->menu->personal   = 'My trip|trip|personal|';
$lang->trip->menu->department = 'Department|trip|department|';
$lang->trip->menu->company    = 'Company|trip|company|';

if(!isset($lang->egress)) $lang->egress = new stdclass();
$lang->egress->menu = new stdclass();
$lang->egress->menu->personal   = 'Mine|egress|personal|';
$lang->egress->menu->department = 'Department|egress|department|';
$lang->egress->menu->company    = 'Company|egress|company|';

if(!isset($lang->refund)) $lang->refund = new stdclass();
$lang->refund->menu = new stdclass();
$lang->refund->menu->personal   = array('link' => 'My reimbursement|refund|personal|', 'alias' => 'create, edit');
$lang->refund->menu->review     = 'Review wait|refund|browsereview|status=unreviewed';
$lang->refund->menu->reviewedBy = 'Review by me|refund|browsereview|status=reviewed';
$lang->refund->menu->todo       = 'Reimburse wait|refund|todo|';
$lang->refund->menu->company    = 'All|refund|company|';
$lang->refund->menu->settings   = array('link' => 'Settings|refund|setreviewer|', 'alias' => 'setcategory,setdepositor,setrefundby');

if(!isset($lang->holiday)) $lang->holiday = new stdclass();
$lang->holiday->menu = new stdclass();
$lang->holiday->menu->all = 'All|holiday|browse|';

$lang->setting->menu = new stdclass();
$lang->setting->menu->modules         = 'Module|setting|modules|app=oa';
$lang->setting->menu->companyAttend   = 'Company|attend|settings|module=setting';
$lang->setting->menu->personalAttend  = 'Personal|attend|personalSettings|module=setting';
$lang->setting->menu->deptManager     = 'Dept Manager|attend|setManager|module=setting';
$lang->setting->menu->leaveReviewer   = 'Leave|leave|setReviewer|module=setting';
$lang->setting->menu->makeupReviewer  = 'Makeup|makeup|setReviewer|module=setting';
$lang->setting->menu->lieuReviewer    = 'Lieu|lieu|setReviewer|module=setting';
$lang->setting->menu->overtimeReviewer= 'Overtime|overtime|setReviewer|module=setting';
$lang->setting->menu->refundReviewer  = 'Refund Reviewer|refund|setReviewer|module=setting';
$lang->setting->menu->refundCategory  = 'Refund Category|refund|setCategory|module=setting';
$lang->setting->menu->refundDepositor = 'Refund Depositor|refund|setDepositor|module=setting';
$lang->setting->menu->refundBy        = 'Refund By|refund|setRefundBy|module=setting';
include (dirname(__FILE__) . '/menuOrder.php');
/* proj/common */
$lang->app = new stdclass();
$lang->app->name = 'PROJ';

$lang->menu->proj = new stdclass();
$lang->menu->proj->dashboard = 'Home|dashboard|index|';
$lang->menu->proj->project   = 'Project|project|index|status=involved';
$lang->menu->proj->task      = 'Task|task|browse|projectID=&mode=assignedTo';

$lang->dashboard = new stdclass();

if(!isset($lang->project)) $lang->project = new stdclass();
$lang->project->menu = new stdclass();
$lang->project->menu->involved  = 'My Involved|project|index|status=involved';
$lang->project->menu->doing     = 'Projects|project|index|status=doing';
$lang->project->menu->finished  = 'Finished|project|index|ststus=finished';
$lang->project->menu->suspend   = 'Suspended|project|index|ststus=suspend';

$lang->task->menu = new stdclass();
$lang->task->menu->assignedTo = 'Assigned To Me|task|browse|projectID=&mode=assignedTo';
$lang->task->menu->createdBy  = 'Created By Me|task|browse|projectID=&mode=createdBy';
$lang->task->menu->finishedBy = 'Finished By Me|task|browse|projectID=&mode=finishedBy';

include (dirname(__FILE__) . '/menuOrder.php');
/* team/common */
$lang->app = new stdclass();
$lang->app->name = 'TEAM';

$lang->menu->team = new stdclass();
$lang->menu->team->dashboard = 'Home|dashboard|index|';
$lang->menu->team->forum     = 'Forum|forum|index|';
$lang->menu->team->blog      = 'Blog|blog|index|';
$lang->menu->team->user      = 'Colleague|user|colleague|';
$lang->menu->team->company   = 'Company|company|index|';
$lang->menu->team->setting   = 'Settings|tree|browse|type=forum|';

if(!isset($lang->forum)) $lang->forum = new stdclass();

if(!isset($lang->blog)) $lang->blog = new stdclass();
$lang->blog->menu = new stdclass();
$lang->blog->menu->index    = 'Blogs|blog|index|';
$lang->blog->menu->category = 'Blog Categories|tree|browse|type=blog';

$lang->setting = new stdclass();
$lang->setting->menu = new stdclass();
$lang->setting->menu->board = 'Boards|tree|browse|type=forum|';
$lang->setting->menu->blog  = 'Blogs|tree|browse|type=blog|';
$lang->setting->menu->dept  = 'Departments|tree|browse|type=dept|';
$lang->setting->menu->role  = 'Roles|setting|lang|module=user&field=roleList&appName=sys|';
include(dirname(__FILE__) . '/menuOrder.php');
/* cash/depositor */
if(!isset($lang->depositor)) $lang->depositor = new stdclass();
$lang->depositor->common          = 'Account';
$lang->depositor->id              = 'ID';
$lang->depositor->abbr            = 'Abbreviation';
$lang->depositor->serviceProvider = 'Provider';
$lang->depositor->bankProvider    = 'Bank';
$lang->depositor->title           = 'Title';
$lang->depositor->tags            = 'Tags';
$lang->depositor->account         = 'Account';
$lang->depositor->bankcode        = 'Account No.';
$lang->depositor->public          = 'Public';
$lang->depositor->type            = 'Type';
$lang->depositor->currency        = 'Currency';
$lang->depositor->status          = 'Status';
$lang->depositor->createdBy       = 'Created By';
$lang->depositor->createdDate     = 'Created Date';
$lang->depositor->editedBy        = 'Edited By';
$lang->depositor->editedDate      = 'Edited Date';

$lang->depositor->all            = 'All';
$lang->depositor->create         = 'Create';
$lang->depositor->browse         = 'Account';
$lang->depositor->edit           = 'Edit';
$lang->depositor->delete         = 'Delete';
$lang->depositor->view           = 'View';
$lang->depositor->forbid         = 'Disable';
$lang->depositor->activate       = 'Activate';
$lang->depositor->export         = 'Export';
$lang->depositor->balance        = 'Balance';
$lang->depositor->saveBalance    = 'Save';
$lang->depositor->detail         = 'Detail';
$lang->depositor->normalBrowse   = 'Normal Account';
$lang->depositor->disabledBrowse = 'Disabled Account';

$lang->depositor->check         = 'Check';
$lang->depositor->start         = 'Begin';
$lang->depositor->end           = 'End';
$lang->depositor->originValue   = 'Starting';
$lang->depositor->actualValue   = 'Actual';
$lang->depositor->computedValue = 'Calculated';
$lang->depositor->result        = 'Result';
$lang->depositor->success       = "<span class='text-success'>Ok</span>";
$lang->depositor->more          = "<span class='text-danger'>%s</span>";
$lang->depositor->less          = "<span class='text-danger'>%s</span>";

$lang->depositor->createBalance = 'Please add balance first.';

$lang->depositor->typeList['cash']   = 'Cash';
$lang->depositor->typeList['bank']   = 'Debit';
$lang->depositor->typeList['online'] = 'Electronic';

$lang->depositor->publicList['1'] = 'Public';
$lang->depositor->publicList['0'] = 'Personal';

$lang->depositor->providerList['']       = '';
$lang->depositor->providerList['alipay'] = 'Alipay';
$lang->depositor->providerList['paypal'] = 'Paypal';
$lang->depositor->providerList['tenpay'] = 'Tenpay';
$lang->depositor->providerList['wechat'] = 'Wechat Pay';

$lang->depositor->statusList['normal']  = 'Normal';
$lang->depositor->statusList['disable'] = 'Disable';

$lang->depositor->placeholder = new stdclass();
$lang->depositor->placeholder->tags     = 'Please divide tags with commas';
$lang->depositor->placeholder->noBccomp = 'Please install bccmom extension first.';
/* cash/trade */
if(!isset($lang->trade)) $lang->trade = new stdclass();
$lang->trade->common      = 'Trade';
$lang->trade->id          = 'ID';
$lang->trade->depositor   = 'Account';
$lang->trade->type        = 'Type';
$lang->trade->currency    = 'Currency';
$lang->trade->exchangeRate= 'Exchange rate';
$lang->trade->trader      = 'Trader';
$lang->trade->customer    = 'Customer';
$lang->trade->money       = 'Amount';
$lang->trade->status      = 'Status';
$lang->trade->rate        = 'ROI';
$lang->trade->desc        = 'Description';
$lang->trade->product     = 'Product';
$lang->trade->order       = 'Order';
$lang->trade->contract    = 'Contract';
$lang->trade->category    = 'Category';
$lang->trade->date        = 'Date';
$lang->trade->deadline    = 'Deadline';
$lang->trade->handlers    = 'Handler';
$lang->trade->dept        = 'Dept';
$lang->trade->receipt     = 'From';
$lang->trade->payment     = 'To';
$lang->trade->fee         = 'Fee';
$lang->trade->transferIn  = 'Amount';
$lang->trade->transferOut = 'Amount';
$lang->trade->schema      = 'Template';
$lang->trade->importFile  = 'Files';
$lang->trade->encode      = 'Encode';
$lang->trade->createdBy   = 'Created By';
$lang->trade->createdDate = 'Created On';
$lang->trade->editedBy    = 'Edited By';
$lang->trade->editedDate  = 'Edited On';
$lang->trade->month       = 'Month';
$lang->trade->uploadFile  = 'Files';
$lang->trade->productLine = 'Product Line';
$lang->trade->area        = 'Customer Area';
$lang->trade->industry    = 'Customer Industry';
$lang->trade->level       = 'Customer Class';
$lang->trade->size        = 'Customer Size';
$lang->trade->interest    = 'Loan Interest';
$lang->trade->loanID      = 'Loan';
$lang->trade->investID    = 'Invest';
$lang->trade->loanrate    = 'Interest Rate';
$lang->trade->outType     = 'Type';

$lang->trade->all            = 'All';
$lang->trade->create         = 'Create Trade';
$lang->trade->in             = 'Income';
$lang->trade->out            = 'Expense';
$lang->trade->invest         = 'Invest';
$lang->trade->redeem         = 'Redeem';
$lang->trade->loan           = 'Loan';
$lang->trade->repay          = 'Pay';
$lang->trade->createIn       = 'Income';
$lang->trade->createOut      = 'Expense';
$lang->trade->transfer       = 'Transfer';
$lang->trade->edit           = 'Edit';
$lang->trade->detail         = 'Details';
$lang->trade->view           = 'View';
$lang->trade->browse         = 'Bills';
$lang->trade->delete         = 'Delete';
$lang->trade->batchCreate    = 'Batch Create';
$lang->trade->batchEdit      = 'Batch Edit';
$lang->trade->newTrader      = 'Create Trader';
$lang->trade->import         = 'Import';
$lang->trade->export         = 'Export';
$lang->trade->showImport     = 'Results';
$lang->trade->fullYear       = 'Full year';
$lang->trade->quarter        = 'Quarter';
$lang->trade->export2Excel   = 'Export Excel';
$lang->trade->compare        = 'Annual Compare';
$lang->trade->setReportUnit  = 'Report Unit';
$lang->trade->settings       = 'Settings';
$lang->trade->manageCategory = 'Manage Category';

$lang->trade->settingList['trader']       = 'Trader required';
$lang->trade->settingList['product']      = 'Productrequired';
$lang->trade->settingList['dept']         = 'Department required';
$lang->trade->settingList['category']     = 'Category required';
$lang->trade->settingList['lastCategory'] = 'Last-level Category required';

$lang->trade->report = new stdclass();
$lang->trade->report->common      = 'Report'; 
$lang->trade->report->annual      = ' Annual Report'; 
$lang->trade->report->month       = ' Month Report'; 
$lang->trade->report->compare     = ' Annual Compare';
$lang->trade->report->create      = 'Create Report';
$lang->trade->report->selectYears = 'Select Years';
$lang->trade->report->undefined   = 'Undefined';
$lang->trade->report->compareTip  = 'Select two years to compare.';
$lang->trade->report->unit        = 'Unit';

$lang->trade->report->unitList[1]       = '$';
$lang->trade->report->unitList[1000]    = 'K$';
$lang->trade->report->unitList[10000]   = '10K$';
$lang->trade->report->unitList[1000000] = 'M$';

$lang->trade->report->typeList['annual']  = 'Annual balance sheet'; 
$lang->trade->report->typeList['compare'] = 'Annual comparison sheet'; 

$lang->trade->typeList['in']          = 'Income';
$lang->trade->typeList['out']         = 'Expense';
$lang->trade->typeList['transferout'] = 'Transfer out';
$lang->trade->typeList['transferin']  = 'Transfer in';
$lang->trade->typeList['invest']      = 'Invest';
$lang->trade->typeList['redeem']      = 'Redeem';
$lang->trade->typeList['loan']        = 'Loan';
$lang->trade->typeList['repay']       = 'Repay';

$lang->trade->quarters = new stdclass();
$lang->trade->quarters->Q4 = '10,11,12';
$lang->trade->quarters->Q3 = '07,08,09';
$lang->trade->quarters->Q2 = '04,05,06';
$lang->trade->quarters->Q1 = '01,02,03';

$lang->trade->quarterList['Q1'] = '1st Quarter';
$lang->trade->quarterList['Q2'] = '2nd Quarter';
$lang->trade->quarterList['Q3'] = '3rd Quarter';
$lang->trade->quarterList['Q4'] = '4th Quarter';

$lang->trade->monthList['last']  = 'Last Year';
$lang->trade->monthList['01']    = 'January';
$lang->trade->monthList['02']    = 'February';
$lang->trade->monthList['03']    = 'March';
$lang->trade->monthList['04']    = 'April';
$lang->trade->monthList['05']    = 'May';
$lang->trade->monthList['06']    = 'June';
$lang->trade->monthList['07']    = 'July';
$lang->trade->monthList['08']    = 'August';
$lang->trade->monthList['09']    = 'September';
$lang->trade->monthList['10']    = 'October';
$lang->trade->monthList['11']    = 'November';
$lang->trade->monthList['12']    = 'December';
$lang->trade->monthList['total'] = 'Total';

$lang->trade->categoryList['transferin']  = 'Transfer In';
$lang->trade->categoryList['transferout'] = 'Transfer Out';
$lang->trade->categoryList['invest']      = 'Invest';
$lang->trade->categoryList['redeem']      = 'Redeem';
$lang->trade->categoryList['loan']        = 'Loan';
$lang->trade->categoryList['repay']       = 'Repay';

$lang->trade->transferCategoryList['transferin']  = 'Transfer In';
$lang->trade->transferCategoryList['transferout'] = 'Transfer Out';

$lang->trade->objectTypeList['customer'] = 'Customer';
$lang->trade->objectTypeList['order']    = 'Order';
$lang->trade->objectTypeList['contract'] = 'Contract';

$lang->trade->investTypeList['invest'] = 'Invest';
$lang->trade->investTypeList['redeem'] = 'Redeem';

$lang->trade->loanTypeList['loan']  = 'Loan';
$lang->trade->loanTypeList['repay'] = 'Repay';

$lang->trade->encodeList['gbk']  = 'GBK';
$lang->trade->encodeList['utf8'] = 'UTF-8';

$lang->trade->notEqual = 'The two accounts cannot be the same!';
$lang->trade->feeDesc  = '%s from %s to %s';
$lang->trade->fileNode = 'The format is csv';

$lang->trade->importedFields = array();
$lang->trade->importedFields['category'] = 'Category';
$lang->trade->importedFields['type']     = 'Type';
$lang->trade->importedFields['trader']   = 'Trader';
$lang->trade->importedFields['in']       = 'Income';
$lang->trade->importedFields['out']      = 'Expense';
$lang->trade->importedFields['date']     = 'Date';
$lang->trade->importedFields['category'] = 'Category';
$lang->trade->importedFields['dept']     = 'Department';
$lang->trade->importedFields['desc']     = 'Description';
$lang->trade->importedFields['fee']      = 'Fee';
$lang->trade->importedFields['product']  = 'Product';

$lang->trade->statusList['returned']   = 'Returned';
$lang->trade->statusList['returning']  = 'Returning';
$lang->trade->statusList['unReturned'] = 'Unreturned';
$lang->trade->statusList['repaied']    = 'Repaied';
$lang->trade->statusList['repaying']   = 'Repaying';
$lang->trade->statusList['unRepaied']  = 'Unrepaied';

$lang->trade->progressList['invest'] = 'Redemption progress';
$lang->trade->progressList['loan']   = 'Repayment progress';

$lang->trade->totalIn       = '%s: income %s;';
$lang->trade->totalOut      = '%s: expense %s;';
$lang->trade->totalAmount   = '%s: income %s, expense %s, %s;';
$lang->trade->totalInvest   = '%s: invest %s, redeem %s,unredeem %s, %s;';
$lang->trade->selectItem    = 'Seleted';
$lang->trade->profit        = 'profit';
$lang->trade->loss          = 'loss';
$lang->trade->balance       = 'Income is equal to Expense';
$lang->trade->total         = 'Total';

$lang->trade->noTraderMatch = 'No matched trader，click to create';
$lang->trade->unique        = 'There has been same record';
$lang->trade->ignore        = 'Ignore';
$lang->trade->denied        = 'You have no permission to browse the list, please ask admin to set privilege.';
$lang->trade->emptyData     = 'The fields with * cannot be empty.';
$lang->trade->detailTip     = 'The total detail money is different of trade, confirm save current detail trades?';

$lang->trade->chartList['productLine'] = 'by product line';
$lang->trade->chartList['category']    = 'by category';
$lang->trade->chartList['area']        = 'by customer area';
$lang->trade->chartList['industry']    = 'by customer industry';
$lang->trade->chartList['size']        = 'by customer size';
$lang->trade->chartList['dept']        = 'by department';

$lang->trade->excel = new stdclass();
$lang->trade->excel->title = new stdclass();
$lang->trade->excel->title->depositor = ' Profit and Loss Statement';

$lang->trade->excel->help = new stdclass();
$lang->trade->excel->help->depositor = "This report don't differentiate currencies.";
/* cash/block */
$lang->block->common    = 'Blocks';
$lang->block->depositor = 'Checking Account';
$lang->block->lblBlock  = 'Block';
$lang->block->admin     = 'Manage Block';
$lang->block->num       = 'Number';
$lang->block->orderBy   = 'Order';

$lang->block->availableBlocks = new stdclass();
$lang->block->availableBlocks->depositor = 'Checking Account';
$lang->block->availableBlocks->trade     = 'Trade';
$lang->block->availableBlocks->baseFacts = 'Income and expenses';
$lang->block->availableBlocks->provider  = 'Suppliers';
$lang->block->availableBlocks->report    = 'Report';

$this->lang->block->orderByList->trade['id_asc']  = 'ID ASC';
$this->lang->block->orderByList->trade['id_desc'] = 'ID DESC';

$this->lang->block->typeList->trade['all']  = 'All';
$this->lang->block->typeList->trade['in']   = 'Income';
$this->lang->block->typeList->trade['out']  = 'Expense';

$this->lang->block->groupByList = new stdclass();
$this->lang->block->groupByList->trade['category'] = 'by category';
$this->lang->block->groupByList->trade['dept']     = 'by deptment';

$this->lang->block->orderByList->provider['id_asc']  = 'ID ASC';
$this->lang->block->orderByList->provider['id_desc'] = 'ID DESC';
/* cash/balance */
$lang->balance = new stdclass();

$lang->balance->common    = 'Balance';
$lang->balance->id        = 'ID';
$lang->balance->depositor = 'Account';
$lang->balance->currency  = 'currency';
$lang->balance->money     = 'Amount';
$lang->balance->desc      = 'Description';
$lang->balance->date      = 'Date';

$lang->balance->create = 'Add Balance';
$lang->balance->browse = 'Balance';
$lang->balance->edit   = 'Edit';
$lang->balance->delete = 'Delete';
/* crm/resume */
if(!isset($lang->resume)) $lang->resume = new stdclass();
$lang->resume->common   = 'Resume';
$lang->resume->id       = 'ID';
$lang->resume->contact  = 'Contact';
$lang->resume->customer = 'Customer';
$lang->resume->maker    = 'Maker';
$lang->resume->dept     = 'Dept';
$lang->resume->title    = 'Post';
$lang->resume->address  = 'Address';
$lang->resume->join     = 'Join date';
$lang->resume->left     = 'Left date';
$lang->resume->time     = 'Time';

$lang->resume->browse = 'Browse Resume';
$lang->resume->delete = 'Delete Resume';
$lang->resume->create = 'Change Resume';
$lang->resume->edit   = 'Edit company info';
$lang->resume->leave  = 'Leave';

$lang->resume->showJoin = 'Join : %s';
$lang->resume->showLeft = ' Left : %s';
/* crm/order */
if(!isset($lang->order)) $lang->order = new stdclass();
$lang->order->common         = 'Order';
$lang->order->id             = 'ID';
$lang->order->name           = 'Name';
$lang->order->product        = 'Product';
$lang->order->productLine    = 'Product Line';
$lang->order->customer       = 'Customer';
$lang->order->contact        = 'Contact';
$lang->order->team           = 'Team';
$lang->order->currency       = 'Currency';
$lang->order->plan           = 'Budget';
$lang->order->real           = 'Actual';
$lang->order->planShort      = 'Plan';
$lang->order->realShort      = 'Rreal';
$lang->order->amount         = 'Amount';
$lang->order->status         = 'Status';
$lang->order->createdBy      = 'Created By';
$lang->order->createdDate    = 'Created On';
$lang->order->assignedTo     = 'Assignee';
$lang->order->assignedBy     = 'Assigned By';
$lang->order->assignedDate   = 'Assigned On';
$lang->order->signedBy       = 'Signed By';
$lang->order->signedDate     = 'Signed On';
$lang->order->payedDate      = 'Paid On';
$lang->order->closedBy       = 'Closed By';
$lang->order->closedDate     = 'Closed On';
$lang->order->closedReason   = 'Closed Reason';
$lang->order->closedNote     = 'Closed Note';
$lang->order->activatedBy    = 'Activated By';
$lang->order->activatedDate  = 'Activated On';
$lang->order->contactedBy    = 'Contacted By';
$lang->order->contactedDate  = 'Contacted On';
$lang->order->nextDate       = 'Next Contact';
$lang->order->editedBy       = 'Last Edited By';
$lang->order->editedDate     = 'Last Edited On';
$lang->order->createCustomer = 'Create Customer';
$lang->order->createProduct  = 'Create Product';

$lang->order->list          = 'Orders';
$lang->order->browse        = 'Orders';
$lang->order->create        = 'Create';
$lang->order->record        = 'Record';
$lang->order->edit          = 'Edit';
$lang->order->delete        = 'Delete';
$lang->order->view          = 'View';
$lang->order->close         = 'Close';
$lang->order->sign          = 'Sign';
$lang->order->assign        = 'Assign';
$lang->order->activate      = 'Activate';
$lang->order->export        = 'Export';

$lang->order->statusList['normal'] = 'Normal';
$lang->order->statusList['signed'] = 'Signed';
$lang->order->statusList['closed'] = 'Closed';

$lang->order->closedReasonList['']          = '';
$lang->order->closedReasonList['payed']     = 'Paid';
$lang->order->closedReasonList['failed']    = 'Failed';
$lang->order->closedReasonList['postponed'] = 'Postponed';

$lang->order->titleLBL  = "%s purchases %s (%s)";
$lang->order->basicInfo = "Basic";
$lang->order->lifetime  = "Order Life";

$lang->order->totalAmount   = 'The Budget is %s, the Actual is %s on this page;';
$lang->order->infoBuy       = "%s purchases %s.";
$lang->order->infoContract  = 'Signed Contract: %s.';
$lang->order->infoAmount    = 'Budget is %s, Actual is %s.';
$lang->order->infoContacted = 'Contacted on %s. ';
$lang->order->infoNextDate  = 'Next Contact on %s.';
$lang->order->deny          = 'You has no Privilege to create %s.';
/* crm/contact */
if(!isset($lang->contact)) $lang->contact = new stdclass();
$lang->contact->common         = 'Contact';
$lang->contact->id             = 'ID';
$lang->contact->customer       = 'Customer';
$lang->contact->customerName   = 'Customer Name';
$lang->contact->realname       = 'Real Name';
$lang->contact->nickname       = 'Nickname';
$lang->contact->origin         = 'origin';
$lang->contact->status         = 'Status';
$lang->contact->avatar         = 'Avatar';
$lang->contact->birthday       = 'Birthday';
$lang->contact->gender         = 'Gender';
$lang->contact->email          = 'Email';
$lang->contact->skype          = 'Skype';
$lang->contact->qq             = 'QQ';
$lang->contact->yahoo          = 'Y!';
$lang->contact->gtalk          = 'GTalk';
$lang->contact->wangwang       = 'Trade Manager';
$lang->contact->site           = 'Site';
$lang->contact->mobile         = 'Mobile';
$lang->contact->phone          = 'Phone';
$lang->contact->company        = 'Company';
$lang->contact->fax            = 'Fax';
$lang->contact->weibo          = 'Sina Weibo';
$lang->contact->weixin         = 'Wechat';
$lang->contact->desc           = 'Description';
$lang->contact->createdBy      = 'Created By';
$lang->contact->createdDate    = 'Created Date';
$lang->contact->editedBy       = 'Edited By';
$lang->contact->editedDate     = 'Edited Date';
$lang->contact->contactedBy    = 'Contacted By';
$lang->contact->contactedDate  = 'Contacted Date';
$lang->contact->nextDate       = 'Next Date';
$lang->contact->assignedTo     = 'Assigned To';
$lang->contact->newCustomer    = 'Create Customer';
$lang->contact->uploadAvatar   = 'Upload Photo';
$lang->contact->changeAvatar   = 'Change Photo';
$lang->contact->selectCustomer = 'Select Customer';

$lang->contact->browse         = 'Browse Contact';
$lang->contact->block          = 'Contact Block';
$lang->contact->delete         = 'Delete Contact';
$lang->contact->create         = 'Create Contact';
$lang->contact->list           = 'List';
$lang->contact->edit           = 'Edit';
$lang->contact->view           = 'View';
$lang->contact->resume         = 'Company';
$lang->contact->address        = 'Address';
$lang->contact->record         = 'History';
$lang->contact->qrcode         = 'QR Code';
$lang->contact->vcard          = 'Vcard';
$lang->contact->import         = 'Import';
$lang->contact->export         = 'Export';
$lang->contact->exportTemplate = 'Export Template';
$lang->contact->leads          = 'Leads';
$lang->contact->apply          = 'Apply';
$lang->contact->assign         = 'Assign';

$lang->contact->basicInfo   = 'Basic Info';
$lang->contact->contactInfo = 'Contact Info';

$lang->contact->leftAt       = 'Left at %s';
$lang->contact->failedAvatar = 'Failed!';
$lang->contact->emailTip     = 'Please separate email addresses with commas or space';

$lang->contact->noFile       = 'No File';
$lang->contact->importResult = '%s imported successfully, %s failed, details are as the following';
$lang->contact->failReason   = 'Reason';
$lang->contact->showImport   = 'Imported Contacts';
$lang->contact->template     = 'Contact Template';

$lang->contact->genderList['m'] = 'male';
$lang->contact->genderList['f'] = 'Female';
$lang->contact->genderList['u'] = '';
/* crm/block */
$lang->block->common   = 'Blocks';
$lang->block->num      = 'Amount';
$lang->block->type     = 'Type';
$lang->block->orderBy  = 'Order By';
$lang->block->status   = 'Status';
$lang->block->actions  = 'Options';
$lang->block->lblBlock = 'Block';

$lang->block->admin    = 'Manage Blocks';
$lang->block->availableBlocks = new stdclass();

$lang->block->availableBlocks->order    = 'Order List';
//$lang->block->availableBlocks->task     = 'My Tasks';
$lang->block->availableBlocks->contract = 'Contract List';
$lang->block->availableBlocks->customer = 'Customer List';

$lang->block->orderByList = new stdclass();

$lang->block->orderByList->order = array();
$lang->block->orderByList->order['id_asc']       = 'ID ASC ';
$lang->block->orderByList->order['id_desc']      = 'ID DESC';
$lang->block->orderByList->order['customer_asc'] = 'Customer';
$lang->block->orderByList->order['product_asc']  = 'Product';

$lang->block->orderByList->task = array();
$lang->block->orderByList->task['id_asc']        = 'ID ASC';
$lang->block->orderByList->task['id_desc']       = 'ID DESC';
$lang->block->orderByList->task['pri_asc']       = 'Priority ASC';
$lang->block->orderByList->task['pri_desc']      = 'Priority DESC';
$lang->block->orderByList->task['deadline_asc']  = 'Deadline ASC';
$lang->block->orderByList->task['deadline_desc'] = 'Deadline DESC';

$lang->block->orderByList->contract = array();
$lang->block->orderByList->contract['id_asc']       = 'ID ASC';
$lang->block->orderByList->contract['id_desc']      = 'ID DESC';
$lang->block->orderByList->contract['customer_asc'] = 'Customer';
$lang->block->orderByList->contract['amount_asc']   = 'Amount ASC';
$lang->block->orderByList->contract['amount_desc']  = 'Amount DESC';

$lang->block->orderByList->customer['id_asc']       = 'ID ASC';
$lang->block->orderByList->customer['id_desc']      = 'ID DESC';

$lang->block->typeList = new stdclass();

$lang->block->typeList->order['assignedTo']   = 'To me';
$lang->block->typeList->order['createdBy']    = 'My created';
$lang->block->typeList->order['signedBy']     = 'My signed';
$lang->block->typeList->order['closedBy']     = 'My closed';
$lang->block->typeList->order['activatedBy']  = 'My activated';
$lang->block->typeList->order['normalstatus'] = 'Normal';
$lang->block->typeList->order['signedstatus'] = 'Signed';
$lang->block->typeList->order['closedstatus'] = 'Closed';

$lang->block->typeList->contract['returnedBy']     = 'My recieved';
$lang->block->typeList->contract['deliveredBy']    = 'My delivered';
$lang->block->typeList->contract['createdBy']      = 'My created';
$lang->block->typeList->contract['canceledBy']     = 'My canceled';
$lang->block->typeList->contract['normalstatus']   = 'Normal';
$lang->block->typeList->contract['closedstatus']   = 'Closed';
$lang->block->typeList->contract['canceledstatus'] = 'Canceled';

$lang->block->typeList->customer['today']    = 'Today';
$lang->block->typeList->customer['thisweek'] = 'This week';
/* crm/sales */
if(!isset($lang->sales)) $lang->sales = new stdclass();
$lang->sales->common = 'Sales';
$lang->sales->admin  = 'Privileges';
$lang->sales->browse = 'Manage Groups';
$lang->sales->list   = 'Sales Team';
$lang->sales->create = 'Create';
$lang->sales->edit   = 'Edit';
$lang->sales->delete = 'Delete';

$lang->sales->id     = 'ID';
$lang->sales->name   = 'Name';
$lang->sales->desc   = 'Desciption';
$lang->sales->user   = 'Users';

$lang->sales->group  = 'Groups';
$lang->sales->priv   = 'Privileges';

$lang->sales->viewTip      = 'view';
$lang->sales->editTip      = 'edit';
$lang->sales->currentGroup = 'this group';
$lang->sales->member       = 'Member';
/* crm/address */
if(!isset($lang->address)) $lang->address = new stdclass();
$lang->address->common   = 'Address';
$lang->address->title    = 'Title';
$lang->address->country  = 'Country';
$lang->address->province = 'Province';
$lang->address->city     = 'City';
$lang->address->area     = 'Area';
$lang->address->location = 'Location';

$lang->address->browse = 'Browse Address';
$lang->address->delete = 'Delete Address';
$lang->address->create = 'Create Address';
$lang->address->edit   = 'Edit Address';
/* crm/contract */
if(!isset($lang->contract)) $lang->contract = new stdclass();
$lang->contract->common = 'Contract';

$lang->contract->id            = 'ID';
$lang->contract->order         = 'Order';
$lang->contract->customer      = 'Customer';
$lang->contract->name          = 'Name';
$lang->contract->code          = 'Alias';
$lang->contract->amount        = 'Amount';
$lang->contract->currency      = 'Currency';
$lang->contract->all           = 'Total amount';
$lang->contract->thisAmount    = 'This amount';
$lang->contract->items         = 'Items';
$lang->contract->begin         = 'Start';
$lang->contract->end           = 'End';
$lang->contract->dateRange     = 'Time Frame';
$lang->contract->delivery      = 'Deliver';
$lang->contract->deliveredBy   = 'Delivered By';
$lang->contract->deliveredDate = 'Delivered On';
$lang->contract->return        = 'Payment';
$lang->contract->returnedBy    = 'Received By';
$lang->contract->returnedDate  = 'Received On';
$lang->contract->status        = 'Status';
$lang->contract->contact       = 'Contact';
$lang->contract->address       = 'Address';
$lang->contract->signedBy      = 'Signed By';
$lang->contract->signedDate    = 'Signed On';
$lang->contract->finishedBy    = 'Finished By';
$lang->contract->finishedDate  = 'Finished On';
$lang->contract->canceledBy    = 'Cancelled By';
$lang->contract->canceledDate  = 'Cancelled On';
$lang->contract->createdBy     = 'Created By';
$lang->contract->createdDate   = 'Created On';
$lang->contract->editedBy      = 'Edited By';
$lang->contract->editedDate    = 'Edited On';
$lang->contract->handlers      = 'Contributors';
$lang->contract->contactedBy   = 'Contacted By';
$lang->contract->contactedDate = 'Contacted On';
$lang->contract->nextDate      = 'Next Date';
$lang->contract->product       = 'Products';
$lang->contract->productLine   = 'Product Lines';
$lang->contract->files         = 'Files';
$lang->contract->createAddress = 'Create Address';

$lang->contract->browse           = 'Contracts';
$lang->contract->receive          = 'Receive';
$lang->contract->cancel           = 'Cancel';
$lang->contract->view             = 'Contracts';
$lang->contract->finish           = 'Finish';
$lang->contract->record           = 'Record';
$lang->contract->delete           = 'Delete';
$lang->contract->list             = 'Contracts';
$lang->contract->create           = 'Create';
$lang->contract->edit             = 'Edit';
$lang->contract->setting          = 'Settings';
$lang->contract->uploadFile       = 'Upload';
$lang->contract->lifetime         = 'Lifetime';
$lang->contract->returnRecords    = 'Payments';
$lang->contract->deliveryRecords  = 'Delivery';
$lang->contract->completeReturn   = 'Complete';
$lang->contract->completeDelivery = 'Complete';
$lang->contract->editReturn       = 'Edit';
$lang->contract->editDelivery     = 'Edit';
$lang->contract->deleteReturn     = 'Delete';
$lang->contract->deleteDelivery   = 'Delete';
$lang->contract->export           = 'Export';
$lang->contract->totalReturn      = 'Total';
$lang->contract->tradeList        = 'Trade List';

$lang->contract->deliveryList[]        = '';
$lang->contract->deliveryList['wait']  = 'Wait';
$lang->contract->deliveryList['doing'] = 'Doing';
$lang->contract->deliveryList['done']  = 'Done';

$lang->contract->returnList[]        = '';
$lang->contract->returnList['wait']  = 'Wait';
$lang->contract->returnList['doing'] = 'Doing';
$lang->contract->returnList['done']  = 'Done';

$lang->contract->statusList[]           = '';
$lang->contract->statusList['normal']   = 'Normal';
$lang->contract->statusList['closed']   = 'Closed';
$lang->contract->statusList['canceled'] = 'Cancelled';

$lang->contract->codeUnitList[]        = '';
$lang->contract->codeUnitList['Y']     = 'Year';
$lang->contract->codeUnitList['m']     = 'Month';
$lang->contract->codeUnitList['d']     = 'Day';
$lang->contract->codeUnitList['fix']   = 'Fix';
$lang->contract->codeUnitList['input'] = 'Input';

$lang->contract->placeholder = new stdclass();
$lang->contract->placeholder->real = 'Turnover';

$lang->contract->totalAmount        = 'The total payment is %s. %s on this page, %s this month.';
$lang->contract->returnInfo         = "<p>%s, received by <strong>%s</strong>, %s.</p>";
$lang->contract->deliveryInfo       = "<p>%s, delivered by %s.</p>";
$lang->contract->deleteReturnInfo   = "%s in %s";
$lang->contract->deleteDeliveryInfo = "in %s";

$lang->plan = new stdclass();
$lang->plan->amount = $lang->contract->thisAmount;
/* crm/leads */
if(!isset($lang->leads)) $lang->leads = new stdclass();

$lang->leads->common         = 'Leads';
$lang->leads->assignedToNull = 'Assign To Null';
$lang->leads->browse         = 'Leads';
$lang->leads->create         = 'Create';
$lang->leads->edit           = 'Edit';
$lang->leads->delete         = 'Delete';
$lang->leads->view           = 'Leads';
$lang->leads->apply          = 'Apply';
$lang->leads->assign         = 'Assign';
$lang->leads->transform      = 'Confirm';
$lang->leads->ignore         = 'Ignroe';
$lang->leads->settings       = 'Settings';
$lang->leads->applyRule      = 'Distribution';

$lang->leads->list = 'Leads';

$lang->leads->applyLimit   = 'Maximum per request';
$lang->leads->applyRemain  = 'Maximum on hold';
$lang->leads->ignoreReason = 'Reasons';

$lang->leads->tips = new stdclass();
$lang->leads->tips->apply       = 'Please take care of the existing contacts.';
$lang->leads->tips->applyRemain = 'You can apply when the number of records on hold is lower than it.';
/* doc/block */
$lang->block->common   = 'Blocks';
$lang->block->lblBlock = 'Block';
$lang->block->admin    = 'Manage Blocks';
$lang->block->type     = 'Type';
$lang->block->waitTask = 'Wait';
$lang->block->doneTask = 'Done';
$lang->block->rate     = 'Rate';

$lang->block->availableBlocks = new stdclass();

$lang->block->num     = 'Number';
$lang->block->orderBy = 'Order';
$lang->block->status  = 'Status';
$lang->block->asc     = 'ASC';
$lang->block->desc    = 'DESC';
$lang->block->actions = 'Options';

$lang->block->orderByList = new stdclass();
/* doc/doc */
if(!isset($lang->doc)) $lang->doc = new stdclass();
$lang->doc->common         = 'Document';
$lang->doc->id             = 'ID';
$lang->doc->product        = 'Product';
$lang->doc->project        = 'Project';
$lang->doc->lib            = 'Library';
$lang->doc->category       = 'Category';
$lang->doc->title          = 'Title';
$lang->doc->digest         = 'Summary';
$lang->doc->comment        = 'Comment';
$lang->doc->type           = 'Type';
$lang->doc->content        = 'Content';
$lang->doc->keywords       = 'Tag';
$lang->doc->url            = 'URL';
$lang->doc->files          = 'File';
$lang->doc->views          = 'Views';
$lang->doc->createdBy      = 'Created by';
$lang->doc->createdDate    = 'Created on';
$lang->doc->editedBy       = 'Edited by';
$lang->doc->editedDate     = 'Edited on';
$lang->doc->basicInfo      = 'Basic Info';
$lang->doc->deleted        = 'Deleted';

$lang->doc->index          = 'Home';
$lang->doc->create         = 'Create';
$lang->doc->edit           = 'Edit';
$lang->doc->delete         = 'Delete';
$lang->doc->browse         = 'Documents';
$lang->doc->view           = 'Documents';
$lang->doc->manageType     = 'Manage Category';
$lang->doc->showFiles      = 'File Library';
$lang->doc->sort           = 'Sort';

$lang->doc->libName        = 'Name';
$lang->doc->libType        = 'Type';
$lang->doc->allLibs        = 'All Library';
$lang->doc->projectLibs    = 'Project Library';
$lang->doc->customLibs     = 'Custom Library';
$lang->doc->projectMainLib = 'Main Library';
$lang->doc->fileLib        = 'File Library';

$lang->doc->createLib      = 'Create Library';
$lang->doc->editLib        = 'Edit';
$lang->doc->deleteLib      = 'Delete';
$lang->doc->fixedMenu      = 'Fix to NavBar';
$lang->doc->removedMenu    = 'Remove from NavNar';

$lang->doc->editCategory   = 'Edit Category';
$lang->doc->deleteCategory = 'Delete Category';

$lang->doc->allProject     = 'All projects';

$lang->doc->private        = 'Private';
$lang->doc->users          = 'Users';
$lang->doc->groups         = 'Groups';

$lang->doc->libTypeList = array();
$lang->doc->libTypeList['custom']  = 'Custom';
$lang->doc->libTypeList['project'] = 'Project';

$lang->doc->types['text'] = 'Document';
$lang->doc->types['url']  = 'Link';

$lang->doc->browseType = 'Browse Type';
$lang->doc->browseTypeList['list'] = 'List';
$lang->doc->browseTypeList['menu'] = 'Menu';
$lang->doc->browseTypeList['tree'] = 'Tree';

$lang->doc->confirmDelete      = "Do you want to delete this doc?";
$lang->doc->confirmDeleteLib   = "Do you want to delete this doc library?";
$lang->doc->errorEditSystemDoc = "System document library cannot be edited.";

$lang->doc->placeholder = new stdclass();
$lang->doc->placeholder->url = 'url';

$lang->doc->notFound     = 'The document does not exist.';
$lang->doc->libNotFound  = 'The document library does not exist.';
$lang->doc->libNotEmpty  = 'There are documents in this document library.';
$lang->doc->errorMainLib = 'The main library can not be deleted.';
/* oa/holiday */
if(!isset($lang->holiday)) $lang->holiday = new stdclass();
$lang->holiday->common = 'Holiday';
$lang->holiday->browse = 'Browse';
$lang->holiday->create = 'Create';
$lang->holiday->edit   = 'Edit';
$lang->holiday->delete = 'Delete';

$lang->holiday->id    = 'ID';
$lang->holiday->name  = 'Name';
$lang->holiday->desc  = 'Description';
$lang->holiday->type  = 'Type';
$lang->holiday->begin = 'Begin';
$lang->holiday->end   = 'End';

$lang->holiday->holiday = 'Holiday';

$lang->holiday->typeList['holiday'] = 'Holiday';
$lang->holiday->typeList['working'] = 'Working Day';
/* oa/refund */
if(!isset($lang->refund)) $lang->refund = new stdclass();
$lang->refund->common       = 'Reimbursement';
$lang->refund->create       = 'Create';
$lang->refund->browse       = 'List';
$lang->refund->personal     = 'My Reimbursement';
$lang->refund->company      = 'All Reimbursement';
$lang->refund->todo         = 'Reimbursement Waiting';
$lang->refund->browseReview = 'Review';
$lang->refund->edit         = 'Edit';
$lang->refund->view         = 'View';
$lang->refund->delete       = 'Delete';
$lang->refund->review       = 'Review';
$lang->refund->detail       = 'Detail';
$lang->refund->reimburse    = 'Reimburse';
$lang->refund->cancel       = 'Cancel';
$lang->refund->commit       = 'Commit';
$lang->refund->settings     = 'Settings';
$lang->refund->setReviewer  = 'Set Reviewer';
$lang->refund->setCategory  = 'Set Category';
$lang->refund->setDepositor = 'Set Account';
$lang->refund->setRefundBy  = 'Set RefundBy';
$lang->refund->export       = 'Export';
$lang->refund->createTrade  = 'Create Trade';

$lang->refund->id               = 'ID';
$lang->refund->customer         = 'Customer';
$lang->refund->order            = 'Order';
$lang->refund->contract         = 'contract';
$lang->refund->project          = 'Project';
$lang->refund->name             = 'Name';
$lang->refund->category         = 'Category';
$lang->refund->date             = 'Date';
$lang->refund->dept             = 'Department';
$lang->refund->money            = 'Amount';
$lang->refund->invoice          = 'Invoice';
$lang->refund->reviewMoney      = 'Reimbursement';
$lang->refund->currency         = 'Currency';
$lang->refund->desc             = 'Description';
$lang->refund->files            = 'Files';
$lang->refund->status           = 'Status';
$lang->refund->createdBy        = 'Created by';
$lang->refund->createdDate      = 'Created on';
$lang->refund->editedBy         = 'Edited By';
$lang->refund->editedDate       = 'Edited on';
$lang->refund->firstReviewer    = '1st Reviewer';
$lang->refund->firstReviewDate  = '1st Review on';
$lang->refund->secondReviewer   = '2nd Reviewer';
$lang->refund->secondReviewDate = '2nd Review on';
$lang->refund->refundBy         = 'Reimbursed by';
$lang->refund->refundDate       = 'Reimbursed on';
$lang->refund->baseInfo         = 'Basic Info';
$lang->refund->reason           = 'Reason';
$lang->refund->reviewer         = 'Reviewer';
$lang->refund->related          = 'Involved';
$lang->refund->depositor        = 'Account';

$lang->refund->objectTypeList['customer'] = 'Customer';
$lang->refund->objectTypeList['order']    = 'Order';
$lang->refund->objectTypeList['contract'] = 'Contract';
$lang->refund->objectTypeList['project']  = 'Project';

$lang->refund->statusList['draft']  = 'Draft';
$lang->refund->statusList['wait']   = 'Wait';
$lang->refund->statusList['doing']  = 'Doing';
$lang->refund->statusList['pass']   = 'Passed';
$lang->refund->statusList['reject'] = 'Rejected';
$lang->refund->statusList['finish'] = 'Finished';

$lang->refund->reviewStatusList['pass']   = 'Pass';
$lang->refund->reviewStatusList['reject'] = 'Reject';

$lang->refund->reviewAllStatusList['allpass']   = 'Pass All';
$lang->refund->reviewAllStatusList['allreject'] = 'Reject All';

$lang->refund->descTip = "%s requested %s.";

$lang->refund->notExist          = 'The record not exist.';
$lang->refund->cancelSuccess     = 'Cancel success.';
$lang->refund->commitSuccess     = 'Commit success.';
$lang->refund->uniqueReviewer    = 'The 1st reviewer and the 2nd reviewer cannot be the same.';
$lang->refund->createTradeTip    = 'Create trade';
$lang->refund->secondReviewerTip = 'If reimbursement requires a 2nd review, please set 2nd reviewer.';
$lang->refund->correctMoney      = 'The reimbursed amount should not be more than the requested amount.';
$lang->refund->categoryTips      = 'Expense category is not set yet.';
$lang->refund->setExpense        = 'Set Category';
$lang->refund->moneyTip          = 'If requested amont is less than this, 1st review is required. If not, 2nd review is required.';
$lang->refund->total             = 'Total:';
$lang->refund->totalMoney        = '%s%s；';

$lang->refund->settings = new stdclass();
$lang->refund->settings->setReviewer  = "Reviewer|refund|setreviewer";
$lang->refund->settings->setCategory  = "Category|refund|setcategory";
$lang->refund->settings->setDepositor = "Account|refund|setdepositor";
$lang->refund->settings->setRefundBy  = "ReimbursedBy|refund|setrefundby";
/* oa/block */
$lang->block->common   = 'Blocks';
$lang->block->announce = 'Announce';
$lang->block->lblBlock = 'Block';
$lang->block->admin    = 'Manage Blocks';
$lang->block->type     = 'Type';
$lang->block->waitTask = 'Wait';
$lang->block->doneTask = 'Done';
$lang->block->rate     = 'Rate';

$lang->block->availableBlocks = new stdclass();
$lang->block->availableBlocks->announce = 'Announce';
$lang->block->availableBlocks->attend   = 'Calendar';

$lang->block->num     = 'Number';
$lang->block->orderBy = 'Order';
$lang->block->status  = 'Status';
$lang->block->asc     = 'ASC';
$lang->block->desc    = 'DESC';
$lang->block->actions = 'Options';

$lang->block->orderByList = new stdclass();
/* oa/egress */
global $app;
$app->loadLang('trip', 'oa');
$menu = isset($lang->egress->menu) ? $lang->egress->menu : '';
$lang->egress = clone $lang->trip;
$lang->egress->menu = $menu;

$lang->egress->create   = 'Create';
$lang->egress->common   = 'Egress';
$lang->egress->browse   = 'Browse';
$lang->egress->personal = 'My Egress';
$lang->egress->view     = 'Details';

$lang->egress->from = 'Departure';
$lang->egress->to   = 'Destination';

$lang->egress->unique    = 'There was a record of egress in %s.';
$lang->egress->sameMonth = 'Egress must be in the same month.';
/* oa/overtime */
if(!isset($lang->overtime)) $lang->overtime = new stdclass();
$lang->overtime->common = 'Overtime';
$lang->overtime->browse = 'Browse Overtime';
$lang->overtime->create = 'Apply';
$lang->overtime->edit   = 'Edit';
$lang->overtime->view   = 'View';
$lang->overtime->delete = 'Delete';
$lang->overtime->review = 'Review';
$lang->overtime->cancel = 'Cancel';
$lang->overtime->commit = 'Commit';
$lang->overtime->export = 'Export';

$lang->overtime->personal     = 'My Overtime';
$lang->overtime->browseReview = 'Review List';
$lang->overtime->company      = 'All';
$lang->overtime->setReviewer  = 'Settings';
$lang->overtime->batchReview  = 'Batch Review';
$lang->overtime->batchPass    = 'Batch Pass';

$lang->overtime->id           = 'ID';
$lang->overtime->year         = 'Year';
$lang->overtime->begin        = 'Begin';
$lang->overtime->end          = 'End';
$lang->overtime->start        = 'Start';
$lang->overtime->finish       = 'Finish';
$lang->overtime->hours        = 'Hours';
$lang->overtime->leave        = 'Leaves';
$lang->overtime->type         = 'Type';
$lang->overtime->desc         = 'Desc';
$lang->overtime->status       = 'Status';
$lang->overtime->createdBy    = 'Created By';
$lang->overtime->createdDate  = 'Created Date';
$lang->overtime->reviewedBy   = 'Reviewed By';
$lang->overtime->reviewedDate = 'Reviewed Date';
$lang->overtime->date         = 'Date';
$lang->overtime->time         = 'Time';
$lang->overtime->rejectReason = 'Reject Reason';

$lang->overtime->typeList['time']    = 'After work';
$lang->overtime->typeList['rest']    = 'On weekends';
$lang->overtime->typeList['holiday'] = 'On holiday';

$lang->overtime->statusList['draft']  = 'Draft';
$lang->overtime->statusList['wait']   = 'Wait';
$lang->overtime->statusList['doing']  = 'Doing';
$lang->overtime->statusList['pass']   = 'Pass';
$lang->overtime->statusList['reject'] = 'Reject';

$lang->overtime->notExist      = 'The record not exist';
$lang->overtime->denied        = 'Access denied';
$lang->overtime->unique        = 'There was a record of overtime in %s.';
$lang->overtime->sameMonth     = 'Overtime must be in the same month.';
$lang->overtime->wrongEnd      = 'End time should be greater than begin time.';
$lang->overtime->nodata        = 'Select no data.';
$lang->overtime->reviewSuccess = 'Review success';

$lang->overtime->confirmReview['pass']   = 'Are you sure to pass it?';
$lang->overtime->confirmReview['reject'] = 'Are you sure to reject it?';

$lang->overtime->hoursTip = 'Hours';

$lang->overtime->reviewStatusList['pass']   = 'Pass';
$lang->overtime->reviewStatusList['reject'] = 'Reject';
/* oa/trip */
if(!isset($lang->trip)) $lang->trip = new stdclass();
$lang->trip->common = 'Trip';
$lang->trip->browse = 'Trips';
$lang->trip->create = 'Create';
$lang->trip->edit   = 'Edit';
$lang->trip->view   = 'Details';
$lang->trip->delete = 'Delete';

$lang->trip->personal   = 'My trip';
$lang->trip->department = 'Department';
$lang->trip->company    = 'Company';

$lang->trip->id          = 'ID';
$lang->trip->customer    = 'Customer/Provider';
$lang->trip->name        = 'Name';
$lang->trip->begin       = 'Start';
$lang->trip->end         = 'End';
$lang->trip->from        = 'From';
$lang->trip->to          = 'To';
$lang->trip->desc        = 'Description';
$lang->trip->createdBy   = 'Created By';
$lang->trip->createdDate = 'Created On';
$lang->trip->date        = 'Date';
$lang->trip->time        = 'Time';

$lang->trip->denied    = 'Access denied';
$lang->trip->unique    = 'There was a record of trip in %s.';
$lang->trip->wrongEnd  = 'End time should be greater than begin time.';
$lang->trip->sameMonth = 'Trip must be in the same month.';
/* oa/announce */
$lang->announce->common = 'Announce';
$lang->announce->browse = 'Browse';
$lang->announce->create = 'Create';
$lang->announce->edit   = 'Edit';
$lang->announce->view   = 'View';
$lang->announce->delete = 'Delete';
/* oa/leave */
if(!isset($lang->leave)) $lang->leave = new stdclass();
$lang->leave->common     = 'Leave';
$lang->leave->browse     = 'Browse leave';
$lang->leave->view       = 'View';
$lang->leave->create     = 'Create';
$lang->leave->edit       = 'Edit';
$lang->leave->delete     = 'Delete';
$lang->leave->review     = 'Review';
$lang->leave->cancel     = 'Cancel';
$lang->leave->commit     = 'Commit';
$lang->leave->back       = 'Back';
$lang->leave->export     = 'Export';
$lang->leave->reviewBack = 'Review back date';

$lang->leave->personal       = 'My Leave';
$lang->leave->browseReview   = 'Review List';
$lang->leave->company        = 'All';
$lang->leave->setReviewer    = 'Set Reviewer';
$lang->leave->personalAnnual = 'Annual Leave';
$lang->leave->batchReview    = 'Batch Review';
$lang->leave->batchPass      = 'Batch Pass';

$lang->leave->id           = 'ID';
$lang->leave->year         = 'Year';
$lang->leave->begin        = 'Begin';
$lang->leave->end          = 'End';
$lang->leave->start        = 'Begin';
$lang->leave->finish       = 'End';
$lang->leave->hours        = 'Hours';
$lang->leave->backDate     = 'Back';
$lang->leave->type         = 'Type';
$lang->leave->desc         = 'Description';
$lang->leave->status       = 'Status';
$lang->leave->createdBy    = 'Created by';
$lang->leave->createdDate  = 'Created on';
$lang->leave->reviewedBy   = 'Reviewer';
$lang->leave->reviewedDate = 'Reviewed on';
$lang->leave->date         = 'Date';
$lang->leave->time         = 'Time';
$lang->leave->rejectReason = 'Reject Reason';
$lang->leave->account      = 'Account';
$lang->leave->dateRange    = 'Date Range';
$lang->leave->totalAnnual  = 'Annual Leave Settings';

$lang->leave->typeList['affairs']   = 'Private';
$lang->leave->typeList['sick']      = 'Sick';
$lang->leave->typeList['annual']    = 'Annual';
$lang->leave->typeList['lieu']      = 'Lieu';
$lang->leave->typeList['home']      = 'Home';
$lang->leave->typeList['marry']     = 'Marriage';
$lang->leave->typeList['maternity'] = 'Maternity';

$lang->leave->paid   = 'Paid Leave';
$lang->leave->unpaid = 'Unpaid Leave';

$lang->leave->statusList['draft']  = 'Draft';
$lang->leave->statusList['wait']   = 'Wait';
$lang->leave->statusList['doing']  = 'Doing';
$lang->leave->statusList['pass']   = 'Pass';
$lang->leave->statusList['reject'] = 'Reject';
$lang->leave->statusList['back']   = 'Back';

$lang->leave->notExist      = 'The record not exist';
$lang->leave->denied        = 'Access denied.';
$lang->leave->unique        = 'There was a record of Leave in %s.';
$lang->leave->sameMonth     = 'Leave must be in the same month.';
$lang->leave->wrongEnd      = 'End time should be greater than begin time.';
$lang->leave->wrongBackDate = 'Back time should be greater than begin time.';
$lang->leave->nodata        = 'Select no data.';
$lang->leave->reviewSuccess = 'Review success';

$lang->leave->confirmReview['pass']   = 'Do you want to pass it?';
$lang->leave->confirmReview['reject'] = 'Do you want to reject it?';

$lang->leave->hoursTip  = 'Hours';
$lang->leave->annualTip = 'The remaining %s days of annual leaves';

$lang->leave->reviewStatusList['pass']   = 'Pass';
$lang->leave->reviewStatusList['reject'] = 'Reject';

$lang->leave->settings = new stdclass();
$lang->leave->settings->setReviewer    = "Reviewer|leave|setreviewer";
$lang->leave->settings->personalAnnual = "Annual leave|leave|personalannual";
/* oa/makeup */
if(!isset($lang->makeup)) $lang->makeup = new stdclass();
$lang->makeup->common = 'Makeup';
$lang->makeup->browse = 'Browse Makeup';
$lang->makeup->create = 'Apply';
$lang->makeup->edit   = 'Edit';
$lang->makeup->view   = 'View';
$lang->makeup->delete = 'Delete';
$lang->makeup->review = 'Review';
$lang->makeup->cancel = 'Cancel';
$lang->makeup->commit = 'Commit';
$lang->makeup->export = 'Export';

$lang->makeup->personal     = 'My Makeup';
$lang->makeup->browseReview = 'Review List';
$lang->makeup->company      = 'All';
$lang->makeup->setReviewer  = 'Settings';
$lang->makeup->batchReview  = 'Batch Review';
$lang->makeup->batchPass    = 'Batch Pass';

$lang->makeup->id           = 'ID';
$lang->makeup->year         = 'Year';
$lang->makeup->begin        = 'Begin';
$lang->makeup->end          = 'End';
$lang->makeup->start        = 'Start';
$lang->makeup->finish       = 'Finish';
$lang->makeup->hours        = 'Hours';
$lang->makeup->leave        = 'Leaves';
$lang->makeup->type         = 'Type';
$lang->makeup->desc         = 'Desc';
$lang->makeup->status       = 'Status';
$lang->makeup->createdBy    = 'Created By';
$lang->makeup->createdDate  = 'Created Date';
$lang->makeup->reviewedBy   = 'Reviewed By';
$lang->makeup->reviewedDate = 'Reviewed Date';
$lang->makeup->date         = 'Date';
$lang->makeup->time         = 'Time';
$lang->makeup->rejectReason = 'Reject Reason';

$lang->makeup->typeList['compensate'] = 'Compensated Leave';

$lang->makeup->statusList['draft']  = 'Draft';
$lang->makeup->statusList['wait']   = 'Wait';
$lang->makeup->statusList['doing']  = 'Doing';
$lang->makeup->statusList['pass']   = 'Pass';
$lang->makeup->statusList['reject'] = 'Reject';

$lang->makeup->notExist      = 'The record not exist';
$lang->makeup->denied        = 'Access denied';
$lang->makeup->unique        = 'There was a record of makeup in %s.';
$lang->makeup->sameMonth     = 'Makeup must be in the same month.';
$lang->makeup->wrongEnd      = 'End time should be greater than begin time.';
$lang->makeup->nodata        = 'Select no data.';
$lang->makeup->reviewSuccess = 'Review success';

$lang->makeup->confirmReview['pass']   = 'Are you sure to pass it?';
$lang->makeup->confirmReview['reject'] = 'Are you sure to reject it?';

$lang->makeup->hoursTip = 'Hours';

$lang->makeup->reviewStatusList['pass']   = 'Pass';
$lang->makeup->reviewStatusList['reject'] = 'Reject';
/* oa/attend */
if(!isset($lang->attend)) $lang->attend = new stdclass();
$lang->attend->common       = 'Attend';
$lang->attend->personal     = 'My Attendance';
$lang->attend->department   = 'Department';
$lang->attend->company      = 'Company';
$lang->attend->detail       = 'Details';
$lang->attend->edit         = 'Edit';
$lang->attend->edited       = 'Clock In';
$lang->attend->leave        = 'Leave';
$lang->attend->leaved       = 'Already leave';
$lang->attend->makeup       = 'Makeup times';
$lang->attend->makeuped     = 'Alread makeup times';
$lang->attend->lieu         = 'Lieu';
$lang->attend->lieud        = 'Already lieu';
$lang->attend->trip         = 'Trip';
$lang->attend->triped       = 'Already trip';
$lang->attend->egress       = 'Egress';
$lang->attend->egressed     = 'Already egress';
$lang->attend->overtime     = 'Overtime';
$lang->attend->overtimed    = 'Already overtime';
$lang->attend->review       = 'Review attendance';
$lang->attend->settings     = 'Setting';
$lang->attend->export       = 'Export';
$lang->attend->stat         = 'Report';
$lang->attend->saveStat     = 'Save';
$lang->attend->exportStat   = 'Export Report';
$lang->attend->exportDetail = 'Export Details';
$lang->attend->browseReview = 'Review List';
$lang->attend->batchReview  = 'Batch Review';
$lang->attend->batchPass    = 'Batch Pass';

$lang->attend->id            = 'ID';
$lang->attend->date          = 'Date';
$lang->attend->account       = 'User';
$lang->attend->signIn        = 'Clockin';
$lang->attend->signOut       = 'Clockout';
$lang->attend->status        = 'Status';
$lang->attend->ip            = 'IP';
$lang->attend->device        = 'Device';
$lang->attend->desc          = 'Description';
$lang->attend->dayName       = 'Day';
$lang->attend->report        = 'Report';
$lang->attend->AM            = 'AM';
$lang->attend->PM            = 'PM';
$lang->attend->ipList        = 'IP List';
$lang->attend->noAttendUsers = 'Not required';
$lang->attend->signInClient  = 'Client';
$lang->attend->rejectReason  = 'Reject Reason';

$lang->attend->user          = 'User';
$lang->attend->begin         = 'Begin';
$lang->attend->end           = 'End';
$lang->attend->search        = 'Search';

$lang->attend->manualIn     = 'Clock-In';
$lang->attend->manualOut    = 'Clock-Out';
$lang->attend->reason       = 'Reasons';
$lang->attend->reviewStatus = 'Review';
$lang->attend->reviewedBy   = 'Reviewed By';
$lang->attend->reviewedDate = 'Reviewed Date';
$lang->attend->deserveDays  = 'Deserved Days';
$lang->attend->actualDays   = 'Actual';

$lang->attend->clientList['all']     = 'All';
$lang->attend->clientList['desktop'] = 'Desktop';

$lang->attend->statusList['normal']   = 'Normal';
$lang->attend->statusList['late']     = 'Late';
$lang->attend->statusList['early']    = 'Leave early';
$lang->attend->statusList['both']     = 'Late and Leave early';
$lang->attend->statusList['absent']   = 'Absent';
$lang->attend->statusList['leave']    = 'Ask for leave';
$lang->attend->statusList['makeup']   = 'Makeup times';
$lang->attend->statusList['overtime'] = 'Overtime';
$lang->attend->statusList['lieu']     = 'Lieu';
$lang->attend->statusList['trip']     = 'Biz trip';
$lang->attend->statusList['egress']   = 'Biz egress';
$lang->attend->statusList['rest']     = 'Off';

$lang->attend->abbrStatusList['normal']   = '√';
$lang->attend->abbrStatusList['late']     = 'Late';
$lang->attend->abbrStatusList['early']    = 'Early';
$lang->attend->abbrStatusList['both']     = 'L+E';
$lang->attend->abbrStatusList['absent']   = 'Absent';
$lang->attend->abbrStatusList['leave']    = 'Leave';
$lang->attend->abbrStatusList['makeup']   = 'Makeup';
$lang->attend->abbrStatusList['overtime'] = 'OT';
$lang->attend->abbrStatusList['lieu']     = 'Lieu';
$lang->attend->abbrStatusList['trip']     = 'Biz';
$lang->attend->abbrStatusList['egress']   = 'Out';
$lang->attend->abbrStatusList['rest']     = 'Rest';

$lang->attend->markStatusList['normal']   = '√';
$lang->attend->markStatusList['late']     = '=';
$lang->attend->markStatusList['early']    = '>';
$lang->attend->markStatusList['both']     = '=>';
$lang->attend->markStatusList['absent']   = 'x';
$lang->attend->markStatusList['leave']    = '!';
$lang->attend->markStatusList['makeup']   = '↑';
$lang->attend->markStatusList['overtime'] = '+';
$lang->attend->markStatusList['lieu']     = '↓';
$lang->attend->markStatusList['trip']     = '$';
$lang->attend->markStatusList['egress']   = '#';
$lang->attend->markStatusList['rest']     = '~';

$lang->attend->reasonList['normal']   = 'Normal';
$lang->attend->reasonList['leave']    = 'Ask for leave';
$lang->attend->reasonList['makeup']   = 'Makeup times';
$lang->attend->reasonList['overtime'] = 'Overtime';
$lang->attend->reasonList['lieu']     = 'Lieu';
$lang->attend->reasonList['trip']     = 'Biz trip';
$lang->attend->reasonList['egress']   = 'Biz egress';

$lang->attend->reviewStatusList['wait']   = 'Wait';
$lang->attend->reviewStatusList['pass']   = 'Pass';
$lang->attend->reviewStatusList['reject'] = 'Reject';

$lang->attend->inSuccess  = 'Signed in.';
$lang->attend->inFail     = 'Sign in failed.';
$lang->attend->outSuccess = 'Signed out.';
$lang->attend->outFail    = 'Sign out failed.';

$lang->attend->signInLimit   = 'Clock-in';
$lang->attend->signOutLimit  = 'Clock-out';
$lang->attend->workingDays   = 'Working days';
$lang->attend->workingHours  = 'Working hours';
$lang->attend->mustSignOut   = 'Required';
$lang->attend->denied        = 'Access denied.';
$lang->attend->nodata        = 'Select no data.';
$lang->attend->reviewSuccess = 'Review success';

$lang->attend->workingDaysList['5']  = "Monday ~ Friday";
$lang->attend->workingDaysList['6']  = "Monday ~ Saturday";
$lang->attend->workingDaysList['7']  = "Monday ~ Sunday";
$lang->attend->workingDaysList['12'] = "Sunday ~ Thursday";
$lang->attend->workingDaysList['13'] = "Sunday ~ Friday";

$lang->attend->mustSignOutList['yes'] = 'Yes';
$lang->attend->mustSignOutList['no']  = 'No';

$lang->attend->weeks = array('1st week', '2nd week', '3rd week', '4th week', '5th week', '6th week');

$lang->attend->notice['today']    = "<p>Your attendance yesterday was %s, <a href='%s' %s> Click here to edit.</a></p>";
$lang->attend->notice['yestoday'] = "<p>Your attendance today is %s, <a href='%s' %s> Click here to edit.</a></p>";
$lang->attend->notice['absent']   = "N/A";

$lang->attend->confirmReview['pass']   = 'Do you want to pass it?';
$lang->attend->confirmReview['reject'] = 'Do you want to reject it?';

$lang->attend->settings         = 'Company Settings';
$lang->attend->personalSettings = 'Personal Settings';
$lang->attend->setManager       = 'Department Manager Settings';
$lang->attend->setDept          = 'Set Department';

$lang->attend->beginDate = new stdClass();
$lang->attend->beginDate->company  = 'Start Date';
$lang->attend->beginDate->personal = 'Start Date';

$lang->attend->note = new stdClass();
$lang->attend->note->ip           = "Use commas to separate IPs, and IP segment is OK, e.g. 192.168.1.*";
$lang->attend->note->allip        = 'All IPs';
$lang->attend->note->IPDenied     = 'IP denied.';
$lang->attend->note->beginDate    = 'Set a date to begin record attend status. The attend status of days before this date will not be record.';
$lang->attend->note->signInClient = 'Choose all to sign in by any way, otherwise sign in by the chose one.';

$lang->attend->h = 'hours';
$lang->attend->m = 'minutes';
$lang->attend->s = 'seconds';

$lang->attend->signInClientError = 'Signin failed. It has been set can only sign in by %s.';
$lang->attend->waitReviews       = 'There are <strong>%s</strong> records waitting to be reviewed.';
/* oa/lieu */
if(!isset($lang->lieu)) $lang->lieu = new stdclass();
$lang->lieu->common = 'Lieu';
$lang->lieu->browse = 'Lieus';
$lang->lieu->create = 'Create';
$lang->lieu->edit   = 'Edit';
$lang->lieu->view   = 'View';
$lang->lieu->delete = 'Delete';
$lang->lieu->review = 'Review';
$lang->lieu->cancel = 'Cancel';
$lang->lieu->commit = 'Commit';

$lang->lieu->personal     = 'My Lieus';
$lang->lieu->browseReview = 'Reviews';
$lang->lieu->company      = 'All';
$lang->lieu->setReviewer  = 'Settings';
$lang->lieu->batchReview  = 'Batch Review';
$lang->lieu->batchPass    = 'Batch Pass';

$lang->lieu->id           = 'ID';
$lang->lieu->year         = 'Year';
$lang->lieu->begin        = 'Begin';
$lang->lieu->end          = 'End';
$lang->lieu->start        = 'Start';
$lang->lieu->finish       = 'Finish';
$lang->lieu->hours        = 'Hours';
$lang->lieu->overtime     = 'Overtime';
$lang->lieu->trip         = 'Trip';
$lang->lieu->status       = 'Status';
$lang->lieu->desc         = 'Description';
$lang->lieu->createdBy    = 'Created By';
$lang->lieu->createdDate  = 'Created On';
$lang->lieu->reviewedBy   = 'Reviewed By';
$lang->lieu->reviewedDate = 'Reviewed On';
$lang->lieu->date         = 'Date';
$lang->lieu->time         = 'Time';
$lang->lieu->rejectReason = 'Reject Reason';

$lang->lieu->statusList['draft']  = 'Draft';
$lang->lieu->statusList['wait']   = 'Wait';
$lang->lieu->statusList['doing']  = 'Doing';
$lang->lieu->statusList['pass']   = 'Pass';
$lang->lieu->statusList['reject'] = 'Reject';

$lang->lieu->confirmReview['pass']   = 'Are you sure to pass it?';
$lang->lieu->confirmReview['reject'] = 'Are you sure to reject it?';

$lang->lieu->notExist      = 'The record nto exist';
$lang->lieu->checkHours    = 'Check Hours';
$lang->lieu->denied        = 'Access denied.';
$lang->lieu->unique        = 'There was a record of lieu in %s.';
$lang->lieu->sameMonth     = 'Lieu must be in the same month.';
$lang->lieu->wrongEnd      = 'End time should be greater than begin time.';
$lang->lieu->nodata        = 'Select no data.';
$lang->lieu->reviewSuccess = 'Review success';
$lang->lieu->wrongHours    = 'The total time of overtime and trip are <strong>%s</strong> hours. Lieu hours can not be greater than the total time.';
$lang->lieu->nobccomp      = 'Please install the extension php-bcmath.';
$lang->lieu->bothEmpty     = '<strong>Overtime</strong> records and <strong>trip</strong> records cannot be empty at the same time.';

$lang->lieu->hoursTip = 'Hours';

$lang->lieu->checkHoursList['0'] = 'Not check';
$lang->lieu->checkHoursList['1'] = 'Lieu hours can not be greater than overtime hours (%s)';

$lang->lieu->reviewStatusList['pass']   = 'Pass';
$lang->lieu->reviewStatusList['reject'] = 'Reject';
/* proj/block */
$lang->block->common   = 'Blocks';
$lang->block->lblBlock = 'Block';
$lang->block->admin    = 'Manage Blocks';
$lang->block->type     = 'Type';
$lang->block->waitTask = 'Wait';
$lang->block->doneTask = 'Done';
$lang->block->rate     = 'Rate';

$lang->block->availableBlocks = new stdclass();
$lang->block->availableBlocks->task     = 'Tasks';
$lang->block->availableBlocks->project  = 'Projects';

$lang->block->num     = 'Number';
$lang->block->orderBy = 'Order';
$lang->block->status  = 'Status';
$lang->block->asc     = 'ASC';
$lang->block->desc    = 'DESC';
$lang->block->actions = 'Options';

$lang->block->orderByList = new stdclass();
$lang->block->orderByList->task = array();
$lang->block->orderByList->task['id_asc']        = 'ID ASC';
$lang->block->orderByList->task['id_desc']       = 'ID DESC';
$lang->block->orderByList->task['pri_asc']       = 'Priority ASC';
$lang->block->orderByList->task['pri_desc']      = 'Priority DESC';
$lang->block->orderByList->task['deadline_asc']  = 'Deadline ASC';
$lang->block->orderByList->task['deadline_desc'] = 'Deadline DESC';

$lang->block->orderByList->project = array();
$lang->block->orderByList->project['createdDate_asc']  = 'Created Date ASC';
$lang->block->orderByList->project['createdDate_desc'] = 'Created Date DESC';
$lang->block->orderByList->project['begin_asc']        = 'Begin ASC';
$lang->block->orderByList->project['begin_desc']       = 'Begin DESC';
$lang->block->orderByList->project['end_asc']          = 'End ASC';
$lang->block->orderByList->project['end_desc']         = 'End DESC';

$lang->block->typeList->task['assignedTo'] = 'Assigned to me';
$lang->block->typeList->task['createdBy']  = 'My Created';
$lang->block->typeList->task['finishedBy'] = 'My Finished';
$lang->block->typeList->task['closedBy']   = 'My Closed';
$lang->block->typeList->task['canceledBy'] = 'My CancelLed';

$lang->block->statusList->project['involved'] = 'Involved';
$lang->block->statusList->project['doing']    = 'Doing';
$lang->block->statusList->project['finished'] = 'Finished';
$lang->block->statusList->project['suspend']  = 'Suspend';
/* proj/project */
if(!isset($lang->project)) $lang->project = new stdclass();
$lang->project->common     = 'Project';
$lang->project->browse     = 'Projects List';
$lang->project->index      = 'Projects';
$lang->project->create     = "Create Project";
$lang->project->edit       = 'Edit';
$lang->project->view       = 'Project Detail';
$lang->project->finish     = 'Finish';
$lang->project->delete     = 'Delete';
$lang->project->enter      = 'Enter';
$lang->project->suspend    = 'Suspend';
$lang->project->activate   = 'Activate';
$lang->project->mine       = 'I charge : ';
$lang->project->other      = 'Other : ';
$lang->project->deleted    = 'Deleted';
$lang->project->finished   = 'Finished';
$lang->project->suspended  = 'Suspended';
$lang->project->noMatched  = 'No matched project including "%s"';
$lang->project->search     = 'Search';
$lang->project->import     = 'Import';
$lang->project->importTask = 'Import task';
$lang->project->role       = 'Role';
$lang->project->project    = 'Project';
$lang->project->dateRange  = 'Date Range';

$lang->project->id          = 'ID';
$lang->project->name        = 'Name';
$lang->project->status      = 'Status';
$lang->project->desc        = 'Description';
$lang->project->begin       = 'Start';
$lang->project->manager     = 'Manager';
$lang->project->member      = 'Team';
$lang->project->end         = 'End';
$lang->project->createdBy   = 'Created by';
$lang->project->createdDate = 'Created on';
$lang->project->fromproject = 'From Project';
$lang->project->whitelist   = 'Whitelist';
$lang->project->doc         = 'Document';

$lang->project->confirm = new stdclass();
$lang->project->confirm->activate = 'Do you want to activate this projcet?';
$lang->project->confirm->suspend  = 'Do you want to suspend this projcet?';

$lang->project->activateSuccess = 'Successfully activtated';
$lang->project->suspendSuccess  = 'Successfully suspended';
$lang->project->selectProject   = 'Select Project';

$lang->project->note = new stdclass();
$lang->project->note->rate = 'working hours';
$lang->project->note->task = 'The number of tasks';

$lang->project->statusList['doing']    = 'Doing';
$lang->project->statusList['finished'] = 'Finished';
$lang->project->statusList['suspend']  = 'Suspend';

$lang->project->roleList['member']  = 'Default';
$lang->project->roleList['senior']  = 'Manager';
$lang->project->roleList['limited'] = 'Limited';

$lang->project->whitelistTip        = 'Whitelist members have access to projects and tasks.';
$lang->project->roleTip             = "Managers have all privilages; Default members can not delete the unreleted tasks; Limited members can only edit their own tasks.";
$lang->project->roleTips['senior']  = "Managers can view, edit and delete all task.";
$lang->project->roleTips['member']  = "Default: view and edit all tasks and delete their own tasks.";
$lang->project->roleTips['limited'] = "Limited: view and edit their own tasks.";
/* proj/doc */
if(!isset($lang->doc)) $lang->doc = new stdclass();
$lang->doc->common         = 'Document';
$lang->doc->id             = 'ID';
$lang->doc->product        = 'Product';
$lang->doc->project        = 'Project';
$lang->doc->lib            = 'Library';
$lang->doc->category       = 'Category';
$lang->doc->title          = 'Title';
$lang->doc->digest         = 'Summary';
$lang->doc->comment        = 'Comment';
$lang->doc->type           = 'Type';
$lang->doc->content        = 'Content';
$lang->doc->keywords       = 'Tags';
$lang->doc->url            = 'URL';
$lang->doc->files          = 'File';
$lang->doc->views          = 'Views';
$lang->doc->createdBy      = 'Create by';
$lang->doc->createdDate    = 'Create on';
$lang->doc->editedBy       = 'Edite by';
$lang->doc->editedDate     = 'Edite on';
$lang->doc->basicInfo      = 'Basic Info';
$lang->doc->deleted        = 'Deleted';

$lang->doc->index          = 'Home';
$lang->doc->create         = 'Create';
$lang->doc->edit           = 'Edit';
$lang->doc->delete         = 'Delete';
$lang->doc->browse         = 'Document';
$lang->doc->view           = 'Document';
$lang->doc->manageType     = 'Manage Category';
$lang->doc->showFiles      = 'File Library';
$lang->doc->sort           = 'Sort';

$lang->doc->libName        = 'Name';
$lang->doc->libType        = 'Type';
$lang->doc->allLibs        = 'All Library';
$lang->doc->projectLibs    = 'Project Library';
$lang->doc->customLibs     = 'Custom Library';
$lang->doc->projectMainLib = 'Main Library';
$lang->doc->fileLib        = 'File Library';

$lang->doc->createLib      = 'Create Library';
$lang->doc->editLib        = 'Edit';
$lang->doc->deleteLib      = 'Delete';
$lang->doc->fixedMenu      = 'Fixed Menu';
$lang->doc->removedMenu    = 'Remove Menu';

$lang->doc->editCategory   = 'Edit Category';
$lang->doc->deleteCategory = 'Delete Category';

$lang->doc->allProject     = 'All projects';

$lang->doc->private        = 'Private';
$lang->doc->users          = 'Users';
$lang->doc->groups         = 'Groups';

$lang->doc->libTypeList = array();
$lang->doc->libTypeList['custom']  = 'Custom';
$lang->doc->libTypeList['project'] = 'Project';

$lang->doc->types['text'] = 'Document';
$lang->doc->types['url']  = 'Link';

$lang->doc->browseType = 'Browse Type';
$lang->doc->browseTypeList['list'] = 'List';
$lang->doc->browseTypeList['menu'] = 'Menu';
$lang->doc->browseTypeList['tree'] = 'Tree';

$lang->doc->confirmDelete      = "Do you want to delete this document?";
$lang->doc->confirmDeleteLib   = "Do you want to delete this document library?";
$lang->doc->errorEditSystemDoc = "System document library cannot be edited.";

$lang->doc->placeholder = new stdclass();
$lang->doc->placeholder->url = 'url';

$lang->doc->notFound     = 'The document does not exist';
$lang->doc->libNotFound  = 'The document library does not exist';
$lang->doc->errorMainLib = 'The main library can not be deleted.';
/* sys/task */
$lang->task->common = 'Task';
$lang->task->list   = 'Tasks';

$lang->task->browse    = 'Browse';
$lang->task->view      = 'Info';
$lang->task->viewChild = 'Child Info';
$lang->task->create    = 'Create';
$lang->task->edit      = 'Update';
$lang->task->finish    = 'Finish';
$lang->task->start     = 'Start';
$lang->task->activate  = 'Activate';
$lang->task->cancel    = 'Cancel';
$lang->task->close     = 'Close';
$lang->task->assignTo  = 'Assign to';
$lang->task->delete    = 'Delete';
$lang->task->export    = 'Export';

$lang->task->batchCreate    = 'Batch Create';
$lang->task->backToProjects = 'Back to project list'; 
$lang->task->viewAll        = "View all project's task";
$lang->task->editAll        = "Edit all project's task";
$lang->task->deleteAll      = "Delete all project's task";

$lang->task->id             = 'ID';
$lang->task->project        = 'Project';
$lang->task->customer       = 'Customer';
$lang->task->order          = 'Order';
$lang->task->category       = 'Category';
$lang->task->name           = 'Name';
$lang->task->type           = 'Type';
$lang->task->pri            = 'Priority';
$lang->task->estimate       = 'Man-Hour Estimated';
$lang->task->estimateAB     = 'Est.';
$lang->task->consumed       = 'Consumed';
$lang->task->consumedAB     = 'Use';
$lang->task->left           = 'Remained';
$lang->task->leftAB         = 'Remianed';
$lang->task->deadline       = 'Deadline';
$lang->task->deadlineAB     = 'Deadline';
$lang->task->status         = 'Status';
$lang->task->statusAB       = 'Status';
$lang->task->statusCustom   = 'Status Order';
$lang->task->mailto         = 'Mailto';
$lang->task->desc           = 'Description';
$lang->task->createdBy      = 'Created By';
$lang->task->createdByAB    = 'Create';
$lang->task->createdDate    = 'Create On';
$lang->task->createdDateAB  = 'Create';
$lang->task->editedBy       = 'Edited By';
$lang->task->editedDate     = 'Edited On';
$lang->task->assignedTo     = 'Assign';
$lang->task->assignedDate   = 'Assigned On';
$lang->task->estStarted     = 'Est. Start';
$lang->task->realStarted    = 'Actual Start';
$lang->task->finishedBy     = 'Finished By';
$lang->task->finishedByAB   = 'Finish';
$lang->task->finishedDate   = 'Finished On';
$lang->task->finishedDateAB = 'Date';
$lang->task->canceledBy     = 'CancelLed By';
$lang->task->canceledDate   = 'CancelLed On';
$lang->task->closedBy       = 'Closed By';
$lang->task->closedDate     = 'Closed On';
$lang->task->closedReason   = 'Closed Reason';
$lang->task->lastEditedBy   = 'Last Edited By';
$lang->task->lastEditedDate = 'Last Edited On';
$lang->task->lastEdited     = 'Last Edited';
$lang->task->hour           = 'Hour';
$lang->task->leftThisTime   = 'Remained';
$lang->task->date           = 'Date';
$lang->task->multiple       = 'Multiple Tasks';
$lang->task->multipleAB     = 'Multiple';
$lang->task->team           = 'Team';
$lang->task->transmit       = 'Transfer';
$lang->task->transmitTo     = 'Transfer To';
$lang->task->children       = 'Child';
$lang->task->childrenAB     = 'Child';
$lang->task->parent         = 'Parent Task';
$lang->task->unfinished     = 'Unfinished';
$lang->task->end            = 'End';
$lang->task->myConsumption  = 'Man-Hour Consumed';
$lang->task->recordEstimate = 'Man-Hour';

$lang->task->confirmFinish     = '"Remained" is zero, so the status of this task will be "done". Do you want to finish it?';
$lang->task->consumedBefore    = 'consumed before';
$lang->task->mailtoPlaceholder = 'Choose users to mail...';

$lang->task->lblPri  = 'P';
$lang->task->lblHour = '(h)';

$lang->task->statusList['']        = '';
$lang->task->statusList['wait']    = 'Wait';
$lang->task->statusList['doing']   = 'Doing';
$lang->task->statusList['done']    = 'Done';
$lang->task->statusList['cancel']  = 'Cancelled';
$lang->task->statusList['closed']  = 'Closed';

$lang->task->typeList['']        = '';
$lang->task->typeList['discuss'] = 'Discuss';
$lang->task->typeList['affair']  = 'Affair';
$lang->task->typeList['misc']    = 'Misc';

$lang->task->priList[0]  = '';
$lang->task->priList[1]  = '1';
$lang->task->priList[2]  = '2';
$lang->task->priList[3]  = '3';
$lang->task->priList[4]  = '4';

$lang->task->reasonList['']       = '';
$lang->task->reasonList['done']   = 'Done';
$lang->task->reasonList['cancel'] = 'Cancelled';

$lang->task->createdByMe  = 'Created By Me';
$lang->task->assignedToMe = 'Assigned To Me';
$lang->task->finishedByMe = 'Finished By Me';
$lang->task->untilToday   = 'Until Today';
$lang->task->expired      = 'Expired';
$lang->task->all          = 'All';

$lang->task->basicInfo = 'Basic Info';
$lang->task->life      = 'Task Life';

$lang->task->kanban  = 'Kanban';
$lang->task->mind    = 'Mind Map';
$lang->task->list    = 'List';
$lang->task->outline = 'Outline';

$lang->task->kanbanGroup['']           = 'Groups';
$lang->task->kanbanGroup['status']     = 'By Status';
$lang->task->kanbanGroup['assignedTo'] = 'By Assigned';

$lang->task->groups['']           = 'Choose group';
$lang->task->groups['status']     = 'by Status';
$lang->task->groups['assignedTo'] = 'Assigned To';
$lang->task->groups['createdBy']  = 'Created By';
$lang->task->groups['finishedBy'] = 'Finished By';
$lang->task->groups['closedBy']   = 'Closed By';

$lang->task->unkown     = 'Unkown';
$lang->task->unAssigned = 'Unassigned';

$lang->task->mindMoveTip = 'You should move a task to a sub node.';
$lang->task->notAllowed  = 'Not allowed.';
$lang->task->skipClose   = 'The status of Tasks : %s are unfinished or cancelled. Not allowed to close.';

$lang->task->groupinfo = "<div class='text-muted'>Total <strong>%s</strong>, Wait <strong>%s</strong>, Doing <strong>%s</strong>, Finished <strong>%s</strong>, Closed <strong>%s</strong></div>";
/* sys/package */
$lang->package->common        = 'Packages';
$lang->package->browse        = 'View';
$lang->package->install       = 'Install';
$lang->package->installAuto   = 'Auto Install';
$lang->package->installForce  = 'Force Install';
$lang->package->uninstall     = 'Uninstall';
$lang->package->activate      = 'Activate';
$lang->package->deactivate    = 'Deactivate';
$lang->package->obtain        = 'Extensions';
$lang->package->view          = 'Info';
$lang->package->download      = 'Download';
$lang->package->downloadAB    = 'Down';
$lang->package->upload        = 'Upload and install';
$lang->package->erase         = 'Erase';
$lang->package->upgrade       = 'Upgrade Package';
$lang->package->agreeLicense  = 'I agree the license';
$lang->package->settemplate   = 'Templates';
$lang->package->search        = 'Search';

$lang->package->structure   = 'Structure';
$lang->package->installed   = 'Installed';
$lang->package->deactivated = 'Deactivated';
$lang->package->available   = 'Downloaded';

$lang->package->id          = 'ID';
$lang->package->name        = 'Name';
$lang->package->code        = 'Code';
$lang->package->version     = 'Version';
$lang->package->compatible  = 'Compatible';
$lang->package->latest      = '<small>Latest:<strong><a href="%s" target="_blank" class="package">%s</a></strong>，need ranzhi <a href="http://api.zdoo.org/goto.php?item=latest" target="_blank"><strong>%s</strong></small>';
$lang->package->author      = 'Author';
$lang->package->license     = 'License';
$lang->package->intro       = 'Description';
$lang->package->abstract    = 'Abstract';
$lang->package->site        = 'Site';
$lang->package->addedTime   = 'Added on';
$lang->package->updatedTime = 'Updated on';
$lang->package->downloads   = 'Downloads';
$lang->package->public      = 'Public';
$lang->package->compatible  = 'Compatible';
$lang->package->grade       = 'Grade';
$lang->package->depends     = 'Dependent';

$lang->package->publicList[0] = 'Manually';
$lang->package->publicList[1] = 'Auto';

$lang->package->compatibleList[0] = 'Unknow';
$lang->package->compatibleList[1] = 'Compatible';

$lang->package->byDownloads   = 'Downloads';
$lang->package->byAddedTime   = 'New added';
$lang->package->byUpdatedTime = 'Last updated';
$lang->package->bySearch      = 'Search';
$lang->package->byCategory    = 'By Category';

$lang->package->installFailed            = '%s failed, the reason is:';
$lang->package->uninstallFailed          = 'Uninstall failed, the reason is:';
$lang->package->confirmUninstall         = 'Uninstall will delete or modify database, whether to uninstall?';
$lang->package->noticeBackupDB           = 'Before uninstalling, we recommend backing up the database.';
$lang->package->installFinished          = 'Good, the package has been %s successfully.';
$lang->package->refreshPage              = 'Refresh';
$lang->package->uninstallFinished        = 'Package has been successfully uninstalled.';
$lang->package->deactivateFinished       = 'Package has been successfully deactivated.';
$lang->package->activateFinished         = 'Package has been successfully activated.';
$lang->package->eraseFinished            = 'Package has been successfully erased.';
$lang->package->unremovedFiles           = 'There are some unremoved files, you need remove them manually';
$lang->package->executeCommands          = '<h3>Execute the following commands to fix them:</h3>';
$lang->package->successDownloadedPackage = 'Successfully downloaded the package file.';
$lang->package->successUploadedPackage   = 'Successfully uploaded the package file.';
$lang->package->successCopiedFiles       = 'Successfully copied files. ';
$lang->package->successInstallDB         = 'Successfully installed database.';
$lang->package->viewInstalled            = 'View installed packages.';
$lang->package->viewAvailable            = 'View available packages';
$lang->package->viewDeactivated          = 'View deactivated packages';
$lang->package->backDBFile               = 'Plug-related data has been backed up to %s file!';

$lang->package->upgradeExt     = 'Upgrade';
$lang->package->installExt     = 'Install';
$lang->package->upgradeVersion = '(Upgrade from %s to %s)';

$lang->package->waring = 'Waring';

$lang->package->errorOccurs                  = 'Error:';
$lang->package->errorGetModules              = "Get packages' categories data from the www.zdoo.org failed. ";
$lang->package->errorGetPackages             = 'Get packages from www.zdoo.org failed. You can visit <a href="http://www.zdoo.org/extension/" target="_blank">www.zdoo.org</a> to find your packages, download it manually and then upload to ranzhi to install it.';
$lang->package->errorDownloadPathNotFound    = 'The save path of package file <strong>%s</strong>does not exists.<br />For linux users, can execute <strong>mkdir -p %s</strong> to fix it.';
$lang->package->errorDownloadPathNotWritable = 'The save path of package file <strong>%s</strong>is not writable.<br />For linux users, can execute <strong>sudo chmod 777 %s</strong> to fix it.';
$lang->package->errorPackageFileExists       = 'There is a file with the same name <strong>%s</strong>.<h3> If you want to %s again, <a href="%s" class="alert-link loadInModal">please click this link</a>.</h3>';
$lang->package->errorDownloadFailed          = 'Download failed, please try again. Or you can download it manually and upload it to install.';
$lang->package->errorMd5Checking             = 'The downloawd files checking failed, Please download it manually and upload it to install';
$lang->package->errorExtracted               = 'The package file <strong> %s </strong> extracted failed. The error is:<br />%s';
$lang->package->errorCheckIncompatible       = 'This extenion is not compatible with current ranzhi version. <h3>You can <a href="%s" class="loadInModal">Force %s</a> or <a href="#" onclick=parent.location.href="%s">Cancel</a></h3>.';
$lang->package->errorFileConflicted          = 'There are some files conflicted: <br />%s <h3>You can <a href="%s" class="loadInModal">Overide them</a> or <a href="#" onclick=parent.location.href="%s">Cancel</a></h3>.';
$lang->package->errorPackageNotFound         = 'The package file <strong>%s </strong> not found, perhaps download failed, try again.';
$lang->package->errorTargetPathNotWritable   = 'Target path <strong>%s </strong>not writable.';
$lang->package->errorTargetPathNotExists     = 'Target path <strong>%s </strong>not exists';
$lang->package->errorInstallDB               = 'Execute database sql failed, the error is: %s';
$lang->package->errorConflicts               = 'With plug-in "%s" Conflict!';
$lang->package->errorDepends                 = 'The following dependency plugin is not installed or the version is incorrect:<br /><br /> %s';
$lang->package->errorIncompatible            = 'The plug-in with your RanZhi incompatible version';
$lang->package->errorUninstallDepends        = 'Plugin "%s" relying on the plug-in, can not uninstall';
/* sys/queue */
$lang->queue->common  = 'Queue';
$lang->queue->index   = 'Index';
$lang->queue->setting = 'Setting';

$lang->queue->typeList['mail']     = 'Mail';
$lang->queue->typeList['message']  = 'Browser notifications';
$lang->queue->typeList['webhook']  = 'Webhook';
$lang->queue->typeList['xuanxuan'] = 'XuanXuan';
/* sys/todo */
if(!isset($lang->todo)) $lang->todo = new stdclass();
$lang->todo->common       = 'Todo';
$lang->todo->index        = "Home";
$lang->todo->browse       = "Todo";
$lang->todo->create       = "Create";
$lang->todo->batchCreate  = "Batch create";
$lang->todo->edit         = "Edit";
$lang->todo->batchEdit    = "Batch edit";
$lang->todo->view         = "Info";
$lang->todo->viewAB       = "Info";
$lang->todo->finish       = "Finish";
$lang->todo->batchFinish  = "Batch Finish";
$lang->todo->export       = "Export";
$lang->todo->delete       = "Delete";
$lang->todo->browse       = "Browse";
$lang->todo->import       = "Import to";
$lang->todo->changeStatus = "Change";
$lang->todo->legendBasic  = "Basic Info";
$lang->todo->calendar     = "Calendar";
$lang->todo->assignTo     = "Assign";

$lang->todo->id           = 'ID';
$lang->todo->account      = 'Owner';
$lang->todo->date         = 'Date';
$lang->todo->begin        = 'Begin';
$lang->todo->beginAB      = 'Begin';
$lang->todo->end          = 'End';
$lang->todo->endAB        = 'End';
$lang->todo->beginAndEnd  = 'Time Frame';
$lang->todo->type         = 'Type';
$lang->todo->pri          = 'Priority';
$lang->todo->name         = 'Name';
$lang->todo->status       = 'Status';
$lang->todo->desc         = 'Description';
$lang->todo->private      = 'Private';
$lang->todo->idvalue      = 'Task/Order';
$lang->todo->assignedTo   = 'Assign To';
$lang->todo->assignedBy   = 'Assigned By';
$lang->todo->assignedDate = 'Assigned On';
$lang->todo->finishedBy   = 'Finished By';
$lang->todo->finishedDate = 'Finished On';
$lang->todo->closedBy     = 'Closed By';
$lang->todo->closedDate   = 'Closed On';
$lang->todo->ranzhi       = 'Zdoo';
$lang->todo->task         = 'Tasks';
$lang->todo->bug          = 'Bugs';

$lang->todo->confirmTip  = 'This Todo is linked to %s #%s. Do you want to change it anyway?';
$lang->todo->assignedTip = '%s at %s';
$lang->todo->finishedTip = '%s at %s';
$lang->todo->closedTip   = '%s at %s';
$lang->todo->deleteTip   = 'Drag here to delete.';

$lang->todo->statusList['wait']     = 'Wait';
$lang->todo->statusList['doing']    = 'Doing';
$lang->todo->statusList['done']     = 'Done';
$lang->todo->statusList['closed']   = 'Closed';

$lang->todo->priList[3] = '3';
$lang->todo->priList[1] = '1';
$lang->todo->priList[2] = '2';
$lang->todo->priList[4] = '4';

$lang->todo->typeList['custom']   = 'Custom';
$lang->todo->typeList['task']     = 'Project';
$lang->todo->typeList['order']    = 'Order';
$lang->todo->typeList['customer'] = 'Customer';

$lang->todo->confirmDelete  = "Do you want to delete this To-Do?";
$lang->todo->successMarked  = "Successfully changed.";
$lang->todo->thisIsPrivate  = 'This is a private todo:)';
$lang->todo->lblDisableDate = 'Set time later.';
$lang->todo->emptyTodo      = 'You have no To-Do scheduled today.';

$lang->todo->periods['today']      = 'Today';
$lang->todo->periods['yesterday']  = 'Yesterday';
$lang->todo->periods['thisWeek']   = 'This week';
$lang->todo->periods['lastWeek']   = 'Last week';
$lang->todo->periods['thisMonth']  = 'This month';
$lang->todo->periods['lastmonth']  = 'Last month';
$lang->todo->periods['thisSeason'] = 'This season';
$lang->todo->periods['thisYear']   = 'This year';
$lang->todo->periods['future']     = 'Wait';
$lang->todo->periods['before']     = 'Unfinished';
$lang->todo->periods['all']        = 'All';

$lang->todo->batchedittips = 'The editing item is not selected';

$lang->todo->action = new stdclass();
$lang->todo->action->finished = array('main' => '$date, Finished by <strong>$actor</strong>');
$lang->todo->action->marked   = array('main' => '$date, Change status to <stong>$extra</strong> by <strong>$actor</strong>。', 'extra' => 'statusList');
/* sys/article */
$lang->article->common      = 'Article';
$lang->article->createDraft = 'Create draft';

$lang->article->id          = 'Id';
$lang->article->category    = 'Category';
$lang->article->categories  = 'Categories';
$lang->article->title       = 'Title';
$lang->article->alias       = 'Alias';
$lang->article->content     = 'Content';
$lang->article->original    = 'Original';
$lang->article->copySite    = 'Site';
$lang->article->copyURL     = 'URL';
$lang->article->keywords    = 'Keywords';
$lang->article->summary     = 'Summary';
$lang->article->author      = 'Author';
$lang->article->editor      = 'Editor';
$lang->article->createdDate = 'Added';
$lang->article->editedDate  = 'Edited';
$lang->article->status      = 'Status';
$lang->article->type        = 'Type';
$lang->article->views       = 'Views';
$lang->article->stick       = 'Sticky';
$lang->article->order       = 'Order';
$lang->article->private     = 'Private';
$lang->article->users       = 'Users';
$lang->article->groups      = 'Groups';
$lang->article->readers     = 'Readers';

$lang->article->list   = 'List';
$lang->article->admin  = 'Admin';
$lang->article->create = 'Create';
$lang->article->edit   = 'Edit';
$lang->article->files  = 'Files';

if(!isset($lang->blog)) $lang->blog = new stdclass();
$lang->blog->admin  = 'Admin';
$lang->blog->list   = 'List';
$lang->blog->create = 'Create';
$lang->blog->edit   = 'Edit';

if(!isset($lang->announce)) $lang->announce = new stdclass();
$lang->announce->admin  = 'Announce';
$lang->announce->list   = 'List';
$lang->announce->create = 'Create';
$lang->announce->edit   = 'Edit';

$lang->page = new stdclass();
$lang->page->admin  = 'Admin';
$lang->page->list   = 'List';
$lang->page->create = 'Create';
$lang->page->edit   = 'Edit';

$lang->article->originalList[1] = 'Original';
$lang->article->originalList[0] = 'Copied';

$lang->article->statusList['draft']  = 'Draft';
$lang->article->statusList['normal'] = 'Normal';

$lang->article->confirmDelete = 'Are you sure to delete this article?';

$lang->article->lblAddedDate = '<strong>Added:</strong> %s &nbsp;&nbsp;';
$lang->article->lblAuthor    = "<strong>Author:</strong> %s &nbsp;&nbsp;";
$lang->article->lblSource    = '<strong>Source:</strong>';
$lang->article->lblViews     = ' <strong>Views:</strong>%s';
$lang->article->lblEditor    = '<i>Edited by %s at %s</i>';
$lang->article->lblReaders   = '%s users had read.';

$lang->article->prev      = 'Prev';
$lang->article->next      = 'Next';
$lang->article->none      = 'None';
$lang->article->directory = 'Back';
$lang->article->back2Top  = 'Back to top';

$lang->article->note = new stdclass();
$lang->article->note->createdDate = 'Can be delayed until the selected time publish.';
/* sys/webapp */
if(!isset($lang->webapp)) $lang->webapp = new stdclass();
$lang->webapp->common = 'App';
$lang->webapp->index  = 'Added App';
$lang->webapp->obtain = 'Obtain App';

$lang->webapp->install    = 'Install';
$lang->webapp->uninstall  = 'Remove';
$lang->webapp->useapp     = 'Run';
$lang->webapp->view       = 'Info';
$lang->webapp->preview    = 'Preview';
$lang->webapp->installed  = 'Installed';
$lang->webapp->edit       = 'Edit App';
$lang->webapp->create     = 'Create App';
$lang->webapp->manageTree = 'Category';

$lang->webapp->id          = 'ID';
$lang->webapp->name        = 'Name';
$lang->webapp->url         = 'URL';
$lang->webapp->icon        = 'Icon';
$lang->webapp->module      = 'Category';
$lang->webapp->author      = 'Author';
$lang->webapp->abstract    = 'Abstract';
$lang->webapp->desc        = 'Desc';
$lang->webapp->target      = 'How';
$lang->webapp->size        = 'Size';
$lang->webapp->height      = 'Height';
$lang->webapp->addedTime   = 'Add Time';
$lang->webapp->updatedTime = 'Update Time';
$lang->webapp->downloads   = 'Installs';
$lang->webapp->grade       = 'Grade';
$lang->webapp->addType     = 'Add Type';
$lang->webapp->addedBy     = 'Added By';
$lang->webapp->addedDate   = 'Added date';
$lang->webapp->views       = 'Views';
$lang->webapp->packup      = 'Fold';
$lang->webapp->custom      = 'Custom';

$lang->webapp->byDownloads   = 'Most Downloads';
$lang->webapp->byAddedTime   = 'Latest Added';
$lang->webapp->byUpdatedTime = 'Latest Update';
$lang->webapp->bySearch      = 'Search';
$lang->webapp->byCategory    = 'Category';

$lang->webapp->selectModule = 'Select Category:';
$lang->webapp->allModule    = 'All';
$lang->webapp->noModule     = 'Uncategorized';

$lang->webapp->targetList['']       = '';
$lang->webapp->targetList['blank']  = 'Blank';
$lang->webapp->targetList['iframe'] = 'Iframe';

$lang->webapp->width  = 'Width';
$lang->webapp->height = 'Height';

$lang->webapp->sizeList['']         = "";
$lang->webapp->sizeList['1024x600'] = "1024 x 600";
$lang->webapp->sizeList['900x600']  = "900 x 600";
$lang->webapp->sizeList['700x600']  = "700 x 600";
$lang->webapp->sizeList['600x500']  = "600 x 500";
$lang->webapp->sizeList['custom']   = "Custom size";

$lang->webapp->addTypeList['system'] = 'System App';
$lang->webapp->addTypeList['custom'] = 'Custom App';

$lang->webapp->errorOccurs        = 'Error:';
$lang->webapp->errorGetModules    = "Get extensions' categories data from the www.zdoo.org failed. ";
$lang->webapp->errorGetExtensions = 'Get extensions from www.zdoo.org failed. ';
$lang->webapp->noApps             = 'No extensions found in this category.';
$lang->webapp->successInstall     = 'Success Install App.';
$lang->webapp->confirmDelete      = 'Are you sure delete this app?';
$lang->webapp->noticeAbstract     = 'Sentence describes the application, not more than 30 words';
$lang->webapp->noticeIcon         = 'The size of icon is 72x72.';
/* sys/install */
$lang->install = new stdclass();
$lang->install->common  = 'Install';
$lang->install->next    = 'Next';
$lang->install->pre     = 'Back';
$lang->install->reload  = 'Reload';
$lang->install->error   = 'Error ';

$lang->install->start            = 'Start install';
$lang->install->keepInstalling   = 'Keep installing this version';
$lang->install->seeLatestRelease = 'See the latest release.';
$lang->install->welcome          = 'Welcome to Zdoo community.';
$lang->install->license          = 'Zdoo is under license of Z PUBLIC LICENSE(ZPL) 1.2. ';
$lang->install->desc             = <<<EOT
<blockquote>
  <strong>{$lang->ranzhi}</strong> is developed by <strong><a href='http://www.cnezsoft.com' target='_blank' class='red'>QingDao Nature Easy Soft Network Technology Co.,Ltd.</a></strong>
  <!--With projects, customers, cash flow, office and communication of the five core functions.-->
  Tailored specifically for small and medium sized groups, small and medium sized team of information technology tool of choice!

  Website:<a href='http://www.zdoo.org' target='_blank'>http://www.zdoo.org</a>
  Suport: <a href='http://www.zdoo.org/forum/' target='_blank'>http://www.zdoo.org/forum/</a>
  Current Version: <strong class='red'>%s</strong>。
</blockquote>
EOT;

$lang->install->choice     = 'You can ';
$lang->install->checking   = 'System Checkup';
$lang->install->ok         = 'OK(√)';
$lang->install->fail       = 'Failed(×)';
$lang->install->loaded     = 'Loaded';
$lang->install->unloaded   = 'Not loaded';
$lang->install->exists     = 'Exist ';
$lang->install->notExists  = 'Not exists';
$lang->install->writable   = 'Writable ';
$lang->install->notWritable= 'Not writable ';
$lang->install->phpINI     = 'PHP ini file';
$lang->install->checkItem  = 'Items';
$lang->install->current    = 'Current';
$lang->install->result     = 'Results';
$lang->install->action     = 'Actions';

$lang->install->phpVersion = 'PHP version';
$lang->install->phpFail    = 'Must > 5.2.0';

$lang->install->pdo          = 'PDO extension';
$lang->install->pdoFail      = 'Edit the php.ini file to load PDO extsion.';
$lang->install->pdoMySQL     = 'PDO_MySQL extension';
$lang->install->pdoMySQLFail = 'Edit the php.ini file to load PDO_MySQL extsion.';
$lang->install->tmpRoot      = 'Temporary directory';
$lang->install->dataRoot     = 'Upload directory.';
$lang->install->sessionRoot  = 'session directory';
$lang->install->mkdir        = '<p>You have to creat the directory %s. <br /> In Linux, try<br /> mkdir -p %s</p>';
$lang->install->chmod        = 'You have to change the permission of "%s".<br /> In Linux, try<br />chmod o=rwx -R %s';
$lang->install->sessionChmod = 'You have to change the permission of "%s".<br /> In Linux, try<br />sudo chmod o=wtx %s';

$lang->install->settingDB    = 'Set Database';
$lang->install->dbHost     = 'Database Host';
$lang->install->dbHostNote = 'If 127.0.0.1 cannot be connected, try localhost';
$lang->install->dbPort     = 'Host Port';
$lang->install->dbUser     = 'Database User';
$lang->install->dbPassword = 'Database Password';
$lang->install->dbName     = 'Database Name';
$lang->install->dbPrefix   = 'Table Prefix';
$lang->install->createDB   = 'Auto Create Database';
$lang->install->clearDB    = 'Clear data if the database exists.';

$lang->install->errorDBName        = "'.' are not allowed in database name";
$lang->install->errorConnectDB     = 'Failed to connect to the database.';
$lang->install->errorCreateDB      = 'Failed to create the database.';
$lang->install->errorDBExists      = 'Database exists. If continue installing, check the Clear Database box.';
$lang->install->errorCreateTable   = 'Failed to create the table.';

$lang->install->setConfig  = 'Create config';
$lang->install->key        = 'Item';
$lang->install->value      = 'Value';
$lang->install->saveConfig = 'Save config';
$lang->install->save2File  = '<div>Failed to save the config automaticlly.</span></div>Copy the text of the textarea and save to "<strong> %s </strong>".';
$lang->install->saved2File = 'The config file has saved to "<strong>%s</strong> ".';
$lang->install->errorNotSaveConfig = 'Do not save the config file.';

$lang->install->success  = "Installed!";
$lang->install->domainIP = 'IP of domain is %s';
$lang->install->serverIP = 'IP of LAN is %s';
$lang->install->publicIP = 'IP of WAN is %s';
$lang->install->setAdmin = 'Create Admin';
$lang->install->account  = 'Account';
$lang->install->password = 'Password';
$lang->install->errorEmptyPassword = "It should not be empty.";

$lang->install->import['area']     = 'Import area data';
$lang->install->import['industry'] = 'Import industry data';

$lang->install->buildinEntry = new stdclass();
$lang->install->buildinEntry->crm['name']  = 'CRM';
$lang->install->buildinEntry->crm['abbr']  = '';
$lang->install->buildinEntry->cash['name'] = 'CASH';
$lang->install->buildinEntry->cash['abbr'] = '';
$lang->install->buildinEntry->oa['name']   = 'OA';
$lang->install->buildinEntry->oa['abbr']   = 'OA';
$lang->install->buildinEntry->team['name'] = 'TEAM';
$lang->install->buildinEntry->team['abbr'] = '';
$lang->install->buildinEntry->doc['name']  = 'DOC';
$lang->install->buildinEntry->doc['abbr']  = '';
$lang->install->buildinEntry->proj['name'] = 'PROJ';
$lang->install->buildinEntry->proj['abbr'] = '';

$lang->install->categoryList[1] = 'Primary Income';
$lang->install->categoryList[2] = 'Non-Primary Income';
$lang->install->categoryList[3] = 'Primary Expense';
$lang->install->categoryList[4] = 'Non-Primary Expense';
$lang->install->categoryList[5] = 'Profit';
$lang->install->categoryList[6] = 'Loss';
$lang->install->categoryList[7] = 'Fees';
$lang->install->categoryList[8] = 'Interest';

$lang->install->schemaList[1] = 'Alipay';
$lang->install->schemaList[2] = 'CITIC Bank';

$lang->install->cronList[1] = 'Monitor cron';
$lang->install->cronList[2] = 'Back up data & files';
$lang->install->cronList[3] = 'Auto delete the data 30 days prior to today';
$lang->install->cronList[4] = 'Daily Reminder';

$lang->install->groupList[1]['name'] = 'Administrator';
$lang->install->groupList[1]['desc'] = 'Administrator has all privileges.';
$lang->install->groupList[2]['name'] = 'Finance Specialist';
$lang->install->groupList[2]['desc'] = 'has all privileges of CASH.';
$lang->install->groupList[3]['name'] = 'Sales Manager';
$lang->install->groupList[3]['desc'] = 'Sales Manager has all privileges of CRM.';
$lang->install->groupList[4]['name'] = 'Sales';
$lang->install->groupList[4]['desc'] = 'Default privileges for sales.';
$lang->install->groupList[5]['name'] = 'Common';
$lang->install->groupList[5]['desc'] = 'Default privileges for all users.';
/* sys/my */
$lang->my->common = 'Dashbord';

$lang->my->order->common = 'Order';

$lang->my->contract->common = 'Contract';

$lang->my->company->common  = 'Todo';
$lang->my->company->dept    = 'Department';
$lang->my->company->all     = 'All';
$lang->my->company->account = 'User';
$lang->my->company->begin   = 'Begin';
$lang->my->company->end     = 'End';
$lang->my->company->view    = 'View';

$lang->my->task->common     = 'My Task';
$lang->my->task->assignedTo = 'Assigned To Me';
$lang->my->task->createdBy  = 'Created By Me';
$lang->my->task->finishedBy = 'Finished By Me';
$lang->my->task->closedBy   = 'Closed By Me';
$lang->my->task->canceledBy = 'Canceled By Me';
$lang->my->task->unclosed   = 'Unclosed';

$lang->my->project = new stdclass();
$lang->my->project->common = 'My Project';

$lang->my->dynamic->common = 'My Dynamic';

$lang->my->review->module = 'Module';

$lang->my->contact = new stdclass();
$lang->my->contact->common = 'contact';
/* sys/tree */
$lang->tree->common      = "Tree";
$lang->tree->add         = "Add";
$lang->tree->edit        = "Edit";
$lang->tree->children    = "Add child";
$lang->tree->delete      = "Delete";
$lang->tree->browse      = "Area, Industry, Income Categories, Expend Categories, Forum Boards, Blog Categories, Depts";
$lang->tree->manage      = "Manage";
$lang->tree->fix         = "Fix data";
$lang->tree->merge       = "Merge";

$lang->tree->noCategories  = 'No category yet. Add one first.';
$lang->tree->noBoards      = 'No board yet. Add one first.';
$lang->tree->timeCountDown = "Jump to %s manage page in <strong id='countDown'>3</strong> seconds.";
$lang->tree->redirect      = 'Create now';
$lang->tree->aliasRepeat   = 'Alias: %s already exists。';
$lang->tree->aliasConflict = 'Alias: %s  conflicts with system modules';
$lang->tree->hasChildren   = "This category has children, so it can't be deleted.";
$lang->tree->hasThreads    = "This board has threads, so it can't be deleted.";
$lang->tree->hasProducts   = "This category has products, so it can't be deleted.";
$lang->tree->confirmDelete = "Do you want to delete it?";
$lang->tree->successFixed  = "Fixed.";
$lang->tree->asParent      = "[%s] has children, so it can't be merged.";

$lang->category = new stdclass();
$lang->category->common   = 'Category';
$lang->category->name     = 'Name';
$lang->category->alias    = 'Alias';
$lang->category->parent   = 'Parent';
$lang->category->desc     = 'Description';
$lang->category->keywords = 'Tag';
$lang->category->children = "Child";
$lang->category->rights   = 'Rights';
$lang->category->users    = 'Users';
$lang->category->groups   = 'Groups';
$lang->category->origin   = 'Origin Category';
$lang->category->target   = 'Target Category';

$lang->area = new stdclass();
$lang->area->common   = 'Area';
$lang->area->name     = 'Name';
$lang->area->alias    = 'Alias';
$lang->area->parent   = 'Parent';
$lang->area->desc     = 'Description';
$lang->area->keywords = 'Tags';
$lang->area->children = 'Child';

$lang->industry = new stdclass();
$lang->industry->common   = 'Industry';
$lang->industry->name     = 'Name';
$lang->industry->alias    = 'Alias';
$lang->industry->parent   = 'Parent';
$lang->industry->desc     = 'Description';
$lang->industry->keywords = 'Tags';
$lang->industry->children = "Child";

$lang->in = new stdclass();
$lang->in->common   = 'Income';
$lang->in->name     = 'Name';
$lang->in->alias    = 'Alias';
$lang->in->parent   = 'Parent';
$lang->in->desc     = 'Description';
$lang->in->keywords = 'Tags';
$lang->in->children = "Child";
$lang->in->merge    = 'Merge Category';

$lang->out = new stdclass();
$lang->out->common   = 'Expense';
$lang->out->name     = 'Name';
$lang->out->alias    = 'Alias';
$lang->out->parent   = 'Parent';
$lang->out->desc     = 'Description';
$lang->out->keywords = 'Tags';
$lang->out->children = "Child";
$lang->out->rights   = 'Rights';
$lang->out->refund   = 'Reimbursement';
$lang->out->merge    = 'Merge Category';

$lang->out->refundList[1] = 'Yes';
$lang->out->refundList[0] = 'No';

$lang->board = new stdclass();
$lang->board->common     = 'Board';
$lang->board->name       = 'Board';
$lang->board->alias      = 'Alias';
$lang->board->parent     = 'Parent';
$lang->board->desc       = 'Description';
$lang->board->keywords   = 'Tags';
$lang->board->children   = "Child";
$lang->board->readonly   = 'Read Only';
$lang->board->moderators = 'Board Moderator';
$lang->board->users      = 'Users';
$lang->board->groups     = 'Groups';

$lang->board->readonlyList[0] = 'Pulic';
$lang->board->readonlyList[1] = 'Read Only';

$lang->board->placeholder = new stdclass();
$lang->board->placeholder->moderators  = "BM accounts. Separated with" . '","';
$lang->board->placeholder->setChildren = 'Only forum needs two-level boards can be seen.';
/* sys/provider */
$lang->provider->browse      = 'Browse Provider';
$lang->provider->create      = 'Create Provider';
$lang->provider->edit        = 'Edit Provider';
$lang->provider->view        = 'View Provider';
$lang->provider->delete      = 'Delete Provider';
$lang->provider->list        = 'Provider List';
$lang->provider->contact     = 'Contacts';
$lang->provider->linkContact = 'Create Contact';
$lang->provider->basicInfo   = 'Basic Info';
$lang->provider->moreInfo    = 'More Info';
$lang->provider->setCategory = 'Set Category';

$lang->provider->common        = 'Provider';
$lang->provider->id            = 'ID';
$lang->provider->name          = 'Name';
$lang->provider->depositor     = 'Account';
$lang->provider->contact       = 'Contact';
$lang->provider->type          = 'Type';
$lang->provider->size          = 'Size';
$lang->provider->industry      = 'Industry';
$lang->provider->area          = 'Area';
$lang->provider->phone         = 'Phone';
$lang->provider->email         = 'Email';
$lang->provider->qq            = 'QQ';
$lang->provider->site          = 'Site';
$lang->provider->weibo         = 'Sina Weibo';
$lang->provider->weixin        = 'Wechat';
$lang->provider->category      = 'Category';
$lang->provider->desc          = 'Description';
$lang->provider->relation      = 'Relation';
$lang->provider->createdBy     = 'Created By';
$lang->provider->createdDate   = 'Created Date';
$lang->provider->editedBy      = 'Edited By';
$lang->provider->editedDate    = 'Edited Date';
$lang->provider->createContact = 'Create Contact';

$lang->provider->relationList['client']   = 'Client';
$lang->provider->relationList['provider'] = 'Provider';
$lang->provider->relationList['partner']  = 'Partner';

$lang->provider->typeList['']           = '';
$lang->provider->typeList['national']   = 'National';
$lang->provider->typeList['collective'] = 'Collective';
$lang->provider->typeList['corporate']  = 'Corporate';
$lang->provider->typeList['limited']    = 'Limited';
$lang->provider->typeList['partnership']= 'Partnership';
$lang->provider->typeList['foreign']    = 'Foreign';
$lang->provider->typeList['personal']   = 'Personal';

$lang->provider->sizeList[0] = '';
$lang->provider->sizeList[1] = 'Large(>100persons)';
$lang->provider->sizeList[2] = 'Medium(50-100 persons)';
$lang->provider->sizeList[3] = 'Small(10-50 persons)';
$lang->provider->sizeList[4] = 'Mini(<10 persons)';
/* sys/search */
if(!isset($lang->search)) $lang->search = new stdclass();
$lang->search->common        = 'Search';
$lang->search->reset         = 'Reset';
$lang->search->more          = 'More';
$lang->search->lite          = 'Lite';
$lang->search->saveQuery     = 'Save';
$lang->search->myQuery       = 'My queries';
$lang->search->group1        = '1';
$lang->search->group2        = '2';
$lang->search->buildForm     = 'Search form';
$lang->search->buildQuery    = 'Execute query';
$lang->search->saveQuery     = 'Save query';
$lang->search->deleteQuery   = 'Delete query';
$lang->search->setQueryTitle = 'Please input the title（execute searching before save）：';
$lang->search->storyTitle    = 'Story title';
$lang->search->taskTitle     = 'Task title';
$lang->search->select        = 'Stories/Tasks filter';
$lang->search->me            = 'Me';

$lang->search->operators['=']          = '=';
$lang->search->operators['!=']         = '!=';
$lang->search->operators['>']          = '>';
$lang->search->operators['>=']         = '>=';
$lang->search->operators['<']          = '<';
$lang->search->operators['<=']         = '<=';
$lang->search->operators['include']    = 'include';
$lang->search->operators['between']    = 'between';
$lang->search->operators['notinclude'] = 'not include';
$lang->search->operators['belong']     = 'belongs to';

$lang->search->andor['and']         = 'And';
$lang->search->andor['or']          = 'Or';

$lang->search->null = 'Null';

$lang->userquery = new stdclass();
$lang->userquery->title     = 'Title';
$lang->userquery->myQueries = 'My queries';
$lang->userquery->execut    = 'Execute';
$lang->userquery->delete    = 'Delete';
/* sys/admin */
$lang->admin->shortcuts = new stdclass();

$lang->admin->shortcuts->createUser  = 'User';
$lang->admin->shortcuts->company     = 'Company';
$lang->admin->shortcuts->createEntry = 'Application';
/* sys/block */
$lang->block->common = 'Block';
$lang->block->name   = 'Name';
$lang->block->style  = 'Style';
$lang->block->grid   = 'Grid';
$lang->block->color  = 'Color';

$lang->block->lblEntry = 'Entry';
$lang->block->lblBlock = 'Block';
$lang->block->lblRss   = 'RSS';
$lang->block->lblNum   = 'Number';
$lang->block->lblHtml  = 'HTML';

$lang->block->params = new stdclass();
$lang->block->params->name  = 'Name';
$lang->block->params->value = 'Value';

$lang->block->createBlock        = 'Create';
$lang->block->editBlock          = 'Edit';
$lang->block->ordersSaved        = 'Order has been saved.';
$lang->block->confirmRemoveBlock = 'Do you want to remove Block [{0}] ?';

$lang->block->allEntries  = 'All';
$lang->block->dynamic     = 'Dynamic';
$lang->block->dynamicInfo = "%s, %s <em>%s</em> %s <a href='%s' %s>%s</a>。";

$lang->block->default['oa']['1']['title'] = 'Calendar';
$lang->block->default['oa']['1']['block'] = 'attend';
$lang->block->default['oa']['1']['grid']  = 6;

$lang->block->default['oa']['2']['title'] = 'Announcement';
$lang->block->default['oa']['2']['block'] = 'announce';
$lang->block->default['oa']['2']['grid']  = 4;

$lang->block->default['oa']['2']['params']['num'] = 15;

$lang->block->default['proj']['3']['title'] = 'My Task';
$lang->block->default['proj']['3']['block'] = 'task';
$lang->block->default['proj']['3']['grid']  = 4;

$lang->block->default['proj']['3']['params']['num']     = 15;
$lang->block->default['proj']['3']['params']['orderBy'] = 'id_desc';
$lang->block->default['proj']['3']['params']['status']  = array();
$lang->block->default['proj']['3']['params']['type']    = 'assignedTo';

$lang->block->default['proj']['4']['title'] = 'ProjectS';
$lang->block->default['proj']['4']['block'] = 'project';
$lang->block->default['proj']['4']['grid']  = 4;

$lang->block->default['proj']['4']['params']['num']     = 15;
$lang->block->default['proj']['4']['params']['orderBy'] = 'id_desc';
$lang->block->default['proj']['4']['params']['status']  = 'doing';

$lang->block->default['crm']['1']['title'] = 'My Orders';
$lang->block->default['crm']['1']['block'] = 'order';
$lang->block->default['crm']['1']['grid']  = 4;

$lang->block->default['crm']['1']['params']['num']     = 15;
$lang->block->default['crm']['1']['params']['orderBy'] = 'id_desc';
$lang->block->default['crm']['1']['params']['type']    = 'createdBy';
$lang->block->default['crm']['1']['params']['status']  = array();

$lang->block->default['crm']['2']['title'] = 'My Contract';
$lang->block->default['crm']['2']['block'] = 'contract';
$lang->block->default['crm']['2']['grid']  = 4;

$lang->block->default['crm']['2']['params']['num']     = 15;
$lang->block->default['crm']['2']['params']['orderBy'] = 'id_desc';
$lang->block->default['crm']['2']['params']['type']    = 'returnedBy';
$lang->block->default['crm']['2']['params']['status']  = array();

$lang->block->default['crm']['3']['title'] = 'This week';
$lang->block->default['crm']['3']['block'] = 'customer';
$lang->block->default['crm']['3']['grid']  = 4;

$lang->block->default['crm']['3']['params']['num']     = 15;
$lang->block->default['crm']['3']['params']['orderBy'] = 'id_desc';
$lang->block->default['crm']['3']['params']['type']    = 'thisweek';

$lang->block->default['cash']['1']['title'] = 'Depositor';
$lang->block->default['cash']['1']['block'] = 'depositor';
$lang->block->default['cash']['1']['grid']  = 4;

$lang->block->default['cash']['1']['params'] = array();

$lang->block->default['cash']['2']['title'] = 'Trade';
$lang->block->default['cash']['2']['block'] = 'depositor';
$lang->block->default['cash']['2']['grid']  = 4;

$lang->block->default['cash']['2']['params']['num']     = 15;
$lang->block->default['cash']['2']['params']['orderBy'] = 'id_desc';

$lang->block->default['cash']['3']['title'] = 'Supplier';
$lang->block->default['cash']['3']['block'] = 'depositor';
$lang->block->default['cash']['3']['grid']  = 4;

$lang->block->default['cash']['3']['params']['num']     = 15;
$lang->block->default['cash']['3']['params']['orderBy'] = 'id_desc';

$lang->block->default['team']['1']['title'] = 'Latest Blogs';
$lang->block->default['team']['1']['block'] = 'blog';
$lang->block->default['team']['1']['grid']  = 4;

$lang->block->default['team']['1']['params']['num'] = 15;

$lang->block->default['team']['2']['title'] = 'Latest Thread';
$lang->block->default['team']['2']['block'] = 'thread';
$lang->block->default['team']['2']['grid']  = 4;

$lang->block->default['team']['2']['params']['num'] = 15;
$lang->block->default['team']['2']['params']['type'] = 'new';

$lang->block->default['team']['3']['title'] = 'Sticky Thread';
$lang->block->default['team']['3']['block'] = 'thread';
$lang->block->default['team']['3']['grid']  = 4;

$lang->block->default['team']['3']['params']['num']  = 15;
$lang->block->default['team']['3']['params']['type'] = 'stick';

$lang->block->default['sys']['1'] = $lang->block->default['oa']['1'];
$lang->block->default['sys']['1']['source'] = 'oa';
$lang->block->default['sys']['2']['title']  = 'Dynamic';
$lang->block->default['sys']['2']['block']  = 'dynamic';
$lang->block->default['sys']['2']['grid']   = 6;
$lang->block->default['sys']['2']['source'] = '';
$lang->block->default['sys']['3'] = $lang->block->default['oa']['2'];
$lang->block->default['sys']['3']['source'] = 'oa';
$lang->block->default['sys']['4'] = $lang->block->default['crm']['2'];
$lang->block->default['sys']['4']['source'] = 'crm';
$lang->block->default['sys']['5'] = $lang->block->default['crm']['1'];
$lang->block->default['sys']['5']['source'] = 'crm';
$lang->block->default['sys']['6'] = $lang->block->default['cash']['1'];
$lang->block->default['sys']['6']['source'] = 'cash';
$lang->block->default['sys']['7'] = $lang->block->default['team']['1'];
$lang->block->default['sys']['7']['source'] = 'team';
$lang->block->default['sys']['8'] = $lang->block->default['team']['2'];
$lang->block->default['sys']['8']['source'] = 'team';

$lang->block->moreLinkList = new stdclass();
$lang->block->moreLinkList->order['assinedTo']    = 'Assign To Me|sys|my|order|type=assinedTo';
$lang->block->moreLinkList->order['createdBy']    = 'Create By Me|sys|my|order|type=createdBy';
$lang->block->moreLinkList->order['signedBy']     = 'Sign By Me|sys|my|order|type=signedBy';
$lang->block->moreLinkList->order['normalstatus'] = 'All|crm|order|browse|mode=all';
$lang->block->moreLinkList->order['signedstatus'] = 'All|crm|order|browse|mode=all';
$lang->block->moreLinkList->order['closedstatus'] = 'All|crm|order|browse|mode=all';

$lang->block->moreLinkList->contract['returnedBy']     = 'Return By Me|sys|my|contract|type=returnedBy';
$lang->block->moreLinkList->contract['deliveredBy']    = 'Deliver By Me|sys|my|contract|type=deliveredBy';
$lang->block->moreLinkList->contract['normalstatus']   = 'Unfinished|crm|contract|browse|mode=unfinished';
$lang->block->moreLinkList->contract['closedstatus']   = 'Finished|crm|contract|browse|mode=finished';
$lang->block->moreLinkList->contract['canceledstatus'] = 'Cancelled|crm|contract|browse|mode=canceled';

$lang->block->moreLinkList->customer['today']    = 'Today|crm|customer|browse|type=today';
$lang->block->moreLinkList->customer['thisweek'] = 'This Week|crm|customer|browse|type=thisweek';

$lang->block->moreLinkList->trade     = 'Trade|cash|trade|browse|';
$lang->block->moreLinkList->depositor = 'Depositor|cash|depositor|index|';
$lang->block->moreLinkList->provider  = 'Supplier|cash|provider|browse|';

$lang->block->moreLinkList->announce = 'Announce|oa|announce|browse|';
$lang->block->moreLinkList->attend   = 'Attend|sys|todo|calendar|';

$lang->block->moreLinkList->task['assignedTo'] = 'Assign To Me|sys|my|task|type=assignedTo';
$lang->block->moreLinkList->task['createdBy']  = 'Create By Me|sys|my|task|type=createdBy';
$lang->block->moreLinkList->task['finishedBy'] = 'Finish By Me|sys|my|task|type=finishedBy';
$lang->block->moreLinkList->task['closedBy']   = 'Close By Me|sys|my|task|type=closedBy';
$lang->block->moreLinkList->task['canceledBy'] = 'Cancel By Me|sys|my|task|type=canceledBy';

$lang->block->moreLinkList->project['doing']    = 'Doing|proj|project|index|status=doing';
$lang->block->moreLinkList->project['finished'] = 'Finished|proj|project|index|status=finished';
$lang->block->moreLinkList->project['suspend']  = 'Suspend|proj|project|index|status=suspend';

$lang->block->moreLinkList->blog = 'Latest Blog|team|blog|index|';
$lang->block->moreLinkList->thread['new']   = 'Latest Thread|team|forum|index|';
$lang->block->moreLinkList->thread['stick'] = 'Sticky Thread|team|forum|index|';

$lang->block->moreLinkList->report = 'Report|cash|trade|report|';
/* sys/action */
if(!isset($lang->action)) $lang->action = new stdclass();

$lang->action->common          = 'Logs';
$lang->action->finishAllDating = 'Finish All Dating';
$lang->action->deleteAllDating = 'Delete All Dating';

$lang->action->product  = 'Product';
$lang->action->actor    = 'Account';
$lang->action->contact  = 'Contact';
$lang->action->comment  = 'Comment';
$lang->action->action   = 'Action';
$lang->action->actionID = 'Action ID';
$lang->action->date     = 'Date';
$lang->action->nextDate = 'Next Contact';

$lang->action->trash      = 'Trash';
$lang->action->objectType = 'Type';
$lang->action->objectID   = 'ID';
$lang->action->objectName = 'Details';

$lang->action->createContact = 'Create Contact';
$lang->action->editComment   = 'Edit Comment';
$lang->action->hide          = 'Hide';       
$lang->action->hideOne       = 'Hide';
$lang->action->hideAll       = 'Hide all';
$lang->action->hidden        = 'Hidden';
$lang->action->undelete      = 'Undelete';
$lang->action->trashTips     = 'Tips:The deletions in Zdoo are tag deletions.';

$lang->action->textDiff = 'Text Mode';
$lang->action->original = 'Original content';

$lang->action->desc = new stdclass();
$lang->action->desc->common                = '$date, <strong>$action</strong> by <strong>$actor</strong>.';
$lang->action->desc->extra                 = '$date, <strong>$action</strong> as <strong>$extra</strong> by <strong>$actor</strong>.';
$lang->action->desc->opened                = '$date, opened by <strong>$actor</strong>.';
$lang->action->desc->created               = '$date, created by <strong>$actor</strong>.';
$lang->action->desc->edited                = '$date, edited by <strong>$actor</strong>.';
$lang->action->desc->assigned              = '$date, <strong>$actor</strong> assigned task to <strong>$extra</strong>.' . "\n";
$lang->action->desc->merged                = '$date, <strong>$actor</strong> merged customer <strong>$extra</strong>。' . "\n";
$lang->action->desc->transmit              = '$date, <strong>$actor</strong> transfer task to <strong>$extra</strong>.' . "\n";
$lang->action->desc->closed                = '$date, closed by <strong>$actor</strong>, close resion:<strong>$extra</strong>.';
$lang->action->desc->deleted               = '$date, deleted by <strong>$actor</strong>.';
$lang->action->desc->deletedfile           = '$date, deleted file by <strong>$actor</strong>, the file is <strong><i>$extra</i></strong>.';
$lang->action->desc->editfile              = '$date, edit file by <strong>$actor</strong>, the file is <strong><i>$extra</i></strong>.';
$lang->action->desc->commented             = '$date, commented by <strong>$actor</strong>.';
$lang->action->desc->activated             = '$date, activated by <strong>$actor</strong>.';
$lang->action->desc->moved                 = '$date, moved by <strong>$actor</strong>, previouse is "$extra".';
$lang->action->desc->started               = '$date, started by <strong>$actor</strong>.';
$lang->action->desc->delayed               = '$date, delayed by <strong>$actor</strong>.';
$lang->action->desc->suspended             = '$date, suspended by <strong>$actor</strong>.';
$lang->action->desc->canceled              = '$date, canceled by <strong>$actor</strong>.';
$lang->action->desc->finished              = '$date, finished by <strong>$actor</strong>.';
$lang->action->desc->transfered            = '$date, transfered by <strong>$actor</strong>.' . "\n";
$lang->action->desc->reviewed              = '$date, reviewed by <strong>$actor</strong>.' . "\n";
$lang->action->desc->reimburse             = '$date, reimbursed $extra by <strong>$actor</strong>.' . "\n";
$lang->action->desc->createtrade           = '$date, created trade $extra by <strong>$actor</strong>.' . "\n";
$lang->action->desc->revoked               = '$date, revoked by <strong>$actor</strong>.' . "\n";
$lang->action->desc->commited              = '$date, commited by <strong>$actor</strong>.' . "\n";
$lang->action->desc->reported              = '$date, reported by <strong>$actor</strong>.' . "\n";
$lang->action->desc->returned              = '$date, received payments $extra by <strong>$actor</strong>.' . "\n";
$lang->action->desc->editreturned          = '$date, edited payment by <strong>$actor</strong>.' . "\n";
$lang->action->desc->deletereturned        = '$date, deleted $extra by <strong>$actor</strong>.' . "\n";
$lang->action->desc->finishreturned        = '$date, received payments $extra by <strong>$actor</strong>, complete payments' . "\n";
$lang->action->desc->delivered             = '$date, delivered by <strong>$actor</strong>.' . "\n";
$lang->action->desc->editdelivered         = '$date, edited delivery by <strong>$actor</strong>.' . "\n";
$lang->action->desc->deletedelivered       = '$date, deleted delivery $extra by <strong>$actor</strong>.' . "\n";
$lang->action->desc->finishdelivered       = '$date, completed delivery by <strong>$actor</strong>.' . "\n";
$lang->action->desc->createdresume         = '$date, created resume by <strong>$actor</strong>, the resume is： <strong>$extra</strong>.' . "\n";
$lang->action->desc->editedresume          = '$date, edited resume by <strong>$actor</strong>.' . "\n";
$lang->action->desc->deleteresume          = '$date, deleted resume by <strong>$actor</strong>, the resume is： <strong>$extra</strong>.' . "\n";
$lang->action->desc->createaddress         = '$date, created address by <strong>$actor</strong>, the address is： <strong>$extra</strong>.' . "\n";
$lang->action->desc->editaddress           = '$date, edited address by <strong>$actor</strong>.' . "\n";
$lang->action->desc->deleteaddress         = '$date, deleted address by <strong>$actor</strong>, the address is： <strong>$extra</strong>.' . "\n";
$lang->action->desc->diff1                 = 'changed <strong><i>%s</i></strong>, old is "%s", new is "%s".<br />';
$lang->action->desc->diff2                 = 'changed <strong><i>%s</i></strong>, the diff is:' . "\n" . "<blockquote>%s</blockquote>" . "\n<div class='hidden'>%s</div>";
$lang->action->desc->diff3                 = "changed file's name %s to %s.";
$lang->action->desc->record                = '$date, <strong>$actor</strong> created log, the contact is:<strong>$contact</strong>, the date is:$extra.' . "\n";
$lang->action->desc->signed                = '$date, signed by <strong>$actor</strong>，the turnover is： <strong>$extra</strong>.' . "\n";
$lang->action->desc->linkcontact           = '$date, <strong>$actor</strong> added contacts for customer： <strong>$extra</strong>.' . "\n";
$lang->action->desc->createorder           = '$date, <strong>$actor</strong> created order:<strong>$extra</strong>.' . "\n";
$lang->action->desc->editorder             = '$date, <strong>$actor</strong> edited order:<strong>$extra</strong>.' . "\n";
$lang->action->desc->assignorder           = '$date, <strong>$actor</strong> assigned order:<strong>$extra</strong>.' . "\n";
$lang->action->desc->closeorder            = '$date, <strong>$actor</strong> closed order:<strong>$extra</strong>.' . "\n";
$lang->action->desc->activateorder         = '$date, <strong>$actor</strong> activated order:<strong>$extra</strong>.' . "\n";
$lang->action->desc->createcontract        = '$date, <strong>$actor</strong> created contract:<strong>$extra</strong>.' . "\n";
$lang->action->desc->editcontract          = '$date, <strong>$actor</strong> edited contract:<strong>$extra</strong>.' . "\n";
$lang->action->desc->delivercontract       = '$date, <strong>$actor</strong> delivered of <strong>$extra</strong>.' . "\n";
$lang->action->desc->receivecontract       = '$date, $extra by <strong>$actor</strong>.' . "\n";
$lang->action->desc->finishdelivercontract = '$date, <strong>$actor</strong> completed delivery of <strong>$extra</strong>.' . "\n";
$lang->action->desc->finishreceivecontract = '$date, $extra by <strong>$actor</strong>, complete payments.' . "\n";
$lang->action->desc->finishcontract        = '$date, <strong>$actor</strong> finished contract:<strong>$extra</strong>.' . "\n";
$lang->action->desc->cancelcontract        = '$date, <strong>$actor</strong> canceled contract:<strong>$extra</strong>.' . "\n";
$lang->action->desc->hidden                = '$date, hidden by <strong>$actor</strong> .' . "\n";
$lang->action->desc->undeleted             = '$date, restored by <strong>$actor</strong> .' . "\n";
$lang->action->desc->transform             = '$date, transformed by <strong>$actor</strong> .' . "\n";
$lang->action->desc->ignored               = '$date, ignored by <strong>$actor</strong> .' . "\n";
$lang->action->desc->createtrip            = '$date, <strong>$actor</strong> created trip:<strong>$extra</strong>.' . "\n";
$lang->action->desc->createegress          = '$date, <strong>$actor</strong> created egress:<strong>$extra</strong>.' . "\n";
$lang->action->desc->imported              = '$date, import by <strong>$actor</strong>.' . "\n";
$lang->action->desc->dating                = '$date, <strong>$actor</strong> created a dating : <strong>$extra</strong>。' . "\n";

$lang->action->label = new stdclass();
$lang->action->label->created     = 'created';
$lang->action->label->edited      = 'edited';
$lang->action->label->assigned    = 'assigned';
$lang->action->label->transmit    = 'transfer';
$lang->action->label->closed      = 'closed';
$lang->action->label->deleted     = 'deleted';
$lang->action->label->undeleted   = 'Restore';
$lang->action->label->deletedfile = 'deleted file';
$lang->action->label->editfile    = 'edit file name';
$lang->action->label->commented   = 'commented';
$lang->action->label->activated   = 'activated';
$lang->action->label->resolved    = 'resolved';
$lang->action->label->reviewed    = 'reviewed';
$lang->action->label->moved       = 'moved';
$lang->action->label->marked      = 'edited';
$lang->action->label->started     = 'started';
$lang->action->label->canceled    = 'cancelled';
$lang->action->label->finished    = 'finished';
$lang->action->label->reimburse   = 'reimbursed';
$lang->action->label->createtrade = 'created trade';
$lang->action->label->record      = 'record';
$lang->action->label->signed      = 'signed';
$lang->action->label->commited    = 'commited';
$lang->action->label->revoked     = 'revoked';
$lang->action->label->reported    = 'reported';
$lang->action->label->forbidden   = 'Forbidden';
$lang->action->label->transform   = 'transformed';
$lang->action->label->ignored     = 'ignored';
$lang->action->label->imported    = 'imported';
$lang->action->label->login       = 'login';
$lang->action->label->logout      = 'logout';
$lang->action->label->dating      = 'created dating';

$lang->action->label->createdbalance        = 'create balance';
$lang->action->label->createorder           = 'create order';
$lang->action->label->editorder             = 'edit order';
$lang->action->label->activateorder         = 'activate order';
$lang->action->label->closeorder            = 'close order';
$lang->action->label->linkcontact           = 'link contact';
$lang->action->label->createcontract        = 'create contract';
$lang->action->label->editcontract          = 'edit contract';
$lang->action->label->cancelcontract        = 'cancel contract';
$lang->action->label->finishcontract        = 'finish contract';
$lang->action->label->createdresume         = 'create resume';
$lang->action->label->editedresume          = 'edit resume';
$lang->action->label->deleteresume          = 'delete resume';
$lang->action->label->createaddress         = 'create address';
$lang->action->label->editaddress           = 'edit address';
$lang->action->label->deleteaddress         = 'delete address';
$lang->action->label->finishdelivered       = 'finish delivered';
$lang->action->label->finishdelivercontract = 'finish delivered';
$lang->action->label->delivered             = 'deliver';
$lang->action->label->delivercontract       = 'deliver';
$lang->action->label->returned              = 'return';
$lang->action->label->receivecontract       = 'return';
$lang->action->label->finishreceivecontract = 'finish returned';
$lang->action->label->finishreturned        = 'finish returned';
$lang->action->label->deletereturned        = 'delete rerurned';

$lang->action->search = new stdclass();
$lang->action->search->label = (array)$lang->action->label;

$lang->action->label->announce  = 'Announce|announce|view|announceID=%s';
$lang->action->label->balance   = 'Balance|balance|browse|depositorID=%s';
$lang->action->label->doc       = 'Document|doc|view|docID=%s';
$lang->action->label->doclib    = 'Document Library|doc|browse|doclibID=%s';
$lang->action->label->contact   = 'Contact|contact|view|contactID=%s';
$lang->action->label->contract  = 'Contract|contract|view|contractID=%s';
$lang->action->label->customer  = 'Customer|customer|view|customerID=%s';
$lang->action->label->depositor = 'Account|depositor|browse|';
$lang->action->label->holiday   = 'Holiday|hiloday|browse|';
$lang->action->label->leads     = 'Leads|leads|view|contactID=%s';
$lang->action->label->order     = 'Order|order|view|orderID=%s';
$lang->action->label->product   = 'Product|product|view|productID=%s';
$lang->action->label->project   = 'Project|task|browse|projectID=%s';
$lang->action->label->provider  = 'Supplier|provider|view|providerID=%s';
$lang->action->label->schema    = 'Trade Template|schema|browse|';
$lang->action->label->space     = ' ';
$lang->action->label->task      = 'Task|task|view|taskID=%s';
$lang->action->label->todo      = 'Todo|todo|view|todoID=%s';
$lang->action->label->trade     = 'Trade|trade|browse|';
$lang->action->label->user      = 'User';

$lang->action->label->attend = array();
$lang->action->label->attend['commited'] = 'attend review|attend|browsereview|';
$lang->action->label->attend['reviewed'] = 'attend review|attend|personal|';
$lang->action->label->leave = array();
$lang->action->label->leave['created']  = 'leave review|leave|browsereview|';
$lang->action->label->leave['commited'] = 'leave review|leave|browsereview|';
$lang->action->label->leave['revoked']  = 'leave review|leave|browsereview|';
$lang->action->label->leave['reported'] = 'leave report review|leave|browsereview|';
$lang->action->label->leave['reviewed'] = 'leave review|leave|personal|';
$lang->action->label->lieu = array();
$lang->action->label->lieu['created']  = 'lieu review|lieu|browsereview|';
$lang->action->label->lieu['commited'] = 'lieu review|lieu|browsereview|';
$lang->action->label->lieu['revoked']  = 'lieu review|lieu|browsereview|';
$lang->action->label->lieu['reviewed'] = 'lieu review|lieu|personal|';
$lang->action->label->makeup = array();
$lang->action->label->makeup['created']  = 'makeup review|makeup|browsereview|';
$lang->action->label->makeup['commited'] = 'makeup review|makeup|browsereview|';
$lang->action->label->makeup['revoked']  = 'makeup review|makeup|browsereview|';
$lang->action->label->makeup['reviewed'] = 'makeup review|makeup|personal|';
$lang->action->label->overtime = array();
$lang->action->label->overtime['created']  = 'overtime review|overtime|browsereview|';
$lang->action->label->overtime['commited'] = 'overtime review|overtime|browsereview|';
$lang->action->label->overtime['revoked']  = 'overtime review|overtime|browsereview|';
$lang->action->label->overtime['reviewed'] = 'overtime review|overtime|personal|';
$lang->action->label->refund = array();
$lang->action->label->refund['commited']    = 'refund review|refund|browsereview|';
$lang->action->label->refund['revoked']     = 'refund review|refund|browsereview|';
$lang->action->label->refund['created']     = 'refund review|refund|view|refundID=%s&mode=review';
$lang->action->label->refund['edited']      = 'refund review|refund|view|refundID=%s&mode=review';
$lang->action->label->refund['reviewed']    = 'refund review|refund|view|refundID=%s&mode=review';
$lang->action->label->refund['reimburse']   = 'refund review|refund|view|refundID=%s';
$lang->action->label->refund['createtrade'] = 'refund review|refund|view|refundID=%s';
$lang->action->label->refund['deletedfile'] = 'refund review|refund|view|refundID=%s';

$lang->action->nextContactList[1]      = 'tomorrow';
$lang->action->nextContactList[2]      = 'in 2 days';
$lang->action->nextContactList[3]      = 'in 3 days';
$lang->action->nextContactList[7]      = 'in 1 week';
$lang->action->nextContactList[14]     = 'in 2 weeks';
$lang->action->nextContactList[365000] = 'no contact';

$lang->action->record = new stdclass();
$lang->action->record->common       = 'Communication';
$lang->action->record->title        = 'This time';
$lang->action->record->create       = 'Add Record';
$lang->action->record->edit         = 'Edit Record';
$lang->action->record->history      = 'Communication History';
$lang->action->record->customer     = 'Customer';
$lang->action->record->provider     = 'Supplier';
$lang->action->record->contract     = 'Contract';
$lang->action->record->order        = 'Order';
$lang->action->record->contact      = 'Contact';
$lang->action->record->actor        = 'Actor';
$lang->action->record->comment      = 'Content';
$lang->action->record->date         = 'Contact on';
$lang->action->record->file         = 'Files';
$lang->action->record->next         = 'Next';
$lang->action->record->nextList     = 'Next Contact List';
$lang->action->record->nextDate     = 'Next Date';
$lang->action->record->nextContact  = 'Next contact';
$lang->action->record->sameContact  = 'Same as this time';
$lang->action->record->contactedBy  = 'Contacted By';
$lang->action->record->desc         = 'Desc';
$lang->action->record->status       = 'Status';
$lang->action->record->createdBy    = 'Created By';
$lang->action->record->createdDate  = 'Created Date';
$lang->action->record->editedBy     = 'Edited By';
$lang->action->record->editedDate   = 'Edited Date';
$lang->action->record->uploadFile   = 'Upload';
$lang->action->record->finishDenied = 'Only administrator, contacted by and created by can finish.';
$lang->action->record->deleteDenied = 'Only administrator and creator can delete.';
$lang->action->record->deleteFail   = "The record had been finished, can't delete it.";
$lang->action->record->noPrivilege  = '%s has no rights to access the record.';

$lang->action->record->statusList['wait'] = 'Wait';
$lang->action->record->statusList['done'] = 'Done';

$lang->action->objectTypes['order']     = 'Order';
$lang->action->objectTypes['customer']  = 'Customer';
$lang->action->objectTypes['provider']  = 'Supplier';
$lang->action->objectTypes['doc']       = 'Doc';
$lang->action->objectTypes['task']      = 'Task';
$lang->action->objectTypes['product']   = 'Product';
$lang->action->objectTypes['contact']   = 'Contact';
$lang->action->objectTypes['contract']  = 'Contract';
$lang->action->objectTypes['project']   = 'Project';
$lang->action->objectTypes['user']      = 'User';
$lang->action->objectTypes['resume']    = 'Resume';
$lang->action->objectTypes['leave']     = 'Leave';
$lang->action->objectTypes['lieu']      = 'Lieu';
$lang->action->objectTypes['makeup']    = 'Makeup';
$lang->action->objectTypes['overtime']  = 'Overtime';
$lang->action->objectTypes['refund']    = 'Reimburse';
$lang->action->objectTypes['depositor'] = 'Account';
$lang->action->objectTypes['balance']   = 'Balance';
$lang->action->objectTypes['todo']      = 'Todo';
$lang->action->objectTypes['announce']  = 'Announce';
$lang->action->objectTypes['holiday']   = 'Holiday';
$lang->action->objectTypes['trade']     = 'Trade';
$lang->action->objectTypes['schema']    = 'Trade Template';
$lang->action->objectTypes['doclib']    = 'Document library';
$lang->action->objectTypes['action']    = 'Communication record';

$lang->action->noticeTitle  = "%s <a href='%s' data-appid='%s'>%s</a>";
$lang->action->uniqueDating = "<stong>%s</strong> has a record for next contact.";
/* sys/message */
$lang->message->common            = 'Comment';
$lang->message->id                = 'ID';
$lang->message->type              = 'Type';
$lang->message->from              = 'Name';
$lang->message->content           = 'Content';
$lang->message->phone             = 'Phone';
$lang->message->qq                = 'QQ';
$lang->message->email             = 'Email';
$lang->message->date              = 'Date';
$lang->message->secret            = 'Administrator only.';
$lang->message->readed            = 'Read';
$lang->message->captcha           = 'Captcha';
$lang->message->list              = 'List';
$lang->message->post              = 'Comment';
$lang->message->viewArticle       = 'View article';
$lang->message->viewComment       = 'View comment';
$lang->message->thanks            = 'Thanks for your comment!';
$lang->message->noSelectedMessage = 'No message is selected.';

$lang->message->pass           = 'Pass';
$lang->message->reply          = 'Reply';
$lang->message->view           = 'View';
$lang->message->manage         = 'Manage';
$lang->message->delete         = 'Delete';
$lang->message->deleteSelected = 'Delete the selected';
$lang->message->passPre        = 'Pass previous';
$lang->message->deletePre      = 'Delete previous';
$lang->message->commentAt      = 'Comment at ';
$lang->message->deletedObject  = 'Deleted';
$lang->message->contactHidden  = "Your phone, email, etc. will only be send to administrator.";

$lang->message->confirmDeleteSingle = 'Are you sure to delete this comment?';
$lang->message->confirmDeletePre    = 'Are you sure to delete comments previous?';
$lang->message->confirmPassSingle   = 'Are you sure to pass this comment?';
$lang->message->confirmPassPre      = 'Are you sure to pass comment previous?';

$lang->message->statusList[0] = 'Unreviewed';
$lang->message->statusList[1] = 'Reviewed';

$lang->message->readedStatus[0] = 'New';
$lang->message->readedStatus[1] = 'Read';

$lang->comment = new stdclass();
$lang->comment->common      = 'Comment';
$lang->comment->id          = 'ID';
$lang->comment->type        = 'Type';
$lang->comment->from        = 'Name';
$lang->comment->content     = 'Content';
$lang->comment->phone       = 'Phone';
$lang->comment->qq          = 'QQ';
$lang->comment->email       = 'Email';
$lang->comment->captcha     = 'Captcha';
$lang->comment->list        = 'Comment List';
$lang->comment->post        = 'Comment';
$lang->comment->viewArticle = 'View article';
$lang->comment->viewComment = 'View comment';
$lang->comment->thanks      = 'Thanks for your comment!';

$lang->comment->pass          = 'Pass';
$lang->comment->reply         = 'Reply';
$lang->comment->replyAt       = 'Reply at';
$lang->comment->manage        = 'Manage';
$lang->comment->delete        = 'Delete';
$lang->comment->passPre       = 'Pass previous';
$lang->comment->deletePre     = 'Delete previous';
$lang->comment->commentTo     = 'Comment on';
$lang->comment->commentAt     = 'Commented at';
$lang->comment->deletedObject = 'Deleted';

$lang->comment->confirmDeleteSingle = 'Are you sure to delete this comment?';
$lang->comment->confirmDeletePre    = 'Are you sure to delete comments previous?';
$lang->comment->confirmPassSingle   = 'Are you sure to pass this comment?';
$lang->comment->confirmPassPre      = 'Are you sure to pass comment previous?';

$lang->comment->statusList[0] = 'Unreviewed';
$lang->comment->statusList[1] = 'Reviewed';

$lang->message->replyItem = "<dd><strong>%s</strong> reply at <em>%s</em>：%s</dd>";
$lang->comment->replyItem = "<dd><strong>%s</strong> reply at <em>%s</em>：%s</dd>";

$lang->message->replySubject = 'Reply from administrator of %s';
/* sys/report */
if(!isset($lang->report)) $lang->report = new stdclass();
$lang->report->common     = 'Report';
$lang->report->browse     = 'View Report';
$lang->report->list       = 'Reports';
$lang->report->item       = 'Item';
$lang->report->value      = 'Value';
$lang->report->percent    = 'Percent';
$lang->report->undefined  = 'Undefined';
$lang->report->time       = 'Time';
$lang->report->select     = 'Pleace select the type of reports';
$lang->report->create     = 'Generate';
$lang->report->tip        = 'Note: Report is generated from search results. Please search in the list page before you generate a report.';

$lang->report->options = new stdclass();
$lang->report->options->type   = 'pie';
$lang->report->options->width  = 500;
$lang->report->options->height = 140;

$lang->report->options->graph = new stdclass();
$lang->report->options->graph->xAxisName = 'DEFAULT';
$lang->report->options->graph->caption   = 'DEFAULT';   // 是否显示柱状图阴影。

$lang->report->customer = new stdclass();
$lang->report->customer->common = 'Customer Report';
$lang->report->customer->chartList['assignedTo'] = 'Assigned To';
$lang->report->customer->chartList['status']     = 'Status';
$lang->report->customer->chartList['level']      = 'Level';
$lang->report->customer->chartList['type']       = 'Type';
$lang->report->customer->chartList['size']       = 'Size';
$lang->report->customer->chartList['area']       = 'Area';
$lang->report->customer->chartList['industry']   = 'Industry';

$lang->report->customer->item['assignedTo'] = 'User';
$lang->report->customer->item['status']     = 'Status';
$lang->report->customer->item['level']      = 'Level';
$lang->report->customer->item['type']       = 'Type';
$lang->report->customer->item['size']       = 'Size';
$lang->report->customer->item['area']       = 'Area';
$lang->report->customer->item['industry']   = 'Industry';

$lang->report->customer->value['assignedTo'] = 'Customer';
$lang->report->customer->value['status']     = 'Customer';
$lang->report->customer->value['level']      = 'Customer';
$lang->report->customer->value['type']       = 'Customer';
$lang->report->customer->value['size']       = 'Customer';
$lang->report->customer->value['area']       = 'Customer';
$lang->report->customer->value['industry']   = 'Customer';

$lang->report->order = new stdclass();
$lang->report->order->common = 'Order Report';
$lang->report->order->chartList['product']      = 'Product (Number)';
$lang->report->order->chartList['productLine']  = 'Product Line (Number)';
$lang->report->order->chartList['status']       = 'Status (Number)';
$lang->report->order->chartList['assignedTo']   = 'Assigned To (Number)';
$lang->report->order->chartList['createdBy']    = 'Created by (Number)';
$lang->report->order->chartList['year']         = 'Year (Number)';
$lang->report->order->chartList['month']        = 'Month (Number)';
$lang->report->order->chartList['productA']     = 'Product (Amount)';
$lang->report->order->chartList['productLineA'] = 'Product Line (Amount)';
$lang->report->order->chartList['statusA']      = 'Status (Amount)';
$lang->report->order->chartList['assignedToA']  = 'Assigned  To(Amount)';
$lang->report->order->chartList['createdByA']   = 'Created By (Amount)';
$lang->report->order->chartList['yearA']        = 'Year (Amount)';
$lang->report->order->chartList['monthA']       = 'Month (Amount)';

$lang->report->order->item['product']      = 'Product';
$lang->report->order->item['productLine']  = 'Product Line';
$lang->report->order->item['status']       = 'Status';
$lang->report->order->item['assignedTo']   = 'User';
$lang->report->order->item['createdBy']    = 'User';
$lang->report->order->item['year']         = 'Year';
$lang->report->order->item['month']        = 'Month';
$lang->report->order->item['productA']     = 'Product';
$lang->report->order->item['productLineA'] = 'Product Line';
$lang->report->order->item['statusA']      = 'Status';
$lang->report->order->item['assignedToA']  = 'User';
$lang->report->order->item['createdByA']   = 'User';
$lang->report->order->item['yearA']         = 'Year';
$lang->report->order->item['monthA']        = 'Month';

$lang->report->order->value['product']      = 'Order';
$lang->report->order->value['productLine']  = 'Order';
$lang->report->order->value['status']       = 'Order';
$lang->report->order->value['assignedTo']   = 'Order';
$lang->report->order->value['createdBy']    = 'Order';
$lang->report->order->value['year']         = 'Order';
$lang->report->order->value['month']        = 'Order';
$lang->report->order->value['productA']     = 'Real money';
$lang->report->order->value['productLineA'] = 'Real money';
$lang->report->order->value['statusA']      = 'Real money';
$lang->report->order->value['assignedToA']  = 'Real money';
$lang->report->order->value['createdByA']   = 'Real money';
$lang->report->order->value['yearA']        = 'Real money';
$lang->report->order->value['monthA']       = 'Real money';

$lang->report->order->options = new stdclass();
$lang->report->order->options->typeList['year']    = 'bar';
$lang->report->order->options->typeList['month']   = 'bar';
$lang->report->order->options->typeList['yearA']   = 'bar';
$lang->report->order->options->typeList['monthA']  = 'bar';

$lang->report->contract = new stdclass();
$lang->report->contract->common = 'Contract Report';
$lang->report->contract->chartList['status']       = 'Status (Number)';
$lang->report->contract->chartList['delivery']     = 'Delivery (Number)';
$lang->report->contract->chartList['return']       = 'Payment (Number)';
$lang->report->contract->chartList['createdBy']    = 'Created By (Number)';
$lang->report->contract->chartList['signedBy']     = 'Signed By (Number)';
$lang->report->contract->chartList['deliveredBy']  = 'Delivered By (Number)';
//$lang->report->contract->chartList['handlers']     = 'Handlers(Number)';
$lang->report->contract->chartList['contactedBy']  = 'Contacted By (Number)';
$lang->report->contract->chartList['year']         = 'Year (Number)';
$lang->report->contract->chartList['month']        = 'Month (Number)';
$lang->report->contract->chartList['statusA']      = 'Status (Amount)';
$lang->report->contract->chartList['deliveryA']    = 'Delivery (Amount)';
$lang->report->contract->chartList['returnA']      = 'Payment (Amount)';
$lang->report->contract->chartList['createdByA']   = 'Created By (Amount)';
$lang->report->contract->chartList['signedByA']    = 'Signed By (Amount)';
$lang->report->contract->chartList['deliveredByA'] = 'Delivered By (Amount)';
//$lang->report->contract->chartList['handlersA']    = 'Handlers(Money)';
$lang->report->contract->chartList['contactedByA'] = 'Contacted By(Amount)';
$lang->report->contract->chartList['yearA']        = 'Year (Amount)';
$lang->report->contract->chartList['monthA']       = 'Month (Amount)';

$lang->report->contract->item['status']       = 'Stuatus';
$lang->report->contract->item['delivery']     = 'Delivery';
$lang->report->contract->item['return']       = 'Payment';
$lang->report->contract->item['createdBy']    = 'User';
$lang->report->contract->item['signedBy']     = 'User';
$lang->report->contract->item['deliveredBy']  = 'User';
$lang->report->contract->item['handlers']     = 'User';
$lang->report->contract->item['contactedBy']  = 'User';
$lang->report->contract->item['year']         = 'Year';
$lang->report->contract->item['month']        = 'Month';
$lang->report->contract->item['statusA']      = 'Status';
$lang->report->contract->item['deliveryA']    = 'Delivery';
$lang->report->contract->item['returnA']      = 'Payment';
$lang->report->contract->item['createdByA']   = 'User';
$lang->report->contract->item['signedByA']    = 'User';
$lang->report->contract->item['deliveredByA'] = 'User';
$lang->report->contract->item['handlersA']    = 'User';
$lang->report->contract->item['contactedByA'] = 'User';
$lang->report->contract->item['yearA']        = 'Year';
$lang->report->contract->item['monthA']       = 'Month';

$lang->report->contract->value['status']       = 'Number';
$lang->report->contract->value['delivery']     = 'Number';
$lang->report->contract->value['return']       = 'Number';
$lang->report->contract->value['createdBy']    = 'Number';
$lang->report->contract->value['signedBy']     = 'Number';
$lang->report->contract->value['deliveredBy']  = 'Number';
$lang->report->contract->value['handlers']     = 'Number';
$lang->report->contract->value['contactedBy']  = 'Number';
$lang->report->contract->value['year']         = 'Year';
$lang->report->contract->value['month']        = 'Month';
$lang->report->contract->value['statusA']      = 'Amount';
$lang->report->contract->value['deliveryA']    = 'Amount';
$lang->report->contract->value['returnA']      = 'Amount';
$lang->report->contract->value['createdByA']   = 'Amount';
$lang->report->contract->value['signedByA']    = 'Amount';
$lang->report->contract->value['deliveredByA'] = 'Amount';
$lang->report->contract->value['handlersA']    = 'Amount';
$lang->report->contract->value['contactedByA'] = 'Amount';
$lang->report->contract->value['yearA']        = 'Amount';
$lang->report->contract->value['monthA']       = 'Amount';

$lang->report->contract->options = new stdclass();
$lang->report->contract->options->typeList['year']    = 'bar';
$lang->report->contract->options->typeList['month']   = 'bar';
$lang->report->contract->options->typeList['yearA']   = 'bar';
$lang->report->contract->options->typeList['monthA']  = 'bar';

$lang->report->idAB         = 'ID';
$lang->report->orderTitle   = 'Order Title';
$lang->report->taskName     = 'Task Name';
$lang->report->todoName     = 'Todo Name';
$lang->report->customerName = 'Customer Name';

$lang->report->mailTitle           = new stdclass();
$lang->report->mailTitle->begin    = 'Notice: You have';
$lang->report->mailTitle->order    = " Urgent orders(%s),";
$lang->report->mailTitle->task     = " Tasks(%s),";
$lang->report->mailTitle->todo     = " Todos(%s),";
$lang->report->mailTitle->customer = " Urgent customers(%s),";
$lang->report->mailTitle->contractCount = " Tracked contracts(%s),";
/* sys/cron */
if(!isset($lang->cron)) $lang->cron = new stdclass();
$lang->cron->common  = 'Cron';
$lang->cron->index   = 'Home';
$lang->cron->list    = 'List';
$lang->cron->create  = 'Create';
$lang->cron->edit    = 'Edit';
$lang->cron->delete  = 'Delete';
$lang->cron->toggle  = 'Activation/Disable';
$lang->cron->turnon  = 'Open/Close';

$lang->cron->m        = 'Minute';
$lang->cron->h        = 'Hour';
$lang->cron->dom      = 'Day';
$lang->cron->mon      = 'Month';
$lang->cron->dow      = 'Week';
$lang->cron->command  = 'Command';
$lang->cron->status   = 'Status';
$lang->cron->type     = 'Type';
$lang->cron->remark   = 'Remark';
$lang->cron->lastTime = 'Last run time';

$lang->cron->turnonList['1'] = 'Open';
$lang->cron->turnonList['0'] = 'Close';

$lang->cron->statusList['normal']  = 'Normal';
$lang->cron->statusList['running'] = 'Running';
$lang->cron->statusList['stop']    = 'Stop';

$lang->cron->typeList['ranzhi'] = 'Self call';
$lang->cron->typeList['system'] = 'System command';

$lang->cron->toggleList['start'] = 'Activation';
$lang->cron->toggleList['stop']  = 'Disable';

$lang->cron->confirmDelete = 'Do you want to delete the task?';
$lang->cron->confirmTurnon = 'Do you want to trunoff cron?';
$lang->cron->introduction  = <<<EOD
<p>Timing tasks such as compute burn , backup. Absolve themselves of layout timing task.</p>
<p>This function has yet to be perfect, so the function is turned off by default</p>
EOD;
$lang->cron->confirmOpen = <<<EOD
<p>Whether to open the function? <a href="%s">Open timing task</a></p>
EOD;

$lang->cron->notice = new stdclass();
$lang->cron->notice->m   = 'Range : 0-59，"*" express the range of numbers, "/" express "Every", "-" express digital range.';
$lang->cron->notice->h   = 'Range : 0-23';
$lang->cron->notice->dom = 'Range : 1-31';
$lang->cron->notice->mon = 'Range : 1-12';
$lang->cron->notice->dow = 'Range : 0-6';
/* sys/file */
$lang->file->common     = 'Files';
$lang->file->upload     = 'Upload';
$lang->file->browse     = 'Browse';
$lang->file->download   = 'Download';
$lang->file->edit       = 'Edit';
$lang->file->primary    = 'Primary';
$lang->file->setPrimary = 'Set as primary';
$lang->file->toggle     = 'Toggle';
$lang->file->label      = 'Label';
$lang->file->lblInfo    = '<i>(Type:%s, Size:%s, Added at: %s，Downloads: %s)</i>';
$lang->file->limit      = "(<span class='text-danger'>Less than 2M</span>)";
$lang->file->attachFile = 'Attach another file';

$lang->file->id          = 'ID';
$lang->file->title       = 'Title';
$lang->file->pathname    = 'Path';
$lang->file->extension   = 'Extension';
$lang->file->size        = 'Size';
$lang->file->createdBy   = 'Added by';
$lang->file->createdDate = 'Added date';
$lang->file->public      = 'Public';
$lang->file->downloads   = 'Downloads';

$lang->file->edit          = 'Edit';
$lang->file->editFile      = 'Change file';
$lang->file->sizeLimit     = "<p class='text-danger'>File must be less than %sM.</p>";
$lang->file->maxUploadSize = "<span class='red'>%s</span>";
$lang->file->delete        = 'Delete';

$lang->file->errorUnwritable = 'Upload directory is not writable.';
$lang->file->errorNoFile     = 'No file selected.';
$lang->file->errorFileSize   = 'The file size exceeds the limit, might not be able to upload!';
/* sys/customer */
if(!isset($lang->customer)) $lang->customer = new stdclass();

$lang->customer->common        = 'Customer';
$lang->customer->id            = 'ID';
$lang->customer->name          = 'Name';
$lang->customer->depositor     = 'Account';
$lang->customer->contact       = 'Contact';
$lang->customer->type          = 'Type';
$lang->customer->source        = 'Source';
$lang->customer->sourceNote    = 'Note';
$lang->customer->size          = 'Size';
$lang->customer->industry      = 'Industry';
$lang->customer->area          = 'Area';
$lang->customer->status        = 'Status';
$lang->customer->level         = 'Class';
$lang->customer->intension     = 'Intention';
$lang->customer->phone         = 'Phone';
$lang->customer->email         = 'Email';
$lang->customer->qq            = 'QQ';
$lang->customer->site          = 'Site';
$lang->customer->weibo         = 'Sina Weibo';
$lang->customer->weixin        = 'Wechat';
$lang->customer->desc          = 'Description';
$lang->customer->public        = 'Public';
$lang->customer->relation      = 'Relation';
$lang->customer->createdBy     = 'Created By';
$lang->customer->createdDate   = 'Created On';
$lang->customer->editedBy      = 'Edited By';
$lang->customer->editedDate    = 'Edited On';
$lang->customer->assignedTo    = 'Assigned To';
$lang->customer->assignedBy    = 'Assigned By';
$lang->customer->assignedDate  = 'Assigned On';
$lang->customer->contactedBy   = 'Contact By';
$lang->customer->contactedDate = 'Contact On';
$lang->customer->nextDate      = 'Next Contact';
$lang->customer->selectContact = 'Select Contact';

$lang->customer->browse            = 'Browse Customer';
$lang->customer->view              = 'View';
$lang->customer->create            = 'Add Customer';
$lang->customer->delete            = 'Delete Customer';
$lang->customer->order             = 'Orders';
$lang->customer->contact           = 'Contact';
$lang->customer->contract          = 'Contracts';
$lang->customer->address           = 'Addresses';
$lang->customer->record            = 'Record';
$lang->customer->assign            = 'Assign Customer';
$lang->customer->batchAssign       = 'Batch Assign';
$lang->customer->linkContact       = 'Add Contact';
$lang->customer->list              = 'Customers';
$lang->customer->edit              = 'Edit';
$lang->customer->export            = 'Export';
$lang->customer->merge             = 'Merge';
$lang->customer->basicInfo         = 'Basic Info';
$lang->customer->moreInfo          = 'More Info';
$lang->customer->purchasedProducts = 'Purchased Products';

$lang->customer->sourceList['']              = '';
$lang->customer->sourceList['visit']         = 'Visit Zdoo Website';
$lang->customer->sourceList['advertisement'] = 'Advertisement';
$lang->customer->sourceList['introduce']     = 'Word of Mouth';
$lang->customer->sourceList['activity']      = 'Event';
$lang->customer->sourceList['socialPlat']    = 'Social Platform';
$lang->customer->sourceList['others']        = 'Other';

$lang->customer->typeList['']            = '';
$lang->customer->typeList['national']    = 'National';
$lang->customer->typeList['collective']  = 'Collective';
$lang->customer->typeList['corporate']   = 'Corporate';
$lang->customer->typeList['limited']     = 'Limited';
$lang->customer->typeList['partnership'] = 'Partnership';
$lang->customer->typeList['foreign']     = 'Foreign';
$lang->customer->typeList['personal']    = 'Personal';

$lang->customer->statusList['potential'] = 'Potential';
$lang->customer->statusList['intension'] = 'Intended';
$lang->customer->statusList['signed']    = 'Signed';
$lang->customer->statusList['payed']     = 'Paid';
$lang->customer->statusList['failed']    = 'Failed';

$lang->customer->sizeNameList[0] = '';
$lang->customer->sizeNameList[1] = 'Large';
$lang->customer->sizeNameList[2] = 'Medium';
$lang->customer->sizeNameList[3] = 'Small';
$lang->customer->sizeNameList[4] = 'Mini';

$lang->customer->sizeNoteList[0] = '';
$lang->customer->sizeNoteList[1] = ' > 100 employees';
$lang->customer->sizeNoteList[2] = ' 50-100 employees';
$lang->customer->sizeNoteList[3] = ' 10-50 employees';
$lang->customer->sizeNoteList[4] = ' < 10 employees';

$lang->customer->levelNameList[]    = '';
$lang->customer->levelNameList['A'] = 'A';
$lang->customer->levelNameList['B'] = 'B';
$lang->customer->levelNameList['C'] = 'C';
$lang->customer->levelNameList['D'] = 'D';
$lang->customer->levelNameList['E'] = 'E';

$lang->customer->levelNoteList[]    = '';
$lang->customer->levelNoteList['A'] = ' Make a deal in a month.';
$lang->customer->levelNoteList['B'] = ' Make a deal in 3 months';
$lang->customer->levelNoteList['C'] = ' Make a deal in 6 months.';
$lang->customer->levelNoteList['D'] = ' Make a deal after 6 months.';
$lang->customer->levelNoteList['E'] = ' Make no deal.';

$lang->customer->relationList['client']   = 'Client';
$lang->customer->relationList['provider'] = 'Provider';
$lang->customer->relationList['partner']  = 'Partner';

$lang->customer->search      = 'Search';
$lang->customer->searchInput = 'Enter search items.';
$lang->customer->mergeTip    = 'Merge this customer to the selected customer.';
/* sys/entry */
$lang->entry->common      = 'App';
$lang->entry->admin       = 'Apps';
$lang->entry->create      = 'Create';
$lang->entry->edit        = 'Edit';
$lang->entry->delete      = 'Delete';
$lang->entry->createKey   = 'New';
$lang->entry->order       = 'Sort';
$lang->entry->style       = 'Style';
$lang->entry->setCategory = 'Manage';
$lang->entry->online      = 'Online';
$lang->entry->offline     = 'Offline';
$lang->entry->version     = 'Version';
$lang->entry->platform    = 'Platform';

$lang->entry->name        = 'App Name';
$lang->entry->abbr        = 'Abbr';
$lang->entry->code        = 'Alias';
$lang->entry->buildin     = 'Build-in';
$lang->entry->integration = 'Integrate';
$lang->entry->key         = 'Key';
$lang->entry->block       = 'Block URL';
$lang->entry->ip          = 'IPs';
$lang->entry->logo        = 'Logo';
$lang->entry->login       = 'Access URL';
$lang->entry->logout      = 'Logout URL';
$lang->entry->nothing     = 'N/A';
$lang->entry->open        = 'Open';
$lang->entry->control     = 'Window Control';
$lang->entry->size        = 'Window Size';
$lang->entry->position    = 'Position';
$lang->entry->width       = 'Width';
$lang->entry->height      = 'Height';
$lang->entry->priv        = 'Privilege';
$lang->entry->category    = 'Category';

$lang->entry->chanzhi          = 'Zsite';
$lang->entry->zentao           = 'ZenTao';
$lang->entry->integrateChanzhi = 'Integrate Zsite';
$lang->entry->integrateZentao  = 'Integrate ZenTao';

$lang->entry->chanzhiPlaceholder = 'Please enter Admin URL';
$lang->entry->chanzhiURL         = 'Admin URL';
$lang->entry->zentaoPlaceholder  = 'E.g. http://www.zentaopms.com/user-login.html';
$lang->entry->zentaoURL          = 'ZenTao URL';

$lang->entry->zentaoAdmin   = 'ZenTao Admin';
$lang->entry->adminAccount  = 'ZenTao Admin';
$lang->entry->adminPassword = 'Password';
$lang->entry->bindUser      = 'Bind User';
$lang->entry->nextStep      = 'Next';
$lang->entry->createUser    = 'Create User';

$lang->entry->confirmDelete = 'Do you want to delete this App?';
$lang->entry->lblBlock      = 'Block';
$lang->entry->editWarnning  = 'This is a system application. Think before you change it.';

$lang->entry->note = new stdClass();
$lang->entry->note->name    = 'Name';
$lang->entry->note->abbr    = 'Abbreviation';
$lang->entry->note->logo    = 'Logo size 64*64. if upload the PNG format, you must keep transparency.';
$lang->entry->note->code    = 'Entry alias should be letters, digits or underline.';
$lang->entry->note->login   = 'Login URL or access App.';
$lang->entry->note->logout  = 'Logout URL ';
$lang->entry->note->visible = 'Display on the left';
$lang->entry->note->api     = 'The URL of getting blocks.';
$lang->entry->note->ip      = "Use comma between two IPs. IP segment is supported, e.g. 192.168.1.*";
$lang->entry->note->allip   = 'All';
$lang->entry->note->scheme  = 'The current scheme is https, and the iframe window can only open the https URL.';

$lang->entry->error = new stdClass();
$lang->entry->error->name  = 'Please enter name';
$lang->entry->error->code  = 'Please enter alias';
$lang->entry->error->key   = 'Please enter key';
$lang->entry->error->ip    = 'Please enter IP';
$lang->entry->error->url   = 'No built-in application login address. /, http:// or https:// must be included.';

$lang->entry->error->admin         = 'Wrong admin account or password.';
$lang->entry->error->zentaoSetting = 'ZenTao PMS config failed. Upgrade Zentao PMS to head.';
$lang->entry->error->version       = 'Your ZenTao PMS version is lower than %s';
$lang->entry->error->zentaoUrl     = 'Wrong ZenTao PMS login url.';
$lang->entry->error->accessDenied  = 'Access denied';

$lang->entry->openList['blank']  = 'Blank';
$lang->entry->openList['iframe'] = 'Iframe';

$lang->entry->sizeList['max']    = 'Maximize';
$lang->entry->sizeList['custom'] = 'Custom';

$lang->entry->positionList['default'] = 'Default';
$lang->entry->positionList['center']  = 'Center';

$lang->entry->controlList['none']   = 'None';
$lang->entry->controlList['full']   = 'Full';
$lang->entry->controlList['simple'] = 'Transparent';

$lang->entry->integrationList[1] = 'Open';
$lang->entry->integrationList[0] = 'Close';

$lang->entry->platformList['ranzhi']   = 'Zdoo';
$lang->entry->platformList['xuanxuan'] = 'XuanXuan';
/* sys/product */
if(!isset($lang->product)) $lang->product = new stdclass();
$lang->product->common      = 'Product';
$lang->product->id          = 'ID';
$lang->product->name        = 'Name';
$lang->product->code        = 'Alias';
$lang->product->type        = 'Type';
$lang->product->status      = 'Status';
$lang->product->category    = 'Product Category';
$lang->product->desc        = 'Introductions';
$lang->product->order       = 'Order';
$lang->product->roles       = 'Roles';
$lang->product->createdBy   = 'Created By';
$lang->product->createdDate = 'Created on';
$lang->product->editedBy    = 'Edited by';
$lang->product->editedDate  = 'Edited on';

$lang->product->index       = 'Products';
$lang->product->delete      = 'Delete';
$lang->product->list        = 'List';
$lang->product->browse      = 'Browse';
$lang->product->create      = 'Add a Product';
$lang->product->edit        = 'Edit';
$lang->product->view        = 'View';
$lang->product->basicInfo   = 'Basic Information';
$lang->product->setCategory = 'Manage Category';

$lang->product->typeList['real']    = 'Physical';
$lang->product->typeList['service'] = 'Service';
$lang->product->typeList['virtual'] = 'Virtual';

$lang->product->statusList['developing'] = 'Developing';
$lang->product->statusList['normal']     = 'Normal';
$lang->product->statusList['offline']    = 'Offline';

$lang->product->lineList[''] = '';

$lang->product->placeholder = new stdclass();
$lang->product->placeholder->code = 'Product alias should be letters or digits.';
/* sys/company */
$lang->company->common  = 'Company';
$lang->company->index   = 'Home';

$lang->company->name    = 'Name';
$lang->company->desc    = 'Introduction';
$lang->company->content = 'More';

$lang->company->setBasic = 'Company Info';
/* sys/usercontact */
$lang->usercontact->common = 'Contact';
$lang->usercontact->create = 'Create';
$lang->usercontact->edit   = 'Edit';
$lang->usercontact->delete = 'Delete';

$lang->usercontact->id     = 'ID';
$lang->usercontact->name   = 'Name';
$lang->usercontact->member = 'Member';
$lang->usercontact->public = 'Public';
/* sys/tag */
if(!isset($lang->tag)) $lang->tag = new stdclass();
$lang->tag->common = 'keywords';
$lang->tag->rank   = 'Rank';
$lang->tag->link   = 'link';
$lang->tag->search = 'Search';

$lang->tag->admin     = 'Manage keywords';
$lang->tag->editLink  = 'Edit Link';
$lang->tag->inputLink = 'Please input link';
/* sys/misc */

if(!isset($lang->misc)) $lang->misc = new stdclass();
$lang->misc->version = 'Version %s';

$lang->misc->offcialSite['label'] = 'Offical';
$lang->misc->offcialSite['url']   = 'http://www.zdoo.org';

$lang->misc->support['label'] = 'Support';
$lang->misc->support['url']   = 'http://www.zdoo.org/book/zdoomanual/collaborative-system-technical-support-5.html';

$lang->misc->userbook['label'] = 'Manual';
$lang->misc->userbook['url']   = 'http://www.zdoo.org/book/';

$lang->misc->forum['label'] = 'Forum';
$lang->misc->forum['url']   = 'http://www.zdoo.org/forum/';
/* sys/index */
$lang->index->common        = 'Home';
$lang->index->dashboard     = 'Dashboard';
$lang->index->dashboardAbbr = 'Dashboard';
$lang->index->about         = 'About';
$lang->index->allEntries    = 'All';
$lang->index->showOnLeft    = 'On left';
$lang->index->notOnLeft     = 'Not on left';
$lang->index->opened        = 'opened';
$lang->index->addEntry      = 'Add';
$lang->index->profile       = 'Profile';
$lang->index->set           = 'Settings';
$lang->index->theme         = 'Theme';
$lang->index->superAdmin    = 'Admin';
$lang->index->showDesk      = 'Show Desk';
$lang->index->customBlocks  = 'Custom block';
$lang->index->addBlock      = 'Add Block';
$lang->index->refresh       = 'Refresh';
$lang->index->hidden        = 'Hidden';

$lang->index->ips['confirmClose']        = 'Be sure to delete [{0}]?';
$lang->index->ips['entryNotFindTip']     = 'Entry is not found!';
$lang->index->ips['busyTip']             = 'Entry is busy, wait...';
$lang->index->ips['reloadText']          = 'Reload';
$lang->index->ips['closeText']           = 'Close';
$lang->index->ips['openText']            = 'Open';
$lang->index->ips['removeText']          = 'Remove';
$lang->index->ips['fixToMenuText']       = 'Add to menu';
$lang->index->ips['removeFromMenuText']  = 'Remove from menu';
$lang->index->ips['deleteEntryText']     = 'Delete entry';
$lang->index->ips['removedEntry']        = 'Entry 【{0}】 removed.';
$lang->index->ips['confirmRemoveEntry']  = 'Be sure to remove entry [{0}]?';
$lang->index->ips['showWindowText']      = 'Show';
$lang->index->ips['confirmRemoveBlock']  = 'Be sure to remove block [{0}]?';
$lang->index->ips['removedBlock']        = 'Block has been removed';
$lang->index->ips['hiddenBlock']         = 'Block has been hidden';
$lang->index->ips['orderdBlocksSaved']   = 'Order has been saved';
$lang->index->ips['moreOptionTip'] 	     = 'Show other {0} entries';
$lang->index->ips['confirmCloseBrowser'] = 'Notice:This app has been opened already';
/* sys/group */
$lang->group->common             = 'Group';
$lang->group->browse             = 'Groups';
$lang->group->create             = 'Create Group';
$lang->group->edit               = 'Edit';
$lang->group->copy               = 'Copy';
$lang->group->delete             = 'Delete';
$lang->group->manageAppPriv      = 'Application';
$lang->group->managePriv         = 'Privilege';
$lang->group->managePrivByGroup  = 'Privilege';
$lang->group->managePrivByModule = 'Manage by Modules';
$lang->group->byModuleTips       = '<span class="tips"> (Press shift or control to multiple select)</span>';
$lang->group->manageMember       = 'Members';
$lang->group->linkMember         = 'Link Members';
$lang->group->unlinkMember       = 'Unlink Member';
$lang->group->confirmDelete      = 'Are you sure to delete this group?';
$lang->group->successSaved       = 'Saved.';
$lang->group->errorNotSaved      = 'Not saved, please make sure you have selected some actions and groups.';

$lang->group->id       = 'Id';
$lang->group->name     = 'Name';
$lang->group->desc     = 'Desc';
$lang->group->users    = 'Users';
$lang->group->module   = 'Module';
$lang->group->method   = 'Method';
$lang->group->priv     = 'Privileges';
$lang->group->option   = 'Option';
$lang->group->inside   = 'Group Users';
$lang->group->outside  = 'Other Users';
$lang->group->other    = 'Others';
$lang->group->all      = 'All';
$lang->group->extent   = 'extent';
$lang->group->havePriv = 'Authorized';
$lang->group->noPriv   = 'Not Authorized';

$lang->group->manageAll = 'All customers and orders';

$lang->group->copyOptions['copyPriv'] = 'Copy Privilege';
$lang->group->copyOptions['copyUser'] = 'Copy user';

$lang->group->placeholder = new stdclass();
$lang->group->placeholder->tree = 'Including area, industry, income and expense, boards, blog categories, departments.';
$lang->group->placeholder->lang = 'Including product status, product line, customer type, customer size, customer level, customer status, currency and role';

include (dirname(__FILE__) . '/resource.php');
/* sys/setting */
$lang->setting->common = 'Setting';
$lang->setting->reset  = 'Reset';
$lang->setting->key    = 'Key';
$lang->setting->value  = 'Value';

$lang->setting->lang = 'Product status, Product lines, Customer types, Customer Size, Customer Level, Customer Status, Currency, Roles';

$lang->setting->customerPool = 'Customer settings';
$lang->setting->modules      = 'Modules settings';

$lang->setting->module = new stdClass();
$lang->setting->module->user     = 'User roles';
$lang->setting->module->product  = 'Product status';
$lang->setting->module->customer = 'Customer level';

$lang->setting->user = new stdClass();
$lang->setting->user->fields['roleList'] = 'Roles';

$lang->setting->product = new stdClass();
$lang->setting->product->fields['statusList'] = 'Product status';
$lang->setting->product->fields['lineList']   = 'Product line';

$lang->setting->product->lineList = new stdclass();
$lang->setting->product->lineList->key   = 'Code';
$lang->setting->product->lineList->value = 'Name';

$lang->setting->customer = new stdClass();
$lang->setting->customer->fields['sourceList']    = 'Customer Source';
$lang->setting->customer->fields['typeList']      = 'Customer Type';
$lang->setting->customer->fields['sizeNameList']  = 'Customer Size';
$lang->setting->customer->fields['levelNameList'] = 'Customer Level';
$lang->setting->customer->fields['statusList']    = 'Customer Status';

$lang->setting->system = new stdclass();
$lang->setting->system->mainCurrency           = 'Main currency';
$lang->setting->system->fields['currencyList'] = 'Currency list';

$lang->setting->allLang     = 'For all language';
$lang->setting->currentLang = 'For current language';

$lang->setting->placeholder = new stdclass();
$lang->setting->placeholder->key   = 'Key';
$lang->setting->placeholder->value = 'Define the value';
$lang->setting->placeholder->info  = 'Description';

$lang->setting->placeholder->typeList = new stdclass();
$lang->setting->placeholder->typeList->key = 'Key should be 1~30 letters.';

$lang->setting->placeholder->sizeNameList = new stdclass();
$lang->setting->placeholder->sizeNameList->key   = 'Key should be intergers or letters.';
$lang->setting->placeholder->sizeNameList->value = 'Brief description';
$lang->setting->placeholder->sizeNameList->info  = 'Detailed description';

$lang->setting->placeholder->levelNameList = new stdclass();
$lang->setting->placeholder->levelNameList->key   = 'Key should be intergers or letters.';
$lang->setting->placeholder->levelNameList->value = 'Brief description';
$lang->setting->placeholder->levelNameList->info  = 'Detailed description';

$lang->setting->placeholder->lineList = new stdclass();
$lang->setting->placeholder->lineList->key   = 'Key should be intergers or letters.';
$lang->setting->placeholder->lineList->value = 'Brief description';

$lang->setting->reserveDays    = 'Hold Days';
$lang->setting->reserveDaysTip = "Customer are automatically saved in customer pools, when its info is not updated within certain days. It will be disabled if it is set as '0' days.";
$lang->setting->currencyTip    = 'When creating a trade with a depositor but the currency is not main currency, you have to record the exchange rate.';

$lang->setting->moduleList['attend']   = 'Attend';
$lang->setting->moduleList['leave']    = 'Leave';
$lang->setting->moduleList['makeup']   = 'Makeup';
$lang->setting->moduleList['overtime'] = 'Overtime';
$lang->setting->moduleList['lieu']     = 'Lieu';
$lang->setting->moduleList['trip']     = 'Trip';
$lang->setting->moduleList['egress']   = 'Egress';
$lang->setting->moduleList['refund']   = 'Reimburse';
/* sys/user */
$lang->user->common    = 'User';

$lang->user->id        = 'ID';
$lang->user->account   = 'Account';
$lang->user->super     = 'Admin';
$lang->user->password  = 'Password';
$lang->user->password2 = 'Repeat';
$lang->user->realname  = 'Name';
$lang->user->nickname  = 'Nickname';
$lang->user->dept      = 'Department';
$lang->user->role      = 'Role';    
$lang->user->avatar    = 'Avatar';
$lang->user->birthyear = 'Birthyear';
$lang->user->birthday  = 'Birthday';
$lang->user->gender    = 'Gender';
$lang->user->email     = 'Email';
$lang->user->msn       = 'MSN';
$lang->user->qq        = 'QQ';
$lang->user->yahoo     = 'Y!';
$lang->user->weixin    = 'Wechat';
$lang->user->gtalk     = 'GTalk';
$lang->user->wangwang  = 'Wangwang';
$lang->user->mobile    = 'Mobile';
$lang->user->phone     = 'Phone';
$lang->user->dept      = 'Department';
$lang->user->address   = 'Address';
$lang->user->zipcode   = 'Zipcode';
$lang->user->join      = 'Join date';
$lang->user->visits    = 'Visits';
$lang->user->ip        = 'Last IP';
$lang->user->last      = 'Last login';
$lang->user->allowTime = 'Allow time';
$lang->user->status    = 'Status';
$lang->user->alert     = 'Your account has been disabled';
$lang->user->keepLogin = 'Keep Login';
$lang->user->ignore    = 'Ignore';

$lang->user->admin           = 'Admin';
$lang->user->list            = 'Users';
$lang->user->colleague       = 'Colleagues';
$lang->user->view            = "User info";
$lang->user->create          = "Add User";
$lang->user->edit            = "Edit";
$lang->user->changePassword  = "Change password";
$lang->user->recoverPassword = "Forgot password";
$lang->user->newPassword     = "New password";
$lang->user->update          = "Edit";
$lang->user->delete          = "Delete";
$lang->user->browse          = "Borwse";
$lang->user->deny            = "Access is denied.";
$lang->user->confirmDelete   = "Do you want to delete this user?";
$lang->user->confirmActivate = "Do you want to activate this user?";
$lang->user->relogin         = "Login again";
$lang->user->asGuest         = "Guest login";
$lang->user->goback          = "Back";
$lang->user->allUsers        = 'All';
$lang->user->submit          = "Submit";
$lang->user->forbid          = 'Disable';
$lang->user->forbidList      = 'Disabled Users';
$lang->user->normalList      = 'Normal Users';
$lang->user->active          = 'Active';
$lang->user->setReferer      = 'Set Referer';
$lang->user->vcard           = 'Vcard';
$lang->user->uploadAvatar    = 'Upload avatar';
$lang->user->cropAvatar      = 'Crop avatar';
$lang->user->cropAvatarTip   = 'Drag to crop avatar';
$lang->user->adminUser       = 'User';

$lang->user->profile     = 'Profile';
$lang->user->editProfile = 'Edit';
$lang->user->thread      = 'My Threads';
$lang->user->reply       = 'My Replies';
$lang->user->message     = 'My Message';

$lang->user->inputAccount   = 'Please enter account';
$lang->user->inputColleague = "Please enter colleauge's name";
$lang->user->inputPassword  = 'Please enter password';
$lang->user->searchUser     = 'Search';

$lang->user->errorDeny     = "Sorry, you don't have the permission to access <b>%s</b>'s <b>%s</b>. Please contact the administrator.<br/> This page will jump to homepage after 5 seconds";
$lang->user->loginFailed   = "Login failed. Check you account and password.";
$lang->user->locked        = "Failed too many times. Please login ten minutes later.";
$lang->user->lockedForEver = "User has been disabled permanently.";
$lang->user->forbidSuccess = 'Forbidden.';
$lang->user->actionFail    = 'Failed.';
$lang->user->uploadSuccess = 'Successfully uploaded.';
$lang->user->actionError   = 'Error, there are records created by this user.';
$lang->user->retainAccount = 'You cannot set <strong>%s</strong> as an account.';

$lang->user->reviewProcess['attend']   = 'Attend';
$lang->user->reviewProcess['leave']    = 'Leave';
$lang->user->reviewProcess['makeup']   = 'Makeup';
$lang->user->reviewProcess['overtime'] = 'Overtime';
$lang->user->reviewProcess['lieu']     = 'Lieu';
$lang->user->reviewProcess['refund']   = 'Refund';

$lang->user->forbidUser = 'Manage users';
$lang->user->operate    = 'Operate';

$lang->user->genderList = $lang->genderList;

$lang->user->basicInfo   = 'Basic Info';
$lang->user->contactInfo = 'Contact Info';

$lang->user->statusList = new stdclass();
$lang->user->statusList->locked    = "<label class='label label-danger'>Locked</label>";
$lang->user->statusList->forbidden = "<label class='label label-danger'>Forbidden</label>";
$lang->user->statusList->normal    = "<label class='label label-success'>Normal</label>";

$lang->user->notice = new stdclass();
$lang->user->notice->password = 'Numbers and letters, at least six characters.';

$lang->user->login  = new stdclass();
$lang->user->login->common  = "Login";
$lang->user->login->welcome = 'Welcome';
$lang->user->login->why     = 'Login to enjoy more features.';

$lang->user->control = new stdclass();
$lang->user->control->common      = 'Dashboard';
$lang->user->control->welcome     = 'Welcome, <strong>%s</strong>';
$lang->user->control->lblPassword = "Leave it blank and nothing will be changed.";

$lang->user->control->menus[10] = '<i class="icon-large icon-user"></i> Profile <i class="icon-chevron-right"></i>|user|profile';
$lang->user->control->menus[20] = '<i class="icon-large icon-edit"></i> Edit <i class="icon-chevron-right"></i>|user|edit';
//$lang->user->control->menus[28] = '<i class="icon-large icon-comments-alt"></i> Messages <i class="icon-chevron-right"></i>|user|message';
$lang->user->control->menus[30] = '<i class="icon-large icon-share"></i> Threads <i class="icon-chevron-right"></i>|user|thread';
$lang->user->control->menus[40] = '<i class="icon-large icon-mail-reply-all"></i> Replies <i class="icon-chevron-right"></i>|user|reply';

$lang->user->colleagueMenu = 'Colleague';

$lang->dept = new stdclass();  
$lang->dept->common     = 'Department';
$lang->dept->name       = 'Name';
$lang->dept->alias      = 'Alias';
$lang->dept->edit       = 'Manage Dept';
$lang->dept->parent     = 'Parent';
$lang->dept->children   = 'Child';
$lang->dept->desc       = 'Description';
$lang->dept->keywords   = 'Keywords';
$lang->dept->moderators = 'Dept Manager';
  
$lang->user->roleList['']           = ''; 
$lang->user->roleList['dev']        = 'Developer';
$lang->user->roleList['pm']         = 'Project Manager';
$lang->user->roleList['market']     = 'Marketing';
$lang->user->roleList['sale']       = 'Sales';
$lang->user->roleList['hr']         = 'HR';
$lang->user->roleList['office']     = 'Office';
$lang->user->roleList['service']    = 'Service';
$lang->user->roleList['support']    = 'Support';
$lang->user->roleList['marketmgr']  = 'Marketing Manager';
$lang->user->roleList['salemgr']    = 'Sales Manager';
$lang->user->roleList['hrmgr']      = 'HR Manager';
$lang->user->roleList['adminmgr']   = 'Office Manager';
$lang->user->roleList['servicemgr'] = 'Service Manager';
$lang->user->roleList['supportmgr'] = 'Support Manager';
$lang->user->roleList['top']        = 'Senior Manager';
$lang->user->roleList['others']     = 'Others';

$lang->user->mailContent = <<<EOT
<html>
<head>
<style type='text/css'>
body{margin:0; padding:0;}
div{padding-left:30px;}
</style>
</head>
<body>
<div style='padding-top:20px;height:60px;background:#fafafa;border-bottom:1px solid #ddd;font-size:18px;font-weight:bold'> 密码修改 </div>
<div style='margin-top:20px;'>
<p>Hello, %s <br />
Please click the link to change your password: <br />
<a href='%s' target='_blank'>%s</a>
</p>
<p>Reset Key: %s</p>
</div>
<div style='height:20px;border-bottom:1px solid #ddd;'></div>
<div style='margin:20px 0 0 0 ;'>
System letter, please do not reply
</div>
</body>
</html>
EOT;
/* sys/notice */
$lang->notice = new stdclass();
$lang->notice->common  = 'Error';
$lang->notice->jumping = "This page will jump to homepage after 5 seconds <a href='%s' class='btn btn-primary btn-xs'>Jump Now</a>";

$lang->notice->typeList['notFound']      = '';
$lang->notice->typeList['accessLimited'] = '';
/* sys/schema */
$lang->schema->common   = 'Template';
$lang->schema->browse   = 'Browse';
$lang->schema->view     = 'View';
$lang->schema->create   = 'Import';
$lang->schema->edit     = 'Edit';
$lang->schema->delete   = 'Delete';
$lang->schema->csvFile  = 'Template Files';

$lang->schema->name     = 'Name';
$lang->schema->feeRow   = 'Fee is a record';
$lang->schema->diffCol  = 'Different column';

$lang->schema->placeholder = new stdclass();
$lang->schema->placeholder->selectField = 'Please select the correct field';
$lang->schema->placeholder->common      = 'Fill in to the column field , such as: A';
$lang->schema->placeholder->type        = 'Fill in "Income / Expense" column';
$lang->schema->placeholder->date        = 'Fill out the "payment time" column';
$lang->schema->placeholder->product     = 'Fill in "product" column';
$lang->schema->placeholder->desc        = 'The accounts note, use "," separated, such as: I,O';
$lang->schema->placeholder->in          = 'The column of income such as E';
$lang->schema->placeholder->out         = 'The column of expenses such as D';

$lang->schema->fieldRequired = '%s you must select correct field';
/* sys/backup */
$lang->backup->common      = 'Backup';
$lang->backup->index       = 'Home';
$lang->backup->history     = 'History';
$lang->backup->delete      = 'Delete';
$lang->backup->backup      = 'Backup';
$lang->backup->restore     = 'Restore';
$lang->backup->setSaveDays = 'Set hold days';

$lang->backup->name     = 'Name';
$lang->backup->time     = 'Time';
$lang->backup->files    = 'Files';
$lang->backup->size     = 'Size';
$lang->backup->saveDays = 'Hold days';

$lang->backup->waitting       = 'Restoring...';
$lang->backup->confirmDelete  = 'Do you want to delete this backup?';
$lang->backup->confirmRestore = 'Do you want to restore this backup?';
$lang->backup->deleteInfo     = 'Delete backup before %s days';

$lang->backup->success = new stdclass();
$lang->backup->success->backup  = 'Success backup!';
$lang->backup->success->restore = 'Success restore!';

$lang->backup->error = new stdclass();
$lang->backup->error->noWritable  = "Cannot backup! <code>%s</code> do not write! Please check the directory permissions.";
$lang->backup->error->noDelete    = "The file %s cannot delete, modify permissions or deleted manually.";
$lang->backup->error->restoreSQL  = "The database restore failed. Error: %s";
$lang->backup->error->restoreFile = "Attachments failed to restore. Error: %s";
$lang->backup->error->backupFile  = "Attachments failed to backup. Error: %s";
$lang->backup->error->setSaveDays = "Backup should save more than 0 days";
/* sys/upgrade */
$lang->upgrade = new stdclass();
$lang->upgrade->common  = 'Upgrade';

$lang->upgrade->result  = 'Result';
$lang->upgrade->fail    = 'Failed';
$lang->upgrade->success = 'Success';
$lang->upgrade->tohome  = 'Back to Home';

$lang->upgrade->index         = 'Upgrad Ranzhi.';
$lang->upgrade->backup        = 'Back Up';
$lang->upgrade->selectVersion = 'Select version to upgrade from';
$lang->upgrade->confirm       = 'Confirm the SQL to be excuted.';
$lang->upgrade->execute       = 'Execute';
$lang->upgrade->next          = 'Next';
$lang->upgrade->redeploy      = 'Please redeploy app directory before upgrade.';
$lang->upgrade->redeployDesc  = "<h5>For reaseon of code adjustment app directory need to redeploy.</h5><div class='text-important'>operating steps : delete app directory before copy new package.</div>";
$lang->upgrade->removeTodo    = 'Please remove %s directory before upgrade.';
$lang->upgrade->removeTodoTip = "<h5>For reaseon of code adjustment %s directory need to remove.</h5><div class='text-important'>operating steps : delete directory of %s.</div>";
$lang->upgrade->updateLicense = 'The license of RanZhi 2. 0 has changed to Z PUBLIC LICENSE(ZPL) 1.1.';

$lang->upgrade->majorList['3_5'] = array();
$lang->upgrade->majorList['3_5']['1'] = 'Revenue from main operations';
$lang->upgrade->majorList['3_5']['2'] = 'Other operating revenue';
$lang->upgrade->majorList['3_5']['3'] = 'Cost of main operations';
$lang->upgrade->majorList['3_5']['4'] = 'Other operating expense';

$lang->upgrade->majorList['3_6'] = array();
$lang->upgrade->majorList['3_6']['5'] = 'Invest Profit';
$lang->upgrade->majorList['3_6']['6'] = 'Invest loss';
$lang->upgrade->majorList['3_6']['7'] = 'Fee';
$lang->upgrade->majorList['3_6']['8'] = 'Loan interest';

$lang->upgrade->backupData = <<<EOT
<pre>
<strong>Using phpMyAdmin or mysqldump to backup database.</strong>
<code class='red'>$ mysqldump -u %s</span> -p%s %s > ranzhi.sql</code>
</pre>
EOT;

$lang->upgrade->versionNote = "Please choose the version to upgrade.";

$lang->upgrade->deleteTips   = 'Need to delete some files. The commands in Linux are:<br />';
$lang->upgrade->deleteDir    = '<code>rm -fr %s</code>';
$lang->upgrade->deleteFile   = '<code>rm %s</code>';
$lang->upgrade->afterDeleted = '<br />Refresh after delete.';

include 'version.php';
/* sys/mail */
$lang->mail->common = 'Email Settings';
$lang->mail->index  = 'Home';
$lang->mail->detect = 'Detect';
$lang->mail->edit   = 'Configure';
$lang->mail->save   = 'Successfully saved.';
$lang->mail->test   = 'Testing';
$lang->mail->reset  = 'Reset';

$lang->mail->turnon      = 'Turnon';
$lang->mail->fromAddress = 'From email';
$lang->mail->fromName    = 'From';
$lang->mail->mta         = 'MTA';
$lang->mail->host        = 'SMTP host';
$lang->mail->port        = 'SMTP port';
$lang->mail->auth        = 'Authentication';
$lang->mail->username    = 'SMTP account';
$lang->mail->password    = 'SMTP password';
$lang->mail->secure      = 'Secure';
$lang->mail->debug       = 'Debugging';

$lang->mail->turnonList[1] = 'on';
$lang->mail->turnonList[0] = 'off';

$lang->mail->debugList[0] = 'off';
$lang->mail->debugList[1] = 'normal';
$lang->mail->debugList[2] = 'high';

$lang->mail->authList[1]  = 'necessary';
$lang->mail->authList[0]  = 'unnecessary';

$lang->mail->secureList['']    = 'plain';
$lang->mail->secureList['ssl'] = 'ssl';
$lang->mail->secureList['tls'] = 'tls';

$lang->mail->inputFromEmail = 'Please enter Email address';
$lang->mail->nextStep       = 'Next';
$lang->mail->successSaved   = 'The configuration has been successfully saved.';
$lang->mail->subject        = "This is a testing Email from Zdoo.";
$lang->mail->content        = 'If you see this notice, it means that the Email notification feature has been enabled!';
$lang->mail->sendSuccess    = 'Successfully sent!';
$lang->mail->needConfigure  = "Configuration is not found. Configure it first.";

$lang->mail->mailContentTip = <<<EOT
<strong>%s</strong>(%s) Powered by <a href='https://www.zdoo.org' target='blank'>RanZhi OA</a>.<br />
<a href='http://www.cnezsoft.com' target='blank'>Nature Easy Soft</a>
EOT;
$lang->mail->openTip = 'Send E-mail notifications when any update to orders, customers and tasks, reviews and reimbursements.';
/* team/forum */
if(!isset($lang->forum)) $lang->forum = new stdclass();
$lang->forum->common      = 'Forum';
$lang->forum->index       = 'Home';
$lang->forum->board       = 'Board';
$lang->forum->owners      = 'Moderator';
$lang->forum->threadList  = 'Threads';
$lang->forum->threadCount = 'Threads';
$lang->forum->postCount   = 'Posts';
$lang->forum->noPost      = 'No thread';
$lang->forum->lastPost    = 'Last posted: %s by %s';
$lang->forum->readonly    = 'Readonly';
$lang->forum->notExist    = 'The board does not exist.';
$lang->forum->lblOwner    = " [ Moderator: %s ]";

$lang->forum->post   = 'Post';
$lang->forum->admin  = 'Admin';
$lang->forum->update = 'Update';

$lang->forum->updateDesc    = 'This action will re-compute the stats(threads, replies) of every board again.';
$lang->forum->successUpdate = 'Update sucessfully';

$lang->pager->noRecord      = '';
$lang->pager->digest        = str_replace('records', 'threads', $lang->pager->digest);
$lang->pager->settedInForum = true;    // Set this switch thus in thread module can avoid overiding them.
/* team/reply */
$lang->reply = new stdclass();
$lang->reply->common      = 'Reply';
$lang->reply->id          = 'Id';
$lang->reply->list        = 'Replies';
$lang->reply->content     = 'Content';
$lang->reply->author      = 'Author';
$lang->reply->files       = 'Files:';
$lang->reply->createdDate = 'Date';
$lang->reply->admin       = 'Reply';

$lang->reply->edit = 'Edit';
/* team/thread */
$lang->thread->common    = 'Thread';

$lang->thread->id         = 'Id';
$lang->thread->title      = 'Title';
$lang->thread->board      = 'Board';
$lang->thread->author     = 'Author';
$lang->thread->content    = 'Content ';
$lang->thread->file       = 'File ';
$lang->thread->postedDate = 'Posted on';
$lang->thread->replies    = 'Reply';
$lang->thread->views      = 'Views';
$lang->thread->lastReply  = 'Last reply';

$lang->thread->post         = 'Post';
$lang->thread->postTo       = 'Post to';
$lang->thread->browse       = 'Threads';
$lang->thread->stick        = 'Sticky';
$lang->thread->edit         = 'Edit';
$lang->thread->view         = 'View';
$lang->thread->delete       = 'Delete';
$lang->thread->status       = 'Status';
$lang->thread->hide         = 'Hide';
$lang->thread->show         = 'Show';
$lang->thread->transfer     = 'Transfer';
$lang->thread->switchStatus = 'Switch Status';
$lang->thread->deleteFile   = 'Delete File';

$lang->thread->sticks[0] = 'Don\'t stick';
$lang->thread->sticks[1] = 'Board stick';
$lang->thread->sticks[2] = 'Global stick';

$lang->thread->statusList['hidden'] = 'hidden';
$lang->thread->statusList['normal'] = 'normal';

$lang->thread->confirmDeleteThread = "Are you sure to delete this thread?";
$lang->thread->confirmHideReply    = "Are you sure to hide this reply?";
$lang->thread->confirmHideThread   = "Are you sure to hide this thread?";
$lang->thread->confirmDeleteReply  = "Are you sure to delete this reply?";
$lang->thread->confirmDeleteFile   = "Are you sure to delete this file?";

$lang->thread->lblEdited       = '%s Last edited, %s';
$lang->thread->message         = '%s reply at #%s in forum, the thread is: %s, the content is: %s';
$lang->thread->readonly        = 'Read only';
$lang->thread->successStick    = 'Successfully sticky.';
$lang->thread->successUnstick  = 'Successfully unsticky.';
$lang->thread->successHide     = 'Successfully hide it.';
$lang->thread->successShow     = 'Successfully show it.';
$lang->thread->readonlyMessage = 'The thread has been set <strong>READONLY</strong>，you can not post new reply。';
$lang->thread->successTransfer = 'Successfully Transfered';

if(!isset($lang->pager->settedInForum))
{
    $lang->pager->noRecord = '';
    $lang->pager->digest   = str_replace('records', 'replies', $lang->pager->digest);
}
/* team/block */
$lang->block->common   = 'Widgets';
$lang->block->blog     = 'Latest Blogs';
$lang->block->lblBlock = 'Widget';
$lang->block->admin    = 'Manage';
$lang->block->num      = 'Number';
$lang->block->type     = 'Type';

$lang->block->availableBlocks = new stdclass();
$lang->block->availableBlocks->blog   = 'Latest Blog';
$lang->block->availableBlocks->thread = 'Threads';

$lang->block->typeList->thread['new']   = 'latest Thread';
$lang->block->typeList->thread['stick'] = 'Sticked Threads';
/* team/blog */
$lang->blog->common = "Blog";

$lang->blog->latestArticles = 'Latest Articles';

$lang->blog->index  = "Home";
$lang->blog->create = "Create Blog";
$lang->blog->edit   = "Edit";
$lang->blog->view   = "View";
$lang->blog->delete = "Delete";

$lang->blog->notFound = 'This blog is not found.';
