const dropdownLinks = document.querySelectorAll('.site-header__dropdown-links')
const header = document.getElementById('header')
const dropdown = document.getElementById('dropdown-background')
const subMenus = document.querySelectorAll('.site-header__dropdown-menu')


dropdownLinks.forEach((item, idx) => {
    item.addEventListener('mouseover', () => {
        dropdown.classList.add('active')
        menu = subMenus[idx]

        menu.style.visibility = 'visible'
        menu.classList.add('show')
        console.log('Hello')
    })
    item.addEventListener('mouseleave', () => {
        dropdown.classList.remove('active')
        console.log('Hello')
    })
})

dropdown.addEventListener('mouseover', () => {
    dropdown.classList.add('active')
})

dropdown.addEventListener('mouseleave', () => {
    dropdown.classList.remove('active')
})