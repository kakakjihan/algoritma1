
<?php
// Fungsi untuk menentukan grade
function tentukanGrade($nilai) {
    if ($nilai >= 90) {
        return 'A';
    } elseif ($nilai >= 80) {
        return 'B';
    } elseif ($nilai >= 70) {
        return 'C';
    } elseif ($nilai >= 60) {
        return 'D';
    } else {
        return 'E';
    }
}
