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
        <link href="/assets/images/cropped-Favicon-32x32.png" rel="icon" sizes="32x32" />
        <link href="/assets/images/cropped-Favicon-192x192.png" rel="icon" sizes="192x192" />
        <link href="/assets/images/cropped-Favicon-180x180.png" rel="apple-touch-icon" />
    </head>

    <body
        class="home page-template-default page page-id-9 wp-custom-logo wp-embed-responsive slideout-enabled slideout-mobile sticky-menu-fade no-sidebar nav-float-right one-container header-aligned-left dropdown-hover full-width-content"
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
                                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-9 current_page_item menu-item-56"
                                        id="menu-item-56"><a aria-current="page" href="<?php echo getHref('') ?>"><?php echo getLang('home') ?></a>
                                    </li>
                                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-55" id="menu-item-55"><a
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
                        <article class="post-9 page type-page status-publish" id="post-9" itemscope="" itemtype="https://schema.org/CreativeWork">
                            <div class="inside-article">
                                <div class="entry-content" itemprop="text">
                                    <div class="gb-container gb-container-6a335d2d">
                                        <div class="gb-container gb-container-fb2d0698">
                                            <div class="gb-grid-wrapper gb-grid-wrapper-68df7b60">
                                                <div class="gb-grid-column gb-grid-column-7c04d6ad">
                                                    <div class="gb-container gb-container-7c04d6ad">
                                                        <h1 class="gb-headline gb-headline-43e9b821 gb-headline-text">
                                                            <?php echo getLang('index_h1') ?>
                                                        </h1>
                                                    </div>
                                                </div>
                                                <div class="gb-grid-column gb-grid-column-6a1f56c8" id="optInFormWrapper">
                                                    <div class="gb-container gb-container-6a1f56c8">
                                                        <p class="gb-headline gb-headline-fa4c440a gb-headline-text">
                                                            <?php echo getLang('index_form') ?>
                                                        </p>
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
                                            </div>
                                        </div>
                                    </div>
                                    <div class="gb-container gb-container-a24c0f75">
                                        <div class="gb-container gb-container-5096a970">
                                            <?php echo getLang('index_disclaimer') ?>
                                        </div>
                                    </div>
                                    <div class="gb-container gb-container-f188781b">
                                        <div class="gb-container gb-container-8d8fea32">
                                            <div class="gb-grid-wrapper gb-grid-wrapper-47615ca9">
                                                <div class="gb-grid-column gb-grid-column-dae065e3">
                                                    <div class="gb-container gb-container-dae065e3">
                                                        <?php echo getLang('index_why_opt') ?>
                                                        <a class="gb-button gb-button-f70698f6 gb-button-text smooth-scroll"
                                                            href="<?php echo getHref('') ?>#optInFormWrapper"><?php echo getLang('join_us') ?></a>
                                                    </div>
                                                </div>
                                                <div class="gb-grid-column gb-grid-column-4d7495a8">
                                                    <div class="gb-container gb-container-4d7495a8">
                                                        <figure class="gb-block-image gb-block-image-365e372c">
                                                            <img alt="Coin" class="gb-image gb-image-365e372c" decoding="async" fetchpriority="high" height="600"
                                                                sizes="(max-width: 600px) 100vw, 600px" src="/assets/images/002.webp"
                                                                srcset="/assets/images/002.webp 600w, /assets/images/002-300x300.webp 300w, /assets/images/002-150x150.webp 150w" width="600" />
                                                        </figure>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="gb-container gb-container-4a6915e6">
                                        <div class="gb-container gb-container-95e375c5">
                                            <?php echo getLang('index_what_do') ?>
                                        </div>
                                    </div>
                                    <div class="gb-container gb-container-308519e3">
                                        <div class="gb-container gb-container-e5ae3780">
                                            <?php echo getLang('index_init_invest') ?>
                                            <div class="gb-grid-wrapper gb-grid-wrapper-3a5b2057">
                                                <div class="gb-grid-column gb-grid-column-395b0add">
                                                    <div class="gb-container gb-container-395b0add">
                                                        <span class="gb-button gb-button-553c7920"><span class="gb-icon"><svg aria-hidden="true" height="1em" viewbox="0 0 496 512" width="1em"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M248 8C111 8 0 119 0 256s111 248 248 248 248-111 248-248S385 8 248 8zm0 96c48.6 0 88 39.4 88 88s-39.4 88-88 88-88-39.4-88-88 39.4-88 88-88zm0 344c-58.7 0-111.3-26.6-146.5-68.2 18.8-35.4 55.6-59.8 98.5-59.8 2.4 0 4.8.4 7.1 1.1 13 4.2 26.6 6.9 40.9 6.9 14.3 0 28-2.7 40.9-6.9 2.3-.7 4.7-1.1 7.1-1.1 42.9 0 79.7 24.4 98.5 59.8C359.3 421.4 306.7 448 248 448z"
                                                                        fill="currentColor"></path>
                                                                </svg></span></span>
                                                        <h3 class="gb-headline gb-headline-a4bee5d7 gb-headline-text">
                                                            <?php echo getLang('index_init_invest_1_title') ?>
                                                        </h3>
                                                        <p class="gb-headline gb-headline-a34c6f46 gb-headline-text">
                                                            <em><?php echo getLang('index_init_invest_1_text') ?></em>
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="gb-grid-column gb-grid-column-6d5d3289">
                                                    <div class="gb-container gb-container-6d5d3289">
                                                        <span class="gb-button gb-button-a74b6702"><span class="gb-icon"><svg aria-hidden="true" height="1em" viewbox="0 0 512 512" width="1em"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zm144 276c0 6.6-5.4 12-12 12h-92v92c0 6.6-5.4 12-12 12h-56c-6.6 0-12-5.4-12-12v-92h-92c-6.6 0-12-5.4-12-12v-56c0-6.6 5.4-12 12-12h92v-92c0-6.6 5.4-12 12-12h56c6.6 0 12 5.4 12 12v92h92c6.6 0 12 5.4 12 12v56z"
                                                                        fill="currentColor"></path>
                                                                </svg></span></span>
                                                        <h3 class="gb-headline gb-headline-289a5219 gb-headline-text">
                                                            <?php echo getLang('index_init_invest_2_title') ?>
                                                        </h3>
                                                        <p class="gb-headline gb-headline-7f983903 gb-headline-text">
                                                            <em><?php echo getLang('index_init_invest_2_text') ?></em>
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="gb-grid-column gb-grid-column-113b305e">
                                                    <div class="gb-container gb-container-113b305e">
                                                        <span class="gb-button gb-button-f0df3504"><span class="gb-icon"><svg aria-hidden="true" height="1em" viewbox="0 0 512 512" width="1em"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M173.898 439.404l-166.4-166.4c-9.997-9.997-9.997-26.206 0-36.204l36.203-36.204c9.997-9.998 26.207-9.998 36.204 0L192 312.69 432.095 72.596c9.997-9.997 26.207-9.997 36.204 0l36.203 36.204c9.997 9.997 9.997 26.206 0 36.204l-294.4 294.401c-9.998 9.997-26.207 9.997-36.204-.001z"
                                                                        fill="currentColor"></path>
                                                                </svg></span></span>
                                                        <h3 class="gb-headline gb-headline-f5ba476b gb-headline-text">
                                                            <?php echo getLang('index_init_invest_3_title') ?>
                                                        </h3>
                                                        <p class="gb-headline gb-headline-25589150 gb-headline-text">
                                                            <em><?php echo getLang('index_init_invest_3_text') ?></em>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <p class="gb-headline gb-headline-826657be gb-headline-text"><?php echo getLang('index_init_invest_headline') ?></p>
                                        </div>
                                    </div>
                                    <div class="gb-container gb-container-f7a45dc3">
                                        <div class="gb-container gb-container-7d348348">
                                            <h2 class="gb-headline gb-headline-20a0020b gb-headline-text"><?php echo getLang('sign_up_title') ?></h2>
                                            <p class="has-text-align-center"><?php echo getLang('sign_up_desc') ?></p>
                                            <a class="gb-button gb-button-9b8d15ca smooth-scroll" href="<?php echo getHref('') ?>#optInFormWrapper">
                                                <span class="gb-button-text"><?php echo getLang('register') ?></span>
                                                <span class="gb-icon">
                                                    <svg aria-hidden="true" height="1em" viewbox="0 0 256 512" width="1em" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M224.3 273l-136 136c-9.4 9.4-24.6 9.4-33.9 0l-22.6-22.6c-9.4-9.4-9.4-24.6 0-33.9l96.4-96.4-96.4-96.4c-9.4-9.4-9.4-24.6 0-33.9L54.3 103c9.4-9.4 24.6-9.4 33.9 0l136 136c9.5 9.4 9.5 24.6.1 34z"
                                                            fill="currentColor">
                                                        </path>
                                                    </svg>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="gb-container gb-container-c6414bb3">
                                        <div class="gb-container gb-container-7d8db83d">
                                            <div class="gb-grid-wrapper gb-grid-wrapper-9a7aa3cc">
                                                <div class="gb-grid-column gb-grid-column-fe8d9d6a">
                                                    <div class="gb-container gb-container-fe8d9d6a">
                                                        <h2 class="gb-headline gb-headline-4aadf97a gb-headline-text">
                                                            <?php echo getLang('characteristic_title') ?>
                                                        </h2>
                                                    </div>
                                                </div>
                                                <div class="gb-grid-column gb-grid-column-1950711b">
                                                    <div class="gb-container gb-container-1950711b">
                                                        <span class="gb-button gb-button-e4246bdc"><span class="gb-icon"><svg aria-hidden="true" height="1em" viewbox="0 0 448 512" width="1em"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M400 32H48C21.49 32 0 53.49 0 80v352c0 26.51 21.49 48 48 48h352c26.51 0 48-21.49 48-48V80c0-26.51-21.49-48-48-48zm0 400H48V80h352v352zm-35.864-241.724L191.547 361.48c-4.705 4.667-12.303 4.637-16.97-.068l-90.781-91.516c-4.667-4.705-4.637-12.303.069-16.971l22.719-22.536c4.705-4.667 12.303-4.637 16.97.069l59.792 60.277 141.352-140.216c4.705-4.667 12.303-4.637 16.97.068l22.536 22.718c4.667 4.706 4.637 12.304-.068 16.971z"
                                                                        fill="currentColor"></path>
                                                                </svg></span></span>
                                                        <h3 class="gb-headline gb-headline-5ae3a20d gb-headline-text"><?php echo getLang('characteristic_1_title') ?></h3>
                                                        <p class="has-base-2-color has-text-color"><?php echo getLang('characteristic_1_text') ?></p>
                                                    </div>
                                                </div>
                                                <div class="gb-grid-column gb-grid-column-8aefd2f5">
                                                    <div class="gb-container gb-container-8aefd2f5">
                                                        <span class="gb-button gb-button-576e05f7"><span class="gb-icon"><svg aria-hidden="true" height="1em" viewbox="0 0 448 512" width="1em"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M400 32H48C21.49 32 0 53.49 0 80v352c0 26.51 21.49 48 48 48h352c26.51 0 48-21.49 48-48V80c0-26.51-21.49-48-48-48zm0 400H48V80h352v352zm-35.864-241.724L191.547 361.48c-4.705 4.667-12.303 4.637-16.97-.068l-90.781-91.516c-4.667-4.705-4.637-12.303.069-16.971l22.719-22.536c4.705-4.667 12.303-4.637 16.97.069l59.792 60.277 141.352-140.216c4.705-4.667 12.303-4.637 16.97.068l22.536 22.718c4.667 4.706 4.637 12.304-.068 16.971z"
                                                                        fill="currentColor"></path>
                                                                </svg></span></span>
                                                        <h3 class="gb-headline gb-headline-c14d7d76 gb-headline-text"><?php echo getLang('characteristic_2_title') ?></h3>
                                                        <p class="has-base-2-color has-text-color"><?php echo getLang('characteristic_2_text') ?></p>
                                                    </div>
                                                </div>
                                                <div class="gb-grid-column gb-grid-column-2fa503af">
                                                    <div class="gb-container gb-container-2fa503af">
                                                        <span class="gb-button gb-button-fb28c46e"><span class="gb-icon"><svg aria-hidden="true" height="1em" viewbox="0 0 448 512" width="1em"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M400 32H48C21.49 32 0 53.49 0 80v352c0 26.51 21.49 48 48 48h352c26.51 0 48-21.49 48-48V80c0-26.51-21.49-48-48-48zm0 400H48V80h352v352zm-35.864-241.724L191.547 361.48c-4.705 4.667-12.303 4.637-16.97-.068l-90.781-91.516c-4.667-4.705-4.637-12.303.069-16.971l22.719-22.536c4.705-4.667 12.303-4.637 16.97.069l59.792 60.277 141.352-140.216c4.705-4.667 12.303-4.637 16.97.068l22.536 22.718c4.667 4.706 4.637 12.304-.068 16.971z"
                                                                        fill="currentColor"></path>
                                                                </svg></span></span>
                                                        <h3 class="gb-headline gb-headline-ae6d32f3 gb-headline-text">
                                                            <?php echo getLang('characteristic_3_title') ?>
                                                        </h3>
                                                        <p class="has-base-2-color has-text-color"><?php echo getLang('characteristic_3_text') ?></p>
                                                    </div>
                                                </div>
                                                <div class="gb-grid-column gb-grid-column-2b8681c2">
                                                    <div class="gb-container gb-container-2b8681c2">
                                                        <span class="gb-button gb-button-eb0cb672"><span class="gb-icon"><svg aria-hidden="true" height="1em" viewbox="0 0 448 512" width="1em"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M400 32H48C21.49 32 0 53.49 0 80v352c0 26.51 21.49 48 48 48h352c26.51 0 48-21.49 48-48V80c0-26.51-21.49-48-48-48zm0 400H48V80h352v352zm-35.864-241.724L191.547 361.48c-4.705 4.667-12.303 4.637-16.97-.068l-90.781-91.516c-4.667-4.705-4.637-12.303.069-16.971l22.719-22.536c4.705-4.667 12.303-4.637 16.97.069l59.792 60.277 141.352-140.216c4.705-4.667 12.303-4.637 16.97.068l22.536 22.718c4.667 4.706 4.637 12.304-.068 16.971z"
                                                                        fill="currentColor"></path>
                                                                </svg></span></span>
                                                        <h3 class="gb-headline gb-headline-22fe69fd gb-headline-text"><?php echo getLang('characteristic_4_title') ?></h3>
                                                        <p class="has-base-2-color has-text-color"><?php echo getLang('characteristic_4_text') ?></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="gb-container gb-container-4f985082">
                                        <div class="gb-container gb-container-1e5a0425">
                                            <?php echo getLang('index_utils') ?>
                                            <a class="gb-button gb-button-d38f39f2 gb-button-text smooth-scroll" href="<?php echo getHref('') ?>#optInFormWrapper"><?php echo getLang('join_us') ?></a>
                                        </div>
                                    </div>
                                    <div class="gb-container gb-container-4f95ab9a">
                                        <div class="gb-container gb-container-0afddd39">
                                            <div class="gb-grid-wrapper gb-grid-wrapper-015a6cfc">
                                                <div class="gb-grid-column gb-grid-column-406e3d51">
                                                    <div class="gb-container gb-container-406e3d51">
                                                        <figure class="gb-block-image gb-block-image-4c09c06a"><img alt="Success" class="gb-image gb-image-4c09c06a" decoding="async" height="353"
                                                                sizes="(max-width: 600px) 100vw, 600px" src="/assets/images/003.webp"
                                                                srcset="/assets/images/003.webp 600w, /assets/images/003-300x177.webp 300w" width="600" /></figure>
                                                    </div>
                                                </div>
                                                <div class="gb-grid-column gb-grid-column-8ad3d710">
                                                    <div class="gb-container gb-container-8ad3d710">
                                                        <?php echo getLang('index_notice') ?>
                                                        <a class="gb-button gb-button-f3cbc600 gb-button-text smooth-scroll"
                                                            href="<?php echo getHref('') ?>#optInFormWrapper"><?php echo getLang('start_today') ?></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="gb-container gb-container-79bf458f">
                                        <div class="gb-container gb-container-b70c6186">
                                            <h2 class="gb-headline gb-headline-5cc370df gb-headline-text">
                                                <?php echo getLang('questions_title') ?>
                                            </h2>
                                        </div>
                                    </div>
                                    <div class="rank-math-block" id="rank-math-faq">
                                        <div class="rank-math-list">
                                            <div class="rank-math-list-item" id="faq-question-1684491111811">
                                                <h3 class="rank-math-question"><?php echo getLang('question_1_title') ?></h3>
                                                <div class="rank-math-answer">
                                                    <?php echo getLang('question_1_text') ?>
                                                </div>
                                            </div>
                                            <div class="rank-math-list-item" id="faq-question-1684491131520">
                                                <h3 class="rank-math-question"><?php echo getLang('question_2_title') ?></h3>
                                                <div class="rank-math-answer">
                                                    <?php echo getLang('question_2_text') ?>
                                                </div>
                                            </div>
                                            <div class="rank-math-list-item" id="faq-question-1684491152803">
                                                <h3 class="rank-math-question"><?php echo getLang('question_3_title') ?></h3>
                                                <div class="rank-math-answer">
                                                    <?php echo getLang('question_3_text') ?>
                                                </div>
                                            </div>
                                            <div class="rank-math-list-item" id="faq-question-1684491173138">
                                                <h3 class="rank-math-question"><?php echo getLang('question_4_title') ?></h3>
                                                <div class="rank-math-answer">
                                                    <?php echo getLang('question_4_text') ?>
                                                </div>
                                            </div>
                                            <div class="rank-math-list-item" id="faq-question-1684491198640">
                                                <h3 class="rank-math-question"><?php echo getLang('question_5_title') ?></h3>
                                                <div class="rank-math-answer">
                                                    <?php echo getLang('question_5_text') ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="gb-container gb-container-c22e97d0">
                                        <div class="gb-container gb-container-7cc5b7a3">
                                            <h2 class="gb-headline gb-headline-01e714d9 gb-headline-text"><?php echo getLang('index_final_title') ?></h2>
                                            <p class="gb-headline gb-headline-ed0155ef gb-headline-text"><?php echo getLang('index_final_text') ?></p>
                                        </div>
                                    </div>
                                    <div class="gb-container gb-container-0b9b9446">
                                        <div class="gb-container gb-container-157a145a">
                                            <h2 class="gb-headline gb-headline-ed763984 gb-headline-text">
                                                <?php echo getLang('index_table_title') ?>
                                            </h2>
                                            <figure class="wp-block-table">
                                                <?php echo getLang('index_table') ?>
                                            </figure>
                                            <h2 class="gb-headline gb-headline-962818fd gb-headline-text">
                                                <?php echo getLang('index_overview_title') ?>
                                            </h2>
                                            <div class="" id="rank-math-rich-snippet-wrapper">
                                                <h5 class="rank-math-title">Floventra</h5>
                                                <div class="rank-math-review-image">
                                                    <img decoding="async" src="/assets/images/002.webp" />
                                                </div>
                                                <div class="rank-math-review-data">
                                                    <?php echo getLang('index_overview_text') ?>
                                                    <div class="rank-math-total-wrapper">
                                                        <strong><?php echo getLang('index_rating') ?></strong><br />

                                                        <span class="rank-math-total">4.96</span>
                                                        <div class="rank-math-review-star">
                                                            <div class="rank-math-review-result-wrapper">
                                                                <i class="rank-math-star"></i>
                                                                <i class="rank-math-star"></i>
                                                                <i class="rank-math-star"></i>
                                                                <i class="rank-math-star"></i>
                                                                <i class="rank-math-star"></i>
                                                                <div class="rank-math-review-result" style="width:99.2%;">
                                                                    <i class="rank-math-star"></i>
                                                                    <i class="rank-math-star"></i>
                                                                    <i class="rank-math-star"></i>
                                                                    <i class="rank-math-star"></i>
                                                                    <i class="rank-math-star"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="rank-math-review-notes rank-math-review-pros">
                                                    <?php echo getLang('index_pros') ?>
                                                </div>
                                                <div class="rank-math-review-notes rank-math-review-cons">
                                                    <?php echo getLang('index_cons') ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="gb-container gb-container-64428005">
                                    <div class="gb-container gb-container-6701baf7">
                                        <?php echo getLang('index_growth') ?>
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