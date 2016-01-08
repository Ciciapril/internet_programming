        <section class="success" id="login">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Login</h2>
                    <hr class="star-light">
                </div>
            </div>
            <div class="row">
                <div class="row" align="center">
                    <h5> Belum punya Akun?</h5> 
                    <button type="button" class="btn btn-primary" id="buttonform">Daftar</button>
                    <button type="button" class="btn btn-primary" id="buttonmember">Login Member</button>
                    <button type="button" class="btn btn-primary" id="buttonperusahaan">Login Perusahaan</button>
                    <br><br>
                    <a href="member/loginmember.php">Member</a>
                </div>
                <div class="row" id="tampil" > </div> 
               <!--  <script type="text/javascript" src="jquery.js"></script>--> 

                 <script type="text/javascript"> 
                  $("#buttonmember").click(function(){
                    $("#tampil").load("member/loginmember.php");
                  }); </script>

                  <script type="text/javascript"> 
                  $("#buttonperusahaan").click(function(){
                    $("#tampil").load("perusahaan/loginperusahaan.php");
                  }); </script>

                  <script type="text/javascript"> 
                  $("#buttonform").click(function(){
                    $("#tampil").load("form.php");
                  });     

                  $("#tampil").on("click", "#buttondaftar", function(){ 
                    var nama = $("#nama").val();
                    var alamat = $("#alamat").val();
                    var email = $("#email").val();
                    var sandi = $("#sandi").val();
                    var telp = $("#telp").val();
                    var tanggal = $("#tanggal").val();
                    var jk = $("#jk").val();
                    var pendidikan = $("#pendidikan").val();
                    var jurusan = $("#jurusan").val();
                    if (nama==''|| alamat==''||email==''||sandi==''||telp==''||tanggal==''||jk==''||pendidikan==''||jurusan==''){
                      alert("Semua inputan harus diisi");
                    } else{
                      $.ajax({
                          url:'proses.php?page=form',
                          type : 'post',
                          data : 'nama='+nama+ '&alamat='+alamat+'&email='+email+'sandi='+sandi+'telp='+telp+'tanggal='+tanggal+'&jk='+jk+'pendidikan='+pendidikan+'jurusan='+jurusan,
                          success : function(msg){
                            if(msg=='sukses'){
                              $("#tampil").load("login1.php");        }
                            else{
                              alert("Gagal Menambahkan Data!")
                            }
                          }
                      });
                    }
                  });
                  </script> 
                
                </div>
                     
          </div>     
    </section>