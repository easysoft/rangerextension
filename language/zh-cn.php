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
$lang->semicolon  = '；';
$lang->RMB        = '￥';
$lang->divider    = "<span class='divider'>{$lang->raquo}</span> ";
$lang->at         = ' 于 ';
$lang->by         = ' 由 ';
$lang->ditto      = '同上';
$lang->etc        = '等';
$lang->importIcon = "<i class='icon-download-alt'> </i>";
$lang->exportIcon = "<i class='icon-upload-alt'> </i>";

$lang->apps = new stdclass();
$lang->apps->crm        = '客户';
$lang->apps->cash       = '财务';
$lang->apps->oa         = '办公';
$lang->apps->doc        = '文档';
$lang->apps->proj       = '项目';
$lang->apps->sys        = '通用';
$lang->apps->team       = '团队';
$lang->apps->superadmin = '后台';

$lang->ranzhi    = '然之协同';
$lang->agreement = "已阅读并同意<a href='http://zpl.pub/page/zplv11.html' target='_blank'>《Z PUBLIC LICENSE授权协议1.2》</a>。<span class='text-danger'>未经许可，不得去除、隐藏或遮掩然之系统的任何标志及链接。</span>";
$lang->poweredBy = "<a href='http://www.ranzhi.org/?v=%s' target='_blank'>{$lang->ranzhi}%s</a>";
$lang->ipLimited = "<html><head><meta http-equiv='Content-Type' content='text/html; charset=utf-8' /></head><body>抱歉，管理员限制当前IP登录，请联系管理员解除限制。</body></html>";

$lang->IE6Alert = <<<EOT
    <div class='alert alert-danger' style='margin-top:100px;'>
      <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
      <h2>请使用其他浏览器访问本站。</h2>
      <p>珍爱上网，远离IE！</p>
      <p>我们检测到您正在使用Internet Explorer 6 ——  IE6 浏览器, IE6 于2001年8月27日推出，而现在它已十分脱节。速度慢、不安全、不能很好的展示新一代网站。<br/></p>
      <a href='https://www.google.com/intl/zh-hk/chrome/browser/' class='btn btn-primary btn-lg' target='_blank'>谷歌浏览器</a>
      <a href='http://www.firefox.com/' class='btn btn-primary btn-lg' target='_blank'>火狐浏览器</a>
      <a href='http://www.opera.com/download' class='btn btn-primary btn-lg' target='_blank'>Opera浏览器</a>
      <p></p>
    </div>
EOT;

$lang->theme             = '主题';
$lang->themes['default'] = '默认';
$lang->themes['clear']   = '清晰';

$lang->home             = '首页';
$lang->welcome          = "%s协同管理系统";
$lang->messages         = "<strong><i class='icon-comment-alt'></i> %s</strong>";
$lang->todayIs          = '今天是%s，';
$lang->today            = '今天';
$lang->aboutUs          = '关于我们';
$lang->about            = '关于';
$lang->link             = '友情链接';
$lang->frontHome        = '前台';
$lang->forumHome        = '论坛';
$lang->bookHome         = '手册';
$lang->register         = '注册';
$lang->logout           = '退出';
$lang->login            = '登录';
$lang->account          = '帐号';
$lang->password         = '密码';
$lang->all              = '全部';
$lang->changePassword   = '修改密码';
$lang->currentPos       = '当前位置';
$lang->categoryMenu     = '分类导航';
$lang->basicInfo        = '基本信息';
$lang->chooseUserToMail = '选择要发送提醒的用户...';

$lang->reset          = '重填';
$lang->add            = '添加';
$lang->edit           = '编辑';
$lang->copy           = '复制';
$lang->and            = '并且';
$lang->or             = '或者';
$lang->hide           = '隐藏';
$lang->delete         = '删除';
$lang->close          = '关闭';
$lang->finish         = '完成';
$lang->cancel         = '取消';
$lang->import         = '导入';
$lang->export         = '导出';
$lang->setFileName    = '文件名';
$lang->setFileNum     = '记录数';
$lang->setFileType    = '文件类型';
$lang->setCharset     = '编码格式';
$lang->save           = '保存';
$lang->saved          = '已保存';
$lang->confirm        = '确认';
$lang->preview        = '预览';
$lang->goback         = '返回';
$lang->assign         = '指派';
$lang->start          = '开始';
$lang->create         = '新建';
$lang->forbid         = '禁用';
$lang->activate       = '激活';
$lang->ignore         = '忽略';
$lang->view           = '查看';
$lang->detail         = '详情';
$lang->more           = '更多';
$lang->actions        = '操作';
$lang->history        = '历史记录';
$lang->reverse        = '切换顺序';
$lang->switchDisplay  = '切换显示';
$lang->feature        = '未来';
$lang->year           = '年';
$lang->month          = '月';
$lang->day            = '日';
$lang->loading        = '稍候...';
$lang->saveSuccess    = '保存成功';
$lang->setSuccess     = '设置成功';
$lang->sendSuccess    = '发送成功';
$lang->fail           = '失败';
$lang->noResultsMatch = '没有匹配的选项';
$lang->searchMore     = "搜索此关键字的更多结果：";
$lang->files          = '附件';
$lang->addFiles       = '上传了附件 ';
$lang->comment        = '备注';
$lang->selectAll      = '全选';
$lang->selectReverse  = '反选';
$lang->continueSave   = '继续保存';
$lang->submitting     = '稍候...';
$lang->yes            = '是';
$lang->no             = '否';
$lang->signIn         = '签到';
$lang->signOut        = '签退';
$lang->sort           = '排序';
$lang->required       = '必填';
$lang->custom         = '自定义';
$lang->refresh        = '刷新';

$lang->exportAll      = '导出全部记录';
$lang->exportThisPage = '导出本页记录';
$lang->exportTemplate = '导出模板';
$lang->exportExcel    = '导出Excel';
$lang->exportWord     = '导出Word';
$lang->importFile     = '导入文件';
$lang->importSuccess  = '导入成功';
$lang->importFail     = '导入失败';

$lang->lifetime = new stdclass();
$lang->lifetime->createdBy    = '由谁创建';
$lang->lifetime->assignedTo   = '指派给';
$lang->lifetime->signedBy     = '由谁签约';
$lang->lifetime->closedBy     = '由谁关闭';
$lang->lifetime->closedReason = '关闭原因';
$lang->lifetime->lastEdited   = '最后修改';

$lang->setOkFile = <<<EOT
<h5>请按照下面的步骤操作以确认您的管理员身份。</h5>
<p>创建 %s 文件。如果存在该文件，使用编辑软件打开，重新保存一遍。</p>
EOT;

$lang->js = new stdclass();
$lang->js->confirmDelete         = '您确定要执行删除操作吗？';
$lang->js->confirmFinish         = '您确定要执行完成操作吗？';
$lang->js->deleteing             = '删除中';
$lang->js->doing                 = '处理中';
$lang->js->timeout               = '网络超时,请重试';
$lang->js->confirmDiscardChanges = '表单已更改，确定关闭？';
$lang->js->yes                   = '是';
$lang->js->no                    = '否';

$lang->company = new stdclass();
$lang->company->contactUs = '联系我们';
$lang->company->address   = '地址';
$lang->company->phone     = '电话';
$lang->company->email     = 'Email';
$lang->company->fax       = '传真';
$lang->company->qq        = 'QQ';
$lang->company->weibo     = '微博';
$lang->company->weixin    = '微信';
$lang->company->wangwang  = '旺旺';

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

$lang->admin->common = '后台管理';

$lang->menu->sys = new stdclass();
$lang->menu->sys->company = '公司|company|setbasic|';
$lang->menu->sys->user    = '组织|user|admin|';
$lang->menu->sys->group   = '权限|group|browse|';
$lang->menu->sys->entry   = '应用|entry|admin|';
$lang->menu->sys->system  = '系统|mail|admin|';
$lang->menu->sys->package = '扩展|package|browse|';

$lang->message = new stdclass(); 
$lang->blog    = new stdclass(); 
$lang->group   = new stdclass(); 

$lang->entry       = new stdclass();
$lang->entry->menu = new stdclass();
$lang->entry->menu->admin    = array('link' => '应用列表|entry|admin|', 'alias' => 'edit, integration, style, zentaoAdmin');
$lang->entry->menu->create   = '添加应用|entry|create|';
$lang->entry->menu->webapp   = 'WEB应用|webapp|obtain|';
$lang->entry->menu->category = '分组|entry|category|';

$lang->system       = new stdclass();
$lang->system->menu = new stdclass();
$lang->system->menu->mail   = array('link' => '发信|mail|admin|', 'alias' => 'detect,edit,save,test');
$lang->system->menu->trash  = array('link' => '回收站|action|trash|');
$lang->system->menu->cron   = '计划任务|cron|index|';
$lang->system->menu->backup = '备份|backup|index|';

$lang->article = new stdclass();
$lang->article->menu = new stdclass();
$lang->article->menu->admin  = '浏览|article|admin|';
$lang->article->menu->tree   = '模块|tree|browse|type=article';
$lang->article->menu->create = array('link' => '添加文章|article|create|type=article', 'alias' => 'edit');

$lang->menuGroups = new stdclass();

$lang->menu->dashboard = new stdclass();
$lang->menu->dashboard->todo     = '待办|todo|calendar|';
$lang->menu->dashboard->task     = '任务|my|task|';
$lang->menu->dashboard->project  = '项目|my|project|';
$lang->menu->dashboard->order    = '订单|my|order|';
$lang->menu->dashboard->contract = '合同|my|contract|';
$lang->menu->dashboard->review   = '审批|my|review|';
$lang->menu->dashboard->company  = '组织|my|company|';
$lang->menu->dashboard->dynamic  = '动态|my|dynamic|';
$lang->menu->dashboard->contact  = '联系人|my|contact|';

if(!isset($lang->customer)) $lang->customer = new stdclass();
$lang->customer->menu = new stdclass();
$lang->customer->menu->browse      = '所有客户|customer|browse|mode=all';
$lang->customer->menu->assignedTo  = '指派给我|customer|browse|mode=assignedTo';
$lang->customer->menu->contactedBy = '由我联系|customer|browse|mode=contactedby';
$lang->customer->menu->past        = '亟需联系|customer|browse|mode=past';
$lang->customer->menu->today       = '今天联系|customer|browse|mode=today';
$lang->customer->menu->tomorrow    = '明天联系|customer|browse|mode=tomorrow';
$lang->customer->menu->thisweek    = '本周内联系|customer|browse|mode=thisweek';
$lang->customer->menu->thismonth   = '本月内联系|customer|browse|mode=thismonth';
$lang->customer->menu->public      = '客户池|customer|browse|mode=public';
$lang->customer->menu->report      = '报表|report|browse|module=customer';

if(!isset($lang->provider)) $lang->provider = new stdclass();
$lang->provider->menu = new stdclass();
$lang->provider->menu->browse = array('link' => '供应商列表|provider|browse|', 'alias' => 'create,edit,view');

if(!isset($lang->product)) $lang->product = new stdclass();
$lang->product->menu = new stdclass();
$lang->product->menu->browse     = '所有产品|product|browse|mode=browse&status=all';
$lang->product->menu->normal     = '正常|product|browse|mode=browse&status=normal';
$lang->product->menu->developing = '研发中|product|browse|mode=browse&status=developing';
$lang->product->menu->offline    = '下线|product|browse|mode=browse&status=offline';
$lang->product->menu->category   = '产品分类|tree|browse|type=product';

$lang->todo = new stdclass();
$lang->todo->menu = new stdclass();
$lang->todo->menu->calendar        = '日历|todo|calendar|';
$lang->todo->menu->all             = '所有|todo|browse|mode=all';
$lang->todo->menu->assignedToOther = '指派他人|todo|browse|mode=assignedtoother';
$lang->todo->menu->assignedToMe    = '指派给我|todo|browse|mode=assignedtome';
$lang->todo->menu->undone          = '未完成|todo|browse|mode=undone';
$lang->todo->menu->future          = '待定|todo|browse|mode=future';

$lang->my = new stdclass();
$lang->my->review = new stdclass();
$lang->my->review->menu = new stdclass();
$lang->my->review->menu->all      = '所有|my|review|type=all';
$lang->my->review->menu->attend   = '考勤|my|review|type=attend';
$lang->my->review->menu->leave    = '请假|my|review|type=leave';
$lang->my->review->menu->makeup   = '补班|my|review|type=makeup';
$lang->my->review->menu->overtime = '加班|my|review|type=overtime';
$lang->my->review->menu->lieu     = '调休|my|review|type=lieu';
$lang->my->review->menu->refund   = '报销|my|review|type=refund';

$lang->my->order = new stdclass();
$lang->my->order->menu = new stdclass();
$lang->my->order->menu->past       = '亟需联系|my|order|type=past';
$lang->my->order->menu->today      = '今天联系|my|order|type=today';
$lang->my->order->menu->tomorrow   = '明天联系|my|order|type=tomorrow';
$lang->my->order->menu->assignedTo = '指派给我|my|order|type=assignedTo';
$lang->my->order->menu->createdBy  = '由我创建|my|order|type=createdBy';
$lang->my->order->menu->signedBy   = '由我签约|my|order|type=signedBy';
$lang->my->order->menu->all        = '所有|my|order|type=all';
 
$lang->my->contract = new stdclass();
$lang->my->contract->menu = new stdclass();
$lang->my->contract->menu->unfinished  = '未完成|my|contract|type=unfinished';
$lang->my->contract->menu->finished    = '已完成|my|contract|type=finished';
$lang->my->contract->menu->canceled    = '已取消|my|contract|type=canceled';
$lang->my->contract->menu->returnedBy  = '由我回款|my|contract|type=returnedBy';
$lang->my->contract->menu->deliveredBy = '由我交付|my|contract|type=deliveredBy';

$lang->my->task = new stdclass();
$lang->my->task->menu = new stdclass();
$lang->my->task->menu->assignedToMe = '指派给我|my|task|type=assignedTo';
$lang->my->task->menu->createdByMe  = '由我创建|my|task|type=createdBy';
$lang->my->task->menu->finishedByMe = '由我完成|my|task|type=finishedBy';
$lang->my->task->menu->closedByMe   = '由我关闭|my|task|type=closedBy';
$lang->my->task->menu->canceledByMe = '由我取消|my|task|type=canceledBy';
$lang->my->task->menu->unclosed     = '未关闭|my|task|type=unclosed';

$lang->my->dynamic = new stdclass();
$lang->my->dynamic->menu = new stdclass();
$lang->my->dynamic->menu->today      = '今天|my|dynamic|period=today';
$lang->my->dynamic->menu->yesterday  = '昨天|my|dynamic|period=yesterday';
$lang->my->dynamic->menu->twodaysago = '前天|my|dynamic|period=twodaysago';
$lang->my->dynamic->menu->thisweek   = '本周|my|dynamic|period=thisweek';
$lang->my->dynamic->menu->lastweek   = '上周|my|dynamic|period=lastweek';
$lang->my->dynamic->menu->thismonth  = '本月|my|dynamic|period=thismonth';
$lang->my->dynamic->menu->lastmonth  = '上月|my|dynamic|period=lastmonth';
$lang->my->dynamic->menu->all        = '所有|my|dynamic|period=all';

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
$lang->error->length       = array('<strong>%s</strong>长度错误，应当为<strong>%s</strong>', '<strong>%s</strong>长度应当不超过<strong>%s</strong>，且不小于<strong>%s</strong>。');
$lang->error->reg          = '<strong>%s</strong>不符合格式，应当为:<strong>%s</strong>。';
$lang->error->unique       = '<strong>%s</strong>已经有<strong>%s</strong>这条记录了。';
$lang->error->notempty     = '<strong>%s</strong>不能为空。';
$lang->error->empty        = "<strong>%s</strong>必须为空。";
$lang->error->equal        = '<strong>%s</strong>必须为<strong>%s</strong>。';
$lang->error->gt           = "<strong>%s</strong>应当大于<strong>%s</strong>。";
$lang->error->ge           = "<strong>%s</strong>应当不小于<strong>%s</strong>。";
$lang->error->lt           = "<strong>%s</strong>应当小于<strong>%s</strong>。";
$lang->error->le           = "<strong>%s</strong>应当不大于<strong>%s</strong>。";
$lang->error->in           = '<strong>%s</strong>必须为<strong>%s</strong>。';
$lang->error->int          = array('<strong>%s</strong>应当是数字。', '<strong>%s</strong>最小值为%s',  '<strong>%s</strong>应当介于<strong>%s-%s</strong>之间。');
$lang->error->float        = '<strong>%s</strong>应当是数字，可以是小数。';
$lang->error->email        = '<strong>%s</strong>应当为合法的EMAIL。';
$lang->error->URL          = '<strong>%s</strong>应当为合法的URL。';
$lang->error->date         = '<strong>%s</strong>应当为合法的日期。';
$lang->error->code         = '<strong>%s</strong>应当为字母或数字的组合。';
$lang->error->account      = '<strong>%s</strong>应当为字母或数字的组合，至少三位';
$lang->error->passwordsame = '两次密码应当相等。';
$lang->error->passwordrule = '密码应该符合规则，长度至少为六位。';
$lang->error->captcha      = '请输入正确的验证码。';
$lang->error->noWritable   = '%s 可能不可写，请修改权限！';
$lang->error->noConvertFun = '不存在iconv和mb_convert_encoding转码方法，不能将数据转成想要的编码！';
$lang->error->noCurlExt    = '没有加载curl扩展！';
$lang->error->notInt       = '<strong>%s</strong>不能为纯数字组合。';
$lang->error->pasteImg     = '您的浏览器不支持粘贴图片！';
$lang->error->accessDenied = '访问受限';
$lang->error->deny         = "抱歉，您无权访问『<b>%s</b>』模块的『<b>%s</b>』功能。请联系管理员获取权限。";

$lang->pager = new stdclass();
$lang->pager->noRecord   = '暂时没有记录。';
$lang->pager->digest     = "共 <strong>%s</strong> 条记录，%s <strong>%s/%s</strong> &nbsp; ";
$lang->pager->recPerPage = "每页 <strong>%s</strong> 条";
$lang->pager->first      = '首页';
$lang->pager->pre        = '上页';
$lang->pager->next       = '下页';
$lang->pager->last       = '末页';
$lang->pager->locate     = 'Go!';
$lang->pager->showMore   = '显示更多 <i class="icon icon-double-angle-down"></i>';
$lang->pager->noMore     = '没有更多';
$lang->pager->showTotal  = '已显示 <strong>%s</strong> 项，共 <strong>%s</strong> 项';
$lang->pager->previousPage = "上一页";
$lang->pager->nextPage     = "下一页";
$lang->pager->summery      = "第 <strong>%s-%s</strong> 项，共 <strong>%s</strong> 项";

$lang->excel = new stdClass();
$lang->excel->canNotRead = '不能解析该文件';

$lang->excel->error = new stdclass();
$lang->excel->error->info   = '您输入的值不在下拉框列表内。';
$lang->excel->error->title  = '输入有误';
$lang->excel->error->noFile = '没有文件';
$lang->excel->error->noData = '没有有效的数据';

$lang->excel->title = new stdclass();
$lang->excel->title->contact  = '联系人';
$lang->excel->title->sysValue = '系统数据';

$lang->excel->help = new stdclass();
$lang->excel->help->contact = "“真实姓名“是必填字段，如果不填导入时会忽略这条数据。";

$lang->date = new stdclass();
$lang->date->minute = '分钟';
$lang->date->day    = '天';

$lang->genderList = new stdclass();
$lang->genderList->m = '男';
$lang->genderList->f = '女';
$lang->genderList->u = '';

$lang->datepicker = new stdclass();

$lang->datepicker->dpText = new stdclass();
$lang->datepicker->dpText->TEXT_OR          = '或 ';
$lang->datepicker->dpText->TEXT_PREV_YEAR   = '去年';
$lang->datepicker->dpText->TEXT_PREV_MONTH  = '上月';
$lang->datepicker->dpText->TEXT_PREV_WEEK   = '上周';
$lang->datepicker->dpText->TEXT_YESTERDAY   = '昨天';
$lang->datepicker->dpText->TEXT_THIS_YEAR   = '今年';
$lang->datepicker->dpText->TEXT_THIS_MONTH  = '本月';
$lang->datepicker->dpText->TEXT_THIS_WEEK   = '本周';
$lang->datepicker->dpText->TEXT_TODAY       = '今天';
$lang->datepicker->dpText->TEXT_NEXT_YEAR   = '明年';
$lang->datepicker->dpText->TEXT_NEXT_MONTH  = '下月';
$lang->datepicker->dpText->TEXT_CLOSE       = '关闭';
$lang->datepicker->dpText->TEXT_DATE        = '选择时间段';
$lang->datepicker->dpText->TEXT_CHOOSE_DATE = '选择日期';

$lang->datepicker->dayNames     = array('星期日', '星期一', '星期二', '星期三', '星期四', '星期五', '星期六');
$lang->datepicker->abbrDayNames = array('日', '一', '二', '三', '四', '五', '六');
$lang->datepicker->monthNames   = array('一月', '二月', '三月', '四月', '五月', '六月', '七月', '八月', '九月', '十月', '十一月', '十二月');

$lang->currencyList['rmb']  = '人民币';
$lang->currencyList['usd']  = '美元';
$lang->currencyList['hkd']  = '港元';
$lang->currencyList['twd']  = '台元';
$lang->currencyList['euro'] = '欧元';
$lang->currencyList['dem']  = '马克';
$lang->currencyList['chf']  = '瑞士法郎';
$lang->currencyList['frf']  = '法国法郎';
$lang->currencyList['gbp']  = '英镑';
$lang->currencyList['nlg']  = '荷兰盾';
$lang->currencyList['cad']  = '加拿大元';
$lang->currencyList['sur']  = '卢布';
$lang->currencyList['inr']  = '卢比';
$lang->currencyList['aud']  = '澳大利亚元';
$lang->currencyList['nzd']  = '新西兰元';
$lang->currencyList['thb']  = '泰国铢';
$lang->currencyList['sgd']  = '新加坡元';

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

$lang->currencyTip['w'] = '万';
$lang->currencyTip['y'] = '亿';

if(!defined('DT_DATETIME1'))  define('DT_DATETIME1',  'Y-m-d H:i:s');
if(!defined('DT_DATETIME2'))  define('DT_DATETIME2',  'Y-m-d H:i');
if(!defined('DT_DATETIME3'))  define('DT_DATETIME3',  'y-m-d H:i');
if(!defined('DT_MONTHTIME1')) define('DT_MONTHTIME1', 'n/d H:i');
if(!defined('DT_MONTHTIME2')) define('DT_MONTHTIME2', 'n月d日 H:i');
if(!defined('DT_DATE1'))      define('DT_DATE1',      'Y-m-d');
if(!defined('DT_DATE2'))      define('DT_DATE2',      'Ymd');
if(!defined('DT_DATE3'))      define('DT_DATE3',      'Y年m月d日');
if(!defined('DT_DATE4'))      define('DT_DATE4',      'n月j日');
if(!defined('DT_DATE5'))      define('DT_DATE5',      'Y年m月');
if(!defined('DT_TIME1'))      define('DT_TIME1',      'H:i:s');
if(!defined('DT_TIME2'))      define('DT_TIME2',      'H:i');

include (dirname(__FILE__) . '/menuOrder.php');
/* cash/common */
$lang->app = new stdclass();
$lang->app->name = '现金记账';

$lang->menu->cash = new stdclass();
$lang->menu->cash->dashboard = '首页|dashboard|index|';
$lang->menu->cash->all       = '所有|trade|browse|mode=all';
$lang->menu->cash->in        = '收入|trade|browse|mode=in';
$lang->menu->cash->out       = '支出|trade|browse|mode=out';
$lang->menu->cash->transfer  = '转账|trade|browse|mode=transfer';
$lang->menu->cash->invest    = '投资|trade|browse|mode=invest';
$lang->menu->cash->loan      = '借贷|trade|browse|mode=loan';
$lang->menu->cash->check     = '对账|depositor|check|';
$lang->menu->cash->report    = '报表|trade|report|';
$lang->menu->cash->depositor = '账户|depositor|browse|';
$lang->menu->cash->provider  = '供应商|provider|browse|';
//$lang->menu->cash->contact   = '联系人|contact|browse|';
$lang->menu->cash->setting   = '设置|tree|browse|type=in|';

if(!isset($lang->depositor)) $lang->depositor = new stdclass();

if(!isset($lang->trade)) $lang->trade = new stdclass();
$lang->trade->menu = new stdclass();

if(!isset($lang->contact)) $lang->contact = new stdclass();
$lang->contact->menu = new stdclass();
$lang->contact->menu->browse = array('link' => '联系人列表|contact|browse|', 'alias' => 'create,edit,view');

if(!isset($lang->report)) $lang->report = new stdclass();
$lang->report->menu = new stdclass();
$lang->report->menu->annual  = '年度收支表|trade|report|';
$lang->report->menu->compare = '年度对比表|trade|compare|';
$lang->report->menu->export  = '账号盈亏表|trade|export2Excel|mode=depositor';
$lang->report->menu->setting = '报表单位|trade|setReportUnit|';

$lang->setting = new stdclass();
$lang->setting->menu = new stdclass();
$lang->setting->menu->income       = '收入科目|tree|browse|type=in|';
$lang->setting->menu->expend       = '支出科目|tree|browse|type=out|';
$lang->setting->menu->currency     = '货币类型|setting|lang|module=common&field=currencyList';
$lang->setting->menu->schema       = '导入模板设置|schema|browse|';
$lang->setting->menu->tradePriv    = '支出浏览权限设置|group|managetradepriv|';
$lang->setting->menu->tradeSetting = '记账设置|trade|tradeSetting|';
include(dirname(__FILE__) . '/menuOrder.php');
/* crm/common */
$lang->app = new stdclass();
$lang->app->name = '客户管理';

$lang->menu->crm = new stdclass();
$lang->menu->crm->dashboard = '首页|dashboard|index|';
$lang->menu->crm->order     = '订单|order|browse|';
$lang->menu->crm->contract  = '合同|contract|browse|mode=unfinished';
$lang->menu->crm->customer  = '客户|customer|browse|';
$lang->menu->crm->provider  = '供应商|provider|browse|';
$lang->menu->crm->contact   = '联系人|contact|browse|';
$lang->menu->crm->leads     = '名单|leads|browse|mode=assignedTo';
$lang->menu->crm->product   = '产品|product|browse|';
$lang->menu->crm->setting   = '设置|setting|lang|module=product&field=statusList';

if(!isset($lang->order)) $lang->order = new stdclass();
$lang->order->menu = new stdclass();
$lang->order->menu->browse      = '所有订单|order|browse|mode=all';
$lang->order->menu->assignedTo  = '指派给我|order|browse|mode=assignedTo';
$lang->order->menu->contactedBy = '由我联系|order|browse|mode=contactedby';
$lang->order->menu->past        = '亟需联系|order|browse|mode=past';
$lang->order->menu->today       = '今天联系|order|browse|mode=today';
$lang->order->menu->tomorrow    = '明天联系|order|browse|mode=tomorrow';
$lang->order->menu->thisweek    = '本周内联系|order|browse|mode=thisweek';
$lang->order->menu->thismonth   = '本月内联系|order|browse|mode=thismonth';
$lang->order->menu->public      = '公共客户|order|browse|mode=public';
$lang->order->menu->report      = '报表|report|browse|module=order';

if(!isset($lang->contact)) $lang->contact = new stdclass();
$lang->contact->menu = new stdclass();
$lang->contact->menu->browse      = '所有联系人|contact|browse|mode=all';
$lang->contact->menu->contactedBy = '由我联系|contact|browse|mode=contactedby';
$lang->contact->menu->past        = '亟需联系|contact|browse|mode=past';
$lang->contact->menu->today       = '今天联系|contact|browse|mode=today';
$lang->contact->menu->tomorrow    = '明天联系|contact|browse|mode=tomorrow';
$lang->contact->menu->thisweek    = '本周内联系|contact|browse|mode=thisweek';
$lang->contact->menu->thismonth   = '本月内联系|contact|browse|mode=thismonth';

if(!isset($lang->leads)) $lang->leads = new stdclass();
$lang->leads->menu = new stdclass();
$lang->leads->menu->assignedToNull = '未分配|leads|assignedToNull|';
$lang->leads->menu->assignedTo     = array('link' => '指派给我|leads|browse|mode=assignedTo', 'alias' => 'create');
$lang->leads->menu->next           = '下次联系|leads|browse|mode=next';
$lang->leads->menu->ignoredBy      = '由我忽略|leads|browse|mode=ignoredBy&status=ignore';
$lang->leads->menu->public         = '公共名单|leads|browse|mode=all&status=ignore';
$lang->leads->menu->setting        = '设置|leads|setting|';

if(!isset($lang->contract)) $lang->contract = new stdclass();
$lang->contract->menu = new stdclass();
$lang->contract->menu->browse       = '所有合同|contract|browse|mode=all';
$lang->contract->menu->contactedBy  = '由我联系|contract|browse|mode=contactedby';
$lang->contract->menu->unfinished   = '未完成|contract|browse|mode=unfinished';
$lang->contract->menu->unreceived   = '回款中|contract|browse|mode=unreceived';
$lang->contract->menu->undeliveried = '交付中|contract|browse|mode=undeliveried';
$lang->contract->menu->finished     = '已完成|contract|browse|mode=finished';
$lang->contract->menu->canceled     = '已取消|contract|browse|mode=canceled';
$lang->contract->menu->expired      = '已过期|contract|browse|mode=expired';
$lang->contract->menu->expire       = '即将到期|contract|browse|mode=expire';
$lang->contract->menu->report       = '报表|report|browse|module=contract';

