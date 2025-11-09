<!DOCTYPE html>
<html lang="en" class="layout-navbar-fixed layout-compact layout-menu-fixed" dir="ltr" data-skin="default"
    data-assets-path="{{ asset('backend') }}/" data-template="vertical-menu-template" data-bs-theme="light">

<head>
    <meta charset="utf-8">
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
    <meta name="robots" content="noindex">
    <title>Demo: Dashboard - Analytics | Vuexy - Bootstrap Dashboard PRO</title>


    <meta name="description"
        content="Vuexy is the best bootstrap 5 dashboard for responsive web apps. Streamline your app development process with ease.">
    <!-- Canonical SEO -->
    <meta name="keywords"
        content="Vuexy bootstrap dashboard, vuexy bootstrap 5 dashboard, themeselection, html dashboard, web dashboard, frontend dashboard, responsive bootstrap theme">
    <meta property="og:title" content="Vuexy bootstrap Dashboard by Pixinvent">
    <meta property="og:type" content="product">
    <meta property="og:url"
        content="https://themeforest.net/item/vuexy-vuejs-html-laravel-admin-dashboard-template/23328599">
    <meta property="og:image" content="https://pixinvent.com/wp-content/uploads/2023/06/vuexy-hero-image.png">
    <meta property="og:description"
        content="Vuexy is the best bootstrap 5 dashboard for responsive web apps. Streamline your app development process with ease.">
    <meta property="og:site_name" content="Pixinvent">
    <link rel="canonical"
        href="https://themeforest.net/item/vuexy-vuejs-html-laravel-admin-dashboard-template/23328599">


    <!-- ? PROD Only: Google Tag Manager (Default ThemeSelection: GTM-5DDHKGP, PixInvent: GTM-5J3LMKC) -->
    <script async="" src="https://www.googletagmanager.com/gtm.js?id=GTM-5J3LMKC"></script>
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src = 'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-5J3LMKC');
    </script>
    <!-- End Google Tag Manager -->

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('backend') }}/img/favicon/favicon.ico">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <link
        href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&amp;ampdisplay=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('backend') }}/vendor/fonts/iconify-icons.css">

    <!-- Core CSS -->
    <!-- build:css assets/vendor/css/theme.css  -->

    <link rel="stylesheet" href="{{ asset('backend') }}/vendor/libs/node-waves/node-waves.css">


    <link rel="stylesheet" href="{{ asset('backend') }}/vendor/libs/pickr/pickr-themes.css">

    <link rel="stylesheet" href="{{ asset('backend') }}/vendor/css/core.css">
    <link rel="stylesheet" href="{{ asset('backend') }}/css/demo.css">


    <!-- Vendors CSS -->

    <link rel="stylesheet" href="{{ asset('backend') }}/vendor/libs/perfect-scrollbar/perfect-scrollbar.css">

    <!-- endbuild -->

    <link rel="stylesheet" href="{{ asset('backend') }}/vendor/libs/apex-charts/apex-charts.css">
    <link rel="stylesheet" href="{{ asset('backend') }}/vendor/libs/swiper/swiper.css">
    <link rel="stylesheet" href="{{ asset('backend') }}/vendor/libs/datatables-bs5/datatables.bootstrap5.css">
    <link rel="stylesheet"
        href="{{ asset('backend') }}/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css">
    {{-- <link rel="stylesheet" href="{{asset('backend')}}/vendor/fonts/flag-icons.css"> --}}

    <!-- Page CSS -->
    <link rel="stylesheet" href="{{ asset('backend') }}/vendor/css/pages/cards-advance.css">

    <!-- Helpers -->
    <script src="{{ asset('backend') }}/vendor/js/helpers.js"></script>
    <style type="text/css">
        .layout-menu-fixed .layout-navbar-full .layout-menu,
        .layout-menu-fixed-offcanvas .layout-navbar-full .layout-menu {
            top: 56px !important;
        }

        .layout-page {
            padding-top: 56px !important;
        }

        .content-wrapper {
            padding-bottom: 54px !important;
        }
    </style>

    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->

    <script src="{{ asset('backend') }}/js/config.js"></script>
    <style id="custom-css"></style>

    <style id="apexcharts-css">
        @keyframes opaque {
            0% {
                opacity: 0
            }

            to {
                opacity: 1
            }
        }

        @keyframes resizeanim {

            0%,
            to {
                opacity: 0
            }
        }

        .apexcharts-canvas {
            position: relative;
            direction: ltr !important;
            user-select: none
        }

        .apexcharts-canvas ::-webkit-scrollbar {
            -webkit-appearance: none;
            width: 6px
        }

        .apexcharts-canvas ::-webkit-scrollbar-thumb {
            border-radius: 4px;
            background-color: rgba(0, 0, 0, .5);
            box-shadow: 0 0 1px rgba(255, 255, 255, .5);
            -webkit-box-shadow: 0 0 1px rgba(255, 255, 255, .5)
        }

        .apexcharts-inner {
            position: relative
        }

        .apexcharts-text tspan {
            font-family: inherit
        }

        rect.legend-mouseover-inactive,
        .legend-mouseover-inactive rect,
        .legend-mouseover-inactive path,
        .legend-mouseover-inactive circle,
        .legend-mouseover-inactive line,
        .legend-mouseover-inactive text.apexcharts-yaxis-title-text,
        .legend-mouseover-inactive text.apexcharts-yaxis-label {
            transition: .15s ease all;
            opacity: .2
        }

        .apexcharts-legend-text {
            padding-left: 15px;
            margin-left: -15px;
        }

        .apexcharts-series-collapsed {
            opacity: 0
        }

        .apexcharts-tooltip {
            border-radius: 5px;
            box-shadow: 2px 2px 6px -4px #999;
            cursor: default;
            font-size: 14px;
            left: 62px;
            opacity: 0;
            pointer-events: none;
            position: absolute;
            top: 20px;
            display: flex;
            flex-direction: column;
            overflow: hidden;
            white-space: nowrap;
            z-index: 12;
            transition: .15s ease all
        }

        .apexcharts-tooltip.apexcharts-active {
            opacity: 1;
            transition: .15s ease all
        }

        .apexcharts-tooltip.apexcharts-theme-light {
            border: 1px solid #e3e3e3;
            background: rgba(255, 255, 255, .96)
        }

        .apexcharts-tooltip.apexcharts-theme-dark {
            color: #fff;
            background: rgba(30, 30, 30, .8)
        }

        .apexcharts-tooltip * {
            font-family: inherit
        }

        .apexcharts-tooltip-title {
            padding: 6px;
            font-size: 15px;
            margin-bottom: 4px
        }

        .apexcharts-tooltip.apexcharts-theme-light .apexcharts-tooltip-title {
            background: #eceff1;
            border-bottom: 1px solid #ddd
        }

        .apexcharts-tooltip.apexcharts-theme-dark .apexcharts-tooltip-title {
            background: rgba(0, 0, 0, .7);
            border-bottom: 1px solid #333
        }

        .apexcharts-tooltip-text-goals-value,
        .apexcharts-tooltip-text-y-value,
        .apexcharts-tooltip-text-z-value {
            display: inline-block;
            margin-left: 5px;
            font-weight: 600
        }

        .apexcharts-tooltip-text-goals-label:empty,
        .apexcharts-tooltip-text-goals-value:empty,
        .apexcharts-tooltip-text-y-label:empty,
        .apexcharts-tooltip-text-y-value:empty,
        .apexcharts-tooltip-text-z-value:empty,
        .apexcharts-tooltip-title:empty {
            display: none
        }

        .apexcharts-tooltip-text-goals-label,
        .apexcharts-tooltip-text-goals-value {
            padding: 6px 0 5px
        }

        .apexcharts-tooltip-goals-group,
        .apexcharts-tooltip-text-goals-label,
        .apexcharts-tooltip-text-goals-value {
            display: flex
        }

        .apexcharts-tooltip-text-goals-label:not(:empty),
        .apexcharts-tooltip-text-goals-value:not(:empty) {
            margin-top: -6px
        }

        .apexcharts-tooltip-marker {
            width: 12px;
            height: 12px;
            position: relative;
            top: 0;
            margin-right: 10px;
            border-radius: 50%
        }

        .apexcharts-tooltip-series-group {
            padding: 0 10px;
            display: none;
            text-align: left;
            justify-content: left;
            align-items: center
        }

        .apexcharts-tooltip-series-group.apexcharts-active .apexcharts-tooltip-marker {
            opacity: 1
        }

        .apexcharts-tooltip-series-group.apexcharts-active,
        .apexcharts-tooltip-series-group:last-child {
            padding-bottom: 4px
        }

        .apexcharts-tooltip-y-group {
            padding: 6px 0 5px
        }

        .apexcharts-custom-tooltip,
        .apexcharts-tooltip-box {
            padding: 4px 8px
        }

        .apexcharts-tooltip-boxPlot {
            display: flex;
            flex-direction: column-reverse
        }

        .apexcharts-tooltip-box>div {
            margin: 4px 0
        }

        .apexcharts-tooltip-box span.value {
            font-weight: 700
        }

        .apexcharts-tooltip-rangebar {
            padding: 5px 8px
        }

        .apexcharts-tooltip-rangebar .category {
            font-weight: 600;
            color: #777
        }

        .apexcharts-tooltip-rangebar .series-name {
            font-weight: 700;
            display: block;
            margin-bottom: 5px
        }

        .apexcharts-xaxistooltip,
        .apexcharts-yaxistooltip {
            opacity: 0;
            pointer-events: none;
            color: #373d3f;
            font-size: 13px;
            text-align: center;
            border-radius: 2px;
            position: absolute;
            z-index: 10;
            background: #eceff1;
            border: 1px solid #90a4ae
        }

        .apexcharts-xaxistooltip {
            padding: 9px 10px;
            transition: .15s ease all
        }

        .apexcharts-xaxistooltip.apexcharts-theme-dark {
            background: rgba(0, 0, 0, .7);
            border: 1px solid rgba(0, 0, 0, .5);
            color: #fff
        }

        .apexcharts-xaxistooltip:after,
        .apexcharts-xaxistooltip:before {
            left: 50%;
            border: solid transparent;
            content: " ";
            height: 0;
            width: 0;
            position: absolute;
            pointer-events: none
        }

        .apexcharts-xaxistooltip:after {
            border-color: transparent;
            border-width: 6px;
            margin-left: -6px
        }

        .apexcharts-xaxistooltip:before {
            border-color: transparent;
            border-width: 7px;
            margin-left: -7px
        }

        .apexcharts-xaxistooltip-bottom:after,
        .apexcharts-xaxistooltip-bottom:before {
            bottom: 100%
        }

        .apexcharts-xaxistooltip-top:after,
        .apexcharts-xaxistooltip-top:before {
            top: 100%
        }

        .apexcharts-xaxistooltip-bottom:after {
            border-bottom-color: #eceff1
        }

        .apexcharts-xaxistooltip-bottom:before {
            border-bottom-color: #90a4ae
        }

        .apexcharts-xaxistooltip-bottom.apexcharts-theme-dark:after,
        .apexcharts-xaxistooltip-bottom.apexcharts-theme-dark:before {
            border-bottom-color: rgba(0, 0, 0, .5)
        }

        .apexcharts-xaxistooltip-top:after {
            border-top-color: #eceff1
        }

        .apexcharts-xaxistooltip-top:before {
            border-top-color: #90a4ae
        }

        .apexcharts-xaxistooltip-top.apexcharts-theme-dark:after,
        .apexcharts-xaxistooltip-top.apexcharts-theme-dark:before {
            border-top-color: rgba(0, 0, 0, .5)
        }

        .apexcharts-xaxistooltip.apexcharts-active {
            opacity: 1;
            transition: .15s ease all
        }

        .apexcharts-yaxistooltip {
            padding: 4px 10px
        }

        .apexcharts-yaxistooltip.apexcharts-theme-dark {
            background: rgba(0, 0, 0, .7);
            border: 1px solid rgba(0, 0, 0, .5);
            color: #fff
        }

        .apexcharts-yaxistooltip:after,
        .apexcharts-yaxistooltip:before {
            top: 50%;
            border: solid transparent;
            content: " ";
            height: 0;
            width: 0;
            position: absolute;
            pointer-events: none
        }

        .apexcharts-yaxistooltip:after {
            border-color: transparent;
            border-width: 6px;
            margin-top: -6px
        }

        .apexcharts-yaxistooltip:before {
            border-color: transparent;
            border-width: 7px;
            margin-top: -7px
        }

        .apexcharts-yaxistooltip-left:after,
        .apexcharts-yaxistooltip-left:before {
            left: 100%
        }

        .apexcharts-yaxistooltip-right:after,
        .apexcharts-yaxistooltip-right:before {
            right: 100%
        }

        .apexcharts-yaxistooltip-left:after {
            border-left-color: #eceff1
        }

        .apexcharts-yaxistooltip-left:before {
            border-left-color: #90a4ae
        }

        .apexcharts-yaxistooltip-left.apexcharts-theme-dark:after,
        .apexcharts-yaxistooltip-left.apexcharts-theme-dark:before {
            border-left-color: rgba(0, 0, 0, .5)
        }

        .apexcharts-yaxistooltip-right:after {
            border-right-color: #eceff1
        }

        .apexcharts-yaxistooltip-right:before {
            border-right-color: #90a4ae
        }

        .apexcharts-yaxistooltip-right.apexcharts-theme-dark:after,
        .apexcharts-yaxistooltip-right.apexcharts-theme-dark:before {
            border-right-color: rgba(0, 0, 0, .5)
        }

        .apexcharts-yaxistooltip.apexcharts-active {
            opacity: 1
        }

        .apexcharts-yaxistooltip-hidden {
            display: none
        }

        .apexcharts-xcrosshairs,
        .apexcharts-ycrosshairs {
            pointer-events: none;
            opacity: 0;
            transition: .15s ease all
        }

        .apexcharts-xcrosshairs.apexcharts-active,
        .apexcharts-ycrosshairs.apexcharts-active {
            opacity: 1;
            transition: .15s ease all
        }

        .apexcharts-ycrosshairs-hidden {
            opacity: 0
        }

        .apexcharts-selection-rect {
            cursor: move
        }

        .svg_select_shape {
            stroke-width: 1;
            stroke-dasharray: 10 10;
            stroke: black;
            stroke-opacity: 0.1;
            pointer-events: none;
            fill: none;
        }

        .svg_select_handle {
            stroke-width: 3;
            stroke: black;
            fill: none;
        }

        .svg_select_handle_r {
            cursor: e-resize;
        }

        .svg_select_handle_l {
            cursor: w-resize;
        }

        .apexcharts-svg.apexcharts-zoomable.hovering-zoom {
            cursor: crosshair
        }

        .apexcharts-svg.apexcharts-zoomable.hovering-pan {
            cursor: move
        }

        .apexcharts-menu-icon,
        .apexcharts-pan-icon,
        .apexcharts-reset-icon,
        .apexcharts-selection-icon,
        .apexcharts-toolbar-custom-icon,
        .apexcharts-zoom-icon,
        .apexcharts-zoomin-icon,
        .apexcharts-zoomout-icon {
            cursor: pointer;
            width: 20px;
            height: 20px;
            line-height: 24px;
            color: #6e8192;
            text-align: center
        }

        .apexcharts-menu-icon svg,
        .apexcharts-reset-icon svg,
        .apexcharts-zoom-icon svg,
        .apexcharts-zoomin-icon svg,
        .apexcharts-zoomout-icon svg {
            fill: #6e8192
        }

        .apexcharts-selection-icon svg {
            fill: #444;
            transform: scale(.76)
        }

        .apexcharts-theme-dark .apexcharts-menu-icon svg,
        .apexcharts-theme-dark .apexcharts-pan-icon svg,
        .apexcharts-theme-dark .apexcharts-reset-icon svg,
        .apexcharts-theme-dark .apexcharts-selection-icon svg,
        .apexcharts-theme-dark .apexcharts-toolbar-custom-icon svg,
        .apexcharts-theme-dark .apexcharts-zoom-icon svg,
        .apexcharts-theme-dark .apexcharts-zoomin-icon svg,
        .apexcharts-theme-dark .apexcharts-zoomout-icon svg {
            fill: #f3f4f5
        }

        .apexcharts-canvas .apexcharts-reset-zoom-icon.apexcharts-selected svg,
        .apexcharts-canvas .apexcharts-selection-icon.apexcharts-selected svg,
        .apexcharts-canvas .apexcharts-zoom-icon.apexcharts-selected svg {
            fill: #008ffb
        }

        .apexcharts-theme-light .apexcharts-menu-icon:hover svg,
        .apexcharts-theme-light .apexcharts-reset-icon:hover svg,
        .apexcharts-theme-light .apexcharts-selection-icon:not(.apexcharts-selected):hover svg,
        .apexcharts-theme-light .apexcharts-zoom-icon:not(.apexcharts-selected):hover svg,
        .apexcharts-theme-light .apexcharts-zoomin-icon:hover svg,
        .apexcharts-theme-light .apexcharts-zoomout-icon:hover svg {
            fill: #333
        }

        .apexcharts-menu-icon,
        .apexcharts-selection-icon {
            position: relative
        }

        .apexcharts-reset-icon {
            margin-left: 5px
        }

        .apexcharts-menu-icon,
        .apexcharts-reset-icon,
        .apexcharts-zoom-icon {
            transform: scale(.85)
        }

        .apexcharts-zoomin-icon,
        .apexcharts-zoomout-icon {
            transform: scale(.7)
        }

        .apexcharts-zoomout-icon {
            margin-right: 3px
        }

        .apexcharts-pan-icon {
            transform: scale(.62);
            position: relative;
            left: 1px;
            top: 0
        }

        .apexcharts-pan-icon svg {
            fill: #fff;
            stroke: #6e8192;
            stroke-width: 2
        }

        .apexcharts-pan-icon.apexcharts-selected svg {
            stroke: #008ffb
        }

        .apexcharts-pan-icon:not(.apexcharts-selected):hover svg {
            stroke: #333
        }

        .apexcharts-toolbar {
            position: absolute;
            z-index: 11;
            max-width: 176px;
            text-align: right;
            border-radius: 3px;
            padding: 0 6px 2px;
            display: flex;
            justify-content: space-between;
            align-items: center
        }

        .apexcharts-menu {
            background: #fff;
            position: absolute;
            top: 100%;
            border: 1px solid #ddd;
            border-radius: 3px;
            padding: 3px;
            right: 10px;
            opacity: 0;
            min-width: 110px;
            transition: .15s ease all;
            pointer-events: none
        }

        .apexcharts-menu.apexcharts-menu-open {
            opacity: 1;
            pointer-events: all;
            transition: .15s ease all
        }

        .apexcharts-menu-item {
            padding: 6px 7px;
            font-size: 12px;
            cursor: pointer
        }

        .apexcharts-theme-light .apexcharts-menu-item:hover {
            background: #eee
        }

        .apexcharts-theme-dark .apexcharts-menu {
            background: rgba(0, 0, 0, .7);
            color: #fff
        }

        @media screen and (min-width:768px) {
            .apexcharts-canvas:hover .apexcharts-toolbar {
                opacity: 1
            }
        }

        .apexcharts-canvas .apexcharts-element-hidden,
        .apexcharts-datalabel.apexcharts-element-hidden,
        .apexcharts-hide .apexcharts-series-points {
            opacity: 0;
        }

        .apexcharts-hidden-element-shown {
            opacity: 1;
            transition: 0.25s ease all;
        }

        .apexcharts-datalabel,
        .apexcharts-datalabel-label,
        .apexcharts-datalabel-value,
        .apexcharts-datalabels,
        .apexcharts-pie-label {
            cursor: default;
            pointer-events: none
        }

        .apexcharts-pie-label-delay {
            opacity: 0;
            animation-name: opaque;
            animation-duration: .3s;
            animation-fill-mode: forwards;
            animation-timing-function: ease
        }

        .apexcharts-radialbar-label {
            cursor: pointer;
        }

        .apexcharts-annotation-rect,
        .apexcharts-area-series .apexcharts-area,
        .apexcharts-gridline,
        .apexcharts-line,
        .apexcharts-point-annotation-label,
        .apexcharts-radar-series path:not(.apexcharts-marker),
        .apexcharts-radar-series polygon,
        .apexcharts-toolbar svg,
        .apexcharts-tooltip .apexcharts-marker,
        .apexcharts-xaxis-annotation-label,
        .apexcharts-yaxis-annotation-label,
        .apexcharts-zoom-rect,
        .no-pointer-events {
            pointer-events: none
        }

        .apexcharts-tooltip-active .apexcharts-marker {
            transition: .15s ease all
        }

        .resize-triggers {
            animation: 1ms resizeanim;
            visibility: hidden;
            opacity: 0;
            height: 100%;
            width: 100%;
            overflow: hidden
        }

        .contract-trigger:before,
        .resize-triggers,
        .resize-triggers>div {
            content: " ";
            display: block;
            position: absolute;
            top: 0;
            left: 0
        }

        .resize-triggers>div {
            height: 100%;
            width: 100%;
            background: #eee;
            overflow: auto
        }

        .contract-trigger:before {
            overflow: hidden;
            width: 200%;
            height: 200%
        }

        .apexcharts-bar-goals-markers {
            pointer-events: none
        }

        .apexcharts-bar-shadows {
            pointer-events: none
        }

        .apexcharts-rangebar-goals-markers {
            pointer-events: none
        }
    </style>
