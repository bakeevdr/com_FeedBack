<?php	defined('_JEXEC') or die('Restricted Access');		JHtml::_('jquery.framework', false);	JFactory::getDocument()->addScript('/media/Feedback/js/Widget-work.js', 'text/javascript');	JFactory::getDocument()->addStyleDeclaration( '		body.com_feedback {padding:10px 0;}		#FBW_New input, #FBW_New textarea {width:100%;} 		#FBW_New input[type="checkbox"] {width: auto; margin: 0;}		#FBW_New input[type="checkbox"] {}		#FBW_NewBTN {color:green; font-size:25px; position:fixed; right:20px; top:15px;}		.FBW_List .nav {margin-bottom:0;}		.FBW_List .accordion-group {border-top:0; border-radius:0; margin-bottom:0; padding: 0 5px;}		.FBW_List .accordion-heading { min-height:50px;}		.FBW_List .FBStat{float:left; position:relative; width:100px; height:100%;}		.FBW_List .FBStat h2 {color: #4e4c4c; text-align: center; margin: 8px 0; width: 40%; float: left;}		.FBW_List .FBStat .up, .FBStat .down {width: 30%; float: left; text-align: center; margin-top: 3px; cursor: pointer;}		.FBW_List .FBStat .up.select {color:#0e90d2; font-weight:bold}		.FBW_List .FBStat .down.select {color:red; font-weight:bold}		.FBW_List .FBStat .progress {background-color: red; background-image: none; clear: left; height: 5px; margin-bottom: 0; position: relative;} 		.FBW_List .icon-loader01 {background: rgba(0, 0, 0, 0) url("/media/feedback/images/loader01.gif") no-repeat scroll 0 0;}		.FBW_List .FB_Info{margin-left: 110px; padding-top: 1px;}		.FBW_List .FB_Info .title{font-weight:bold; }		.FBW_List .FB_Info .desc{ color: #8c8a8a; }		.FBW_List .FB_Info .FB_status{padding: 2px 20px; position: absolute; right: 13px;}		.FBW_List .tab-content {height: 448px; overflow-y: scroll; position: relative;}	');			JHtml::_('behavior.tooltip');	JHtml::_('behavior.formvalidation');?><?php echo $this->loadTemplate('new');?><?php echo $this->loadTemplate('list');?>