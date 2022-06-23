$(document).ready(function () {
    let app = new application();
    app.init();
});


function application() {
    //variable
    //this.myMap;
}
application.prototype.init = function () {
    this.initHeaderNavbar();
    this.initBtnDropdown();
    this.initStrategicGoal();
    this.initSliders();
    this.initTabs();
    this.setFilterTabsBehavior();
}

// Init header navbar behavior
application.prototype.initHeaderNavbar = function () {
    //desktop
    if (!$('html').hasClass('touch')) {
        // Shows drop-menu when it's parent is hovered.
        $('.js-drop-menu').parent().hover(function () {
            $(this).find('>.js-drop-menu').stop();
            $(this).find('>.js-drop-menu').slideDown(300);
            $(this).addClass('active');
        }, function () {
            $(this).find('>.js-drop-menu').stop();
            $(this).find('>.js-drop-menu').slideUp(150);
            $(this).removeClass('active');
        });
        // Shows drop-submenu when it's parent is hovered.
        $('.js-drop-submenu').parent().hover(function () {
            // Вывод __drop-submenu одинаковой высоты с __drop-menu
            var h = $(this).closest('.js-drop-menu').innerHeight();
            $(this).find('>.js-drop-submenu').css({
                'min-height': h,
            });

            $(this).find('>.js-drop-submenu').stop();
            $(this).find('>.js-drop-submenu').animate({ width: "toggle" });
            $(this).toggleClass('active');
        });

        if (window.matchMedia("(max-width:1199px)").matches) {
            $('.goods-menu__link').hover(function () {
                $(this).addClass('active');
            }, function () {
                $(this).removeClass('active');
            });
        }
    }
    //mobile
    else {
        $('.header-bottom__menu .goods-menu__link').on('click', function (e) {
            if ($(this).parent().hasClass('active')) return true;
            e.preventDefault();

            ///////////////
            $('.header-bottom__menu .goods-menu__item.active').each(function (i, el) {
                $(el).removeClass('active');
                $(el).find('.js-drop-menu').slideUp(150);
            });
            $('.header-bottom__menu .goods-menu__drop-menu-item').each(function (i, el) {
                $(el).removeClass('active');
                $(el).find('.js-drop-submenu').hide();
            });
            ///////////////
            $(this).parent().addClass('active');
            $(this).parent().find('>.js-drop-menu').slideDown(300);
        });

        $('.header-bottom__menu .goods-menu__drop-menu-link').on('click', function (e) {
            if ($(this).parent().hasClass('active')) return true;
            if (!$(this).parent().find('.js-drop-submenu').length) return true;
            e.preventDefault();

            $('.header-bottom__menu .goods-menu__drop-menu-item').each(function (i, el) {
                $(el).removeClass('active');
                $(el).find('.js-drop-submenu').hide();
            });

            $(this).parent().addClass('active');

            $(this).parent().find('.js-drop-submenu').animate({ width: "toggle" });
        });

        $(document).on('click', function (e) {
            if (!$(e.target).closest('.header-bottom__menu').length) {
                $('.header-bottom__menu .goods-menu__item').removeClass('active');
                $('.header-bottom__menu').find('.js-drop-menu').slideUp(150);
            }
        });
    }
}


