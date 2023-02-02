<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preload" as="style" href="assets/fonts/style.css"/>
    <link rel="preload" as="style" href="assets/fonts/fonts.css"/>
    <link rel="preload" as="style" href="assets/css/plugins.css"/>
    <link rel="preload" as="style" href="assets/css/fm.revealator.jquery.min.css"/>
    <link rel="preload" as="style" href="assets/css/style.css"/>
    <link rel="preload" as="style" href="assets/css/media.css"/>
    <link rel="stylesheet" type="text/css" href="assets/fonts/style.css"/>
    <link rel="stylesheet" type="text/css" href="assets/fonts/fonts.css"/>
    <link rel="stylesheet" type="text/css" href="assets/css/plugins.css"/>
    <link rel="stylesheet" type="text/css" href="assets/css/fm.revealator.jquery.min.css"/>
    <link rel="stylesheet" type="text/css" href="assets/css/style.css"/>
    <link rel="stylesheet" type="text/css" href="assets/css/media.css"/>
    <title>MediaService</title>
</head>
<body>
<div class="wrapper">
    <header class="header">
        <div class="container-fluid h-100">
            <div class="d-flex align-items-center h-100">
                <div class="logo-container">
                    <a href="/" class="logo">
                        <svg width="198" height="68" viewBox="0 0 198 68" fill="none"
                             xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_601_6654)">
                                <path
                                    d="M83.93 35.2067C85.052 35.2067 85.9486 35.5728 86.62 36.3051C87.2914 37.0373 87.6273 38.0177 87.6279 39.2464V45.2859H85.1045V39.4232C85.1045 38.8343 84.9609 38.3766 84.6738 38.0501C84.3867 37.7236 83.9825 37.56 83.4614 37.5594C82.8871 37.5594 82.4401 37.749 82.1204 38.1281C81.8008 38.5072 81.6412 39.0565 81.6418 39.776V45.2859H79.1183V39.4232C79.1183 38.8343 78.9748 38.3766 78.6877 38.0501C78.4005 37.7236 77.9961 37.56 77.4743 37.5594C76.9134 37.5594 76.4667 37.749 76.1343 38.1281C75.802 38.5072 75.6358 39.0565 75.6358 39.776V45.2859H73.1123V35.4815H75.6358V36.5209C76.2227 35.6448 77.1275 35.2067 78.3502 35.2067C79.5499 35.2067 80.4369 35.6774 81.0112 36.6189C81.6656 35.6774 82.6386 35.2067 83.93 35.2067Z"
                                    fill="white" class="letter"/>
                                <path
                                    d="M92.4006 41.4231C92.7402 42.6517 93.6597 43.2661 95.1593 43.2661C96.1244 43.2661 96.8546 42.9392 97.3498 42.2856L99.3847 43.4647C98.4196 44.8632 96.9981 45.5625 95.1204 45.5625C93.5026 45.5625 92.2057 45.0721 91.2298 44.0914C90.2538 43.1107 89.7625 41.8748 89.7559 40.3837C89.7559 38.9066 90.2384 37.6743 91.2035 36.6869C92.1686 35.6995 93.4076 35.2061 94.9204 35.2067C96.3554 35.2067 97.5392 35.7034 98.4718 36.6969C99.4043 37.6903 99.8706 38.9193 99.8706 40.3837C99.8682 40.7324 99.8352 41.0802 99.7719 41.4231H92.4006ZM92.3617 39.4622H97.3498C97.2069 38.7971 96.9104 38.3004 96.4604 37.9721C96.0142 37.646 95.4744 37.4738 94.9222 37.4814C94.2448 37.4814 93.6842 37.6546 93.2402 38.0011C92.7963 38.3476 92.5034 38.8346 92.3617 39.4622Z"
                                    fill="white" class="letter"/>
                                <path
                                    d="M109.459 31.5625H111.982V45.2859H109.459V44.1295C108.715 45.0836 107.66 45.5607 106.292 45.5607C104.975 45.5607 103.85 45.0606 102.918 44.0606C101.986 43.0605 101.519 41.8349 101.518 40.3837C101.518 38.9326 101.984 37.7069 102.916 36.7069C103.849 35.7068 104.974 35.2067 106.29 35.2067C107.66 35.2067 108.716 35.6838 109.457 36.6379L109.459 31.5625ZM104.813 42.3781C105.327 42.8945 105.976 43.1527 106.759 43.1527C107.542 43.1527 108.188 42.8945 108.696 42.3781C109.205 41.8612 109.459 41.1976 109.459 40.3873C109.459 39.5771 109.205 38.9135 108.696 38.3965C108.188 37.8802 107.542 37.622 106.759 37.622C105.976 37.622 105.327 37.8802 104.813 38.3965C104.297 38.9135 104.04 39.5771 104.04 40.3873C104.041 41.1976 104.298 41.86 104.813 42.3745V42.3781Z"
                                    fill="white" class="letter"/>
                                <path
                                    d="M116.032 34.3043C115.624 34.2975 115.235 34.1321 114.946 33.8431C114.658 33.554 114.493 33.1639 114.486 32.7552C114.485 32.5505 114.526 32.3477 114.605 32.159C114.684 31.9702 114.8 31.7995 114.947 31.6569C115.085 31.5072 115.253 31.3882 115.44 31.3073C115.627 31.2264 115.829 31.1855 116.032 31.187C116.239 31.1842 116.444 31.2246 116.634 31.3054C116.825 31.3863 116.996 31.506 117.138 31.6569C117.284 31.7995 117.401 31.9703 117.48 32.159C117.558 32.3477 117.599 32.5505 117.598 32.7552C117.599 32.9585 117.559 33.16 117.48 33.3472C117.401 33.5344 117.285 33.7034 117.138 33.8436C116.995 33.9921 116.823 34.1097 116.632 34.189C116.442 34.2682 116.238 34.3075 116.032 34.3043ZM114.78 45.2859V35.4815H117.304V45.2859H114.78Z"
                                    fill="white" class="letter"/>
                                <path
                                    d="M127.535 35.4815H130.058V45.2859H127.535V44.1295C126.779 45.0836 125.715 45.5607 124.346 45.5607C123.042 45.5607 121.924 45.0606 120.991 44.0606C120.057 43.0605 119.591 41.8349 119.592 40.3837C119.592 38.9326 120.058 37.7069 120.991 36.7069C121.923 35.7068 123.041 35.2067 124.346 35.2067C125.715 35.2067 126.779 35.6838 127.535 36.6379V35.4815ZM122.879 42.3745C123.387 42.8909 124.033 43.1491 124.815 43.1491C125.598 43.1491 126.247 42.8909 126.762 42.3745C127.277 41.8575 127.535 41.1939 127.535 40.3837C127.535 39.5735 127.277 38.9099 126.761 38.3929C126.246 37.8765 125.597 37.6184 124.814 37.6184C124.032 37.6184 123.387 37.8765 122.878 38.3929C122.37 38.9099 122.115 39.5735 122.115 40.3837C122.115 41.1939 122.37 41.8575 122.879 42.3745Z"
                                    fill="white" class="letter"/>
                                <path
                                    d="M135.086 38.2659C135.086 38.5271 135.259 38.7388 135.604 38.9008C136.012 39.085 136.436 39.2293 136.871 39.3316C137.375 39.4587 137.872 39.6159 138.358 39.8023C138.86 39.995 139.299 40.3245 139.624 40.7537C139.969 41.1982 140.141 41.7538 140.143 42.4208C140.143 43.4275 139.768 44.202 139.018 44.7444C138.268 45.2868 137.333 45.5589 136.213 45.5607C134.205 45.5607 132.835 44.7828 132.104 43.227L134.284 41.9927C134.571 42.8392 135.21 43.2624 136.201 43.2624C137.101 43.2624 137.551 42.9816 137.551 42.4198C137.551 42.1577 137.378 41.9455 137.033 41.785C136.625 41.6 136.201 41.4522 135.766 41.3433C135.261 41.2096 134.765 41.0461 134.28 40.8535C133.784 40.659 133.347 40.3379 133.013 39.9221C132.667 39.4988 132.494 38.9661 132.494 38.324C132.494 37.3565 132.85 36.595 133.561 36.0393C134.272 35.4836 135.156 35.2058 136.211 35.2058C136.969 35.1964 137.717 35.3819 138.383 35.7446C139.033 36.1024 139.568 36.6368 139.928 37.2864L137.777 38.4655C137.464 37.8004 136.942 37.4678 136.211 37.4678C135.924 37.4566 135.641 37.5318 135.397 37.6837C135.3 37.7457 135.22 37.8319 135.165 37.9339C135.111 38.0359 135.083 38.1502 135.086 38.2659Z"
                                    fill="white" class="letter"/>
                                <path
                                    d="M144.242 41.4231C144.581 42.6517 145.501 43.2661 147 43.2661C147.966 43.2661 148.696 42.9392 149.191 42.2856L151.226 43.4647C150.261 44.8632 148.839 45.5625 146.961 45.5625C145.344 45.5625 144.047 45.0721 143.071 44.0914C142.095 43.1107 141.605 41.8748 141.601 40.3837C141.601 38.9066 142.083 37.6743 143.048 36.6869C144.013 35.6995 145.252 35.2061 146.765 35.2067C148.2 35.2067 149.384 35.7034 150.316 36.6969C151.249 37.6903 151.715 38.9193 151.715 40.3837C151.713 40.7324 151.68 41.0802 151.617 41.4231H144.242ZM144.203 39.4622H149.191C149.048 38.7971 148.751 38.3004 148.302 37.9721C147.855 37.6459 147.316 37.4737 146.763 37.4814C146.085 37.4814 145.525 37.6546 145.081 38.0011C144.638 38.3476 144.345 38.8346 144.203 39.4622Z"
                                    fill="white" class="letter"/>
                                <path
                                    d="M156.488 37.1676C156.696 36.5727 157.109 36.0719 157.652 35.7554C158.203 35.4391 158.827 35.2765 159.462 35.2847V38.109C158.739 38.0065 158.005 38.1741 157.398 38.5797C156.791 38.9848 156.488 39.6581 156.488 40.5996V45.2859H153.965V35.4815H156.488V37.1676Z"
                                    fill="white" class="letter"/>
                                <path
                                    d="M167.854 35.4815H170.632L166.915 45.2859H164.039L160.322 35.4815H163.1L165.467 42.3446L167.854 35.4815Z"
                                    fill="white" class="letter"/>
                                <path
                                    d="M173.585 34.3043C173.177 34.298 172.788 34.1327 172.5 33.8436C172.211 33.5544 172.046 33.1641 172.04 32.7552C172.039 32.5505 172.079 32.3477 172.158 32.159C172.237 31.9703 172.353 31.7995 172.5 31.6568C172.638 31.5073 172.806 31.3883 172.993 31.3074C173.18 31.2265 173.382 31.1855 173.585 31.187C173.792 31.1843 173.997 31.2247 174.187 31.3055C174.377 31.3864 174.548 31.5061 174.69 31.6568C174.836 31.7995 174.952 31.9703 175.031 32.159C175.11 32.3477 175.151 32.5505 175.149 32.7552C175.151 32.9585 175.111 33.16 175.032 33.3472C174.953 33.5344 174.837 33.7033 174.69 33.8435C174.547 33.9919 174.375 34.1093 174.185 34.1886C173.995 34.2678 173.791 34.3072 173.585 34.3043ZM172.333 45.2859V35.4815H174.856V45.2859H172.333Z"
                                    fill="white" class="letter"/>
                                <path
                                    d="M182.311 45.5607C180.837 45.5607 179.608 45.064 178.623 44.0705C177.638 43.0771 177.146 41.8482 177.146 40.3837C177.146 38.9199 177.639 37.6909 178.623 36.6969C179.608 35.7028 180.837 35.2061 182.311 35.2067C183.224 35.1965 184.123 35.4337 184.912 35.8933C185.67 36.3243 186.288 36.9639 186.693 37.7363L184.521 39.0106C184.328 38.6078 184.018 38.273 183.631 38.0501C183.225 37.8127 182.761 37.6907 182.291 37.6973C181.535 37.6973 180.909 37.9488 180.413 38.4519C179.917 38.9549 179.669 39.5989 179.67 40.3837C179.67 41.1552 179.918 41.7925 180.413 42.2956C180.908 42.7987 181.534 43.0502 182.291 43.0502C182.766 43.0581 183.234 42.9398 183.648 42.7074C184.035 42.4896 184.346 42.1573 184.538 41.7559L186.729 43.0112C186.3 43.7817 185.671 44.4218 184.91 44.8641C184.123 45.3294 183.224 45.5702 182.311 45.5607Z"
                                    fill="white" class="letter"/>
                                <path
                                    d="M190.527 41.4231C190.865 42.6517 191.785 43.266 193.285 43.266C194.25 43.266 194.98 42.9392 195.476 42.2856L197.51 43.4647C196.545 44.8632 195.124 45.5625 193.246 45.5625C191.629 45.5625 190.332 45.0721 189.355 44.0914C188.379 43.1106 187.89 41.8754 187.889 40.3855C187.889 38.9084 188.371 37.6761 189.336 36.6887C190.301 35.7013 191.54 35.2079 193.053 35.2085C194.488 35.2085 195.671 35.7052 196.604 36.6987C197.536 37.6921 198.002 38.9211 198.002 40.3855C198 40.7342 197.968 41.082 197.905 41.4249L190.527 41.4231ZM190.487 39.4622H195.476C195.333 38.7971 195.036 38.3004 194.586 37.9721C194.14 37.6457 193.6 37.4735 193.048 37.4814C192.369 37.4814 191.808 37.6546 191.365 38.0011C190.922 38.3475 190.629 38.8346 190.487 39.4622Z"
                                    fill="white" class="letter"/>
                                <path d="M21.5967 45.6251L41.8388 56.5949L61.8736 45.0265V23.3436L21.5967 45.6251Z"
                                      fill="url(#paint0_linear_601_6654)"/>
                                <path d="M21.596 68L1.45801 56.9685L21.596 45.6251L41.8381 56.5949L21.596 68Z"
                                      fill="url(#paint1_linear_601_6654)"/>
                                <path d="M61.8698 0L61.8761 22.2371L40.0534 34.3696L19.5742 23.6374L61.8698 0Z"
                                      fill="url(#paint2_linear_601_6654)"/>
                                <path d="M20.0186 45.2859L40.0535 34.3696L19.5743 23.6374L0 34.3551L20.0186 45.2859Z"
                                      fill="url(#paint3_linear_601_6654)"/>
                                <path d="M19.5743 23.6374L0 34.3551V11.9838L19.5743 23.6374Z"
                                      fill="url(#paint4_linear_601_6654)"/>
                                <path d="M61.8765 22.2371L42.541 10.802L61.8702 0L61.8765 22.2371Z"
                                      fill="url(#paint5_linear_601_6654)"/>
                            </g>
                            <defs>
                                <linearGradient id="paint0_linear_601_6654" x1="41.513" y1="34.0993" x2="51.3591"
                                                y2="51.1117" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#F9D518"/>
                                    <stop offset="0.08" stop-color="#F7B81D"/>
                                    <stop offset="0.2" stop-color="#F59524"/>
                                    <stop offset="0.31" stop-color="#F37C28"/>
                                    <stop offset="0.41" stop-color="#F26C2B"/>
                                    <stop offset="0.49" stop-color="#F2672C"/>
                                    <stop offset="0.93" stop-color="#EE3152"/>
                                </linearGradient>
                                <linearGradient id="paint1_linear_601_6654" x1="1.45801" y1="56.8125" x2="41.8381"
                                                y2="56.8125" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#F9ED32"/>
                                    <stop offset="0.487993" stop-color="#F2914B"/>
                                    <stop offset="0.97" stop-color="#F2672C"/>
                                </linearGradient>
                                <linearGradient id="paint2_linear_601_6654" x1="24.5596" y1="32.2926" x2="66.5426"
                                                y2="8.1121" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#567CBE"/>
                                    <stop offset="0.13" stop-color="#6186C4"/>
                                    <stop offset="0.27" stop-color="#668AC6"/>
                                    <stop offset="0.52" stop-color="#7173B7"/>
                                    <stop offset="0.81" stop-color="#7A5EA9"/>
                                    <stop offset="1" stop-color="#7E57A4"/>
                                </linearGradient>
                                <linearGradient id="paint3_linear_601_6654" x1="20.0267" y1="23.6374" x2="20.0267"
                                                y2="45.2859" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#5FC8D9"/>
                                    <stop offset="0.21" stop-color="#5DC0D6"/>
                                    <stop offset="0.54" stop-color="#59A9CE"/>
                                    <stop offset="0.95" stop-color="#5183C1"/>
                                    <stop offset="1" stop-color="#507EBF"/>
                                </linearGradient>
                                <linearGradient id="paint4_linear_601_6654" x1="9.85775" y1="17.6886" x2="0.158801"
                                                y2="34.4474" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#86D3E1"/>
                                    <stop offset="0.17" stop-color="#82D1E1"/>
                                    <stop offset="0.35" stop-color="#75CAE2"/>
                                    <stop offset="0.54" stop-color="#5FBEE2"/>
                                    <stop offset="0.73" stop-color="#42AEE3"/>
                                    <stop offset="0.87" stop-color="#37ACE2"/>
                                    <stop offset="1" stop-color="#27AAE1"/>
                                </linearGradient>
                                <linearGradient id="paint5_linear_601_6654" x1="61.8964" y1="22.2253" x2="52.0876"
                                                y2="5.27718" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#7E57A4"/>
                                    <stop offset="0.34" stop-color="#7E73B6"/>
                                    <stop offset="0.76" stop-color="#7F90C8"/>
                                    <stop offset="1" stop-color="#7F9BCF"/>
                                </linearGradient>
                                <clipPath id="clip0_601_6654">
                                    <rect width="198" height="68" fill="white" class="letter"/>
                                </clipPath>
                            </defs>
                        </svg>
                        <span class="logo-text">
									<img src="/images/logo-text.png" alt="">
									<img src="/images/logo-text-b.png" alt="" class="black">
								</span>
                    </a>
                </div>
                <button class="menu-button d-flex  align-items-center">
                    <span class="but-icon"></span>
                </button>
                <div class="main-menu w-100 d-flex align-items-center justify-content-between">
                    <div class="feed-container d-block d-md-none">
                        <button class="button-default sml header-feed d-inline-flex align-items-center"
                                data-toggle="modal" data-target="#m-feed">
                            <span class="value">Зв’язатись</span>
                            <span class="ic icon-arrow-right"></span>
                            <span class="ic mr icon-feed"></span>
                            <span class="value mr">Зв’яжіться з нами</span>
                        </button>
                    </div>
                    <nav class="menu-top">
                        <ul class="nav align-items-center justify-content-between">
                            <li class="d-flex align-items-center">
                                <div class="d-flex align-items-center justify-content-between">
                                    <a href="#" class="nav-item">Про компанію</a>
                                </div>
                            </li>
                            <li class="d-flex align-items-center">
                                <div class="d-flex align-items-center justify-content-between">
                                    <a href="#" class="nav-item">Послуги</a>
                                </div>
                            </li>
                            <li class="d-flex align-items-center">
                                <div class="d-flex align-items-center justify-content-between">
                                    <a href="#" class="nav-item">Продукти</a>
                                </div>
                            </li>
                            <li class="drop d-flex align-items-center">
                                <div class="d-flex align-items-center justify-content-between">
                                    <a href="#" class="nav-item">Товари</a>
                                    <span class="icc drop-but icon-arrow-down"></span>
                                </div>
                                <div class="drop-container">
                                    <div class="drop-inner">
                                        <div class="container-fluid">
                                            <div class="drop-catalog d-flex flex-column flex-wrap align-items-start">
                                                <div class="item d-flex align-item-start">
                                                    <div class="item-image">
                                                        <img src="/images/c1.png" alt="">
                                                    </div>
                                                    <div class="item-info">
                                                        <a href="#" class="item-name">Реєстратори розрахункових
                                                            операцій</a>
                                                        <a href="#" class="item-link">Касові апарати</a>
                                                        <a href="#" class="item-link">Фіскальні реєстратори</a>
                                                        <a href="#" class="item-link">Дисплеї покупця</a>
                                                    </div>
                                                </div>
                                                <div class="item d-flex align-item-start">
                                                    <div class="item-image">
                                                        <img src="/images/c2.png" alt="">
                                                    </div>
                                                    <div class="item-info">
                                                        <a href="#" class="item-name">Сканери штрихкодів</a>
                                                        <a href="#" class="item-link">Ручні провідні</a>
                                                        <a href="#" class="item-link">Багатоплощинні</a>
                                                        <a href="#" class="item-link">Безпровідні</a>
                                                        <a href="#" class="item-link">Стаціонарні</a>
                                                    </div>
                                                </div>
                                                <div class="item d-flex align-item-start">
                                                    <div class="item-image">
                                                        <img src="/images/c3.png" alt="">
                                                    </div>
                                                    <div class="item-info">
                                                        <a href="#" class="item-name">Принтери чеків</a>
                                                        <a href="#" class="item-link">Мобільні</a>
                                                        <a href="#" class="item-link">Настільні</a>
                                                    </div>
                                                </div>
                                                <div class="item d-flex align-item-start">
                                                    <div class="item-image">
                                                        <img src="/images/c4.png" alt="">
                                                    </div>
                                                    <div class="item-info">
                                                        <a href="#" class="item-name">Лічильники банкнот</a>
                                                        <a href="#" class="item-link">Льчильники</a>
                                                        <a href="#" class="item-link">Сортувальники</a>
                                                    </div>
                                                </div>
                                                <div class="item d-flex align-item-start">
                                                    <div class="item-image">
                                                        <img src="/images/c5.png" alt="">
                                                    </div>
                                                    <div class="item-info">
                                                        <a href="#" class="item-name">POS-системи</a>
                                                        <a href="#" class="item-link">POS-термінали</a>
                                                        <a href="#" class="item-link">POS-монітори</a>
                                                        <a href="#" class="item-link">Ваги платформи</a>
                                                    </div>
                                                </div>
                                                <div class="item d-flex align-item-start">
                                                    <div class="item-image">
                                                        <img src="/images/c6.png" alt="">
                                                    </div>
                                                    <div class="item-info">
                                                        <a href="#" class="item-name">Ваги</a>
                                                        <a href="#" class="item-link">Торгові</a>
                                                        <a href="#" class="item-link">Ваги з чекодруком</a>
                                                        <a href="#" class="item-link">Ваги платформи</a>
                                                    </div>
                                                </div>
                                                <div class="item d-flex align-item-start">
                                                    <div class="item-image">
                                                        <img src="/images/c7.png" alt="">
                                                    </div>
                                                    <div class="item-info">
                                                        <a href="#" class="item-name">Витратні матеріали</a>
                                                        <a href="#" class="item-link">Касові стрічки</a>
                                                        <a href="#" class="item-link">Ектикетки</a>
                                                    </div>
                                                </div>
                                                <div class="item d-flex align-item-start">
                                                    <div class="item-image">
                                                        <img src="/images/c8.png" alt="">
                                                    </div>
                                                    <div class="item-info">
                                                        <a href="#" class="item-name">Принтери етикеток</a>
                                                        <a href="#" class="item-link">Настільні</a>
                                                        <a href="#" class="item-link">Промислові</a>
                                                    </div>
                                                </div>
                                                <div class="item d-flex align-items-center">
                                                    <div class="item-image">
                                                        <img src="/images/c9.png" alt="">
                                                    </div>
                                                    <div class="item-info">
                                                        <a href="#" class="item-name">Термінали збору данних</a>
                                                    </div>
                                                </div>
                                                <div class="item d-flex align-items-center">
                                                    <div class="item-image">
                                                        <img src="/images/c10.png" alt="">
                                                    </div>
                                                    <div class="item-info">
                                                        <a href="#" class="item-name">Детектори валют</a>
                                                    </div>
                                                </div>
                                                <div class="item d-flex align-items-center">
                                                    <div class="item-image">
                                                        <img src="/images/c11.png" alt="">
                                                    </div>
                                                    <div class="item-info">
                                                        <a href="#" class="item-name">Термінали самообслуговування</a>
                                                    </div>
                                                </div>
                                                <div class="item d-flex align-items-center">
                                                    <div class="item-image">
                                                        <img src="/images/c12.png" alt="">
                                                    </div>
                                                    <div class="item-info">
                                                        <a href="#" class="item-name">Грошові скриньки</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="d-flex align-items-center">
                                <div class="d-flex align-items-center justify-content-between">
                                    <a href="#" class="nav-item">Проекти</a>
                                </div>
                            </li>
                            <li class="d-flex align-items-center">
                                <div class="d-flex align-items-center justify-content-between">
                                    <a href="#" class="nav-item">Навчання</a>
                                </div>
                            </li>
                            <li class="d-flex align-items-center">
                                <div class="d-flex align-items-center justify-content-between">
                                    <a href="#" class="nav-item">Новини</a>
                                </div>
                            </li>
                            <li class="d-flex align-items-center">
                                <div class="d-flex align-items-center justify-content-between">
                                    <a href="#" class="nav-item">Контакти</a>
                                </div>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="burger-menu">
                    <button class="burger-menu-button" type="button">
								<span class="burger-menu-icon">
									<span class="burger-menu-line"></span>
									<span class="burger-menu-line clean"></span>
									<span class="burger-menu-line"></span>
								</span>
                        <span class="burger-close"><span class="icon-close ic"></span></span>
                    </button>
                    <div class="drop-container">
                        <div class="drop-inner">
                            <div class="container-fluid">
                                <div class="drop-catalog d-flex justify-content-center">
                                    <div class="item-container">
                                        <div class="item-title">Послуги</div>
                                        <a href="#" class="item-link">BAS</a>
                                        <a href="#" class="item-link">Веб-розробка</a>
                                        <a href="#" class="item-link">Обслуговування сервісів та мереж</a>
                                        <a href="#" class="item-link">Обслуговування РРО/ПРРО</a>
                                        <a href="#" class="item-link">Розробка мобільних додатків</a>
                                    </div>
                                    <div class="item-container serv">
                                        <div class="item-title">Продукти</div>
                                        <a href="#" class="item-link">Програмні рішення BAS</a>
                                        <a href="#" class="item-link">ProСкануй</a>
                                        <a href="#" class="item-link">ProДавай</a>
                                        <a href="#" class="item-link">Dilosoft</a>
                                        <a href="#" class="item-link">CRM системи</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="feed-container d-none d-md-block">
                    <button class="button-default sml header-feed d-inline-flex align-items-center" data-toggle="modal"
                            data-target="#m-feed">
                        <span class="value">Зв’язатись</span>
                        <span class="ic icon-arrow-right"></span>
                        <span class="ic mr icon-feed"></span>
                        <span class="value mr">Зв’яжіться з нами</span>
                    </button>
                </div>
            </div>
        </div>
    </header>
    <div class="content">
        <div class="container-fluid relative">
            <div class="grid-main">
                <div class="line-1"></div>
                <div class="line-2"></div>
                <div class="line-3"></div>
                <div class="line-4"></div>
            </div>
            <section class="error-404 d-xl-flex align-items-start header-fix">
                <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
                <div class="error-image order-12">
                    <div class="anim">
                        <lottie-player src="/images/404.json" background="transparent" speed="1"
                                       style="width: 250px; height: 311px;" loop autoplay></lottie-player>
                    </div>
                    <img src="/images/404.svg" alt="">
                </div>
                <div class="error-info">
                    <div class="title">Шкода, але ця сторінка недоступна</div>
                    <div class="anons">Можливо посилання було пошкоджено або сторінки більше не існує.</div>
                    <a href="/" class="button-default error-button d-inline-flex align-items-center">
                        <span class="value">повернутись на головну</span>
                        <span class="ic icon-arrow-right"></span>
                    </a>
                    <div class="error-text">Спробуйте пошукати потрібну інформацію в популярних розділах</div>
                    <div class="error-links">
                        <a href="#" class="item">Послуги</a>
                        <a href="#" class="item">Продукти</a>
                        <a href="#" class="item">Товари</a>
                    </div>
                </div>
            </section>
        </div>
    </div>
    <footer class="footer">
        <div class="footer-top">
            <div class="container-fluid">
                <div class="d-lg-flex align-items-start footer-to-form">
                    <div class="footer-title">
                        <div class="item">Автоматизуємо</div>
                        <div class="item">ваш бізнес</div>
                    </div>
                    <button class="button-default white footer-button d-inline-flex align-items-center"
                            data-toggle="modal" data-target="#m-feed">
                        <span class="value">зв’язатись з нами</span>
                        <span class="ic icon-arrow-right"></span>
                    </button>
                </div>
                <div class="footer-container d-flex align-items-start">
                    <div class="footer-info">
                        <a href="/" class="logo"><img src="/images/logo-footer.svg" alt=""></a>
                        <div class="info-item">
                            <div class="data">Відділ продажу</div>
                            <a href="tel:0322420727" class="value">(032) 242-07-27</a>
                        </div>
                        <div class="info-item">
                            <div class="data">Лінія підтримки</div>
                            <a href="tel:0322420727" class="value">(032) 242-07-27</a>
                        </div>
                        <div class="info-item">
                            <div class="data">Email</div>
                            <a href="mailto:sales@medias.com.ua" class="value email">sales@medias.com.ua</a>
                        </div>
                        <div class="footer-seti d-flex align-items-center">
                            <a href="#" class="item d-flex align-items-center justify-content-center"><span
                                    class="ic icon-fb"></span></a>
                            <a href="#" class="item d-flex align-items-center justify-content-center"><span
                                    class="ic icon-instagram"></span></a>
                            <a href="#" class="item d-flex align-items-center justify-content-center"><span
                                    class="ic icon-youtube"></span></a>
                            <a href="#" class="item d-flex align-items-center justify-content-center"><span
                                    class="ic icon-linkedin"></span></a>
                        </div>
                    </div>
                    <div class="footer-navs">
                        <div class="row">
                            <div class="col-4">
                                <div class="nav-container">
                                    <div class="nav-title">Компанія</div>
                                    <ul class="nav flex-column">
                                        <li>
                                            <a href="#" class="nav-item">Про нас</a>
                                        </li>
                                        <li>
                                            <a href="#" class="nav-item">Новини</a>
                                        </li>
                                        <li>
                                            <a href="#" class="nav-item">Проекти компанії</a>
                                        </li>
                                        <li>
                                            <a href="#" class="nav-item">Контакти</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="nav-container">
                                    <div class="nav-title">Послуги</div>
                                    <ul class="nav flex-column">
                                        <li>
                                            <a href="#" class="nav-item">BAS</a>
                                        </li>
                                        <li>
                                            <a href="#" class="nav-item">Веб-розробка</a>
                                        </li>
                                        <li>
                                            <a href="#" class="nav-item">Обслуговування сервісів та мереж</a>
                                        </li>
                                        <li>
                                            <a href="#" class="nav-item">Розробка мобільних додатків</a>
                                        </li>
                                        <li>
                                            <a href="#" class="nav-item">Обслуговування РРО / ПРРО</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="nav-container">
                                    <div class="nav-title">Товари</div>
                                    <ul class="nav flex-column">
                                        <li>
                                            <a href="#" class="nav-item">POS-термінали</a>
                                        </li>
                                        <li>
                                            <a href="#" class="nav-item">Сканери</a>
                                        </li>
                                        <li>
                                            <a href="#" class="nav-item">Принтери чеків</a>
                                        </li>
                                        <li>
                                            <a href="#" class="nav-item">Грошові скриньки</a>
                                        </li>
                                        <li>
                                            <a href="#" class="nav-item">Реєстратори розрахункових операцій</a>
                                        </li>
                                        <li>
                                            <a href="#" class="nav-item">Ваги</a>
                                        </li>
                                        <li>
                                            <a href="#" class="nav-item">Термінали збору данних</a>
                                        </li>
                                        <li>
                                            <a href="#" class="nav-item">Витратні матеріали</a>
                                        </li>
                                        <li>
                                            <a href="#" class="nav-item">POS системи</a>
                                        </li>
                                    </ul>
                                    <a href="#" class="link-default white more-nav d-inline-flex align-items-center">
                                        <span class="ic2"><img src="/images/arrow-left2-w.svg" alt=""></span>
                                        <span class="value">Всі товари</span>
                                        <span class="ic"><img src="/images/arrow-right.svg" alt=""></span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="nav-container">
                                    <div class="nav-title">продукти</div>
                                    <ul class="nav flex-column">
                                        <li>
                                            <a href="#" class="nav-item">BAS</a>
                                        </li>
                                        <li>
                                            <a href="#" class="nav-item">PROСкануй</a>
                                        </li>
                                        <li>
                                            <a href="#" class="nav-item">PROДавай</a>
                                        </li>
                                        <li>
                                            <a href="#" class="nav-item">Dilosoft</a>
                                        </li>
                                        <li>
                                            <a href="#" class="nav-item">CRM-системи</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="nav-container">
                                    <div class="nav-title">продукти</div>
                                    <ul class="nav flex-column">
                                        <li>
                                            <a href="#" class="nav-item">Навчальний центр “Курси BAS”</a>
                                        </li>
                                        <li>
                                            <a href="#" class="nav-item">Тестування “Професіонал”</a>
                                        </li>
                                        <li>
                                            <a href="#" class="nav-item">Навчальні відео</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer-bottom">
            <div class="container-fluid">
                <div class="d-md-flex align-items-center justify-content-between">
                    <div class="copy">Mediaservice © 2023</div>
                    <div class="dev">
                        <span class="data">Design and develop</span>
                        <a href="https://esfirum.com" target="_blank"><img src="/images/esfirum.svg" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div>
