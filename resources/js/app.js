import './bootstrap';

const mobileMenuToggle = document.querySelector('#mobile-menu-toggle')
const mobileMenuList = document.querySelector('#mobile-menu-list')

if (mobileMenuList && mobileMenuToggle) {
    mobileMenuToggle.addEventListener('click', e => {
        mobileMenuList.classList.add('!block')
    })

    const mobileMenuHidden = document.querySelector('#mobile-menu-hidden');

    mobileMenuHidden.addEventListener('click', e => {
        mobileMenuList.classList.remove('!block')
    })
}