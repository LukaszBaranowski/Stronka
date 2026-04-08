export default function toggleMenu(element) {
    const submenu = element.nextElementSibling;

    submenu.classList.toggle("active");
}