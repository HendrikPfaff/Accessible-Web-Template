<?php defined('_JEXEC') or die('Restricted access');
$doc = JFactory::getDocument();
?>
<!DOCTYPE html>
<html lang="<?php echo $this->language; ?>">
<head>
    <jdoc:include type="head"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
          integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/template.css" rel="stylesheet"
          type="text/css">
</head>
<body id="home" class="sticky-bar menu-standard fontfamily_default scrolled">
<div id="lab-main">

    <nav id="lab-skip-menu" role="navigation" aria-label="Skip Content menu">
        <div class="lab-skip-menu">
            <ul id="menu-skip-menu" class="menu">
                <li class="menu-item">
                    <a href="#jumbotron"><?php echo JText::_('TPL_SKIP_TO_CONTENT'); ?></a>
                </li>
                <li class="menu-item">
                    <a href="#block_settings"><?php echo JText::_('TPL_SKIP_TO_ACCESSIBILITY_MENU'); ?></a>
                </li>
                <li class="menu-item">
                    <a href="#lab-main-menu"><?php echo JText::_('TPL_SKIP_TO_MAIN_MENU'); ?></a>
                </li>
                <li class="menu-item">
                    <a href="#lab-footer"><?php echo JText::_('TPL_SKIP_TO_FOOTER'); ?></a>
                </li>
            </ul>
        </div>
    </nav>


    <div class="block-settings-wrapper">
        <div id="block_settings" class="block_settings">
            <a id="settings_close" tabindex="0">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" fill="currentColor" width="1em">
                    <path d="M50 8.1c23.2 0 41.9 18.8 41.9 41.9 0 23.2-18.8 41.9-41.9 41.9C26.8 91.9 8.1 73.2 8.1 50S26.8 8.1 50 8.1M50 0C22.4 0 0 22.4 0 50s22.4 50 50 50 50-22.4 50-50S77.6 0 50 0zm0 11.3c-21.4 0-38.7 17.3-38.7 38.7S28.6 88.7 50 88.7 88.7 71.4 88.7 50 71.4 11.3 50 11.3zm0 8.9c4 0 7.3 3.2 7.3 7.3S54 34.7 50 34.7s-7.3-3.2-7.3-7.3 3.3-7.2 7.3-7.2zm23.7 19.7c-5.8 1.4-11.2 2.6-16.6 3.2.2 20.4 2.5 24.8 5 31.4.7 1.9-.2 4-2.1 4.7-1.9.7-4-.2-4.7-2.1-1.8-4.5-3.4-8.2-4.5-15.8h-2c-1 7.6-2.7 11.3-4.5 15.8-.7 1.9-2.8 2.8-4.7 2.1-1.9-.7-2.8-2.8-2.1-4.7 2.6-6.6 4.9-11 5-31.4-5.4-.6-10.8-1.8-16.6-3.2-1.7-.4-2.8-2.1-2.4-3.9.4-1.7 2.1-2.8 3.9-2.4 19.5 4.6 25.1 4.6 44.5 0 1.7-.4 3.5.7 3.9 2.4.7 1.8-.3 3.5-2.1 3.9z">
                    </path>
                </svg>
            </a>
            <div class="open-accessibility">
                <ul class="lab-wcag-settings clearfix">
                    <li class="siteaccess-label"><?php echo JText::_('TPL_SITE_SETTINGS'); ?></li>
                    <li>
                        <ul class="access-float-settings">
                            <li>
                                <button class="toggle-night-mode">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
                                        <path d="M10.544,8.717l1.166-0.855l1.166,0.855l-0.467-1.399l1.012-0.778h-1.244L11.71,5.297l-0.466,1.244H10l1.011,0.778L10.544,8.717z M15.986,9.572l-0.467,1.244h-1.244l1.011,0.777l-0.467,1.4l1.167-0.855l1.165,0.855l-0.466-1.4l1.011-0.777h-1.244L15.986,9.572z M7.007,6.552c0-2.259,0.795-4.33,2.117-5.955C4.34,1.042,0.594,5.07,0.594,9.98c0,5.207,4.211,9.426,9.406,9.426c2.94,0,5.972-1.354,7.696-3.472c-0.289,0.026-0.987,0.044-1.283,0.044C11.219,15.979,7.007,11.759,7.007,6.552 M10,18.55c-4.715,0-8.551-3.845-8.551-8.57c0-3.783,2.407-6.999,5.842-8.131C6.549,3.295,6.152,4.911,6.152,6.552c0,5.368,4.125,9.788,9.365,10.245C13.972,17.893,11.973,18.55,10,18.55 M19.406,2.304h-1.71l-0.642-1.71l-0.642,1.71h-1.71l1.39,1.069l-0.642,1.924l1.604-1.176l1.604,1.176l-0.642-1.924L19.406,2.304z"></path>
                                    </svg>
                                    <span class="lab-only"><?php echo JText::_('TPL_NIGHT_MODE'); ?></span>
                                </button>
                            </li>
                            <li>
                                <button class="toggle-contrast">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
                                        <path d="M10,0.469c-5.264,0-9.531,4.268-9.531,9.531c0,5.265,4.268,9.531,9.531,9.531c5.265,0,9.531-4.267,9.531-9.531C19.531,4.736,15.265,0.469,10,0.469 M10,18.665c-4.786,0-8.665-3.88-8.665-8.665c0-4.786,3.879-8.665,8.665-8.665V18.665z"></path>
                                    </svg>
                                    <span class="lab-only"><?php echo JText::_('TPL_HIGH_CONTRAST'); ?></span>
                                </button>
                            </li>
                        </ul>
                    </li>

                    <li class="fontfamily-label"><?php echo JText::_('TPL_FONT_FAMILY'); ?></li>
                    <li>
                        <ul class="access-float-fontfamily">
                            <li>
                                <button class="lab-link-default">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
                                        <path d="M 15 6 L 8 26 L 10 26 L 12.09375 20 L 19.90625 20 L 22 26 L 24 26 L 17 6 Z M 16 8.84375 L 19.1875 18 L 12.8125 18 Z"></path>
                                    </svg>
                                    <span class="lab-only">Open Sans</span>
                                </button>
                            </li>
                            <li>
                                <button class="lab-font-inter">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
                                        <path d="M 15 6 L 8 26 L 10 26 L 12.09375 20 L 19.90625 20 L 22 26 L 24 26 L 17 6 Z M 16 8.84375 L 19.1875 18 L 12.8125 18 Z"></path>
                                    </svg>
                                    <span class="lab-only">Inter</span>
                                </button>
                            </li>
                            <li>
                                <button class="lab-font-andika">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
                                        <path d="M 15 6 L 8 26 L 10 26 L 12.09375 20 L 19.90625 20 L 22 26 L 24 26 L 17 6 Z M 16 8.84375 L 19.1875 18 L 12.8125 18 Z"></path>
                                    </svg>
                                    <span class="lab-only">Andika</span>
                                </button>
                            </li>
                            <li>
                                <button class="lab-font-tiresias">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
                                        <path d="M 15 6 L 8 26 L 10 26 L 12.09375 20 L 19.90625 20 L 22 26 L 24 26 L 17 6 Z M 16 8.84375 L 19.1875 18 L 12.8125 18 Z"></path>
                                    </svg>
                                    <span class="lab-only">Tiresias</span>
                                </button>
                            </li>
                            <li>
                                <button class="lab-font-opendyslexic">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
                                        <path d="M 15 6 L 8 26 L 10 26 L 12.09375 20 L 19.90625 20 L 22 26 L 24 26 L 17 6 Z M 16 8.84375 L 19.1875 18 L 12.8125 18 Z"></path>
                                    </svg>
                                    <span class="lab-only">OpenDyslexic</span>
                                </button>
                            </li>
                        </ul>
                    </li>


                    <li class="resizer-label"><?php echo JText::_('TPL_FONT_SETTINGS'); ?></li>
                    <li>
                        <ul class="access-float-font">
                            <li>
                                <button class="lab-font-smaller">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
                                        <path d="M 16 3 C 8.832031 3 3 8.832031 3 16 C 3 23.167969 8.832031 29 16 29 C 23.167969 29 29 23.167969 29 16 C 29 8.832031 23.167969 3 16 3 Z M 16 5 C 22.085938 5 27 9.914063 27 16 C 27 22.085938 22.085938 27 16 27 C 9.914063 27 5 22.085938 5 16 C 5 9.914063 9.914063 5 16 5 Z M 10 15 L 10 17 L 22 17 L 22 15 Z"></path>
                                    </svg>
                                    <span class="lab-only"><?php echo JText::_('TPL_SMALLER'); ?></span>
                                </button>
                            </li>
                            <li>
                                <button class="lab-font-larger">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
                                        <path d="M 16 3 C 8.832031 3 3 8.832031 3 16 C 3 23.167969 8.832031 29 16 29 C 23.167969 29 29 23.167969 29 16 C 29 8.832031 23.167969 3 16 3 Z M 16 5 C 22.085938 5 27 9.914063 27 16 C 27 22.085938 22.085938 27 16 27 C 9.914063 27 5 22.085938 5 16 C 5 9.914063 9.914063 5 16 5 Z M 15 10 L 15 15 L 10 15 L 10 17 L 15 17 L 15 22 L 17 22 L 17 17 L 22 17 L 22 15 L 17 15 L 17 10 Z"></path>
                                    </svg>
                                    <span class="lab-only"><?php echo JText::_('TPL_LARGER'); ?></span>
                                </button>
                            </li>
                            <li>
                                <button class="lab-link-underline">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
                                        <path d="M 21.75 4 C 20.078125 4 18.492188 4.660156 17.3125 5.84375 L 15.84375 7.3125 C 14.660156 8.496094 14 10.078125 14 11.75 C 14 12.542969 14.152344 13.316406 14.4375 14.03125 L 16.0625 12.40625 C 15.859375 11.109375 16.253906 9.714844 17.25 8.71875 L 18.71875 7.25 C 19.523438 6.445313 20.613281 6 21.75 6 C 22.886719 6 23.945313 6.445313 24.75 7.25 C 26.410156 8.910156 26.410156 11.621094 24.75 13.28125 L 23.28125 14.75 C 22.476563 15.554688 21.386719 16 20.25 16 C 20.027344 16 19.808594 15.976563 19.59375 15.9375 L 17.96875 17.5625 C 18.683594 17.847656 19.457031 18 20.25 18 C 21.921875 18 23.507813 17.339844 24.6875 16.15625 L 26.15625 14.6875 C 27.339844 13.503906 28 11.921875 28 10.25 C 28 8.578125 27.339844 7.027344 26.15625 5.84375 C 24.976563 4.660156 23.421875 4 21.75 4 Z M 19.28125 11.28125 L 11.28125 19.28125 L 12.71875 20.71875 L 20.71875 12.71875 Z M 11.75 14 C 10.078125 14 8.492188 14.660156 7.3125 15.84375 L 5.84375 17.3125 C 4.660156 18.496094 4 20.078125 4 21.75 C 4 23.421875 4.660156 24.972656 5.84375 26.15625 C 7.023438 27.339844 8.578125 28 10.25 28 C 11.921875 28 13.507813 27.339844 14.6875 26.15625 L 16.15625 24.6875 C 17.339844 23.503906 18 21.921875 18 20.25 C 18 19.457031 17.847656 18.683594 17.5625 17.96875 L 15.9375 19.59375 C 16.140625 20.890625 15.746094 22.285156 14.75 23.28125 L 13.28125 24.75 C 12.476563 25.554688 11.386719 26 10.25 26 C 9.113281 26 8.054688 25.554688 7.25 24.75 C 5.589844 23.089844 5.589844 20.378906 7.25 18.71875 L 8.71875 17.25 C 9.523438 16.445313 10.613281 16 11.75 16 C 11.972656 16 12.191406 16.023438 12.40625 16.0625 L 14.03125 14.4375 C 13.316406 14.152344 12.542969 14 11.75 14 Z"></path>
                                    </svg>
                                    <span class="lab-only"><?php echo JText::_('TPL_LINKS_UNDERLINE'); ?></span>
                                </button>
                            </li>
                            <li>
                                <button class="lab-font-readable">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
                                        <path d="M 8 6 L 8 8 L 15 8 L 15 22 L 17 22 L 17 8 L 24 8 L 24 6 Z M 10 21.5 L 5.625 25 L 10 28.5 L 10 26 L 22 26 L 22 28.5 L 26.375 25 L 22 21.5 L 22 24 L 10 24 Z"></path>
                                    </svg>
                                    <span class="lab-only"><?php echo JText::_('TPL_READABLE'); ?></span>
                                </button>
                            </li>
                            <li>
                                <button class="lab-font-normal">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
                                        <path d="M 12.78125 5.28125 L 4.78125 13.28125 L 4.09375 14 L 4.78125 14.71875 L 12.78125 22.71875 L 14.21875 21.28125 L 7.9375 15 L 21 15 C 23.753906 15 26 17.246094 26 20 L 26 27 L 28 27 L 28 20 C 28 16.15625 24.84375 13 21 13 L 7.9375 13 L 14.21875 6.71875 Z"></path>
                                    </svg>
                                    <span class="lab-only"><?php echo JText::_('TPL_DEFAULT_FONT'); ?></span>
                                </button>
                            </li>
                        </ul>
                    </li>


                    <li>
                        <button class="lab-reset">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
                                <path d="M 16 3 C 8.832031 3 3 8.832031 3 16 C 3 23.167969 8.832031 29 16 29 C 23.167969 29 29 23.167969 29 16 L 27 16 C 27 22.085938 22.085938 27 16 27 C 9.914063 27 5 22.085938 5 16 C 5 9.914063 9.914063 5 16 5 C 19.875 5 23.261719 6.984375 25.21875 10 L 20 10 L 20 12 L 28 12 L 28 4 L 26 4 L 26 7.71875 C 23.617188 4.84375 20.019531 3 16 3 Z"></path>
                            </svg>
                            <span class="lab-only"><?php echo JText::_('TPL_RESET_ALL'); ?></span>
                        </button>
                    </li>

                </ul>
            </div>
        </div>
    </div>


    <header id="lab-header" class="header-full topbar-mode-default topbar-shadow-default" style="padding-top: 194px;">
        <div id="lab-header-in">
            <div id="lab-logo-nav">

                <div id="lab-wcag" class="lab-container">
                    <div class="icon-scp-top-left">
                        <div class="">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
                                <path d="M 8.65625 3 C 8.132813 3 7.617188 3.1875 7.1875 3.53125 L 7.125 3.5625 L 7.09375 3.59375 L 3.96875 6.8125 L 4 6.84375 C 3.035156 7.734375 2.738281 9.066406 3.15625 10.21875 C 3.160156 10.226563 3.152344 10.242188 3.15625 10.25 C 4.003906 12.675781 6.171875 17.359375 10.40625 21.59375 C 14.65625 25.84375 19.402344 27.925781 21.75 28.84375 L 21.78125 28.84375 C 22.996094 29.25 24.3125 28.960938 25.25 28.15625 L 28.40625 25 C 29.234375 24.171875 29.234375 22.734375 28.40625 21.90625 L 24.34375 17.84375 L 24.3125 17.78125 C 23.484375 16.953125 22.015625 16.953125 21.1875 17.78125 L 19.1875 19.78125 C 18.464844 19.433594 16.742188 18.542969 15.09375 16.96875 C 13.457031 15.40625 12.621094 13.609375 12.3125 12.90625 L 14.3125 10.90625 C 15.152344 10.066406 15.167969 8.667969 14.28125 7.84375 L 14.3125 7.8125 L 14.21875 7.71875 L 10.21875 3.59375 L 10.1875 3.5625 L 10.125 3.53125 C 9.695313 3.1875 9.179688 3 8.65625 3 Z M 8.65625 5 C 8.730469 5 8.804688 5.035156 8.875 5.09375 L 12.875 9.1875 L 12.96875 9.28125 C 12.960938 9.273438 13.027344 9.378906 12.90625 9.5 L 10.40625 12 L 9.9375 12.4375 L 10.15625 13.0625 C 10.15625 13.0625 11.304688 16.136719 13.71875 18.4375 L 13.9375 18.625 C 16.261719 20.746094 19 21.90625 19 21.90625 L 19.625 22.1875 L 22.59375 19.21875 C 22.765625 19.046875 22.734375 19.046875 22.90625 19.21875 L 27 23.3125 C 27.171875 23.484375 27.171875 23.421875 27 23.59375 L 23.9375 26.65625 C 23.476563 27.050781 22.988281 27.132813 22.40625 26.9375 C 20.140625 26.046875 15.738281 24.113281 11.8125 20.1875 C 7.855469 16.230469 5.789063 11.742188 5.03125 9.5625 C 4.878906 9.15625 4.988281 8.554688 5.34375 8.25 L 5.40625 8.1875 L 8.4375 5.09375 C 8.507813 5.035156 8.582031 5 8.65625 5 Z"></path>
                            </svg>
                            <?php echo $this->params->get('contactPhone'); ?> | <a href="mailto:<?php echo $this->params->get('contactEmail'); ?>" aria-label="Email programm öffnen"  tabindex="0"><?php echo $this->params->get('contactEmail'); ?></a>
                        </div>
                    </div>

                    <div class="ml-auto icon-scp-top">
                        <jdoc:include type="module" name="social-icons"/>
                        <div id="off-canvas-btn">