$lang->setting = new stdclass();
$lang->setting->menu = new stdclass();
$lang->setting->menu->product         = '产品状态|setting|lang|module=product&field=statusList&appName=sys';
$lang->setting->menu->productCategory = '产品分类|tree|browse|type=product';
$lang->setting->menu->customerSource  = '客户来源|setting|lang|module=customer&field=sourceList&appName=sys';
$lang->setting->menu->customerType    = '客户类型|setting|lang|module=customer&field=typeList&appName=sys';
$lang->setting->menu->customerSize    = '客户规模|setting|lang|module=customer&field=sizeNameList&appName=sys';
$lang->setting->menu->customerLevel   = '客户等级|setting|lang|module=customer&field=levelNameList&appName=sys';
$lang->setting->menu->customerStatus  = '客户状态|setting|lang|module=customer&field=statusList&appName=sys';
$lang->setting->menu->area            = '区域设置|tree|browse|type=area|';
$lang->setting->menu->industry        = '行业设置|tree|browse|type=industry|';
$lang->setting->menu->currency        = '货币设置|setting|lang|module=common&field=currencyList';
$lang->setting->menu->salesGroup      = array('link' => '销售分组|sales|admin|', 'alias' => 'browse,create,edit');
$lang->setting->menu->customerPool    = '客户池|setting|customerpool|';

if(!isset($lang->sales)) $lang->sales = new stdclass();
$lang->sales->menu = $lang->setting->menu;

$lang->dashboard = new stdclass();
if(!isset($lang->resume))  $lang->resume  = new stdclass();
if(!isset($lang->address)) $lang->address = new stdclass();
include (dirname(__FILE__) . '/menuOrder.php');
/* doc/common */
$lang->app = new stdclass();
$lang->app->name = '文档';

$lang->menu->doc = new stdclass();
$lang->menu->doc->dashboard = '首页|doc|index|';
$lang->menu->doc->project   = '项目文档库|doc|alllibs|type=project';
$lang->menu->doc->custom    = '自定义文档库|doc|alllibs|type=custom';

$lang->dashboard = new stdclass();

if(!isset($lang->doc)) $lang->doc = new stdclass();

include (dirname(__FILE__) . '/menuOrder.php');
/* oa/common */
$lang->app = new stdclass();
$lang->app->name = '日常办公';

$lang->menu->oa = new stdclass();
$lang->menu->oa->dashboard = '首页|dashboard|index|';
$lang->menu->oa->my        = '审批|my|review|';
$lang->menu->oa->announce  = '公告|announce|browse|';
$lang->menu->oa->attend    = '考勤|attend|personal|';
$lang->menu->oa->leave     = '请假|leave|personal|';
$lang->menu->oa->makeup    = '补班|makeup|personal|';
$lang->menu->oa->overtime  = '加班|overtime|personal|';
$lang->menu->oa->lieu      = '调休|lieu|personal|';
$lang->menu->oa->trip      = '出差|trip|personal|';
$lang->menu->oa->egress    = '外出|egress|personal|';
$lang->menu->oa->refund    = '报销|refund|personal|';
$lang->menu->oa->holiday   = '节假日|holiday|browse|';
$lang->menu->oa->setting   = '设置|setting|modules|app=oa';

$lang->menu->dashboard = $lang->menu->oa;

$lang->dashboard = new stdclass();

if(!isset($lang->announce)) $lang->announce = new stdclass();
$lang->announce->menu = new stdclass();
$lang->announce->menu->browse   = array('link' => '公告列表|announce|browse|', 'alias' => 'create,edit,view');
$lang->announce->menu->category = '类目管理|tree|browse|type=announce|';

if(!isset($lang->attend)) $lang->attend = new stdclass();
$lang->attend->menu = new stdclass();
$lang->attend->menu->personal   = '我的考勤|attend|personal|';
$lang->attend->menu->department = '部门考勤|attend|department|';
$lang->attend->menu->company    = '公司考勤|attend|company|';
$lang->attend->menu->detail     = '考勤明细|attend|detail|';
$lang->attend->menu->review     = '补录审核|attend|browsereview|';
$lang->attend->menu->stat       = '统计|attend|stat|';
$lang->attend->menu->settings   = array('link' => '设置|attend|settings|', 'alias' => 'personalsettings,setmanager');

if(!isset($lang->leave)) $lang->leave = new stdclass();
$lang->leave->menu = new stdclass();
$lang->leave->menu->personal     = '我的请假|leave|personal|';
$lang->leave->menu->browseReview = '我的审核|leave|browsereview|';
$lang->leave->menu->company      = '所有请假|leave|company|';
$lang->leave->menu->settings     = '设置|leave|setReviewer|';

if(!isset($lang->makeup)) $lang->makeup = new stdclass();
$lang->makeup->menu = new stdclass();
$lang->makeup->menu->personal     = '我的补班|makeup|personal|';
$lang->makeup->menu->browseReview = '我的审核|makeup|browsereview|';
$lang->makeup->menu->company      = '所有补班|makeup|company|';
$lang->makeup->menu->settings     = '设置|makeup|setReviewer|';

if(!isset($lang->overtime)) $lang->overtime = new stdclass();
$lang->overtime->menu = new stdclass();
$lang->overtime->menu->personal     = '我的加班|overtime|personal|';
$lang->overtime->menu->browseReview = '我的审核|overtime|browsereview|';
$lang->overtime->menu->company      = '所有加班|overtime|company|';
$lang->overtime->menu->settings     = '设置|overtime|setReviewer|';

if(!isset($lang->lieu)) $lang->lieu = new stdclass();
$lang->lieu->menu = new stdclass();
$lang->lieu->menu->personal     = '我的调休|lieu|personal|';
$lang->lieu->menu->browseReview = '我的审核|lieu|browsereview|';
$lang->lieu->menu->company      = '所有调休|lieu|company|';
$lang->lieu->menu->settings     = '设置|lieu|setReviewer|';

if(!isset($lang->trip)) $lang->trip = new stdclass();
$lang->trip->menu = new stdclass();
$lang->trip->menu->personal   = '我的出差|trip|personal|';
$lang->trip->menu->department = '部门|trip|department|';
$lang->trip->menu->company    = '公司|trip|company|';

if(!isset($lang->egress)) $lang->egress = new stdclass();
$lang->egress->menu = new stdclass();
$lang->egress->menu->personal   = '我的外出|egress|personal|';
$lang->egress->menu->department = '部门|egress|department|';
$lang->egress->menu->company    = '公司|egress|company|';

if(!isset($lang->refund)) $lang->refund = new stdclass();
$lang->refund->menu = new stdclass();
$lang->refund->menu->personal = array('link' => '我的报销|refund|personal|', 'alias' => 'create,edit');
$lang->refund->menu->review     = '待审批|refund|browsereview|status=unreviewed';
$lang->refund->menu->reviewedBy = '由我审批|refund|browsereview|status=reviewed';
$lang->refund->menu->todo       = '待报销|refund|todo|';
$lang->refund->menu->company    = '所有报销|refund|company|';
$lang->refund->menu->settings   = array('link' => '设置|refund|setreviewer|', 'alias' => 'setcategory,setdepositor,setrefundby');

if(!isset($lang->holiday)) $lang->holiday = new stdclass();
$lang->holiday->menu = new stdclass();
$lang->holiday->menu->all = '所有|holiday|browse|';

$lang->setting->menu = new stdclass();
$lang->setting->menu->modules         = '功能模块|setting|modules|app=oa';
$lang->setting->menu->companyAttend   = '公司考勤设置|attend|settings|module=setting';
$lang->setting->menu->personalAttend  = '个人考勤设置|attend|personalSettings|module=setting';
$lang->setting->menu->deptManager     = '部门经理设置|attend|setManager|module=setting';
$lang->setting->menu->leaveReviewer   = '请假设置|leave|setReviewer|module=setting';
$lang->setting->menu->makeupReviewer  = '补班设置|makeup|setReviewer|module=setting';
$lang->setting->menu->lieuReviewer    = '调休设置|lieu|setReviewer|module=setting';
$lang->setting->menu->overtimeReviewer= '加班设置|overtime|setReviewer|module=setting';
$lang->setting->menu->refundReviewer  = '报销审批人|refund|setReviewer|module=setting';
$lang->setting->menu->refundCategory  = '报销科目|refund|setCategory|module=setting';
$lang->setting->menu->refundDepositor = '报销账户|refund|setDepositor|module=setting';
$lang->setting->menu->refundBy        = '由谁报销|refund|setRefundBy|module=setting';
include (dirname(__FILE__) . '/menuOrder.php');
/* proj/common */
$lang->app = new stdclass();
$lang->app->name = '项目';

$lang->menu->proj = new stdclass();
$lang->menu->proj->dashboard = '首页|dashboard|index|';
$lang->menu->proj->project   = '项目|project|index|status=involved';
$lang->menu->proj->task      = '任务|task|browse|projectID=&mode=assignedTo';

$lang->dashboard = new stdclass();

if(!isset($lang->project)) $lang->project = new stdclass();
$lang->project->menu = new stdclass();
$lang->project->menu->involved  = '我参与的|project|index|status=involved';
$lang->project->menu->doing     = '进行中|project|index|status=doing';
$lang->project->menu->finished  = '已完成|project|index|ststus=finished';
$lang->project->menu->suspend   = '已挂起|project|index|ststus=suspend';

$lang->task->menu = new stdclass();
$lang->task->menu->assignedTo = '指派给我|task|browse|projectID=&mode=assignedTo';
$lang->task->menu->createdBy  = '由我创建|task|browse|projectID=&mode=createdBy';
$lang->task->menu->finishedBy = '由我完成|task|browse|projectID=&mode=finishedBy';

include (dirname(__FILE__) . '/menuOrder.php');
/* team/common */
$lang->app = new stdclass();
$lang->app->name = '团队';

$lang->menu->team = new stdclass();
$lang->menu->team->dashboard = '首页|dashboard|index|';
$lang->menu->team->forum     = '论坛|forum|index|';
$lang->menu->team->blog      = '博客|blog|index|';
$lang->menu->team->user      = '同事|user|colleague|';
$lang->menu->team->company   = '公司|company|index|';
$lang->menu->team->setting   = '设置|tree|browse|type=forum|';

if(!isset($lang->forum)) $lang->forum = new stdclass();

if(!isset($lang->blog)) $lang->blog = new stdclass();
$lang->blog->menu = new stdclass();
$lang->blog->menu->index    = array('link' => '博客列表|blog|index|', 'alias' => 'create, edit');
$lang->blog->menu->category = '类目设置|tree|browse|type=blog';

$lang->setting = new stdclass();
$lang->setting->menu = new stdclass();
$lang->setting->menu->board = '论坛版块|tree|browse|type=forum|';
$lang->setting->menu->blog  = '博客类目|tree|browse|type=blog|';
$lang->setting->menu->dept  = '维护部门|tree|browse|type=dept|';
$lang->setting->menu->role  = '维护角色|setting|lang|module=user&field=roleList&appName=sys|';
include(dirname(__FILE__) . '/menuOrder.php');
/* cash/depositor */
if(!isset($lang->depositor)) $lang->depositor = new stdclass();
$lang->depositor->common          = '账号';
$lang->depositor->id              = '编号';
$lang->depositor->abbr            = '简称';
$lang->depositor->serviceProvider = '服务商';
$lang->depositor->bankProvider    = '开户网点';
$lang->depositor->title           = '账户名称';
$lang->depositor->tags            = '标签';
$lang->depositor->account         = '开户账号';
$lang->depositor->bankcode        = '联行号';
$lang->depositor->public          = '对公账号';
$lang->depositor->type            = '类型';
$lang->depositor->currency        = '货币类型';
$lang->depositor->status          = '状态';
$lang->depositor->createdBy       = '由谁添加';
$lang->depositor->createdDate     = '添加时间';
$lang->depositor->editedBy        = '由谁编辑';
$lang->depositor->editedDate      = '编辑时间';

$lang->depositor->all            = '所有账号';
$lang->depositor->create         = '添加账号';
$lang->depositor->browse         = '浏览账号';
$lang->depositor->edit           = '编辑账号';
$lang->depositor->delete         = '删除账号';
$lang->depositor->view           = '账号详情';
$lang->depositor->forbid         = '禁用';
$lang->depositor->activate       = '激活';
$lang->depositor->export         = '导出';
$lang->depositor->balance        = '余额';
$lang->depositor->saveBalance    = '登记余额';
$lang->depositor->detail         = '明细';
$lang->depositor->normalBrowse   = '正常账号';
$lang->depositor->disabledBrowse = '禁用账号';

$lang->depositor->check         = '对账';
$lang->depositor->start         = '开始日期';
$lang->depositor->end           = '结束日期';
$lang->depositor->originValue   = '起始余额';
$lang->depositor->actualValue   = '实际余额';
$lang->depositor->computedValue = '计算余额';
$lang->depositor->result        = '结果';
$lang->depositor->success       = "<span class='text-success'>对账成功</span>";
$lang->depositor->more          = "<span class='text-danger'>超出实际余额 %s </span>";
$lang->depositor->less          = "<span class='text-danger'>低于实际余额 %s </span>";

$lang->depositor->createBalance = '请先录入账号余额。';

$lang->depositor->typeList['cash']   = '现金账号';
$lang->depositor->typeList['bank']   = '借记卡';
$lang->depositor->typeList['online'] = '在线支付';

$lang->depositor->publicList['1'] = '对公账号';
$lang->depositor->publicList['0'] = '个人账号';

$lang->depositor->providerList['']       = '';
$lang->depositor->providerList['alipay'] = '支付宝';
$lang->depositor->providerList['paypal'] = '贝宝';
$lang->depositor->providerList['tenpay'] = '财付通';
$lang->depositor->providerList['wechat'] = '微信支付';

$lang->depositor->statusList['normal']  = '正常';
$lang->depositor->statusList['disable'] = '停用';

$lang->depositor->placeholder = new stdclass();
$lang->depositor->placeholder->tags     = '多个标签之间用逗号隔开';
$lang->depositor->placeholder->noBccomp = '请先安装bccomp扩展';
/* cash/trade */
if(!isset($lang->trade)) $lang->trade = new stdclass();
$lang->trade->common      = '记账';
$lang->trade->id          = '编号';
$lang->trade->depositor   = '账号';
$lang->trade->type        = '交易';
$lang->trade->currency    = '货币';
$lang->trade->exchangeRate= '汇率';
$lang->trade->trader      = '商户';
$lang->trade->customer    = '客户';
$lang->trade->money       = '金额';
$lang->trade->status      = '状态';
$lang->trade->rate        = '投资回报率';
$lang->trade->desc        = '说明';
$lang->trade->product     = '产品';
$lang->trade->order       = '订单';
$lang->trade->contract    = '合同';
$lang->trade->category    = '科目';
$lang->trade->date        = '交易时间';
$lang->trade->deadline    = '截止日期';
$lang->trade->handlers    = '经手人';
$lang->trade->dept        = '部门';
$lang->trade->receipt     = '收款账户';
$lang->trade->payment     = '付款账户';
$lang->trade->fee         = '手续费';
$lang->trade->transferIn  = '转入金额';
$lang->trade->transferOut = '转出金额';
$lang->trade->schema      = '模板';
$lang->trade->importFile  = '导入文件';
$lang->trade->encode      = '编码';
$lang->trade->createdBy   = '记账人';
$lang->trade->createdDate = '记账日期';
$lang->trade->editedBy    = '最后编辑';
$lang->trade->editedDate  = '编辑时间';
$lang->trade->month       = '月份';
$lang->trade->uploadFile  = '上传附件';
$lang->trade->productLine = '产品线';
$lang->trade->area        = '客户区域';
$lang->trade->industry    = '客户行业';
$lang->trade->level       = '客户级别';
$lang->trade->size        = '客户规模';
$lang->trade->interest    = '借贷利息';
$lang->trade->loanID      = '借贷';
$lang->trade->investID    = '投资';
$lang->trade->loanrate    = '利率';
$lang->trade->outType     = '类型';

$lang->trade->all            = '所有';
$lang->trade->create         = '记账';
$lang->trade->in             = '收入';
$lang->trade->out            = '支出';
$lang->trade->invest         = '投资';
$lang->trade->redeem         = '赎回';
$lang->trade->loan           = '借贷';
$lang->trade->repay          = '还贷';
$lang->trade->createIn       = '记收入';
$lang->trade->createOut      = '记支出';
$lang->trade->transfer       = '转账';
$lang->trade->edit           = '编辑账目';
$lang->trade->detail         = '明细';
$lang->trade->view           = '详情';
$lang->trade->browse         = '账目列表';
$lang->trade->delete         = '删除记录';
$lang->trade->batchCreate    = '批量记账';
$lang->trade->batchEdit      = '批量编辑';
$lang->trade->newTrader      = '新建';
$lang->trade->import         = '导入';
$lang->trade->export         = '导出';
$lang->trade->showImport     = '导入确认';
$lang->trade->fullYear       = '全年';
$lang->trade->quarter        = '季度';
$lang->trade->export2Excel   = '导出Excel';
$lang->trade->compare        = '年度对比表';
$lang->trade->setReportUnit  = '设置报表单位';
$lang->trade->settings       = '记账设置';
$lang->trade->manageCategory = '维护科目';

$lang->trade->settingList['trader']       = '必须选择商户';
$lang->trade->settingList['product']      = '必须选择产品';
$lang->trade->settingList['dept']         = '必须选择部门';
$lang->trade->settingList['category']     = '必须选择科目';
$lang->trade->settingList['lastCategory'] = '必须选择末级科目';

$lang->trade->report = new stdclass();
$lang->trade->report->common      = '报表'; 
$lang->trade->report->annual      = '年度收支表'; 
$lang->trade->report->month       = '月度收支表'; 
$lang->trade->report->compare     = '年度对比表';
$lang->trade->report->create      = '生成报表';
$lang->trade->report->selectYears = '选择年份';
$lang->trade->report->undefined   = '未定义';
$lang->trade->report->compareTip  = '必须选择两个年份进行比较';
$lang->trade->report->unit        = '单位';

$lang->trade->report->unitList[1]       = '元';
$lang->trade->report->unitList[1000]    = '千元';
$lang->trade->report->unitList[10000]   = '万元';
$lang->trade->report->unitList[1000000] = '百万';

$lang->trade->report->typeList['annual']  = '年度收支表'; 
$lang->trade->report->typeList['compare'] = '年度对比表'; 

$lang->trade->typeList['in']          = '收入';
$lang->trade->typeList['out']         = '支出';
$lang->trade->typeList['transferout'] = '转出';
$lang->trade->typeList['transferin']  = '转入';
$lang->trade->typeList['invest']      = '投资';
$lang->trade->typeList['redeem']      = '赎回';
$lang->trade->typeList['loan']        = '借贷';
$lang->trade->typeList['repay']       = '还贷';

$lang->trade->quarters = new stdclass();
$lang->trade->quarters->Q4 = '10,11,12';
$lang->trade->quarters->Q3 = '07,08,09';
$lang->trade->quarters->Q2 = '04,05,06';
$lang->trade->quarters->Q1 = '01,02,03';

$lang->trade->quarterList['Q1'] = '第一季度';
$lang->trade->quarterList['Q2'] = '第二季度';
$lang->trade->quarterList['Q3'] = '第三季度';
$lang->trade->quarterList['Q4'] = '第四季度';

$lang->trade->monthList['last']  = '上年结转';
$lang->trade->monthList['01']    = '一月';
$lang->trade->monthList['02']    = '二月';
$lang->trade->monthList['03']    = '三月';
$lang->trade->monthList['04']    = '四月';
$lang->trade->monthList['05']    = '五月';
$lang->trade->monthList['06']    = '六月';
$lang->trade->monthList['07']    = '七月';
$lang->trade->monthList['08']    = '八月';
$lang->trade->monthList['09']    = '九月';
$lang->trade->monthList['10']    = '十月';
$lang->trade->monthList['11']    = '十一月';
$lang->trade->monthList['12']    = '十二月';
$lang->trade->monthList['total'] = '总计';

$lang->trade->categoryList['transferin']  = '转入';
$lang->trade->categoryList['transferout'] = '转出';
$lang->trade->categoryList['invest']      = '投资';
$lang->trade->categoryList['redeem']      = '赎回';
$lang->trade->categoryList['loan']        = '借贷';
$lang->trade->categoryList['repay']       = '还贷';

$lang->trade->transferCategoryList['transferin']  = '转入';
$lang->trade->transferCategoryList['transferout'] = '转出';

$lang->trade->objectTypeList['customer'] = '客户支出';
$lang->trade->objectTypeList['order']    = '订单支出';
$lang->trade->objectTypeList['contract'] = '合同支出';

$lang->trade->investTypeList['invest'] = '投资';
$lang->trade->investTypeList['redeem'] = '赎回';

$lang->trade->loanTypeList['loan']  = '借贷';
$lang->trade->loanTypeList['repay'] = '还贷';

$lang->trade->encodeList['gbk']  = 'GBK';
$lang->trade->encodeList['utf8'] = 'UTF-8';

$lang->trade->notEqual = '付款账号不能与收款账号相同。';
$lang->trade->feeDesc  = '%s %s 转入 %s';
$lang->trade->fileNode = '文件格式为csv';

$lang->trade->importedFields = array();
$lang->trade->importedFields['category'] = '项目';
$lang->trade->importedFields['type']     = '交易类型';
$lang->trade->importedFields['trader']   = '商户';
$lang->trade->importedFields['in']       = '收入';
$lang->trade->importedFields['out']      = '支出';
$lang->trade->importedFields['date']     = '时间';
$lang->trade->importedFields['category'] = '科目';
$lang->trade->importedFields['dept']     = '部门';
$lang->trade->importedFields['desc']     = '备注';
$lang->trade->importedFields['fee']      = '手续费';
$lang->trade->importedFields['product']  = '产品';

$lang->trade->statusList['returned']   = '已赎回';
$lang->trade->statusList['returning']  = '赎回中';
$lang->trade->statusList['unReturned'] = '未赎回';
$lang->trade->statusList['repaied']    = '已还贷';
$lang->trade->statusList['repaying']   = '还贷中';
$lang->trade->statusList['unRepaied']  = '未还贷';

$lang->trade->progressList['invest'] = '赎回进度';
$lang->trade->progressList['loan']   = '还贷进度';

$lang->trade->totalIn       = '%s收入%s；';
$lang->trade->totalOut      = '%s支出%s；';
$lang->trade->totalAmount   = '%s收入%s，支出%s，%s；';
$lang->trade->totalInvest   = '%s投资%s，赎回%s，未赎回%s，%s；';
$lang->trade->selectItem    = '选中';
$lang->trade->profit        = '盈';
$lang->trade->loss          = '亏';
$lang->trade->balance       = '收支平衡';
$lang->trade->total         = '总计';

$lang->trade->noTraderMatch = '没有匹配到相应的商户，点击新建';
$lang->trade->unique        = '今天已经有相同金额的账目';
$lang->trade->ignore        = '忽略';
$lang->trade->denied        = '您没有权限浏览此类账目，请联系管理员设置权限。';
$lang->trade->emptyData     = '带有*的内容不能为空';
$lang->trade->detailTip     = '明细总金额和当前交易金额不相等，确定保存当前明细吗？';

$lang->trade->chartList['productLine'] = '按产品线统计';
$lang->trade->chartList['category']    = '按科目统计';
$lang->trade->chartList['area']        = '按客户区域统计';
$lang->trade->chartList['industry']    = '按客户行业统计';
$lang->trade->chartList['size']        = '按客户规模统计';
$lang->trade->chartList['dept']        = '按部门统计';

$lang->trade->excel = new stdclass();
$lang->trade->excel->title = new stdclass();
$lang->trade->excel->title->depositor = '账号盈亏表';

$lang->trade->excel->help = new stdclass();
$lang->trade->excel->help->depositor = '本报表不区分币种。';
/* cash/contact */
$lang->contact->provider      = '所属供应商';
$lang->contact->providerName  = '供应商名称';
/* cash/block */
$lang->block->common    = '区块';
$lang->block->depositor = '付款账号';
$lang->block->lblBlock  = '区块';
$lang->block->admin     = '管理区块';
$lang->block->num       = '数量';
$lang->block->orderBy   = '排序';

$lang->block->availableBlocks = new stdclass();
$lang->block->availableBlocks->depositor = '付款账号';
$lang->block->availableBlocks->trade     = '账目';
$lang->block->availableBlocks->baseFacts = '收支概况';
$lang->block->availableBlocks->provider  = '供应商';
$lang->block->availableBlocks->report    = '报表';

$this->lang->block->orderByList->trade['id_asc']  = 'ID 递增';
$this->lang->block->orderByList->trade['id_desc'] = 'ID 递减';

$this->lang->block->typeList->trade['all']  = '全部';
$this->lang->block->typeList->trade['in']   = '收入';
$this->lang->block->typeList->trade['out']  = '支出';

$this->lang->block->groupByList = new stdclass();
$this->lang->block->groupByList->trade['category'] = '按科目统计';
$this->lang->block->groupByList->trade['dept']     = '按部门统计';

$this->lang->block->orderByList->provider['id_asc']  = 'ID 递增';
$this->lang->block->orderByList->provider['id_desc'] = 'ID 递减';
/* cash/balance */
$lang->balance = new stdclass();

$lang->balance->common    = '余额';
$lang->balance->id        = '编号';
$lang->balance->depositor = '账号';
$lang->balance->currency  = '货币类型';
$lang->balance->money     = '金额';
$lang->balance->desc      = '说明';
$lang->balance->date      = '时间';

$lang->balance->create = '登记余额';
$lang->balance->browse = '账户余额';
$lang->balance->edit   = '编辑余额';
$lang->balance->delete = '删除余额';
/* crm/resume */
if(!isset($lang->resume)) $lang->resume = new stdclass();
$lang->resume->common   = '履历';
$lang->resume->id       = '编号';
$lang->resume->contact  = '联系人';
$lang->resume->customer = '公司';
$lang->resume->maker    = '决策人';
$lang->resume->dept     = '部门';
$lang->resume->title    = '职位';
$lang->resume->address  = '公司地址';
$lang->resume->join     = '入职时间';
$lang->resume->left     = '离职时间';
$lang->resume->time     = '时间';

$lang->resume->browse = '浏览履历';
$lang->resume->delete = '删除履历';
$lang->resume->create = '新增履历';
$lang->resume->edit   = '修改公司信息';
$lang->resume->leave  = '离职';

$lang->resume->showJoin = '入职：%s';
$lang->resume->showLeft = ' 离职：%s';
/* crm/order */
if(!isset($lang->order)) $lang->order = new stdclass();
$lang->order->common         = '订单';
$lang->order->id             = '编号';
$lang->order->name           = '名称';
$lang->order->product        = '产品';
$lang->order->productLine    = '产品线';
$lang->order->customer       = '客户';
$lang->order->contact        = '联系人';
$lang->order->team           = '团队';
$lang->order->currency       = '货币类型';
$lang->order->plan           = '计划金额';
$lang->order->real           = '成交金额';
$lang->order->planShort      = '计划';
$lang->order->realShort      = '成交';
$lang->order->amount         = '金额';
$lang->order->status         = '状态';
$lang->order->createdBy      = '由谁创建';
$lang->order->createdDate    = '创建时间';
$lang->order->assignedTo     = '指派给';
$lang->order->assignedBy     = '由谁指派';
$lang->order->assignedDate   = '指派时间';
$lang->order->signedBy       = '由谁签约';
$lang->order->signedDate     = '签约时间';
$lang->order->payedDate      = '付款时间';
$lang->order->closedBy       = '由谁关闭';
$lang->order->closedDate     = '关闭时间';
$lang->order->closedReason   = '关闭原因';
$lang->order->closedNote     = '备注';
$lang->order->activatedBy    = '由谁激活';
$lang->order->activatedDate  = '激活时间';
$lang->order->contactedBy    = '由谁联系';
$lang->order->contactedDate  = '最后联系';
$lang->order->nextDate       = '下次联系';
$lang->order->editedBy       = '最后修改';
$lang->order->editedDate     = '最后修改日期';
$lang->order->createCustomer = '新建';
$lang->order->createProduct  = '新建';

$lang->order->list          = '订单列表';
$lang->order->browse        = '浏览订单';
$lang->order->create        = '创建订单';
$lang->order->record        = '沟通';
$lang->order->edit          = '编辑订单';
$lang->order->delete        = '删除订单';
$lang->order->view          = '订单详情';
$lang->order->close         = '关闭订单';
$lang->order->sign          = '签约';
$lang->order->assign        = '订单指派';
$lang->order->activate      = '激活';
$lang->order->export        = '导出';

$lang->order->statusList['normal'] = '正常';
$lang->order->statusList['signed'] = '已签约';
$lang->order->statusList['closed'] = '已关闭';

$lang->order->closedReasonList['']          = '';
$lang->order->closedReasonList['payed']     = '已付款';
$lang->order->closedReasonList['failed']    = '失败';
$lang->order->closedReasonList['postponed'] = '延期';

$lang->order->titleLBL  = "%s购买%s (%s)";
$lang->order->basicInfo = "基本信息";
$lang->order->lifetime  = "订单的一生";

$lang->order->totalAmount   = '本页订单计划金额：%s，成交金额：%s；';
$lang->order->infoBuy       = "%s 购买 %s。";
$lang->order->infoContract  = '签署合同：%s。';
$lang->order->infoAmount    = '计划金额：%s，成交金额：%s。';
$lang->order->infoContacted = '最后联系：%s。';
$lang->order->infoNextDate  = '下次联系：%s。';
$lang->order->deny          = '您没有创建%s的权限。';
/* crm/contact */
if(!isset($lang->contact)) $lang->contact = new stdclass();
$lang->contact->common         = '联系人';
$lang->contact->id             = '编号';
$lang->contact->customer       = '所属客户';
$lang->contact->customerName   = '客户名称';
$lang->contact->realname       = '真实姓名';
$lang->contact->nickname       = '昵称';
$lang->contact->origin         = '来源';
$lang->contact->status         = '状态';
$lang->contact->avatar         = '头像';
$lang->contact->birthday       = '生日';
$lang->contact->gender         = '性别';
$lang->contact->email          = '邮箱';
$lang->contact->skype          = 'Skype';
$lang->contact->qq             = 'QQ';
$lang->contact->yahoo          = '雅虎';
$lang->contact->gtalk          = 'GTalk';
$lang->contact->wangwang       = '旺旺';
$lang->contact->site           = '网址';
$lang->contact->mobile         = '手机';
$lang->contact->phone          = '电话';
$lang->contact->company        = '公司';
$lang->contact->fax            = '传真';
$lang->contact->weibo          = '微博';
$lang->contact->weixin         = '微信';
$lang->contact->desc           = '简介';
$lang->contact->createdBy      = '由谁添加';
$lang->contact->createdDate    = '添加时间';
$lang->contact->editedBy       = '由谁编辑';
$lang->contact->editedDate     = '编辑时间';
$lang->contact->contactedBy    = '由谁联系';
$lang->contact->contactedDate  = '联系时间';
$lang->contact->nextDate       = '下次联系';
$lang->contact->assignedTo     = '指派给';
$lang->contact->newCustomer    = '新建';
$lang->contact->uploadAvatar   = '上传头像';
$lang->contact->changeAvatar   = '更换头像';
$lang->contact->selectCustomer = '选择已有客户';

