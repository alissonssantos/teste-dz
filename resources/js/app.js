requirejs.config({
    baseUrl: window.PATH + '/resources/js',
    paths: {
        'async': 'min/async',
        'jquery': 'min/jquery',
        'jqueryUI': 'min/jqueryUI',
        'jqueryValidate': 'min/jqueryValidate',
        'modernizr': 'min/modernizr',
        'owlCarousel': 'min/owlCarousel',
        'scrollMagic': 'min/scrollMagic',
        'select2': 'min/select2',
        'smoothScroll': 'min/smoothScroll',
        'timelineLite': 'min/timelineLite',
        'timelineMax': 'min/timelineMax',
        'tweenLite': 'min/tweenLite',
        'tweenMax': 'min/tweenMax',
    },
    shim: {
        'scrollMagic': {
            'deps': ['timelineMax', 'tweenMax']
        },
        'jqueryUI': {
            'deps': ['jquery']
        }
    },
    'waitSeconds': 30
});

var SCOPO = {};
SCOPO.modules = {};

define(['jquery', 'jqueryValidate', 'jqueryUI', 'modernizr', 'smoothScroll'], function () {
    SCOPO.global = {
        init: function () {
            _MAIN = this;

            _MAIN.baseDelay = 3000;
            _MAIN.baseDuration = 300;

            _MAIN.triggers();
            _MAIN.main();
        },
        
        main: function () {

             // OWL CAROUSEL
            if ($('.slider').length) {
                _MAIN.owlcarousel();
            }

            // VALIDATOR
            _MAIN.validate();
        },

        triggers: function () {
        },

        owlcarousel: function () {
            require(['owlCarousel'], function () {
                $('.slider').owlCarousel({
                    items: 1,
                    loop: true,
                    autoplay: true,
                    fx: "fade",
                    responsiveClas: true,
                    autoplaySpeed: 1000,
                    addClassActive: true,
                    nav: true,
                    dots: true,
                    navText: ["<div class='carousel-nav carousel-prev'></div>","<div class='carousel-nav carousel-next'></div>"],
                });
            });
        },

        validate: function () {
            require(['jqueryValidate'], function () {
                $.validator.setDefaults({
                    submitHandler: function() { alert("submitted!"); }
                });

                // validate the comment form when it is submitted
                $("#commentForm").validate();

                $("#signupForm").validate({
                    rules: {
                        nome: {
                            required: true,
                            minlength: 2
                        },
                        email: {
                            required: true,
                            email: true
                        },
                        telefone: {
                            required: true,
                            telefone: true
                        },
                        area: {
                            required: true,
                            minlength: 2
                        },
                        agree: "required"
                    },
                    messages: {
                        nome: "Por Favor Escreva seu Nome",
                        email: "Por Favor Escreva um E-mail Válido",
                        telefone: "Por Favor Insira seu Telefone",
                        area: "Por Favor Escreva alguma coisa"
                    }
                });

            });
        },
    };

    SCOPO.global.init();
    
});