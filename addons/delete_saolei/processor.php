<?php
/**
 * 经典Windows扫雷小游戏模块处理程序
 *
 * @author delete
 * @url http://bbs.we7.cc/
 */
defined('IN_IA') or exit('Access Denied');

class Delete_saoleiModuleProcessor extends WeModuleProcessor {
	public function respond() {
		global $_W;
		$content = $this->message['content'];
		//这里定义此模块进行消息处理时的具体过程, 请查看微擎文档来编写你的代码
		return $this->respText('http://'.$_SERVER['HTTP_HOST'].'/app/index.php?i='.$_W['uniacid'].'&c=entry&do=index&m=delete_saolei');
	}
}