$lang->contact->browse         = '浏览联系人';
$lang->contact->block          = '联系人区块';
$lang->contact->delete         = '删除联系人';
$lang->contact->create         = '添加联系人';
$lang->contact->list           = '联系人列表';
$lang->contact->edit           = '编辑联系人';
$lang->contact->view           = '联系人详情';
$lang->contact->resume         = '履历';
$lang->contact->address        = '地址';
$lang->contact->record         = '沟通';
$lang->contact->qrcode         = '二维码';
$lang->contact->vcard          = '二维码名片';
$lang->contact->import         = '导入';
$lang->contact->export         = '导出';
$lang->contact->exportTemplate = '导出模板';
$lang->contact->leads          = '名单';
$lang->contact->apply          = '申请';
$lang->contact->assign         = '指派';

$lang->contact->basicInfo   = '基本信息';
$lang->contact->contactInfo = '联系方式';

$lang->contact->leftAt       = '已于%s离职';
$lang->contact->failedAvatar = '头像上传失败';
$lang->contact->emailTip     = '多个邮箱之间用逗号或者空格隔开';

$lang->contact->noFile       = '没有文件';
$lang->contact->importResult = '%s条数据导入成功，%s条数据导入失败，失败数据如下：';
$lang->contact->failReason   = '原因';
$lang->contact->showImport   = '查看已导入联系人';
$lang->contact->template     = '联系人模板';

$lang->contact->genderList['m'] = '男';
$lang->contact->genderList['f'] = '女';
$lang->contact->genderList['u'] = '';
/* crm/block */
$lang->block->common   = '区块';
$lang->block->num      = '数量';
$lang->block->type     = '类型';
$lang->block->orderBy  = '排序';
$lang->block->status   = '状态';
$lang->block->actions  = '操作';
$lang->block->lblBlock = '区块';

$lang->block->admin    = '管理区块';
$lang->block->availableBlocks = new stdclass();

$lang->block->availableBlocks->order    = '订单列表';
//$lang->block->availableBlocks->task    = '我的任务';
$lang->block->availableBlocks->contract = '合同列表';
$lang->block->availableBlocks->customer = '客户列表';

$lang->block->orderByList = new stdclass();

$lang->block->orderByList->order = array();
$lang->block->orderByList->order['id_asc']       = 'ID 递增 ';
$lang->block->orderByList->order['id_desc']      = 'ID 递减';
$lang->block->orderByList->order['customer_asc'] = '客户';
$lang->block->orderByList->order['product_asc']  = '产品';

$lang->block->orderByList->task = array();
$lang->block->orderByList->task['id_asc']        = 'ID 递增';
$lang->block->orderByList->task['id_desc']       = 'ID 递减';
$lang->block->orderByList->task['pri_asc']       = '优先级递增';
$lang->block->orderByList->task['pri_desc']      = '优先级递减';
$lang->block->orderByList->task['deadline_asc']  = '截止日期递增';
$lang->block->orderByList->task['deadline_desc'] = '截止日期递减';

$lang->block->orderByList->contract = array();
$lang->block->orderByList->contract['id_asc']       = 'ID 递增';
$lang->block->orderByList->contract['id_desc']      = 'ID 递减';
$lang->block->orderByList->contract['customer_asc'] = '客户';
$lang->block->orderByList->contract['amount_asc']   = '金额递增';
$lang->block->orderByList->contract['amount_desc']  = '金额递减';

$lang->block->orderByList->customer['id_asc']       = 'ID 递增';
$lang->block->orderByList->customer['id_desc']      = 'ID 递减';

$lang->block->typeList = new stdclass();

$lang->block->typeList->order['assignedTo']   = '指派给我';
$lang->block->typeList->order['createdBy']    = '由我创建';
$lang->block->typeList->order['signedBy']     = '由我签约';
$lang->block->typeList->order['closedBy']     = '由我关闭';
$lang->block->typeList->order['activatedBy']  = '由我激活';
$lang->block->typeList->order['normalstatus'] = '正常';
$lang->block->typeList->order['signedstatus'] = '已签约';
$lang->block->typeList->order['closedstatus'] = '已关闭';

$lang->block->typeList->contract['returnedBy']     = '由我回款';
$lang->block->typeList->contract['deliveredBy']    = '由我交付';
$lang->block->typeList->contract['createdBy']      = '由我创建';
$lang->block->typeList->contract['canceledBy']     = '由我取消';
$lang->block->typeList->contract['normalstatus']   = '正常';
$lang->block->typeList->contract['closedstatus']   = '已完成';
$lang->block->typeList->contract['canceledstatus'] = '已取消';

$lang->block->typeList->customer['today']    = '今天联系';
$lang->block->typeList->customer['thisweek'] = '本周联系';
/* crm/sales */
if(!isset($lang->sales)) $lang->sales = new stdclass();
$lang->sales->common = '销售分组';
$lang->sales->admin  = '分组权限';
$lang->sales->browse = '管理分组';
$lang->sales->list   = '分组列表';
$lang->sales->create = '添加分组';
$lang->sales->edit   = '编辑';
$lang->sales->delete = '删除';

$lang->sales->id     = '编号';
$lang->sales->name   = '名称';
$lang->sales->desc   = '描述';
$lang->sales->user   = '用户';

$lang->sales->group  = '分组';
$lang->sales->priv   = '权限';

$lang->sales->viewTip      = '浏览';
$lang->sales->editTip      = '编辑';
$lang->sales->currentGroup = '当前组';
$lang->sales->member       = '组内成员';
/* crm/address */
if(!isset($lang->address)) $lang->address = new stdclass();
$lang->address->common   = '地址管理';
$lang->address->title    = '名称';
$lang->address->country  = '国家';
$lang->address->province = '省';
$lang->address->city     = '市';
$lang->address->area     = '区域';
$lang->address->location = '位置';

$lang->address->browse = '浏览地址';
$lang->address->delete = '删除地址';
$lang->address->create = '新建地址';
$lang->address->edit   = '修改地址';
/* crm/contract */
if(!isset($lang->contract)) $lang->contract = new stdclass();
$lang->contract->common = '合同';

$lang->contract->id            = '编号';
$lang->contract->order         = '签约订单';
$lang->contract->customer      = '所属客户';
$lang->contract->name          = '名称';
$lang->contract->code          = '合同编号';
$lang->contract->amount        = '金额';
$lang->contract->currency      = '货币类型';
$lang->contract->all           = '合同总额';
$lang->contract->thisAmount    = '本次回款';
$lang->contract->items         = '主要条款';
$lang->contract->begin         = '开始日期';
$lang->contract->end           = '结束日期';
$lang->contract->dateRange     = '起止日期';
$lang->contract->delivery      = '交付';
$lang->contract->deliveredBy   = '由谁交付';
$lang->contract->deliveredDate = '交付时间';
$lang->contract->return        = '回款';
$lang->contract->returnedBy    = '由谁回款';
$lang->contract->returnedDate  = '回款时间';
$lang->contract->status        = '状态';
$lang->contract->contact       = '联系人';
$lang->contract->address       = '合同地址';
$lang->contract->signedBy      = '由谁签署';
$lang->contract->signedDate    = '签署日期';
$lang->contract->finishedBy    = '由谁完成';
$lang->contract->finishedDate  = '完成时间';
$lang->contract->canceledBy    = '由谁取消';
$lang->contract->canceledDate  = '取消时间';
$lang->contract->createdBy     = '由谁创建';
$lang->contract->createdDate   = '创建时间';
$lang->contract->editedBy      = '最后修改';
$lang->contract->editedDate    = '最后修改时间';
$lang->contract->handlers      = '贡献者';
$lang->contract->contactedBy   = '由谁联系';
$lang->contract->contactedDate = '最后联系';
$lang->contract->nextDate      = '下次联系';
$lang->contract->product       = '产品';
$lang->contract->productLine   = '产品线';
$lang->contract->files         = '附件';
$lang->contract->createAddress = '新建';

$lang->contract->browse           = '浏览合同';
$lang->contract->receive          = '回款';
$lang->contract->cancel           = '取消合同';
$lang->contract->view             = '合同详情';
$lang->contract->finish           = '完成合同';
$lang->contract->record           = '沟通';
$lang->contract->delete           = '删除合同';
$lang->contract->list             = '合同列表';
$lang->contract->create           = '创建合同';
$lang->contract->edit             = '编辑合同';
$lang->contract->setting          = '系统设置';
$lang->contract->uploadFile       = '上传附件';
$lang->contract->lifetime         = '合同的一生';
$lang->contract->returnRecords    = '回款记录';
$lang->contract->deliveryRecords  = '交付记录';
$lang->contract->completeReturn   = '完成回款';
$lang->contract->completeDelivery = '完成交付';
$lang->contract->editReturn       = '编辑回款';
$lang->contract->editDelivery     = '编辑交付';
$lang->contract->deleteReturn     = '删除回款';
$lang->contract->deleteDelivery   = '删除交付';
$lang->contract->export           = '导出';
$lang->contract->totalReturn      = '回款合计';
$lang->contract->tradeList        = '收支记录';

$lang->contract->deliveryList[]        = '';
$lang->contract->deliveryList['wait']  = '等待交付';
$lang->contract->deliveryList['doing'] = '交付中';
$lang->contract->deliveryList['done']  = '交付完成';

$lang->contract->returnList[]        = '';
$lang->contract->returnList['wait']  = '等待回款';
$lang->contract->returnList['doing'] = '回款中';
$lang->contract->returnList['done']  = '回款完成';

$lang->contract->statusList[]           = '';
$lang->contract->statusList['normal']   = '正常';
$lang->contract->statusList['closed']   = '已完成';
$lang->contract->statusList['canceled'] = '已取消';

$lang->contract->codeUnitList[]        = '';
$lang->contract->codeUnitList['Y']     = '年';
$lang->contract->codeUnitList['m']     = '月';
$lang->contract->codeUnitList['d']     = '日';
$lang->contract->codeUnitList['fix']   = '固定值';
$lang->contract->codeUnitList['input'] = '输入值';

$lang->contract->placeholder = new stdclass();
$lang->contract->placeholder->real = '成交金额';

$lang->contract->totalAmount        = '本页合同总金额：%s，已回款：%s，其中本月回款：%s；';
$lang->contract->returnInfo         = "<p>%s, 由 <strong>%s</strong> 回款%s。</p>";
$lang->contract->deliveryInfo       = "<p>%s由%s交付。</p>";
$lang->contract->deleteReturnInfo   = "%s的回款%s";
$lang->contract->deleteDeliveryInfo = "%s的交付";

$lang->plan = new stdclass();
$lang->plan->amount = $lang->contract->thisAmount;
/* crm/leads */
if(!isset($lang->leads)) $lang->leads = new stdclass();

$lang->leads->common         = '名单';
$lang->leads->assignedToNull = '未分配';
$lang->leads->browse         = '浏览名单';
$lang->leads->create         = '添加名单';
$lang->leads->edit           = '编辑名单';
$lang->leads->delete         = '删除名单';
$lang->leads->view           = '名单详情';
$lang->leads->apply          = '申请';
$lang->leads->assign         = '指派';
$lang->leads->transform      = '确认';
$lang->leads->ignore         = '忽略';
$lang->leads->settings       = '设置';
$lang->leads->applyRule      = '派发规则';

$lang->leads->list = '名单列表';

$lang->leads->applyLimit   = '每次申请记录数';
$lang->leads->applyRemain  = '最多未处理记录数';
$lang->leads->ignoreReason = '原因';

$lang->leads->tips = new stdclass();
$lang->leads->tips->apply       = '请先处理现有的名单联系人。';
$lang->leads->tips->applyRemain = '未处理的名单数低于此值才可以再次申请';
/* doc/block */
$lang->block->common   = '区块';
$lang->block->lblBlock = '区块';
$lang->block->admin    = '管理区块';
$lang->block->type     = '类型';
$lang->block->waitTask = '未完成';
$lang->block->doneTask = '已完成';
$lang->block->rate     = '进度';

$lang->block->availableBlocks = new stdclass();

$lang->block->num     = '数量';
$lang->block->orderBy = '排序';
$lang->block->status  = '状态';
$lang->block->asc     = '正序';
$lang->block->desc    = '倒序';
$lang->block->actions = '操作';

$lang->block->orderByList = new stdclass();
/* doc/doc */
if(!isset($lang->doc)) $lang->doc = new stdclass();
$lang->doc->common         = '文档视图';
$lang->doc->id             = '文档编号';
$lang->doc->product        = '所属产品';
$lang->doc->project        = '所属项目';
$lang->doc->lib            = '所属文档库';
$lang->doc->category       = '所属分类';
$lang->doc->title          = '文档标题';
$lang->doc->digest         = '文档摘要';
$lang->doc->comment        = '文档备注';
$lang->doc->type           = '文档类型';
$lang->doc->content        = '文档正文';
$lang->doc->keywords       = '关键字';
$lang->doc->url            = '文档URL';
$lang->doc->files          = '附件';
$lang->doc->views          = '查阅次数';
$lang->doc->createdBy      = '由谁添加';
$lang->doc->createdDate    = '添加时间';
$lang->doc->editedBy       = '由谁编辑';
$lang->doc->editedDate     = '编辑时间';
$lang->doc->basicInfo      = '基本信息';
$lang->doc->deleted        = '已删除';

$lang->doc->index          = '首页';
$lang->doc->create         = '创建文档';
$lang->doc->edit           = '编辑文档';
$lang->doc->delete         = '删除文档';
$lang->doc->browse         = '文档列表';
$lang->doc->view           = '文档详情';
$lang->doc->manageType     = '维护分类';
$lang->doc->showFiles      = '附件库';
$lang->doc->sort           = '文档库排序';

$lang->doc->libName        = '文档库名称';
$lang->doc->libType        = '文档库类型';
$lang->doc->allLibs        = '所有文档库';
$lang->doc->projectLibs    = '项目文档库';
$lang->doc->customLibs     = '自定义文档库';
$lang->doc->projectMainLib = '项目主库';
$lang->doc->fileLib        = '附件库';

$lang->doc->createLib      = '创建文档库';
$lang->doc->editLib        = '编辑文档库';
$lang->doc->deleteLib      = '删除文档库';
$lang->doc->fixedMenu      = '固定到菜单栏';
$lang->doc->removedMenu    = '从菜单栏移除';

$lang->doc->editCategory   = '编辑分类';
$lang->doc->deleteCategory = '删除分类';

$lang->doc->allProject     = '所有项目';

$lang->doc->private        = '设为私密';
$lang->doc->users          = '授权用户';
$lang->doc->groups         = '授权分组';

$lang->doc->libTypeList = array();
$lang->doc->libTypeList['custom']  = '自定义文档库';
$lang->doc->libTypeList['project'] = '项目文档库';

$lang->doc->types['text'] = '文档';
$lang->doc->types['url']  = '链接';

$lang->doc->browseType = '浏览方式';
$lang->doc->browseTypeList['list'] = '列表';
$lang->doc->browseTypeList['menu'] = '目录';
$lang->doc->browseTypeList['tree'] = '树状图';

$lang->doc->confirmDelete      = "您确定删除该文档吗？";
$lang->doc->confirmDeleteLib   = "您确定删除该文档库吗？";
$lang->doc->errorEditSystemDoc = "系统文档库无需修改。";

$lang->doc->placeholder = new stdclass();
$lang->doc->placeholder->url = '相应的链接地址';

$lang->doc->notFound     = '该文档不存在！';
$lang->doc->libNotFound  = '该文档库不存在！';
$lang->doc->libNotEmpty  = '该文档库下存在文档！';
$lang->doc->errorMainLib = '该系统文档库不能删除！';
/* oa/holiday */
if(!isset($lang->holiday)) $lang->holiday = new stdclass();
$lang->holiday->common = '节假日';
$lang->holiday->browse = '浏览';
$lang->holiday->create = '新建';
$lang->holiday->edit   = '编辑';
$lang->holiday->delete = '删除';

$lang->holiday->id    = '编号';
$lang->holiday->name  = '名称';
$lang->holiday->desc  = '描述';
$lang->holiday->type  = '类型';
$lang->holiday->begin = '开始日期';
$lang->holiday->end   = '结束日期';

$lang->holiday->holiday = '假期';

$lang->holiday->typeList['holiday'] = '假期';
$lang->holiday->typeList['working'] = '补班';
/* oa/refund */
if(!isset($lang->refund)) $lang->refund = new stdclass();
$lang->refund->common       = '报销';
$lang->refund->create       = '申请报销';
$lang->refund->browse       = '报销列表';
$lang->refund->personal     = '我的报销';
$lang->refund->company      = '所有报销';
$lang->refund->todo         = '待报销';
$lang->refund->browseReview = '报销审批列表';
$lang->refund->edit         = '编辑报销';
$lang->refund->view         = '详情';
$lang->refund->delete       = '删除';
$lang->refund->review       = '审批';
$lang->refund->detail       = '明细';
$lang->refund->reimburse    = '报销记账';
$lang->refund->cancel       = '撤销';
$lang->refund->commit       = '提交';
$lang->refund->settings     = '设置';
$lang->refund->setReviewer  = '审批人设置';
$lang->refund->setCategory  = '报销科目设置';
$lang->refund->setDepositor = '报销账户设置';
$lang->refund->setRefundBy  = '报销者设置';
$lang->refund->export       = '导出报销记录';

$lang->refund->id               = '编号';
$lang->refund->customer         = '客户';
$lang->refund->order            = '订单';
$lang->refund->contract         = '合同';
$lang->refund->project          = '项目';
$lang->refund->name             = '名称';
$lang->refund->category         = '科目';
$lang->refund->date             = '日期';
$lang->refund->dept             = '部门';
$lang->refund->money            = '金额';
$lang->refund->reviewMoney      = '报销额度';
$lang->refund->currency         = '货币';
$lang->refund->desc             = '描述';
$lang->refund->files            = '附件';
$lang->refund->status           = '状态';
$lang->refund->createdBy        = '申请人';
$lang->refund->createdDate      = '申请日期';
$lang->refund->editedBy         = '编辑者';
$lang->refund->editedDate       = '编辑日期';
$lang->refund->firstReviewer    = '第一审批人';
$lang->refund->firstReviewDate  = '第一审批日期';
$lang->refund->secondReviewer   = '第二审批人';
$lang->refund->secondReviewDate = '第二审批日期';
$lang->refund->refundBy         = '由谁报销';
$lang->refund->refundDate       = '报销日期';
$lang->refund->baseInfo         = '基本信息';
$lang->refund->reason           = '理由';
$lang->refund->reviewer         = '审批人';
$lang->refund->related          = '参与人';
$lang->refund->depositor        = '报销账户';

$lang->refund->objectTypeList['customer'] = '客户支出';
$lang->refund->objectTypeList['order']    = '订单支出';
$lang->refund->objectTypeList['contract'] = '合同支出';
$lang->refund->objectTypeList['project']  = '项目支出';

$lang->refund->statusList['draft']  = '草稿';
$lang->refund->statusList['wait']   = '等待审批';
$lang->refund->statusList['doing']  = '审批中';
$lang->refund->statusList['pass']   = '审批通过';
$lang->refund->statusList['reject'] = '审批拒绝';
$lang->refund->statusList['finish'] = '已报销';

$lang->refund->reviewStatusList['pass']   = '通过';
$lang->refund->reviewStatusList['reject'] = '拒绝';

$lang->refund->reviewAllStatusList['allpass']   = '全部通过';
$lang->refund->reviewAllStatusList['allreject'] = '全部拒绝';

$lang->refund->descTip = "%s 申请报销 %s。";

$lang->refund->notExist          = '记录不存在';
$lang->refund->cancelSuccess     = '撤销成功';
$lang->refund->commitSuccess     = '提交成功';
$lang->refund->uniqueReviewer    = '第一审批人和第二审批人不能是同一个人';
$lang->refund->createTradeTip    = '是否关联记账？';
$lang->refund->secondReviewerTip = '二级审批需要设置二级审批人。';
$lang->refund->correctMoney      = '报销额度不能多于申请金额';
$lang->refund->categoryTips      = '尚未设置支出科目。';
$lang->refund->setExpense        = '设置科目';
$lang->refund->moneyTip          = '低于金额只需要一级审批，高于金额需要二级审批';
$lang->refund->total             = '报销合计：';
$lang->refund->totalMoney        = '%s%s；';

$lang->refund->settings = new stdclass();
$lang->refund->settings->setReviewer  = "审批人|refund|setreviewer";
$lang->refund->settings->setCategory  = "报销科目|refund|setcategory";
$lang->refund->settings->setDepositor = "报销账户|refund|setdepositor";
$lang->refund->settings->setRefundBy  = "由谁报销|refund|setrefundby";
/* oa/block */
$lang->block->common   = '区块';
$lang->block->announce = '系统公告';
$lang->block->lblBlock = '区块';
$lang->block->admin    = '管理区块';
$lang->block->type     = '类型';
$lang->block->waitTask = '未完成';
$lang->block->doneTask = '已完成';
$lang->block->rate     = '进度';

$lang->block->availableBlocks = new stdclass();
$lang->block->availableBlocks->announce = '系统公告';
$lang->block->availableBlocks->attend   = '日历';

$lang->block->num     = '数量';
$lang->block->orderBy = '排序';
$lang->block->status  = '状态';
$lang->block->asc     = '正序';
$lang->block->desc    = '倒序';
$lang->block->actions = '操作';

$lang->block->orderByList = new stdclass();
/* oa/egress */
global $app;
$app->loadLang('trip', 'oa');
$menu = isset($lang->egress->menu) ? $lang->egress->menu : '';
$lang->egress = clone $lang->trip;
$lang->egress->menu = $menu;

$lang->egress->create   = '新建外出';
$lang->egress->common   = '外出';
$lang->egress->browse   = '外出列表';
$lang->egress->personal = '我的外出';
$lang->egress->view     = '外出详情';

$lang->egress->from = '出发地';
$lang->egress->to   = '目的地';

$lang->egress->unique    = '%s 已经存在外出记录';
$lang->egress->sameMonth = '不支持跨月份外出';
/* oa/overtime */
if(!isset($lang->overtime)) $lang->overtime = new stdclass();
$lang->overtime->common = '加班';
$lang->overtime->browse = '加班列表';
$lang->overtime->create = '申请加班';
$lang->overtime->edit   = '编辑';
$lang->overtime->view   = '详情';
$lang->overtime->delete = '删除';
$lang->overtime->review = '审核';
$lang->overtime->cancel = '撤销';
$lang->overtime->commit = '提交';
$lang->overtime->export = '导出加班记录';

$lang->overtime->personal     = '我的加班';
$lang->overtime->browseReview = '审核列表';
$lang->overtime->company      = '所有加班';
$lang->overtime->setReviewer  = '加班设置';
$lang->overtime->batchReview  = '批量审核';
$lang->overtime->batchPass    = '批量通过';

$lang->overtime->id           = '编号';
$lang->overtime->year         = '年';
$lang->overtime->begin        = '开始';
$lang->overtime->end          = '结束';
$lang->overtime->start        = '开始时间';
$lang->overtime->finish       = '结束时间';
$lang->overtime->hours        = '总时长';
$lang->overtime->leave        = '请假记录';
$lang->overtime->type         = '类型';
$lang->overtime->desc         = '事由';
$lang->overtime->status       = '状态';
$lang->overtime->createdBy    = '申请者';
$lang->overtime->createdDate  = '申请时间';
$lang->overtime->reviewedBy   = '审核者';
$lang->overtime->reviewedDate = '审核时间';
$lang->overtime->date         = '日期';
$lang->overtime->time         = '时间';
$lang->overtime->rejectReason = '拒绝原因';

$lang->overtime->typeList['time']    = '工作日加班';
$lang->overtime->typeList['rest']    = '休息日加班';
$lang->overtime->typeList['holiday'] = '节假日加班';

$lang->overtime->statusList['draft']  = '草稿';
$lang->overtime->statusList['wait']   = '等待审核';
$lang->overtime->statusList['doing']  = '审核中';
$lang->overtime->statusList['pass']   = '通过';
$lang->overtime->statusList['reject'] = '拒绝';

$lang->overtime->notExist      = '记录不存在';
$lang->overtime->denied        = '信息访问受限';
$lang->overtime->unique        = '%s 已经存在加班记录';
$lang->overtime->sameMonth     = '不支持跨月份加班';
$lang->overtime->wrongEnd      = '结束时间应该大于开始时间';
$lang->overtime->nodata        = '没有选择数据';
$lang->overtime->reviewSuccess = '审核成功';

$lang->overtime->confirmReview['pass']   = '您确定要执行通过操作吗？';
$lang->overtime->confirmReview['reject'] = '您确定要执行拒绝操作吗？';

$lang->overtime->hoursTip = '小时';

$lang->overtime->reviewStatusList['pass']   = '通过';
$lang->overtime->reviewStatusList['reject'] = '拒绝';
/* oa/trip */
if(!isset($lang->trip)) $lang->trip = new stdclass();
$lang->trip->common = '出差';
$lang->trip->browse = '出差列表';
$lang->trip->create = '新建出差';
$lang->trip->edit   = '编辑';
$lang->trip->view   = '出差详情';
$lang->trip->delete = '删除';

$lang->trip->personal   = '我的出差';
$lang->trip->department = '部门';
$lang->trip->company    = '公司';

$lang->trip->id          = '编号';
$lang->trip->customer    = '客户 / 供应商';
$lang->trip->name        = '名称';
$lang->trip->begin       = '开始';
$lang->trip->end         = '结束';
$lang->trip->from        = '出发城市';
$lang->trip->to          = '目的城市';
$lang->trip->desc        = '事由';
$lang->trip->createdBy   = '创建者';
$lang->trip->createdDate = '创建时间';
$lang->trip->date        = '日期';
$lang->trip->time        = '时间';

$lang->trip->denied    = '信息访问受限';
$lang->trip->unique    = '%s 已经存在出差记录';
$lang->trip->wrongEnd  = '结束时间应该大于开始时间';
$lang->trip->sameMonth = '不支持跨月份出差';
/* oa/announce */
$lang->announce->common = '公告';
$lang->announce->browse = '公告浏览';
$lang->announce->create = '添加公告';
$lang->announce->edit   = '编辑公告';
$lang->announce->view   = '查看公告';
$lang->announce->delete = '删除公告';
/* oa/leave */
if(!isset($lang->leave)) $lang->leave = new stdclass();
$lang->leave->common     = '请假';
$lang->leave->browse     = '请假列表';
$lang->leave->view       = '详情';
$lang->leave->create     = '申请请假';
$lang->leave->edit       = '编辑';
$lang->leave->delete     = '删除';
$lang->leave->review     = '审核';
$lang->leave->cancel     = '撤销';
$lang->leave->commit     = '提交';
$lang->leave->back       = '销假';
$lang->leave->export     = '导出请假记录';
$lang->leave->reviewBack = '审核销假';

$lang->leave->personal       = '我的请假';
$lang->leave->browseReview   = '审核列表';
$lang->leave->company        = '所有请假';
$lang->leave->setReviewer    = '审批人';
$lang->leave->personalAnnual = '个人年假';
$lang->leave->batchReview    = '批量审核';
$lang->leave->batchPass      = '批量通过';

$lang->leave->id           = '编号';
$lang->leave->year         = '年';
$lang->leave->begin        = '开始';
$lang->leave->end          = '结束';
$lang->leave->start        = '开始时间';
$lang->leave->finish       = '结束时间';
$lang->leave->hours        = '总时长';
$lang->leave->backDate     = '报到时间';
$lang->leave->type         = '类型';
$lang->leave->desc         = '事由';
$lang->leave->status       = '状态';
$lang->leave->createdBy    = '申请者';
$lang->leave->createdDate  = '申请时间';
$lang->leave->reviewedBy   = '审核者';
$lang->leave->reviewedDate = '审核时间';
$lang->leave->date         = '日期';
$lang->leave->time         = '时间';
$lang->leave->rejectReason = '拒绝原因';
$lang->leave->account      = '用户';
$lang->leave->dateRange    = '起止时间';
$lang->leave->totalAnnual  = '个人年假总天数';

$lang->leave->typeList['affairs']   = '事假';
$lang->leave->typeList['sick']      = '病假';
$lang->leave->typeList['annual']    = '年假';
$lang->leave->typeList['lieu']      = '调休';
$lang->leave->typeList['home']      = '探亲假';
$lang->leave->typeList['marry']     = '婚假';
$lang->leave->typeList['maternity'] = '产假';

$lang->leave->paid   = '带薪假';
$lang->leave->unpaid = '非带薪假';

$lang->leave->statusList['draft']  = '草稿';
$lang->leave->statusList['wait']   = '等待审核';
$lang->leave->statusList['doing']  = '审核中';
$lang->leave->statusList['pass']   = '通过';
$lang->leave->statusList['reject'] = '拒绝';
$lang->leave->statusList['back']   = '销假待审';

$lang->leave->notExist      = '记录不存在';
$lang->leave->denied        = '信息访问受限';
$lang->leave->unique        = '%s 已经存在请假记录';
$lang->leave->sameMonth     = '不支持跨月份请假';
$lang->leave->wrongEnd      = '结束时间应该大于开始时间';
$lang->leave->wrongBackDate = '报到时间应该大于开始时间';
$lang->leave->nodata        = '没有选择数据';
$lang->leave->reviewSuccess = '审核成功';

