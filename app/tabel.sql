/* 
	INTEGER: Tipe data untuk menyimpan bilangan bulat. Contoh: INTEGER, INT, SMALLINT, BIGINT.
	FLOAT/DOUBLE: Tipe data untuk menyimpan bilangan pecahan (desimal). Contoh: FLOAT, DOUBLE, DECIMAL.
	CHAR/VARCHAR: Tipe data untuk menyimpan string. CHAR memiliki panjang tetap, sedangkan VARCHAR memiliki panjang variabel. Contoh: CHAR(10), VARCHAR(255).
	TEXT: Tipe data untuk menyimpan teks panjang. Contoh: TEXT, LONGTEXT, MEDIUMTEXT.
	DATE/DATETIME/TIMESTAMP: Tipe data untuk menyimpan tanggal dan waktu. 
	 - DATE untuk tanggal, 
	 - DATETIME untuk tanggal dan waktu, dan 
	 - TIMESTAMP juga untuk tanggal dan waktu tetapi dengan format yang berbeda.
	BOOLEAN: Tipe data untuk menyimpan nilai boolean. Biasanya disimbolkan sebagai TRUE atau FALSE. Tipe data ini tidak selalu ada dalam semua DBMS, tetapi dapat diwakili dengan tipe data numerik seperti TINYINT atau INTEGER.
	BLOB: Tipe data untuk menyimpan data biner, seperti gambar atau file. Contoh: BLOB, MEDIUMBLOB, LONGBLOB.
	ENUM: Tipe data yang memungkinkan Anda untuk memilih satu dari beberapa nilai yang telah ditentukan sebelumnya. Contoh: ENUM('nilai1', 'nilai2', 'nilai3').
	JSON: Tipe data untuk menyimpan data dalam format JSON (JavaScript Object Notation). Contoh: JSON. 
*/;

-- soal
CREATE TABLE orang (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    nama VARCHAR(50) NOT NULL
);

-- undangan (1/1)
CREATE TABLE namaUndangan(
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    idOrang VARCHAR(50) NOT NULL,
    isi VARCHAR(200) NOT NULL,
    waktu DATETIME NOT NULL
);