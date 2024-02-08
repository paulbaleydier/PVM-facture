<?php

namespace View;

use Others\dependency\Dependency;

class View
{

    public static $dependency;
    public static $controller;
    public static $header = true;
    public static $footer = true;
    public static $sideBar = true;

    public function __construct()
    {
        self::$dependency = Dependency::loadDependency(array(), get_called_class());
        // self::$controller = str_replace("View", "Controller", get_called_class());

    }

    public function sideBar()
    {
?>
        <aside class="main-sidebar sidebar-dark-primary elevation-4">

            <a href="index3.html" class="brand-link text-center">
                <span class="brand-text font-weight-light">PVM-Facture</span>
            </a>

            <div class="sidebar os-host os-theme-light os-host-overflow os-host-overflow-y os-host-resize-disabled os-host-scrollbar-horizontal-hidden os-host-transition">
                <div class="os-resize-observer-host observed">
                    <div class="os-resize-observer" style="left: 0px; right: auto;"></div>
                </div>
                <div class="os-size-auto-observer observed" style="height: calc(100% + 1px); float: left;">
                    <div class="os-resize-observer"></div>
                </div>
                <div class="os-content-glue" style="margin: 0px -8px; width: 249px; height: 853px;"></div>
                <div class="os-padding">
                    <div class="os-viewport os-viewport-native-scrollbars-invisible" style="overflow-y: scroll;">
                        <div class="os-content" style="padding: 0px 8px; height: 100%; width: 100%;">

                            <div class="user-panel mt-3 pb-3 mb-3 d-flex justify-content-center">
                                <div>
                                    <a href="#" class="d-block"><?php echo ucfirst($_SESSION["firstName"]) . " " . ucfirst($_SESSION["lastName"]) ?></a>
                                </div>
                            </div>

                            <nav class="mt-2">
                                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

                                    <li class="nav-item">
                                        <a href="#" class="nav-link">
                                            <i class="nav-icon fas fa-users"></i>
                                            <p> Client(s) </p>
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="#" class="nav-link">
                                            <i class="nav-icon fas fa-file-invoice"></i>
                                            <p> Factures </p>
                                        </a>
                                    </li>

                                </ul>
                            </nav>

                        </div>
                    </div>
                </div>
                <div class="os-scrollbar os-scrollbar-horizontal os-scrollbar-unusable os-scrollbar-auto-hidden">
                    <div class="os-scrollbar-track">
                        <div class="os-scrollbar-handle" style="width: 100%; transform: translate(0px, 0px);"></div>
                    </div>
                </div>
                <div class="os-scrollbar os-scrollbar-vertical os-scrollbar-auto-hidden">
                    <div class="os-scrollbar-track">
                        <div class="os-scrollbar-handle" style="height: 62.8403%; transform: translate(0px, 0px);"></div>
                    </div>
                </div>
                <div class="os-scrollbar-corner"></div>
            </div>

        </aside>

    <?php
    }

    public function header()
    {
    ?>
        <!-- Code HTML pour la barre de navigation -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">

            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>

            </ul>

            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                        <i class="fas fa-expand-arrows-alt"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php?controller=Authentification&action=logout" role="button">
                        <i class="fas fa-door-open"></i>
                    </a>
                </li>
            </ul>
        </nav>


    <?php
    }

    public function contentBody()
    {
    }

    public function footer()
    {
    ?>
        <footer class="main-footer">
            <strong>Copyright © 2024 PVM-TECH.</strong>
            <div class="float-right d-none d-sm-inline-block">
                <b>Version</b> 0.0.1
            </div>
        </footer>

    <?php
    }

    public function render()
    {
    ?>
        <!DOCTYPE html>
        <html lang="fr" style="height: auto;">

        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta name="description" content="Description de votre page">
            <meta name="keywords" content="Mot-clé 1, Mot-clé 2, ...">

            <title>PVM - Facture</title>
            <!-- Ajoutez ici vos liens vers les fichiers CSS, scripts, etc. -->
            <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&amp;display=fallback">
            <?php echo static::$dependency["css"]; ?>

        </head>

        <body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed">
            <div class="wrapper">
                <?php if (static::$header) static::header(); ?>

                <?php if (static::$sideBar) static::sideBar(); ?>

 
                <!-- <div class="content-wrapper"></div> -->
                <?php static::contentBody(); ?>

                <div id="sidebar-overlay"></div>
                <?php if (static::$footer) static::footer(); ?>
            </div>
        </body>

        <?php
        echo static::$dependency["js"];
        echo static::script();
        ?>

        </html>
<?php
    }

    protected function script()
    {
    }
}
