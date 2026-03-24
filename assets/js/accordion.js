document.addEventListener('DOMContentLoaded', function () {
    const questions = document.querySelectorAll('.rank-math-question');

    questions.forEach(question => {
        question.addEventListener('click', () => {
            const answer = question.nextElementSibling;
            const isOpen = question.classList.contains('faq-q-open');

            // Переключаем класс faq-q-open для вопроса и ответа
            if (isOpen) {
                question.classList.remove('faq-q-open');
                answer.classList.remove('faq-q-open');
            } else {
                question.classList.add('faq-q-open');
                answer.classList.add('faq-q-open');
            }
        });
    });

    const mobMenu = document.querySelector('#generate-slideout-menu');
    const openMobMenuButton = document.querySelector('.menu-toggle');
    const closeMobMenuButton = document.querySelector('.slideout-exit.has-svg-icon');

    openMobMenuButton.addEventListener('click', () => {
        const menuOpen = mobMenu.classList.contains('is-open');

        if (!menuOpen) {
            mobMenu.classList.add('is-open');
        }
    });
    closeMobMenuButton.addEventListener('click', () => {
        const menuOpen = mobMenu.classList.contains('is-open');

        if (menuOpen) {
            mobMenu.classList.remove('is-open');
        }
    });

    const toggles = document.querySelectorAll('.slideout-menu .language-toggle');
    toggles.forEach(toggle => {
        toggle.addEventListener('click', function (e) {
            e.preventDefault();
            const parent = this.parentElement;
            const submenu = this.nextElementSibling;
            const isActive = parent.classList.contains('active');

            // Закрываем все открытые подменю
            document.querySelectorAll('.slideout-menu .menu-item-has-children').forEach(item => {
                item.classList.remove('active');
                item.querySelector('.sub-menu').style.display = 'none';
            });

            // Открываем/закрываем текущее подменю
            if (!isActive) {
                parent.classList.add('active');
                submenu.style.display = 'block';
            }
        });
    });

    // Закрытие подменю при клике вне
    document.addEventListener('click', function (e) {
        if (!e.target.closest('.menu-item-has-children')) {
            document.querySelectorAll('.slideout-menu .menu-item-has-children').forEach(item => {
                item.classList.remove('active');
                item.querySelector('.sub-menu').style.display = 'none';
            });
        }
    });

});