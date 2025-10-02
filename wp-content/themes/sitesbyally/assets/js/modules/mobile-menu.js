const settings = {
    selector: '.mobile-menu-btn',
};

const MobileMenu = {
    selector: settings.selector,

    init() {
        console.log('made it here')
        document.querySelector(this.selector).addEventListener('click', (e) => {
            document.querySelector('.mobilemenu').classList.toggle('hidden');
            e.currentTarget.classList.toggle('open'); 
            document.querySelector('.page-wrapper').classList.toggle('fixed');
        });
    },
};

export default MobileMenu;