$lang->leave->confirmReview['pass']   = '您确定要执行通过操作吗？';
$lang->leave->confirmReview['reject'] = '您确定要执行拒绝操作吗？';

$lang->leave->hoursTip  = '小时';
$lang->leave->annualTip = '剩余可用年假 %s 天';

$lang->leave->reviewStatusList['pass']   = '通过';
$lang->leave->reviewStatusList['reject'] = '拒绝';

$lang->leave->settings = new stdclass();
$lang->leave->settings->setReviewer    = "审批人|leave|setreviewer";
$lang->leave->settings->personalAnnual = "个人年假|leave|personalannual";
/* oa/makeup */
if(!isset($lang->makeup)) $lang->makeup = new stdclass();
$lang->makeup->common = '补班';
$lang->makeup->browse = '补班列表';
$lang->makeup->create = '申请补班';
$lang->makeup->edit   = '编辑';
$lang->makeup->view   = '详情';
$lang->makeup->delete = '删除';
$lang->makeup->review = '审核';
$lang->makeup->cancel = '撤销';
$lang->makeup->commit = '提交';
$lang->makeup->export = '导出补班记录';

$lang->makeup->personal     = '我的补班';
$lang->makeup->browseReview = '审核列表';
$lang->makeup->company      = '所有补班';
$lang->makeup->setReviewer  = '补班设置';
$lang->makeup->batchReview  = '批量审核';
$lang->makeup->batchPass    = '批量通过';

$lang->makeup->id           = '编号';
$lang->makeup->year         = '年';
$lang->makeup->begin        = '开始';
$lang->makeup->end          = '结束';
$lang->makeup->start        = '开始时间';
$lang->makeup->finish       = '结束时间';
$lang->makeup->hours        = '总时长';
$lang->makeup->leave        = '请假记录';
$lang->makeup->type         = '类型';
$lang->makeup->desc         = '事由';
$lang->makeup->status       = '状态';
$lang->makeup->createdBy    = '申请者';
$lang->makeup->createdDate  = '申请时间';
$lang->makeup->reviewedBy   = '审核者';
$lang->makeup->reviewedDate = '审核时间';
$lang->makeup->date         = '日期';
$lang->makeup->time         = '时间';
$lang->makeup->rejectReason = '拒绝原因';

$lang->makeup->typeList['compensate'] = '补班';

$lang->makeup->statusList['draft']  = '草稿';
$lang->makeup->statusList['wait']   = '等待审核';
$lang->makeup->statusList['doing']  = '审核中';
$lang->makeup->statusList['pass']   = '通过';
$lang->makeup->statusList['reject'] = '拒绝';

$lang->makeup->notExist      = '记录不存在';
$lang->makeup->denied        = '信息访问受限';
$lang->makeup->unique        = '%s 已经存在补班记录';
$lang->makeup->sameMonth     = '不支持跨月份补班';
$lang->makeup->wrongEnd      = '结束时间应该大于开始时间';
$lang->makeup->nodata        = '没有选择数据';
$lang->makeup->reviewSuccess = '审核成功';

$lang->makeup->confirmReview['pass']   = '您确定要执行通过操作吗？';
$lang->makeup->confirmReview['reject'] = '您确定要执行拒绝操作吗？';

$lang->makeup->hoursTip = '小时';

$lang->makeup->reviewStatusList['pass']   = '通过';
$lang->makeup->reviewStatusList['reject'] = '拒绝';
/* oa/attend */
if(!isset($lang->attend)) $lang->attend = new stdclass();
$lang->attend->common       = '考勤';
$lang->attend->personal     = '我的考勤';
$lang->attend->department   = '部门考勤';
$lang->attend->company      = '公司考勤';
$lang->attend->detail       = '考勤明细';
$lang->attend->edit         = '补录';
$lang->attend->edited       = '已补录';
$lang->attend->leave        = '请假';
$lang->attend->leaved       = '已请假';
$lang->attend->makeup       = '补班';
$lang->attend->makeuped     = '已补班';
$lang->attend->lieu         = '调休';
$lang->attend->lieud        = '已调休';
$lang->attend->trip         = '出差';
$lang->attend->triped       = '已出差';
$lang->attend->egress       = '外出';
$lang->attend->egressed     = '已外出';
$lang->attend->overtime     = '加班';
$lang->attend->overtimed    = '已加班';
$lang->attend->review       = '补录审核';
$lang->attend->settings     = '设置';
$lang->attend->export       = '导出';
$lang->attend->stat         = '统计';
$lang->attend->saveStat     = '保存考勤统计';
$lang->attend->exportStat   = '导出考勤统计表';
$lang->attend->exportDetail = '导出考勤明细';
$lang->attend->browseReview = '补录列表';
$lang->attend->batchReview  = '批量审核';
$lang->attend->batchPass    = '批量通过';

$lang->attend->id            = '编号';
$lang->attend->date          = '日期';
$lang->attend->account       = '用户';
$lang->attend->signIn        = '签到';
$lang->attend->signOut       = '签退';
$lang->attend->status        = '状态';
$lang->attend->ip            = 'IP';
$lang->attend->device        = '设备';
$lang->attend->desc          = '描述';
$lang->attend->dayName       = '星期';
$lang->attend->report        = '考勤表';
$lang->attend->AM            = '上午';
$lang->attend->PM            = '下午';
$lang->attend->ipList        = 'IP列表';
$lang->attend->noAttendUsers = '无需考勤者';
$lang->attend->signInClient  = '签到途径';
$lang->attend->rejectReason  = '拒绝原因';

$lang->attend->user          = '用户';
$lang->attend->begin         = '开始';
$lang->attend->end           = '截至';
$lang->attend->search        = '搜索';

$lang->attend->manualIn     = '签到时间';
$lang->attend->manualOut    = '签退时间';
$lang->attend->reason       = '原因';
$lang->attend->reviewStatus = '补录状态';
$lang->attend->reviewedBy   = '审核人';
$lang->attend->reviewedDate = '审核时间';
$lang->attend->deserveDays  = '应出勤天数';
$lang->attend->actualDays   = '实际出勤天数';

$lang->attend->clientList['all']     = '所有';
$lang->attend->clientList['desktop'] = '电脑版';

$lang->attend->statusList['normal']   = '正常';
$lang->attend->statusList['late']     = '迟到';
$lang->attend->statusList['early']    = '早退';
$lang->attend->statusList['both']     = '迟到+早退';
$lang->attend->statusList['absent']   = '旷工';
$lang->attend->statusList['leave']    = '请假';
$lang->attend->statusList['makeup']   = '补班';
$lang->attend->statusList['overtime'] = '加班';
$lang->attend->statusList['lieu']     = '调休';
$lang->attend->statusList['trip']     = '出差';
$lang->attend->statusList['egress']   = '外出';
$lang->attend->statusList['rest']     = '休息日';

$lang->attend->abbrStatusList['normal']   = '√';
$lang->attend->abbrStatusList['late']     = '迟';
$lang->attend->abbrStatusList['early']    = '早';
$lang->attend->abbrStatusList['both']     = '迟+早';
$lang->attend->abbrStatusList['absent']   = '旷';
$lang->attend->abbrStatusList['leave']    = '假';
$lang->attend->abbrStatusList['makeup']   = '补';
$lang->attend->abbrStatusList['overtime'] = '加';
$lang->attend->abbrStatusList['lieu']     = '调';
$lang->attend->abbrStatusList['trip']     = '差';
$lang->attend->abbrStatusList['egress']   = '出';
$lang->attend->abbrStatusList['rest']     = '休';

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

$lang->attend->reasonList['normal']   = '准点上下班';
$lang->attend->reasonList['leave']    = '请假';
$lang->attend->reasonList['makeup']   = '补班';
$lang->attend->reasonList['overtime'] = '加班';
$lang->attend->reasonList['lieu']     = '调休';
$lang->attend->reasonList['trip']     = '出差';
$lang->attend->reasonList['egress']   = '外出';

$lang->attend->reviewStatusList['wait']   = '等待审核';
$lang->attend->reviewStatusList['pass']   = '通过';
$lang->attend->reviewStatusList['reject'] = '拒绝';

$lang->attend->inSuccess  = '签到成功';
$lang->attend->inFail     = '签到失败';
$lang->attend->outSuccess = '签退成功';
$lang->attend->outFail    = '签退失败';

$lang->attend->signInLimit   = '最晚签到';
$lang->attend->signOutLimit  = '最早签退';
$lang->attend->workingDays   = '每周工作天数';
$lang->attend->workingHours  = '每天工作工时';
$lang->attend->mustSignOut   = '必须签退';
$lang->attend->denied        = '信息访问受限';
$lang->attend->nodata        = '没有选择数据';
$lang->attend->reviewSuccess = '审核成功';

$lang->attend->workingDaysList['5']  = "周一～周五";
$lang->attend->workingDaysList['6']  = "周一～周六";
$lang->attend->workingDaysList['7']  = "周一～周日";
$lang->attend->workingDaysList['12'] = "周日～周四";
$lang->attend->workingDaysList['13'] = "周日～周五";

$lang->attend->mustSignOutList['yes'] = '需要';
$lang->attend->mustSignOutList['no']  = '不需要';

$lang->attend->weeks = array('第一周', '第二周', '第三周', '第四周', '第五周', '第六周');

$lang->attend->notice['today']    = "<p>您今天的考勤状态为：%s，<a href='%s' %s>去补录</a>。</p>";
$lang->attend->notice['yestoday'] = "<p>您昨天的考勤状态为：%s，<a href='%s' %s>去补录</a>。</p>";
$lang->attend->notice['absent']   = "没有记录";

$lang->attend->confirmReview['pass']   = '您确定要执行通过操作吗？';
$lang->attend->confirmReview['reject'] = '您确定要执行拒绝操作吗？';

$lang->attend->settings         = '公司考勤设置';
$lang->attend->personalSettings = '个人考勤设置';
$lang->attend->setManager       = '部门经理设置';
$lang->attend->setDept          = '部门设置';

$lang->attend->beginDate = new stdClass();
$lang->attend->beginDate->company  = '公司开始考勤日期';
$lang->attend->beginDate->personal = '个人开始考勤日期';

$lang->attend->note = new stdClass();
$lang->attend->note->ip           = "允许签到的ip，多个ip用逗号隔开。支持IP段，如192.168.1.*";
$lang->attend->note->allip        = '无限制';
$lang->attend->note->IPDenied     = '签到IP受限，无法签到';
$lang->attend->note->beginDate    = '设置开始考勤的日期，在该日期之前不记录考勤状态。如果不设置则根据实际数据记录考勤状态。默认使用公司开始考勤日期计算考勤状态，如果设置了个人开始考勤日期则使用个人日期。';
$lang->attend->note->signInClient = '设置为所有时可以通过任意途径签到，否则只能通过选定的访问方式签到。';

$lang->attend->h = '小时';
$lang->attend->m = '分';
$lang->attend->s = '秒';

$lang->attend->signInClientError = '签到失败！已设置只能通过 %s 签到。';
$lang->attend->waitReviews       = '<strong>%s</strong> 存在未审批的记录，请审批之后再进行统计。';
/* oa/lieu */
if(!isset($lang->lieu)) $lang->lieu = new stdclass();
$lang->lieu->common = '调休';
$lang->lieu->browse = '调休列表';
$lang->lieu->create = '申请调休';
$lang->lieu->edit   = '编辑';
$lang->lieu->view   = '详情';
$lang->lieu->delete = '删除';
$lang->lieu->review = '审核';
$lang->lieu->cancel = '撤销';
$lang->lieu->commit = '提交';

$lang->lieu->personal     = '我的调休';
$lang->lieu->browseReview = '审核列表';
$lang->lieu->company      = '所有调休';
$lang->lieu->setReviewer  = '调休设置';
$lang->lieu->batchReview  = '批量审核';
$lang->lieu->batchPass    = '批量通过';

$lang->lieu->id           = '编号';
$lang->lieu->year         = '年';
$lang->lieu->begin        = '开始';
$lang->lieu->end          = '结束';
$lang->lieu->start        = '开始时间';
$lang->lieu->finish       = '结束时间';
$lang->lieu->hours        = '总时长';
$lang->lieu->overtime     = '加班记录';
$lang->lieu->status       = '状态';
$lang->lieu->desc         = '事由';
$lang->lieu->createdBy    = '申请者';
$lang->lieu->createdDate  = '申请时间';
$lang->lieu->reviewedBy   = '审核者';
$lang->lieu->reviewedDate = '审核时间';
$lang->lieu->date         = '日期';
$lang->lieu->time         = '时间';
$lang->lieu->rejectReason = '拒绝原因';

$lang->lieu->statusList['draft']  = '草稿';
$lang->lieu->statusList['wait']   = '等待审核';
$lang->lieu->statusList['doing']  = '审核中';
$lang->lieu->statusList['pass']   = '通过';
$lang->lieu->statusList['reject'] = '拒绝';

$lang->lieu->confirmReview['pass']   = '您确定要执行通过操作吗？';
$lang->lieu->confirmReview['reject'] = '您确定要执行拒绝操作吗？';

$lang->lieu->notExist      = '记录不存在';
$lang->lieu->checkHours    = '调休时长检测';
$lang->lieu->denied        = '信息访问受限';
$lang->lieu->unique        = '%s 已经存在调休记录';
$lang->lieu->sameMonth     = '不支持跨月份调休';
$lang->lieu->wrongEnd      = '结束时间应该大于开始时间';
$lang->lieu->nodata        = '没有选择数据';
$lang->lieu->reviewSuccess = '审核成功';
$lang->lieu->wrongHours    = '加班时长 <strong>%s</strong> 小时，调休时长不能超过加班时长。';
$lang->lieu->nobccomp      = '请安装bcmath扩展';

$lang->lieu->hoursTip = '小时';

$lang->lieu->checkHoursList['0'] = '不检测调休时长';
$lang->lieu->checkHoursList['1'] = '调休时长不能超过加班时长';

$lang->lieu->reviewStatusList['pass']   = '通过';
$lang->lieu->reviewStatusList['reject'] = '拒绝';
/* proj/block */
$lang->block->common   = '区块';
$lang->block->lblBlock = '区块';
$lang->block->admin    = '管理区块';
$lang->block->type     = '类型';
$lang->block->waitTask = '未完成';
$lang->block->doneTask = '已完成';
$lang->block->rate     = '进度';

$lang->block->availableBlocks = new stdclass();
$lang->block->availableBlocks->task     = '任务列表';
$lang->block->availableBlocks->project  = '项目列表';

$lang->block->num     = '数量';
$lang->block->orderBy = '排序';
$lang->block->status  = '状态';
$lang->block->asc     = '正序';
$lang->block->desc    = '倒序';
$lang->block->actions = '操作';

$lang->block->orderByList = new stdclass();
$lang->block->orderByList->task = array();
$lang->block->orderByList->task['id_asc']        = 'ID 递增';
$lang->block->orderByList->task['id_desc']       = 'ID 递减';
$lang->block->orderByList->task['pri_asc']       = '优先级递增';
$lang->block->orderByList->task['pri_desc']      = '优先级递减';
$lang->block->orderByList->task['deadline_asc']  = '截止日期递增';
$lang->block->orderByList->task['deadline_desc'] = '截止日期递减';

$lang->block->orderByList->project = array();
$lang->block->orderByList->project['createdDate_asc']  = '创建时间递增';
$lang->block->orderByList->project['createdDate_desc'] = '创建时间递减';
$lang->block->orderByList->project['begin_asc']        = '开始时间递增';
$lang->block->orderByList->project['begin_desc']       = '开始时间递减';
$lang->block->orderByList->project['end_asc']          = '结束时间递增';
$lang->block->orderByList->project['end_desc']         = '结束时间递减';

$lang->block->typeList->task['assignedTo'] = '指派给我';
$lang->block->typeList->task['createdBy']  = '由我创建';
$lang->block->typeList->task['finishedBy'] = '由我完成';
$lang->block->typeList->task['closedBy']   = '由我关闭';
$lang->block->typeList->task['canceledBy'] = '由我取消';

$lang->block->statusList->project['involved'] = '我参与的';
$lang->block->statusList->project['doing']    = '进行中';
$lang->block->statusList->project['finished'] = '已完成';
$lang->block->statusList->project['suspend']  = '已挂起';
/* proj/project */
if(!isset($lang->project)) $lang->project = new stdclass();
$lang->project->common     = '项目视图';
$lang->project->browse     = '项目列表';
$lang->project->index      = '项目首页';
$lang->project->create     = "创建项目";
$lang->project->edit       = '修改项目';
$lang->project->view       = '项目详情';
$lang->project->finish     = '完成项目';
$lang->project->delete     = '删除项目';
$lang->project->enter      = '进入';
$lang->project->suspend    = '挂起';
$lang->project->activate   = '激活';
$lang->project->mine       = '我负责:';
$lang->project->other      = '其他：';
$lang->project->deleted    = '已删除';
$lang->project->finished   = '已结束';
$lang->project->suspended  = '已挂起';
$lang->project->noMatched  = '找不到包含"%s"的项目';
$lang->project->search     = '搜索';
$lang->project->import     = '导入';
$lang->project->importTask = '导入任务';
$lang->project->role       = '角色';
$lang->project->project    = '项目';
$lang->project->dateRange  = '起止日期';

$lang->project->id          = '编号';
$lang->project->name        = '项目名称';
$lang->project->status      = '状态';
$lang->project->desc        = '项目描述';
$lang->project->begin       = '开始日期';
$lang->project->manager     = '负责人';
$lang->project->member      = '团队';
$lang->project->end         = '结束日期';
$lang->project->createdBy   = '由谁创建';
$lang->project->createdDate = '创建时间';
$lang->project->fromproject = '所属项目';
$lang->project->whitelist   = '参观者';
$lang->project->doc         = '文档';

$lang->project->confirm = new stdclass();
$lang->project->confirm->activate = '确认激活此项目？';
$lang->project->confirm->suspend  = '确认挂起此项目？';

$lang->project->activateSuccess = '激活操作成功';
$lang->project->suspendSuccess  = '挂起操作成功';
$lang->project->selectProject   = '请选择项目';

$lang->project->note = new stdclass();
$lang->project->note->rate = '按工时计算';
$lang->project->note->task = '任务数';

$lang->project->statusList['doing']    = '进行中';
$lang->project->statusList['finished'] = '已完成';
$lang->project->statusList['suspend']  = '已挂起';

$lang->project->roleList['member']  = '默认';
$lang->project->roleList['senior']  = '管理员';
$lang->project->roleList['limited'] = '受限';

$lang->project->whitelistTip        = '参观者可以查看项目和任务';
$lang->project->roleTip             = "管理员拥有所有权限，默认成员不可删除与自己无关的任务，受限成员仅可操作自己相关任务。";
$lang->project->roleTips['senior']  = "管理员：可以查看、编辑、删除所有任务。";
$lang->project->roleTips['member']  = "默认：可以查看、编辑所有任务，删除与自己相关的任务。";
$lang->project->roleTips['limited'] = "受限：只能查看、编辑与自己相关的任务。";
/* proj/doc */
if(!isset($lang->doc)) $lang->doc = new stdclass();
$lang->doc->common         = '文档视图';
$lang->doc->id             = '文档编号';
$lang->doc->product        = '所属产品';
$lang->doc->project        = '所属项目';
$lang->doc->lib            = '所属文档库';
$lang->doc->category       = '所属分类';
$lang->doc->title          = '文档标题';
$lang->doc->digest         = '文档摘要';
$lang->doc->comment        = '文档备注';
$lang->doc->type           = '文档类型';
$lang->doc->content        = '文档正文';
$lang->doc->keywords       = '关键字';
$lang->doc->url            = '文档URL';
$lang->doc->files          = '附件';
$lang->doc->views          = '查阅次数';
$lang->doc->createdBy      = '由谁添加';
$lang->doc->createdDate    = '添加时间';
$lang->doc->editedBy       = '由谁编辑';
$lang->doc->editedDate     = '编辑时间';
$lang->doc->basicInfo      = '基本信息';
$lang->doc->deleted        = '已删除';

$lang->doc->index          = '首页';
$lang->doc->create         = '创建文档';
$lang->doc->edit           = '编辑文档';
$lang->doc->delete         = '删除文档';
$lang->doc->browse         = '文档列表';
$lang->doc->view           = '文档详情';
$lang->doc->manageType     = '维护分类';
$lang->doc->showFiles      = '附件库';
$lang->doc->sort           = '文档库排序';

$lang->doc->libName        = '文档库名称';
$lang->doc->libType        = '文档库类型';
$lang->doc->allLibs        = '所有文档库';
$lang->doc->projectLibs    = '项目文档库';
$lang->doc->customLibs     = '自定义文档库';
$lang->doc->projectMainLib = '项目主库';
$lang->doc->fileLib        = '附件库';

$lang->doc->createLib      = '创建文档库';
$lang->doc->editLib        = '编辑文档库';
$lang->doc->deleteLib      = '删除文档库';
$lang->doc->fixedMenu      = '固定到菜单栏';
$lang->doc->removedMenu    = '从菜单栏移除';

$lang->doc->editCategory   = '编辑分类';
$lang->doc->deleteCategory = '删除分类';

$lang->doc->allProject     = '所有项目';

$lang->doc->private        = '设为私密';
$lang->doc->users          = '授权用户';
$lang->doc->groups         = '授权分组';

$lang->doc->libTypeList = array();
$lang->doc->libTypeList['custom']  = '自定义文档库';
$lang->doc->libTypeList['project'] = '项目文档库';

$lang->doc->types['text'] = '文档';
$lang->doc->types['url']  = '链接';

$lang->doc->browseType = '浏览方式';
$lang->doc->browseTypeList['list'] = '列表';
$lang->doc->browseTypeList['menu'] = '目录';
$lang->doc->browseTypeList['tree'] = '树状图';

$lang->doc->confirmDelete      = "您确定删除该文档吗？";
$lang->doc->confirmDeleteLib   = "您确定删除该文档库吗？";
$lang->doc->errorEditSystemDoc = "系统文档库无需修改。";

$lang->doc->placeholder = new stdclass();
$lang->doc->placeholder->url = '相应的链接地址';

$lang->doc->notFound     = '该文档不存在';
$lang->doc->libNotFound  = '该文档库不存在';
$lang->doc->errorMainLib = '该系统文档库不能删除！';
/* sys/task */
$lang->task->common = '任务';
$lang->task->list   = '任务列表';

$lang->task->browse    = '浏览任务';
$lang->task->view      = '查看任务';
$lang->task->viewChild = '查看子任务';
$lang->task->create    = '新建任务';
$lang->task->edit      = '编辑任务';
$lang->task->finish    = '任务完成';
$lang->task->start     = '开始任务';
$lang->task->activate  = '激活任务';
$lang->task->cancel    = '取消任务';
$lang->task->close     = '关闭任务';
$lang->task->assignTo  = '指派任务';
$lang->task->delete    = '删除任务';
$lang->task->export    = '导出任务';

$lang->task->batchCreate    = '批量添加';
$lang->task->backToProjects = '返回项目列表'; 
$lang->task->viewAll        = '浏览所有项目任务';
$lang->task->editAll        = '操作所有项目任务';
$lang->task->deleteAll      = '删除所有项目任务';

$lang->task->id             = '编号';
$lang->task->project        = '所属项目';
$lang->task->customer       = '所属客户';
$lang->task->order          = '相关订单';
$lang->task->category       = '所属模块';
$lang->task->name           = '名称';
$lang->task->type           = '任务类型';
$lang->task->pri            = '优先级';
$lang->task->estimate       = '最初预计';
$lang->task->estimateAB     = '预计';
$lang->task->consumed       = '总消耗';
$lang->task->consumedAB     = '消耗';
$lang->task->left           = '预计剩余';
$lang->task->leftAB         = '剩余';
$lang->task->deadline       = '截止日期';
$lang->task->deadlineAB     = '截止';
$lang->task->status         = '任务状态';
$lang->task->statusAB       = '状态';
$lang->task->statusCustom   = '状态排序';
$lang->task->mailto         = '抄送给';
$lang->task->desc           = '任务描述';
$lang->task->createdBy      = '由谁创建';
$lang->task->createdByAB    = '创建者';
$lang->task->createdDate    = '创建日期';
$lang->task->createdDateAB  = '创建';
$lang->task->editedBy       = '由谁编辑';
$lang->task->editedDate     = '编辑时间';
$lang->task->assignedTo     = '指派给';
$lang->task->assignedDate   = '指派日期';
$lang->task->estStarted     = '预计开始';
$lang->task->realStarted    = '实际开始';
$lang->task->finishedBy     = '由谁完成';
$lang->task->finishedByAB   = '完成者';
$lang->task->finishedDate   = '完成时间';
$lang->task->finishedDateAB = '完成';
$lang->task->canceledBy     = '由谁取消';
$lang->task->canceledDate   = '取消时间';
$lang->task->closedBy       = '由谁关闭';
$lang->task->closedDate     = '关闭时间';
$lang->task->closedReason   = '关闭原因';
$lang->task->lastEditedBy   = '最后修改';
$lang->task->lastEditedDate = '最后修改日期';
$lang->task->lastEdited     = '最后编辑';
$lang->task->hour           = '小时';
$lang->task->leftThisTime   = '剩余';
$lang->task->date           = '日期';
$lang->task->multiple       = '多人任务';
$lang->task->multipleAB     = '多人';
$lang->task->team           = '团队';
$lang->task->transmit       = '转交';
$lang->task->transmitTo     = '转交给';
$lang->task->children       = '子任务';
$lang->task->childrenAB     = '子';
$lang->task->parent         = '父任务';
$lang->task->unfinished     = '未完成';
$lang->task->end            = '结束';
$lang->task->myConsumption  = '我的消耗';
$lang->task->recordEstimate = '工时';

$lang->task->confirmFinish     = '"预计剩余"为0，确认将任务状态改为"已完成"吗？';
$lang->task->consumedBefore    = '之前消耗';
$lang->task->mailtoPlaceholder = '选择要发信通知的用户...';

$lang->task->lblPri  = 'P';
$lang->task->lblHour = '(h)';

$lang->task->statusList['']       = ''; 
$lang->task->statusList['wait']   = '未开始';
$lang->task->statusList['doing']  = '进行中';
$lang->task->statusList['done']   = '已完成';
$lang->task->statusList['cancel'] = '已取消';
$lang->task->statusList['closed'] = '已关闭';

$lang->task->typeList['']        = ''; 
$lang->task->typeList['discuss'] = '讨论';
$lang->task->typeList['affair']  = '事务';
$lang->task->typeList['misc']    = '其他';

$lang->task->priList[0]  = '';
$lang->task->priList[1]  = '1';
$lang->task->priList[2]  = '2';
$lang->task->priList[3]  = '3';
$lang->task->priList[4]  = '4';

$lang->task->reasonList['']       = '';
$lang->task->reasonList['done']   = '已完成';
$lang->task->reasonList['cancel'] = '已取消';

$lang->task->createdByMe  = '由我创建';
$lang->task->assignedToMe = '指派给我';
$lang->task->finishedByMe = '由我完成';
$lang->task->untilToday   = '今天到期';
$lang->task->expired      = '已过期';
$lang->task->all          = '所有任务';

$lang->task->basicInfo = '基本信息';
$lang->task->life      = '任务的一生';

$lang->task->kanban  = '看板';
$lang->task->mind    = '脑图';
$lang->task->list    = '列表';
$lang->task->outline = '大纲';

$lang->task->kanbanGroup['']           = '选择分组';
$lang->task->kanbanGroup['status']     = '状态分组';
$lang->task->kanbanGroup['assignedTo'] = '指派给分组';

$lang->task->groups['']           = '选择分组';
$lang->task->groups['status']     = '状态分组';
$lang->task->groups['assignedTo'] = '指派给分组';
$lang->task->groups['createdBy']  = '创建者分组';
$lang->task->groups['finishedBy'] = '完成者分组';
$lang->task->groups['closedBy']   = '关闭者分组';

$lang->task->unkown     = '未指定';
$lang->task->unAssigned = '未指派';

$lang->task->mindMoveTip = '只能将任务移动至二级节点下。';
$lang->task->notAllowed  = '不允许这样操作。';
$lang->task->skipClose   = '任务：%s 不是“已完成”或“已取消”状态，不能关闭！';

$lang->task->groupinfo = "<div class='text-muted'>总计 <strong>%s</strong> 项，未开始 <strong>%s</strong>，进行中 <strong>%s</strong>，已完成 <strong>%s</strong>，已关闭 <strong>%s</strong></div>";
/* sys/package */
$lang->package->common        = '插件管理';
$lang->package->browse        = '浏览插件';
$lang->package->install       = '安装插件';
$lang->package->installAuto   = '自动安装';
$lang->package->installForce  = '强制安装';
$lang->package->uninstall     = '卸载';
$lang->package->activate      = '激活';
$lang->package->deactivate    = '禁用';
$lang->package->obtain        = '获得插件';
$lang->package->view          = '详情';
$lang->package->download      = '下载插件';
$lang->package->downloadAB    = '下载';
$lang->package->upload        = '本地安装';
$lang->package->erase         = '清除';
$lang->package->upgrade       = '升级插件';
$lang->package->agreeLicense  = '我同意该授权';
$lang->package->settemplate   = '设置模板';
$lang->package->search        = '搜索';

$lang->package->structure   = '目录结构';
$lang->package->installed   = '已安装';
$lang->package->deactivated = '被禁用';
$lang->package->available   = '已下载';

$lang->package->id          = '编号';
$lang->package->name        = '名称';
$lang->package->code        = '插件代号';
$lang->package->version     = '版本';
$lang->package->compatible  = '适用版本';
$lang->package->latest      = '<small>最新版本<strong><a href="%s" target="_blank" class="package">%s</a></strong>，兼容蝉知<a href="http://api.ranzhico.com/goto.php?item=latest" target="_blank" class="alert-link"><strong>%s</strong></a></small>';
$lang->package->author      = '作者';
$lang->package->license     = '授权';
$lang->package->intro       = '详情';
$lang->package->abstract    = '简介';
$lang->package->site        = '官网';
$lang->package->addedTime   = '添加时间';
$lang->package->updatedTime = '更新时间';
$lang->package->downloads   = '下载量';
$lang->package->public      = '下载方式';
$lang->package->compatible  = '兼容性';
$lang->package->grade       = '评分';
$lang->package->depends     = '依赖';

