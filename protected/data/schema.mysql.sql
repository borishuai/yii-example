CREATE TABLE users
(
  id INTEGER NOT NULL PRIMARY KEY AUTO_INCREMENT,
  username VARCHAR(128) NOT NULL,
  password VARCHAR(128) NOT NULL,
  role INTEGER NOT NULL, //1 is admin, 2 is normal user
  email VARCHAR(128) NOT NULL,
  profile TEXT
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO users (`username`, `password`, `email`, `role`, `profile`) VALUES ('admin', '$2a$13$Iep/OKFsIeSjUlYJyjQ6W.HGT9pUgbC2bSAY3KgmOr3G6FpPl4G9a', '1', 'admin@yiiexample.com', 'System admin');