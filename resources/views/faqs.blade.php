@extends('layouts.app')

@section('content')
    <div class="container pb-4">
        <div class="row min-vh-100 w-100 mx-0" id="app_layout">
            <div class="col-12 col-md-7 px-0">
                <p class="fw-bold text-primary fs-4">FAQs</p>
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                How do I access the library website?
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="mb-0 text-dark">
                                    Simply visit librarywebsite.com from any internet-enabled device, and you'll have
                                    instant access to our vast collection of resources, services, and features.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                                What can I do on the library website?
                            </button>
                        </h2>
                        <div id="collapse2" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="mb-0 text-dark">
                                    Our website is your gateway to a treasure trove of books, articles, audiobooks, e-books,
                                    databases, and more! You can search for specific titles or topics, browse curated
                                    collections, renew borrowed items, reserve meeting rooms, and even access virtual events
                                    and workshops.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapse8" aria-expanded="false" aria-controls="collapse8">
                                How do I get a library card?
                            </button>
                        </h2>
                        <div id="collapse8" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="mb-0 text-dark">
                                    Obtaining a library card is easy! Simply fill out our online registration form on the
                                    website, or visit your nearest library branch with a valid ID and proof of address. Once
                                    registered, you'll have access to all the resources and services the library has to
                                    offer.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
                                I forgot my library card PIN/password. What should I do?
                            </button>
                        </h2>
                        <div id="collapse3" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="mb-0 text-dark">
                                    Not to worry! You can easily reset your PIN/password by clicking on the "Forgot
                                    PIN/Password" link on the login page. Follow the prompts to verify your account
                                    information and set a new PIN/password of your choice.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
                                How do I request books or materials from the library?
                            </button>
                        </h2>
                        <div id="collapse4" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="mb-0 text-dark">
                                    You can request books, DVDs, audiobooks, and other materials directly from our website.
                                    Simply search for the item you want, and if it's not available at your branch, you can
                                    place a hold and have it delivered to your preferred location for pick-up.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapse5" aria-expanded="false" aria-controls="collapse5">
                                Can I access e-books and audiobooks online?
                            </button>
                        </h2>
                        <div id="collapse5" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="mb-0 text-dark">
                                    Absolutely! Our digital library offers a vast selection of e-books and audiobooks that
                                    you can borrow and enjoy on your e-reader, tablet, or smartphone. Simply log in to your
                                    account, browse the digital collection, and borrow your chosen titles with just a few
                                    clicks.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapse6" aria-expanded="false" aria-controls="collapse6">
                                How do I get help with research or finding information?
                            </button>
                        </h2>
                        <div id="collapse6" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="mb-0 text-dark">
                                    Our friendly and knowledgeable librarians are here to help! You can reach out to us via
                                    email, phone, or live chat for assistance with research, reference questions, or
                                    navigating the library's resources. Additionally, you can schedule a one-on-one research
                                    consultation for personalized support.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapse7" aria-expanded="false" aria-controls="collapse7">
                                Is there a mobile app for the library?
                            </button>
                        </h2>
                        <div id="collapse7" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="mb-0 text-dark">
                                    Yes, we have a mobile app available for download on iOS and Android devices! With the
                                    app, you can conveniently search the catalog, manage your account, renew items, place
                                    holds, and access digital resources on the go.
                                </p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-12 col-md-5 px-0 ps-md-4">
                <div class="d-flex align-items-center justify-content-center m-3">
                    <svg class="animated w-100" id="freepik_stories-faq" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 750 500" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink"
                        xmlns:svgjs="http://svgjs.com/svgjs">
                        <style>
                            svg#freepik_stories-faq:not(.animated) .animable {
                                opacity: 0;
                            }

                            svg#freepik_stories-faq.animated #freepik--background-complete--inject-16 {
                                animation: 1s 1 forwards cubic-bezier(.36, -0.01, .5, 1.38) slideDown;
                                animation-delay: 0s;
                            }

                            svg#freepik_stories-faq.animated #freepik--Shadow--inject-16 {
                                animation: 1s 1 forwards cubic-bezier(.36, -0.01, .5, 1.38) zoomIn;
                                animation-delay: 0s;
                            }

                            svg#freepik_stories-faq.animated #freepik--Floor--inject-16 {
                                animation: 1s 1 forwards cubic-bezier(.36, -0.01, .5, 1.38) fadeIn;
                                animation-delay: 0s;
                            }

                            svg#freepik_stories-faq.animated #freepik--FAQs--inject-16 {
                                animation: 1s 1 forwards cubic-bezier(.36, -0.01, .5, 1.38) fadeIn;
                                animation-delay: 0s;
                            }

                            svg#freepik_stories-faq.animated #freepik--Plant--inject-16 {
                                animation: 1s 1 forwards cubic-bezier(.36, -0.01, .5, 1.38) zoomIn;
                                animation-delay: 0s;
                            }

                            svg#freepik_stories-faq.animated #freepik--character-3--inject-16 {
                                animation: 1s 1 forwards cubic-bezier(.36, -0.01, .5, 1.38) lightSpeedRight;
                                animation-delay: 0s;
                            }

                            svg#freepik_stories-faq.animated #freepik--character-2--inject-16 {
                                animation: 1s 1 forwards cubic-bezier(.36, -0.01, .5, 1.38) lightSpeedRight;
                                animation-delay: 0s;
                            }

                            svg#freepik_stories-faq.animated #freepik--character-1--inject-16 {
                                animation: 1s 1 forwards cubic-bezier(.36, -0.01, .5, 1.38) lightSpeedLeft;
                                animation-delay: 0s;
                            }

                            svg#freepik_stories-faq.animated #freepik--speech-bubble--inject-16 {
                                animation: 1s 1 forwards cubic-bezier(.36, -0.01, .5, 1.38) lightSpeedLeft, 1.5s Infinite linear floating;
                                animation-delay: 0s, 1s;
                            }

                            @keyframes slideDown {
                                0% {
                                    opacity: 0;
                                    transform: translateY(-30px);
                                }

                                100% {
                                    opacity: 1;
                                    transform: translateY(0);
                                }
                            }

                            @keyframes zoomIn {
                                0% {
                                    opacity: 0;
                                    transform: scale(0.5);
                                }

                                100% {
                                    opacity: 1;
                                    transform: scale(1);
                                }
                            }

                            @keyframes fadeIn {
                                0% {
                                    opacity: 0;
                                }

                                100% {
                                    opacity: 1;
                                }
                            }

                            @keyframes lightSpeedRight {
                                from {
                                    transform: translate3d(50%, 0, 0) skewX(-20deg);
                                    opacity: 0;
                                }

                                60% {
                                    transform: skewX(10deg);
                                    opacity: 1;
                                }

                                80% {
                                    transform: skewX(-2deg);
                                }

                                to {
                                    opacity: 1;
                                    transform: translate3d(0, 0, 0);
                                }
                            }

                            @keyframes lightSpeedLeft {
                                from {
                                    transform: translate3d(-50%, 0, 0) skewX(20deg);
                                    opacity: 0;
                                }

                                60% {
                                    transform: skewX(-10deg);
                                    opacity: 1;
                                }

                                80% {
                                    transform: skewX(2deg);
                                }

                                to {
                                    opacity: 1;
                                    transform: translate3d(0, 0, 0);
                                }
                            }

                            @keyframes floating {
                                0% {
                                    opacity: 1;
                                    transform: translateY(0px);
                                }

                                50% {
                                    transform: translateY(-10px);
                                }

                                100% {
                                    opacity: 1;
                                    transform: translateY(0px);
                                }
                            }
                        </style>
                        <g id="freepik--background-complete--inject-16" style="transform-origin: 369.605px 221.155px 0px;"
                            class="animable">
                            <polygon points="57.52 371.45 244.22 371.45 248.1 294.84 53.64 294.84 57.52 371.45"
                                style="fill: rgb(235, 235, 235); transform-origin: 150.87px 333.145px 0px;"
                                id="el3ynw6hmaqy4" class="animable"></polygon>
                            <path d="M235.37,329.91H157.32l-1.47-26.6h81.23ZM158.21,329h76.28l1.58-24.71H156.85Z"
                                style="fill: rgb(219, 219, 219); transform-origin: 196.465px 316.61px 0px;"
                                id="el3gsauy650f3" class="animable"></path>
                            <path d="M233.93,360.5H160.37l-1.19-24h76.25Zm-72.66-.94H233l1.39-22.12H160.17Z"
                                style="fill: rgb(219, 219, 219); transform-origin: 197.305px 348.5px 0px;"
                                id="el7sydh9ykuje" class="animable"></path>
                            <path d="M203.86,319.49H190.74l-.82-6.41h14.77Zm-12.29-.94H203l.58-4.53H191Z"
                                style="fill: rgb(219, 219, 219); transform-origin: 197.305px 316.285px 0px;"
                                id="el7dw7069wdua" class="animable"></path>
                            <path d="M203.86,351.71H190.74l-.82-6.42h14.77Zm-12.29-.94H203l.58-4.53H191Z"
                                style="fill: rgb(219, 219, 219); transform-origin: 197.305px 348.5px 0px;"
                                id="elzrq60k0rku" class="animable"></path>
                            <path d="M143.56,329.91h-78L64,303.31h81.23ZM66.4,329h76.28l1.58-24.71H65Z"
                                style="fill: rgb(219, 219, 219); transform-origin: 104.615px 316.61px 0px;"
                                id="el3r9kh7t4xuf" class="animable"></path>
                            <path d="M142.12,360.5H68.56l-1.19-24h76.25Zm-72.66-.94h71.77l1.39-22.12H68.36Z"
                                style="fill: rgb(219, 219, 219); transform-origin: 105.495px 348.5px 0px;"
                                id="elkemxnkaf35" class="animable"></path>
                            <path d="M112.05,319.49H98.93l-.82-6.41h14.77Zm-12.29-.94h11.46l.58-4.53H99.18Z"
                                style="fill: rgb(219, 219, 219); transform-origin: 105.495px 316.285px 0px;"
                                id="elqh14plpj1o" class="animable"></path>
                            <path d="M112.05,351.71H98.93l-.82-6.42h14.77Zm-12.29-.94h11.46l.58-4.53H99.18Z"
                                style="fill: rgb(219, 219, 219); transform-origin: 105.495px 348.5px 0px;"
                                id="el2zcosp37le" class="animable"></path>
                            <polygon points="74.26 371.45 73.09 379.79 70.73 396.56 66.12 396.56 66.12 371.45 74.26 371.45"
                                style="fill: rgb(235, 235, 235); transform-origin: 70.19px 384.005px 0px;"
                                id="eleduhf3lj0jq" class="animable"></polygon>
                            <polygon points="74.26 371.45 73.09 379.79 66.12 379.79 66.12 371.45 74.26 371.45"
                                style="fill: rgb(219, 219, 219); transform-origin: 70.19px 375.62px 0px;"
                                id="elxtgc61s8ptj" class="animable"></polygon>
                            <polygon
                                points="227.48 371.45 228.65 379.79 231.01 396.56 235.62 396.56 235.62 371.45 227.48 371.45"
                                style="fill: rgb(235, 235, 235); transform-origin: 231.55px 384.005px 0px;"
                                id="el32rectid6b7" class="animable"></polygon>
                            <polygon points="227.48 371.45 228.65 379.79 235.62 379.79 235.62 371.45 227.48 371.45"
                                style="fill: rgb(219, 219, 219); transform-origin: 231.55px 375.62px 0px;"
                                id="el1mavzf2179j" class="animable"></polygon>
                            <path
                                d="M643.81,326.52l13.36-.28,6.58-.11c2.19,0,4.36,0,6.55-.05l-.45.44-.05-11.19.5.5-13.25-.06c-4.41,0-8.82-.11-13.24-.16l.28-.28c0,1.84-.09,3.68-.13,5.54Zm0,0-.14-5.53c0-1.87-.11-3.76-.13-5.66v-.27h.27c4.42-.05,8.83-.16,13.24-.16l13.25-.07h.5v.5l0,11.19V327h-.44c-2.24,0-4.47,0-6.7-.06l-6.66-.11Z"
                                style="fill: rgb(235, 235, 235); transform-origin: 657.17px 320.915px 0px;"
                                id="elbbd5ixx9cm" class="animable"></path>
                            <path
                                d="M658.59,340.63l13.35-.28,6.58-.11c2.19,0,4.36,0,6.55-.05l-.45.44,0-11.19.5.5-13.24-.06c-4.42,0-8.83-.11-13.24-.16l.27-.28c0,1.83-.09,3.68-.13,5.54Zm0,0-.15-5.53c0-1.87-.11-3.76-.13-5.66v-.27h.28c4.41-.05,8.82-.16,13.24-.16l13.24-.07h.5v.5l-.06,11.19v.45h-.44c-2.24,0-4.47,0-6.7-.06l-6.66-.11Z"
                                style="fill: rgb(235, 235, 235); transform-origin: 671.94px 335.01px 0px;"
                                id="el3b04y9rvw0w" class="animable"></path>
                            <path
                                d="M629,340.63l13.36-.28,6.58-.11c2.19,0,4.36,0,6.54-.05l-.44.44L655,329.44l.5.5-13.24-.06c-4.41,0-8.82-.11-13.24-.16l.28-.28c0,1.83-.09,3.68-.14,5.54Zm0,0-.14-5.53c0-1.87-.11-3.76-.13-5.66v-.27H629c4.42-.05,8.83-.16,13.24-.16l13.24-.07H656v.5l0,11.19v.45h-.45c-2.23,0-4.47,0-6.69-.06l-6.66-.11Z"
                                style="fill: rgb(235, 235, 235); transform-origin: 642.365px 335.01px 0px;"
                                id="el23lp3tm33x2" class="animable"></path>
                            <path
                                d="M74.59,340.63l13.35-.28,6.58-.11c2.19,0,4.36,0,6.55-.05l-.45.44-.05-11.19.5.5-13.24-.06c-4.42,0-8.83-.11-13.24-.16l.27-.28c0,1.83-.09,3.68-.13,5.54Zm0,0-.15-5.53c0-1.87-.11-3.76-.13-5.66v-.27h.28c4.41-.05,8.82-.16,13.24-.16l13.24-.07h.5v.5l0,11.19v.45h-.44c-2.24,0-4.47,0-6.7-.06l-6.66-.11Z"
                                style="fill: rgb(235, 235, 235); transform-origin: 87.94px 335.01px 0px;"
                                id="elyrpdonpy68" class="animable"></path>
                            <path
                                d="M502.76,116.63l13.35-.28,6.58-.11c2.19,0,4.37,0,6.55-.06l-.45.45,0-11.19.5.5L516,105.87c-4.42,0-8.83-.11-13.24-.16l.27-.27c0,1.83-.09,3.67-.13,5.53Zm0,0-.15-5.54c0-1.87-.11-3.75-.13-5.65v-.27h.28c4.41,0,8.82-.16,13.24-.16l13.24-.06h.5v.51l-.06,11.19v.45h-.44c-2.23,0-4.47,0-6.7,0l-6.66-.12Z"
                                style="fill: rgb(235, 235, 235); transform-origin: 516.11px 111.025px 0px;"
                                id="elvzy4hgl70r" class="animable"></path>
                            <path
                                d="M74.59,64.77l13.35-.28,6.58-.12c2.19,0,4.36,0,6.55-.05l-.45.45-.05-11.19.5.49L87.83,54c-4.42,0-8.83-.11-13.24-.16l.27-.27c0,1.83-.09,3.67-.13,5.53Zm0,0-.15-5.54c0-1.87-.11-3.76-.13-5.65v-.27h.28c4.41,0,8.82-.16,13.24-.16l13.24-.06h.5v.51l0,11.19v.44h-.44c-2.24,0-4.47,0-6.7,0L87.71,65Z"
                                style="fill: rgb(235, 235, 235); transform-origin: 87.94px 59.16px 0px;"
                                id="el38iwbz5xgdq" class="animable"></path>
                            <path
                                d="M59.81,78.88l13.36-.28,6.58-.12c2.19,0,4.36,0,6.54,0l-.44.45-.06-11.19.5.49-13.24-.06c-4.41,0-8.82-.11-13.24-.16l.28-.27c0,1.83-.09,3.67-.13,5.53Zm0,0-.14-5.54c0-1.87-.11-3.76-.13-5.65v-.27h.27c4.42,0,8.83-.16,13.24-.16l13.24-.06h.51v.51l-.05,11.19v.44h-.45c-2.23,0-4.47,0-6.69,0l-6.66-.12Z"
                                style="fill: rgb(235, 235, 235); transform-origin: 73.17px 73.27px 0px;"
                                id="elxuremp3u13m" class="animable"></path>
                            <path
                                d="M658.59,64.78l13.35-.28,6.58-.11c2.19,0,4.36,0,6.55-.06l-.45.45,0-11.19.5.5L671.83,54c-4.42,0-8.83-.11-13.24-.16l.27-.27c0,1.83-.09,3.67-.13,5.53Zm0,0-.15-5.54c0-1.87-.11-3.75-.13-5.65v-.27h.28c4.41-.05,8.82-.15,13.24-.16l13.24-.06h.5v.5l-.06,11.19v.45h-.44c-2.24,0-4.47,0-6.7,0l-6.66-.11Z"
                                style="fill: rgb(235, 235, 235); transform-origin: 671.94px 59.17px 0px;"
                                id="eltkkppoeto3" class="animable"></path>
                            <path
                                d="M412.72,170.32l-13.35.28-6.58.11c-2.19,0-4.37,0-6.55.06l.45-.45.05,11.19-.5-.5,13.24.06c4.42,0,8.83.12,13.24.17l-.27.27c0-1.83.08-3.67.13-5.54Zm0,0,.14,5.54c.05,1.86.12,3.75.13,5.65v.27h-.28c-4.41.05-8.82.16-13.24.17l-13.24.06h-.5v-.5l.06-11.19v-.45h.44c2.23,0,4.47,0,6.7.05l6.66.11Z"
                                style="fill: rgb(235, 235, 235); transform-origin: 399.36px 175.94px 0px;"
                                id="el1zufpd0slyrj" class="animable"></path>
                            <path
                                d="M398,156.21l-13.36.28-6.57.11c-2.19.05-4.37,0-6.55.06l.45-.45L372,167.4l-.5-.5,13.24.06c4.41,0,8.83.12,13.24.17l-.27.27c0-1.83.08-3.67.13-5.54Zm0,0,.14,5.54c.05,1.86.11,3.75.13,5.65v.27H398c-4.41.06-8.83.16-13.24.17l-13.24.06H371v-.5l0-11.19v-.45h.44c2.23,0,4.47,0,6.69,0l6.67.11Z"
                                style="fill: rgb(235, 235, 235); transform-origin: 384.635px 161.83px 0px;"
                                id="el9b22x7mmlre" class="animable"></path>
                            <path
                                d="M627.87,91.9a15.09,15.09,0,0,1,2.55,5.19,9.45,9.45,0,0,1-.83,6.06c-.29.7-.67,1.53-1.13,2.49a18.54,18.54,0,0,0-1.18,3.08,10.07,10.07,0,0,0-.41,3.31,5.63,5.63,0,0,0,1.14,3.13,5.28,5.28,0,0,0,1.84,1.62,5.49,5.49,0,0,0,2.13.59,5.56,5.56,0,0,0,2.22-.31,7.7,7.7,0,0,0,2-1.07,6.63,6.63,0,0,0,1.79-1.93,8.22,8.22,0,0,0,1-2.23,10.45,10.45,0,0,0,.36-2.35,19.12,19.12,0,0,0,0-2.18l6.82-.22a12.65,12.65,0,0,1,.32,4.18,13.66,13.66,0,0,1-1,4,15.23,15.23,0,0,1-2.14,3.58,16.55,16.55,0,0,1-3.1,3,16.91,16.91,0,0,1-4.32,2.3,12.18,12.18,0,0,1-4.8.73,11.7,11.7,0,0,1-4.86-1.35,12.89,12.89,0,0,1-4.39-3.94,12.31,12.31,0,0,1-1.78-3.23,9.9,9.9,0,0,1-.59-3.14,11.94,11.94,0,0,1,.33-3.14,24.48,24.48,0,0,1,1-3.26c.38-.92.78-1.84,1.2-2.73a15,15,0,0,0,.95-2.67,7.71,7.71,0,0,0,.22-2.65,5.3,5.3,0,0,0-1.09-2.61Zm-9-12L624.12,87l-5.77,4.26-5.29-7.18Z"
                                style="fill: rgb(235, 235, 235); transform-origin: 629.801px 102.393px 0px;"
                                id="el92qpgv6xrs" class="animable"></path>
                            <path
                                d="M652.76,80.28A16.25,16.25,0,0,1,653.89,74a10.35,10.35,0,0,1,4.69-4.83c.71-.43,1.58-.91,2.62-1.46a21.23,21.23,0,0,0,3.06-2,11.36,11.36,0,0,0,2.52-2.66,6.2,6.2,0,0,0,1-3.52,5.74,5.74,0,0,0-.57-2.62,6,6,0,0,0-1.49-1.92,6.23,6.23,0,0,0-2.17-1.17,8.39,8.39,0,0,0-2.52-.39,7.22,7.22,0,0,0-2.84.53,9.46,9.46,0,0,0-2.31,1.35,11.44,11.44,0,0,0-1.84,1.84,19.58,19.58,0,0,0-1.39,2l-6.17-4.26A13.68,13.68,0,0,1,649,51a14.8,14.8,0,0,1,3.48-2.87,16.13,16.13,0,0,1,4.22-1.78,18.28,18.28,0,0,1,4.69-.6,18.62,18.62,0,0,1,5.32.78A13.53,13.53,0,0,1,671.39,49a13,13,0,0,1,3.41,4.37,14.18,14.18,0,0,1,1.31,6.36,13.57,13.57,0,0,1-.53,4,11.13,11.13,0,0,1-1.52,3.16,13.51,13.51,0,0,1-2.35,2.55,26.06,26.06,0,0,1-3.05,2.2c-.95.57-1.89,1.12-2.84,1.64a16.72,16.72,0,0,0-2.59,1.74,8.36,8.36,0,0,0-1.92,2.2,5.72,5.72,0,0,0-.74,3Zm.14,16.55V87h7.88v9.8Z"
                                style="fill: rgb(235, 235, 235); transform-origin: 661.298px 71.29px 0px;"
                                id="elpd73edc0vxa" class="animable"></path>
                            <path
                                d="M85.25,123.51a16.32,16.32,0,0,1-.18-6.35,10.37,10.37,0,0,1,3.58-5.69c.61-.57,1.37-1.22,2.27-2A21.29,21.29,0,0,0,93.5,107a11.14,11.14,0,0,0,1.92-3.13,6.1,6.1,0,0,0,.27-3.65,5.73,5.73,0,0,0-1.1-2.46,5.86,5.86,0,0,0-1.85-1.56,6.18,6.18,0,0,0-2.36-.7,8.68,8.68,0,0,0-2.55.14,7.46,7.46,0,0,0-2.67,1.11,10.07,10.07,0,0,0-2,1.8,12.07,12.07,0,0,0-1.42,2.19,19.49,19.49,0,0,0-1,2.2L73.89,100a13.62,13.62,0,0,1,1.58-4.33,15,15,0,0,1,2.81-3.53A16.12,16.12,0,0,1,82,89.53a18.55,18.55,0,0,1,9.83-1.9A13.63,13.63,0,0,1,97,89.08a13,13,0,0,1,4.24,3.57,14.28,14.28,0,0,1,2.6,5.94,13.78,13.78,0,0,1,.31,4,11.24,11.24,0,0,1-.84,3.4,13.27,13.27,0,0,1-1.76,3A25.54,25.54,0,0,1,99,111.81c-.81.75-1.62,1.48-2.44,2.18a17.54,17.54,0,0,0-2.17,2.24A8.46,8.46,0,0,0,93,118.78a5.77,5.77,0,0,0-.11,3.11Zm3.57,16.15-2-9.58,7.71-1.64,2,9.59Z"
                                style="fill: rgb(235, 235, 235); transform-origin: 89.0363px 113.614px 0px;"
                                id="elqnllbxkvkm" class="animable"></path>
                            <polygon
                                points="459.45 98.85 554.45 98.85 554.45 48.99 459.45 48.99 459.45 48.99 459.45 98.85 459.45 98.85"
                                style="fill: rgb(235, 235, 235); transform-origin: 506.95px 73.92px 0px;"
                                id="elrnlsarr9si" class="animable"></polygon>
                            <polygon points="569.15 98.85 554.45 98.85 554.45 83.54 569.15 98.85"
                                style="fill: rgb(235, 235, 235); transform-origin: 561.8px 91.195px 0px;"
                                id="elaslp7g2h8qb" class="animable"></polygon>
                            <rect x="468.55" y="57.62" width="76.81" height="0.95"
                                style="fill: rgb(255, 255, 255); transform-origin: 506.955px 58.095px 0px;"
                                id="el6myt32n39uk" class="animable"></rect>
                            <rect x="468.55" y="62.73" width="47.63" height="0.95"
                                style="fill: rgb(255, 255, 255); transform-origin: 492.365px 63.205px 0px;"
                                id="elraiywr5q94" class="animable"></rect>
                            <rect x="468.55" y="72.96" width="65.25" height="0.95"
                                style="fill: rgb(255, 255, 255); transform-origin: 501.175px 73.435px 0px;"
                                id="elnuh0pys72do" class="animable"></rect>
                            <rect x="468.55" y="78.08" width="76.81" height="0.95"
                                style="fill: rgb(255, 255, 255); transform-origin: 506.955px 78.555px 0px;"
                                id="el1ylbs1tfen7" class="animable"></rect>
                            <rect x="468.55" y="83.19" width="76.81" height="0.95"
                                style="fill: rgb(255, 255, 255); transform-origin: 506.955px 83.665px 0px;"
                                id="el3o7yijzg1p9" class="animable"></rect>
                            <rect x="468.55" y="88.31" width="37.87" height="0.95"
                                style="fill: rgb(255, 255, 255); transform-origin: 487.485px 88.785px 0px;"
                                id="el104r5kfnwn7" class="animable"></rect>
                            <rect x="171.72" y="211.43" width="95" height="43.97"
                                style="fill: rgb(219, 219, 219); transform-origin: 219.22px 233.415px 0px;"
                                id="els1ahyh67t8q" class="animable"></rect>
                            <polygon points="157.02 255.4 171.72 255.4 171.72 240.09 157.02 255.4"
                                style="fill: rgb(219, 219, 219); transform-origin: 164.37px 247.745px 0px;"
                                id="el1lrs8zg1jlj" class="animable"></polygon>
                            <rect x="181" y="234.39" width="68.99" height="0.95"
                                style="fill: rgb(255, 255, 255); transform-origin: 215.495px 234.865px 0px;"
                                id="elk3c8wzrtl4f" class="animable"></rect>
                            <rect x="181" y="239.5" width="58.18" height="0.95"
                                style="fill: rgb(255, 255, 255); transform-origin: 210.09px 239.975px 0px;"
                                id="elidu5gapocx8" class="animable"></rect>
                            <rect x="181" y="224.16" width="61.33" height="0.95"
                                style="fill: rgb(255, 255, 255); transform-origin: 211.665px 224.635px 0px;"
                                id="el0lq3otops8to" class="animable"></rect>
                            <rect x="181" y="219.04" width="75.06" height="0.95"
                                style="fill: rgb(255, 255, 255); transform-origin: 218.53px 219.515px 0px;"
                                id="eldwytkkwn1s" class="animable"></rect>
                            <rect x="181" y="244.62" width="62.51" height="0.95"
                                style="fill: rgb(255, 255, 255); transform-origin: 212.255px 245.095px 0px;"
                                id="elp11rbmq9khh" class="animable"></rect>
                            <rect x="497.98" y="110.32" width="95" height="28.97"
                                style="fill: rgb(219, 219, 219); transform-origin: 545.48px 124.805px 0px;"
                                id="eluo6vrmatr9" class="animable"></rect>
                            <polygon points="483.28 139.28 497.98 139.28 497.98 123.97 483.28 139.28"
                                style="fill: rgb(219, 219, 219); transform-origin: 490.63px 131.625px 0px;"
                                id="el1o8aco3rfwai" class="animable"></polygon>
                            <rect x="507.26" y="118.27" width="68.99" height="0.95"
                                style="fill: rgb(255, 255, 255); transform-origin: 541.755px 118.745px 0px;"
                                id="elnoasedtjxh" class="animable"></rect>
                            <rect x="507.26" y="123.39" width="58.18" height="0.95"
                                style="fill: rgb(255, 255, 255); transform-origin: 536.35px 123.865px 0px;"
                                id="el6d5s8gb197t" class="animable"></rect>
                            <rect x="507.26" y="128.5" width="62.51" height="0.95"
                                style="fill: rgb(255, 255, 255); transform-origin: 538.515px 128.975px 0px;"
                                id="elcqvlhcbhazf" class="animable"></rect>
                        </g>
                        <g id="freepik--Shadow--inject-16" style="transform-origin: 497.35px 449.49px 0px;"
                            class="animable">
                            <ellipse cx="497.35" cy="449.49" rx="207.34" ry="13.04"
                                style="fill: rgb(235, 235, 235); transform-origin: 497.35px 449.49px 0px;"
                                id="elmf7k5lc3cve" class="animable"></ellipse>
                        </g>
                        <g id="freepik--Floor--inject-16" style="transform-origin: 375px 396.8px 0px;" class="animable">
                            <polygon
                                points="50.72 396.8 131.79 396.55 212.86 396.46 375 396.3 537.14 396.46 618.21 396.55 699.28 396.8 618.21 397.04 537.14 397.13 375 397.3 212.86 397.13 131.79 397.04 50.72 396.8"
                                style="fill: rgb(38, 50, 56); transform-origin: 375px 396.8px 0px;" id="elvfd34bfekps"
                                class="animable"></polygon>
                        </g>
                        <g id="freepik--FAQs--inject-16" style="transform-origin: 375.498px 313.965px 0px;"
                            class="animable">
                            <path
                                d="M118,380V202.18a16.53,16.53,0,0,1,16.57-16.58h98.54a16.73,16.73,0,0,1,0,33.45H151.42V274.2h70.21a16.73,16.73,0,0,1,0,33.45H151.42V380a16.8,16.8,0,0,1-16.88,16.58A16.53,16.53,0,0,1,118,380Z"
                                style="fill: rgb(64, 123, 255); transform-origin: 183.715px 291.09px 0px;"
                                id="eltows77mkeg" class="animable"></path>
                            <g id="elt72i0sbd049">
                                <path
                                    d="M118,380V202.18a16.53,16.53,0,0,1,16.57-16.58h98.54a16.73,16.73,0,0,1,0,33.45H151.42V274.2h70.21a16.73,16.73,0,0,1,0,33.45H151.42V380a16.8,16.8,0,0,1-16.88,16.58A16.53,16.53,0,0,1,118,380Z"
                                    style="opacity: 0.1; transform-origin: 183.715px 291.09px 0px;" class="animable">
                                </path>
                            </g>
                            <path
                                d="M105.38,380V202.18A16.54,16.54,0,0,1,122,185.6H220.5a16.73,16.73,0,0,1,0,33.45H138.83V274.2h70.22a16.73,16.73,0,0,1,0,33.45H138.83V380A16.79,16.79,0,0,1,122,396.55,16.54,16.54,0,0,1,105.38,380Z"
                                style="fill: rgb(64, 123, 255); transform-origin: 171.1px 291.075px 0px;"
                                id="el5s1qakj7p55" class="animable"></path>
                            <path
                                d="M358.59,346.82H285.37L270.6,386a16.91,16.91,0,0,1-15.67,10.55,17.65,17.65,0,0,1-5.73-.91,17.11,17.11,0,0,1-9.94-21.7l66.6-177.49a16.86,16.86,0,0,1,16-10.55,16.58,16.58,0,0,1,16,10.55l66.6,177.49a17.1,17.1,0,0,1-9.95,21.7A16.84,16.84,0,0,1,373.36,386Zm-12.35-33.14-24.41-64.8-24.41,64.8Z"
                                style="fill: rgb(64, 123, 255); transform-origin: 321.861px 291.233px 0px;"
                                id="elkmdyoopqed" class="animable"></path>
                            <g id="el8fbe3cy9mfp">
                                <path
                                    d="M358.59,346.82H285.37L270.6,386a16.91,16.91,0,0,1-15.67,10.55,17.65,17.65,0,0,1-5.73-.91,17.11,17.11,0,0,1-9.94-21.7l66.6-177.49a16.86,16.86,0,0,1,16-10.55,16.58,16.58,0,0,1,16,10.55l66.6,177.49a17.1,17.1,0,0,1-9.95,21.7A16.84,16.84,0,0,1,373.36,386Zm-12.35-33.14-24.41-64.8-24.41,64.8Z"
                                    style="opacity: 0.1; transform-origin: 321.861px 291.233px 0px;" class="animable">
                                </path>
                            </g>
                            <path
                                d="M346,346.82H272.78L258,386a16.91,16.91,0,0,1-15.67,10.55,17.65,17.65,0,0,1-5.73-.91,17.09,17.09,0,0,1-9.94-21.7l66.6-177.49a16.86,16.86,0,0,1,16-10.55,16.58,16.58,0,0,1,16,10.55l66.6,177.49a17.1,17.1,0,0,1-9.95,21.7A16.84,16.84,0,0,1,360.78,386Zm-12.35-33.14-24.41-64.8-24.41,64.8Z"
                                style="fill: rgb(64, 123, 255); transform-origin: 309.258px 291.229px 0px;"
                                id="el45ftbb8infa" class="animable"></path>
                            <path
                                d="M638.51,426.38c-16.57,12.66-33.75,19-49.72,19h-.9c-21.1,0-38.88-8.43-55.15-18.08a37.75,37.75,0,0,0-18.38-4.52c-9.95,0-20.19,4.22-21.4,5.13-6,3.31-13,2.71-17.48-.91-.3-.3-.9-.3-1.81-.6-.3-.3-.3-.3-.6-.3-1.51-2.11-3.31-3.92-4.22-6.93-4.52-9-.3-19,8.14-23.21l.9-.6a132,132,0,0,1-33.45-22.9,117.94,117.94,0,0,1-30.13-78.65A115.61,115.61,0,0,1,444.44,216c19.29-20.79,45.81-33.45,75.34-33.45A99.35,99.35,0,0,1,594.51,216a111.9,111.9,0,0,1,30.74,77.75,114.13,114.13,0,0,1-30.74,78.65,116.24,116.24,0,0,1-33.44,23.8L554.13,399c12.66,6.93,24.11,10.84,33.76,10.84,8.73,0,17.17-2.1,29.53-11.45a17.34,17.34,0,0,1,24.41,3C647.85,408.9,646.65,419.75,638.51,426.38ZM470.66,348a65.58,65.58,0,0,0,49.12,21.7c19.29,0,36.46-8.14,49.72-21.7,13-13.86,20.8-32.85,20.8-54.24s-7.84-40.38-20.8-53.64c-13.26-13.87-30.43-22-49.72-22a64.76,64.76,0,0,0-49.12,22c-13,13.26-20.79,32.24-20.79,53.64S457.7,334.17,470.66,348Z"
                                style="fill: rgb(64, 123, 255); transform-origin: 529.963px 313.965px 0px;"
                                id="elhrs7nuyr7i" class="animable"></path>
                            <g id="el06jgmdv7ckjq">
                                <path
                                    d="M638.51,426.38c-16.57,12.66-33.75,19-49.72,19h-.9c-21.1,0-38.88-8.43-55.15-18.08a37.75,37.75,0,0,0-18.38-4.52c-9.95,0-20.19,4.22-21.4,5.13-6,3.31-13,2.71-17.48-.91-.3-.3-.9-.3-1.81-.6-.3-.3-.3-.3-.6-.3-1.51-2.11-3.31-3.92-4.22-6.93-4.52-9-.3-19,8.14-23.21l.9-.6a132,132,0,0,1-33.45-22.9,117.94,117.94,0,0,1-30.13-78.65A115.61,115.61,0,0,1,444.44,216c19.29-20.79,45.81-33.45,75.34-33.45A99.35,99.35,0,0,1,594.51,216a111.9,111.9,0,0,1,30.74,77.75,114.13,114.13,0,0,1-30.74,78.65,116.24,116.24,0,0,1-33.44,23.8L554.13,399c12.66,6.93,24.11,10.84,33.76,10.84,8.73,0,17.17-2.1,29.53-11.45a17.34,17.34,0,0,1,24.41,3C647.85,408.9,646.65,419.75,638.51,426.38ZM470.66,348a65.58,65.58,0,0,0,49.12,21.7c19.29,0,36.46-8.14,49.72-21.7,13-13.86,20.8-32.85,20.8-54.24s-7.84-40.38-20.8-53.64c-13.26-13.87-30.43-22-49.72-22a64.76,64.76,0,0,0-49.12,22c-13,13.26-20.79,32.24-20.79,53.64S457.7,334.17,470.66,348Z"
                                    style="opacity: 0.1; transform-origin: 529.963px 313.965px 0px;" class="animable">
                                </path>
                            </g>
                            <path
                                d="M625.93,426.38c-16.58,12.66-33.75,19-49.72,19h-.91c-21.09,0-38.87-8.43-55.14-18.08a37.76,37.76,0,0,0-18.39-4.52c-9.94,0-20.19,4.22-21.39,5.13-6,3.31-13,2.71-17.48-.91-.3-.3-.9-.3-1.81-.6-.3-.3-.3-.3-.6-.3-1.51-2.11-3.32-3.92-4.22-6.93-4.52-9-.3-19,8.14-23.21l.9-.6a131.86,131.86,0,0,1-33.45-22.9,117.94,117.94,0,0,1-30.13-78.65A115.61,115.61,0,0,1,431.86,216c19.29-20.79,45.8-33.45,75.34-33.45A99.35,99.35,0,0,1,581.93,216a111.9,111.9,0,0,1,30.74,77.75,114.13,114.13,0,0,1-30.74,78.65,116.15,116.15,0,0,1-33.45,23.8L541.55,399c12.66,6.93,24.11,10.84,33.75,10.84,8.74,0,17.18-2.1,29.53-11.45a17.34,17.34,0,0,1,24.41,3C635.27,408.9,634.06,419.75,625.93,426.38ZM458.08,348a65.56,65.56,0,0,0,49.12,21.7c19.28,0,36.46-8.14,49.72-21.7,13-13.86,20.79-32.85,20.79-54.24s-7.83-40.38-20.79-53.64c-13.26-13.87-30.44-22-49.72-22a64.75,64.75,0,0,0-49.12,22c-13,13.26-20.8,32.24-20.8,53.64S445.12,334.17,458.08,348Z"
                                style="fill: rgb(64, 123, 255); transform-origin: 517.38px 313.965px 0px;"
                                id="el5es78u3rvgx" class="animable"></path>
                        </g>
                        <g id="freepik--Plant--inject-16" style="transform-origin: 74.8786px 343.106px 0px;"
                            class="animable">
                            <path
                                d="M101.52,317.73c-10.76,14.57-22,31.47-24.7,49.74a.24.24,0,0,0,.47.09,108.51,108.51,0,0,1,4.76-14.62c7.07-1.95,14-3.55,17.73-10.57,3.78-7.21,3.3-16.62,2.58-24.48C102.31,317.47,101.74,317.45,101.52,317.73Z"
                                style="fill: rgb(64, 123, 255); transform-origin: 89.8378px 342.64px 0px;"
                                id="elkju64yqflhe" class="animable"></path>
                            <path
                                d="M82.16,352.8c4.83-10.84,11-21.73,18.92-30.65,0-.06.13,0,.08.09-5.16,6.35-9.08,13.27-12.91,20.3,3.56-3.61,7.46-6.85,10.84-10.69.06-.07.17,0,.1.11-3.35,4-7,8.39-11.37,11.37-1.17,2.15-2.35,4.32-3.55,6.49.3-.17.6-.31.9-.46,0,0,.1.05,0,.08-.34.17-.67.34-1,.49-.57,1-1.13,2.05-1.71,3.07C82.37,353.23,82.05,353,82.16,352.8Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 91.6544px 337.611px 0px;"
                                id="elsrhn6vpcsid" class="animable"></path>
                            <path
                                d="M85.75,349A64.22,64.22,0,0,0,94,343.5c.07-.05.17.05.1.11a44.37,44.37,0,0,1-8.24,5.61C85.73,349.29,85.62,349.09,85.75,349Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 89.9078px 346.361px 0px;"
                                id="elekethh15r77" class="animable"></path>
                            <path
                                d="M75.57,364.76c0,.22.4.21.4,0,0-6,0-12.06.09-18.11,1.54-3.11,4.85-4.83,7.15-7.32a32.06,32.06,0,0,0,4.29-6,42.81,42.81,0,0,0,5-16.6c.64-6.44-1.81-27.67-4.52-26.93-1.41.38-6,10.9-7.17,14.37a101.63,101.63,0,0,0-4.28,17.63C74.31,336,74.5,350.51,75.57,364.76Z"
                                style="fill: rgb(64, 123, 255); transform-origin: 83.7009px 327.351px 0px;"
                                id="elzzoem2ejf4" class="animable"></path>
                            <path
                                d="M75.53,338.8l0,0c.33-7.61,2-15.3,3.65-22.68,1.73-8,3.75-15.45,7.84-22.54a.12.12,0,0,1,.2.12A84.22,84.22,0,0,0,81,311c.28-.43.61-.84.9-1.24.11-.16.37,0,.26.15a11,11,0,0,1-1.28,1.81l0,0c-1.41,5.69-2.42,11.5-3.29,17.3.07-.07.13-.15.19-.22a.06.06,0,0,1,.09.07c-.1.19-.22.38-.34.57-.44,2.95-.84,5.89-1.25,8.8,5.24-4.48,9.72-9.76,12.25-16.27,0,0,.06,0,0,0C86,328.73,82.1,334.73,76.1,338.83l-.33,2.35c0,.16-.28.12-.28,0,0-.69,0-1.39.06-2.08A.17.17,0,0,1,75.53,338.8Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 82.0029px 317.415px 0px;"
                                id="elwhnpfhu2y5f" class="animable"></path>
                            <path
                                d="M78,327.77a120.8,120.8,0,0,0,10.68-18.39c0-.08.16,0,.13.05a59.73,59.73,0,0,1-10.61,18.5C78.1,328,77.92,327.89,78,327.77Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 83.3969px 318.649px 0px;"
                                id="elhlk1r4kslxh" class="animable"></path>
                            <path
                                d="M83.32,307.9c1.66-2.94,3.41-5.79,5-8.79,0-.08.15,0,.12.07a45.65,45.65,0,0,1-4.84,8.87A.15.15,0,0,1,83.32,307.9Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 85.8726px 303.605px 0px;"
                                id="el42stkcbajj" class="animable"></path>
                            <path d="M82.68,309.18a0,0,0,0,1,0,.05S82.64,309.18,82.68,309.18Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 82.6711px 309.205px 0px;"
                                id="elg9cz7maduhp" class="animable"></path>
                            <path
                                d="M71.5,347.36a61.27,61.27,0,0,1-1.4,11.85l.18,1.3A56.54,56.54,0,0,0,72.4,347.3a.4.4,0,0,0,0-.41v0A87.52,87.52,0,0,0,71.09,329c-1.86-11.05-5.93-21.66-13.64-30a.56.56,0,0,0-.86.17c-3.11,7.92-2,17.36.63,25.25a46.31,46.31,0,0,0,6.11,12C66,340.15,69.35,343.3,71.5,347.36Z"
                                style="fill: rgb(64, 123, 255); transform-origin: 63.5803px 329.688px 0px;"
                                id="eltpgw6pub0ws" class="animable"></path>
                            <path
                                d="M58.36,302.72c7.31,11.86,12.39,25.92,13,39.93,0,.25-.4.32-.44.06-.17-1.25-.36-2.5-.57-3.74,0,0,0,0,0,0-3-2.9-6.12-5.95-8.29-9.57,0-.06,0-.14.1-.08a99.94,99.94,0,0,0,8.06,8.77c-.52-3.1-1.14-6.15-1.88-9.15l-.58-.68c-.12-.15.09-.37.22-.22l.18.2a104.89,104.89,0,0,0-3.83-12.14c-1.86-2.22-3.94-4.13-5.29-6.81,0-.06.05-.11.1,0,1.09,1.53,2.14,3.06,3.38,4.48.49.57,1,1.1,1.54,1.65a93.56,93.56,0,0,0-6-12.47A.16.16,0,0,1,58.36,302.72Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 64.6905px 322.76px 0px;"
                                id="el05csnzii0wxa" class="animable"></path>
                            <path
                                d="M59.84,317.35c2.36,3.18,5,6.21,7.25,9.5.06.09-.08.19-.16.12a48.16,48.16,0,0,1-7.25-9.53C59.61,317.34,59.77,317.26,59.84,317.35Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 63.3836px 322.152px 0px;"
                                id="elm6huxjqjjyp" class="animable"></path>
                            <path d="M67.42,327.59l.1.1c.07.07,0,.17-.11.1l-.1-.1C67.24,327.62,67.35,327.52,67.42,327.59Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 67.4178px 327.69px 0px;" id="elx4lgb3lzmt"
                                class="animable"></path>
                            <path
                                d="M46.91,325.52a36.45,36.45,0,0,0,7.71,18.09,19.16,19.16,0,0,0,6.25,4.88c2.71,1.34,5.55,2.89,8.35,4a55.18,55.18,0,0,1,3,10.49l.27-.93c-1.8-15.44-11.8-28.65-24.59-37.13A.62.62,0,0,0,46.91,325.52Z"
                                style="fill: rgb(64, 123, 255); transform-origin: 59.6951px 343.885px 0px;"
                                id="eljwsuwmgpsx" class="animable"></path>
                            <path
                                d="M51.33,330.09c-.09-.08,0-.25.13-.17A52.36,52.36,0,0,1,67.75,350c.09.21-.2.4-.32.18-.59-1-1.2-2.05-1.81-3.05h0c-2.92-.55-5.68-2.61-7.85-4.56-.06-.05,0-.14.09-.08a17.89,17.89,0,0,0,3.69,2.59c1.19.6,2.47,1,3.71,1.47-1.08-1.72-2.21-3.36-3.39-5a34.11,34.11,0,0,1-8.77-4.93c-.08-.06,0-.2.08-.14a87.52,87.52,0,0,0,8.15,4.35,72.56,72.56,0,0,0-5.75-6.71c-1-.52-2-1.05-3-1.61-.08,0,0-.18.06-.15a10.64,10.64,0,0,1,2.27,1.12C53.79,332.36,52.6,331.21,51.33,330.09Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 59.5304px 340.089px 0px;"
                                id="elh1kl01t0ng7" class="animable"></path>
                            <path
                                d="M51.6,335.42a2.9,2.9,0,0,1,.49.35s0,.1-.06.08a3.2,3.2,0,0,1-.51-.29C51.43,335.5,51.51,335.36,51.6,335.42Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 51.7853px 335.629px 0px;"
                                id="ello8k7jhvil" class="animable"></path>
                            <polygon
                                points="92.4 396.43 57.36 396.43 60.19 364.52 60.81 357.48 88.95 357.48 89.57 364.52 92.4 396.43"
                                style="fill: rgb(69, 90, 100); transform-origin: 74.88px 376.955px 0px;"
                                id="elicovk53q5gq" class="animable"></polygon>
                            <polygon points="89.57 364.52 60.19 364.52 60.81 357.48 88.95 357.48 89.57 364.52"
                                style="fill: rgb(38, 50, 56); transform-origin: 74.88px 361px 0px;" id="elcjdh204flli"
                                class="animable"></polygon>
                            <rect x="59.14" y="352.56" width="31.49" height="6.96"
                                style="fill: rgb(69, 90, 100); transform-origin: 74.885px 356.04px 0px;"
                                id="el1jve1aqrzkk" class="animable"></rect>
                        </g>
                        <g id="freepik--character-3--inject-16" style="transform-origin: 627.621px 274.615px 0px;"
                            class="animable">
                            <path
                                d="M695.57,446.14c-2.13.67-62.85-.34-65.15-1.84-.87-.57-1.24-9.42-1.38-20.13,0-2.31,0-4.7,0-7.12,0-15.75.14-30.24.14-30.24l40.63,1.06-1.27,29.72-.3,7.12s23.08,10.79,25.41,12.7S697.7,445.46,695.57,446.14Z"
                                style="fill: rgb(247, 169, 160); transform-origin: 662.789px 416.581px 0px;"
                                id="ela3f4eyda4ro" class="animable"></path>
                            <path
                                d="M695.57,446.14c-2.13.67-62.85-.34-65.15-1.84-1.06-.69-1.38-13.62-1.43-27.25l39.5.54-.3,7.12s23.08,10.79,25.41,12.7S697.7,445.46,695.57,446.14Z"
                                style="fill: rgb(255, 255, 255); transform-origin: 662.758px 431.701px 0px;"
                                id="el1g428g9j2opj" class="animable"></path>
                            <path
                                d="M695.57,446.14c-2.13.67-62.85-.34-65.15-1.84-.87-.57-1.24-9.42-1.38-20.13l39.15.54s23.08,10.79,25.41,12.7S697.7,445.46,695.57,446.14Z"
                                style="fill: rgb(166, 166, 166); transform-origin: 662.783px 435.261px 0px;"
                                id="elwxzuc38iwg" class="animable"></path>
                            <g id="elnxsu80ja4x">
                                <path
                                    d="M660.24,446c-14.75-.37-28.74-1-29.82-1.67-.87-.57-1.24-9.42-1.38-20.13l8,.11C643.22,430.1,654.36,440.49,660.24,446Z"
                                    style="opacity: 0.1; transform-origin: 644.64px 435.1px 0px;" class="animable"></path>
                            </g>
                            <path
                                d="M694.74,443.69c-10.18-.42-51.25-1.15-61.34-.79-.08,0-.08.06,0,.07,10.07.63,51.15,1,61.34.89C695,443.86,695,443.7,694.74,443.69Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 664.137px 443.341px 0px;"
                                id="elgwi2hv1b2a7" class="animable"></path>
                            <path
                                d="M689.73,435.16a8.16,8.16,0,0,0-6.13,2.39,7.88,7.88,0,0,0-2.36,5.39c0,.06.11.07.12,0a9.45,9.45,0,0,1,8.37-7.66A.07.07,0,0,0,689.73,435.16Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 685.502px 439.071px 0px;"
                                id="elabb3ms722wh" class="animable"></path>
                            <path
                                d="M672.12,425.79c-4.07-.13-8.82,1.23-11.41,4.52-.1.13.09.27.21.21a56.37,56.37,0,0,1,11.26-4.23A.25.25,0,0,0,672.12,425.79Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 666.542px 428.158px 0px;"
                                id="elqa5rjw2yhro" class="animable"></path>
                            <path
                                d="M675.25,427.07c-4.08-.13-8.82,1.23-11.41,4.52-.1.13.08.27.2.21a56.46,56.46,0,0,1,11.27-4.23A.25.25,0,0,0,675.25,427.07Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 669.671px 429.438px 0px;"
                                id="elltbattqg1bd" class="animable"></path>
                            <path
                                d="M678.37,428.35c-4.07-.13-8.82,1.23-11.41,4.52-.1.13.09.27.21.21a55.77,55.77,0,0,1,11.26-4.23A.25.25,0,0,0,678.37,428.35Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 672.792px 430.718px 0px;"
                                id="elhzos65fxotn" class="animable"></path>
                            <path
                                d="M681.5,429.62c-4.08-.12-8.82,1.24-11.41,4.53-.1.13.08.27.2.21a55.86,55.86,0,0,1,11.27-4.23A.26.26,0,0,0,681.5,429.62Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 675.905px 431.994px 0px;"
                                id="elc2eatzk8sc" class="animable"></path>
                            <path d="M636.15,433.28c-4.57-.07-4.67,7-.1,7.1S640.73,433.34,636.15,433.28Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 636.102px 436.83px 0px;"
                                id="elyku2m3baj7k" class="animable"></path>
                            <path
                                d="M676.71,415c-2-1.74-4.66-.12-6,1.64A21.4,21.4,0,0,0,666.87,427c0,.08.06.12.13.11a.48.48,0,0,0,.72.34c2.94-1.95,6.32-3.68,8.56-6.48C677.59,419.32,678.63,416.64,676.71,415Zm-5.15,8.58c-1.42,1-2.88,1.92-4.26,3a62,62,0,0,1,2.4-6,22.6,22.6,0,0,1,1.53-2.72c.91-1.34,5-4.67,5.3-.24C676.71,420,673.25,422.38,671.56,423.57Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 672.318px 420.886px 0px;"
                                id="elb46n8owu3a6" class="animable"></path>
                            <path
                                d="M656.72,428.33c3.54.6,7.22-.35,10.71-.83a.5.5,0,0,0,.32-.74.1.1,0,0,0,0-.17,21.34,21.34,0,0,0-9.77-5.17c-2.14-.45-5.18.07-5.54,2.73S654.66,428,656.72,428.33ZM654.3,426c-2.7-3.54,2.55-3.74,4.12-3.34a23.86,23.86,0,0,1,3,1c2,.82,3.86,1.9,5.77,2.9-1.73.13-3.43.41-5.16.61C659.93,427.38,655.79,427.92,654.3,426Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 660.112px 424.899px 0px;"
                                id="elc4kw8ud3pd" class="animable"></path>
                            <path
                                d="M670.09,414.48H625.61s8.37-94.72,8-96.53c-.44-2.33-3.07-12.84-6.56-26.58-1.1-4.3-2.28-8.91-3.51-13.69-3.32-12.93-7-27.06-10.16-39.35-4.78-18.42-8.51-32.72-8.51-32.72h37.7s4.4,13.93,9.93,32c9,29.45,21.08,70,22.27,79.84C676.72,333.41,670.09,414.48,670.09,414.48Z"
                                style="fill: rgb(69, 90, 100); transform-origin: 640px 310.045px 0px;" id="el6789zb3gxa9"
                                class="animable"></path>
                            <path
                                d="M668.12,406.89c-6.79-.14-4.84-.2-11.63-.26-3.33,0-25.18-.23-28.29.29-.06,0-.06.13,0,.14,3.11.51,25,.32,28.29.29,6.79-.07,4.84-.12,11.63-.26A.1.1,0,0,0,668.12,406.89Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 648.188px 406.994px 0px;"
                                id="el9go7sohqyo5" class="animable"></path>
                            <path
                                d="M642,311.6c-1.45-6.43-3.63-12.74-5.53-19.05q-5.79-19.23-11.64-38.45-2.91-9.61-5.87-19.22c-1-3.23-2-6.46-3-9.69s-2.11-6.28-3-9.47c-.36-1.3-.56-.58-.09,1.06.94,3.32,1.86,6.64,2.83,9.95q2.88,9.84,5.78,19.65,5.79,19.56,11.67,39.07,2.94,9.8,5.89,19.58a79.62,79.62,0,0,1,2.41,9.47,44,44,0,0,1,.39,10.13c-.43,6.81-1.21,13.6-1.84,20.39l-1.89,20.42c-1.26,13.54-1.93,17.9-3.15,31.44-.15,1.72-.3,3.44-.43,5.15,0,.58.82.54.88,0,1.47-13.39,2-17.64,3.27-31.05l3.75-40c.31-3.35.66-6.7.67-10.07A41.11,41.11,0,0,0,642,311.6Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 627.847px 308.75px 0px;"
                                id="el8lv9ksqolys" class="animable"></path>
                            <path d="M638.31,205.61c-2.62,20.25-7.61,58.21-11.24,85.76-8.51-33.38-22.18-85.76-22.18-85.76Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 621.6px 248.49px 0px;" id="eluj0aypyzj3q"
                                class="animable"></path>
                            <path
                                d="M650.57,446.32c-2.11.73-62.83,1.51-65.17.08-.88-.54-1.51-9.38-2-20.08-.1-2.31-.19-4.69-.26-7.12-.52-15.74-.75-30.22-.75-30.22l40.64-.14-.39,29.74-.09,7.13s23.38,10.1,25.77,11.94S652.69,445.58,650.57,446.32Z"
                                style="fill: rgb(247, 169, 160); transform-origin: 616.93px 418.02px 0px;"
                                id="elqvavnq7t0sm" class="animable"></path>
                            <path
                                d="M650.57,446.32c-2.11.73-62.83,1.51-65.17.08-1.08-.66-1.78-13.57-2.23-27.2l39.5-.62-.09,7.13s23.38,10.1,25.77,11.94S652.69,445.58,650.57,446.32Z"
                                style="fill: rgb(255, 255, 255); transform-origin: 617.324px 432.89px 0px;"
                                id="elc7qlvmcvg65" class="animable"></path>
                            <path
                                d="M650.57,446.32c-2.11.73-62.83,1.51-65.17.08-.88-.54-1.51-9.38-2-20.08l39.15-.61s23.38,10.1,25.77,11.94S652.69,445.58,650.57,446.32Z"
                                style="fill: rgb(166, 166, 166); transform-origin: 617.435px 436.455px 0px;"
                                id="el83uhv7aj416" class="animable"></path>
                            <path
                                d="M649.67,443.9c-10.18-.12-51.26.36-61.33,1-.09,0-.09.06,0,.06,10.09.34,51.16-.48,61.33-.92C649.89,444.05,649.89,443.9,649.67,443.9Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 619.054px 444.461px 0px;"
                                id="eldvsatn0w5v" class="animable"></path>
                            <path
                                d="M644.42,435.52a8.18,8.18,0,0,0-6.06,2.56,8,8,0,0,0-2.21,5.47c0,.06.12.06.13,0a9.45,9.45,0,0,1,8.14-7.9C644.5,435.64,644.5,435.52,644.42,435.52Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 640.315px 439.557px 0px;"
                                id="elu4lnhc71eb8" class="animable"></path>
                            <path
                                d="M626.54,426.67c-4.08,0-8.78,1.49-11.27,4.86-.1.13.09.26.21.2a55.89,55.89,0,0,1,11.13-4.56A.25.25,0,0,0,626.54,426.67Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 621.035px 429.206px 0px;"
                                id="el89wedhv4pnt" class="animable"></path>
                            <path
                                d="M629.7,427.85c-4.08,0-8.78,1.5-11.27,4.86-.1.13.09.27.21.21a56.36,56.36,0,0,1,11.14-4.57A.26.26,0,0,0,629.7,427.85Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 624.172px 430.392px 0px;"
                                id="elgimvob3ydf7" class="animable"></path>
                            <path
                                d="M632.86,429c-4.08,0-8.78,1.49-11.27,4.86-.1.13.09.26.21.2a56.33,56.33,0,0,1,11.14-4.56A.26.26,0,0,0,632.86,429Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 627.332px 431.538px 0px;"
                                id="elm36brkif02" class="animable"></path>
                            <path
                                d="M636,430.23c-4.07,0-8.78,1.49-11.27,4.85-.09.14.09.27.21.21a55.73,55.73,0,0,1,11.14-4.56A.26.26,0,0,0,636,430.23Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 630.474px 432.768px 0px;"
                                id="eljgmso1cv4vj" class="animable"></path>
                            <path d="M590.8,435.21c-4.57.08-4.46,7.18.12,7.11S595.38,435.14,590.8,435.21Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 590.862px 438.765px 0px;"
                                id="eloup974ulw3" class="animable"></path>
                            <path
                                d="M630.8,415.74c-2.08-1.68-4.66,0-5.91,1.81A21.51,21.51,0,0,0,621.32,428a.11.11,0,0,0,.13.11.49.49,0,0,0,.74.32c2.87-2,6.2-3.87,8.36-6.73C631.82,420,632.77,417.33,630.8,415.74Zm-4.89,8.72c-1.39,1-2.82,2-4.17,3.1a63,63,0,0,1,2.22-6.07,22,22,0,0,1,1.45-2.76c.87-1.36,4.83-4.82,5.29-.39C631,420.78,627.57,423.22,625.91,424.46Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 626.625px 421.776px 0px;"
                                id="elmpahgn4xh2" class="animable"></path>
                            <path
                                d="M611.22,429.66c3.55.5,7.2-.56,10.68-1.14a.5.5,0,0,0,.3-.75.11.11,0,0,0,0-.17,21.45,21.45,0,0,0-9.93-4.89c-2.15-.38-5.17.23-5.46,2.9C606.55,428.13,609.15,429.37,611.22,429.66Zm-2.49-2.29c-2.8-3.46,2.44-3.81,4-3.46a22.48,22.48,0,0,1,3,.93,62.19,62.19,0,0,1,5.85,2.73c-1.72.18-3.42.51-5.14.76C614.4,428.62,610.28,429.28,608.73,427.37Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 614.534px 426.199px 0px;"
                                id="elr198e8rr4lq" class="animable"></path>
                            <path
                                d="M641.37,205.61s-.87,18-5,32.32c-.33,1.18-.69,2.35-1.07,3.46A67,67,0,0,0,624.43,247s-.43,14.51-.87,30.7c-.48,18.09,2.32,38.27,2.43,42.55.37,16-1.57,94.07-1.57,94.07l-44.48.18s7.61-88.33,7.55-94.2c-.08-9.43,3.24-75,2.68-76.51-7.16-18.72,2.3-38.16,2.3-38.16Z"
                                style="fill: rgb(69, 90, 100); transform-origin: 610.655px 310.055px 0px;"
                                id="el36pxwlqjrbo" class="animable"></path>
                            <path
                                d="M622.89,406.39c-6.79-.11-4.84-.18-11.64-.21-3.32,0-25.17-.12-28.28.41a.07.07,0,0,0,0,.14c3.11.5,25,.21,28.29.17,6.79-.1,4.84-.14,11.63-.31A.1.1,0,0,0,622.89,406.39Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 602.945px 406.594px 0px;"
                                id="elavql0u7y7br" class="animable"></path>
                            <path
                                d="M637.15,240.32A82.77,82.77,0,0,0,624.43,247a.15.15,0,0,0,.13.26c4.3-2.09,8.68-4.09,12.85-6.41A.29.29,0,0,0,637.15,240.32Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 630.977px 243.777px 0px;" id="eljatm7sdt6"
                                class="animable"></path>
                            <path
                                d="M630.45,234.27c.14-2,.29-4.07.47-6.1.41-4.64.89-9.29,1.7-13.87.07-.36.57-.22.54.12-.31,3.6-.72,7.19-1.06,10.79s-.77,7.18-.83,10.76c0,1.08.05,2.91,1.38,3.21,1.78.4,2.62-1.94,3.05-3.22a60.73,60.73,0,0,0,2.23-9.8c.59-3.78.9-7.6,1.26-11.41,0-.13.24-.11.24,0,0,7.55-.09,15.44-2.9,22.57-.55,1.39-1.52,2.8-3.13,3h-.07a.51.51,0,0,1,0,.13c0,.21-.09.42-.13.63s-.06.36-.1.53c-.08.37-.13.74-.23,1.1a.27.27,0,0,1-.54-.06.24.24,0,0,1-.16-.22,5.86,5.86,0,0,1,.49-2.14,2.67,2.67,0,0,1-1.95-1.64A9.44,9.44,0,0,1,630.45,234.27Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 634.868px 228.52px 0px;" id="elb6qrwplba2"
                                class="animable"></path>
                            <path
                                d="M594.67,243.77a81.6,81.6,0,0,0-1.94-9.27c-1.64-6.91-.54-16.31,1.24-23.06,0-.18-.25-.24-.3-.07-1.78,5.75-3.07,14.06-2.38,20.1.33,2.87,2.64,11.59,2.57,14.71-.15,6.14.34,58.5-.07,79.88-.27,14-3.18,61.08-3.62,75.1,0,.13.21.12.21,0,1.63-25,3.75-50.56,4.09-75.06C594.79,302.28,595.07,247.18,594.67,243.77Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 592.519px 306.262px 0px;"
                                id="eleucc54rehvi" class="animable"></path>
                            <path
                                d="M616.63,213c-.2,2.14-.28,4.3-.6,6.44a8.68,8.68,0,0,1-2.4,5.22,12.92,12.92,0,0,1-5,2.85c-2.45.73-9.88.74-12.41.38-.64-.09-.58.4.63.66a74.64,74.64,0,0,0,8.2.6,17.88,17.88,0,0,0,4-.28,11.18,11.18,0,0,0,5.8-3,9.36,9.36,0,0,0,2.39-5.84,35,35,0,0,0-.27-7C616.94,212.8,616.64,212.8,616.63,213Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 606.562px 221.01px 0px;"
                                id="el93iybxh9o9m" class="animable"></path>
                            <path
                                d="M618.16,154.77c0,.12.17.12.18,0,.48-5.48,6.11-8.82,6.25-14.42a13.14,13.14,0,0,0-2-7,37.49,37.49,0,0,0-2.91-3.86l-.41-.64a26.38,26.38,0,0,1-2.29-4.17,15.72,15.72,0,0,1-1-5.3c-.15-3.46-.06-7-2.3-9.84-1.88-2.39-3.87-5.34-8-6.77-6.42-2.2-13.91.7-18.61,6.08a12,12,0,0,0-2,3.17,7.13,7.13,0,0,0-5.34,5c-1.26,3.89,1.11,9.26.75,11.21-.32,1.73-1.46,3.15-2.26,4.67a30.41,30.41,0,0,0-2.19,4,10.6,10.6,0,0,0-.52,6.13,11.75,11.75,0,0,0,2.17,5.17,9.66,9.66,0,0,0,4.38,2.94l1.23.42,0,0c1.4.88,2.94,1.57,4.26,2.57a7.49,7.49,0,0,1,2.81,4.49c.38,1.65.43,3.36.7,5a12.17,12.17,0,0,0,1.56,4.42,14.21,14.21,0,0,0,7.07,5.78,21.55,21.55,0,0,0,10.68,1c3.21-.43,6.28-1.63,8.23-4.33a10.19,10.19,0,0,0,1.67-8.18,27.21,27.21,0,0,0-2.05-4.78,8.13,8.13,0,0,1-.73-5c1.06-5.62,6.78-9.68,5.7-15.83a13.88,13.88,0,0,0-1.72-4.42,13.88,13.88,0,0,1,2.77,7.08c.2,2.87-1,5.32-2.53,7.66S618.29,151.85,618.16,154.77Zm-35.9-3.83a9.35,9.35,0,0,1-5.39-4.65,12.53,12.53,0,0,1-1.07-8,14.42,14.42,0,0,1,1.55-3.61.41.41,0,0,0,0-.09,13.39,13.39,0,0,0-.6,2.5,15.25,15.25,0,0,0,1.09,8.09,14,14,0,0,0,4.48,5.76Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 599.934px 138.559px 0px;"
                                id="elgdla7a2bhw9" class="animable"></path>
                            <path
                                d="M654.21,111.27l-5.49,28.28c-.25.83.2,1.48,1,1.43l14.39-.79a2.34,2.34,0,0,0,1.92-1.6l5.49-28.27c.25-.84-.2-1.48-1-1.44l-14.39.8A2.31,2.31,0,0,0,654.21,111.27Z"
                                style="fill: rgb(55, 71, 79); transform-origin: 660.12px 124.93px 0px;" id="el5t1300jr5q"
                                class="animable"></path>
                            <path
                                d="M655.92,111.16l-5.49,28.28c-.25.83.19,1.48,1,1.43l14.39-.79a2.36,2.36,0,0,0,1.92-1.6l5.49-28.27c.25-.84-.2-1.48-1-1.44l-14.4.8A2.31,2.31,0,0,0,655.92,111.16Z"
                                style="fill: rgb(69, 90, 100); transform-origin: 661.83px 124.82px 0px;" id="elqbjgm2gx1x"
                                class="animable"></path>
                            <path d="M659.94,112.22a1.23,1.23,0,1,1-1.27-1.19A1.23,1.23,0,0,1,659.94,112.22Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 658.711px 112.259px 0px;"
                                id="elabsyhbwua6s" class="animable"></path>
                            <path
                                d="M610.15,156.06c9,17,28.29,38.66,35.86,38.41,3.6-.12,10.07.45,14.61-3.91,9.89-9.51,17.71-27.18,19-37.14.47-3.55-17-10.38-19.39-7.39-5.6,7-11.87,20.45-12.92,20.42-3.89-.12-19.62-12-30.61-20.42C603.38,135.84,606.58,149.3,610.15,156.06Z"
                                style="fill: rgb(247, 169, 160); transform-origin: 643.328px 168.408px 0px;"
                                id="elp3tz3wx16" class="animable"></path>
                            <path
                                d="M679.22,135.23c-2.14-7.06-3.78-8.54-2.42-15.46.89-4.53-1.63-7-4.64-3.3-4.93,6.13-4.08,15.81-2.82,19.08Z"
                                style="fill: rgb(247, 169, 160); transform-origin: 673.793px 125.112px 0px;"
                                id="elf1tm5h5cqvc" class="animable"></path>
                            <path
                                d="M678.94,156.52s2.73-10.1,1.19-17.84c-1.06-5.36-4.68-16.75-20.06-22.14-3.64-1.28-9.75-.51-4.55,3.74,3.7,3,7,3.82,8.78,6,0,0-7.65,1.89-8.79,5.6a70.42,70.42,0,0,0-2.28,9.89,15.14,15.14,0,0,0,1.81.59s-1,3.5,1.83,8.28Z"
                                style="fill: rgb(247, 169, 160); transform-origin: 666.916px 136.249px 0px;"
                                id="elgh87kr7ptob" class="animable"></path>
                            <path
                                d="M678.3,133.73c-2.27-1.75-7.13-5.37-12.14-6.95-5.57-1.76-16.76-3.64-18,.48-.92,3,3.29,4.11,3.29,4.11s-4.79.2-5,3.11c-.21,2.66,3.1,3.31,3.1,3.31s-2.89.62-2.6,3.21c.35,3.12,6.34,1.31,9.42,4.17C657,145.81,678.3,133.73,678.3,133.73Z"
                                style="fill: rgb(247, 169, 160); transform-origin: 662.37px 134.99px 0px;"
                                id="el9t88brylxa9" class="animable"></path>
                            <path
                                d="M665.28,133a23.3,23.3,0,0,0-13.76-1.67c-.11,0-.15.13,0,.13a56.89,56.89,0,0,1,13.79,1.6S665.31,133,665.28,133Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 658.366px 132.004px 0px;"
                                id="elzwbzs1w4aw" class="animable"></path>
                            <path
                                d="M663.35,138.53c-2.19-.9-8.66-2.21-13.84-.85-.11,0-.15.14,0,.13a62.15,62.15,0,0,1,13.86.77A0,0,0,1,0,663.35,138.53Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 656.391px 137.837px 0px;"
                                id="elpbsnzodihv9" class="animable"></path>
                            <path
                                d="M680.13,160.65S667.37,189,659.37,192.56s-12.91,3.08-16,2.76a8.16,8.16,0,0,1-3.28-1.4c-8.48-5.48-24.14-25.55-30.64-36.94-4.88-8.56-4.74-16.52,2.16-14.27a22.64,22.64,0,0,1,6.45,3.72c13,9.89,27.91,19.19,28.58,18.79S654,153.13,654,153.13Z"
                                style="fill: rgb(64, 123, 255); transform-origin: 643.1px 168.931px 0px;"
                                id="eluoiz8hf921" class="animable"></path>
                            <path
                                d="M676.89,165.85c-.95-.47-9.9-3.49-11.85-4.1s-9.94-3.21-12-3.67a.07.07,0,0,0,0,.14c1.95.84,10,3.47,12,4.14s10.9,3.46,11.91,3.63C677,166,677,165.88,676.89,165.85Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 664.976px 162.035px 0px;"
                                id="el8oqq6leue1x" class="animable"></path>
                            <path
                                d="M640.11,161.65a129.16,129.16,0,0,1-16.76,15.11c-2.17-2.69-4.28-5.46-6.23-8.18a114.18,114.18,0,0,0,14.41-12.52C634.73,158.22,637.67,160.14,640.11,161.65Z"
                                style="fill: rgb(235, 235, 235); transform-origin: 628.615px 166.41px 0px;"
                                id="elajkszm4ec89" class="animable"></path>
                            <g id="el7aoiyld8pqq">
                                <path
                                    d="M664.62,187.83c-1.85,2.29-3.64,4-5.25,4.72-8,3.58-12.91,3.09-16,2.77a8,8,0,0,1-3.28-1.4c-8.48-5.48-24.14-25.56-30.64-36.94-4.43-7.76-4.73-15,.4-14.64C623.65,153.71,649.86,175.52,664.62,187.83Z"
                                    style="opacity: 0.1; transform-origin: 635.342px 168.934px 0px;" class="animable">
                                </path>
                            </g>
                            <path
                                d="M633.08,180.13l11.33,28.53s-41.18.87-53.85.74c0,0-8-46.28,4.73-61.83,6.35-7.77,11.89-7.33,17.28-2.48,1.36,1.23,19.36,14.93,21.44,22.58A19.61,19.61,0,0,1,633.08,180.13Z"
                                style="fill: rgb(64, 123, 255); transform-origin: 616.244px 175.49px 0px;"
                                id="elnunwe9oelz" class="animable"></path>
                            <path
                                d="M624.08,178.72a52.43,52.43,0,0,0-7.66,1.32c-1.25.34-2.47.72-3.69,1.14-.61.2-1.22.39-1.84.57a8.29,8.29,0,0,1-2,.39,0,0,0,0,0,0,.09,12.06,12.06,0,0,0,1.9,0,12.73,12.73,0,0,0,1.82-.36c1.26-.32,2.52-.7,3.78-1,2.55-.68,5.1-1.36,7.7-1.85C624.24,178.91,624.21,178.7,624.08,178.72Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 616.54px 180.493px 0px;"
                                id="elf78vcujp0uk" class="animable"></path>
                            <path
                                d="M630.49,181a54.87,54.87,0,0,0-6.41-.25c-1.07,0-2.14.1-3.2.22-.51.05-1,.11-1.52.18s-1.11.23-1.67.3a0,0,0,1,0,0,.09c.53-.05,1.07,0,1.6,0l1.6-.05c1.07,0,2.14-.06,3.2-.11,2.14-.09,4.27-.16,6.41-.17A.09.09,0,0,0,630.49,181Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 624.145px 181.14px 0px;"
                                id="elcdvt58j8wnl" class="animable"></path>
                            <path
                                d="M594.63,145.91c-18.38,12.54-38,38-35.75,45.34,2.56,8.17,29-9.61,28.55-10.83-.38-1,4.39-10.78,11.22-24.74C605.6,141.48,599.18,142.81,594.63,145.91Z"
                                style="fill: rgb(64, 123, 255); transform-origin: 580.209px 168.641px 0px;"
                                id="elyeo3c6gdd89" class="animable"></path>
                            <path
                                d="M592,169.33c-2.09,4.38-3.59,7.67-4.24,9.51a143.91,143.91,0,0,1-20.86-5.55c2-2.75,4.32-5.61,6.83-8.46A115.35,115.35,0,0,0,592,169.33Z"
                                style="fill: rgb(235, 235, 235); transform-origin: 579.45px 171.835px 0px;"
                                id="elnvb1xlevgt" class="animable"></path>
                            <path
                                d="M558.88,191.25c2.48,5.62,11.69,8.4,34.22,17.59,3.12,1.27,18-18.32,14.75-19.85-4.1-1.92-20.45-8.51-21.71-8.84C575.54,177.37,557.19,187.45,558.88,191.25Z"
                                style="fill: rgb(247, 169, 160); transform-origin: 583.541px 194.285px 0px;"
                                id="el4xulhcd7134" class="animable"></path>
                            <path
                                d="M603.37,187s9.64,3.45,14.14,6.83a36.2,36.2,0,0,1,10.6,13.67c2.59,5.76,4.85,21.48.44,22.93-4,1.3-5.5-14.89-5.5-14.89s4.25,16.25-.85,16.94-5.77-18.2-5.77-18.2,4,16.8-1.38,16.67c-4-.09-5.63-17.16-5.63-17.16s3.34,14.45-.84,14.54c-4.62.09-7.06-15.58-7.06-15.58-10.66-1.57-15.09-6.68-17.81-10.69C583.05,201.09,603.37,187,603.37,187Z"
                                style="fill: rgb(247, 169, 160); transform-origin: 607.371px 209.749px 0px;"
                                id="elo7t5iaig69i" class="animable"></path>
                            <path
                                d="M621.94,209.83c.56,1.89,1.15,3.8,1.55,5.74s.73,3.88,1,5.84a34.38,34.38,0,0,1,.12,7.72c.12-4.59-1.2-11.54-1.6-13.47s-.7-3.89-1.1-5.82C621.85,209.79,621.92,209.79,621.94,209.83Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 623.329px 219.466px 0px;"
                                id="el3nrtwn7ujvw" class="animable"></path>
                            <path
                                d="M614.92,211.14c.63,2.45,1.33,4.85,1.85,7.33s.78,4.84,1.12,7.33c0,.19-.09.14-.12-.05-.44-2.47-1-4.73-1.51-7.2s-.84-5-1.4-7.4C614.85,211.12,614.91,211.11,614.92,211.14Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 616.374px 218.521px 0px;"
                                id="eleckciqi7924" class="animable"></path>
                            <path
                                d="M608.7,211.19a56.5,56.5,0,0,1,2,11.42c0,.19-.12.11-.15-.09-.58-3.8-1-6.8-1.94-11.29C608.56,211.16,608.68,211.11,608.7,211.19Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 609.649px 216.934px 0px;"
                                id="elujn61h0hzh" class="animable"></path>
                            <path
                                d="M607.94,186.92s-21.79,21.54-22.06,21.48-25.81-10.93-27-17.15,17.86-13.44,27.24-11.14S607.94,186.92,607.94,186.92Z"
                                style="fill: rgb(64, 123, 255); transform-origin: 583.383px 194.036px 0px;"
                                id="eln78nrizs5u" class="animable"></path>
                            <path
                                d="M599.41,185.31c-.87.69-7.71,7.83-9.16,9.41s-7.45,8-8.81,9.75c-.06.08,0,.18.11.11,1.66-1.47,7.73-7.92,9.24-9.5s8.12-8.79,8.74-9.68C599.58,185.33,599.47,185.27,599.41,185.31Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 590.48px 194.95px 0px;" id="el8uyfoaajszf"
                                class="animable"></path>
                            <path
                                d="M575.24,180.57c2-.6,7.68-1.81,12.61-.09.06,0,0,.09,0,.08a38.54,38.54,0,0,0-12.57.08S575.19,180.58,575.24,180.57Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 581.551px 180.117px 0px;"
                                id="el97v4g05x4hi" class="animable"></path>
                            <path
                                d="M606.6,188.25l1.29-1.38,0,.12-5.1-1.76c-1.71-.58-3.41-1.14-5.13-1.68-3.41-1.12-6.85-2.16-10.33-3.05l-.4-.11.15-.38c1.41-3.6,2.88-7.15,4.51-10.65A113.13,113.13,0,0,1,597,159.12c-1.72,3.45-3.32,6.94-4.83,10.47s-3,7.08-4.33,10.68l-.26-.49c3.49.92,6.93,2,10.34,3.18,1.7.6,3.39,1.23,5.07,1.87s3.35,1.33,5,2l.1.05L608,187Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 597.51px 173.685px 0px;"
                                id="el9oy5vfuzkhk" class="animable"></path>
                            <path
                                d="M593.05,166.9a20.16,20.16,0,0,1,1.58-2.39,15.46,15.46,0,0,1,1.94-2.11,14.81,14.81,0,0,1-1.54,2.42c-.3.37-.6.74-.93,1.09A7.59,7.59,0,0,1,593.05,166.9Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 594.81px 164.65px 0px;" id="elrnli2n3bat9"
                                class="animable"></path>
                            <path
                                d="M599.81,147.22c.44.92,6.49,6.26,10.92,5.08,1.44-.38-.32-8.35-.32-8.35v-.61l.06-8.64-11-4.12-1.58-.51s.14,2.36.34,5.3l0,.42q0,.26,0,.48c0,.44,0,.89.09,1.34s0,.67.09,1,.07.7.1,1.06A56,56,0,0,0,599.81,147.22Z"
                                style="fill: rgb(247, 169, 160); transform-origin: 604.593px 141.27px 0px;"
                                id="elj95415urrw" class="animable"></path>
                            <path
                                d="M610.41,143.45a17.84,17.84,0,0,1-12-5.7.66.66,0,0,0,0-.14c0-.45-.06-.9-.09-1.34,0-.15,0-.31,0-.47s0-.29,0-.43c-.2-2.94-.35-5.31-.35-5.31l1.58.52,11,4.12-.06,8.63Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 604.26px 136.755px 0px;" id="elx0kgu411hh"
                                class="animable"></path>
                            <path
                                d="M619.94,122.39c1.16,15.12-7.77,17.52-11,17.77-3,.22-13.07.6-15.78-14.32s4-20.24,10.7-21.11S618.79,107.26,619.94,122.39Z"
                                style="fill: rgb(247, 169, 160); transform-origin: 606.293px 122.412px 0px;"
                                id="el4l0oypi302i" class="animable"></path>
                            <path
                                d="M616.66,118.79c-.36,0-.69-.1-1-.15a1.65,1.65,0,0,1-1-.36.54.54,0,0,1-.05-.66,1.34,1.34,0,0,1,1.31-.4,2,2,0,0,1,1.29.61A.58.58,0,0,1,616.66,118.79Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 615.942px 117.992px 0px;"
                                id="elldrl9ht72a" class="animable"></path>
                            <path
                                d="M606.58,120.52a7.4,7.4,0,0,0,1-.26,1.66,1.66,0,0,0,1-.46.54.54,0,0,0,0-.66,1.37,1.37,0,0,0-1.35-.27,2,2,0,0,0-1.21.75A.58.58,0,0,0,606.58,120.52Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 607.306px 119.661px 0px;"
                                id="el7sws6plylj" class="animable"></path>
                            <path
                                d="M609.09,123.22s-.08.06-.08.1c.1,1,0,2.24-.88,2.64,0,0,0,.07,0,.06C609.28,125.79,609.35,124.19,609.09,123.22Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 608.672px 124.62px 0px;" id="elr28p3b3znq"
                                class="animable"></path>
                            <path d="M608.09,122.19c-1.68,0-1.6,3.34,0,3.36S609.5,122.21,608.09,122.19Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 608.04px 123.87px 0px;" id="el6akyc6i0cv9"
                                class="animable"></path>
                            <path
                                d="M607.43,122.39c-.28.2-.56.54-.92.58s-.72-.29-1-.62c0,0-.06,0-.06,0,0,.64.27,1.29,1,1.37s1.07-.5,1.21-1.16C607.66,122.48,607.55,122.31,607.43,122.39Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 606.555px 123.039px 0px;"
                                id="elhzp5kyft1pp" class="animable"></path>
                            <path
                                d="M615.1,122.48s.09,0,.09.09c0,1,.2,2.23,1.16,2.54,0,0,0,.06,0,0C615.18,125.05,615,123.47,615.1,122.48Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 615.713px 123.808px 0px;"
                                id="eln0c8htmpkd" class="animable"></path>
                            <path d="M616,121.35c1.66-.2,1.94,3.15.4,3.34S614.59,121.52,616,121.35Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 616.247px 123.02px 0px;"
                                id="el93o93oo6396" class="animable"></path>
                            <path
                                d="M616.7,121.52c.28.15.57.45.89.45s.61-.39.81-.76c0,0,.05,0,.06,0,.07.64-.09,1.32-.69,1.5s-1-.36-1.22-1C616.51,121.64,616.59,121.45,616.7,121.52Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 617.507px 121.978px 0px;"
                                id="el5vtg0cvrt42" class="animable"></path>
                            <path
                                d="M609,131.34c.24.25.49.59.86.63a2.94,2.94,0,0,0,1.13-.24,0,0,0,0,1,0,.05,1.4,1.4,0,0,1-1.33.54,1.09,1.09,0,0,1-.8-.94C608.89,131.32,609,131.3,609,131.34Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 609.925px 131.828px 0px;"
                                id="elybzp2wguttl" class="animable"></path>
                            <path
                                d="M613.7,127.23a22.91,22.91,0,0,1,.29,2.29,4,4,0,0,1-3.9-1.05c-.06-.06,0-.15.11-.11a5.23,5.23,0,0,0,3.23.8c0-.2-.56-2.64-.44-2.65a6.46,6.46,0,0,1,1.69.31c-.48-3.25-1.47-6.4-1.89-9.65a.1.1,0,0,1,.19,0,53.76,53.76,0,0,1,2.48,10.31C615.53,127.84,614,127.35,613.7,127.23Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 612.764px 123.381px 0px;"
                                id="elzarxh372jlh" class="animable"></path>
                            <path
                                d="M594,127.37c2.9.28,3.44-6.35,3.44-6.35s12.23-2.46,13-12.51a16.93,16.93,0,0,0,8.83,9s-.76-11-9.53-12.83c0,0-10.92-3.6-16.73,5.16S592.1,127.19,594,127.37Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 604.764px 115.663px 0px;"
                                id="el1gr5y6tnnq" class="animable"></path>
                            <path
                                d="M610.47,107.77a10.85,10.85,0,0,1-.41,4.59,11.22,11.22,0,0,1-2.2,4.11,9.26,9.26,0,0,1-.8.86l-.41.42-.46.36c-.32.24-.62.49-.94.71s-.67.39-1,.58a5.05,5.05,0,0,1-.51.28l-.53.23-1.07.45c-.74.23-1.48.42-2.22.6.69-.33,1.41-.58,2.09-.92l1-.52.5-.26.47-.32.93-.62c.3-.23.58-.48.86-.71l.43-.36.39-.4a9.58,9.58,0,0,0,.75-.82,13,13,0,0,0,2.23-3.84,13.34,13.34,0,0,0,.62-2.16A14.11,14.11,0,0,0,610.47,107.77Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 605.237px 114.365px 0px;"
                                id="elbqxwtmqgt4t" class="animable"></path>
                            <path d="M595.62,126.82s-3.26-4.77-5.42-3.61.26,8,2.77,9a2.57,2.57,0,0,0,3.45-1.34Z"
                                style="fill: rgb(247, 169, 160); transform-origin: 592.892px 127.738px 0px;"
                                id="elq8paf65oo7q" class="animable"></path>
                            <path
                                d="M590.94,125.17s-.05,0,0,.06c1.76.74,2.67,2.39,3.31,4.09a1.43,1.43,0,0,0-2.12-.41.06.06,0,0,0,0,.1,1.56,1.56,0,0,1,1.73.57,7.87,7.87,0,0,1,.82,1.41c.08.16.36.08.31-.1l0,0C595.08,128.59,593.36,125.42,590.94,125.17Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 592.957px 128.123px 0px;"
                                id="eldxmgyp7lsw" class="animable"></path>
                        </g>
                        <g id="freepik--character-2--inject-16" style="transform-origin: 424.528px 332.956px 0px;"
                            class="animable">
                            <path
                                d="M434.76,451.05c2.1-.87,48.59-41.38,49.39-44,.3-1-5.2-8.13-12.1-16.54-1.48-1.81-3-3.68-4.62-5.57-10.26-12.25-21.44-25-21.44-25l-31.17,27,22.3,24.29L442,416.5S431.14,440,430.58,443,432.67,451.92,434.76,451.05Z"
                                style="fill: rgb(255, 196, 192); transform-origin: 449.491px 405.538px 0px;"
                                id="elbl37rinquyu" class="animable"></path>
                            <path
                                d="M434.76,451.05c2.1-.87,48.59-41.38,49.39-44,.37-1.24-7.84-11.48-16.72-22.11l-30.31,26.27L442,416.5S431.14,440,430.58,443,432.67,451.92,434.76,451.05Z"
                                style="fill: rgb(255, 255, 255); transform-origin: 457.333px 418.038px 0px;"
                                id="elk5n7n6a2eim" class="animable"></path>
                            <path
                                d="M434.76,451.05c2.1-.87,48.59-41.38,49.39-44,.3-1-5.2-8.13-12.1-16.54l-30,26S431.14,440,430.58,443,432.67,451.92,434.76,451.05Z"
                                style="fill: rgb(55, 71, 79); transform-origin: 457.333px 420.823px 0px;"
                                id="elmxfilyr8t9q" class="animable"></path>
                            <path
                                d="M433.81,448.61c7.63-7,39-34.42,47.11-40.74.07-.06.11,0,.05.05-7.41,7.08-39.05,34.26-47.05,40.82C433.75,448.87,433.65,448.75,433.81,448.61Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 457.364px 428.32px 0px;" id="eltk5u0vdity"
                                class="animable"></path>
                            <path
                                d="M432.12,438.71a8.29,8.29,0,0,1,6.32-2.16,8.06,8.06,0,0,1,5.36,2.64c0,.05,0,.13-.09.09a9.58,9.58,0,0,0-11.51-.47A.06.06,0,1,1,432.12,438.71Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 437.948px 437.905px 0px;"
                                id="elty9yp5hrdzj" class="animable"></path>
                            <path
                                d="M439.66,419.91c3.08-2.76,7.66-4.81,11.82-4,.16,0,.11.26,0,.3a56.92,56.92,0,0,0-11.51,4.08A.26.26,0,0,1,439.66,419.91Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 445.602px 418.018px 0px;"
                                id="elejzbwngmmlg" class="animable"></path>
                            <path
                                d="M438.07,423c3.08-2.76,7.66-4.81,11.82-3.95.16,0,.11.26,0,.29a57.57,57.57,0,0,0-11.51,4.09A.26.26,0,0,1,438.07,423Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 443.976px 421.166px 0px;"
                                id="eltc763kia5ne" class="animable"></path>
                            <path
                                d="M436.48,426c3.08-2.76,7.66-4.81,11.82-4,.16,0,.11.27,0,.3a57.53,57.53,0,0,0-11.51,4.08A.26.26,0,0,1,436.48,426Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 442.422px 424.108px 0px;"
                                id="elcjf8jo66o6" class="animable"></path>
                            <path
                                d="M434.89,429c3.08-2.76,7.66-4.81,11.82-3.95.16,0,.11.26,0,.3a56.92,56.92,0,0,0-11.51,4.08A.26.26,0,0,1,434.89,429Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 440.796px 427.166px 0px;"
                                id="elmdnvjhmsics" class="animable"></path>
                            <path d="M472.49,402.19c3.51-3,8.24,2.41,4.72,5.46S469,405.24,472.49,402.19Z"
                                style="fill: rgb(255, 255, 255); transform-origin: 474.856px 404.93px 0px;"
                                id="el2y55aqhvlsj" class="animable"></path>
                            <path
                                d="M433.27,418.88c3.57.7,7.33-.16,10.89-.56a.5.5,0,0,0,.34-.74.12.12,0,0,0,0-.18,21.72,21.72,0,0,0-9.78-5.5c-2.16-.51-5.27-.06-5.7,2.62S431.18,418.47,433.27,418.88Zm-2.4-2.46c-2.64-3.66,2.69-3.72,4.26-3.28a22.7,22.7,0,0,1,3,1.11,64.1,64.1,0,0,1,5.78,3.09c-1.76.09-3.5.33-5.25.48C436.55,418,432.33,418.44,430.87,416.42Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 436.77px 415.431px 0px;" id="eldeszw4xpv1"
                                class="animable"></path>
                            <path
                                d="M453.86,405.76c-2-1.82-4.72-.24-6.09,1.51a21.73,21.73,0,0,0-4.2,10.41.1.1,0,0,0,.12.12c.08.3.42.57.73.37,3-1.91,6.5-3.58,8.86-6.36C454.65,410.18,455.77,407.49,453.86,405.76Zm-5.44,8.57c-1.47,1-3,1.88-4.4,2.91a64,64,0,0,1,2.59-6,23.22,23.22,0,0,1,1.62-2.72c1-1.33,5.16-4.61,5.38-.1C453.74,410.88,450.17,413.17,448.42,414.33Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 449.222px 411.595px 0px;"
                                id="el29121qofn1i" class="animable"></path>
                            <path
                                d="M380.13,339c2.92,16.67,46.29,63.3,51.3,68.65l1.15,1.22,33.05-27.71-.41-.5-31.77-38.12,89.74-4.34L488,313.13s-2.69,1.71-8.48,1.11c-19.93-2.05-64.87-6.58-75.38-5.7C390.56,309.67,377.45,323.68,380.13,339Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 451.484px 358.649px 0px;"
                                id="elr93utxw1j0c" class="animable"></path>
                            <path
                                d="M422,328.33a38.87,38.87,0,0,1,3.27,3.85c1.13,1.35,2.27,2.68,3.39,4l0,0-.62-1.2c-.73-1.36-1.33-2.77-2.18-4.06-.05-.08.07-.16.12-.08.88,1.28,1.87,2.49,2.63,3.85.36.64.7,1.29,1,1.95.18.36.36.72.51,1.09a2.81,2.81,0,0,1,.22.53c.51.62,1,1.25,1.49,1.9,1.07,1.42,2,2.93,3.12,4.35.06.07-.06.15-.12.08-1.1-1.33-2.31-2.55-3.43-3.87s-2.21-2.71-3.28-4.1-2.06-2.73-3.1-4.09a41,41,0,0,1-3.14-4.2A.05.05,0,0,1,422,328.33Z"
                                style="fill: rgb(55, 71, 79); transform-origin: 428.423px 336.444px 0px;"
                                id="el5z700nk4jmo" class="animable"></path>
                            <path
                                d="M427.66,401.13c1.88-1.74,3.9-3.35,5.88-5s4-3.24,6-4.85c4-3.22,8-6.46,12.07-9.62,2.23-1.73,4.48-3.45,6.8-5.06a.11.11,0,0,1,.13.17c-3.8,3.46-7.86,6.63-11.87,9.83s-8.05,6.42-12.12,9.57c-2.23,1.73-4.44,3.51-6.77,5.09C427.68,401.35,427.58,401.2,427.66,401.13Z"
                                style="fill: rgb(55, 71, 79); transform-origin: 443.098px 388.939px 0px;"
                                id="elhc8ajvzxwuv" class="animable"></path>
                            <path
                                d="M498,263.33c-4.92,9.47-22.47,36-36.38,41.15-7.67,2.83-46.93,9.94-52.78,5.86-6.85-4.78-5-26.24-.14-27.06,14.79-2.52,42.71.07,49.39-2.34,3-1.09,18.11-13.86,34.6-24.65C498.91,252.21,501.15,257.22,498,263.33Z"
                                style="fill: rgb(255, 196, 192); transform-origin: 451.887px 283.192px 0px;"
                                id="el05wzinb0g20o" class="animable"></path>
                            <path
                                d="M422.83,281.18s.2,32.42,1.73,31.95,34.88-4.79,43.26-9.58,21.59-24.07,29.23-36.77.36-15.41-7.72-9-30.75,21.6-32.21,21.74S422.83,281.18,422.83,281.18Z"
                                style="fill: rgb(69, 90, 100); transform-origin: 461.555px 283.787px 0px;"
                                id="el0jjxiu5b6ovu" class="animable"></path>
                            <path
                                d="M429.07,309.55c.17-4.38.27-8.75.19-13.13-.05-2.19-.12-4.37-.23-6.55s-.44-4.36-.52-6.54c0-.12-.2-.1-.19,0,.19,2.17.09,4.38.17,6.56s.13,4.37.18,6.56c.1,4.36.21,8.73.21,13.1C428.88,309.69,429.06,309.67,429.07,309.55Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 428.804px 296.447px 0px;"
                                id="eldbuh6yynkq7" class="animable"></path>
                            <path d="M470.16,301.93c8.35-6.57,19.94-23.59,26.89-35.15,5.45-9,3.31-13-1.3-12.24Z"
                                style="fill: rgb(55, 71, 79); transform-origin: 485.22px 278.19px 0px;" id="eldouztfrgwf8"
                                class="animable"></path>
                            <rect x="424.26" y="311.39" width="57.78" height="2.59"
                                style="fill: rgb(199, 199, 199); transform-origin: 453.15px 312.685px 0px;"
                                id="elt8rsy52f0h" class="animable"></rect>
                            <polygon points="469.67 311.39 471.65 313.98 424.25 313.98 424.25 311.39 469.67 311.39"
                                style="fill: rgb(166, 166, 166); transform-origin: 447.95px 312.685px 0px;"
                                id="eld28ro1jac2s" class="animable"></polygon>
                            <polygon points="467.2 313.98 410.89 313.98 406.2 275.73 462.51 275.73 467.2 313.98"
                                style="fill: rgb(199, 199, 199); transform-origin: 436.7px 294.855px 0px;"
                                id="elvuddfes361l" class="animable"></polygon>
                            <path
                                d="M440.13,294.85a3.36,3.36,0,0,1-3.37,3.43,3.51,3.51,0,0,1-3.49-3.43,3.36,3.36,0,0,1,3.37-3.42A3.51,3.51,0,0,1,440.13,294.85Z"
                                style="fill: rgb(255, 255, 255); transform-origin: 436.7px 294.855px 0px;"
                                id="el10cbd3xlgii" class="animable"></path>
                            <path
                                d="M406.66,279.43c-2.12,3.28-7.36,7.11-8.08,9.92a3.31,3.31,0,0,0,1.37,3.72s-3,1.05-3.27,3.71c-.12,1.37,2,2.76,2,2.76a4,4,0,0,0-2.46,3.32c-.05,1.89,2,3,2,3s-1.88,2-1.31,3.93c1.16,3.94,17.28,6.07,20.55.46,1.53-2.61-2.44-2.92-2.44-2.92s5.81-.94,6.33-4.25-4.65-3.4-4.65-3.4,5.62-.95,5.82-4.44-5-2.83-5-2.83,3.91-2,3.45-4.66c-.76-4.47-10,.28-13.39-1Z"
                                style="fill: rgb(255, 196, 192); transform-origin: 409.372px 296.548px 0px;"
                                id="elcsq6xd99cpj" class="animable"></path>
                            <path
                                d="M398.53,306.09c-.06,0-.08.06,0,.08a28.19,28.19,0,0,0,16.74,1.2c.17,0,.17-.35,0-.33A58,58,0,0,1,398.53,306.09Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 406.937px 307.103px 0px;"
                                id="elj4xgpigbq2g" class="animable"></path>
                            <path
                                d="M398.56,299.56a.06.06,0,0,0,0,.11,26.37,26.37,0,0,0,18.34.18c.21-.08.31-.35.07-.28C412.84,300.83,403.69,300.69,398.56,299.56Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 407.817px 300.483px 0px;"
                                id="el0led1141ta1o" class="animable"></path>
                            <path
                                d="M417.92,292.1c-5.83,2-11.72,2-17.76,1.07-.08,0-.09.1,0,.13,2.83,1.25,6.74,1.43,9.8,1.31A16.3,16.3,0,0,0,418,292.3C418.08,292.24,418,292.06,417.92,292.1Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 409.065px 293.368px 0px;"
                                id="elwfx8ijd39to" class="animable"></path>
                            <path
                                d="M476.56,325.38s64.55,9.8,64.87,9.39-9.18-69.57-31.33-80.64c-3.51-1.76-11.88-2.6-15.33,1.14C484.94,265.93,475.69,324.47,476.56,325.38Z"
                                style="fill: rgb(69, 90, 100); transform-origin: 508.97px 293.709px 0px;"
                                id="el4u508og4ka3" class="animable"></path>
                            <path
                                d="M477.06,319.61l63.54,8.92c-.29-1.9-.68-4.17-1.15-6.72L478,313.18C477.63,315.62,477.31,317.79,477.06,319.61Z"
                                style="fill: rgb(55, 71, 79); transform-origin: 508.83px 320.855px 0px;" id="elu2ok7v1epo"
                                class="animable"></path>
                            <path
                                d="M478.61,309.77l60.16,8.46c-.22-1.13-.45-2.3-.71-3.5l-58.87-8.27C479,307.59,478.79,308.7,478.61,309.77Z"
                                style="fill: rgb(55, 71, 79); transform-origin: 508.69px 312.345px 0px;"
                                id="el6k4griodapi" class="animable"></path>
                            <path
                                d="M497.29,267.65c3.58.15,8.46-6.21,10-10.9.1-.32-.93-3.3-2-7-.65-2.24-1.32-4.74-1.77-7.07l-13.93,6.35a38.08,38.08,0,0,1,3.13,8.68,5.51,5.51,0,0,1,.08,1,.92.92,0,0,0,0,.16C492.81,260.74,493.83,267.5,497.29,267.65Z"
                                style="fill: rgb(255, 196, 192); transform-origin: 498.443px 255.166px 0px;"
                                id="el2mmg3gyexqt" class="animable"></path>
                            <path
                                d="M489.53,249.05a37.57,37.57,0,0,1,3.13,8.68,4.74,4.74,0,0,1,.09,1,.92.92,0,0,0,0,.16,7.28,7.28,0,0,0,1.52-.21c8.46-1.82,8.84-12.81,8.79-15.77Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 496.297px 250.9px 0px;" id="elrwyh9qr8ope"
                                class="animable"></path>
                            <path
                                d="M502.05,223.8c2.58,4.88,2.75,20.37-.29,24.42-4.4,5.88-13.06,8-18.41,2.41-5.19-5.45-5.05-25.65-1.52-29.48C487,215.51,498.23,216.6,502.05,223.8Z"
                                style="fill: rgb(255, 196, 192); transform-origin: 491.656px 235.724px 0px;"
                                id="els2bojgenhir" class="animable"></path>
                            <path
                                d="M488.9,236s.08.05.07.09c0,1,.09,2.23,1,2.58,0,0,0,.07,0,.06C488.84,238.6,488.69,237,488.9,236Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 489.395px 237.365px 0px;"
                                id="eliiwxmhj5q5" class="animable"></path>
                            <path d="M489.83,235c1.67-.11,1.77,3.23.22,3.33S488.43,235.06,489.83,235Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 489.991px 236.665px 0px;"
                                id="el2x6t04yawfd" class="animable"></path>
                            <path
                                d="M482.81,236.2s-.08.05-.08.1c.07,1,0,2.23-1,2.6a0,0,0,0,0,0,.06C482.92,238.76,483,237.17,482.81,236.2Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 482.309px 237.58px 0px;"
                                id="elhxg8ch4zdee" class="animable"></path>
                            <path d="M481.85,235.15c-1.67-.08-1.7,3.27-.15,3.34S483.25,235.21,481.85,235.15Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 481.724px 236.82px 0px;" id="el6h5o0ptg6i"
                                class="animable"></path>
                            <path
                                d="M491.11,233.4a11.75,11.75,0,0,1-1.31-.42,2.24,2.24,0,0,1-1.25-.68.71.71,0,0,1,.09-.86,1.73,1.73,0,0,1,1.76-.23,2.59,2.59,0,0,1,1.52,1.07A.76.76,0,0,1,491.11,233.4Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 490.232px 232.241px 0px;"
                                id="el1fl29lwcq58" class="animable"></path>
                            <path
                                d="M480.51,233.5c.46-.09.87-.25,1.32-.38a2.17,2.17,0,0,0,1.27-.65.71.71,0,0,0-.06-.86,1.76,1.76,0,0,0-1.76-.28,2.59,2.59,0,0,0-1.55,1A.76.76,0,0,0,480.51,233.5Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 481.409px 232.362px 0px;"
                                id="elwce6pg2pbad" class="animable"></path>
                            <path
                                d="M490.26,245.16c-.19.29-.36.67-.72.79a2.74,2.74,0,0,1-1.14,0s-.06,0,0,.06a1.4,1.4,0,0,0,1.41.26,1.09,1.09,0,0,0,.59-1.08C490.37,245.12,490.28,245.12,490.26,245.16Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 489.389px 245.745px 0px;"
                                id="elatum89hz8t7" class="animable"></path>
                            <path
                                d="M488.87,242.22a3.57,3.57,0,0,1-2.31,1.64,4.51,4.51,0,0,1-1.27.09,3.75,3.75,0,0,1-.47,0,.27.27,0,0,1-.22-.22h0s0-2.22,0-2.22c-.29.16-1.76.87-1.75.45a53.83,53.83,0,0,1,1.06-10.72c0-.11.2-.09.19,0,0,3.33-.52,6.64-.55,10a6.27,6.27,0,0,1,1.65-.55c.07,0-.07,2.72-.06,2.74a4.91,4.91,0,0,0,3.62-1.24C488.84,242.07,488.93,242.14,488.87,242.22Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 485.87px 237.563px 0px;"
                                id="elurot26p1g9h" class="animable"></path>
                            <path
                                d="M485.61,243.77a4.4,4.4,0,0,0,1.86,1.22,2,2,0,0,0,1.21,0c.85-.3.81-1.1.59-1.77a4.55,4.55,0,0,0-.47-1A5.65,5.65,0,0,1,485.61,243.77Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 487.507px 243.652px 0px;"
                                id="elxhmwj3g9gld" class="animable"></path>
                            <path d="M487.47,245a2,2,0,0,0,1.21,0c.85-.3.81-1.1.59-1.77A2.06,2.06,0,0,0,487.47,245Z"
                                style="fill: rgb(255, 156, 189); transform-origin: 488.437px 244.162px 0px;"
                                id="elldwzsi72elq" class="animable"></path>
                            <path
                                d="M479.77,226.84c.52-1.39,1.14-2.78,1.94-3.09s1.43,1.66,3.3,1.7c2.51.05,3.62-2.31,7.12-2.71,5-.58,7.43,3.52,7.88,10.67.41,6.38,4.29,6.8,4.29,6.8S506,226,501.81,221.54s-13.39-6.12-19.3-1.39C480.36,221.88,479.77,226.84,479.77,226.84Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 492.206px 228.758px 0px;"
                                id="elmfhwmrceqy" class="animable"></path>
                            <path d="M500.79,237.64s2.56-5.44,5-4.62,1.08,8.32-1.34,9.73a2.67,2.67,0,0,1-3.77-.81Z"
                                style="fill: rgb(255, 196, 192); transform-origin: 503.878px 238.072px 0px;"
                                id="elcrqo2tge13e" class="animable"></path>
                            <path
                                d="M505.33,235.16s.06.05,0,.07c-1.68,1.05-2.35,2.89-2.71,4.75a1.47,1.47,0,0,1,2.1-.77.06.06,0,0,1,0,.11,1.65,1.65,0,0,0-1.69.87,8,8,0,0,0-.6,1.59c-.06.17-.36.14-.33-.06v0C501.65,239.37,502.88,235.82,505.33,235.16Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 503.683px 238.525px 0px;"
                                id="el6zcfqbtjuhe" class="animable"></path>
                            <path
                                d="M486.56,217.59a22.61,22.61,0,0,1,6.08-2.52c2.39-.55,10.11-.75,12.11.6s3.22,8.51,3.38,9.56.34,7.48-1.82,9.26-3.48-9-7.5-12.26S486.56,217.59,486.56,217.59Z"
                                style="fill: rgb(166, 166, 166); transform-origin: 497.389px 224.668px 0px;"
                                id="eleow2r0nfra" class="animable"></path>
                            <g id="elmj4ubct8xgs">
                                <path
                                    d="M486.56,217.59s8.23,1.42,12.25,4.64,5.35,14,7.51,12.26c.94-.78,1.34-1.84,1.58-3.58-.81-3.12-2.6-7.9-5.59-11-2.8-2.94-7.22-4.11-11.82-4.16A25.72,25.72,0,0,0,486.56,217.59Z"
                                    style="opacity: 0.1; transform-origin: 497.23px 225.214px 0px;" class="animable">
                                </path>
                            </g>
                            <path
                                d="M506.34,241c-.5-2.87-4.23-10.3-7.77-14.42s-12.86-5.77-14.12-5.57c-3.05.49-3.58,2-4.09,1.81s2.2-4,3-4.64a9.89,9.89,0,0,1,4.14-1.5c1.34-.11,9.67-.14,13,3.07s8.61,12.62,8.09,15.22c-.12.63-.89,1.1-1.05,2-.23,1.16-.33,2.49-.59,3.31C506.77,240.92,506.39,241.24,506.34,241Z"
                                style="fill: rgb(166, 166, 166); transform-origin: 494.461px 228.863px 0px;"
                                id="ely5vni1ii9qm" class="animable"></path>
                            <path
                                d="M497.66,224.66a15.41,15.41,0,0,0,1.85-1.67,11.34,11.34,0,0,0,1.52-2,0,0,0,0,1,.09,0,8.2,8.2,0,0,1-1.35,2.21,6.75,6.75,0,0,1-2,1.57C497.66,224.84,497.59,224.71,497.66,224.66Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 499.376px 222.89px 0px;"
                                id="eljctlzwlvakp" class="animable"></path>
                            <path
                                d="M506.08,238.1a5.5,5.5,0,0,1,.25-.63,3.67,3.67,0,0,0,.2-.74,6.29,6.29,0,0,1,.18-1.43,5,5,0,0,1,.58-1,2,2,0,0,0,.45-1.24c0-.06.09-.07.09,0a4.85,4.85,0,0,1-.74,2.34,9.69,9.69,0,0,0-.24,1.54,2.21,2.21,0,0,1-.64,1.28S506.05,238.18,506.08,238.1Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 506.953px 235.616px 0px;"
                                id="elu7whh84z0im" class="animable"></path>
                            <path
                                d="M504.76,235.08c.24-.36.5-.68.71-1.06a9.81,9.81,0,0,0,.51-1.15c.14-.38.26-.78.39-1.17s.38-.9.52-1.36c0-.06.11,0,.09,0-.14.49-.21,1-.33,1.48a10.68,10.68,0,0,1-.43,1.24,6.5,6.5,0,0,1-.58,1.11,3.36,3.36,0,0,1-.84.92S504.74,235.11,504.76,235.08Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 505.869px 232.705px 0px;"
                                id="el2zkn4jk11yw" class="animable"></path>
                            <path
                                d="M503.42,232.36a8.32,8.32,0,0,0,1.39-1.93c.35-.7.66-1.41,1-2.13a0,0,0,0,1,.09,0,10.29,10.29,0,0,1-.77,2.29,5.41,5.41,0,0,1-.64,1,5.52,5.52,0,0,1-1,.83A.05.05,0,0,1,503.42,232.36Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 504.659px 230.363px 0px;"
                                id="elmzsvaxrafdm" class="animable"></path>
                            <path
                                d="M502,229.78a2.93,2.93,0,0,0,.68-.85c.22-.35.43-.71.63-1.07s.38-.69.57-1a2.81,2.81,0,0,0,.41-1.12.05.05,0,0,1,.1,0,2.93,2.93,0,0,1-.22,1.17,7.49,7.49,0,0,1-.54,1.19,8.79,8.79,0,0,1-.7,1.09,1.87,1.87,0,0,1-.87.73A.06.06,0,0,1,502,229.78Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 503.172px 227.808px 0px;"
                                id="elyohaidgcwbf" class="animable"></path>
                            <path
                                d="M500.82,226.43c.24-.29.48-.58.7-.88s.41-.63.61-1,.42-.67.6-1a0,0,0,0,1,.09,0,7.44,7.44,0,0,1-.42,1.11,9.12,9.12,0,0,1-.6,1,8.89,8.89,0,0,1-.71.91,3,3,0,0,1-.87.76c-.05,0-.12,0-.09-.09A5.35,5.35,0,0,1,500.82,226.43Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 501.471px 225.44px 0px;"
                                id="eluexev7ww36i" class="animable"></path>
                            <path
                                d="M495.28,223.24c.24-.38.49-.76.77-1.12a13,13,0,0,1,.93-1,12,12,0,0,1,2.09-1.74s.1,0,.06.07c-1.24,1.31-2.54,2.57-3.78,3.89C495.31,223.35,495.24,223.3,495.28,223.24Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 497.204px 221.361px 0px;"
                                id="elpm742lo2c6m" class="animable"></path>
                            <path
                                d="M493.27,221a5.83,5.83,0,0,1,.89-1,13,13,0,0,1,2.33-1.63c.06,0,.11,0,.06.07-.7.58-1.4,1.14-2.07,1.76a10.54,10.54,0,0,0-.94.95c-.3.34-.51.73-.79,1.08a0,0,0,0,1-.06,0A3.47,3.47,0,0,1,493.27,221Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 494.63px 220.3px 0px;" id="elweqlsyzg20m"
                                class="animable"></path>
                            <path
                                d="M490.75,220.06a7,7,0,0,1,2.8-2.47c.05,0,.09,0,0,.08a15.07,15.07,0,0,0-1.84,1.65c-.28.3-.55.61-.82.93a12.37,12.37,0,0,1-.79,1s-.06,0-.05,0A7.47,7.47,0,0,1,490.75,220.06Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 491.826px 219.42px 0px;"
                                id="elts4hb1prw8g" class="animable"></path>
                            <path
                                d="M488.87,218.8c.28-.28.57-.54.86-.8a3.71,3.71,0,0,1,.95-.67c.05,0,.08,0,0,.09-.54.53-1.07,1.07-1.6,1.61a10.63,10.63,0,0,0-1.19,1.73,0,0,0,0,1-.06,0A3.71,3.71,0,0,1,488.87,218.8Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 489.28px 219.045px 0px;" id="eloijqo03ki1"
                                class="animable"></path>
                            <path
                                d="M486.65,218.56a6.2,6.2,0,0,1,1.81-1.4s.09.06,0,.08a7.4,7.4,0,0,0-1.61,1.5,9.89,9.89,0,0,0-1.21,1.86,0,0,0,0,1-.07,0A5.06,5.06,0,0,1,486.65,218.56Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 487.035px 218.88px 0px;"
                                id="el41syfwipy4h" class="animable"></path>
                            <path
                                d="M483.94,220.15a4,4,0,0,1,.21-.47,4.8,4.8,0,0,1,.56-.85,10.2,10.2,0,0,1,1.51-1.43s.11,0,.06.08a8,8,0,0,0-1.4,1.45,5.62,5.62,0,0,0-.54.83c-.08.14-.15.29-.22.44a2.11,2.11,0,0,1-.2.43s-.08,0-.08,0A1.46,1.46,0,0,1,483.94,220.15Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 485.067px 219.015px 0px;"
                                id="elaqach2morj" class="animable"></path>
                            <path
                                d="M482.22,220.48a5.7,5.7,0,0,1,.47-.7,4.69,4.69,0,0,1,.54-.64c.2-.21.4-.41.59-.62s.12,0,.07.06a7,7,0,0,0-.55.67l-.48.66-.47.66c-.16.23-.3.48-.48.69a0,0,0,0,1-.07,0A4,4,0,0,1,482.22,220.48Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 482.893px 219.844px 0px;"
                                id="el57yup38rit" class="animable"></path>
                            <path
                                d="M492.23,261.23a0,0,0,0,1,0,0c0,2.93.2,9.7,4.75,9a9.74,9.74,0,0,0,4.76-2.75,25.81,25.81,0,0,0,3.63-4.18,38.45,38.45,0,0,0,3.29-5.28c0-.08.16,0,.12.07-1,1.85-1.76,3.76-2.91,5.52a22.43,22.43,0,0,1-3.91,4.61,9.6,9.6,0,0,1-5.08,2.72A3.7,3.7,0,0,1,493,268.4,16.43,16.43,0,0,1,492.23,261.23Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 500.455px 264.472px 0px;"
                                id="elh8yg4hnvjv8" class="animable"></path>
                            <path
                                d="M518.35,269.05c4.38,24.84.15,43.44-4.07,45.74-11.36,6.21-38.63-6.37-46.33-8.87-3.11-1,11.07-24.8,14.24-23.33,7.48,3.45,18,9.32,18.38,9.28.84-.09,1.83-6.43,6.17-24.9C510.25,252,516.56,258.89,518.35,269.05Z"
                                style="fill: rgb(255, 196, 192); transform-origin: 493.854px 287.396px 0px;"
                                id="elo4tx4ttfmoj" class="animable"></path>
                            <path
                                d="M443.16,270.82c-.78,3.12,7.07,4.39,7.07,4.39a5.93,5.93,0,0,0-3.11,2.57c-1.14,2.16,1.74,4.9,1.74,4.9a7.33,7.33,0,0,0-2.85,3.23c-.88,2.18,1.64,5.36,1.64,5.36a6.35,6.35,0,0,0-.72,4.42c1,4,7.1,5.58,10.71,7.31,3.86,1.85,10.26,2.53,13.16,3.83l12.58-23S471.23,270.94,464.3,269C460.45,267.84,444.35,266.05,443.16,270.82Z"
                                style="fill: rgb(255, 196, 192); transform-origin: 463.243px 287.258px 0px;"
                                id="elgv4offmvke9" class="animable"></path>
                            <path
                                d="M450.32,275.14a53.49,53.49,0,0,1,13,1.53c.09,0,.06.17,0,.15-4.21-.92-8.77-.73-13-1.48A.1.1,0,0,1,450.32,275.14Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 456.799px 275.98px 0px;"
                                id="el1393s93nwsam" class="animable"></path>
                            <path
                                d="M449.05,282.39a11.38,11.38,0,0,1,2.94.54c1,.27,2,.55,3.05.85q3,.89,6,1.94c.09,0,.06.17,0,.15-2-.6-4.06-1.16-6.11-1.66-1-.25-2.05-.5-3.08-.73a14.15,14.15,0,0,1-2.88-.81A.15.15,0,0,1,449.05,282.39Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 454.996px 284.131px 0px;"
                                id="elpet9rafhm8h" class="animable"></path>
                            <path
                                d="M447.73,291.29a8.1,8.1,0,0,1,2.62.63l2.76.86c1.84.56,3.69,1.12,5.55,1.62a.07.07,0,1,1,0,.14c-1.89-.49-3.8-1-5.69-1.47l-2.78-.77a7.31,7.31,0,0,1-2.46-.92A.05.05,0,0,1,447.73,291.29Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 453.216px 292.915px 0px;"
                                id="elptd836qfx7m" class="animable"></path>
                            <path
                                d="M500.57,291.87c-3.12-1.45-6.19-3-9.28-4.48l-4.6-2.29L484.38,284c-.76-.35-1.58-.78-2.27-1l-.12,0-.05-.06c-2-2-4-3.92-6.07-5.86-1-1-2.08-1.9-3.14-2.82a28.71,28.71,0,0,0-3.32-2.59A24.3,24.3,0,0,1,473,273.9c1.12.86,2.2,1.76,3.28,2.68,2.15,1.83,4.19,3.79,6.22,5.75l-.18-.09a19.51,19.51,0,0,1,2.43,1.07l2.3,1.16,4.58,2.38C494.6,288.48,497.61,290.12,500.57,291.87Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 484.99px 281.77px 0px;" id="el9luugg2u25"
                                class="animable"></path>
                            <path
                                d="M484.32,282.05l-13.68,28s37,15.11,44.09,6.91,6.84-35.64,3.52-50.66-10.63-7.73-12.27.56-4.67,24.13-5.41,23.94S484.32,282.05,484.32,282.05Z"
                                style="fill: rgb(69, 90, 100); transform-origin: 495.566px 288.5px 0px;" id="ell3puctrcl1"
                                class="animable"></path>
                            <path
                                d="M488.24,287.14c-2,3.6-3.95,7.21-5.74,10.92-.9,1.85-1.76,3.72-2.6,5.59s-1.48,3.85-2.34,5.7a.09.09,0,1,0,.16.07c.76-1.9,1.79-3.71,2.66-5.57s1.74-3.72,2.63-5.58c1.77-3.7,3.54-7.41,5.4-11.07C488.46,287.1,488.3,287,488.24,287.14Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 482.98px 298.283px 0px;" id="elvbc0dt2it2"
                                class="animable"></path>
                            <path
                                d="M483.76,283.19c.16-.4.3-.8.47-1.19l0-.09.1,0c2,.92,4,1.93,6,2.92s3.94,2.06,5.89,3.13,3.89,2.16,5.8,3.31,3.82,2.29,5.68,3.53c-2-.89-4-1.87-6-2.87s-4-2-5.92-3.09-3.9-2.16-5.82-3.27-3.84-2.27-5.71-3.48l.14-.05C484.2,282.46,484,282.82,483.76,283.19Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 495.73px 288.355px 0px;"
                                id="el0e2op8vd12oq" class="animable"></path>
                            <path
                                d="M504.7,273.31a59.13,59.13,0,0,1-1.26,8.92c-.32,1.47-.67,2.93-1.11,4.38a14.13,14.13,0,0,1-1.76,4.16,10.68,10.68,0,0,0,.58-2.15l.43-2.2c.27-1.47.58-2.93.88-4.39C503.1,279.1,503.77,276.19,504.7,273.31Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 502.635px 282.04px 0px;" id="eli4gh1jy0j9"
                                class="animable"></path>
                            <path
                                d="M503.06,274.52c.09.86.12,1.7.19,2.53,0,.42.07.84.09,1.25s.1.84.15,1.27a5.19,5.19,0,0,1-.74-2.48A6.59,6.59,0,0,1,503.06,274.52Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 503.11px 277.045px 0px;" id="elv1i2d6h5ko"
                                class="animable"></path>
                            <path
                                d="M520,278.51a103.16,103.16,0,0,1,.65,10.54,95.77,95.77,0,0,1-.4,10.57A52.13,52.13,0,0,1,518.35,310a23.56,23.56,0,0,1-2.12,4.89,8.47,8.47,0,0,1-3.84,3.58,8.72,8.72,0,0,0,3.42-3.82,23,23,0,0,0,1.8-4.86,51.92,51.92,0,0,0,1-5.11c.28-1.72.49-3.46.65-5.2.34-3.48.5-7,.62-10.48.06-1.75.09-3.5.1-5.26S520,280.27,520,278.51Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 516.527px 298.49px 0px;"
                                id="el08taxgaqvtbw" class="animable"></path>
                            <path
                                d="M520.81,280.73a4.82,4.82,0,0,1,.09,1.85,4.17,4.17,0,0,1-.64,1.75,13.42,13.42,0,0,1,.14-1.82A9,9,0,0,1,520.81,280.73Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 520.605px 282.53px 0px;"
                                id="elqo8mhsqq9wh" class="animable"></path>
                            <path
                                d="M307.69,402c.88,2.1,41.54,48.46,44.21,49.25,1,.3,8.1-5.23,16.49-12.15,1.81-1.49,3.67-3,5.55-4.64,12.23-10.3,25-21.52,25-21.52l-27.11-31.09-24.21,22.38-5.32,4.91s-23.5-10.79-26.52-11.34S306.82,399.9,307.69,402Z"
                                style="fill: rgb(255, 196, 192); transform-origin: 353.272px 416.556px 0px;"
                                id="ell59cdgcyxs" class="animable"></path>
                            <path
                                d="M307.69,402c.88,2.1,41.54,48.46,44.21,49.25,1.23.36,11.45-7.87,22-16.79l-26.36-30.23-5.32,4.91s-23.5-10.79-26.52-11.34S306.82,399.9,307.69,402Z"
                                style="fill: rgb(255, 255, 255); transform-origin: 340.751px 424.494px 0px;"
                                id="el7dfc5wq5eb" class="animable"></path>
                            <path
                                d="M307.69,402c.88,2.1,41.54,48.46,44.21,49.25,1,.3,8.1-5.23,16.49-12.15l-26.13-30s-23.5-10.79-26.52-11.34S306.82,399.9,307.69,402Z"
                                style="fill: rgb(55, 71, 79); transform-origin: 337.997px 424.475px 0px;"
                                id="eles1c5s2p0no" class="animable"></path>
                            <path
                                d="M310.13,401c7,7.61,34.55,38.94,40.9,47,.05.06,0,.1,0,0-7.11-7.39-34.4-38.94-41-46.92C309.87,401,310,400.87,310.13,401Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 330.504px 424.503px 0px;"
                                id="eld2pv5vh1bj" class="animable"></path>
                            <path
                                d="M320,399.31a8.25,8.25,0,0,1,2.18,6.31,8,8,0,0,1-2.62,5.38c-.05,0-.13-.05-.08-.1a9.61,9.61,0,0,0,.43-11.51C319.88,399.33,320,399.25,320,399.31Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 320.837px 405.144px 0px;"
                                id="elnau8hru8tf" class="animable"></path>
                            <path
                                d="M338.85,406.79c2.77,3.07,4.83,7.64,4,11.81,0,.16-.27.11-.3,0a57.57,57.57,0,0,0-4.12-11.5A.26.26,0,0,1,338.85,406.79Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 340.707px 412.693px 0px;"
                                id="elskzo0ku36p" class="animable"></path>
                            <path
                                d="M335.81,405.21c2.77,3.07,4.83,7.64,4,11.81,0,.16-.26.11-.29,0a57.57,57.57,0,0,0-4.12-11.5A.26.26,0,0,1,335.81,405.21Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 337.682px 411.129px 0px;"
                                id="elyevrq68194s" class="animable"></path>
                            <path
                                d="M332.76,403.63c2.78,3.07,4.84,7.64,4,11.8,0,.17-.26.12-.29,0a57,57,0,0,0-4.13-11.5A.26.26,0,0,1,332.76,403.63Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 334.629px 409.543px 0px;"
                                id="elpj7ofmg7f5q" class="animable"></path>
                            <path
                                d="M329.72,402.05c2.77,3.07,4.84,7.64,4,11.8,0,.17-.26.12-.3,0a57,57,0,0,0-4.12-11.5A.26.26,0,0,1,329.72,402.05Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 331.589px 407.963px 0px;"
                                id="el81rt04pdpnl" class="animable"></path>
                            <path d="M356.67,439.56c3.05,3.5-2.38,8.25-5.44,4.74S353.61,436.06,356.67,439.56Z"
                                style="fill: rgb(255, 255, 255); transform-origin: 353.948px 441.931px 0px;"
                                id="eljp66zzi3ii" class="animable"></path>
                            <path
                                d="M339.86,400.4c-.7,3.57.18,7.33.59,10.88a.51.51,0,0,0,.75.34.1.1,0,0,0,.17,0,21.69,21.69,0,0,0,5.48-9.8c.5-2.16,0-5.26-2.65-5.69C341.66,395.74,340.26,398.31,339.86,400.4Zm2.45-2.41c3.65-2.66,3.73,2.68,3.3,4.25a23.59,23.59,0,0,1-1.1,3,62.86,62.86,0,0,1-3.08,5.79c-.09-1.76-.33-3.49-.49-5.25C340.75,403.67,340.29,399.46,342.31,398Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 343.31px 403.888px 0px;" id="elzagxdtv4ro"
                                class="animable"></path>
                            <path
                                d="M353,421c1.82-2,.23-4.73-1.53-6.09a21.72,21.72,0,0,0-10.42-4.17.11.11,0,0,0-.12.13.5.5,0,0,0-.37.73c1.92,3,3.6,6.49,6.39,8.83C348.62,421.75,351.32,422.86,353,421Zm-8.59-5.42c-1-1.46-1.88-3-2.92-4.39a65.54,65.54,0,0,1,6,2.57,24.21,24.21,0,0,1,2.73,1.62c1.33.95,4.63,5.14.11,5.38C347.92,420.84,345.62,417.28,344.45,415.53Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 347.154px 416.362px 0px;"
                                id="elgyy0oc0b0i" class="animable"></path>
                            <path
                                d="M348.72,399.31l28.32,35,87.72-66.56,8.46-6.42s2.54,1.55,6.34,3.45c5.28,2.63,13,5.92,19.73,6.62,11.29,1.19,28.2.29,37.12-12.76,7.51-11,4.41-24.77,4.41-24.77l-12.55-4.77s-30.18-23.05-49.1-23c-8,0-19.46,6.6-30,13.41S348.72,399.31,348.72,399.31Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 445.087px 370.205px 0px;"
                                id="ely55n8pb32vl" class="animable"></path>
                            <path d="M473.22,361.33s2.54,1.55,6.34,3.45c6.23-8.14,19.53-23,19.93-23.54Z"
                                style="fill: rgb(55, 71, 79); transform-origin: 486.355px 353.01px 0px;"
                                id="elarndyf9wwd6" class="animable"></path>
                            <path
                                d="M517.25,321.42c1.79,1.14,3.53,2.35,5.3,3.52s3.54,2.23,5.21,3.49,3.3,2.67,4.9,4.07c.77.67,1.54,1.35,2.29,2.05a21.66,21.66,0,0,1,2.2,2.19c.06.08,0,.17-.13.13a24.74,24.74,0,0,1-2.41-1.8c-.85-.65-1.68-1.32-2.53-2-1.62-1.27-3.27-2.49-4.89-3.76s-3.11-2.66-4.71-3.94-3.5-2.63-5.27-3.92C517.18,321.46,517.21,321.4,517.25,321.42Z"
                                style="fill: rgb(55, 71, 79); transform-origin: 527.186px 329.148px 0px;"
                                id="el3d72go6nyeh" class="animable"></path>
                            <path
                                d="M355,397.74c1.82,1.8,3.52,3.75,5.22,5.67s3.42,3.84,5.11,5.78c3.38,3.88,6.79,7.73,10.12,11.66,1.83,2.15,3.63,4.32,5.35,6.57.07.1-.09.23-.17.14-3.62-3.65-6.95-7.57-10.33-11.45s-6.75-7.77-10.08-11.7c-1.81-2.15-3.69-4.29-5.37-6.55C354.73,397.77,354.88,397.66,355,397.74Z"
                                style="fill: rgb(55, 71, 79); transform-origin: 367.812px 412.651px 0px;"
                                id="ele46jkcrxukr" class="animable"></path>
                            <path
                                d="M423.74,398.77c4.34-3.74,14.27-11.09,18.79-14.61s9-7,13.57-10.43c1.31-1,2.64-1.94,4-2.9s2.7-1.86,4-2.85c.08-.06.15.07.08.12-1.18.93-2.3,2-3.46,2.93s-2.21,1.84-3.33,2.75c-2.19,1.77-4.4,3.5-6.61,5.25q-6.71,5.3-13.55,10.45c-2.59,1.94-10.58,7.7-13.23,9.56C423.79,399.15,423.59,398.9,423.74,398.77Z"
                                style="fill: rgb(55, 71, 79); transform-origin: 443.948px 383.516px 0px;"
                                id="elri1x99vtu8" class="animable"></path>
                            <path
                                d="M393.79,362.64c4-3.63,13.2-10.65,17.42-14s8.51-6.84,12.8-10.23l12.76-10.07c4.12-3.26,8.22-6.56,12.6-9.48,2.4-1.59,4.86-3.08,7.4-4.43a48.56,48.56,0,0,1,7.69-3.53.07.07,0,0,1,.06.13c-2.17,1.33-4.45,2.47-6.64,3.76s-4.29,2.61-6.38,4c-4.35,2.89-8.43,6.14-12.53,9.37-8.52,6.69-17,13.41-25.6,20-4.8,3.7-14.37,11.32-19.37,14.75C393.84,363,393.65,362.76,393.79,362.64Z"
                                style="fill: rgb(55, 71, 79); transform-origin: 429.151px 336.912px 0px;"
                                id="el6xrmbxro96s" class="animable"></path>
                        </g>
                        <g id="freepik--character-1--inject-16" style="transform-origin: 142.74px 197.771px 0px;"
                            class="animable">
                            <path
                                d="M49.14,215c.68-2.06,37.24-50.37,39.74-51.3.28-.12,16.63,11.51,16.63,11.51.67.9,31.74-5.67,31.74-5.67l.31,37.48L81,205.81S73.32,210.3,66.33,214h0a86.5,86.5,0,0,1-9.19,4.47C54.28,219.15,48.44,217.05,49.14,215Z"
                                style="fill: rgb(255, 196, 192); transform-origin: 93.3211px 191.15px 0px;"
                                id="elpxs7uc9ughq" class="animable"></path>
                            <path
                                d="M57.11,218.43A83.53,83.53,0,0,0,66.3,214h0c7-3.66,14.63-8.16,14.63-8.16l12.6.27,19.71-31.81c-4.32.76-7.55,1.22-7.77.94,0,0-16.33-11.64-16.62-11.51-2.5.93-39.06,49.24-39.74,51.3S54.27,219.16,57.11,218.43Z"
                                style="fill: rgb(255, 255, 255); transform-origin: 81.1477px 191.154px 0px;"
                                id="eldxtjh7f8anv" class="animable"></path>
                            <path
                                d="M48.8,215.06c.72-2.12,37.45-50.4,40-51.36,1-.36,9,4.57,16.7,11.5L81.79,206.3S59.91,217.89,57,218.63,48.08,217.17,48.8,215.06Z"
                                style="fill: rgb(166, 166, 166); transform-origin: 77.1203px 191.229px 0px;"
                                id="el5auipjlotbj" class="animable"></path>
                            <path
                                d="M51.26,215.83c6.35-7.94,31.24-40.57,36.92-48.91,0-.06,0-.1-.05,0-6.48,7.73-31.09,40.56-37,48.84C51,215.91,51.12,216,51.26,215.83Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 69.6271px 191.391px 0px;"
                                id="eliotkztj8z9" class="animable"></path>
                            <path
                                d="M61.08,216.85a8.16,8.16,0,0,0,1.71-6.35,7.89,7.89,0,0,0-2.94-5.09c-.05,0-.12.05-.08.1A9.42,9.42,0,0,1,61,216.77C60.94,216.84,61,216.91,61.08,216.85Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 61.3209px 211.141px 0px;"
                                id="elp9f88e5w4hm" class="animable"></path>
                            <path
                                d="M79.05,208.22c2.51-3.21,4.22-7.83,3.1-11.86,0-.16-.26-.09-.29,0A56.06,56.06,0,0,1,78.61,208,.26.26,0,0,0,79.05,208.22Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 80.5539px 202.28px 0px;" id="elqqfhr4isns"
                                class="animable"></path>
                            <path
                                d="M76.17,210c2.51-3.21,4.22-7.83,3.1-11.86,0-.16-.26-.09-.28,0a56.08,56.08,0,0,1-3.26,11.57A.26.26,0,0,0,76.17,210Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 77.6533px 204.082px 0px;"
                                id="elj6ij4sf4ld" class="animable"></path>
                            <path
                                d="M73.29,211.74c2.51-3.21,4.23-7.83,3.11-11.86-.05-.16-.27-.09-.29,0a56.26,56.26,0,0,1-3.26,11.57A.26.26,0,0,0,73.29,211.74Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 74.7777px 205.822px 0px;"
                                id="el0kc33iyv3w1e" class="animable"></path>
                            <path
                                d="M70.42,213.5c2.5-3.21,4.22-7.84,3.1-11.86,0-.16-.26-.1-.29,0A56.44,56.44,0,0,1,70,213.25.26.26,0,0,0,70.42,213.5Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 71.9322px 207.55px 0px;" id="eljd52enofqh"
                                class="animable"></path>
                            <path d="M94.3,174.83c2.75-3.64-2.91-7.93-5.67-4.28S91.54,178.48,94.3,174.83Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 91.4632px 172.691px 0px;"
                                id="elmyfpxlk2zjo" class="animable"></path>
                            <path
                                d="M85,218.29c2.6-.6,2.85-3.68,2.2-5.76a21.32,21.32,0,0,0-6-9.25.12.12,0,0,0-.17,0,.5.5,0,0,0-.7.39c-.16,3.52-.77,7.26.16,10.72C81,216.45,82.56,218.87,85,218.29Zm-3.86-9.21c0-1.73.15-3.45.13-5.18a64.09,64.09,0,0,1,3.41,5.47A22.75,22.75,0,0,1,86,212.22c.54,1.51.83,6.75-2.94,4.4C81,215.31,81.12,211.15,81.17,209.08Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 83.7443px 210.807px 0px;"
                                id="elyssbf6kdy2" class="animable"></path>
                            <path
                                d="M86.11,194.32c-2.58,2.49-4,6-5.67,9.11a.5.5,0,0,0,.41.69.11.11,0,0,0,.13.12,21.43,21.43,0,0,0,10-4.81c1.62-1.46,3-4.22,1.08-6.08S87.62,192.87,86.11,194.32Zm3.33-.55c4.45-.08,1.5,4.26.26,5.29a23.9,23.9,0,0,1-2.57,1.77c-1.84,1.14-3.81,2-5.74,2.94.91-1.48,1.7-3,2.56-4.52C85,197.46,87,193.81,89.44,193.77Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 86.698px 198.347px 0px;"
                                id="elurx4w0v1u1g" class="animable"></path>
                            <path
                                d="M139,158h25.4s26.57-12.77,48-7.63c24.53,5.9,27.67,36.72,9.33,47.62C198.43,211.83,95,209.16,95,209.16l22.35-37.89S151.77,164,183,165.09l-44,6Z"
                                style="fill: rgb(55, 71, 79); transform-origin: 164.241px 179.259px 0px;"
                                id="elp7gpe1gha7" class="animable"></path>
                            <path
                                d="M115.9,173.72a1.18,1.18,0,0,0,0-.2.83.83,0,0,0,0-.15c0-.13.06-.25.1-.37a6.49,6.49,0,0,1,.26-.74c.1-.25.2-.48.31-.72a5,5,0,0,1,.42-.67s0,0,.06,0l0,0,.06,0,0,0c3.78-.7,29.48-4.38,33.3-4.81s7.71-.8,11.58-1.13c7.7-.64,15.45-1,23.18-.83.73,0,1.45,0,2.18.07.15-.05.31-.08.47-.12.37-.09.74-.18,1.12-.25.69-.14,1.4-.24,2.1-.35,1.46-.22,2.93-.38,4.39-.65.08,0,.12.12,0,.14-1.46.32-2.9.75-4.37,1.07l-1.27.26c2.84.15,5.67.37,8.5.63a.07.07,0,0,1,0,.14c-3.85-.23-7.73-.26-11.59-.19s-7.65.15-11.48.37c-7.73.44-15.47,1.13-23.17,1.94-4.32.45-30.52,4.28-34.86,4.46h-.06a1.88,1.88,0,0,1-.12.3c-.12.23-.24.47-.37.7s-.24.44-.38.65l-.22.32-.1.15a1,1,0,0,0-.12.17C116,173.87,115.84,173.81,115.9,173.72Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 157.09px 168.355px 0px;" id="elrjl72s2qiz"
                                class="animable"></path>
                            <path
                                d="M103.09,206.86c1.39-2.22,2.57-4.58,3.83-6.86s2.55-4.58,3.82-6.87c2.54-4.56,11.67-19.91,12.58-21,.05-.07.17,0,.14.08-.43,1.19-6.13,11.35-7.44,13.62-2.62,4.53-5.38,9-8.09,13.45-.78,1.28-1.58,2.54-2.37,3.81s-1.62,2.52-2.35,3.82C103.17,207,103.05,206.93,103.09,206.86Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 113.273px 189.527px 0px;"
                                id="elo5cl3j5ugzi" class="animable"></path>
                            <path
                                d="M123.57,176c2.29-.54,4.62-.9,6.93-1.34l6.93-1.3q6.94-1.29,13.9-2.46c9.25-1.56,18.54-2.85,27.88-3.75,5.27-.5,10.56-.83,15.84-1.22.11,0,.11.17,0,.17-9.41.43-18.81,1.7-28.12,3s-18.43,2.78-27.62,4.33l-7.78,1.33c-2.63.46-5.27,1-7.92,1.36A.08.08,0,0,1,123.57,176Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 159.344px 171.025px 0px;"
                                id="el1z6ho8ekch2" class="animable"></path>
                            <path
                                d="M87.39,337.54c2.28-.13,61.2-23.68,62.83-25.94.63-.85-23-56.22-23-56.22L89.74,270.27l15.92,37s-18,18.59-19.56,21.27S85.12,337.67,87.39,337.54Z"
                                style="fill: rgb(255, 196, 192); transform-origin: 117.728px 296.461px 0px;"
                                id="elizs6eikj19r" class="animable"></path>
                            <path
                                d="M87.39,337.54c2.27-.13,61.2-23.68,62.83-25.94.2-.26-1.95-5.8-5-13.32-10.1,5.84-46.93,26.39-50.59,25.75-2.54-.45-1.42-3.06-.19-5-4,4.29-7.69,8.36-8.34,9.5C84.59,331.2,85.13,337.67,87.39,337.54Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 117.741px 317.911px 0px;"
                                id="elko3570sneyf" class="animable"></path>
                            <path
                                d="M139.8,279.79,96.42,299.74S60.84,216.83,59.54,187.65c-1.11-24.84,10.09-45.84,66-29.78l13.69.17v9.45c-6,.79-22,3.31-22,3.31-11.66,4.4-15.42,6.22-15.23,6.6C131,236.14,139.8,279.79,139.8,279.79Z"
                                style="fill: rgb(55, 71, 79); transform-origin: 99.6338px 225.995px 0px;"
                                id="eljajc4lbto3" class="animable"></path>
                            <path
                                d="M95.1,166.92c1.68,2.24,3.24,4.58,4.73,7a100.78,100.78,0,0,1,28.43-7.49q4.13-.51,8.28-.73c.11,0,.1.16,0,.17a124.51,124.51,0,0,0-28.93,5.51c-2.6.8-5.15,1.73-7.71,2.64,1.8,2.87,3.48,5.8,5.1,8.76a170.48,170.48,0,0,1,8.16,17c1.34,3.22,2.65,6.47,3.8,9.76,0,.09-.12.16-.16.06q-7.65-17-16.69-33.37c-1.71-3.07-3.48-6.1-5.15-9.19C94.9,166.94,95,166.83,95.1,166.92Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 115.78px 187.674px 0px;"
                                id="el3wxn3jamqkh" class="animable"></path>
                            <path
                                d="M95.51,289.65c2.43-.95,4.79-2.13,7.17-3.2l7.17-3.22c4.77-2.14,21.26-9,22.63-9.29a.08.08,0,0,1,.06.15c-1,.7-11.7,5.43-14.1,6.46-4.82,2.06-9.68,4-14.54,5.93-1.38.56-2.78,1.09-4.17,1.64s-2.81,1.05-4.17,1.66C95.48,289.82,95.42,289.68,95.51,289.65Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 114.028px 281.861px 0px;"
                                id="el2adbjjy7vkz" class="animable"></path>
                            <path
                                d="M95.3,171.23c3.3,6.25,6.1,12.8,9,19.26s5.62,12.91,8.31,19.42q8,19.43,15,39.3c2.62,7.48,3.76,12.64,6.14,20.2,0,.11-.13.15-.17,0-4.42-13.38-7.89-24.25-12.89-37.42s-10.29-26.16-15.89-39q-2.37-5.43-4.8-10.82c-1.63-3.6-3.32-7.18-4.84-10.82C95,171.2,95.23,171.08,95.3,171.23Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 114.427px 220.335px 0px;"
                                id="eldphn9d29gp" class="animable"></path>
                            <path
                                d="M179.34,111.63a.45.45,0,0,1-.4.43c-.51,0-1.12,0-1.81,0-1.26-4.34-2.71-7.83-2.37-6.49a21.68,21.68,0,0,1,.59,6.45l-3.58-.13c-.76-7.53-2.09-13.17-2.12-11.47-.14,6.88-.73,9-1.41,11.34-8.63-.33-19.93-.9-28.1-1.49-.59-4.17-1-8.67-1.2-8.38-1.31,2.22-1.9,5.55-2.15,8.14-2.6-.21-4.67-.42-5.93-.61,0,0-.31-3.5-.3-4.64a23.63,23.63,0,0,1,1.66-8.54,42.25,42.25,0,0,1,4.46-7.68.09.09,0,0,1,0-.06s0,0,0,0a24.34,24.34,0,0,0,2.63-5.15.05.05,0,0,1,0,0,24.22,24.22,0,0,0,1-4c.81-5,4-9.15,8.9-10.08,9.71-7.69,18.39-3.36,20.55,3.35.21.66.4,1.4.58,2.22v0c.67,3,1.17,6.86,1.68,9.86a0,0,0,0,0,0,0s0,0,0,0h0a28.42,28.42,0,0,0,.77,3.48C174.71,93.58,179.63,97,179.34,111.63Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 154.956px 88.6206px 0px;"
                                id="elbzyo4weuu6g" class="animable"></path>
                            <path
                                d="M147.11,70.33a9.62,9.62,0,0,0-6.17,7.23,25,25,0,0,1-1.79,6.17A22.29,22.29,0,0,1,135.08,89a16.4,16.4,0,0,0-4.86,8.72,27.91,27.91,0,0,0,.08,11.55s0,0,0,0a29.61,29.61,0,0,1,.62-12c1-4,3.51-6.27,6.09-9.12a16.78,16.78,0,0,0,4.11-7.88c.39-1.8.53-3.71,1.41-5.36a10.85,10.85,0,0,1,4.74-4.14A.22.22,0,0,0,147.11,70.33Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 138.54px 89.7929px 0px;"
                                id="ele01bcowqj9" class="animable"></path>
                            <path
                                d="M177.63,94.21c-1.95-3.06-4-5.69-5-9.36-.89-3.34-1.27-6.83-2.18-10.16,0-.06-.1,0-.09,0,1.35,5.91,1.21,11.74,4.51,16.89,1.79,2.8,3.59,5.41,4.65,8.67a28.09,28.09,0,0,1,1.2,10.57.09.09,0,1,0,.18,0A23.31,23.31,0,0,0,177.63,94.21Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 175.812px 92.7871px 0px;"
                                id="eleubi3m3rukd" class="animable"></path>
                            <path
                                d="M150.45,68.26c-.22,1.2-6.34,3.42-10.09-.18s-1.29-9.54,4.28-8.25C148.17,60.65,150.9,65.71,150.45,68.26Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 144.532px 64.8472px 0px;"
                                id="elydgxgvj2dxj" class="animable"></path>
                            <path
                                d="M138.93,62.35a7.16,7.16,0,0,1,3.57-3.12,4.31,4.31,0,0,1,4.29.52,8.7,8.7,0,0,1,2.77,3.76,14.07,14.07,0,0,1,.72,2.31,6.67,6.67,0,0,1,.17,2.44,5.85,5.85,0,0,0,.27-2.5,11.18,11.18,0,0,0-.49-2.5,8.51,8.51,0,0,0-2.9-4.25,5,5,0,0,0-2.51-1,5.11,5.11,0,0,0-2.6.53A6.33,6.33,0,0,0,138.93,62.35Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 144.842px 63.1302px 0px;"
                                id="el5bg5fm30uze" class="animable"></path>
                            <path
                                d="M141.7,107.59c2.84,15.06,11.45,34.54,19.28,34.85,7.14.27,23.69-6.58,30.59-10.36s-6.7-21.18-10.83-19c-5.5,2.87-15.09,9.36-16.56,8.8-1.84-.7-3.53-3.77-13.44-17.9C146.69,98.18,140.49,101.18,141.7,107.59Z"
                                style="fill: rgb(255, 196, 192); transform-origin: 167.518px 121.665px 0px;"
                                id="eltc7p2i4wplo" class="animable"></path>
                            <path
                                d="M188.36,107.3c3.25-.76,6.91-1.9,10.39-1.46s5.86,5.35,5.71,6.66-2.34,9.38-5.82,9-.7-6.45-.75-7.19-.08-1.67-.75-1.67-12.74,4.19-12.74,4.19Z"
                                style="fill: rgb(255, 196, 192); transform-origin: 194.433px 113.627px 0px;"
                                id="ellncg92tv13r" class="animable"></path>
                            <path
                                d="M188.53,107.81c.19,0,9.91-2.65,13.38-2.2s5.86,5.35,5.72,6.66-2.35,9.38-5.82,9-.7-6.45-.75-7.19-.08-1.67-.75-1.68-12.74,4.2-12.74,4.2Z"
                                style="fill: rgb(255, 196, 192); transform-origin: 197.603px 113.421px 0px;"
                                id="eln1kdlx3ygk" class="animable"></path>
                            <path
                                d="M200.67,120.7a4.12,4.12,0,0,1-.35-2.12,7,7,0,0,1,.37-2.21,14,14,0,0,0,.63-1.86,4,4,0,0,0-.29-1.9c-.22-.51-.74-.4-1.2-.29a15.28,15.28,0,0,0-2,.65c-.7.25-1.4.53-2.1.8a17.26,17.26,0,0,0-2.14.89c-.05,0,0,.11,0,.1.63-.15,1.24-.4,1.85-.61s1.39-.47,2.09-.69,1.29-.46,1.95-.65a2.07,2.07,0,0,1,.94-.18c.26.09.32.76.36,1a3.28,3.28,0,0,1-.33,1.87,10.3,10.3,0,0,0-.56,1.87,5.11,5.11,0,0,0,0,1.83,7,7,0,0,0,.66,1.58C200.59,120.83,200.72,120.77,200.67,120.7Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 197.452px 116.513px 0px;"
                                id="elcbzj5am36md" class="animable"></path>
                            <path
                                d="M176.5,115.74s10.59-7.74,12.79-9.27c4.41-3.06,22.11-8.14,24.5-8.14s2.72,5-9.33,8.73c-6.36,2-7.81,5.35-7.91,7.28s1.36,5.73,4.61,6,5.86-4.23,8.89-4.43.47,5-2,8a20,20,0,0,1-9.45,5.85c-2.91.75-12,3.54-12,3.54Z"
                                style="fill: rgb(255, 196, 192); transform-origin: 195.807px 115.815px 0px;"
                                id="ell293myij0xd" class="animable"></path>
                            <path
                                d="M205.42,118.49c-1.32.82-2.84,1.89-4.45,1.78s-2.62-1.32-3.25-2.75a6.2,6.2,0,0,1-.36-4.57,7.52,7.52,0,0,1,2.61-3.39,18.17,18.17,0,0,1,4.71-2.44c.07,0,0-.14-.06-.12-1.56.51-6.4,1.9-7.77,5.89a6.31,6.31,0,0,0,.41,4.66,4.46,4.46,0,0,0,3,3c1.89.37,3.71-1,5.21-2C205.58,118.5,205.49,118.45,205.42,118.49Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 201.052px 113.805px 0px;"
                                id="eldju3hcctn6j" class="animable"></path>
                            <path
                                d="M140.74,110.64a66.5,66.5,0,0,0,4.58,17.54c.49,1.12.8,1.7.8,1.7l14.58-10.26,2-1.42s-.23-.41-1-1.54c-1.13-1.59-3.42-4.62-7.79-9.9a28.79,28.79,0,0,0-6.71-6.33C141.9,97.26,139.54,101.54,140.74,110.64Z"
                                style="fill: rgb(64, 123, 255); transform-origin: 151.567px 114.636px 0px;"
                                id="elfl7bdzc6wet" class="animable"></path>
                            <path d="M143.75,129.3l3,5.29L163,122.89l3.65-2.62-4-4.34-1,.73-2.05,1.45-14.31,10.07Z"
                                style="fill: rgb(64, 123, 255); transform-origin: 155.2px 125.26px 0px;"
                                id="elxyny38bnnoa" class="animable"></path>
                            <path
                                d="M140.74,110.64a66.5,66.5,0,0,0,4.58,17.54l-1.57,1.12,3,5.29L163,122.89l-2.34-3.27c-.35-.51-.71-1-1.07-1.51-4.81-6.78-9.59-13.55-12.45-17.68C141.9,97.26,139.54,101.54,140.74,110.64Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 151.717px 116.991px 0px;"
                                id="el2e92dkxva8b" class="animable"></path>
                            <path
                                d="M164.46,159l-.89-18.43s7.33-9,4.66-15.49c-1.35-3.26-11-19.91-16.27-24.09-5-3.93-12.62-.15-15,3.1-9.19,12.62-16.16,23.93-22.76,52.39,0,0,18.67,6.26,35.59,6.26C155.07,162.78,164.46,159,164.46,159Z"
                                style="fill: rgb(255, 196, 192); transform-origin: 141.508px 131.026px 0px;"
                                id="elkcrfk6b73b" class="animable"></path>
                            <path
                                d="M166.59,154.42l-3-13.81s7.33-9,4.66-15.49c-1.35-3.26-11-19.91-16.27-24.09-5-3.93-13-.66-15.45,2.55-9.48,12.6-17,25.58-22.63,49.6Z"
                                style="fill: rgb(64, 123, 255); transform-origin: 141.368px 126.825px 0px;"
                                id="elzamjzymg5eq" class="animable"></path>
                            <path
                                d="M147.42,139.69a43.84,43.84,0,0,1,6.58.25c1.08.13,2.15.32,3.22.53.53.1,1.07.19,1.61.27a6.87,6.87,0,0,0,1.69.11s.06.07,0,.08a12.23,12.23,0,0,1-1.6.17,11.67,11.67,0,0,1-1.56-.1c-1.1-.13-2.19-.31-3.29-.45-2.22-.28-4.43-.56-6.66-.68C147.31,139.87,147.32,139.69,147.42,139.69Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 153.943px 140.38px 0px;"
                                id="el3l5ma0l0ymk" class="animable"></path>
                            <path
                                d="M142.3,142.29a46.43,46.43,0,0,1,5.35-.94c.9-.1,1.8-.15,2.71-.18.43,0,.86,0,1.3,0s1,.06,1.42.05c0,0,.06.08,0,.08-.45,0-.89.12-1.34.16l-1.35.13c-.9.1-1.79.2-2.69.28-1.81.16-3.6.35-5.39.57C142.22,142.45,142.21,142.31,142.3,142.29Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 147.672px 141.805px 0px;"
                                id="elfg57khi58k5" class="animable"></path>
                            <path
                                d="M142.89,102.33c-.07,1,4.86,8.86,9.11,10,1.39.35,1.28-7.7,1.28-7.7l.29-.52,4.11-7.2-7.29-8.61-1.08-1.18s-1,2-2.2,4.6c-.06.12-.12.24-.17.37a4,4,0,0,0-.21.41c-.18.38-.37.77-.55,1.16s-.27.58-.41.9l-.41.94A52.49,52.49,0,0,0,142.89,102.33Z"
                                style="fill: rgb(255, 196, 192); transform-origin: 150.285px 99.7306px 0px;"
                                id="el0bvijztr5elk" class="animable"></path>
                            <path
                                d="M147.11,91.67a16.6,16.6,0,0,0,6.46,12.39l4.11-7.2-7.29-8.61-1.08-1.18S148.32,89.11,147.11,91.67Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 152.395px 95.565px 0px;"
                                id="ele5l3q9h4wfq" class="animable"></path>
                            <path
                                d="M172.55,85.51c-.43,14.54-9.19,15.92-12.32,15.83-2.85-.09-12.53-.75-13.6-15.25S152.44,67.18,159,67,173,71,172.55,85.51Z"
                                style="fill: rgb(255, 196, 192); transform-origin: 159.544px 84.1692px 0px;"
                                id="elfkbrz3n8lyb" class="animable"></path>
                            <path
                                d="M169.88,82.77a7.65,7.65,0,0,1-1-.3A1.57,1.57,0,0,1,168,82a.5.5,0,0,1,.06-.63,1.29,1.29,0,0,1,1.29-.18,1.92,1.92,0,0,1,1.11.78A.55.55,0,0,1,169.88,82.77Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 169.22px 81.9355px 0px;"
                                id="elasuellbum38" class="animable"></path>
                            <path
                                d="M160.54,81.81c.34,0,.66-.08,1-.12a1.52,1.52,0,0,0,1-.31.5.5,0,0,0,.06-.63,1.28,1.28,0,0,0-1.23-.41,1.87,1.87,0,0,0-1.24.55A.56.56,0,0,0,160.54,81.81Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 161.342px 81.061px 0px;"
                                id="elrbnrijvfm1" class="animable"></path>
                            <path
                                d="M162.26,85.66s-.08,0-.08.09c0,1-.26,2.11-1.17,2.38a0,0,0,0,0,0,.05C162.11,88.11,162.38,86.61,162.26,85.66Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 161.648px 86.92px 0px;"
                                id="elw98yk57m0e" class="animable"></path>
                            <path d="M161.45,84.57c-1.58-.24-1.93,2.94-.47,3.16S162.78,84.77,161.45,84.57Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 161.169px 86.149px 0px;"
                                id="eliruiyhq07d7" class="animable"></path>
                            <path
                                d="M160.81,84.67c-.3.15-.61.43-.94.43s-.65-.37-.87-.72c0,0-.05,0-.06,0-.07.61.09,1.26.73,1.42s1.08-.34,1.3-.94C161,84.78,160.93,84.61,160.81,84.67Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 159.951px 85.1051px 0px;"
                                id="el1473py38swr" class="animable"></path>
                            <path
                                d="M167.62,86.2s.07.06.07.1c-.15,1-.16,2.12.69,2.56,0,0,0,.06,0,0C167.3,88.63,167.32,87.11,167.62,86.2Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 167.912px 87.5433px 0px;"
                                id="el8njg236dl6g" class="animable"></path>
                            <path d="M168.62,85.28c1.6.07,1.34,3.26-.14,3.19S167.28,85.22,168.62,85.28Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 168.598px 86.8752px 0px;"
                                id="elwd0uqa68ch" class="animable"></path>
                            <path
                                d="M169.27,85.54c.24.19.46.52.76.56s.63-.27.88-.58c0,0,.05,0,.05,0,0,.61-.28,1.23-.88,1.3s-.89-.49-1-1.11C169.07,85.63,169.17,85.47,169.27,85.54Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 170.02px 86.173px 0px;"
                                id="elhxc7ndfotj" class="animable"></path>
                            <path
                                d="M161.41,93.61c.2.27.38.62.73.71a2.68,2.68,0,0,0,1.09-.08s.06,0,0,.05a1.33,1.33,0,0,1-1.33.34,1.06,1.06,0,0,1-.63-1C161.3,93.58,161.38,93.57,161.41,93.61Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 162.263px 94.1358px 0px;"
                                id="elov9zrpfdktb" class="animable"></path>
                            <path
                                d="M165.89,90.46s.05,1.49,0,2.19c0,.06-.18.08-.42.07h0a3.3,3.3,0,0,1-3.08-1.55c0-.07.05-.13.11-.08a5.06,5.06,0,0,0,2.93,1.16c.07-.19-.18-2.55-.07-2.55a6.6,6.6,0,0,1,1.54.51c0-3.11-.55-6.19-.54-9.29,0-.11.17-.13.19,0a50.37,50.37,0,0,1,1,10C167.53,91.27,166.15,90.61,165.89,90.46Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 164.97px 86.7807px 0px;"
                                id="elyrscchvj9xn" class="animable"></path>
                            <path
                                d="M165,92.3a3.53,3.53,0,0,1-1.49,1,1.56,1.56,0,0,1-1,0c-.69-.23-.67-.88-.51-1.42a3.9,3.9,0,0,1,.36-.83A4.68,4.68,0,0,0,165,92.3Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 163.454px 92.2162px 0px;"
                                id="elm4g8fx6qhqq" class="animable"></path>
                            <path
                                d="M163.54,93.32a1.56,1.56,0,0,1-1,0c-.69-.23-.67-.88-.51-1.42A1.66,1.66,0,0,1,163.54,93.32Z"
                                style="fill: rgb(255, 156, 189); transform-origin: 162.739px 92.6512px 0px;"
                                id="eligvnos8ouu" class="animable"></path>
                            <path
                                d="M164.45,70.25a6.7,6.7,0,0,1-.61,3.86c-2,3.17-5.91,1.85-7.43,3s-1.26,3.72-2.57,4.83c-1.81,1.54-3.94.63-4.33,1.76s-1.57,4.72-3.1,5-5.6-24.93,13.59-22c0,0,2.7-.68,6.64,1.73,4.55,2.78,5.54,10.34,5.54,10.34s-.19,0-.79-.67c-.84-.92-1.11-1.72-1.74-2.33-1-1-1.6-.7-2.62-1.63A12.81,12.81,0,0,1,164.45,70.25Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 158.577px 77.5827px 0px;"
                                id="eln4izdgpb048" class="animable"></path>
                            <path
                                d="M164.27,69.15a13.3,13.3,0,0,1,.24,3,5.42,5.42,0,0,1-.73,2.82,4,4,0,0,1-2.4,1.48c-.95.23-2,.22-3,.5a3.1,3.1,0,0,0-1.4.83,3.93,3.93,0,0,0-.73,1.42,5.34,5.34,0,0,1-1.36,2.55,3.32,3.32,0,0,1-2.71.8,7.24,7.24,0,0,0-3-.17,7.08,7.08,0,0,1,3,.4,3.63,3.63,0,0,0,3-.75,5.33,5.33,0,0,0,1.54-2.68,3.6,3.6,0,0,1,.66-1.26,2.61,2.61,0,0,1,1.19-.68c.93-.27,2-.28,3-.54a5.23,5.23,0,0,0,1.45-.6,3.22,3.22,0,0,0,1.16-1.1,5.72,5.72,0,0,0,.65-3A13.31,13.31,0,0,0,164.27,69.15Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 157.01px 75.9994px 0px;"
                                id="el7n2xoc9fxux" class="animable"></path>
                            <path
                                d="M164.54,70.07a11.06,11.06,0,0,0,.64,2.76,5,5,0,0,0,1.7,2.33,7.51,7.51,0,0,0,1.28.67,2.26,2.26,0,0,1,1,.81,7.43,7.43,0,0,0,.72,1.23,3.16,3.16,0,0,0,1.14.85,3.57,3.57,0,0,1-.95-1,7.3,7.3,0,0,1-.58-1.26,2.41,2.41,0,0,0-1.08-1,7.62,7.62,0,0,1-1.21-.65,5.2,5.2,0,0,1-1.62-2.1A21,21,0,0,1,164.54,70.07Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 167.78px 74.395px 0px;"
                                id="elsht919wheu" class="animable"></path>
                            <path d="M149,86.28s-2.63-4.87-4.81-4-.57,7.7,1.73,8.88a2.47,2.47,0,0,0,3.43-.94Z"
                                style="fill: rgb(255, 196, 192); transform-origin: 146.254px 86.8413px 0px;"
                                id="elfh35z1b56wj" class="animable"></path>
                            <path
                                d="M144.68,84.23a0,0,0,0,0,0,.07,6.22,6.22,0,0,1,2.74,4.23,1.35,1.35,0,0,0-2-.6c-.05,0,0,.1,0,.09a1.54,1.54,0,0,1,1.6.72,7.31,7.31,0,0,1,.63,1.43c.06.16.34.11.31-.07v0C148.28,87.92,147,84.72,144.68,84.23Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 146.344px 87.2482px 0px;"
                                id="elrh4o4slvq1n" class="animable"></path>
                            <path
                                d="M136.26,112.52c4.06,14.84,24.73,43.12,33.24,45,9.86,2.14,36-9.51,42-14.91,2.41-2.16-12-17.7-15.11-16.2-13,6.3-23.78,8.55-25.63,7.54-2.85-1.55-15.12-14.86-23.15-23.85C137.53,98.77,134.45,105.86,136.26,112.52Z"
                                style="fill: rgb(255, 196, 192); transform-origin: 173.77px 130.954px 0px;"
                                id="eliq1wzl3guyr" class="animable"></path>
                            <path
                                d="M210.87,143c1.34-.64,10.28-8.56,12.79-12.11a42.51,42.51,0,0,0,6.27-12.19c2.2-6.92,3.06-11.92,2.16-14-1-2.45-1.31-2.84-6.88,8.84-3.15,6.61-6.66,7.66-9.78,7.91a50.79,50.79,0,0,0-21.64,6.74S205.68,145.47,210.87,143Z"
                                style="fill: rgb(255, 196, 192); transform-origin: 213.116px 123.274px 0px;"
                                id="eladndr2w37nm" class="animable"></path>
                            <path
                                d="M236.36,101.61,217.5,120.92a2.1,2.1,0,0,1-2.16.5l-11.41-5.2c-.64-.29-.7-1-.15-1.55l18.87-19.31a2.07,2.07,0,0,1,2.16-.5l11.4,5.19C236.85,100.34,236.92,101,236.36,101.61Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 220.072px 108.138px 0px;"
                                id="elb065euh4mip" class="animable"></path>
                            <path
                                d="M235.27,101.11l-18.86,19.31a2.07,2.07,0,0,1-2.16.5l-11.41-5.19c-.63-.29-.7-1-.14-1.56l18.86-19.3a2.08,2.08,0,0,1,2.16-.51l11.41,5.2C235.76,99.85,235.83,100.54,235.27,101.11Z"
                                style="fill: rgb(55, 71, 79); transform-origin: 218.985px 107.642px 0px;"
                                id="elw01iazlaref" class="animable"></path>
                            <path
                                d="M233.61,101.75l-17.3,17.7a1.91,1.91,0,0,1-2,.51l-10.2-4.65c-.58-.26-.61-.9-.08-1.45l17.29-17.7c1.08-1.1,1.78-1.13,2.35-.87l2,.93c.12,0,.1.21,0,.36l-.07.06c-.33.35-.12.45.15.57l4.72,2.15a.59.59,0,0,0,.82-.13l.06-.06a.49.49,0,0,1,.47-.17l2,.94C234.46,100.2,234.59,100.74,233.61,101.75Z"
                                style="fill: rgb(255, 255, 255); transform-origin: 218.988px 107.606px 0px;"
                                id="elzf2yt82uxzf" class="animable"></path>
                            <path
                                d="M229.19,98.15l-1.29-.59a.06.06,0,0,1,0-.1h0a.15.15,0,0,1,.15,0l1.29.59a.06.06,0,0,1,0,.1h0A.14.14,0,0,1,229.19,98.15Z"
                                style="fill: rgb(255, 255, 255); transform-origin: 228.62px 97.8059px 0px;"
                                id="elhx4x3h2zpek" class="animable"></path>
                            <polygon points="221.62 111.36 212.95 107.41 220.36 99.82 229.03 103.77 221.62 111.36"
                                style="fill: rgb(64, 123, 255); transform-origin: 220.99px 105.59px 0px;"
                                id="elkynlkjbbiad" class="animable"></polygon>
                            <polygon points="216.79 110.96 211.73 108.66 212.16 108.21 217.22 110.52 216.79 110.96"
                                style="fill: rgb(166, 166, 166); transform-origin: 214.475px 109.585px 0px;"
                                id="elhp4hjmefb8f" class="animable"></polygon>
                            <polygon points="217 112.12 211.01 109.39 211.23 109.17 217.22 111.89 217 112.12"
                                style="fill: rgb(166, 166, 166); transform-origin: 214.115px 110.645px 0px;"
                                id="elko8xu9zwew" class="animable"></polygon>
                            <polygon points="216.6 112.53 210.61 109.8 210.83 109.58 216.82 112.3 216.6 112.53"
                                style="fill: rgb(166, 166, 166); transform-origin: 213.715px 111.055px 0px;"
                                id="eld4a3jywu1lk" class="animable"></polygon>
                            <polygon points="216.21 112.94 210.22 110.21 210.43 109.98 216.42 112.71 216.21 112.94"
                                style="fill: rgb(166, 166, 166); transform-origin: 213.32px 111.46px 0px;"
                                id="elka0t6lr7gh" class="animable"></polygon>
                            <polygon points="223.7 98 222.62 97.51 222.8 97.33 223.88 97.82 223.7 98"
                                style="fill: rgb(166, 166, 166); transform-origin: 223.25px 97.665px 0px;"
                                id="ela3mfl912jnp" class="animable"></polygon>
                            <polygon points="223.37 98.34 222.29 97.85 222.47 97.66 223.55 98.15 223.37 98.34"
                                style="fill: rgb(166, 166, 166); transform-origin: 222.92px 98px 0px;" id="el5bl1ku5q6z"
                                class="animable"></polygon>
                            <polygon points="223.04 98.67 221.96 98.18 222.14 98 223.22 98.49 223.04 98.67"
                                style="fill: rgb(166, 166, 166); transform-origin: 222.59px 98.335px 0px;"
                                id="ely79wx52yink" class="animable"></polygon>
                            <path
                                d="M220.42,112.43a1.7,1.7,0,0,1-.5.1.59.59,0,0,1-.07-.35c0-.25.28-.49.49-.39s0,.3,0,.3.23-.19.4-.11S220.75,112.33,220.42,112.43Z"
                                style="fill: rgb(64, 123, 255); transform-origin: 220.328px 112.148px 0px;"
                                id="el3qwm1zjrfrv" class="animable"></path>
                            <polygon points="214.44 117.47 207.44 114.28 209.16 112.53 216.15 115.71 214.44 117.47"
                                style="fill: rgb(64, 123, 255); transform-origin: 211.795px 115px 0px;"
                                id="elre7r9yhymcn" class="animable"></polygon>
                            <path
                                d="M217,121.24c-3.21.37,6.59-7.18,6.39-10.85s-3.65-2.17-6.25.17c-9.05,8.12-16.44,8.49-20.72,15.82S217,121.24,217,121.24Z"
                                style="fill: rgb(255, 196, 192); transform-origin: 209.659px 118.434px 0px;"
                                id="elv6yij33jdw" class="animable"></path>
                            <path
                                d="M165.4,129.24c.89.73,1.75,1.5,2.61,2.26a18,18,0,0,0,2.51,2,5.27,5.27,0,0,0,3.5.37c1.06-.16,2.1-.38,3.14-.64a94.34,94.34,0,0,0,12.44-4.11,63.91,63.91,0,0,0,6.7-2.86l-.24.27a15.55,15.55,0,0,1,2-2.81A18.3,18.3,0,0,1,201,121a33.08,33.08,0,0,1,3.56-2.28c.65-.36,1.3-.72,2-1.05l1-.51a4.31,4.31,0,0,0,1.16-.63c-.08.11-.22,0-.12-.11l0,0s.08,0,.11,0l0,0s0,.05,0,.07c-.11.18-.33.25-.5.36l-.92.61c-.56.38-1.13.75-1.7,1.12-1.29.83-2.58,1.66-3.81,2.58a28.85,28.85,0,0,0-3,2.53c-.48.46-.91,1-1.37,1.44a11.35,11.35,0,0,0-1.14,1.54s-4,2-6,2.9-4.18,1.74-6.32,2.48-4.3,1.38-6.49,1.94a26.2,26.2,0,0,1-3.38.66,5.51,5.51,0,0,1-3.09-.21,11.71,11.71,0,0,1-2.58-2.24c-1-1-2.07-1.94-3.07-3C165.28,129.28,165.35,129.2,165.4,129.24Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 187.018px 125.6px 0px;"
                                id="elexlbtlekqqg" class="animable"></path>
                            <path
                                d="M165.61,128.68l-15.52,13s-11.74-16.18-14.41-28.33,3.59-13.44,14-2C159.83,122.67,165.61,128.68,165.61,128.68Z"
                                style="fill: rgb(64, 123, 255); transform-origin: 150.337px 122.57px 0px;"
                                id="ele2bq4x0muci" class="animable"></path>
                            <path
                                d="M154.7,116.88c1.82,1.78,3.56,3.67,5.28,5.55.84.92,1.67,1.83,2.48,2.77l1.3,1.48a13.85,13.85,0,0,0,1.47,1.59c.1.08,0,.21-.11.12a23.82,23.82,0,0,0-2.66-2.75c-.93-.94-1.84-1.88-2.73-2.85-1.75-1.89-3.5-3.83-5.1-5.85A0,0,0,0,1,154.7,116.88Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 159.951px 122.65px 0px;"
                                id="elw92ooxx3hs" class="animable"></path>
                            <path
                                d="M138.93,124.66a13.59,13.59,0,0,0,1.51,1.71c.22.21.42.42.63.64-.91-1.7-1.77-3.43-2.55-5.18,0,0,0,0,.06,0,2,3.35,3.84,6.81,5.86,10.17s3.88,7,6.07,10.27a.08.08,0,1,1-.14.09c-2.11-3.35-4.42-6.56-6.37-10-.77-1.38-1.55-2.77-2.31-4.17a6.61,6.61,0,0,1-.7-.7,10.52,10.52,0,0,1-.76-.87c-.46-.63-.94-1.23-1.43-1.82C138.73,124.68,138.86,124.57,138.93,124.66Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 144.522px 132.114px 0px;"
                                id="el1tffl21qlgm" class="animable"></path>
                            <path d="M169.75,130.4l-4.32-4-17.76,15,3.43,5Z"
                                style="fill: rgb(64, 123, 255); transform-origin: 158.71px 136.4px 0px;"
                                id="elt1maqcrg8hf" class="animable"></path>
                            <path
                                d="M149.84,139.38c2.2-2,4.57-3.89,6.87-5.8s4.74-3.68,7-5.68c.08-.07.19.06.1.13-2.27,2-4.38,4.09-6.69,6a86.21,86.21,0,0,1-7.15,5.48A.09.09,0,0,1,149.84,139.38Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 156.828px 133.708px 0px;"
                                id="el0uxvbfdu73n9" class="animable"></path>
                            <path
                                d="M154.17,143.75c-1.11.77-2.18,1.6-3.23,2.45l.36,0c-1.11-1.7-2.26-3.36-3.51-5l0,.19c.42-.4.83-.81,1.24-1.24-.49.33-1,.67-1.43,1l-.1.07.07.12c1,1.75,2.17,3.43,3.35,5.08l.16.22.2-.17C152.26,145.66,153.24,144.73,154.17,143.75Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 150.835px 143.395px 0px;"
                                id="elk7p3obc8cxe" class="animable"></path>
                        </g>
                        <g id="freepik--speech-bubble--inject-16" style="transform-origin: 365.095px 130.88px 0px;"
                            class="animable animator-active">
                            <polygon
                                points="258.15 152.08 472.04 152.08 472.04 84.92 258.15 84.92 258.15 84.92 258.15 152.08 258.15 152.08"
                                style="fill: rgb(69, 90, 100); transform-origin: 365.095px 118.5px 0px;"
                                id="elyqk758bgxzk" class="animable"></polygon>
                            <polygon points="472.04 176.84 472.04 152.05 446.23 152.05 472.04 176.84"
                                style="fill: rgb(69, 90, 100); transform-origin: 459.135px 164.445px 0px;"
                                id="eligi3dnmepoc" class="animable"></polygon>
                            <rect x="271.65" y="96.53" width="148.33" height="1.28"
                                style="fill: rgb(255, 255, 255); transform-origin: 345.815px 97.17px 0px;"
                                id="eluzazhgmn3a" class="animable"></rect>
                            <rect x="271.65" y="103.42" width="117.55" height="1.28"
                                style="fill: rgb(255, 255, 255); transform-origin: 330.425px 104.06px 0px;"
                                id="elkkt3keis3w" class="animable"></rect>
                            <rect x="271.65" y="117.21" width="136.14" height="1.28"
                                style="fill: rgb(255, 255, 255); transform-origin: 339.72px 117.85px 0px;"
                                id="eliq88suizwwl" class="animable"></rect>
                            <rect x="271.65" y="124.1" width="148.33" height="1.28"
                                style="fill: rgb(255, 255, 255); transform-origin: 345.815px 124.74px 0px;"
                                id="elfdv1gb98tz8" class="animable"></rect>
                            <rect x="271.65" y="130.99" width="148.33" height="1.28"
                                style="fill: rgb(255, 255, 255); transform-origin: 345.815px 131.63px 0px;"
                                id="elcfhkfzaj88m" class="animable"></rect>
                            <rect x="271.65" y="137.88" width="107.25" height="1.28"
                                style="fill: rgb(255, 255, 255); transform-origin: 325.275px 138.52px 0px;"
                                id="eli5kimmcl9u" class="animable"></rect>
                            <path
                                d="M437.83,125.34a13.48,13.48,0,0,1,.95-5.21,8.6,8.6,0,0,1,3.91-4c.59-.36,1.32-.76,2.19-1.22a17.66,17.66,0,0,0,2.55-1.63,9.46,9.46,0,0,0,2.11-2.22,5.16,5.16,0,0,0,.86-2.94,4.77,4.77,0,0,0-.48-2.19,4.92,4.92,0,0,0-1.24-1.6,5.2,5.2,0,0,0-1.81-1,6.89,6.89,0,0,0-2.11-.33,6,6,0,0,0-2.37.45,7.93,7.93,0,0,0-1.92,1.12,9,9,0,0,0-1.54,1.55,14.3,14.3,0,0,0-1.16,1.63l-5.16-3.56a11.4,11.4,0,0,1,2.05-3.26,12.37,12.37,0,0,1,2.9-2.4A13.46,13.46,0,0,1,441.09,97a15,15,0,0,1,3.91-.51,15.71,15.71,0,0,1,4.45.65,11.39,11.39,0,0,1,3.94,2.08,10.83,10.83,0,0,1,2.85,3.64,12,12,0,0,1,1.09,5.31,11.33,11.33,0,0,1-.44,3.35,9.24,9.24,0,0,1-1.28,2.64,10.93,10.93,0,0,1-1.95,2.13,20.93,20.93,0,0,1-2.55,1.84c-.79.48-1.58.93-2.37,1.36a14.69,14.69,0,0,0-2.17,1.46,7,7,0,0,0-1.6,1.84,4.84,4.84,0,0,0-.62,2.51Zm.12,13.82V131h6.58v8.18Z"
                                style="fill: rgb(255, 255, 255); transform-origin: 444.972px 117.835px 0px;"
                                id="elh5y1o811fwh" class="animable"></path>
                        </g>
                        <defs>
                            <filter id="active" height="200%">
                                <feMorphology in="SourceAlpha" result="DILATED" operator="dilate" radius="2">
                                </feMorphology>
                                <feFlood flood-color="#32DFEC" flood-opacity="1" result="PINK"></feFlood>
                                <feComposite in="PINK" in2="DILATED" operator="in" result="OUTLINE">
                                </feComposite>
                                <feMerge>
                                    <feMergeNode in="OUTLINE"></feMergeNode>
                                    <feMergeNode in="SourceGraphic"></feMergeNode>
                                </feMerge>
                            </filter>
                            <filter id="hover" height="200%">
                                <feMorphology in="SourceAlpha" result="DILATED" operator="dilate" radius="2">
                                </feMorphology>
                                <feFlood flood-color="#ff0000" flood-opacity="0.5" result="PINK"></feFlood>
                                <feComposite in="PINK" in2="DILATED" operator="in" result="OUTLINE">
                                </feComposite>
                                <feMerge>
                                    <feMergeNode in="OUTLINE"></feMergeNode>
                                    <feMergeNode in="SourceGraphic"></feMergeNode>
                                </feMerge>
                                <feColorMatrix type="matrix"
                                    values="0   0   0   0   0                0   1   0   0   0                0   0   0   0   0                0   0   0   1   0 ">
                                </feColorMatrix>
                            </filter>
                        </defs>
                    </svg>
                </div>
                <p class="mb-0 bg-light border border-1 rounded p-4 shadow-sm">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia est quidem quaerat nam, dolor in
                    recusandae, nobis doloremque dolorum animi deleniti. Nulla reiciendis accusantium illum quaerat nam
                    beatae eius sunt.
                </p>
            </div>
        </div>
    </div>
@endsection
