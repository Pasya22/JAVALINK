CREATE TABLE role(
    role_id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    role VARCHAR(10)
);

CREATE TABLE login(
    id_pengguna INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nama_pengguna VARCHAR(256) NOT NULL,
    email VARCHAR(256) NOT NULL,
    images VARCHAR(256) NOT NULL,
    password VARCHAR(256) NOT NULL,
    role_id INT NOT NULL,
    is_active INT NOT NULL,
    date_created DATETIME NOT NULL,
    FOREIGN KEY (role_id) REFERENCES role(role_id)
);

CREATE TABLE user_token(
    id_token INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    id_pengguna INT,
    token VARCHAR(128),
    otp INT(6),
    date_created DATETIME NOT NULL,
    FOREIGN KEY (id_pengguna) REFERENCES login(id_pengguna)
);

CREATE TABLE menu(
    menu_id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    id_pengguna INT(11),
    role_id INT(11),
    nama_menu VARCHAR(25),
    icon VARCHAR(50),
    url VARCHAR(80),
    status INT(1),
    FOREIGN KEY (id_pengguna) REFERENCES login(id_pengguna),
    FOREIGN KEY (role_id) REFERENCES role(role_id)
);

CREATE TABLE sub_menu(
    submenu_id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    menu_id INT NOT NULL,
    nama_menu VARCHAR(25),
    icon VARCHAR(50),
    url VARCHAR(80),
    status INT(1),
    FOREIGN KEY (menu_id) REFERENCES menu(menu_id)
);

CREATE TABLE transaksi(
    id_trx INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    id_pengguna INT(10),
    metode_trx VARCHAR(20),
    jenis_trx VARCHAR(20),
    harga_tahunan INT(99),
    harga_bulanan INT(99),
    diskon INT(20),
    negara VARCHAR(20),
    status INT(1),
    FOREIGN KEY (id_pengguna) REFERENCES login(id_pengguna)
);

INSERT INTO
    login
values
    (
        1,
        'Admin',
        'admin@admin.com',
        'default.jpg',
        'admin123',
        1,
        1,
        '2023-05-30'
    );

-- note
-- kerjakan untuk kebutuhan data menu serta konten