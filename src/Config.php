<?php

namespace JWOBDN;

class Config
{

    /*
    * Plugins option
    * storage in database the option value
    * Array ('option_name'=>'default value')
    * @example ["example_data" => 'foo',]
    * @return void
    */
    public $plugin_options = [
        "precor_validez_oferta" => "08 DIAS",
        "precor_text_no_hay_stock" => "No hay stock para @nombre_producto, por favor contacte con su ejecutivo de ventas.",
        "precor_emails_reclamos" => "pepito@gmail.com"
    ];
    /**
     * Language Option
     * define a unique word for translate call
     */
    public $language_name = 'antonella_precor_options';
    /**
     * Plugin text prefix
     * define a unique word for this plugin
     */
    public $plugin_prefix = 'ch_nella_precor_options';
    /**
     * POST data process
     * get the post data and execute the function
     * @example ['post_data'=>'JWOBDN::function']
     */
    public $post = [
        "updateOptionsConfigPrecor" => __NAMESPACE__ . '\AdminController::saveOptions'
    ];
    /**
     * GET data process
     * get the get data and execute the function
     * @example ['get_data'=>'JWOBDN::function']
     */
    public $get = [];
    /**
     * add_filter data functions
     * @input array
     * @example ['body_class','JWOBDN::function',10,2]
     * @example ['body_class',['JWOBDN','function'],10,2]
     */
    public $add_filter = [];
    /**
     * add_action data functions
     * @input array
     * @example ['body_class','JWOBDN::function',10,2]
     * @example ['body_class',['JWOBDN','function'],10,2]
     */
    public $add_action = [
        ["rest_api_init", __NAMESPACE__ . '\WsStockController::getStockPrecor'],
    ];
    /**
     * add custom shortcodes
     * @input array
     * @example [['example','JWOBDN\ExampleController::example_shortcode']]
     */
    public $shortcodes = [
        ['example', 'JWOBDN\ExampleController::example_shortcode']
    ];
    /**
     * add Gutenberg's blocks
     */
    public $gutenberg_blocks = [];
    /**
     * Dashboard

     * @reference: https://codex.wordpress.org/Function_Reference/wp_add_dashboard_widget
     */
    public $dashboard = [
        [
            'slug'      => '',
            'name'      => '',
            'function'  => '', // example: __NAMESPACE__.'\Admin\PageAdmin::DashboardExample',
            'callback'  => '',
            'args'      => '',
        ]

    ];
    /**
     * Files for use in Dashboard
     */
    public $files_dashboard = [];

    /*
    * Plugin menu
    * set your menu option here
    */
    public $plugin_menu = [
        [
            "path"      => ["page"],
            "name"      => "Opciones Precor",
            "function"  => __NAMESPACE__ . "\AdminController::index",
            "icon"      => "configuraciones.png",
            "slug"      => "options-precor",
        ],
        /*
        
            [
                "path"      => ["page"],
                "name"      => "My Custom Page",
                "function"  => __NAMESPACE__."\Admin::option_page",
               // "icon"      => "antonella-icon.png",
                "slug"      => "my-custom-page",
                "subpages"  =>
                [
                    [
                        "name"      => "My Custom sub Page",
                        "slug"      => "my-top-sub-level-slug",
                        "function"  => __NAMESPACE__."\Admin::option_page",
                    ],
                    [
                        "name"      => "My  Sencond Custom sub Page",
                        "slug"      => "my-second-sub-level-slug",
                        "function"  => __NAMESPACE__."\Admin::option_page",
                    ],
                ]
            ],
            [
                "path"      => ["page"],
                "name"      => "My SECOND Custom Page",
                "function"  => __NAMESPACE__."\Admin::option_page",
                "icon"      => "antonella-icon.png",
                "slug"      => "my-SECOND-custom-page",
                "subpages"  =>
                [
                    [
                        "name"      => "My Custom sub Page",
                        "slug"      => "my-top-sub-level-slug-2",
                        "function"  => __NAMESPACE__."\Admin::option_page",
                    ],
                    [
                        "name"      => "My  Sencond Custom sub Page",
                        "slug"      => "my-second-sub-level-slug-2",
                        "function"  => __NAMESPACE__."\Admin::option_page",
                    ],
                ]
            ],
            [
                "path"      => ["subpage","tools.php"],
                "name"      => "sub page in tools",
                "slug"      => "sub-tools",
                "function"  => __NAMESPACE__."\Admin::option_page",
            ],
            [
                "path"      => ["option"],
                "name"      => "sub page in option",
                "slug"      => "sub-option",
                "function"  => __NAMESPACE__."\Admin::option_page",
            ]
        */
    ];

    /**
     * Custom Post Type
     * for make simple Custom PostType
     * for simple add fill the 7 frist elements
     * for avanced fill
     * https://codex.wordpress.org/Function_Reference/register_post_type
     */

    public $post_types = [
        [
            "singular"      => "",
            "plural"        => "",
            "slug"          => "",
            "position"      => 12,
            "taxonomy"      => [], //['category','category2','category3'],
            "image"         => "antonella-icon.png",
            "gutemberg"     => true,
            //advanced
            /*
            'labels'        => [],
            'args'          => [],
            'rewrite'       => []
            */
        ],
    ];

    /**
     * Taxonomies
     * for make taxonomies
     * for easy add only fill the 5 first elements
     * for avanced methods
     * https://codex.wordpress.org/Function_Reference/register_taxonomy
     */
    public $taxonomies = [
        [
            "post_type"     => "",
            "singular"      => "",
            "plural"        => "",
            "slug"          => "",
            "gutemberg"     => true,
            //advanced
            /*
            "labels"        =>[],
            "args"          =>[],
            "rewrite"       =>[],
            "capabilities"  =>[]
            */
        ]
    ];

    /**
     * Widget
     * For register a Widget please:
     * Console: php antonella Widget "NAME_OF_WIDGET"
     * @input array
     * @example public $widget = [__NAMESPACE__.'\YouClassWidget']  //only the class
     */
    public $widgets = [];
}
