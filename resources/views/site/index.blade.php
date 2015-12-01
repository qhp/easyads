<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="UTF-8">
    <script src="easyads_files/nr-768.min.js"></script>
    <script type="text/javascript" src="easyads_files/ae0508e4dc"></script>
    <script src="easyads_files/nr-768.min(1).js"></script>
    <script type="text/javascript">window.NREUM || (NREUM = {}), __nr_require = function (e, n, t) {
            function r(t) {
                if (!n[t]) {
                    var o = n[t] = {exports: {}};
                    e[t][0].call(o.exports, function (n) {
                        var o = e[t][1][n];
                        return r(o || n)
                    }, o, o.exports)
                }
                return n[t].exports
            }

            if ("function" == typeof __nr_require)return __nr_require;
            for (var o = 0; o < t.length; o++)r(t[o]);
            return r
        }({
            QJf3ax: [function (e, n) {
                function t(e) {
                    function n(n, t, a) {
                        e && e(n, t, a), a || (a = {});
                        for (var u = c(n), f = u.length, s = i(a, o, r), p = 0; f > p; p++)u[p].apply(s, t);
                        return s
                    }

                    function a(e, n) {
                        f[e] = c(e).concat(n)
                    }

                    function c(e) {
                        return f[e] || []
                    }

                    function u() {
                        return t(n)
                    }

                    var f = {};
                    return {on: a, emit: n, create: u, listeners: c, _events: f}
                }

                function r() {
                    return {}
                }

                var o = "nr@context", i = e("gos");
                n.exports = t()
            }, {gos: "7eSDFh"}], ee: [function (e, n) {
                n.exports = e("QJf3ax")
            }, {}], 3: [function (e, n) {
                function t(e) {
                    return function () {
                        r(e, [(new Date).getTime()].concat(i(arguments)))
                    }
                }

                var r = e("handle"), o = e(1), i = e(2);
                "undefined" == typeof window.newrelic && (newrelic = window.NREUM);
                var a = ["setPageViewName", "addPageAction", "setCustomAttribute", "finished", "addToTrace", "inlineHit", "noticeError"];
                o(a, function (e, n) {
                    window.NREUM[n] = t("api-" + n)
                }), n.exports = window.NREUM
            }, {1: 12, 2: 13, handle: "D5DuLP"}], gos: [function (e, n) {
                n.exports = e("7eSDFh")
            }, {}], "7eSDFh": [function (e, n) {
                function t(e, n, t) {
                    if (r.call(e, n))return e[n];
                    var o = t();
                    if (Object.defineProperty && Object.keys)try {
                        return Object.defineProperty(e, n, {value: o, writable: !0, enumerable: !1}), o
                    } catch (i) {
                    }
                    return e[n] = o, o
                }

                var r = Object.prototype.hasOwnProperty;
                n.exports = t
            }, {}], D5DuLP: [function (e, n) {
                function t(e, n, t) {
                    return r.listeners(e).length ? r.emit(e, n, t) : void(r.q && (r.q[e] || (r.q[e] = []), r.q[e].push(n)))
                }

                var r = e("ee").create();
                n.exports = t, t.ee = r, r.q = {}
            }, {ee: "QJf3ax"}], handle: [function (e, n) {
                n.exports = e("D5DuLP")
            }, {}], XL7HBI: [function (e, n) {
                function t(e) {
                    var n = typeof e;
                    return !e || "object" !== n && "function" !== n ? -1 : e === window ? 0 : i(e, o, function () {
                        return r++
                    })
                }

                var r = 1, o = "nr@id", i = e("gos");
                n.exports = t
            }, {gos: "7eSDFh"}], id: [function (e, n) {
                n.exports = e("XL7HBI")
            }, {}], G9z0Bl: [function (e, n) {
                function t() {
                    var e = d.info = NREUM.info, n = f.getElementsByTagName("script")[0];
                    if (e && e.licenseKey && e.applicationID && n) {
                        c(p, function (n, t) {
                            n in e || (e[n] = t)
                        });
                        var t = "https" === s.split(":")[0] || e.sslForHttp;
                        d.proto = t ? "https://" : "http://", a("mark", ["onload", i()]);
                        var r = f.createElement("script");
                        r.src = d.proto + e.agent, n.parentNode.insertBefore(r, n)
                    }
                }

                function r() {
                    "complete" === f.readyState && o()
                }

                function o() {
                    a("mark", ["domContent", i()])
                }

                function i() {
                    return (new Date).getTime()
                }

                var a = e("handle"), c = e(1), u = window, f = u.document;
                e(2);
                var s = ("" + location).split("?")[0], p = {
                    beacon: "bam.nr-data.net",
                    errorBeacon: "bam.nr-data.net",
                    agent: "js-agent.newrelic.com/nr-768.min.js"
                }, d = n.exports = {offset: i(), origin: s, features: {}};
                f.addEventListener ? (f.addEventListener("DOMContentLoaded", o, !1), u.addEventListener("load", t, !1)) : (f.attachEvent("onreadystatechange", r), u.attachEvent("onload", t)), a("mark", ["firstbyte", i()])
            }, {1: 12, 2: 3, handle: "D5DuLP"}], loader: [function (e, n) {
                n.exports = e("G9z0Bl")
            }, {}], 12: [function (e, n) {
                function t(e, n) {
                    var t = [], o = "", i = 0;
                    for (o in e)r.call(e, o) && (t[i] = n(o, e[o]), i += 1);
                    return t
                }

                var r = Object.prototype.hasOwnProperty;
                n.exports = t
            }, {}], 13: [function (e, n) {
                function t(e, n, t) {
                    n || (n = 0), "undefined" == typeof t && (t = e ? e.length : 0);
                    for (var r = -1, o = t - n || 0, i = Array(0 > o ? 0 : o); ++r < o;)i[r] = e[n + r];
                    return i
                }

                n.exports = t
            }, {}]
        }, {}, ["G9z0Bl"]);</script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="http://demo.athemes.com/perth/xmlrpc.php">

    <title>Perth</title>
    <link rel="alternate" type="application/rss+xml" title="Perth » Feed" href="http://demo.athemes.com/perth/feed/">
    <link rel="alternate" type="application/rss+xml" title="Perth » Comments Feed"
          href="http://demo.athemes.com/perth/comments/feed/">
    <link rel="alternate" type="application/rss+xml" title="Perth » My front page Comments Feed"
          href="http://demo.athemes.com/perth/my-front-page/feed/">
    <script type="text/javascript">
        window._wpemojiSettings = {
            "baseUrl": "http:\/\/s.w.org\/images\/core\/emoji\/72x72\/",
            "ext": ".png",
            "source": {"concatemoji": "http:\/\/demo.athemes.com\/perth\/wp-includes\/js\/wp-emoji-release.min.js?ver=4.3.1"}
        };
        !function (a, b, c) {
            function d(a) {
                var c = b.createElement("canvas"), d = c.getContext && c.getContext("2d");
                return d && d.fillText ? (d.textBaseline = "top", d.font = "600 32px Arial", "flag" === a ? (d.fillText(String.fromCharCode(55356, 56812, 55356, 56807), 0, 0), c.toDataURL().length > 3e3) : (d.fillText(String.fromCharCode(55357, 56835), 0, 0), 0 !== d.getImageData(16, 16, 1, 1).data[0])) : !1
            }

            function e(a) {
                var c = b.createElement("script");
                c.src = a, c.type = "text/javascript", b.getElementsByTagName("head")[0].appendChild(c)
            }

            var f, g;
            c.supports = {simple: d("simple"), flag: d("flag")}, c.DOMReady = !1, c.readyCallback = function () {
                c.DOMReady = !0
            }, c.supports.simple && c.supports.flag || (g = function () {
                c.readyCallback()
            }, b.addEventListener ? (b.addEventListener("DOMContentLoaded", g, !1), a.addEventListener("load", g, !1)) : (a.attachEvent("onload", g), b.attachEvent("onreadystatechange", function () {
                "complete" === b.readyState && c.readyCallback()
            })), f = c.source || {}, f.concatemoji ? e(f.concatemoji) : f.wpemoji && f.twemoji && (e(f.twemoji), e(f.wpemoji)))
        }(window, document, window._wpemojiSettings);
    </script>
    <script src="easyads_files/wp-emoji-release.min.js" type="text/javascript"></script>
    <script src="easyads_files/wp-emoji-release.min(1).js" type="text/javascript"></script>
    <style type="text/css">
        img.wp-smiley,
        img.emoji {
            display: inline !important;
            border: none !important;
            box-shadow: none !important;
            height: 1em !important;
            width: 1em !important;
            margin: 0 .07em !important;
            vertical-align: -0.1em !important;
            background: none !important;
            padding: 0 !important;
        }
    </style>
    <link rel="stylesheet" id="siteorigin-panels-front-css" href="easyads_files/front.css" type="text/css"
          media="all">
    <link rel="stylesheet" id="perth-bootstrap-css" href="easyads_files/bootstrap.min.css" type="text/css"
          media="all">
    <link rel="stylesheet" id="contact-form-7-css" href="easyads_files/styles.css" type="text/css" media="all">
    <link rel="stylesheet" id="select2-css" href="easyads_files/select2.css" type="text/css" media="all">
    <link rel="stylesheet" id="woocommerce-layout-css" href="easyads_files/woocommerce-layout.css" type="text/css"
          media="all">
    <link rel="stylesheet" id="woocommerce-smallscreen-css" href="easyads_files/woocommerce-smallscreen.css"
          type="text/css" media="only screen and (max-width: 768px)">
    <link rel="stylesheet" id="woocommerce-general-css" href="easyads_files/woocommerce.css" type="text/css"
          media="all">
    <link rel="stylesheet" id="perth-body-fonts-css" href="easyads_files/css" type="text/css" media="all">
    <link rel="stylesheet" id="perth-headings-fonts-css" href="easyads_files/css(1)" type="text/css" media="all">
    <link rel="stylesheet" id="perth-style-css" href="easyads_files/style.css" type="text/css" media="all">
    <style id="perth-style-inline-css" type="text/css">
        @media only screen and (min-width: 992px) {
            .header-image {
                height: 600px;
            }
        }

        .site-header {
            background-color: #ffffff;
        }

        .site-title a, .site-title a:hover {
            color: #2B3C4D
        }

        .site-description {
            color: #808D99
        }

        .main-navigation a {
            color: #53565A
        }

        .main-navigation ul ul a {
            color: #d5d5d5
        }

        .main-navigation ul ul li {
            background-color: #242D37
        }

        .header-text {
            color: #ffffff
        }

        body {
            color: #798A9B
        }

        .footer-widgets {
            background-color: #242D37
        }

        .overlay {
            background-color: #1c1c1c
        }

        .header-overlay {
            background-color: #315B9D
        }

        .site-title {
            font-size: 36px;
        }

        .site-description {
            font-size: 14px;
        }

        .main-navigation li {
            font-size: 13px;
        }

        h1 {
            font-size: 36px;
        }

        h2 {
            font-size: 30px;
        }

        h3 {
            font-size: 24px;
        }

        h4 {
            font-size: 18px;
        }

        h5 {
            font-size: 14px;
        }

        h6 {
            font-size: 12px;
        }

        body {
            font-size: 14px;
        }

        .panel-grid .widget-title {
            font-size: 36px;
        }

    </style>
    <link rel="stylesheet" id="perth-font-awesome-css" href="easyads_files/font-awesome.min.css" type="text/css"
          media="all">
    <script type="text/javascript" src="easyads_files/jquery.js"></script>
    <script type="text/javascript" src="easyads_files/jquery-migrate.min.js"></script>
    <script type="text/javascript" src="easyads_files/isotope.min.js"></script>
    <script type="text/javascript" src="easyads_files/isotope.min(1).js"></script>
    <link rel="EditURI" type="application/rsd+xml" title="RSD" href="http://demo.athemes.com/perth/xmlrpc.php?rsd">
    <link rel="wlwmanifest" type="application/wlwmanifest+xml"
          href="http://demo-26ce.kxcdn.com/wp-includes/wlwmanifest.xml">
    <meta name="generator" content="WordPress 4.3.1">
    <meta name="generator" content="WooCommerce 2.4.10">
    <link rel="canonical" href="file:///Users/alex/Downloads/Perth_files/Perth.html">
    <link rel="shortlink" href="file:///Users/alex/Downloads/Perth_files/Perth.html">
    <style type="text/css">.recentcomments a {
            display: inline !important;
            padding: 0 !important;
            margin: 0 !important;
        }</style>
    <style type="text/css">
        .header-image {
            background-image: url(http://demo-26ce.kxcdn.com/wp-content/themes/perth/images/header.jpg);
            display: block;
        }
    </style>
    <style type="text/css" media="all" id="siteorigin-panels-grids-wp_head">/* Layout 220 */
        #pg-220-0, #pg-220-1, #pg-220-2, #pg-220-3, #pg-220-4, #pg-220-5, #pg-220-6, #pg-220-7, #pg-220-8, #pg-220-9, #pg-220-10, #pg-220-11, #pg-220-12, #pl-220 .panel-grid-cell .so-panel, #pl-220 .panel-grid-cell .so-panel:last-child {
            margin-bottom: 0px
        }

        #pgc-220-4-0 {
            width: 37.974%
        }

        #pgc-220-4-1 {
            width: 62.026%
        }

        #pg-220-4 .panel-grid-cell {
            float: left
        }

        #pg-220-4 {
            margin-left: -15px;
            margin-right: -15px
        }

        #pg-220-4 .panel-grid-cell {
            padding-left: 15px;
            padding-right: 15px
        }

        @media (max-width: 780px) {
            #pg-220-0 .panel-grid-cell, #pg-220-1 .panel-grid-cell, #pg-220-2 .panel-grid-cell, #pg-220-3 .panel-grid-cell, #pg-220-4 .panel-grid-cell, #pg-220-5 .panel-grid-cell, #pg-220-6 .panel-grid-cell, #pg-220-7 .panel-grid-cell, #pg-220-8 .panel-grid-cell, #pg-220-9 .panel-grid-cell, #pg-220-10 .panel-grid-cell, #pg-220-11 .panel-grid-cell, #pg-220-12 .panel-grid-cell, #pg-220-13 .panel-grid-cell {
                float: none;
                width: auto
            }

            #pgc-220-4-0 {
                margin-bottom: 0px
            }

            #pl-220 .panel-grid {
                margin-left: 0;
                margin-right: 0
            }

            #pl-220 .panel-grid-cell {
                padding: 0
            }
        } </style>
    <style id="fit-vids-style">.fluid-width-video-wrapper {
            width: 100%;
            position: relative;
            padding: 0;
        }

        .fluid-width-video-wrapper iframe, .fluid-width-video-wrapper object, .fluid-width-video-wrapper embed {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }</style>
