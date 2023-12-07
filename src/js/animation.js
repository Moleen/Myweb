document.addEventListener("DOMContentLoaded", function() {
    var scrollElement = document.querySelector(".greet");
    scrollElement.classList.add('show');
    
});

function getScrollPosition() {
    var scrollPosition = window.scrollY || document.documentElement.scrollTop;
    console.log("Scroll Position:", scrollPosition);

    var greetElement = document.querySelector(".greet");
    var aboutElement = document.querySelector(".aboutme");
    var techElement = document.querySelector(".content");

    if (scrollPosition >= 0 && scrollPosition <= 550) {
        greetElement.classList.add('show');
    } else {
        greetElement.classList.remove('show');
    }

    if (scrollPosition >= 110 && scrollPosition <= 1250) {
        aboutElement.classList.add('show');
    } else {
        aboutElement.classList.remove('show');
    }

    if (scrollPosition >= 1010 && scrollPosition <= 1420) {
        techElement.classList.add('active');
    } else {
        techElement.classList.remove('active');
    }
}

document.addEventListener("DOMContentLoaded", function () {
    window.addEventListener('scroll', getScrollPosition);
});

function showContent(contentId) {
    var selectedContent = document.getElementById(contentId);
    if (!selectedContent.classList.contains('active')){
        var contentDivs = document.querySelectorAll('.content');
        contentDivs.forEach(function(div) {
            div.classList.remove('active');
        });
        setTimeout(function() {
            selectedContent.classList.add('active');
        }, 300);
    }

}

// document.addEventListener("DOMContentLoaded", function() {
    //     var scrollElement = document.querySelector(".aboutme");
    //     var lastScrollPosition = 0;
//     window.addEventListener("scroll", function() {
//         var scrollPosition = window.scrollY + window.innerHeight;

//         // Sesuaikan nilai 0.8 sesuai dengan kebutuhan Anda
//         if (scrollPosition > scrollElement.offsetTop + scrollElement.offsetHeight * 2) {
//             scrollElement.classList.add("show");
//         }

//         if (window.scrollY < lastScrollPosition) {
//             scrollElement.classList.remove("show");
//         }
//         lastScrollPosition = window.scrollY;
//     });
// });
// document.addEventListener("DOMContentLoaded", function() {
//     var scrollElement = document.querySelector(".greet");
//     window.addEventListener("scroll", function() {
//         var scrollPosition = window.scrollY;

//         // Sesuaikan nilai 0.8 sesuai dengan kebutuhan Anda
//         if (scrollPosition > 100 ) {
//             scrollElement.classList.remove("show");
//         }

//         if (window.scrollY < 0) {
//             scrollElement.classList.add("show");
//         }
//     });
// });


// document.querySelectorAll('a[href^="#"]').forEach(anchor => {
//     anchor.addEventListener('click', function (e) {
//         e.preventDefault();

//         document.querySelector(this.getAttribute('href')).scrollIntoView({
//             behavior: 'smooth'
//         });
//     });
// });


  // Menambahkan event listener untuk memanggil fungsi saat scrolling
