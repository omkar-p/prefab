var nextimage = 0;
var pageHeadBgImages = [{
        "id": "page-head-bg-img-1",
        "imgPath": "./static/images/Shore_CB.jpg"
    },
    {
        "id": "page-head-bg-img-2",
        "imgPath": "./static/images/Desert.jpg"
    },
    {
        "id": "page-head-bg-img-3",
        "imgPath": "./static/images/Night2.jpg"
    },
    {
        "id": "page-head-bg-img-4",
        "imgPath": "./static/images/Forest_2k.jpg"
    }
];

var nextModelClosup = 0;
var modelClosupImages = [{
        "id": "model-closup-preview",
        "imgPath": "./static/images/Shore_CB.jpg"
    },
    {
        "id": "model-closup-plan",
        "imgPath": "./static/images/Desert.jpg"
    },
    {
        "id": "model-closup-interior",
        "imgPath": "./static/images/LIVING.jpg"
    },
    {
        "id": "model-closup-exterior",
        "imgPath": "./static/images/Cabin_Desert.jpg"
    }
];
var changeHeadBgTimeout;
var images = new Array('', '', '', '');


var currentModelCarosulItem = -1;
var modelCarosulItems = [{
        "id": "model-carosul-item-1",
        "imgPath": "./static/images/Cabin_Desert_4to3.jpg"
    },
    {
        "id": "model-carosul-item-2",
        "imgPath": "./static/images/Shore_CB_4to3.jpg"
    },
    {
        "id": "model-carosul-item-3",
        "imgPath": "./static/images/Desert_cliff_4to3.jpg"
    },
    {
        "id": "model-carosul-item-4",
        "imgPath": "./static/images/Forest_2k_4to3.jpg"
    },
    {
        "id": "model-carosul-item-5",
        "imgPath": "./static/images/Forest_4to3.jpg"
    }
];


$(document).click(function(e) {
    if ($(e.target).parents(".alerts").length === 0 && document.getElementById('alerts') != null) {
        // $("#alerts").fadeOut();
        removeFadeOut(document.getElementById('alerts'), 500);
        window.location.href = window.location.origin + window.location.pathname;
    }
});

// doSlideshow();
// changeHeadBg(0);

function doSlideshow() {
    if (nextimage >= pageHeadBgImages.length) { nextimage = 0; }
    var nextBgImageObj = pageHeadBgImages[nextimage++];
    $('.page-head-part')
        .css('background-image', 'url("' + nextBgImageObj.imgPath + '")')
        .fadeIn(500, function() {
            clearTimeout(changeHeadBgTimeout);
            changeHeadBgTimeout = setTimeout(doSlideshow, 3000);
        });

    $('.bg-slider-img-container').removeClass("active");
    $('#' + nextBgImageObj.id).addClass("active");
}

function changeHeadBg(pageHeadBgIdx) {
    nextimage = pageHeadBgIdx;
    var nextBgImageObj = pageHeadBgImages[nextimage++];
    $('.page-head-part')
        .css('background-image', 'url("' + nextBgImageObj.imgPath + '")')
        .fadeIn(500, function() {
            // clearTimeout(changeHeadBgTimeout);
            // changeHeadBgTimeout = setTimeout(doSlideshow,3000);
        });

    $('.bg-slider-img-container').removeClass("active");
    $('#' + nextBgImageObj.id).addClass("active");
}

function changeModelClosup(modelClosupIdx) {
    nextModelClosup = modelClosupIdx;
    var nextBgImageObj = modelClosupImages[nextModelClosup++];
    $('.modal-closup')
        .css('background-image', 'url("' + nextBgImageObj.imgPath + '")')
        .fadeIn(500);

    $('.model-closup-tab').removeClass("active");
    $('#' + nextBgImageObj.id).addClass("active");
}

// slideNextModelCarosulItem();

