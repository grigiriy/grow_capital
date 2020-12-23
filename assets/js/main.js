'use strict';

/*
 Sticky-kit v1.1.2 | WTFPL | Leaf Corcoran 2015 | http://leafo.net
*/
(function () {
  var b, f;
  b = window.jQuery;
  f = b(window);

  b.fn.stick_in_parent = function (d) {
    var A, w, J, n, B, K, p, q, k, E, t;
    null == d && (d = {});
    t = d.sticky_class;
    B = d.inner_scrolling;
    E = d.recalc_every;
    k = d.parent;
    q = d.offset_top;
    p = d.spacer;
    w = d.bottoming;
    null == q && (q = 0);
    null == k && (k = void 0);
    null == B && (B = !0);
    null == t && (t = 'is_stuck');
    A = b(document);
    null == w && (w = !0);

    J = function J(a, d, n, C, F, u, r, G) {
      var v, _H, m, D, I, c, g, x, y, z, h, l;

      if (!a.data('sticky_kit')) {
        a.data('sticky_kit', !0);
        I = A.height();
        g = a.parent();
        null != k && (g = g.closest(k));
        if (!g.length) throw 'failed to find stick parent';
        v = m = !1;
        (h = null != p ? p && a.closest(p) : b('<div />')) && h.css('position', a.css('position'));

        x = function x() {
          var c, f, e;
          if (
            !G &&
            ((I = A.height()),
            (c = parseInt(g.css('border-top-width'), 10)),
            (f = parseInt(g.css('padding-top'), 10)),
            (d = parseInt(g.css('padding-bottom'), 10)),
            (n = g.offset().top + c + f),
            (C = g.height()),
            m &&
              ((v = m = !1),
              null == p && (a.insertAfter(h), h.detach()),
              a
                .css({
                  position: '',
                  top: '',
                  width: '',
                  bottom: ''
                })
                .removeClass(t),
              (e = !0)),
            (F = a.offset().top - (parseInt(a.css('margin-top'), 10) || 0) - q),
            (u = a.outerHeight(!0)),
            (r = a.css('float')),
            h &&
              h.css({
                width: a.outerWidth(!0),
                height: u,
                display: a.css('display'),
                'vertical-align': a.css('vertical-align'),
                float: r
              }),
            e)
          )
            return l();
        };

        x();
        if (u !== C)
          return (
            (D = void 0),
            (c = q),
            (z = E),
            (l = function l() {
              var b, l, e, k;
              if (
                !G &&
                ((e = !1),
                null != z && (--z, 0 >= z && ((z = E), x(), (e = !0))),
                e || A.height() === I || x(),
                (e = f.scrollTop()),
                null != D && (l = e - D),
                (D = e),
                m
                  ? (w &&
                      ((k = e + u + c > C + n),
                      v &&
                        !k &&
                        ((v = !1),
                        a
                          .css({
                            position: 'fixed',
                            bottom: '',
                            top: c
                          })
                          .trigger('sticky_kit:unbottom'))),
                    e < F &&
                      ((m = !1),
                      (c = q),
                      null == p && (('left' !== r && 'right' !== r) || a.insertAfter(h), h.detach()),
                      (b = {
                        position: '',
                        width: '',
                        top: ''
                      }),
                      a.css(b).removeClass(t).trigger('sticky_kit:unstick')),
                    B &&
                      ((b = f.height()),
                      u + q > b &&
                        !v &&
                        ((c -= l),
                        (c = Math.max(b - u, c)),
                        (c = Math.min(q, c)),
                        m &&
                          a.css({
                            top: c + 'px'
                          }))))
                  : e > F &&
                    ((m = !0),
                    (b = {
                      position: 'fixed',
                      top: c
                    }),
                    (b.width = 'border-box' === a.css('box-sizing') ? a.outerWidth() + 'px' : a.width() + 'px'),
                    a.css(b).addClass(t),
                    null == p && (a.after(h), ('left' !== r && 'right' !== r) || h.append(a)),
                    a.trigger('sticky_kit:stick')),
                m && w && (null == k && (k = e + u + c > C + n), !v && k))
              )
                return (
                  (v = !0),
                  'static' === g.css('position') &&
                    g.css({
                      position: 'relative'
                    }),
                  a
                    .css({
                      position: 'absolute',
                      bottom: d,
                      top: 'auto'
                    })
                    .trigger('sticky_kit:bottom')
                );
            }),
            (y = function y() {
              x();
              return l();
            }),
            (_H = function H() {
              G = !0;
              f.off('touchmove', l);
              f.off('scroll', l);
              f.off('resize', y);
              b(document.body).off('sticky_kit:recalc', y);
              a.off('sticky_kit:detach', _H);
              a.removeData('sticky_kit');
              a.css({
                position: '',
                bottom: '',
                top: '',
                width: ''
              });
              g.position('position', '');
              if (m)
                return null == p && (('left' !== r && 'right' !== r) || a.insertAfter(h), h.remove()), a.removeClass(t);
            }),
            f.on('touchmove', l),
            f.on('scroll', l),
            f.on('resize', y),
            b(document.body).on('sticky_kit:recalc', y),
            a.on('sticky_kit:detach', _H),
            setTimeout(l, 0)
          );
      }
    };

    n = 0;

    for (K = this.length; n < K; n++) {
      (d = this[n]), J(b(d));
    }

    return this;
  };
}.call(void 0));

