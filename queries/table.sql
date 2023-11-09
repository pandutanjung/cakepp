-- Tabel User
CREATE TABLE akun(
    username VARCHAR(16) NOT NULL,
    password VARCHAR(16) NOT NULL,
    PRIMARY KEY(username)
);

-- Tabel Pertemuan
CREATE TABLE pertemuan(
    id            SERIAL,
    akun_username VARCHAR(16) NOT NULL,
    pertemuan_ke  VARCHAR(16) NOT NULL,
    PRIMARY KEY(id),
    FOREIGN KEY(akun_username) REFERENCES akun(username)
);

-- Tabel Catatan
CREATE TABLE catatan(
    id            SERIAL,
    akun_username VARCHAR(16) NOT NULL,
    pertemuan_id  INT NOT NULL,
    judul_catatan VARCHAR(64) NOT NULL,
    nama_matkul   VARCHAR(64) NOT NULL,
    nama_bab      VARCHAR(64) NOT NULL,
    isi_catatan   TEXT,
    kolom_link    TEXT,
    PRIMARY KEY(id),
    FOREIGN KEY(akun_username) REFERENCES akun(username),
    FOREIGN KEY(pertemuan_id) REFERENCES pertemuan(id)
);

-- Tabel Tugas
CREATE TABLE tugas(
    id              SERIAL,
    akun_username   VARCHAR(16) NOT NULL,
    pertemuan_id    INT NOT NULL,
    judul_tugas     VARCHAR(64) NOT NULL,
    nama_matkul     VARCHAR(64) NOT NULL,
    nama_bab        VARCHAR(64) NOT NULL,
    deskripsi_tugas TEXT,
    kolom_link      TEXT,
    PRIMARY KEY(id),
    FOREIGN KEY(akun_username) REFERENCES akun(username),
    FOREIGN KEY(pertemuan_id) REFERENCES pertemuan(id)
);
