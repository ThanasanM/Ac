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
            <h1 class="h3 mb-0 text-gray-800">หน้า Knowledge</h1>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="./">Home</a></li>
              <li class="breadcrumb-item">Tables</li>
              <li class="breadcrumb-item active" aria-current="page">หน้า Knowledge</li>
            </ol>
          </div>

          <div class="row">
            <div class="col-lg-12 mb-4">
              <!-- Simple Tables -->
              <div class="card">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">หน้าเกร็ดความรู้</h6>
                </div>
                <a href="form_add_knowledge.php" class="btn btn-sm btn-primary">เพิ่มข้อมูล</a>
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
                        <td>ที่มาของอเมริกาโน่</td>
                        <td>หลายๆ คนอาจสงสัยว่าทำไมเมนูกาแฟถึงมีชื่อประเทศรวมอยู่ด้วย นั่นทหารอเมริกันมักจะสั่งกาแฟเอสเพรสโซ่ดื่มเพื่อให้ร่างกายตื่นตัวมากขึ้น แต่มักจะขอให้ผสมน้ำอุ่นลงไปด้วยเสมอ เพื่อไม่ให้มีรสแรงจนเกินไป และนั่นก็คือที่มาของเมนูอย่างอเมริกาโน่ที่เราทานกันอยู่ทุกวันนี่ ขอบคุณข้อมูล : https://omgworld.net/10-coffee-969636/</td>
                        <td><a href="form_edit_knowledge.php" class="btn btn-sm btn-warning">แก้ไข</a></td>
                        <td><a href="#" class="btn btn-sm btn-danger">ลบ</a></td>
                      </tr>
                      <tr>

                      <td><a href="">002</a></td>
                        <td>รูป</td>
                        <td>ทุกอย่างเริ่มจากแพะ</td>
                        <td>ก่อนที่จะมาเป็นกาแฟที่เรากินกันอยู่ทุกวันนี้ เชื่อไหมว่าคนสมัยก่อนนั้นเขาไม่ได้เอาเมล็ดกาแฟมากินกัน แต่เอาไว้ใช้เป็นอาหารเลี้ยงสัตว์มาก่อน จนกระทั่งชาวเอธิโอเปียสังเกตว่าแพะที่กินเมล็ดกาแฟเข้าไปดูร่าเริงกระปรี้กระเปร่าผิดปกติ จึงได้เกิดสงสัยขึ้นมาว่าเจ้าเมล็ดกาแฟนี่อาจเอามาใช้เป็นของกินเพิ่มพลังงานให้มนุษย์เราได้เหมือนกัน : https://omgworld.net/10-coffee-969636/</td>
                        <td><a href="form_edit_knowledge.php" class="btn btn-sm btn-warning">แก้ไข</a></td>
                        <td><a href="#" class="btn btn-sm btn-danger">ลบ</a></td>
                      </tr>
                      <tr>

                      <td><a href="">003</a></td>
                        <td>รูป</td>
                        <td>กาแฟเคยเป็นขนมมาก่อน</td>
                        <td>ก่อนจะมาเป็นเครื่องดื่มที่ขาดไม่ได้ในชีวิตประจำวันของใครหลายๆ คน ชาวแอฟริกันเคยเอาเมล็ดกาแฟมาบดแล้วปั้นผสมกับไขมันสัตว์เพื่อใช้กินเหมือนกับเป็นขนมมาก่อน แต่มันไม่ได้รับความนิยมสักเท่าไหร่ คงจะเดาเรื่องรสชาติกันได้ไม่ยากเลยทีเดียว : https://omgworld.net/10-coffee-969636/</td>
                        <td><a href="form_edit_knowledge.php" class="btn btn-sm btn-warning">แก้ไข</a></td>
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