// Init ".btn-dropdown" behavior
application.prototype.initBtnDropdown = function () {
    if ($(".btn-dropdown").length) {
        $(".btn-dropdown").on("click", function (e) {
            if ($(".btn-dropdown").is(e.target) && $(".btn-dropdown").has(e.target).length === 0) {
                if (!$(this).hasClass("btn-dropdown--open")) {
                    $(".btn-dropdown").removeClass("btn-dropdown--open");
                    $(this).addClass("btn-dropdown--open");

                    $(".btn-dropdown .content-dropdown").removeClass("content-dropdown--open");
                    $(this).find(".content-dropdown").addClass("content-dropdown--open");
                    $(this).find(".content-dropdown").addClass("content-dropdown--transition");
                    setTimeout(function () {
                        $(".btn-dropdown .content-dropdown").removeClass("content-dropdown--transition");
                    }, 150);
                } else {
                    $(this).removeClass("btn-dropdown--open");
                    $(this).find(".content-dropdown").removeClass("content-dropdown--open");
                }
            }
        });

        $(document).on("click", function (e) {
            if (!$(".btn-dropdown").is(e.target) && $(".btn-dropdown").has(e.target).length === 0
                || $(".content-dropdown__results .content-dropdown__link").is(e.target)) {
                $(".btn-dropdown").removeClass("btn-dropdown--open");
                $(".btn-dropdown .content-dropdown").removeClass("content-dropdown--open");
            }
        });
    }
}
// Init "strategic-goal__header" behavior
application.prototype.initStrategicGoal = function () {
    if ($(".js-strategic-goal-item").length) {
        /*$(".strategic-goal__collapse").hide();*/
        $(".strategic-goal--dropdown .js-strategic-goal-item").on("click", function () {
            if(!$(this).hasClass("active")) {
                $(this).addClass("active");
                $(this).find(".strategic-goal__collapse").slideDown(150);
            } else {
                $(this).removeClass("active");
                $(this).find(".strategic-goal__collapse").slideUp(150);
            }
        });
    }
}
// Init sliders
application.prototype.initSliders = function () {
    // Magazine slider
    if ($(".js-magazine-slider").length) {
        let magazineSliderSettings = {
            slidesPerView: 4,
            spaceBetween: 20,
            navigation: {
                nextEl: ".magazine .swiper-button-next",
                prevEl: ".magazine .swiper-button-prev",
            },
            pagination: {
                el: ".magazine .swiper-pagination",
                clickable: true,
                dynamicBullets: true,
                dynamicMainBullets: 7,
            },
            breakpoints: {
                /*768: {
                    slidesPerView: 2,
                },*/
            }
        };
        new Swiper(".js-magazine-slider", magazineSliderSettings);
    }

    // Feedback slider
    if ($(".js-feedback-slider").length) {
        let feedbackSliderSettings = {
            slidesPerView: 4,
            spaceBetween: 20,
            navigation: {
                nextEl: ".feedback .swiper-button-next",
                prevEl: ".feedback .swiper-button-prev",
            },
            pagination: {
                el: ".feedback .swiper-pagination",
                clickable: true,
                dynamicBullets: true,
                dynamicMainBullets: 3,
            },
        };
        new Swiper(".js-feedback-slider", feedbackSliderSettings);
    }

    // Clients slider
    if ($(".js-clients-slider").length) {
        let clientsSliderSettings = {
            allowTouchMove: false,
            autoplay: {
                delay: 0,
                disableOnInteraction: false
            },

            freeMode: {
                enabled: true,
            },
            loop: true,
            slidesPerView: "auto",
            spaceBetween: 20,
            speed: 5000,
        };
        new Swiper(".js-clients-slider", clientsSliderSettings);
    }

    // Feedback thumbs slider
    if ($(".js-awards-thumbs-slider").length) {
        let awardsSliderThumbsSettings = {
            slidesPerView: 3,
            spaceBetween: 35,
            watchSlidesProgress: true,
        };
        new Swiper(".js-awards-thumbs-slider", awardsSliderThumbsSettings);
    }
    // Feedback slider
    if ($(".js-awards-slider").length) {
        let awardsSliderSettings = {
            slidesPerView: 1,
            spaceBetween: 35,
            effect: "fade",
            /*thumbs: {
                swiper: awardsSliderThumbsSettings,
            },*/
            navigation: {
                nextEl: ".awards .swiper-button-next",
                prevEl: ".awards .swiper-button-prev",
            },
            pagination: {
                el: ".awards-slider .swiper-pagination",
                type: "custom",
                renderCustom: function (swiper, current, total) {
                    return ("" + current).slice(-2) + " из " + ("" + total).slice(-2);
                }
            },

        };
        new Swiper(".js-awards-slider", awardsSliderSettings);
    }

    /*let swiper = new Swiper(".js-awards-thumbs-slider", {
        spaceBetween: 10,
        slidesPerView: 4,
        freeMode: true,
        watchSlidesProgress: true,
      });
      let swiper2 = new Swiper(".js-awards-slider", {
        spaceBetween: 10,
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
        thumbs: {
          swiper: swiper,
        },
    });*/

}
// Init tabs
application.prototype.initTabs = function () {
    if ($(".tabs").length) {
        // adding class "selected" to active tab
        $(".tabs-heading__item").on("click", function () {
            if (!$(this).find("input[type='checkbox']").prop("checked")) {
                $(this).removeClass("selected");
            } else if ($(this).find("input[type='checkbox']").prop("checked")) {
                $(this).addClass("selected");
            }
        });

        // show content of "selected" item
        tabsContentBinding();
        function tabsContentBinding() {
            $(".tabs-heading__item").on("click", function () {
                let currentSelected = $(this).data("target");
                if (!$(this).find("input[type='checkbox']").prop("checked")) {
                    $(this).closest(".tabs").find(".tab-content__section[data-id='" + currentSelected + "']").removeClass("active");
                } else if ($(this).find("input[type='checkbox']").prop("checked")) {
                    $(this).closest(".tabs").find(".tab-content__section[data-id='" + currentSelected + "']").addClass("active");
                }
            });
        }
    }
}
// Init filter tabs
application.prototype.setFilterTabsBehavior = function () {
    if ($(".page-search-result__filter").length) {
        $(".page-search-result__filter .tabs-heading__item").on("click", function () {
            $(".page-search-result__filter .tabs-heading__item").each(function () {
                if ($(this).find("input[type='checkbox']").prop("checked")) {
                    $(this).closest(".page-search-result__filter--default").removeClass("page-search-result__filter--default");
                    return false;
                } else {
                    $(".page-search-result__filter").addClass("page-search-result__filter--default");
                }

            });
        });
    }
}
