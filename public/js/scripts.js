'use strict';

(function() {
    let currentScrollY;
    const buttonElms = document.querySelectorAll('[data-drawer-trigger]');
    const drawerElms = document.querySelectorAll('[data-drawer-panel]');
    const htmlElm = document.querySelector('html');
    const bodyElm = document.querySelector('body');

    buttonElms.forEach(function(buttonElm) {
        buttonElm.addEventListener('click', function() {
            const triggerValue = buttonElm.getAttribute('data-drawer-trigger');
            const targetDrawer = document.querySelector(`[data-drawer-panel="${triggerValue}"]`);
            const isTargetDrawerOpened = targetDrawer.classList.contains('is-opened');
            drawerElms.forEach(function(drawerElm) {
                if (drawerElm.classList.contains('is-opened')) {
                    closeDrawer(drawerElm, triggerValue);
                }
            });
            if (!isTargetDrawerOpened) {
                openDrawer(targetDrawer, triggerValue);
            }
        });
    });

    drawerElms.forEach(function(drawerElm) {
        drawerElm.style.display = 'block';
    });

    function closeDrawer(drawerElm, triggerValue) {
        bodyElm.style.position = '';
        bodyElm.style.top = '';
        bodyElm.style.width = '';

        htmlElm.scrollTop = currentScrollY;
        bodyElm.scrollTop = currentScrollY;

        buttonElms.forEach(function(buttonElm) {
            buttonElm.classList.remove('is-opened');
        });
        drawerElm.classList.remove('is-opened');
    }

    function openDrawer(drawerElm, triggerValue) {
        currentScrollY = window.pageYOffset || document.documentElement.scrollTop || document.body.scrollTop;

        bodyElm.style.position = 'fixed';
        bodyElm.style.top = -currentScrollY + 'px';
        bodyElm.style.width = '100%';

        buttonElms.forEach(function(buttonElm) {
            if (buttonElm.getAttribute('data-drawer-trigger') === triggerValue) {
                buttonElm.classList.add('is-opened');
            }
        });
        drawerElm.classList.add('is-opened');
    }
})();

// スムーズスクロール
(function() {
    const buttons = document.querySelectorAll('[data-smooth-scroll], a[href^="#"]');
    buttons.forEach(button => {
        button.addEventListener('click', scrollToElement);
    });

    function scrollToElement(event) {
        event.preventDefault();
        let targetId;
        if (this.dataset.smoothScroll) {
            targetId = this.dataset.smoothScroll;
        } else {
            targetId = this.getAttribute('href').replace(/^#/, '');
        }
        const targetElement = document.getElementById(targetId);
        if (targetElement) {
            targetElement.scrollIntoView({ behavior: 'smooth' });
        }
    }
})();

// スクロールヒント
(function() {
    new ScrollHint('[data-scroll-hint]', {
        i18n: {
            scrollable: 'スクロールできます'
        }
    });
})();
