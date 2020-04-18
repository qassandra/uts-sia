<?php
include "../config/configuration.php";

$result = mysqli_query($conn, "DELETE FROM transaksi WHERE no_trx = '$_GET[no_trx]'");
        ?>
        <script language="javascript">
            alert('Berhasil Disimpan');
            document.location.href="?content=product";
        </script>
    
?>
