<?php

$lang = array
(
	'gamename' => '生存遊戲 BRA',
	'succeed' => '成功',
	'fail' => '失敗',
	'exit' => '退出安裝嚮導',
	'enabled' => '允許',
	'writeable' => '可寫',
	'unwriteable' => '不可寫',
	'yes' => '可',
	'no' => '不可',
	'unlimited' => '不限',

	'env_os' => '作業系統',
	'env_php' => 'PHP 版本',
	'env_mysql' => 'MySQL 版本',
	'env_attach' => '附件上傳',
	'env_diskspace' => '磁碟空間',
	'env_dir_writeable' => '目錄寫入',

	'init_log' => '初始化記錄',
	'clear_dir' => '清空目錄',
	'select_db' => '選擇資料庫',
	'create_table' => '建立資料表',
	'init_game' => '初始化遊戲系統',
	'new_game' => '新遊戲準備',

	'install_wizard' => '生存遊戲 - BRA Installation Wizard',
	'welcome' => '歡迎來到 生存遊戲 - BRA 安裝嚮導，安裝前請仔細閱讀 license 檔的每個細節，在您確定可以完全滿足 生存遊戲BRA 的授權協議之後才能開始安裝。readme 檔提供了有關軟體安裝的說明，請您同樣仔細閱讀，以保證安裝進程的順利進行。',
	'current_process' => '當前狀態:',
	'show_license' => '生存遊戲BRA 用戶許可協定',
	'agreement' => '請您務必仔細閱讀下麵的許可協議',
	'agreement_yes' => '我完全同意',
	'agreement_no' => '我不能同意',
	'configure' => '配置 config.inc.php',
	'check_config' => '檢查配置檔狀態',
	'check_existence' => '存在檢查',
	'check_writeable' => '可寫檢查',
	'edit_config' => '流覽/編輯當前配置',
	'variable' => '設置選項',
	'value' => '當前值',
	'comment' => '注釋',
	'dbhost' => '資料庫伺服器:',
	'dbhost_comment' => '資料庫伺服器位址, 一般為 localhost',
	'dbuser' => '資料庫用戶名:',
	'dbuser_comment' => '資料庫帳號用戶名',
	'dbpw' => '資料庫密碼:',
	'dbpw_comment' => '資料庫帳號密碼',
	'dbname' => '資料庫名:',
	'dbname_comment' => '資料庫名稱',
	'authkey' => '遊戲加密密鑰:',
	'authkey_comment' => '必須與插件密鑰相同',
	'tablepre' => '表名首碼:',
	'tablepre_comment' => '同一資料庫安裝多個遊戲時可改變默認',
	'tablepre_prompt' => '除非您需要在同一資料庫安裝多個 生存遊戲\n 否則,強烈建議您不要修改表名首碼.',
	'moveut' => '伺服器時差:',
	'moveut_comment' => '如果伺服器跟你當地的時間有時差，在此處設置。一般用於國外伺服器。當前伺服器時間:',
	'bbsurl' => '論壇地址:',
	'bbsurl_comment' => '安裝遊戲插件的論壇地址',
	'gameurl' => '遊戲程式位址:',
	'gameurl_comment' => '用於全屏模式，一般情況下替換功能變數名稱loongyou.com為您的功能變數名稱即可',
	'save_config' => '保存配置資訊',

	'db_set' => '請設置安裝遊戲的資料庫',
	'db_use_existence' => '使用已存在的資料庫',
	'db_create_new' => '創建新的資料庫',

	'confirm_config' => '上述配置正確',
	'refresh_config' => '刷新修改結果',
	'recheck_config' => '重新檢查設置',
	'check_env' => '檢查當前伺服器環境',
	'compare_env' => '生存遊戲BRA 所需環境和當前伺服器配置對比',
	'env_required' => '生存遊戲BRA 所需配置',
	'env_best' => '生存遊戲BRA 最佳配置',
	'env_current' => '當前伺服器',
	'confirm_preparation' => '請確認已完成如下步驟',
	'install_note' => '安裝嚮導提示',
	'add_admin' => '設置管理員帳號',
	'start_install' => '開始安裝 生存遊戲',
	'installing' => '檢查管理員帳號資訊並開始安裝 生存遊戲。',
	'check_admin' => '檢查管理員帳號',
	'check_admin_validity' => '檢查資訊合法性',
	'admin_username_invalid' => '用戶名空, 長度超過限制或包含非法字元.',
	'admin_invalid' => '您的資訊沒有填寫完整.',
	'fail_reason' => '失敗. 原因:',
	'go_back' => '返回上一頁修改',
	'init_file' => '初始化運行目錄與檔',
	'lock_exists' => '您已經安裝過遊戲，為了保證遊戲資料安全，請手動刪除 install.php 文件 和 ./install 檔夾下的所有檔，如果您想重新安裝遊戲，請刪除 gamedata/install.lock 檔，在次運行安裝檔。',

	'config_nonexistence' => '您的 config.inc.php 不存在, 無法繼續安裝, 請用 FTP 將該檔上傳後再試.',
	'config_comment' => '請在下面填寫您的資料庫帳號資訊, 通常情況下不需要修改紅色選項內容.',
	'config_unwriteable' => '安裝嚮導無法寫入配置檔, 請核對現有資訊, 如需修改, 請通過 FTP 將改好的 config.inc.php 上傳.',

	'php_version_430' => '您的 PHP 版本小於 4.3.0, 無法使用 生存遊戲BRA。',
	'attach_enabled' => '允許/最大尺寸 ',
	'attach_enabled_info' => '您可以上傳附件的最大尺寸: ',
	'attach_disabled' => '不允許上傳附件',
	'attach_disabled_info' => '附件上傳或相關操作被伺服器禁止。',
	'mysql_version_323' => '您的 MySQL 版本低於 3.23，安裝無法繼續進行。',
	'unwriteable_template' => '範本目錄(./templates)屬性非 777 或無法寫入，線上編輯範本功能將無法使用。',
	'unwriteable_gamedata' => '資料目錄(./gamedata)屬性非 777 或無法寫入，遊戲運行記錄和備份到資料庫功能將無法使用。',
	'tablepre_invalid' => '您指定的資料表首碼包含點字元(".")，請返回修改。',
	'db_invalid' => '指定的資料庫不存在, 系統也無法自動建立, 無法安裝 生存遊戲BRA.',
	'db_auto_created' => '指定的資料庫不存在, 但系統已成功建立, 可以繼續安裝.',
	'db_not_null' => '資料庫中已經安裝過 生存遊戲BRA, 繼續安裝會清空原有資料.',
	'db_drop_table_confirm' => '繼續安裝會清空全部原有資料，您確定要繼續嗎?',

	'install_abort' => '由於您目錄屬性或伺服器配置原因, 無法繼續安裝 生存遊戲BRA, 請仔細閱讀安裝說明.',
	'install_process' => '您的伺服器可以安裝和使用 生存遊戲BRA, 請進入下一步安裝.',
	'install_succeed' => '恭喜您，生存遊戲BRA 安裝成功！',
	'goto_game' => '點擊這裏進入遊戲',


	'choice_or_new_db' => '請選擇已存在的資料庫或者新建一個資料庫存放遊戲資料',
	'game_db_conf' => '遊戲資料庫設置',
	'show_and_edit_db_conf' => '流覽/編輯當前資料庫配置',
	'choice_one_db' => '請指定一個資料庫',
	'db' => '資料庫',
	'check_user_and_pass' => '檢查資料庫帳號許可權',
	'permission' => '許可權',
	'status' => '狀態',
	
	'username' => '管理員帳號:',
	'username_comment' => '必須為論壇已存在帳號',
	'adminmsg' => '站長留言:',
	'adminmsg_comment' => '給用戶的公告資訊',
	'startmode' => '遊戲開始模式:',
	'startmode_comment' => '遊戲安裝後，可在後臺修改默認開始時間',
	'starttime' => '首局開始時間:',
	'iplimit' => 'IP限制:',
	'iplimit_comment' => '0為不限制，數字為允許同時存活人數。',

	'startmode_0' => '手動設定:',
	'startmode_1' => '每日定時:',
	'startmode_2' => '連續進行:',
	'starttime_0' => '設定時間:',
	'starttime_1' => '立即開始:',
	'year' => '年',
	'month' => '月',
	'day' => '日',
	'hour' => '時',
	'min' => '分',

	'license' => '<p class="subtitle">生存遊戲 BRA中文版授權協議 適用于中文用戶。<br>本遊戲版權屬 龍遊網 www.loongyou.com 所有，未經允許不得用於任何商業用途。</p>',

	'preparation' => '<li>將壓縮包中 生存遊戲BRA 目錄下全部檔和目錄上傳到伺服器.</li><li>修改伺服器上的 config.inc.php 檔以適合您的配置, 有關資料庫帳號資訊請諮詢您的空間服務提供商.</li><li>如果您使用非 WINNT 系統請修改以下屬性:<br>&nbsp; &nbsp; <b>./templates</b> 目錄 777;&nbsp; &nbsp; <b>./gamedata</b> 目錄 777;<br><b>&nbsp; &nbsp;<br></li>',

);

?>