</head>

<body style="--bs-scrollbar-width: 15px;">

    <div class="layout-wrapper layout-content-navbar  ">
        <div class="layout-container">

            <!-- Menu -->

            @include('backend.layouts.includes.sidebar')

            <div class="menu-mobile-toggler d-xl-none rounded-1">
                <a href="javascript:void(0);"
                    class="layout-menu-toggle menu-link text-large text-bg-secondary p-2 rounded-1">
                    <i class="ti tabler-menu icon-base"></i>
                    <i class="ti tabler-chevron-right icon-base"></i>
                </a>
            </div>
            <!-- / Menu -->



            <!-- Layout container -->
            <div class="layout-page">

                <!-- Navbar -->
                @include('backend.layouts.includes.header')
                <!-- / Navbar -->

                <!-- Content wrapper -->
                <div class="content-wrapper">
                    <!-- Content -->
                    <div class="container-xxl flex-grow-1 container-p-y">
                        <div class="row g-6">
                            <!-- Sales last year -->
                            <div class="col-xxl-2 col-md-3 col-6">
                                <div class="card h-100">
                                    <div class="card-header pb-3">
                                        <h5 class="card-title mb-1">Order</h5>
                                        <p class="card-subtitle">Last week</p>
                                    </div>
                                    <div class="card-body">
                                        <div id="ordersLastWeek" style="min-height: 75px;">
                                            <div id="apexchartsgd3wlyyx"
                                                class="apexcharts-canvas apexchartsgd3wlyyx apexcharts-theme-"
                                                style="width: 195px; height: 75px;"><svg
                                                    xmlns="http://www.w3.org/2000/svg" version="1.1"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink" class="apexcharts-svg"
                                                    xmlns:data="ApexChartsNS" transform="translate(0, 0)" width="195"
                                                    height="75">
                                                    <foreignObject x="0" y="0" width="195" height="75">
                                                        <div class="apexcharts-legend"
                                                            xmlns="http://www.w3.org/1999/xhtml"
                                                            style="max-height: 37.5px;"></div>
                                                        <style type="text/css">
                                                            .apexcharts-flip-y {
                                                                transform: scaleY(-1) translateY(-100%);
                                                                transform-origin: top;
                                                                transform-box: fill-box;
                                                            }

                                                            .apexcharts-flip-x {
                                                                transform: scaleX(-1);
                                                                transform-origin: center;
                                                                transform-box: fill-box;
                                                            }

                                                            .apexcharts-legend {
                                                                display: flex;
                                                                overflow: auto;
                                                                padding: 0 10px;
                                                            }

                                                            .apexcharts-legend.apexcharts-legend-group-horizontal {
                                                                flex-direction: column;
                                                            }

                                                            .apexcharts-legend-group {
                                                                display: flex;
                                                            }

                                                            .apexcharts-legend-group-vertical {
                                                                flex-direction: column-reverse;
                                                            }

                                                            .apexcharts-legend.apx-legend-position-bottom,
                                                            .apexcharts-legend.apx-legend-position-top {
                                                                flex-wrap: wrap
                                                            }

                                                            .apexcharts-legend.apx-legend-position-right,
                                                            .apexcharts-legend.apx-legend-position-left {
                                                                flex-direction: column;
                                                                bottom: 0;
                                                            }

                                                            .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-left,
                                                            .apexcharts-legend.apx-legend-position-top.apexcharts-align-left,
                                                            .apexcharts-legend.apx-legend-position-right,
                                                            .apexcharts-legend.apx-legend-position-left {
                                                                justify-content: flex-start;
                                                                align-items: flex-start;
                                                            }

                                                            .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-center,
                                                            .apexcharts-legend.apx-legend-position-top.apexcharts-align-center {
                                                                justify-content: center;
                                                                align-items: center;
                                                            }

                                                            .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-right,
                                                            .apexcharts-legend.apx-legend-position-top.apexcharts-align-right {
                                                                justify-content: flex-end;
                                                                align-items: flex-end;
                                                            }

                                                            .apexcharts-legend-series {
                                                                cursor: pointer;
                                                                line-height: normal;
                                                                display: flex;
                                                                align-items: center;
                                                            }

                                                            .apexcharts-legend-text {
                                                                position: relative;
                                                                font-size: 14px;
                                                            }

                                                            .apexcharts-legend-text *,
                                                            .apexcharts-legend-marker * {
                                                                pointer-events: none;
                                                            }

                                                            .apexcharts-legend-marker {
                                                                position: relative;
                                                                display: flex;
                                                                align-items: center;
                                                                justify-content: center;
                                                                cursor: pointer;
                                                                margin-right: 1px;
                                                            }

                                                            .apexcharts-legend-series.apexcharts-no-click {
                                                                cursor: auto;
                                                            }

                                                            .apexcharts-legend .apexcharts-hidden-zero-series,
                                                            .apexcharts-legend .apexcharts-hidden-null-series {
                                                                display: none !important;
                                                            }

                                                            .apexcharts-inactive-legend {
                                                                opacity: 0.45;
                                                            }
                                                        </style>
                                                    </foreignObject>
                                                    <g class="apexcharts-datalabels-group"
                                                        transform="translate(0, 0) scale(1)"></g>
                                                    <g class="apexcharts-datalabels-group"
                                                        transform="translate(0, 0) scale(1)"></g>
                                                    <g class="apexcharts-yaxis" rel="0"
                                                        transform="translate(-8, 0)">
                                                        <g class="apexcharts-yaxis-texts-g"></g>
                                                    </g>
                                                    <g class="apexcharts-inner apexcharts-graphical"
                                                        transform="translate(-6, 0)">
                                                        <defs>
                                                            <linearGradient x1="0" y1="0"
                                                                x2="0" y2="1"
                                                                id="SvgjsLinearGradient1011">
                                                                <stop stop-opacity="0.4"
                                                                    stop-color="rgba(216,227,240,0.4)" offset="0">
                                                                </stop>
                                                                <stop stop-opacity="0.5"
                                                                    stop-color="rgba(190,209,230,0.5)" offset="1">
                                                                </stop>
                                                                <stop stop-opacity="0.5"
                                                                    stop-color="rgba(190,209,230,0.5)" offset="1">
                                                                </stop>
                                                            </linearGradient>
                                                            <clipPath id="gridRectMaskgd3wlyyx">
                                                                <rect width="206" height="60" x="0" y="0"
                                                                    rx="0" ry="0" opacity="1"
                                                                    stroke-width="0" stroke="none"
                                                                    stroke-dasharray="0" fill="#fff"></rect>
                                                            </clipPath>
                                                            <clipPath id="gridRectBarMaskgd3wlyyx">
                                                                <rect width="210" height="64" x="-2" y="-2"
                                                                    rx="0" ry="0" opacity="1"
                                                                    stroke-width="0" stroke="none"
                                                                    stroke-dasharray="0" fill="#fff"></rect>
                                                            </clipPath>
                                                            <clipPath id="gridRectMarkerMaskgd3wlyyx">
                                                                <rect width="206" height="60" x="0" y="0"
                                                                    rx="0" ry="0" opacity="1"
                                                                    stroke-width="0" stroke="none"
                                                                    stroke-dasharray="0" fill="#fff"></rect>
                                                            </clipPath>
                                                            <clipPath id="forecastMaskgd3wlyyx"></clipPath>
                                                            <clipPath id="nonForecastMaskgd3wlyyx"></clipPath>
                                                        </defs>
                                                        <rect width="0" height="60" x="0" y="0"
                                                            rx="0" ry="0" opacity="1"
                                                            stroke-width="0" stroke="#b6b6b6" stroke-dasharray="3"
                                                            fill="url(#SvgjsLinearGradient1011)"
                                                            class="apexcharts-xcrosshairs" y2="60"
                                                            filter="none" fill-opacity="0.9"></rect>
                                                        <g class="apexcharts-grid">
                                                            <g class="apexcharts-gridlines-horizontal"
                                                                style="display: none;">
                                                                <line x1="0" y1="0" x2="206"
                                                                    y2="0" stroke="#e0e0e0"
                                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                                    class="apexcharts-gridline"></line>
                                                                <line x1="0" y1="30" x2="206"
                                                                    y2="30" stroke="#e0e0e0"
                                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                                    class="apexcharts-gridline"></line>
                                                                <line x1="0" y1="60" x2="206"
                                                                    y2="60" stroke="#e0e0e0"
                                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                                    class="apexcharts-gridline"></line>
                                                            </g>
                                                            <g class="apexcharts-gridlines-vertical"
                                                                style="display: none;"></g>
                                                            <line x1="0" y1="60" x2="206"
                                                                y2="60" stroke="transparent"
                                                                stroke-dasharray="0" stroke-linecap="butt"></line>
                                                            <line x1="0" y1="1" x2="0"
                                                                y2="60" stroke="transparent"
                                                                stroke-dasharray="0" stroke-linecap="butt"></line>
                                                        </g>
                                                        <g class="apexcharts-grid-borders" style="display: none;"></g>
                                                        <g class="apexcharts-bar-series apexcharts-plot-series">
                                                            <g class="apexcharts-series" rel="1"
                                                                seriesName="series-1" data:realIndex="0">
                                                                <rect width="14.125714285714285" height="60"
                                                                    x="7.651428571428571" y="0" rx="4"
                                                                    ry="4" opacity="1" stroke-width="0"
                                                                    stroke="none" stroke-dasharray="0"
                                                                    fill="#efeef0" class="apexcharts-backgroundBar">
                                                                </rect>
                                                                <path
                                                                    d="M 7.651428571428571 56.001 L 7.651428571428571 19.000999999999998 C 7.651428571428571 17.000999999999998 9.651428571428571 15.001 11.651428571428571 15.001 L 17.777142857142856 15.001 C 19.777142857142856 15.001 21.777142857142856 17.000999999999998 21.777142857142856 19.000999999999998 L 21.777142857142856 56.001 C 21.777142857142856 58.001 19.777142857142856 60.001 17.777142857142856 60.001 L 11.651428571428571 60.001 C 9.651428571428571 60.001 7.651428571428571 58.001 7.651428571428571 56.001 Z "
                                                                    fill="var(--bs-primary)" fill-opacity="1"
                                                                    stroke="var(--bs-primary)" stroke-opacity="1"
                                                                    stroke-linecap="round" stroke-width="0"
                                                                    stroke-dasharray="0"
                                                                    class="apexcharts-bar-area undefined"
                                                                    index="0"
                                                                    clip-path="url(#gridRectBarMaskgd3wlyyx)"
                                                                    pathTo="M 7.651428571428571 56.001 L 7.651428571428571 19.000999999999998 C 7.651428571428571 17.000999999999998 9.651428571428571 15.001 11.651428571428571 15.001 L 17.777142857142856 15.001 C 19.777142857142856 15.001 21.777142857142856 17.000999999999998 21.777142857142856 19.000999999999998 L 21.777142857142856 56.001 C 21.777142857142856 58.001 19.777142857142856 60.001 17.777142857142856 60.001 L 11.651428571428571 60.001 C 9.651428571428571 60.001 7.651428571428571 58.001 7.651428571428571 56.001 Z "
                                                                    pathFrom="M 7.651428571428571 60.001 L 7.651428571428571 60.001 L 21.777142857142856 60.001 L 21.777142857142856 60.001 L 21.777142857142856 60.001 L 21.777142857142856 60.001 L 21.777142857142856 60.001 L 7.651428571428571 60.001 Z"
                                                                    cy="15" cx="37.08" j="0"
                                                                    val="75" barHeight="45"
                                                                    barWidth="14.125714285714285"></path>
                                                                <rect width="14.125714285714285" height="60"
                                                                    x="37.08" y="0" rx="4" ry="4"
                                                                    opacity="1" stroke-width="0" stroke="none"
                                                                    stroke-dasharray="0" fill="#efeef0"
                                                                    class="apexcharts-backgroundBar"></rect>
                                                                <path
                                                                    d="M 37.08 56.001 L 37.08 25.001 C 37.08 23.001 39.08 21.001 41.08 21.001 L 47.20571428571428 21.001 C 49.20571428571428 21.001 51.20571428571428 23.001 51.20571428571428 25.001 L 51.20571428571428 56.001 C 51.20571428571428 58.001 49.20571428571428 60.001 47.20571428571428 60.001 L 41.08 60.001 C 39.08 60.001 37.08 58.001 37.08 56.001 Z "
                                                                    fill="var(--bs-primary)" fill-opacity="1"
                                                                    stroke="var(--bs-primary)" stroke-opacity="1"
                                                                    stroke-linecap="round" stroke-width="0"
                                                                    stroke-dasharray="0"
                                                                    class="apexcharts-bar-area undefined"
                                                                    index="0"
                                                                    clip-path="url(#gridRectBarMaskgd3wlyyx)"
                                                                    pathTo="M 37.08 56.001 L 37.08 25.001 C 37.08 23.001 39.08 21.001 41.08 21.001 L 47.20571428571428 21.001 C 49.20571428571428 21.001 51.20571428571428 23.001 51.20571428571428 25.001 L 51.20571428571428 56.001 C 51.20571428571428 58.001 49.20571428571428 60.001 47.20571428571428 60.001 L 41.08 60.001 C 39.08 60.001 37.08 58.001 37.08 56.001 Z "
                                                                    pathFrom="M 37.08 60.001 L 37.08 60.001 L 51.20571428571428 60.001 L 51.20571428571428 60.001 L 51.20571428571428 60.001 L 51.20571428571428 60.001 L 51.20571428571428 60.001 L 37.08 60.001 Z"
                                                                    cy="21" cx="66.50857142857143" j="1"
                                                                    val="65" barHeight="39"
                                                                    barWidth="14.125714285714285"></path>
                                                                <rect width="14.125714285714285" height="60"
                                                                    x="66.50857142857143" y="0" rx="4"
                                                                    ry="4" opacity="1" stroke-width="0"
                                                                    stroke="none" stroke-dasharray="0"
                                                                    fill="#efeef0" class="apexcharts-backgroundBar">
                                                                </rect>
                                                                <path
                                                                    d="M 66.50857142857143 56.001 L 66.50857142857143 49.001 C 66.50857142857143 47.001 68.50857142857143 45.001 70.50857142857143 45.001 L 76.63428571428571 45.001 C 78.63428571428571 45.001 80.63428571428571 47.001 80.63428571428571 49.001 L 80.63428571428571 56.001 C 80.63428571428571 58.001 78.63428571428571 60.001 76.63428571428571 60.001 L 70.50857142857143 60.001 C 68.50857142857143 60.001 66.50857142857143 58.001 66.50857142857143 56.001 Z "
                                                                    fill="var(--bs-primary)" fill-opacity="1"
                                                                    stroke="var(--bs-primary)" stroke-opacity="1"
                                                                    stroke-linecap="round" stroke-width="0"
                                                                    stroke-dasharray="0"
                                                                    class="apexcharts-bar-area undefined"
                                                                    index="0"
                                                                    clip-path="url(#gridRectBarMaskgd3wlyyx)"
                                                                    pathTo="M 66.50857142857143 56.001 L 66.50857142857143 49.001 C 66.50857142857143 47.001 68.50857142857143 45.001 70.50857142857143 45.001 L 76.63428571428571 45.001 C 78.63428571428571 45.001 80.63428571428571 47.001 80.63428571428571 49.001 L 80.63428571428571 56.001 C 80.63428571428571 58.001 78.63428571428571 60.001 76.63428571428571 60.001 L 70.50857142857143 60.001 C 68.50857142857143 60.001 66.50857142857143 58.001 66.50857142857143 56.001 Z "
                                                                    pathFrom="M 66.50857142857143 60.001 L 66.50857142857143 60.001 L 80.63428571428571 60.001 L 80.63428571428571 60.001 L 80.63428571428571 60.001 L 80.63428571428571 60.001 L 80.63428571428571 60.001 L 66.50857142857143 60.001 Z"
                                                                    cy="45" cx="95.93714285714286" j="2"
                                                                    val="25" barHeight="15"
                                                                    barWidth="14.125714285714285"></path>
                                                                <rect width="14.125714285714285" height="60"
                                                                    x="95.93714285714286" y="0" rx="4"
                                                                    ry="4" opacity="1" stroke-width="0"
                                                                    stroke="none" stroke-dasharray="0"
                                                                    fill="#efeef0" class="apexcharts-backgroundBar">
                                                                </rect>
                                                                <path
                                                                    d="M 95.93714285714286 56.001 L 95.93714285714286 31.001 C 95.93714285714286 29.001 97.93714285714286 27.001 99.93714285714286 27.001 L 106.06285714285714 27.001 C 108.06285714285714 27.001 110.06285714285714 29.001 110.06285714285714 31.001 L 110.06285714285714 56.001 C 110.06285714285714 58.001 108.06285714285714 60.001 106.06285714285714 60.001 L 99.93714285714286 60.001 C 97.93714285714286 60.001 95.93714285714286 58.001 95.93714285714286 56.001 Z "
                                                                    fill="var(--bs-primary)" fill-opacity="1"
                                                                    stroke="var(--bs-primary)" stroke-opacity="1"
                                                                    stroke-linecap="round" stroke-width="0"
                                                                    stroke-dasharray="0"
                                                                    class="apexcharts-bar-area undefined"
                                                                    index="0"
                                                                    clip-path="url(#gridRectBarMaskgd3wlyyx)"
                                                                    pathTo="M 95.93714285714286 56.001 L 95.93714285714286 31.001 C 95.93714285714286 29.001 97.93714285714286 27.001 99.93714285714286 27.001 L 106.06285714285714 27.001 C 108.06285714285714 27.001 110.06285714285714 29.001 110.06285714285714 31.001 L 110.06285714285714 56.001 C 110.06285714285714 58.001 108.06285714285714 60.001 106.06285714285714 60.001 L 99.93714285714286 60.001 C 97.93714285714286 60.001 95.93714285714286 58.001 95.93714285714286 56.001 Z "
                                                                    pathFrom="M 95.93714285714286 60.001 L 95.93714285714286 60.001 L 110.06285714285714 60.001 L 110.06285714285714 60.001 L 110.06285714285714 60.001 L 110.06285714285714 60.001 L 110.06285714285714 60.001 L 95.93714285714286 60.001 Z"
                                                                    cy="27" cx="125.36571428571429" j="3"
                                                                    val="55" barHeight="33"
                                                                    barWidth="14.125714285714285"></path>
                                                                <rect width="14.125714285714285" height="60"
                                                                    x="125.36571428571429" y="0" rx="4"
                                                                    ry="4" opacity="1" stroke-width="0"
                                                                    stroke="none" stroke-dasharray="0"
                                                                    fill="#efeef0" class="apexcharts-backgroundBar">
                                                                </rect>
                                                                <path
                                                                    d="M 125.36571428571429 56.001 L 125.36571428571429 28.001 C 125.36571428571429 26.001 127.36571428571429 24.001 129.3657142857143 24.001 L 135.49142857142857 24.001 C 137.49142857142857 24.001 139.49142857142857 26.001 139.49142857142857 28.001 L 139.49142857142857 56.001 C 139.49142857142857 58.001 137.49142857142857 60.001 135.49142857142857 60.001 L 129.3657142857143 60.001 C 127.36571428571429 60.001 125.36571428571429 58.001 125.36571428571429 56.001 Z "
                                                                    fill="var(--bs-primary)" fill-opacity="1"
                                                                    stroke="var(--bs-primary)" stroke-opacity="1"
                                                                    stroke-linecap="round" stroke-width="0"
                                                                    stroke-dasharray="0"
                                                                    class="apexcharts-bar-area undefined"
                                                                    index="0"
                                                                    clip-path="url(#gridRectBarMaskgd3wlyyx)"
                                                                    pathTo="M 125.36571428571429 56.001 L 125.36571428571429 28.001 C 125.36571428571429 26.001 127.36571428571429 24.001 129.3657142857143 24.001 L 135.49142857142857 24.001 C 137.49142857142857 24.001 139.49142857142857 26.001 139.49142857142857 28.001 L 139.49142857142857 56.001 C 139.49142857142857 58.001 137.49142857142857 60.001 135.49142857142857 60.001 L 129.3657142857143 60.001 C 127.36571428571429 60.001 125.36571428571429 58.001 125.36571428571429 56.001 Z "
                                                                    pathFrom="M 125.36571428571429 60.001 L 125.36571428571429 60.001 L 139.49142857142857 60.001 L 139.49142857142857 60.001 L 139.49142857142857 60.001 L 139.49142857142857 60.001 L 139.49142857142857 60.001 L 125.36571428571429 60.001 Z"
                                                                    cy="24" cx="154.7942857142857" j="4"
                                                                    val="60" barHeight="36"
                                                                    barWidth="14.125714285714285"></path>
                                                                <rect width="14.125714285714285" height="60"
                                                                    x="154.7942857142857" y="0" rx="4"
                                                                    ry="4" opacity="1" stroke-width="0"
                                                                    stroke="none" stroke-dasharray="0"
                                                                    fill="#efeef0" class="apexcharts-backgroundBar">
                                                                </rect>
                                                                <path
                                                                    d="M 154.7942857142857 56.001 L 154.7942857142857 40.001 C 154.7942857142857 38.001 156.7942857142857 36.001 158.7942857142857 36.001 L 164.92 36.001 C 166.92 36.001 168.92 38.001 168.92 40.001 L 168.92 56.001 C 168.92 58.001 166.92 60.001 164.92 60.001 L 158.7942857142857 60.001 C 156.7942857142857 60.001 154.7942857142857 58.001 154.7942857142857 56.001 Z "
                                                                    fill="var(--bs-primary)" fill-opacity="1"
                                                                    stroke="var(--bs-primary)" stroke-opacity="1"
                                                                    stroke-linecap="round" stroke-width="0"
                                                                    stroke-dasharray="0"
                                                                    class="apexcharts-bar-area undefined"
                                                                    index="0"
                                                                    clip-path="url(#gridRectBarMaskgd3wlyyx)"
                                                                    pathTo="M 154.7942857142857 56.001 L 154.7942857142857 40.001 C 154.7942857142857 38.001 156.7942857142857 36.001 158.7942857142857 36.001 L 164.92 36.001 C 166.92 36.001 168.92 38.001 168.92 40.001 L 168.92 56.001 C 168.92 58.001 166.92 60.001 164.92 60.001 L 158.7942857142857 60.001 C 156.7942857142857 60.001 154.7942857142857 58.001 154.7942857142857 56.001 Z "
                                                                    pathFrom="M 154.7942857142857 60.001 L 154.7942857142857 60.001 L 168.92 60.001 L 168.92 60.001 L 168.92 60.001 L 168.92 60.001 L 168.92 60.001 L 154.7942857142857 60.001 Z"
                                                                    cy="36" cx="184.22285714285712" j="5"
                                                                    val="40" barHeight="24"
                                                                    barWidth="14.125714285714285"></path>
                                                                <rect width="14.125714285714285" height="60"
                                                                    x="184.22285714285712" y="0" rx="4"
                                                                    ry="4" opacity="1" stroke-width="0"
                                                                    stroke="none" stroke-dasharray="0"
                                                                    fill="#efeef0" class="apexcharts-backgroundBar">
                                                                </rect>
                                                                <path
                                                                    d="M 184.22285714285712 56.001 L 184.22285714285712 11.201000000000004 C 184.22285714285712 9.201000000000004 186.22285714285712 7.201000000000003 188.22285714285712 7.201000000000003 L 194.3485714285714 7.201000000000003 C 196.3485714285714 7.201000000000003 198.3485714285714 9.201000000000004 198.3485714285714 11.201000000000004 L 198.3485714285714 56.001 C 198.3485714285714 58.001 196.3485714285714 60.001 194.3485714285714 60.001 L 188.22285714285712 60.001 C 186.22285714285712 60.001 184.22285714285712 58.001 184.22285714285712 56.001 Z "
                                                                    fill="var(--bs-primary)" fill-opacity="1"
                                                                    stroke="var(--bs-primary)" stroke-opacity="1"
                                                                    stroke-linecap="round" stroke-width="0"
                                                                    stroke-dasharray="0"
                                                                    class="apexcharts-bar-area undefined"
                                                                    index="0"
                                                                    clip-path="url(#gridRectBarMaskgd3wlyyx)"
                                                                    pathTo="M 184.22285714285712 56.001 L 184.22285714285712 11.201000000000004 C 184.22285714285712 9.201000000000004 186.22285714285712 7.201000000000003 188.22285714285712 7.201000000000003 L 194.3485714285714 7.201000000000003 C 196.3485714285714 7.201000000000003 198.3485714285714 9.201000000000004 198.3485714285714 11.201000000000004 L 198.3485714285714 56.001 C 198.3485714285714 58.001 196.3485714285714 60.001 194.3485714285714 60.001 L 188.22285714285712 60.001 C 186.22285714285712 60.001 184.22285714285712 58.001 184.22285714285712 56.001 Z "
                                                                    pathFrom="M 184.22285714285712 60.001 L 184.22285714285712 60.001 L 198.3485714285714 60.001 L 198.3485714285714 60.001 L 198.3485714285714 60.001 L 198.3485714285714 60.001 L 198.3485714285714 60.001 L 184.22285714285712 60.001 Z"
                                                                    cy="7.200000000000003" cx="213.65142857142854"
                                                                    j="6" val="88" barHeight="52.8"
                                                                    barWidth="14.125714285714285"></path>
                                                                <g class="apexcharts-bar-goals-markers">
                                                                    <g className="apexcharts-bar-goals-groups"
                                                                        class="apexcharts-hidden-element-shown"
                                                                        clip-path="url(#gridRectMarkerMaskgd3wlyyx)">
                                                                    </g>
                                                                    <g className="apexcharts-bar-goals-groups"
                                                                        class="apexcharts-hidden-element-shown"
                                                                        clip-path="url(#gridRectMarkerMaskgd3wlyyx)">
                                                                    </g>
                                                                    <g className="apexcharts-bar-goals-groups"
                                                                        class="apexcharts-hidden-element-shown"
                                                                        clip-path="url(#gridRectMarkerMaskgd3wlyyx)">
                                                                    </g>
                                                                    <g className="apexcharts-bar-goals-groups"
                                                                        class="apexcharts-hidden-element-shown"
                                                                        clip-path="url(#gridRectMarkerMaskgd3wlyyx)">
                                                                    </g>
                                                                    <g className="apexcharts-bar-goals-groups"
                                                                        class="apexcharts-hidden-element-shown"
                                                                        clip-path="url(#gridRectMarkerMaskgd3wlyyx)">
                                                                    </g>
                                                                    <g className="apexcharts-bar-goals-groups"
                                                                        class="apexcharts-hidden-element-shown"
                                                                        clip-path="url(#gridRectMarkerMaskgd3wlyyx)">
                                                                    </g>
                                                                    <g className="apexcharts-bar-goals-groups"
                                                                        class="apexcharts-hidden-element-shown"
                                                                        clip-path="url(#gridRectMarkerMaskgd3wlyyx)">
                                                                    </g>
                                                                </g>
                                                                <g
                                                                    class="apexcharts-bar-shadows apexcharts-hidden-element-shown">
                                                                </g>
                                                            </g>
                                                            <g class="apexcharts-datalabels apexcharts-hidden-element-shown"
                                                                data:realIndex="0"></g>
                                                        </g>
                                                        <line x1="0" y1="0" x2="206"
                                                            y2="0" stroke="#b6b6b6" stroke-dasharray="0"
                                                            stroke-width="1" stroke-linecap="butt"
                                                            class="apexcharts-ycrosshairs"></line>
                                                        <line x1="0" y1="0" x2="206"
                                                            y2="0" stroke="#b6b6b6" stroke-dasharray="0"
                                                            stroke-width="0" stroke-linecap="butt"
                                                            class="apexcharts-ycrosshairs-hidden"></line>
                                                        <g class="apexcharts-xaxis" transform="translate(0, 0)">
                                                            <g class="apexcharts-xaxis-texts-g"
                                                                transform="translate(0, -4)"></g>
                                                        </g>
                                                        <g class="apexcharts-yaxis-annotations"></g>
                                                        <g class="apexcharts-xaxis-annotations"></g>
                                                        <g class="apexcharts-point-annotations"></g>
                                                    </g>
                                                </svg></div>
                                        </div>
                                        <div class="d-flex justify-content-between align-items-center gap-3">
                                            <h4 class="mb-0">124k</h4>
                                            <small class="text-success">+12.6%</small>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Sessions Last month -->
                            <div class="col-xxl-2 col-md-3 col-6">
                                <div class="card h-100">
                                    <div class="card-header pb-0">
                                        <h5 class="card-title mb-1">Sales</h5>
                                        <p class="card-subtitle">Last Year</p>
                                    </div>
                                    <div id="salesLastYear" style="min-height: 75px;">
                                        <div id="apexcharts3hatz578"
                                            class="apexcharts-canvas apexcharts3hatz578 apexcharts-theme-"
                                            style="width: 243px; height: 75px;"><svg
                                                xmlns="http://www.w3.org/2000/svg" version="1.1"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" class="apexcharts-svg"
                                                xmlns:data="ApexChartsNS" transform="translate(0, 0)" width="243"
                                                height="75">
                                                <foreignObject x="0" y="0" width="243" height="75">
                                                    <div class="apexcharts-legend"
                                                        xmlns="http://www.w3.org/1999/xhtml"
                                                        style="max-height: 37.5px;"></div>
                                                    <style type="text/css">
                                                        .apexcharts-flip-y {
                                                            transform: scaleY(-1) translateY(-100%);
                                                            transform-origin: top;
                                                            transform-box: fill-box;
                                                        }

                                                        .apexcharts-flip-x {
                                                            transform: scaleX(-1);
                                                            transform-origin: center;
                                                            transform-box: fill-box;
                                                        }

                                                        .apexcharts-legend {
                                                            display: flex;
                                                            overflow: auto;
                                                            padding: 0 10px;
                                                        }

                                                        .apexcharts-legend.apexcharts-legend-group-horizontal {
                                                            flex-direction: column;
                                                        }

                                                        .apexcharts-legend-group {
                                                            display: flex;
                                                        }

                                                        .apexcharts-legend-group-vertical {
                                                            flex-direction: column-reverse;
                                                        }

                                                        .apexcharts-legend.apx-legend-position-bottom,
                                                        .apexcharts-legend.apx-legend-position-top {
                                                            flex-wrap: wrap
                                                        }

                                                        .apexcharts-legend.apx-legend-position-right,
                                                        .apexcharts-legend.apx-legend-position-left {
                                                            flex-direction: column;
                                                            bottom: 0;
                                                        }

                                                        .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-left,
                                                        .apexcharts-legend.apx-legend-position-top.apexcharts-align-left,
                                                        .apexcharts-legend.apx-legend-position-right,
                                                        .apexcharts-legend.apx-legend-position-left {
                                                            justify-content: flex-start;
                                                            align-items: flex-start;
                                                        }

                                                        .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-center,
                                                        .apexcharts-legend.apx-legend-position-top.apexcharts-align-center {
                                                            justify-content: center;
                                                            align-items: center;
                                                        }

                                                        .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-right,
                                                        .apexcharts-legend.apx-legend-position-top.apexcharts-align-right {
                                                            justify-content: flex-end;
                                                            align-items: flex-end;
                                                        }

                                                        .apexcharts-legend-series {
                                                            cursor: pointer;
                                                            line-height: normal;
                                                            display: flex;
                                                            align-items: center;
                                                        }

                                                        .apexcharts-legend-text {
                                                            position: relative;
                                                            font-size: 14px;
                                                        }

                                                        .apexcharts-legend-text *,
                                                        .apexcharts-legend-marker * {
                                                            pointer-events: none;
                                                        }

                                                        .apexcharts-legend-marker {
                                                            position: relative;
                                                            display: flex;
                                                            align-items: center;
                                                            justify-content: center;
                                                            cursor: pointer;
                                                            margin-right: 1px;
                                                        }

                                                        .apexcharts-legend-series.apexcharts-no-click {
                                                            cursor: auto;
                                                        }

                                                        .apexcharts-legend .apexcharts-hidden-zero-series,
                                                        .apexcharts-legend .apexcharts-hidden-null-series {
                                                            display: none !important;
                                                        }

                                                        .apexcharts-inactive-legend {
                                                            opacity: 0.45;
                                                        }
                                                    </style>
                                                </foreignObject>
                                                <rect width="0" height="0" x="0" y="0" rx="0"
                                                    ry="0" opacity="1" stroke-width="0" stroke="none"
                                                    stroke-dasharray="0" fill="#fefefe"></rect>
                                                <g class="apexcharts-datalabels-group"
                                                    transform="translate(0, 0) scale(1)"></g>
                                                <g class="apexcharts-datalabels-group"
                                                    transform="translate(0, 0) scale(1)"></g>
                                                <g class="apexcharts-yaxis" rel="0"
                                                    transform="translate(-18, 0)"></g>
                                                <g class="apexcharts-inner apexcharts-graphical"
                                                    transform="translate(0, 1)">
                                                    <defs>
                                                        <clipPath id="gridRectMask3hatz578">
                                                            <rect width="243" height="73" x="0" y="0"
                                                                rx="0" ry="0" opacity="1"
                                                                stroke-width="0" stroke="none" stroke-dasharray="0"
                                                                fill="#fff"></rect>
                                                        </clipPath>
                                                        <clipPath id="gridRectBarMask3hatz578">
                                                            <rect width="249" height="79" x="-3" y="-3"
                                                                rx="0" ry="0" opacity="1"
                                                                stroke-width="0" stroke="none" stroke-dasharray="0"
                                                                fill="#fff"></rect>
                                                        </clipPath>
                                                        <clipPath id="gridRectMarkerMask3hatz578">
                                                            <rect width="243" height="73" x="0" y="0"
                                                                rx="0" ry="0" opacity="1"
                                                                stroke-width="0" stroke="none" stroke-dasharray="0"
                                                                fill="#fff"></rect>
                                                        </clipPath>
                                                        <clipPath id="forecastMask3hatz578"></clipPath>
                                                        <clipPath id="nonForecastMask3hatz578"></clipPath>
                                                        <linearGradient x1="0" y1="0" x2="0"
                                                            y2="1" id="SvgjsLinearGradient1012">
                                                            <stop stop-opacity="0.4" stop-color="var(--bs-success)"
                                                                offset="0"></stop>
                                                            <stop stop-opacity="0.1" stop-color="var(--bs-paper-bg)"
                                                                offset="1"></stop>
                                                            <stop stop-opacity="0.1" stop-color="var(--bs-paper-bg)"
                                                                offset="1"></stop>
                                                        </linearGradient>
                                                    </defs>
                                                    <line x1="0" y1="0" x2="0"
                                                        y2="73" stroke="#b6b6b6" stroke-dasharray="3"
                                                        stroke-linecap="butt" class="apexcharts-xcrosshairs" x="0"
                                                        y="0" width="1" height="73" fill="#b1b9c4"
                                                        filter="none" fill-opacity="0.9" stroke-width="1"></line>
                                                    <g class="apexcharts-grid">
                                                        <g class="apexcharts-gridlines-horizontal"
                                                            style="display: none;">
                                                            <line x1="0" y1="0" x2="243"
                                                                y2="0" stroke="#e0e0e0" stroke-dasharray="0"
                                                                stroke-linecap="butt" class="apexcharts-gridline">
                                                            </line>
                                                            <line x1="0" y1="36.5" x2="243"
                                                                y2="36.5" stroke="#e0e0e0" stroke-dasharray="0"
                                                                stroke-linecap="butt" class="apexcharts-gridline">
                                                            </line>
                                                            <line x1="0" y1="73" x2="243"
                                                                y2="73" stroke="#e0e0e0" stroke-dasharray="0"
                                                                stroke-linecap="butt" class="apexcharts-gridline">
                                                            </line>
                                                        </g>
                                                        <g class="apexcharts-gridlines-vertical"
                                                            style="display: none;"></g>
                                                        <line x1="0" y1="73" x2="243"
                                                            y2="73" stroke="transparent" stroke-dasharray="0"
                                                            stroke-linecap="butt"></line>
                                                        <line x1="0" y1="1" x2="0"
                                                            y2="73" stroke="transparent" stroke-dasharray="0"
                                                            stroke-linecap="butt"></line>
                                                    </g>
                                                    <g class="apexcharts-grid-borders" style="display: none;"></g>
                                                    <g class="apexcharts-area-series apexcharts-plot-series">
                                                        <g class="apexcharts-series" zIndex="0"
                                                            seriesName="series-1" data:longestSeries="true"
                                                            rel="1" data:realIndex="0">
                                                            <path
                                                                d="M 0 36.5C 28.349999999999998 36.5 52.650000000000006 62.9625 81 62.9625C 109.35 62.9625 133.65 3.6499999999999915 162 3.6499999999999915C 190.35 3.6499999999999915 214.65 31.025 243 31.025C 243 31.025 243 31.025 243 73 L 0 73z"
                                                                fill="url(#SvgjsLinearGradient1012)" fill-opacity="1"
                                                                stroke="none" stroke-opacity="1"
                                                                stroke-linecap="butt" stroke-width="0"
                                                                stroke-dasharray="0" class="apexcharts-area"
                                                                index="0" clip-path="url(#gridRectMask3hatz578)"
                                                                pathTo="M 0 36.5C 28.349999999999998 36.5 52.650000000000006 62.9625 81 62.9625C 109.35 62.9625 133.65 3.6499999999999915 162 3.6499999999999915C 190.35 3.6499999999999915 214.65 31.025 243 31.025C 243 31.025 243 31.025 243 73 L 0 73z"
                                                                pathFrom="M 0 73 L 0 73 L 81 73 L 162 73 L 243 73z">
                                                            </path>
                                                            <path
                                                                d="M 0 36.5C 28.349999999999998 36.5 52.650000000000006 62.9625 81 62.9625C 109.35 62.9625 133.65 3.6499999999999915 162 3.6499999999999915C 190.35 3.6499999999999915 214.65 31.025 243 31.025"
                                                                fill="none" fill-opacity="1"
                                                                stroke="var(--bs-success)" stroke-opacity="1"
                                                                stroke-linecap="butt" stroke-width="2"
                                                                stroke-dasharray="0" class="apexcharts-area"
                                                                index="0" clip-path="url(#gridRectMask3hatz578)"
                                                                pathTo="M 0 36.5C 28.349999999999998 36.5 52.650000000000006 62.9625 81 62.9625C 109.35 62.9625 133.65 3.6499999999999915 162 3.6499999999999915C 190.35 3.6499999999999915 214.65 31.025 243 31.025"
                                                                pathFrom="M 0 73 L 0 73 L 81 73 L 162 73 L 243 73"
                                                                fill-rule="evenodd"></path>
                                                            <g class="apexcharts-series-markers-wrap apexcharts-hidden-element-shown"
                                                                data:realIndex="0"></g>
                                                        </g>
                                                        <g class="apexcharts-datalabels" data:realIndex="0"></g>
                                                    </g>
                                                    <line x1="0" y1="0" x2="243"
                                                        y2="0" stroke="#b6b6b6" stroke-dasharray="0"
                                                        stroke-width="1" stroke-linecap="butt"
                                                        class="apexcharts-ycrosshairs"></line>
                                                    <line x1="0" y1="0" x2="243"
                                                        y2="0" stroke="#b6b6b6" stroke-dasharray="0"
                                                        stroke-width="0" stroke-linecap="butt"
                                                        class="apexcharts-ycrosshairs-hidden"></line>
                                                    <g class="apexcharts-xaxis" transform="translate(0, 0)">
                                                        <g class="apexcharts-xaxis-texts-g"
                                                            transform="translate(0, -4)"></g>
                                                    </g>
                                                    <g class="apexcharts-yaxis-annotations"></g>
                                                    <g class="apexcharts-xaxis-annotations"></g>
                                                    <g class="apexcharts-point-annotations"></g>
                                                </g>
                                            </svg></div>
                                    </div>
                                    <div class="card-body pt-0">
                                        <div class="d-flex justify-content-between align-items-center mt-3 gap-3">
                                            <h4 class="mb-0">175k</h4>
                                            <small class="text-danger">-16.2%</small>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Total Profit -->
                            <div class="col-xxl-2 col-md-3 col-6">
                                <div class="card h-100">
                                    <div class="card-body">
                                        <div class="badge p-2 bg-label-danger mb-3 rounded"><i
                                                class="icon-base ti tabler-credit-card icon-28px"></i></div>
                                        <h5 class="card-title mb-1">Total Profit</h5>
                                        <p class="card-subtitle ">Last week</p>
                                        <p class="text-heading mb-3 mt-1">1.28k</p>
                                        <div>
                                            <span class="badge bg-label-danger">-12.2%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Total Sales -->
                            <div class="col-xxl-2 col-md-3 col-6">
                                <div class="card h-100">
                                    <div class="card-body">
                                        <div class="badge p-2 bg-label-success mb-3 rounded"><i
                                                class="icon-base ti tabler-credit-card icon-28px"></i></div>
                                        <h5 class="card-title mb-1">Total Sales</h5>
                                        <p class="card-subtitle ">Last week</p>
                                        <p class="text-heading mb-3 mt-1">24.67k</p>
                                        <div>
                                            <span class="badge bg-label-success">+24.5%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Revenue Growth -->
                            <div class="col-xxl-4 col-xl-5 col-md-6 col-sm-8 col-12 mb-md-0 order-xxl-0 order-2">
                                <div class="card pb-xxl-3">
                                    <div class="card-body row">
                                        <div class="d-flex flex-column col-4">
                                            <div class="card-title mb-auto">
                                                <h5 class="mb-2 text-nowrap">Revenue Growth</h5>
                                                <p class="mb-0">Weekly Report</p>
                                            </div>
                                            <div class="chart-statistics">
                                                <h3 class="card-title mb-1">$4,673</h3>
                                                <span class="badge bg-label-success">+15.2%</span>
                                            </div>
                                        </div>
                                        <div id="revenueGrowth" class="col-8" style="min-height: 162px;">
                                            <div id="apexchartsalnyf81v"
                                                class="apexcharts-canvas apexchartsalnyf81v apexcharts-theme-"
                                                style="width: 240px; height: 162px;"><svg
                                                    xmlns="http://www.w3.org/2000/svg" version="1.1"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink" class="apexcharts-svg"
                                                    xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                                    width="240" height="162">
                                                    <foreignObject x="0" y="0" width="240" height="162">
                                                        <div class="apexcharts-legend"
                                                            xmlns="http://www.w3.org/1999/xhtml"
                                                            style="max-height: 81px;"></div>
                                                        <style type="text/css">
                                                            .apexcharts-flip-y {
                                                                transform: scaleY(-1) translateY(-100%);
                                                                transform-origin: top;
                                                                transform-box: fill-box;
                                                            }

                                                            .apexcharts-flip-x {
                                                                transform: scaleX(-1);
                                                                transform-origin: center;
                                                                transform-box: fill-box;
                                                            }

                                                            .apexcharts-legend {
                                                                display: flex;
                                                                overflow: auto;
                                                                padding: 0 10px;
                                                            }

                                                            .apexcharts-legend.apexcharts-legend-group-horizontal {
                                                                flex-direction: column;
                                                            }

                                                            .apexcharts-legend-group {
                                                                display: flex;
                                                            }

                                                            .apexcharts-legend-group-vertical {
                                                                flex-direction: column-reverse;
                                                            }

                                                            .apexcharts-legend.apx-legend-position-bottom,
                                                            .apexcharts-legend.apx-legend-position-top {
                                                                flex-wrap: wrap
                                                            }

                                                            .apexcharts-legend.apx-legend-position-right,
                                                            .apexcharts-legend.apx-legend-position-left {
                                                                flex-direction: column;
                                                                bottom: 0;
                                                            }

                                                            .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-left,
                                                            .apexcharts-legend.apx-legend-position-top.apexcharts-align-left,
                                                            .apexcharts-legend.apx-legend-position-right,
                                                            .apexcharts-legend.apx-legend-position-left {
                                                                justify-content: flex-start;
                                                                align-items: flex-start;
                                                            }

                                                            .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-center,
                                                            .apexcharts-legend.apx-legend-position-top.apexcharts-align-center {
                                                                justify-content: center;
                                                                align-items: center;
                                                            }

                                                            .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-right,
                                                            .apexcharts-legend.apx-legend-position-top.apexcharts-align-right {
                                                                justify-content: flex-end;
                                                                align-items: flex-end;
                                                            }

                                                            .apexcharts-legend-series {
                                                                cursor: pointer;
                                                                line-height: normal;
                                                                display: flex;
                                                                align-items: center;
                                                            }

                                                            .apexcharts-legend-text {
                                                                position: relative;
                                                                font-size: 14px;
                                                            }

                                                            .apexcharts-legend-text *,
                                                            .apexcharts-legend-marker * {
                                                                pointer-events: none;
                                                            }

                                                            .apexcharts-legend-marker {
                                                                position: relative;
                                                                display: flex;
                                                                align-items: center;
                                                                justify-content: center;
                                                                cursor: pointer;
                                                                margin-right: 1px;
                                                            }

                                                            .apexcharts-legend-series.apexcharts-no-click {
                                                                cursor: auto;
                                                            }

                                                            .apexcharts-legend .apexcharts-hidden-zero-series,
                                                            .apexcharts-legend .apexcharts-hidden-null-series {
                                                                display: none !important;
                                                            }

                                                            .apexcharts-inactive-legend {
                                                                opacity: 0.45;
                                                            }
                                                        </style>
                                                    </foreignObject>
                                                    <g class="apexcharts-datalabels-group"
                                                        transform="translate(0, 0) scale(1)"></g>
                                                    <g class="apexcharts-datalabels-group"
                                                        transform="translate(0, 0) scale(1)"></g>
                                                    <g class="apexcharts-yaxis" rel="0"
                                                        transform="translate(-8, 0)">
                                                        <g class="apexcharts-yaxis-texts-g"></g>
                                                    </g>
                                                    <g class="apexcharts-inner apexcharts-graphical"
                                                        transform="translate(-3, 10)">
                                                        <defs>
                                                            <linearGradient x1="0" y1="0"
                                                                x2="0" y2="1"
                                                                id="SvgjsLinearGradient1013">
                                                                <stop stop-opacity="0.4"
                                                                    stop-color="rgba(216,227,240,0.4)" offset="0">
                                                                </stop>
                                                                <stop stop-opacity="0.5"
                                                                    stop-color="rgba(190,209,230,0.5)" offset="1">
                                                                </stop>
                                                                <stop stop-opacity="0.5"
                                                                    stop-color="rgba(190,209,230,0.5)" offset="1">
                                                                </stop>
                                                            </linearGradient>
                                                            <clipPath id="gridRectMaskalnyf81v">
                                                                <rect width="240.5" height="124.72999999999999" x="0"
                                                                    y="0" rx="0" ry="0"
                                                                    opacity="1" stroke-width="0" stroke="none"
                                                                    stroke-dasharray="0" fill="#fff"></rect>
                                                            </clipPath>
                                                            <clipPath id="gridRectBarMaskalnyf81v">
                                                                <rect width="244.5" height="128.73" x="-2" y="-2"
                                                                    rx="0" ry="0" opacity="1"
                                                                    stroke-width="0" stroke="none"
                                                                    stroke-dasharray="0" fill="#fff"></rect>
                                                            </clipPath>
                                                            <clipPath id="gridRectMarkerMaskalnyf81v">
                                                                <rect width="240.5" height="124.72999999999999" x="0"
                                                                    y="0" rx="0" ry="0"
                                                                    opacity="1" stroke-width="0" stroke="none"
                                                                    stroke-dasharray="0" fill="#fff"></rect>
                                                            </clipPath>
                                                            <clipPath id="forecastMaskalnyf81v"></clipPath>
                                                            <clipPath id="nonForecastMaskalnyf81v"></clipPath>
                                                        </defs>
                                                        <rect width="0" height="124.72999999999999" x="0" y="0"
                                                            rx="0" ry="0" opacity="1"
                                                            stroke-width="0" stroke="#b6b6b6" stroke-dasharray="3"
                                                            fill="url(#SvgjsLinearGradient1013)"
                                                            class="apexcharts-xcrosshairs" y2="124.72999999999999"
                                                            filter="none" fill-opacity="0.9"></rect>
                                                        <g class="apexcharts-grid">
                                                            <g class="apexcharts-gridlines-horizontal"
                                                                style="display: none;">
                                                                <line x1="0" y1="0" x2="240.5"
                                                                    y2="0" stroke="#e0e0e0"
                                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                                    class="apexcharts-gridline"></line>
                                                                <line x1="0" y1="62.364999999999995"
                                                                    x2="240.5" y2="62.364999999999995"
                                                                    stroke="#e0e0e0" stroke-dasharray="0"
                                                                    stroke-linecap="butt" class="apexcharts-gridline">
                                                                </line>
                                                                <line x1="0" y1="124.72999999999999"
                                                                    x2="240.5" y2="124.72999999999999"
                                                                    stroke="#e0e0e0" stroke-dasharray="0"
                                                                    stroke-linecap="butt" class="apexcharts-gridline">
                                                                </line>
                                                            </g>
                                                            <g class="apexcharts-gridlines-vertical"
                                                                style="display: none;"></g>
                                                            <line x1="0" y1="124.72999999999999"
                                                                x2="240.5" y2="124.72999999999999"
                                                                stroke="transparent" stroke-dasharray="0"
                                                                stroke-linecap="butt"></line>
                                                            <line x1="0" y1="1" x2="0"
                                                                y2="124.72999999999999" stroke="transparent"
                                                                stroke-dasharray="0" stroke-linecap="butt"></line>
                                                        </g>
                                                        <g class="apexcharts-grid-borders" style="display: none;"></g>
                                                        <g class="apexcharts-bar-series apexcharts-plot-series">
                                                            <g class="apexcharts-series" rel="1"
                                                                seriesName="series-1" data:realIndex="0">
                                                                <path
                                                                    d="M 9.448214285714286 119.731 L 9.448214285714286 98.54849999999999 C 9.448214285714286 96.04849999999999 11.948214285714286 93.54849999999999 14.448214285714286 93.54849999999999 L 19.908928571428568 93.54849999999999 C 22.408928571428568 93.54849999999999 24.908928571428568 96.04849999999999 24.908928571428568 98.54849999999999 L 24.908928571428568 119.731 C 24.908928571428568 122.231 22.408928571428568 124.731 19.908928571428568 124.731 L 14.448214285714286 124.731 C 11.948214285714286 124.731 9.448214285714286 122.231 9.448214285714286 119.731 Z "
                                                                    fill="var(--bs-success-bg-subtle)"
                                                                    fill-opacity="1"
                                                                    stroke="var(--bs-success-bg-subtle)"
                                                                    stroke-opacity="1" stroke-linecap="round"
                                                                    stroke-width="0" stroke-dasharray="0"
                                                                    class="apexcharts-bar-area undefined"
                                                                    index="0"
                                                                    clip-path="url(#gridRectBarMaskalnyf81v)"
                                                                    pathTo="M 9.448214285714286 119.731 L 9.448214285714286 98.54849999999999 C 9.448214285714286 96.04849999999999 11.948214285714286 93.54849999999999 14.448214285714286 93.54849999999999 L 19.908928571428568 93.54849999999999 C 22.408928571428568 93.54849999999999 24.908928571428568 96.04849999999999 24.908928571428568 98.54849999999999 L 24.908928571428568 119.731 C 24.908928571428568 122.231 22.408928571428568 124.731 19.908928571428568 124.731 L 14.448214285714286 124.731 C 11.948214285714286 124.731 9.448214285714286 122.231 9.448214285714286 119.731 Z "
                                                                    pathFrom="M 9.448214285714286 124.731 L 9.448214285714286 124.731 L 24.908928571428568 124.731 L 24.908928571428568 124.731 L 24.908928571428568 124.731 L 24.908928571428568 124.731 L 24.908928571428568 124.731 L 9.448214285714286 124.731 Z"
                                                                    cy="93.54749999999999" cx="43.80535714285714"
                                                                    j="0" val="25"
                                                                    barHeight="31.182499999999997"
                                                                    barWidth="15.460714285714284"></path>
                                                                <path
                                                                    d="M 43.80535714285714 119.731 L 43.80535714285714 79.839 C 43.80535714285714 77.339 46.30535714285714 74.839 48.80535714285714 74.839 L 54.26607142857142 74.839 C 56.76607142857142 74.839 59.26607142857142 77.339 59.26607142857142 79.839 L 59.26607142857142 119.731 C 59.26607142857142 122.231 56.76607142857142 124.731 54.26607142857142 124.731 L 48.80535714285714 124.731 C 46.30535714285714 124.731 43.80535714285714 122.231 43.80535714285714 119.731 Z "
                                                                    fill="var(--bs-success-bg-subtle)"
                                                                    fill-opacity="1"
                                                                    stroke="var(--bs-success-bg-subtle)"
                                                                    stroke-opacity="1" stroke-linecap="round"
                                                                    stroke-width="0" stroke-dasharray="0"
                                                                    class="apexcharts-bar-area undefined"
                                                                    index="0"
                                                                    clip-path="url(#gridRectBarMaskalnyf81v)"
                                                                    pathTo="M 43.80535714285714 119.731 L 43.80535714285714 79.839 C 43.80535714285714 77.339 46.30535714285714 74.839 48.80535714285714 74.839 L 54.26607142857142 74.839 C 56.76607142857142 74.839 59.26607142857142 77.339 59.26607142857142 79.839 L 59.26607142857142 119.731 C 59.26607142857142 122.231 56.76607142857142 124.731 54.26607142857142 124.731 L 48.80535714285714 124.731 C 46.30535714285714 124.731 43.80535714285714 122.231 43.80535714285714 119.731 Z "
                                                                    pathFrom="M 43.80535714285714 124.731 L 43.80535714285714 124.731 L 59.26607142857142 124.731 L 59.26607142857142 124.731 L 59.26607142857142 124.731 L 59.26607142857142 124.731 L 59.26607142857142 124.731 L 43.80535714285714 124.731 Z"
                                                                    cy="74.838" cx="78.1625" j="1"
                                                                    val="40" barHeight="49.891999999999996"
                                                                    barWidth="15.460714285714284"></path>
                                                                <path
                                                                    d="M 78.1625 119.731 L 78.1625 61.1295 C 78.1625 58.6295 80.6625 56.1295 83.1625 56.1295 L 88.62321428571428 56.1295 C 91.12321428571428 56.1295 93.62321428571428 58.6295 93.62321428571428 61.1295 L 93.62321428571428 119.731 C 93.62321428571428 122.231 91.12321428571428 124.731 88.62321428571428 124.731 L 83.1625 124.731 C 80.6625 124.731 78.1625 122.231 78.1625 119.731 Z "
                                                                    fill="var(--bs-success-bg-subtle)"
                                                                    fill-opacity="1"
                                                                    stroke="var(--bs-success-bg-subtle)"
                                                                    stroke-opacity="1" stroke-linecap="round"
                                                                    stroke-width="0" stroke-dasharray="0"
                                                                    class="apexcharts-bar-area undefined"
                                                                    index="0"
                                                                    clip-path="url(#gridRectBarMaskalnyf81v)"
                                                                    pathTo="M 78.1625 119.731 L 78.1625 61.1295 C 78.1625 58.6295 80.6625 56.1295 83.1625 56.1295 L 88.62321428571428 56.1295 C 91.12321428571428 56.1295 93.62321428571428 58.6295 93.62321428571428 61.1295 L 93.62321428571428 119.731 C 93.62321428571428 122.231 91.12321428571428 124.731 88.62321428571428 124.731 L 83.1625 124.731 C 80.6625 124.731 78.1625 122.231 78.1625 119.731 Z "
                                                                    pathFrom="M 78.1625 124.731 L 78.1625 124.731 L 93.62321428571428 124.731 L 93.62321428571428 124.731 L 93.62321428571428 124.731 L 93.62321428571428 124.731 L 93.62321428571428 124.731 L 78.1625 124.731 Z"
                                                                    cy="56.1285" cx="112.51964285714286" j="2"
                                                                    val="55" barHeight="68.60149999999999"
                                                                    barWidth="15.460714285714284"></path>
                                                                <path
                                                                    d="M 112.51964285714286 119.731 L 112.51964285714286 42.419999999999995 C 112.51964285714286 39.919999999999995 115.01964285714286 37.419999999999995 117.51964285714286 37.419999999999995 L 122.98035714285714 37.419999999999995 C 125.48035714285714 37.419999999999995 127.98035714285714 39.919999999999995 127.98035714285714 42.419999999999995 L 127.98035714285714 119.731 C 127.98035714285714 122.231 125.48035714285714 124.731 122.98035714285714 124.731 L 117.51964285714286 124.731 C 115.01964285714286 124.731 112.51964285714286 122.231 112.51964285714286 119.731 Z "
                                                                    fill="var(--bs-success-bg-subtle)"
                                                                    fill-opacity="1"
                                                                    stroke="var(--bs-success-bg-subtle)"
                                                                    stroke-opacity="1" stroke-linecap="round"
                                                                    stroke-width="0" stroke-dasharray="0"
                                                                    class="apexcharts-bar-area undefined"
                                                                    index="0"
                                                                    clip-path="url(#gridRectBarMaskalnyf81v)"
                                                                    pathTo="M 112.51964285714286 119.731 L 112.51964285714286 42.419999999999995 C 112.51964285714286 39.919999999999995 115.01964285714286 37.419999999999995 117.51964285714286 37.419999999999995 L 122.98035714285714 37.419999999999995 C 125.48035714285714 37.419999999999995 127.98035714285714 39.919999999999995 127.98035714285714 42.419999999999995 L 127.98035714285714 119.731 C 127.98035714285714 122.231 125.48035714285714 124.731 122.98035714285714 124.731 L 117.51964285714286 124.731 C 115.01964285714286 124.731 112.51964285714286 122.231 112.51964285714286 119.731 Z "
                                                                    pathFrom="M 112.51964285714286 124.731 L 112.51964285714286 124.731 L 127.98035714285714 124.731 L 127.98035714285714 124.731 L 127.98035714285714 124.731 L 127.98035714285714 124.731 L 127.98035714285714 124.731 L 112.51964285714286 124.731 Z"
                                                                    cy="37.419" cx="146.87678571428572" j="3"
                                                                    val="70" barHeight="87.31099999999999"
                                                                    barWidth="15.460714285714284"></path>
                                                                <path
                                                                    d="M 146.87678571428572 119.731 L 146.87678571428572 23.710500000000007 C 146.87678571428572 21.210500000000007 149.37678571428572 18.710500000000007 151.87678571428572 18.710500000000007 L 157.3375 18.710500000000007 C 159.8375 18.710500000000007 162.3375 21.210500000000007 162.3375 23.710500000000007 L 162.3375 119.731 C 162.3375 122.231 159.8375 124.731 157.3375 124.731 L 151.87678571428572 124.731 C 149.37678571428572 124.731 146.87678571428572 122.231 146.87678571428572 119.731 Z "
                                                                    fill="var(--bs-success)" fill-opacity="1"
                                                                    stroke="var(--bs-success)" stroke-opacity="1"
                                                                    stroke-linecap="round" stroke-width="0"
                                                                    stroke-dasharray="0"
                                                                    class="apexcharts-bar-area undefined"
                                                                    index="0"
                                                                    clip-path="url(#gridRectBarMaskalnyf81v)"
                                                                    pathTo="M 146.87678571428572 119.731 L 146.87678571428572 23.710500000000007 C 146.87678571428572 21.210500000000007 149.37678571428572 18.710500000000007 151.87678571428572 18.710500000000007 L 157.3375 18.710500000000007 C 159.8375 18.710500000000007 162.3375 21.210500000000007 162.3375 23.710500000000007 L 162.3375 119.731 C 162.3375 122.231 159.8375 124.731 157.3375 124.731 L 151.87678571428572 124.731 C 149.37678571428572 124.731 146.87678571428572 122.231 146.87678571428572 119.731 Z "
                                                                    pathFrom="M 146.87678571428572 124.731 L 146.87678571428572 124.731 L 162.3375 124.731 L 162.3375 124.731 L 162.3375 124.731 L 162.3375 124.731 L 162.3375 124.731 L 146.87678571428572 124.731 Z"
                                                                    cy="18.709500000000006" cx="181.23392857142858"
                                                                    j="4" val="85"
                                                                    barHeight="106.02049999999998"
                                                                    barWidth="15.460714285714284"></path>
                                                                <path
                                                                    d="M 181.23392857142858 119.731 L 181.23392857142858 42.419999999999995 C 181.23392857142858 39.919999999999995 183.73392857142858 37.419999999999995 186.23392857142858 37.419999999999995 L 191.69464285714287 37.419999999999995 C 194.19464285714287 37.419999999999995 196.69464285714287 39.919999999999995 196.69464285714287 42.419999999999995 L 196.69464285714287 119.731 C 196.69464285714287 122.231 194.19464285714287 124.731 191.69464285714287 124.731 L 186.23392857142858 124.731 C 183.73392857142858 124.731 181.23392857142858 122.231 181.23392857142858 119.731 Z "
                                                                    fill="var(--bs-success-bg-subtle)"
                                                                    fill-opacity="1"
                                                                    stroke="var(--bs-success-bg-subtle)"
                                                                    stroke-opacity="1" stroke-linecap="round"
                                                                    stroke-width="0" stroke-dasharray="0"
                                                                    class="apexcharts-bar-area undefined"
                                                                    index="0"
                                                                    clip-path="url(#gridRectBarMaskalnyf81v)"
                                                                    pathTo="M 181.23392857142858 119.731 L 181.23392857142858 42.419999999999995 C 181.23392857142858 39.919999999999995 183.73392857142858 37.419999999999995 186.23392857142858 37.419999999999995 L 191.69464285714287 37.419999999999995 C 194.19464285714287 37.419999999999995 196.69464285714287 39.919999999999995 196.69464285714287 42.419999999999995 L 196.69464285714287 119.731 C 196.69464285714287 122.231 194.19464285714287 124.731 191.69464285714287 124.731 L 186.23392857142858 124.731 C 183.73392857142858 124.731 181.23392857142858 122.231 181.23392857142858 119.731 Z "
                                                                    pathFrom="M 181.23392857142858 124.731 L 181.23392857142858 124.731 L 196.69464285714287 124.731 L 196.69464285714287 124.731 L 196.69464285714287 124.731 L 196.69464285714287 124.731 L 196.69464285714287 124.731 L 181.23392857142858 124.731 Z"
                                                                    cy="37.419" cx="215.59107142857144" j="5"
                                                                    val="70" barHeight="87.31099999999999"
                                                                    barWidth="15.460714285714284"></path>
                                                                <path
                                                                    d="M 215.59107142857144 119.731 L 215.59107142857144 61.1295 C 215.59107142857144 58.6295 218.09107142857144 56.1295 220.59107142857144 56.1295 L 226.05178571428573 56.1295 C 228.55178571428573 56.1295 231.05178571428573 58.6295 231.05178571428573 61.1295 L 231.05178571428573 119.731 C 231.05178571428573 122.231 228.55178571428573 124.731 226.05178571428573 124.731 L 220.59107142857144 124.731 C 218.09107142857144 124.731 215.59107142857144 122.231 215.59107142857144 119.731 Z "
                                                                    fill="var(--bs-success-bg-subtle)"
                                                                    fill-opacity="1"
                                                                    stroke="var(--bs-success-bg-subtle)"
                                                                    stroke-opacity="1" stroke-linecap="round"
                                                                    stroke-width="0" stroke-dasharray="0"
                                                                    class="apexcharts-bar-area undefined"
                                                                    index="0"
                                                                    clip-path="url(#gridRectBarMaskalnyf81v)"
                                                                    pathTo="M 215.59107142857144 119.731 L 215.59107142857144 61.1295 C 215.59107142857144 58.6295 218.09107142857144 56.1295 220.59107142857144 56.1295 L 226.05178571428573 56.1295 C 228.55178571428573 56.1295 231.05178571428573 58.6295 231.05178571428573 61.1295 L 231.05178571428573 119.731 C 231.05178571428573 122.231 228.55178571428573 124.731 226.05178571428573 124.731 L 220.59107142857144 124.731 C 218.09107142857144 124.731 215.59107142857144 122.231 215.59107142857144 119.731 Z "
                                                                    pathFrom="M 215.59107142857144 124.731 L 215.59107142857144 124.731 L 231.05178571428573 124.731 L 231.05178571428573 124.731 L 231.05178571428573 124.731 L 231.05178571428573 124.731 L 231.05178571428573 124.731 L 215.59107142857144 124.731 Z"
                                                                    cy="56.1285" cx="249.9482142857143" j="6"
                                                                    val="55" barHeight="68.60149999999999"
                                                                    barWidth="15.460714285714284"></path>
                                                                <g class="apexcharts-bar-goals-markers">
                                                                    <g className="apexcharts-bar-goals-groups"
                                                                        class="apexcharts-hidden-element-shown"
                                                                        clip-path="url(#gridRectMarkerMaskalnyf81v)">
                                                                    </g>
                                                                    <g className="apexcharts-bar-goals-groups"
                                                                        class="apexcharts-hidden-element-shown"
                                                                        clip-path="url(#gridRectMarkerMaskalnyf81v)">
                                                                    </g>
                                                                    <g className="apexcharts-bar-goals-groups"
                                                                        class="apexcharts-hidden-element-shown"
                                                                        clip-path="url(#gridRectMarkerMaskalnyf81v)">
                                                                    </g>
                                                                    <g className="apexcharts-bar-goals-groups"
                                                                        class="apexcharts-hidden-element-shown"
                                                                        clip-path="url(#gridRectMarkerMaskalnyf81v)">
                                                                    </g>
                                                                    <g className="apexcharts-bar-goals-groups"
                                                                        class="apexcharts-hidden-element-shown"
                                                                        clip-path="url(#gridRectMarkerMaskalnyf81v)">
                                                                    </g>
                                                                    <g className="apexcharts-bar-goals-groups"
                                                                        class="apexcharts-hidden-element-shown"
                                                                        clip-path="url(#gridRectMarkerMaskalnyf81v)">
                                                                    </g>
                                                                    <g className="apexcharts-bar-goals-groups"
                                                                        class="apexcharts-hidden-element-shown"
                                                                        clip-path="url(#gridRectMarkerMaskalnyf81v)">
                                                                    </g>
                                                                </g>
                                                                <g
                                                                    class="apexcharts-bar-shadows apexcharts-hidden-element-shown">
                                                                </g>
                                                            </g>
                                                            <g class="apexcharts-datalabels apexcharts-hidden-element-shown"
                                                                data:realIndex="0"></g>
                                                        </g>
                                                        <line x1="0" y1="0" x2="240.5"
                                                            y2="0" stroke="#b6b6b6" stroke-dasharray="0"
                                                            stroke-width="1" stroke-linecap="butt"
                                                            class="apexcharts-ycrosshairs"></line>
                                                        <line x1="0" y1="0" x2="240.5"
                                                            y2="0" stroke="#b6b6b6" stroke-dasharray="0"
                                                            stroke-width="0" stroke-linecap="butt"
                                                            class="apexcharts-ycrosshairs-hidden"></line>
                                                        <g class="apexcharts-xaxis" transform="translate(0, 0)">
                                                            <g class="apexcharts-xaxis-texts-g"
                                                                transform="translate(0, -4)"><text
                                                                    x="17.178571428571427" y="152.73"
                                                                    text-anchor="middle" dominant-baseline="auto"
                                                                    font-size="13px"
                                                                    font-family="Helvetica, Arial, sans-serif"
                                                                    font-weight="400"
                                                                    fill="var(--bs-secondary-color)"
                                                                    class="apexcharts-text apexcharts-xaxis-label "
                                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                                    <tspan>M</tspan>
                                                                    <title>M</title>
                                                                </text><text x="51.53571428571428" y="152.73"
                                                                    text-anchor="middle" dominant-baseline="auto"
                                                                    font-size="13px"
                                                                    font-family="Helvetica, Arial, sans-serif"
                                                                    font-weight="400"
                                                                    fill="var(--bs-secondary-color)"
                                                                    class="apexcharts-text apexcharts-xaxis-label "
                                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                                    <tspan>T</tspan>
                                                                    <title>T</title>
                                                                </text><text x="85.89285714285712" y="152.73"
                                                                    text-anchor="middle" dominant-baseline="auto"
                                                                    font-size="13px"
                                                                    font-family="Helvetica, Arial, sans-serif"
                                                                    font-weight="400"
                                                                    fill="var(--bs-secondary-color)"
                                                                    class="apexcharts-text apexcharts-xaxis-label "
                                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                                    <tspan>W</tspan>
                                                                    <title>W</title>
                                                                </text><text x="120.24999999999999" y="152.73"
                                                                    text-anchor="middle" dominant-baseline="auto"
                                                                    font-size="13px"
                                                                    font-family="Helvetica, Arial, sans-serif"
                                                                    font-weight="400"
                                                                    fill="var(--bs-secondary-color)"
                                                                    class="apexcharts-text apexcharts-xaxis-label "
                                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                                    <tspan>T</tspan>
                                                                    <title>T</title>
                                                                </text><text x="154.60714285714286" y="152.73"
                                                                    text-anchor="middle" dominant-baseline="auto"
                                                                    font-size="13px"
                                                                    font-family="Helvetica, Arial, sans-serif"
                                                                    font-weight="400"
                                                                    fill="var(--bs-secondary-color)"
                                                                    class="apexcharts-text apexcharts-xaxis-label "
                                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                                    <tspan>F</tspan>
                                                                    <title>F</title>
                                                                </text><text x="188.96428571428572" y="152.73"
                                                                    text-anchor="middle" dominant-baseline="auto"
                                                                    font-size="13px"
                                                                    font-family="Helvetica, Arial, sans-serif"
                                                                    font-weight="400"
                                                                    fill="var(--bs-secondary-color)"
                                                                    class="apexcharts-text apexcharts-xaxis-label "
                                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                                    <tspan>S</tspan>
                                                                    <title>S</title>
                                                                </text><text x="223.32142857142858" y="152.73"
                                                                    text-anchor="middle" dominant-baseline="auto"
                                                                    font-size="13px"
                                                                    font-family="Helvetica, Arial, sans-serif"
                                                                    font-weight="400"
                                                                    fill="var(--bs-secondary-color)"
                                                                    class="apexcharts-text apexcharts-xaxis-label "
                                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                                    <tspan>S</tspan>
                                                                    <title>S</title>
                                                                </text></g>
                                                        </g>
                                                        <g class="apexcharts-yaxis-annotations"></g>
                                                        <g class="apexcharts-xaxis-annotations"></g>
                                                        <g class="apexcharts-point-annotations"></g>
                                                    </g>
                                                </svg></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- / Content -->




                    <!-- Footer -->
                    @include('backend.layouts.includes.footer')
                    <!-- / Footer -->


                    <div class="content-backdrop fade"></div>
                </div>
                <!-- Content wrapper -->
            </div>
            <!-- / Layout page -->
        </div>

    </div>
    <!-- / Layout wrapper -->

    <!-- Core JS -->
    <!-- build:js assets/vendor/js/theme.js -->


    <script src="{{ asset('backend') }}/vendor/libs/jquery/jquery.js"></script>
    <script src="{{ asset('backend') }}/vendor/libs/popper/popper.js"></script>
    <script src="{{ asset('backend') }}/vendor/js/bootstrap.js"></script>
    <script src="{{ asset('backend') }}/vendor/libs/node-waves/node-waves.js"></script>



    <script src="{{ asset('backend') }}/vendor/libs/@algolia/autocomplete-js.js"></script>

    <script src="{{ asset('backend') }}/vendor/libs/pickr/pickr.js"></script>



    <script src="{{ asset('backend') }}/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>


    <script src="{{ asset('backend') }}/vendor/libs/hammer/hammer.js"></script>

    <script src="{{ asset('backend') }}/vendor/libs/i18n/i18n.js"></script>


    <script src="{{ asset('backend') }}/vendor/js/menu.js"></script>

    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="{{ asset('backend') }}/vendor/libs/apex-charts/apexcharts.js"></script>
    <script src="{{ asset('backend') }}/vendor/libs/swiper/swiper.js"></script>
    <script src="{{ asset('backend') }}/vendor/libs/datatables-bs5/datatables-bootstrap5.js"></script>

    <!-- Main JS -->

    <script src="{{ asset('backend') }}/js/main.js"></script>


    <!-- Page JS -->
    <script src="{{ asset('backend') }}/js/dashboards-analytics.js"></script>
</body>

</html>