</head>

<body class="home page page-id-220 page-template page-template-page-templates page-template-page_front-page page-template-page-templatespage_front-page-php siteorigin-panels siteorigin-panels-home">
<div class="preloader" style="opacity: 0; display: none;">
    <div class="preload-inner">
        <div class="box1 preloader-box"></div>
        <div class="box2 preloader-box"></div>
        <div class="box3 preloader-box"></div>
        <div class="box4 preloader-box"></div>
    </div>
</div>

<div id="page" class="hfeed site">
    <a class="skip-link screen-reader-text" href="http://demo.athemes.com/perth/#content">Skip to content</a>

    <header id="masthead" class="site-header clearfix" role="banner">
        <div class="container">
            <div class="site-branding col-md-4 col-sm-6 col-xs-12">
                <h1 class="site-title"><a href="file:///Users/alex/Downloads/Perth_files/Perth.html" rel="home">Easy
                        Ads</a></h1></div>
            <nav id="site-navigation" class="main-navigation col-md-8" role="navigation">
                <div class="menu-menu-1-container">
                    <ul id="primary-menu" class="menu">
                        <li id="menu-item-219"
                            class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-219">
                            <a href="file:///Users/alex/Downloads/Perth_files/Perth.html">Home</a></li>
                        <li id="menu-item-277"
                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-277"><a
                                    href="http://demo.athemes.com/perth/my-blog-page/">Sign in</a></li>
                        <li id="menu-item-229"
                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-229"><a
                                    href="http://demo.athemes.com/perth/employees">Sign Up</a></li>
                    </ul>
                </div>
            </nav><!-- #site-navigation -->
            <nav class="mobile-nav">
                <div class="slicknav_menu"><a href="http://demo.athemes.com/perth/#" aria-haspopup="true" tabindex="0"
                                              class="slicknav_btn slicknav_collapsed"><span class="slicknav_menutxt"><i
                                    class="fa fa-bars"></i></span><span class="slicknav_icon"><span
                                    class="slicknav_icon-bar"></span><span class="slicknav_icon-bar"></span><span
                                    class="slicknav_icon-bar"></span></span></a>
                    <ul class="slicknav_nav slicknav_hidden" aria-hidden="true" role="menu" style="display: none;">
                        <li class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-219">
                            <a href="file:///Users/alex/Downloads/Perth_files/Perth.html" role="menuitem" tabindex="-1">Home</a>
                        </li>
                        <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-277"><a
                                    href="http://demo.athemes.com/perth/my-blog-page/" role="menuitem" tabindex="-1">Blog</a>
                        </li>
                        <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-229"><a
                                    href="http://demo.athemes.com/perth/employees" role="menuitem" tabindex="-1">Employees</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </header><!-- #masthead -->
    <div class="header-clone" style="height: 72px;"></div>

    <div class="header-image" style="background-position: 50% 7px;">
        <div class="header-overlay"></div>
        <div class="header-info">
            <h3 class="header-text">Welcome to Easy Ads</h3>
            <div class="header-buttons"><a class="button header-button left-button"
                                           href="http://demo.athemes.com/perth/#primary">Start here</a><a
                        class="button header-button right-button" href="http://demo.athemes.com/perth/#primary">Read
                    more</a></div>
        </div>
    </div>

    <div id="content" class="site-content">
        <div id="content-wrapper" class="container">
            <div id="primary" class="fullwidth">
                <main id="main" class="site-main" role="main">

                    <div id="pl-220">
                        <div class="panel-grid" id="pg-220-0">
                            <div style="padding: 100px 0; " class="panel-row-style">
                                <div class="panel-grid-cell" id="pgc-220-0-0">
                                    <div class="so-panel widget widget_perth_services_type_a perth_services_widget panel-first-child panel-last-child"
                                         id="panel-220-0-0-0"><h3 class="widget-title">Services</h3>
                                        <div class="service-area">
                                            <div class="service columns3">

                                                <div class="svg-container service-icon-svg">

                                                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                                         viewBox="0 0 80 70">
                                                        <g transform="translate(0,-982.3622)">
                                                            <path d="m 41.863512,49.0007 -35.2397037,-2e-6 -17.6198503,-30.51848 17.6198533,-30.518478 35.2397037,2e-6 17.619851,30.518479 z"
                                                                  transform="matrix(1.1191385,0,0,1.1284347,12.867983,996.50622)"></path>
                                                        </g>
                                                    </svg>
									<span class="service-icon">
									<i class="fa fa-pencil"></i>								</span>
                                                </div>

                                                <div class="content">
                                                    <h4 class="service-title">
                                                        Design </h4>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean
                                                        ipsum enim.</p>
                                                </div>
                                            </div>
                                            <div class="service columns3">

                                                <div class="svg-container service-icon-svg">

                                                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                                         viewBox="0 0 80 70">
                                                        <g transform="translate(0,-982.3622)">
                                                            <path d="m 41.863512,49.0007 -35.2397037,-2e-6 -17.6198503,-30.51848 17.6198533,-30.518478 35.2397037,2e-6 17.619851,30.518479 z"
                                                                  transform="matrix(1.1191385,0,0,1.1284347,12.867983,996.50622)"></path>
                                                        </g>
                                                    </svg>
									<span class="service-icon">
									<i class="fa fa-globe"></i>								</span>
                                                </div>

                                                <div class="content">
                                                    <h4 class="service-title">
                                                        Global coverage </h4>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean
                                                        ipsum enim.</p>
                                                </div>
                                            </div>
                                            <div class="service columns3">

                                                <div class="svg-container service-icon-svg">

                                                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                                         viewBox="0 0 80 70">
                                                        <g transform="translate(0,-982.3622)">
                                                            <path d="m 41.863512,49.0007 -35.2397037,-2e-6 -17.6198503,-30.51848 17.6198533,-30.518478 35.2397037,2e-6 17.619851,30.518479 z"
                                                                  transform="matrix(1.1191385,0,0,1.1284347,12.867983,996.50622)"></path>
                                                        </g>
                                                    </svg>
									<span class="service-icon">
									<i class="fa fa-coffee"></i>								</span>
                                                </div>

                                                <div class="content">
                                                    <h4 class="service-title">
                                                        Free coffee </h4>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean
                                                        ipsum enim.</p>
                                                </div>
                                            </div>
                                        </div>


                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="svg-container row-svg row-separator"
                             style="fill: rgb(255, 255, 255); margin: -80px;">
                            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" viewBox="0 0 100 100"
                                 preserveAspectRatio="none">
                                <path d="M0 0 L100 0 L100 2 L0 100 Z"></path>
                            </svg>
                        </div>


                        <div class="panel-grid" id="pg-220-2">
                            <div class="siteorigin-panels-stretch parallaxBg perth-stretch panel-row-style rowSepBefore rowSepAfter"
                                 style="color: rgb(255, 255, 255); padding: 100px 80px; margin-left: -80px; margin-right: -80px; border-left-width: 0px; border-right-width: 0px; background-image: url(http://demo-26ce.kxcdn.com/wp-content/uploads/sites/40/2015/03/city-731296_1280.jpg); background-color: rgb(30, 115, 190); background-position: 50% 54px;"
                                 data-stretch-type="full" data-hascolor="hascolor" data-hasbg="hasbg">
                                <div class="panel-grid-cell" id="pgc-220-2-0" style="color: inherit;">
                                    <div class="so-panel widget widget_perth_facts perth_facts_widget panel-first-child panel-last-child"
                                         id="panel-220-2-0-0" style="color: inherit;">
                                        <h3 class="widget-title" style="color: inherit;">About us</h3>
                                        <div class="facts-area" style="color: inherit;">
                                            <div class="fact" style="color: inherit;">
                                                <div class="fact-icon" style="color: inherit;"><i class="fa fa-bullhorn"
                                                                                                  style="color: inherit;"></i>
                                                </div>
                                                <div class="fact-value" data-to="123" style="color: inherit;">123</div>
                                                <div class="fact-name" style="color: inherit;">Projects</div>
                                            </div><!--
									-->
                                            <div class="fact" style="color: inherit;">
                                                <div class="fact-icon" style="color: inherit;"><i class="fa fa-coffee"
                                                                                                  style="color: inherit;"></i>
                                                </div>
                                                <div class="fact-value" data-to="999" style="color: inherit;">999</div>
                                                <div class="fact-name" style="color: inherit;">Coffees</div>
                                            </div><!--
									-->
                                            <div class="fact" style="color: inherit;">
                                                <div class="fact-icon" style="color: inherit;"><i class="fa fa-car"
                                                                                                  style="color: inherit;"></i>
                                                </div>
                                                <div class="fact-value" data-to="43" style="color: inherit;">43</div>
                                                <div class="fact-name" style="color: inherit;">Cars</div>
                                            </div><!--
									-->
                                            <div class="fact" style="color: inherit;">
                                                <div class="fact-icon" style="color: inherit;"><i class="fa fa-globe"
                                                                                                  style="color: inherit;"></i>
                                                </div>
                                                <div class="fact-value" data-to="26" style="color: inherit;">26</div>
                                                <div class="fact-name" style="color: inherit;">Countries</div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="overlay" style="color: inherit;"></div>
                                <div class="overlay"></div>
                            </div>
                        </div>
                        <div class="svg-container row-svg row-sep-b" style="fill: rgb(130, 155, 194); margin: -80px;">
                            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" viewBox="0 0 100 100"
                                 preserveAspectRatio="none">
                                <g transform="translate(0,-952.36218)">
                                    <path d="m 0,1052.3622 100,0 0,-2 L 0,952.36218 z"></path>
                                </g>
                            </svg>
                        </div>

                        <div class="panel-grid" id="pg-220-4">
                            <div class="siteorigin-panels-stretch perth-stretch panel-row-style"
                                 style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: rgb(226, 226, 226); padding: 100px 80px; margin-left: -80px; margin-right: -80px; border-left-width: 0px; border-right-width: 0px; background-color: rgb(130, 155, 194);"
                                 data-stretch-type="full">
                                <div class="panel-grid-cell" id="pgc-220-4-0">
                                    <div class="so-panel widget widget_text panel-first-child panel-last-child"
                                         id="panel-220-4-0-0"><h3 class="widget-title">More services?</h3>
                                        <div class="textwidget"><img src="easyads_files/lift-539977_640-1-1.png">
                                        </div>
                                    </div>
                                </div>
                                <div class="panel-grid-cell" id="pgc-220-4-1">
                                    <div class="so-panel widget widget_perth_services_type_b perth_services_b_widget panel-first-child panel-last-child"
                                         id="panel-220-4-1-0">
                                        <div style="color: #ffffff;" class="panel-widget-style">
                                            <div class="service-area type-b">
                                                <div class="service clearfix columns2">

                                                    <div class="svg-container service-icon-svg">

                                                        <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                                             viewBox="0 0 80 70">
                                                            <g transform="translate(0,-982.3622)">
                                                                <path d="m 41.863512,49.0007 -35.2397037,-2e-6 -17.6198503,-30.51848 17.6198533,-30.518478 35.2397037,2e-6 17.619851,30.518479 z"
                                                                      transform="matrix(1.1191385,0,0,1.1284347,12.867983,996.50622)"></path>
                                                            </g>
                                                        </svg>
									<span class="service-icon">
									<i class="fa fa-pencil"></i>								</span>
                                                    </div>

                                                    <div class="content">
                                                        <h4 class="service-title">
                                                            Design </h4>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                            Aenean ipsum enim.</p>
                                                    </div>
                                                </div>
                                                <div class="service clearfix columns2">

                                                    <div class="svg-container service-icon-svg">

                                                        <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                                             viewBox="0 0 80 70">
                                                            <g transform="translate(0,-982.3622)">
                                                                <path d="m 41.863512,49.0007 -35.2397037,-2e-6 -17.6198503,-30.51848 17.6198533,-30.518478 35.2397037,2e-6 17.619851,30.518479 z"
                                                                      transform="matrix(1.1191385,0,0,1.1284347,12.867983,996.50622)"></path>
                                                            </g>
                                                        </svg>
									<span class="service-icon">
									<i class="fa fa-globe"></i>								</span>
                                                    </div>

                                                    <div class="content">
                                                        <h4 class="service-title">
                                                            Global coverage </h4>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                            Aenean ipsum enim.</p>
                                                    </div>
                                                </div>
                                                <div class="service clearfix columns2">

                                                    <div class="svg-container service-icon-svg">

                                                        <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                                             viewBox="0 0 80 70">
                                                            <g transform="translate(0,-982.3622)">
                                                                <path d="m 41.863512,49.0007 -35.2397037,-2e-6 -17.6198503,-30.51848 17.6198533,-30.518478 35.2397037,2e-6 17.619851,30.518479 z"
                                                                      transform="matrix(1.1191385,0,0,1.1284347,12.867983,996.50622)"></path>
                                                            </g>
                                                        </svg>
									<span class="service-icon">
									<i class="fa fa-coffee"></i>								</span>
                                                    </div>

                                                    <div class="content">
                                                        <h4 class="service-title">
                                                            Free coffee </h4>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                            Aenean ipsum enim.</p>
                                                    </div>
                                                </div>
                                                <div class="service clearfix columns2">

                                                    <div class="svg-container service-icon-svg">

                                                        <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                                             viewBox="0 0 80 70">
                                                            <g transform="translate(0,-982.3622)">
                                                                <path d="m 41.863512,49.0007 -35.2397037,-2e-6 -17.6198503,-30.51848 17.6198533,-30.518478 35.2397037,2e-6 17.619851,30.518479 z"
                                                                      transform="matrix(1.1191385,0,0,1.1284347,12.867983,996.50622)"></path>
                                                            </g>
                                                        </svg>
									<span class="service-icon">
									<i class="fa fa-cogs"></i>								</span>
                                                    </div>

                                                    <div class="content">
                                                        <h4 class="service-title">
                                                            Development </h4>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                            Aenean ipsum enim.</p>
                                                    </div>
                                                </div>
                                            </div>

                                            <a href="http://demo.athemes.com/perth/#pg-220-5"
                                               class="button more-button">
                                                See some projects </a>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="panel-grid" id="pg-220-12">
                            <div class="siteorigin-panels-stretch perth-stretch panel-row-style"
                                 style="padding: 100px 80px; margin-left: -80px; margin-right: -80px; border-left-width: 0px; border-right-width: 0px; background-color: rgb(242, 242, 242);"
                                 data-stretch-type="full">
                                <div class="panel-grid-cell" id="pgc-220-12-0">
                                    <div class="so-panel widget widget_perth_clients perth_clients_widget panel-first-child panel-last-child"
                                         id="panel-220-12-0-0">
                                        <h3 class="widget-title">Our clients</h3>
                                        <div class="clients-area">
                                            <div class="client-item">
                                                <img width="88" height="90" src="easyads_files/5.png"
                                                     class="attachment-perth-client-thumb wp-post-image" alt="5"></div>
                                            <div class="client-item">
                                                <img width="123" height="90" src="easyads_files/2.png"
                                                     class="attachment-perth-client-thumb wp-post-image" alt="2"></div>
                                            <div class="client-item">
                                                <img width="149" height="90" src="easyads_files/4.png"
                                                     class="attachment-perth-client-thumb wp-post-image" alt="4"></div>
                                            <div class="client-item">
                                                <a target="_blank" href="http://google.com/"><img width="87" height="90"
                                                                                                  src="easyads_files/3.png"
                                                                                                  class="attachment-post-thumbnail wp-post-image"
                                                                                                  alt="3"></a>
                                            </div>
                                        </div>


                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main><!-- #main -->
            </div><!-- #primary -->

        </div>
    </div><!-- #content -->

    <a class="go-top"><i class="fa fa-angle-up"></i></a>


    <footer id="colophon" class="site-footer clearfix" role="contentinfo">

        <div class="footer-area">
            <div class="footer-branding">
                <h1 class="site-title"><a href="file:///Users/alex/Downloads/Perth_files/Perth.html"
                                          rel="home">Perth</a></h1>
            </div>


            <div id="sidebar-footer" class="footer-widgets clearfix" role="complementary">
                <div class="footer-column col-md-6 col-sm-6">
                    <aside id="text-2" class="widget widget_text"><h4 class="widget-title">About</h4>
                        <div class="textwidget">Perth is a business theme suitable for both companies and freelancers.
                            Easily create an strong online presence by taking advantage of the many construction blocks
                            available in Perth, like services, employees, skill, social and much more. Also, Perth
                            provides an extensive set of options, including color and font control.
                        </div>
                    </aside>
                </div>

                <div class="footer-column col-md-6 col-sm-6">
                    <aside id="perth_contact_info-2" class="widget perth_contact_info_widget"><h4 class="widget-title">
                            Get in touch</h4>
                        <div class="contact-address"><span><i class="fa fa-home"></i></span>15th St New York, NY 10011
                        </div>
                        <div class="contact-phone"><span><i class="fa fa-phone"></i></span>+999 111 222</div>
                        <div class="contact-email"><span><i class="fa fa-envelope"></i></span><a
                                    href="mailto:office@perth.com">office@perth.com</a></div>
                    </aside>
                </div>

            </div>
        </div>

        <div class="site-info container">
            <a href="http://wordpress.org/">Proudly powered by WordPress</a>
            <span class="sep"> | </span>
            Theme: <a href="http://athemes.com/theme/perth" rel="designer">Perth</a> by aThemes.
        </div><!-- .site-info -->
    </footer>


