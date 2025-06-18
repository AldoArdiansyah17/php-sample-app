<?php
function tambah($a, $b) {
    return $a + $b;
}

if (tambah(2, 3) == 5) {
    echo "Test berhasil!\n";
} else {
    echo "Test gagal!\n";
    exit(1);
}
?>
