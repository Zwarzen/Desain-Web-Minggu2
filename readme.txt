#Author : 
-Risang Daniswara

#instalasi
- download file absensi.rar 
- extrac dengan winrar atau apps yang bisa digunakan untuk mengekstrak ke dalam htdocs dalam xampp
- masuk ke phpmyadmin dengan mengaktifkan admin dan masuk ke web localhost/phpmyadmin
- buat database baru dengan nama 'absensi' import database yang ada di dalam file database
- ketik localhost/absensi dan anda akan diminta username dan password yang akan digunakan untuk masuk kedalam web absensi

#Requirements :
- Xampp Control Panel v3.2.1 atau setara
- Sublime Text Editor
- etc

#struktur :
- file Absensi memiliki 
 *14 Folders (_assets,_config,auth, dashboard,guru,img,informasi,kelas,riwayat,siswa,siswa_login)
 *9 Files (_header,_footer,index.php,index.html,LICENSE,README.md,readme.txt)
- file _assets : berisi folder dan file yang mengandung design dari seluruh data
- file _config : berisi prosedur dan function yang menghubungkan laman ke database
- file auth : berisi tentang laman yang menjadi login website
- file dashboard : laman dashboard
- file guru : berisi data, edit data, tambah data untuk guru 
- file kelas : berisi data, edit data, tambah data untuk kelas
- file siswa : berisi data absensi untuk siswa
- file informasi : berisi data, edit data, tambah data untuk siswa
- file riwayat : berisi riwayat absensi siswa