$lang->package->publicList[0] = '手工下载';
$lang->package->publicList[1] = '直接下载';

$lang->package->compatibleList[0] = '未知';
$lang->package->compatibleList[1] = '兼容';

$lang->package->byDownloads   = '最多下载';
$lang->package->byAddedTime   = '最新添加';
$lang->package->byUpdatedTime = '最近更新';
$lang->package->bySearch      = '搜索';
$lang->package->byCategory    = '分类浏览';

$lang->package->installFailed            = '%s失败，错误原因如下:';
$lang->package->uninstallFailed          = '卸载失败，错误原因如下:';
$lang->package->confirmUninstall         = '卸载插件会删除或修改相关的数据库，是否继续卸载？';
$lang->package->noticeBackupDB           = '卸载前，建议备份数据库。';
$lang->package->installFinished          = '恭喜您，插件顺利的%s成功！';
$lang->package->refreshPage              = '刷新页面';
$lang->package->uninstallFinished        = '插件已经成功卸载';
$lang->package->deactivateFinished       = '插件已经成功禁用';
$lang->package->activateFinished         = '插件已经成功激活';
$lang->package->eraseFinished            = '插件已经成功清除';
$lang->package->unremovedFiles           = '有一些文件或目录未能删除，需要手工删除';
$lang->package->executeCommands          = '<h3>执行下面的命令来修正这些问题：</h3>';
$lang->package->successDownloadedPackage = '成功下载插件';
$lang->package->successUploadedPackage   = '成功上传插件';
$lang->package->successCopiedFiles       = '成功拷贝文件';
$lang->package->successInstallDB         = '成功安装数据库';
$lang->package->viewInstalled            = '查看已安装插件';
$lang->package->viewAvailable            = '查看可安装插件';
$lang->package->viewDeactivated          = '查看已禁用插件';
$lang->package->backDBFile               = '插件相关数据已经备份到 %s 文件中！';

$lang->package->upgradeExt     = '升级';
$lang->package->installExt     = '安装';
$lang->package->upgradeVersion = '（从%s升级到%s）';

$lang->package->waring = '警告';

$lang->package->errorOccurs                  = '错误：';
$lang->package->errorGetModules              = '从www.ranzhi.org获得插件分类失败。可能是因为网络方面的原因，请检查后重新刷新页面。';
$lang->package->errorGetPackages             = '从www.ranzhi.org获得插件失败。可能是因为网络方面的原因，您可以到 <a href="https://www.ranzhi.org/extension" target="_blank" class="alert-link">www.ranzhi.org</a> 手工下载插件，然后上传安装。';
$lang->package->errorDownloadPathNotFound    = '插件下载存储路径<strong>%s</strong>不存在。<br />linux下面请执行命令：<strong>mkdir -p %s</strong>来修正。';
$lang->package->errorDownloadPathNotWritable = '插件下载存储路径<strong>%s</strong>不可写。<br />linux下面请执行命令：<strong>sudo chmod 777 %s</strong>来修正。';
$lang->package->errorPackageFileExists       = '下载路径已经有一个名为的<strong>%s</strong>附件。<h3>重新%s，<a href="%s" class="alert-link loadInModal">请点击此链接</a></h3>';
$lang->package->errorDownloadFailed          = '下载失败，请重新下载。如果多次重试还不行，请尝试手工下载，然后通过上传功能上传。';
$lang->package->errorMd5Checking             = '下载文件不完整，请重新下载。如果多次重试还不行，请尝试手工下载，然后通过上传功能上传。';
$lang->package->errorExtracted               = '包文件<strong> %s </strong>解压缩失败，可能不是一个有效的zip文件。错误信息如下：<br />%s';
$lang->package->errorCheckIncompatible       = '该插件与然之版本不兼容，%s后可能无法使用。。<h3>您可以选择 <a href="%s" class="loadInModal">强制%s</a> 或者 <a href="#" onclick=parent.location.href="%s">取消</a></h3>';
$lang->package->errorFileConflicted          = '有以下文件冲突：<br />%s <h3>您可以选择 <a href="%s" class="loadInModal">覆盖</a> 或者 <a href="#" onclick=parent.location.href="%s">取消</a></h3>';
$lang->package->errorPackageNotFound         = '包文件 <strong>%s </strong>没有找到，可能是因为自动下载失败。您可以尝试再次下载。';
$lang->package->errorTargetPathNotWritable   = '目标路径 <strong>%s </strong>不可写。';
$lang->package->errorTargetPathNotExists     = '目标路径 <strong>%s </strong>不存在。';
$lang->package->errorInstallDB               = '执行数据库语句失败。错误信息如下：%s';
$lang->package->errorConflicts               = '与插件“%s”冲突！';
$lang->package->errorDepends                 = '以下依赖插件没有安装或版本不正确：<br /><br /> %s';
$lang->package->errorIncompatible            = '该插件与您的蝉知版本不兼容';
$lang->package->errorUninstallDepends        = '插件“%s”依赖该插件，不能卸载';
/* sys/queue */
$lang->queue->common  = '消息队列';
$lang->queue->index   = '首页';
$lang->queue->setting = '设置';

$lang->queue->typeList['mail']     = '邮件';
$lang->queue->typeList['message']  = '浏览器通知';
$lang->queue->typeList['webhook']  = 'Webhook';
$lang->queue->typeList['xuanxuan'] = '喧喧';
/* sys/todo */
if(!isset($lang->todo)) $lang->todo = new stdclass();
$lang->todo->common       = '待办';
$lang->todo->index        = "待办一览";
$lang->todo->browse       = "待办列表";
$lang->todo->create       = "新增待办";
$lang->todo->batchCreate  = "批量添加";
$lang->todo->edit         = "更新待办";
$lang->todo->batchEdit    = "批量编辑";
$lang->todo->view         = "待办详情";
$lang->todo->viewAB       = "详情";
$lang->todo->finish       = "完成";
$lang->todo->batchFinish  = "批量完成";
$lang->todo->export       = "导出";
$lang->todo->delete       = "删除待办";
$lang->todo->browse       = "浏览待办";
$lang->todo->import       = "移动";
$lang->todo->changeStatus = "更改";
$lang->todo->legendBasic  = "基本信息";
$lang->todo->calendar     = "日历";
$lang->todo->assignTo     = "指派";

$lang->todo->id           = '编号';
$lang->todo->account      = '所有者';
$lang->todo->date         = '日期';
$lang->todo->begin        = '开始时间';
$lang->todo->beginAB      = '开始';
$lang->todo->end          = '结束时间';
$lang->todo->endAB        = '结束';
$lang->todo->beginAndEnd  = '起止时间';
$lang->todo->type         = '类型';
$lang->todo->pri          = '优先级';
$lang->todo->name         = '名称';
$lang->todo->status       = '状态';
$lang->todo->desc         = '描述';
$lang->todo->private      = '私人事务';
$lang->todo->idvalue      = '任务或订单';
$lang->todo->assignedTo   = '指派给';
$lang->todo->assignedBy   = '由谁指派';
$lang->todo->assignedDate = '指派时间';
$lang->todo->finishedBy   = '完成者';
$lang->todo->finishedDate = '完成时间';
$lang->todo->closedBy     = '关闭者';
$lang->todo->closedDate   = '关闭时间';
$lang->todo->ranzhi       = '然之';
$lang->todo->task         = '任务';
$lang->todo->bug          = 'Bug';

$lang->todo->confirmTip  = '该Todo关联的是%s #%s，需要修改它吗？';
$lang->todo->assignedTip = '%s 于 %s';
$lang->todo->finishedTip = '%s 于 %s';
$lang->todo->closedTip   = '%s 于 %s';

$lang->todo->statusList['wait']     = '未开始';
$lang->todo->statusList['doing']    = '进行中';
$lang->todo->statusList['done']     = '已完成';
$lang->todo->statusList['closed']   = '已关闭';

$lang->todo->priList[3] = '一般';
$lang->todo->priList[1] = '最高';
$lang->todo->priList[2] = '较高';
$lang->todo->priList[4] = '最低';

$lang->todo->typeList['custom']   = '自定义';
$lang->todo->typeList['task']     = '项目任务';
$lang->todo->typeList['order']    = '订单沟通';
$lang->todo->typeList['customer'] = '客户沟通';

$lang->todo->confirmDelete  = "您确定要删除这条待办吗？";
$lang->todo->successMarked  = "成功切换状态！";
$lang->todo->thisIsPrivate  = '这是一条私人事务。:)';
$lang->todo->lblDisableDate = '暂时不设定时间';
$lang->todo->emptyTodo      = '您今天还没有添加待办。';

$lang->todo->periods['today']      = '今日';
$lang->todo->periods['yesterday']  = '昨日';
$lang->todo->periods['thisWeek']   = '本周';
$lang->todo->periods['lastWeek']   = '上周';
$lang->todo->periods['thisMonth']  = '本月';
$lang->todo->periods['lastmonth']  = '上月';
$lang->todo->periods['thisSeason'] = '本季';
$lang->todo->periods['thisYear']   = '本年';
$lang->todo->periods['future']     = '待定';
$lang->todo->periods['before']     = '未完';
$lang->todo->periods['all']        = '所有';

$lang->todo->batchedittips = '未选择编辑项目';

$lang->todo->action = new stdclass();
$lang->todo->action->finished  = array('main' => '$date, 由 <strong>$actor</strong>完成');
$lang->todo->action->marked    = array('main' => '$date, 由 <strong>$actor</strong> 标记为<strong>$extra</strong>。', 'extra' => 'statusList');
/* sys/article */
$lang->article->common      = '文章维护';
$lang->article->createDraft = '保存草稿';

$lang->article->id          = '编号';
$lang->article->category    = '类目';
$lang->article->categories  = '类目';
$lang->article->title       = '标题';
$lang->article->alias       = '别名';
$lang->article->content     = '内容';
$lang->article->original    = '来源';
$lang->article->copySite    = '来源网站';
$lang->article->copyURL     = '来源URL';
$lang->article->keywords    = '关键字';
$lang->article->summary     = '摘要';
$lang->article->author      = '作者';
$lang->article->editor      = '编辑';
$lang->article->createdDate = '添加时间';
$lang->article->editedDate  = '编辑时间';
$lang->article->status      = '状态';
$lang->article->type        = '类型';
$lang->article->views       = '阅读';
$lang->article->stick       = '置顶级别';
$lang->article->order       = '排序';
$lang->article->private     = '设为私密';
$lang->article->users       = '授权用户';
$lang->article->groups      = '授权分组';
$lang->article->readers     = '已阅读用户';

$lang->article->list        = '文章列表';
$lang->article->admin       = '维护文章';
$lang->article->create      = '发布文章';
$lang->article->edit        = '编辑文章';
$lang->article->files       = '附件';

if(!isset($lang->blog)) $lang->blog = new stdclass();
$lang->blog->admin  = '维护博客';
$lang->blog->list   = '博客列表';
$lang->blog->create = '发布博客';
$lang->blog->edit   = '编辑博客';

if(!isset($lang->announce)) $lang->announce = new stdclass();
$lang->announce->admin  = '维护公告';
$lang->announce->list   = '公告列表';
$lang->announce->create = '发布公告';
$lang->announce->edit   = '编辑公告';

$lang->page = new stdclass();
$lang->page->admin  = '维护单页';
$lang->page->list   = '单页列表';
$lang->page->create = '添加单页';
$lang->page->edit   = '编辑单页';

$lang->article->originalList[1] = '原创';
$lang->article->originalList[0] = '转贴';

$lang->article->statusList['draft']  = '草稿';
$lang->article->statusList['normal'] = '正常';

$lang->article->confirmDelete = '您确定删除该文章吗？';

$lang->article->lblAddedDate = '<strong>添加时间：</strong> %s &nbsp;&nbsp;';
$lang->article->lblAuthor    = "<strong>作者：</strong> %s &nbsp;&nbsp;";
$lang->article->lblSource    = '<strong>来源：</strong>';
$lang->article->lblViews     = '<strong>阅读：</strong>%s';
$lang->article->lblEditor    = '<i>最后编辑：%s 于 %s</i>';
$lang->article->lblReaders   = '%s人已阅读';

$lang->article->prev      = '上一篇';
$lang->article->next      = '下一篇';
$lang->article->none      = '没有了';
$lang->article->directory = '返回目录';
$lang->article->back2Top  = '返回顶部';

$lang->article->note = new stdclass();
$lang->article->note->createdDate = '可以延迟到选定的时间发布。';
/* sys/webapp */
if(!isset($lang->webapp)) $lang->webapp = new stdclass();
$lang->webapp->common = 'WEB应用';
$lang->webapp->index  = '已加应用';
$lang->webapp->obtain = '获得应用';

$lang->webapp->install    = '安装';
$lang->webapp->uninstall  = '删除';
$lang->webapp->useapp     = '运行';
$lang->webapp->view       = '详情';
$lang->webapp->preview    = '预览';
$lang->webapp->installed  = '已添加';
$lang->webapp->edit       = '编辑应用';
$lang->webapp->create     = '创建应用';
$lang->webapp->manageTree = '维护分类';

$lang->webapp->id          = '编号';
$lang->webapp->name        = '名称';
$lang->webapp->url         = '网址';
$lang->webapp->icon        = '图标';
$lang->webapp->module      = '分类';
$lang->webapp->author      = '作者';
$lang->webapp->abstract    = '简介';
$lang->webapp->desc        = '描述';
$lang->webapp->target      = '打开方式';
$lang->webapp->size        = '大小';
$lang->webapp->height      = '高度';
$lang->webapp->addedTime   = '添加时间';
$lang->webapp->updatedTime = '更新时间';
$lang->webapp->downloads   = '安装量';
$lang->webapp->grade       = '评分';
$lang->webapp->addType     = '添加类型';
$lang->webapp->addedBy     = '安装人';
$lang->webapp->addedDate   = '安装日期';
$lang->webapp->views       = '使用次数';
$lang->webapp->packup      = '收起';
$lang->webapp->custom      = '自定义';

$lang->webapp->byDownloads   = '最多下载';
$lang->webapp->byAddedTime   = '最新添加';
$lang->webapp->byUpdatedTime = '最近更新';
$lang->webapp->bySearch      = '搜索';
$lang->webapp->byCategory    = '分类浏览';

$lang->webapp->selectModule = '选择分类：';
$lang->webapp->allModule    = '所有';
$lang->webapp->noModule     = '所有';

$lang->webapp->targetList['']       = '';
$lang->webapp->targetList['blank']  = '新窗口';
$lang->webapp->targetList['iframe'] = '内嵌';

$lang->webapp->width  = '宽度';
$lang->webapp->height = '高度';

$lang->webapp->sizeList['']         = "";
$lang->webapp->sizeList['1024x600'] = "1024 x 600";
$lang->webapp->sizeList['900x600']  = "900 x 600";
$lang->webapp->sizeList['700x600']  = "700 x 600";
$lang->webapp->sizeList['600x500']  = "600 x 500";
$lang->webapp->sizeList['custom']   = "自定义尺寸";

$lang->webapp->addTypeList['system'] = '系统应用';
$lang->webapp->addTypeList['custom'] = '自定义应用';

$lang->webapp->errorOccurs        = '错误：';
$lang->webapp->errorGetModules    = '从www.ranzhi.org获得插件分类失败。可能是因为网络方面的原因，请检查后重新刷新页面。';
$lang->webapp->errorGetExtensions = '从www.ranzhi.org获得插件失败。可能是因为网络方面的原因，请检查后重新刷新页面。';
$lang->webapp->successInstall     = '成功安装应用！';
$lang->webapp->confirmDelete      = '是否删除该应用？';
$lang->webapp->noticeAbstract     = '用一句话介绍应用，不多于30个字';
$lang->webapp->noticeIcon         = '图标大小建议为72x72';
/* sys/install */
$lang->install = new stdclass();
$lang->install->common  = '安装';
$lang->install->next    = '下一步';
$lang->install->pre     = '返回';
$lang->install->reload  = '刷新';
$lang->install->error   = '错误 ';

$lang->install->start            = '开始安装';
$lang->install->keepInstalling   = '继续安装当前版本';
$lang->install->seeLatestRelease = '看看最新的版本';
$lang->install->welcome          = "您睿智地选择了$lang->ranzhi!";
$lang->install->license          = '然之协同使用 Z PUBLIC LICENSE(ZPL) 1.2 授权协议。';
$lang->install->desc             = <<<EOT
<blockquote>
  <strong>{$lang->ranzhi}</strong>由<strong><a href='http://www.cnezsoft.com' target='_blank' class='red'>青岛易软天创网络科技有限公司</a>开发</strong>，
  <!--内置项目、客户、现金流、办公和沟通共五大核心功能模块，-->
  专为中小型团队量身打造，是中小型团队信息化的首选工具！

  官方网站：<a href='http://www.ranzhi.org' target='_blank'>http://www.ranzhi.org</a>
  技术支持: <a href='http://www.ranzhi.org/forum/' target='_blank'>http://www.ranzhi.org/forum/</a>
  您现在正在安装的版本是 <strong class='red'>%s</strong>。
</blockquote>
EOT;

$lang->install->choice     = '您可以选择：';
$lang->install->checking   = '系统检查';
$lang->install->ok         = '通过(√)';
$lang->install->fail       = '失败(×)';
$lang->install->loaded     = '已加载';
$lang->install->unloaded   = '未加载';
$lang->install->exists     = '目录存在 ';
$lang->install->notExists  = '目录不存在 ';
$lang->install->writable   = '目录可写 ';
$lang->install->notWritable= '目录不可写 ';
$lang->install->phpINI     = 'PHP配置文件';
$lang->install->checkItem  = '检查项';
$lang->install->current    = '当前配置';
$lang->install->result     = '检查结果';
$lang->install->action     = '如何修改';

$lang->install->phpVersion = 'PHP版本';
$lang->install->phpFail    = 'PHP版本必须大于5.2.0';

$lang->install->pdo          = 'PDO扩展';
$lang->install->pdoFail      = '修改PHP配置文件，加载PDO扩展。';
$lang->install->pdoMySQL     = 'PDO_MySQL扩展';
$lang->install->pdoMySQLFail = '修改PHP配置文件，加载pdo_mysql扩展。';
$lang->install->tmpRoot      = '临时文件目录';
$lang->install->dataRoot     = '上传文件目录';
$lang->install->sessionRoot  = 'session目录';
$lang->install->mkdir        = '<p>需要创建目录%s。linux下面命令为：<br /> <code>mkdir -p %s</code></p>';
$lang->install->chmod        = '需要修改目录 "%s" 的权限。linux下面命令为：<br /><code>chmod o=rwx -R %s</code>';
$lang->install->sessionChmod = '需要修改目录 "%s" 的权限。linux下面命令为：<br /><code>sudo chmod o=wtx %s</code>';

$lang->install->settingDB  = '设置数据库';
$lang->install->dbHost     = '数据库服务器';
$lang->install->dbHostNote = '如果127.0.0.1无法访问，尝试使用localhost';
$lang->install->dbPort     = '服务器端口';
$lang->install->dbUser     = '数据库用户名';
$lang->install->dbPassword = '数据库密码';
$lang->install->dbName     = '数据库名';
$lang->install->dbPrefix   = '建表使用的前缀';
$lang->install->createDB   = '自动创建数据库';
$lang->install->clearDB    = '清空现有数据';

$lang->install->errorDBName        = "数据库名不能带'.'";
$lang->install->errorConnectDB     = '数据库连接失败。 ';
$lang->install->errorCreateDB      = '数据库创建失败。';
$lang->install->errorDBExists      = '数据库已经存在，继续安装返回上步并选中“清空数据”选项。';
$lang->install->errorCreateTable   = '创建表失败。';

$lang->install->setConfig  = '数据库配置';
$lang->install->key        = '配置项';
$lang->install->value      = '值';
$lang->install->saveConfig = '保存配置文件';
$lang->install->save2File  = '<span class="red">尝试写入配置文件，失败！</span>拷贝上面文本框中的内容，将其保存到 "<strong> %s </strong>"中。';
$lang->install->saved2File = '配置信息已经成功保存到" <strong>%s</strong> "中。您后面还可继续修改此文件。';
$lang->install->errorNotSaveConfig = '还没有保存配置文件';

$lang->install->success  = "安装成功！";
$lang->install->domainIP = '域名映射的IP是：%s';
$lang->install->serverIP = '服务器的内网IP是：%s';
$lang->install->publicIP = '服务器的公网IP是：%s';
$lang->install->setAdmin = '设置管理员';
$lang->install->account  = '帐号';
$lang->install->password = '密码';
$lang->install->errorEmptyPassword = '密码不能为空';

$lang->install->import['area']     = '导入区域数据';
$lang->install->import['industry'] = '导入行业数据';

$lang->install->buildinEntry = new stdclass();
$lang->install->buildinEntry->crm['name']  = '客户管理';
$lang->install->buildinEntry->crm['abbr']  = '客户';
$lang->install->buildinEntry->cash['name'] = '现金记账';
$lang->install->buildinEntry->cash['abbr'] = '记账';
$lang->install->buildinEntry->oa['name']   = '日常办公';
$lang->install->buildinEntry->oa['abbr']   = '办公';
$lang->install->buildinEntry->team['name'] = '团队';
$lang->install->buildinEntry->team['abbr'] = '团队';
$lang->install->buildinEntry->doc['name']  = '文档';
$lang->install->buildinEntry->doc['abbr']  = '文档';
$lang->install->buildinEntry->proj['name'] = '项目';
$lang->install->buildinEntry->proj['abbr'] = '项目';

$lang->install->categoryList[1] = '主营业务收入';
$lang->install->categoryList[2] = '非主营业务收入';
$lang->install->categoryList[3] = '主营业务成本';
$lang->install->categoryList[4] = '非主营业务成本';
$lang->install->categoryList[5] = '理财盈利';
$lang->install->categoryList[6] = '理财亏损';
$lang->install->categoryList[7] = '手续费';
$lang->install->categoryList[8] = '借贷利息';

$lang->install->schemaList[1] = '支付宝';
$lang->install->schemaList[2] = '中信银行简版';

$lang->install->cronList[1] = '监控定时任务';
$lang->install->cronList[2] = '定时备份任务';
$lang->install->cronList[3] = '删除30天前的备份';
$lang->install->cronList[4] = '每日提醒';

$lang->install->groupList[1]['name'] = '管理员';
$lang->install->groupList[1]['desc'] = '管理员拥有前台所有权限';
$lang->install->groupList[2]['name'] = '财务专员';
$lang->install->groupList[2]['desc'] = '财务专员拥有现金流所有权限';
$lang->install->groupList[3]['name'] = '销售经理';
$lang->install->groupList[3]['desc'] = '销售经理拥有客户管理所有权限';
$lang->install->groupList[4]['name'] = '销售人员';
$lang->install->groupList[4]['desc'] = '默认的销售人员权限';
$lang->install->groupList[5]['name'] = '普通用户';
$lang->install->groupList[5]['desc'] = '默认的普通账号权限';
/* sys/my */
$lang->my->common = '我的地盘';

$lang->my->order->common = '任务';

$lang->my->contract->common = '合同';

$lang->my->company->common  = '组织待办';
$lang->my->company->dept    = '部门';
$lang->my->company->all     = '所有';
$lang->my->company->account = '用户';
$lang->my->company->begin   = '开始';
$lang->my->company->end     = '结束';
$lang->my->company->view    = '查看';

$lang->my->task->common     = '我的任务';
$lang->my->task->assignedTo = '指派给我';
$lang->my->task->createdBy  = '由我创建';
$lang->my->task->finishedBy = '由我完成';
$lang->my->task->closedBy   = '由我关闭';
$lang->my->task->canceledBy = '由我取消';
$lang->my->task->unclosed   = '未关闭';

$lang->my->project = new stdclass();
$lang->my->project->common = '我的项目';

$lang->my->dynamic->common = '我的动态';

$lang->my->review->module = '模块';

$lang->my->contact = new stdclass();
$lang->my->contact->common = '联系人';
/* sys/tree */
$lang->tree->common        = "类目";
$lang->tree->add           = "添加";
$lang->tree->edit          = "编辑";
$lang->tree->children      = "添加子类目";
$lang->tree->delete        = "删除类目";
$lang->tree->browse        = "区域设置、行业设置、收入科目、支出科目、论坛版块、博客类目、维护部门";
$lang->tree->manage        = "维护类目";
$lang->tree->fix           = "修复数据";
$lang->tree->merge         = "合并科目";

$lang->tree->noCategories  = '您还没有添加类目，请添加类目。';
$lang->tree->noBoards      = '您还没有设置版块，请设置版块。';
$lang->tree->timeCountDown = "<strong id='countDown'>3</strong> 秒后转向%s管理页面。";
$lang->tree->redirect      = '立即转向';
$lang->tree->aliasRepeat   = '别名: %s 已经存在,不能重复添加。';
$lang->tree->aliasConflict = '别名: %s 与系统模块冲突，不能添加。';
$lang->tree->hasChildren   = '该分类存在子分类，不能删除。';
$lang->tree->hasThreads    = '该版块存在帖子，不能删除。';
$lang->tree->hasProducts   = '该分类存在产品，不能删除。';
$lang->tree->confirmDelete = "您确定删除该类目吗？";
$lang->tree->successFixed  = "成功修复";
$lang->tree->asParent      = '[%s]存在子科目，不能被合并';

$lang->category = new stdclass();
$lang->category->common   = '类目';
$lang->category->name     = '类目名称';
$lang->category->alias    = '别名';
$lang->category->parent   = '上级类目';
$lang->category->desc     = '描述';
$lang->category->keywords = '关键词';
$lang->category->children = '子类目';
$lang->category->rights   = '权限';
$lang->category->users    = '授权用户';
$lang->category->groups   = '授权分组';
$lang->category->origin   = '源科目';
$lang->category->target   = '目标科目';

$lang->area = new stdclass();
$lang->area->common   = '区域';
$lang->area->name     = '名称';
$lang->area->alias    = '别名';
$lang->area->parent   = '上级区域';
$lang->area->desc     = '描述';
$lang->area->keywords = '关键词';
$lang->area->children = "子区域";

$lang->industry = new stdclass();
$lang->industry->common   = '行业';
$lang->industry->name     = '名称';
$lang->industry->alias    = '别名';
$lang->industry->parent   = '上级行业';
$lang->industry->desc     = '描述';
$lang->industry->keywords = '关键词';
$lang->industry->children = "子行业";

$lang->in = new stdclass();
$lang->in->common   = '收入科目';
$lang->in->name     = '名称';
$lang->in->alias    = '别名';
$lang->in->parent   = '上级科目';
$lang->in->desc     = '描述';
$lang->in->keywords = '关键词';
$lang->in->children = '子科目';
$lang->in->merge    = '科目合并';

$lang->out = new stdclass();
$lang->out->common   = '支出科目';
$lang->out->name     = '名称';
$lang->out->alias    = '别名';
$lang->out->parent   = '上级科目';
$lang->out->desc     = '描述';
$lang->out->keywords = '关键词';
$lang->out->children = '子科目';
$lang->out->rights   = '权限';
$lang->out->refund   = '报销科目';
$lang->out->merge    = '合并科目';

$lang->out->refundList[1] = '是';
$lang->out->refundList[0] = '否';

$lang->board = new stdclass();
$lang->board->common     = '版块';
$lang->board->name       = '版块';
$lang->board->alias      = '别名';
$lang->board->parent     = '上级版块';
$lang->board->desc       = '描述';
$lang->board->keywords   = '关键词';
$lang->board->children   = "子版块";
$lang->board->readonly   = '访问权限';
$lang->board->moderators = '版主';
$lang->board->users      = '授权用户';
$lang->board->groups     = '授权分组';

$lang->board->readonlyList[0] = '开放';
$lang->board->readonlyList[1] = '只读';

$lang->board->placeholder = new stdclass();
$lang->board->placeholder->moderators  = '会员用户名, 多个用户名之间用逗号隔开';
$lang->board->placeholder->setChildren = '论坛功能需要设置二级版块。';
/* sys/provider */
$lang->provider->browse      = '浏览供应商';
$lang->provider->create      = '添加供应商';
$lang->provider->edit        = '编辑供应商';
$lang->provider->view        = '供应商详情';
$lang->provider->delete      = '删除供应商';
$lang->provider->list        = '供应商列表';
$lang->provider->contact     = '联系人';
$lang->provider->linkContact = '添加联系人';
$lang->provider->basicInfo   = '基本信息';
$lang->provider->moreInfo    = '更多信息';
$lang->provider->setCategory = '维护类目';

$lang->provider->common        = '供应商维护';
$lang->provider->id            = '编号';
$lang->provider->name          = '名称';
$lang->provider->depositor     = '对公账户';
$lang->provider->contact       = '联系人';
$lang->provider->type          = '类型';
$lang->provider->size          = '规模';
$lang->provider->industry      = '行业';
$lang->provider->area          = '区域';
$lang->provider->phone         = '电话';
$lang->provider->email         = '邮箱';
$lang->provider->qq            = 'QQ';
$lang->provider->site          = '网站';
$lang->provider->weibo         = '微博';
$lang->provider->weixin        = '微信';
$lang->provider->category      = '类目';
$lang->provider->desc          = '简介';
$lang->provider->relation      = '关系';
$lang->provider->createdBy     = '由谁添加';
$lang->provider->createdDate   = '添加时间';
$lang->provider->editedBy      = '由谁编辑';
$lang->provider->editedDate    = '编辑时间';
$lang->provider->createContact = '新建联系人';

$lang->provider->relationList['client']   = '客户';
$lang->provider->relationList['provider'] = '供应商';
$lang->provider->relationList['partner']  = '合作伙伴';

