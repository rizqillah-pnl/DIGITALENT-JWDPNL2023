<?php
// Data transaksi barang (metrik popularitas)
$data = [
  [100],   // Barang 1
  [250],   // Barang 2
  [80],    // Barang 3
  [300],   // Barang 4
  [150],   // Barang 5
  [50],    // Barang 6
  [200],   // Barang 7
  [120],   // Barang 8
];

// Fungsi untuk melakukan normalisasi Min-Max pada dataset
function normalizeMinMax($data)
{
  $min = min($data);
  $max = max($data);
  $normalizedData = [];

  foreach ($data as $value) {
    $normalizedValue = ($value[0] - $min[0]) / ($max[0] - $min[0]);
    $normalizedData[] = [$normalizedValue];
  }

  return $normalizedData;
}

// Lakukan normalisasi Min-Max pada data transaksi
$normalizedData = normalizeMinMax($data);

// Tampilkan data yang sudah dinormalisasi
echo "Data yang sudah dinormalisasi:<br>";
foreach ($normalizedData as $index => $value) {
  echo "Barang " . ($index + 1) . ": " . $value[0] . "<br>";
}


$centroid = [
  [0.12],     // Kurang Laris
  [0.56],     // Laris
  [0.78],     // Sangat Laris
];
