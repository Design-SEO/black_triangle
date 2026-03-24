<?php
require_once rtrim($_SERVER['DOCUMENT_ROOT'], '/') . '/assets/php/bootstrap.php';
$pageSlug = detectPageSlug(__FILE__);
?>
<!DOCTYPE html>
<html lang="<?php echo getLang('locale_lang') ?>">

    <head>
        <meta charset="utf-8" />
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <!-- Search Engine Optimization by Rank Math PRO - https://rankmath.com/ -->
        <?php generateMetaTags($pageSlug); ?>
        <?php generateHreflangTags(); ?>
        <?php generateJsonLd($pageSlug); ?>
        <link href="/assets/css/all.css?v1.1" media="all" rel="stylesheet" />
        <link href="/assets/css/privacy.css" media="all" rel="stylesheet" />
        <link href="/assets/images/cropped-Favicon-32x32.png" rel="icon" sizes="32x32" />
        <link href="/assets/images/cropped-Favicon-192x192.png" rel="icon" sizes="192x192" />
        <link href="/assets/images/cropped-Favicon-180x180.png" rel="apple-touch-icon" />
    </head>

    <body
        class="privacy-policy page-template-default page page-id-3 wp-custom-logo wp-embed-responsive slideout-enabled slideout-mobile sticky-menu-fade no-sidebar nav-float-right one-container header-aligned-left dropdown-hover full-width-content"
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
                                    <li class="menu-item menu-item-type-post_type menu-item-object-page  menu-item-55" id="menu-item-55"><a
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
        <div class="site grid-container container hfeed" id="page">
            <div class="site-content" id="content">
                <div class="content-area" id="primary">
                    <main class="site-main" id="main">
                        <article class="post-3 page type-page status-publish" id="post-3" itemscope="" itemtype="https://schema.org/CreativeWork">
                            <div class="inside-article">
                                <div class="entry-content" itemprop="text">
                                    <div class="gb-container gb-container-1c481f09">
                                        <div class="gb-container gb-container-6348d731">
                                            <h1 class="gb-headline gb-headline-254b67fd gb-headline-text"><strong>
                                                    <?php echo getLang('privacy') ?></strong></h1>
                                        </div>
                                    </div>
                                    <div class="gb-container gb-container-ca869219">
                                        <div class="gb-container gb-container-4160cb6f">
                                            <?php echo getLang('privacy_content') ?>
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