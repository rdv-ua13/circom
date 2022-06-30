$(document).ready(function () {
    let app = new application();
    app.init();
});


function application() {
    //variable
    //this.myMap;
}
application.prototype.init = function () {
    /*this.initUpload();*/
    this.initMapContacts();
    this.setNavbarDropdownLinkBehavior();
    this.setNavbarPanelBehavior();
    this.initNavbarToggler();
    this.initSliders();
}


// Init upload
application.prototype.initUpload = function () {
    /*if ($(".js-strategic-goal-item").length) {*/

// Select Upload-Area
        const uploadArea = document.querySelector('.js-upload-area')

// Select upload-file Area
        const dropZoon = document.querySelector('#uploadFile');

// Loading Text
        const loadingText = document.querySelector('#loadingText');

// Slect File Input
        const fileInput = document.querySelector('#fileInput');

// Select Preview Image
        const previewImage = document.querySelector('#previewImage');

// File-Details Area
        const fileDetails = document.querySelector('#fileDetails');

// Uploaded File
        const uploadedFile = document.querySelector('#uploadedFile');

// Uploaded File Info
        const uploadedFileInfo = document.querySelector('#uploadedFileInfo');

// Uploaded File  Name
        const uploadedFileName = document.querySelector('.uploaded-file__name');

// Uploaded File Icon
        const uploadedFileIconText = document.querySelector('.uploaded-file__icon-text');

// Uploaded File Counter
        const uploadedFileCounter = document.querySelector('.uploaded-file__counter');

// ToolTip Data
        const toolTipData = document.querySelector('.upload-area__tooltip-data');

// Images Types
        const imagesTypes = [
            "jpeg",
            "png",
            "svg",
            "gif"
        ];

// Append Images Types Array Inisde Tooltip Data
        toolTipData.innerHTML = [...imagesTypes].join(', .');

// When (upload-file) has (dragover) Event
        dropZoon.addEventListener('dragover', function (event) {
            // Prevent Default Behavior
            event.preventDefault();

            // Add Class (upload-file--over) On (upload-file)
            dropZoon.classList.add('upload-file--over');
        });

// When (upload-file) has (dragleave) Event
        dropZoon.addEventListener('dragleave', function (event) {
            // Remove Class (upload-file--over) from (upload-file)
            dropZoon.classList.remove('upload-file--over');
        });

// When (upload-file) has (drop) Event
        dropZoon.addEventListener('drop', function (event) {
            // Prevent Default Behavior
            event.preventDefault();

            // Remove Class (upload-file--over) from (upload-file)
            dropZoon.classList.remove('upload-file--over');

            // Select The Dropped File
            const file = event.dataTransfer.files[0];

            // Call Function uploadFile(), And Send To Her The Dropped File :)
            uploadFile(file);
        });

// When (upload-file) has (click) Event
        dropZoon.addEventListener('click', function (event) {
            // Click The (fileInput)
            fileInput.click();
        });

// When (fileInput) has (change) Event
        fileInput.addEventListener('change', function (event) {
            // Select The Chosen File
            const file = event.target.files[0];

            // Call Function uploadFile(), And Send To Her The Chosen File :)
            uploadFile(file);
        });

// Upload File Function
        function uploadFile(file) {
            // FileReader()
            const fileReader = new FileReader();
            // File Type
            const fileType = file.type;
            // File Size
            const fileSize = file.size;

            // If File Is Passed from the (File Validation) Function
            if (fileValidate(fileType, fileSize)) {
                // Add Class (upload-file--Uploaded) on (upload-file)
                dropZoon.classList.add('upload-file--Uploaded');

                // Show Loading-text
                loadingText.style.display = "block";
                // Hide Preview Image
                previewImage.style.display = 'none';

                // Remove Class (uploaded-file--open) From (uploadedFile)
                uploadedFile.classList.remove('uploaded-file--open');
                // Remove Class (uploaded-file__info--active) from (uploadedFileInfo)
                uploadedFileInfo.classList.remove('uploaded-file__info--active');

                // After File Reader Loaded
                fileReader.addEventListener('load', function () {
                    // After Half Second
                    setTimeout(function () {
                        // Add Class (upload-area--open) On (uploadArea)
                        uploadArea.classList.add('upload-area--open');

                        // Hide Loading-text (please-wait) Element
                        loadingText.style.display = "none";
                        // Show Preview Image
                        previewImage.style.display = 'block';

                        // Add Class (file-details--open) On (fileDetails)
                        fileDetails.classList.add('file-details--open');
                        // Add Class (uploaded-file--open) On (uploadedFile)
                        uploadedFile.classList.add('uploaded-file--open');
                        // Add Class (uploaded-file__info--active) On (uploadedFileInfo)
                        uploadedFileInfo.classList.add('uploaded-file__info--active');
                    }, 500); // 0.5s

                    // Add The (fileReader) Result Inside (previewImage) Source
                    previewImage.setAttribute('src', fileReader.result);

                    // Add File Name Inside Uploaded File Name
                    uploadedFileName.innerHTML = file.name;

                    // Call Function progressMove();
                    progressMove();
                });

                // Read (file) As Data Url
                fileReader.readAsDataURL(file);
            } else { // Else

                this; // (this) Represent The fileValidate(fileType, fileSize) Function

            };
        };

// Progress Counter Increase Function
        function progressMove() {
            // Counter Start
            let counter = 0;

            // After 600ms
            setTimeout(() => {
                // Every 100ms
                let counterIncrease = setInterval(() => {
                    // If (counter) is equle 100
                    if (counter === 100) {
                        // Stop (Counter Increase)
                        clearInterval(counterIncrease);
                    } else { // Else
                        // plus 10 on counter
                        counter = counter + 10;
                        // add (counter) vlaue inisde (uploadedFileCounter)
                        uploadedFileCounter.innerHTML = `${counter}%`
                    }
                }, 100);
            }, 600);
        };


// Simple File Validate Function
        function fileValidate(fileType, fileSize) {
            // File Type Validation
            let isImage = imagesTypes.filter((type) => fileType.indexOf(`image/${type}`) !== -1);

            // If The Uploaded File Type Is 'jpeg'
            if (isImage[0] === 'jpeg') {
                // Add Inisde (uploadedFileIconText) The (jpg) Value
                uploadedFileIconText.innerHTML = 'jpg';
            } else { // else
                // Add Inisde (uploadedFileIconText) The Uploaded File Type
                uploadedFileIconText.innerHTML = isImage[0];
            };

            // If The Uploaded File Is An Image
            if (isImage.length !== 0) {
                // Check, If File Size Is 2MB or Less
                if (fileSize <= 2000000) { // 2MB :)
                    return true;
                } else { // Else File Size
                    return alert('Please Your File Should be 2 Megabytes or Less');
                };
            } else { // Else File Type
                return alert('Please make sure to upload An Image File Type');
            };
        };

// :)
    /*}*/
}
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
}
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
}
// Set behavior to navbar-panel
application.prototype.setNavbarPanelBehavior = function () {
    if($(".js-navbar-panel").length) {
        $(".js-navbar-panel .navbar-panel__dropdown-link").on("mouseover", function () {
            let currentEl = $(this).data("target");

            $(".js-navbar-panel").find(".navbar-panel__dropdown-submenu").removeClass("active");
            $(".js-navbar-panel").find(".navbar-panel__dropdown-submenu[data-id='" + currentEl + "']").addClass("active");
        });
    }
}
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
}
// Init sliders
application.prototype.initSliders = function () {
    // Equipment slider
    if ($(".js-equipment-slider").length) {
        var equipmentSliderSettings = {
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
}