$lang->provider->typeList['']           = '';
$lang->provider->typeList['national']   = '国有企业';
$lang->provider->typeList['collective'] = '集体企业';
$lang->provider->typeList['corporate']  = '股份企业';
$lang->provider->typeList['limited']    = '有限公司';
$lang->provider->typeList['partnership']= '合伙企业';
$lang->provider->typeList['foreign']    = '外资企业';
$lang->provider->typeList['personal']   = '个人个体';

$lang->provider->sizeList[0] = '';
$lang->provider->sizeList[1] = '大型(100人以上)';
$lang->provider->sizeList[2] = '中型(50-100人)';
$lang->provider->sizeList[3] = '小型(10人-50人)';
$lang->provider->sizeList[4] = '微型(10人以下)';
/* sys/search */
if(!isset($lang->search)) $lang->search = new stdclass();
$lang->search->common        = '搜索';
$lang->search->reset         = '重置';
$lang->search->more          = '更多';
$lang->search->lite          = '简洁';
$lang->search->saveQuery     = '保存';
$lang->search->myQuery       = '我的查询';
$lang->search->group1        = '第一组';
$lang->search->group2        = '第二组';
$lang->search->buildForm     = '搜索表单';
$lang->search->buildQuery    = '执行搜索';
$lang->search->saveQuery     = '保存查询';
$lang->search->deleteQuery   = '删除查询';
$lang->search->setQueryTitle = '请输入查询标题（保存之前请先查询）：';
$lang->search->storyTitle    = '需求名称';
$lang->search->taskTitle     = '任务名称';
$lang->search->select        = '需求/任务筛选';
$lang->search->me            = '自己';

$lang->search->operators['=']          = '=';
$lang->search->operators['!=']         = '!=';
$lang->search->operators['>']          = '>';
$lang->search->operators['>=']         = '>=';
$lang->search->operators['<']          = '<';
$lang->search->operators['<=']         = '<=';
$lang->search->operators['include']    = '包含';
$lang->search->operators['between']    = '介于';
$lang->search->operators['notinclude'] = '不包含';
$lang->search->operators['belong']     = '从属于';

$lang->search->andor['and']         = '并且';
$lang->search->andor['or']          = '或者';

$lang->search->null = '空';

$lang->userquery = new stdclass();
$lang->userquery->title     = '查询标题';
$lang->userquery->myQueries = '我的查询';
$lang->userquery->execut    = '执行';
$lang->userquery->delete    = '删除';
/* sys/admin */
$lang->admin->shortcuts = new stdclass();

$lang->admin->shortcuts->createUser  = '添加成员';
$lang->admin->shortcuts->company     = '公司信息';
$lang->admin->shortcuts->createEntry = '添加应用';
/* sys/block */
$lang->block->common = '区块';
$lang->block->name   = '区块名称';
$lang->block->style  = '外观';
$lang->block->grid   = '宽度';
$lang->block->color  = '颜色';

$lang->block->lblEntry = '应用';
$lang->block->lblBlock = '区块';
$lang->block->lblRss   = 'RSS地址';
$lang->block->lblNum   = '条数';
$lang->block->lblHtml  = 'HTML内容';

$lang->block->params = new stdclass();
$lang->block->params->name  = '参数名称';
$lang->block->params->value = '参数值';

$lang->block->createBlock        = '添加区块';
$lang->block->editBlock          = '编辑区块';
$lang->block->ordersSaved        = '排序已保存';
$lang->block->confirmRemoveBlock = '确定移除区块【{0}】吗？';

$lang->block->allEntries  = '所有应用';
$lang->block->dynamic     = '最新动态';
$lang->block->dynamicInfo = "%s, %s <em>%s</em> %s <a href='%s' %s>%s</a>。";

$lang->block->default['oa']['1']['title'] = '日历';
$lang->block->default['oa']['1']['block'] = 'attend';
$lang->block->default['oa']['1']['grid']  = 6;

$lang->block->default['oa']['2']['title'] = '系统公告';
$lang->block->default['oa']['2']['block'] = 'announce';
$lang->block->default['oa']['2']['grid']  = 4;

$lang->block->default['oa']['2']['params']['num'] = 15;

$lang->block->default['proj']['3']['title'] = '指派给我的任务';
$lang->block->default['proj']['3']['block'] = 'task';
$lang->block->default['proj']['3']['grid']  = 4;

$lang->block->default['proj']['3']['params']['num']     = 15;
$lang->block->default['proj']['3']['params']['orderBy'] = 'id_desc';
$lang->block->default['proj']['3']['params']['status']  = array();
$lang->block->default['proj']['3']['params']['type']    = 'assignedTo';

$lang->block->default['proj']['4']['title'] = '项目列表';
$lang->block->default['proj']['4']['block'] = 'project';
$lang->block->default['proj']['4']['grid']  = 4;

$lang->block->default['proj']['4']['params']['num']     = 15;
$lang->block->default['proj']['4']['params']['orderBy'] = 'id_desc';
$lang->block->default['proj']['4']['params']['status']  = 'doing';

$lang->block->default['crm']['1']['title'] = '我的订单';
$lang->block->default['crm']['1']['block'] = 'order';
$lang->block->default['crm']['1']['grid']  = 4;

$lang->block->default['crm']['1']['params']['num']     = 15;
$lang->block->default['crm']['1']['params']['orderBy'] = 'id_desc';
$lang->block->default['crm']['1']['params']['type']    = 'createdBy';
$lang->block->default['crm']['1']['params']['status']  = array();

$lang->block->default['crm']['2']['title'] = '我的合同';
$lang->block->default['crm']['2']['block'] = 'contract';
$lang->block->default['crm']['2']['grid']  = 4;

$lang->block->default['crm']['2']['params']['num']     = 15;
$lang->block->default['crm']['2']['params']['orderBy'] = 'id_desc';
$lang->block->default['crm']['2']['params']['type']    = 'returnedBy';
$lang->block->default['crm']['2']['params']['status']  = array();

$lang->block->default['crm']['3']['title'] = '本周联系';
$lang->block->default['crm']['3']['block'] = 'customer';
$lang->block->default['crm']['3']['grid']  = 4;

$lang->block->default['crm']['3']['params']['num']     = 15;
$lang->block->default['crm']['3']['params']['orderBy'] = 'id_desc';
$lang->block->default['crm']['3']['params']['type']    = 'thisweek';

$lang->block->default['cash']['1']['title'] = '付款账户';
$lang->block->default['cash']['1']['block'] = 'depositor';
$lang->block->default['cash']['1']['grid']  = 4;

$lang->block->default['cash']['1']['params'] = array();

$lang->block->default['cash']['2']['title'] = '账目';
$lang->block->default['cash']['2']['block'] = 'trade';
$lang->block->default['cash']['2']['grid']  = 4;

$lang->block->default['cash']['2']['params']['num']     = 15;
$lang->block->default['cash']['2']['params']['orderBy'] = 'id_desc';

$lang->block->default['cash']['3']['title'] = '供应商';
$lang->block->default['cash']['3']['block'] = 'provider';
$lang->block->default['cash']['3']['grid']  = 4;

$lang->block->default['cash']['3']['params']['num']     = 15;
$lang->block->default['cash']['3']['params']['orderBy'] = 'id_desc';

$lang->block->default['team']['1']['title'] = '最新博客';
$lang->block->default['team']['1']['block'] = 'blog';
$lang->block->default['team']['1']['grid']  = 4;

$lang->block->default['team']['1']['params']['num'] = 15;

$lang->block->default['team']['2']['title'] = '最新帖子';
$lang->block->default['team']['2']['block'] = 'thread';
$lang->block->default['team']['2']['grid']  = 4;

$lang->block->default['team']['2']['params']['num'] = 15;
$lang->block->default['team']['2']['params']['type'] = 'new';

$lang->block->default['team']['3']['title'] = '置顶帖子';
$lang->block->default['team']['3']['block'] = 'thread';
$lang->block->default['team']['3']['grid']  = 4;

$lang->block->default['team']['3']['params']['num']  = 15;
$lang->block->default['team']['3']['params']['type'] = 'stick';

$lang->block->default['sys']['1'] = $lang->block->default['oa']['1'];
$lang->block->default['sys']['1']['source'] = 'oa';
$lang->block->default['sys']['2']['title']  = '最新动态';
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
$lang->block->moreLinkList->order['assinedTo']    = '指派给我|sys|my|order|type=assinedTo';
$lang->block->moreLinkList->order['createdBy']    = '由我创建|sys|my|order|type=createdBy';
$lang->block->moreLinkList->order['signedBy']     = '由我签约|sys|my|order|type=signedBy';
$lang->block->moreLinkList->order['normalstatus'] = '所有订单|crm|order|browse|mode=all';
$lang->block->moreLinkList->order['signedstatus'] = '所有订单|crm|order|browse|mode=all';
$lang->block->moreLinkList->order['closedstatus'] = '所有订单|crm|order|browse|mode=all';

$lang->block->moreLinkList->contract['returnedBy']     = '由我回款|sys|my|contract|type=returnedBy';
$lang->block->moreLinkList->contract['deliveredBy']    = '由我交付|sys|my|contract|type=deliveredBy';
$lang->block->moreLinkList->contract['normalstatus']   = '未完成|crm|contract|browse|mode=unfinished';
$lang->block->moreLinkList->contract['closedstatus']   = '已完成|crm|contract|browse|mode=finished';
$lang->block->moreLinkList->contract['canceledstatus'] = '已取消|crm|contract|browse|mode=canceled';

$lang->block->moreLinkList->customer['today']    = '今天联系|crm|customer|browse|type=today';
$lang->block->moreLinkList->customer['thisweek'] = '本周联系|crm|customer|browse|type=thisweek';

$lang->block->moreLinkList->trade     = '账目|cash|trade|browse|';
$lang->block->moreLinkList->depositor = '账户|cash|depositor|index|';
$lang->block->moreLinkList->provider  = '供应商|cash|provider|browse|';

$lang->block->moreLinkList->announce = '公告|oa|announce|browse|';
$lang->block->moreLinkList->attend   = '日历|sys|todo|calendar|';

$lang->block->moreLinkList->task['assignedTo'] = '指派给我|sys|my|task|type=assignedTo';
$lang->block->moreLinkList->task['createdBy']  = '由我创建|sys|my|task|type=createdBy';
$lang->block->moreLinkList->task['finishedBy'] = '由我完成|sys|my|task|type=finishedBy';
$lang->block->moreLinkList->task['closedBy']   = '由我关闭|sys|my|task|type=closedBy';
$lang->block->moreLinkList->task['canceledBy'] = '由我取消|sys|my|task|type=canceledBy';

$lang->block->moreLinkList->project['doing']    = '进行中|proj|project|index|status=doing';
$lang->block->moreLinkList->project['finished'] = '已完成|proj|project|index|status=finished';
$lang->block->moreLinkList->project['suspend']  = '已挂起|proj|project|index|status=suspend';

$lang->block->moreLinkList->blog = '最新博客|team|blog|index|';
$lang->block->moreLinkList->thread['new']   = '最新帖子|team|forum|index|';
$lang->block->moreLinkList->thread['stick'] = '置顶帖子|team|forum|index|';

$lang->block->moreLinkList->report = '账目报表|cash|trade|report|';
/* sys/action */
if(!isset($lang->action)) $lang->action = new stdclass();

$lang->action->common          = '系统日志';
$lang->action->finishAllDating = '完成所有下次联系';
$lang->action->deleteAllDating = '删除所有下次联系';

$lang->action->product  = '产品';
$lang->action->actor    = '操作者';
$lang->action->contact  = '联系人';
$lang->action->comment  = '内容';
$lang->action->action   = '动作';
$lang->action->actionID = '记录ID';
$lang->action->date     = '日期';
$lang->action->nextDate = '下次联系';

$lang->action->trash      = '回收站';
$lang->action->objectType = '对象类型';
$lang->action->objectID   = '对象ID';
$lang->action->objectName = '对象名称';

$lang->action->createContact = '新建';
$lang->action->editComment   = '修改备注';
$lang->action->hide          = '隐藏';       
$lang->action->hideOne       = '隐藏';
$lang->action->hideAll       = '隐藏全部';
$lang->action->hidden        = '已隐藏';
$lang->action->undelete      = '还原';
$lang->action->trashTips     = '提示：为了保证系统的完整性，然之系统的删除都是标记删除。';

$lang->action->textDiff = '文本格式';
$lang->action->original = '原始格式';

$lang->action->desc = new stdclass();
$lang->action->desc->common                = '$date, <strong>$action</strong> by <strong>$actor</strong>。' . "\n";
$lang->action->desc->extra                 = '$date, <strong>$action</strong> as <strong>$extra</strong> by <strong>$actor</strong>。' . "\n";
$lang->action->desc->opened                = '$date, 由 <strong>$actor</strong> 创建。' . "\n";
$lang->action->desc->created               = '$date, 由 <strong>$actor</strong> 创建。' . "\n";
$lang->action->desc->edited                = '$date, 由 <strong>$actor</strong> 编辑。' . "\n";
$lang->action->desc->assigned              = '$date, 由 <strong>$actor</strong> 指派给 <strong>$extra</strong>。' . "\n";
$lang->action->desc->merged                = '$date, 由 <strong>$actor</strong> 合并客户 <strong>$extra</strong>。' . "\n";
$lang->action->desc->transmit              = '$date, 由 <strong>$actor</strong> 转交给 <strong>$extra</strong>。' . "\n";
$lang->action->desc->closed                = '$date, 由 <strong>$actor</strong> 关闭，关闭原因:<strong>$extra</strong>。' . "\n";
$lang->action->desc->deleted               = '$date, 由 <strong>$actor</strong> 删除。' . "\n";
$lang->action->desc->deletedfile           = '$date, 由 <strong>$actor</strong> 删除了附件：<strong><i>$extra</i></strong>。' . "\n";
$lang->action->desc->editfile              = '$date, 由 <strong>$actor</strong> 编辑了附件：<strong><i>$extra</i></strong>。' . "\n";
$lang->action->desc->commented             = '$date, 由 <strong>$actor</strong> 添加备注。' . "\n";
$lang->action->desc->activated             = '$date, 由 <strong>$actor</strong> 激活。' . "\n";
$lang->action->desc->moved                 = '$date, 由 <strong>$actor</strong> 移动，之前为 "$extra"。' . "\n";
$lang->action->desc->started               = '$date, 由 <strong>$actor</strong> 启动。' . "\n";
$lang->action->desc->delayed               = '$date, 由 <strong>$actor</strong> 延期。' . "\n";
$lang->action->desc->suspended             = '$date, 由 <strong>$actor</strong> 挂起。' . "\n";
$lang->action->desc->canceled              = '$date, 由 <strong>$actor</strong> 取消。' . "\n";
$lang->action->desc->finished              = '$date, 由 <strong>$actor</strong> 完成。' . "\n";
$lang->action->desc->transfered            = '$date, 由 <strong>$actor</strong> 转交。' . "\n";
$lang->action->desc->reviewed              = '$date, 由 <strong>$actor</strong> 审核 $extra。' . "\n";
$lang->action->desc->reimburse             = '$date, 由 <strong>$actor</strong> 报销 $extra。' . "\n";
$lang->action->desc->createtrade           = '$date, 由 <strong>$actor</strong> 记账 $extra。' . "\n";
$lang->action->desc->revoked               = '$date, 由 <strong>$actor</strong> 撤销。' . "\n";
$lang->action->desc->commited              = '$date, 由 <strong>$actor</strong> 提交。' . "\n";
$lang->action->desc->reported              = '$date, 由 <strong>$actor</strong> 销假。' . "\n";
$lang->action->desc->returned              = '$date, 由 <strong>$actor</strong> 回款$extra。' . "\n";
$lang->action->desc->editreturned          = '$date, 由 <strong>$actor</strong> 编辑回款。' . "\n";
$lang->action->desc->deletereturned        = '$date, 由 <strong>$actor</strong> 删除$extra。' . "\n";
$lang->action->desc->finishreturned        = '$date, 由 <strong>$actor</strong> 回款$extra，回款完成。' . "\n";
$lang->action->desc->delivered             = '$date, 由 <strong>$actor</strong> 交付。' . "\n";
$lang->action->desc->editdelivered         = '$date, 由 <strong>$actor</strong> 编辑交付。' . "\n";
$lang->action->desc->deletedelivered       = '$date, 由 <strong>$actor</strong> 删除$extra。' . "\n";
$lang->action->desc->finishdelivered       = '$date, 由 <strong>$actor</strong> 完成交付。' . "\n";
$lang->action->desc->createdresume         = '$date, 由 <strong>$actor</strong> 添加履历：<strong>$extra</strong>。' . "\n";
$lang->action->desc->editedresume          = '$date, 由 <strong>$actor</strong> 修改履历。' . "\n";
$lang->action->desc->deleteresume          = '$date, 由 <strong>$actor</strong> 删除履历：<strong>$extra</strong>。' . "\n";
$lang->action->desc->createaddress         = '$date, 由 <strong>$actor</strong> 添加地址：<strong>$extra</strong>。' . "\n";
$lang->action->desc->editaddress           = '$date, 由 <strong>$actor</strong> 修改地址。' . "\n";
$lang->action->desc->deleteaddress         = '$date, 由 <strong>$actor</strong> 删除地址：<strong>$extra</strong>。' . "\n";
$lang->action->desc->diff1                 = '修改了 <strong><i>%s</i></strong>，旧值为 "%s"，新值为 "%s"。<br />' . "\n";
$lang->action->desc->diff2                 = '修改了 <strong><i>%s</i></strong>，区别为：' . "\n" . "<blockquote>%s</blockquote>" . "\n<div class='hidden'>%s</div>";
$lang->action->desc->diff3                 = "将文件名 %s 改为 %s 。\n";
$lang->action->desc->record                = '$date, <strong>$actor</strong> 添加了沟通日志，联系人：<strong>$contact</strong>，联系时间：$extra。' . "\n";
$lang->action->desc->signed                = '$date, 由 <strong>$actor</strong> 签约，成交金额：<strong>$extra</strong>。' . "\n";
$lang->action->desc->linkcontact           = '$date, 由 <strong>$actor</strong> 添加联系人：<strong>$extra</strong>。' . "\n";
$lang->action->desc->createorder           = '$date, 由 <strong>$actor</strong> 创建订单：<strong>$extra</strong>。' . "\n";
$lang->action->desc->editorder             = '$date, 由 <strong>$actor</strong> 编辑订单：<strong>$extra</strong>。' . "\n";
$lang->action->desc->assignorder           = '$date, 由 <strong>$actor</strong> 指派订单：<strong>$extra</strong>。' . "\n";
$lang->action->desc->closeorder            = '$date, 由 <strong>$actor</strong> 关闭订单 <strong>$extra</strong>。' . "\n";
$lang->action->desc->activateorder         = '$date, 由 <strong>$actor</strong> 激活订单：<strong>$extra</strong>。' . "\n";
$lang->action->desc->createcontract        = '$date, 由 <strong>$actor</strong> 创建合同：<strong>$extra</strong>。' . "\n";
$lang->action->desc->editcontract          = '$date, 由 <strong>$actor</strong> 编辑合同：<strong>$extra</strong>。' . "\n";
$lang->action->desc->delivercontract       = '$date, 由 <strong>$actor</strong> 对合同<strong>$extra</strong>进行交付。' . "\n";
$lang->action->desc->receivecontract       = '$date, 由 <strong>$actor</strong> 对合同<strong>$extra</strong>。' . "\n";
$lang->action->desc->finishdelivercontract = '$date, 由 <strong>$actor</strong> 完成合同<strong>$extra</strong>的交付。' . "\n";
$lang->action->desc->finishreceivecontract = '$date, 由 <strong>$actor</strong> 对合同<strong>$extra</strong>，完成回款。' . "\n";
$lang->action->desc->finishcontract        = '$date, 由 <strong>$actor</strong> 完成合同：<strong>$extra</strong>。' . "\n";
$lang->action->desc->cancelcontract        = '$date, 由 <strong>$actor</strong> 取消合同：<strong>$extra</strong>。' . "\n";
$lang->action->desc->hidden                = '$date, 由 <strong>$actor</strong> 隐藏。' . "\n";
$lang->action->desc->undeleted             = '$date, 由 <strong>$actor</strong> 还原。' . "\n";
$lang->action->desc->transform             = '$date, 由 <strong>$actor</strong> 转换为联系人。' . "\n";
$lang->action->desc->ignored               = '$date, 由 <strong>$actor</strong> 忽略。' . "\n";
$lang->action->desc->createtrip            = '$date, 由 <strong>$actor</strong> 创建出差：<strong>$extra</strong>。' . "\n";
$lang->action->desc->createegress          = '$date, 由 <strong>$actor</strong> 创建外出：<strong>$extra</strong>。' . "\n";
$lang->action->desc->imported              = '$date, 由 <strong>$actor</strong> 导入。' . "\n";
$lang->action->desc->dating                = '$date, 由 <strong>$actor</strong> 创建下次联系：<strong>$extra</strong>。' . "\n";

$lang->action->label = new stdclass();
$lang->action->label->created     = '创建了';
$lang->action->label->edited      = '编辑了';
$lang->action->label->assigned    = '指派了';
$lang->action->label->transmit    = '转交了';
$lang->action->label->closed      = '关闭了';
$lang->action->label->deleted     = '删除了';
$lang->action->label->undeleted   = '还原了';
$lang->action->label->deletedfile = '删除附件';
$lang->action->label->editfile    = '编辑附件';
$lang->action->label->commented   = '备注了';
$lang->action->label->activated   = '激活了';
$lang->action->label->resolved    = '解决了';
$lang->action->label->reviewed    = '评审了';
$lang->action->label->moved       = '移动了';
$lang->action->label->marked      = '编辑了';
$lang->action->label->started     = '开始了';
$lang->action->label->canceled    = '取消了';
$lang->action->label->finished    = '完成了';
$lang->action->label->reimburse   = '报销了';
$lang->action->label->createtrade = '报销记账';
$lang->action->label->record      = '沟通了';
$lang->action->label->signed      = '签约了';
$lang->action->label->commited    = '提交了';
$lang->action->label->revoked     = '撤销了';
$lang->action->label->reported    = '销假了';
$lang->action->label->forbidden   = '禁用了';
$lang->action->label->transform   = '转换了';
$lang->action->label->ignored     = '忽略了';
$lang->action->label->imported    = '导入了';
$lang->action->label->login       = '登录系统';
$lang->action->label->logout      = '退出登录';
$lang->action->label->dating      = '创建了下次联系';

$lang->action->label->createdbalance        = '登记余额';
$lang->action->label->createorder           = '创建订单';
$lang->action->label->editorder             = '编辑了订单';
$lang->action->label->activateorder         = '激活订单';
$lang->action->label->closeorder            = '关闭订单';
$lang->action->label->linkcontact           = '关联联系人';
$lang->action->label->createcontract        = '创建合同';
$lang->action->label->editcontract          = '编辑合同';
$lang->action->label->cancelcontract        = '取消合同';
$lang->action->label->finishcontract        = '完成合同';
$lang->action->label->createdresume         = '创建履历';
$lang->action->label->editedresume          = '编辑履历';
$lang->action->label->deleteresume          = '删除履历';
$lang->action->label->createaddress         = '创建地址';
$lang->action->label->editaddress           = '编辑地址';
$lang->action->label->deleteaddress         = '删除地址';
$lang->action->label->finishdelivered       = '完成交付';
$lang->action->label->finishdelivercontract = '完成交付';
$lang->action->label->delivered             = '交付';
$lang->action->label->delivercontract       = '交付';
$lang->action->label->returned              = '回款';
$lang->action->label->receivecontract       = '回款';
$lang->action->label->finishreceivecontract = '完成回款';
$lang->action->label->finishreturned        = '完成回款';
$lang->action->label->deletereturned        = '删除回款';

$lang->action->search = new stdclass();
$lang->action->search->label = (array)$lang->action->label;

$lang->action->label->announce  = '公告|announce|view|announceID=%s';
$lang->action->label->balance   = '余额|balance|browse|depositorID=%s';
$lang->action->label->doc       = '文档|doc|view|docID=%s';
$lang->action->label->doclib    = '文档库|doc|browse|doclibID=%s';
$lang->action->label->contact   = '联系人|contact|view|contactID=%s';
$lang->action->label->contract  = '合同|contract|view|contractID=%s';
$lang->action->label->customer  = '客户|customer|view|customerID=%s';
$lang->action->label->depositor = '账户|depositor|browse|';
$lang->action->label->holiday   = '放假安排|holiday|browse|';
$lang->action->label->leads     = '名单|leads|view|contactID=%s';
$lang->action->label->order     = '订单|order|view|orderID=%s';
$lang->action->label->product   = '产品|product|view|productID=%s';
$lang->action->label->project   = '项目|task|browse|projectID=%s';
$lang->action->label->provider  = '供应商|provider|view|providerID=%s';
$lang->action->label->schema    = '记账模板|schema|browse|';
$lang->action->label->space     = ' ';
$lang->action->label->task      = '任务|task|view|taskID=%s';
$lang->action->label->todo      = '待办|todo|view|todoID=%s';
$lang->action->label->trade     = '账目|trade|browse|';
$lang->action->label->user      = '用户';

$lang->action->label->attend = array();
$lang->action->label->attend['commited'] = '考勤审核|attend|browsereview|';
$lang->action->label->attend['reviewed'] = '考勤审核|attend|personal|';
$lang->action->label->leave = array();
$lang->action->label->leave['created']  = '请假审核|leave|browsereview|';
$lang->action->label->leave['commited'] = '请假审核|leave|browsereview|';
$lang->action->label->leave['revoked']  = '请假审核|leave|browsereview|';
$lang->action->label->leave['reported'] = '销假审核|leave|browsereview|';
$lang->action->label->leave['reviewed'] = '请假审核|leave|personal|';
$lang->action->label->lieu = array();
$lang->action->label->lieu['created']  = '调休审核|lieu|browsereview|';
$lang->action->label->lieu['commited'] = '调休审核|lieu|browsereview|';
$lang->action->label->lieu['revoked']  = '调休审核|lieu|browsereview|';
$lang->action->label->lieu['reviewed'] = '调休审核|lieu|personal|';
$lang->action->label->makeup = array();
$lang->action->label->makeup['created']  = '补班审核|makeup|browsereview|';
$lang->action->label->makeup['commited'] = '补班审核|makeup|browsereview|';
$lang->action->label->makeup['revoked']  = '补班审核|makeup|browsereview|';
$lang->action->label->makeup['reviewed'] = '补班审核|makeup|personal|';
$lang->action->label->overtime = array();
$lang->action->label->overtime['created']  = '加班审核|overtime|browsereview|';
$lang->action->label->overtime['commited'] = '加班审核|overtime|browsereview|';
$lang->action->label->overtime['revoked']  = '加班审核|overtime|browsereview|';
$lang->action->label->overtime['reviewed'] = '加班审核|overtime|personal|';
$lang->action->label->refund = array();
$lang->action->label->refund['commited']    = '报销审批|refund|browsereview|';
$lang->action->label->refund['revoked']     = '报销审批|refund|browsereview|';
$lang->action->label->refund['created']     = '报销审批|refund|view|refundID=%s&mode=review';
$lang->action->label->refund['edited']      = '报销审批|refund|view|refundID=%s&mode=review';
$lang->action->label->refund['reviewed']    = '报销审批|refund|view|refundID=%s&mode=review';
$lang->action->label->refund['reimburse']   = '报销审批|refund|view|refundID=%s';
$lang->action->label->refund['createtrade'] = '报销记账|refund|view|refundID=%s';
$lang->action->label->refund['deletedfile'] = '报销审批|refund|view|refundID=%s';

$lang->action->nextContactList[1]      = '明天';
$lang->action->nextContactList[2]      = '后天';
$lang->action->nextContactList[3]      = '三天后';
$lang->action->nextContactList[7]      = '一周后';
$lang->action->nextContactList[14]     = '两周后';
$lang->action->nextContactList[365000] = '无需联系';

$lang->action->record = new stdclass();
$lang->action->record->common       = '沟通';
$lang->action->record->title        = '本次沟通';
$lang->action->record->create       = '添加记录';
$lang->action->record->edit         = '编辑记录';
$lang->action->record->history      = '沟通记录';
$lang->action->record->customer     = '客户';
$lang->action->record->provider     = '供应商';
$lang->action->record->contract     = '合同';
$lang->action->record->order        = '订单';
$lang->action->record->contact      = '联系人';
$lang->action->record->actor        = '操作人';
$lang->action->record->comment      = '沟通内容';
$lang->action->record->date         = '时间';
$lang->action->record->file         = '附件';
$lang->action->record->next         = '下次联系';
$lang->action->record->nextList     = '下次联系列表';
$lang->action->record->nextDate     = '下次联系日期';
$lang->action->record->nextContact  = '下次联系人';
$lang->action->record->sameContact  = '同本次联系人';
$lang->action->record->contactedBy  = '由谁联系';
$lang->action->record->desc         = '备注';
$lang->action->record->status       = '状态';
$lang->action->record->createdBy    = '由谁添加';
$lang->action->record->createdDate  = '添加日期';
$lang->action->record->editedBy     = '由谁编辑';
$lang->action->record->editedDate   = '编辑日期';
$lang->action->record->uploadFile   = '上传附件:';
$lang->action->record->finishDenied = '只有管理员、下次联系人和创建者可以完成。';
$lang->action->record->deleteDenied = '只有管理员和创建者可以删除。';
$lang->action->record->deleteFail   = '沟通已经完成，不能删除。';
$lang->action->record->noPrivilege  = '%s没有权限访问当前操作的对象。';

$lang->action->record->statusList['wait'] = '待联系';
$lang->action->record->statusList['done'] = '联系完成';

