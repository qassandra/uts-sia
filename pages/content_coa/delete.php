<?php
include "../config/configuration.php";

$result = mysqli_query($conn, "DELETE FROM tb_coa WHERE id = '$_GET[id]'");
if($conn->query($sql) === false) {
        trigger_error('Perintah SQL Salah: ' . $sql . ' Error: ' . $conn->error, E_USER_ERROR);
}
else { // Jika berhasil alihkan ke halaman tampil.php
        ?>
        <script language="javascript">
            alert('Berhasil Disimpan');
            document.location.href="?content=coa";
        </script>
        <?php
    }
?>
?>