<div class="modal fade" id="m-feed" tabindex="-1" aria-labelledby="m-feedLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>
            <div class="modal-form">
                <div class="d-md-flex align-items-center justify-content-between">
                    <div class="form-title-container">
                        <div class="form-title">Зв’яжітьс’я з нами</div>
                        <div class="title-anons">Заповніть форму нище і ми вам зателефонуємо!</div>
                    </div>
                    <div class="form-contacts">
                        <a href="tel:0322420727" class="item">(032) 242-07-27</a>
                        <a href="mailto:sales@medias.com.ua" class="item">sales@medias.com.ua</a>
                    </div>
                </div>
                <form action="" class="form">
                    <div class="form-container d-md-flex">
                        <div class="form-left">
                            <div class="input-container">
                                <label class="label">Ваше ім’я</label>
                                <input type="text" class="input" name="imya" autocomplete="off">
                            </div>
                            <div class="input-container">
                                <label class="label">Ваш email*</label>
                                <input type="text" class="input email important" name="email" autocomplete="off">
                            </div>
                            <div class="input-container">
                                <label class="label">Номер телефону</label>
                                <input type="text" class="input phone" name="phone" autocomplete="off">
                            </div>
                        </div>
                        <div class="form-right">
                            <div class="input-container">
                                <label class="label">Повідомлення</label>
                                <textarea name="message" class="textarea"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="form-bottom d-md-flex">
                        <div class="bottom-left">
                            <div class="checkbox">
                                <input type="checkbox" name="politica" id="politica" class="check important">
                                <label for="politica">Даю згоду на обробку персональних данних, згідно з <a href="#">політикою
                                        конфіденційності</a></label>
                            </div>
                        </div>
                        <div class="bottom-right">
                            <button class="button-default bgl submit d-flex align-items-center justify-content-center"
                                    type="submit">
                                <span class="value">надіслати</span>
                                <span class="ic icon-arrow-right"></span>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="assets/js/plugins.js"></script>
<script src="assets/js/smoothscroll.js"></script>
<script src="assets/js/simpleParallax.min.js"></script>
<script src="assets/js/jquery.spincrement.min.js"></script>
<script src="assets/js/scripts.js"></script>
</body>
</html>
