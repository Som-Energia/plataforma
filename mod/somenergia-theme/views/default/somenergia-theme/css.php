<?php
/**
 * CSS Aalborg theme
 *
 * @package AalborgTheme
 * @subpackage UI
 */
?>
/* <style> /**/

    body {
        background-color: #FFF;
    }

h1, h2, h3, h4, h5, h6 {
    font-weight: bold;
    color: #87A300;
    line-height: 1.1em;
    padding-bottom: 5px;
}
    /* ***************************************
            MISC
    *****************************************/
    #dashboard-info {
        border: 1px solid #DCDCDC;
        margin: 0 10px 15px;
    }
    .elgg-sidebar input[type=text],
    .elgg-sidebar input[type=number],
    .elgg-sidebar input[type=password] {
        box-shadow: inset 0 2px 6px rgba(0, 0, 0, 0.1);
    }
    .elgg-module .elgg-list-river {
        border-top: none;
    }
    .elgg-module > .elgg-body > .elgg-list, /* margin for group modules */
    .elgg-module .elgg-widget-content > .elgg-list { /* margin for profile and dashboard widgets */
        margin-top: 0;
    }
    /* ***************************************
            TOPBAR MENU DROPDOWN
    *****************************************/
    .elgg-topbar-dropdown {
        padding-bottom: 8px; /* forces button to reach bottom of topbar */
    }
    .elgg-menu-topbar > li > .elgg-topbar-dropdown:hover {
        color: #EEE;
        cursor: default;
    }
    .elgg-menu-topbar-alt ul {
        position: absolute;
        display: none;
        background-color: #FFF;
        border: 1px solid #DEDEDE;
        text-align: left;
        top: 33px;
        margin-left: -100px;
        width: 180px;

        border-radius: 0 0 3px 3px;
        box-shadow: 1px 3px 5px rgba(0, 0, 0, 0.25);
    }
    .elgg-menu-topbar-alt li ul > li > a {
        text-decoration: none;
        padding: 10px 20px;
        background-color: #FFF;
        color: #444;
    }
    .elgg-menu-topbar-alt li ul > li > a:hover {
        background-color: #F0F0F0;
        color: #444;
    }
    .elgg-menu-topbar-alt > li:hover > ul {
        display: block;
    }
    .elgg-menu-item-account > a:after {
        content: "\bb";
        margin-left: 6px;
    }
    /* ***************************************
            ICONS
    *****************************************/
    .elgg-icon-hover-menu-hover,
    .elgg-icon-hover-menu,
    .elgg-icon-hover-menu:hover,
    :focus > .elgg-icon-hover-menu {
        width: 100%;
        height: 100%;
    }
    .elgg-icon-hover-menu-hover:before,
    .elgg-icon-hover-menu:before {
        position: absolute;
        bottom: 0;
        right: 0;
    }
    /* ***************************************
            RESPONSIVE
    *****************************************/
    html {
        font-size: 100%;
        -webkit-text-size-adjust: 100%;
        -ms-text-size-adjust: 100%;
    }
    .elgg-button-nav {
        display: none;
        font-family: Arial, "Helvetica Neue", Helvetica, sans-serif;
        color: #FFF;
        float: left;
        padding: 10px 18px;
    }
    .elgg-button-nav:hover {
        color: #FFF;
        text-decoration: none;
        background-color: #60B8F7;
    }
    .elgg-button-nav .elgg-icon-bars {
        font-size: 18px;
        color: #fff;
        vertical-align: middle;
    }
    @media (max-width: 1030px) {
        .elgg-menu-topbar-default > li:first-child a {
            margin-left: 0;
        }
        .elgg-menu-topbar-alt > li > a.elgg-topbar-dropdown {
            margin-right: 0;
        }
        .elgg-page-footer {
            padding: 0 20px;
        }
    }
    @media (max-width: 820px) {
        .elgg-page-default {
            min-width: 0;
        }
        .elgg-page-body {
            padding: 0;
        }
        .elgg-main {
            padding: 12px 20px 10px;

            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
        }
        .elgg-layout-one-sidebar .elgg-main,
        .elgg-layout-two-sidebar .elgg-main {
            width: 100%;
        }
        .elgg-sidebar {
            border-left: none;
            border-top: 1px solid #DCDCDC;
            border-bottom: 1px solid #DCDCDC;
            background-color: #FAFAFA;
            width: 100%;
            float: left;
            padding: 27px 20px 20px;
            box-shadow: 0 3px 6px rgba(0, 0, 0, 0.05) inset;

            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
        }
        .elgg-sidebar-alt {
            display: none;
        }
        .elgg-page-default .elgg-page-footer > .elgg-inner {
            border-top: none;
        }
        .elgg-menu-footer {
            float: none;
            text-align: center;
        }
        .elgg-menu-page,
        .elgg-sidebar .elgg-menu-owner-block,
        .elgg-menu-groups-my-status {
            border-bottom: 1px solid #DCDCDC;
        }
        .elgg-menu-page a,
        .elgg-sidebar .elgg-menu-owner-block li a,
        .elgg-menu-groups-my-status li a {
            border-color: #DCDCDC;
            border-style: solid;
            border-width: 1px 1px 0 1px;
            margin: 0;
            padding: 10px;
            background-color: #FFFFFF;
            color: #87A300;
        }
        .elgg-menu-page a:hover,
        .elgg-sidebar .elgg-menu-owner-block li a:hover,
        .elgg-menu-groups-my-status li a:hover,
        .elgg-menu-page li.elgg-state-selected > a,
        .elgg-sidebar .elgg-menu-owner-block li.elgg-state-selected > a,
        .elgg-menu-groups-my-status li.elgg-state-selected > a {
            color: #87A300;
            background-color: #F0F0F0;
            text-decoration: none;
        }
        .elgg-river-item input[type=text] {
            width: 100%;
        }
        .elgg-river-item input[type=submit] {
            margin: 5px 0 0 0;
        }
        /***** CUSTOM INDEX ******/
        .elgg-col-1of2 {
            float: none;
            width: 100%;
        }
        .prl {
            padding-right: 0;
        }
        /***** WIDGETS ******/
        .elgg-col-1of3,
        .elgg-col-2of3,
        #elgg-widget-col-1,
        #elgg-widget-col-2,
        #elgg-widget-col-3 {
            float: none;
            min-height: 0 !important;
            width: 100%;
        }
        .elgg-module-widget {
            margin: 0 0 15px;
        }
        .custom-index-col1 > .elgg-inner,
        .custom-index-col2 > .elgg-inner {
            padding: 0;
        }
        #dashboard-info {
            margin: 0 0 15px;
        }
    }
    @media (min-width: 767px) {
        .elgg-nav-collapse {
            display: block !important;
        }
    }
    @media (max-width: 766px) {
        .elgg-page-header > .elgg-inner h1 {
            padding-top: 10px;
        }
        .elgg-heading-site, .elgg-heading-site:hover {
            font-size: 1.6em;
        }
        .elgg-button-nav {
            cursor: pointer;
            display: block;
        }
        .elgg-nav-collapse {
            clear: both;
            display: none;
            width: 100%;
        }
        #login-dropdown a {
            padding: 10px 18px;
        }
        .elgg-menu-site {
            float: none;
        }
        .elgg-menu-site > li > ul {
            position: static;
            display: block;
            left: 0;
            margin-left: 0;
            border: none;
            box-shadow: none;
            background: none;
        }
        .elgg-more,
        .elgg-menu-site-more li,
        .elgg-menu-site > li > ul {
            width: auto;
        }
        .elgg-menu-site ul li {
            float: none;
            margin: 0;
        }
        .elgg-more > a {
            border-bottom: 1px solid #294E6B;
        }
        .elgg-menu-site > li {
            border-top: 1px solid #294E6B;
            clear: both;
            float: none;
            margin: 0;
        }
        .elgg-menu-site > li:first-child {
            border-top: none;
        }
        .elgg-menu-site > li > a {
            padding: 10px 18px;
        }
        .elgg-menu-site-more > li > a {
            color: #FFF;
            background: none;
            padding: 10px 18px 10px 30px;
        }
        .elgg-menu-site-more > li:last-child > a,
        .elgg-menu-site-more > li:last-child > a:hover {
            border-radius: 0;
        }
        .elgg-menu-site-more > li.elgg-state-selected > a,
        .elgg-menu-site-more > li > a:hover {
            background-color: #60B8F7;
            color: #FFF;
        }
    }
    @media (max-width: 600px) {
        .groups-profile-fields {
            float: left;
            padding-left: 0;
        }
        #profile-owner-block {
            border-right: none;
            width: auto;
        }
        #profile-details {
            display: block;
            float: left;
        }
        #groups-tools > li {
            width: 100%;
            margin-bottom: 20px;
        }
        #groups-tools > li:nth-child(odd) {
            margin-right: 0;
        }
        #groups-tools > li:last-child {
            margin-bottom: 0;
        }
        .elgg-menu-entity, .elgg-menu-annotation {
            margin-left: 0;
        }
        .elgg-menu-entity > li, .elgg-menu-annotation > li {
            margin-left: 0;
            margin-right: 15px;
        }
        .elgg-subtext {
            float: left;
            margin-right: 15px;
        }
    }

    @media (min-width: 1280px) {
        .elgg-page-default .elgg-page-navbar > .elgg-inner {
                box-sizing: border-box;
                margin: auto;
                padding: 0 15px;
                width: 990px;;
        }
    }
    
    
    .som-header {
        position: relative;
    }


    .som-header-site {

    }


    .som-header-site img {
        margin-top: 10px;
        float: left;
    }


    .som-header-description {
        margin-left: 105px;
        padding-top: 10px;
    }
    
    .som-header-tag {
        background-color: #BAC92A;
        border-radius: 3px;
        color: white;
        display: inline-block;
        font-size: 10px;
        font-weight: 900;
        height: 15px;
        letter-spacing: 1px;
        line-height: 15px;
        padding: 0 4px;
    }
    
    .som-header-slogan {
        padding-top: 10px;
    }
   
    
    
    @media (max-width: 766px) {
        
        .som-header-slogan {
            display: none;
        }
        
    }


