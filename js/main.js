
    // Team carousel
    $(".team-carousel").owlCarousel({
        // autoplay: true,
        smartSpeed: 1000,
        margin: 45,
        dots: false,
        loop: true,
        nav : true,
        navText : [
            '<i class="bi bi-arrow-left"></i>',
            '<i class="bi bi-arrow-right"></i>'
        ],
        responsive: {
            0:{
                items:1
            },
            992:{
                items:2
            }
        }
    });
// window.$crisp=[];
// window.CRISP_WEBSITE_ID="42a45020-d5a2-46ff-99c8-e292ad6e6a25";
// (function(){d=document;
// s=d.createElement("script");
// s.src="https://client.crisp.chat/l.js";
// s.async=1;
// d.getElementsByTagName("head")[0].appendChild(s);})();