<span class="openNav" tabindex="0">
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
<path d="M 4 7 L 4 9 L 28 9 L 28 7 Z M 4 15 L 4 17 L 28 17 L 28 15 Z M 4 23 L 4 25 L 28 25 L 28 23 Z"></path>
</svg>
</span>
                        </div>
                        <div id="mySidenav" class="sidenav" style="width: 0px; display: none;">
                            <a id="closebtn" class="closebtn" tabindex="0">×</a>
                            <div id="sidemenu-logo" class="sidemenu-logo">
                                <a href="http://bree.hendrikpfaff.de" class="" title="LAB" rel="home">
<span class="">
<picture>
<img src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/images/b-free-logo.svg"
     alt="B free Off-Canvas Menu Logo" class="">
</picture>
 </span>
                                </a>
                            </div>
                            <jdoc:include type="modules" name="side-menu"/>
                            <br/>
                            <div class="offcanvas-butns">
                                <button>Virtuelle Messe</button>
                            </div>
                            <br>
                            <div class="ml-auto">
                                <jdoc:include type="module" name="social-icons"/>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="lab-container">
                    <div id="lab-bar-left">
                        <div id="lab-logo">
                            <a href="" class="logo-focused" title="Logo" rel="home">
<span class="">
<picture>
<img src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/images/b-free-logo.svg"
     alt="B free Logo" class="" style="height:50px;">
