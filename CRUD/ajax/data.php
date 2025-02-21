<table id="example" class="table table-striped table-bordered" style="width:100%">
    <thead>
        <tr>
            <td>No</td>
            <td>Nama</td>
            <td>Jenis Kelamin</td>
            <td>Alamat</td>
            <td>No Telp</td>
            <td>Action</td>
        </tr>
    </thead>
    <tbody>
        <?php
        include 'koneksi.php';
        $no = 1;
        $query = "SELECT * FROM anggota ORDER BY id DESC";
        $sql = $dbl->prepare($query);
        $sql->execute();
        $res1 = $sql->get_result();

        if ($res1->num_rows > 0) {
            while ($row = $res1->fetch_assoc()) {
                $id = $row['id'];
                $nama = $row['nama'];
                $jenis_kelamin = ($row['jenis_kelamin'] == 'L') ? 'Laki-Laki' : 'Perempuan';
                $alamat = $row['alamat'];
                $no_telp = $row['no_telp'];
        ?>
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $nama; ?></td>
                    <td><?php echo $jenis_kelamin; ?></td>
                    <td><?php echo $alamat; ?></td>
                    <td><?php echo $no_telp; ?></td>
                    <td>
                        <button id="<?php echo $id; ?>" class="btn btn-success btn-sm edit_data">
                            <i class="fa fa-edit"></i> Edit
                        </button>
                        <button id="<?php echo $id; ?>" class="btn btn-danger btn-sm hapus_data">
                            <i class="fa fa-trash"></i> Hapus
                        </button>
                    </td>
                </tr>
        <?php
            }
        } else {
        ?>
            <tr>
                <td colspan="6">Tidak ada data ditemukan</td>
            </tr>
        <?php } ?>
    </tbody>
</table>

<!-- Script jQuery -->
<script type="text/javascript">
    $(document).ready(function() {
        $('#example').DataTable();
    });

    // Fungsi Edit Data
    $(document).on('click', '.edit_data', function() {
        var id = $(this).attr('id');
        $.ajax({
            type: 'POST',
            url: 'data.php', // File backend untuk proses get data
            data: { id: id, action: 'get' },
            dataType: 'json',
            success: function(response) {
                if (!response.error) {
                    $('#id').val(response.id);
                    $('#nama').val(response.nama);
                    $('#alamat').val(response.alamat);
                    $('#no_telp').val(response.no_telp);
                    if (response.jenis_kelamin === "L") {
                        $('#jenkel1').prop('checked', true);
                    } else {
                        $('#jenkel2').prop('checked', true);
                    }
                } else {
                    alert(response.error);
                }
            },
            error: function() {
                alert('Gagal mengambil data.');
            }
        });
    });

    // Fungsi Hapus Data
    $(document).on('click', '.hapus_data', function() {
        var id = $(this).attr('id');
        if (confirm("Apakah Anda yakin ingin menghapus data ini?")) {
            $.ajax({
                type: 'POST',
                url: 'data.php', // File backend untuk proses hapus
                data: { id: id, action: 'delete' },
                dataType: 'json',
                success: function(response) {
                    if (response.status === 'success') {
                        alert(response.message);
                        location.reload(); // Reload tabel
                    } else {
                        alert(response.message);
                    }
                },
                error: function() {
                    alert('Gagal menghapus data.');
                }
            });
        }
    });

</script> 
