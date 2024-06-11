<?php
    if(isset($_GET['page'])){
        $page = $_GET['page'];
    }
?>
<!doctype html>
<html lang="en" data-bs-theme="dark">

<head>
    <!-- การเข้ารหัสข้อความ (อยากรู้คืออะไรลองค้นว่า Text Decode คืออะไร) -->
    <meta charset="utf-8">
    <!-- ตั้งแสดงผลหน้าจอหลากหลาย คอม มือถือ แท็บเล็ต -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- ตั้งชื่อเว็บ -->
    <title>NOVERSE / HOME</title>
    <!-- ลิงค์ใช้ Bootstrap ช่วยทำเว็บ -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- ลิงค์ใช้ไฟล์ style.css ที่เราเขียนตกแต่งขึ้นมาเอง -->
    <link rel="stylesheet" href="style.css">
    <!-- ลิงค์ใช้ Font Awesome สำหรับใส่ไอคอน -->
    <script src="https://kit.fontawesome.com/5efd6bd50f.js" crossorigin="anonymous"></script>
    <!-- ลิงค์ jquery เป็นตัวช่วยให้เขียน javascript ได้หลากหลายและง่ายขึ้น -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
</head>

<body>
    <!-- Header คือหน้าเว็บส่วนบน -->
    <header>
        <!-- Navbar ใช้เป็นส่วนหัวของเว็บไว้เปิดหน้าต่างๆ -->
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">NOVERSE</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link <?php if ($page == 'home' || $page == '') {
                                echo 'active';
                            } ?>" aria-current="page" href="?"><i class="fa-solid fa-house"></i>&nbsp;หน้าแรก</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php if ($page == 'popular') {
                                echo 'active';
                            } ?>" href="?page=popular"><i class="fa-solid fa-fire"></i>&nbsp;ยอดนิยม</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                <i class="fa-solid fa-quote-left"></i>&nbsp;ประเภท
                            </a>
                            <ul class="dropdown-menu border-0">
                                <li><a class="dropdown-item" href="?type=fantasy"><i
                                            class="fa-solid fa-dragon"></i>&nbsp;แฟนตาซี</a>
                                </li>
                                <li><a class="dropdown-item" href="?type=romantic"><i
                                            class="fa-solid fa-heart"></i>&nbsp;โลแมนติก</a>
                                </li>
                                <li><a class="dropdown-item" href="?type=timetravel"><i
                                            class="fa-solid fa-clock"></i>&nbsp;ข้ามเวลา</a>
                                </li>
                                <li><a class="dropdown-item" href="?type=fanfic"><i
                                            class="fa-solid fa-pen-fancy"></i>&nbsp;แฟนฟิค</a>
                                </li>
                                <li><a class="dropdown-item" href="?type=cartoon"><i
                                            class="fa-solid fa-feather"></i>&nbsp;การ์ตูน</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="ชื่อเรื่อง" aria-label="Search">
                        <button class="btn btn-noverse"><i class="fa-solid fa-magnifying-glass"></i></button>
                    </form>
                    <div class="d-flex ms-2">
                        <a class="btn btn-noverse" href="?page=login"><i
                                class="fa-solid fa-right-to-bracket"></i>&nbsp;เข้าสู่ระบบ</a>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <!-- Section ในส่วนนี้เขียนด้วย PHP ทำให้สามารถดึงหน้าจากไฟล์อื่นมา ขึ้นในหน้าเว็บ เช่น ?page=home ลงท้ายลิงค์เว็บ จะเอาไฟล์จาก home.php มาใช้ -->
    <section>
        <?php
        if (isset($_GET['page'])) {
            include ('page/' . $_GET['page'] . '.php');
        } else {
            include ('page/home.php');
        }
        ?>
    </section>
    <!-- Footer เป็นส่วนที่ใช้แสดงลิชสิทธิ์ -->
    <footer>
        <center>
            <p style="opacity: 0.2;">&copy; 2024 jirathx. All rights reserved.</p>
        </center>
    </footer>
    <!-- javascript ในส่วนนี้คือดึง Bootstrap JS มาใช้ควบคู่กับลิงค์ของ Bootstrap ด้านบน -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>