</picture>
</span>
                            </a>
                        </div>
                    </div>
                    <div id="lab-bar-right">
                        <nav id="lab-main-menu" tabindex="-1" aria-label="Primary menu">
                            <div class="lab-main-menu">
                                <jdoc:include type="modules" name="top-menu"/>
                            </div>

                        </nav>
                        <div id="lab-offcanvas-button">
                            <a class="toggle-nav open" tabindex="-1">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
                                    <path d="M 4 7 L 4 9 L 28 9 L 28 7 Z M 4 15 L 4 17 L 28 17 L 28 15 Z M 4 23 L 4 25 L 28 25 L 28 23 Z"></path>
                                </svg>
                                <span class="sr-only">Offcanvas Sidebar</span>
                            </a>
                        </div>
                        <div id="lab-offcanvas" class="off-canvas-right">
                            <div id="lab-offcanvas-toolbar">
                                <a class="toggle-nav-close close" tabindex="-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
                                        <path d="M 7.21875 5.78125 L 5.78125 7.21875 L 14.5625 16 L 5.78125 24.78125 L 7.21875 26.21875 L 16 17.4375 L 24.78125 26.21875 L 26.21875 24.78125 L 17.4375 16 L 26.21875 7.21875 L 24.78125 5.78125 L 16 14.5625 Z"></path>
                                    </svg>
                                    <span class="sr-only">Close Offcanvas Sidebar</span>
                                </a>
                            </div>
                            <div id="lab-offcanvas-content" class="">
                                <div class="row">
                                    <div class="lab-offcanvas-menu lab-widget first last">
                                        <jdoc:include type="modules" name="off-menu"/>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </header>

    <jdoc:include type="modules" name="jumbotron" />
    <jdoc:include type="modules" name="breadcrumps" />


    <section id="" class="section">
        <div class="main-container">
            <!--
            <div class="inside-container">
                <div class="row">
                    <div class="col-12 our-header">
                        <h2><?php echo $doc->getTitle(); ?></h2>
                    </div>
                </div>
            </div>-->
            <div class="row row-pad">
                <jdoc:include type="component"/>
            </div>
        </div>
    </section>

    <!--
    <section id="about" class="section">
        <div class="main-container">
            <div class="inside-container">
                <div class="row">
                    <div class="col-12 our-header">
                        <h2>About</h2>
                    </div>
                </div>
                <div class="row row-pad">
                    <div class=" col-sm-6 col-md-3  our-spec">
                        <div class="text-center" tabindex="0">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 104 104">
                                <defs></defs>
                                <g fill="none" fill-rule="evenodd" stroke="#000" stroke-linecap="round"
                                   stroke-linejoin="round" stroke-width="3.5" transform="translate(2 2)">
                                    <path d="M80 27V3c0-2-1-3-3-3H3C1 0 0 1 0 3v94c0 2 1 3 3 3h53V30c0-2 1-3 3-3h21z"></path>
                                    <rect width="44" height="73" x="56" y="27" rx="3"></rect>
                                    <path d="M80 16V3c0-2-1-3-3-3H3C1 0 0 1 0 3v13h80z"></path>
                                    <path d="M80 16V3c0-2-1-3-3-3H3C1 0 0 1 0 3v13h80zM37 8h6M56 100H3c-2 0-3-1-3-3V84h56v16h0zM100 98l-2 2H58l-2-2V85h44v13zM100 39V29l-2-2H58l-2 2v10h44z"></path>
                                    <path d="M100 39V29l-2-2H58l-2 2v10h44zM76 33h4M78 95a2 2 0 100-5 2 2 0 000 5zM40 95a3 3 0 100-6 3 3 0 000 6z"></path>
                                </g>
                            </svg>
                        </div>
                        <h3>Fully Responsive</h3>
                        <p>Responsive design to deliver your content the right way on every possible devices.</p>
                    </div>
                    <div class=" col-sm-6 col-md-3  our-spec">
                        <div class="text-center" tabindex="0">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 104 104">
                                <defs></defs>
                                <g fill="none" fill-rule="evenodd" stroke="#000" stroke-linecap="round"
                                   stroke-linejoin="round" stroke-width="3.5" transform="translate(2 2)">
                                    <path d="M25.244 37.604c-7.764 4.45-13.788 8.34-16.421 10.973-11.764 11.764-11.764 30.836 0 42.6 11.508 11.509 30.012 11.758 41.824.75l.017.012.06-.084c.235-.221.469-.447.7-.678 2.174-2.174 5.204-6.66 8.7-12.53l31.203-43.839s-4.932.588-11.906 1.527L100 0 62.537 22.335c1.022-6.493 1.671-11.004 1.671-11.004L25.244 37.604h0z"></path>
                                    <circle cx="30.217" cy="69.783" r="19.217"></circle>
                                </g>
                            </svg>
                        </div>
                        <h3>Fast &amp; Light</h3>
                        <p>Bloat-free lightweight template that loads blazingly fast in less than a second.</p>
                    </div>
                    <div class="col-sm-6 col-md-3  our-spec">
                        <div class="text-center" tabindex="0">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 104 104">
                                <defs></defs>
                                <g fill="none" fill-rule="evenodd" stroke="#000" stroke-linecap="round"
                                   stroke-linejoin="round" stroke-width="3.5" transform="translate(2 2)">
                                    <circle cx="50" cy="50" r="50"></circle>
                                    <path d="M99.84 45.971c.106 1.33.16 2.673.16 4.029 0 27.614-22.386 50-50 50S0 77.614 0 50c0-1.356.054-2.7.16-4.029C10.93 54.88 29.233 60.74 50 60.74c20.767 0 39.069-5.861 49.84-14.769h0zM78.071 36.071c3.124-3.124 2.491-8.823-1.414-12.728-3.905-3.905-9.604-4.538-12.728-1.414-3.124 3.124-2.491 8.823 1.414 12.728 3.905 3.905 9.604 4.538 12.728 1.414h0z"></path>
                                </g>
                            </svg>
                        </div>
                        <h3>Clean &amp; Simple</h3>
                        <p>Clean perfeclty optimized template that you can use in any website or project.</p>
                    </div>
                    <div class="col-sm-6 col-md-3  our-spec">
                        <div class="text-center" tabindex="0">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 84 104">
                                <g fill="none" fill-rule="evenodd" stroke="#000" stroke-linecap="round"
                                   stroke-linejoin="round" stroke-width="3.5">
                                    <path d="M33.74375 21.33125c.1640625-.0109375.3265625-.015625.4890625-.015625 3.86875 0 7.1234375 2.9859375 7.3796875 6.8984375l.6169924 5.2312498h15.5970688c2.0140625 0 2.9659195 1.2158203 2.9659195 2.925293 0 1.7094726-.6970215 2.4609384-2.53125 2.9333505l-15.2831059 2.1354981 2e-7 7.8324211h18.8546875c.7171875 0 1.3921875.11875 2.0390625.334375 1.6515625.2875 3.2125 1.3671875 4.15 3.0703125L80.4421875 75.3875c1.5328125 2.8328125 1.2121096 5.8708015-1.3904295 7.2184578-2.602539 1.3476562-5.2795898-.5098633-6.3842773-2.5239258l-13.090332-17.889843-24.2724612-.0000015c-.1421875 0-.2859375 0-.43125-.0234375h-.215625c-.090625.003125-.18125.0046875-.271875.0046875-3.8640625 0-7.1203125-2.9953125-7.3796875-6.909375L25.303125 29.29375c-.2625-4.078125 2.8296875-7.603125 6.909375-7.8671875l1.53125-.0953125zm-.6625-19.2140625c4.746875 0 8.5953125 3.8484375 8.5953125 8.59375s-3.8484375 8.59375-8.5953125 8.59375-8.59375-3.846875-8.59375-8.59375c0-4.7453125 3.8484375-8.59375 8.59375-8.59375z"></path>
                                    <path d="M18.5796207 38.7958149C8.64927274 44.7320574 2 55.5895183 2 68c0 18.7776815 15.2223185 34 34 34h0c13.9088438 0 25.8670254-8.3517777 31.1331652-20.3139536"></path>
                                </g>
                            </svg>
                        </div>
                        <h3>Accessibility Ready</h3>
                        <p>WCAG 2.1 (Level AAA) and ADA ready, to make sure none of your audience is left behind. </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    -->



    <!--
    <section id="features" class="section">
        <div class="main-container section-bg">
            <div class="inside-container">
                <div class="row">
                    <div class="col-12 our-header">
                        <h2>Features</h2>
                    </div>
                </div>
                <div class="row row-pad">
                    <div class=" col-sm-6 col-md-3  our-spec">
                        <div class="text-center" tabindex="0">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 103 104">
                                <g fill="none" fill-rule="evenodd" stroke="#000" stroke-linecap="round"
                                   stroke-linejoin="round" stroke-width="3.5">
                                    <path d="M42.4816905 2.06837213L13.8940397 30.939069c-15.99754682 16.1559384-15.9911825 42.3287772-.0026046 58.4756579 15.9920934 16.1504311 41.9123507 16.1457031 57.9023671-.0026304l28.5876509-28.8706969-14.4749407-14.6182568-28.6912473 28.9753191c-7.9928894 8.0720269-20.9513005 8.0726562-28.9473472-.0025593-7.9942889-8.0734403-7.9987683-21.1585497-.0025341-29.2339545L56.9566312 16.686629 42.4816905 2.06837213h0z"></path>
                                    <path d="M35.2891735 9.33210226l7.192517-7.26373013L56.9566312 16.686629l-7.1925171 7.2637301zM78.7139953 53.1868729l7.1925171-7.2637301 14.4749407 14.6182568-7.1925171 7.2637302z"></path>
                                </g>
                            </svg>
                        </div>
                        <h3>Modern Design</h3>
                        <p>Pixel perfect modern design to deliver the best user experience.</p>
                    </div>
                    <div class=" col-sm-6 col-md-3  our-spec">
                        <div class="text-center" tabindex="0">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 104 105">
                                <g fill="none" fill-rule="evenodd" stroke="#000" stroke-linecap="round"
                                   stroke-linejoin="round" stroke-width="3.5" transform="translate(2 2)">
                                    <circle cx="50" cy="65" r="36"></circle>
                                    <path d="M39.1129942 2.99939271C39.0505892 1.34287386 40.3467125 0 41.993227 0h14.2992603c1.6531136 0 2.9426394 1.34283057 2.8802328 2.99939271l-.3279996 8.70663799H39.4409938l-.3279996-8.70663799zM65.59187377 42.16021314c.45587914.29313173.8951576.59607985 1.31845796.90862035 6.5422447 4.83041498 9.26783792 11.95214127 10.47455374 20.53837048M22.0123457 64.8404577C22.730834 81.2680235 35.835852 93.4780449 50.882655 93.4780449c13.3300304 0 24.4700533-10.2808019 27.3336437-24.0557579-13.2849495 2.4087678-21.2641203 4.4891515-29.4379088-2.498701-8.1737884-6.9878525-26.7660442-2.0831283-26.7660442-2.0831283z"></path>
                                    <ellipse cx="33.1658442" cy="50.1371173" rx="6.52386889" ry="6.50967084"></ellipse>
                                    <rect width="38.5428571" height="10.2040816" x="30.2285714" y="12.7116631"
                                          rx="5.10204082"></rect>
                                    <path d="M92.5.28571429V15.2857143M100 8H85M6 12.2321429v12.1875M12 18.5H0M64.7142857 32.1346325v-9.2188878H35.3v9.2124858C39.7884407 30.1179657 44.7636629 29 50 29c5.2418931 0 10.2221169 1.1203394 14.7142857 3.1346325z"></path>
                                </g>
                            </svg>
                        </div>
                        <h3>Developer-Friendly</h3>
                        <p>All used codes and libraries are easy to use and developer-friendly.</p>
                    </div>
                    <div class="col-sm-6 col-md-3  our-spec">
                        <div class="text-center" tabindex="0">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 104 104">
                                <g fill="none" fill-rule="evenodd" stroke="#000" stroke-linecap="round"
                                   stroke-linejoin="round" stroke-width="3.5" transform="translate(2 2)">
                                    <path d="M0 48.9906363C0 44.025245 4.02323995 40 9.00537044 40h8.00042746C18.6594501 40 20 41.3505957 20 42.9992106v29.0015788C20 73.6572077 18.656688 75 17.0057979 75H9.00537044C4.03184168 75 0 70.9679736 0 66.0093637V48.9906363h0zM90 75c0 12.282113-10.0891562 20.6599998-30 20.6599998M80 42.9992106C80 41.3427923 81.343312 40 82.9942021 40h8.0004275C95.9681583 40 100 44.0320264 100 48.9906363v17.0187274C100 70.974755 95.9767601 75 90.9946296 75h-8.0004275C81.3405499 75 80 73.6494043 80 72.0007894V42.9992106h0zM90 40C90 17.90861 72.09139 0 50 0S10 17.90861 10 40"></path>
                                    <rect width="20" height="10" x="40" y="90" rx="5"></rect>
                                </g>
                            </svg>
                        </div>
                        <h3>Friendly Support</h3>
                        <p>Contact us and we will guide you in the right direction.</p>
                    </div>
                    <div class="col-sm-6 col-md-3  our-spec">
                        <div class="text-center" tabindex="0">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 104 104">
                                <g fill="none" fill-rule="evenodd" stroke="#000" stroke-linecap="round"
                                   stroke-linejoin="round" stroke-width="3.5">
                                    <path d="M24.4116679 39.5L3.88397077 49.7638486c-2.47499385 1.2374969-2.46998468 3.2373105 0 4.4723028L47.5276971 76.0580146c2.4749939 1.2374969 6.4746211 1.2349924 8.9446058 0l43.6437263-21.8218632c2.4749938-1.2374969 2.4699848-3.2373105 0-4.4723028L79.5883321 39.5 56.4723029 51.0580146c-2.4699847 1.2349924-6.4696119 1.2374969-8.9446058 0L24.4116679 39.5h0z"></path>
                                    <path d="M100.1160292 24.7638486c2.4699848 1.2349923 2.4749938 3.2348059 0 4.4723028L56.4723029 51.0580146c-2.4699847 1.2349924-6.4696119 1.2374969-8.9446058 0L3.88397077 29.2361514c-2.46998468-1.2349923-2.47499385-3.2348059 0-4.4723028L47.5276971 2.94198538c2.4699847-1.23499234 6.4696119-1.23749692 8.9446058 0l43.6437263 21.82186322zM24.4116679 64.5L3.88397077 74.7638486c-2.47499385 1.2374969-2.46998468 3.2373105 0 4.4723028l43.64372633 21.8218632c2.4749939 1.2374974 6.4746211 1.2349924 8.9446058 0l43.6437263-21.8218632c2.4749938-1.2374969 2.4699848-3.2373105 0-4.4723028L79.5883321 64.5 56.4723029 76.0580146c-2.4699847 1.2349924-6.4696119 1.2374969-8.9446058 0L24.4116679 64.5h0z"></path>
                                </g>
                            </svg>
                        </div>
                        <h3>Latest Bootstrap</h3>
                        <p>This template is based on the latest version of Bootstrap (4.5)</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    -->


    <!--
    <section id="portfolios" class="section">

        <div class="main-container">
            <div class="inside-container">
                <div class="col-12 our-header">
                    <h2>Our Works</h2>
                </div>
                <div class="row">
                    <div class="col-md-12">

                        <div class="controls text-center">
                            <a class="active btn btn-common" data-filter="all" tabindex="0"> All </a>
                            <a class="btn btn-common" data-filter=".design" tabindex="0"> Design </a>
                            <a class="btn btn-common" data-filter=".development" tabindex="0"> Development </a>
                            <a class="btn btn-common mixitup-control-active" data-filter=".print" tabindex="0">
                                Print </a>
                        </div>

                    </div>
                </div>

                <div id="portfolio" class="row" style="">
                    <div class="col-lg-4 col-md-6 col-xs-12 mix development print" style="">
                        <div class="portfolio-item" tabindex="0">
                            <div class="shot-item">
                                <img src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/images/project-1.jpg"
                                     alt="Project 1">
                                <div class="single-content">
                                    <div class="fancy-table">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-xs-12 mix design print" style="">
                        <div class="portfolio-item" tabindex="0">
                            <div class="shot-item">
                                <img src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/images/project-2.jpg"
                                     alt="Project 2">
                                <div class="single-content">
                                    <div class="fancy-table">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-xs-12 mix development" style="display: none;">
                        <div class="portfolio-item" tabindex="0">
                            <div class="shot-item">
                                <img src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/images/project-3.jpg"
                                     alt="Project 3">
                                <div class="single-content">
                                    <div class="fancy-table">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-xs-12 mix development design" style="display: none;">
                        <div class="portfolio-item" tabindex="0">
                            <div class="shot-item">
                                <img src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/images/project-4.jpg"
                                     alt="Project 4">
                                <div class="single-content">
                                    <div class="fancy-table">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-xs-12 mix development" style="display: none;">
                        <div class="portfolio-item" tabindex="0">
                            <div class="shot-item">
                                <img src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/images/project-5.jpg"
                                     alt="Project 5">
                                <div class="single-content">
                                    <div class="fancy-table">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-xs-12 mix print design" style="">
                        <div class="portfolio-item" tabindex="0">
                            <div class="shot-item">
                                <img src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/images/project-6.jpg"
                                     alt="Project 6">
                                <div class="single-content">
                                    <div class="fancy-table">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    -->



    <!--
    <section id="team" class="team section">
        <div class="main-container section-bg">
            <div class="inside-container">
                <div class="row">
                    <div class="col-12 our-header">
                        <h2>Team</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="team-item">
                            <figure tabindex="0">
                                <img src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/images/member-1.jpg"
                                     alt="Member 1">
                                <figcaption>
                                    <div class="info">
                                        <h3>Jane Doe</h3>
                                        <p>Chief Executive Officer</p>
                                    </div>
                                    <div class="social">
                                        <a aria-label="Facebook" class="" data-abc="true" tabindex="0">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
                                                <path d="M 19.253906 2 C 15.311906 2 13 4.0821719 13 8.8261719 L 13 13 L 8 13 L 8 18 L 13 18 L 13 30 L 18 30 L 18 18 L 22 18 L 23 13 L 18 13 L 18 9.671875 C 18 7.884875 18.582766 7 20.259766 7 L 23 7 L 23 2.2050781 C 22.526 2.1410781 21.144906 2 19.253906 2 z"></path>
                                            </svg>
                                        </a><a aria-label="Twitter" class="" data-abc="true" tabindex="0">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
                                                <path d="M 28 8.558594 C 27.117188 8.949219 26.167969 9.214844 25.171875 9.332031 C 26.1875 8.722656 26.96875 7.757813 27.335938 6.609375 C 26.386719 7.171875 25.332031 7.582031 24.210938 7.804688 C 23.3125 6.847656 22.03125 6.246094 20.617188 6.246094 C 17.898438 6.246094 15.691406 8.453125 15.691406 11.171875 C 15.691406 11.558594 15.734375 11.933594 15.820313 12.292969 C 11.726563 12.089844 8.097656 10.128906 5.671875 7.148438 C 5.246094 7.875 5.003906 8.722656 5.003906 9.625 C 5.003906 11.332031 5.871094 12.839844 7.195313 13.722656 C 6.386719 13.695313 5.628906 13.476563 4.964844 13.105469 C 4.964844 13.128906 4.964844 13.148438 4.964844 13.167969 C 4.964844 15.554688 6.660156 17.546875 8.914063 17.996094 C 8.5 18.109375 8.066406 18.171875 7.617188 18.171875 C 7.300781 18.171875 6.988281 18.140625 6.691406 18.082031 C 7.316406 20.039063 9.136719 21.460938 11.289063 21.503906 C 9.605469 22.824219 7.480469 23.609375 5.175781 23.609375 C 4.777344 23.609375 4.386719 23.585938 4 23.539063 C 6.179688 24.9375 8.765625 25.753906 11.546875 25.753906 C 20.605469 25.753906 25.558594 18.25 25.558594 11.742188 C 25.558594 11.53125 25.550781 11.316406 25.542969 11.105469 C 26.503906 10.410156 27.339844 9.542969 28 8.558594 Z"></path>
                                            </svg>
                                        </a><a aria-label="LinkedIn" class="" data-abc="true" tabindex="0">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
                                                <path d="M 8.6425781 4 C 7.1835781 4 6 5.181625 6 6.640625 C 6 8.099625 7.182625 9.3085938 8.640625 9.3085938 C 10.098625 9.3085938 11.283203 8.099625 11.283203 6.640625 C 11.283203 5.182625 10.101578 4 8.6425781 4 z M 21.535156 11 C 19.316156 11 18.0465 12.160453 17.4375 13.314453 L 17.373047 13.314453 L 17.373047 11.310547 L 13 11.310547 L 13 26 L 17.556641 26 L 17.556641 18.728516 C 17.556641 16.812516 17.701266 14.960938 20.072266 14.960938 C 22.409266 14.960937 22.443359 17.145609 22.443359 18.849609 L 22.443359 26 L 26.994141 26 L 27 26 L 27 17.931641 C 27 13.983641 26.151156 11 21.535156 11 z M 6.3632812 11.310547 L 6.3632812 26 L 10.923828 26 L 10.923828 11.310547 L 6.3632812 11.310547 z"></path>
                                            </svg>
                                        </a>
                                    </div>
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="team-item">
                            <figure tabindex="0">
                                <img src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/images/member-1.jpg"
                                     alt="Member 2">
                                <figcaption>
                                    <div class="info">
                                        <h3>Jane Doe</h3>
                                        <p>Development Lead</p>
                                    </div>
                                    <div class="social">
                                        <a aria-label="Facebook" class="" data-abc="true" tabindex="0">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
                                                <path d="M 19.253906 2 C 15.311906 2 13 4.0821719 13 8.8261719 L 13 13 L 8 13 L 8 18 L 13 18 L 13 30 L 18 30 L 18 18 L 22 18 L 23 13 L 18 13 L 18 9.671875 C 18 7.884875 18.582766 7 20.259766 7 L 23 7 L 23 2.2050781 C 22.526 2.1410781 21.144906 2 19.253906 2 z"></path>
                                            </svg>
                                        </a><a aria-label="Twitter" class="" data-abc="true" tabindex="0">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
                                                <path d="M 28 8.558594 C 27.117188 8.949219 26.167969 9.214844 25.171875 9.332031 C 26.1875 8.722656 26.96875 7.757813 27.335938 6.609375 C 26.386719 7.171875 25.332031 7.582031 24.210938 7.804688 C 23.3125 6.847656 22.03125 6.246094 20.617188 6.246094 C 17.898438 6.246094 15.691406 8.453125 15.691406 11.171875 C 15.691406 11.558594 15.734375 11.933594 15.820313 12.292969 C 11.726563 12.089844 8.097656 10.128906 5.671875 7.148438 C 5.246094 7.875 5.003906 8.722656 5.003906 9.625 C 5.003906 11.332031 5.871094 12.839844 7.195313 13.722656 C 6.386719 13.695313 5.628906 13.476563 4.964844 13.105469 C 4.964844 13.128906 4.964844 13.148438 4.964844 13.167969 C 4.964844 15.554688 6.660156 17.546875 8.914063 17.996094 C 8.5 18.109375 8.066406 18.171875 7.617188 18.171875 C 7.300781 18.171875 6.988281 18.140625 6.691406 18.082031 C 7.316406 20.039063 9.136719 21.460938 11.289063 21.503906 C 9.605469 22.824219 7.480469 23.609375 5.175781 23.609375 C 4.777344 23.609375 4.386719 23.585938 4 23.539063 C 6.179688 24.9375 8.765625 25.753906 11.546875 25.753906 C 20.605469 25.753906 25.558594 18.25 25.558594 11.742188 C 25.558594 11.53125 25.550781 11.316406 25.542969 11.105469 C 26.503906 10.410156 27.339844 9.542969 28 8.558594 Z"></path>
                                            </svg>
                                        </a><a aria-label="LinkedIn" class="" data-abc="true" tabindex="0">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
                                                <path d="M 8.6425781 4 C 7.1835781 4 6 5.181625 6 6.640625 C 6 8.099625 7.182625 9.3085938 8.640625 9.3085938 C 10.098625 9.3085938 11.283203 8.099625 11.283203 6.640625 C 11.283203 5.182625 10.101578 4 8.6425781 4 z M 21.535156 11 C 19.316156 11 18.0465 12.160453 17.4375 13.314453 L 17.373047 13.314453 L 17.373047 11.310547 L 13 11.310547 L 13 26 L 17.556641 26 L 17.556641 18.728516 C 17.556641 16.812516 17.701266 14.960938 20.072266 14.960938 C 22.409266 14.960937 22.443359 17.145609 22.443359 18.849609 L 22.443359 26 L 26.994141 26 L 27 26 L 27 17.931641 C 27 13.983641 26.151156 11 21.535156 11 z M 6.3632812 11.310547 L 6.3632812 26 L 10.923828 26 L 10.923828 11.310547 L 6.3632812 11.310547 z"></path>
                                            </svg>
                                        </a>
                                    </div>
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="team-item">
                            <figure tabindex="0">
                                <img src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/images/member-1.jpg"
                                     alt="Member 3">
                                <figcaption>
                                    <div class="info">
                                        <h3>Jane Doe</h3>
                                        <p>Marketing Manager</p>
                                    </div>
                                    <div class="social">
                                        <a aria-label="Facebook" class="" data-abc="true" tabindex="0">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
                                                <path d="M 19.253906 2 C 15.311906 2 13 4.0821719 13 8.8261719 L 13 13 L 8 13 L 8 18 L 13 18 L 13 30 L 18 30 L 18 18 L 22 18 L 23 13 L 18 13 L 18 9.671875 C 18 7.884875 18.582766 7 20.259766 7 L 23 7 L 23 2.2050781 C 22.526 2.1410781 21.144906 2 19.253906 2 z"></path>
                                            </svg>
                                        </a><a aria-label="Twitter" class="" data-abc="true" tabindex="0">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
                                                <path d="M 28 8.558594 C 27.117188 8.949219 26.167969 9.214844 25.171875 9.332031 C 26.1875 8.722656 26.96875 7.757813 27.335938 6.609375 C 26.386719 7.171875 25.332031 7.582031 24.210938 7.804688 C 23.3125 6.847656 22.03125 6.246094 20.617188 6.246094 C 17.898438 6.246094 15.691406 8.453125 15.691406 11.171875 C 15.691406 11.558594 15.734375 11.933594 15.820313 12.292969 C 11.726563 12.089844 8.097656 10.128906 5.671875 7.148438 C 5.246094 7.875 5.003906 8.722656 5.003906 9.625 C 5.003906 11.332031 5.871094 12.839844 7.195313 13.722656 C 6.386719 13.695313 5.628906 13.476563 4.964844 13.105469 C 4.964844 13.128906 4.964844 13.148438 4.964844 13.167969 C 4.964844 15.554688 6.660156 17.546875 8.914063 17.996094 C 8.5 18.109375 8.066406 18.171875 7.617188 18.171875 C 7.300781 18.171875 6.988281 18.140625 6.691406 18.082031 C 7.316406 20.039063 9.136719 21.460938 11.289063 21.503906 C 9.605469 22.824219 7.480469 23.609375 5.175781 23.609375 C 4.777344 23.609375 4.386719 23.585938 4 23.539063 C 6.179688 24.9375 8.765625 25.753906 11.546875 25.753906 C 20.605469 25.753906 25.558594 18.25 25.558594 11.742188 C 25.558594 11.53125 25.550781 11.316406 25.542969 11.105469 C 26.503906 10.410156 27.339844 9.542969 28 8.558594 Z"></path>
                                            </svg>
                                        </a><a aria-label="LinkedIn" class="" data-abc="true" tabindex="0">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
                                                <path d="M 8.6425781 4 C 7.1835781 4 6 5.181625 6 6.640625 C 6 8.099625 7.182625 9.3085938 8.640625 9.3085938 C 10.098625 9.3085938 11.283203 8.099625 11.283203 6.640625 C 11.283203 5.182625 10.101578 4 8.6425781 4 z M 21.535156 11 C 19.316156 11 18.0465 12.160453 17.4375 13.314453 L 17.373047 13.314453 L 17.373047 11.310547 L 13 11.310547 L 13 26 L 17.556641 26 L 17.556641 18.728516 C 17.556641 16.812516 17.701266 14.960938 20.072266 14.960938 C 22.409266 14.960937 22.443359 17.145609 22.443359 18.849609 L 22.443359 26 L 26.994141 26 L 27 26 L 27 17.931641 C 27 13.983641 26.151156 11 21.535156 11 z M 6.3632812 11.310547 L 6.3632812 26 L 10.923828 26 L 10.923828 11.310547 L 6.3632812 11.310547 z"></path>
                                            </svg>
                                        </a>
                                    </div>
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="team-item">
                            <figure tabindex="0">
                                <img src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/images/member-1.jpg"
                                     alt="Member 4">
                                <figcaption>
                                    <div class="info">
                                        <h3>Jane Doe</h3>
                                        <p>Marketing Manager</p>
                                    </div>
                                    <div class="social">
                                        <a aria-label="Facebook" class="" data-abc="true" tabindex="0">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
                                                <path d="M 19.253906 2 C 15.311906 2 13 4.0821719 13 8.8261719 L 13 13 L 8 13 L 8 18 L 13 18 L 13 30 L 18 30 L 18 18 L 22 18 L 23 13 L 18 13 L 18 9.671875 C 18 7.884875 18.582766 7 20.259766 7 L 23 7 L 23 2.2050781 C 22.526 2.1410781 21.144906 2 19.253906 2 z"></path>
                                            </svg>
                                        </a><a aria-label="Twitter" class="" data-abc="true" tabindex="0">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
                                                <path d="M 28 8.558594 C 27.117188 8.949219 26.167969 9.214844 25.171875 9.332031 C 26.1875 8.722656 26.96875 7.757813 27.335938 6.609375 C 26.386719 7.171875 25.332031 7.582031 24.210938 7.804688 C 23.3125 6.847656 22.03125 6.246094 20.617188 6.246094 C 17.898438 6.246094 15.691406 8.453125 15.691406 11.171875 C 15.691406 11.558594 15.734375 11.933594 15.820313 12.292969 C 11.726563 12.089844 8.097656 10.128906 5.671875 7.148438 C 5.246094 7.875 5.003906 8.722656 5.003906 9.625 C 5.003906 11.332031 5.871094 12.839844 7.195313 13.722656 C 6.386719 13.695313 5.628906 13.476563 4.964844 13.105469 C 4.964844 13.128906 4.964844 13.148438 4.964844 13.167969 C 4.964844 15.554688 6.660156 17.546875 8.914063 17.996094 C 8.5 18.109375 8.066406 18.171875 7.617188 18.171875 C 7.300781 18.171875 6.988281 18.140625 6.691406 18.082031 C 7.316406 20.039063 9.136719 21.460938 11.289063 21.503906 C 9.605469 22.824219 7.480469 23.609375 5.175781 23.609375 C 4.777344 23.609375 4.386719 23.585938 4 23.539063 C 6.179688 24.9375 8.765625 25.753906 11.546875 25.753906 C 20.605469 25.753906 25.558594 18.25 25.558594 11.742188 C 25.558594 11.53125 25.550781 11.316406 25.542969 11.105469 C 26.503906 10.410156 27.339844 9.542969 28 8.558594 Z"></path>
                                            </svg>
                                        </a><a aria-label="LinkedIn" class="" data-abc="true" tabindex="0">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
                                                <path d="M 8.6425781 4 C 7.1835781 4 6 5.181625 6 6.640625 C 6 8.099625 7.182625 9.3085938 8.640625 9.3085938 C 10.098625 9.3085938 11.283203 8.099625 11.283203 6.640625 C 11.283203 5.182625 10.101578 4 8.6425781 4 z M 21.535156 11 C 19.316156 11 18.0465 12.160453 17.4375 13.314453 L 17.373047 13.314453 L 17.373047 11.310547 L 13 11.310547 L 13 26 L 17.556641 26 L 17.556641 18.728516 C 17.556641 16.812516 17.701266 14.960938 20.072266 14.960938 C 22.409266 14.960937 22.443359 17.145609 22.443359 18.849609 L 22.443359 26 L 26.994141 26 L 27 26 L 27 17.931641 C 27 13.983641 26.151156 11 21.535156 11 z M 6.3632812 11.310547 L 6.3632812 26 L 10.923828 26 L 10.923828 11.310547 L 6.3632812 11.310547 z"></path>
                                            </svg>
                                        </a>
                                    </div>
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    -->


    <!--
    <section id="testimonials" class="section">
        <div class="main-container">
            <div class="inside-container">
                <div class="row">
                    <div class="col-12 our-header">
                        <h2>Testimonials</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="item">
                            <div class="all-testimonial">
                                <div class="text-center"><img class="img-box" src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/images/customer-1.jpg"
                                                              alt="client image1"></div>
                                <div class="testimonial">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
                                        <path d="M 10 8 C 6.699219 8 4 10.699219 4 14 L 4 24 L 14 24 L 14 14 L 6 14 C 6 11.78125 7.78125 10 10 10 Z M 24 8 C 20.699219 8 18 10.699219 18 14 L 18 24 L 28 24 L 28 14 L 20 14 C 20 11.78125 21.78125 10 24 10 Z M 6 16 L 12 16 L 12 22 L 6 22 Z M 20 16 L 26 16 L 26 22 L 20 22 Z"></path>
                                    </svg>
                                    <p>It is such a great template.<br>At last a Bootstrap template that is perfectly
                                        optimized, accessible and easy to use.</p>
                                    <div class="stars-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512.001 512.001">
                                            <path d="M499.92 188.26l-165.84-15.38L268.205 19.9c-4.612-10.71-19.8-10.71-24.41 0L177.92 172.88 12.08 188.26c-11.612 1.077-16.305 15.52-7.544 23.216l125.126 109.922-36.618 162.476c-2.564 11.376 9.722 20.302 19.75 14.348L256 413.188l143.207 85.034c10.027 5.954 22.314-2.972 19.75-14.348l-36.62-162.476 125.126-109.922c8.76-7.696 4.068-22.14-7.544-23.216z"
                                                  fill="#ffdc64"></path>
                                            <path d="M268.205 19.9c-4.612-10.71-19.8-10.71-24.41 0L177.92 172.88 12.08 188.26c-11.612 1.077-16.305 15.52-7.544 23.216l125.126 109.922-36.618 162.476c-2.564 11.376 9.722 20.302 19.75 14.348l31.963-18.98c4.424-182.1 89.034-310.338 156.022-383.697L268.205 19.9z"
                                                  fill="#ffc850"></path>
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512.001 512.001">
                                            <path d="M499.92 188.26l-165.84-15.38L268.205 19.9c-4.612-10.71-19.8-10.71-24.41 0L177.92 172.88 12.08 188.26c-11.612 1.077-16.305 15.52-7.544 23.216l125.126 109.922-36.618 162.476c-2.564 11.376 9.722 20.302 19.75 14.348L256 413.188l143.207 85.034c10.027 5.954 22.314-2.972 19.75-14.348l-36.62-162.476 125.126-109.922c8.76-7.696 4.068-22.14-7.544-23.216z"
                                                  fill="#ffdc64"></path>
                                            <path d="M268.205 19.9c-4.612-10.71-19.8-10.71-24.41 0L177.92 172.88 12.08 188.26c-11.612 1.077-16.305 15.52-7.544 23.216l125.126 109.922-36.618 162.476c-2.564 11.376 9.722 20.302 19.75 14.348l31.963-18.98c4.424-182.1 89.034-310.338 156.022-383.697L268.205 19.9z"
                                                  fill="#ffc850"></path>
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512.001 512.001">
                                            <path d="M499.92 188.26l-165.84-15.38L268.205 19.9c-4.612-10.71-19.8-10.71-24.41 0L177.92 172.88 12.08 188.26c-11.612 1.077-16.305 15.52-7.544 23.216l125.126 109.922-36.618 162.476c-2.564 11.376 9.722 20.302 19.75 14.348L256 413.188l143.207 85.034c10.027 5.954 22.314-2.972 19.75-14.348l-36.62-162.476 125.126-109.922c8.76-7.696 4.068-22.14-7.544-23.216z"
                                                  fill="#ffdc64"></path>
                                            <path d="M268.205 19.9c-4.612-10.71-19.8-10.71-24.41 0L177.92 172.88 12.08 188.26c-11.612 1.077-16.305 15.52-7.544 23.216l125.126 109.922-36.618 162.476c-2.564 11.376 9.722 20.302 19.75 14.348l31.963-18.98c4.424-182.1 89.034-310.338 156.022-383.697L268.205 19.9z"
                                                  fill="#ffc850"></path>
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512.001 512.001">
                                            <path d="M499.92 188.26l-165.84-15.38L268.205 19.9c-4.612-10.71-19.8-10.71-24.41 0L177.92 172.88 12.08 188.26c-11.612 1.077-16.305 15.52-7.544 23.216l125.126 109.922-36.618 162.476c-2.564 11.376 9.722 20.302 19.75 14.348L256 413.188l143.207 85.034c10.027 5.954 22.314-2.972 19.75-14.348l-36.62-162.476 125.126-109.922c8.76-7.696 4.068-22.14-7.544-23.216z"
                                                  fill="#ffdc64"></path>
                                            <path d="M268.205 19.9c-4.612-10.71-19.8-10.71-24.41 0L177.92 172.88 12.08 188.26c-11.612 1.077-16.305 15.52-7.544 23.216l125.126 109.922-36.618 162.476c-2.564 11.376 9.722 20.302 19.75 14.348l31.963-18.98c4.424-182.1 89.034-310.338 156.022-383.697L268.205 19.9z"
                                                  fill="#ffc850"></path>
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512.001 512.001">
                                            <path d="M499.92 188.26l-165.84-15.38L268.205 19.9c-4.612-10.71-19.8-10.71-24.41 0L177.92 172.88 12.08 188.26c-11.612 1.077-16.305 15.52-7.544 23.216l125.126 109.922-36.618 162.476c-2.564 11.376 9.722 20.302 19.75 14.348L256 413.188l143.207 85.034c10.027 5.954 22.314-2.972 19.75-14.348l-36.62-162.476 125.126-109.922c8.76-7.696 4.068-22.14-7.544-23.216z"
                                                  fill="#ffdc64"></path>
                                            <path d="M268.205 19.9c-4.612-10.71-19.8-10.71-24.41 0L177.92 172.88 12.08 188.26c-11.612 1.077-16.305 15.52-7.544 23.216l125.126 109.922-36.618 162.476c-2.564 11.376 9.722 20.302 19.75 14.348l31.963-18.98c4.424-182.1 89.034-310.338 156.022-383.697L268.205 19.9z"
                                                  fill="#ffc850"></path>
                                        </svg>
                                    </div>
                                </div>
                                <div class="author">
                                    <span>Jon Doe</span>
                                    <p>Web Designer</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="item">
                            <div class="all-testimonial">
                                <div class="text-center"><img class="img-box" src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/images/customer-2.jpg"
                                                              alt="client image2"></div>
                                <div class="testimonial">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
                                        <path d="M 10 8 C 6.699219 8 4 10.699219 4 14 L 4 24 L 14 24 L 14 14 L 6 14 C 6 11.78125 7.78125 10 10 10 Z M 24 8 C 20.699219 8 18 10.699219 18 14 L 18 24 L 28 24 L 28 14 L 20 14 C 20 11.78125 21.78125 10 24 10 Z M 6 16 L 12 16 L 12 22 L 6 22 Z M 20 16 L 26 16 L 26 22 L 20 22 Z"></path>
                                    </svg>
                                    <p>This is exactly what I was looking for! Responsive, multipurpose, and fully
                                        accessible.<br>Thank you for creating such an amazing template!</p>
                                    <div class="stars-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512.001 512.001">
                                            <path d="M499.92 188.26l-165.84-15.38L268.205 19.9c-4.612-10.71-19.8-10.71-24.41 0L177.92 172.88 12.08 188.26c-11.612 1.077-16.305 15.52-7.544 23.216l125.126 109.922-36.618 162.476c-2.564 11.376 9.722 20.302 19.75 14.348L256 413.188l143.207 85.034c10.027 5.954 22.314-2.972 19.75-14.348l-36.62-162.476 125.126-109.922c8.76-7.696 4.068-22.14-7.544-23.216z"
                                                  fill="#ffdc64"></path>
                                            <path d="M268.205 19.9c-4.612-10.71-19.8-10.71-24.41 0L177.92 172.88 12.08 188.26c-11.612 1.077-16.305 15.52-7.544 23.216l125.126 109.922-36.618 162.476c-2.564 11.376 9.722 20.302 19.75 14.348l31.963-18.98c4.424-182.1 89.034-310.338 156.022-383.697L268.205 19.9z"
                                                  fill="#ffc850"></path>
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512.001 512.001">
                                            <path d="M499.92 188.26l-165.84-15.38L268.205 19.9c-4.612-10.71-19.8-10.71-24.41 0L177.92 172.88 12.08 188.26c-11.612 1.077-16.305 15.52-7.544 23.216l125.126 109.922-36.618 162.476c-2.564 11.376 9.722 20.302 19.75 14.348L256 413.188l143.207 85.034c10.027 5.954 22.314-2.972 19.75-14.348l-36.62-162.476 125.126-109.922c8.76-7.696 4.068-22.14-7.544-23.216z"
                                                  fill="#ffdc64"></path>
                                            <path d="M268.205 19.9c-4.612-10.71-19.8-10.71-24.41 0L177.92 172.88 12.08 188.26c-11.612 1.077-16.305 15.52-7.544 23.216l125.126 109.922-36.618 162.476c-2.564 11.376 9.722 20.302 19.75 14.348l31.963-18.98c4.424-182.1 89.034-310.338 156.022-383.697L268.205 19.9z"
                                                  fill="#ffc850"></path>
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512.001 512.001">
                                            <path d="M499.92 188.26l-165.84-15.38L268.205 19.9c-4.612-10.71-19.8-10.71-24.41 0L177.92 172.88 12.08 188.26c-11.612 1.077-16.305 15.52-7.544 23.216l125.126 109.922-36.618 162.476c-2.564 11.376 9.722 20.302 19.75 14.348L256 413.188l143.207 85.034c10.027 5.954 22.314-2.972 19.75-14.348l-36.62-162.476 125.126-109.922c8.76-7.696 4.068-22.14-7.544-23.216z"
                                                  fill="#ffdc64"></path>
                                            <path d="M268.205 19.9c-4.612-10.71-19.8-10.71-24.41 0L177.92 172.88 12.08 188.26c-11.612 1.077-16.305 15.52-7.544 23.216l125.126 109.922-36.618 162.476c-2.564 11.376 9.722 20.302 19.75 14.348l31.963-18.98c4.424-182.1 89.034-310.338 156.022-383.697L268.205 19.9z"
                                                  fill="#ffc850"></path>
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512.001 512.001">
                                            <path d="M499.92 188.26l-165.84-15.38L268.205 19.9c-4.612-10.71-19.8-10.71-24.41 0L177.92 172.88 12.08 188.26c-11.612 1.077-16.305 15.52-7.544 23.216l125.126 109.922-36.618 162.476c-2.564 11.376 9.722 20.302 19.75 14.348L256 413.188l143.207 85.034c10.027 5.954 22.314-2.972 19.75-14.348l-36.62-162.476 125.126-109.922c8.76-7.696 4.068-22.14-7.544-23.216z"
                                                  fill="#ffdc64"></path>
                                            <path d="M268.205 19.9c-4.612-10.71-19.8-10.71-24.41 0L177.92 172.88 12.08 188.26c-11.612 1.077-16.305 15.52-7.544 23.216l125.126 109.922-36.618 162.476c-2.564 11.376 9.722 20.302 19.75 14.348l31.963-18.98c4.424-182.1 89.034-310.338 156.022-383.697L268.205 19.9z"
                                                  fill="#ffc850"></path>
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512.001 512.001">
                                            <path d="M499.92 188.26l-165.84-15.38L268.205 19.9c-4.612-10.71-19.8-10.71-24.41 0L177.92 172.88 12.08 188.26c-11.612 1.077-16.305 15.52-7.544 23.216l125.126 109.922-36.618 162.476c-2.564 11.376 9.722 20.302 19.75 14.348L256 413.188l143.207 85.034c10.027 5.954 22.314-2.972 19.75-14.348l-36.62-162.476 125.126-109.922c8.76-7.696 4.068-22.14-7.544-23.216z"
                                                  fill="#ffdc64"></path>
                                            <path d="M268.205 19.9c-4.612-10.71-19.8-10.71-24.41 0L177.92 172.88 12.08 188.26c-11.612 1.077-16.305 15.52-7.544 23.216l125.126 109.922-36.618 162.476c-2.564 11.376 9.722 20.302 19.75 14.348l31.963-18.98c4.424-182.1 89.034-310.338 156.022-383.697L268.205 19.9z"
                                                  fill="#ffc850"></path>
                                        </svg>
                                    </div>
                                </div>
                                <div class="author">
                                    <span>Jane Doe</span>
                                    <p>Web Developer</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    -->

    <!--
    <section id="news" class="section">
        <div class="main-container section-bg">
            <div class="inside-container">
                <div class="row">
                    <div class="col-12 our-header">
                        <h2>Latest News</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="item">
                            <div class="lab-part-content">
                                <div class="lab-bs-item-content">
                                    <div class="lab-bs-item-date">
                                        <span>Jan 01, 2020</span>
                                    </div>
                                    <div class="">
                                        <h3 class="lab-bs-item-title"> Headline 1 </h3>
                                        <p class="lab-bs-item-excerpt">This is a sample excerpt for the first
                                            headline.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="item">
                            <div class="lab-part-content">
                                <div class="lab-bs-item-content">
                                    <div class="lab-bs-item-date">
                                        <span>May 10, 2020</span>
                                    </div>
                                    <div class="">
                                        <h3 class="lab-bs-item-title"> Headline 2 </h3>
                                        <p class="lab-bs-item-excerpt">This is a sample excerpt for the second
                                            headline.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="item">
                            <div class="lab-part-content">
                                <div class="lab-bs-item-content">
                                    <div class="lab-bs-item-date">
                                        <span>Aug 28, 2020</span>
                                    </div>
                                    <div class="">
                                        <h3 class="lab-bs-item-title"> Headline 3 </h3>
                                        <p class="lab-bs-item-excerpt">This is a sample excerpt for the third
                                            headline.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    -->