$lang->action->objectTypes['order']     = '订单';
$lang->action->objectTypes['customer']  = '客户';
$lang->action->objectTypes['provider']  = '供应商';
$lang->action->objectTypes['doc']       = '文档';
$lang->action->objectTypes['task']      = '任务';
$lang->action->objectTypes['product']   = '产品';
$lang->action->objectTypes['contact']   = '联系人';
$lang->action->objectTypes['contract']  = '合同';
$lang->action->objectTypes['project']   = '项目';
$lang->action->objectTypes['user']      = '用户';
$lang->action->objectTypes['resume']    = '履历';
$lang->action->objectTypes['leave']     = '请假';
$lang->action->objectTypes['lieu']      = '调休';
$lang->action->objectTypes['makeup']    = '补班';
$lang->action->objectTypes['overtime']  = '加班';
$lang->action->objectTypes['refund']    = '报销';
$lang->action->objectTypes['depositor'] = '账户';
$lang->action->objectTypes['balance']   = '余额';
$lang->action->objectTypes['todo']      = '待办';
$lang->action->objectTypes['announce']  = '公告';
$lang->action->objectTypes['holiday']   = '放假安排';
$lang->action->objectTypes['trade']     = '账目';
$lang->action->objectTypes['schema']    = '记账模板';
$lang->action->objectTypes['doclib']    = '文档库';
$lang->action->objectTypes['action']    = '沟通记录';

$lang->action->noticeTitle  = "%s <a href='%s' data-appid='%s'>%s</a>";
$lang->action->uniqueDating = "<stong>%s</strong>已经有下次联系的记录。";
/* sys/message */
$lang->message->common            = '留言';
$lang->message->id                = '编号';
$lang->message->type              = '类型';
$lang->message->from              = '称呼';
$lang->message->content           = '内容';
$lang->message->phone             = '电话';
$lang->message->qq                = 'QQ';
$lang->message->email             = '邮箱';
$lang->message->date              = '时间';
$lang->message->secret            = '仅管理员可见';
$lang->message->readed            = '已读';
$lang->message->captcha           = '验证码';
$lang->message->list              = '留言列表';
$lang->message->post              = '发表留言';
$lang->message->viewArticle       = '正文';
$lang->message->viewComment       = '留言';
$lang->message->thanks            = '感谢您的留言！';
$lang->message->noSelectedMessage = '您没有选择任何留言。';

$lang->message->pass           = '通过';
$lang->message->reply          = '回复';
$lang->message->view           = '查看';
$lang->message->manage         = '留言管理';
$lang->message->delete         = '删除';
$lang->message->deleteSelected = '删除选中项';
$lang->message->passPre        = '通过之前';
$lang->message->deletePre      = '删除之前';
$lang->message->commentAt      = '发表于 ';
$lang->message->deletedObject  = '已删除项目';
$lang->message->contactHidden  = "以下电话、邮箱、qq联系方式只有网站管理员可见，不会暴露。";

$lang->message->confirmDeleteSingle = '您确定要删除该留言吗？';
$lang->message->confirmDeletePre    = '您确定要删除之前的留言吗？';
$lang->message->confirmPassSingle   = '您确定要通过该留言吗？';
$lang->message->confirmPassPre      = '您确定要通过之前的留言吗？';

$lang->message->statusList[0] = '未审核';
$lang->message->statusList[1] = '已审核';

$lang->message->readedStatus[0] = '未读';
$lang->message->readedStatus[1] = '已读';

$lang->comment = new stdclass();
$lang->comment->common      = '评论';
$lang->comment->id          = '编号';
$lang->comment->type        = '类型';
$lang->comment->from        = '称呼';
$lang->comment->content     = '内容';
$lang->comment->phone       = '电话';
$lang->comment->qq          = 'QQ';
$lang->comment->email       = '邮箱';
$lang->comment->captcha     = '验证码';
$lang->comment->list        = '评论列表';
$lang->comment->post        = '发表评论';
$lang->comment->viewArticle = '正文';
$lang->comment->viewComment = '评论';
$lang->comment->thanks      = '感谢您的评论！';

$lang->comment->pass          = '通过';
$lang->comment->reply         = '回复';
$lang->comment->replyAt       = '回复于';
$lang->comment->manage        = '评论管理';
$lang->comment->delete        = '删除';
$lang->comment->passPre       = '通过之前';
$lang->comment->deletePre     = '删除之前';
$lang->comment->commentTo     = '发表于';
$lang->comment->commentAt     = '发表于';
$lang->comment->deletedObject = '已删除项目';

$lang->comment->confirmDeleteSingle = '您确定要删除该评论吗？';
$lang->comment->confirmDeletePre    = '您确定要删除之前的评论吗？';
$lang->comment->confirmPassSingle   = '您确定要通过该评论吗？';
$lang->comment->confirmPassPre      = '您确定要通过之前的评论吗？';

$lang->comment->statusList[0] = '未审核';
$lang->comment->statusList[1] = '已审核';

$lang->message->replyItem = "<dd><strong>%s</strong> 于 <em>%s</em> 回复：%s</dd>";
$lang->comment->replyItem = "<dd><strong>%s</strong> 于 <em>%s</em> 回复：%s</dd>";

$lang->message->replySubject = '%s管理员的回复';
/* sys/report */
if(!isset($lang->report)) $lang->report = new stdclass();
$lang->report->common     = '报表';
$lang->report->browse     = '订单报表、客户报表、合同报表';
$lang->report->list       = '统计报表';
$lang->report->item       = '条目';
$lang->report->value      = '值';
$lang->report->percent    = '百分比';
$lang->report->undefined  = '未设定';
$lang->report->time       = '时间';
$lang->report->select     = '请选择报表类型';
$lang->report->create     = '生成报表';
$lang->report->tip        = '注：统计报表的数据，来源于列表页面的检索结果，生成统计报表前请先在列表页面进行检索。';

$lang->report->options = new stdclass();
$lang->report->options->type   = 'pie';
$lang->report->options->width  = 500;
$lang->report->options->height = 140;

$lang->report->options->graph = new stdclass();
$lang->report->options->graph->xAxisName = 'DEFAULT';
$lang->report->options->graph->caption   = 'DEFAULT';   // 是否显示柱状图阴影。

$lang->report->customer = new stdclass();
$lang->report->customer->common = '客户报表';
$lang->report->customer->chartList['assignedTo'] = '按指派给统计';
$lang->report->customer->chartList['status']     = '按状态统计';
$lang->report->customer->chartList['level']      = '按级别统计';
$lang->report->customer->chartList['type']       = '按类型统计';
$lang->report->customer->chartList['size']       = '按规模统计';
$lang->report->customer->chartList['area']       = '按地区统计';
$lang->report->customer->chartList['industry']   = '按行业统计';

$lang->report->customer->item['assignedTo'] = '用户';
$lang->report->customer->item['status']     = '状态';
$lang->report->customer->item['level']      = '级别';
$lang->report->customer->item['type']       = '类型';
$lang->report->customer->item['size']       = '规模';
$lang->report->customer->item['area']       = '地区';
$lang->report->customer->item['industry']   = '行业';

$lang->report->customer->value['assignedTo'] = '客户数';
$lang->report->customer->value['status']     = '客户数';
$lang->report->customer->value['level']      = '客户数';
$lang->report->customer->value['type']       = '客户数';
$lang->report->customer->value['size']       = '客户数';
$lang->report->customer->value['area']       = '客户数';
$lang->report->customer->value['industry']   = '客户数';

$lang->report->order = new stdclass();
$lang->report->order->common = '订单报表';
$lang->report->order->chartList['product']      = '按产品统计（数量）';
$lang->report->order->chartList['productLine']  = '按产品线统计（数量）';
$lang->report->order->chartList['status']       = '按状态统计（数量）';
$lang->report->order->chartList['assignedTo']   = '按指派给统计（数量）';
$lang->report->order->chartList['createdBy']    = '按创建者统计（数量）';
$lang->report->order->chartList['year']         = '按年统计（数量）';
$lang->report->order->chartList['month']        = '按月统计（数量）';
$lang->report->order->chartList['productA']     = '按产品统计（金额）';
$lang->report->order->chartList['productLineA'] = '按产品线统计（金额）';
$lang->report->order->chartList['statusA']      = '按状态统计（金额）';
$lang->report->order->chartList['assignedToA']  = '按指派给统计（金额）';
$lang->report->order->chartList['createdByA']   = '按创建者统计（金额）';
$lang->report->order->chartList['yearA']        = '按年统计（金额）';
$lang->report->order->chartList['monthA']       = '按月统计（金额）';

$lang->report->order->item['product']      = '产品';
$lang->report->order->item['productLine']  = '产品线';
$lang->report->order->item['status']       = '状态';
$lang->report->order->item['assignedTo']   = '指派给';
$lang->report->order->item['createdBy']    = '创建者';
$lang->report->order->item['year']         = '年';
$lang->report->order->item['month']        = '月';
$lang->report->order->item['productA']     = '产品';
$lang->report->order->item['productLineA'] = '产品';
$lang->report->order->item['statusA']      = '状态';
$lang->report->order->item['assignedToA']  = '指派给';
$lang->report->order->item['createdByA']   = '创建者';
$lang->report->order->item['yearA']         = '年';
$lang->report->order->item['monthA']        = '月';

$lang->report->order->value['product']      = '订单数';
$lang->report->order->value['productLine']  = '订单数';
$lang->report->order->value['status']       = '订单数';
$lang->report->order->value['assignedTo']   = '订单数';
$lang->report->order->value['createdBy']    = '订单数';
$lang->report->order->value['year']         = '订单数';
$lang->report->order->value['month']        = '订单数';
$lang->report->order->value['productA']     = '成交金额';
$lang->report->order->value['productLineA'] = '成交金额';
$lang->report->order->value['statusA']      = '成交金额';
$lang->report->order->value['assignedToA']  = '成交金额';
$lang->report->order->value['createdByA']   = '成交金额';
$lang->report->order->value['yearA']        = '成交金额';
$lang->report->order->value['monthA']       = '成交金额';

$lang->report->order->options = new stdclass();
$lang->report->order->options->typeList['year']    = 'bar';
$lang->report->order->options->typeList['month']   = 'bar';
$lang->report->order->options->typeList['yearA']   = 'bar';
$lang->report->order->options->typeList['monthA']  = 'bar';

$lang->report->contract = new stdclass();
$lang->report->contract->common = '合同报表';
$lang->report->contract->chartList['status']       = '按合同状态统计（数量）';
$lang->report->contract->chartList['delivery']     = '按交付状态统计（数量）';
$lang->report->contract->chartList['return']       = '按回款状态统计（数量）';
$lang->report->contract->chartList['createdBy']    = '按创建人统计（数量）';
$lang->report->contract->chartList['signedBy']     = '按指派给统计（数量）';
$lang->report->contract->chartList['deliveredBy']  = '按交付人统计（数量）';
//$lang->report->contract->chartList['handlers']     = '按经手人统计（数量）';
$lang->report->contract->chartList['contactedBy']  = '按联系人统计（数量）';
$lang->report->contract->chartList['year']         = '按年统计（数量）';
$lang->report->contract->chartList['month']        = '按月统计（数量）';
$lang->report->contract->chartList['statusA']      = '按合同状态统计（金额）';
$lang->report->contract->chartList['deliveryA']    = '按交付状态统计（金额）';
$lang->report->contract->chartList['returnA']      = '按回款状态统计（金额）';
$lang->report->contract->chartList['createdByA']   = '按创建人统计（金额）';
$lang->report->contract->chartList['signedByA']    = '按指派给统计（金额）';
$lang->report->contract->chartList['deliveredByA'] = '按交付人统计（金额）';
//$lang->report->contract->chartList['handlersA']    = '按经手人统计（金额）';
$lang->report->contract->chartList['contactedByA'] = '按联系人统计（金额）';
$lang->report->contract->chartList['yearA']        = '按年统计（金额）';
$lang->report->contract->chartList['monthA']       = '按月统计（金额）';

$lang->report->contract->item['status']       = '合同状态';
$lang->report->contract->item['delivery']     = '交付状态';
$lang->report->contract->item['return']       = '回款状态';
$lang->report->contract->item['createdBy']    = '创建人';
$lang->report->contract->item['signedBy']     = '用户';
$lang->report->contract->item['deliveredBy']  = '交付人';
$lang->report->contract->item['handlers']     = '经手人';
$lang->report->contract->item['contactedBy']  = '联系人';
$lang->report->contract->item['year']         = '年';
$lang->report->contract->item['month']        = '月';
$lang->report->contract->item['statusA']      = '订单状态';
$lang->report->contract->item['deliveryA']    = '交付状态';
$lang->report->contract->item['returnA']      = '回款状态';
$lang->report->contract->item['createdByA']   = '创建人';
$lang->report->contract->item['signedByA']    = '用户';
$lang->report->contract->item['deliveredByA'] = '交付人';
$lang->report->contract->item['handlersA']    = '经手人';
$lang->report->contract->item['contactedByA'] = '联系人';
$lang->report->contract->item['yearA']        = '年';
$lang->report->contract->item['monthA']       = '月';

$lang->report->contract->value['status']       = '合同数';
$lang->report->contract->value['delivery']     = '合同数';
$lang->report->contract->value['return']       = '合同数';
$lang->report->contract->value['createdBy']    = '合同数';
$lang->report->contract->value['signedBy']     = '合同数';
$lang->report->contract->value['deliveredBy']  = '合同数';
$lang->report->contract->value['handlers']     = '合同数';
$lang->report->contract->value['contactedBy']  = '合同数';
$lang->report->contract->value['year']         = '合同数';
$lang->report->contract->value['month']        = '合同数';
$lang->report->contract->value['statusA']      = '合同金额';
$lang->report->contract->value['deliveryA']    = '合同金额';
$lang->report->contract->value['returnA']      = '合同金额';
$lang->report->contract->value['createdByA']   = '合同金额';
$lang->report->contract->value['signedByA']    = '合同金额';
$lang->report->contract->value['deliveredByA'] = '合同金额';
$lang->report->contract->value['handlersA']    = '合同金额';
$lang->report->contract->value['contactedByA'] = '合同金额';
$lang->report->contract->value['yearA']        = '合同金额';
$lang->report->contract->value['monthA']       = '合同金额';

$lang->report->contract->options = new stdclass();
$lang->report->contract->options->typeList['year']    = 'bar';
$lang->report->contract->options->typeList['month']   = 'bar';
$lang->report->contract->options->typeList['yearA']   = 'bar';
$lang->report->contract->options->typeList['monthA']  = 'bar';

$lang->report->idAB         = 'ID';
$lang->report->orderTitle   = '订单标题';
$lang->report->taskName     = '任务名称';
$lang->report->todoName     = '待办名称';
$lang->report->customerName = '客户名称';

$lang->report->mailTitle           = new stdclass();
$lang->report->mailTitle->begin    = '提醒：您有';
$lang->report->mailTitle->order    = " 亟需联系订单(%s),";
$lang->report->mailTitle->task     = " 任务(%s),";
$lang->report->mailTitle->todo     = " 待办(%s),";
$lang->report->mailTitle->customer = " 亟需联系客户(%s),";
$lang->report->mailTitle->contractCount = " 跟踪的合同数(%s),";
/* sys/cron */
if(!isset($lang->cron)) $lang->cron = new stdclass();
$lang->cron->common  = '定时任务';
$lang->cron->index   = '首页';
$lang->cron->list    = '任务列表';
$lang->cron->create  = '添加';
$lang->cron->edit    = '编辑';
$lang->cron->delete  = '删除';
$lang->cron->toggle  = '激活/禁用';
$lang->cron->turnon  = '打开/关闭';

$lang->cron->m        = '分';
$lang->cron->h        = '小时';
$lang->cron->dom      = '天';
$lang->cron->mon      = '月';
$lang->cron->dow      = '周';
$lang->cron->command  = '命令';
$lang->cron->status   = '状态';
$lang->cron->type     = '任务类型';
$lang->cron->remark   = '备注';
$lang->cron->lastTime = '最后执行';

$lang->cron->turnonList['1'] = '打开';
$lang->cron->turnonList['0'] = '关闭';

$lang->cron->statusList['normal']  = '正常';
$lang->cron->statusList['running'] = '运行中';
$lang->cron->statusList['stop']    = '停止';

$lang->cron->typeList['ranzhi'] = '然之自调用';
$lang->cron->typeList['system'] = '操作系统命令';

$lang->cron->toggleList['start'] = '激活';
$lang->cron->toggleList['stop']  = '禁用';

$lang->cron->confirmDelete = '是否删除该计划任务？';
$lang->cron->confirmTurnon = '是否关闭计划任务？';
$lang->cron->introduction  = <<<EOD
<p>计划任务功能可以定时执行诸如备份等操作，免除自己布置定时任务。</p>
<p>该功能还有待完善，所以默认关闭该功能</p>
EOD;
$lang->cron->confirmOpen = <<<EOD
<p>是否开启该功能？<a href="%s" data-type="iframe" data-toggle="modal">打开计划任务</a></p>
EOD;

$lang->cron->notice = new stdclass();
$lang->cron->notice->m   = '取值范围:0-59，"*"代表取值范围内的数字，"/"代表"每"， "-"代表数字范围。';
$lang->cron->notice->h   = '取值范围:0-23';
$lang->cron->notice->dom = '取值范围:1-31';
$lang->cron->notice->mon = '取值范围:1-12';
$lang->cron->notice->dow = '取值范围:0-6';
/* sys/file */
$lang->file->common     = '附件';
$lang->file->upload     = '上传附件';
$lang->file->browse     = '附件列表';
$lang->file->download   = '下载附件';
$lang->file->edit       = '编辑';
$lang->file->primary    = '封面';
$lang->file->setPrimary = '设为封面';
$lang->file->toggle     = '切换';
$lang->file->label      = '标题：';
$lang->file->lblInfo    = '<i>(类型：%s, 大小：%s, 添加于：%s，下载%s次)</i>';
$lang->file->limit      = "(<span class='text-danger'>2M以内</span>)";
$lang->file->attachFile = '附加另一个附件';

$lang->file->id          = '编号';
$lang->file->title       = '名称';
$lang->file->pathname    = '存储路径';
$lang->file->extension   = '类型';
$lang->file->size        = '大小';
$lang->file->createdBy   = '上传者';
$lang->file->createdDate = '上传日期';
$lang->file->public      = '匿名下载';
$lang->file->downloads   = '下载次数';

$lang->file->edit          = '编辑';
$lang->file->editFile      = '更改附件';
$lang->file->sizeLimit     = "<p class='text-danger'>附件大小不能大于%sM</p>";
$lang->file->maxUploadSize = "<span class='red'>%s</span>";
$lang->file->delete        = '删除';

$lang->file->errorUnwritable = '上传目录不可写，无法上传附件。';
$lang->file->errorNoFile     = '未选择任何文件。';
$lang->file->errorFileSize   = '文件大小已经超过限制，不能成功上传！';
/* sys/customer */
if(!isset($lang->customer)) $lang->customer = new stdclass();

$lang->customer->common        = '客户';
$lang->customer->id            = '编号';
$lang->customer->name          = '名称';
$lang->customer->contact       = '联系人';
$lang->customer->depositor     = '对公账户';
$lang->customer->type          = '类型';
$lang->customer->source        = '客户来源';
$lang->customer->sourceNote    = '来源备注';
$lang->customer->size          = '规模';
$lang->customer->industry      = '行业';
$lang->customer->area          = '区域';
$lang->customer->status        = '状态';
$lang->customer->level         = '级别';
$lang->customer->intension     = '购买意向';
$lang->customer->phone         = '电话';
$lang->customer->email         = '邮箱';
$lang->customer->qq            = 'QQ';
$lang->customer->site          = '网站';
$lang->customer->weibo         = '微博';
$lang->customer->weixin        = '微信';
$lang->customer->desc          = '简介';
$lang->customer->public        = '公共';
$lang->customer->relation      = '关系';
$lang->customer->createdBy     = '由谁添加';
$lang->customer->createdDate   = '添加时间';
$lang->customer->editedBy      = '由谁编辑';
$lang->customer->editedDate    = '编辑时间';
$lang->customer->assignedTo    = '指派给';
$lang->customer->assignedBy    = '由谁指派';
$lang->customer->assignedDate  = '指派时间';
$lang->customer->contactedBy   = '由谁联系';
$lang->customer->contactedDate = '最后联系';
$lang->customer->nextDate      = '下次联系';
$lang->customer->selectContact = '选择已有联系人';

$lang->customer->browse            = '浏览客户';
$lang->customer->view              = '客户详情';
$lang->customer->create            = '添加客户';
$lang->customer->delete            = '删除客户';
$lang->customer->order             = '订单';
$lang->customer->contact           = '联系人';
$lang->customer->contract          = '合同';
$lang->customer->address           = '地址';
$lang->customer->record            = '沟通';
$lang->customer->assign            = '指派';
$lang->customer->batchAssign       = '批量指派';
$lang->customer->linkContact       = '添加联系人';
$lang->customer->list              = '客户列表';
$lang->customer->edit              = '编辑客户';
$lang->customer->export            = '导出';
$lang->customer->merge             = '合并';
$lang->customer->basicInfo         = '基本信息';
$lang->customer->moreInfo          = '更多信息';
$lang->customer->purchasedProducts = '已购产品';

$lang->customer->sourceList['']              = '';
$lang->customer->sourceList['visit']         = '陌生拜访';
$lang->customer->sourceList['advertisement'] = '广告';
$lang->customer->sourceList['introduce']     = '他人介绍';
$lang->customer->sourceList['activity']      = '活动';
$lang->customer->sourceList['socialPlat']    = '社交平台';
$lang->customer->sourceList['others']        = '其他';

$lang->customer->typeList['']            = '';
$lang->customer->typeList['national']    = '国有企业';
$lang->customer->typeList['collective']  = '集体企业';
$lang->customer->typeList['corporate']   = '股份企业';
$lang->customer->typeList['limited']     = '有限公司';
$lang->customer->typeList['partnership'] = '合伙企业';
$lang->customer->typeList['foreign']     = '外资企业';
$lang->customer->typeList['personal']    = '个人个体';

$lang->customer->statusList['potential'] = '潜在';
$lang->customer->statusList['intension'] = '意向';
$lang->customer->statusList['signed']    = '已签约';
$lang->customer->statusList['payed']     = '已付款';
$lang->customer->statusList['failed']    = '失败';

$lang->customer->sizeNameList[0] = '';
$lang->customer->sizeNameList[1] = '大型';
$lang->customer->sizeNameList[2] = '中型';
$lang->customer->sizeNameList[3] = '小型';
$lang->customer->sizeNameList[4] = '微型';

$lang->customer->sizeNoteList[0] = '';
$lang->customer->sizeNoteList[1] = '100人以上';
$lang->customer->sizeNoteList[2] = '50-100人';
$lang->customer->sizeNoteList[3] = '10-50人';
$lang->customer->sizeNoteList[4] = '10人以下';

$lang->customer->levelNameList[]    = '';
$lang->customer->levelNameList['A'] = 'A';
$lang->customer->levelNameList['B'] = 'B';
$lang->customer->levelNameList['C'] = 'C';
$lang->customer->levelNameList['D'] = 'D';
$lang->customer->levelNameList['E'] = 'E';

$lang->customer->levelNoteList[]    = '';
$lang->customer->levelNoteList['A'] = '有明显的业务需求，预计一个月内成交';
$lang->customer->levelNoteList['B'] = '有明显的业务需求，预计三个月内成交';
$lang->customer->levelNoteList['C'] = '有明显的业务需求，预计半年内成交';
$lang->customer->levelNoteList['D'] = '有潜在的业务需求或者至少半年后才能成交';
$lang->customer->levelNoteList['E'] = '没有需求或者没有任何成交机会';

$lang->customer->relationList['client']   = '客户';
$lang->customer->relationList['provider'] = '供应商';
$lang->customer->relationList['partner']  = '合作伙伴';

$lang->customer->search      = '搜索';
$lang->customer->searchInput = '输入搜索内容';
$lang->customer->mergeTip    = '将该客户合并到选择的客户。';
/* sys/entry */
$lang->entry->common      = '应用';
$lang->entry->admin       = '应用列表';
$lang->entry->create      = '添加应用';
$lang->entry->edit        = '编辑应用';
$lang->entry->delete      = '删除应用';
$lang->entry->createKey   = '重新生成密钥';
$lang->entry->order       = '排序';
$lang->entry->style       = '样式';
$lang->entry->setCategory = '维护分组';
$lang->entry->online      = '上架';
$lang->entry->offline     = '下架';
$lang->entry->version     = '版本';
$lang->entry->platform    = '平台';

$lang->entry->name        = '名称';
$lang->entry->abbr        = '缩写';
$lang->entry->code        = '代号';
$lang->entry->buildin     = '内置应用';
$lang->entry->integration = '集成';
$lang->entry->key         = '密钥';
$lang->entry->block       = '区块地址';
$lang->entry->ip          = 'IP列表';
$lang->entry->logo        = 'Logo';
$lang->entry->login       = '访问网址';
$lang->entry->logout      = '退出地址';
$lang->entry->nothing     = '暂时没有应用';
$lang->entry->open        = '打开方式';
$lang->entry->control     = '窗口控制条';
$lang->entry->size        = '窗口大小';
$lang->entry->position    = '显示位置';
$lang->entry->width       = '宽';
$lang->entry->height      = '高';
$lang->entry->priv        = '权限';
$lang->entry->category    = '分组';

$lang->entry->chanzhi          = '蝉知';
$lang->entry->zentao           = '禅道';
$lang->entry->integrateChanzhi = '集成蝉知';
$lang->entry->integrateZentao  = '集成禅道';

$lang->entry->chanzhiPlaceholder = '请输入蝉知的后台访问地址';
$lang->entry->chanzhiURL         = '后台入口';
$lang->entry->zentaoPlaceholder  = '如：http://www.zentaopms.com/user-login.html';
$lang->entry->zentaoURL          = '禅道登录地址';

$lang->entry->zentaoAdmin   = '禅道管理员';
$lang->entry->adminAccount  = '管理员账号';
$lang->entry->adminPassword = '管理员密码';
$lang->entry->bindUser      = '绑定用户';
$lang->entry->nextStep      = '下一步';
$lang->entry->createUser    = '新建';

$lang->entry->confirmDelete = '您确定删除该应用吗？';
$lang->entry->lblBlock      = '区块';
$lang->entry->editWarnning  = '系统内置应用，请谨慎修改。';

$lang->entry->note = new stdClass();
$lang->entry->note->name    = '授权应用名称';
$lang->entry->note->abbr    = '两个字符缩写';
$lang->entry->note->logo    = 'Logo尺寸：64*64，如果上传png格式，务必保持图片透明';
$lang->entry->note->code    = '授权应用代号，必须为英文、数字或下划线的组合';
$lang->entry->note->login   = '访问应用的地址或登录应用的表单的提交地址';
$lang->entry->note->logout  = '退出应用的地址';
$lang->entry->note->visible = '左侧显示';
$lang->entry->note->api     = '应用获取区块的接口地址';
$lang->entry->note->ip      = "允许访问应用的ip，多个ip用逗号隔开。支持IP段，如192.168.1.*";
$lang->entry->note->allip   = '无限制';
$lang->entry->note->scheme  = '当前访问协议为https，内嵌窗口只能打开https协议的应用网址。';

$lang->entry->error = new stdClass();
$lang->entry->error->name  = '名称不能为空';
$lang->entry->error->code  = '代号不能为空';
$lang->entry->error->key   = '密钥不能为空';
$lang->entry->error->ip    = 'IP列表不能为空';
$lang->entry->error->url   = ' 非内置应用的登录地址，必须包含 /、http://或者https://';

$lang->entry->error->admin         = '管理员用户名或密码错误';
$lang->entry->error->zentaoSetting = '禅道系统设置失败';
$lang->entry->error->version       = '您的禅道系统版本低于%s';
$lang->entry->error->zentaoUrl     = '禅道登录地址错误';
$lang->entry->error->accessDenied  = '访问受限';

$lang->entry->openList['blank']  = '新开标签';
$lang->entry->openList['iframe'] = '内嵌窗口';

$lang->entry->sizeList['max']    = '最大化';
$lang->entry->sizeList['custom'] = '自定义';

$lang->entry->positionList['default'] = '默认';
$lang->entry->positionList['center']  = '居中';

$lang->entry->controlList['none']   = '无';
$lang->entry->controlList['full']   = '完整';
$lang->entry->controlList['simple'] = '透明';

$lang->entry->integrationList[1] = '启用';
$lang->entry->integrationList[0] = '关闭';

$lang->entry->platformList['ranzhi']   = '然之';
$lang->entry->platformList['xuanxuan'] = '喧喧';
/* sys/product */
if(!isset($lang->product)) $lang->product = new stdclass();
$lang->product->common      = '产品维护';
$lang->product->id          = '编号';
$lang->product->name        = '名称';
$lang->product->code        = '代号';
$lang->product->type        = '类型';
$lang->product->status      = '状态';
$lang->product->category    = '产品分类';
$lang->product->desc        = '简介';
$lang->product->order       = '排序';
$lang->product->roles       = '角色';
$lang->product->createdBy   = '添加者';
$lang->product->createdDate = '添加时间';
$lang->product->editedBy    = '编辑者';
$lang->product->editedDate  = '编辑时间';

$lang->product->index       = '浏览产品';
$lang->product->delete      = '删除产品';
$lang->product->list        = '产品列表';
$lang->product->browse      = '维护产品';
$lang->product->create      = '添加产品';
$lang->product->edit        = '编辑产品';
$lang->product->view        = '产品详情';
$lang->product->basicInfo   = '基本信息';
$lang->product->setCategory = '维护分类';

$lang->product->typeList['real']    = '实体类';
$lang->product->typeList['service'] = '服务类';
$lang->product->typeList['virtual'] = '虚拟类';

$lang->product->statusList['developing'] = '研发中';
$lang->product->statusList['normal']     = '正常';
$lang->product->statusList['offline']    = '下线';

$lang->product->lineList[''] = '';

$lang->product->placeholder = new stdclass();
$lang->product->placeholder->code = '产品代号必须为英文或数字的组合';
/* sys/company */
$lang->company->common  = '公司';
$lang->company->index   = '关于我们';

$lang->company->name    = '公司名称';
$lang->company->desc    = '公司简介';
$lang->company->content = '公司介绍';

$lang->company->setBasic = '设置基本信息';
/* sys/usercontact */
$lang->usercontact->common = '联系人';
$lang->usercontact->create = '创建分组';
$lang->usercontact->edit   = '编辑分组';
$lang->usercontact->view   = '分组详情';
$lang->usercontact->delete = '删除分组';

