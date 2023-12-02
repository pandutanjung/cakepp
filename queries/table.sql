-- Tabel User
CREATE TABLE akun(
    username VARCHAR(64) NOT NULL,
    password VARCHAR(1023) NOT NULL,
    PRIMARY KEY(username)
);

-- Tabel Pertemuan
CREATE TABLE pertemuan(
    id            SERIAL,
    akun_username VARCHAR(64),
    pertemuan_ke  VARCHAR(64),
    PRIMARY KEY(id),
    FOREIGN KEY(akun_username) REFERENCES akun(username)
);

-- Tabel Catatan
CREATE TABLE catatan(
    id            SERIAL,
    akun_username VARCHAR(64),
    judul_catatan VARCHAR(64),
    pertemuan_ke  VARCHAR(64),
    nama_matkul   VARCHAR(64),
    nama_bab      VARCHAR(64),
    isi_catatan   TEXT,
    kolom_link    TEXT,
    PRIMARY KEY(id),
    FOREIGN KEY(akun_username) REFERENCES akun(username)
);


-- Tabel Tugas
CREATE TABLE tugas(
    id              SERIAL,
    akun_username   VARCHAR(64),
    judul_tugas     VARCHAR(64),
    pertemuan_ke    VARCHAR(64),
    nama_matkul     VARCHAR(64),
    nama_bab        VARCHAR(64),
    deskripsi_tugas TEXT,
    deadline_tugas  DATE,
    kolom_link      TEXT,
    PRIMARY KEY(id),
    FOREIGN KEY(akun_username) REFERENCES akun(username)
);
