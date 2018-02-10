<?php

function user_level($level) {
  switch ($level) {
    case 'siswa':
      return 'Siswa';
    case 'orang_tua':
      return 'Orang Tua';
    case 'admin':
      return 'Administrator';
    default:
      return null;
  }
}

function user_status($status) {
  switch ($status) {
    case 'aktif':
      return 'Aktif';
    case 'belum_aktif':
    case 'nonaktif':
      return 'Tidak Aktif';
    case 'pending':
      return 'Belum Konfirmasi';
    default:
      return null;
  }
}