function slideNextModelCarosulItem() {
    if (currentModelCarosulItem < modelCarosulItems.length - 1) {
        console.log(currentModelCarosulItem);
        var nextItemObj = modelCarosulItems[++currentModelCarosulItem];
        $("#model-carosul-item-active img")
            .attr("src", nextItemObj.imgPath)
            .fadeIn(500);

        console.log($('#model-carosul-item-slider-' + (currentModelCarosulItem + 1)));
        $('.carosul-slider div').removeClass("active");
        $('#model-carosul-item-slider-' + (currentModelCarosulItem + 1)).addClass("active");

        console.log(currentModelCarosulItem);
        if (currentModelCarosulItem < modelCarosulItems.length - 1) {
            $("#model-carosul-item-hidden").css("display", "block");

            var hiddenCarosulItemIdx = currentModelCarosulItem + 1;
            var hiddenItemObj = modelCarosulItems[hiddenCarosulItemIdx];
            $("#model-carosul-item-hidden img")
                .attr("src", hiddenItemObj.imgPath)
                .fadeIn(500);
        } else {
            $("#model-carosul-item-hidden img")
                .attr("src", "");
            $("#model-carosul-item-hidden img").css("display", "none");
            $("#model-carosul-item-hidden .model-carosul-item-detail-container").css("display", "none");
            $("#model-carosul-item-hidden .share-button-container").css("display", "none");
        }

        if (currentModelCarosulItem >= 1) {
            $("#model-carosul-item-hidden").css("display", "block");

            var hiddenCarosulItemIdx = currentModelCarosulItem - 1;
            var hiddenItemObj = modelCarosulItems[hiddenCarosulItemIdx];
            $("#model-carosul-item-hidden-left img")
                .attr("src", hiddenItemObj.imgPath)
                .fadeIn(500);
        } else {
            // $("#model-carosul-item-hidden-left img")
            // .attr("src", "");
            // $("#model-carosul-item-hidden-left").css("display", "none");
            $("#model-carosul-item-hidden-left img")
                .attr("src", "");
            $("#model-carosul-item-hidden-left img").css("display", "none");
            $("#model-carosul-item-hidden-left .model-carosul-item-detail-container").css("display", "none");
            $("#model-carosul-item-hidden-left .share-button-container").css("display", "none");
        }
    }
}


function slidePrevModelCarosulItem() {
    if (currentModelCarosulItem > 0) {
        var nextItemObj = modelCarosulItems[--currentModelCarosulItem];
        $("#model-carosul-item-active img")
            .attr("src", nextItemObj.imgPath)
            .fadeIn(500);

        $('.carosul-slider div').removeClass("active");
        $('#model-carosul-item-slider-' + (currentModelCarosulItem + 1)).addClass("active");

        if (currentModelCarosulItem < modelCarosulItems.length - 1) {
            $("#model-carosul-item-hidden").css("display", "block");

            var hiddenCarosulItemIdx = currentModelCarosulItem + 1;
            var hiddenItemObj = modelCarosulItems[hiddenCarosulItemIdx];
            $("#model-carosul-item-hidden img")
                .attr("src", hiddenItemObj.imgPath)
                .fadeIn(500);
        } else {
            $("#model-carosul-item-hidden img")
                .attr("src", "");
            $("#model-carosul-item-hidden img").css("display", "none");
            $("#model-carosul-item-hidden .model-carosul-item-detail-container").css("display", "none");
        }

        if (currentModelCarosulItem >= 1) {
            $("#model-carosul-item-hidden").css("display", "block");

            var hiddenCarosulItemIdx = currentModelCarosulItem - 1;
            console.log(hiddenCarosulItemIdx);
            var hiddenItemObj = modelCarosulItems[hiddenCarosulItemIdx];
            console.log(hiddenItemObj);
            $("#model-carosul-item-hidden-left img")
                .attr("src", hiddenItemObj.imgPath)
                .fadeIn(500);
        } else {
            $("#model-carosul-item-hidden-left img")
                .attr("src", "");
            $("#model-carosul-item-hidden-left img").css("display", "none");
            $("#model-carosul-item-hidden-left .model-carosul-item-detail-container").css("display", "none");
        }
    }
}



function myMap() {
    var mapProp = {
        center: new google.maps.LatLng(51.508742, -0.120850),
        zoom: 5,
    };
    var map = new google.maps.Map(document.getElementById("googleMap"), mapProp);
}

function gotoTop() {
    var scrollStep = -window.scrollY / (150 / 15);
    var scrollInterval = setInterval(function() {
        if (window.scrollY != 0) {
            window.scrollBy(0, scrollStep);
        } else clearInterval(scrollInterval);
    }, 15);

}

function goToContactUs() {
    $('html,body').animate({
        scrollTop: $('#contact-us-form').offset().top
    }, 1000);
}

function hideModel() {
    // $("#alerts").fadeOut();
    removeFadeOut(document.getElementById('alerts'), 500);
    window.location.href = window.location.origin + window.location.pathname;
}

function removeFadeOut(el, speed) {
    var seconds = speed / 1000;
    el.style.transition = "opacity " + seconds + "s ease";

    el.style.opacity = 0;
    setTimeout(function() {
        el.parentNode.removeChild(el);
    }, speed);
}