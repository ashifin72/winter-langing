<?php

return [
    'app' => [
        'name' => 'Winter CMS',
        'tagline' => '基本に戻ろう！',
    ],
    'directory' => [
        'create_fail' => "ディレクトリ':name'を作成できません。",
    ],
    'file' => [
        'create_fail' => "ファイル':name'を作成できません。",
    ],
    'combiner' => [
        'not_found' => "コンバイナファイル':name'が見つかりません。",
    ],
    'system' => [
        'name' => 'システム',
        'menu_label' => 'システム',
        'categories' => [
            'cms' => 'CMS',
            'misc' => 'その他',
            'logs' => 'ログ',
            'mail' => 'メール',
            'shop' => 'ショップ',
            'team' => 'チーム',
            'users' => 'ユーザー',
            'system' => 'システム',
            'social' => 'ソーシャル',
            'events' => 'イベント',
            'customers' => 'カスタマー',
            'my_settings' => 'マイ設定'
        ]
    ],
    'plugin' => [
        'unnamed' => '名前なしプラグイン',
        'name' => [
            'label' => 'プラグイン名',
            'help' => '重複しないプラグイン名を付けてください。（例：Winter.Blog）',
        ],
    ],
    'theme' => [
        'label' => 'テーマ',
        'unnamed' => '無名のテーマ',
        'name' => [
            'label' => 'テーマ名',
            'help' => 'テーマには固有のコード名を付けてください。例：Winter.Vanilla',
        ],
    ],
    'themes' => [
        'install' => 'テーマのインストール',
        'search' => 'テーマを検索してインストール',
        'installed' => 'インストール済みのテーマ',
        'no_themes' => 'マーケットプレイスからインストールされたテーマはありません。',
        'recommended' => 'おすすめプラグイン',
        'remove_confirm' => '本当にこのテーマを削除するのですか？',
    ],
    'plugin' => [
        'label' => 'プラグイン',
        'unnamed' => '無名のテーマ',
        'name' => [
            'label' => 'プラグイン名',
            'help' => 'プラグインに固有のコードで名前を付けます。例：Winter.Blog',
        ],
        'by_author' => 'By :name',
    ],
    'plugins' => [
        'manage' => 'プラグイン管理',
        'install' => 'プラグインのインストール',
        'install_products' => 'プロダクトインストール',
        'search' => 'プラグインを検索してインストール',
        'installed' => 'インストール済みプラグイン',
        'no_plugins' => 'マーケットプレイスからインストールされたプラグインはありません。',
        'recommended' => 'おすすめのプラグイン',
        'plugin_label' => 'プラグイン',
        'enable_or_disable' => '有効化・無効化',
        'enable_or_disable_title' => 'プラグインの有効化・無効化',
        'remove' => '削除',
        'refresh' => '更新',
        'disabled_label' => '無効にする',
        'disabled_help' => 'プラグインを無効にすると、アプリケーションから参照されなくなります。',
        'selected_amount' => 'プラグインを:amount個選択',
        'remove_confirm' => '削除していいですか？',
        'remove_success' => 'システムからプラグインを削除しました。',
        'refresh_confirm' => '更新していいですか？',
        'refresh_success' => 'システム内のプラグインを更新しました。',
        'disable_confirm' => '無効にしていいですか？',
        'disable_success' => 'プラグインを無効にしました。',
        'enable_success' => 'プラグインを有効にしました。',
        'unknown_plugin' => 'システムから見知らぬプラグインを削除しました。',
        'select_label' => 'アクションを選択...',
        'bulk_actions_label' => '一括操作',
        'check_yes' => 'はい',
        'check_no' => 'はい',
        'unfrozen' => 'アップデート有効',
        'enabled' => 'プラグインを有効にする',
        'freeze' => 'disable updates for',
        'unfreeze' => 'enable updates for',
        'enable' => '有効化',
        'disable' => '無効化',
        'freeze_label' => 'アップデートを無効にする',
        'unfreeze_label' => 'アップデートを有効にする',
        'enable_label' => 'プラグインを有効にする',
        'disable_label' => 'プラグインを無効にする',
        'refresh_label' => 'プラグインデータをリセット',
        'action_confirm' => 'これらのプラグインを本当に:actionするのでしょうか？',
        'freeze_success' => '選択されたプラグインのアップデートを無効にすることに成功しました。',
        'unfreeze_success' => '選択されたプラグインのアップデートが正常に有効になりました。',
        'replace' => [
            'multi_install_error' => '複数のプラグインの入れ替えは現在未対応です',
        ],
    ],
    'project' => [
        'name' => 'プロジェクト',
        'owner_label' => '所有者',
        'attach' => 'プロジェクト追加',
        'detach' => 'プロジェクト切り離し',
        'none' => '無し',
        'id' => [
            'label' => 'プロジェクトID',
            'help' => 'プロジェクトIDの見つけ方',
            'missing' => '使用するプロジェクトのIDを指定してください。',
        ],
        'detach_confirm' => 'このプロジェクトを切り離しますか？',
        'unbind_success' => 'プロジェクトを切り離しました。',
    ],
    'settings' => [
        'menu_label' => '設定',
        'not_found' => '指定された設定は使えません。',
        'missing_model' => 'モデルの定義が見つかりません。',
        'update_success' => ':name を設定しました。',
        'return' => 'システム設定へ戻る',
        'search' => '検索'
    ],
    'mail' => [
        'log_file' => 'ログファイル',
        'menu_label' => 'メール設定',
        'menu_description' => 'メール設定の管理',
        'general' => '全般',
        'method' => 'メール方法',
        'sender_name' => '送信者名',
        'sender_email' => '送信者メール',
        'php_mail' => 'PHPメール',
        'smtp' => 'SMTP',
        'smtp_address' => 'SMTPアドレス',
        'smtp_authorization' => 'SMTP認証が必要',
        'smtp_authorization_comment' => 'SMTPサーバーの認証が必要な場合、チェックしてください。',
        'smtp_username' => 'ユーザー名',
        'smtp_password' => 'パスワード',
        'smtp_port' => 'SMTPポート',
        'smtp_ssl' => 'SSL接続が必要',
        'smtp_encryption' => 'SMTP暗号化プロトコル',
        'smtp_encryption_none' => '暗号化しない',
        'sendmail' => 'Sendmail',
        'sendmail_path' => 'Sendmailパス',
        'sendmail_path_comment' => 'Sendmailプログラムへのパスを指定してください。',
    ],
    'mail_templates' => [
        'menu_label' => 'メールテンプレート',
        'menu_description' => 'メールテンプレートの変更、ユーザー・アドミニストレーターへの送信、メールレイアウトの管理。',
        'new_template' => '新規テンプレート',
        'new_layout' => '新規レイアウト',
        'new_partial' => '新規パーシャル',
        'template' => 'テンプレート',
        'templates' => 'テンプレートs',
        'partial' => 'パーシャル',
        'partials' => 'パーシャル',
        'menu_layouts_label' => 'メールレイアウト',
        'menu_partials_label' => 'メールパーシャル',
        'layout' => 'レイアウト',
        'layouts' => 'レイアウトs',
        'no_layout' => '-- レイアウト無し --',
        'name' => '名前',
        'name_comment' => 'システム内で一意な名前をつけてください。',
        'code' => 'コード',
        'code_comment' => 'システム内で一意なコードをつけてください。',
        'subject' => 'サブジェクト',
        'subject_comment' => 'Emailメッセージのサブジェクト',
        'description' => '説明',
        'content_html' => 'HTML',
        'content_css' => 'CSS',
        'content_text' => 'プレーンテキスト',
        'test_send' => 'テストメッセージを送信する',
        'test_success' => 'テストメッセージが送信されました。',
        'test_confirm' => 'テストメッセージを:emailに送信してください。続ける？',
        'return' => 'テンプレートリストに戻る',
        'creating' => 'テンプレート作成中...',
        'creating_layout' => 'レイアウト作成中...',
        'saving' => 'テンプレート保存中...',
        'saving_layout' => 'レイアウト保存中...',
        'delete_confirm' => 'テンプレートを削除しますか?',
        'delete_layout_confirm' => 'レイアウトを削除しますか?',
        'deleting' => 'テンプレート削除中...',
        'deleting_layout' => 'レイアウト削除中...',
        'sending' => 'テキストメッセージ送信中...',
        'return' => 'テンプレート一覧に戻る',
        'options' => 'オプション',
        'disable_auto_inline_css' => '自動インラインCSSを無効にする',
    ],
    'install' => [
        'project_label' => 'プロジェクト追加',
        'plugin_label' => 'プラグインインストール',
        'theme_label' => 'テーマインストール',
        'missing_plugin_name' => 'インストールするプラグインの名前を指定してください。',
        'missing_theme_name' => 'インストールするテーマ名を指定してください。',
        'install_completing' => 'インストールを仕上げ中',
        'install_success' => 'プラグインをインストールしました。',
    ],
    'updates' => [
        'title' => 'アップデート管理',
        'name' => 'ソフトウェアアップデート',
        'menu_label' => 'アップデート',
        'menu_description' => 'システムの更新、プラグインとテーマの管理とインストール。',
        'check_label' => 'アップデート確認',
        'retry_label' => '再実行',
        'plugin_name' => '名前',
        'plugin_code' => 'コード',
        'plugin_description' => '説明',
        'plugin_version' => 'バージョン',
        'plugin_author' => '作者',
        'plugin_not_found' => 'プラグインは見つかりませんでした。',
        'plugin_version_not_found' => 'プラグインバージョンが見つかりません',
        'core_current_build' => '現在のビルド',
        'core_build' => 'ビルド :build',
        'core_view_changelog' => 'チェンジログ表示',
        'core_build_help' => '新しいビルドが存在します。',
        'core_downloading' => 'アプリケーションファイルのダウンロード中',
        'core_extracting' => 'アプリケーションファイルの展開中',
        'core_set_build' => 'ビルド番号の設定',
        'update_warnings_title' => 'いくつかの問題が検出され、注意が必要です。',
        'update_warnings_plugin_missing' => ':parent_code プラグインが動作するには、:code がインストールされている必要があります。',
        'update_warnings_plugin_replace' => 'プラグインは:aliasを置き換えますので、競合しないように:aliasを削除してください。',
        'update_warnings_plugin_replace_cli' => 'このプラグインは :alias を置き換えるもので、競合しないように :alias を削除してください。',
        'changelog' => '変更履歴',
        'changelog_view_details' => '詳細表示',
        'plugins' => 'プラグイン',
        'themes' => 'テーマ',
        'disabled' => '無効化',
        'plugin_downloading' => 'プラグインダウンロード中： :name',
        'plugin_extracting' => 'プラグイン展開中： :name',
        'plugin_version_none' => '新プラグイン',
        'plugin_current_version' => '現在のバージョン',
        'theme_new_install' => '新しいテーマのインストール',
        'theme_downloading' => "テーマ ':name' をダウンロードしています",
        'theme_extracting' => "テーマ ':name' を展開しています",
        'update_label' => 'ソフトウェアアップデート',
        'update_completing' => 'アップデート仕上げ中',
        'update_loading' => 'アップデートロード中…',
        'update_success' => 'アップデートしました。',
        'update_failed_label' => 'アップデート失敗',
        'force_label' => '強制アップデート',
        'important_action_required' => 'アクションが必要',
        'important_view_guide' => 'View Upgrade guide',
        'important_view_release_notes' => 'リリースノートを見る',
        'important_alert_text' => 'いくつかのアップデートは、注意が必要です。',
        'details_title' => 'プラグイン詳細',
        'details_view_homepage' => 'ホームページ表示',
        'details_readme' => 'ドキュメント',
        'details_readme_missing' => '提供されているドキュメントはありません',
        'details_changelog' => '変更履歴',
        'details_changelog_missing' => '提供されている変更履歴はありません',
        'details_upgrades' => 'アップグレードガイド',
        'details_upgrades_missing' => '提供されているアップグレードガイドはありません',
        'details_licence' => 'ライセンス',
        'details_licence_missing' => 'ライセンス情報は提供されていません',
        'details_current_version' => '現在のバージョン',
        'details_author' => '作者',
        'found' => [
            'label' => '新しいアップデートあり',
            'help' => 'アップデートしたいソフトウェアをクリックしてください。',
        ],
        'none' => [
            'label' => 'アップデートなし',
            'help' => '新しいアップデートが見つかりません。',
        ],
        'important_action' => [
            'empty' => 'アクション選択',
            'confirm' => '更新の確認',
            'skip' => 'この更新をスキップする(一回のみ)',
            'ignore' => 'この更新をスキップする(常に)',
        ],
    ],
    'server' => [
        'connect_error' => 'サーバー接続エラー。',
        'response_not_found' => '更新サーバーが見つかりません。',
        'response_invalid' => 'サーバーからの無効なレスポンス。',
        'response_empty' => 'サーバーから空のレスポンス。',
        'file_error' => 'サーバーがパッケージ配布に失敗。',
        'file_corrupt' => 'サーバーからのファイルが壊れています。',
    ],
    'behavior' => [
        'missing_property' => ':class クラスは、 :behavior ビヘイビアーにより使用される、 :property プロパティーを定義する必要があります。',
    ],
    'config' => [
        'not_found' => ':location で、 :file 設定ファイルが見つかりません。',
        'required' => ':location　の中の設定で、値の指定が必要な、 :property が見つかりません。',
    ],
    'zip' => [
        'extract_failed' => "コアファイル： ':file' が取り出せません。",
    ],
    'event_log' => [
        'hint' => 'アプリケーションで発生した潜在的なエラーを表示します。例えば、例外やデバッグ情報です。',
        'menu_label' => 'イベントログ',
        'menu_description' => 'システムログメッセージを時間や詳細付きで表示します。',
        'empty_link' => 'イベントログを空にする',
        'empty_loading' => 'イベントログを空にしています...',
        'empty_success' => 'イベントログを空にしました。',
        'return_link' => 'イベントログに戻る',
        'id' => 'ID',
        'id_label' => 'イベントID',
        'created_at' => '日付と時間',
        'message' => 'メッセージ',
        'level' => 'レベル',
        'preview_title' => 'イベント',
    ],
    'request_log' => [
        'hint' => 'This log displays a list of browser requests that may require attention. For example, if a visitor opens a CMS page that cannot be found, a record is created with the status code 404.',
        'menu_label' => 'リクエストログ',
        'menu_description' => '正しくないリクエストやリダイレクトを表示します。例えば "Page not found (404)" です。',
        'empty_link' => 'リクエストログを空にする',
        'empty_loading' => 'リクエストログを空にしています...',
        'empty_success' => 'リクエストログを空にしました。',
        'return_link' => 'リクエストログに戻る',
        'id' => 'ID',
        'id_label' => 'ログID',
        'count' => 'カウンタ',
        'referer' => '参照元',
        'url' => 'URL',
        'status_code' => 'ステータス',
        'preview_title' => 'リクエスト',
    ],
    'permissions' => [
        'name' => 'システム',
        'manage_system_settings' => 'システム設定の管理',
        'manage_software_updates' => 'ソフトウェアアップデートの管理',
        'access_logs' => 'システムログを表示',
        'manage_mail_templates' => 'メールテンプレートの管理',
        'manage_mail_settings' => 'メール設定の管理',
        'manage_other_administrators' => '他のアドミニストレーターの管理',
        'impersonate_users' => 'ユーザーへのなりすまし',
        'manage_preferences' => 'バックエンド設定管理',
        'manage_editor' => 'グローバルなコードエディタの環境設定管理',
        'manage_own_editor' => '個人のコードエディタの管理',
        'view_the_dashboard' => 'ダッシュボードの表示',
        'manage_default_dashboard' => 'デフォルトダッシュボードの管理',
        'manage_branding' => 'バックエンドのカスタマイズ',
    ],

    'log' => [
        'menu_label' => 'ログ設定',
        'menu_description' => 'ロギングを使用する領域を指定します。',
        'default_tab' => 'ロギング',
        'log_events' => 'システムイベントのログ',
        'log_events_comment' => 'システムイベントをファイルベースのログに加え、データベースに保存します。',
        'log_requests' => '不正なリクエストを記録する',
        'log_requests_comment' => '404エラーなど、注意が必要と思われるブラウザのリクエスト。',
        'log_theme' => 'テーマの変更を記録',
        'log_theme_comment' => 'バックエンドを使用してテーマに変更を加えた場合。',
    ],
    'media' => [
        'invalid_path' => "指定されたファイルパスが無効です。':path'が無効です。",
        'folder_size_items' => '項目',
    ],
    'page' => [
        'custom_error' => [
            'label' => 'ページエラー',
            'help' => '申し訳ありませんが、何らかの問題が発生し、ページを表示することができません。',
        ],
        'invalid_token' => [
            'label' => 'セキュリティトークンが無効です。',
        ],
        'maintenance' => [
            'label' => "すぐに戻ってきます!!",
            'help' => "現在メンテナンスのため停止しています。",
            'message' => 'メッセージ:',
            'available_at' => 'やり直してください:',
        ],
    ],
    'pagination' => [
        'previous' => '前',
        'next' => '次',
    ],
];
