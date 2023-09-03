<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta content='true' name='HandheldFriendly'/>
    <meta content='width' name='MobileOptimized'/>
    <meta content='yes' name='apple-mobile-web-app-capable'/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php wp_title(); ?></title>
	<?php wp_head(); ?>
</head>
<body>

<?php if ( is_front_page() ) { ?>
    <div class="home">
<?php } elseif (is_404()) { ?>
    <div class="page-404">
<?php } else { ?>
        <div class="inner-page">
            <?php } ?>

<header class="main-header">
    <div class="main-header__first-background">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/background-figure-1.png">
    </div>
    <div class="main-header__second-background">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/background-figure-2.png">
    </div>
    <div class="main-header__mobile-background" id="backgroundMobile">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/background-figure-3.png">
    </div>
    <div class="main-header__menu-background" id="backgroundMenu">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/background-menu.png">
    </div>
    <div class="main-header__header">
        <div class="header__top-header">
            <div class="top-header__left-content">
                <?php if ( get_field( 'logo-event', 'option' ) ) : ?>
                    <img class="left-content__logo" src="<?php the_field( 'logo-event', 'option' ); ?>" />
                <?php endif ?>
            </div>
            <div class="top-header__right-content">
                <a class="right-content__button-registration" href="/#registration-anchor">РЕГИСТРАЦИЯ</a>
                <a class="right-content__hamburger nav-toggle" href="#">
                    <span></span>
                    <span></span>
                    <span></span>
                </a>
            </div>
        </div>
        <div class="header__bottom-header" id="mobileContentActive">
            <div class="bottom-header__left-content" id="desktopContentActive">
                <div class="left-content__top-info animated to-top">
                    <div class="top-info__top">
                        <p class="top-info__text">дальневосточный</p>
                    </div>
                    <div class="top-info__middle">
                        <svg width="152" height="49" viewBox="0 0 152 49" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect width="151.72" height="48.6429" rx="24.3215" fill="#C152FF"/>
                            <rect x="43.3266" y="15.0561" width="2.31633" height="18.5306" fill="black"/>
                            <rect x="38.694" y="19.6888" width="2.31633" height="9.26532" fill="black"/>
                            <rect x="47.9593" y="16.2143" width="2.31633" height="16.2143" fill="black"/>
                            <rect x="52.5919" y="18.5306" width="2.31633" height="11.5817" fill="black"/>
                            <rect x="57.2245" y="17.3725" width="2.31633" height="13.898" fill="black"/>
                            <rect x="61.8573" y="19.6888" width="2.31633" height="9.26532" fill="black"/>
                            <rect x="66.4899" y="17.3725" width="2.31633" height="13.898" fill="black"/>
                            <rect x="71.1226" y="17.3725" width="2.31633" height="13.898" fill="black"/>
                            <rect x="75.7552" y="19.6888" width="2.31633" height="9.26532" fill="black"/>
                            <rect x="80.3878" y="18.5306" width="2.31633" height="11.5817" fill="black"/>
                            <rect x="85.0206" y="18.5306" width="2.31633" height="11.5817" fill="black"/>
                            <rect x="89.6533" y="17.3725" width="2.31633" height="13.898" fill="black"/>
                            <rect x="94.2859" y="16.2143" width="2.31633" height="16.2143" fill="black"/>
                            <rect x="98.9185" y="15.0561" width="2.31633" height="18.5306" fill="black"/>
                            <rect x="103.551" y="13.8979" width="2.31633" height="20.847" fill="black"/>
                            <rect x="108.184" y="15.0561" width="2.31633" height="18.5306" fill="black"/>
                            <rect x="112.817" y="17.3725" width="2.31633" height="13.898" fill="black"/>
                            <rect x="117.449" y="18.5306" width="2.31633" height="11.5817" fill="black"/>
                            <rect x="122.082" y="19.6888" width="2.31633" height="9.26532" fill="black"/>
                            <rect x="126.714" y="20.847" width="2.31633" height="6.94899" fill="black"/>
                            <rect x="131.347" y="22.0051" width="2.31633" height="4.63266" fill="black"/>
                            <rect x="135.98" y="23.1633" width="2.31633" height="2.31633" fill="black"/>
                            <path d="M33 24L17 33L17 15L33 24Z" fill="black"/>
                        </svg>
                        <p class="top-info__text">танцевальный</p>
                    </div>
                    <div class="top-info__bottom">
                        <div class="bottom__wave">
                            <p class="top-info__text">ФЕСТИВАЛЬ</p>
                            <svg class="wave-desktop__svg" width="474" height="29" viewBox="0 0 474 29" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M434.498 17C424.349 17 419.244 13.0431 414.266 9.20931C409.288 5.37552 404.598 1.75862 394.996 1.75862C385.395 1.75862 380.699 5.37552 375.732 9.20931C370.765 13.0431 365.638 17 355.494 17C345.351 17 340.218 13.0431 335.251 9.20931C330.285 5.37552 325.594 1.75862 315.993 1.75862C306.391 1.75862 301.695 5.37552 296.728 9.20931C291.762 13.0431 286.64 17 276.491 17C266.342 17 261.214 13.0431 256.253 9.20931C251.292 5.37552 246.596 1.75862 236.994 1.75862C227.393 1.75862 222.697 5.37552 217.73 9.20931C212.764 13.0431 207.636 17 197.493 17C187.349 17 182.216 13.0431 177.255 9.20931C172.294 5.37552 167.587 1.75862 157.996 1.75862C148.406 1.75862 143.699 5.37552 138.732 9.20931C133.765 13.0431 128.638 17 118.494 17C108.351 17 103.218 13.0431 98.2568 9.20931C93.2956 5.37552 88.5998 1.75862 78.9926 1.75862C69.3854 1.75862 64.7118 5.37552 59.734 9.20931C54.7561 13.0431 49.64 17 39.4963 17C29.3526 17 24.2199 13.0431 19.2587 9.20931C14.2974 5.37552 9.60168 1.75862 0 1.75862V0C10.1437 0 15.2764 3.9569 20.2376 7.79069C25.1989 11.6245 29.8946 15.2414 39.4963 15.2414C49.098 15.2414 53.7937 11.6245 58.755 7.79069C63.7162 3.9569 68.8489 0 78.9926 0C89.1363 0 94.269 3.9569 99.2303 7.79069C104.192 11.6245 108.887 15.2414 118.494 15.2414C128.102 15.2414 132.786 11.6245 137.753 7.79069C142.72 3.9569 147.847 0 157.996 0C168.146 0 173.267 3.9569 178.234 7.79069C183.201 11.6245 187.885 15.2414 197.493 15.2414C207.1 15.2414 211.79 11.6245 216.757 7.79069C221.724 3.9569 226.851 0 236.994 0C247.138 0 252.271 3.9569 257.232 7.79069C262.193 11.6245 266.889 15.2414 276.491 15.2414C286.092 15.2414 290.788 11.6245 295.755 7.79069C300.722 3.9569 305.86 0 315.993 0C326.125 0 331.269 3.9569 336.23 7.79069C341.191 11.6245 345.887 15.2414 355.494 15.2414C365.102 15.2414 369.786 11.6245 374.753 7.79069C379.72 3.9569 384.847 0 394.996 0C405.146 0 410.273 3.9569 415.234 7.79069C420.195 11.6245 424.891 15.2414 434.498 15.2414C444.105 15.2414 448.796 11.6245 453.762 7.79069C458.729 3.9569 463.856 0 474 0V1.75862C464.393 1.75862 459.703 5.37552 454.736 9.20931C449.769 13.0431 444.642 17 434.498 17Z" fill="#C152FF"/>
                                <path d="M434.498 29C424.349 29 419.244 25.0431 414.266 21.2093C409.288 17.3755 404.598 13.7586 394.996 13.7586C385.395 13.7586 380.699 17.3755 375.732 21.2093C370.765 25.0431 365.638 29 355.494 29C345.351 29 340.218 25.0431 335.251 21.2093C330.285 17.3755 325.594 13.7586 315.993 13.7586C306.391 13.7586 301.695 17.3755 296.728 21.2093C291.762 25.0431 286.64 29 276.491 29C266.342 29 261.214 25.0431 256.253 21.2093C251.292 17.3755 246.596 13.7586 236.994 13.7586C227.393 13.7586 222.697 17.3755 217.73 21.2093C212.764 25.0431 207.636 29 197.493 29C187.349 29 182.216 25.0431 177.255 21.2093C172.294 17.3755 167.587 13.7586 157.996 13.7586C148.406 13.7586 143.699 17.3755 138.732 21.2093C133.765 25.0431 128.638 29 118.494 29C108.351 29 103.218 25.0431 98.2568 21.2093C93.2956 17.3755 88.5998 13.7586 78.9926 13.7586C69.3854 13.7586 64.7118 17.3755 59.734 21.2093C54.7561 25.0431 49.64 29 39.4963 29C29.3526 29 24.2199 25.0431 19.2587 21.2093C14.2974 17.3755 9.60168 13.7586 0 13.7586V12C10.1437 12 15.2764 15.9569 20.2376 19.7907C25.1989 23.6245 29.8946 27.2414 39.4963 27.2414C49.098 27.2414 53.7937 23.6245 58.755 19.7907C63.7162 15.9569 68.8489 12 78.9926 12C89.1363 12 94.269 15.9569 99.2303 19.7907C104.192 23.6245 108.887 27.2414 118.494 27.2414C128.102 27.2414 132.786 23.6245 137.753 19.7907C142.72 15.9569 147.847 12 157.996 12C168.146 12 173.267 15.9569 178.234 19.7907C183.201 23.6245 187.885 27.2414 197.493 27.2414C207.1 27.2414 211.79 23.6245 216.757 19.7907C221.724 15.9569 226.851 12 236.994 12C247.138 12 252.271 15.9569 257.232 19.7907C262.193 23.6245 266.889 27.2414 276.491 27.2414C286.092 27.2414 290.788 23.6245 295.755 19.7907C300.722 15.9569 305.86 12 315.993 12C326.125 12 331.269 15.9569 336.23 19.7907C341.191 23.6245 345.887 27.2414 355.494 27.2414C365.102 27.2414 369.786 23.6245 374.753 19.7907C379.72 15.9569 384.847 12 394.996 12C405.146 12 410.273 15.9569 415.234 19.7907C420.195 23.6245 424.891 27.2414 434.498 27.2414C444.105 27.2414 448.796 23.6245 453.762 19.7907C458.729 15.9569 463.856 12 474 12V13.7586C464.393 13.7586 459.703 17.3755 454.736 21.2093C449.769 25.0431 444.642 29 434.498 29Z" fill="#C152FF"/>
                            </svg>
                            <svg class="wave-mobile__svg" width="260" height="17" viewBox="0 0 260 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M248.487 9.72219C242.682 9.72219 239.763 7.45927 236.916 5.26675C234.069 3.07422 231.387 1.00574 225.896 1.00574C220.405 1.00574 217.719 3.07422 214.879 5.26675C212.038 7.45927 209.106 9.72219 203.305 9.72219C197.504 9.72219 194.569 7.45927 191.728 5.26675C188.888 3.07422 186.205 1.00574 180.714 1.00574C175.223 1.00574 172.538 3.07422 169.697 5.26675C166.857 7.45927 163.928 9.72219 158.123 9.72219C152.319 9.72219 149.387 7.45927 146.55 5.26675C143.712 3.07422 141.027 1.00574 135.536 1.00574C130.044 1.00574 127.359 3.07422 124.519 5.26675C121.678 7.45927 118.746 9.72219 112.945 9.72219C107.144 9.72219 104.208 7.45927 101.371 5.26675C98.5337 3.07422 95.8419 1.00574 90.3571 1.00574C84.8723 1.00574 82.1805 3.07422 79.34 5.26675C76.4995 7.45927 73.5674 9.72219 67.7662 9.72219C61.9651 9.72219 59.0298 7.45927 56.1925 5.26675C53.3552 3.07422 50.6697 1.00574 45.1754 1.00574C39.6811 1.00574 37.0083 3.07422 34.1615 5.26675C31.3147 7.45927 28.3888 9.72219 22.5877 9.72219C16.7866 9.72219 13.8512 7.45927 11.0139 5.26675C8.17661 3.07422 5.49114 1.00574 0 1.00574V0C5.80112 0 8.73648 2.26292 11.5738 4.45545C14.4111 6.64797 17.0966 8.71645 22.5877 8.71645C28.0788 8.71645 30.7643 6.64797 33.6016 4.45545C36.4389 2.26292 39.3743 0 45.1754 0C50.9765 0 53.9119 2.26292 56.7492 4.45545C59.5865 6.64797 62.2719 8.71645 67.7662 8.71645C73.2605 8.71645 75.9397 6.64797 78.7801 4.45545C81.6206 2.26292 84.5528 0 90.3571 0C96.1614 0 99.0904 2.26292 101.931 4.45545C104.771 6.64797 107.45 8.71645 112.945 8.71645C118.439 8.71645 121.121 6.64797 123.962 4.45545C126.802 2.26292 129.734 0 135.536 0C141.337 0 144.272 2.26292 147.109 4.45545C149.947 6.64797 152.632 8.71645 158.123 8.71645C163.614 8.71645 166.3 6.64797 169.14 4.45545C171.981 2.26292 174.919 0 180.714 0C186.509 0 189.451 2.26292 192.288 4.45545C195.125 6.64797 197.811 8.71645 203.305 8.71645C208.799 8.71645 211.478 6.64797 214.319 4.45545C217.159 2.26292 220.092 0 225.896 0C231.7 0 234.632 2.26292 237.47 4.45545C240.307 6.64797 242.992 8.71645 248.487 8.71645C253.981 8.71645 256.663 6.64797 259.504 4.45545C262.344 2.26292 265.276 0 271.078 0V1.00574C265.583 1.00574 262.901 3.07422 260.061 5.26675C257.22 7.45927 254.288 9.72219 248.487 9.72219Z" fill="#C152FF"/>
                                <path d="M248.487 16.5849C242.682 16.5849 239.763 14.322 236.916 12.1294C234.069 9.93693 231.387 7.86845 225.896 7.86845C220.405 7.86845 217.719 9.93693 214.879 12.1294C212.038 14.322 209.106 16.5849 203.305 16.5849C197.504 16.5849 194.569 14.322 191.728 12.1294C188.888 9.93693 186.205 7.86845 180.714 7.86845C175.223 7.86845 172.538 9.93693 169.697 12.1294C166.857 14.322 163.928 16.5849 158.123 16.5849C152.319 16.5849 149.387 14.322 146.55 12.1294C143.712 9.93693 141.027 7.86845 135.536 7.86845C130.044 7.86845 127.359 9.93693 124.519 12.1294C121.678 14.322 118.746 16.5849 112.945 16.5849C107.144 16.5849 104.208 14.322 101.371 12.1294C98.5337 9.93693 95.8419 7.86845 90.3571 7.86845C84.8723 7.86845 82.1805 9.93693 79.34 12.1294C76.4995 14.322 73.5674 16.5849 67.7662 16.5849C61.9651 16.5849 59.0298 14.322 56.1925 12.1294C53.3552 9.93693 50.6697 7.86845 45.1754 7.86845C39.6811 7.86845 37.0083 9.93693 34.1615 12.1294C31.3147 14.322 28.3888 16.5849 22.5877 16.5849C16.7866 16.5849 13.8512 14.322 11.0139 12.1294C8.17661 9.93693 5.49114 7.86845 0 7.86845V6.8627C5.80112 6.8627 8.73648 9.12563 11.5738 11.3181C14.4111 13.5107 17.0966 15.5791 22.5877 15.5791C28.0788 15.5791 30.7643 13.5107 33.6016 11.3181C36.4389 9.12563 39.3743 6.8627 45.1754 6.8627C50.9765 6.8627 53.9119 9.12563 56.7492 11.3181C59.5865 13.5107 62.2719 15.5791 67.7662 15.5791C73.2605 15.5791 75.9397 13.5107 78.7801 11.3181C81.6206 9.12563 84.5528 6.8627 90.3571 6.8627C96.1614 6.8627 99.0904 9.12563 101.931 11.3181C104.771 13.5107 107.45 15.5791 112.945 15.5791C118.439 15.5791 121.121 13.5107 123.962 11.3181C126.802 9.12563 129.734 6.8627 135.536 6.8627C141.337 6.8627 144.272 9.12563 147.109 11.3181C149.947 13.5107 152.632 15.5791 158.123 15.5791C163.614 15.5791 166.3 13.5107 169.14 11.3181C171.981 9.12563 174.919 6.8627 180.714 6.8627C186.509 6.8627 189.451 9.12563 192.288 11.3181C195.125 13.5107 197.811 15.5791 203.305 15.5791C208.799 15.5791 211.478 13.5107 214.319 11.3181C217.159 9.12563 220.092 6.8627 225.896 6.8627C231.7 6.8627 234.632 9.12563 237.47 11.3181C240.307 13.5107 242.992 15.5791 248.487 15.5791C253.981 15.5791 256.663 13.5107 259.504 11.3181C262.344 9.12563 265.276 6.8627 271.078 6.8627V7.86845C265.583 7.86845 262.901 9.93693 260.061 12.1294C257.22 14.322 254.288 16.5849 248.487 16.5849Z" fill="#C152FF"/>
                            </svg>
                        </div>
                        <div class="bottom__data">
                            <svg class="data__desktop" width="276" height="109" viewBox="0 0 276 109" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M90 63.5C90 88.0767 70.0767 108 45.5 108C20.9233 108 1 88.0767 1 63.5C1 38.9233 20.9233 19 45.5 19C70.0767 19 90 38.9233 90 63.5Z" fill="#DEFF5A"/>
                                <rect x="5.59045" y="112.439" width="89.3547" height="274.757" rx="44.6773" transform="rotate(-95.5908 5.59045 112.439)" stroke="white" stroke-width="1.02707"/>
                                <?php if ( have_rows( 'date-events' ) ) : ?>
                                    <?php while ( have_rows( 'date-events' ) ) : the_row(); ?>
                                        <text class="top-text" x="100" y="65" transform="rotate(-5.59)"><?php the_sub_field( 'first-date' ); ?></text>
                                        <text class="bottom-text" x="100" y="100" transform="rotate(-5.59)"><?php the_sub_field( 'second-date' ); ?></text>
                                    <?php endwhile; ?>
                                <?php endif; ?>
                                <path d="M29.6388 88.7006C28.7251 88.4144 28.3184 87.7827 28.2286 86.8306C28.0997 85.4575 27.8788 84.0923 27.6903 82.6714L28.3362 82.5856C38.7876 81.1987 49.2392 79.8148 59.6908 78.4341C61.2157 78.2318 62.4079 77.5695 63.3566 76.3642C65.9578 73.0588 67.6774 69.316 68.8702 65.304C68.9617 64.9936 69.0717 64.6882 69.1728 64.3797L71.51 81.991C71.3438 82.5216 70.9974 82.9764 70.5311 83.276L29.6388 88.7006Z" fill="black"/>
                                <path d="M66.7505 46.1265L23.6287 51.8491C23.5924 51.7327 23.5628 51.6145 23.5398 51.4948C23.3582 50.1262 23.1694 48.7585 22.995 47.3889C22.8684 46.3955 23.4086 45.693 24.4132 45.5597C26.735 45.2454 29.0594 44.9431 31.3829 44.6348L32.0075 44.5519C31.9417 44.0561 31.8798 43.5897 31.8179 43.1233C31.7026 42.1677 32.2491 41.4179 33.1387 41.2999C34.0283 41.1818 34.7511 41.7611 34.8935 42.7079C34.961 43.1611 35.0141 43.6163 35.0786 44.103L42.7684 43.0825C42.7055 42.608 42.6382 42.1403 42.5813 41.6722C42.4688 40.7297 43.0339 39.9784 43.9204 39.8691C44.7916 39.7617 45.5119 40.3299 45.651 41.2441C45.7226 41.7123 45.7756 42.183 45.8417 42.6809L53.6352 41.6466C53.5754 41.1955 53.5139 40.7321 53.452 40.2658C53.3354 39.3083 53.8674 38.5594 54.7525 38.4316C55.6623 38.3005 56.3881 38.8856 56.5289 39.8678C56.5871 40.3067 56.6454 40.7457 56.7144 41.2659L57.266 41.1927C59.4869 40.898 61.7129 40.6346 63.9267 40.2943C64.8682 40.1497 65.5838 40.3433 66.09 41.157L66.7505 46.1265Z" fill="black"/>
                                <path d="M67.1761 49.3332C67.5593 52.8363 67.4858 56.3743 66.9575 59.8584C66.188 64.8192 64.5649 69.4584 61.6796 73.608C61.67 73.6229 61.6592 73.6358 61.6496 73.6507C60.9536 74.8551 59.9603 75.3988 58.5254 75.5819C45.592 77.2395 32.6682 78.9776 19.7433 80.6991C19.0618 80.7896 18.468 80.7038 18.0217 80.1353C17.5754 79.5667 17.57 78.8233 18.0408 78.219C21.9804 73.1718 23.6778 67.3332 24.038 61.0485C24.1369 59.2118 23.9892 57.3575 23.9543 55.5154C23.9518 55.3785 23.9464 55.2429 23.9414 55.0707L67.1761 49.3332Z" fill="black"/>
                            </svg>
                            <svg class="data__mobile" width="265" height="71" viewBox="0 0 265 71" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M53.7835 38.2242C54.4162 52.3869 43.4479 64.3809 29.2852 65.0135C15.1225 65.6461 3.12848 54.6779 2.49584 40.5151C1.8632 26.3524 12.8315 14.3585 26.9942 13.7258C41.1569 13.0932 53.1509 24.0615 53.7835 38.2242Z" fill="#DEFF5A"/>
                                <rect x="3.83854" y="66.6113" width="51.5051" height="259.88" rx="25.7526" transform="rotate(-92.5577 3.83854 66.6113)" stroke="white" stroke-width="0.588702"/>
                                <?php if ( have_rows( 'date-events' ) ) : ?>
                                    <?php while ( have_rows( 'date-events' ) ) : the_row(); ?>
                                        <text class="top-text" x="69" y="49" transform="rotate(-2.56)"><?php the_sub_field( 'first-date' ); ?> <?php the_sub_field( 'second-date' ); ?></text>
                                    <?php endwhile; ?>
                                <?php endif; ?>
                                <path d="M17.5893 53.443C17.0723 53.2299 16.8678 52.8416 16.8641 52.283C16.859 51.4774 16.8 50.6718 16.7626 49.8354L17.1428 49.8184C23.2942 49.5436 29.4456 49.2707 35.5968 48.9995C36.4943 48.9594 37.2217 48.6348 37.835 47.9817C39.5167 46.1909 40.7078 44.1005 41.606 41.8267C41.6751 41.6508 41.7546 41.4786 41.8292 41.3043L42.2923 51.6712C42.1686 51.9715 41.9438 52.2185 41.6573 52.3691L17.5893 53.443Z" fill="black"/>
                                <path d="M41.3491 30.5595L15.9687 31.6932C15.9535 31.6237 15.9423 31.5533 15.935 31.4825C15.8991 30.6769 15.8588 29.8714 15.8271 29.0655C15.804 28.481 16.1541 28.0998 16.7454 28.0734C18.1122 28.0088 19.48 27.9513 20.8476 27.8902L21.2152 27.8738C21.2021 27.5819 21.1899 27.3073 21.1776 27.0328C21.1592 26.4709 21.5153 26.0624 22.0389 26.039C22.5625 26.0156 22.9536 26.3895 22.9882 26.9477C23.0044 27.2149 23.0121 27.4824 23.0249 27.7689L27.5509 27.5668C27.5384 27.2874 27.5231 27.0118 27.5138 26.7366C27.4963 26.1824 27.8634 25.7741 28.3847 25.7556C28.897 25.7375 29.2872 26.1048 29.3216 26.6438C29.3394 26.9199 29.3463 27.1965 29.3594 27.4896L33.9465 27.2847C33.9346 27.0191 33.9224 26.7464 33.9102 26.4718C33.8911 25.9087 34.2387 25.5001 34.7602 25.4708C35.2962 25.4408 35.6887 25.8182 35.7206 26.397C35.7321 26.6553 35.7437 26.9137 35.7574 27.22L36.082 27.2055C37.3892 27.1471 38.6977 27.1072 40.0031 27.0219C40.5582 26.9857 40.9647 27.1348 41.2178 27.6341L41.3491 30.5595Z" fill="black"/>
                                <path d="M41.4333 32.447C41.4779 34.505 41.255 36.56 40.7702 38.5604C40.0699 41.4079 38.8894 44.0248 36.9994 46.2925C36.993 46.3006 36.9861 46.3076 36.9798 46.3158C36.5135 46.9812 35.9079 47.2469 35.0637 47.2804C27.4544 47.5863 19.8467 47.9395 12.2391 48.283C11.838 48.3009 11.4969 48.2207 11.2662 47.8672C11.0354 47.5136 11.0701 47.0808 11.3748 46.7531C13.9239 44.0168 15.2088 40.7058 15.7384 37.0671C15.8894 36.0034 15.8979 34.9168 15.9714 33.8432C15.9769 33.7634 15.9807 33.6842 15.9865 33.5837L41.4333 32.447Z" fill="black"/>
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="left-content__bottom-info">
                    <div class="bottom-info__event-price animated sync-to-top">
                        <svg width="39" height="40" viewBox="0 0 39 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M39 20L0 40L1.96847e-06 0L39 20Z" fill="#C152FF"/>
                        </svg>
                        <div class="event-info__text">
                            <p class="text__top"><?php the_field( 'all-salary' ); ?></p>
                            <p class="text__bottom">призовой фонд</p>
                        </div>
                    </div>
                    <div class="bottom-info__event-price animated sync-to-top">
                        <svg width="39" height="40" viewBox="0 0 39 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M39 20L0 40L1.96847e-06 0L39 20Z" fill="#C152FF"/>
                        </svg>
                        <div class="event-info__text">
                            <p class="text__top"><?php the_field( 'final-salary' ); ?></p>
                            <p class="text__bottom">гран-при</p>
                        </div>
                    </div>
                    <div class="bottom-info__event-achievement animated sync-to-top">
                        <svg width="39" height="40" viewBox="0 0 39 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M39 20L0 40L1.96847e-06 0L39 20Z" fill="#C152FF"/>
                        </svg>
                        <p class="event-achievement__text"><?php the_field( 'first-bonus' ); ?></p>
                    </div>
                    <div class="bottom-info__event-achievement animated sync-to-top">
                        <svg width="39" height="40" viewBox="0 0 39 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M39 20L0 40L1.96847e-06 0L39 20Z" fill="#C152FF"/>
                        </svg>
                        <p class="event-achievement__text"><?php the_field( 'second-bonus' ); ?></p>
                    </div>
                </div>
            </div>
            <div class="bottom-header__desktop-menu" id="desktopMenuActive">
                <a class="menu__text" href="/#about-anchor" id="closeDesktop">о фестивале</a>
                <a class="menu__text" href="/#billet-anchor" id="closeDesktop">билет для зрителей</a>
                <a class="menu__text" href="/#registration-anchor" id="closeDesktop">регистрация команд</a>
                <a class="menu__text" href="/#gallery-anchor" id="closeDesktop">фотографии</a>
                <a class="menu__text" href="/#registration-anchor" id="closeDesktop">регистрация на баттлы</a>
                <a class="menu__text" href="/#dancers-anchor" id="closeDesktop">приглашенные танцоры</a>
                <a class="menu__text" href="/#billet-anchor" id="closeDesktop">мастер-классы</a>
                <a class="menu__text" href="/#contacts-anchor" id="closeDesktop">контакты</a>
            </div>
            <div class="bottom-header__right-content animated to-left sync-to-top">
                <?php if ( get_field( 'logo-event', 'option' ) ) : ?>
                    <img src="<?php the_field( 'logo-event', 'option' ); ?>" />
                <?php endif ?>
            </div>
        </div>
        <div class="header__mobile-menu" id="mobileMenuActive">
            <div class="mobile-menu__menu">
                <a href="/#about-anchor" id="closeMobile">
                    <svg width="12" height="13" viewBox="0 0 12 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 6.5L0 13L6.05683e-07 0L12 6.5Z" fill="#C152FF"/>
                    </svg>
                    о фестивале
                </a>
                <a href="/#billet-anchor" id="closeMobile">
                    <svg width="12" height="13" viewBox="0 0 12 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 6.5L0 13L6.05683e-07 0L12 6.5Z" fill="#C152FF"/>
                    </svg>
                    билет для зрителей
                </a>
                <a href="/#registration-anchor" id="closeMobile">
                    <svg width="12" height="13" viewBox="0 0 12 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 6.5L0 13L6.05683e-07 0L12 6.5Z" fill="#C152FF"/>
                    </svg>
                    регистрация команд
                </a>
                <a href="/#gallery-anchor" id="closeMobile">
                    <svg width="12" height="13" viewBox="0 0 12 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 6.5L0 13L6.05683e-07 0L12 6.5Z" fill="#C152FF"/>
                    </svg>
                    фотографии
                </a>
                <a href="/#registration-anchor" id="closeMobile">
                    <svg width="12" height="13" viewBox="0 0 12 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 6.5L0 13L6.05683e-07 0L12 6.5Z" fill="#C152FF"/>
                    </svg>
                    регистрация на баттлы
                </a>
                <a href="/#dancers-anchor" id="closeMobile">
                    <svg width="12" height="13" viewBox="0 0 12 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 6.5L0 13L6.05683e-07 0L12 6.5Z" fill="#C152FF"/>
                    </svg>
                    приглашенные танцоры
                </a>
                <a href="/#billet-anchor" id="closeMobile">
                    <svg width="12" height="13" viewBox="0 0 12 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 6.5L0 13L6.05683e-07 0L12 6.5Z" fill="#C152FF"/>
                    </svg>
                    мастер-классы
                </a>
                <a href="/#contacts-anchor" id="closeMobile">
                    <svg width="12" height="13" viewBox="0 0 12 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 6.5L0 13L6.05683e-07 0L12 6.5Z" fill="#C152FF"/>
                    </svg>
                    контакты
                </a>
            </div>
            <div class="mobile-menu__contacts">
                <div class="contacts__phone">
                    <p>INFO / RESERVE</p>
                    <?php
                    $phone_number = get_field( 'phone-studio', 'option' );;
                    $cleaned_phone_number = preg_replace('/[^0-9]/', '', $phone_number);
                    $formatted_phone_number = '+7' . substr($cleaned_phone_number, 1);
                    ?>
                    <a target="_blank" href="tel:<?php echo $formatted_phone_number?>"><?php the_field( 'phone-studio', 'option' ); ?></a>
                </div>
                <div class="contacts__socials">
                    <a target="_blank" href="mailto:<?php the_field( 'mail-studio', 'option' ); ?>">
                        <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="15" cy="15" r="15" fill="#DEFF5A"/>
                            <path d="M15.6328 5.97174C16.6731 6.39994 17.2791 7.25 17.7773 8.19779C18.3728 9.33261 18.7089 10.5532 18.9336 11.8086C18.9329 11.8246 18.9303 11.8404 18.9258 11.8557H15.5977V5.97174H15.6328Z" fill="black"/>
                            <path d="M15.5977 23.7606V17.8784H18.9402C18.9051 18.0672 18.8731 18.2546 18.8348 18.4409C18.5613 19.7237 18.1728 20.9665 17.4605 22.0806C17.232 22.4377 16.9504 22.765 16.6657 23.0814C16.3809 23.3978 16.0195 23.5979 15.6328 23.7606H15.5977Z" fill="black"/>
                            <path d="M14.4023 5.97174V11.854H11.0625C11.0868 11.7169 11.1079 11.5808 11.1349 11.4462C11.4074 10.1022 11.8127 8.80669 12.5457 7.6339C12.8772 7.1034 13.2675 6.62177 13.798 6.27548C13.9765 6.15842 14.1766 6.07229 14.3671 5.97174H14.4023Z" fill="black"/>
                            <path d="M14.3672 23.7599C13.2732 23.3029 12.658 22.3962 12.1524 21.3932C11.6001 20.2974 11.2806 19.126 11.0679 17.923C11.0684 17.907 11.071 17.8912 11.0756 17.8759H14.4024V23.7599H14.3672Z" fill="black"/>
                            <path d="M23.9999 15.4284C23.9535 15.7635 23.9081 16.0985 23.8592 16.4335C23.8494 16.5039 23.8329 16.571 23.8174 16.6512H20.3599V13.0825H23.8332C23.8765 13.4123 23.9204 13.7463 23.9651 14.0802C23.9753 14.1548 23.9883 14.2289 24.0002 14.3035L23.9999 15.4284Z" fill="black"/>
                            <path d="M6 14.3034C6.04641 13.9676 6.09176 13.6322 6.14062 13.2969C6.15047 13.2265 6.16734 13.159 6.18281 13.0796H9.64141V16.6532H6.16734C6.12351 16.3206 6.07945 15.9868 6.03516 15.6519C6.02461 15.5774 6.0116 15.5029 6 15.4283V14.3034Z" fill="black"/>
                            <path d="M10.8888 13.0729H14.3864V16.6542H10.8905C10.7734 15.4633 10.7728 14.2639 10.8888 13.0729Z" fill="black"/>
                            <path d="M15.605 16.6506V13.0813H19.11C19.2259 14.2682 19.2268 15.4635 19.1128 16.6506H15.605Z" fill="black"/>
                            <path d="M23.4831 11.8639H20.1743C19.841 9.92265 19.282 8.06713 18.1064 6.4426C20.6953 7.44594 22.4756 9.2452 23.4831 11.8639Z" fill="black"/>
                            <path d="M18.0996 23.2859C18.6846 22.4883 19.1191 21.6164 19.4538 20.6943C19.7874 19.7802 20.0138 18.837 20.1692 17.8713H23.4703C23.0433 19.0812 22.3597 20.1845 21.4665 21.1056C20.5294 22.0848 19.3765 22.8315 18.0996 23.2859Z" fill="black"/>
                            <path d="M9.82683 11.8597H6.51904C7.52063 9.24766 9.30477 7.4484 11.8933 6.4426C10.7194 8.06538 10.1583 9.91913 9.82683 11.8597Z" fill="black"/>
                            <path d="M9.82648 17.8726C10.158 19.8103 10.7173 21.6623 11.9358 23.315C10.6386 22.8351 9.54734 22.1299 8.6115 21.1842C7.68048 20.2481 6.96881 19.117 6.52783 17.8726H9.82648Z" fill="black"/>
                        </svg>
                    </a>
                    <a target="_blank" href="<?php the_field( 'vk-studio', 'option' ); ?>">
                        <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="15" cy="15" r="15" fill="#DEFF5A"/>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M15.8039 20.3998C9.65396 20.3998 6.14616 16.3457 6 9.59976H9.08056C9.18174 14.5512 11.4528 16.6484 13.2517 17.0808V9.59976H16.1525V13.87C17.9288 13.6863 19.7949 11.7403 20.4246 9.59976H23.3253C22.8418 12.2375 20.8181 14.1835 19.379 14.9835C20.8181 15.6323 23.1231 17.3294 24 20.3998H20.8069C20.1211 18.3458 18.4123 16.7567 16.1525 16.5402V20.3998H15.8039Z" fill="black"/>
                        </svg>
                    </a>
                    <a target="_blank" href="<?php the_field( 'youtube-studio', 'option' ); ?>">
                        <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="15" cy="15" r="15" fill="#DEFF5A"/>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M21.3722 9.34879C22.0698 9.53661 22.6198 10.0866 22.8076 10.7842C23.1564 12.0587 23.143 14.7149 23.143 14.7149C23.143 14.7149 23.143 17.3577 22.8076 18.6321C22.6198 19.3297 22.0698 19.8797 21.3722 20.0675C20.0977 20.4029 15 20.4029 15 20.4029C15 20.4029 9.9156 20.4029 8.62774 20.0541C7.93015 19.8663 7.38013 19.3163 7.19231 18.6187C6.85693 17.3577 6.85693 14.7015 6.85693 14.7015C6.85693 14.7015 6.85693 12.0587 7.19231 10.7842C7.38013 10.0866 7.94356 9.52319 8.62774 9.33538C9.90218 9 15 9 15 9C15 9 20.0977 9 21.3722 9.34879ZM17.6159 14.7015L13.3767 17.143V12.2599L17.6159 14.7015Z" fill="black"/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="main-header__scrollbar">
        <p class="scrollbar__content">
            конкурс хореографии&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            мастер-классы&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            батлы&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            вог бал&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            конкурс хореографии&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            мастер-классы&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            батлы&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            вог бал&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            конкурс хореографии&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            мастер-классы&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            батлы&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            вог бал&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            конкурс хореографии&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            мастер-классы&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            батлы&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            вог бал&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            конкурс хореографии&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            мастер-классы&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            батлы&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            вог бал&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            конкурс хореографии&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            мастер-классы&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            батлы&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            вог бал&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            конкурс хореографии&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            мастер-классы&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            батлы&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            вог бал&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            конкурс хореографии&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            мастер-классы&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            батлы&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            вог бал&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            конкурс хореографии&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            мастер-классы&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            батлы&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            вог бал&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        </p>
    </div>
</header>