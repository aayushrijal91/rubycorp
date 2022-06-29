// AOS.init({ duration: 1500 });

document.querySelectorAll('a[href="#form"]').forEach(function (anchor) {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();

        document.querySelector(this.getAttribute('href')).scrollIntoView({
            behavior: 'smooth'
        });
    });
});

let date = new Date();
let hr = date.getHours();
let mins = date.getMinutes();
let meridian;
let currentTime;

meridian = (hr > 11) ? "PM" : "AM";
hr = (hr > 12) ? (hr - 12) : hr;
mins = (mins < 10) ? ("0" + mins) : mins;
currentTime = hr + ":" + mins + " " + meridian;

$(".current-time").html(currentTime);

$(".project").on('click', function (e) {
    e.preventDefault();

    $(".project").removeClass('active');
    $(this).addClass('active');

    let dName = $(this).attr('d-name');
    $('.project-images').removeClass('active');
    $(`#${dName}`).addClass('active');
});

$(() => {
    $('.brands-slider').slick({
        arrows: false,
        dots: false,
        slidesToShow: 7,
        slidesToScroll: 1,
        accessibility: false,
        autoplay: true,
        variableWidth: true,
        responsive: [{
            breakpoint: 1700,
            settings: {
                slidesToShow: 6,
            }
        },
        {
            breakpoint: 600,
            settings: {
                slidesToShow: 2,
            }
        }
        ]
    });

    $(".testimonial-slider").slick({
        dots: true,
        appendDots: $('.slick-slider-dots'),
        slidesToShow: 1,
        slidesToScroll: 1,
        nextArrow: $("#arrow-next"),
        prevArrow: $("#arrow-prev"),
    })
})


$(window).on('scroll', () => {
    if ($(this).scrollTop() >= 600) {
        $('#return-to-top').fadeIn(300);
    } else {
        $('#return-to-top').fadeOut(300);
    }
});

$('#return-to-top').on('click', () => {
    $('body,html').animate({
        scrollTop: 0
    }, 500);
});

var currentTab = 0;
showTab(currentTab);

function showTab(n) {
    var x = document.getElementsByClassName("tab");
    x[n].style.display = "block";
    if (n == 0) {
        document.getElementById("prevBtn").style.display = "none";
    } else {
        document.getElementById("prevBtn").style.display = "inline";
    }
    if (n == (x.length - 1)) {
        document.getElementById("nextBtn").innerHTML = "Submit";
    } else {
        document.getElementById("nextBtn").innerHTML = "Next";
    }
    fixStepIndicator(n)
}

function nextPrev(n) {
    var x = document.getElementsByClassName("tab");
    if (n == 1 && !validateForm()) return false;
    x[currentTab].style.display = "none";
    currentTab = currentTab + n;
    if (currentTab >= x.length) {
        document.getElementById("regForm").submit();
        return false;
    }

    showTab(currentTab);
}

function validateForm() {
    var x, y, i, valid = true;
    x = document.getElementsByClassName("tab");
    y = x[currentTab].getElementsByTagName("input");

    for (i = 0; i < y.length; i++) {
        if ($(y[i]).hasClass("not-required")) {
            valid = true;
        }
        else if (y[i].value == "") {
            y[i].className += " invalid";
            valid = false;
        }
    }

    if (valid) {
        document.getElementsByClassName("step")[currentTab].className += " finish";
    }
    return valid;
}

function fixStepIndicator(n) {
    document.getElementById("progress-question-number").innerHTML = `Question ${n + 1} of 3`;
    var i, x = document.getElementsByClassName("step");
    for (i = 0; i < x.length; i++) {
        x[i].className = x[i].className.replace(" active", "");
    }
    x[n].className += " active";
}

$("#file-upload").on('change', function () {
    var file = $(this).val();
    if (file != "") {
        var theSplit = file.split('\\');
        var fileName = theSplit[theSplit.length - 1];
        $('#uploaded-file-name').html(fileName.substring(0, 50));
    }
});