('use strict');

var dayOfWeek = 6; // 0 - Sunday; 1-6 - Monday-Saturday

function getTimeRemaining(endtime) {
  var t = Date.parse(endtime) - Date.parse(new Date());
  var seconds = Math.floor((t / 1000) % 60);
  var minutes = Math.floor((t / 1000 / 60) % 60);
  var hours = Math.floor((t / (1000 * 60 * 60)) % 24);
  var days = Math.floor(t / (1000 * 60 * 60 * 24));
  return {
    total: t,
    days: days,
    hours: hours,
    minutes: minutes,
    seconds: seconds
  };
}

function initializeClock(id, endtime) {
  var clock = document.getElementById(id);
  var daysSpan = clock.querySelector('.days');
  var hoursSpan = clock.querySelector('.hours');
  var minutesSpan = clock.querySelector('.minutes');
  var secondsSpan = clock.querySelector('.seconds');

  function updateClock() {
    var t = getTimeRemaining(endtime);
    daysSpan.innerHTML = ('0' + t.days).slice(-2);
    hoursSpan.innerHTML = ('0' + t.hours).slice(-2);
    minutesSpan.innerHTML = ('0' + t.minutes).slice(-2);
    secondsSpan.innerHTML = ('0' + t.seconds).slice(-2);

    if (t.total <= 0) {
      clearInterval(timeinterval);
    }
  }

  updateClock();
  var timeinterval = setInterval(updateClock, 1000);
}
/* Calculate date of the next Sunday, Monday, etc. */

function calculateDeadline() {
  var d = new Date();
  var dateIncrement = (6 - d.getDay() + dayOfWeek) % 6;
  if (!dateIncrement) dateIncrement = 7;
  var deadline = new Date();
  deadline.setDate(d.getDate() + dateIncrement);
  deadline.setHours(0, 0, 1, 0);
  return deadline;
}
/* Print date of the deadline calculated at calculateDeadline() function. */

function printDeadline(className, deadlineDateObject) {
  var deadlineElements = document.getElementsByClassName(className);

  if (deadlineElements.length) {
    deadlineElements = Array.from(deadlineElements);
    deadlineElements.forEach(function (item) {
      item.innerHTML = deadlineDateObject.toLocaleString('ru', {
        month: 'long',
        day: 'numeric'
      });
    });
  }
}

('use strict');

jQuery(document).ready(function ($) {
  // Плавный скролл
  var exceptions = sta_settings.exceptions.split(','),
    exceptionclass = '.accordion a[href*="#"]'; // check if any more classes need to be excluded

  if (exceptions != '') {
    for (var i = 0; i < exceptions.length; i++) {
      exceptionclass += ', ' + exceptions[i] + ' a[href*="#"]';
    }
  }

  $('a[href*="#"]')
    .not('a[href="#"]') // Exception #1: dummy hrefs
    .not('a[href*="#modal"]')
    .not(exceptionclass) // Even more exceptions, when set by the user
    .on('click', function (e) {
      //Split link into part before and after hash mark #
      var linktHref = this.href.split('#');

      if (linktHref[1] === '') {
        // Exception: orphaned # at end of URL
        return;
      }

      var currentUrlRoot = window.location.href.split('#')[0],
        scrollToAnchor = $('#' + linktHref[1]);
      currentUrlRoot = currentUrlRoot.replace(/\/$/, '');
      linktHref[0] = linktHref[0].replace(/\/$/, ''); // Do not animate for targets on another page

      if (linktHref[0] !== currentUrlRoot || !scrollToAnchor.length) {
        return;
      }

      $('html, body').animate(
        {
          scrollTop: scrollToAnchor.offset().top - sta_settings.distance
        },
        parseInt(sta_settings.speed, 10)
      );
      e.preventDefault();
      return false;
    });
});
var sta_settings = {
  distance: '60',
  speed: '500',
  exceptions: ''
};

('use strict');

/**
 * stacktable.js
 * Author & copyright (c) 2012: John Polacek
 * CardTable by: Justin McNally (2015)
 * MIT license
 *
 * Page: http://johnpolacek.github.com/stacktable.js
 * Repo: https://github.com/johnpolacek/stacktable.js/
 *
 * jQuery plugin for stacking tables on small screens
 * Requires jQuery version 1.7 or above
 *
 */
(function ($) {
  $.fn.cardtable = function (options) {
    var $tables = this,
      defaults = {
        headIndex: 0
      },
      settings = $.extend({}, defaults, options),
      headIndex; // checking the "headIndex" option presence... or defaults it to 0

    if (options && options.headIndex) headIndex = options.headIndex;
    else headIndex = 0;
    return $tables.each(function () {
      var $table = $(this);

      if ($table.hasClass('stacktable')) {
        return;
      }

      var table_css = $(this).prop('class');
      var $stacktable = $('<div></div>');
      if (typeof settings.myClass !== 'undefined') $stacktable.addClass(settings.myClass);
      var markup = '';
      var $caption, $topRow, headMarkup, bodyMarkup, tr_class;
      $table.addClass('stacktable large-only');
      $caption = $table.find('>caption').clone();
      $topRow = $table.find('>thead>tr,>tbody>tr,>tfoot>tr,>tr').eq(0); // avoid duplication when paginating

      $table.siblings().filter('.small-only').remove(); // using rowIndex and cellIndex in order to reduce ambiguity

      $table.find('>tbody>tr').each(function () {
        // declaring headMarkup and bodyMarkup, to be used for separately head and body of single records
        headMarkup = '';
        bodyMarkup = '';
        tr_class = $(this).prop('class'); // for the first row, "headIndex" cell is the head of the table
        // for the other rows, put the "headIndex" cell as the head for that row
        // then iterate through the key/values

        $(this)
          .find('>td,>th')
          .each(function (cellIndex) {
            if ($(this).html() !== '') {
              bodyMarkup += '<tr class="' + tr_class + '">';

              if ($topRow.find('>td,>th').eq(cellIndex).html()) {
                bodyMarkup += '<td class="st-key">' + $topRow.find('>td,>th').eq(cellIndex).html() + '</td>';
              } else {
                bodyMarkup += '<td class="st-key"></td>';
              }

              bodyMarkup += '<td class="st-val ' + $(this).prop('class') + '">' + $(this).html() + '</td>';
              bodyMarkup += '</tr>';
            }
          });
        markup +=
          '<table class=" ' +
          table_css +
          ' stacktable small-only"><tbody>' +
          headMarkup +
          bodyMarkup +
          '</tbody></table>';
      });
      $table.find('>tfoot>tr>td').each(function (rowIndex, value) {
        if ($.trim($(value).text()) !== '') {
          markup +=
            '<table class="' +
            table_css +
            ' stacktable small-only"><tbody><tr><td>' +
            $(value).html() +
            '</td></tr></tbody></table>';
        }
      });
      $stacktable.prepend($caption);
      $stacktable.append($(markup));
      $table.before($stacktable);
    });
  };

  $.fn.stacktable = function (options) {
    var $tables = this,
      defaults = {
        headIndex: 0,
        displayHeader: true
      },
      settings = $.extend({}, defaults, options),
      headIndex; // checking the "headIndex" option presence... or defaults it to 0

    if (options && options.headIndex) headIndex = options.headIndex;
    else headIndex = 0;
    return $tables.each(function () {
      var table_css = $(this).prop('class');
      var $stacktable = $('<table class="' + table_css + ' stacktable small-only"><tbody></tbody></table>');
      if (typeof settings.myClass !== 'undefined') $stacktable.addClass(settings.myClass);
      var markup = '';
      var $table, $caption, $topRow, headMarkup, bodyMarkup, tr_class, displayHeader;
      $table = $(this);
      $table.addClass('stacktable large-only');
      $caption = $table.find('>caption').clone();
      $topRow = $table.find('>thead>tr,>tbody>tr,>tfoot>tr').eq(0);
      displayHeader =
        $table.data('display-header') === undefined ? settings.displayHeader : $table.data('display-header'); // using rowIndex and cellIndex in order to reduce ambiguity

      $table.find('>tbody>tr, >thead>tr').each(function (rowIndex) {
        // declaring headMarkup and bodyMarkup, to be used for separately head and body of single records
        headMarkup = '';
        bodyMarkup = '';
        tr_class = $(this).prop('class'); // for the first row, "headIndex" cell is the head of the table

        if (rowIndex === 0) {
          // the main heading goes into the markup variable
          if (displayHeader) {
            markup +=
              '<tr class=" ' +
              tr_class +
              ' "><th class="st-head-row st-head-row-main" colspan="2">' +
              $(this).find('>th,>td').eq(headIndex).html() +
              '</th></tr>';
          }
        } else {
          // for the other rows, put the "headIndex" cell as the head for that row
          // then iterate through the key/values
          $(this)
            .find('>td,>th')
            .each(function (cellIndex) {
              if (cellIndex === headIndex) {
                headMarkup =
                  '<tr class="' + tr_class + '"><th class="st-head-row" colspan="2">' + $(this).html() + '</th></tr>';
              } else {
                if ($(this).html() !== '') {
                  bodyMarkup += '<tr class="' + tr_class + '">';

                  if ($topRow.find('>td,>th').eq(cellIndex).html()) {
                    bodyMarkup += '<td class="st-key">' + $topRow.find('>td,>th').eq(cellIndex).html() + '</td>';
                  } else {
                    bodyMarkup += '<td class="st-key"></td>';
                  }

                  bodyMarkup += '<td class="st-val ' + $(this).prop('class') + '">' + $(this).html() + '</td>';
                  bodyMarkup += '</tr>';
                }
              }
            });
          markup += headMarkup + bodyMarkup;
        }
      });
      $stacktable.prepend($caption);
      $stacktable.append($(markup));
      $table.before($stacktable);
    });
  };

  $.fn.stackcolumns = function (options) {
    var $tables = this,
      defaults = {},
      settings = $.extend({}, defaults, options);
    return $tables.each(function () {
      var $table = $(this);
      var $caption = $table.find('>caption').clone();
      var num_cols = $table.find('>thead>tr,>tbody>tr,>tfoot>tr').eq(0).find('>td,>th').length; //first table <tr> must not contain colspans, or add sum(colspan-1) here.

      if (num_cols < 3)
        //stackcolumns has no effect on tables with less than 3 columns
        return;
      var $stackcolumns = $('<table class="stacktable small-only"></table>');
      if (typeof settings.myClass !== 'undefined') $stackcolumns.addClass(settings.myClass);
      $table.addClass('stacktable large-only');
      var tb = $('<tbody></tbody>');
      var col_i = 1; //col index starts at 0 -> start copy at second column.

      while (col_i < num_cols) {
        $table.find('>thead>tr,>tbody>tr,>tfoot>tr').each(function (index) {
          var tem = $('<tr></tr>'); // todo opt. copy styles of $this; todo check if parent is thead or tfoot to handle accordingly

          if (index === 0) tem.addClass('st-head-row st-head-row-main');
          var first = $(this).find('>td,>th').eq(0).clone().addClass('st-key');
          var target = col_i; // if colspan apply, recompute target for second cell.

          if ($(this).find('*[colspan]').length) {
            var i = 0;
            $(this)
              .find('>td,>th')
              .each(function () {
                var cs = $(this).attr('colspan');

                if (cs) {
                  cs = parseInt(cs, 10);
                  target -= cs - 1;
                  if (i + cs > col_i)
                    //out of current bounds
                    target += i + cs - col_i - 1;
                  i += cs;
                } else {
                  i++;
                }

                if (i > col_i) return false; //target is set; break.
              });
          }

          var second = $(this).find('>td,>th').eq(target).clone().addClass('st-val').removeAttr('colspan');
          tem.append(first, second);
          tb.append(tem);
        });
        ++col_i;
      }

      $stackcolumns.append($(tb));
      $stackcolumns.prepend($caption);
      $table.before($stackcolumns);
    });
  }; // ТАБЛИЦА

  $('table').stacktable();
})(jQuery);