/***** TOP NAVIGATION ******/
.elgg-page-topnav {
    background-color: white;
    border-bottom: 1px solid #8E8D93;
    color: #808080;
    font-size: 12px;
    height: 26px;
    line-height: 26px;
    position: relative;
    z-index: 1;
}

.elgg-page-topnav a {
    color: #808080;
    text-decoration: none;
}

.elgg-page-topnav a:hover {
    color: #BAC92A;
}


.elgg-page-topnav .elgg-inner {
    box-sizing: border-box;
    margin: auto;
    padding: 0 10px 0 15px;
    width: 990px;
}

.elgg-page-topnav .elgg-inner .breadcrumbs,
.elgg-page-topnav .elgg-inner .breadcrumbs ul {
    border: 1px solid #B8B9BD;
    border-radius: 3px;
    display: inline-block;
    font-family: 'Roboto', sans-serif;
    font-size: inherit;
    font-weight: 300;
}

.elgg-page-topnav .elgg-inner .breadcrumbs {
    height: 18px;
    line-height: 18px;
    margin-left: 5px;
    padding: 0 8px;
    position: relative;
}

.elgg-page-topnav .elgg-inner .breadcrumbs:hover {

}

.elgg-page-topnav .elgg-inner .breadcrumbs ul {
    background-color: white;
    display: none;
    position: absolute;
    left: 0;
    min-width: 147px;
}

