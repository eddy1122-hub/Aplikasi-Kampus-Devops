   <?php
   require __DIR__ . '/../src/krs.php';

   $gagal = 0;
   function cek(bool $kondisi, string $pesan): void
   {
       global $gagal;
       echo ($kondisi ? '[LULUS] ' : '[GAGAL] ') . $pesan . PHP_EOL;
       if (!$kondisi) $gagal++;
   }

   $krs = [
       ['kode' => 'IF101', 'nama' => 'Basis Data', 'sks' => 3],
       ['kode' => 'IF102', 'nama' => 'Cloud Computing', 'sks' => 2],
   ];

   cek(totalSks($krs) === 5, 'Total SKS dihitung benar');
   cek(batasSks(3.5) === 24, 'IPK >= 3.0 boleh ambil 24 SKS');
   cek(batasSks(2.0) === 18, 'IPK < 2.5 boleh ambil 18 SKS');
   cek(str_contains(cetakKrs('Edi Pratama', '248160032', $krs), 'Total SKS: 5'), 'Cetak KRS menampilkan total SKS');

   exit($gagal > 0 ? 1 : 0);
