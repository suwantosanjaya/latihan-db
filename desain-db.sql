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