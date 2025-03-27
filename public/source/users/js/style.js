document.getElementById("sidebarToggle").addEventListener("click", function() {
    document.getElementById("mobileSidebar").classList.add("active");
    document.getElementById("sidebarOverlay").classList.add("active");
});

document.getElementById("closeSidebar").addEventListener("click", function() {
    document.getElementById("mobileSidebar").classList.remove("active");
    document.getElementById("sidebarOverlay").classList.remove("active");
});

document.getElementById("sidebarOverlay").addEventListener("click", function() {
    document.getElementById("mobileSidebar").classList.remove("active");
    document.getElementById("sidebarOverlay").classList.remove("active");
});

document.querySelectorAll(".toggle").forEach(icon => {
    icon.addEventListener("click", function(event) {
        let submenu = this.parentElement.nextElementSibling; // Lấy submenu

        // Đảo trạng thái dropdown
        if (submenu) {
            submenu.style.display = submenu.style.display === "block" ? "none" : "block";
        }

        // Đổi icon
        this.classList.toggle("fa-chevron-down");
        this.classList.toggle("fa-chevron-up");

        event.stopPropagation(); // Ngăn chặn sự kiện lan lên thẻ <a>
        event.preventDefault(); // Ngăn trình duyệt không nhảy link khi nhấn icon
    });
});

document.addEventListener("DOMContentLoaded", function() {
    let header = document.getElementById("header-sticky");

    if (header) {
        window.addEventListener("scroll", function() {
            if (window.scrollY > 0) {
                header.classList.add("bd-sticky");
            } else {
                header.classList.remove("bd-sticky");
            }
        });
    }
});


document.querySelectorAll('.nav-item.dropdown').forEach(item => {
    let timer;
    item.addEventListener('mouseenter', function() {
        clearTimeout(timer);
        this.querySelector('.dropdown-menu').style.display = 'block';
    });
    item.addEventListener('mouseleave', function() {
        timer = setTimeout(() => {
            this.querySelector('.dropdown-menu').style.display = 'none';
        }, 500); // Delay 300ms trước khi đóng
    });
});
var swiper = new Swiper(".mySwiper", {
    loop: true, // Lặp vô hạn
    autoplay: {
        delay: 3000, // Chuyển slide sau 3 giây
        disableOnInteraction: false, // Không dừng khi thao tác
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
});
var swiper2 = new Swiper(".mySwiper2", {
    loop: false,
    autoplay: {
        delay: 3000,
        disableOnInteraction: false,
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
});
var swiper = new Swiper(".mySwiperNews", {
    loop: true,
    autoplay: {
        delay: 3000,
        disableOnInteraction: false,
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    breakpoints: {
        320: {
            slidesPerView: 1,
            spaceBetween: 10
        },
        768: {
            slidesPerView: 2,
            spaceBetween: 20
        },
        992: {
            slidesPerView: 4,
            spaceBetween: 30
        }
    }
});

document.addEventListener("DOMContentLoaded", function () {
    const imageInput = document.getElementById("image");
    const previewImage = document.getElementById("preview");

    if (imageInput && previewImage) {
        imageInput.addEventListener("change", function (event) {
            const file = event.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function (e) {
                    previewImage.src = e.target.result;
                };
                reader.readAsDataURL(file);
            }
        });
    }
});

