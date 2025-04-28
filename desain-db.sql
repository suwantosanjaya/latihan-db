CREATE DATABASE simak;

USE simak;

CREATE TABLE mahasiswa (
	nim VARCHAR(11),
	nama VARCHAR(30),
	tempat_lahir VARCHAR(30),
	tgl_lahir DATE,
	jk VARCHAR(1),
	PRIMARY KEY(nim)
);

CREATE TABLE pengguna(
	uname VARCHAR(30) NOT NULL,
	pwd VARCHAR(32) NOT NULL,
	fname VARCHAR(50),
	email VARCHAR(100) NOT NULL UNIQUE,
	akses INTEGER DEFAULT 2,
	PRIMARY KEY (uname)
);