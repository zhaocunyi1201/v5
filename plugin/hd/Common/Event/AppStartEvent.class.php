<?php

/**
 * 应用开始事件处理类
 * Class AppStartEvent
 * @author 向军 <houdunwangxj@gmail.com>
 */
class AppStartEvent extends Event {
	public function run(&$options) {
		$this -> check_install();
		//表字段缓存
		define("FIELD_CACHE_PATH", 'data/Cache/Field/');
		//Flag模型属性缓存（推荐、置顶）
		define("FLAG_CACHE_PATH", 'data/Cache/Flag/');
		//常用菜单缓存
		define('MENU_CACHE_PATH', 'data/Cache/Menu/');
		//文章缓存
		define("CONTENT_CACHE_PATH", 'data/Cache/Content/');
	}

	//验证安装
	public function check_install() {
		if (is_dir('install') && !file_exists('install/lock.php')) {
			echo "<script>
                top.location.href='install/';
            </script>";
			exit ;
		}
	}

}
