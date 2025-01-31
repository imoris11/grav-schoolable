<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Users/richardigbiriki/send/grav/user/plugins/admin/blueprints.yaml',
    'modified' => 1562010982,
    'data' => [
        'name' => 'Admin Panel',
        'version' => '1.10.0-beta.4',
        'testing' => true,
        'description' => 'Adds an advanced administration panel to manage your site',
        'icon' => 'empire',
        'author' => [
            'name' => 'Team Grav',
            'email' => 'devs@getgrav.org',
            'url' => 'http://getgrav.org'
        ],
        'homepage' => 'https://github.com/getgrav/grav-plugin-admin',
        'keywords' => 'admin, plugin, manager, panel',
        'bugs' => 'https://github.com/getgrav/grav-plugin-admin/issues',
        'docs' => 'https://github.com/getgrav/grav-plugin-admin/blob/develop/README.md',
        'license' => 'MIT',
        'dependencies' => [
            0 => [
                'name' => 'grav',
                'version' => '>=1.7.0-beta.4'
            ],
            1 => [
                'name' => 'form',
                'version' => '>=3.0.7'
            ],
            2 => [
                'name' => 'login',
                'version' => '>=3.0.3'
            ],
            3 => [
                'name' => 'email',
                'version' => '>=3.0.2'
            ]
        ],
        'form' => [
            'validation' => 'loose',
            'fields' => [
                'Basics' => [
                    'type' => 'section',
                    'title' => 'Basics',
                    'underline' => false
                ],
                'enabled' => [
                    'type' => 'hidden',
                    'label' => 'PLUGIN_ADMIN.PLUGIN_STATUS',
                    'highlight' => 1,
                    'default' => 0,
                    'options' => [
                        1 => 'PLUGIN_ADMIN.ENABLED',
                        0 => 'PLUGIN_ADMIN.DISABLED'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'cache_enabled' => [
                    'type' => 'toggle',
                    'label' => 'PLUGIN_ADMIN.ADMIN_CACHING',
                    'help' => 'PLUGIN_ADMIN.ADMIN_CACHING_HELP',
                    'highlight' => 0,
                    'options' => [
                        1 => 'PLUGIN_ADMIN.YES',
                        0 => 'PLUGIN_ADMIN.NO'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'twofa_enabled' => [
                    'type' => 'toggle',
                    'label' => 'PLUGIN_LOGIN.2FA_TITLE',
                    'help' => 'PLUGIN_LOGIN.2FA_ENABLED_HELP',
                    'default' => 1,
                    'highlight' => 1,
                    'options' => [
                        1 => 'PLUGIN_ADMIN.YES',
                        0 => 'PLUGIN_ADMIN.NO'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'route' => [
                    'type' => 'text',
                    'label' => 'Administrator path',
                    'size' => 'medium',
                    'placeholder' => 'Default route for administrator (relative to base)',
                    'help' => 'If you want to change the URL for the administrator, you can provide a path here'
                ],
                'logo_text' => [
                    'type' => 'text',
                    'label' => 'Logo text',
                    'size' => 'medium',
                    'placeholder' => 'Grav',
                    'help' => 'Text to display in place of the default Grav logo'
                ],
                'content_padding' => [
                    'type' => 'toggle',
                    'label' => 'PLUGIN_ADMIN.CONTENT_PADDING',
                    'help' => 'PLUGIN_ADMIN.CONTENT_PADDING_HELP',
                    'highlight' => 1,
                    'options' => [
                        1 => 'PLUGIN_ADMIN.YES',
                        0 => 'PLUGIN_ADMIN.NO'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'body_classes' => [
                    'type' => 'text',
                    'label' => 'Body classes',
                    'size' => 'medium',
                    'help' => 'Add a space separated name of custom body classes'
                ],
                'sidebar.activate' => [
                    'type' => 'select',
                    'label' => 'Sidebar Activation',
                    'help' => 'Control how the sidebar is activated',
                    'size' => 'small',
                    'default' => 'tab',
                    'options' => [
                        'tab' => 'Tab',
                        'hover' => 'Hover'
                    ]
                ],
                'sidebar.hover_delay' => [
                    'type' => 'text',
                    'size' => 'x-small',
                    'append' => 'millseconds',
                    'label' => 'Hover delay',
                    'default' => 500,
                    'validate' => [
                        'type' => 'number',
                        'min' => 1
                    ]
                ],
                'sidebar.size' => [
                    'type' => 'select',
                    'label' => 'Sidebar Size',
                    'help' => 'Control the width of the sidebar',
                    'size' => 'medium',
                    'default' => 'auto',
                    'options' => [
                        'auto' => 'Automatic width',
                        'small' => 'Small width'
                    ]
                ],
                'theme' => [
                    'type' => 'hidden',
                    'label' => 'Theme',
                    'default' => 'grav'
                ],
                'edit_mode' => [
                    'type' => 'select',
                    'label' => 'Edit mode',
                    'size' => 'small',
                    'default' => 'normal',
                    'options' => [
                        'normal' => 'Normal',
                        'expert' => 'Expert'
                    ],
                    'help' => 'Auto will use blueprint if available, if none found, it will use "Expert" mode.'
                ],
                'frontend_preview_target' => [
                    'type' => 'select',
                    'label' => 'Preview pages target',
                    'size' => 'medium',
                    'default' => 'inline',
                    'options' => [
                        'inline' => 'Inline in Admin',
                        '_blank' => 'New tab',
                        '_self' => 'Current tab'
                    ]
                ],
                'pages.show_parents' => [
                    'type' => 'select',
                    'size' => 'medium',
                    'label' => 'Parent dropdown',
                    'highlight' => 1,
                    'options' => [
                        'both' => 'Show slug and folder',
                        'folder' => 'Show folder',
                        'fullpath' => 'Show fullpath'
                    ]
                ],
                'pages.parents_levels' => [
                    'type' => 'text',
                    'label' => 'Parents Levels',
                    'size' => 'small',
                    'help' => 'The number of levels to show in parent select list'
                ],
                'pages.show_modular' => [
                    'type' => 'toggle',
                    'label' => 'Modular parents',
                    'highlight' => 1,
                    'default' => 1,
                    'options' => [
                        1 => 'PLUGIN_ADMIN.ENABLED',
                        0 => 'PLUGIN_ADMIN.DISABLED'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ],
                    'help' => 'Show modular pages in the parent select list'
                ],
                'google_fonts' => [
                    'type' => 'toggle',
                    'label' => 'Use Google Fonts',
                    'highlight' => 0,
                    'default' => 0,
                    'options' => [
                        1 => 'PLUGIN_ADMIN.ENABLED',
                        0 => 'PLUGIN_ADMIN.DISABLED'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ],
                    'help' => 'Use Google custom fonts.  Disable this to use Helvetica. Useful when using Cyrillic and other languages with unsupported characters.'
                ],
                'show_beta_msg' => [
                    'type' => 'hidden'
                ],
                'show_github_msg' => [
                    'type' => 'toggle',
                    'label' => 'Show GitHub Link',
                    'highlight' => 1,
                    'default' => 1,
                    'options' => [
                        1 => 'PLUGIN_ADMIN.ENABLED',
                        0 => 'PLUGIN_ADMIN.DISABLED'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ],
                    'help' => 'Show the "Found an issue? Please report it on GitHub." message.'
                ],
                'pages_list_display_field' => [
                    'type' => 'text',
                    'size' => 'small',
                    'label' => 'Pages List Display Field',
                    'help' => 'Field of the page to use in the list of pages if present. Defaults/Fallback to title.'
                ],
                'enable_auto_updates_check' => [
                    'type' => 'toggle',
                    'label' => 'Automatically check for updates',
                    'highlight' => 1,
                    'default' => 1,
                    'options' => [
                        1 => 'PLUGIN_ADMIN.ENABLED',
                        0 => 'PLUGIN_ADMIN.DISABLED'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ],
                    'help' => 'Shows an informative message, in the admin panel, when an update is available.'
                ],
                'session.timeout' => [
                    'type' => 'text',
                    'size' => 'small',
                    'label' => 'Session Timeout',
                    'append' => 'secs',
                    'help' => 'Sets the session timeout in seconds',
                    'validate' => [
                        'type' => 'number',
                        'min' => 1
                    ]
                ],
                'warnings.delete_page' => [
                    'type' => 'toggle',
                    'label' => 'Warn on page delete',
                    'highlight' => 1,
                    'default' => 1,
                    'options' => [
                        1 => 'PLUGIN_ADMIN.ENABLED',
                        0 => 'PLUGIN_ADMIN.DISABLED'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ],
                    'help' => 'Ask the user confirmation when deleting a page'
                ],
                'hide_page_types' => [
                    'type' => 'array',
                    'label' => 'Hide page types in Admin',
                    'value_only' => true
                ],
                'hide_modular_page_types' => [
                    'type' => 'array',
                    'label' => 'Hide modular page types in Admin',
                    'value_only' => true
                ],
                'log_viewer_files' => [
                    'type' => 'selectize',
                    'size' => 'medium',
                    'label' => 'PLUGIN_ADMIN.LOG_VIEWER_FILES',
                    'help' => 'PLUGIN_ADMIN.LOG_VIEWER_FILES_HELP',
                    'classes' => 'fancy',
                    'validate' => [
                        'type' => 'commalist'
                    ]
                ],
                'MediaResize' => [
                    'type' => 'section',
                    'title' => 'Page Media Image Resizer',
                    'underline' => true
                ],
                'MediaResizeNote' => [
                    'type' => 'spacer',
                    'text' => 'PLUGIN_ADMIN.PAGEMEDIA_RESIZER',
                    'markdown' => true
                ],
                'pagemedia.resize_width' => [
                    'type' => 'number',
                    'size' => 'x-small',
                    'append' => 'pixels',
                    'label' => 'Resize Width',
                    'default' => 0,
                    'validate' => [
                        'type' => 'number'
                    ],
                    'help' => 'Resize wide images down to the set value'
                ],
                'pagemedia.resize_height' => [
                    'type' => 'number',
                    'size' => 'x-small',
                    'append' => 'pixels',
                    'label' => 'Resize Height',
                    'default' => 0,
                    'validate' => [
                        'type' => 'number'
                    ],
                    'help' => 'Resize tall images down to the set value'
                ],
                'pagemedia.res_min_width' => [
                    'type' => 'number',
                    'size' => 'x-small',
                    'append' => 'pixels',
                    'label' => 'Resolution Min Width',
                    'default' => 0,
                    'validate' => [
                        'type' => 'number'
                    ],
                    'help' => 'The minimum width allowed for an image to be added'
                ],
                'pagemedia.res_min_height' => [
                    'type' => 'number',
                    'size' => 'x-small',
                    'append' => 'pixels',
                    'label' => 'Resolution Min Height',
                    'default' => 0,
                    'validate' => [
                        'type' => 'number'
                    ],
                    'help' => 'The minimum height allowed for an image to be added'
                ],
                'pagemedia.res_max_width' => [
                    'type' => 'number',
                    'size' => 'x-small',
                    'append' => 'pixels',
                    'label' => 'Resolution Max Width',
                    'default' => 0,
                    'validate' => [
                        'type' => 'number'
                    ],
                    'help' => 'The maximum width allowed for an image to be added'
                ],
                'pagemedia.res_max_height' => [
                    'type' => 'number',
                    'size' => 'x-small',
                    'append' => 'pixels',
                    'label' => 'Resolution Max Height',
                    'default' => 0,
                    'validate' => [
                        'type' => 'number'
                    ],
                    'help' => 'The maximum height allowed for an image to be added'
                ],
                'pagemedia.resize_quality' => [
                    'type' => 'number',
                    'size' => 'x-small',
                    'append' => '0...1',
                    'label' => 'Resize Quality',
                    'default' => 0.8,
                    'validate' => [
                        'type' => 'number',
                        'step' => 0.01
                    ],
                    'help' => 'The quality to use when resizing an image. Between 0 and 1 value.'
                ],
                'Dashboard' => [
                    'type' => 'section',
                    'title' => 'Dashboard',
                    'underline' => true
                ],
                'widgets.dashboard-maintenance' => [
                    'type' => 'toggle',
                    'label' => 'Maintenance Widget',
                    'highlight' => 1,
                    'default' => 1,
                    'options' => [
                        1 => 'PLUGIN_ADMIN.ENABLED',
                        0 => 'PLUGIN_ADMIN.DISABLED'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ],
                    'help' => 'Display dashboard maintenance widget'
                ],
                'widgets.dashboard-statistics' => [
                    'type' => 'toggle',
                    'label' => 'Statistics Widget',
                    'highlight' => 1,
                    'default' => 1,
                    'options' => [
                        1 => 'PLUGIN_ADMIN.ENABLED',
                        0 => 'PLUGIN_ADMIN.DISABLED'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ],
                    'help' => 'Display dashboard statistics widget'
                ],
                'widgets.dashboard-notifications' => [
                    'type' => 'toggle',
                    'label' => 'Notifications Feed Widget',
                    'highlight' => 1,
                    'default' => 1,
                    'options' => [
                        1 => 'PLUGIN_ADMIN.ENABLED',
                        0 => 'PLUGIN_ADMIN.DISABLED'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ],
                    'help' => 'Display dashboard notifications feed widget'
                ],
                'widgets.dashboard-feed' => [
                    'type' => 'toggle',
                    'label' => 'News Feed Widget',
                    'highlight' => 1,
                    'default' => 1,
                    'options' => [
                        1 => 'PLUGIN_ADMIN.ENABLED',
                        0 => 'PLUGIN_ADMIN.DISABLED'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ],
                    'help' => 'Display dashboard news feed widget'
                ],
                'widgets.dashboard-pages' => [
                    'type' => 'toggle',
                    'label' => 'Latest Pages Widget',
                    'highlight' => 1,
                    'default' => 1,
                    'options' => [
                        1 => 'PLUGIN_ADMIN.ENABLED',
                        0 => 'PLUGIN_ADMIN.DISABLED'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ],
                    'help' => 'Display dashboard latest pages widget'
                ],
                'Notifications' => [
                    'type' => 'section',
                    'title' => 'Notifications',
                    'underline' => true
                ],
                'notifications.feed' => [
                    'type' => 'toggle',
                    'label' => 'Feed Notifications',
                    'highlight' => 1,
                    'default' => 1,
                    'options' => [
                        1 => 'PLUGIN_ADMIN.ENABLED',
                        0 => 'PLUGIN_ADMIN.DISABLED'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ],
                    'help' => 'Display feed-based notifications'
                ],
                'notifications.dashboard' => [
                    'type' => 'toggle',
                    'label' => 'Dashboard Notifications',
                    'highlight' => 1,
                    'default' => 1,
                    'options' => [
                        1 => 'PLUGIN_ADMIN.ENABLED',
                        0 => 'PLUGIN_ADMIN.DISABLED'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ],
                    'help' => 'Display dashboard-based notifications'
                ],
                'notifications.plugins' => [
                    'type' => 'toggle',
                    'label' => 'Plugins Notifications',
                    'highlight' => 1,
                    'default' => 1,
                    'options' => [
                        1 => 'PLUGIN_ADMIN.ENABLED',
                        0 => 'PLUGIN_ADMIN.DISABLED'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ],
                    'help' => 'Display plugins-targeted notifications'
                ],
                'notifications.themes' => [
                    'type' => 'toggle',
                    'label' => 'Themes Notifications',
                    'highlight' => 1,
                    'default' => 1,
                    'options' => [
                        1 => 'PLUGIN_ADMIN.ENABLED',
                        0 => 'PLUGIN_ADMIN.DISABLED'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ],
                    'help' => 'Display themes-targeted notifications'
                ],
                'Popularity' => [
                    'type' => 'section',
                    'title' => 'Popularity',
                    'underline' => true
                ],
                'popularity.enabled' => [
                    'type' => 'toggle',
                    'label' => 'Visitor tracking',
                    'highlight' => 1,
                    'default' => 1,
                    'options' => [
                        1 => 'PLUGIN_ADMIN.ENABLED',
                        0 => 'PLUGIN_ADMIN.DISABLED'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ],
                    'help' => 'Enable the visitors stats collecting feature'
                ],
                'dashboard.days_of_stats' => [
                    'type' => 'text',
                    'label' => 'Days of stats',
                    'append' => 'days',
                    'size' => 'x-small',
                    'default' => 7,
                    'help' => 'Keep stats for the specified number of days, then drop them',
                    'validate' => [
                        'type' => 'int'
                    ]
                ],
                'popularity.ignore' => [
                    'type' => 'array',
                    'label' => 'Ignore',
                    'size' => 'large',
                    'help' => 'URLs to ignore',
                    'default' => [
                        0 => '/test*',
                        1 => '/modular'
                    ],
                    'value_only' => true,
                    'placeholder_value' => '/ignore-this-route'
                ],
                'popularity.history.daily' => [
                    'type' => 'hidden',
                    'label' => 'Daily history',
                    'default' => 30
                ],
                'popularity.history.monthly' => [
                    'type' => 'hidden',
                    'label' => 'Monthly history',
                    'default' => 12
                ],
                'popularity.history.visitors' => [
                    'type' => 'hidden',
                    'label' => 'Visitors history',
                    'default' => 20
                ]
            ]
        ]
    ]
];
