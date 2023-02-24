<?php
    include "../controller/controllerDetail.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>สร้าง QR code</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../data/css/styles.css">
    <script src="https://kit.fontawesome.com/c150442d6f.js" crossorigin="anonymous"></script>
</head>

<body background="../data/images/BG.png">
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
                            <li><a class="dropdown-item" href="view/view_edit.php">แก้ไขนักเตะ</a></li>
                            <li><a class="dropdown-item" href="view/view_delete.php">ลบนักเตะ</a></li>
                        </ul>
                    </li>
            </div>
        </div>
    </nav>
    <div class="container">
        <div class="row ">
            <div class="col ">
                <br>
                <br>
                <br>
                <div class="card p-3 border" style="background-image: url('../data/images/BG-D.png');">
                    <br>
                    <center>
                        <h1><i class="fas fa-user">&nbsp;&nbsp;</i>                            
                            <?=$jsonDecode['first_name'];?> 
                            <?=$jsonDecode['last_name'];?></h1>
                    </center>
                    <div class="d-flex">
                        <div class="col col-5 ms-5">
                            <form name="frmadd" method="GET" action="../indexLogin.php"
                                enctype="multipart/form-data">
                                <br>
                                <br>
                                <h4><label for="id">Username</label></h4><!--หัวข้อ-->
                                <input type="text" class="form-control" id="username" name="username"
                                    placeholder="กรุณากรอก Username">
                                <br>
                                <h4><label for="pass">Password</label></h4><!--หัวข้อ-->
                                <input type="password" class="form-control" id="password" name="password"
                                    placeholder="กรุณากรอก Password">
                                <br>
                                <left>
                                    <input class="form-check-input" type="checkbox" name="save">
                                    <label class="form-check-label">
                                        จำฉันไว้
                                    </label>
                                    &nbsp;
                                    &nbsp;
                                    &nbsp;
                                    &nbsp;
                                    &nbsp;
                                    &nbsp;
                                    &nbsp;
                                    &nbsp;
                                    &nbsp;
                                    &nbsp;
                                    &nbsp;
                                    <a href="#" class="text-dark">ลืมรหัสผ่าน?</a>
                                </left>
                                <center>
                                <div class="form-group row">
                                    <label for="inputPassword" class="col-sm-2 col-form-label"></label>
                                    <div class="col-sm-8">
                                      <br>
                                      <br>
                                        <button type="submit" class="btn btn-primary btn-block">
                                            SING IN NOW</button>
                                    </div>
                                    <br>
                                </div>
                                <br>
                                <p>คุณยังไม่มีบัญชีใช่หรือไม่?&nbsp;&nbsp;<a href="view_register.php" class="text-dark">สร้างบัญชีตอนนี้</a></p>
                                </center>
                            </form>
                        </div>
                        &nbsp;
                        &nbsp;
                        &nbsp;
                        &nbsp;
                        &nbsp;
                        &nbsp;
                        &nbsp;
                        &nbsp;
                        &nbsp;
                        &nbsp;
                        &nbsp;
                        &nbsp;
                        &nbsp;
                        &nbsp;
                        &nbsp;
                        &nbsp;
                        &nbsp;
                        &nbsp;
                        &nbsp;
                        &nbsp;
                        &nbsp;
                        &nbsp;
                        &nbsp;
                        &nbsp;
                        &nbsp;
                        &nbsp;
                        &nbsp;
                        &nbsp;
                        &nbsp;
                        <div class="col-lg-4  d-none d-lg-block">
                            <br>
                            <img src="https://chart.googleapis.com/chart?chs=250x250&cht=qr&chl=https://raw.githubusercontent.com/katalon-studio/docs-images/master/katalon-recorder/docs/jtbd/conditional-cases/media/image3.jpeg"
                                title="Username/Password" />
                            <br>
                            <br>
                            <h3>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                Scan Me..
                                <i class="fas fa-qrcode">
                                </i>
                            </h3>
                            <p>สแกนเพื่อดูบัญชีทดลองเพื่อใช้ทดสอบ..</p>
                        </div>
                    </div>
                    <center>
                    <hr width="2"><hr size="4">
                    <a href="https://web.facebook.com/profile.php?id=100086630391898" class="text-primary"><i class="fa fa-facebook-official"></i></a>
                    &nbsp;
                    &nbsp;
                    <a href="https://www.secure.instagram.com/" class="text-warning"><i class="fa fa-instagram"></i></a>
                    &nbsp;
                    &nbsp;
                    <a href="https://www.youtube.com/@mr.supphalakmaneepanpanit7264" class="text-danger"><i class="fa fa-youtube-square"></i></a>
                  </center>
                </div>
            </div>
        </div>
    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <footer class="py-lg-5 bg-light ">
        <div class="container">
            <p class="m-0 text-center text-dark">Copyright &copy; Nakhon Pathom
                Rajabhat University 2021</p>
        </div>
    </footer>

    <script src="script.js"></script>
</body>

</html>