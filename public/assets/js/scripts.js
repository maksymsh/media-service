window.initJS = () => {
    'use strict'
    jQuery(document).ready(function (t) {
        var e = t('.solutions-content')
        if (!(e.length <= 0)) {
            e.height(), e.offset().top
            var o = t('.solutions-menu-content'),
                n =
                    (o.outerHeight(),
                    {
                        root: document.body.querySelector('body'),
                        threshold: (function (t) {
                            for (var e = [], o = 1; o <= t; o++) {
                                var n = o / t
                                e.push(n)
                            }
                            return e.push(0), e
                        })(10),
                        rootMargin: '200px 0px 0px 0px',
                    }),
                s = new IntersectionObserver(function (e) {
                    e.forEach(function (e) {
                        var n = e.target,
                            s = t(n),
                            i = s.prop('id'),
                            r = o.find('[data-target="'.concat(i, '"]'))
                        if (e.isIntersecting) {
                            var a = s.offset().top,
                                c = s.outerHeight(),
                                u = t(window).height() / 2,
                                l = t(window).scrollTop()
                            s.addClass('is-intersecting'),
                                s.hasClass('solutions-item--solution') &&
                                    r.length &&
                                    l + u >= a &&
                                    l < a + c - u &&
                                    (o.find('li').removeClass('active'),
                                    r.addClass('active'))
                        } else r.removeClass('active'), s.removeClass('is-intersecting')
                    })
                }, n)
            t('.solutions-item').each(function (e, o) {
                var n = t(o)
                s.observe(n[0])
            })
        }
    })

    jQuery(document).ready(function (t) {
        var e = t('.for-menus')
        if (!(e.length <= 0)) {
            e.height(), e.offset().top
            var o = t('.info-menu'),
                n =
                    (o.outerHeight(),
                    {
                        root: document.body.querySelector('body'),
                        threshold: (function (t) {
                            for (var e = [], o = 1; o <= t; o++) {
                                var n = o / t
                                e.push(n)
                            }
                            return e.push(0), e
                        })(10),
                        rootMargin: '-250px 0px 0px 0px',
                    }),
                s = new IntersectionObserver(function (e) {
                    e.forEach(function (e) {
                        var n = e.target,
                            s = t(n),
                            i = s.prop('id'),
                            r = o.find('[data-target="'.concat(i, '"]'))
                        if (e.isIntersecting) {
                            var a = s.offset().top,
                                c = s.outerHeight(),
                                u = t(window).height() / 2,
                                l = t(window).scrollTop()
                            s.addClass('is-intersecting'),
                                s.hasClass('solutions-item--solution') &&
                                    r.length &&
                                    l + u >= a &&
                                    l < a + c - u &&
                                    (o.find('li').removeClass('active'),
                                    r.addClass('active'))
                        } else r.removeClass('active'), s.removeClass('is-intersecting')
                    })
                }, n)
            t('.solutions-item').each(function (e, o) {
                var n = t(o)
                s.observe(n[0])
            })
        }
    })

    var header = $('.header'),
        scrollPrev = 0

    $(window).on('scroll load resize', function () {
        var scrolled = $(window).scrollTop()

        if (scrolled > 112) {
            header.addClass('fix')
        } else {
            if ($('.header-fix').length) {
                header.addClass('fix')
            } else {
                header.removeClass('fix')
            }
        }
        if (scrolled > 60 && scrolled > scrollPrev) {
            header.addClass('out')
            $('body').removeClass('drop-open')
            $('body').removeClass('menu-open')
            $('body').removeClass('burger-open')
            $('body').find('.is-active').removeClass('is-active')
        } else {
            header.removeClass('out')
        }

        scrollPrev = scrolled
    })

    $(window).on('load', function () {
        setTimeout(function () {
            $(':root').find('.inner-main').addClass('anim')
        }, 700)
    })

    $(window).on('load resize', function () {
        if ($(window).width() <= '1200') {
            $('.gallery-container').appendTo('.gallery-move')
        } else {
            $('.gallery-container').appendTo('.detail-gallery')
        }
    })

    console.log($(window).listeners)
    jQuery(document).ready(function () {
        $('a.scroll').click(function () {
            var elementClick = $(this).attr('href')
            var destination = $(elementClick).offset().top - 120
            jQuery('html:not(:animated),body:not(:animated)').animate(
                {
                    scrollTop: destination,
                },
                1400
            )
            return false
        })
        $('.menu-button').on('click tap', function () {
            $(this).parent().toggleClass('open')
            $(this).find('.but-icon').toggleClass('is-active')
            $(':root').find('body').toggleClass('menu-open')
            $(':root').find('.main-menu').toggleClass('open')
        })

        $('.burger-menu-button').on('click tap', function () {
            $(this).parent().toggleClass('open')
            $(this).toggleClass('is-active')
            $(':root').find('body').toggleClass('burger-open')
        })
        $('.drop-but').on('click tap', function () {
            $(this).parent().parent().toggleClass('open')
        })
        $('.props-button').on('click tap', function () {
            $(this).parent().toggleClass('open')
        })
        $('.drop').hover(
            function () {
                $('body').addClass('drop-open')
            },
            function () {
                $('body').removeClass('drop-open')
            }
        )
        if ($('.counts-items').length) {
            var show = true
            var countbox = '.counts-items'
            $(window).on('scroll load resize', function () {
                if (!show) return false // Отменяем показ анимации, если она уже была выполнена
                var w_top = $(window).scrollTop() // Количество пикселей на которое была прокручена страница
                var e_top = $(countbox).offset()?.top // Расстояние от блока со счетчиками до верха всего документа
                var w_height = $(window).height() // Высота окна браузера
                var d_height = $(document).height() // Высота всего документа
                var e_height = $(countbox).outerHeight() // Полная высота блока со счетчиками
                if (
                    w_top + 500 >= e_top ||
                    w_height + w_top == d_height ||
                    e_height + e_top < w_height
                ) {
                    $('.data-run').css('opacity', '1')
                    $('.data-run').spincrement({
                        thousandSeparator: '',
                        duration: 5000,
                    })

                    show = false
                }
            })
        }
        $('.filter-button').on('click tap', function () {
            $(this).parent().toggleClass('open')
            $(':root').find('body').toggleClass('filter-open')
        })
        $('.filter-close').on('click tap', function () {
            $(':root').find('.filter').removeClass('open')
            $(':root').find('body').removeClass('filter-open')
        })

        $('.big-slider').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            asNavFor: '.thumb-slider',
            dots: false,
            arrows: false,
            centerMode: false,
            touchThreshold: 30,
            responsive: [
                {
                    breakpoint: 1200,
                    settings: {
                        dots: true,
                    },
                },
                {
                    breakpoint: 575,
                    settings: {
                        dots: true,
                    },
                },
            ],
        })

        $('.thumb-slider').slick({
            slidesToShow: 4,
            slidesToScroll: 1,
            asNavFor: '.big-slider',
            dots: false,
            arrows: false,
            centerMode: false,
            focusOnSelect: true,
            touchThreshold: 30,
        })

        $('.products-slider').each(function (idx, item) {
            var carouselId = 'carousel' + idx
            this.id = carouselId
            var carouselId3 = $(this).parent().parent().find('.slider-navs')

            $(this).slick({
                slidesToShow: 4,
                slidesToScroll: 1,
                arrows: true,
                dots: false,
                focusOnSelect: true,
                appendArrows: carouselId3,
                touchThreshold: 30,
                responsive: [
                    {
                        breakpoint: 1200,
                        settings: {
                            slidesToShow: 3,
                        },
                    },
                    {
                        breakpoint: 992,
                        settings: {
                            slidesToShow: 2,
                        },
                    },
                    {
                        breakpoint: 767,
                        settings: {
                            slidesToShow: 2,
                            variableWidth: true,
                        },
                    },
                    {
                        breakpoint: 575,
                        settings: {
                            slidesToShow: 1,
                            variableWidth: true,
                        },
                    },
                ],
            })
        })

        $('.projects-slider').each(function (idx, item) {
            var carouselId = 'carousel' + idx
            this.id = carouselId
            var carouselId4 = $(this).parent().parent().find('.slider-navs')

            $(this).slick({
                slidesToShow: 3,
                slidesToScroll: 1,
                arrows: true,
                dots: false,
                focusOnSelect: true,
                appendArrows: carouselId4,
                touchThreshold: 30,
                responsive: [
                    {
                        breakpoint: 1200,
                        settings: {
                            slidesToShow: 3,
                        },
                    },
                    {
                        breakpoint: 992,
                        settings: {
                            slidesToShow: 2,
                        },
                    },
                    {
                        breakpoint: 767,
                        settings: {
                            slidesToShow: 2,
                            variableWidth: true,
                        },
                    },
                    {
                        breakpoint: 575,
                        settings: {
                            slidesToShow: 1,
                            variableWidth: true,
                        },
                    },
                ],
            })
        })

        $('.slider-gallery').each(function (idx, item) {
            var carouselId = 'carousel' + idx
            this.id = carouselId
            var carouselId5 = $(this).parent().parent().find('.slider-navs')

            $(this).slick({
                slidesToShow: 2,
                slidesToScroll: 1,
                arrows: true,
                dots: false,
                focusOnSelect: true,
                variableWidth: true,
                appendArrows: carouselId5,
                touchThreshold: 30,
                responsive: [
                    {
                        breakpoint: 1200,
                        settings: {
                            slidesToShow: 2,
                        },
                    },
                    {
                        breakpoint: 992,
                        settings: {
                            slidesToShow: 2,
                        },
                    },
                    {
                        breakpoint: 767,
                        settings: {
                            slidesToShow: 2,
                            variableWidth: true,
                        },
                    },
                    {
                        breakpoint: 575,
                        settings: {
                            slidesToShow: 1,
                            variableWidth: true,
                        },
                    },
                ],
            })
        })

        var image = document.getElementsByClassName('parallax')
        new simpleParallax(image, {
            scale: 1.2,
        })
    })

    $('.input').focus(function () {
        $(this).parent().addClass('focus')
        $(this).parent().removeClass('error')
    })

    $('.input').blur(function () {
        var comment = $(this).html()
        if ($(this).val() != '' || comment.length != 0) {
            $(this).parent().addClass('ok')
            $(this).parent().removeClass('focus')
        } else {
            $(this).parent().removeClass('focus')
            $(this).parent().removeClass('ok')
        }
    })

    $('.input').focus(function () {
        $(this).parent().addClass('focus')
        $(this).parent().removeClass('error')
    })

    $('.input').blur(function () {
        var comment = $(this).html()
        if ($(this).val() != '' || comment.length != 0) {
            $(this).parent().addClass('ok')
            $(this).parent().removeClass('focus')
        } else {
            $(this).parent().removeClass('focus')
            $(this).parent().removeClass('ok')
        }
    })

    $('.textarea').focus(function () {
        $(this).parent().addClass('focus')
        $(this).parent().removeClass('error')
    })

    $('.textarea').blur(function () {
        var comment = $(this).html()
        if ($(this).val() != '' || comment.length != 0) {
            $(this).parent().addClass('ok')
            $(this).parent().removeClass('focus')
        } else {
            $(this).parent().removeClass('focus')
            $(this).parent().removeClass('ok')
        }
    })

    var pattern = /^[a-z0-9._%+-]+@[a-z0-9-]+\.[a-z]{2,6}$/i

    function validateEmail(email) {
        var re =
            /^(([^<>()[\].,;:\s@"]+(\.[^<>()[\].,;:\s@"]+)*)|(".+"))@(([^<>()[\].,;:\s@"]+\.)+[^<>()[\].,;:\s@"]{2,})$/iu
        return re.test(String(email).toLowerCase())
    }

    $('.email').blur(function () {
        if ($(this).val() != '') {
            if ($(this).val().search(pattern) == 0) {
                $(this).parent().addClass('ok')
                $(this).parent().removeClass('focus')
            } else {
                $(this).parent().removeClass('focus')
                $(this).parent().removeClass('ok')
                $(this).parent().addClass('error')
                $(this).parent().addClass('err')
            }
        } else {
            $(this).parent().removeClass('focus')
            $(this).parent().removeClass('ok')
            $(this).parent().addClass('empty_field')
            $(this).parent().removeClass('err')
        }
    })

    $.fn.setCursorPosition = function (pos) {
        if ($(this).get(0).setSelectionRange) {
            $(this).get(0).setSelectionRange(pos, pos)
        } else if ($(this).get(0).createTextRange) {
            var range = $(this).get(0).createTextRange()
            range.collapse(true)
            range.moveEnd('character', pos)
            range.moveStart('character', pos)
            range.select()
        }
    }

    $('.phone')
        .click(function () {
            $(this).setCursorPosition(5)
        })
        .mask('+38(099) 999-99-99')
    $('.phone').blur(function () {
        if ($(this).val() != '') {
            $(this).parent().addClass('ok')
            console.log('111')
        } else {
            console.log('222')
            $(this).parent().removeClass('focus')
            $(this).parent().removeClass('ok')

            $(this).parent().removeClass('err')
        }
    })
    ;(function ($) {
        $(function () {
            $('.form').each(function () {
                // Объявляем переменные (форма и кнопка отправки)
                var form = $(this),
                    btn = form.find('.submit')
                var pattern = /^[a-z0-9._%+-]+@[a-z0-9-]+\.[a-z]{2,6}$/i
                // Добавляем каждому проверяемому полю, указание что поле пустое
                form.find('.important').parent().addClass('empty_field')

                // Функция проверки полей формы
                function checkInput() {
                    form.find('.important').each(function () {
                        if ($(this).hasClass('email')) {
                            if ($(this).val().search(pattern) == 0) {
                                $(this).parent().addClass('ok')
                                $(this).parent().removeClass('focus')
                                $(this).parent().removeClass('error')
                                $(this).parent().addClass('err')
                                $(this).parent().removeClass('empty_field')
                            } else {
                                $(this).parent().removeClass('ok')
                            }
                        } else if ($(this).hasClass('check')) {
                            if ($(this).is(':checked')) {
                                $(this).parent().addClass('ok')
                                $(this).parent().removeClass('focus')
                                $(this).parent().removeClass('error')
                                $(this).parent().removeClass('empty_field')
                            } else {
                                $(this).parent().removeClass('ok')
                            }
                        } else {
                            if ($(this).val() != '') {
                                // Если поле не пустое удаляем класс-указание
                                $(this).parent().removeClass('empty_field')
                                $(this).parent().removeClass('error')
                            } else {
                                // Если поле пустое добавляем класс-указание
                                $(this).parent().addClass('empty_field')
                            }
                        }
                    })
                }

                // Функция подсветки незаполненных полей
                function lightEmpty() {
                    form.find('.empty_field').addClass('error')
                }

                // Проверка в режиме реального времени
                setInterval(function () {
                    // Запускаем функцию проверки полей на заполненность
                    checkInput()
                    // Считаем к-во незаполненных полей
                    var sizeEmpty = form.find('.empty_field').length
                    // Вешаем условие-тригер на кнопку отправки формы
                    if (sizeEmpty > 0) {
                        if (btn.hasClass('disabled')) {
                            return false
                        } else {
                            btn.addClass('disabled')
                        }
                    } else {
                        btn.removeClass('disabled')
                        form.removeClass('form-error')
                    }
                }, 500)

                // Событие клика по кнопке отправить
                btn.click(function () {
                    if ($(this).hasClass('disabled')) {
                        // подсвечиваем незаполненные поля и форму не отправляем, если есть незаполненные поля
                        lightEmpty()
                        form.addClass('form-error')
                        return false
                    } else {
                        // Все хорошо, все заполнено, отправляем форму
                        if (form.hasClass('no-send')) {
                            return false
                        } else {
                            form.submit()
                        }
                    }
                })
            })
        })
    })(jQuery)

    if ($('.solutions-menu-content').length) {
        ;(function () {
            var a = document.querySelector('.solutions-menu-content'),
                b = null,
                P = 0
            window.addEventListener('scroll', Ascroll, false)
            document.body.addEventListener('scroll', Ascroll, false)

            function Ascroll() {
                if (b == null) {
                    var Sa = getComputedStyle(a, ''),
                        s = ''
                    for (var i = 0; i < Sa.length; i++) {
                        if (
                            Sa[i].indexOf('overflow') == 0 ||
                            Sa[i].indexOf('padding') == 0 ||
                            Sa[i].indexOf('border') == 0 ||
                            Sa[i].indexOf('outline') == 0 ||
                            Sa[i].indexOf('box-shadow') == 0 ||
                            Sa[i].indexOf('background') == 0
                        ) {
                            s +=
                                Sa[i] + ': ' + Sa.getPropertyValue(Sa[i]) + '; '
                        }
                    }
                    b = document.createElement('div')
                    b.style.cssText =
                        s +
                        ' box-sizing: border-box; width: ' +
                        a.offsetWidth +
                        'px;'
                    a.insertBefore(b, a.firstChild)
                    var l = a.childNodes.length
                    for (i = 1; i < l; i++) {
                        b.appendChild(a.childNodes[1])
                    }
                    a.style.height = b.getBoundingClientRect().height + 'px'
                    a.style.padding = '0'
                    a.style.border = '0'
                }
                var Ra = a.getBoundingClientRect(),
                    R = Math.round(
                        Ra.top +
                            b.getBoundingClientRect().height -
                            document
                                .querySelector('.solutions-wrapper')
                                ?.getBoundingClientRect().bottom
                    ) // селектор блока, при достижении нижнего края которого нужно открепить прилипающий элемент
                if (Ra.top - P <= 0) {
                    if (Ra.top - P <= R) {
                        b.className = 'stop'
                        b.style.top = -R + 'px'
                    } else {
                        b.className = 'sticky'
                        b.style.top = P + 'px'
                    }
                } else {
                    b.className = ''
                    b.style.top = ''
                }
                window.addEventListener(
                    'resize',
                    function () {
                        a.children[0].style.width = getComputedStyle(
                            a,
                            ''
                        ).width
                    },
                    false
                )
            }
        })()
    }

    if ($('.info-menu').length) {
        ;(function () {
            var a = document.querySelector('.info-menu'),
                b = null,
                P = 120
            window.addEventListener('scroll', Ascroll, false)
            document.body.addEventListener('scroll', Ascroll, false)

            function Ascroll() {
                if (b == null) {
                    var Sa = getComputedStyle(a, ''),
                        s = ''
                    for (var i = 0; i < Sa.length; i++) {
                        if (
                            Sa[i].indexOf('overflow') == 0 ||
                            Sa[i].indexOf('padding') == 0 ||
                            Sa[i].indexOf('border') == 0 ||
                            Sa[i].indexOf('outline') == 0 ||
                            Sa[i].indexOf('box-shadow') == 0 ||
                            Sa[i].indexOf('background') == 0
                        ) {
                            s +=
                                Sa[i] + ': ' + Sa.getPropertyValue(Sa[i]) + '; '
                        }
                    }
                    b = document.createElement('div')
                    b.style.cssText =
                        s +
                        ' box-sizing: border-box; width: ' +
                        a.offsetWidth +
                        'px;'
                    a.insertBefore(b, a.firstChild)
                    var l = a.childNodes.length
                    for (i = 1; i < l; i++) {
                        b.appendChild(a.childNodes[1])
                    }
                    a.style.height = b.getBoundingClientRect().height + 'px'
                    a.style.padding = '0'
                    a.style.border = '0'
                }
                var Ra = a.getBoundingClientRect(),
                    R = Math.round(
                        Ra.top +
                            b.getBoundingClientRect().height -
                            document
                                .querySelector('.detail-info')
                                .getBoundingClientRect().bottom
                    ) // селектор блока, при достижении нижнего края которого нужно открепить прилипающий элемент
                if (Ra.top - P <= 0) {
                    if (Ra.top - P <= R) {
                        b.className = 'stop'
                        b.style.top = -R + 'px'
                    } else {
                        b.className = 'sticky'
                        b.style.top = P + 'px'
                    }
                } else {
                    b.className = ''
                    b.style.top = ''
                }
                window.addEventListener(
                    'resize',
                    function () {
                        a.children[0].style.width = getComputedStyle(
                            a,
                            ''
                        ).width
                    },
                    false
                )
            }
        })()
    }

    function number_format(number, decimals, dec_point, separator) {
        number = (number + '').replace(/[^0-9+\-Ee.]/g, '')
        var n = !isFinite(+number) ? 0 : +number,
            prec = !isFinite(+decimals) ? 0 : Math.abs(decimals),
            sep = typeof separator === 'undefined' ? ',' : separator,
            dec = typeof dec_point === 'undefined' ? '.' : dec_point,
            s = '',
            toFixedFix = function (n, prec) {
                var k = Math.pow(10, prec)
                return '' + (Math.round(n * k) / k).toFixed(prec)
            }
        // Фиксим баг в IE parseFloat(0.55).toFixed(0) = 0;
        s = (prec ? toFixedFix(n, prec) : '' + Math.round(n)).split('.')
        if (s[0].length > 3) {
            s[0] = s[0].replace(/\B(?=(?:\d{3})+(?!\d))/g, sep)
        }
        if ((s[1] || '').length < prec) {
            s[1] = s[1] || ''
            s[1] += new Array(prec - s[1].length + 1).join('0')
        }
        return s.join(dec)
    }

    var handle5 = $('#p_min')
    var handle6 = $('#p_max')
    if ($('#filter-price').length) {
        $('#filter-price').slider({
            animate: 'slow',
            range: true,
            min: 3330,
            max: 10000,
            values: [3330, 10000],
            create: function () {
                handle5.val(
                    number_format($(this).slider('values', 0), 0, '.', ' ')
                )
                handle6.val(
                    number_format($(this).slider('values', 1), 0, '.', ' ')
                )
            },

            slide: function (event, ui) {
                handle5.val(number_format(ui.values[0], 0, '.', ' '))
                handle6.val(number_format(ui.values[1], 0, '.', ' '))
            },
        })
    }
}
