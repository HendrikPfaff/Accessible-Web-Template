let LaboffcanvaslastScroll;
let cookie_path = {"cookiePath": "lab_cookie"};
let fonts = {
    '.lab-link-default': 'fontfamily_default',
    '.lab-font-inter': 'fontfamily_inter',
    '.lab-font-andika': 'fontfamily_andika',
    '.lab-font-fsme': 'fontfamily_fsme',
    '.lab-font-tiresias': 'fontfamily_tiresias',
    '.lab-font-opendyslexic': 'fontfamily_opendyslexic'
};

function setFont(fnt) {
    Cookies.set('fontfamily', fonts['.' + fnt], {expires: 7, path: cookie_path.cookiePath});
    jQuery('body').removeClass(Object.values(fonts).join(" ")).addClass(fonts['.' + fnt]);
}

function stickyResize() {
    let container = jQuery('#lab-header');
    if (jQuery('body').hasClass('sticky-bar') && !(container.hasClass('top-bar-over-header'))) {
        let bar = jQuery('#lab-logo-nav');
        if (bar.length) {
            container.css('padding-top', (bar.outerHeight()) + 'px');
        }
    }
}

function scrollToSection(event) {
    event.preventDefault();
    let $section = jQuery(jQuery(this).attr('href'));
    jQuery(this).closest("li").addClass("current-menu-item").siblings().removeClass('current-menu-item');
    jQuery('html, body').animate({scrollTop: $section.offset().top}, 500);
}

function count(options) {
    let $this = jQuery(this);
    options = $.extend({}, options || {}, $this.data('countToOptions') || {});
    $this.countTo(options);
}

function scrolledBar() {
    jQuery('body').toggleClass('scrolled', jQuery(window).scrollTop() >= 5);
}

function LaboffcanvasToggleNav() {
    let body = jQuery('body');
    if (body.hasClass('off-canvas-opened')) {
        body.removeClass('off-canvas-opened');
        jQuery('#lab-offcanvas, #lab-canvas').find('a').attr('tabindex', -1);
        setTimeout(function () {
            body.removeClass('overflow');
            body.scrollTop(LaboffcanvaslastScroll);
        }, 300);
    } else {
        LaboffcanvaslastScroll = jQuery(window).scrollTop();
        body.addClass('off-canvas-opened overflow');
        jQuery('#lab-offcanvas, #lab-canvas').find('a').attr('tabindex', 0);
    }
}

function expand() {
    let expandHeight = 0;
    let widget = jQuery('.lab-widget.lab-expand');
    if (widget.length) {
        let child = widget.children().first();
        let container = widget.closest('.lab-container');
        let container_wrapper = container.parent();
        container_wrapper.addClass('expand');
        expandHeight = container.height();
        child.css('min-height', expandHeight);
    }
}

function formatter(value, settings) {
    return value.toFixed(settings.decimals);
}

function onComplete(value) {
    return value;
}

