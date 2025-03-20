<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu Bootstrap</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
   <link rel="stylesheet" href="{{asset('source/users/css/style.css')}}">
</head>

<body>
    <nav class="navbar navbar-dark navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="#">LOGO</a>
            <button class="navbar-toggler d-lg-none" id="sidebarToggle">
                <i class="fas fa-bars text-white"></i>
            </button>
            <div class="collapse navbar-collapse d-none d-lg-block">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Tin tức</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Tin tức</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Tin tức</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link" id="menuDropdown">
                            Môn học <i class="fas fa-chevron-down"></i>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Toán</a></li>
                            <li><a class="dropdown-item" href="#">Vật lý</a></li>
                            <li><a class="dropdown-item" href="#">Hóa học</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Tin tức</a>
                    </li>
                </ul>
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link" href="#">Đăng nhập</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Đăng ký</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Sidebar Mobile -->
    <div class="sidebar" id="mobileSidebar">
        <a href="javascript:void(0)" id="closeSidebar">&times; Đóng</a>
        <div class="menu-item">
            <a href="#" class="toggle">Môn học <i class="fas fa-chevron-down"></i></a>
            <div class="submenu">
                <a href="#">Toán</a>
                <a href="#">Vật lý</a>
                <a href="#">Hóa học</a>
            </div>
        </div>
        <a href="#">Tin tức</a>
        <hr>
        <a href="#">Đăng nhập</a>
        <a href="#">Đăng ký</a>
    </div>
    <div class="overlay" id="sidebarOverlay"></div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
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

        document.querySelectorAll(".toggle").forEach(item => {
            item.addEventListener("click", function(event) {
                let submenu = this.nextElementSibling;
                let icon = this.querySelector("i");
                submenu.style.display = submenu.style.display === "block" ? "none" : "block";
                icon.classList.toggle("fa-chevron-down");
                icon.classList.toggle("fa-chevron-up");
                event.preventDefault();
            });
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
                }, 400); // Delay 300ms trước khi đóng
            });
        });
    </script>
</body>

</html>