</div><!-- #page -->

<script type="text/javascript" src="easyads_files/jquery.form.min.js"></script>
<script type="text/javascript">
    /* <![CDATA[ */
    var _wpcf7 = {
        "loaderUrl": "http:\/\/demo.athemes.com\/perth\/wp-content\/plugins\/contact-form-7\/images\/ajax-loader.gif",
        "sending": "Sending ..."
    };
    /* ]]> */
</script>
<script type="text/javascript" src="easyads_files/scripts.js"></script>
<script type="text/javascript">
    /* <![CDATA[ */
    var wc_add_to_cart_params = {
        "ajax_url": "\/perth\/wp-admin\/admin-ajax.php",
        "wc_ajax_url": "\/perth\/?wc-ajax=%%endpoint%%",
        "i18n_view_cart": "View Cart",
        "cart_url": "",
        "is_cart": "",
        "cart_redirect_after_add": "no"
    };
    /* ]]> */
</script>
<script type="text/javascript" src="easyads_files/add-to-cart.min.js"></script>
<script type="text/javascript" src="easyads_files/select2.min.js"></script>
<script type="text/javascript" src="easyads_files/jquery.blockUI.min.js"></script>
<script type="text/javascript">
    /* <![CDATA[ */
    var woocommerce_params = {
        "ajax_url": "\/perth\/wp-admin\/admin-ajax.php",
        "wc_ajax_url": "\/perth\/?wc-ajax=%%endpoint%%"
    };
    /* ]]> */
