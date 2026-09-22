<?php
/**
 * デモの入口。3人のログインを案内してから本体へ送る。
 * 権限の違い(自分のだけ/部署のだけ/全部)は、実際に入れ替えて見ないと伝わらない。
 */
header('Content-Type: text/html; charset=UTF-8');
?><!doctype html>
<html lang="ja"><head><meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<meta name="robots" content="noindex,nofollow">
<title>Kurage Vibe Groupware Core — デモ</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Zen+Maru+Gothic:wght@700;900&family=Zen+Kaku+Gothic+New:wght@400;500;700;900&display=swap">
<style>
:root{--a:#3B5BDB;--a-dark:#2B3F9E;--a-pale:#eef2fd;--ink:#16202e;--muted:#5a6b7d;
      --line:#dde5ee;--shadow:0 14px 40px rgba(20,35,60,.09)}
*{box-sizing:border-box}
body{margin:0;color:var(--ink);background:linear-gradient(180deg,var(--a-pale) 0,#f6f8fb 420px);
     font-family:"Zen Kaku Gothic New","Noto Sans JP","Hiragino Sans",system-ui,sans-serif;
     line-height:1.75;font-size:15px}
h1,h2{font-family:"Zen Maru Gothic","Hiragino Sans",sans-serif;font-weight:900;
      letter-spacing:-.025em;margin:0}
.wrap{max-width:860px;margin:0 auto;padding:52px 18px 70px}
.mark{display:grid;place-items:center;width:66px;height:66px;border-radius:21px;margin:0 auto 20px;
      background:linear-gradient(135deg,var(--a),var(--a-dark));color:#fff;
      font:900 34px/1 "Zen Maru Gothic",sans-serif;box-shadow:0 14px 34px rgba(40,60,150,.28)}
.hero{text-align:center;margin-bottom:38px}
.eyebrow{font-weight:800;font-size:11px;letter-spacing:.2em;color:var(--a-dark);margin:0 0 8px}
.hero h1{font-size:clamp(28px,5.4vw,44px);line-height:1.25}
.hero h1 span{color:var(--a)}
.lead{color:var(--muted);margin:16px auto 0;max-width:620px}
.card{background:rgba(255,255,255,.95);border:1px solid var(--line);border-radius:22px;
      box-shadow:var(--shadow);padding:28px;margin-bottom:20px}
h2{font-size:18px;margin-bottom:6px}
table{border-collapse:collapse;width:100%;font-size:14px;margin-top:16px}
th,td{padding:13px 12px;text-align:left;border-bottom:1px solid #eef2f7}
th{background:var(--a-pale);color:var(--a-dark);font-weight:800;font-size:12.5px;white-space:nowrap}
tr:last-child td{border-bottom:0}
.tw{overflow-x:auto;border:1px solid var(--line);border-radius:14px}
code{background:#eef2f7;padding:3px 9px;border-radius:7px;font-size:13px;font-weight:700;
     font-family:ui-monospace,SFMono-Regular,Menlo,monospace}
.btn{display:inline-flex;align-items:center;gap:8px;background:linear-gradient(135deg,var(--a),var(--a-dark));
     color:#fff;padding:13px 30px;border-radius:999px;text-decoration:none;font-weight:800;
     box-shadow:0 10px 26px rgba(40,60,150,.26)}
.btn:hover{transform:translateY(-1px)}
.note{background:linear-gradient(135deg,#fff6da,#fff2c9);border:1px solid #f0dda3;border-radius:16px;
      padding:15px 20px;font-size:13.5px;color:#7a5a06;font-weight:700}
ul{padding-left:1.15em;margin:12px 0 0}
li{margin-bottom:9px}
.foot{text-align:center;color:var(--muted);font-size:12.5px;margin-top:34px}
.foot b{font-family:"Zen Maru Gothic",sans-serif;color:var(--ink)}
</style></head><body>
<div class="wrap">

  <div class="hero">
    <div class="mark">K</div>
    <p class="eyebrow">KURAGE VIBE GROUPWARE CORE</p>
    <h1>Google Workspace に<br><span>業務アプリ</span>を足す</h1>
    <p class="lead">アカウント管理はゼロ。追加の月額もゼロ。
      今お使いのレンタルサーバーに置くだけ。<b>認証・ユーザー管理・社員管理・共有スケジュール</b>の
      土台があって、業務アプリは<b>AIに頼んで増やせます</b>。</p>
  </div>

  <div class="card">
    <h2>3人ぶんのログインを用意しています</h2>
    <p class="lead" style="margin-top:4px"><b>社員番号とパスワード</b>で入ります。
      同じ画面でも、<b>人によって見える範囲が違います</b>。日報を開いて入れ替えてみてください。</p>
    <div class="tw"><table>
      <tr><th>社員番号</th><th>パスワード</th><th>氏名・役割</th><th>日報で見えるもの</th></tr>
      <tr><td><code>A-003</code></td><td><code>demo-tanto</code></td>
          <td>山田 太郎／担当（営業部）</td><td>自分が書いた日報だけ</td></tr>
      <tr><td><code>A-002</code></td><td><code>demo-chief</code></td>
          <td>鈴木 美和／責任者（営業部）</td><td>営業部ぜんぶ＋<b>承認できる</b></td></tr>
      <tr><td><code>A-001</code></td><td><code>demo-admin</code></td>
          <td>佐藤 健一／管理者（管理部）</td><td>全社ぜんぶ＋<b>社員マスタ</b></td></tr>
    </table></div>
    <p style="margin-top:22px"><a class="btn" href="kvgwc.php">デモを開く →</a></p>
  </div>

  <div class="card">
    <h2>Core に入っているもの</h2>
    <p class="lead" style="margin-top:4px">買い切りの土台に含まれるのは、この4つです。</p>
    <div class="tw"><table>
      <tr><th>機能</th><th>中身</th></tr>
      <tr><td>ユーザー認証</td><td>社員番号＋パスワード／Google Workspace／Microsoft 365</td></tr>
      <tr><td>ユーザー管理</td><td>アカウントの発行・役割・停止・権限の棚卸し</td></tr>
      <tr><td>社員管理</td><td>社員マスタ（社員番号・部署・役職・在籍状態）</td></tr>
      <tr><td>📅 共有スケジュール</td><td>全員に公開・<b>スマホの標準カレンダー</b>に取り込める</td></tr>
    </table></div>

    <h2 style="margin-top:28px">別売りアプリ（このデモに入れてある実装例）</h2>
    <p class="lead" style="margin-top:4px">Core には含まれません。
      <b>「別売りアプリ」の札が付いているもの</b>がそれです。
      どれも<b>定義ファイルを1枚置いただけ</b>で、土台のコードには一切触れていません。</p>
    <div class="tw"><table>
      <tr><th>アプリ</th><th>定義</th><th>特徴</th></tr>
      <tr><td>📢 社内お知らせ</td><td>33行</td><td>全員が読む／書けるのは責任者以上</td></tr>
      <tr><td>📝 日報</td><td>34行</td><td>担当は自分のぶんだけ・責任者が承認</td></tr>
      <tr><td>🔧 設備点検記録</td><td>39行</td><td>承認つき・点検日をカレンダーに出せる</td></tr>
      <tr><td>🧾 経費精算</td><td>35行</td><td>承認つき・承認済みは本人でも編集不可</td></tr>
    </table></div>
    <p class="lead" style="margin-top:16px"><b>必要なアプリが無ければ、AIに頼んで足せます。</b>
      作るのは同じ形の定義ファイル1枚で、入力欄・一覧・検索・CSV・検証・権限は土台が引き受けます。</p>
  </div>

  <div class="card">
    <h2>見どころ</h2>
    <ul>
      <li><b>共有スケジュール</b>は全員が全員のぶんを見られます（予定は共有されないと意味がないため）</li>
      <li><b>日報</b>は担当には自分のぶんしか見えません。責任者は部署ぶんを見て承認します</li>
      <li>担当で承認しようとしても<b>ボタン自体が出ません</b>。権限の判定は1か所にしかありません</li>
      <li><b>📱 スマホに登録</b>から、iPhone・Androidの<b>標準カレンダー</b>に共有スケジュールを
          取り込めます（購読URLを配る方式・専用アプリ不要）</li>
      <li><b>社員マスタ</b>（管理者でログイン → 右上）で、社員の登録・更新・削除ができます。
          <b>人事の情報（部署・役職・在籍状態）とログインの権利（役割）を分けて</b>持ちます</li>
      <li>渡辺さんは<b>アカウントを持たない社員</b>、小林さんは<b>退職者</b>として登録してあります。
          在籍状態を「退職」にすると、アカウントが有効でも<b>ログインできなくなります</b></li>
      <li>パスワードは<b>管理者が発行し、本人が最初のログインで変更</b>します。
          管理者は今のパスワードを見られません（忘れたら再発行）。
          高橋さんは<b>発行したまま未ログイン</b>の状態で置いてあります</li>
      <li><b>アカウント</b>（右上）は「いまログインできる人」の一覧です。
          役割ごとの人数が出て、<b>退職者のアカウントが残っている・長期未ログイン</b>などを
          先頭にまとめて名指しします（権限の棚卸し用）</li>
      <li>本番では <code>KVGWC_AUTH</code> を <code>google</code> にすると
          <b>Google Workspace のアカウントでログイン</b>。社員の登録作業は要りません</li>
    </ul>
  </div>

  <div class="note">
    デモ環境です。入力された内容は誰でも見られます。個人情報・実データは入れないでください。
    データは予告なく初期化します。
  </div>

  <p class="foot"><b>Kurage Vibe Groupware Core</b> v1.0　—　拡張可能なグループウェアCore</p>
</div>
<?php if (($_SERVER['HTTP_HOST'] ?? '') === 'proto.exbridge.jp'): ?><p style="text-align:center;font-size:13px;margin:14px 0;color:#5d6b7a">これはデモです。<a href="https://kappstore.exbridge.jp/app.php?id=c1864cba4ab726b0&amp;ref=kvgwc" target="_blank" rel="noopener">この製品をオンプレミスで導入する（商品ページ）</a></p><?php endif; ?></body></html>
