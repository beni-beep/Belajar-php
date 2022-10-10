<?php
$hallo_ben = "saya siswa SMKN 1 Karawang yang sangat mencintai ngoding";
echo $hallo_ben;
echo "<br />";
echo "<br />";
echo ("halo saya beni akbar");
echo "<br />";
echo strlen("halo saya beni akbar");
echo "<br />";
//menghitung panjang string
echo ("sekolah di SMKN 1 Karawang");
echo "<br />";
echo str_word_count("sekolah di SMKN 1 Karawang");
echo "<br />";
//menghitung jumlah kata
echo ("di jurusan");
echo "<br />";
echo strrev("di jurusan");
echo "<br />";
//membalikan string
echo ("rekayasa perangkat lunak");
echo "<br />";
echo strpos("rekayasa perangkat lunak", "lunak");
echo "<br />";
/*fungsi mencari teks tertentu dalam string. Jika kecocokan ditemukan,
fungsi mengembalikan posisi karakter kecocokan pertama. Jika tidak ada kecocokan yang ditemukan,
itu akan mengembalikan FALSE */

echo str_replace("SMKN 1 Karawang", "Neskar", $hallo_ben);
echo "<br />";
//fungsi menggantikan beberapa karakter dengan beberapa karakter lain dalam sebuah string
