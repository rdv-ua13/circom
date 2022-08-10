$(document).ready(function () {
    let app = new application();
    app.init();
});


function application() {
    //variable
    //this.myMap;
}
application.prototype.init = function () {
    this.initMapContacts();
    this.initMapContactsPage();
    this.setNavbarDropdownLinkBehavior();
    this.setNavbarPanelBehavior();
    this.initNavbarToggler();
    this.initSliders();
    this.initTabs();
    this.initModalPopup();
};

// Init contacts map
application.prototype.initMapContacts = function () {
    if($("#contacts_map").length) {
        let coords = [55.709084,38.455242];

        ymaps.ready(init);
        function init(){
            // Создание карты.
            let myMap = new ymaps.Map("contacts_map", {
                    // Координаты центра карты.
                    // Порядок по умолчанию: «широта, долгота».
                    center: coords,
                    controls: [],
                    zoom: 16,
                }, {
                    searchControlProvider: 'yandex#search'
                }),

            myPlacemark = new ymaps.Placemark(myMap.getCenter(), {
                hintContent: 'Circom',
                /*balloonContent: 'Circom'*/
            }, {
                iconLayout: 'default#image',
                // Custom image for the placemark icon.
                iconImageHref: '/build/img/placemark.svg',
                // The size of the placemark.
                iconImageSize: [24, 24],
                iconImageOffset: [-5, -38]
            });
            myMap.geoObjects.add(myPlacemark);
            myMap.behaviors.disable('scrollZoom');
        }
    }
};
// Init contacts-page-map
application.prototype.initMapContactsPage = function () {
    if($("#contacts_page_map").length) {
        let coords = [55.709084,38.455242];

        ymaps.ready(init);
        function init(){
            // Создание карты.
            let myMap = new ymaps.Map("contacts_page_map", {
                    // Координаты центра карты.
                    // Порядок по умолчанию: «широта, долгота».
                    center: coords,
                    controls: [],
                    zoom: 16,
                }, {
                    searchControlProvider: 'yandex#search'
                }),

            myPlacemark = new ymaps.Placemark(myMap.getCenter(), {
                hintContent: 'Circom',
                /*balloonContent: 'Circom'*/
            }, {
                iconLayout: 'default#image',
                // Custom image for the placemark icon.
                iconImageHref: '/build/img/placemark.svg',
                // The size of the placemark.
                iconImageSize: [24, 24],
                iconImageOffset: [-5, -38]
            });
            myMap.geoObjects.add(myPlacemark);
            myMap.behaviors.disable('scrollZoom');
        }
    }
};
// Set behavior to navbar dropdown (1st lvl)
application.prototype.setNavbarDropdownLinkBehavior = function () {
    if($(".js-navbar-link-dropdown").length) {
        $(".js-navbar-link-dropdown").on("click", function () {
            if($(this).closest(".navbar__nav-item").hasClass("active")) {
                $(this).closest(".navbar__nav-item").removeClass("active");
            }
            else {
                $(this).closest(".navbar__nav-item").addClass("active");
            }

            if($(this).closest(".navbar").siblings(".navbar-panel").hasClass("show")) {
                $(this).closest(".navbar").siblings(".navbar-panel").removeClass("show");
                $(this).closest(".navbar").siblings(".navbar-panel").slideUp(150);

                $(".js-navbar-panel").find(".navbar-panel__dropdown-submenu").removeClass("active");
                $(".js-navbar-panel").find(".navbar-panel__dropdown-submenu:first-of-type").addClass("active");
            }
            else {
                $(this).closest(".navbar").siblings(".navbar-panel").addClass("show");
                $(this).closest(".navbar").siblings(".navbar-panel").slideDown(150);
            }
        });

        $(document).on("click", function (e) {
            if (!$(".js-navbar-toggler").is(e.target)
                && !$(".js-navbar-link-dropdown").is(e.target)
                && $(".js-navbar-link-dropdown").has(e.target).length === 0
                && !$(".navbar-panel").is(e.target)
                && $(".navbar-panel").has(e.target).length === 0)
            {
                $(".navbar__nav-item").removeClass("active");
                $(".navbar-panel").removeClass("show");
                $(".navbar-panel").slideUp(150);

                $(".js-navbar-panel").find(".navbar-panel__dropdown-submenu").removeClass("active");
                $(".js-navbar-panel").find(".navbar-panel__dropdown-submenu:first-of-type").addClass("active");

                $(".js-navbar-toggler").removeClass("active");
            }
        });
    }
};
// Set behavior to navbar-panel
application.prototype.setNavbarPanelBehavior = function () {
    if($(".js-navbar-panel").length) {
        $(".js-navbar-panel .navbar-panel__dropdown-link").on("mouseover", function () {
            let currentEl = $(this).data("target");

            $(".js-navbar-panel").find(".navbar-panel__dropdown-submenu").removeClass("active");
            $(".js-navbar-panel").find(".navbar-panel__dropdown-submenu[data-id='" + currentEl + "']").addClass("active");
        });
    }
};
// Init navbar-toggler
application.prototype.initNavbarToggler = function () {
    if($(".js-navbar-toggler").length) {
        $(".js-navbar-toggler").on("click", function () {
            if($(this).hasClass("active")) {
                $(this).removeClass("active");

                $(".navbar__nav-item").removeClass("active");

                $(".navbar-panel").removeClass("show");
                $(".navbar-panel").slideUp(150);

                $(".navbar-panel__dropdown-submenu").removeClass("active");
                $(".navbar-panel__dropdown-submenu:first-of-type").addClass("active");
            }
            else {
                $(this).addClass("active");
            }
        });
    }
};
// Init sliders
application.prototype.initSliders = function () {
    // Equipment slider
    if ($(".js-equipment-slider").length) {
        let equipmentSliderSettings = {
            autoHeight: true,
            grabCursor: true,
            loop: true,
            centeredSlides: true,
            initialSlide: 2,
            effect: "coverflow",
            slidesPerView: "auto",
            coverflowEffect: {
                scale: 1.03,
                rotate: 0,
                stretch: 0,
                depth: 100,
                modifier: 10,
                initialSlide: 3,
                slideShadows: false,
            },
            navigation: {
                nextEl: ".equipment-slider .swiper-button-next",
                prevEl: ".equipment-slider .swiper-button-prev",
            },
            pagination: {
                el: ".equipment-slider .swiper-pagination",
                clickable: true,
            }
        };
        new Swiper(".js-equipment-slider", equipmentSliderSettings);
    }

    // Tabs gallery slider
    if ($(".tab-content__gallery").length) {
        let tabGalleryThumbsSlider,
            tabGallerySlider;

        $(".tabs .tabs-heading__item").on("click", function () {
            if ( $(".tab-content__gallery").closest(".tab-content__section").hasClass("active") ) {
                if ( tabGallerySlider !== undefined ) tabGallerySlider.destroy( true, true );
                return initTabGallerySlider();
            }
        });
        const initTabGallerySlider = function() {
            tabGalleryThumbsSlider = new Swiper(".js-tab-gallery-thumbs-slider", {
                slidesPerView: "auto",
                spaceBetween: 16,
                direction: "vertical",
            });
            tabGallerySlider = new Swiper(".js-tab-gallery-slider", {
                slidesPerView: 1,
                effect: "fade",
                thumbs: {
                    swiper: tabGalleryThumbsSlider,
                },
                navigation: {
                    nextEl: ".tab-gallery-thumbs-slider-wrapper .swiper-button-next",
                    prevEl: ".tab-gallery-thumbs-slider-wrapper .swiper-button-prev",
                }
            });
        }
    }
};
// Init tabs
application.prototype.initTabs = function () {
    if ($(".tabs").length) {
        // adding class "selected" to active tab
        $(".tabs-heading__item").on("click", function () {
            $(this).closest(".tabs-heading").find(".tabs-heading__item").removeClass("selected");
            $(this).addClass("selected");
        });

        // show content of "selected" item
        tabsContentBinding();
        function tabsContentBinding() {
            var currentSelected = 1;
            $(".tabs-heading__item").on("click", function () {
                currentSelected = $(this).data("target");
                $(this).closest(".tabs").find(".tab-content__section").removeClass("active");
                $(this).closest(".tabs").find(".tab-content__section[data-id='" + currentSelected + "']").addClass("active");
            });
        }
    }
};
// Init modal popup
application.prototype.initModalPopup = function () {
    if ($("[data-toggle='modal']").length) {
        let elemId = null,
            portfolioGalleryThumbsSlider = null,
            portfolioGallerySlider = null;

        $(document).on("click", function (e) {
            if ($(".modal-overlay").is(e.target) || $(".modal-close").is(e.target)) {
                elemId = $(e.target).closest(".modal").attr("id");
                e.stopPropagation();
                $("body").removeClass("modal-is-visible compensate-for-scrollbar");
                $("#" + elemId).removeClass("is-visible");
                portfolioGalleryThumbsSlider.destroy( true, true );
                portfolioGallerySlider.destroy( true, true );
            }
        });

        $("[data-toggle='modal']").on("click", function(e) {
            elemId = $(this).data("target");
            e.preventDefault();
            $(".modal").not("#" + elemId).removeClass("is-visible");
            $("#" + elemId).addClass("is-visible");
            $("body").addClass("modal-is-visible compensate-for-scrollbar");
        });

        // Portfolio gallery slider
        if ($(".js-portfolio-item[data-toggle='modal']").length) {
            $(".js-portfolio-item[data-toggle='modal']").on("click", function () {
                elemId = $(this).data("target");
                return initPortfolioGallerySlider(elemId);
            });

            let initPortfolioGallerySlider = function(id) {
                portfolioGalleryThumbsSlider = new Swiper("#" + id + " .js-portfolio-modal-thumbs-slider", {
                    slidesPerView: "auto",
                    spaceBetween: 8,
                    freeMode: true,
                    watchSlidesProgress: true,
                    breakpoints: {
                        576: {
                            spaceBetween: 16,
                        },
                        992: {
                            spaceBetween: 0,
                            direction: "vertical"
                        }
                    }
                });
                portfolioGallerySlider = new Swiper("#" + id + " .js-portfolio-modal-slider", {
                    slidesPerView: 1,
                    spaceBetween: 10,
                    effect: "fade",
                    thumbs: {
                        swiper: portfolioGalleryThumbsSlider,
                    },
                    navigation: {
                        nextEl: "#" + id + " .portfolio-modal__thumbs-slider-wrapper .swiper-button-next",
                        prevEl: "#" + id + " .portfolio-modal__thumbs-slider-wrapper .swiper-button-prev",
                    }
                });
            }
        }
    }
};
