# ToDoList

## 1. tabel toDoList
tabel toDoList memiliki atribut id sebagai primary key, ToDOList sebagai penyimpan data to do list, dan selesai untuk tombol selesai.
![todolist](tabeltoDoList.png) 

## 2. tabel user
tabel user memiliki atribut id sebagai primary key, username dan password.
![user](tabelUser.png) 

## 3. Login

![Login](./login.png)


Pada gambar di atas, ditampilkan halaman login yang menampilkan username & password, tombol enter & sign-up

## 4. Registrasi
Ketika tombol sign-up ditekan maka akan muncul halaman registrasi seperti gambar dibawah ini. dan akan kembali ke halaman login

![registrasi](./registrasi.png)

## 5. Login Salah
jika username/password salah maka akan tampil pesan username/password salah
![Login salah](./loginSalah.png)

## 6. Login berhasil
ketika login berhasil maka akan ke halaman utama (kelas index)
![index](./halamanUtama.png)

## 7. Tambah to do List
ketika tombol + tambah to do diklik maka akan pergi ke halaman toDoList seperti pada gambar dibawah
![tambah](./toDoList.png)

## 8. to do list ditambahkan
ketika tombol tambah di klok, maka to do list baru ditambahkan ke dataset dan akan tampil di halaman utama seperti pada gambar dibawah. tetapi jika tombol kembali di klik maka akan kembali ke halaman utama tanpa menambahkan data.
![tambah baris](./tambahBaris.png)
![tambah](./tambahToDoList.png)

## 9. Selesai
ketika tombol selesai ditambahkan maka data pada tabel halaman utama akan dicoret dan berwarna merah menandakan bahwa data tersebut sudah selesai dilaksanakan.
![selessai](./selesai.png)

## 10. hapus
jika tombol hapus diklik maka data tersebut akan hilang dari halaman utama dan dataset.
![hapus](./hapus.png)
terlihat pada gambar diatas, pagination yang tadinya 4 sekarang sudah 3
![hapus](./hapusBaris.png)
terlihat pada gambar diataas, yang tadinya ada data mancing paling akhir, sekarang sudah tidak ada

## 11. logout
jika tombol logout pada halaman utama diklik maka halaman utama akan ditutup dan kembali ke halaman login. sebelum login, user tidak dapat masuk ke halaman lainnya
![logout](logout.png)