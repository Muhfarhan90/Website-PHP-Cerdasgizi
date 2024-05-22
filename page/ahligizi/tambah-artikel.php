<?php
include('../../database/database.php');
include("../../logout.php");

if (!isset($_SESSION['is_login']) && $_SESSION['id_role'] == 3 || $_SESSION['id_role'] == 1) {
    header('Location: index.php');
    exit();
}

$user_id = $_SESSION['id_user'];
$query = "SELECT * FROM nutritionist WHERE id_user = $user_id";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Profil Pasien</title>
    <!-- base:css -->
    <link rel="stylesheet" href="../../vendors/typicons/typicons.css">
    <link rel="stylesheet" href="../../vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="../../vendors/mdi/css/materialdesignicons.min.css" />

    <!-- endinject -->
    <!-- plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="../../css/vertical-layout-light/style.css">
    <!-- endinject -->
    <link rel="shortcut icon" href="../../images/favicon.png" />
</head>

<body>

    <div class="container-scroller">
        <!-- partial:partials/_navbar.html -->
        <?php
        include('navbar-ahligizi.php');
        ?>
        <!-- partial -->

        </nav>
        <div class="container-fluid page-body-wrapper">
            <!-- partial:partials/_settings-panel.html -->
            <div class="theme-setting-wrapper">
                <div id="settings-trigger"><i class="typcn typcn-cog-outline"></i></div>
                <div id="theme-settings" class="settings-panel">
                    <i class="settings-close typcn typcn-times"></i>
                    <p class="settings-heading">SIDEBAR SKINS</p>
                    <div class="sidebar-bg-options selected" id="sidebar-light-theme">
                        <div class="img-ss rounded-circle bg-light border mr-3"></div>Light
                    </div>
                    <div class="sidebar-bg-options" id="sidebar-dark-theme">
                        <div class="img-ss rounded-circle bg-dark border mr-3"></div>Dark
                    </div>
                    <p class="settings-heading mt-2">HEADER SKINS</p>
                    <div class="color-tiles mx-0 px-4">
                        <div class="tiles success"></div>
                        <div class="tiles warning"></div>
                        <div class="tiles danger"></div>
                        <div class="tiles info"></div>
                        <div class="tiles dark"></div>
                        <div class="tiles default"></div>
                    </div>
                </div>
            </div>
            <div id="right-sidebar" class="settings-panel">
                <i class="settings-close typcn typcn-times"></i>
                <ul class="nav nav-tabs" id="setting-panel" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="todo-tab" data-toggle="tab" href="#todo-section" role="tab" aria-controls="todo-section" aria-expanded="true">TO DO LIST</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="chats-tab" data-toggle="tab" href="#chats-section" role="tab" aria-controls="chats-section">CHATS</a>
                    </li>
                </ul>
                <div class="tab-content" id="setting-content">
                    <div class="tab-pane fade show active scroll-wrapper" id="todo-section" role="tabpanel" aria-labelledby="todo-section">
                        <div class="add-items d-flex px-3 mb-0">
                            <form class="form w-100">
                                <div class="form-group d-flex">
                                    <input type="text" class="form-control todo-list-input" placeholder="Add To-do">
                                    <button type="submit" class="add btn btn-primary todo-list-add-btn" id="add-task">Add</button>
                                </div>
                            </form>
                        </div>
                        <div class="list-wrapper px-3">
                            <ul class="d-flex flex-column-reverse todo-list">
                                <li>
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input class="checkbox" type="checkbox">
                                            Team review meeting at 3.00 PM
                                        </label>
                                    </div>
                                    <i class="remove typcn typcn-delete-outline"></i>
                                </li>
                                <li>
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input class="checkbox" type="checkbox">
                                            Prepare for presentation
                                        </label>
                                    </div>
                                    <i class="remove typcn typcn-delete-outline"></i>
                                </li>
                                <li>
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input class="checkbox" type="checkbox">
                                            Resolve all the low priority tickets due today
                                        </label>
                                    </div>
                                    <i class="remove typcn typcn-delete-outline"></i>
                                </li>
                                <li class="completed">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input class="checkbox" type="checkbox" checked>
                                            Schedule meeting for next week
                                        </label>
                                    </div>
                                    <i class="remove typcn typcn-delete-outline"></i>
                                </li>
                                <li class="completed">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input class="checkbox" type="checkbox" checked>
                                            Project review
                                        </label>
                                    </div>
                                    <i class="remove typcn typcn-delete-outline"></i>
                                </li>
                            </ul>
                        </div>
                        <div class="events py-4 border-bottom px-3">
                            <div class="wrapper d-flex mb-2">
                                <i class="typcn typcn-media-record-outline text-primary mr-2"></i>
                                <span>Feb 11 2018</span>
                            </div>
                            <p class="mb-0 font-weight-thin text-gray">Creating component page</p>
                            <p class="text-gray mb-0">build a js based app</p>
                        </div>
                        <div class="events pt-4 px-3">
                            <div class="wrapper d-flex mb-2">
                                <i class="typcn typcn-media-record-outline text-primary mr-2"></i>
                                <span>Feb 7 2018</span>
                            </div>
                            <p class="mb-0 font-weight-thin text-gray">Meeting with Alisa</p>
                            <p class="text-gray mb-0 ">Call Sarah Graves</p>
                        </div>
                    </div>
                    <!-- To do section tab ends -->
                    <div class="tab-pane fade" id="chats-section" role="tabpanel" aria-labelledby="chats-section">
                        <div class="d-flex align-items-center justify-content-between border-bottom">
                            <p class="settings-heading border-top-0 mb-3 pl-3 pt-0 border-bottom-0 pb-0">Friends</p>
                            <small class="settings-heading border-top-0 mb-3 pt-0 border-bottom-0 pb-0 pr-3 font-weight-normal">See All</small>
                        </div>
                        <ul class="chat-list">
                            <li class="list active">
                                <div class="profile"><img src="images/faces/face1.jpg" alt="image"><span class="online"></span></div>
                                <div class="info">
                                    <p>Thomas Douglas</p>
                                    <p>Available</p>
                                </div>
                                <small class="text-muted my-auto">19 min</small>
                            </li>
                            <li class="list">
                                <div class="profile"><img src="images/faces/face2.jpg" alt="image"><span class="offline"></span></div>
                                <div class="info">
                                    <div class="wrapper d-flex">
                                        <p>Catherine</p>
                                    </div>
                                    <p>Away</p>
                                </div>
                                <div class="badge badge-success badge-pill my-auto mx-2">4</div>
                                <small class="text-muted my-auto">23 min</small>
                            </li>
                            <li class="list">
                                <div class="profile"><img src="images/faces/face3.jpg" alt="image"><span class="online"></span></div>
                                <div class="info">
                                    <p>Daniel Russell</p>
                                    <p>Available</p>
                                </div>
                                <small class="text-muted my-auto">14 min</small>
                            </li>
                            <li class="list">
                                <div class="profile"><img src="images/faces/face4.jpg" alt="image"><span class="offline"></span></div>
                                <div class="info">
                                    <p>James Richardson</p>
                                    <p>Away</p>
                                </div>
                                <small class="text-muted my-auto">2 min</small>
                            </li>
                            <li class="list">
                                <div class="profile"><img src="images/faces/face5.jpg" alt="image"><span class="online"></span></div>
                                <div class="info">
                                    <p>Madeline Kennedy</p>
                                    <p>Available</p>
                                </div>
                                <small class="text-muted my-auto">5 min</small>
                            </li>
                            <li class="list">
                                <div class="profile"><img src="images/faces/face6.jpg" alt="image"><span class="online"></span></div>
                                <div class="info">
                                    <p>Sarah Graves</p>
                                    <p>Available</p>
                                </div>
                                <small class="text-muted my-auto">47 min</small>
                            </li>
                        </ul>
                    </div>
                    <!-- chat tab ends -->
                </div>
            </div>
            <!-- partial -->
            <!-- partial:partials/_sidebar.html -->
            <?php
            include('sidebar-ahligizi.php');
            ?>
            <!-- partial -->
            <div class="main-panel">

                <div class="content-wrapper">
                    <!-- Judul fitur -->
                    <div class="row">

                        <div class="col-xl-6 grid-margin stretch-card flex-column">
                            <h1 class="mb-2 text-titlecase mb-4">Tambah Artikel</h1>
                        </div>
                    </div>

                    <!-- Form tambah profil -->


                    <div class="row">
                        <div class="col-12 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Masukkan data artikel !</h4>
                                    <form class="forms-sample" method="POST" action="proses-tambah-artikel.php">
                                        <div class="form-group">
                                            <label for="exampleInputName1">Judul Artikel</label>
                                            <input type="text" class="form-control" id="exampleInputName1" name="judul" placeholder="Name">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail3">Isi Artikel</label>
                                            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px" name="konten"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="dropdown">Pilih Kategori</label>
                                            <select class="form-control" id="dropdown" name="kategori">
                                                <?php
                                                $sql = "SELECT * FROM category_article";
                                                $result = mysqli_query($conn, $sql);

                                                if (mysqli_num_rows($result) > 0) {
                                                    while ($row = mysqli_fetch_assoc($result)) {
                                                ?>
                                                        <option value="<?= $row['ID_CATEGORY'] ?>"><?= $row['NAME_CATEGORY'] ?></option>
                                                <?php
                                                    }
                                                }
                                                ?>

                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail3">Gambar Artikel</label>
                                            <input type="file" class="form-control" id="exampleInputEmail3" name="gambar" placeholder="Password">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail3">Tanggal Publish</label>
                                            <input type="date" class="form-control" id="exampleInputEmail3" name="tanggal" placeholder="Password" value="<?php
                                                                                                                                                            $tanggal = date('Y-m-d');
                                                                                                                                                            echo "$tanggal";
                                                                                                                                                            ?>" disabled>
                                        </div>



                                        <button type="submit" class="btn btn-primary mr-2" name="tambah-artikel">Tambah</button>
                                        <button class="btn btn-light">Cancel</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Grafik -->
                    <!-- <div class="content-wrapper">

  <div class="row">
    <div class="col-xl-6 grid-margin stretch-card flex-column">
        <h5 class="mb-2 text-titlecase mb-4">Status statistics</h5>
      <div class="row">
        <div class="col-md-6 grid-margin stretch-card">
          <div class="card">
            <div class="card-body d-flex flex-column justify-content-between">
              <div class="d-flex justify-content-between align-items-center mb-2">
                <p class="mb-0 text-muted">Transactions</p>
                <p class="mb-0 text-muted">+1.37%</p>
              </div>
              <h4>1352</h4>
              <canvas id="transactions-chart" class="mt-auto" height="65"></canvas>
            </div>
          </div>
        </div>
        <div class="col-md-6 grid-margin stretch-card">
          <div class="card">
            <div class="card-body d-flex flex-column justify-content-between">
              <div class="d-flex justify-content-between align-items-center mb-2">
                <div>
                  <p class="mb-2 text-muted">Sales</p>
                  <h6 class="mb-0">563</h6>
                </div>
                <div>
                  <p class="mb-2 text-muted">Orders</p>
                  <h6 class="mb-0">720</h6>
                </div>
                <div>
                  <p class="mb-2 text-muted">Revenue</p>
                  <h6 class="mb-0">5900</h6>
                </div>
              </div>
              <canvas id="sales-chart-a" class="mt-auto" height="65"></canvas>
            </div>
          </div>
        </div>
      </div>
      <div class="row h-100">
        <div class="col-md-6 stretch-card grid-margin grid-margin-md-0">
          <div class="card">
            <div class="card-body d-flex flex-column justify-content-between">
              <p class="text-muted">Sales Analytics</p>
              <div class="d-flex justify-content-between align-items-center mb-2">
                <h3 class="mb-">27632</h3>
                <h3 class="mb-">78%</h3>
              </div>
              <canvas id="sales-chart-b" class="mt-auto" height="38"></canvas>
            </div>
          </div>
        </div>
        <div class="col-md-6 stretch-card">
          <div class="card">
            <div class="card-body">
              <div class="row h-100">
                <div class="col-6 d-flex flex-column justify-content-between">
                  <p class="text-muted">CPU</p>
                  <h4>55%</h4>
                  <canvas id="cpu-chart" class="mt-auto"></canvas>
                </div>
                <div class="col-6 d-flex flex-column justify-content-between">
                  <p class="text-muted">Memory</p>
                  <h4>123,65</h4>
                  <canvas id="memory-chart" class="mt-auto"></canvas>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xl-6 grid-margin stretch-card flex-column">
      <h5 class="mb-2 text-titlecase mb-4">Income statistics</h5>
      <div class="row h-100">
        <div class="col-md-12 stretch-card">
          <div class="card">
            <div class="card-body">
              <div class="d-flex justify-content-between align-items-start flex-wrap">
                <div>
                  <p class="mb-3">Monthly Increase</p>
                  <h3>67842</h3>
                </div>
                <div id="income-chart-legend" class="d-flex flex-wrap mt-1 mt-md-0"></div>
              </div>
              <canvas id="income-chart"></canvas>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-xl-4 grid-margin stretch-card">
      <div class="card">
        <div class="card-body border-bottom">
          <div class="d-flex justify-content-between align-items-center flex-wrap">
            <h6 class="mb-2 mb-md-0 text-uppercase font-weight-medium">Overall sales</h6>
            <div class="dropdown">
              <button class="btn bg-white p-0 pb-1 text-muted btn-sm dropdown-toggle" type="button" id="dropdownMenuSizeButton3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Last 30 days
              </button>
              <div class="dropdown-menu" aria-labelledby="dropdownMenuSizeButton3">
                <h6 class="dropdown-header">Settings</h6>
                <a class="dropdown-item" href="javascript:;">Action</a>
                <a class="dropdown-item" href="javascript:;">Another action</a>
                <a class="dropdown-item" href="javascript:;">Something else here</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="javascript:;">Separated link</a>
              </div>
            </div>
          </div>
        </div>
        <div class="card-body">
          <canvas id="sales-chart-c" class="mt-2"></canvas>
          <div class="d-flex align-items-center justify-content-between border-bottom pb-3 mb-3 mt-4">
            <div class="d-flex flex-column justify-content-center align-items-center">
              <p class="text-muted">Gross Sales</p>
              <h5>492</h5>
              <div class="d-flex align-items-baseline">
                <p class="text-success mb-0">0.5%</p>
                <i class="typcn typcn-arrow-up-thick text-success"></i>
              </div>
            </div>
            <div class="d-flex flex-column justify-content-center align-items-center">
              <p class="text-muted">Purchases</p>
              <h5>87k</h5>
              <div class="d-flex align-items-baseline">
                <p class="text-success mb-0">0.8%</p>
                <i class="typcn typcn-arrow-up-thick text-success"></i>
              </div>
            </div>
            <div class="d-flex flex-column justify-content-center align-items-center">
              <p class="text-muted">Tax Return</p>
              <h5>882</h5>
              <div class="d-flex align-items-baseline">
                <p class="text-danger mb-0">-04%</p>
                <i class="typcn typcn-arrow-down-thick text-danger"></i>
              </div>
            </div>
          </div>
          <div class="d-flex justify-content-between align-items-center">
            <div class="dropdown">
              <button class="btn bg-white p-0 pb-1 pt-1 text-muted btn-sm dropdown-toggle" type="button" id="dropdownMenuSizeButton3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Last 7 days
              </button>
              <div class="dropdown-menu" aria-labelledby="dropdownMenuSizeButton3">
                <h6 class="dropdown-header">Settings</h6>
                <a class="dropdown-item" href="javascript:;">Action</a>
                <a class="dropdown-item" href="javascript:;">Another action</a>
                <a class="dropdown-item" href="javascript:;">Something else here</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="javascript:;">Separated link</a>
              </div>
            </div>
            <p class="mb-0">overview</p>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-6 col-xl-4 grid-margin stretch-card">
      <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
          <div class="card newsletter-card bg-gradient-warning">
            <div class="card-body">
              <div class="d-flex flex-column align-items-center justify-content-center h-100">
                <h5 class="mb-3 text-white">Newsletter</h5>
                <form class="form d-flex flex-column align-items-center justify-content-between w-100">
                  <div class="form-group mb-2 w-100">
                    <input type="text" class="form-control" placeholder="email address">
                  </div>
                  <button class="btn btn-danger btn-rounded mt-1" type="submit">Subscribe</button>
                </form>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-12 stretch-card">
          <div class="card profile-card bg-gradient-primary">
            <div class="card-body">
              <div class="row align-items-center h-100">
                <div class="col-md-4">
                  <figure class="avatar mx-auto mb-4 mb-md-0">
                    <img src="images/faces/face20.jpg" alt="avatar">
                  </figure>
                </div>
                <div class="col-md-8">
                  <h5 class="text-white text-center text-md-left">Phoebe Kennedy</h5>
                  <p class="text-white text-center text-md-left">kennedy@gmail.com</p>
                  <div class="d-flex align-items-center justify-content-between info pt-2">
                    <div>
                      <p class="text-white font-weight-bold">Birth date</p>
                      <p class="text-white font-weight-bold">Birth city</p>
                    </div>
                    <div>
                      <p class="text-white">16 Sep 2019</p>
                      <p class="text-white">Netherlands</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-6 col-xl-4 grid-margin stretch-card">
      <div class="card">
        <div class="card-body border-bottom">
          <div class="d-flex justify-content-between align-items-center flex-wrap">
            <h6 class="mb-2 mb-md-0 text-uppercase font-weight-medium">Sales statistics</h6>
            <div class="dropdown">
              <button class="btn bg-white p-0 pb-1 text-muted btn-sm dropdown-toggle" type="button" id="dropdownMenuSizeButton4" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Last 7 days
              </button>
              <div class="dropdown-menu" aria-labelledby="dropdownMenuSizeButton4">
                <h6 class="dropdown-header">Settings</h6>
                <a class="dropdown-item" href="javascript:;">Action</a>
                <a class="dropdown-item" href="javascript:;">Another action</a>
                <a class="dropdown-item" href="javascript:;">Something else here</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="javascript:;">Separated link</a>
              </div>
            </div>
          </div>
        </div>
        <div class="card-body">
          <canvas id="sales-chart-d" height="320"></canvas>
        </div>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-md-4 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <div class="d-flex align-items-center justify-content-between justify-content-md-center justify-content-xl-between flex-wrap mb-4">
            <div>
              <p class="mb-2 text-md-center text-lg-left">Total Expenses</p>
              <h1 class="mb-0">8742</h1>
            </div>
            <i class="typcn typcn-briefcase icon-xl text-secondary"></i>
          </div>
          <canvas id="expense-chart" height="80"></canvas>
        </div>
      </div>
    </div>
    <div class="col-md-4 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <div class="d-flex align-items-center justify-content-between justify-content-md-center justify-content-xl-between flex-wrap mb-4">
            <div>
              <p class="mb-2 text-md-center text-lg-left">Total Budget</p>
              <h1 class="mb-0">47,840</h1>
            </div>
            <i class="typcn typcn-chart-pie icon-xl text-secondary"></i>
          </div>
          <canvas id="budget-chart" height="80"></canvas>
        </div>
      </div>
    </div>
    <div class="col-md-4 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <div class="d-flex align-items-center justify-content-between justify-content-md-center justify-content-xl-between flex-wrap mb-4">
            <div>
              <p class="mb-2 text-md-center text-lg-left">Total Balance</p>
              <h1 class="mb-0">$7,243</h1>
            </div>
            <i class="typcn typcn-clipboard icon-xl text-secondary"></i>
          </div>
          <canvas id="balance-chart" height="80"></canvas>
        </div>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="table-responsive pt-3">
          <table class="table table-striped project-orders-table">
            <thead>
              <tr>
                <th class="ml-5">ID</th>
                <th>Project name</th>
                <th>Customer</th>
                <th>Deadline</th>
                <th>Payouts	</th>
                <th>Traffic</th>
                <th>Actions</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>#D1</td>
                <td>Consectetur adipisicing elit </td>
                <td>Beulah Cummings</td>
                <td>03 Jan 2019</td>
                <td>$ 5235</td>
                <td>1.3K</td>
                <td>
                  <div class="d-flex align-items-center">
                    <button type="button" class="btn btn-success btn-sm btn-icon-text mr-3">
                      Edit
                      <i class="typcn typcn-edit btn-icon-append"></i>                          
                    </button>
                    <button type="button" class="btn btn-danger btn-sm btn-icon-text">
                      Delete
                      <i class="typcn typcn-delete-outline btn-icon-append"></i>                          
                    </button>
                  </div>
                </td>
              </tr>
              <tr>
                <td>#D2</td>
                <td>Correlation natural resources silo</td>
                <td>Mitchel Dunford</td>
                <td>09 Oct 2019</td>
                <td>$ 3233</td>
                <td>5.4K</td>
                <td>
                  <div class="d-flex align-items-center">
                    <button type="button" class="btn btn-success btn-sm btn-icon-text mr-3">
                      Edit
                      <i class="typcn typcn-edit btn-icon-append"></i>                          
                    </button>
                    <button type="button" class="btn btn-danger btn-sm btn-icon-text">
                      Delete
                      <i class="typcn typcn-delete-outline btn-icon-append"></i>                          
                    </button>
                  </div>
                </td>
              </tr>
              <tr>
                <td>#D3</td>
                <td>social capital compassion social</td>
                <td>Pei Canaday</td>
                <td>18 Jun 2019</td>
                <td>$ 4311</td>
                <td>2.1K</td>
                <td>
                  <div class="d-flex align-items-center">
                    <button type="button" class="btn btn-success btn-sm btn-icon-text mr-3">
                      Edit
                      <i class="typcn typcn-edit btn-icon-append"></i>                          
                    </button>
                    <button type="button" class="btn btn-danger btn-sm btn-icon-text">
                      Delete
                      <i class="typcn typcn-delete-outline btn-icon-append"></i>                          
                    </button>
                  </div>
                </td>
              </tr>
              <tr>
                <td>#D4</td>
                <td>empower communities thought</td>
                <td>Gaynell Sharpton</td>
                <td>23 Mar 2019</td>
                <td>$ 7743</td>
                <td>2.7K</td>
                <td>
                  <div class="d-flex align-items-center">
                    <button type="button" class="btn btn-success btn-sm btn-icon-text mr-3">
                      Edit
                      <i class="typcn typcn-edit btn-icon-append"></i>                          
                    </button>
                    <button type="button" class="btn btn-danger btn-sm btn-icon-text">
                      Delete
                      <i class="typcn typcn-delete-outline btn-icon-append"></i>                          
                    </button>
                  </div>
                </td>
              </tr>
              <tr>
                <td>#D5</td>
                <td> Targeted effective; mobilize </td>
                <td>Audrie Midyett</td>
                <td>22 Aug 2019</td>
                <td>$ 2455</td>
                <td>1.2K</td>
                <td>
                  <div class="d-flex align-items-center">
                    <button type="button" class="btn btn-success btn-sm btn-icon-text mr-3">
                      Edit
                      <i class="typcn typcn-edit btn-icon-append"></i>                          
                    </button>
                    <button type="button" class="btn btn-danger btn-sm btn-icon-text">
                      Delete
                      <i class="typcn typcn-delete-outline btn-icon-append"></i>                          
                    </button>
                  </div>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>

</div> -->

                    <!-- content-wrapper ends -->
                    <!-- partial:partials/_footer.html -->
                    <!-- <footer class="footer">
    <div class="card">
        <div class="card-body">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
                <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2020 <a href="https://www.bootstrapdash.com/" class="text-muted" target="_blank">Bootstrapdash</a>. All rights reserved.</span>
                <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center text-muted">Free <a href="https://www.bootstrapdash.com/" class="text-muted" target="_blank">Bootstrap dashboard</a> templates from Bootstrapdash.com</span>
            </div>
        </div>    
    </div>        
</footer> -->
                    <!-- partial -->
                </div>
                <!-- main-panel ends -->
            </div>
            <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->

    <!-- base:js -->
    <script src="../../vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page-->
    <script src="../../vendors/chart.js/Chart.min.js"></script>
    <!-- End plugin js for this page-->
    <!-- inject:js -->
    <script src="../../js/off-canvas.js"></script>
    <script src="../../js/hoverable-collapse.js"></script>
    <script src="../../js/template.js"></script>
    <script src="../../js/settings.js"></script>
    <script src="../../js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="../../js/dashboard.js"></script>
</body>

</html>