<?php
// Modul KRS sederhana

function totalSks(array $mataKuliah): int
{
    $total = 0;
    foreach ($mataKuliah as $mk) {
        $total += $mk['sks'];
    }
    return $total;
}

function batasSks(float $ipk): int
{
    if ($ipk >= 3.0) return 24;
    if ($ipk >= 2.5) return 21;
    return 18;
}


   function cetakKrs(string $nama, string $npm, array $mataKuliah): string
   {
       $teks = "KARTU RENCANA STUDI\n";
       $teks .= "Nama : $nama\nNPM  : $npm\n";
       foreach ($mataKuliah as $mk) {
           $teks .= "- {$mk['kode']} {$mk['nama']} ({$mk['sks']} SKS)\n";
       }
       $teks .= "Total SKS: " . totalSks($mataKuliah);
       return $teks;
   }
