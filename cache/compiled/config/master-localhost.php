<?php
return [
    '@class' => 'Grav\\Common\\Config\\CompiledConfig',
    'timestamp' => 1565662102,
    'checksum' => '3ea1b7716ce76a8383f9f37c65ac5957',
    'files' => [
        'user/config' => [
            'backups' => [
                'file' => 'user/config/backups.yaml',
                'modified' => 1565626522
            ],
            'media' => [
                'file' => 'user/config/media.yaml',
                'modified' => 1565626522
            ],
            'scheduler' => [
                'file' => 'user/config/scheduler.yaml',
                'modified' => 1565626522
            ],
            'security' => [
                'file' => 'user/config/security.yaml',
                'modified' => 1565626522
            ],
            'site' => [
                'file' => 'user/config/site.yaml',
                'modified' => 1562010982
            ],
            'streams' => [
                'file' => 'user/config/streams.yaml',
                'modified' => 1565626522
            ],
            'system' => [
                'file' => 'user/config/system.yaml',
                'modified' => 1565662102
            ],
            'themes/bootstrap4' => [
                'file' => 'user/config/themes/bootstrap4.yaml',
                'modified' => 1565654076
            ],
            'themes/quark' => [
                'file' => 'user/config/themes/quark.yaml',
                'modified' => 1565656410
            ]
        ],
        'system/config' => [
            'backups' => [
                'file' => 'system/config/backups.yaml',
                'modified' => 1562010982
            ],
            'media' => [
                'file' => 'system/config/media.yaml',
                'modified' => 1562010982
            ],
            'security' => [
                'file' => 'system/config/security.yaml',
                'modified' => 1562010982
            ],
            'site' => [
                'file' => 'system/config/site.yaml',
                'modified' => 1562010982
            ],
            'streams' => [
                'file' => 'system/config/streams.yaml',
                'modified' => 1562010982
            ],
            'system' => [
                'file' => 'system/config/system.yaml',
                'modified' => 1562010982
            ]
        ],
        'user/plugins' => [
            'plugins/markdown-notices' => [
                'file' => 'user/plugins/markdown-notices/markdown-notices.yaml',
                'modified' => 1562010982
            ],
            'plugins/form' => [
                'file' => 'user/plugins/form/form.yaml',
                'modified' => 1562010982
            ],
            'plugins/admin' => [
                'file' => 'user/plugins/admin/admin.yaml',
                'modified' => 1562010982
            ],
            'plugins/problems' => [
                'file' => 'user/plugins/problems/problems.yaml',
                'modified' => 1562010982
            ],
            'plugins/error' => [
                'file' => 'user/plugins/error/error.yaml',
                'modified' => 1562010982
            ],
            'plugins/login' => [
                'file' => 'user/plugins/login/login.yaml',
                'modified' => 1562010982
            ],
            'plugins/email' => [
                'file' => 'user/plugins/email/email.yaml',
                'modified' => 1562010982
            ]
        ]
    ],
    'data' => [
        'plugins' => [
            'markdown-notices' => [
                'enabled' => true,
                'built_in_css' => true,
                'level_classes' => [
                    0 => 'yellow',
                    1 => 'red',
                    2 => 'blue',
                    3 => 'green'
                ]
            ],
            'form' => [
                'enabled' => true,
                'built_in_css' => true,
                'inline_css' => true,
                'refresh_prevention' => false,
                'client_side_validation' => true,
                'inline_errors' => false,
                'files' => [
                    'multiple' => false,
                    'limit' => 10,
                    'destination' => 'self@',
                    'avoid_overwriting' => false,
                    'random_name' => false,
                    'filesize' => 0,
                    'accept' => [
                        0 => 'image/*'
                    ]
                ],
                'recaptcha' => [
                    'version' => '2-checkbox',
                    'theme' => 'light',
                    'site_key' => NULL,
                    'secret_key' => NULL
                ]
            ],
            'admin' => [
                'enabled' => true,
                'route' => '/admin',
                'cache_enabled' => false,
                'theme' => 'grav',
                'logo_text' => '',
                'body_classes' => '',
                'content_padding' => true,
                'twofa_enabled' => true,
                'log_viewer_files' => [
                    0 => 'grav',
                    1 => 'email'
                ],
                'sidebar' => [
                    'activate' => 'tab',
                    'hover_delay' => 100,
                    'size' => 'auto'
                ],
                'dashboard' => [
                    'days_of_stats' => 7
                ],
                'widgets' => [
                    'dashboard-maintenance' => true,
                    'dashboard-statistics' => true,
                    'dashboard-notifications' => true,
                    'dashboard-feed' => true,
                    'dashboard-pages' => true
                ],
                'pages' => [
                    'show_parents' => 'both',
                    'show_modular' => true
                ],
                'session' => [
                    'timeout' => 1800
                ],
                'warnings' => [
                    'delete_page' => true
                ],
                'edit_mode' => 'normal',
                'frontend_preview_target' => 'inline',
                'show_github_msg' => true,
                'pages_list_display_field' => 'title',
                'google_fonts' => false,
                'admin_icons' => 'line-awesome',
                'enable_auto_updates_check' => true,
                'notifications' => [
                    'feed' => true,
                    'dashboard' => true,
                    'plugins' => true,
                    'themes' => true
                ],
                'popularity' => [
                    'enabled' => true,
                    'ignore' => [
                        0 => '/test*',
                        1 => '/modular'
                    ],
                    'history' => [
                        'daily' => 30,
                        'monthly' => 12,
                        'visitors' => 20
                    ]
                ]
            ],
            'problems' => [
                'enabled' => true,
                'built_in_css' => true
            ],
            'error' => [
                'enabled' => true,
                'routes' => [
                    404 => '/error'
                ]
            ],
            'login' => [
                'enabled' => true,
                'built_in_css' => true,
                'route' => NULL,
                'redirect_to_login' => true,
                'redirect_after_login' => NULL,
                'redirect_after_logout' => '/',
                'route_activate' => '/activate_user',
                'route_forgot' => '/forgot_password',
                'route_reset' => '/reset_password',
                'route_profile' => '/user_profile',
                'route_register' => '/user_register',
                'route_unauthorized' => '/user_unauthorized',
                'twofa_enabled' => false,
                'dynamic_page_visibility' => false,
                'parent_acl' => false,
                'protect_protected_page_media' => false,
                'rememberme' => [
                    'enabled' => true,
                    'timeout' => 604800,
                    'name' => 'grav-rememberme'
                ],
                'max_pw_resets_count' => 2,
                'max_pw_resets_interval' => 60,
                'max_login_count' => 5,
                'max_login_interval' => 10,
                'ipv6_subnet_size' => 64,
                'user_registration' => [
                    'enabled' => false,
                    'fields' => [
                        0 => 'username',
                        1 => 'password',
                        2 => 'email',
                        3 => 'fullname',
                        4 => 'title',
                        5 => 'level',
                        6 => 'twofa_enabled'
                    ],
                    'default_values' => [
                        'level' => 'Newbie'
                    ],
                    'access' => [
                        'site' => [
                            'login' => 'true'
                        ]
                    ],
                    'redirect_after_registration' => '',
                    'options' => [
                        'validate_password1_and_password2' => true,
                        'set_user_disabled' => false,
                        'login_after_registration' => false,
                        'send_activation_email' => false,
                        'manually_enable' => false,
                        'send_notification_email' => false,
                        'send_welcome_email' => false
                    ]
                ]
            ],
            'email' => [
                'enabled' => true,
                'from' => NULL,
                'from_name' => NULL,
                'to' => NULL,
                'to_name' => NULL,
                'queue' => [
                    'enabled' => false,
                    'flush_frequency' => '* * * * *',
                    'flush_msg_limit' => 10,
                    'flush_time_limit' => 100
                ],
                'mailer' => [
                    'engine' => 'sendmail',
                    'smtp' => [
                        'server' => 'localhost',
                        'port' => 25,
                        'encryption' => 'none',
                        'user' => '',
                        'password' => ''
                    ],
                    'sendmail' => [
                        'bin' => '/usr/sbin/sendmail -bs'
                    ]
                ],
                'content_type' => 'text/html',
                'debug' => false
            ]
        ],
        'backups' => [
            'purge' => [
                'trigger' => 'space',
                'max_backups_count' => 25,
                'max_backups_space' => 5,
                'max_backups_time' => 365
            ],
            'profiles' => [
                0 => [
                    'name' => 'Default Site Backup',
                    'root' => '/',
                    'schedule' => false,
                    'schedule_at' => '0 3 * * *',
                    'exclude_paths' => '/backup
/cache
/images
/logs
/tmp',
                    'exclude_files' => '.DS_Store
.git
.svn
.hg
.idea
.vscode
node_modules'
                ]
            ]
        ],
        'media' => [
            'types' => [
                'defaults' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb.png',
                    'mime' => 'application/octet-stream',
                    'image' => [
                        'filters' => [
                            'default' => [
                                0 => 'enableProgressive'
                            ]
                        ]
                    ]
                ],
                'jpg' => [
                    'type' => 'image',
                    'thumb' => 'media/thumb-jpg.png',
                    'mime' => 'image/jpeg'
                ],
                'jpe' => [
                    'type' => 'image',
                    'thumb' => 'media/thumb-jpg.png',
                    'mime' => 'image/jpeg'
                ],
                'jpeg' => [
                    'type' => 'image',
                    'thumb' => 'media/thumb-jpg.png',
                    'mime' => 'image/jpeg'
                ],
                'png' => [
                    'type' => 'image',
                    'thumb' => 'media/thumb-png.png',
                    'mime' => 'image/png'
                ],
                'gif' => [
                    'type' => 'animated',
                    'thumb' => 'media/thumb-gif.png',
                    'mime' => 'image/gif'
                ],
                'svg' => [
                    'type' => 'vector',
                    'thumb' => 'media/thumb-svg.png',
                    'mime' => 'image/svg+xml'
                ],
                'mp4' => [
                    'type' => 'video',
                    'thumb' => 'media/thumb-mp4.png',
                    'mime' => 'video/mp4'
                ],
                'mov' => [
                    'type' => 'video',
                    'thumb' => 'media/thumb-mov.png',
                    'mime' => 'video/quicktime'
                ],
                'm4v' => [
                    'type' => 'video',
                    'thumb' => 'media/thumb-m4v.png',
                    'mime' => 'video/x-m4v'
                ],
                'swf' => [
                    'type' => 'video',
                    'thumb' => 'media/thumb-swf.png',
                    'mime' => 'video/x-flv'
                ],
                'flv' => [
                    'type' => 'video',
                    'thumb' => 'media/thumb-flv.png',
                    'mime' => 'video/x-flv'
                ],
                'webm' => [
                    'type' => 'video',
                    'thumb' => 'media/thumb-webm.png',
                    'mime' => 'video/webm'
                ],
                'ogv' => [
                    'type' => 'video',
                    'thumb' => 'media/thumb-ogg.png',
                    'mime' => 'video/ogg'
                ],
                'mp3' => [
                    'type' => 'audio',
                    'thumb' => 'media/thumb-mp3.png',
                    'mime' => 'audio/mp3'
                ],
                'ogg' => [
                    'type' => 'audio',
                    'thumb' => 'media/thumb-ogg.png',
                    'mime' => 'audio/ogg'
                ],
                'wma' => [
                    'type' => 'audio',
                    'thumb' => 'media/thumb-wma.png',
                    'mime' => 'audio/wma'
                ],
                'm4a' => [
                    'type' => 'audio',
                    'thumb' => 'media/thumb-m4a.png',
                    'mime' => 'audio/m4a'
                ],
                'wav' => [
                    'type' => 'audio',
                    'thumb' => 'media/thumb-wav.png',
                    'mime' => 'audio/wav'
                ],
                'aiff' => [
                    'type' => 'audio',
                    'thumb' => 'media/thumb-aif.png',
                    'mime' => 'audio/aiff'
                ],
                'aif' => [
                    'type' => 'audio',
                    'thumb' => 'media/thumb-aif.png',
                    'mime' => 'audio/aif'
                ],
                'txt' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-txt.png',
                    'mime' => 'text/plain'
                ],
                'xml' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-xml.png',
                    'mime' => 'application/xml'
                ],
                'doc' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-doc.png',
                    'mime' => 'application/msword'
                ],
                'docx' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-docx.png',
                    'mime' => 'application/msword'
                ],
                'xls' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-xls.png',
                    'mime' => 'application/vnd.ms-excel'
                ],
                'xlsx' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-xlsx.png',
                    'mime' => 'application/vnd.ms-excel'
                ],
                'ppt' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-ppt.png',
                    'mime' => 'application/vnd.ms-powerpoint'
                ],
                'pptx' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-pptx.png',
                    'mime' => 'application/vnd.ms-powerpoint'
                ],
                'pps' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-pps.png',
                    'mime' => 'application/vnd.ms-powerpoint'
                ],
                'rtf' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-rtf.png',
                    'mime' => 'application/rtf'
                ],
                'bmp' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-bmp.png',
                    'mime' => 'image/bmp'
                ],
                'tiff' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-tiff.png',
                    'mime' => 'image/tiff'
                ],
                'mpeg' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-mpg.png',
                    'mime' => 'video/mpeg'
                ],
                'mpg' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-mpg.png',
                    'mime' => 'video/mpeg'
                ],
                'mpe' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-mpe.png',
                    'mime' => 'video/mpeg'
                ],
                'avi' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-avi.png',
                    'mime' => 'video/msvideo'
                ],
                'wmv' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-wmv.png',
                    'mime' => 'video/x-ms-wmv'
                ],
                'html' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-html.png',
                    'mime' => 'text/html'
                ],
                'htm' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-html.png',
                    'mime' => 'text/html'
                ],
                'ics' => [
                    'type' => 'iCal',
                    'thumb' => 'media/thumb-ics.png',
                    'mime' => 'text/calendar'
                ],
                'pdf' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-pdf.png',
                    'mime' => 'application/pdf'
                ],
                'ai' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-ai.png',
                    'mime' => 'image/ai'
                ],
                'psd' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-psd.png',
                    'mime' => 'image/psd'
                ],
                'zip' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-zip.png',
                    'mime' => 'application/zip'
                ],
                '7z' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-7z.png',
                    'mime' => 'application/x-7z-compressed'
                ],
                'gz' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-gz.png',
                    'mime' => 'application/gzip'
                ],
                'tar' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-tar.png',
                    'mime' => 'application/x-tar'
                ],
                'css' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-css.png',
                    'mime' => 'text/css'
                ],
                'js' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-js.png',
                    'mime' => 'application/javascript'
                ],
                'json' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-json.png',
                    'mime' => 'application/json'
                ]
            ]
        ],
        'security' => [
            'xss_whitelist' => [
                0 => 'admin.super'
            ],
            'xss_enabled' => [
                'on_events' => true,
                'invalid_protocols' => true,
                'moz_binding' => true,
                'html_inline_styles' => true,
                'dangerous_tags' => true
            ],
            'xss_invalid_protocols' => [
                0 => 'javascript',
                1 => 'livescript',
                2 => 'vbscript',
                3 => 'mocha',
                4 => 'feed',
                5 => 'data'
            ],
            'xss_dangerous_tags' => [
                0 => 'applet',
                1 => 'meta',
                2 => 'xml',
                3 => 'blink',
                4 => 'link',
                5 => 'style',
                6 => 'script',
                7 => 'embed',
                8 => 'object',
                9 => 'iframe',
                10 => 'frame',
                11 => 'frameset',
                12 => 'ilayer',
                13 => 'layer',
                14 => 'bgsound',
                15 => 'title',
                16 => 'base'
            ],
            'uploads_dangerous_extensions' => [
                0 => 'php',
                1 => 'html',
                2 => 'htm',
                3 => 'js',
                4 => 'exe'
            ],
            'salt' => 'JAKBgET3ndFDp8'
        ],
        'site' => [
            'title' => 'Grav',
            'default_lang' => 'en',
            'author' => [
                'name' => 'Joe Bloggs',
                'email' => 'joe@example.com'
            ],
            'taxonomies' => [
                0 => 'category',
                1 => 'tag'
            ],
            'metadata' => [
                'description' => 'Grav is an easy to use, yet powerful, open source flat-file CMS'
            ],
            'summary' => [
                'enabled' => true,
                'format' => 'short',
                'size' => 300,
                'delimiter' => '==='
            ],
            'redirects' => NULL,
            'routes' => NULL,
            'blog' => [
                'route' => '/blog'
            ]
        ],
        'streams' => [
            'schemes' => [
                'image' => [
                    'type' => 'Stream',
                    'paths' => [
                        0 => 'user://images',
                        1 => 'system://images'
                    ]
                ],
                'page' => [
                    'type' => 'ReadOnlyStream',
                    'paths' => [
                        0 => 'user://pages'
                    ]
                ],
                'account' => [
                    'type' => 'ReadOnlyStream',
                    'paths' => [
                        0 => 'user://accounts'
                    ]
                ]
            ]
        ],
        'system' => [
            'absolute_urls' => false,
            'timezone' => '',
            'default_locale' => NULL,
            'param_sep' => ':',
            'wrapped_site' => false,
            'reverse_proxy_setup' => false,
            'force_ssl' => false,
            'force_lowercase_urls' => true,
            'custom_base_url' => '',
            'username_regex' => '^[a-z0-9_-]{3,16}$',
            'pwd_regex' => '(?=.*\\d)(?=.*[a-z])(?=.*[A-Z]).{8,}',
            'intl_enabled' => true,
            'languages' => [
                'supported' => [
                    
                ],
                'default_lang' => NULL,
                'include_default_lang' => true,
                'pages_fallback_only' => false,
                'translations' => true,
                'translations_fallback' => true,
                'session_store_active' => false,
                'http_accept_language' => false,
                'override_locale' => false
            ],
            'home' => [
                'alias' => '/home',
                'hide_in_urls' => false
            ],
            'pages' => [
                'theme' => 'quark',
                'order' => [
                    'by' => 'default',
                    'dir' => 'asc'
                ],
                'list' => [
                    'count' => 20
                ],
                'dateformat' => [
                    'default' => NULL,
                    'short' => 'jS M Y',
                    'long' => 'F jS \\a\\t g:ia'
                ],
                'publish_dates' => true,
                'process' => [
                    'markdown' => true,
                    'twig' => false
                ],
                'twig_first' => false,
                'never_cache_twig' => false,
                'events' => [
                    'page' => true,
                    'twig' => true
                ],
                'markdown' => [
                    'extra' => true,
                    'auto_line_breaks' => false,
                    'auto_url_links' => false,
                    'escape_markup' => false,
                    'special_chars' => [
                        '>' => 'gt',
                        '<' => 'lt'
                    ]
                ],
                'types' => [
                    0 => 'html',
                    1 => 'htm',
                    2 => 'xml',
                    3 => 'txt',
                    4 => 'json',
                    5 => 'rss',
                    6 => 'atom'
                ],
                'append_url_extension' => '',
                'expires' => 604800,
                'cache_control' => NULL,
                'last_modified' => false,
                'etag' => false,
                'vary_accept_encoding' => false,
                'redirect_default_route' => false,
                'redirect_default_code' => '302',
                'redirect_trailing_slash' => true,
                'ignore_files' => [
                    0 => '.DS_Store'
                ],
                'ignore_folders' => [
                    0 => '.git',
                    1 => '.idea'
                ],
                'ignore_hidden' => true,
                'hide_empty_folders' => false,
                'url_taxonomy_filters' => true,
                'frontmatter' => [
                    'process_twig' => false,
                    'ignore_fields' => [
                        0 => 'form',
                        1 => 'forms'
                    ]
                ]
            ],
            'cache' => [
                'enabled' => true,
                'check' => [
                    'method' => 'file'
                ],
                'driver' => 'auto',
                'prefix' => 'g',
                'purge_at' => '0 4 * * *',
                'clear_at' => '0 3 * * *',
                'clear_job_type' => 'standard',
                'clear_images_by_default' => true,
                'cli_compatibility' => false,
                'lifetime' => 604800,
                'gzip' => false,
                'allow_webserver_gzip' => false,
                'redis' => [
                    'socket' => false
                ]
            ],
            'twig' => [
                'cache' => true,
                'debug' => true,
                'auto_reload' => true,
                'autoescape' => false,
                'undefined_functions' => true,
                'undefined_filters' => true,
                'umask_fix' => false
            ],
            'assets' => [
                'css_pipeline' => false,
                'css_pipeline_include_externals' => true,
                'css_pipeline_before_excludes' => true,
                'css_minify' => true,
                'css_minify_windows' => false,
                'css_rewrite' => true,
                'js_pipeline' => false,
                'js_pipeline_include_externals' => true,
                'js_pipeline_before_excludes' => true,
                'js_minify' => true,
                'enable_asset_timestamp' => false,
                'collections' => [
                    'jquery' => 'system://assets/jquery/jquery-2.x.min.js'
                ]
            ],
            'errors' => [
                'display' => 1,
                'log' => true
            ],
            'log' => [
                'handler' => 'file',
                'syslog' => [
                    'facility' => 'local6'
                ]
            ],
            'debugger' => [
                'enabled' => false,
                'provider' => 'clockwork',
                'censored' => false,
                'shutdown' => [
                    'close_connection' => true
                ],
                'twig' => true
            ],
            'images' => [
                'default_image_quality' => 85,
                'cache_all' => false,
                'cache_perms' => '0755',
                'debug' => false,
                'auto_fix_orientation' => false,
                'seofriendly' => false
            ],
            'media' => [
                'enable_media_timestamp' => false,
                'unsupported_inline_types' => [
                    
                ],
                'allowed_fallback_types' => [
                    
                ],
                'auto_metadata_exif' => false,
                'upload_limit' => 2097152
            ],
            'session' => [
                'enabled' => true,
                'initialize' => true,
                'timeout' => 1800,
                'name' => 'grav-site',
                'uniqueness' => 'path',
                'secure' => false,
                'httponly' => true,
                'split' => true,
                'path' => NULL
            ],
            'gpm' => [
                'releases' => 'stable',
                'proxy_url' => NULL,
                'method' => 'auto',
                'verify_peer' => true,
                'official_gpm_only' => true
            ],
            'accounts' => [
                'type' => 'data',
                'storage' => 'file'
            ],
            'strict_mode' => [
                'yaml_compat' => true,
                'twig_compat' => true
            ]
        ],
        'scheduler' => [
            
        ],
        'themes' => [
            'bootstrap4' => [
                'navbar_style' => 'navbar-light',
                'navbar_bgcolor' => '#ffffff',
                'dropdown' => [
                    'enabled' => false
                ]
            ],
            'quark' => [
                'enabled' => true,
                'production-mode' => true,
                'grid-size' => 'grid-lg',
                'header-fixed' => true,
                'header-animated' => true,
                'header-dark' => false,
                'header-transparent' => true,
                'sticky-footer' => true,
                'blog-page' => '/blog',
                'spectre' => [
                    'exp' => false,
                    'icons' => false
                ],
                'custom_logo' => [
                    'user/themes/quark/images/logo/logo.svg' => [
                        'name' => 'logo.svg',
                        'type' => 'image/svg+xml',
                        'size' => 7484,
                        'path' => 'user/themes/quark/images/logo/logo.svg'
                    ]
                ],
                'custom_logo_mobile' => [
                    'user/themes/quark/images/logo/logo.svg' => [
                        'name' => 'logo.svg',
                        'type' => 'image/svg+xml',
                        'size' => 7484,
                        'path' => 'user/themes/quark/images/logo/logo.svg'
                    ]
                ]
            ]
        ]
    ]
];