<!--
    <section id="contact" class="contact section">
        <div class="main-container contact-bg">
            <div class="inside-container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="contact-con">
                            <h2>Get in touch!</h2>
                            <p>The adjacent form is a sample contact form for demonstration purposes.<br><br>When
                                accessing the files of this template, we will provide you with a
                                detailed tutorial on how you can create a contact form that works
                                perfectly with your server.</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <h3>Contact Form</h3>
                        <br>
                        <div class="contact-form">
                            <form action="#">
                                <label for="fname">Name:</label>
                                <input type="text" id="fname" name="firstname" placeholder="Type your full name"
                                       title="FirstName" required="">
                                <label for="email">Email:</label>
                                <input type="email" id="email" name="email" placeholder="Type your email adress"
                                       title="Email" required="">
                                <label for="subject">Message:</label>
                                <textarea id="subject" name="subject" placeholder="Type your message" title="Message"
                                          style="height:200px" required=""></textarea>
                                <input type="submit" value="Submit">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    -->

    <footer id="lab-footer" class="page-footer footer-bg">

        <!--
        <div class="main-container footer-dark call-to-action">
            <div class="inside-container">
                <div class="row">
                    <div class="col-lg-6">
                        <h2>Hier könnte Ihr Text stehen!</h2>
                        <p>Wow, das würde mich ärgern, wenn ich für das template bezahlen müsste...</p>
                        <p><strong>Acquire this template right away!</strong></p>
                    </div>
                    <div class="col-lg-5">
                        <div class="call-to-action-button">
                            <a class="wm-button button size-large"
                               href="">
                                <span class="icon-thumbs-up-alt"></span>Klick mich trotzdem</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        -->

