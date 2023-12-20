<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>Requests</title>

    <!-- Custom fonts for this template -->
    <link
      href="vendor/fontawesome-free/css/all.min.css"
      rel="stylesheet"
      type="text/css"
    />
    <link
      href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
      rel="stylesheet"
    />

    <!-- Custom styles for this template -->
    <link href="css/sb-admin-2.min.css" rel="stylesheet" />

    <!-- Custom styles for this page -->
    <link
      href="vendor/datatables/dataTables.bootstrap4.min.css"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="css/style.css" />
  </head>
  <body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">
      <!-- Sidebar -->
      <ul
        class="navbar-nav sidebar sidebar-dark accordion"
        id="accordionSidebar"
      >
        <!-- Sidebar - Brand -->
        <a
          class="sidebar-brand d-flex align-items-center justify-content-center"
          href="index.html"
        >
          <div class="sidebar-brand-icon">
            <img src="img/logo-w.png" alt="" />
          </div>
          <div class="sidebar-brand-text mx-3">
            <div>LPU - C</div>
            <div class="com">Logo</div>
          </div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0" />

        <!-- Nav Item - Dashboard -->
        <li class="nav-item active">
          <a class="nav-link" href="index.html">
            <div class="d-flex align-items-center">
              <img
                src="Images/w_profile.svg"
                class="mx-3"
                width="30"
                height="28"
                alt=""
              />
              <div class="ml-md-1 sz">
                Welcome,<br />
                Admin Name
              </div>
            </div>
          </a>
        </li>

    
        <li class="nav-item active">
          <a class="nav-link" href="#">
            <div class="d-flex align-items-center active-link">
            <img
                src="Images/w_dashboard.svg"
                class="mx-3"
                width="30"
                height="28"
                alt=""
              />
              <div class="sidesize t1color">Requests</div>
            </div>
          </a>
        </li>
      </ul>

      <!-- Divider -->
      <hr class="sidebar-divider" />
      <!-- End of Sidebar -->

      <!-- Content Wrapper -->
      <div id="content-wrapper" class="d-flex flex-column">
        <!-- Main Content -->
        <div id="content">
          <!-- Topbar -->
          <nav
            class="navbar navbar-expand navbar-light mainc topbar mb-4 static-top shadow"
          >
            <!-- Sidebar Toggle (Topbar) -->
            <form class="form-inline">
              <button
                id="sidebarToggleTop"
                class="btn btn-link d-md-none rounded-circle mr-3"
              >
                <i class="fa fa-bars"></i>
              </button>
            </form>

            <!-- Topbar Search -->
            <h3 class="font-weight-bold lm-1">Requests</h3>

            <!-- Logout Button -->
            <div class="ml-auto">
              <button class="btn btn-outline-light btn-sm" id="logoutButton">
                Log Out
              </button>
            </div>
          </nav>
          <!-- End of Topbar -->
          <!-- Begin Page Content -->
          <div class="container-fluid">
            <div class="d-flex justify-content-between align-items-center">
              <div class="d-flex align-items-center">
                <input
                  type="search"
                  class="form-control form-control-sm mb-4"
                  placeholder="Search for Requests"
                  aria-controls="dataTable"
                />
                <button
                  class="btn btn-outline-secondary btn-sm ml-2 mb-4"
                  type="submit"
                >
                  Search
                </button>
              </div>
              <div class="ml-2 mb-4">
                <button
                  type="button"
                  class="btn btn-outline-secondary btn-sm"
                  data-bs-toggle="modal"
                  data-bs-target="#addreadmat"
                >
                  Export
                </button>
              </div>
            </div>
             <!-- DataTables -->

            <!-- DataTales Example -->
            <div class="card shadow mb-4">
              <div class="card-header py-3">
                <h6 class="m-0 fsml font-weight-bold t1color">Requests List</h6>
              </div>
              <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                  <div class="d-inline-flex align-items-center">
                    <label class="mr-2">Show</label>
                    <select
                      name="dataTable_length"
                      aria-controls="dataTable"
                      class="custom-select custom-select-sm form-control form-control-sm mr-2 mb-2"
                    >
                      <option value="10">10</option>
                      <option value="25">25</option>
                      <option value="50">50</option>
                      <option value="100">100</option>
                    </select>
                    <label>entries</label>
                  </div>
                  <div class="dropdown d-inline-flex align-items-center">

                    <!-- Save Changes button -->
                    <button
                    id="saveChangesBtn"
                    type="button"
                    class="btn btn-outline-secondary btn-sm ml-auto mb-2 mr-1"
                    >
                    Save Changes
                    </button>
                    <script>
                    document.getElementById('saveChangesBtn').addEventListener('click', function() {
                    var confirmation = confirm("Are you sure you want to save the changes?");
                });

                    </script>
                    </form>
                  </div>
                </div>

                <div class="table-responsive">
                <div id="statusForm">
                  <table
                    class="table table-bordered"
                    id="dataTable"
                    width="100%"
                    cellspacing="0"
                  >
                    <thead>
                      <tr class="center">
                        <th>Student No.</th>
                        <th>Borrower's Name</th>
                        <th>Email</th>
                        <th>Course</th>
                        <th>Reference No.</th>
                        <th>Title</th>
                        <th>Date Requested</th>
                        <th>Status</th>
                        <th>status req</th>
                      </tr>
                      </thead>

                      <?php 
                      include 'dbcon.php';
                      $query = "SELECT * FROM  request WHERE status_req = 'pending'";
                      $result = mysqli_query($conn,$query);
                      while($row = mysqli_fetch_array($result))  { ?>

                        <tbody>
                          <tr>
                            <th scope="row"><?php echo $row['studentNo']; ?></th>
                            <td><?php echo $row['student_Name']; ?></td>
                            <td><?php echo $row['email']; ?></td>
                            <td><?php echo $row['course']; ?></td>
                            <td><?php echo $row['book_ref']; ?></td>
                            <td><?php echo $row['book_title']; ?></td>
                            <td><?php echo $row['dateRequested']; ?></td>


                          <td>
                          <form action="request.php" method="POST">
                          <input type="hidden" name="id" value="<?php echo $row['studentNo']; ?>"/>
                          
                          <input type="submit" name="approve" value="approve"> &nbsp &nbsp <br>
                          <input type="submit" name="decline" value="decline"> 

                          </form>
                        </td>
                          </tr>
                        
                        </tbody>
                        <?php } ?>
                      </table>
                      
                      <?php 
                        if(isset($_POST['approve'])) {
                          $studentNo = $_POST['id']; // Change 'studentNo' to 'id'
                          $select = "UPDATE request SET status_req = 'approved' WHERE studentNo = '$studentNo' ";
                          $result = mysqli_query($conn, $select);
                      }
                      
                      if(isset($_POST['decline'])) {
                          $studentNo = $_POST['id']; // Change 'studentNo' to 'id'
                          $select = "UPDATE request SET status_req = 'declined' WHERE studentNo = '$studentNo' ";
                          $result = mysqli_query($conn, $select);
                      }
                      

                        ?>
                    
                    <div class="d-flex justify-content-between">
                      <div
                        class="dataTables_info"
                        id="dataTable_info"
                        role="status"
                        aria-live="polite"
                      >
                        Showing 1 to 5 of 5 entries
                      </div>
                      <ul class="pagination">
                        <li
                          class="paginate_button page-item previous disabled"
                          id="dataTable_previous"
                        >
                          <a
                            href="#"
                            aria-controls="dataTable"
                            data-dt-idx="0"
                            tabindex="0"
                            class="page-link"
                            >Previous</a
                          >
                        </li>
                        <li class="paginate_button page-item active">
                          <a
                            href="#"
                            aria-controls="dataTable"
                            data-dt-idx="1"
                            tabindex="0"
                            class="page-link"
                            >1</a
                          >
                        </li>
                        <li
                          class="paginate_button page-item next disabled"
                          id="dataTable_next"
                        >
                          <a
                            href="#"
                            aria-controls="dataTable"
                            data-dt-idx="2"
                            tabindex="0"
                            class="page-link"
                            >Next</a
                          >
                        </li>
                      </ul>
                    </div>
                    </div>
                    </div>
                    </div>
                    </div>
                    <!-- /.container-fluid -->
                    </div>
                    <!-- End of Main Content -->
                    </div>
                    <!-- End of Content Wrapper -->
                    </div>
                    <!-- End of Page Wrapper -->

                    <!-- Scroll to Top Button-->
                    <a class="scroll-to-top rounded" href="#page-top">
                    <i class="fas fa-angle-up"></i>
                    </a>

                    <!-- Logout Modal-->
                    <div
                    class="modal fade"
                    id="logoutModal"
                    tabindex="-1"
                    role="dialog"
                    aria-labelledby="exampleModalLabel"
                    aria-hidden="true"
                    >
                    <div class="modal-dialog" role="document">
                    <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button
                    class="close"
                    type="button"
                    data-dismiss="modal"
                    aria-label="Close"
                    >
                    <span aria-hidden="true">×</span>
                    </button>
                    </div>
                    <div class="modal-body">
                    Select "Logout" below if you are ready to end your current session.
                    </div>
                    <div class="modal-footer">
                    <button
                    class="btn btn-secondary"
                    type="button"
                    data-dismiss="modal"
                    >
                    Cancel
                    </button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                    </div>
                    </div>
                    </div>
                    </div>
                    <script
                    src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
                    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
                    crossorigin="anonymous"
                    ></script>
                    <!-- Bootstrap core JavaScript-->
                    <script src="vendor/jquery/jquery.min.js"></script>
                    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

                    <!-- Core plugin JavaScript-->
                    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

                    <!-- Custom scripts for all pages-->
                    <script src="js/sb-admin-2.min.js"></script>

                    <!-- Page level plugins -->
                    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
                    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>
                    </body>
                    </html>