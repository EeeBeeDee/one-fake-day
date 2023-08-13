const dropdownLinks = document.querySelectorAll('.site-header__dropdown-links')
const header = document.getElementById('header')
const dropdown = document.getElementById('dropdown-background')
const subMenus = document.querySelectorAll('.site-header__dropdown-menu')
let menuHights = [
    '320px',
    '280px',
]

dropdownLinks.forEach((item, idx) => {
    item.addEventListener('mouseover', () => {
        menu = subMenus[idx]
        dropdown.style.height = menuHights[idx]
        dropdown.classList.add('active')

        menu.style.visibility = 'visible'
        menu.classList.add('show')
    })
    item.addEventListener('mouseleave', () => {
        menu = subMenus[idx]
        dropdown.style.height = 0
        dropdown.classList.remove('active')

        menu.style.visibility = 'hidden'
        menu.classList.remove('show')
    })
})

dropdown.addEventListener('mouseover', () => {
    dropdown.classList.add('active')
})

dropdown.addEventListener('mouseleave', () => {
    dropdown.style.height = 0
    dropdown.classList.remove('active')
    subMenus.forEach(menu => {
        menu.style.visibility = 'hidden'
        menu.classList.remove('show')
    })
})