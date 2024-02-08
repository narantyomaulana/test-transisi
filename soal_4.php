<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Tabel Angka</title>
<style>
  table {
    border-collapse: collapse;
  }
  table, th, td {
    border: 1px solid black;
  }
  th, td {
    padding: 10px;
    text-align: center;
  }
  .highlight {
    background-color: black;
    color: white;
  }
</style>
</head>
<body>

<table>
  <tbody>
    <?php
      // Array angka yang akan di-highlight
      $highlight_numbers = [1,2,5,7,10,11,13,14,17,19,22,23,25,26,29,31,34,35,37,38,41,43,46,47,49,50,53,55,58,59,61,62];
      // Variabel penanda jumlah kolom yang sudah diisi pada baris
      $counter = 1;
      // Perulangan untuk menghasilkan angka 1 sampai 64
      for ($i = 1; $i <= 64; $i++) {
        // Mulai baris baru jika merupakan awal baris
        if ($counter == 1) {
          echo "<tr>";
        }
        // Mulai sel tabel dan cek apakah angka saat ini harus di-highlight
        echo "<td";
        if (in_array($i, $highlight_numbers)) {
          echo " class='highlight'";
        }
        echo ">$i</td>";
        // Jika sudah mencapai akhir baris, tutup baris tersebut
        if ($counter == 8) {
          echo "</tr>";
          $counter = 1; // Reset penanda kolom untuk baris berikutnya
        } else {
          $counter++; // Tambahkan penanda kolom
        }
      }
      // Jika baris terakhir tidak terisi penuh, lengkapi dengan sel kosong
      if ($counter > 1 && $counter <= 8) {
        echo str_repeat("<td></td>", 8 - $counter); // Isi sel kosong
        echo "</tr>"; // Tutup baris
      }
    ?>
  </tbody>
</table>

</body>
</html>
