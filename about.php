<?php
require_once rtrim($_SERVER['DOCUMENT_ROOT'], '/') . '/assets/php/bootstrap.php';
$pageSlug = detectPageSlug(__FILE__);
?>
<!DOCTYPE html>
<html lang="<?php echo getLang('locale_lang') ?>">

    <head>
        <meta charset="utf-8" />
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <?php generateMetaTags($pageSlug); ?>
        <?php generateHreflangTags(); ?>
        <?php generateJsonLd($pageSlug); ?>
        <link href="/assets/css/all.css?v1.1" media="all" rel="stylesheet" />
        <link href="/assets/css/about.css" media="all" rel="stylesheet" />
        <link href="/assets/images/cropped-Favicon-32x32.png" rel="icon" sizes="32x32" />
        <link href="/assets/images/cropped-Favicon-192x192.png" rel="icon" sizes="192x192" />
        <link href="/assets/images/cropped-Favicon-180x180.png" rel="apple-touch-icon" />
    </head>

    <body
        class="page-template-default page page-id-40 wp-custom-logo wp-embed-responsive slideout-enabled slideout-mobile sticky-menu-fade no-sidebar nav-float-right one-container header-aligned-left dropdown-hover full-width-content"
        itemscope="" itemtype="https://schema.org/WebPage">
        <div class="header-wrap">
            <header aria-label="Site" class="site-header has-inline-mobile-toggle" id="masthead" itemscope="" itemtype="https://schema.org/WPHeader">
                <div class="inside-header grid-container">
                    <div class="site-branding-container">
                        <div class="site-logo">
                            <a href="<?php echo getHref('') ?>" rel="home">
                                <img alt="Floventra" class="header-image is-logo-image" height="40" src="/assets/images/Logo-1.webp" srcset="/assets/images/Logo-1.webp 1x, /assets/images/Logo.webp 2x"
                                    width="41" />
                            </a>
                        </div>
                        <div class="site-branding">
                            <p class="main-title" itemprop="headline">
                                <a href="<?php echo getHref('') ?>" rel="home">Floventra</a>
                            </p>
                        </div>
                    </div>
                    <nav aria-label="Mobile Toggle" class="main-navigation mobile-menu-control-wrapper" id="mobile-menu-control-wrapper">
                        <button aria-controls="generate-slideout-menu" aria-expanded="false" class="menu-toggle" data-nav="site-navigation">
                            <span class="gp-icon icon-menu-bars">
                                <svg aria-hidden="true" height="1em" viewbox="0 0 512 512" width="1em" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M0 96c0-13.255 10.745-24 24-24h464c13.255 0 24 10.745 24 24s-10.745 24-24 24H24c-13.255 0-24-10.745-24-24zm0 160c0-13.255 10.745-24 24-24h464c13.255 0 24 10.745 24 24s-10.745 24-24 24H24c-13.255 0-24-10.745-24-24zm0 160c0-13.255 10.745-24 24-24h464c13.255 0 24 10.745 24 24s-10.745 24-24 24H24c-13.255 0-24-10.745-24-24z">
                                    </path>
                                </svg>
                                <svg aria-hidden="true" height="1em" viewbox="0 0 512 512" width="1em" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M71.029 71.029c9.373-9.372 24.569-9.372 33.942 0L256 222.059l151.029-151.03c9.373-9.372 24.569-9.372 33.942 0 9.372 9.373 9.372 24.569 0 33.942L289.941 256l151.03 151.029c9.372 9.373 9.372 24.569 0 33.942-9.373 9.372-24.569 9.372-33.942 0L256 289.941l-151.029 151.03c-9.373 9.372-24.569 9.372-33.942 0-9.372-9.373-9.372-24.569 0-33.942L222.059 256 71.029 104.971c-9.372-9.373-9.372-24.569 0-33.942z">
                                    </path>
                                </svg>
                            </span>
                            <span class="screen-reader-text">
                                <?php echo getLang('menu') ?>
                            </span>
                        </button>
                    </nav>
                    <nav aria-label="Primary" class="main-navigation sub-menu-right" id="site-navigation" itemscope="" itemtype="https://schema.org/SiteNavigationElement">
                        <div class="inside-navigation grid-container">
                            <div class="main-nav" id="primary-menu">
                                <ul class="menu sf-menu" id="menu-main-menu">
                                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home  page_item page-item-9  menu-item-56" id="menu-item-56"><a aria-current="page"
                                            href="<?php echo getHref('') ?>"><?php echo getLang('home') ?></a>
                                    </li>
                                    <li class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item current_page_item menu-item-55" id="menu-item-55"><a
                                            href="<?php echo getHref('about') ?>"><?php echo getLang('about') ?></a></li>
                                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-54" id="menu-item-54"><a
                                            href="<?php echo getHref('contact') ?>"><?php echo getLang('contact') ?></a>
                                    </li>

                                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-54" id="menu-item-54">

                                        <div id="lang-select" class="lang-select menu-call" data-open="false">
                                            <?php generateLanguageSelector() ?>
                                        </div>

                                    </li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                </div>
            </header>
        </div>
        <!-- .header-wrap -->
        <div class="site grid-container container hfeed" id="page">
            <div class="site-content" id="content">
                <div class="content-area" id="primary">
                    <main class="site-main" id="main">
                        <article class="post-40 page type-page status-publish" id="post-40" itemscope="" itemtype="https://schema.org/CreativeWork">
                            <div class="inside-article">
                                <div class="entry-content" itemprop="text">
                                    <div class="gb-container gb-container-fbeea37a">
                                        <div class="gb-container gb-container-5b1fcdce">
                                            <h1 class="gb-headline gb-headline-d59fb9a5 gb-headline-text">
                                                <?php echo getLang('about_h1') ?>
                                            </h1>
                                        </div>
                                    </div>
                                    <div class="gb-container gb-container-2d8a97f2">
                                        <div class="gb-container gb-container-38780113">
                                            <div class="gb-grid-wrapper gb-grid-wrapper-cf540534">
                                                <div class="gb-grid-column gb-grid-column-45167ad0">
                                                    <div class="gb-container gb-container-45167ad0">
                                                        <?php echo getLang('about_desc') ?>
                                                    </div>
                                                </div>
                                                <div class="gb-grid-column gb-grid-column-5a2a7fd2">
                                                    <div class="gb-container gb-container-5a2a7fd2" id="optInFormWrapper">
                                                        <h2 class="wp-block-heading has-base-3-color has-text-color has-link-color wp-elements-63d119116caabae4b91410315d44ffc2">
                                                            <?php echo getLang('about_form') ?>
                                                        </h2>

                                                        <div class="form-widget">
                                                            <div class="flex flex-column" id="opt-form">
                                                                <div data-intgrtn-form-signup-3-steps="">
                                                                    <?php
                                                                    $country = $clientCountryCode;
                                                                    $phonecode = $clientCountryCode;
                                                                    $submit = '';
                                                                    $language = getLang('language_iso');
                                                                    $offer = getLang('brand_name_api');
                                                                    include rtrim($_SERVER['DOCUMENT_ROOT'], '/') . "/form_crypto_hyper/form_js_thanks.php"; ?>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="gb-grid-column gb-grid-column-6ebdc941">
                                                    <div class="gb-container gb-container-6ebdc941">
                                                        <a class="gb-button gb-button-78322966" href="<?php echo getHref('') ?>#optInFormWrapper"><span
                                                                class="gb-button-text"><?php echo getLang('about_gain_access') ?></span><span class="gb-icon"><svg aria-hidden="true" height="1em"
                                                                    role="img" viewbox="0 0 256 512" width="1em" xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M224.3 273l-136 136c-9.4 9.4-24.6 9.4-33.9 0l-22.6-22.6c-9.4-9.4-9.4-24.6 0-33.9l96.4-96.4-96.4-96.4c-9.4-9.4-9.4-24.6 0-33.9L54.3 103c9.4-9.4 24.6-9.4 33.9 0l136 136c9.5 9.4 9.5 24.6.1 34z"
                                                                        fill="currentColor"></path>
                                                                </svg></span></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="gb-container gb-container-c4d4dfeb">
                                        <div class="gb-container gb-container-73b1975d"></div>
                                        <div class="gb-container gb-container-0b4c2309">
                                            <?php echo getLang('about_benefits') ?>
                                        </div>
                                    </div>
                                    <div class="gb-container gb-container-40fea2ef">
                                        <div class="gb-container gb-container-3038a48c">
                                            <a class="gb-button gb-button-f0d581a3" href="<?php echo getHref('') ?>#optInFormWrapper"><span
                                                    class="gb-button-text"><strong><?php echo getLang('about_test') ?></strong></span><span class="gb-icon"><svg aria-hidden="true" height="1em"
                                                        role="img" viewbox="0 0 256 512" width="1em" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M224.3 273l-136 136c-9.4 9.4-24.6 9.4-33.9 0l-22.6-22.6c-9.4-9.4-9.4-24.6 0-33.9l96.4-96.4-96.4-96.4c-9.4-9.4-9.4-24.6 0-33.9L54.3 103c9.4-9.4 24.6-9.4 33.9 0l136 136c9.5 9.4 9.5 24.6.1 34z"
                                                            fill="currentColor"></path>
                                                    </svg></span></a>
                                        </div>
                                    </div>
                                    <div class="gb-container gb-container-efc5a619">
                                        <div class="gb-container gb-container-6922871d">
                                            <div class="gb-grid-wrapper gb-grid-wrapper-d03dbdb9">
                                                <div class="gb-grid-column gb-grid-column-afeb71e7">
                                                    <div class="gb-container gb-container-afeb71e7">
                                                        <div class="gb-container gb-container-814c886f">
                                                            <span class="gb-button gb-button-fc7a35d4"><span class="gb-icon"><svg fill="none" height="15" viewbox="0 0 15 15" width="15"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <path clip-rule="evenodd"
                                                                            d="M4 1.5V4H1.5A1.5 1.5 0 000 5.5v8A1.5 1.5 0 001.5 15h8a1.5 1.5 0 001.5-1.5V11h2.5A1.5 1.5 0 0015 9.5v-8A1.5 1.5 0 0013.5 0h-8A1.5 1.5 0 004 1.5zM5.5 1a.5.5 0 00-.5.5V4h4.5A1.5 1.5 0 0111 5.5V10h2.5a.5.5 0 00.5-.5v-8a.5.5 0 00-.5-.5h-8zm0 10A1.5 1.5 0 014 9.5V5H1.5a.5.5 0 00-.5.5v8a.5.5 0 00.5.5h8a.5.5 0 00.5-.5V11H5.5z"
                                                                            fill="currentColor" fill-rule="evenodd"></path>
                                                                    </svg></span></span>
                                                        </div>
                                                        <?php echo getLang('about_software') ?>
                                                    </div>
                                                </div>
                                                <div class="gb-grid-column gb-grid-column-a3706549">
                                                    <div class="gb-container gb-container-a3706549">
                                                        <div class="gb-container gb-container-b9196981">
                                                            <span class="gb-button gb-button-1b5ec984"><span class="gb-icon"><svg fill="none" height="15" viewbox="0 0 15 15" width="15"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <path clip-rule="evenodd"
                                                                            d="M4 4V1.5A1.5 1.5 0 015.5 0h8A1.5 1.5 0 0115 1.5v8a1.5 1.5 0 01-1.5 1.5H11v2.5A1.5 1.5 0 019.5 15h-8A1.5 1.5 0 010 13.5v-8A1.5 1.5 0 011.5 4H4zm6 1v5H5V5h5z"
                                                                            fill="currentColor" fill-rule="evenodd"></path>
                                                                    </svg></span></span>
                                                        </div>
                                                        <?php echo getLang('about_review') ?>
                                                    </div>
                                                </div>
                                                <div class="gb-grid-column gb-grid-column-c2b10619">
                                                    <div class="gb-container gb-container-c2b10619">
                                                        <div class="gb-container gb-container-d6c96e18">
                                                            <span class="gb-button gb-button-4b6c3ee3"><span class="gb-icon"><svg fill="none" height="15" viewbox="0 0 15 15" width="15"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <path clip-rule="evenodd"
                                                                            d="M4 4H1.5A1.5 1.5 0 000 5.5v8A1.5 1.5 0 001.5 15h8a1.5 1.5 0 001.5-1.5V11h2.5A1.5 1.5 0 0015 9.5v-8A1.5 1.5 0 0013.5 0h-8A1.5 1.5 0 004 1.5V4zm1-2.5a.5.5 0 01.5-.5h8a.5.5 0 01.5.5v8a.5.5 0 01-.5.5h-8a.5.5 0 01-.5-.5v-8z"
                                                                            fill="currentColor" fill-rule="evenodd"></path>
                                                                    </svg></span></span>
                                                        </div>
                                                        <?php echo getLang('about_dragons') ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="gb-container gb-container-69cd24f3">
                                        <div class="gb-container gb-container-f7e4dcf9">
                                            <p class="gb-headline gb-headline-5d41bc12 gb-headline-text">
                                                <strong><?php echo getLang('about_opportunities') ?></strong>
                                            </p>
                                            <a class="gb-button gb-button-528fb47d" href="<?php echo getHref('') ?>#optInFormWrapper"><span class="gb-button-text">SAFE SIGN-UP</span><span
                                                    class="gb-icon"><svg aria-hidden="true" height="1em" role="img" viewbox="0 0 256 512" width="1em" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M224.3 273l-136 136c-9.4 9.4-24.6 9.4-33.9 0l-22.6-22.6c-9.4-9.4-9.4-24.6 0-33.9l96.4-96.4-96.4-96.4c-9.4-9.4-9.4-24.6 0-33.9L54.3 103c9.4-9.4 24.6-9.4 33.9 0l136 136c9.5 9.4 9.5 24.6.1 34z"
                                                            fill="currentColor"></path>
                                                    </svg></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </main>
                </div>
            </div>
        </div>

        <div class="site-footer">
            <div class="gb-container gb-container-2d44af45">
                <div class="gb-container gb-container-cce1d5b7">
                    <div class="gb-container gb-container-23cbae5d">
                        <nav aria-label="Navigation"
                            class="is-responsive items-justified-center wp-block-navigation is-content-justification-center is-layout-flex wp-container-core-navigation-is-layout-1 wp-block-navigation-is-layout-flex"
                            data-wp-context='{"overlayOpenedBy":{"click":false,"hover":false,"focus":false},"type":"overlay","roleAttribute":"","ariaLabel":"Menu"}'
                            data-wp-interactive="core/navigation">
                            <button aria-haspopup="dialog" aria-label="Open menu" class="wp-block-navigation__responsive-container-open" data-wp-on--keydown="actions.handleMenuKeydown"
                                data-wp-on-async--click="actions.openMenuOnClick">
                                <svg aria-hidden="true" focusable="false" height="24" viewbox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                                    <rect height="1.5" width="16" x="4" y="7.5"></rect>
                                    <rect height="1.5" width="16" x="4" y="15"></rect>
                                </svg>
                            </button>
                            <div class="wp-block-navigation__responsive-container" data-wp-class--has-modal-open="state.isMenuOpen" data-wp-class--is-menu-open="state.isMenuOpen"
                                data-wp-on--keydown="actions.handleMenuKeydown" data-wp-on-async--focusout="actions.handleMenuFocusout" data-wp-watch="callbacks.initMenu" id="modal-1" tabindex="-1">
                                <div class="wp-block-navigation__responsive-close" tabindex="-1">
                                    <div class="wp-block-navigation__responsive-dialog" data-wp-bind--aria-label="state.ariaLabel" data-wp-bind--aria-modal="state.ariaModal"
                                        data-wp-bind--role="state.roleAttribute">
                                        <button aria-label="Close menu" class="wp-block-navigation__responsive-container-close" data-wp-on-async--click="actions.closeMenuOnClick">
                                            <svg aria-hidden="true" focusable="false" height="24" viewbox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M13 11.8l6.1-6.3-1-1-6.1 6.2-6.1-6.2-1 1 6.1 6.3-6.5 6.7 1 1 6.5-6.6 6.5 6.6 1-1z"></path>
                                            </svg>
                                        </button>
                                        <div class="wp-block-navigation__responsive-container-content" data-wp-watch="callbacks.focusFirstElement" id="modal-1-content">
                                            <ul class="wp-block-navigation__container is-responsive items-justified-center wp-block-navigation">
                                                <li class="wp-block-navigation-item current-menu-item wp-block-navigation-link">
                                                    <a aria-current="page" class="wp-block-navigation-item__content" href="<?php echo getHref('') ?>"><span
                                                            class="wp-block-navigation-item__label"><?php echo getLang('home') ?></span></a>
                                                </li>
                                                <li class="wp-block-navigation-item wp-block-navigation-link"><a class="wp-block-navigation-item__content" href="<?php echo getHref('about') ?>"><span
                                                            class="wp-block-navigation-item__label"><?php echo getLang('about') ?></span></a></li>
                                                <li class="wp-block-navigation-item wp-block-navigation-link"><a class="wp-block-navigation-item__content" href="<?php echo getHref('contact') ?>"><span
                                                            class="wp-block-navigation-item__label"><?php echo getLang('contact') ?></span></a>
                                                </li>
                                                <li class="wp-block-navigation-item wp-block-navigation-link"><a class="wp-block-navigation-item__content" href="<?php echo getHref('privacy') ?>"><span
                                                            class="wp-block-navigation-item__label"><?php echo getLang('privacy') ?></span></a>
                                                </li>
                                                <li class="wp-block-navigation-item wp-block-navigation-link"><a class="wp-block-navigation-item__content" href="<?php echo getHref('terms') ?>"><span
                                                            class="wp-block-navigation-item__label"><?php echo getLang('terms') ?></span></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </nav>
                    </div>
                    <div class="gb-container gb-container-87f9bb0e">
                        <div class="gb-grid-wrapper gb-grid-wrapper-f9393e36">
                            <div class="gb-grid-column gb-grid-column-efc0678d">
                                <div class="gb-container gb-container-efc0678d">
                                    <p class="has-text-color" style="color:#8694ad;font-size:12px;font-style:normal;font-weight:600"><?php echo getLang('footer_text') ?></p>
                                </div>
                            </div>

                            <div class="gb-grid-column gb-grid-column-4ace9518">
                                <div class="gb-container gb-container-4ace9518">
                                    <p class="gb-headline gb-headline-8bd21bee gb-headline-text"><a href="mailto:info@floventra.org">info@floventra.org</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <footer aria-label="Site" class="site-info">
                <div class="inside-site-info grid-container">
                    <div class="copyright-bar">
                        ©
                        <script>document.write(new Date().getFullYear())</script> Floventra
                    </div>
                </div>
            </footer>
        </div>

        <nav class="main-navigation slideout-navigation do-overlay offside offside--left" id="generate-slideout-menu" itemscope="" itemtype="https://schema.org/SiteNavigationElement">
            <div class="inside-navigation grid-container grid-parent">
                <button class="slideout-exit has-svg-icon">
                    <span class="gp-icon pro-close">
                        <svg aria-hidden="true" height="1em" role="img" version="1.1" viewBox="0 0 512 512" width="1em" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <path
                                d="M71.029 71.029c9.373-9.372 24.569-9.372 33.942 0L256 222.059l151.029-151.03c9.373-9.372 24.569-9.372 33.942 0 9.372 9.373 9.372 24.569 0 33.942L289.941 256l151.03 151.029c9.372 9.373 9.372 24.569 0 33.942-9.373 9.372-24.569 9.372-33.942 0L256 289.941l-151.029 151.03c-9.373 9.372-24.569 9.372-33.942 0-9.372-9.373-9.372-24.569 0-33.942L222.059 256 71.029 104.971c-9.372-9.373-9.372-24.569 0-33.942z">
                            </path>
                        </svg>
                    </span>
                    <span class="screen-reader-text">Close</span>
                </button>
                <div class="main-nav">
                    <ul class="slideout-menu" id="menu-main-menu-1">
                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home menu-item-56"><a href="<?php echo getHref('') ?>"><?php echo getLang('home') ?></a></li>
                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-55"><a href="<?php echo getHref('about') ?>"><?php echo getLang('about') ?></a></li>
                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-54"><a href="<?php echo getHref('contact') ?>"><?php echo getLang('contact') ?></a></li>
                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-54">
                            <div id="lang-select" style="margin: auto;" class="lang-select menu-call" data-open="false">
                                <?php generateLanguageSelector() ?>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <script defer src="/assets/js/accordion.js"></script>
    </body>

</html>
