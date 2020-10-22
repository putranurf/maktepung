<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

        <title>OneUI - Bootstrap 4 Admin Template &amp; UI Framework</title>

        <meta name="description" content="OneUI - Bootstrap 4 Admin Template &amp; UI Framework created by pixelcave and published on Themeforest">
        <meta name="author" content="pixelcave">
        <meta name="robots" content="noindex, nofollow">

        <!-- Open Graph Meta -->
        <meta property="og:title" content="OneUI - Bootstrap 4 Admin Template &amp; UI Framework">
        <meta property="og:site_name" content="OneUI">
        <meta property="og:description" content="OneUI - Bootstrap 4 Admin Template &amp; UI Framework created by pixelcave and published on Themeforest">
        <meta property="og:type" content="website">
        <meta property="og:url" content="">
        <meta property="og:image" content="">

        <!-- Icons -->
        <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
        <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/src/assets/media/favicons/favicon.png">
        <link rel="icon" type="image/png" sizes="192x192" href="<?php echo base_url(); ?>assets/src/assets/media/favicons/favicon-192x192.png">
        <link rel="apple-touch-icon" sizes="180x180" href="<?php echo base_url(); ?>assets/src/assets/media/favicons/apple-touch-icon-180x180.png">
        <!-- END Icons -->

        <!-- Stylesheets -->
        <!-- Fonts and OneUI framework -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap">
        <link rel="stylesheet" id="css-main" href="<?php echo base_url(); ?>assets/src/assets/css/oneui.min.css">

        <!-- You can include a specific file from css/themes/ folder to alter the default color theme of the template. eg: -->
        <!-- <link rel="stylesheet" id="css-theme" href="assets/css/themes/amethyst.min.css"> -->
        <!-- END Stylesheets -->
    </head>
    <body>
        <!-- Page Container -->
        <!--
            Available classes for #page-container:

        GENERIC

            'enable-cookies'                            Remembers active color theme between pages (when set through color theme helper Template._uiHandleTheme())

        SIDEBAR & SIDE OVERLAY

            'sidebar-r'                                 Right Sidebar and left Side Overlay (default is left Sidebar and right Side Overlay)
            'sidebar-mini'                              Mini hoverable Sidebar (screen width > 991px)
            'sidebar-o'                                 Visible Sidebar by default (screen width > 991px)
            'sidebar-o-xs'                              Visible Sidebar by default (screen width < 992px)
            'sidebar-dark'                              Dark themed sidebar

            'side-overlay-hover'                        Hoverable Side Overlay (screen width > 991px)
            'side-overlay-o'                            Visible Side Overlay by default

            'enable-page-overlay'                       Enables a visible clickable Page Overlay (closes Side Overlay on click) when Side Overlay opens

            'side-scroll'                               Enables custom scrolling on Sidebar and Side Overlay instead of native scrolling (screen width > 991px)

        HEADER

            ''                                          Static Header if no class is added
            'page-header-fixed'                         Fixed Header

        HEADER STYLE

            ''                                          Light themed Header
            'page-header-dark'                          Dark themed Header

        MAIN CONTENT LAYOUT

            ''                                          Full width Main Content if no class is added
            'main-content-boxed'                        Full width Main Content with a specific maximum width (screen width > 1200px)
            'main-content-narrow'                       Full width Main Content with a percentage width (screen width > 1200px)
        -->
        <div id="page-container" class="sidebar-o sidebar-dark enable-page-overlay side-scroll page-header-fixed main-content-narrow">
            <!-- Side Overlay-->
            <aside id="side-overlay">
                <!-- Side Header -->
                <div class="content-header border-bottom">
                    <!-- User Avatar -->
                    <a class="img-link mr-1" href="javascript:void(0)">
                        <img class="img-avatar img-avatar32" src="assets/media/avatars/avatar10.jpg" alt="">
                    </a>
                    <!-- END User Avatar -->

                    <!-- User Info -->
                    <div class="ml-2">
                        <a class="text-dark font-w600 font-size-sm" href="javascript:void(0)">Adam McCoy</a>
                    </div>
                    <!-- END User Info -->

                    <!-- Close Side Overlay -->
                    <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                    <a class="ml-auto btn btn-sm btn-alt-danger" href="javascript:void(0)" data-toggle="layout" data-action="side_overlay_close">
                        <i class="fa fa-fw fa-times"></i>
                    </a>
                    <!-- END Close Side Overlay -->
                </div>
                <!-- END Side Header -->

                <!-- Side Content -->
                <div class="content-side">
                    <!-- Side Overlay Tabs -->
                    <div class="block block-transparent pull-x pull-t">
                        <ul class="nav nav-tabs nav-tabs-alt nav-justified" data-toggle="tabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" href="#so-overview">
                                    <i class="fa fa-fw fa-coffee text-gray mr-1"></i> Overview
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#so-sales">
                                    <i class="fa fa-fw fa-chart-line text-gray mr-1"></i> Sales
                                </a>
                            </li>
                        </ul>
                        <div class="block-content tab-content overflow-hidden">
                            <!-- Overview Tab -->
                            <div class="tab-pane pull-x fade fade-left show active" id="so-overview" role="tabpanel">
                                <!-- Activity -->
                                <div class="block">
                                    <div class="block-header block-header-default">
                                        <h3 class="block-title">Recent Activity</h3>
                                        <div class="block-options">
                                            <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                                                <i class="si si-refresh"></i>
                                            </button>
                                            <button type="button" class="btn-block-option" data-toggle="block-option" data-action="content_toggle"></button>
                                        </div>
                                    </div>
                                    <div class="block-content">
                                        <!-- Activity List -->
                                        <ul class="nav-items mb-0">
                                            <li>
                                                <a class="text-dark media py-2" href="javascript:void(0)">
                                                    <div class="mr-3 ml-2">
                                                        <i class="si si-wallet text-success"></i>
                                                    </div>
                                                    <div class="media-body">
                                                        <div class="font-size-sm font-w600">New sale ($15)</div>
                                                        <div class="text-success">Admin Template</div>
                                                        <small class="font-size-sm text-muted">3 min ago</small>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="text-dark media py-2" href="javascript:void(0)">
                                                    <div class="mr-3 ml-2">
                                                        <i class="si si-pencil text-info"></i>
                                                    </div>
                                                    <div class="media-body">
                                                        <div class="font-size-sm font-w600">You edited the file</div>
                                                        <div class="text-info">
                                                            Documentation.doc
                                                        </div>
                                                        <small class="font-size-sm text-muted">15 min ago</small>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="text-dark media py-2" href="javascript:void(0)">
                                                    <div class="mr-3 ml-2">
                                                        <i class="si si-close text-danger"></i>
                                                    </div>
                                                    <div class="media-body">
                                                        <div class="font-size-sm font-w600">Project deleted</div>
                                                        <div class="text-danger">Line Icon Set</div>
                                                        <small class="font-size-sm text-muted">4 hours ago</small>
                                                    </div>
                                                </a>
                                            </li>
                                        </ul>
                                        <!-- END Activity List -->
                                    </div>
                                </div>
                                <!-- END Activity -->

                                <!-- Online Friends -->
                                <div class="block">
                                    <div class="block-header block-header-default">
                                        <h3 class="block-title">Online Friends</h3>
                                        <div class="block-options">
                                            <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                                                <i class="si si-refresh"></i>
                                            </button>
                                            <button type="button" class="btn-block-option" data-toggle="block-option" data-action="content_toggle"></button>
                                        </div>
                                    </div>
                                    <div class="block-content">
                                        <!-- Users Navigation -->
                                        <ul class="nav-items mb-0">
                                            <li>
                                                <a class="media py-2" href="javascript:void(0)">
                                                    <div class="mr-3 ml-2 overlay-container overlay-bottom">
                                                        <img class="img-avatar img-avatar48" src="assets/media/avatars/avatar7.jpg" alt="">
                                                        <span class="overlay-item item item-tiny item-circle border border-2x border-white bg-success"></span>
                                                    </div>
                                                    <div class="media-body">
                                                        <div class="font-w600">Susan Day</div>
                                                        <div class="font-size-sm text-muted">Copywriter</div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="media py-2" href="javascript:void(0)">
                                                    <div class="mr-3 ml-2 overlay-container overlay-bottom">
                                                        <img class="img-avatar img-avatar48" src="assets/media/avatars/avatar12.jpg" alt="">
                                                        <span class="overlay-item item item-tiny item-circle border border-2x border-white bg-success"></span>
                                                    </div>
                                                    <div class="media-body">
                                                        <div class="font-w600">Scott Young</div>
                                                        <div class="font-size-sm text-muted">Web Developer</div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="media py-2" href="javascript:void(0)">
                                                    <div class="mr-3 ml-2 overlay-container overlay-bottom">
                                                        <img class="img-avatar img-avatar48" src="assets/media/avatars/avatar6.jpg" alt="">
                                                        <span class="overlay-item item item-tiny item-circle border border-2x border-white bg-success"></span>
                                                    </div>
                                                    <div class="media-body">
                                                        <div class="font-w600">Barbara Scott</div>
                                                        <div class="font-size-sm text-muted">Web Designer</div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="media py-2" href="javascript:void(0)">
                                                    <div class="mr-3 ml-2 overlay-container overlay-bottom">
                                                        <img class="img-avatar img-avatar48" src="assets/media/avatars/avatar5.jpg" alt="">
                                                        <span class="overlay-item item item-tiny item-circle border border-2x border-white bg-warning"></span>
                                                    </div>
                                                    <div class="media-body">
                                                        <div class="font-w600">Lori Grant</div>
                                                        <div class="font-size-sm text-muted">Photographer</div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="media py-2" href="javascript:void(0)">
                                                    <div class="mr-3 ml-2 overlay-container overlay-bottom">
                                                        <img class="img-avatar img-avatar48" src="assets/media/avatars/avatar14.jpg" alt="">
                                                        <span class="overlay-item item item-tiny item-circle border border-2x border-white bg-warning"></span>
                                                    </div>
                                                    <div class="media-body">
                                                        <div class="font-w600">Ralph Murray</div>
                                                        <div class="font-size-sm text-muted">Graphic Designer</div>
                                                    </div>
                                                </a>
                                            </li>
                                        </ul>
                                        <!-- END Users Navigation -->
                                    </div>
                                </div>
                                <!-- END Online Friends -->

                                <!-- Quick Settings -->
                                <div class="block mb-0">
                                    <div class="block-header block-header-default">
                                        <h3 class="block-title">Quick Settings</h3>
                                        <div class="block-options">
                                            <button type="button" class="btn-block-option" data-toggle="block-option" data-action="content_toggle"></button>
                                        </div>
                                    </div>
                                    <div class="block-content">
                                        <!-- Quick Settings Form -->
                                        <form action="be_pages_dashboard.html" method="POST" onsubmit="return false;">
                                            <div class="form-group">
                                                <p class="font-size-sm font-w600 mb-2">
                                                    Online Status
                                                </p>
                                                <div class="custom-control custom-switch mb-1">
                                                    <input type="checkbox" class="custom-control-input" id="so-settings-check1" name="so-settings-check1" checked>
                                                    <label class="custom-control-label" for="so-settings-check1">Show your status to all</label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <p class="font-size-sm font-w600 mb-2">
                                                    Auto Updates
                                                </p>
                                                <div class="custom-control custom-switch mb-1">
                                                    <input type="checkbox" class="custom-control-input" id="so-settings-check2" name="so-settings-check2" checked>
                                                    <label class="custom-control-label" for="so-settings-check2">Keep up to date</label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <p class="font-size-sm font-w600 mb-1">
                                                    Application Alerts
                                                </p>
                                                <div class="custom-control custom-switch mb-1">
                                                    <input type="checkbox" class="custom-control-input" id="so-settings-check3" name="so-settings-check3" checked>
                                                    <label class="custom-control-label" for="so-settings-check3">Email Notifications</label>
                                                </div>
                                                <div class="custom-control custom-switch mb-1">
                                                    <input type="checkbox" class="custom-control-input" id="so-settings-check4" name="so-settings-check4" checked>
                                                    <label class="custom-control-label" for="so-settings-check4">SMS Notifications</label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <p class="font-size-sm font-w600 mb-1">
                                                    API
                                                </p>
                                                <div class="custom-control custom-switch mb-1">
                                                    <input type="checkbox" class="custom-control-input" id="so-settings-check5" name="so-settings-check5" checked>
                                                    <label class="custom-control-label" for="so-settings-check5">Enable access</label>
                                                </div>
                                            </div>
                                        </form>
                                        <!-- END Quick Settings Form -->
                                    </div>
                                </div>
                                <!-- END Quick Settings -->
                            </div>
                            <!-- END Overview Tab -->

                            <!-- Sales Tab -->
                            <div class="tab-pane pull-x fade fade-right" id="so-sales" role="tabpanel">
                                <div class="block mb-0">
                                    <!-- Stats -->
                                    <div class="block-content">
                                        <div class="row items-push pull-t">
                                            <div class="col-6">
                                                <div class="font-size-sm font-w600 text-uppercase">Sales</div>
                                                <a class="font-size-lg" href="javascript:void(0)">22.030</a>
                                            </div>
                                            <div class="col-6">
                                                <div class="font-size-sm font-w600 text-uppercase">Balance</div>
                                                <a class="font-size-lg" href="javascript:void(0)">$4.589,00</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- END Stats -->

                                    <!-- Today -->
                                    <div class="block-content block-content-full block-content-sm bg-body-light">
                                        <div class="row">
                                            <div class="col-6">
                                                <span class="font-size-sm font-w600 text-uppercase">Today</span>
                                            </div>
                                            <div class="col-6 text-right">
                                                <span class="ext-muted">$996</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="block-content">
                                        <ul class="nav-items push">
                                            <li>
                                                <a class="text-dark media py-2" href="javascript:void(0)">
                                                    <div class="mr-3 ml-2">
                                                        <i class="fa fa-fw fa-circle text-success"></i>
                                                    </div>
                                                    <div class="media-body">
                                                        <div class="font-w600">New sale! + $249</div>
                                                        <small class="text-muted">3 min ago</small>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="text-dark media py-2" href="javascript:void(0)">
                                                    <div class="mr-3 ml-2">
                                                        <i class="fa fa-fw fa-circle text-success"></i>
                                                    </div>
                                                    <div class="media-body">
                                                        <div class="font-w600">New sale! + $129</div>
                                                        <small class="text-muted">50 min ago</small>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="text-dark media py-2" href="javascript:void(0)">
                                                    <div class="mr-3 ml-2">
                                                        <i class="fa fa-fw fa-circle text-success"></i>
                                                    </div>
                                                    <div class="media-body">
                                                        <div class="font-w600">New sale! + $119</div>
                                                        <small class="text-muted">2 hours ago</small>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="text-dark media py-2" href="javascript:void(0)">
                                                    <div class="mr-3 ml-2">
                                                        <i class="fa fa-fw fa-circle text-success"></i>
                                                    </div>
                                                    <div class="media-body">
                                                        <div class="font-w600">New sale! + $499</div>
                                                        <small class="text-muted">3 hours ago</small>
                                                    </div>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- END Today -->

                                    <!-- Yesterday -->
                                    <div class="block-content block-content-full block-content-sm bg-body-light">
                                        <div class="row">
                                            <div class="col-6">
                                                <span class="font-size-sm font-w600 text-uppercase">Yesterday</span>
                                            </div>
                                            <div class="col-6 text-right">
                                                <span class="text-muted">$765</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="block-content">
                                        <ul class="nav-items push">
                                            <li>
                                                <a class="text-dark media py-2" href="javascript:void(0)">
                                                    <div class="mr-3 ml-2">
                                                        <i class="fa fa-fw fa-circle text-success"></i>
                                                    </div>
                                                    <div class="media-body">
                                                        <div class="font-w600">New sale! + $249</div>
                                                        <small class="text-muted">26 hours ago</small>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="text-dark media py-2" href="javascript:void(0)">
                                                    <div class="mr-3 ml-2">
                                                        <i class="fa fa-fw fa-circle text-danger"></i>
                                                    </div>
                                                    <div class="media-body">
                                                        <div class="font-w600">Product Purchase - $50</div>
                                                        <small class="text-muted">28 hours ago</small>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="text-dark media py-2" href="javascript:void(0)">
                                                    <div class="mr-3 ml-2">
                                                        <i class="fa fa-fw fa-circle text-success"></i>
                                                    </div>
                                                    <div class="media-body">
                                                        <div class="font-w600">New sale! + $119</div>
                                                        <small class="text-muted">29 hours ago</small>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="text-dark media py-2" href="javascript:void(0)">
                                                    <div class="mr-3 ml-2">
                                                        <i class="fa fa-fw fa-circle text-danger"></i>
                                                    </div>
                                                    <div class="media-body">
                                                        <div class="font-w600">Paypal Withdrawal - $300</div>
                                                        <small class="text-muted">37 hours ago</small>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="text-dark media py-2" href="javascript:void(0)">
                                                    <div class="mr-3 ml-2">
                                                        <i class="fa fa-fw fa-circle text-success"></i>
                                                    </div>
                                                    <div class="media-body">
                                                        <div class="font-w600">New sale! + $129</div>
                                                        <small class="text-muted">39 hours ago</small>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="text-dark media py-2" href="javascript:void(0)">
                                                    <div class="mr-3 ml-2">
                                                        <i class="fa fa-fw fa-circle text-success"></i>
                                                    </div>
                                                    <div class="media-body">
                                                        <div class="font-w600">New sale! + $119</div>
                                                        <small class="text-muted">45 hours ago</small>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="text-dark media py-2" href="javascript:void(0)">
                                                    <div class="mr-3 ml-2">
                                                        <i class="fa fa-fw fa-circle text-success"></i>
                                                    </div>
                                                    <div class="media-body">
                                                        <div class="font-w600">New sale! + $499</div>
                                                        <small class="text-muted">46 hours ago</small>
                                                    </div>
                                                </a>
                                            </li>
                                        </ul>

                                        <!-- More -->
                                        <div class="text-center">
                                            <a class="btn btn-sm btn-light" href="javascript:void(0)">
                                                <i class="fa fa-arrow-down mr-1"></i> Load More..
                                            </a>
                                        </div>
                                        <!-- END More -->
                                    </div>
                                    <!-- END Yesterday -->
                                </div>
                            </div>
                            <!-- END Sales Tab -->
                        </div>
                    </div>
                    <!-- END Side Overlay Tabs -->
                </div>
                <!-- END Side Content -->
            </aside>
            <!-- END Side Overlay -->

            <!-- Sidebar -->
            <!--
                Sidebar Mini Mode - Display Helper classes

                Adding 'smini-hide' class to an element will make it invisible (opacity: 0) when the sidebar is in mini mode
                Adding 'smini-show' class to an element will make it visible (opacity: 1) when the sidebar is in mini mode
                    If you would like to disable the transition animation, make sure to also add the 'no-transition' class to your element

                Adding 'smini-hidden' to an element will hide it when the sidebar is in mini mode
                Adding 'smini-visible' to an element will show it (display: inline-block) only when the sidebar is in mini mode
                Adding 'smini-visible-block' to an element will show it (display: block) only when the sidebar is in mini mode
            -->
            <nav id="sidebar" aria-label="Main Navigation">
                <!-- Side Header -->
                <div class="content-header bg-white-5">
                    <!-- Logo -->
                    <a class="font-w600 text-dual" href="index.html">
                        <span class="smini-visible">
                            <i class="fa fa-circle-notch text-primary"></i>
                        </span>
                        <span class="smini-hide font-size-h5 tracking-wider">
                            One<span class="font-w400">UI</span>
                        </span>
                    </a>
                    <!-- END Logo -->

                    <!-- Extra -->
                    <div>
                        <!-- Options -->
                        <div class="dropdown d-inline-block ml-2">
                            <a class="btn btn-sm btn-dual" id="sidebar-themes-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#">
                                <i class="si si-drop"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right font-size-sm smini-hide border-0" aria-labelledby="sidebar-themes-dropdown">
                                <!-- Color Themes -->
                                <!-- Layout API, functionality initialized in Template._uiHandleTheme() -->
                                <a class="dropdown-item d-flex align-items-center justify-content-between font-w500" data-toggle="theme" data-theme="default" href="#">
                                    <span>Default</span>
                                    <i class="fa fa-circle text-default"></i>
                                </a>
                                <a class="dropdown-item d-flex align-items-center justify-content-between font-w500" data-toggle="theme" data-theme="assets/css/themes/amethyst.min.css" href="#">
                                    <span>Amethyst</span>
                                    <i class="fa fa-circle text-amethyst"></i>
                                </a>
                                <a class="dropdown-item d-flex align-items-center justify-content-between font-w500" data-toggle="theme" data-theme="assets/css/themes/city.min.css" href="#">
                                    <span>City</span>
                                    <i class="fa fa-circle text-city"></i>
                                </a>
                                <a class="dropdown-item d-flex align-items-center justify-content-between font-w500" data-toggle="theme" data-theme="assets/css/themes/flat.min.css" href="#">
                                    <span>Flat</span>
                                    <i class="fa fa-circle text-flat"></i>
                                </a>
                                <a class="dropdown-item d-flex align-items-center justify-content-between font-w500" data-toggle="theme" data-theme="assets/css/themes/modern.min.css" href="#">
                                    <span>Modern</span>
                                    <i class="fa fa-circle text-modern"></i>
                                </a>
                                <a class="dropdown-item d-flex align-items-center justify-content-between font-w500" data-toggle="theme" data-theme="assets/css/themes/smooth.min.css" href="#">
                                    <span>Smooth</span>
                                    <i class="fa fa-circle text-smooth"></i>
                                </a>
                                <!-- END Color Themes -->

                                <div class="dropdown-divider"></div>

                                <!-- Sidebar Styles -->
                                <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                                <a class="dropdown-item font-w500" data-toggle="layout" data-action="sidebar_style_light" href="#">
                                    <span>Sidebar Light</span>
                                </a>
                                <a class="dropdown-item font-w500" data-toggle="layout" data-action="sidebar_style_dark" href="#">
                                    <span>Sidebar Dark</span>
                                </a>
                                <!-- Sidebar Styles -->

                                <div class="dropdown-divider"></div>

                                <!-- Header Styles -->
                                <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                                <a class="dropdown-item font-w500" data-toggle="layout" data-action="header_style_light" href="#">
                                    <span>Header Light</span>
                                </a>
                                <a class="dropdown-item font-w500" data-toggle="layout" data-action="header_style_dark" href="#">
                                    <span>Header Dark</span>
                                </a>
                                <!-- Header Styles -->
                            </div>
                        </div>
                        <!-- END Options -->

                        <!-- Close Sidebar, Visible only on mobile screens -->
                        <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                        <a class="d-lg-none btn btn-sm btn-dual ml-1" data-toggle="layout" data-action="sidebar_close" href="javascript:void(0)">
                            <i class="fa fa-fw fa-times"></i>
                        </a>
                        <!-- END Close Sidebar -->
                    </div>
                    <!-- END Extra -->
                </div>
                <!-- END Side Header -->

                <!-- Sidebar Scrolling -->
                <div class="js-sidebar-scroll">
                    <!-- Side Navigation -->
                    <div class="content-side">
                        <ul class="nav-main">
                            <li class="nav-main-item">
                                <a class="nav-main-link active" href="<?php echo base_url(); ?>Home/dashboard">
                                    <i class="nav-main-link-icon si si-speedometer"></i>
                                    <span class="nav-main-link-name">Dashboard</span>
                                </a>
                            </li>
                            <li class="nav-main-heading">Teks</li>
                            <li class="nav-main-item">
                                <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                                    <i class="nav-main-link-icon si si-energy"></i>
                                    <span class="nav-main-link-name">Section</span>
                                </a>
                                <ul class="nav-main-submenu">
                                    <li class="nav-main-item">
                                        <a class="nav-main-link" href="<?php echo base_url(); ?>section/Section1">
                                            <span class="nav-main-link-name">Section 1</span>
                                        </a>
                                    </li>
                                    <li class="nav-main-item">
                                        <a class="nav-main-link" href="be_blocks_options.html">
                                            <span class="nav-main-link-name">Section 2</span>
                                        </a>
                                    </li>
                                    <li class="nav-main-item">
                                        <a class="nav-main-link" href="be_blocks_forms.html">
                                            <span class="nav-main-link-name">Section 3</span>
                                        </a>
                                    </li>
                                    <li class="nav-main-item">
                                        <a class="nav-main-link" href="be_blocks_themed.html">
                                            <span class="nav-main-link-name">Section 4</span>
                                        </a>
                                    </li>
                                    <li class="nav-main-item">
                                        <a class="nav-main-link" href="be_blocks_api.html">
                                            <span class="nav-main-link-name">Section 5</span>
                                        </a>
                                    </li>
                                    <li class="nav-main-item">
                                        <a class="nav-main-link" href="be_blocks_api.html">
                                            <span class="nav-main-link-name">Section 6</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-main-heading">Gambar</li>
                            <li class="nav-main-item">
                                <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                                    <i class="nav-main-link-icon si si-wrench"></i>
                                    <span class="nav-main-link-name">Components</span>
                                </a>
                                <ul class="nav-main-submenu">
                                    <li class="nav-main-item">
                                        <a class="nav-main-link" href="be_comp_loaders.html">
                                            <span class="nav-main-link-name">Loaders</span>
                                        </a>
                                    </li>
                                    <li class="nav-main-item">
                                        <a class="nav-main-link" href="be_comp_image_cropper.html">
                                            <span class="nav-main-link-name">Image Cropper</span>
                                        </a>
                                    </li>
                                    <li class="nav-main-item">
                                        <a class="nav-main-link" href="be_comp_appear.html">
                                            <span class="nav-main-link-name">Appear</span>
                                        </a>
                                    </li>
                                    <li class="nav-main-item">
                                        <a class="nav-main-link" href="be_comp_charts.html">
                                            <span class="nav-main-link-name">Charts</span>
                                        </a>
                                    </li>
                                    <li class="nav-main-item">
                                        <a class="nav-main-link" href="be_comp_calendar.html">
                                            <span class="nav-main-link-name">Calendar</span>
                                        </a>
                                    </li>
                                    <li class="nav-main-item">
                                        <a class="nav-main-link" href="be_comp_sliders.html">
                                            <span class="nav-main-link-name">Sliders</span>
                                        </a>
                                    </li>
                                    <li class="nav-main-item">
                                        <a class="nav-main-link" href="be_comp_syntax_highlighting.html">
                                            <span class="nav-main-link-name">Syntax Highlighting</span>
                                        </a>
                                    </li>
                                    <li class="nav-main-item">
                                        <a class="nav-main-link" href="be_comp_rating.html">
                                            <span class="nav-main-link-name">Rating</span>
                                        </a>
                                    </li>
                                    <li class="nav-main-item">
                                        <a class="nav-main-link" href="be_comp_maps_google.html">
                                            <span class="nav-main-link-name">Google Maps</span>
                                        </a>
                                    </li>
                                    <li class="nav-main-item">
                                        <a class="nav-main-link" href="be_comp_maps_vector.html">
                                            <span class="nav-main-link-name">Vector Maps</span>
                                        </a>
                                    </li>
                                    <li class="nav-main-item">
                                        <a class="nav-main-link" href="be_comp_dialogs.html">
                                            <span class="nav-main-link-name">Dialogs</span>
                                        </a>
                                    </li>
                                    <li class="nav-main-item">
                                        <a class="nav-main-link" href="be_comp_notifications.html">
                                            <span class="nav-main-link-name">Notifications</span>
                                        </a>
                                    </li>
                                    <li class="nav-main-item">
                                        <a class="nav-main-link" href="be_comp_gallery.html">
                                            <span class="nav-main-link-name">Gallery</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <!-- END Side Navigation -->
                </div>
                <!-- END Sidebar Scrolling -->
            </nav>
            <!-- END Sidebar -->

            <!-- Header -->
            <header id="page-header">
                <!-- Header Content -->
                <div class="content-header">
                    <!-- Left Section -->
                    <div class="d-flex align-items-center">
                        <!-- Toggle Sidebar -->
                        <!-- Layout API, functionality initialized in Template._uiApiLayout()-->
                        <button type="button" class="btn btn-sm btn-dual mr-2 d-lg-none" data-toggle="layout" data-action="sidebar_toggle">
                            <i class="fa fa-fw fa-bars"></i>
                        </button>
                        <!-- END Toggle Sidebar -->

                        <!-- Toggle Mini Sidebar -->
                        <!-- Layout API, functionality initialized in Template._uiApiLayout()-->
                        <button type="button" class="btn btn-sm btn-dual mr-2 d-none d-lg-inline-block" data-toggle="layout" data-action="sidebar_mini_toggle">
                            <i class="fa fa-fw fa-ellipsis-v"></i>
                        </button>
                        <!-- END Toggle Mini Sidebar -->

                        <!-- Apps Modal -->
                        <!-- Opens the Apps modal found at the bottom of the page, after footer’s markup -->
                        <button type="button" class="btn btn-sm btn-dual mr-2" data-toggle="modal" data-target="#one-modal-apps">
                            <i class="fa fa-fw fa-cubes"></i>
                        </button>
                        <!-- END Apps Modal -->

                        <!-- Open Search Section (visible on smaller screens) -->
                        <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                        <button type="button" class="btn btn-sm btn-dual d-md-none" data-toggle="layout" data-action="header_search_on">
                            <i class="fa fa-fw fa-search"></i>
                        </button>
                        <!-- END Open Search Section -->

                        <!-- Search Form (visible on larger screens) -->
                        <form class="d-none d-md-inline-block" action="be_pages_generic_search.html" method="POST">
                            <div class="input-group input-group-sm">
                                <input type="text" class="form-control form-control-alt" placeholder="Search.." id="page-header-search-input2" name="page-header-search-input2">
                                <div class="input-group-append">
                                    <span class="input-group-text bg-body border-0">
                                        <i class="fa fa-fw fa-search"></i>
                                    </span>
                                </div>
                            </div>
                        </form>
                        <!-- END Search Form -->
                    </div>
                    <!-- END Left Section -->

                    <!-- Right Section -->
                    <div class="d-flex align-items-center">
                        <!-- User Dropdown -->
                        <div class="dropdown d-inline-block ml-2">
                            <button type="button" class="btn btn-sm btn-dual d-flex align-items-center" id="page-header-user-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img class="rounded-circle" src="assets/media/avatars/avatar10.jpg" alt="Header Avatar" style="width: 21px;">
                                <span class="d-none d-sm-inline-block ml-2">Adam</span>
                                <i class="fa fa-fw fa-angle-down d-none d-sm-inline-block ml-1 mt-1"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-md dropdown-menu-right p-0 border-0" aria-labelledby="page-header-user-dropdown">
                                <div class="p-3 text-center bg-primary-dark rounded-top">
                                    <img class="img-avatar img-avatar48 img-avatar-thumb" src="assets/media/avatars/avatar10.jpg" alt="">
                                    <p class="mt-2 mb-0 text-white font-w500">Adam Smith</p>
                                    <p class="mb-0 text-white-50 font-size-sm">Web Developer</p>
                                </div>
                                <div class="p-2">
                                    <a class="dropdown-item d-flex align-items-center justify-content-between" href="be_pages_generic_inbox.html">
                                        <span class="font-size-sm font-w500">Inbox</span>
                                        <span class="badge badge-pill badge-primary ml-2">3</span>
                                    </a>
                                    <a class="dropdown-item d-flex align-items-center justify-content-between" href="be_pages_generic_profile.html">
                                        <span class="font-size-sm font-w500">Profile</span>
                                        <span class="badge badge-pill badge-primary ml-2">1</span>
                                    </a>
                                    <a class="dropdown-item d-flex align-items-center justify-content-between" href="javascript:void(0)">
                                        <span class="font-size-sm font-w500">Settings</span>
                                    </a>
                                    <div role="separator" class="dropdown-divider"></div>
                                    <a class="dropdown-item d-flex align-items-center justify-content-between" href="op_auth_lock.html">
                                        <span class="font-size-sm font-w500">Lock Account</span>
                                    </a>
                                    <a class="dropdown-item d-flex align-items-center justify-content-between" href="op_auth_signin.html">
                                        <span class="font-size-sm font-w500">Log Out</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- END User Dropdown -->

                        <!-- Notifications Dropdown -->
                        <div class="dropdown d-inline-block ml-2">
                            <button type="button" class="btn btn-sm btn-dual" id="page-header-notifications-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-fw fa-bell"></i>
                                <span class="text-primary">•</span>
                            </button>
                            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right p-0 border-0 font-size-sm" aria-labelledby="page-header-notifications-dropdown">
                                <div class="p-2 bg-primary-dark text-center rounded-top">
                                    <h5 class="dropdown-header text-uppercase text-white">Notifications</h5>
                                </div>
                                <ul class="nav-items mb-0">
                                    <li>
                                        <a class="text-dark media py-2" href="javascript:void(0)">
                                            <div class="mr-2 ml-3">
                                                <i class="fa fa-fw fa-check-circle text-success"></i>
                                            </div>
                                            <div class="media-body pr-2">
                                                <div class="font-w600">You have a new follower</div>
                                                <span class="font-w500 text-muted">15 min ago</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="text-dark media py-2" href="javascript:void(0)">
                                            <div class="mr-2 ml-3">
                                                <i class="fa fa-fw fa-plus-circle text-primary"></i>
                                            </div>
                                            <div class="media-body pr-2">
                                                <div class="font-w600">1 new sale, keep it up</div>
                                                <span class="font-w500 text-muted">22 min ago</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="text-dark media py-2" href="javascript:void(0)">
                                            <div class="mr-2 ml-3">
                                                <i class="fa fa-fw fa-times-circle text-danger"></i>
                                            </div>
                                            <div class="media-body pr-2">
                                                <div class="font-w600">Update failed, restart server</div>
                                                <span class="font-w500 text-muted">26 min ago</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="text-dark media py-2" href="javascript:void(0)">
                                            <div class="mr-2 ml-3">
                                                <i class="fa fa-fw fa-plus-circle text-primary"></i>
                                            </div>
                                            <div class="media-body pr-2">
                                                <div class="font-w600">2 new sales, keep it up</div>
                                                <span class="font-w500 text-muted">33 min ago</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="text-dark media py-2" href="javascript:void(0)">
                                            <div class="mr-2 ml-3">
                                                <i class="fa fa-fw fa-user-plus text-success"></i>
                                            </div>
                                            <div class="media-body pr-2">
                                                <div class="font-w600">You have a new subscriber</div>
                                                <span class="font-w500 text-muted">41 min ago</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="text-dark media py-2" href="javascript:void(0)">
                                            <div class="mr-2 ml-3">
                                                <i class="fa fa-fw fa-check-circle text-success"></i>
                                            </div>
                                            <div class="media-body pr-2">
                                                <div class="font-w600">You have a new follower</div>
                                                <span class="font-w500 text-muted">42 min ago</span>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                                <div class="p-2 border-top">
                                    <a class="btn btn-sm btn-light btn-block text-center" href="javascript:void(0)">
                                        <i class="fa fa-fw fa-arrow-down mr-1"></i> Load More..
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- END Notifications Dropdown -->

                        <!-- Toggle Side Overlay -->
                        <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                        <button type="button" class="btn btn-sm btn-dual ml-2" data-toggle="layout" data-action="side_overlay_toggle">
                            <i class="fa fa-fw fa-list-ul fa-flip-horizontal"></i>
                        </button>
                        <!-- END Toggle Side Overlay -->
                    </div>
                    <!-- END Right Section -->
                </div>
                <!-- END Header Content -->

                <!-- Header Search -->
                <div id="page-header-search" class="overlay-header bg-white">
                    <div class="content-header">
                        <form class="w-100" action="be_pages_generic_search.html" method="POST">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                                    <button type="button" class="btn btn-alt-danger" data-toggle="layout" data-action="header_search_off">
                                        <i class="fa fa-fw fa-times-circle"></i>
                                    </button>
                                </div>
                                <input type="text" class="form-control" placeholder="Search or hit ESC.." id="page-header-search-input" name="page-header-search-input">
                            </div>
                        </form>
                    </div>
                </div>
                <!-- END Header Search -->

                <!-- Header Loader -->
                <!-- Please check out the Loaders page under Components category to see examples of showing/hiding it -->
                <div id="page-header-loader" class="overlay-header bg-white">
                    <div class="content-header">
                        <div class="w-100 text-center">
                            <i class="fa fa-fw fa-circle-notch fa-spin"></i>
                        </div>
                    </div>
                </div>
                <!-- END Header Loader -->
            </header>
            <!-- END Header -->

            <!-- Main Container -->
            <main id="main-container">

                <!-- Hero -->
                <div class="bg-body-light">
                    <div class="content content-full">
                        <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center py-2 text-center text-sm-left">
                            <div class="flex-sm-fill">
                                <h1 class="h3 font-w700 mb-2">
                                    Main Dashboard
                                </h1>
                                <h2 class="h6 font-w500 text-muted mb-0">
                                    Welcome <a class="font-w600" href="javascript:void(0)">Adam</a>, everything looks great.
                                </h2>
                            </div>
                            <div class="mt-3 mt-sm-0 ml-sm-3">
                                <button type="button" class="btn btn-sm btn-alt-primary">
                                    <i class="fa fa-cog"></i>
                                </button>
                                <div class="dropdown d-inline-block">
                                    <button type="button" class="btn btn-sm btn-alt-primary" id="dropdown-analytics-overview" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fa fa-fw fa-calendar-alt"></i>
                                        Last 30 days
                                        <i class="fa fa-fw fa-angle-down"></i>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-right font-size-sm" aria-labelledby="dropdown-analytics-overview">
                                        <a class="dropdown-item font-w500" href="javascript:void(0)">This Week</a>
                                        <a class="dropdown-item font-w500" href="javascript:void(0)">Previous Week</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item font-w500" href="javascript:void(0)">This Month</a>
                                        <a class="dropdown-item font-w500" href="javascript:void(0)">Previous Month</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END Hero -->

                <!-- Page Content -->
                <div class="content">
                    <!-- Overview -->
                    <div class="row row-deck">
                        <div class="col-sm-6 col-xl-3">
                            <!-- Pending Orders -->
                            <div class="block block-rounded d-flex flex-column">
                                <div class="block-content block-content-full flex-grow-1 d-flex justify-content-between align-items-center">
                                    <dl class="mb-0">
                                        <dt class="font-size-h2 font-w700">32</dt>
                                        <dd class="text-muted mb-0">Pending Orders</dd>
                                    </dl>
                                    <div class="item item-rounded bg-body">
                                        <i class="fa fa-shopping-cart font-size-h3 text-primary"></i>
                                    </div>
                                </div>
                                <div class="block-content block-content-full block-content-sm bg-body-light font-size-sm">
                                    <a class="font-w500 d-flex align-items-center" href="javascript:void(0)">
                                        View all orders
                                        <i class="fa fa-arrow-alt-circle-right ml-1 opacity-25 font-size-base"></i>
                                    </a>
                                </div>
                            </div>
                            <!-- END Pending Orders -->
                        </div>
                        <div class="col-sm-6 col-xl-3">
                            <!-- New Customers -->
                            <div class="block block-rounded d-flex flex-column">
                                <div class="block-content block-content-full flex-grow-1 d-flex justify-content-between align-items-center">
                                    <dl class="mb-0">
                                        <dt class="font-size-h2 font-w700">124</dt>
                                        <dd class="text-muted mb-0">New Customers</dd>
                                    </dl>
                                    <div class="item item-rounded bg-body">
                                        <i class="fa fa-users font-size-h3 text-primary"></i>
                                    </div>
                                </div>
                                <div class="block-content block-content-full block-content-sm bg-body-light font-size-sm">
                                    <a class="font-w500 d-flex align-items-center" href="javascript:void(0)">
                                        View all customers
                                        <i class="fa fa-arrow-alt-circle-right ml-1 opacity-25 font-size-base"></i>
                                    </a>
                                </div>
                            </div>
                            <!-- END New Customers -->
                        </div>
                        <div class="col-sm-6 col-xl-3">
                            <!-- Messages -->
                            <div class="block block-rounded d-flex flex-column">
                                <div class="block-content block-content-full flex-grow-1 d-flex justify-content-between align-items-center">
                                    <dl class="mb-0">
                                        <dt class="font-size-h2 font-w700">45</dt>
                                        <dd class="text-muted mb-0">Messages</dd>
                                    </dl>
                                    <div class="item item-rounded bg-body">
                                        <i class="fa fa-inbox font-size-h3 text-primary"></i>
                                    </div>
                                </div>
                                <div class="block-content block-content-full block-content-sm bg-body-light font-size-sm">
                                    <a class="font-w500 d-flex align-items-center" href="javascript:void(0)">
                                        View all messages
                                        <i class="fa fa-arrow-alt-circle-right ml-1 opacity-25 font-size-base"></i>
                                    </a>
                                </div>
                            </div>
                            <!-- END Messages -->
                        </div>
                        <div class="col-sm-6 col-xl-3">
                            <!-- Conversion Rate -->
                            <div class="block block-rounded d-flex flex-column">
                                <div class="block-content block-content-full flex-grow-1 d-flex justify-content-between align-items-center">
                                    <dl class="mb-0">
                                        <dt class="font-size-h2 font-w700">4.5%</dt>
                                        <dd class="text-muted mb-0">Conversion Rate</dd>
                                    </dl>
                                    <div class="item item-rounded bg-body">
                                        <i class="fa fa-chart-line font-size-h3 text-primary"></i>
                                    </div>
                                </div>
                                <div class="block-content block-content-full block-content-sm bg-body-light font-size-sm">
                                    <a class="font-w500 d-flex align-items-center" href="javascript:void(0)">
                                        View statistics
                                        <i class="fa fa-arrow-alt-circle-right ml-1 opacity-25 font-size-base"></i>
                                    </a>
                                </div>
                            </div>
                            <!-- END Conversion Rate-->
                        </div>
                    </div>
                    <!-- END Overview -->

                    <!-- Statistics -->
                    <div class="row">
                        <div class="col-xl-8 d-flex flex-column">
                            <!-- Earnings Summary -->
                            <div class="block block-rounded flex-grow-1 d-flex flex-column">
                                <div class="block-header block-header-default">
                                    <h3 class="block-title">Earnings Summary</h3>
                                    <div class="block-options">
                                        <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                                            <i class="si si-refresh"></i>
                                        </button>
                                        <button type="button" class="btn-block-option">
                                            <i class="si si-settings"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="block-content block-content-full flex-grow-1 d-flex align-items-center">
                                    <!-- Earnings Chart Container -->
                                    <!-- Chart.js Chart is initialized in js/pages/be_pages_dashboard.min.js which was auto compiled from _js/pages/be_pages_dashboard.js -->
                                    <!-- For more info and examples you can check out http://www.chartjs.org/docs/ -->
                                    <canvas class="js-chartjs-earnings"></canvas>
                                </div>
                                <div class="block-content bg-body-light">
                                    <div class="row items-push text-center w-100">
                                        <div class="col-sm-4">
                                            <dl class="mb-0">
                                                <dt class="font-size-h3 font-w700">
                                                    <i class="fa fa-arrow-up font-size-lg text-success"></i> 2.5%
                                                </dt>
                                                <dd class="text-muted mb-0">Customer Growth</dd>
                                            </dl>
                                        </div>
                                        <div class="col-sm-4">
                                            <dl class="mb-0">
                                                <dt class="font-size-h3 font-w700">
                                                    <i class="fa fa-arrow-up font-size-lg text-success"></i> 3.8%
                                                </dt>
                                                <dd class="text-muted mb-0">Page Views</dd>
                                            </dl>
                                        </div>
                                        <div class="col-sm-4">
                                            <dl class="mb-0">
                                                <dt class="font-size-h3 font-w700">
                                                    <i class="fa fa-arrow-up font-size-lg text-success"></i> 1.7%
                                                </dt>
                                                <dd class="text-muted mb-0">New Products</dd>
                                            </dl>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END Earnings Summary -->
                        </div>
                        <div class="col-xl-4 d-flex flex-column">
                            <!-- Last 2 Weeks -->
                            <!-- Sparkline Charts (.js-sparkline class is initialized in Helpers.sparkline() -->
                            <!-- For more info and examples you can check out http://omnipotent.net/jquery.sparkline/#s-about -->
                            <div class="row row-deck flex-grow-1">
                                <div class="col-md-6 col-xl-12">
                                    <div class="block block-rounded d-flex flex-column">
                                        <div class="block-content block-content-full flex-grow-1 d-flex justify-content-between">
                                            <dl class="mb-0">
                                                <dt class="font-size-h2 font-w700">570</dt>
                                                <dd class="text-muted mb-0">Total Orders</dd>
                                            </dl>
                                            <div>
                                                <div class="d-inline-block px-2 py-1 rounded-lg font-size-sm font-w600 text-danger bg-danger-light">
                                                    <i class="fa fa-caret-down mr-1"></i>
                                                    2.2%
                                                </div>
                                            </div>
                                        </div>
                                        <div class="block-content p-1 text-center overflow-hidden">
                                            <!-- Sparkline Line: Orders -->
                                            <span class="js-sparkline" data-type="line"
                                                  data-points="[33,29,32,37,38,30,34,28,43,45,26,45,49,39]"
                                                  data-width="100%"
                                                  data-height="70px"
                                                  data-chart-range-min="20"
                                                  data-line-color="rgba(210, 108, 122, .4)"
                                                  data-fill-color="rgba(210, 108, 122, .15)"
                                                  data-spot-color="transparent"
                                                  data-min-spot-color="transparent"
                                                  data-max-spot-color="transparent"
                                                  data-highlight-spot-color="#D26C7A"
                                                  data-highlight-line-color="#D26C7A"
                                                  data-tooltip-suffix="Orders"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-xl-12">
                                    <div class="block block-rounded d-flex flex-column">
                                        <div class="block-content block-content-full flex-grow-1 d-flex justify-content-between">
                                            <dl class="mb-0">
                                                <dt class="font-size-h2 font-w700">$5,234.21</dt>
                                                <dd class="text-muted mb-0">Total Earnings</dd>
                                            </dl>
                                            <div>
                                                <div class="d-inline-block px-2 py-1 rounded-lg font-size-sm font-w600 text-success bg-success-light">
                                                    <i class="fa fa-caret-up mr-1"></i>
                                                    4.2%
                                                </div>
                                            </div>
                                        </div>
                                        <div class="block-content p-1 text-center oveflow-hidden">
                                            <!-- Sparkline Line: Earnings -->
                                            <span class="js-sparkline" data-type="line"
                                                  data-points="[716,1185,750,1365,956,890,1200,968,1158,1025,920,1190,720,1352]"
                                                  data-width="100%"
                                                  data-height="70px"
                                                  data-chart-range-min="300"
                                                  data-line-color="rgba(70,195,123, .4)"
                                                  data-fill-color="rgba(70,195,123, .15)"
                                                  data-spot-color="transparent"
                                                  data-min-spot-color="transparent"
                                                  data-max-spot-color="transparent"
                                                  data-highlight-spot-color="#46C37B"
                                                  data-highlight-line-color="#46C37B"
                                                  data-tooltip-prefix="$"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <div class="block block-rounded d-flex flex-column">
                                        <div class="block-content block-content-full flex-grow-1 d-flex justify-content-between">
                                            <dl class="mb-0">
                                                <dt class="font-size-h2 font-w700">264</dt>
                                                <dd class="text-muted mb-0">New Customers</dd>
                                            </dl>
                                            <div>
                                                <div class="d-inline-block px-2 py-1 rounded-lg font-size-sm font-w600 text-success bg-success-light">
                                                    <i class="fa fa-caret-up mr-1"></i>
                                                    9.3%
                                                </div>
                                            </div>
                                        </div>
                                        <div class="block-content p-1 text-center oveflow-hidden">
                                            <!-- Sparkline Line: New Customers -->
                                            <span class="js-sparkline" data-type="line"
                                                  data-points="[25,15,36,14,29,19,36,41,28,26,29,33,23,41]"
                                                  data-width="100%"
                                                  data-height="70px"
                                                  data-chart-range-min="0"
                                                  data-line-color="rgba(70,195,123, .4)"
                                                  data-fill-color="rgba(70,195,123, .15)"
                                                  data-spot-color="transparent"
                                                  data-min-spot-color="transparent"
                                                  data-max-spot-color="transparent"
                                                  data-highlight-spot-color="#46C37B"
                                                  data-highlight-line-color="#46C37B"
                                                  data-tooltip-prefix="$"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END Last 2 Weeks -->
                        </div>
                    </div>
                    <!-- END Statistics -->

                    <!-- Recent Orders -->
                    <div class="block block-rounded">
                        <div class="block-header block-header-default">
                            <h3 class="block-title">Recent Orders</h3>
                            <div class="block-options">
                                <button type="button" class="btn btn-sm btn-alt-primary" data-toggle="class-toggle" data-target="#one-dashboard-search-orders" data-class="d-none">
                                    <i class="fa fa-search"></i>
                                </button>
                                <div class="dropdown d-inline-block">
                                    <button type="button" class="btn btn-sm btn-alt-primary" id="dropdown-recent-orders-filters" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fa fa-fw fa-flask"></i>
                                        Filters
                                        <i class="fa fa-angle-down ml-1"></i>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-md dropdown-menu-right font-size-sm" aria-labelledby="dropdown-recent-orders-filters">
                                        <a class="dropdown-item font-w500 d-flex align-items-center justify-content-between" href="javascript:void(0)">
                                            Pending..
                                            <span class="badge badge-primary badge-pill">35</span>
                                        </a>
                                        <a class="dropdown-item font-w500 d-flex align-items-center justify-content-between" href="javascript:void(0)">
                                            Processing
                                            <span class="badge badge-primary badge-pill">15</span>
                                        </a>
                                        <a class="dropdown-item font-w500 d-flex align-items-center justify-content-between" href="javascript:void(0)">
                                            For Delivery
                                            <span class="badge badge-primary badge-pill">20</span>
                                        </a>
                                        <a class="dropdown-item font-w500 d-flex align-items-center justify-content-between" href="javascript:void(0)">
                                            Canceled
                                            <span class="badge badge-primary badge-pill">72</span>
                                        </a>
                                        <a class="dropdown-item font-w500 d-flex align-items-center justify-content-between" href="javascript:void(0)">
                                            Delivered
                                            <span class="badge badge-primary badge-pill">890</span>
                                        </a>
                                        <a class="dropdown-item font-w500 d-flex align-items-center justify-content-between" href="javascript:void(0)">
                                            All
                                            <span class="badge badge-primary badge-pill">997</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="one-dashboard-search-orders" class="block-content border-bottom d-none">
                            <!-- Search Form -->
                            <form action="be_pages_dashboard.html" method="POST" onsubmit="return false;">
                                <div class="form-group push">
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="one-ecom-orders-search" name="one-ecom-orders-search" placeholder="Search recent orders..">
                                        <div class="input-group-append">
                                            <span class="input-group-text">
                                                <i class="fa fa-search"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <!-- END Search Form -->
                        </div>
                        <div class="block-content">
                            <!-- Recent Orders Table -->
                            <div class="table-responsive">
                                <table class="table table-borderless table-striped table-vcenter">
                                    <thead>
                                        <tr>
                                            <th class="text-center" style="width: 120px;">Order ID</th>
                                            <th class="d-none d-sm-table-cell">Created</th>
                                            <th class="d-none d-xl-table-cell">Customer</th>
                                            <th>Status</th>
                                            <th class="d-none d-xl-table-cell text-center">Products</th>
                                            <th class="d-none d-sm-table-cell text-center">Profit</th>
                                            <th class="d-none d-sm-table-cell text-right">Value</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="text-center font-size-sm">
                                                <a class="font-w600" href="javascript:void(0)">
                                                    <strong>ORD.00965</strong>
                                                </a>
                                            </td>
                                            <td class="d-none d-sm-table-cell font-size-sm font-w600 text-muted">11 min ago</td>
                                            <td class="d-none d-xl-table-cell font-size-sm">
                                                <a class="font-w600" href="javascript:void(0)">Megan Fuller</a>
                                            </td>
                                            <td>
                                                <span class="font-size-sm font-w600 px-2 py-1 rounded  bg-warning-light text-warning">Processing</span>
                                            </td>
                                            <td class="d-none d-xl-table-cell text-center font-size-sm">
                                                <a class="font-w600" href="javascript:void(0)">5</a>
                                            </td>
                                            <td class="d-none d-sm-table-cell text-center">
                                                <span class="font-size-sm font-w600 px-2 py-1 rounded bg-body-dark">24%</span>
                                            </td>
                                            <td class="d-none d-sm-table-cell text-right font-size-sm">
                                                <strong>$614,69</strong>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center font-size-sm">
                                                <a class="font-w600" href="javascript:void(0)">
                                                    <strong>ORD.00964</strong>
                                                </a>
                                            </td>
                                            <td class="d-none d-sm-table-cell font-size-sm font-w600 text-muted">15 min ago</td>
                                            <td class="d-none d-xl-table-cell font-size-sm">
                                                <a class="font-w600" href="javascript:void(0)">Judy Ford</a>
                                            </td>
                                            <td>
                                                <span class="font-size-sm font-w600 px-2 py-1 rounded  bg-info-light text-info">For delivery</span>
                                            </td>
                                            <td class="d-none d-xl-table-cell text-center font-size-sm">
                                                <a class="font-w600" href="javascript:void(0)">5</a>
                                            </td>
                                            <td class="d-none d-sm-table-cell text-center">
                                                <span class="font-size-sm font-w600 px-2 py-1 rounded bg-body-dark">21%</span>
                                            </td>
                                            <td class="d-none d-sm-table-cell text-right font-size-sm">
                                                <strong>$411,58</strong>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center font-size-sm">
                                                <a class="font-w600" href="javascript:void(0)">
                                                    <strong>ORD.00963</strong>
                                                </a>
                                            </td>
                                            <td class="d-none d-sm-table-cell font-size-sm font-w600 text-muted">28 min ago</td>
                                            <td class="d-none d-xl-table-cell font-size-sm">
                                                <a class="font-w600" href="javascript:void(0)">Justin Hunt</a>
                                            </td>
                                            <td>
                                                <span class="font-size-sm font-w600 px-2 py-1 rounded  bg-danger-light text-danger">Canceled</span>
                                            </td>
                                            <td class="d-none d-xl-table-cell text-center font-size-sm">
                                                <a class="font-w600" href="javascript:void(0)">3</a>
                                            </td>
                                            <td class="d-none d-sm-table-cell text-center">
                                                <span class="font-size-sm font-w600 px-2 py-1 rounded bg-body-dark">24%</span>
                                            </td>
                                            <td class="d-none d-sm-table-cell text-right font-size-sm">
                                                <strong>$1258,88</strong>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center font-size-sm">
                                                <a class="font-w600" href="javascript:void(0)">
                                                    <strong>ORD.00962</strong>
                                                </a>
                                            </td>
                                            <td class="d-none d-sm-table-cell font-size-sm font-w600 text-muted">18 min ago</td>
                                            <td class="d-none d-xl-table-cell font-size-sm">
                                                <a class="font-w600" href="javascript:void(0)">Jack Estrada</a>
                                            </td>
                                            <td>
                                                <span class="font-size-sm font-w600 px-2 py-1 rounded  bg-danger-light text-danger">Canceled</span>
                                            </td>
                                            <td class="d-none d-xl-table-cell text-center font-size-sm">
                                                <a class="font-w600" href="javascript:void(0)">5</a>
                                            </td>
                                            <td class="d-none d-sm-table-cell text-center">
                                                <span class="font-size-sm font-w600 px-2 py-1 rounded bg-body-dark">9%</span>
                                            </td>
                                            <td class="d-none d-sm-table-cell text-right font-size-sm">
                                                <strong>$1429,94</strong>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center font-size-sm">
                                                <a class="font-w600" href="javascript:void(0)">
                                                    <strong>ORD.00961</strong>
                                                </a>
                                            </td>
                                            <td class="d-none d-sm-table-cell font-size-sm font-w600 text-muted">21 min ago</td>
                                            <td class="d-none d-xl-table-cell font-size-sm">
                                                <a class="font-w600" href="javascript:void(0)">David Fuller</a>
                                            </td>
                                            <td>
                                                <span class="font-size-sm font-w600 px-2 py-1 rounded  bg-success-light text-success">Delivered</span>
                                            </td>
                                            <td class="d-none d-xl-table-cell text-center font-size-sm">
                                                <a class="font-w600" href="javascript:void(0)">7</a>
                                            </td>
                                            <td class="d-none d-sm-table-cell text-center">
                                                <span class="font-size-sm font-w600 px-2 py-1 rounded bg-body-dark">25%</span>
                                            </td>
                                            <td class="d-none d-sm-table-cell text-right font-size-sm">
                                                <strong>$1620,25</strong>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center font-size-sm">
                                                <a class="font-w600" href="javascript:void(0)">
                                                    <strong>ORD.00960</strong>
                                                </a>
                                            </td>
                                            <td class="d-none d-sm-table-cell font-size-sm font-w600 text-muted">11 min ago</td>
                                            <td class="d-none d-xl-table-cell font-size-sm">
                                                <a class="font-w600" href="javascript:void(0)">Amber Harvey</a>
                                            </td>
                                            <td>
                                                <span class="font-size-sm font-w600 px-2 py-1 rounded  bg-success-light text-success">Delivered</span>
                                            </td>
                                            <td class="d-none d-xl-table-cell text-center font-size-sm">
                                                <a class="font-w600" href="javascript:void(0)">9</a>
                                            </td>
                                            <td class="d-none d-sm-table-cell text-center">
                                                <span class="font-size-sm font-w600 px-2 py-1 rounded bg-body-dark">7%</span>
                                            </td>
                                            <td class="d-none d-sm-table-cell text-right font-size-sm">
                                                <strong>$346,33</strong>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center font-size-sm">
                                                <a class="font-w600" href="javascript:void(0)">
                                                    <strong>ORD.00959</strong>
                                                </a>
                                            </td>
                                            <td class="d-none d-sm-table-cell font-size-sm font-w600 text-muted">9 min ago</td>
                                            <td class="d-none d-xl-table-cell font-size-sm">
                                                <a class="font-w600" href="javascript:void(0)">Alice Moore</a>
                                            </td>
                                            <td>
                                                <span class="font-size-sm font-w600 px-2 py-1 rounded  bg-info-light text-info">For delivery</span>
                                            </td>
                                            <td class="d-none d-xl-table-cell text-center font-size-sm">
                                                <a class="font-w600" href="javascript:void(0)">4</a>
                                            </td>
                                            <td class="d-none d-sm-table-cell text-center">
                                                <span class="font-size-sm font-w600 px-2 py-1 rounded bg-body-dark">4%</span>
                                            </td>
                                            <td class="d-none d-sm-table-cell text-right font-size-sm">
                                                <strong>$63,66</strong>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center font-size-sm">
                                                <a class="font-w600" href="javascript:void(0)">
                                                    <strong>ORD.00958</strong>
                                                </a>
                                            </td>
                                            <td class="d-none d-sm-table-cell font-size-sm font-w600 text-muted">13 min ago</td>
                                            <td class="d-none d-xl-table-cell font-size-sm">
                                                <a class="font-w600" href="javascript:void(0)">Laura Carr</a>
                                            </td>
                                            <td>
                                                <span class="font-size-sm font-w600 px-2 py-1 rounded  bg-danger-light text-danger">Canceled</span>
                                            </td>
                                            <td class="d-none d-xl-table-cell text-center font-size-sm">
                                                <a class="font-w600" href="javascript:void(0)">8</a>
                                            </td>
                                            <td class="d-none d-sm-table-cell text-center">
                                                <span class="font-size-sm font-w600 px-2 py-1 rounded bg-body-dark">6%</span>
                                            </td>
                                            <td class="d-none d-sm-table-cell text-right font-size-sm">
                                                <strong>$947,16</strong>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center font-size-sm">
                                                <a class="font-w600" href="javascript:void(0)">
                                                    <strong>ORD.00957</strong>
                                                </a>
                                            </td>
                                            <td class="d-none d-sm-table-cell font-size-sm font-w600 text-muted">26 min ago</td>
                                            <td class="d-none d-xl-table-cell font-size-sm">
                                                <a class="font-w600" href="javascript:void(0)">Lori Moore</a>
                                            </td>
                                            <td>
                                                <span class="font-size-sm font-w600 px-2 py-1 rounded  bg-danger-light text-danger">Canceled</span>
                                            </td>
                                            <td class="d-none d-xl-table-cell text-center font-size-sm">
                                                <a class="font-w600" href="javascript:void(0)">5</a>
                                            </td>
                                            <td class="d-none d-sm-table-cell text-center">
                                                <span class="font-size-sm font-w600 px-2 py-1 rounded bg-body-dark">8%</span>
                                            </td>
                                            <td class="d-none d-sm-table-cell text-right font-size-sm">
                                                <strong>$514,83</strong>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!-- END Recent Orders Table -->

                            <!-- Pagination -->
                            <nav aria-label="Photos Search Navigation">
                                <ul class="pagination pagination-sm justify-content-end mt-2">
                                    <li class="page-item">
                                        <a class="page-link" href="javascript:void(0)" tabindex="-1" aria-label="Previous">
                                            Prev
                                        </a>
                                    </li>
                                    <li class="page-item active">
                                        <a class="page-link" href="javascript:void(0)">1</a>
                                    </li>
                                    <li class="page-item">
                                        <a class="page-link" href="javascript:void(0)">2</a>
                                    </li>
                                    <li class="page-item">
                                        <a class="page-link" href="javascript:void(0)">3</a>
                                    </li>
                                    <li class="page-item">
                                        <a class="page-link" href="javascript:void(0)">4</a>
                                    </li>
                                    <li class="page-item">
                                        <a class="page-link" href="javascript:void(0)" aria-label="Next">
                                            Next
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                            <!-- END Pagination -->
                        </div>
                    </div>
                    <!-- END Recent Orders -->
                </div>
                <!-- END Page Content -->
            </main>
            <!-- END Main Container -->

            <!-- Footer -->
            <footer id="page-footer" class="bg-body-light">
                <div class="content py-3">
                    <div class="row font-size-sm">
                        <div class="col-sm-6 order-sm-2 py-1 text-center text-sm-right">
                            Crafted with <i class="fa fa-heart text-danger"></i> by <a class="font-w600" href="https://1.envato.market/ydb" target="_blank">pixelcave</a>
                        </div>
                        <div class="col-sm-6 order-sm-1 py-1 text-center text-sm-left">
                            <a class="font-w600" href="https://1.envato.market/AVD6j" target="_blank">OneUI 4.8</a> &copy; <span data-toggle="year-copy"></span>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- END Footer -->

            <!-- Apps Modal -->
            <!-- Opens from the modal toggle button in the header -->
            <div class="modal fade" id="one-modal-apps" tabindex="-1" role="dialog" aria-labelledby="one-modal-apps" aria-hidden="true">
                <div class="modal-dialog modal-sm" role="document">
                    <div class="modal-content">
                        <div class="block block-rounded block-themed block-transparent mb-0">
                            <div class="block-header bg-primary-dark">
                                <h3 class="block-title">Apps</h3>
                                <div class="block-options">
                                    <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                                        <i class="si si-close"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="block-content block-content-full">
                                <div class="row gutters-tiny">
                                    <div class="col-6">
                                        <!-- CRM -->
                                        <a class="block block-rounded block-link-shadow bg-body" href="javascript:void(0)">
                                            <div class="block-content text-center">
                                                <i class="si si-speedometer fa-2x text-primary"></i>
                                                <p class="font-w600 font-size-sm mt-2 mb-3">
                                                    CRM
                                                </p>
                                            </div>
                                        </a>
                                        <!-- END CRM -->
                                    </div>
                                    <div class="col-6">
                                        <!-- Products -->
                                        <a class="block block-rounded block-link-shadow bg-body" href="javascript:void(0)">
                                            <div class="block-content text-center">
                                                <i class="si si-rocket fa-2x text-primary"></i>
                                                <p class="font-w600 font-size-sm mt-2 mb-3">
                                                    Products
                                                </p>
                                            </div>
                                        </a>
                                        <!-- END Products -->
                                    </div>
                                    <div class="col-6">
                                        <!-- Sales -->
                                        <a class="block block-rounded block-link-shadow bg-body mb-0" href="javascript:void(0)">
                                            <div class="block-content text-center">
                                                <i class="si si-plane fa-2x text-primary"></i>
                                                <p class="font-w600 font-size-sm mt-2 mb-3">
                                                    Sales
                                                </p>
                                            </div>
                                        </a>
                                        <!-- END Sales -->
                                    </div>
                                    <div class="col-6">
                                        <!-- Payments -->
                                        <a class="block block-rounded block-link-shadow bg-body mb-0" href="javascript:void(0)">
                                            <div class="block-content text-center">
                                                <i class="si si-wallet fa-2x text-primary"></i>
                                                <p class="font-w600 font-size-sm mt-2 mb-3">
                                                    Payments
                                                </p>
                                            </div>
                                        </a>
                                        <!-- END Payments -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END Apps Modal -->
        </div>
        <!-- END Page Container -->

        <!--
            OneUI JS Core

            Vital libraries and plugins used in all pages. You can choose to not include this file if you would like
            to handle those dependencies through webpack. Please check out assets/_js/main/bootstrap.js for more info.

            If you like, you could also include them separately directly from the assets/js/core folder in the following
            order. That can come in handy if you would like to include a few of them (eg jQuery) from a CDN.

            assets/js/core/jquery.min.js
            assets/js/core/bootstrap.bundle.min.js
            assets/js/core/simplebar.min.js
            assets/js/core/jquery-scrollLock.min.js
            assets/js/core/jquery.appear.min.js
            assets/js/core/js.cookie.min.js
        -->
        <script src="<?php echo base_url(); ?>assets/src/assets/js/oneui.core.min.js"></script>

        <!--
            OneUI JS

            Custom functionality including Blocks/Layout API as well as other vital and optional helpers
            webpack is putting everything together at assets/_js/main/app.js
        -->
        <script src="<?php echo base_url(); ?>assets/src/assets/js/oneui.app.min.js"></script>

        <!-- Page JS Plugins -->
        <script src="<?php echo base_url(); ?>assets/src/assets/js/plugins/jquery-sparkline/jquery.sparkline.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/src/assets/js/plugins/chart.js/Chart.bundle.min.js"></script>

        <!-- Page JS Code -->
        <script src="<?php echo base_url(); ?>assets/src/assets/js/pages/be_pages_dashboard.min.js"></script>

        <!-- Page JS Helpers (jQuery Sparkline Plugins) -->
        <script>jQuery(function () {
                                    One.helpers(['sparkline']);
                                });</script>
    </body>
</html>
