<html>

<head>
  <link rel="icon" href="../assets/img/logo.png">
  <title>Trang chủ | Học sinh</title>
  <link rel="stylesheet" href="../assets/css/main.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
  <?php
  require("../includes/users.php");

  if (!isLoggedIn()) {
    header("location:login.php");
    exit();
  }
  ?>

  <main class="container-fluid px-0 d-flex" style="min-height: 100vh">
    <!-- side bar -->
    <input id="chbSidebar" class="visually-hidden" type="checkbox" checked />
    <div id="sidebar" class="bg-light-subtle border-end p-3 d-flex flex-column" style="max-width: 18rem; z-index: 999">
      <h5 class="row m-0 d-flex align-items-center" href="./index.html">
        <span class="col-10 p-0 ps-2 _toggle">
          TUYỂN SINH<br />ĐẠI HỌC 2024
        </span>
        <label class="col p-0 btn fs-3" for="chbSidebar">
          <i class="bi bi-list"></i>
        </label>
      </h5>
      <hr />
      <div class="nav nav-pills flex-column mb-auto">
        <a class="nav-link active" href="./index.php">
          <i class="bi bi-house"></i>
          <span class="ms-2 _toggle">Trang chủ</span>
        </a>
        <a class="nav-link" href="#">
          <i class="bi bi-list-stars"></i>
          <span class="ms-2 _toggle">Nguyện vọng</span>
        </a>
        <a class="nav-link" href="#">
          <i class="bi bi-person-bounding-box"></i>
          <span class="ms-2 _toggle">Thông tin cá nhân</span>
        </a>
        <a class="nav-link" href="./change-password.php">
          <i class="bi bi-person-lock"></i>
          <span class="ms-2 _toggle">Thay đổi mật khẩu</span>
        </a>
      </div>
      <hr />
      <div class="nav">
        <a class="nav-link" href="./login.php">
          <i class="bi bi-box-arrow-up-left"></i>
          <span class="ms-2 _toggle">Đăng xuất</span>
        </a>
      </div>
    </div>

    <div class="flex-fill d-flex flex-column">
      <!-- header -->
      <div class="container-fluid bg-light-subtle m-0 row justify-content-between align-items-center border-bottom" style="height: 4rem">
        <h3 class="col m-0">Trang chủ</h3>
        <form class="col m-0" action="index.php" method="POST">
          <input class="form-control" type="text" placeholder="Tìm theo mã hoặc tên trường" />
        </form>
      </div>

      <!-- content -->
      <div class="h-100 w-100 p-3 bg-light-subtle">
        <h5 class="text-primary">DANH SÁCH CÁC TRƯỜNG ĐẠI HỌC</h5>
        <!--  -->
        <table class="table table-striped">
          <thead>
            <tr class="table-primary">
              <th>STT</th>
              <th>Logo</th>
              <th>Mã trường</th>
              <th>Tên trường</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1</td>
              <td>
                <img src="https://cdn.haitrieu.com/wp-content/uploads/2021/10/Logo-DH-Cong-Nghe-Dong-A-EAUT.png" height="96" />
              </td>
              <td>DDA</td>
              <td><a href="#">Đại học Công nghệ Đông Á</a></td>
            </tr>
            <tr>
              <td>2</td>
              <td>
                <img src="https://cdn.haitrieu.com/wp-content/uploads/2021/10/Logo-DH-Cong-Nghe-Dong-A-EAUT.png" height="96" />
              </td>
              <td>DDA</td>
              <td><a href="#">Đại học Công nghệ Đông Á</a></td>
            </tr>
            <tr>
              <td>3</td>
              <td>
                <img src="https://cdn.haitrieu.com/wp-content/uploads/2021/10/Logo-DH-Cong-Nghe-Dong-A-EAUT.png" height="96" />
              </td>
              <td>DDA</td>
              <td><a href="#">Đại học Công nghệ Đông Á</a></td>
            </tr>
          </tbody>
        </table>
        <!--  -->
        <div class="mt-3 d-flex justify-content-center align-items-center gap-2">
          <a class="btn btn-outline-secondary" href="#">
            <i class="bi bi-caret-left-fill"></i>
          </a>
          <span>1</span>
          <a class="btn btn-outline-secondary" href="#">
            <i class="bi bi-caret-right-fill"></i>
          </a>
        </div>
      </div>
    </div>
  </main>
</body>

</html>