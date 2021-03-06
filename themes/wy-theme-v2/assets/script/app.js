$(document).ready(function () {
    /* 首页图片轮播调用 start */
    var Inits = function (ele, opts) {
        this.$ele = ele,
            this.defaults = {
                _width: 808, //设置图轮播图大小
                _height: 370,
                page: 'page',
                fade: 'normal', //图片切换速度 可能的值slow/normal/fast/毫秒(比如 1500)
                time: '', //可能的值(毫秒)1000\2000...
                pageNum: false, //是否启用数字做轮播导航 true为启用,false不启用
                pagelocat: false //轮播导航图标是否要居中 true/fasle 默认为居中
            },
            this.init = $.extend({}, this.defaults, opts);
    }
    Inits.prototype = {
        slideFade: function () {
            var ul = this.$ele.children('ul.list');
            var li = ul.children('li');
            li.eq(0).show().siblings('li').hide();
            var init = this.init;
            //slide
            this.$ele.css({
                position: 'relative',
                width: init._width + 'px',
                height: init._height + 'px',
                margin: '0 auto'
            });
            li.css({
                position: 'absolute',
                left: 0,
                width: init._width + 'px',
                height: init._height + 'px'
            });
            li.find('img').css({
                width: '100%',
                height: '100%'
            });
            //page==buiding
            if (init.page != '' && init.page != undefined) {
                this.$ele.append('<ul class="' + init.page + '"></ul>');
                // buiding-page
                for (var i = 0; i < li.length; i++) {
                    if (init.pageNum == true) {
                        $('.' + init.page).append('<li>' + (i + 1) + '</li>');
                    } else if (init.pageNum == false) {
                        $('.' + init.page).append('<li>&nbsp;</li>');
                    }
                }
                ;
                var page = $('.' + init.page);
                var pageli = page.children('li');
                pageli.css('float', 'left');
                var pageliw = Math.ceil(pageli.outerWidth(true) + 0.05) * pageli.length;
                var pagetoleft = init._width / 2 - pageliw / 2;
                pageli.eq(0).addClass('on');
                page.css({
                    position: 'absolute',
                    width: pageliw + 'px'
                });
                if (init.pagelocat == true) {
                    page.css('left', pagetoleft + 'px');
                }
                ;
            }
            ;
            //btn==buiding
            if (init.btn == true) {
                this.$ele.append('<a href="javascript:;" class="sBtn">' + init.prevText + '</a><a href="javascript:;" class="sBtn">' + init.nextText + '</a>');
                var btntotop = Math.round(init._height / 2 - this.$ele.children('a.sBtn').height() / 2);
                this.$ele.children('a.sBtn').css({
                    position: 'absolute',
                    top: btntotop + 'px'
                });
                if (init.nextClass != '' || init.prevClass != '') {
                    this.$ele.children('a.sBtn').eq(0).addClass(init.prevClass).next('a.sBtn').addClass(init.nextClass);
                }
            }
            ;
            //==========
            var i = 0;
            var next = function (fade) {
                li.eq(i).fadeOut(fade).next().fadeIn(fade);
                page.children('li').eq(i).removeClass('on').next().addClass('on');
                i++;
                if (i > li.length - 1) {
                    i = 0;
                    li.eq(i).fadeIn(fade);
                    page.children('li').eq(i).addClass('on');
                }
            };
            var prev = function (fade) {
                console.log(li.length);

                if (i == 0) {
                    i = li.length - 1;
                    li.eq(0).fadeOut(fade);
                    li.eq(i).fadeIn(fade);
                    page.children('li').eq(0).removeClass('on');
                    page.children('li').eq(i).addClass('on');
                } else {
                    li.eq(i).fadeOut(fade).prev().fadeIn(fade);
                    page.children('li').eq(i).removeClass('on').prev().addClass('on');
                    i--;
                }
            }


            // 是否自动轮播
            if (init.time != '' && init.time != undefined) {
                var timeRun = setInterval(next, init.time);
                //鼠标经过图片
                li.each(function (index, el) {
                    $(this).mouseover(function (event) {
                        clearInterval(timeRun);
                    }).mouseout(function (event) {
                        timeRun = setInterval(next, init.time);
                    });
                });
            }
            ;
            if (init.page != '' && init.page != undefined) {
                //点击导航图标
                pageli.each(function (index, el) {
                    $(this).click(function (event) {
                        console.log(index);
                        i = index;
                        console.log(i);
                        li.eq(i).fadeIn(init.fade).siblings('li').fadeOut(init.fade);
                        page.children('li').eq(i).addClass('on').siblings('li').removeClass('on');
                    });
                });
            }
            ;
        }//slideFade end
    }
    // 插件中调用
    $.fn.MdsSlideFade = function (opts) {
        var inits = new Inits(this, opts);
        return inits.slideFade();
    }
    $('#slide').MdsSlideFade({
        pageNum: true, time: '3000'
    });
    /*  end */

    /* 电商咨询左侧悬浮显示 */
    $('#afix-lanmu').affix({
        offset: {
            top: 215,
            bottom: 320 + 1,
        },
    });
    /* end  */


    //首页——优秀店铺展示
    $(function () {
        $("#img-slider").imgScroll();
        $("#img-slider-2").imgScroll();

    });
    (function ($) {
        $.fn.imgScroll = function () {
            var isDone = false,
                scrollBox = $(this),
                prevBtn = scrollBox.find("#prev"),
                nextBtn = scrollBox.find("#next"),
                imgBox = scrollBox.find("ul"),
                next_over = imgBox.find("li").width() * imgBox.find("li").length,
                slide_width = $(".slider-wrap").width();

            return this.each(function () {
                function setOpacity() {
                    imgBox.animate({
                        opacity: 1
                    }, 800, function () {
                        isDone = false;
                    })
                }

                function scrollNext() {
                    if (!isDone && next_over + parseInt(imgBox.css("left"), 10) > slide_width) {
                        isDone = true;
                        imgBox.animate({
                            left: "+=" + "-" + slide_width,
                            opacity: 0.5
                        }, 1800, setOpacity);
                    }
                    //isDone = false
                }

                function scrollPrev() {
                    if (!imgBox.is(':animated') && parseInt(imgBox.css("left"), 10) != 0) {
                        imgBox.animate({
                            left: "+=" + slide_width,
                        }, 1800, setOpacity);

                    }
                }

                prevBtn.bind('click', scrollPrev);
                nextBtn.bind('click', scrollNext);


            })
        }
    })(jQuery);

}); // ready end


