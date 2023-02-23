<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>หลักสูตรระยะสั้น - คณะมนุษยศาสตร์และสังคมศาสตร์ มหาวิทยาลัยราชภัฏนครปฐม</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="data/css/styles.css" rel="stylesheet" />
    <link href="data/css/css.css" rel="stylesheet" />
    <link href="data/css/body.css" rel="stylesheet" />

    <script src="https://kit.fontawesome.com/c150442d6f.js" crossorigin="anonymous"></script>
</head>

<body>
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid px-4 px-lg-5">
            <a class="navbar-brand" href="index.php"><i class="bi bi-globe2"></i>&nbsp;Football World Club </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0 me-lg-4">
                    <li class="nav-item"><a class="nav-link" aria-current="page" href="index.php">หน้าหลัก</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            จัดการนักเตะ
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="view/view_add_form.php">เพิ่มนักเตะ</a></li>
                            <li><a class="dropdown-item" href="view/view_edit.php">แก้ไขนักเตะ</a></li>
                            <li><a class="dropdown-item" href="view/view_delete.php">ลบนักเตะ</a></li>
                        </ul>
                    </li>
            </div>
            <form class="d-flex" action="view/view_search.php" method="get">
                <input class="form-control me-2" type="text" placeholder="Search" aria-label="Search" name="keywords"
                    autocomplete="off">
                <button class="btn btn-outline-light" type="submit" value="Search"> <i
                        class="fas fa-search"></i></button>
            </form>
        </div>
    </nav>
    <!-- Recommend-->
    <div class="container-fluid px-5 px-lg-5 my-5">
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <?php
            include "view/view_recommend.php";
        ?>
                </div>
                <div class="carousel-item">
                    <?php
            include "view/view_recommend.php";
        ?>
                </div>
                <div class="carousel-item">
                    <?php
            include "view/view_recommend.php";
        ?>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- Navigation_Search-->
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid px-4 px-lg-5">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0 me-lg-4">
                    <form action="view/view_year.php" method="GET" class="d-flex">
                        <select class="form-control me-2" name="cs_year" id="cs_year" onchange="this.form.submit();">
                            <option disabled selected hidden><i class="fas fa-search">คลิกเพื่อกรองนักเตะตามปี
                                    &nbsp;&nbsp;
                                    🏆</i></option>
                            <option value="2021">??</option>
                            <option value="2022">??</option>
                            <option value="2023">??</option>
                        </select>
                    </form>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Section-->
    <section class="py-2">
        <div class="container-fluid px-4 px-lg-5 mt-5">
            <div class="row gx-4 gx-lg-5 row-cols-1 row-cols-md-3 row-cols-xl-4 justify-content-center">
                <?php
                    include "controller/controllerUser.php";
                ?>
            </div>
        </div>
    </section>
    <!-- footer-->
    <footer class="py-lg-5 bg-light ">
        <div class="container">
            <p class="m-0 text-center text-dark">Copyright &copy; Nakhon Pathom
                Rajabhat University 2021</p>
        </div>
    </footer>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://unpkg.com/@popperjs/core@2"></script>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="data/js/scripts.js"></script>
</body>

</html>