.elgg-page-topnav .elgg-inner .breadcrumbs:hover ul {
    display: block;
}

.elgg-page-topnav .elgg-inner .breadcrumbs ul li {
}

.elgg-page-topnav .elgg-inner .breadcrumbs ul li a {
    box-sizing: border-box;
    display: inline-block;
    height: 18px;
    line-height: 18px;
    padding: 0 8px;
    width: 100%;
}

.elgg-page-topnav .elgg-inner > div:first-of-type {
}

.elgg-page-topnav .elgg-inner > div:last-of-type {
    text-align: right;
    text-transform: uppercase;
}

.elgg-page-topnav .elgg-inner > div:last-of-type a:not(.social) {
    margin-right: 20px;
}

.elgg-page-topnav .elgg-inner > div:last-of-type a.social {
    display: inline-block;
    font-size: 12px;
    height: 12px;
    line-height: 12px;
    margin: 0 5px -2px 0;
    overflow: hidden;
    width: 12px;
}

.elgg-page-topnav label {
    font-weight: normal;
}



/***** SEARCH MENU ******/
.elgg-search input[type="text"] {
    width: 100%;
    width: 225px;
    height: 25px;
    -webkit-border-radius: 3px;
    -moz-border-radius: 3px;
    border-radius: 3px;
    border: 1px solid rgba(0, 0, 0, 0.25);
    color: #fff;
    font-size: 13px;
    font-weight: bold;
    padding: 3px 15px;
    background-color: rgba(0, 0, 0, 0.25);
}

/***** HEADER ******/

.elgg-search-header input[type="text"] {
    background-color: #c8c8c8 !important;
    border: none !important;
    font-size: 15px !important;
    font-weight: 500 !important;
    height: 25px !important;
    line-height: 25px;
    padding: 0 10px !important;
    position: absolute;
    right: 15px;
    top: 10px;
    width: 120px !important;
}

.elgg-search-header{
    margin-bottom:0px;
}

/***** MENU ******/

.elgg-menu-owner-block li a, .elgg-menu-page li a{
    display: block;
    -webkit-border-radius: 3px;
    -moz-border-radius: 3px;
    border-radius: 3px;
    border: 1px solid #bbb;
    padding: 5px 15px !important;
    margin: 1px 0;
    background: -webkit-linear-gradient(white, #BDBDBD);
    background: -o-linear-gradient(white, #BDBDBD);
    background: -moz-linear-gradient(white,#BDBDBD );
    background: linear-gradient(white, #BDBDBD);
    display: block;
    margin: 3px 0px 5px;
    color: rgb(68, 68, 68);
    color: #87A300;
}

.elgg-menu-owner-block li a:hover, .elgg-menu-page li a:hover {
    background: -webkit-linear-gradient(#657A00,#657A00);
    background: -o-linear-gradient(#657A00,#657A00);
    background: -moz-linear-gradient(#657A00,#657A00);
    background: linear-gradient(#657A00,#657A00);
    color: #FFF;
    text-decoration: none;
}

/***** GROUPS  ******/

.groups-stats {
    border: 1px solid #ccc;
    background: #eee;
    padding: 10px 15px;
    margin-top: 10px;
    -webkit-border-radius: 3px;
    -moz-border-radius: 3px;
    border-radius: 3px;
}

.elgg-module-info > .elgg-head {
    background: #eee;
    border: 1px solid #ccc;
    padding: 7px 15px;
    margin-bottom: 10px;
    -webkit-border-radius: 3px;
    -moz-border-radius: 3px;
    border-radius: 3px;
    color: #222;
}

.elgg-comments{
    margin-top: 30px;
}