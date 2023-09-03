document.addEventListener('DOMContentLoaded', function () {
    let getCoords = (elem) => {
        let box = elem.getBoundingClientRect();
        return {
            top: box.top + window.scrollY,
            right: box.right + window.scrollX,
            bottom: box.bottom + window.scrollY,
            left: box.left + window.scrollX,
            height: box.height,
        };
    }

    let isOnScreen = (elem) => {
            let coefficient;
            window.innerWidth <= 768 ? coefficient = .75 : coefficient = .9;
            return window.scrollY > (getCoords(elem).top - window.innerHeight / coefficient);
        }, isMobile = () => {
            return window.outerWidth <= 768;
        },
        isExist = (selector) => {
            return document.querySelector(selector);
        },
        isHome = () => {
            return isExist('.home');
        },
        showActiveAllPlayersButton = () => {
            if (isExist('.players-slider')) {
                let playersSlider = document.querySelector('.players-slider'),
                    activeTab = playersSlider.querySelector('.ska-team-tab.active'),
                    button = playersSlider.querySelector(`.all-players[data-team-tab=${activeTab.dataset.teamTab}]`);
                for (let i of playersSlider.querySelectorAll('.all-players')) {
                    i.classList.remove('active');
                }
                button.classList.add('active');
            }
        },
        playAnimations = () => {
            let toAnimate = document.querySelectorAll('.animated');

            if (toAnimate) {
                for (let i of toAnimate) {
                    if (isOnScreen(i)) {
                        i.style.transform = 'translate(0, 0)';
                        i.style.opacity = '1';
                    }
                }
                window.addEventListener('scroll', function () {
                    for (let i of toAnimate) {
                        if (isOnScreen(i)) {
                            i.style.transform = 'translateX(0)';
                            i.style.opacity = '1';
                        }
                    }
                });
            }
        }

    if (isHome()) {
        playAnimations();
        // Смена активных табов
        changeActiveTab = (clickedTrigger) => {
            let form = clickedTrigger.closest('form'),
                activeTab = form.querySelector('.tab.active'),
                activeTrigger = form.querySelector('.tab-trigger.active'),
                triggers = form.querySelectorAll('.tab-trigger'),
                allTabs = form.querySelectorAll('.tab'),
                inputs = activeTab.querySelectorAll('input, textarea, select'),
                allInputsValid = true,
                tabToActivate = form.querySelector(`div.tab[data-tab = "${clickedTrigger.dataset.tab}"]`);

            for (let i of inputs) {
                if (i.classList.contains('wpcf7-not-valid')) {
                    allInputsValid = false;
                }
                if (i.value === '') {
                    i.classList.add('wpcf7-not-valid');
                    allInputsValid = false;
                }
                if (i.value === 'Номинация' || i.value === 'Возрастная категория') {

                    i.classList.add('wpcf7-not-valid');
                    const choicesInner = i.closest('.choices__inner');
                    if (choicesInner) {
                        choicesInner.style.border = '1px solid red';
                    }
                    allInputsValid = false;
                } else {
                    const choicesInner = i.closest('.choices__inner');
                    if (choicesInner) {
                        choicesInner.style.border = '1px solid #d9d9d9';
                    }
                }
            }

            if (clickedTrigger.classList.contains('completed')) {
                for (let trigger of triggers) {
                    trigger.classList.remove('active');
                }
                clickedTrigger.classList.add('active');
                for (let tab of allTabs) {
                    tab.classList.remove('active');
                }
                tabToActivate.classList.add('active');
            } else if (allInputsValid) {
                for (let trigger of triggers) {
                    trigger.classList.remove('active');
                }
                clickedTrigger.classList.add('active');
                for (let tab of allTabs) {
                    tab.classList.remove('active');
                }
                tabToActivate.classList.add('active');
                activeTrigger.classList.add('completed');
            }
        }
        // Перелистывание табов через кнопку "Следующий шаг"
        let paginationsButtons = document.querySelectorAll('a.next-step, a.previous-step');
        for (let button of paginationsButtons) {
            button.onclick = (e) => {
                e.preventDefault();
                let form = button.closest('form'),
                    activeTab = form.querySelector('.tab.active'),
                    triggerToClick;
                if (button.classList.contains('next-step')) {
                    triggerToClick = form.querySelector(`.tab-trigger[data-tab="${(parseInt(activeTab.dataset.tab) + 1).toString()}"]`);
                } else if (button.classList.contains('previous-step')) {
                    triggerToClick = form.querySelector(`.tab-trigger[data-tab="${(parseInt(activeTab.dataset.tab) - 1).toString()}"]`);
                }
                changeActiveTab(triggerToClick);
            }
        }

        let secondButtons = document.getElementById('your-second-submit'),
            thirdButtons = document.querySelector('.home-page .forms-block .second-form-block .flex-box form .tabs-wrapper .tab .bottom-accept span.wpcf7-list-item .wpcf7-list-item-label'),
            inputs = document.getElementById('your-second-nominations'),
            allInputsValid = true;

        secondButtons.addEventListener('click', (event) => {
            if (inputs.value === 'Номинация') {
                event.preventDefault();
                inputs.classList.add('wpcf7-not-valid');
                const choicesInner = inputs.closest('.choices__inner');
                if (choicesInner) {
                    choicesInner.style.border = '1px solid red';
                }
                allInputsValid = false;
            } else {
                const choicesInner = inputs.closest('.choices__inner');
                if (choicesInner) {
                    choicesInner.style.border = '1px solid #d9d9d9';
                }
            }
        })

        thirdButtons.addEventListener('click', (event) => {
            if (inputs.value === 'Номинация') {
                inputs.classList.add('wpcf7-not-valid');
                const choicesInner = inputs.closest('.choices__inner');
                if (choicesInner) {
                    choicesInner.style.border = '1px solid red';
                }
                allInputsValid = false;
            } else {
                const choicesInner = inputs.closest('.choices__inner');
                if (choicesInner) {
                    choicesInner.style.border = '1px solid #d9d9d9';
                }
            }
        })

        // Перелистывание табов через триггер табов
        let tabTriggers = document.querySelectorAll('.tab-trigger');
        for (let trigger of tabTriggers) {
            trigger.onclick = () => {
                changeActiveTab(trigger);
            }
        }

        // Поднятие легенды на полях, если поле активно
        let fieldsets = document.querySelectorAll('fieldset');
        for (let f of fieldsets) {
            let legend,
                input,
                textarea;
            if (f.querySelector('legend')) {
                legend = f.querySelector('legend');
                if (f.querySelector('input')) {
                    input = f.querySelector('input');
                    legend.onclick = () => {
                        input.focus();
                    }
                    input.onfocus = () => {
                        legend.classList.add('active');
                    }
                    input.onblur = () => {
                        if (input.value === '') {
                            legend.classList.remove('active');
                        }
                    }
                } else if (f.querySelector('textarea')) {
                    textarea = f.querySelector('textarea');
                    legend.onclick = () => {
                        textarea.focus();
                    }
                    textarea.onfocus = () => {
                        legend.classList.add('active');
                    }
                    textarea.onblur = () => {
                        if (textarea.value === '') {
                            legend.classList.remove('active');
                        }
                    }
                }
            }
        }


        // Преобразование select в приятный вид
        let firstSelect = document.querySelector('.first-form-block .tab[data-tab="2"] .select-wrapper.first select'),
            secondSelect = document.querySelector('.first-form-block .tab[data-tab="2"] .select-wrapper.second select'),
            thirdSelect = document.querySelector('.second-form-block .tab .select-wrapper.third select'),
            firstChoices = new Choices(firstSelect, {
                searchEnabled: false,
                itemSelectText: '',
            }),
            secondChoices = new Choices(secondSelect, {
                searchEnabled: false,
                itemSelectText: '',
            }),
            thirdChoices = new Choices(thirdSelect, {
                searchEnabled: false,
                itemSelectText: '',
            });

        // Прописываю зависимости возрастных групп от номинаций
        let associateArray = new Map([
            ['BEST STREET DANCE SHOW', ['KIDS GROUP (6 – 12 лет)', 'JUNIOR (13-17 лет)', 'GROWN (от 18 лет)']],
            ['BEST DANCEHALL SHOW', ['KIDS GROUP+ JUNIOR (6 – 15 лет)', 'GROWN (от 16 лет)']],
            ['BEST LADYS SHOW', ['GROWN (от 16 лет)']],
            ['BEST DANCE SHOW', ['JUNIOR (6-13 лет)', 'GROWN (от 14 лет)']],
            ['BEST MINIMAL GROUP SHOW', ['JUNIOR (6-17 лет)', 'GROWN (от 18 лет)']],
            ['BEST SOLO CHOREOGRAPHERS', ['Любой возраст']],
            ['BEST SOLО DANCER', ['Любой возраст']],
        ]);
        firstSelect.addEventListener(
            'choice',
            function (event) {
                for (let nom of associateArray) {
                    if (event.detail.choice.value === nom[0]) {
                        secondChoices.clearChoices();
                        for (let age of nom[1]) {
                            secondChoices.setValue([age]);
                        }
                        secondChoices.setValue(['Возрастная категория']);
                    }
                }
            },
            false,
        );

        let wpcf7 = document.querySelectorAll('.wpcf7');
        for (let form of wpcf7) {
            form.addEventListener('wpcf7mailsent', function () {
                $.magnificPopup.open({
                    type: 'inline',
                    items: {
                        src: '#success',
                    }
                });

                let fields = document.querySelectorAll('input:not([type=submit], [type=checkbox]), textarea'),
                    tabTriggers = document.querySelectorAll('.tab-trigger'),
                    tabs = document.querySelectorAll('.tab');
                for (let trigger of tabTriggers) {
                    if (trigger.dataset.tab === '1') {
                        trigger.classList.remove('completed');
                        trigger.classList.add('active');
                    } else {
                        trigger.classList.remove('completed', 'active');
                    }
                }
                for (let tab of tabs) {
                    if (tab.dataset.tab === '1') {
                        tab.classList.add('active');
                    } else {
                        tab.classList.remove('active');
                    }
                }
                for (let field of fields) {
                    field.value = '';
                    let fieldset = field.closest('fieldset');
                    if (fieldset) {
                        let legend = fieldset.querySelector('legend');
                        legend.classList.remove('active');
                    }
                }
                firstChoices.setChoiceByValue('Номинация');
                secondChoices.setChoiceByValue('Возрастная категория');
                thirdChoices.setChoiceByValue('Номинация');
            });
            form.addEventListener('wpcf7mailfailed', function () {
                $.magnificPopup.open({
                    type: 'inline',
                    items: {
                        src: '.popup__failed',
                    }
                });
            });
        }

        // Получаем все формы на странице
        const forms = document.querySelectorAll('form');

        forms.forEach(form => {
            const submitBtn = form.querySelector('input[type="submit"]');

            form.addEventListener('submit', function (event) {
                submitBtn.disabled = true;
            });

            submitBtn.addEventListener('click', function (event) {
                if (submitBtn.disabled) {
                    event.preventDefault();
                }
            });
        });

        //ПОЯВЛЕНИЕ ПОДСКАЗКИ ПО РАСЧЕТУ СТОИМОСТИ
        let priceCalculator = document.querySelector('.price-calculator'),
            popupPrice = document.querySelector('.popup-price');

        priceCalculator.onclick = function (e) {
            e.preventDefault();
            priceCalculator.classList.toggle('price-calculator__active')
            popupPrice.classList.toggle('popup-price__active')

        }

        if(isMobile()) {
            //ПЕРЕИМЕНОВАНИЕ ТАБОВ В ШАГИ
            const paragraph = document.querySelectorAll('.tab-trigger .tab-name p');

            paragraph.forEach(function (p) {
                p.textContent = 'шаг';
            });
        }

        var gallerySwiper = new Swiper(".gallerySwiper", {
            loop: true,
            slidesPerView: 'auto',
            spaceBetween: 10,
            freeMode: true,
            breakpoints: {
                1661: {
                    initialSlide: 1,
                    slidesOffsetBefore: 725,
                    spaceBetween: 30,
                },
                1200: {
                    initialSlide: 1,
                    slidesOffsetBefore: 400,
                    spaceBetween: 30,
                },
                481: {
                    spaceBetween: 30,
                },
            }
        });

        var dancersSwiper = new Swiper(".dancersSwiper", {
            loop: true,
            slidesPerView: 'auto',
            spaceBetween: 35,
            freeMode: true,
            breakpoints: {
                481: {
                    spaceBetween: 120,
                },
            }
        });

        //ПОПАП БИЛЕТ ДЛЯ ЗРИТЕЛЕЙ
        $('.open-popup__billet').magnificPopup({
            type: 'inline',
            callbacks: {
                beforeOpen: function () {
                    this.st.mainClass = this.st.el.attr('data-effect');
                },
            },
            midClick: true,
            items: {
                src: '.popup__billet',
            }
        });

        if (isMobile()) {
            //ГАМБУРГЕР В МОБИЛЬНОЙ ВЕРСИИ
            let hamburgerIcon = document.querySelector('.nav-toggle'),
                menuActive = document.querySelector('#mobileMenuActive'),
                contentActive = document.querySelector('#mobileContentActive'),
                backgroundMobile = document.querySelector('#backgroundMobile'),
                backgroundMenu = document.querySelector('#backgroundMenu'),
                closeMobile = document.querySelectorAll('#closeMobile');
            ;

            hamburgerIcon.onclick = function (e) {
                e.preventDefault();
                hamburgerIcon.classList.toggle('clicked');
                menuActive.classList.toggle('header__menu-active');
                contentActive.classList.toggle('header__active');
                backgroundMobile.classList.toggle('main-header__mobile-active');
                backgroundMenu.classList.toggle('main-header__menu-active');
            };

            closeMobile.forEach(function (item) {
                item.onclick = function () {
                    hamburgerIcon.classList.toggle('clicked');
                    menuActive.classList.toggle('header__menu-active');
                    contentActive.classList.toggle('header__active');
                    backgroundMobile.classList.toggle('main-header__mobile-active');
                    backgroundMenu.classList.toggle('main-header__menu-active');
                };
            });
        } else {
            //ГАМБУРГЕР В ДЕСКТОПНОЙ ВЕРСИИ
            let hamburgerIcon = document.querySelector('.nav-toggle'),
                menuActive = document.querySelector('#desktopMenuActive'),
                contentActive = document.querySelector('#desktopContentActive'),
                closeDesktop = document.querySelectorAll('#closeDesktop');

            hamburgerIcon.onclick = function (e) {
                e.preventDefault();
                hamburgerIcon.classList.toggle('clicked');
                menuActive.classList.toggle('desktop-menu__active');
                contentActive.classList.toggle('left-content__active');
            };

            closeDesktop.forEach(function (item) {
                item.onclick = function () {
                    hamburgerIcon.classList.toggle('clicked');
                    menuActive.classList.toggle('desktop-menu__active');
                    contentActive.classList.toggle('left-content__active');
                };
            });
        }
    }

    if (!isHome()) {
        playAnimations();
        if (isMobile()) {
            //ГАМБУРГЕР В МОБИЛЬНОЙ ВЕРСИИ
            let hamburgerIcon = document.querySelector('.nav-toggle'),
                menuActive = document.querySelector('#mobileMenuActive'),
                activeInnerPage = document.querySelector('#activeInnerPage'),
                closeMobile = document.querySelectorAll('#closeMobile');
            ;

            hamburgerIcon.onclick = function (e) {
                e.preventDefault();
                hamburgerIcon.classList.toggle('clicked');
                menuActive.classList.toggle('header__menu-active');
                activeInnerPage.classList.toggle('active');
            };

            closeMobile.forEach(function (item) {
                item.onclick = function () {
                    hamburgerIcon.classList.toggle('clicked');
                    menuActive.classList.toggle('header__menu-active');
                    activeInnerPage.classList.toggle('active');
                };
            });
        } else {
            //ГАМБУРГЕР ДЕСКТОПНОЙ ВЕРСИИ
            let hamburgerIcon = document.querySelector('.nav-toggle'),
                menuActive = document.querySelector('#desktopMenuActive'),
                activeInnerPage = document.querySelector('#activeInnerPage'),
                closeDesktop = document.querySelectorAll('#closeDesktop');
            ;

            hamburgerIcon.onclick = function (e) {
                e.preventDefault();
                hamburgerIcon.classList.toggle('clicked');
                menuActive.classList.toggle('desktop-menu__active');
                activeInnerPage.classList.toggle('active');
            };

            closeDesktop.forEach(function (item) {
                item.onclick = function () {
                    hamburgerIcon.classList.toggle('clicked');
                    menuActive.classList.toggle('desktop-menu__active');
                    activeInnerPage.classList.toggle('active');
                };
            });
        }
    }
});