jQuery(document).ready(function () {
    let nightModeButton = jQuery('.toggle-night-mode');
    let contrastButton = jQuery('.toggle-contrast');
    let ReadableFontButton = jQuery('.lab-font-readable');
    let font_normal = jQuery('.lab-font-normal');
    let font_larger = jQuery('.lab-font-larger');
    let font_smaller = jQuery('.lab-font-smaller');
    let link_underline = jQuery('.lab-link-underline');
    let open_acces = jQuery('#settings_close');
    let reset_all = jQuery('.lab-reset');
    let body = jQuery('body');
    let viewMode = null;
    body.toggleClass('font-readable', Cookies.get('readablefont') === 'yes');
    body.toggleClass('link-underline', Cookies.get('underline') === 'yes');
    let fsCount = 100;
    let cookieFont = Cookies.get('lab-font-size');
    if (cookieFont) {
        fsCount = parseInt(cookieFont);
        if (!body.hasClass('fsize' + fsCount)) {
            body.addClass('fsize' + fsCount);
        }
    } else {
        body.removeClass('fsize70 fsize80 fsize90 fsize100 fsize110 fsize120 fsize130');
    }

    nightModeButton.click(function(event){
        event.preventDefault();
        if(viewMode !== "night"){

        } else {

        }
    });
    contrastButton.click(function(event){
        event.preventDefault();
        if(viewMode !== "contrast"){
            body.css("background-color", "#000");
        } else {
            body.css("background-color", "#fff");
        }
    });
    font_larger.click(function (event) {
        event.preventDefault();
        if (fsCount < 130) {
            body.removeClass('fsize' + fsCount);
            fsCount = fsCount + 10;
            body.addClass('fsize' + fsCount);
            Cookies.set('lab-font-size', fsCount, {expires: 7, path: cookie_path.cookiePath});
        }
    });
    font_smaller.click(function (event) {
        event.preventDefault();
        if (fsCount > 70) {
            body.removeClass('fsize' + fsCount);
            fsCount = fsCount - 10;
            body.addClass('fsize' + fsCount);
            Cookies.set('lab-font-size', fsCount, {expires: 7, path: cookie_path.cookiePath});
        }
    });
    font_normal.click(function (event) {
        event.preventDefault();
        fsCount = 100;
        body.removeClass('fsize70 fsize80 fsize90 fsize100 fsize110 fsize120 fsize130 font-readable link-underline');
        Cookies.remove('lab-font-size', {path: cookie_path.cookiePath});
        Cookies.remove('readablefont', {path: cookie_path.cookiePath});
        Cookies.remove('underline', {path: cookie_path.cookiePath});
    });
    ReadableFontButton.click(function (event) {
        event.preventDefault();
        Cookies.set('readablefont', 'yes', {expires: 7, path: cookie_path.cookiePath});
        if (!body.hasClass('font-readable')) {
            body.addClass('font-readable');
        }
        jQuery(window).trigger('resize');
    });
    link_underline.click(function (event) {
        event.preventDefault();
        Cookies.set('underline', 'yes', {expires: 7, path: cookie_path.cookiePath});
        if (!body.hasClass('link-underline')) {
            body.addClass('link-underline');
        }
    });
    reset_all.click(function () {
        body.removeClass('fsize70 fsize80 fsize90 fsize100 fsize110 fsize120 fsize130 font-readable link-underline fontfamily_inter fontfamily_andika fontfamily_fsme fontfamily_tiresias fontfamily_opendyslexic');
        fsCount = 100;
        Cookies.remove('lab-font-size', {path: cookie_path.cookiePath});
        Cookies.remove('readablefont', {path: cookie_path.cookiePath});
        Cookies.remove('underline', {path: cookie_path.cookiePath});
        Cookies.remove('fontfamily', {path: cookie_path.cookiePath});
    });
    jQuery(Object.keys(fonts).join(",") + "").click(function (event) {
        event.preventDefault();
        setFont(this.className);
    });
    body.addClass(Cookies.get('fontfamily'));
    open_acces.click(function () {
        jQuery("body").toggleClass("opened-settings");
        setTimeout(function () {
            stickyResize();
        }, 200);
    });
    open_acces.keypress(function (event) {
        if (event.keyCode == 13) {
            jQuery("body").toggleClass("opened-settings");
            setTimeout(function () {
                stickyResize();
            }, 200);
        }
    });
    jQuery("#lab-main #lab-wcag-mobile a").click(function () {
        jQuery("#lab-main .lab-wcag-settings li:first-child ul li:nth-child(2) button").focus();
    });
    jQuery("#lab-bar-left #lab-logo a").focus(function () {
        if (jQuery(this).hasClass("logo-focused")) {
            jQuery("#lab-offcanvas-button .toggle-nav, #lab-canvas-button .lab-toggle-nav").focus();
        }
        jQuery(this).addClass("logo-focused");
    });
    if (jQuery(window).width() > 991) {
        jQuery("#lab-main #lab-wcag-mobile a, #lab-main .toggle-nav, #lab-offcanvas .toggle-nav.close, #lab-offcanvas .lab-search-box input.s, #lab-offcanvas .lab-search-box .button").attr('tabindex', '-1');
    }
    mixitup('#portfolio');
    let mySidenav = jQuery("#mySidenav");
    jQuery(".openNav").click(function () {
        mySidenav.css('width', mySidenav.width() > 1 ? "0" : "300px");
        mySidenav.css('display', "block");
    });
    jQuery(".openNav").keypress(function (event) {
        if (event.keyCode == 13) {
            mySidenav.css('width', mySidenav.width() > 1 ? "0" : "300px");
            mySidenav.css('display', "block");
        }
    });
    jQuery(".closebtn").click(function () {
        mySidenav.css('width', "0");
        mySidenav.css('display', "none");
    });
    jQuery(".closebtn").keypress(function (event) {
        if (event.keyCode == 13) {
            mySidenav.css('width', "0");
            mySidenav.css('display', "none");
        }
    });
    jQuery('[data-scroll]').on('click', scrollToSection);
    jQuery('.count-number').data('countToOptions', {
        formatter: function (value, options) {
            return value.toFixed(options.decimals).replace(/\B(?=(?:\d{3})+(?!\d))/g, ',');
        }
    });
    jQuery('.timer').each(count);
    scrolledBar();
    expand();
    jQuery('.lab-section-space').closest('.lab-container').parent().addClass('nospace');
    jQuery('.lab-section-space-top').closest('.lab-container').parent().addClass('nospace-top');
    jQuery('.lab-section-space-bottom').closest('.lab-container').parent().addClass('nospace-bottom');
    let LabboxWidget = jQuery('.row .lab-widget');
    LabboxWidget.first().addClass('first');
    LabboxWidget.last().addClass('last');
    let LabbackTop = jQuery('#lab-back-top');
    LabbackTop.hide();
    jQuery(window).scroll(function () {
        if (jQuery(this).scrollTop() > 100) {
            LabbackTop.fadeIn();
        } else {
            LabbackTop.fadeOut();
        }
    });
    LabbackTop.find('a').click(function () {
        jQuery('body,html').animate({scrollTop: 0}, 800);
        return false;
    });
    LabbackTop.find('a').keypress(function (event) {
        if (event.keyCode == 13) {
            jQuery('body,html').animate({scrollTop: 0}, 800);
            return false;
        }
    });
    jQuery(document).on('click', function () {
        if (jQuery('body').hasClass('off-canvas-opened')) {
            LaboffcanvasToggleNav();
        }
    });
    let labOffcanvas = jQuery('#lab-offcanvas');
    labOffcanvas.find('a').attr('tabindex', -1);
    jQuery('#lab-offcanvas-button, .toggle-nav .open').click(function (e) {
        e.stopPropagation();
        e.preventDefault();
        jQuery(this).toggleClass('active');
        labOffcanvas.css('right', '0');
        LaboffcanvasToggleNav();
    });
    jQuery('.toggle-nav-close').click(function (e) {
        labOffcanvas.css('right', '-330px');
    });
    labOffcanvas.click(function (e) {
        e.stopPropagation();
    });
    jQuery('#lab-canvas').click(function (e) {
        e.stopPropagation();
    });
    jQuery(window).scroll(function () {
        scrolledBar();
    });
});
(function ($) {
    "use strict";
    $.fn.countTo = function (options) {
        options = options || {};
        return jQuery(this).each(function () {
            let settings = $.extend({}, $.fn.countTo.defaults, {
                from: jQuery(this).data('from'),
                to: jQuery(this).data('to'),
                speed: jQuery(this).data('speed'),
                refreshInterval: jQuery(this).data('refresh-interval'),
                decimals: jQuery(this).data('decimals')
            }, options);
            let loops = Math.ceil(settings.speed / settings.refreshInterval),
                increment = (settings.to - settings.from) / loops;
            let self = this, $self = jQuery(this), loopCount = 0, value = settings.from, data = $self.data('countTo') || {};
            $self.data('countTo', data);
            if (data.interval) {
                clearInterval(data.interval);
            }
            data.interval = setInterval(updateTimer, settings.refreshInterval);
            render(value);

            function updateTimer() {
                value += increment;
                loopCount++;
                render(value);
                if (typeof (settings.onUpdate) == 'function') {
                    settings.onUpdate.call(self, value);
                }
                if (loopCount >= loops) {
                    $self.removeData('countTo');
                    clearInterval(data.interval);
                    value = settings.to;
                    if (typeof (settings.onComplete) == 'function') {
                        settings.onComplete.call(self, value);
                    }
                }
            }

            function render(value) {
                let formattedValue = settings.formatter.call(self, value, settings);
                $self.html(formattedValue + "+");
            }
        });
    };
    $.fn.countTo.defaults = {
        from: 0,
        to: 0,
        speed: 1000,
        refreshInterval: 100,
        decimals: 0,
        formatter: formatter,
        onUpdate: null,
        onComplete: onComplete
    };
})(jQuery);