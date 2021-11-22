
  @include ('layouts/admin/head')


<body id="page-top">
  <div id="wrapper">
    <!-- Sidebar -->
   
    @include ('layouts/admin/sidebar')
   
    <!-- Sidebar -->
    <div id="content-wrapper" class="d-flex flex-column">
      <div id="content">
        <!-- TopBar -->
   
    @include ('layouts/admin/header')
   
        <!-- Topbar -->

        <!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">หน้า About</h1>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="./">Home</a></li>
              <li class="breadcrumb-item">Tables</li>
              <li class="breadcrumb-item active" aria-current="page">หน้า About</li>
            </ol>
          </div>

          <div class="row">
            <div class="col-lg-12 mb-4">
              <!-- Simple Tables -->
              <div class="card">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">หน้าเกี่ยวกับ</h6>
                </div>
                <a href="form_add_about.php" class="btn btn-sm btn-primary">เพิ่มข้อมูล</a>
                <div class="table-responsive">
                  <table class="table align-items-center table-flush">
                    <thead class="thead-light">
                      <tr>
                        <th>ID</th>
                        <th>รูป</th>
                        <th>ชื่อ</th>
                        <th>ข้อความ</th>                     
                        <th>แก้ไข</th>
                        <th>ลบ</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td><a href="">001</a></td>
                        <td>รูป</td>
                        <td>ที่มาของชื่อร้าน</td>
                        <td>ที่ทางร้านมีชื่อว่า AC Coffee เพราะว่านั้นเกิดมาจากชื่อของทางเจ้าของร้านก็มีชื่อขึ้นต้นด้วยตัว “C” และทางน้องของทางเจ้าของร้านก็ได้ร่วมหุ้นในร้านอีกด้วยและมีตัวอักษรตัว “A” จึงรวมชื่อร้านกันเป็น AC Coffee นั้นเอง!</td>
                        <td><a href="form_edit_about.php" class="btn btn-sm btn-warning">แก้ไข</a></td>
                        <td><a href="#" class="btn btn-sm btn-danger">ลบ</a></td>
                      </tr>
                      <tr>

                     
                    </tbody>
                  </table>
                </div>
                <div class="card-footer"></div>
              </div>
            </div>
          </div>
          <!--Row-->

          <!-- Modal Logout -->
          <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabelLogout" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabelLogout">Ohh No!</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                  </button>
                </div>
                <div class="modal-body">
                  <p>Are you sure you want to logout?</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Cancel</button>
                  <a href="login.html" class="btn btn-primary">Logout</a>
                </div>
              </div>
            </div>
          </div>

        </div>
        <!---Container Fluid-->
      </div>
      <!-- Footer -->
    
    @include ('layouts/admin/footer')
    
      <!-- Footer -->
    </div>
  </div>

  <!-- Scroll to top -->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

 
</body>

</html>