$lang->usercontact->id     = '编号';
$lang->usercontact->name   = '分组名称';
$lang->usercontact->member = '分组成员';
$lang->usercontact->public = '公开';
/* sys/tag */
if(!isset($lang->tag)) $lang->tag = new stdclass();
$lang->tag->common = '关键词';
$lang->tag->rank   = '权重';
$lang->tag->link   = '链接';
$lang->tag->search = '搜索';

$lang->tag->admin     = '关键词管理';
$lang->tag->editLink  = '编辑链接';
$lang->tag->inputLink = '请输入链接';
/* sys/misc */

if(!isset($lang->misc)) $lang->misc = new stdclass();
$lang->misc->version = '版本%s';

$lang->misc->offcialSite['label'] = '官方网站';
$lang->misc->offcialSite['url']   = 'http://www.ranzhi.org';

$lang->misc->support['label'] = '技术支持';
$lang->misc->support['url']   = 'http://www.ranzhi.org/page/support.html';

$lang->misc->userbook['label'] = '用户手册';
$lang->misc->userbook['url']   = 'http://www.ranzhi.org/book/';

$lang->misc->forum['label'] = '论坛交流';
$lang->misc->forum['url']   = 'http://www.ranzhi.org/forum/';
/* sys/index */
$lang->index->common        = '首页';
$lang->index->dashboard     = '我的地盘';
$lang->index->dashboardAbbr = '我的';
$lang->index->about         = '关于';
$lang->index->allEntries    = '所有应用';
$lang->index->showOnLeft    = '左侧显示';
$lang->index->notOnLeft     = '非左侧显示';
$lang->index->opened        = '已打开';
$lang->index->addEntry      = '添加应用';
$lang->index->profile       = '个人信息';
$lang->index->set           = '系统配置';
$lang->index->theme         = '更换主题';
$lang->index->superAdmin    = '后台管理';
$lang->index->showDesk      = '桌面';
$lang->index->customBlocks  = '编辑区块';
$lang->index->addBlock      = '添加区块';
$lang->index->refresh       = '更新';
$lang->index->hidden        = '隐藏';

$lang->index->ips['confirmClose']       = '确认要关闭　【{0}】 吗？';
$lang->index->ips['entryNotFindTip']    = '应用没有找到！';
$lang->index->ips['busyTip']            = '应用正忙，请稍候...';
$lang->index->ips['reloadText']         = '刷新';
$lang->index->ips['closeText']          = '关闭';
$lang->index->ips['openText']           = '打开';
$lang->index->ips['removeText']         = '移除';
$lang->index->ips['fixToMenuText']      = '左侧显示';
$lang->index->ips['removeFromMenuText'] = '左侧移除';
$lang->index->ips['deleteEntryText']    = '删除应用';
$lang->index->ips['removedEntry']       = '应用【{0}】已删除';
$lang->index->ips['confirmRemoveEntry'] = '确定移除应用【{0}】吗？';
$lang->index->ips['showWindowText']     = '显示';
$lang->index->ips['confirmRemoveBlock'] = '确定要删除区块 【{0}】 吗？';
$lang->index->ips['removedBlock']       = '区块已删除';
$lang->index->ips['hiddenBlock']        = '区块已隐藏';
$lang->index->ips['orderdBlocksSaved']  = '排序已保存';
$lang->index->ips['moreOptionTip'] 	    = '显示另外 {0} 个应用';
$lang->index->ips['confirmCloseBrowser']= '提示：当前有打开的应用窗口';
/* sys/group */
$lang->group->common             = '权限分组';
$lang->group->browse             = '浏览分组';
$lang->group->create             = '新增分组';
$lang->group->edit               = '编辑分组';
$lang->group->copy               = '复制分组';
$lang->group->delete             = '删除分组';
$lang->group->manageAppPriv      = '应用';
$lang->group->managePriv         = '权限';
$lang->group->managePrivByGroup  = '权限维护';
$lang->group->managePrivByModule = '按模块分配权限';
$lang->group->byModuleTips       = '<span class="tips">（可以按住shift或者control键进行多选）</span>';
$lang->group->manageMember       = '成员';
$lang->group->linkMember         = '关联用户';
$lang->group->unlinkMember       = '移除用户';
$lang->group->confirmDelete      = '您确定删除该用户分组吗？';
$lang->group->successSaved       = '成功保存';
$lang->group->errorNotSaved      = '没有保存，请确认选择了权限数据。';

$lang->group->id       = '编号';
$lang->group->name     = '分组名称';
$lang->group->desc     = '分组描述';
$lang->group->users    = '用户列表';
$lang->group->module   = '模块';
$lang->group->method   = '方法';
$lang->group->priv     = '权限';
$lang->group->option   = '选项';
$lang->group->inside   = '组内用户';
$lang->group->outside  = '组外用户';
$lang->group->other    = '其他模块';
$lang->group->all      = '所有权限';
$lang->group->extent   = '权限范围';
$lang->group->havePriv = '已授权';
$lang->group->noPriv   = '未授权';

$lang->group->manageAll = '可浏览所有客户和订单';

$lang->group->copyOptions['copyPriv'] = '复制权限';
$lang->group->copyOptions['copyUser'] = '复制用户';

$lang->group->placeholder = new stdclass();
$lang->group->placeholder->tree = '类目包括对区域、行业、收入科目、支出科目、论坛版块、博客类目、部门的权限设置';
$lang->group->placeholder->lang = '设置包括对产品状态、产品线、客户类型、客户规模、客户级别、客户状态、货币设置、维护角色的权限设置';

include (dirname(__FILE__) . '/resource.php');
/* sys/setting */
$lang->setting->common = '设置';
$lang->setting->reset  = '恢复默认';
$lang->setting->key    = '键';
$lang->setting->value  = '值';

$lang->setting->lang = '产品状态、产品线、客户类型、客户规模、客户等级、客户状态、货币设置、角色';

$lang->setting->customerPool = '客户池设置';
$lang->setting->modules      = '功能模块设置';

$lang->setting->module = new stdClass();
$lang->setting->module->user     = '员工角色';
$lang->setting->module->product  = '产品状态';
$lang->setting->module->customer = '客户级别';

$lang->setting->user = new stdClass();
$lang->setting->user->fields['roleList'] = '角色设置';

$lang->setting->product = new stdClass();
$lang->setting->product->fields['statusList'] = '产品状态';
$lang->setting->product->fields['lineList']   = '产品线';

$lang->setting->product->lineList = new stdclass();
$lang->setting->product->lineList->key   = '代号';
$lang->setting->product->lineList->value = '名称';

$lang->setting->customer = new stdClass();
$lang->setting->customer->fields['sourceList']    = '客户来源';
$lang->setting->customer->fields['typeList']      = '客户类型';
$lang->setting->customer->fields['sizeNameList']  = '客户规模';
$lang->setting->customer->fields['levelNameList'] = '客户等级';
$lang->setting->customer->fields['statusList']    = '客户状态';

$lang->setting->system = new stdclass();
$lang->setting->system->mainCurrency           = '主要货币';
$lang->setting->system->fields['currencyList'] = '货币设置';

$lang->setting->allLang     = '适用所有语言';
$lang->setting->currentLang = '适用当前语言';

$lang->setting->placeholder = new stdclass();
$lang->setting->placeholder->key   = '变量名';
$lang->setting->placeholder->value = '自定义显示值';
$lang->setting->placeholder->info  = '详细描述';

$lang->setting->placeholder->typeList = new stdclass();
$lang->setting->placeholder->typeList->key = '变量名，长度为1~30字符';

$lang->setting->placeholder->sizeNameList = new stdclass();
$lang->setting->placeholder->sizeNameList->key   = '数字和字母组合';
$lang->setting->placeholder->sizeNameList->value = '简短描述';
$lang->setting->placeholder->sizeNameList->info  = '详细描述';

$lang->setting->placeholder->levelNameList = new stdclass();
$lang->setting->placeholder->levelNameList->key   = '数字和字母组合';
$lang->setting->placeholder->levelNameList->value = '简短描述';
$lang->setting->placeholder->levelNameList->info  = '详细描述';

$lang->setting->placeholder->lineList = new stdclass();
$lang->setting->placeholder->lineList->key   = '数字和字母组合';
$lang->setting->placeholder->lineList->value = '简短描述';

$lang->setting->reserveDays    = '进入客户池（天）';
$lang->setting->reserveDaysTip = '在设定天数内没有更新客户信息（未签约客户），该客户将自动进入客户池。值设为0时禁用此功能。';
$lang->setting->currencyTip    = '以非主要货币记账时需要录入汇率。';

$lang->setting->moduleList['attend']   = '考勤';
$lang->setting->moduleList['leave']    = '请假';
$lang->setting->moduleList['makeup']   = '补班';
$lang->setting->moduleList['overtime'] = '加班';
$lang->setting->moduleList['lieu']     = '调休';
$lang->setting->moduleList['trip']     = '出差';
$lang->setting->moduleList['egress']   = '外出';
$lang->setting->moduleList['refund']   = '报销';
/* sys/user */
$lang->user->common    = '成员';

$lang->user->id        = '编号';
$lang->user->account   = '用户名';
$lang->user->super     = '管理员';
$lang->user->password  = '密码';
$lang->user->password2 = '重复密码';
$lang->user->realname  = '真实姓名';
$lang->user->nickname  = '昵称';
$lang->user->dept      = '所属部门';
$lang->user->role      = '角色';    
$lang->user->avatar    = '头像';
$lang->user->birthyear = '出生年';
$lang->user->birthday  = '出生日期';
$lang->user->gender    = '性别';
$lang->user->email     = '邮箱';
$lang->user->msn       = 'MSN';
$lang->user->qq        = 'QQ';
$lang->user->yahoo     = '雅虎通';
$lang->user->gtalk     = 'Gtalk';
$lang->user->wangwang  = '旺旺';
$lang->user->mobile    = '手机';
$lang->user->phone     = '电话';
$lang->user->dept      = '部门';
$lang->user->address   = '通讯地址';
$lang->user->zipcode   = '邮编';
$lang->user->join      = '加入日期';
$lang->user->visits    = '访问次数';
$lang->user->ip        = '最后IP';
$lang->user->last      = '最后登录';
$lang->user->allowTime = '开放时间';
$lang->user->status    = '状态';
$lang->user->alert     = '您的帐号已被禁用';
$lang->user->keepLogin = '保持登录';
$lang->user->ignore    = '忽略';

$lang->user->admin           = '浏览成员';
$lang->user->list            = '成员列表';
$lang->user->colleague       = '同事列表';
$lang->user->view            = "成员详情";
$lang->user->create          = "添加成员";
$lang->user->edit            = "编辑成员";
$lang->user->changePassword  = "更改密码";
$lang->user->recoverPassword = "忘记密码";
$lang->user->newPassword     = "新密码";
$lang->user->update          = "编辑成员";
$lang->user->delete          = "删除成员";
$lang->user->browse          = "浏览成员";
$lang->user->deny            = "访问受限";
$lang->user->confirmDelete   = "您确认删除该成员吗？";
$lang->user->confirmActivate = "您确认激活该成员吗？";
$lang->user->relogin         = "重新登录";
$lang->user->asGuest         = "游客访问";
$lang->user->goback          = "返回前一页";
$lang->user->allUsers        = '全部成员';
$lang->user->submit          = "提交";
$lang->user->forbid          = '禁用';
$lang->user->forbidList      = '禁用成员列表';
$lang->user->normalList      = '普通成员列表';
$lang->user->active          = '激活';
$lang->user->setReferer      = '设置referer';
$lang->user->vcard           = '获取二维码名片';
$lang->user->uploadAvatar    = '上传头像';
$lang->user->cropAvatar      = '裁剪头像';
$lang->user->cropAvatarTip   = '拖拽选框来选择头像裁剪范围';
$lang->user->adminUser       = '组织';

$lang->user->profile     = '个人信息';
$lang->user->editProfile = '编辑信息';
$lang->user->thread      = '我的主题';
$lang->user->reply       = '我的回贴';
$lang->user->message     = '我的消息';

$lang->user->inputAccount   = '请输入用户名';
$lang->user->inputColleague = '请输入同事姓名';
$lang->user->inputPassword  = '请输入密码';
$lang->user->searchUser     = '搜索';

$lang->user->errorDeny     = "抱歉，您无权访问『<b>%s</b>』模块的『<b>%s</b>』功能。请联系管理员获取权限。点击后退返回上页。<br/> 5秒钟后将自动返回首页...";
$lang->user->loginFailed   = "登录失败，请检查您的成员名或密码是否填写正确。";
$lang->user->locked        = "成员已经被锁定，请%s后再重新尝试登录";
$lang->user->lockedForEver = "成员已经被永久禁用。";
$lang->user->forbidSuccess = '禁用成功';
$lang->user->actionFail    = '操作失败';
$lang->user->uploadSuccess = '上传成功';
$lang->user->actionError   = '操作失败，原因是 %s 存在该用户未审批的数据。';
$lang->user->retainAccount = '不能使用 <strong>%s</strong> 作为用户名。';

$lang->user->reviewProcess['attend']   = '考勤';
$lang->user->reviewProcess['leave']    = '请假';
$lang->user->reviewProcess['makeup']   = '补班';
$lang->user->reviewProcess['overtime'] = '加班';
$lang->user->reviewProcess['lieu']     = '调休';
$lang->user->reviewProcess['refund']   = '报销';

$lang->user->forbidUser = '禁用管理';
$lang->user->operate    = '操作';

$lang->user->genderList = $lang->genderList;

$lang->user->basicInfo   = '基本信息';
$lang->user->contactInfo = '联系信息';

$lang->user->statusList = new stdclass();
$lang->user->statusList->locked    = "<label class='label label-danger'>锁定</label>";
$lang->user->statusList->forbidden = "<label class='label label-danger'>禁用</label>";
$lang->user->statusList->normal    = "<label class='label label-success'>正常</label>";

$lang->user->notice = new stdclass();
$lang->user->notice->password = '字母和数字组合，最少六位';

$lang->user->login  = new stdclass();
$lang->user->login->common  = "登录";
$lang->user->login->welcome = '已有帐号';
$lang->user->login->why     = '欢迎登陆，享用会员专属服务！';

$lang->user->control = new stdclass();
$lang->user->control->common      = '成员中心';
$lang->user->control->welcome     = '欢迎您，<strong>%s</strong>';
$lang->user->control->lblPassword = "留空，则保持不变。";

$lang->user->control->menus[10] = '<i class="icon-large icon-user"></i> 个人信息 <i class="icon-chevron-right"></i>|user|profile';
$lang->user->control->menus[20] = '<i class="icon-large icon-edit"></i> 编辑信息 <i class="icon-chevron-right"></i>|user|edit';
//$lang->user->control->menus[28] = '<i class="icon-large icon-comments-alt"></i> 我的消息 <i class="icon-chevron-right"></i>|user|message';
$lang->user->control->menus[30] = '<i class="icon-large icon-share"></i> 我的主题 <i class="icon-chevron-right"></i>|user|thread';
$lang->user->control->menus[40] = '<i class="icon-large icon-mail-reply-all"></i> 我的回帖 <i class="icon-chevron-right"></i>|user|reply';

$lang->user->colleagueMenu = '同事';

$lang->dept = new stdclass();  
$lang->dept->common     = '部门结构';
$lang->dept->name       = '部门名称';
$lang->dept->alias      = '部门别名';
$lang->dept->edit       = '维护部门';
$lang->dept->parent     = '上级部门';
$lang->dept->children   = '子部门';
$lang->dept->desc       = '描述';
$lang->dept->keywords   = '关键词';
$lang->dept->moderators = '部门经理';

$lang->user->roleList['']           = ''; 
$lang->user->roleList['dev']        = '研发';
$lang->user->roleList['pm']         = '项目经理';
$lang->user->roleList['market']     = '市场';
$lang->user->roleList['sale']       = '销售';
$lang->user->roleList['hr']         = '人事';
$lang->user->roleList['office']     = '行政';
$lang->user->roleList['service']    = '客服';
$lang->user->roleList['support']    = '技术支持';
$lang->user->roleList['marketmgr']  = '市场主管';
$lang->user->roleList['salemgr']    = '销售经理';
$lang->user->roleList['hrmgr']      = '人事主管';
$lang->user->roleList['adminmgr']   = '行政主管';
$lang->user->roleList['servicemgr'] = '客服主管';
$lang->user->roleList['supportmgr'] = '技术支持主管';
$lang->user->roleList['top']        = '高层管理';
$lang->user->roleList['others']     = '其他';

$lang->user->mailContent = <<<EOT
<html>
<head>
<style type='text/css'>
body{margin:0;padding:0;}
div{padding-left:30px;}
</style>
</head>
<body>
<div style='padding-top:20px;height:60px;background:#fafafa;border-bottom:1px solid #ddd;font-size:18px;font-weight:bold'> 密码修改 </div>
<div style='margin-top:20px;'>
<p>尊敬的成员 %s <br />
请点击下面的链接，进行密码修改: <br >
<a href='%s' target='_blank'>%s</a>
</p>
<p>重置码：%s</p>
</div>
<div style='height:20px;border-bottom:1px solid #ddd;'></div>
<div style='margin:20px 0 0 0 ;'>
 系统发信，请勿回复
</div>
</body>
</html>
EOT;
/* sys/notice */
$lang->notice = new stdclass();
$lang->notice->common  = '错误';
$lang->notice->jumping = " 3秒钟后页面将自动跳转 <a href='%s' class='btn btn-primary btn-xs'>立即跳转</a> ";

$lang->notice->typeList['notFound']      = '您要访问的内容没有找到，请检查地址是否正确';
$lang->notice->typeList['accessLimited'] = '信息访问受限';
/* sys/schema */
$lang->schema->common   = '导入记账模板';
$lang->schema->browse   = '模板列表';
$lang->schema->view     = '查看模板';
$lang->schema->create   = '创建模板';
$lang->schema->edit     = '编辑模板';
$lang->schema->delete   = '删除模板';
$lang->schema->csvFile  = '模板文件';

$lang->schema->name     = '模板名称';
$lang->schema->feeRow   = '手续费为一条记录';
$lang->schema->diffCol  = '收支金额分列';

$lang->schema->placeholder = new stdclass();
$lang->schema->placeholder->selectField = '请选择对应的项目';
$lang->schema->placeholder->common      = '填写对账单对应到该字段的列，如：A';
$lang->schema->placeholder->type        = '填写“收入/支出”所对应的列';
$lang->schema->placeholder->date        = '填写“付款时间”所对应的列';
$lang->schema->placeholder->product     = '填写“产品”所对应的列';
$lang->schema->placeholder->desc        = '账目备注，可以填写多列，用,隔开，如：I,O';
$lang->schema->placeholder->in          = '收款所在的列，如：E';
$lang->schema->placeholder->out         = '付款所在的列，如：D';

$lang->schema->fieldRequired = '%s 必须选择对应的列';
/* sys/backup */
$lang->backup->common      = '备份';
$lang->backup->index       = '备份首页';
$lang->backup->history     = '备份历史';
$lang->backup->delete      = '删除备份';
$lang->backup->backup      = '备份';
$lang->backup->restore     = '还原';
$lang->backup->setSaveDays = '设置保存天数';

$lang->backup->name     = '文件名称';
$lang->backup->time     = '备份时间';
$lang->backup->files    = '备份文件';
$lang->backup->size     = '大小';
$lang->backup->saveDays = '保存天数';

$lang->backup->waitting       = '还原中...';
$lang->backup->confirmDelete  = '是否删除备份？';
$lang->backup->confirmRestore = '是否还原该备份？';
$lang->backup->deleteInfo     = '删除%s天前的备份';

$lang->backup->success = new stdclass();
$lang->backup->success->backup  = '备份成功！';
$lang->backup->success->restore = '还原成功！';

$lang->backup->error = new stdclass();
$lang->backup->error->noWritable  = "<code>%s</code> 不可写！请检查该目录权限，否则无法备份。";
$lang->backup->error->noDelete    = "文件 %s 无法删除，修改权限或手工删除。";
$lang->backup->error->restoreSQL  = "数据库还原失败，错误：%s";
$lang->backup->error->restoreFile = "附件还原失败，错误：%s";
$lang->backup->error->backupFile  = "附件备份失败，错误：%s";
$lang->backup->error->setSaveDays = "保存天数应该大于0";
/* sys/upgrade */
$lang->upgrade = new stdclass();
$lang->upgrade->common  = '升级';

$lang->upgrade->result  = '升级结果';
$lang->upgrade->fail    = '升级失败';
$lang->upgrade->success = '升级成功';
$lang->upgrade->tohome  = '返回首页';

$lang->upgrade->index         = '检查是否可以执行升级程序';
$lang->upgrade->backup        = '备份数据';
$lang->upgrade->selectVersion = '确认升级之前的版本';
$lang->upgrade->confirm       = '确认要执行的SQL语句';
$lang->upgrade->execute       = '确认执行';
$lang->upgrade->next          = '下一步';
$lang->upgrade->redeploy      = '请重新部署app文件夹后继续';
$lang->upgrade->redeployDesc  = "<h5>因为代码结构调整,需要重新部署app目录。</h5><div class='text-important'>操作方法:删除旧的app目录，再从新的安装包里面复制app文件夹。</div>";
$lang->upgrade->removeTodo    = '请删除 %s 文件夹后继续';
$lang->upgrade->removeTodoTip = "<h5>因为代码结构调整,需要删除%s目录。</h5><div class='text-important'>操作方法:删除旧的%s文件夹。</div>";
$lang->upgrade->updateLicense = '然之协同 2. 0 已更换授权协议至 Z PUBLIC LICENSE(ZPL) 1.1。';

$lang->upgrade->majorList['3_5'] = array();
$lang->upgrade->majorList['3_5']['1'] = '主营业务收入';
$lang->upgrade->majorList['3_5']['2'] = '非主营业务收入';
$lang->upgrade->majorList['3_5']['3'] = '主营业务成本';
$lang->upgrade->majorList['3_5']['4'] = '非主营业务成本';

$lang->upgrade->majorList['3_6'] = array();
$lang->upgrade->majorList['3_6']['5'] = '理财盈利';
$lang->upgrade->majorList['3_6']['6'] = '理财亏损';
$lang->upgrade->majorList['3_6']['7'] = '手续费';
$lang->upgrade->majorList['3_6']['8'] = '借贷利息';

$lang->upgrade->backupData = <<<EOT
<pre>
<strong>使用phpMyAdmin或者mysqldump命令备份数据库。</strong>
<code class='red'>$ mysqldump -u %s</span> -p%s %s > ranzhi.sql</code>
</pre>
EOT;

$lang->upgrade->versionNote = "务必选择正确的版本，否则会造成数据丢失。";

$lang->upgrade->deleteTips   = '需要删除部分文件。linux下面命令为：<br />';
$lang->upgrade->deleteDir    = '<code>rm -fr %s</code>';
$lang->upgrade->deleteFile   = '<code>rm %s</code>';
$lang->upgrade->afterDeleted = '<br />删除以上文件后刷新！';

include 'version.php';
/* sys/mail */
$lang->mail->common = '发信设置';
$lang->mail->index  = '首页';
$lang->mail->detect = '检测';
$lang->mail->edit   = '编辑配置';
$lang->mail->save   = '成功保存';
$lang->mail->test   = '测试发信';
$lang->mail->reset  = '重置';

$lang->mail->turnon      = '是否打开';
$lang->mail->fromAddress = '发信邮箱';
$lang->mail->fromName    = '发信人';
$lang->mail->mta         = '发信方式';
$lang->mail->host        = 'smtp服务器';
$lang->mail->port        = 'smtp端口号';
$lang->mail->auth        = '是否需要验证';
$lang->mail->username    = 'smtp帐号';
$lang->mail->password    = 'smtp密码';
$lang->mail->secure      = '是否加密';
$lang->mail->debug       = '调试级别';

$lang->mail->turnonList[1]  = '打开';
$lang->mail->turnonList[0] = '关闭';

$lang->mail->debugList[0] = '关闭';
$lang->mail->debugList[1] = '一般';
$lang->mail->debugList[2] = '较高';

$lang->mail->authList[1]  = '需要';
$lang->mail->authList[0] = '不需要';

$lang->mail->secureList['']    = '不加密';
$lang->mail->secureList['ssl'] = 'ssl';
$lang->mail->secureList['tls'] = 'tls';

$lang->mail->inputFromEmail = '请输入发信邮箱：';
$lang->mail->nextStep       = '下一步';
$lang->mail->successSaved   = '配置信息已经成功保存。';
$lang->mail->subject        = '测试邮件';
$lang->mail->content        = '邮箱设置成功';
$lang->mail->sendSuccess    = '成功发送！';
$lang->mail->needConfigure  = '无法找到邮件配置信息，请先配置邮件发送参数。';

$lang->mail->mailContentTip = <<<EOT
<strong>%s</strong>(%s)由<a href='https://www.ranzhi.org' target='blank'>然之协同管理系统</a>搭建。<br />
<a href='http://www.cnezsoft.com' target='blank'>易软天创</a>为天下企业提供专业的管理工具。
EOT;
$lang->mail->openTip = '订单、客户、任务指派，请假、报销审批时会进行邮件提醒';
/* team/forum */
if(!isset($lang->forum)) $lang->forum = new stdclass();
$lang->forum->common      = '论坛';
$lang->forum->index       = '论坛首页';
$lang->forum->board       = '版块';
$lang->forum->owners      = '版主';
$lang->forum->threadList  = '主题列表';
$lang->forum->threadCount = '主题数';
$lang->forum->postCount   = '帖子数';
$lang->forum->noPost      = '暂无主题';
$lang->forum->lastPost    = '最后发表: %s by %s';
$lang->forum->readonly    = '只读版块。';
$lang->forum->notExist    = '版块不存在。';
$lang->forum->lblOwner    = " [ 版主：%s ]";

$lang->forum->post   = '发贴';
$lang->forum->admin  = '论坛维护';
$lang->forum->update = '更新数据';

$lang->forum->updateDesc    = '该更新操作会重新计算每个版块的发贴数据。';
$lang->forum->successUpdate = '更新数据成功';

$lang->pager->noRecord      = '';
$lang->pager->digest        = str_replace('记录', '主题', $lang->pager->digest);
$lang->pager->settedInForum = true;    // Set this switch thus in thread module can avoid overiding them.
/* team/reply */
$lang->reply = new stdclass();
$lang->reply->common      = '回贴';
$lang->reply->id          = '编号';
$lang->reply->list        = '回帖列表';
$lang->reply->content     = '内容';
$lang->reply->author      = '作者';
$lang->reply->files       = '附件：';
$lang->reply->createdDate = '回复时间';
$lang->reply->admin       = '回帖列表';

$lang->reply->edit = '编辑回帖';
/* team/thread */
$lang->thread->common    = '主题';

$lang->thread->id         = '编号';
$lang->thread->title      = '标题';
$lang->thread->board      = '版块';
$lang->thread->author     = '作者';
$lang->thread->content    = '内容';
$lang->thread->file       = '附件: ';
$lang->thread->postedDate = '发表于';
$lang->thread->replies    = '回帖';
$lang->thread->views      = '阅读';
$lang->thread->lastReply  = '最后回帖';

$lang->thread->post         = '发贴';
$lang->thread->postTo       = '发布贴子到';
$lang->thread->browse       = '主题列表';
$lang->thread->stick        = '置顶';
$lang->thread->edit         = '编辑主题';
$lang->thread->view         = '查看主题';
$lang->thread->delete       = '删除主题';
$lang->thread->status       = '状态';
$lang->thread->hide         = '隐藏';
$lang->thread->show         = '显示';
$lang->thread->transfer     = '转移';
$lang->thread->switchStatus = '切换状态';
$lang->thread->deleteFile   = '删除附件';

$lang->thread->sticks[0] = '不置顶';
$lang->thread->sticks[1] = '版块置顶';
$lang->thread->sticks[2] = '全局置顶';

$lang->thread->statusList['hidden'] = '已隐藏';
$lang->thread->statusList['normal'] = '正常';

$lang->thread->confirmDeleteThread = "您确定删除该主题吗？";
$lang->thread->confirmHideReply    = "您确定隐藏回帖吗？";
$lang->thread->confirmHideThread   = "您确定隐藏该主题吗？";
$lang->thread->confirmDeleteReply  = "您确定删除该回帖吗？";
$lang->thread->confirmDeleteFile   = "您确定删除该附件吗？";

$lang->thread->lblEdited       = '%s 最后编辑, %s';
$lang->thread->message         = '%s在论坛#%s回复了主题：%s，内容为：%s';
$lang->thread->readonly        = '只读';
$lang->thread->successStick    = '成功置顶';
$lang->thread->successUnstick  = '成功取消置顶';
$lang->thread->successHide     = '成功隐藏帖子';
$lang->thread->successShow     = '显示成功';
$lang->thread->readonlyMessage = '该帖已被设置为 <strong>只读</strong>，您暂时无法发表新的回复。';
$lang->thread->successTransfer = '转移成功';

if(!isset($lang->pager->settedInForum))
{
    $lang->pager->noRecord = '';
    $lang->pager->digest   = str_replace('记录', '回贴', $lang->pager->digest);
}
/* team/block */
$lang->block->common   = '区块';
$lang->block->blog     = '最新博客';
$lang->block->lblBlock = '区块';
$lang->block->admin    = '管理区块';
$lang->block->num      = '数量';
$lang->block->type     = '类型';

$lang->block->availableBlocks = new stdclass();
$lang->block->availableBlocks->blog   = '最新博客';
$lang->block->availableBlocks->thread = '帖子列表';

$lang->block->typeList->thread['new']   = '最新帖子';
$lang->block->typeList->thread['stick'] = '置顶帖子';
/* team/blog */
$lang->blog->common = "博客";

$lang->blog->latestArticles = "最新博文";

$lang->blog->index  = "博客首页";
$lang->blog->create = "添加博客";
$lang->blog->edit   = "编辑博客";
$lang->blog->view   = "查看博客";
$lang->blog->delete = "删除博客";

$lang->blog->notFound = '该博客不存在';