</script>
<script type="text/javascript" src="easyads_files/woocommerce.min.js"></script>
<script type="text/javascript" src="easyads_files/jquery.cookie.min.js"></script>
<script type="text/javascript">
    /* <![CDATA[ */
    var wc_cart_fragments_params = {
        "ajax_url": "\/perth\/wp-admin\/admin-ajax.php",
        "wc_ajax_url": "\/perth\/?wc-ajax=%%endpoint%%",
        "fragment_name": "wc_fragments"
    };
    /* ]]> */
</script>
<script type="text/javascript" src="easyads_files/cart-fragments.min.js"></script>
<script type="text/javascript" src="easyads_files/scripts(1).js"></script>
<script type="text/javascript" src="easyads_files/main.min.js"></script>
<script type="text/javascript" src="easyads_files/skip-link-focus-fix.js"></script>
<script type="text/javascript" src="easyads_files/comment-reply.min.js"></script>
<script type="text/javascript">
    /* <![CDATA[ */
    var panelsStyles = {"fullContainer": "body"};
    /* ]]> */
</script>
<script type="text/javascript" src="easyads_files/styling.min.js"></script>

<script type="text/javascript">window.NREUM || (NREUM = {});
    NREUM.info = {
        "beacon": "bam.nr-data.net",
        "licenseKey": "ae0508e4dc",
        "applicationID": "14215640",
        "transactionName": "blxVZEVVV0JQBk0IW1cWdlNDXVZfHhVYBlFmX0VfWUAUQVACXA==",
        "queueTime": 0,
        "applicationTime": 147,
        "atts": "QhtWEg1PREw=",
        "errorBeacon": "bam.nr-data.net",
        "agent": "js-agent.newrelic.com\/nr-768.min.js"
    }</script>

</body>
</html>