('use strict');

function toggle_answer(e) {
  $(e).find('.answer').toggle(300);
  $(e).toggleClass('active');
}

('use strict');

function toggle_burger(e) {
  $(e).toggleClass('active');
  $('#mainnav-menu').fadeToggle(300);
}

('use strict');

jQuery(document).ready(function ($) {
  // Sticky side navigation
  var width = $(window).width();

  if (width >= 768) {
    $('#sticky-nav').stick_in_parent({
      offset_top: 80
    });
    $('#sticky-nav-2').stick_in_parent({
      offset_top: 80
    });
  }

  $(window).resize(function () {
    var changedWidth = $(window).width();

    if (changedWidth < 768) {
      $('#sticky-nav').trigger('sticky_kit:detach');
      $('#sticky-nav-2').trigger('sticky_kit:detach');
    } else {
      $('#sticky-nav').stick_in_parent({
        offset_top: 80
      });
      $('#sticky-nav-2').stick_in_parent({
        offset_top: 80
      });
    }
  }); // Sticky .logo-wrap

  $(window).scroll(function () {
    $('.header-wrapper').toggleClass('is-sticky', $(this).scrollTop() > 0);
  });
  printDeadline('sale-last-day', calculateDeadline()); // if($('#clockdiv').length) { initializeClock('clockdiv', calculateDeadline()); }

  if ($('#clockdiv-page').length) {
    initializeClock('clockdiv-page', calculateDeadline());
  }
});