<!--
        <div class="main-container footer-light contacts">
            <div class="inside-container">
                <div class="row">
                    <div class="col-md-4 icon-footer-contact">
                        <div class="footer-contact-icon aligncenter" tabindex="0">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
                                <path d="M 16 3 C 11.042969 3 7 7.042969 7 12 C 7 13.40625 7.570313 15.019531 8.34375 16.78125 C 9.117188 18.542969 10.113281 20.414063 11.125 22.15625 C 13.148438 25.644531 15.1875 28.5625 15.1875 28.5625 L 16 29.75 L 16.8125 28.5625 C 16.8125 28.5625 18.851563 25.644531 20.875 22.15625 C 21.886719 20.414063 22.882813 18.542969 23.65625 16.78125 C 24.429688 15.019531 25 13.40625 25 12 C 25 7.042969 20.957031 3 16 3 Z M 16 5 C 19.878906 5 23 8.121094 23 12 C 23 12.800781 22.570313 14.316406 21.84375 15.96875 C 21.117188 17.621094 20.113281 19.453125 19.125 21.15625 C 17.554688 23.867188 16.578125 25.300781 16 26.15625 C 15.421875 25.300781 14.445313 23.867188 12.875 21.15625 C 11.886719 19.453125 10.882813 17.621094 10.15625 15.96875 C 9.429688 14.316406 9 12.800781 9 12 C 9 8.121094 12.121094 5 16 5 Z M 16 10 C 14.894531 10 14 10.894531 14 12 C 14 13.105469 14.894531 14 16 14 C 17.105469 14 18 13.105469 18 12 C 18 10.894531 17.105469 10 16 10 Z"></path>
                            </svg>
                        </div>
                        <p><?php echo $this->params->get('contactAddress'); ?></p>
                    </div>
                    <div class="col-md-4 icon-footer-contact">
                        <div class="footer-contact-icon aligncenter" tabindex="0">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
                                <path d="M 8.65625 3 C 8.132813 3 7.617188 3.1875 7.1875 3.53125 L 7.125 3.5625 L 7.09375 3.59375 L 3.96875 6.8125 L 4 6.84375 C 3.035156 7.734375 2.738281 9.066406 3.15625 10.21875 C 3.160156 10.226563 3.152344 10.242188 3.15625 10.25 C 4.003906 12.675781 6.171875 17.359375 10.40625 21.59375 C 14.65625 25.84375 19.402344 27.925781 21.75 28.84375 L 21.78125 28.84375 C 22.996094 29.25 24.3125 28.960938 25.25 28.15625 L 28.40625 25 C 29.234375 24.171875 29.234375 22.734375 28.40625 21.90625 L 24.34375 17.84375 L 24.3125 17.78125 C 23.484375 16.953125 22.015625 16.953125 21.1875 17.78125 L 19.1875 19.78125 C 18.464844 19.433594 16.742188 18.542969 15.09375 16.96875 C 13.457031 15.40625 12.621094 13.609375 12.3125 12.90625 L 14.3125 10.90625 C 15.152344 10.066406 15.167969 8.667969 14.28125 7.84375 L 14.3125 7.8125 L 14.21875 7.71875 L 10.21875 3.59375 L 10.1875 3.5625 L 10.125 3.53125 C 9.695313 3.1875 9.179688 3 8.65625 3 Z M 8.65625 5 C 8.730469 5 8.804688 5.035156 8.875 5.09375 L 12.875 9.1875 L 12.96875 9.28125 C 12.960938 9.273438 13.027344 9.378906 12.90625 9.5 L 10.40625 12 L 9.9375 12.4375 L 10.15625 13.0625 C 10.15625 13.0625 11.304688 16.136719 13.71875 18.4375 L 13.9375 18.625 C 16.261719 20.746094 19 21.90625 19 21.90625 L 19.625 22.1875 L 22.59375 19.21875 C 22.765625 19.046875 22.734375 19.046875 22.90625 19.21875 L 27 23.3125 C 27.171875 23.484375 27.171875 23.421875 27 23.59375 L 23.9375 26.65625 C 23.476563 27.050781 22.988281 27.132813 22.40625 26.9375 C 20.140625 26.046875 15.738281 24.113281 11.8125 20.1875 C 7.855469 16.230469 5.789063 11.742188 5.03125 9.5625 C 4.878906 9.15625 4.988281 8.554688 5.34375 8.25 L 5.40625 8.1875 L 8.4375 5.09375 C 8.507813 5.035156 8.582031 5 8.65625 5 Z"></path>
                            </svg>
                        </div>
                        <p><?php echo $this->params->get('contactPhone'); ?></p>
                    </div>
                    <div class="col-md-4 icon-footer-contact">
                        <div class="footer-contact-icon aligncenter" tabindex="0">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
                                <path d="M 3 8 L 3 26 L 29 26 L 29 8 Z M 7.3125 10 L 24.6875 10 L 16 15.78125 Z M 5 10.875 L 15.4375 17.84375 L 16 18.1875 L 16.5625 17.84375 L 27 10.875 L 27 24 L 5 24 Z"></path>
                            </svg>
                        </div>
                        <p><?php echo $this->params->get('contactEmail'); ?></p>
                    </div>
                </div>
                <div class="row ">
                </div>
            </div>
        </div>
        -->

        <div class="main-container footer-dark">
            <div class="inside-container">
                <div class="row footer-dark">
                    <div class="col-sm-6 col-lg-4 foot-col-padd">
                        <div class="foot-logo">
                            <img src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/images/b-free-logo.svg" alt="B free footer Logo" class="float-center img-fluid" style="max-width: 50%">
                        </div>
                        <div class="foot-logo">
                            <img src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/images/fra-uas-logo.png" alt="B free footer Logo" class="float-center img-fluid" style="max-width: 50%">
                        </div>
                        <div class="dream-text">
                            <p>Ein Projekt des Masterstudiengangs <i><a href="https://www.frankfurt-university.de/de/studium/master-studiengange/inclusive-design-id-msc/" target="_blank">Inclusive Design</a></i> der <a href="https://www.frankfurt-university.de/" target="_blank">Frankfurt University of Applied Sciences</a></p>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4 foot-col-padd">
                        <h3><?php echo JText::_('TPL_TAG_CLOUD'); ?></h3>
                        <div class="tagcloud">
                            <ul class="tagcloudul">
                                <li><a><span>One Page</span></a></li>
                                <li><a><span>WCAG 2.1 (Level AAA)</span></a></li>
                                <li><a><span>HTML5</span></a></li>
                                <li><a><span>Bootstrap 4</span></a></li>
                                <li><a><span>Template</span></a></li>
                                <li><a><span>ADA Compliant</span></a></li>
                                <li><a><span>Accessibility Ready</span></a></li>
                                <li><a><span>jQuery</span></a></li>
                                <li><a><span>Fully Responsive</span></a></li>
                                <li><a><span>CSS3</span></a></li>
                            </ul>
                            <jdoc:include type="modules" name="tag-cloud"/>
                        </div>
                    </div>

                    <div class="col-sm-6 col-lg-4 contact-col">

                    <h3><?php echo JText::_('TPL_CONTACT_DETAILS'); ?></h3>
                    <div class="row contact-row-margin">
                        <div class="contact-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
                                <path d="M 16 3 C 11.042969 3 7 7.042969 7 12 C 7 13.40625 7.570313 15.019531 8.34375 16.78125 C 9.117188 18.542969 10.113281 20.414063 11.125 22.15625 C 13.148438 25.644531 15.1875 28.5625 15.1875 28.5625 L 16 29.75 L 16.8125 28.5625 C 16.8125 28.5625 18.851563 25.644531 20.875 22.15625 C 21.886719 20.414063 22.882813 18.542969 23.65625 16.78125 C 24.429688 15.019531 25 13.40625 25 12 C 25 7.042969 20.957031 3 16 3 Z M 16 5 C 19.878906 5 23 8.121094 23 12 C 23 12.800781 22.570313 14.316406 21.84375 15.96875 C 21.117188 17.621094 20.113281 19.453125 19.125 21.15625 C 17.554688 23.867188 16.578125 25.300781 16 26.15625 C 15.421875 25.300781 14.445313 23.867188 12.875 21.15625 C 11.886719 19.453125 10.882813 17.621094 10.15625 15.96875 C 9.429688 14.316406 9 12.800781 9 12 C 9 8.121094 12.121094 5 16 5 Z M 16 10 C 14.894531 10 14 10.894531 14 12 C 14 13.105469 14.894531 14 16 14 C 17.105469 14 18 13.105469 18 12 C 18 10.894531 17.105469 10 16 10 Z"></path>
                            </svg>
                        </div>
                        <p><?php echo $this->params->get('contactName'); ?><br/><?php echo $this->params->get('contactStreet'); ?><br/><?php echo $this->params->get('contactZipcode'); ?>, <?php echo $this->params->get('contactCity'); ?></p>
                    </div>
                    <div class="row contact-row-margin">
                        <div class="contact-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
                                <path d="M 8.65625 3 C 8.132813 3 7.617188 3.1875 7.1875 3.53125 L 7.125 3.5625 L 7.09375 3.59375 L 3.96875 6.8125 L 4 6.84375 C 3.035156 7.734375 2.738281 9.066406 3.15625 10.21875 C 3.160156 10.226563 3.152344 10.242188 3.15625 10.25 C 4.003906 12.675781 6.171875 17.359375 10.40625 21.59375 C 14.65625 25.84375 19.402344 27.925781 21.75 28.84375 L 21.78125 28.84375 C 22.996094 29.25 24.3125 28.960938 25.25 28.15625 L 28.40625 25 C 29.234375 24.171875 29.234375 22.734375 28.40625 21.90625 L 24.34375 17.84375 L 24.3125 17.78125 C 23.484375 16.953125 22.015625 16.953125 21.1875 17.78125 L 19.1875 19.78125 C 18.464844 19.433594 16.742188 18.542969 15.09375 16.96875 C 13.457031 15.40625 12.621094 13.609375 12.3125 12.90625 L 14.3125 10.90625 C 15.152344 10.066406 15.167969 8.667969 14.28125 7.84375 L 14.3125 7.8125 L 14.21875 7.71875 L 10.21875 3.59375 L 10.1875 3.5625 L 10.125 3.53125 C 9.695313 3.1875 9.179688 3 8.65625 3 Z M 8.65625 5 C 8.730469 5 8.804688 5.035156 8.875 5.09375 L 12.875 9.1875 L 12.96875 9.28125 C 12.960938 9.273438 13.027344 9.378906 12.90625 9.5 L 10.40625 12 L 9.9375 12.4375 L 10.15625 13.0625 C 10.15625 13.0625 11.304688 16.136719 13.71875 18.4375 L 13.9375 18.625 C 16.261719 20.746094 19 21.90625 19 21.90625 L 19.625 22.1875 L 22.59375 19.21875 C 22.765625 19.046875 22.734375 19.046875 22.90625 19.21875 L 27 23.3125 C 27.171875 23.484375 27.171875 23.421875 27 23.59375 L 23.9375 26.65625 C 23.476563 27.050781 22.988281 27.132813 22.40625 26.9375 C 20.140625 26.046875 15.738281 24.113281 11.8125 20.1875 C 7.855469 16.230469 5.789063 11.742188 5.03125 9.5625 C 4.878906 9.15625 4.988281 8.554688 5.34375 8.25 L 5.40625 8.1875 L 8.4375 5.09375 C 8.507813 5.035156 8.582031 5 8.65625 5 Z"></path>
                            </svg>
                        </div>
                        <p><?php echo $this->params->get('contactPhone'); ?></p>
                    </div>
                    <div class="row contact-row-margin">
                        <div class="contact-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
                                <path d="M 3 8 L 3 26 L 29 26 L 29 8 Z M 7.3125 10 L 24.6875 10 L 16 15.78125 Z M 5 10.875 L 15.4375 17.84375 L 16 18.1875 L 16.5625 17.84375 L 27 10.875 L 27 24 L 5 24 Z"></path>
                            </svg>
                        </div>
                        <p><?php echo $this->params->get('contactEmail'); ?></p>
                    </div>

                </div>
            </div>
        </div>


        <!--
        <div class="main-container footer-dark">
            <div class="inside-container">
                <div class="row footer-dark">
                    <div class=" col-sm-6 col-lg-3 foot-col-padd">
                        <div class="foot-logo">
                            <img src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/images/b-free-logo.svg"
                                 alt="B free footer Logo" class="float-center img-fluid">
                        </div>
                        <div class="dream-text">
                            <p>This is a modern, multipurpose, responsive and fully accessible Bootstrap
                                template.</p>
                        </div>
                        <div class="foot-icon">
                            <jdoc:include type="module" name="social-icons"/>
                        </div>
                    </div>
                    <div class=" col-sm-6 col-lg-3">
                        <h3>Popular Links</h3>
                        <div class="row">
                            <div class="col-6 pop-link">
                                <a class="" data-scroll="" href="#home">Home</a>
                                <a class="" data-scroll="" href="#about">About</a>
                                <a class="" data-scroll="" href="#features">Features</a>
                                <a class="" data-scroll="" href="#portfolios">Portfolio</a>
                            </div>
                            <div class=" col-6  pop-link">
                                <a class="" data-scroll="" href="#team">Team</a>
                                <a class="" data-scroll="" href="#news">News</a>
                                <a class="" data-scroll="" href="#contact">Contact</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6  col-lg-3">
                        <h3>Recent Posts</h3>
                        <div class="row ltl-blog">
                            <div class="col blog-post">
                                <p>Blog Post #1 - Title 1</p>
                                <div class="blog-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
                                        <path d="M 9.5 5 C 5.363281 5 2 8.402344 2 12.5 C 2 13.929688 2.648438 15.167969 3.25 16.0625 C 3.851563 16.957031 4.46875 17.53125 4.46875 17.53125 L 15.28125 28.375 L 16 29.09375 L 16.71875 28.375 L 27.53125 17.53125 C 27.53125 17.53125 30 15.355469 30 12.5 C 30 8.402344 26.636719 5 22.5 5 C 19.066406 5 16.855469 7.066406 16 7.9375 C 15.144531 7.066406 12.933594 5 9.5 5 Z M 9.5 7 C 12.488281 7 15.25 9.90625 15.25 9.90625 L 16 10.75 L 16.75 9.90625 C 16.75 9.90625 19.511719 7 22.5 7 C 25.542969 7 28 9.496094 28 12.5 C 28 14.042969 26.125 16.125 26.125 16.125 L 16 26.25 L 5.875 16.125 C 5.875 16.125 5.390625 15.660156 4.90625 14.9375 C 4.421875 14.214844 4 13.273438 4 12.5 C 4 9.496094 6.457031 7 9.5 7 Z"></path>
                                    </svg>
                                    <span> 88 </span>
                                    <span class="blog-vl"> | </span>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
                                        <path d="M 3 6 L 3 26 L 12.585938 26 L 16 29.414063 L 19.414063 26 L 29 26 L 29 6 Z M 5 8 L 27 8 L 27 24 L 18.585938 24 L 16 26.585938 L 13.414063 24 L 5 24 Z M 9 11 L 9 13 L 23 13 L 23 11 Z M 9 15 L 9 17 L 23 17 L 23 15 Z M 9 19 L 9 21 L 19 21 L 19 19 Z"></path>
                                    </svg>
                                    <span> 50 </span>
                                </div>
                            </div>
                        </div>
                        <br>
                        <br>
                        <div class="row ltl-blog">
                            <div class="col blog-post">
                                <p>Blog Post #2 - Title 2</p>
                                <div class="blog-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
                                        <path d="M 9.5 5 C 5.363281 5 2 8.402344 2 12.5 C 2 13.929688 2.648438 15.167969 3.25 16.0625 C 3.851563 16.957031 4.46875 17.53125 4.46875 17.53125 L 15.28125 28.375 L 16 29.09375 L 16.71875 28.375 L 27.53125 17.53125 C 27.53125 17.53125 30 15.355469 30 12.5 C 30 8.402344 26.636719 5 22.5 5 C 19.066406 5 16.855469 7.066406 16 7.9375 C 15.144531 7.066406 12.933594 5 9.5 5 Z M 9.5 7 C 12.488281 7 15.25 9.90625 15.25 9.90625 L 16 10.75 L 16.75 9.90625 C 16.75 9.90625 19.511719 7 22.5 7 C 25.542969 7 28 9.496094 28 12.5 C 28 14.042969 26.125 16.125 26.125 16.125 L 16 26.25 L 5.875 16.125 C 5.875 16.125 5.390625 15.660156 4.90625 14.9375 C 4.421875 14.214844 4 13.273438 4 12.5 C 4 9.496094 6.457031 7 9.5 7 Z"></path>
                                    </svg>
                                    <span> 64 </span>
                                    <span class="blog-vl"> | </span>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
                                        <path d="M 3 6 L 3 26 L 12.585938 26 L 16 29.414063 L 19.414063 26 L 29 26 L 29 6 Z M 5 8 L 27 8 L 27 24 L 18.585938 24 L 16 26.585938 L 13.414063 24 L 5 24 Z M 9 11 L 9 13 L 23 13 L 23 11 Z M 9 15 L 9 17 L 23 17 L 23 15 Z M 9 19 L 9 21 L 19 21 L 19 19 Z"></path>
                                    </svg>
                                    <span> 20 </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3 contact-col">
                        <h3>Contact Details</h3>
                        <div class="row contact-row-margin">
                            <div class="contact-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
                                    <path d="M 16 3 C 11.042969 3 7 7.042969 7 12 C 7 13.40625 7.570313 15.019531 8.34375 16.78125 C 9.117188 18.542969 10.113281 20.414063 11.125 22.15625 C 13.148438 25.644531 15.1875 28.5625 15.1875 28.5625 L 16 29.75 L 16.8125 28.5625 C 16.8125 28.5625 18.851563 25.644531 20.875 22.15625 C 21.886719 20.414063 22.882813 18.542969 23.65625 16.78125 C 24.429688 15.019531 25 13.40625 25 12 C 25 7.042969 20.957031 3 16 3 Z M 16 5 C 19.878906 5 23 8.121094 23 12 C 23 12.800781 22.570313 14.316406 21.84375 15.96875 C 21.117188 17.621094 20.113281 19.453125 19.125 21.15625 C 17.554688 23.867188 16.578125 25.300781 16 26.15625 C 15.421875 25.300781 14.445313 23.867188 12.875 21.15625 C 11.886719 19.453125 10.882813 17.621094 10.15625 15.96875 C 9.429688 14.316406 9 12.800781 9 12 C 9 8.121094 12.121094 5 16 5 Z M 16 10 C 14.894531 10 14 10.894531 14 12 C 14 13.105469 14.894531 14 16 14 C 17.105469 14 18 13.105469 18 12 C 18 10.894531 17.105469 10 16 10 Z"></path>
                                </svg>
                            </div>
                            <p><?php echo $this->params->get('contactAddress'); ?></p>
                        </div>
                        <div class="row contact-row-margin">
                            <div class="contact-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
                                    <path d="M 8.65625 3 C 8.132813 3 7.617188 3.1875 7.1875 3.53125 L 7.125 3.5625 L 7.09375 3.59375 L 3.96875 6.8125 L 4 6.84375 C 3.035156 7.734375 2.738281 9.066406 3.15625 10.21875 C 3.160156 10.226563 3.152344 10.242188 3.15625 10.25 C 4.003906 12.675781 6.171875 17.359375 10.40625 21.59375 C 14.65625 25.84375 19.402344 27.925781 21.75 28.84375 L 21.78125 28.84375 C 22.996094 29.25 24.3125 28.960938 25.25 28.15625 L 28.40625 25 C 29.234375 24.171875 29.234375 22.734375 28.40625 21.90625 L 24.34375 17.84375 L 24.3125 17.78125 C 23.484375 16.953125 22.015625 16.953125 21.1875 17.78125 L 19.1875 19.78125 C 18.464844 19.433594 16.742188 18.542969 15.09375 16.96875 C 13.457031 15.40625 12.621094 13.609375 12.3125 12.90625 L 14.3125 10.90625 C 15.152344 10.066406 15.167969 8.667969 14.28125 7.84375 L 14.3125 7.8125 L 14.21875 7.71875 L 10.21875 3.59375 L 10.1875 3.5625 L 10.125 3.53125 C 9.695313 3.1875 9.179688 3 8.65625 3 Z M 8.65625 5 C 8.730469 5 8.804688 5.035156 8.875 5.09375 L 12.875 9.1875 L 12.96875 9.28125 C 12.960938 9.273438 13.027344 9.378906 12.90625 9.5 L 10.40625 12 L 9.9375 12.4375 L 10.15625 13.0625 C 10.15625 13.0625 11.304688 16.136719 13.71875 18.4375 L 13.9375 18.625 C 16.261719 20.746094 19 21.90625 19 21.90625 L 19.625 22.1875 L 22.59375 19.21875 C 22.765625 19.046875 22.734375 19.046875 22.90625 19.21875 L 27 23.3125 C 27.171875 23.484375 27.171875 23.421875 27 23.59375 L 23.9375 26.65625 C 23.476563 27.050781 22.988281 27.132813 22.40625 26.9375 C 20.140625 26.046875 15.738281 24.113281 11.8125 20.1875 C 7.855469 16.230469 5.789063 11.742188 5.03125 9.5625 C 4.878906 9.15625 4.988281 8.554688 5.34375 8.25 L 5.40625 8.1875 L 8.4375 5.09375 C 8.507813 5.035156 8.582031 5 8.65625 5 Z"></path>
                                </svg>
                            </div>
                            <p><?php echo $this->params->get('contactPhone'); ?></p>
                        </div>
                        <div class="row contact-row-margin">
                            <div class="contact-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
                                    <path d="M 3 8 L 3 26 L 29 26 L 29 8 Z M 7.3125 10 L 24.6875 10 L 16 15.78125 Z M 5 10.875 L 15.4375 17.84375 L 16 18.1875 L 16.5625 17.84375 L 27 10.875 L 27 24 L 5 24 Z"></path>
                                </svg>
                            </div>
                            <p><?php echo $this->params->get('contactEmail'); ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        -->

        <!--
        <div class="main-container footer-light">
            <div class="inside-container">
                <div class="row footer-light">
                    <div class=" col-sm-6 col-lg-4">
                        <h3>Tag Cloud</h3>
                        <div class="tagcloud">
                            <ul class="tagcloudul">
                                <li><a><span>One Page</span></a></li>
                                <li><a><span>WCAG 2.1 (Level AAA)</span></a></li>
                                <li><a><span>HTML5</span></a></li>
                                <li><a><span>Bootstrap 4</span></a></li>
                                <li><a><span>Template</span></a></li>
                                <li><a><span>ADA Compliant</span></a></li>
                                <li><a><span>Accessibility Ready</span></a></li>
                                <li><a><span>jQuery</span></a></li>
                                <li><a><span>Fully Responsive</span></a></li>
                                <li><a><span>CSS3</span></a></li>
                            </ul>
                            <jdoc:include type="modules" name="tag-cloud"/>
                        </div>
                    </div>
                    <div class=" col-sm-6 col-lg-4">
                        <h3>Opening Hour</h3>
                        <div class="footer-widget">
                            <div class="footer-widget-content">
                                <div class="open-time">
                                    <ul class="opening-time">
                                        <li>
                                            <p class="clock-time">
                                                <strong>Monday - Friday:</strong> 8am - 6pm </p>
                                        </li>
                                        <li>
                                            <p>
                                                <strong>Saturday:</strong> 8am - 2pm </p>
                                        </li>
                                        <li>
                                            <p>
                                                <strong>Sunday:</strong> Closed </p>
                                        </li>
                                        <li>
                                            <p>
                                                <strong>Public Holidays:</strong> Closed </p>
                                        </li>
                                    </ul>
                                    <div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <h3>Contact Form</h3>
                        <form method="post">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="name1">Your Name:</label>
                                        <input type="text" name="txtName" id="name1" class="form-control"
                                               placeholder="Type Full Name *" required="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="email1">Your Email:</label>
                                        <input type="email" name="txtEmail" id="email1" class="form-control"
                                               placeholder="Type Email ID *" required="">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="msg1">Your Message:</label>
                                        <textarea name="txtMsg" id="msg1" class="form-control"
                                                  placeholder="Type Message *" style="width: 100%; height: 115px;"
                                                  required=""></textarea>
                                    </div>
                                    <div class="form-group">
                                        <input type="submit" name="btnSubmit" class="btnContact" value="Send Message">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        -->


        <div class="footer-container footer-dark">
            <div class="inside-container">
                <div class="row">
                    <div class="lab-footer-menu">
                        <jdoc:include type="modules" name="footer-menu"/>
                    </div>
                </div>
            </div>
        </div>


        <div class="footer-container footer-dark">
            <div class="inside-container">
                <div class="row footer-dark">
                    <div class="col-md-6  col-sm-6 col-12 copyright-text">
                        <p> ©
                            <script>
                                document.write(new Date().getFullYear());
                            </script>
                            <a href="" target="_blank" rel="noopener"><?php echo $this->params->get('siteOwner'); ?></a>.
                        </p>
                    </div>
                    <div class="col-md-6  col-sm-6 col-12 copyright-text">
                        <div class="footer-social-left">
                            <jdoc:include type="module" name="social-icons"/>
                        </div>
                        <div id="lab-back-top" style="">
                            <a id="backtotop" tabindex="0">
                                <svg xmlns="http://www.w3.org/2000/svg" style="isolation:isolate" viewBox="0 0 285 285">
                                    <defs></defs>
                                    <path fill="#FFF"
                                          d="M282 195L149 62a9 9 0 00-13 0L3 195a9 9 0 000 13l14 15a9 9 0 0013 0l112-113 113 113a9 9 0 0013 0l14-15a9 9 0 000-13z"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </footer>

</div>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"
        integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s"
        crossorigin="anonymous"></script>
<script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/javascript/mixitup.js"></script>
<script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/javascript/js-cookie.js"></script>
<script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/javascript/template.js"></script>


</body>
</html>