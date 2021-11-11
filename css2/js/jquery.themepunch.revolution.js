/**************************************************************************
 * jquery.themepunch.revolution.js - jQuery Plugin for Revolution Slider
 * @version: 5.4.2 (06.04.2017)
 * @requires jQuery v1.7 or later (tested on 1.9)
 * @author ThemePunch
**************************************************************************/
!function (jQuery, undefined) {
  'use strict';
  var version = {
    core: '5.4.2',
    'revolution.extensions.actions.min.js': '2.0.4',
    'revolution.extensions.carousel.min.js': '1.2.1',
    'revolution.extensions.kenburn.min.js': '1.2.0',
    'revolution.extensions.layeranimation.min.js': '3.6.1',
    'revolution.extensions.navigation.min.js': '1.3.3',
    'revolution.extensions.parallax.min.js': '2.2.0',
    'revolution.extensions.slideanims.min.js': '1.7',
    'revolution.extensions.video.min.js': '2.1.0'
  };
  jQuery.fn.extend({
    revolution: function (a) {
      var b = {
        delay: 9000,
        responsiveLevels: 4064,
        visibilityLevels: [
          2048,
          1024,
          778,
          480
        ],
        gridwidth: 960,
        gridheight: 500,
        minHeight: 0,
        autoHeight: 'off',
        sliderType: 'standard',
        sliderLayout: 'auto',
        fullScreenAutoWidth: 'off',
        fullScreenAlignForce: 'off',
        fullScreenOffsetContainer: '',
        fullScreenOffset: '0',
        hideCaptionAtLimit: 0,
        hideAllCaptionAtLimit: 0,
        hideSliderAtLimit: 0,
        disableProgressBar: 'off',
        stopAtSlide: - 1,
        stopAfterLoops: - 1,
        shadow: 0,
        dottedOverlay: 'none',
        startDelay: 0,
        lazyType: 'smart',
        spinner: 'spinner0',
        shuffle: 'off',
        viewPort: {
          enable: !1,
          outof: 'wait',
          visible_area: '60%',
          presize: !1
        },
        fallbacks: {
          isJoomla: !1,
          panZoomDisableOnMobile: 'off',
          simplifyAll: 'on',
          nextSlideOnWindowFocus: 'off',
          disableFocusListener: !0,
          ignoreHeightChanges: 'off',
          ignoreHeightChangesSize: 0,
          allowHTML5AutoPlayOnAndroid: !0
        },
        parallax: {
          type: 'off',
          levels: [
            10,
            15,
            20,
            25,
            30,
            35,
            40,
            45,
            50,
            55,
            60,
            65,
            70,
            75,
            80,
            85
          ],
          origo: 'enterpoint',
          speed: 400,
          bgparallax: 'off',
          opacity: 'on',
          disable_onmobile: 'off',
          ddd_shadow: 'on',
          ddd_bgfreeze: 'off',
          ddd_overflow: 'visible',
          ddd_layer_overflow: 'visible',
          ddd_z_correction: 65,
          ddd_path: 'mouse'
        },
        scrolleffect: {
          fade: 'off',
          blur: 'off',
          scale: 'off',
          grayscale: 'off',
          maxblur: 10,
          on_layers: 'off',
          on_slidebg: 'off',
          on_static_layers: 'off',
          on_parallax_layers: 'off',
          on_parallax_static_layers: 'off',
          direction: 'both',
          multiplicator: 1.35,
          multiplicator_layers: 0.5,
          tilt: 30,
          disable_on_mobile: 'on'
        },
        carousel: {
          easing: punchgs.Power3.easeInOut,
          speed: 800,
          showLayersAllTime: 'off',
          horizontal_align: 'center',
          vertical_align: 'center',
          infinity: 'on',
          space: 0,
          maxVisibleItems: 3,
          stretch: 'off',
          fadeout: 'on',
          maxRotation: 0,
          minScale: 0,
          vary_fade: 'off',
          vary_rotation: 'on',
          vary_scale: 'off',
          border_radius: '0px',
          padding_top: 0,
          padding_bottom: 0
        },
        navigation: {
          keyboardNavigation: 'off',
          keyboard_direction: 'horizontal',
          mouseScrollNavigation: 'off',
          onHoverStop: 'on',
          touch: {
            touchenabled: 'off',
            touchOnDesktop: 'off',
            swipe_treshold: 75,
            swipe_min_touches: 1,
            drag_block_vertical: !1,
            swipe_direction: 'horizontal'
          },
          arrows: {
            style: '',
            enable: !1,
            hide_onmobile: !1,
            hide_onleave: !0,
            hide_delay: 200,
            hide_delay_mobile: 1200,
            hide_under: 0,
            hide_over: 9999,
            tmp: '',
            rtl: !1,
            left: {
              h_align: 'left',
              v_align: 'center',
              h_offset: 20,
              v_offset: 0,
              container: 'slider'
            },
            right: {
              h_align: 'right',
              v_align: 'center',
              h_offset: 20,
              v_offset: 0,
              container: 'slider'
            }
          },
          bullets: {
            container: 'slider',
            rtl: !1,
            style: '',
            enable: !1,
            hide_onmobile: !1,
            hide_onleave: !0,
            hide_delay: 200,
            hide_delay_mobile: 1200,
            hide_under: 0,
            hide_over: 9999,
            direction: 'horizontal',
            h_align: 'left',
            v_align: 'center',
            space: 0,
            h_offset: 20,
            v_offset: 0,
            tmp: '<span class="tp-bullet-image"></span><span class="tp-bullet-title"></span>'
          },
          thumbnails: {
            container: 'slider',
            rtl: !1,
            style: '',
            enable: !1,
            width: 100,
            height: 50,
            min_width: 100,
            wrapper_padding: 2,
            wrapper_color: '#f5f5f5',
            wrapper_opacity: 1,
            tmp: '<span class="tp-thumb-image"></span><span class="tp-thumb-title"></span>',
            visibleAmount: 5,
            hide_onmobile: !1,
            hide_onleave: !0,
            hide_delay: 200,
            hide_delay_mobile: 1200,
            hide_under: 0,
            hide_over: 9999,
            direction: 'horizontal',
            span: !1,
            position: 'inner',
            space: 2,
            h_align: 'left',
            v_align: 'center',
            h_offset: 20,
            v_offset: 0
          },
          tabs: {
            container: 'slider',
            rtl: !1,
            style: '',
            enable: !1,
            width: 100,
            min_width: 100,
            height: 50,
            wrapper_padding: 10,
            wrapper_color: '#f5f5f5',
            wrapper_opacity: 1,
            tmp: '<span class="tp-tab-image"></span>',
            visibleAmount: 5,
            hide_onmobile: !1,
            hide_onleave: !0,
            hide_delay: 200,
            hide_delay_mobile: 1200,
            hide_under: 0,
            hide_over: 9999,
            direction: 'horizontal',
            span: !1,
            space: 0,
            position: 'inner',
            h_align: 'left',
            v_align: 'center',
            h_offset: 20,
            v_offset: 0
          }
        },
        extensions: 'extensions/',
        extensions_suffix: '.min.js',
        debugMode: !1
      };
      return a = jQuery.extend(!0, {
      }, b, a),
      this.each(function () {
        var b = jQuery(this);
        a.minHeight = a.minHeight != undefined ? parseInt(a.minHeight, 0)  : a.minHeight,
        a.scrolleffect.on = 'on' === a.scrolleffect.fade || 'on' === a.scrolleffect.scale || 'on' === a.scrolleffect.blur || 'on' === a.scrolleffect.grayscale,
        'hero' == a.sliderType && b.find('>ul>li').each(function (a) {
          a > 0 && jQuery(this).remove()
        }),
        a.jsFileLocation = a.jsFileLocation || getScriptLocation('themepunch.revolution.min.js'),
        a.jsFileLocation = a.jsFileLocation + a.extensions,
        a.scriptsneeded = getNeededScripts(a, b),
        a.curWinRange = 0,
        a.rtl = !0,
        a.navigation != undefined && a.navigation.touch != undefined && (a.navigation.touch.swipe_min_touches = a.navigation.touch.swipe_min_touches > 5 ? 1 : a.navigation.touch.swipe_min_touches),
        jQuery(this).on('scriptsloaded', function () {
          return a.modulesfailing ? (b.html('<div style="margin:auto;line-height:40px;font-size:14px;color:#fff;padding:15px;background:#e74c3c;margin:20px 0px;">!! Error at loading Slider Revolution 5.0 Extrensions.' + a.errorm + '</div>').show(), !1)  : (_R.migration != undefined && (a = _R.migration(b, a)), punchgs.force3D = !0, 'on' !== a.simplifyAll && punchgs.TweenLite.lagSmoothing(1000, 16), prepareOptions(b, a), void initSlider(b, a))
        }),
        b[0].opt = a,
        waitForScripts(b, a)
      })
    },
    revremoveslide: function (a) {
      return this.each(function () {
        var b = jQuery(this),
        c = b[0].opt;
        if (!(a < 0 || a > c.slideamount) && b != undefined && b.length > 0 && jQuery('body').find('#' + b.attr('id')).length > 0 && c && c.li.length > 0 && (a > 0 || a <= c.li.length)) {
          var d = jQuery(c.li[a]),
          e = d.data('index'),
          f = !1;
          c.slideamount = c.slideamount - 1,
          c.realslideamount = c.realslideamount - 1,
          removeNavWithLiref('.tp-bullet', e, c),
          removeNavWithLiref('.tp-tab', e, c),
          removeNavWithLiref('.tp-thumb', e, c),
          d.hasClass('active-revslide') && (f = !0),
          d.remove(),
          c.li = removeArray(c.li, a),
          c.carousel && c.carousel.slides && (c.carousel.slides = removeArray(c.carousel.slides, a)),
          c.thumbs = removeArray(c.thumbs, a),
          _R.updateNavIndexes && _R.updateNavIndexes(c),
          f && b.revnext(),
          punchgs.TweenLite.set(c.li, {
            minWidth: '99%'
          }),
          punchgs.TweenLite.set(c.li, {
            minWidth: '100%'
          })
        }
      })
    },
    revaddcallback: function (a) {
      return this.each(function () {
        this.opt && (this.opt.callBackArray === undefined && (this.opt.callBackArray = new Array), this.opt.callBackArray.push(a))
      })
    },
    revgetparallaxproc: function () {
      return jQuery(this) [0].opt.scrollproc
    },
    revdebugmode: function () {
      return this.each(function () {
        var a = jQuery(this);
        a[0].opt.debugMode = !0,
        containerResized(a, a[0].opt)
      })
    },
    revscroll: function (a) {
      return this.each(function () {
        var b = jQuery(this);
        jQuery('body,html').animate({
          scrollTop: b.offset().top + b.height() - a + 'px'
        }, {
          duration: 400
        })
      })
    },
    revredraw: function (a) {
      return this.each(function () {
        var a = jQuery(this);
        containerResized(a, a[0].opt)
      })
    },
    revkill: function (a) {
      var b = this,
      c = jQuery(this);
      if (punchgs.TweenLite.killDelayedCallsTo(_R.showHideNavElements), c != undefined && c.length > 0 && jQuery('body').find('#' + c.attr('id')).length > 0) {
        c.data('conthover', 1),
        c.data('conthover-changed', 1),
        c.trigger('revolution.slide.onpause');
        var d = c.parent().find('.tp-bannertimer'),
        e = c[0].opt;
        e.tonpause = !0,
        c.trigger('stoptimer');
        var f = 'resize.revslider-' + c.attr('id');
        jQuery(window).unbind(f),
        punchgs.TweenLite.killTweensOf(c.find('*'), !1),
        punchgs.TweenLite.killTweensOf(c, !1),
        c.unbind('hover, mouseover, mouseenter,mouseleave, resize');
        var f = 'resize.revslider-' + c.attr('id');
        jQuery(window).off(f),
        c.find('*').each(function () {
          var a = jQuery(this);
          a.unbind('on, hover, mouseenter,mouseleave,mouseover, resize,restarttimer, stoptimer'),
          a.off('on, hover, mouseenter,mouseleave,mouseover, resize'),
          a.data('mySplitText', null),
          a.data('ctl', null),
          a.data('tween') != undefined && a.data('tween').kill(),
          a.data('kenburn') != undefined && a.data('kenburn').kill(),
          a.data('timeline_out') != undefined && a.data('timeline_out').kill(),
          a.data('timeline') != undefined && a.data('timeline').kill(),
          a.remove(),
          a.empty(),
          a = null
        }),
        punchgs.TweenLite.killTweensOf(c.find('*'), !1),
        punchgs.TweenLite.killTweensOf(c, !1),
        d.remove();
        try {
          c.closest('.forcefullwidth_wrapper_tp_banner').remove()
        } catch (a) {
        }
        try {
          c.closest('.rev_slider_wrapper').remove()
        } catch (a) {
        }
        try {
          c.remove()
        } catch (a) {
        }
        return c.empty(),
        c.html(),
        c = null,
        e = null,
        delete b.c,
        delete b.opt,
        delete b.container,
        !0
      }
      return !1
    },
    revpause: function () {
      return this.each(function () {
        var a = jQuery(this);
        a != undefined && a.length > 0 && jQuery('body').find('#' + a.attr('id')).length > 0 && (a.data('conthover', 1), a.data('conthover-changed', 1), a.trigger('revolution.slide.onpause'), a[0].opt.tonpause = !0, a.trigger('stoptimer'))
      })
    },
    revresume: function () {
      return this.each(function () {
        var a = jQuery(this);
        a != undefined && a.length > 0 && jQuery('body').find('#' + a.attr('id')).length > 0 && (a.data('conthover', 0), a.data('conthover-changed', 1), a.trigger('revolution.slide.onresume'), a[0].opt.tonpause = !1, a.trigger('starttimer'))
      })
    },
    revstart: function () {
      var a = jQuery(this);
      if (a != undefined && a.length > 0 && jQuery('body').find('#' + a.attr('id')).length > 0 && a[0].opt !== undefined) return a[0].opt.sliderisrunning ? (console.log('Slider Is Running Already'), !1)  : (runSlider(a, a[0].opt), !0)
    },
    revnext: function () {
      return this.each(function () {
        var a = jQuery(this);
        a != undefined && a.length > 0 && jQuery('body').find('#' + a.attr('id')).length > 0 && _R.callingNewSlide(a, 1)
      })
    },
    revprev: function () {
      return this.each(function () {
        var a = jQuery(this);
        a != undefined && a.length > 0 && jQuery('body').find('#' + a.attr('id')).length > 0 && _R.callingNewSlide(a, - 1)
      })
    },
    revmaxslide: function () {
      return jQuery(this).find('.tp-revslider-mainul >li').length
    },
    revcurrentslide: function () {
      var a = jQuery(this);
      if (a != undefined && a.length > 0 && jQuery('body').find('#' + a.attr('id')).length > 0) return parseInt(a[0].opt.act, 0) + 1
    },
    revlastslide: function () {
      return jQuery(this).find('.tp-revslider-mainul >li').length
    },
    revshowslide: function (a) {
      return this.each(function () {
        var b = jQuery(this);
        b != undefined && b.length > 0 && jQuery('body').find('#' + b.attr('id')).length > 0 && _R.callingNewSlide(b, 'to' + (a - 1))
      })
    },
    revcallslidewithid: function (a) {
      return this.each(function () {
        var b = jQuery(this);
        b != undefined && b.length > 0 && jQuery('body').find('#' + b.attr('id')).length > 0 && _R.callingNewSlide(b, a)
      })
    }
  });
  var _R = jQuery.fn.revolution;
  jQuery.extend(!0, _R, {
    getversion: function () {
      return version
    },
    compare_version: function (a) {
      return 'stop' != a.check && (_R.getversion().core < a.min_core ? (a.check === undefined && (console.log('%cSlider Revolution Warning (Core:' + _R.getversion().core + ')', 'color:#c0392b;font-weight:bold;'), console.log('%c     Core is older than expected (' + a.min_core + ') from ' + a.alias, 'color:#333'), console.log('%c     Please update Slider Revolution to the latest version.', 'color:#333'), console.log('%c     It might be required to purge and clear Server/Client side Caches.', 'color:#333')), a.check = 'stop')  : _R.getversion() [a.name] != undefined && a.version < _R.getversion() [a.name] && (a.check === undefined && (console.log('%cSlider Revolution Warning (Core:' + _R.getversion().core + ')', 'color:#c0392b;font-weight:bold;'), console.log('%c     ' + a.alias + ' (' + a.version + ') is older than requiered (' + _R.getversion() [a.name] + ')', 'color:#333'), console.log('%c     Please update Slider Revolution to the latest version.', 'color:#333'), console.log('%c     It might be required to purge and clear Server/Client side Caches.', 'color:#333')), a.check = 'stop')),
      a
    },
    currentSlideIndex: function (a) {
      var b = a.c.find('.active-revslide').index();
      return b = b == - 1 ? 0 : b
    },
    simp: function (a, b, c) {
      var d = Math.abs(a) - Math.floor(Math.abs(a / b)) * b;
      return c ? d : a < 0 ? - 1 * d : d
    },
    iOSVersion: function () {
      var a = !1;
      return navigator.userAgent.match(/iPhone/i) || navigator.userAgent.match(/iPod/i) || navigator.userAgent.match(/iPad/i) ? navigator.userAgent.match(/OS 4_\d like Mac OS X/i) && (a = !0)  : a = !1,
      a
    },
    isIE: function (a, b) {
      var c = jQuery('<div style="display:none;"/>').appendTo(jQuery('body'));
      c.html('<!--[if ' + (b || '') + ' IE ' + (a || '') + ']><a>&nbsp;</a><![endif]-->');
      var d = c.find('a').length;
      return c.remove(),
      d
    },
    is_mobile: function () {
      var a = [
        'android',
        'webos',
        'iphone',
        'ipad',
        'blackberry',
        'Android',
        'webos',
        ,
        'iPod',
        'iPhone',
        'iPad',
        'Blackberry',
        'BlackBerry'
      ],
      b = !1;
      for (var c in a) navigator.userAgent.split(a[c]).length > 1 && (b = !0);
      return b
    },
    is_android: function () {
      var a = [
        'android',
        'Android'
      ],
      b = !1;
      for (var c in a) navigator.userAgent.split(a[c]).length > 1 && (b = !0);
      return b
    },
    callBackHandling: function (a, b, c) {
      try {
        a.callBackArray && jQuery.each(a.callBackArray, function (a, d) {
          d && d.inmodule && d.inmodule === b && d.atposition && d.atposition === c && d.callback && d.callback.call()
        })
      } catch (a) {
        console.log('Call Back Failed')
      }
    },
    get_browser: function () {
      var c,
      a = navigator.appName,
      b = navigator.userAgent,
      d = b.match(/(opera|chrome|safari|firefox|msie)\/?\s*(\.?\d+(\.\d+)*)/i);
      return d && null != (c = b.match(/version\/([\.\d]+)/i)) && (d[2] = c[1]),
      d = d ? [
        d[1],
        d[2]
      ] : [
        a,
        navigator.appVersion,
        '-?'
      ],
      d[0]
    },
    get_browser_version: function () {
      var c,
      a = navigator.appName,
      b = navigator.userAgent,
      d = b.match(/(opera|chrome|safari|firefox|msie)\/?\s*(\.?\d+(\.\d+)*)/i);
      return d && null != (c = b.match(/version\/([\.\d]+)/i)) && (d[2] = c[1]),
      d = d ? [
        d[1],
        d[2]
      ] : [
        a,
        navigator.appVersion,
        '-?'
      ],
      d[1]
    },
    getHorizontalOffset: function (a, b) {
      var c = gWiderOut(a, '.outer-left'),
      d = gWiderOut(a, '.outer-right');
      switch (b) {
        case 'left':
          return c;
        case 'right':
          return d;
        case 'both':
          return c + d
      }
    },
    callingNewSlide: function (a, b) {
      var c = a.find('.next-revslide').length > 0 ? a.find('.next-revslide').index()  : a.find('.processing-revslide').length > 0 ? a.find('.processing-revslide').index()  : a.find('.active-revslide').index(),
      d = 0,
      e = a[0].opt;
      a.find('.next-revslide').removeClass('next-revslide'),
      a.find('.active-revslide').hasClass('tp-invisible-slide') && (c = e.last_shown_slide),
      b && jQuery.isNumeric(b) || b.match(/to/g) ? (1 === b || b === - 1 ? (d = c + b, d = d < 0 ? e.slideamount - 1 : d >= e.slideamount ? 0 : d)  : (b = jQuery.isNumeric(b) ? b : parseInt(b.split('to') [1], 0), d = b < 0 ? 0 : b > e.slideamount - 1 ? e.slideamount - 1 : b), a.find('.tp-revslider-slidesli:eq(' + d + ')').addClass('next-revslide'))  : b && a.find('.tp-revslider-slidesli').each(function () {
        var a = jQuery(this);
        a.data('index') === b && a.addClass('next-revslide')
      }),
      d = a.find('.next-revslide').index(),
      a.trigger('revolution.nextslide.waiting'),
      c === d && c === e.last_shown_slide || d !== c && d != - 1 ? swapSlide(a)  : a.find('.next-revslide').removeClass('next-revslide')
    },
    slotSize: function (a, b) {
      b.slotw = Math.ceil(b.width / b.slots),
      'fullscreen' == b.sliderLayout ? b.sloth = Math.ceil(jQuery(window).height() / b.slots)  : b.sloth = Math.ceil(b.height / b.slots),
      'on' == b.autoHeight && a !== undefined && '' !== a && (b.sloth = Math.ceil(a.height() / b.slots))
    },
    setSize: function (a) {
      var b = (a.top_outer || 0) + (a.bottom_outer || 0),
      c = parseInt(a.carousel.padding_top || 0, 0),
      d = parseInt(a.carousel.padding_bottom || 0, 0),
      e = a.gridheight[a.curWinRange],
      f = 0,
      g = a.nextSlide === - 1 || a.nextSlide === undefined ? 0 : a.nextSlide;
      if (a.paddings = a.paddings === undefined ? {
        top: parseInt(a.c.parent().css('paddingTop'), 0) || 0,
        bottom: parseInt(a.c.parent().css('paddingBottom'), 0) || 0
      }
       : a.paddings, a.rowzones && a.rowzones.length > 0) for (var h = 0; h < a.rowzones[g].length; h++) f += a.rowzones[g][h][0].offsetHeight;
      if (e = e < a.minHeight ? a.minHeight : e, e = e < f ? f : e, 'fullwidth' == a.sliderLayout && 'off' == a.autoHeight && punchgs.TweenLite.set(a.c, {
        maxHeight: e + 'px'
      }), a.c.css({
        marginTop: c,
        marginBottom: d
      }), a.width = a.ul.width(), a.height = a.ul.height(), setScale(a), a.height = Math.round(a.gridheight[a.curWinRange] * (a.width / a.gridwidth[a.curWinRange])), a.height > a.gridheight[a.curWinRange] && 'on' != a.autoHeight && (a.height = a.gridheight[a.curWinRange]), 'fullscreen' == a.sliderLayout || a.infullscreenmode) {
        a.height = a.bw * a.gridheight[a.curWinRange];
        var j = (a.c.parent().width(), jQuery(window).height());
        if (a.fullScreenOffsetContainer != undefined) {
          try {
            var k = a.fullScreenOffsetContainer.split(',');
            k && jQuery.each(k, function (a, b) {
              j = jQuery(b).length > 0 ? j - jQuery(b).outerHeight(!0)  : j
            })
          } catch (a) {
          }
          try {
            a.fullScreenOffset.split('%').length > 1 && a.fullScreenOffset != undefined && a.fullScreenOffset.length > 0 ? j -= jQuery(window).height() * parseInt(a.fullScreenOffset, 0) / 100 : a.fullScreenOffset != undefined && a.fullScreenOffset.length > 0 && (j -= parseInt(a.fullScreenOffset, 0))
          } catch (a) {
          }
        }
        j = j < a.minHeight ? a.minHeight : j,
        j -= b,
        a.c.parent().height(j),
        a.c.closest('.rev_slider_wrapper').height(j),
        a.c.css({
          height: '100%'
        }),
        a.height = j,
        a.minHeight != undefined && a.height < a.minHeight && (a.height = a.minHeight),
        a.height = parseInt(f, 0) > parseInt(a.height, 0) ? f : a.height
      } else a.minHeight != undefined && a.height < a.minHeight && (a.height = a.minHeight),
      a.height = parseInt(f, 0) > parseInt(a.height, 0) ? f : a.height,
      a.c.height(a.height);
      var l = {
        height: c + d + b + a.height + a.paddings.top + a.paddings.bottom
      };
      a.c.closest('.forcefullwidth_wrapper_tp_banner').find('.tp-fullwidth-forcer').css(l),
      a.c.closest('.rev_slider_wrapper').css(l),
      setScale(a)
    },
    enterInViewPort: function (a) {
      a.waitForCountDown && (countDown(a.c, a), a.waitForCountDown = !1),
      a.waitForFirstSlide && (swapSlide(a.c), a.waitForFirstSlide = !1, setTimeout(function () {
        a.c.removeClass('tp-waitforfirststart')
      }, 500)),
      'playing' != a.sliderlaststatus && a.sliderlaststatus != undefined || a.c.trigger('starttimer'),
      a.lastplayedvideos != undefined && a.lastplayedvideos.length > 0 && jQuery.each(a.lastplayedvideos, function (b, c) {
        _R.playVideo(c, a)
      })
    },
    leaveViewPort: function (a) {
      a.sliderlaststatus = a.sliderstatus,
      a.c.trigger('stoptimer'),
      a.playingvideos != undefined && a.playingvideos.length > 0 && (a.lastplayedvideos = jQuery.extend(!0, [
      ], a.playingvideos), a.playingvideos && jQuery.each(a.playingvideos, function (b, c) {
        a.leaveViewPortBasedStop = !0,
        _R.stopVideo && _R.stopVideo(c, a)
      }))
    },
    unToggleState: function (a) {
      a != undefined && a.length > 0 && jQuery.each(a, function (a, b) {
        b.removeClass('rs-toggle-content-active')
      })
    },
    toggleState: function (a) {
      a != undefined && a.length > 0 && jQuery.each(a, function (a, b) {
        b.addClass('rs-toggle-content-active')
      })
    },
    swaptoggleState: function (a) {
      a != undefined && a.length > 0 && jQuery.each(a, function (a, b) {
        jQuery(b).hasClass('rs-toggle-content-active') ? jQuery(b).removeClass('rs-toggle-content-active')  : jQuery(b).addClass('rs-toggle-content-active')
      })
    },
    lastToggleState: function (a) {
      var b = 0;
      return a != undefined && a.length > 0 && jQuery.each(a, function (a, c) {
        b = c.hasClass('rs-toggle-content-active')
      }),
      b
    }
  }); var _ISM = _R.is_mobile(), _ANDROID = _R.is_android(), checkIDS = function (a, b) {
    a.anyid = a.anyid === undefined ? [
    ] : a.anyid;
    var c = jQuery.inArray(b.attr('id'), a.anyid);
    if (c != - 1) {
      var d = b.attr('id') + '_' + Math.round(9999 * Math.random());
      b.attr('id', d)
    }
    a.anyid.push(b.attr('id'))
  }, removeArray = function (a, b) {
    var c = [
    ];
    return jQuery.each(a, function (a, d) {
      a != b && c.push(d)
    }),
    c
  }, removeNavWithLiref = function (a, b, c) {
    c.c.find(a).each(function () {
      var a = jQuery(this);
      a.data('liref') === b && a.remove()
    })
  }, lAjax = function (a, b) {
    return !jQuery('body').data(a) && (b.filesystem ? (b.errorm === undefined && (b.errorm = '<br>Local Filesystem Detected !<br>Put this to your header:'), console.warn('Local Filesystem detected !'), b.errorm = b.errorm + '<br>&lt;script type="text/javascript" src="' + b.jsFileLocation + a + b.extensions_suffix + '"&gt;&lt;/script&gt;', console.warn(b.jsFileLocation + a + b.extensions_suffix + ' could not be loaded !'), console.warn('Please use a local Server or work online or make sure that you load all needed Libraries manually in your Document.'), console.log(' '), b.modulesfailing = !0, !1)  : (jQuery.ajax({
      url: b.jsFileLocation + a + b.extensions_suffix + '?version=' + version.core,
      dataType: 'script',
      cache: !0,
      error: function (c) {
        console.warn('Slider Revolution 5.0 Error !'),
        console.error('Failure at Loading:' + a + b.extensions_suffix + ' on Path:' + b.jsFileLocation),
        console.info(c)
      }
    }), void jQuery('body').data(a, !0)))
  }, getNeededScripts = function (a, b) {
    var c = new Object,
    d = a.navigation;
    return c.kenburns = !1,
    c.parallax = !1,
    c.carousel = !1,
    c.navigation = !1,
    c.videos = !1,
    c.actions = !1,
    c.layeranim = !1,
    c.migration = !1,
    b.data('version') && b.data('version').toString().match(/5./gi) ? (b.find('img').each(function () {
      'on' == jQuery(this).data('kenburns') && (c.kenburns = !0)
    }), ('carousel' == a.sliderType || 'on' == d.keyboardNavigation || 'on' == d.mouseScrollNavigation || 'on' == d.touch.touchenabled || d.arrows.enable || d.bullets.enable || d.thumbnails.enable || d.tabs.enable) && (c.navigation = !0), b.find('.tp-caption, .tp-static-layer, .rs-background-video-layer').each(function () {
      var a = jQuery(this);
      (a.data('ytid') != undefined || a.find('iframe').length > 0 && a.find('iframe').attr('src').toLowerCase().indexOf('youtube') > 0) && (c.videos = !0),
      (a.data('vimeoid') != undefined || a.find('iframe').length > 0 && a.find('iframe').attr('src').toLowerCase().indexOf('vimeo') > 0) && (c.videos = !0),
      a.data('actions') !== undefined && (c.actions = !0),
      c.layeranim = !0
    }), b.find('li').each(function () {
      jQuery(this).data('link') && jQuery(this).data('link') != undefined && (c.layeranim = !0, c.actions = !0)
    }), !c.videos && (b.find('.rs-background-video-layer').length > 0 || b.find('.tp-videolayer').length > 0 || b.find('.tp-audiolayer').length > 0 || b.find('iframe').length > 0 || b.find('video').length > 0) && (c.videos = !0), 'carousel' == a.sliderType && (c.carousel = !0), ('off' !== a.parallax.type || a.viewPort.enable || 'true' == a.viewPort.enable || 'true' === a.scrolleffect.on || a.scrolleffect.on) && (c.parallax = !0))  : (c.kenburns = !0, c.parallax = !0, c.carousel = !1, c.navigation = !0, c.videos = !0, c.actions = !0, c.layeranim = !0, c.migration = !0),
    'hero' == a.sliderType && (c.carousel = !1, c.navigation = !1),
    window.location.href.match(/file:/gi) && (c.filesystem = !0, a.filesystem = !0),
    c.videos && 'undefined' == typeof _R.isVideoPlaying && lAjax('revolution.extension.video', a),
    c.carousel && 'undefined' == typeof _R.prepareCarousel && lAjax('revolution.extension.carousel', a),
    c.carousel || 'undefined' != typeof _R.animateSlide || lAjax('revolution.extension.slideanims', a),
    c.actions && 'undefined' == typeof _R.checkActions && lAjax('revolution.extension.actions', a),
    c.layeranim && 'undefined' == typeof _R.handleStaticLayers && lAjax('revolution.extension.layeranimation', a),
    c.kenburns && 'undefined' == typeof _R.stopKenBurn && lAjax('revolution.extension.kenburn', a),
    c.navigation && 'undefined' == typeof _R.createNavigation && lAjax('revolution.extension.navigation', a),
    c.migration && 'undefined' == typeof _R.migration && lAjax('revolution.extension.migration', a),
    c.parallax && 'undefined' == typeof _R.checkForParallax && lAjax('revolution.extension.parallax', a),
    a.addons != undefined && a.addons.length > 0 && jQuery.each(a.addons, function (b, c) {
      'object' == typeof c && c.fileprefix != undefined && lAjax(c.fileprefix, a)
    }),
    c
  }, waitForScripts = function (a, b) {
    var c = !0,
    d = b.scriptsneeded;
    b.addons != undefined && b.addons.length > 0 && jQuery.each(b.addons, function (a, b) {
      'object' == typeof b && b.init != undefined && _R[b.init] === undefined && (c = !1)
    }),
    d.filesystem || 'undefined' != typeof punchgs && c && (!d.kenburns || d.kenburns && 'undefined' != typeof _R.stopKenBurn) && (!d.navigation || d.navigation && 'undefined' != typeof _R.createNavigation) && (!d.carousel || d.carousel && 'undefined' != typeof _R.prepareCarousel) && (!d.videos || d.videos && 'undefined' != typeof _R.resetVideo) && (!d.actions || d.actions && 'undefined' != typeof _R.checkActions) && (!d.layeranim || d.layeranim && 'undefined' != typeof _R.handleStaticLayers) && (!d.migration || d.migration && 'undefined' != typeof _R.migration) && (!d.parallax || d.parallax && 'undefined' != typeof _R.checkForParallax) && (d.carousel || !d.carousel && 'undefined' != typeof _R.animateSlide) ? a.trigger('scriptsloaded')  : setTimeout(function () {
      waitForScripts(a, b)
    }, 50)
  }, getScriptLocation = function (a) {
    var b = new RegExp('themepunch.revolution.min.js', 'gi'),
    c = '';
    return jQuery('script').each(function () {
      var a = jQuery(this).attr('src');
      a && a.match(b) && (c = a)
    }),
    c = c.replace('jquery.themepunch.revolution.min.js', ''),
    c = c.replace('jquery.themepunch.revolution.js', ''),
    c = c.split('?') [0]
  }, setCurWinRange = function (a, b) {
    var d = 9999,
    e = 0,
    f = 0,
    g = 0,
    h = jQuery(window).width(),
    i = b && 9999 == a.responsiveLevels ? a.visibilityLevels : a.responsiveLevels;
    i && i.length && jQuery.each(i, function (a, b) {
      h < b && (0 == e || e > b) && (d = b, g = a, e = b),
      h > b && e < b && (e = b, f = a)
    }),
    e < d && (g = f),
    b ? a.forcedWinRange = g : a.curWinRange = g
  }, prepareOptions = function (a, b) {
    b.carousel.maxVisibleItems = b.carousel.maxVisibleItems < 1 ? 999 : b.carousel.maxVisibleItems,
    b.carousel.vertical_align = 'top' === b.carousel.vertical_align ? '0%' : 'bottom' === b.carousel.vertical_align ? '100%' : '50%'
  }, gWiderOut = function (a, b) {
    var c = 0;
    return a.find(b).each(function () {
      var a = jQuery(this);
      !a.hasClass('tp-forcenotvisible') && c < a.outerWidth() && (c = a.outerWidth())
    }),
    c
  }, initSlider = function (container, opt) {
    return container != undefined && (container.data('aimg') != undefined && ('enabled' == container.data('aie8') && _R.isIE(8) || 'enabled' == container.data('amobile') && _ISM) && container.html('<img class="tp-slider-alternative-image" src="' + container.data('aimg') + '">'), container.find('>ul').addClass('tp-revslider-mainul'), opt.c = container, opt.ul = container.find('.tp-revslider-mainul'), opt.ul.find('>li').each(function (a) {
      var b = jQuery(this);
      'on' == b.data('hideslideonmobile') && _ISM && b.remove(),
      (b.data('invisible') || b.data('invisible') === !0) && (b.addClass('tp-invisible-slide'), b.appendTo(opt.ul))
    }), opt.addons != undefined && opt.addons.length > 0 && jQuery.each(opt.addons, function (i, obj) {
      'object' == typeof obj && obj.init != undefined && _R[obj.init](eval(obj.params))
    }), opt.cid = container.attr('id'), opt.ul.css({
      visibility: 'visible'
    }), opt.slideamount = opt.ul.find('>li').not('.tp-invisible-slide').length, opt.realslideamount = opt.ul.find('>li').length, opt.slayers = container.find('.tp-static-layers'), opt.slayers.data('index', 'staticlayers'), void (1 != opt.waitForInit && (container[0].opt = opt, runSlider(container, opt))))
  }, onFullScreenChange = function () {
    jQuery('body').data('rs-fullScreenMode', !jQuery('body').data('rs-fullScreenMode')),
    jQuery('body').data('rs-fullScreenMode') && setTimeout(function () {
      jQuery(window).trigger('resize')
    }, 200)
  }, runSlider = function (a, b) {
    if (b.sliderisrunning = !0, b.ul.find('>li').each(function (a) {
      jQuery(this).data('originalindex', a)
    }), b.allli = b.ul.find('>li'), jQuery.each(b.allli, function (a, b) {
      var b = jQuery(b);
      b.data('origindex', b.index())
    }), b.li = b.ul.find('>li').not('.tp-invisible-slide'), 'on' == b.shuffle) {
      var c = new Object,
      d = b.ul.find('>li:first-child');
      c.fstransition = d.data('fstransition'),
      c.fsmasterspeed = d.data('fsmasterspeed'),
      c.fsslotamount = d.data('fsslotamount');
      for (var e = 0; e < b.slideamount; e++) {
        var f = Math.round(Math.random() * b.slideamount);
        b.ul.find('>li:eq(' + f + ')').prependTo(b.ul)
      }
      var g = b.ul.find('>li:first-child');
      g.data('fstransition', c.fstransition),
      g.data('fsmasterspeed', c.fsmasterspeed),
      g.data('fsslotamount', c.fsslotamount),
      b.allli = b.ul.find('>li'),
      b.li = b.ul.find('>li').not('.tp-invisible-slide')
    }
    if (b.inli = b.ul.find('>li.tp-invisible-slide'), b.thumbs = new Array, b.slots = 4, b.act = - 1, b.firststart = 1, b.loadqueue = new Array, b.syncload = 0, b.conw = a.width(), b.conh = a.height(), b.responsiveLevels.length > 1 ? b.responsiveLevels[0] = 9999 : b.responsiveLevels = 9999, jQuery.each(b.allli, function (a, c) {
      var c = jQuery(c),
      d = c.find('.rev-slidebg') || c.find('img').first(),
      e = 0;
      c.addClass('tp-revslider-slidesli'),
      c.data('index') === undefined && c.data('index', 'rs-' + Math.round(999999 * Math.random()));
      var f = new Object;
      f.params = new Array,
      f.id = c.data('index'),
      f.src = c.data('thumb') !== undefined ? c.data('thumb')  : d.data('lazyload') !== undefined ? d.data('lazyload')  : d.attr('src'),
      c.data('title') !== undefined && f.params.push({
        from: RegExp('\\{\\{title\\}\\}', 'g'),
        to: c.data('title')
      }),
      c.data('description') !== undefined && f.params.push({
        from: RegExp('\\{\\{description\\}\\}', 'g'),
        to: c.data('description')
      });
      for (var e = 1; e <= 10; e++) c.data('param' + e) !== undefined && f.params.push({
        from: RegExp('\\{\\{param' + e + '\\}\\}', 'g'),
        to: c.data('param' + e)
      });
      if (b.thumbs.push(f), c.data('link') != undefined) {
        var g = c.data('link'),
        h = c.data('target') || '_self',
        i = 'back' === c.data('slideindex') ? 0 : 60,
        j = c.data('linktoslide'),
        k = j;
        j != undefined && 'next' != j && 'prev' != j && b.allli.each(function () {
          var a = jQuery(this);
          a.data('origindex') + 1 == k && (j = a.data('index'))
        }),
        'slide' != g && (j = 'no');
        var l = '<div class="tp-caption slidelink" style="cursor:pointer;width:100%;height:100%;z-index:' + i + ';" data-x="center" data-y="center" data-basealign="slide" ',
        m = 'scroll_under' === j ? '[{"event":"click","action":"scrollbelow","offset":"100px","delay":"0"}]' : 'prev' === j ? '[{"event":"click","action":"jumptoslide","slide":"prev","delay":"0.2"}]' : 'next' === j ? '[{"event":"click","action":"jumptoslide","slide":"next","delay":"0.2"}]' : '[{"event":"click","action":"jumptoslide","slide":"' + j + '","delay":"0.2"}]',
        n = ' data-frames=\'[{"delay":0,"speed":100,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]\'';
        l = 'no' == j ? l + n + ' >' : l + 'data-actions=\'' + m + '\'' + n + ' >',
        l += '<a style="width:100%;height:100%;display:block"',
        l = 'slide' != g ? l + ' target="' + h + '" href="' + g + '"' : l,
        l += '><span style="width:100%;height:100%;display:block"></span></a></div>',
        c.append(l)
      }
    }), b.rle = b.responsiveLevels.length || 1, b.gridwidth = cArray(b.gridwidth, b.rle), b.gridheight = cArray(b.gridheight, b.rle), 'on' == b.simplifyAll && (_R.isIE(8) || _R.iOSVersion()) && (a.find('.tp-caption').each(function () {
      var a = jQuery(this);
      a.removeClass('customin customout').addClass('fadein fadeout'),
      a.data('splitin', ''),
      a.data('speed', 400)
    }), b.allli.each(function () {
      var a = jQuery(this);
      a.data('transition', 'fade'),
      a.data('masterspeed', 500),
      a.data('slotamount', 1);
      var b = a.find('.rev-slidebg') || a.find('>img').first();
      b.data('kenburns', 'off')
    })), b.desktop = !navigator.userAgent.match(/(iPhone|iPod|iPad|Android|BlackBerry|BB10|mobi|tablet|opera mini|nexus 7)/i), b.autoHeight = 'fullscreen' == b.sliderLayout ? 'on' : b.autoHeight, 'fullwidth' == b.sliderLayout && 'off' == b.autoHeight && a.css({
      maxHeight: b.gridheight[b.curWinRange] + 'px'
    }), 'auto' != b.sliderLayout && 0 == a.closest('.forcefullwidth_wrapper_tp_banner').length && ('fullscreen' !== b.sliderLayout || 'on' != b.fullScreenAutoWidth)) {
      var h = a.parent(),
      i = h.css('marginBottom'),
      j = h.css('marginTop'),
      k = a.attr('id') + '_forcefullwidth';
      i = i === undefined ? 0 : i,
      j = j === undefined ? 0 : j,
      h.wrap('<div class="forcefullwidth_wrapper_tp_banner" id="' + k + '" style="position:relative;width:100%;height:auto;margin-top:' + j + ';margin-bottom:' + i + '"></div>'),
      a.closest('.forcefullwidth_wrapper_tp_banner').append('<div class="tp-fullwidth-forcer" style="width:100%;height:' + a.height() + 'px"></div>'),
      a.parent().css({
        marginTop: '0px',
        marginBottom: '0px'
      }),
      a.parent().css({
        position: 'absolute'
      })
    }
    if (b.shadow !== undefined && b.shadow > 0 && (a.parent().addClass('tp-shadow' + b.shadow), a.parent().append('<div class="tp-shadowcover"></div>'), a.parent().find('.tp-shadowcover').css({
      backgroundColor: a.parent().css('backgroundColor'),
      backgroundImage: a.parent().css('backgroundImage')
    })), setCurWinRange(b), setCurWinRange(b, !0), !a.hasClass('revslider-initialised')) {
      a.addClass('revslider-initialised'),
      a.addClass('tp-simpleresponsive'),
      a.attr('id') == undefined && a.attr('id', 'revslider-' + Math.round(1000 * Math.random() + 5)),
      checkIDS(b, a),
      b.firefox13 = !1,
      b.ie = !jQuery.support.opacity,
      b.ie9 = 9 == document.documentMode,
      b.origcd = b.delay;
      var l = jQuery.fn.jquery.split('.'),
      m = parseFloat(l[0]),
      n = parseFloat(l[1]);
      parseFloat(l[2] || '0');
      1 == m && n < 7 && a.html('<div style="text-align:center; padding:40px 0px; font-size:20px; color:#992222;"> The Current Version of jQuery:' + l + ' <br>Please update your jQuery Version to min. 1.7 in Case you wish to use the Revolution Slider Plugin</div>'),
      m > 1 && (b.ie = !1);
      var p = new Object;
      p.addedyt = 0,
      p.addedvim = 0,
      p.addedvid = 0,
      b.scrolleffect.on && (b.scrolleffect.layers = new Array),
      a.find('.tp-caption, .rs-background-video-layer').each(function (a) {
        var c = jQuery(this),
        d = c.data(),
        e = d.autoplayonlyfirsttime,
        f = d.autoplay,
        g = d.videomp4 !== undefined || d.videowebm !== undefined || d.videoogv !== undefined,
        h = c.hasClass('tp-audiolayer'),
        i = d.videoloop,
        j = !0,
        k = !1;
        d.startclasses = c.attr('class'),
        d.isparallaxlayer = d.startclasses.indexOf('rs-parallax') >= 0,
        c.hasClass('tp-static-layer') && _R.handleStaticLayers && (_R.handleStaticLayers(c, b), b.scrolleffect.on && ('on' === b.scrolleffect.on_parallax_static_layers && d.isparallaxlayer || 'on' === b.scrolleffect.on_static_layers && !d.isparallaxlayer) && (k = !0), j = !1);
        var l = c.data('noposteronmobile') || c.data('noPosterOnMobile') || c.data('posteronmobile') || c.data('posterOnMobile') || c.data('posterOnMObile');
        c.data('noposteronmobile', l);
        var m = 0;
        if (c.find('iframe').each(function () {
          punchgs.TweenLite.set(jQuery(this), {
            autoAlpha: 0
          }),
          m++
        }), m > 0 && c.data('iframes', !0), c.hasClass('tp-caption')) {
          var n = c.hasClass('slidelink') ? 'width:100% !important;height:100% !important;' : '',
          o = c.data(),
          q = '',
          r = o.type,
          s = 'row' === r || 'column' === r ? 'relative' : 'absolute',
          t = '';
          'row' === r ? (c.addClass('rev_row').removeClass('tp-resizeme'), t = 'rev_row_wrap')  : 'column' === r ? (q = o.verticalalign === undefined ? ' vertical-align:bottom;' : ' vertical-align:' + o.verticalalign + ';', t = 'rev_column', c.addClass('rev_column_inner').removeClass('tp-resizeme'), c.data('width', 'auto'), punchgs.TweenLite.set(c, {
            width: 'auto'
          }))  : 'group' === r && c.removeClass('tp-resizeme');
          var u = '',
          v = '';
          'row' !== r && 'group' !== r && 'column' !== r ? (u = 'display:' + c.css('display') + ';', c.closest('.rev_column').length > 0 ? (c.addClass('rev_layer_in_column'), j = !1)  : c.closest('.rev_group').length > 0 && (c.addClass('rev_layer_in_group'), j = !1))  : 'column' === r && (j = !1),
          o.wrapper_class !== undefined && (t = t + ' ' + o.wrapper_class),
          o.wrapper_id !== undefined && (v = 'id="' + o.wrapper_id + '"'),
          c.wrap('<div ' + v + ' class="tp-parallax-wrap ' + t + '" style="' + q + ' ' + n + 'position:' + s + ';' + u + ';visibility:hidden"><div class="tp-loop-wrap" style="' + n + 'position:' + s + ';' + u + ';"><div class="tp-mask-wrap" style="' + n + 'position:' + s + ';' + u + ';" ></div></div></div>'),
          j && b.scrolleffect.on && ('on' === b.scrolleffect.on_parallax_layers && d.isparallaxlayer || 'on' === b.scrolleffect.on_layers && !d.isparallaxlayer) && b.scrolleffect.layers.push(c.parent()),
          k && b.scrolleffect.layers.push(c.parent()),
          'column' === r && (c.append('<div class="rev_column_bg rev_column_bg_man_sized" style="visibility:hidden"></div>'), c.closest('.tp-parallax-wrap').append('<div class="rev_column_bg rev_column_bg_auto_sized"></div>'));
          var w = [
            'pendulum',
            'rotate',
            'slideloop',
            'pulse',
            'wave'
          ],
          x = c.closest('.tp-loop-wrap');
          jQuery.each(w, function (a, b) {
            var d = c.find('.rs-' + b),
            e = d.data() || '';
            '' != e && (x.data(e), x.addClass('rs-' + b), d.children(0).unwrap(), c.data('loopanimation', 'on'))
          }),
          c.attr('id') === undefined && c.attr('id', 'layer-' + Math.round(999999999 * Math.random())),
          checkIDS(b, c),
          punchgs.TweenLite.set(c, {
            visibility: 'hidden'
          })
        }
        var y = c.data('actions');
        y !== undefined && _R.checkActions(c, b, y),
        checkHoverDependencies(c, b),
        _R.checkVideoApis && (p = _R.checkVideoApis(c, b, p)),
        !_ISM || b.fallbacks.allowHTML5AutoPlayOnAndroid && g || (1 != e && 'true' != e || (d.autoplayonlyfirsttime = !1, e = !1), 1 != f && 'true' != f && 'on' != f && '1sttime' != f || (d.autoplay = 'off', f = 'off')),
        h || 1 != e && 'true' != e && '1sttime' != f || 'loopandnoslidestop' == i || c.closest('li.tp-revslider-slidesli').addClass('rs-pause-timer-once'),
        h || 1 != f && 'true' != f && 'on' != f && 'no1sttime' != f || 'loopandnoslidestop' == i || c.closest('li.tp-revslider-slidesli').addClass('rs-pause-timer-always')
      }),
      a[0].addEventListener('mouseenter', function () {
        a.trigger('tp-mouseenter'),
        b.overcontainer = !0
      }, {
        passive: !0
      }),
      a[0].addEventListener('mouseover', function () {
        a.trigger('tp-mouseover'),
        b.overcontainer = !0
      }, {
        passive: !0
      }),
      a[0].addEventListener('mouseleave', function () {
        a.trigger('tp-mouseleft'),
        b.overcontainer = !1
      }, {
        passive: !0
      }),
      a.find('.tp-caption video').each(function (a) {
        var b = jQuery(this);
        b.removeClass('video-js vjs-default-skin'),
        b.attr('preload', ''),
        b.css({
          display: 'none'
        })
      }),
      'standard' !== b.sliderType && (b.lazyType = 'all'),
      loadImages(a.find('.tp-static-layers'), b, 0, !0),
      waitForCurrentImages(a.find('.tp-static-layers'), b, function () {
        a.find('.tp-static-layers img').each(function () {
          var a = jQuery(this),
          c = a.data('lazyload') != undefined ? a.data('lazyload')  : a.attr('src'),
          d = getLoadObj(b, c);
          a.attr('src', d.src)
        })
      }),
      b.rowzones = [
      ],
      b.allli.each(function (a) {
        var c = jQuery(this);
        b.rowzones[a] = [
        ],
        c.find('.rev_row_zone').each(function () {
          b.rowzones[a].push(jQuery(this))
        }),
        'all' != b.lazyType && ('smart' != b.lazyType || 0 != a && 1 != a && a != b.slideamount && a != b.slideamount - 1) || (loadImages(c, b, a), waitForCurrentImages(c, b, function () {
        }))
      });
      var q = getUrlVars('#') [0];
      if (q.length < 9 && q.split('slide').length > 1) {
        var r = parseInt(q.split('slide') [1], 0);
        r < 1 && (r = 1),
        r > b.slideamount && (r = b.slideamount),
        b.startWithSlide = r - 1
      }
      a.append('<div class="tp-loader ' + b.spinner + '"><div class="dot1"></div><div class="dot2"></div><div class="bounce1"></div><div class="bounce2"></div><div class="bounce3"></div></div>'),
      b.loader = a.find('.tp-loader'),
      0 === a.find('.tp-bannertimer').length && a.append('<div class="tp-bannertimer" style="visibility:hidden"></div>'),
      a.find('.tp-bannertimer').css({
        width: '0%'
      }),
      b.ul.css({
        display: 'block'
      }),
      prepareSlides(a, b),
      ('off' !== b.parallax.type || b.scrolleffect.on) && _R.checkForParallax && _R.checkForParallax(a, b),
      _R.setSize(b),
      'hero' !== b.sliderType && _R.createNavigation && _R.createNavigation(a, b),
      _R.resizeThumbsTabs && _R.resizeThumbsTabs && _R.resizeThumbsTabs(b),
      contWidthManager(b);
      var s = b.viewPort;
      b.inviewport = !1,
      s != undefined && s.enable && (jQuery.isNumeric(s.visible_area) || s.visible_area.indexOf('%') !== - 1 && (s.visible_area = parseInt(s.visible_area) / 100), _R.scrollTicker && _R.scrollTicker(b, a)),
      'carousel' === b.sliderType && _R.prepareCarousel && (punchgs.TweenLite.set(b.ul, {
        opacity: 0
      }), _R.prepareCarousel(b, new punchgs.TimelineLite, undefined, 0), b.onlyPreparedSlide = !0),
      setTimeout(function () {
        if (!s.enable || s.enable && b.inviewport || s.enable && !b.inviewport && 'wait' == !s.outof) swapSlide(a);
         else if (b.c.addClass('tp-waitforfirststart'), b.waitForFirstSlide = !0, s.presize) {
          var c = jQuery(b.li[0]);
          loadImages(c, b, 0, !0),
          waitForCurrentImages(c.find('.tp-layers'), b, function () {
            _R.animateTheCaptions({
              slide: c,
              opt: b,
              preset: !0
            })
          })
        }
        _R.manageNavigation && _R.manageNavigation(b),
        b.slideamount > 1 && (!s.enable || s.enable && b.inviewport ? countDown(a, b)  : b.waitForCountDown = !0),
        setTimeout(function () {
          a.trigger('revolution.slide.onloaded')
        }, 100)
      }, b.startDelay),
      b.startDelay = 0,
      jQuery('body').data('rs-fullScreenMode', !1),
      window.addEventListener('fullscreenchange', onFullScreenChange, {
        passive: !0
      }),
      window.addEventListener('mozfullscreenchange', onFullScreenChange, {
        passive: !0
      }),
      window.addEventListener('webkitfullscreenchange', onFullScreenChange, {
        passive: !0
      });
      var t = 'resize.revslider-' + a.attr('id');
      jQuery(window).on(t, function () {
        if (a == undefined) return !1;
        0 != jQuery('body').find(a) && contWidthManager(b);
        var c = !1;
        if ('fullscreen' == b.sliderLayout) {
          var d = jQuery(window).height();
          'mobile' == b.fallbacks.ignoreHeightChanges && _ISM || 'always' == b.fallbacks.ignoreHeightChanges ? (b.fallbacks.ignoreHeightChangesSize = b.fallbacks.ignoreHeightChangesSize == undefined ? 0 : b.fallbacks.ignoreHeightChangesSize, c = d != b.lastwindowheight && Math.abs(d - b.lastwindowheight) > b.fallbacks.ignoreHeightChangesSize)  : c = d != b.lastwindowheight
        }(a.outerWidth(!0) != b.width || a.is(':hidden') || c) && (b.lastwindowheight = jQuery(window).height(), containerResized(a, b))
      }),
      hideSliderUnder(a, b),
      contWidthManager(b),
      b.fallbacks.disableFocusListener || 'true' == b.fallbacks.disableFocusListener || b.fallbacks.disableFocusListener === !0 || (a.addClass('rev_redraw_on_blurfocus'), tabBlurringCheck())
    }
  }, cArray = function (a, b) {
    if (!jQuery.isArray(a)) {
      var c = a;
      a = new Array,
      a.push(c)
    }
    if (a.length < b) for (var c = a[a.length - 1], d = 0; d < b - a.length + 2; d++) a.push(c);
    return a
  }, checkHoverDependencies = function (a, b) {
    var c = a.data(),
    d = 'sliderenter' === c.start || c.frames !== undefined && c.frames[0] != undefined && 'sliderenter' === c.frames[0].delay;
    d && (b.layersonhover === undefined && (b.c.on('tp-mouseenter', function () {
      b.layersonhover && jQuery.each(b.layersonhover, function (a, c) {
        var d = c.data('closestli') || c.closest('.tp-revslider-slidesli'),
        e = c.data('staticli') || c.closest('.tp-static-layers');
        c.data('closestli') === undefined && (c.data('closestli', d), c.data('staticli', e)),
        (d.length > 0 && d.hasClass('active-revslide') || d.hasClass('processing-revslide') || e.length > 0) && (c.data('animdirection', 'in'), _R.playAnimationFrame && _R.playAnimationFrame({
          caption: c,
          opt: b,
          frame: 'frame_0',
          triggerdirection: 'in',
          triggerframein: 'frame_0',
          triggerframeout: 'frame_999'
        }), c.data('triggerstate', 'on'))
      })
    }), b.c.on('tp-mouseleft', function () {
      b.layersonhover && jQuery.each(b.layersonhover, function (a, c) {
        c.data('animdirection', 'out'),
        c.data('triggered', !0),
        c.data('triggerstate', 'off'),
        _R.stopVideo && _R.stopVideo(c, b),
        _R.playAnimationFrame && _R.playAnimationFrame({
          caption: c,
          opt: b,
          frame: 'frame_999',
          triggerdirection: 'out',
          triggerframein: 'frame_0',
          triggerframeout: 'frame_999'
        })
      })
    }), b.layersonhover = new Array), b.layersonhover.push(a))
  }, contWidthManager = function (a) {
    var b = _R.getHorizontalOffset(a.c, 'left');
    if ('auto' == a.sliderLayout || 'fullscreen' === a.sliderLayout && 'on' == a.fullScreenAutoWidth) 'fullscreen' == a.sliderLayout && 'on' == a.fullScreenAutoWidth ? punchgs.TweenLite.set(a.ul, {
      left: 0,
      width: a.c.width()
    })  : punchgs.TweenLite.set(a.ul, {
      left: b,
      width: a.c.width() - _R.getHorizontalOffset(a.c, 'both')
    });
     else {
      var c = Math.ceil(a.c.closest('.forcefullwidth_wrapper_tp_banner').offset().left - b);
      punchgs.TweenLite.set(a.c.parent(), {
        left: 0 - c + 'px',
        width: jQuery(window).width() - _R.getHorizontalOffset(a.c, 'both')
      })
    }
    a.slayers && 'fullwidth' != a.sliderLayout && 'fullscreen' != a.sliderLayout && punchgs.TweenLite.set(a.slayers, {
      left: b
    })
  }, cv = function (a, b) {
    return a === undefined ? b : a
  }, hideSliderUnder = function (a, b, c) {
    var d = a.parent();
    jQuery(window).width() < b.hideSliderAtLimit ? (a.trigger('stoptimer'), 'none' != d.css('display') && d.data('olddisplay', d.css('display')), d.css({
      display: 'none'
    }))  : a.is(':hidden') && c && (d.data('olddisplay') != undefined && 'undefined' != d.data('olddisplay') && 'none' != d.data('olddisplay') ? d.css({
      display: d.data('olddisplay')
    })  : d.css({
      display: 'block'
    }), a.trigger('restarttimer'), setTimeout(function () {
      containerResized(a, b)
    }, 150)),
    _R.hideUnHideNav && _R.hideUnHideNav(b)
  }, containerResized = function (a, b) {
    if (a.trigger('revolution.slide.beforeredraw'), 1 == b.infullscreenmode && (b.minHeight = jQuery(window).height()), setCurWinRange(b), setCurWinRange(b, !0), !_R.resizeThumbsTabs || _R.resizeThumbsTabs(b) === !0) {
      if (hideSliderUnder(a, b, !0), contWidthManager(b), 'carousel' == b.sliderType && _R.prepareCarousel(b, !0), a === undefined) return !1;
      _R.setSize(b),
      b.conw = b.c.width(),
      b.conh = b.infullscreenmode ? b.minHeight : b.c.height();
      var c = a.find('.active-revslide .slotholder'),
      d = a.find('.processing-revslide .slotholder');
      removeSlots(a, b, a, 2),
      'standard' === b.sliderType && (punchgs.TweenLite.set(d.find('.defaultimg'), {
        opacity: 0
      }), c.find('.defaultimg').css({
        opacity: 1
      })),
      'carousel' === b.sliderType && b.lastconw != b.conw && (clearTimeout(b.pcartimer), b.pcartimer = setTimeout(function () {
        _R.prepareCarousel(b, !0),
        'carousel' == b.sliderType && 'on' === b.carousel.showLayersAllTime && jQuery.each(b.li, function (a) {
          _R.animateTheCaptions({
            slide: jQuery(b.li[a]),
            opt: b,
            recall: !0
          })
        })
      }, 100), b.lastconw = b.conw),
      _R.manageNavigation && _R.manageNavigation(b),
      _R.animateTheCaptions && a.find('.active-revslide').length > 0 && _R.animateTheCaptions({
        slide: a.find('.active-revslide'),
        opt: b,
        recall: !0
      }),
      'on' == d.data('kenburns') && _R.startKenBurn(d, b, d.data('kbtl').progress()),
      'on' == c.data('kenburns') && _R.startKenBurn(c, b, c.data('kbtl').progress()),
      _R.animateTheCaptions && a.find('.processing-revslide').length > 0 && _R.animateTheCaptions({
        slide: a.find('.processing-revslide'),
        opt: b,
        recall: !0
      }),
      _R.manageNavigation && _R.manageNavigation(b)
    }
    a.trigger('revolution.slide.afterdraw')
  }, setScale = function (a) {
    a.bw = a.width / a.gridwidth[a.curWinRange],
    a.bh = a.height / a.gridheight[a.curWinRange],
    a.bh > a.bw ? a.bh = a.bw : a.bw = a.bh,
    (a.bh > 1 || a.bw > 1) && (a.bw = 1, a.bh = 1)
  }, prepareSlides = function (a, b) {
    if (a.find('.tp-caption').each(function () {
      var a = jQuery(this);
      a.data('transition') !== undefined && a.addClass(a.data('transition'))
    }), b.ul.css({
      overflow: 'hidden',
      width: '100%',
      height: '100%',
      maxHeight: a.parent().css('maxHeight')
    }), 'on' == b.autoHeight && (b.ul.css({
      overflow: 'hidden',
      width: '100%',
      height: '100%',
      maxHeight: 'none'
    }), a.css({
      maxHeight: 'none'
    }), a.parent().css({
      maxHeight: 'none'
    })), b.allli.each(function (a) {
      var c = jQuery(this),
      d = c.data('originalindex');
      (b.startWithSlide != undefined && d == b.startWithSlide || b.startWithSlide === undefined && 0 == a) && c.addClass('next-revslide'),
      c.css({
        width: '100%',
        height: '100%',
        overflow: 'hidden'
      })
    }), 'carousel' === b.sliderType) {
      b.ul.css({
        overflow: 'visible'
      }).wrap('<div class="tp-carousel-wrapper" style="width:100%;height:100%;position:absolute;top:0px;left:0px;overflow:hidden;"></div>');
      var c = '<div style="clear:both;display:block;width:100%;height:1px;position:relative;margin-bottom:-1px"></div>';
      b.c.parent().prepend(c),
      b.c.parent().append(c),
      _R.prepareCarousel(b)
    }
    a.parent().css({
      overflow: 'visible'
    }),
    b.allli.find('>img').each(function (a) {
      var c = jQuery(this),
      d = c.closest('li'),
      e = d.find('.rs-background-video-layer');
      e.addClass('defaultvid').css({
        zIndex: 30
      }),
      c.addClass('defaultimg'),
      'on' == b.fallbacks.panZoomDisableOnMobile && _ISM && (c.data('kenburns', 'off'), c.data('bgfit', 'cover'));
      var f = d.data('mediafilter');
      f = 'none' === f || f === undefined ? '' : f,
      c.wrap('<div class="slotholder" style="position:absolute; top:0px; left:0px; z-index:0;width:100%;height:100%;"></div>'),
      e.appendTo(d.find('.slotholder'));
      var g = c.data();
      c.closest('.slotholder').data(g),
      e.length > 0 && g.bgparallax != undefined && e.data('bgparallax', g.bgparallax),
      'none' != b.dottedOverlay && b.dottedOverlay != undefined && c.closest('.slotholder').append('<div class="tp-dottedoverlay ' + b.dottedOverlay + '"></div>');
      var h = c.attr('src');
      g.src = h,
      g.bgfit = g.bgfit || 'cover',
      g.bgrepeat = g.bgrepeat || 'no-repeat',
      g.bgposition = g.bgposition || 'center center';
      var j = (c.closest('.slotholder'), c.data('bgcolor')),
      k = '';
      k = j !== undefined && j.indexOf('gradient') >= 0 ? '"background:' + j + ';width:100%;height:100%;"' : '"background-color:' + j + ';background-repeat:' + g.bgrepeat + ';background-image:url(' + h + ');background-size:' + g.bgfit + ';background-position:' + g.bgposition + ';width:100%;height:100%;"';
      var l = jQuery('<div class="tp-bgimg defaultimg ' + f + '" data-bgcolor="' + j + '" style=' + k + '></div>');
      c.parent().append(l),
      c.data('mediafilter', f);
      var m = document.createComment('Runtime Modification - Img tag is Still Available for SEO Goals in Source - ' + c.get(0).outerHTML);
      c.replaceWith(m),
      l.data(g),
      l.attr('src', h),
      'standard' !== b.sliderType && 'undefined' !== b.sliderType || l.css({
        opacity: 0
      })
    }),
    b.scrolleffect.on && 'on' === b.scrolleffect.on_slidebg && (b.allslotholder = new Array, b.allli.find('.slotholder').each(function () {
      jQuery(this).wrap('<div style="display:block;position:absolute;top:0px;left:0px;width:100%;height:100%" class="slotholder_fadeoutwrap"></div>')
    }), b.allslotholder = b.c.find('.slotholder_fadeoutwrap'))
  }, removeSlots = function (a, b, c, d) {
    b.removePrepare = b.removePrepare + d,
    c.find('.slot, .slot-circle-wrapper').each(function () {
      jQuery(this).remove()
    }),
    b.transition = 0,
    b.removePrepare = 0
  }, cutParams = function (a) {
    var b = a;
    return a != undefined && a.length > 0 && (b = a.split('?') [0]),
    b
  }, relativeRedir = function (a) {
    return location.pathname.replace(/(.*)\/[^\/]*/, '$1/' + a)
  }, abstorel = function (a, b) {
    var c = a.split('/'),
    d = b.split('/');
    c.pop();
    for (var e = 0; e < d.length; e++) '.' != d[e] && ('..' == d[e] ? c.pop()  : c.push(d[e]));
    return c.join('/')
  }, imgLoaded = function (a, b, c) {
    b.syncload--,
    b.loadqueue && jQuery.each(b.loadqueue, function (b, d) {
      var e = d.src.replace(/\.\.\/\.\.\//gi, ''),
      f = self.location.href,
      g = document.location.origin,
      h = f.substring(0, f.length - 1) + '/' + e,
      i = g + '/' + e,
      j = abstorel(self.location.href, d.src);
      f = f.substring(0, f.length - 1) + e,
      g += e,
      (cutParams(g) === cutParams(decodeURIComponent(a.src)) || cutParams(f) === cutParams(decodeURIComponent(a.src)) || cutParams(j) === cutParams(decodeURIComponent(a.src)) || cutParams(i) === cutParams(decodeURIComponent(a.src)) || cutParams(h) === cutParams(decodeURIComponent(a.src)) || cutParams(d.src) === cutParams(decodeURIComponent(a.src)) || cutParams(d.src).replace(/^.*\/\/[^\/]+/, '') === cutParams(decodeURIComponent(a.src)).replace(/^.*\/\/[^\/]+/, '') || 'file://' === window.location.origin && cutParams(a.src).match(new RegExp(e))) && (d.progress = c, d.width = a.width, d.height = a.height)
    }),
    progressImageLoad(b)
  }, progressImageLoad = function (a) {
    3 != a.syncload && a.loadqueue && jQuery.each(a.loadqueue, function (b, c) {
      if (c.progress.match(/prepared/g) && a.syncload <= 3) {
        if (a.syncload++, 'img' == c.type) {
          var d = new Image;
          d.onload = function () {
            imgLoaded(this, a, 'loaded'),
            c.error = !1
          },
          d.onerror = function () {
            imgLoaded(this, a, 'failed'),
            c.error = !0
          },
          d.src = c.src
        } else jQuery.get(c.src, function (b) {
          c.innerHTML = (new XMLSerializer).serializeToString(b.documentElement),
          c.progress = 'loaded',
          a.syncload--,
          progressImageLoad(a)
        }).fail(function () {
          c.progress = 'failed',
          a.syncload--,
          progressImageLoad(a)
        });
        c.progress = 'inload'
      }
    })
  }, addToLoadQueue = function (a, b, c, d, e) {
    var f = !1;
    if (b.loadqueue && jQuery.each(b.loadqueue, function (b, c) {
      c.src === a && (f = !0)
    }), !f) {
      var g = new Object;
      g.src = a,
      g.starttoload = jQuery.now(),
      g.type = d || 'img',
      g.prio = c,
      g.progress = 'prepared',
      g.static = e,
      b.loadqueue.push(g)
    }
  }, loadImages = function (a, b, c, d) {
    a.find('img,.defaultimg, .tp-svg-layer').each(function () {
      var a = jQuery(this),
      e = a.data('lazyload') !== undefined && 'undefined' !== a.data('lazyload') ? a.data('lazyload')  : a.data('svg_src') != undefined ? a.data('svg_src')  : a.attr('src'),
      f = a.data('svg_src') != undefined ? 'svg' : 'img';
      a.data('start-to-load', jQuery.now()),
      addToLoadQueue(e, b, c, f, d)
    }),
    progressImageLoad(b)
  }, getLoadObj = function (a, b) {
    var c = new Object;
    return a.loadqueue && jQuery.each(a.loadqueue, function (a, d) {
      d.src == b && (c = d)
    }),
    c
  }, waitForCurrentImages = function (a, b, c) {
    var d = !1;
    a.find('img,.defaultimg, .tp-svg-layer').each(function () {
      var c = jQuery(this),
      e = c.data('lazyload') != undefined ? c.data('lazyload')  : c.data('svg_src') != undefined ? c.data('svg_src')  : c.attr('src'),
      f = getLoadObj(b, e);
      if (c.data('loaded') === undefined && f !== undefined && f.progress && f.progress.match(/loaded/g)) {
        if (c.attr('src', f.src), 'img' == f.type) if (c.hasClass('defaultimg')) _R.isIE(8) ? defimg.attr('src', f.src)  : f.src.indexOf('images/transparent.png') == - 1 || c.data('bgcolor') === undefined ? c.css({
          backgroundImage: 'url("' + f.src + '")'
        })  : c.data('bgcolor') !== undefined && c.css({
          background: c.data('bgcolor')
        }),
        a.data('owidth', f.width),
        a.data('oheight', f.height),
        a.find('.slotholder').data('owidth', f.width),
        a.find('.slotholder').data('oheight', f.height);
         else {
          var g = c.data('ww'),
          h = c.data('hh');
          c.data('owidth', f.width),
          c.data('oheight', f.height),
          g = g == undefined || 'auto' == g || '' == g ? f.width : g,
          h = h == undefined || 'auto' == h || '' == h ? f.height : h,
          !jQuery.isNumeric(g) && g.indexOf('%') > 0 && (h = g),
          c.data('ww', g),
          c.data('hh', h)
        } else 'svg' == f.type && 'loaded' == f.progress && (c.append('<div class="tp-svg-innercontainer"></div>'), c.find('.tp-svg-innercontainer').append(f.innerHTML));
        c.data('loaded', !0)
      }
      if (f && f.progress && f.progress.match(/inprogress|inload|prepared/g) && (!f.error && jQuery.now() - c.data('start-to-load') < 5000 ? d = !0 : (f.progress = 'failed', f.reported_img || (f.reported_img = !0, console.warn(e + '  Could not be loaded !')))), 1 == b.youtubeapineeded && (!window.YT || YT.Player == undefined) && (d = !0, jQuery.now() - b.youtubestarttime > 5000 && 1 != b.youtubewarning)) {
        b.youtubewarning = !0;
        var i = 'YouTube Api Could not be loaded !';
        'https:' === location.protocol && (i += ' Please Check and Renew SSL Certificate !'),
        console.error(i),
        b.c.append('<div style="position:absolute;top:50%;width:100%;color:#e74c3c;  font-size:16px; text-align:center; padding:15px;background:#000; display:block;"><strong>' + i + '</strong></div>')
      }
      if (1 == b.vimeoapineeded && !window.Froogaloop && (d = !0, jQuery.now() - b.vimeostarttime > 5000 && 1 != b.vimeowarning)) {
        b.vimeowarning = !0;
        var i = 'Vimeo Froogaloop Api Could not be loaded !';
        'https:' === location.protocol && (i += ' Please Check and Renew SSL Certificate !'),
        console.error(i),
        b.c.append('<div style="position:absolute;top:50%;width:100%;color:#e74c3c;  font-size:16px; text-align:center; padding:15px;background:#000; display:block;"><strong>' + i + '</strong></div>')
      }
    }),
    !_ISM && b.audioqueue && b.audioqueue.length > 0 && jQuery.each(b.audioqueue, function (a, b) {
      b.status && 'prepared' === b.status && jQuery.now() - b.start < b.waittime && (d = !0)
    }),
    jQuery.each(b.loadqueue, function (a, b) {
      b.static !== !0 || 'loaded' == b.progress && 'failed' !== b.progress || ('failed' == b.progress ? b.reported || (b.reported = !0, console.warn('Static Image ' + b.src + '  Could not be loaded in time. Error Exists:' + b.error))  : !b.error && jQuery.now() - b.starttoload < 5000 ? d = !0 : b.reported || (b.reported = !0, console.warn('Static Image ' + b.src + '  Could not be loaded within 5s! Error Exists:' + b.error)))
    }),
    d ? punchgs.TweenLite.delayedCall(0.18, waitForCurrentImages, [
      a,
      b,
      c
    ])  : punchgs.TweenLite.delayedCall(0.18, c)
  }, swapSlide = function (a) {
    var b = a[0].opt;
    if (clearTimeout(b.waitWithSwapSlide), a.find('.processing-revslide').length > 0) return b.waitWithSwapSlide = setTimeout(function () {
      swapSlide(a)
    }, 150),
    !1;
    var c = a.find('.active-revslide'),
    d = a.find('.next-revslide'),
    e = d.find('.defaultimg');
    return 'carousel' !== b.sliderType || b.carousel.fadein || (punchgs.TweenLite.to(b.ul, 1, {
      opacity: 1
    }), b.carousel.fadein = !0),
    d.index() === c.index() && b.onlyPreparedSlide !== !0 ? (d.removeClass('next-revslide'), !1)  : (b.onlyPreparedSlide === !0 && (b.onlyPreparedSlide = !1, jQuery(b.li[0]).addClass('processing-revslide')), d.removeClass('next-revslide').addClass('processing-revslide'), d.index() === - 1 && 'carousel' === b.sliderType && (d = jQuery(b.li[0])), d.data('slide_on_focus_amount', d.data('slide_on_focus_amount') + 1 || 1), 'on' == b.stopLoop && d.index() == b.lastslidetoshow - 1 && (a.find('.tp-bannertimer').css({
      visibility: 'hidden'
    }), a.trigger('revolution.slide.onstop'), b.noloopanymore = 1), d.index() === b.slideamount - 1 && (b.looptogo = b.looptogo - 1, b.looptogo <= 0 && (b.stopLoop = 'on')), b.tonpause = !0, a.trigger('stoptimer'), b.cd = 0, 'off' === b.spinner && (b.loader !== undefined ? b.loader.css({
      display: 'none'
    })  : b.loadertimer = setTimeout(function () {
      b.loader !== undefined && b.loader.css({
        display: 'block'
      })
    }, 50)), loadImages(d, b, 1), _R.preLoadAudio && _R.preLoadAudio(d, b, 1), void waitForCurrentImages(d, b, function () {
      d.find('.rs-background-video-layer').each(function () {
        var a = jQuery(this);
        a.hasClass('HasListener') || (a.data('bgvideo', 1), _R.manageVideoLayer && _R.manageVideoLayer(a, b)),
        0 == a.find('.rs-fullvideo-cover').length && a.append('<div class="rs-fullvideo-cover"></div>')
      }),
      swapSlideProgress(e, a)
    }))
  }, swapSlideProgress = function (a, b) {
    var c = b.find('.active-revslide'),
    d = b.find('.processing-revslide'),
    e = c.find('.slotholder'),
    f = d.find('.slotholder'),
    g = b[0].opt;
    g.tonpause = !1,
    g.cd = 0,
    clearTimeout(g.loadertimer),
    g.loader !== undefined && g.loader.css({
      display: 'none'
    }),
    _R.setSize(g),
    _R.slotSize(a, g),
    _R.manageNavigation && _R.manageNavigation(g);
    var h = {
    };
    h.nextslide = d,
    h.currentslide = c,
    b.trigger('revolution.slide.onbeforeswap', h),
    g.transition = 1,
    g.videoplaying = !1,
    d.data('delay') != undefined ? (g.cd = 0, g.delay = d.data('delay'))  : g.delay = g.origcd,
    'true' == d.data('ssop') || d.data('ssop') === !0 ? g.ssop = !0 : g.ssop = !1,
    b.trigger('nulltimer');
    var i = c.index(),
    j = d.index();
    g.sdir = j < i ? 1 : 0,
    'arrow' == g.sc_indicator && (0 == i && j == g.slideamount - 1 && (g.sdir = 1), i == g.slideamount - 1 && 0 == j && (g.sdir = 0)),
    g.lsdir = g.lsdir === undefined ? g.sdir : g.lsdir,
    g.dirc = g.lsdir != g.sdir,
    g.lsdir = g.sdir,
    c.index() != d.index() && 1 != g.firststart && _R.removeTheCaptions && _R.removeTheCaptions(c, g),
    d.hasClass('rs-pause-timer-once') || d.hasClass('rs-pause-timer-always') ? g.videoplaying = !0 : b.trigger('restarttimer'),
    d.removeClass('rs-pause-timer-once');
    var k,
    m;
    if (g.currentSlide = c.index(), g.nextSlide = d.index(), 'carousel' == g.sliderType) m = new punchgs.TimelineLite,
    _R.prepareCarousel(g, m),
    letItFree(b, f, e, d, c, m),
    g.transition = 0,
    g.firststart = 0;
     else {
      m = new punchgs.TimelineLite({
        onComplete: function () {
          letItFree(b, f, e, d, c, m)
        }
      }),
      m.add(punchgs.TweenLite.set(f.find('.defaultimg'), {
        opacity: 0
      })),
      m.pause(),
      _R.animateTheCaptions && _R.animateTheCaptions({
        slide: d,
        opt: g,
        preset: !0
      }),
      1 == g.firststart && (punchgs.TweenLite.set(c, {
        autoAlpha: 0
      }), g.firststart = 0),
      punchgs.TweenLite.set(c, {
        zIndex: 18
      }),
      punchgs.TweenLite.set(d, {
        autoAlpha: 0,
        zIndex: 20
      }),
      'prepared' == d.data('differentissplayed') && (d.data('differentissplayed', 'done'), d.data('transition', d.data('savedtransition')), d.data('slotamount', d.data('savedslotamount')), d.data('masterspeed', d.data('savedmasterspeed'))),
      d.data('fstransition') != undefined && 'done' != d.data('differentissplayed') && (d.data('savedtransition', d.data('transition')), d.data('savedslotamount', d.data('slotamount')), d.data('savedmasterspeed', d.data('masterspeed')), d.data('transition', d.data('fstransition')), d.data('slotamount', d.data('fsslotamount')), d.data('masterspeed', d.data('fsmasterspeed')), d.data('differentissplayed', 'prepared')),
      d.data('transition') == undefined && d.data('transition', 'random'),
      k = 0;
      var n = d.data('transition') !== undefined ? d.data('transition').split(',')  : 'fade',
      o = d.data('nexttransid') == undefined ? - 1 : d.data('nexttransid');
      'on' == d.data('randomtransition') ? o = Math.round(Math.random() * n.length)  : o += 1,
      o == n.length && (o = 0),
      d.data('nexttransid', o);
      var p = n[o];
      g.ie && ('boxfade' == p && (p = 'boxslide'), 'slotfade-vertical' == p && (p = 'slotzoom-vertical'), 'slotfade-horizontal' == p && (p = 'slotzoom-horizontal')),
      _R.isIE(8) && (p = 11),
      m = _R.animateSlide(k, p, b, d, c, f, e, m),
      'on' == f.data('kenburns') && (_R.startKenBurn(f, g), m.add(punchgs.TweenLite.set(f, {
        autoAlpha: 0
      }))),
      m.pause()
    }
    _R.scrollHandling && (_R.scrollHandling(g, !0), m.eventCallback('onUpdate', function () {
      _R.scrollHandling(g, !0)
    })),
    'off' != g.parallax.type && g.parallax.firstgo == undefined && _R.scrollHandling && (g.parallax.firstgo = !0, g.lastscrolltop = - 999, _R.scrollHandling(g, !0), setTimeout(function () {
      g.lastscrolltop = - 999,
      _R.scrollHandling(g, !0)
    }, 210), setTimeout(function () {
      g.lastscrolltop = - 999,
      _R.scrollHandling(g, !0)
    }, 420)),
    _R.animateTheCaptions ? 'carousel' === g.sliderType && 'on' === g.carousel.showLayersAllTime ? (jQuery.each(g.li, function (a) {
      g.carousel.allLayersStarted ? _R.animateTheCaptions({
        slide: jQuery(g.li[a]),
        opt: g,
        recall: !0
      })  : g.li[a] === d ? _R.animateTheCaptions({
        slide: jQuery(g.li[a]),
        maintimeline: m,
        opt: g,
        startslideanimat: 0
      })  : _R.animateTheCaptions({
        slide: jQuery(g.li[a]),
        opt: g,
        startslideanimat: 0
      })
    }), g.carousel.allLayersStarted = !0)  : _R.animateTheCaptions({
      slide: d,
      opt: g,
      maintimeline: m,
      startslideanimat: 0
    })  : m != undefined && setTimeout(function () {
      m.resume()
    }, 30),
    punchgs.TweenLite.to(d, 0.001, {
      autoAlpha: 1
    })
  }, letItFree = function (a, b, c, d, e, f) {
    var g = a[0].opt;
    'carousel' === g.sliderType || (g.removePrepare = 0, punchgs.TweenLite.to(b.find('.defaultimg'), 0.001, {
      zIndex: 20,
      autoAlpha: 1,
      onComplete: function () {
        removeSlots(a, g, d, 1)
      }
    }), d.index() != e.index() && punchgs.TweenLite.to(e, 0.2, {
      zIndex: 18,
      autoAlpha: 0,
      onComplete: function () {
        removeSlots(a, g, e, 1)
      }
    })),
    a.find('.active-revslide').removeClass('active-revslide'),
    a.find('.processing-revslide').removeClass('processing-revslide').addClass('active-revslide'),
    g.act = d.index(),
    g.c.attr('data-slideactive', a.find('.active-revslide').data('index')),
    'scroll' != g.parallax.type && 'scroll+mouse' != g.parallax.type && 'mouse+scroll' != g.parallax.type || (g.lastscrolltop = - 999, _R.scrollHandling(g)),
    f.clear(),
    c.data('kbtl') != undefined && (c.data('kbtl').reverse(), c.data('kbtl').timeScale(25)),
    'on' == b.data('kenburns') && (b.data('kbtl') != undefined ? (b.data('kbtl').timeScale(1), b.data('kbtl').play())  : _R.startKenBurn(b, g)),
    d.find('.rs-background-video-layer').each(function (a) {
      if (_ISM && !g.fallbacks.allowHTML5AutoPlayOnAndroid) return !1;
      var b = jQuery(this);
      _R.resetVideo(b, g),
      punchgs.TweenLite.fromTo(b, 1, {
        autoAlpha: 0
      }, {
        autoAlpha: 1,
        ease: punchgs.Power3.easeInOut,
        delay: 0.2,
        onComplete: function () {
          _R.animcompleted && _R.animcompleted(b, g)
        }
      })
    }),
    e.find('.rs-background-video-layer').each(function (a) {
      if (_ISM) return !1;
      var b = jQuery(this);
      _R.stopVideo && (_R.resetVideo(b, g), _R.stopVideo(b, g)),
      punchgs.TweenLite.to(b, 1, {
        autoAlpha: 0,
        ease: punchgs.Power3.easeInOut,
        delay: 0.2
      })
    });
    var h = {
    };
    h.slideIndex = d.index() + 1,
    h.slideLIIndex = d.index(),
    h.slide = d,
    h.currentslide = d,
    h.prevslide = e,
    g.last_shown_slide = e.index(),
    a.trigger('revolution.slide.onchange', h),
    a.trigger('revolution.slide.onafterswap', h),
    g.duringslidechange = !1;
    var i = e.data('slide_on_focus_amount'),
    j = e.data('hideafterloop');
    0 != j && j <= i && g.c.revremoveslide(e.index());
    var k = g.nextSlide === - 1 || g.nextSlide === undefined ? 0 : g.nextSlide;
    g.rowzones != undefined && (k = k > g.rowzones.length ? g.rowzones.length : k),
    g.rowzones != undefined && g.rowzones.length > 0 && g.rowzones[k] != undefined && k >= 0 && k <= g.rowzones.length && g.rowzones[k].length > 0 && _R.setSize(g)
  }, removeAllListeners = function (a, b) {
    a.children().each(function () {
      try {
        jQuery(this).die('click')
      } catch (a) {
      }
      try {
        jQuery(this).die('mouseenter')
      } catch (a) {
      }
      try {
        jQuery(this).die('mouseleave')
      } catch (a) {
      }
      try {
        jQuery(this).unbind('hover')
      } catch (a) {
      }
    });
    try {
      a.die('click', 'mouseenter', 'mouseleave')
    } catch (a) {
    }
    clearInterval(b.cdint),
    a = null
  }, countDown = function (a, b) {
    b.cd = 0,
    b.loop = 0,
    b.stopAfterLoops != undefined && b.stopAfterLoops > - 1 ? b.looptogo = b.stopAfterLoops : b.looptogo = 9999999,
    b.stopAtSlide != undefined && b.stopAtSlide > - 1 ? b.lastslidetoshow = b.stopAtSlide : b.lastslidetoshow = 999,
    b.stopLoop = 'off',
    0 == b.looptogo && (b.stopLoop = 'on');
    var c = a.find('.tp-bannertimer');
    a.on('stoptimer', function () {
      var a = jQuery(this).find('.tp-bannertimer');
      a[0].tween.pause(),
      'on' == b.disableProgressBar && a.css({
        visibility: 'hidden'
      }),
      b.sliderstatus = 'paused',
      _R.unToggleState(b.slidertoggledby)
    }),
    a.on('starttimer', function () {
      b.forcepause_viatoggle || (1 != b.conthover && 1 != b.videoplaying && b.width > b.hideSliderAtLimit && 1 != b.tonpause && 1 != b.overnav && 1 != b.ssop && (1 === b.noloopanymore || b.viewPort.enable && !b.inviewport || (c.css({
        visibility: 'visible'
      }), c[0].tween.resume(), b.sliderstatus = 'playing')), 'on' == b.disableProgressBar && c.css({
        visibility: 'hidden'
      }), _R.toggleState(b.slidertoggledby))
    }),
    a.on('restarttimer', function () {
      if (!b.forcepause_viatoggle) {
        var a = jQuery(this).find('.tp-bannertimer');
        if (b.mouseoncontainer && 'on' == b.navigation.onHoverStop && !_ISM) return !1;
        1 === b.noloopanymore || b.viewPort.enable && !b.inviewport || 1 == b.ssop || (a.css({
          visibility: 'visible'
        }), a[0].tween.kill(), a[0].tween = punchgs.TweenLite.fromTo(a, b.delay / 1000, {
          width: '0%'
        }, {
          force3D: 'auto',
          width: '100%',
          ease: punchgs.Linear.easeNone,
          onComplete: d,
          delay: 1
        }), b.sliderstatus = 'playing'),
        'on' == b.disableProgressBar && a.css({
          visibility: 'hidden'
        }),
        _R.toggleState(b.slidertoggledby)
      }
    }),
    a.on('nulltimer', function () {
      c[0].tween.kill(),
      c[0].tween = punchgs.TweenLite.fromTo(c, b.delay / 1000, {
        width: '0%'
      }, {
        force3D: 'auto',
        width: '100%',
        ease: punchgs.Linear.easeNone,
        onComplete: d,
        delay: 1
      }),
      c[0].tween.pause(0),
      'on' == b.disableProgressBar && c.css({
        visibility: 'hidden'
      }),
      b.sliderstatus = 'paused'
    });
    var d = function () {
      0 == jQuery('body').find(a).length && (removeAllListeners(a, b), clearInterval(b.cdint)),
      a.trigger('revolution.slide.slideatend'),
      1 == a.data('conthover-changed') && (b.conthover = a.data('conthover'), a.data('conthover-changed', 0)),
      _R.callingNewSlide(a, 1)
    };
    c[0].tween = punchgs.TweenLite.fromTo(c, b.delay / 1000, {
      width: '0%'
    }, {
      force3D: 'auto',
      width: '100%',
      ease: punchgs.Linear.easeNone,
      onComplete: d,
      delay: 1
    }),
    b.slideamount > 1 && (0 != b.stopAfterLoops || 1 != b.stopAtSlide) ? a.trigger('starttimer')  : (b.noloopanymore = 1, a.trigger('nulltimer')),
    a.on('tp-mouseenter', function () {
      b.mouseoncontainer = !0,
      'on' != b.navigation.onHoverStop || _ISM || (a.trigger('stoptimer'), a.trigger('revolution.slide.onpause'))
    }),
    a.on('tp-mouseleft', function () {
      b.mouseoncontainer = !1,
      1 != a.data('conthover') && 'on' == b.navigation.onHoverStop && (1 == b.viewPort.enable && b.inviewport || 0 == b.viewPort.enable) && (a.trigger('revolution.slide.onresume'), a.trigger('starttimer'))
    })
  }, vis = function () {
    var a,
    b,
    c = {
      hidden: 'visibilitychange',
      webkitHidden: 'webkitvisibilitychange',
      mozHidden: 'mozvisibilitychange',
      msHidden: 'msvisibilitychange'
    };
    for (a in c) if (a in document) {
      b = c[a];
      break
    }
    return function (c) {
      return c && document.addEventListener(b, c, {
        pasive: !0
      }),
      !document[a]
    }
  }(), restartOnFocus = function () {
    jQuery('.rev_redraw_on_blurfocus').each(function () {
      var a = jQuery(this) [0].opt;
      return a != undefined && a.c != undefined && 0 !== a.c.length && void (1 != a.windowfocused && (a.windowfocused = !0, punchgs.TweenLite.delayedCall(0.3, function () {
        'on' == a.fallbacks.nextSlideOnWindowFocus && a.c.revnext(),
        a.c.revredraw(),
        'playing' == a.lastsliderstatus && a.c.revresume()
      })))
    })
  }, lastStatBlur = function () {
    jQuery('.rev_redraw_on_blurfocus').each(function () {
      var a = jQuery(this) [0].opt;
      a.windowfocused = !1,
      a.lastsliderstatus = a.sliderstatus,
      a.c.revpause();
      var b = a.c.find('.active-revslide .slotholder'),
      c = a.c.find('.processing-revslide .slotholder');
      'on' == c.data('kenburns') && _R.stopKenBurn(c, a),
      'on' == b.data('kenburns') && _R.stopKenBurn(b, a)
    })
  }, tabBlurringCheck = function () {
    var a = document.documentMode === undefined,
    b = window.chrome;
    1 !== jQuery('body').data('revslider_focus_blur_listener') && (jQuery('body').data('revslider_focus_blur_listener', 1), a && !b ? jQuery(window).on('focusin', function () {
      restartOnFocus()
    }).on('focusout', function () {
      lastStatBlur()
    })  : window.addEventListener ? (window.addEventListener('focus', function (a) {
      restartOnFocus()
    }, {
      capture: !1,
      passive: !0
    }), window.addEventListener('blur', function (a) {
      lastStatBlur()
    }, {
      capture: !1,
      passive: !0
    }))  : (window.attachEvent('focus', function (a) {
      restartOnFocus()
    }), window.attachEvent('blur', function (a) {
      lastStatBlur()
    })))
  }, getUrlVars = function (a) {
    for (var c, b = [
    ], d = window.location.href.slice(window.location.href.indexOf(a) + 1).split('_'), e = 0; e < d.length; e++) d[e] = d[e].replace('%3D', '='),
    c = d[e].split('='),
    b.push(c[0]),
    b[c[0]] = c[1];
    return b
  }
}(jQuery);
