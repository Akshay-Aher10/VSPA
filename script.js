// JavaScript for smooth scrolling when clicking on navigation links
document.addEventListener("DOMContentLoaded", function () {
    const scrollLinks = document.querySelectorAll("nav ul li a");

    scrollLinks.forEach((link) => {
        link.addEventListener("click", (e) => {
            e.preventDefault();

            const targetId = link.getAttribute("href").substring(1);
            const targetSection = document.getElementById(targetId);

            if (targetSection) {
                window.scrollTo({
                    top: targetSection.offsetTop,
                    behavior:
