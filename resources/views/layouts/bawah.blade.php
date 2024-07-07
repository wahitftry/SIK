<footer>
    <div class="footer clearfix mb-0 text-muted">
        <div class="float-start">
            <p>2024 &copy; Sistem Management Kepegawaian</p>
        </div>
        <div class="float-end">
            <p>Dibuat Dengan <span class="text-danger"><i class="bi bi-heart-fill icon-mid"></i></span>
                Oleh <a href="https://wahit.me">Wahit Fitriyanto</a></p>
        </div>
    </div>
</footer>
</div>
</div>
<script src="assets/static/js/components/dark.js"></script>
<script src="assets/extensions/perfect-scrollbar/perfect-scrollbar.min.js"></script>


<script src="assets/compiled/js/app.js"></script>



<!-- Need: Apexcharts -->
<script src="assets/extensions/apexcharts/apexcharts.min.js"></script>
<script src="assets/static/js/pages/dashboard.js"></script>
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
<script>
    $('#password, #password_confirmation').on('keyup', function () {
        if ($('#password').val() == $('#password_confirmation').val()) {
            $('#message').html('Password Cocok').css('color', 'green');
        } else {
            $('#message').html('Password Tidak Cocok').css('color', 'red');
        }
    });
</script>
<script>
    $(document).ready(function() {
        $('.edit-btn').on('click', function() {
            var id = $(this).data('id');
            var username = $(this).data('username');
            var email = $(this).data('email');

            $('#editAdminForm').attr('action', '/admin/' + id);
            $('#username').val(username);
            $('#email').val(email);
        });
    });
</script>
<script>
    $(document).ready(function() {
        $('.edit-btn1').on('click', function() {
            var NIP = $(this).data('nip');
            var nama = $(this).data('nama');
            var email = $(this).data('email');
            var alamat = $(this).data('alamat');
            var telepon = $(this).data('telepon');
            var jabatan = $(this).data('jabatan');
            var status = $(this).data('status');

            $('#editPegawaiForm').attr('action', '/pegawai/' + NIP);
            $('#NIP').val(NIP);
            $('#nama').val(nama);
            $('#email').val(email);
            $('#alamat').val(alamat);
            $('#telepon').val(telepon);
            $('#jabatan').val(jabatan);
            $('#status').val(status);
        });
    });
</script>
<script>
    window.onload = function() {
        // Select all submenu items
        var submenuItems = document.querySelectorAll('.submenu-item');

        // Loop through all submenu items
        for (var i = 0; i < submenuItems.length; i++) {
            // Add click event listener to each submenu item
            submenuItems[i].addEventListener('click', function() {
                // Remove 'active' class from all submenu items
                for (var j = 0; j < submenuItems.length; j++) {
                    submenuItems[j].classList.remove('active');
                }

                // Add 'active' class to clicked submenu item
                this.classList.add('active');
            });
        }
    };
</script>
</body>

</html>
