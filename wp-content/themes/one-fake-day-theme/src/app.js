const dropdownLinks = document.querySelectorAll('.dropdown-links')
const header = document.getElementById('header')
const dropdown = document.getElementById('dropdown-background')


dropdownLinks.forEach(item => {
    item.addEventListener('mouseover', () => {
        dropdown.classList.add('active')
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