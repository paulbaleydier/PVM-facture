<?php

namespace Others\dependency;

class DepEnum {


    /**
     * 
     * NODE_MODULES
     * 
     */
    
    const JQUERY = [
        "css" => [
            "vendor/almasaeed2010/adminlte/plugins/jquery-ui/jquery-ui.min.css"
        ],
        "js" => [
            "vendor/almasaeed2010/adminlte/plugins/jquery/jquery.min.js",
            "vendor/almasaeed2010/adminlte/plugins/jquery-ui/jquery-ui.min.js",
            "vendor/almasaeed2010/adminlte/plugins/jquery-knob/jquery.knob.min.js"
            ]
    ];

    const ADMINLTE = [
        "css" => [
            "vendor/almasaeed2010/adminlte/plugins/overlayScrollbars/css/OverlayScrollbars.min.css",
            "vendor/almasaeed2010/adminlte/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css",
            "vendor/almasaeed2010/adminlte/dist/css/adminlte.min.css",
        ],
        "js" => [
            "vendor/almasaeed2010/adminlte/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js",
            "vendor/almasaeed2010/adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js",
            "vendor/almasaeed2010/adminlte/dist/js/adminlte.min.js"
            ]
    ];





    const SWEATALERT2 = [
        "css" => [
            "vendor/almasaeed2010/adminlte/plugins/sweetalert2/sweetalert2.min.css",
        ],
        "js" => [
            "vendor/almasaeed2010/adminlte/plugins/sweetalert2/sweetalert2.min.js"
            ]
    ];

    

    const CHARTJS = [
        "css" => ["vendor/almasaeed2010/adminlte/plugins/chart.js/Chart.min.css"],
        "js" => ["vendor/almasaeed2010/adminlte/plugins/chart.js/Chart.min.js"]
    ];

    /**
     * 
     * PLUGINS
     * 
     */


    const FONTAWESOME = [
        "css" => ["plugin/fontawesome-free-6.5.1/css/all.min.css"],
        "js" => ["plugin/fontawesome-free-6.5.1/js/all.min.js"]
    ];

    

    const ICHECK_BOOTSTRAP = [
        "css" => ["vendor/almasaeed2010/adminlte/plugins/icheck-bootstrap/icheck-bootstrap.min.css"],
        "js" => []
    ];

  

}
