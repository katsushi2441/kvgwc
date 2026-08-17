<?php
/**
 * デモ用の設定。https://proto.exbridge.jp/kvgwc/
 *
 * 社員ごとのパスワードは台帳(users.json)にあり、この設定には無い。
 * ここに書くのは設置直後に使う初期管理者だけ。
 */

define('KVGWC_SITE_NAME', 'kvgwc デモ');
define('KVGWC_ACCENT', '#1F4E79');
define('KVGWC_AUTH', 'password');

/* 初期管理者。設置直後に最初の管理者として入るためのもの。
   デモでは残しているが、本番では設置後に KVGWC_PASSWORD_HASH を空にしてよい。
   このハッシュは検証スクリプトとは別のパスワードにしてある
   (テスト用の合言葉を本番相当の設定に流用しない)。 */
define('KVGWC_ADMIN_LOGIN', 'admin');
define('KVGWC_PASSWORD_HASH', '$2y$10$h9TNPNlk26VWzxjsUyj8F.kKBtH.Zbb8Boh7y2XrGNB/XaTG1Zpgi');
define('KVGWC_ADMIN_NAME', '初期管理者');
define('KVGWC_ADMIN_EMAIL', '');
define('KVGWC_BASE_URL', '');
define('KVGWC_DEMO', true);

function kvgwc_depts() {
    return array(
        'sales'  => '営業部',
        'seizou' => '製造部',
        'kanri'  => '管理部',
    );
}
