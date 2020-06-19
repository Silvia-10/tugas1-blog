CREATE TABLE tb_prodi (
	prodi_id INT (11) NOT NULL AUTO_INCREMENT,
	prodi_kode VARCHAR (15) NOT NULL,
	prodi_nama VARCHAR(100) NOT NULL,
	PRIMARY KEY(prodi_id),
	UNIQUE KEY(prodi_kode)
);

CREATE TABLE tb_mhsw (
	mhsw_id INT (11) NOT NULL AUTO_INCREMENT,
	mhsw_nim VARCHAR (15) NOT NULL,
	mhsw_nama VARCHAR(100) NOT NULL,
	mhsw_prodi VARCHAR(100) NOT NULL,
	PRIMARY KEY(mhsw_id),
	UNIQUE KEY(mhsw_nim)
);
INSERT INTO tb_userr VALUES ('', 'admin', 'admin', 1);
