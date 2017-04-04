# PARKIRKU LARAVEL Version

## cara menggunakan
setting pada bagian `.env` terlebih dahulu
```
DB_CONNECTION=mysql  /// jenis database
DB_HOST=127.0.0.1    /// host database
DB_DATABASE=parkir   /// DI ISI nama database yg digunakan
DB_USERNAME=root     /// user database
DB_PASSWORD=cipo     /// password database
```
jika sudah selesai langsung saja jalankan script berikut pada folder project laravel
```
php artisan migrate
```

edit bagian resources/views/panelAdmin/layanan/panduan.blade.php untuk panduan
