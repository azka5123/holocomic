<script src="{{ asset('dist-admin/plugins/jquery/jquery.min.js') }}"></script>
<script>
    $(document).ready(function() {
        var id;
        $('.test').click(function() {
            id = $(this).data('id');
            var company = document.getElementById('edit_company')
            $.ajax({
                url: '/admin/katsub/edit/kategori/' + id, // Ganti dengan URL rute yang sesuai
                type: 'GET',
                dataType: 'json',
                success: function(edit) {
                    // Menampilkan edit  ke console.log()
                    company.value = edit.category
                    // Anda dapat mengakses data secara individu seperti ini:
                    // console.log('Nama:', data.nama);
                    // console.log('Umur:', data.umur);
                }
            });
        });

        $('#edit_data_company').submit(function(e) {
            e.preventDefault();
            var formData = $(this).serialize();
            $.ajax({
                url: '/admin/katsub/update/kategori/' + id,
                type: 'POST',
                data: formData,
                success: function(response) {
                    // Tindakan setelah data diperbarui, misalnya menutup modal
                    window.location.href = '/admin/katsub/show/'
                    // Lakukan sesuatu setelah data diperbarui
                }
            });
        });

    });
</script>

<script>
    $(document).ready(function() {
        var id;
        $('.edit_sub').click(function() {
            id = $(this).data('id');
            var talent = document.getElementById('talent')
            var pilih_company = document.getElementById('pilih_company')

            console.log(pilih_company);
            $.ajax({
                url: '/admin/katsub/edit/sub-kategori/' + id,
                type: 'GET',
                dataType: 'json',
                success: function(edit) {
                    talent.value = edit.sub_category
                    pilih_company.value = edit.r_category.id
                    pilih_company.text = edit.r_category.category
                }
            });
        });

        $('#edit_data_talent').submit(function(e) {
            e.preventDefault();
            var formData = $(this).serialize();
            $.ajax({
                url: '/admin/katsub/update/sub-kategori/' + id,
                type: 'POST',
                data: formData,
                success: function(response) {
                    // Tindakan setelah data diperbarui, misalnya menutup modal
                    window.location.href = '/admin/katsub/show/'
                    // Lakukan sesuatu setelah data diperbarui
                }
            });
        });
    });
</script>
