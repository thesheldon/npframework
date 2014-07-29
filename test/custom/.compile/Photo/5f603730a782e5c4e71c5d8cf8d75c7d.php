<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title><?=$current['title'];?></title>
		<link rel="stylesheet" href="<?=__STATIC__;?>css/admin.css" type="text/css" />
		<?=$content_for_css;?>
	</head>
	<body>
		<div class="header">
			<div class="shell">
				<div class="top">
					<h1><a href="<?=__DOMAIN__;?>"><?=L('site_name');?></a></h1>
					<div class="top_navigation">
						Welcome <strong><?=$current['admin_user'];?></strong>
						<span>|</span>
						<a href="<?=$domain;?>login/logout.html">Log Out</a>
					</div>
				</div>
				
				<div class="navigation">
					<ul>
						<?php foreach($menus as $menu){?>
								<li><a href="<?=$domain.$menu;?>.html" <?php if($current['module'] == $menu){?>class="active" <?php }?>><span><?=L('menu_'.$menu);?></span></a></li>
						<?php }?>
					</ul>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="shell">
				<div class="small_nav">
					<a href="<?=$domain;?>"><?=L('trans_index');?></a>
					<span>&gt;</span>
					<a href="<?=$domain.$current['module'];?>"><?=L('menu_'.$current['module']);?></a>
					<span>&gt;</span>
					<?php if (isset($current['title'])){?>
					<span><?=$current['title'];?></span>
					<?php }?>
				</div>
				<?php if(isset($return_message)){?>
					<div class="msg <?php if($return_message['status'] == true){?>msg-ok<?php }else{?>msg-error<?php }?>">
						<p><strong><?php if(!empty($return_message['msg'])){ echo $return_message['msg'];}else{ if($return_message['status'] == true){ echo '操作成功!';}else{ echo '操作失败';}}?></strong></p>
						<a href="#" class="close">close</a>
					</div>
				<?php }?>
				<br />
				<?=$content_for_layout;?>
			</div>
		</div>
		
		<div class="footer">
			<div class="shell">
				<span class="left">&copy; 2010 - <?=L('common_company');?></span>
				<span class="right">
					<?=L('trans_designer');?> <a href="#" target="_blank"><?=L('common_designer');?></a>
				</span>
			</div>
		</div>
		<script type="text/javascript" src="<?=__PUBLIC__;?>js/jquery.js"></script>
		<script type="text/javascript">
			var $domain = '<?=$domain.$current['module'];?>';
		</script>
		<script type="text/javascript" src="<?=__APP__;?>js/admin.js"></script>
		<?=$content_for_js;?>
	</body>
</html>