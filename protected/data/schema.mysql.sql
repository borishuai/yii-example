CREATE TABLE users
(
  id INTEGER NOT NULL PRIMARY KEY AUTO_INCREMENT,
  username VARCHAR(128) NOT NULL,
  password VARCHAR(128) NOT NULL,
  email VARCHAR(128) NOT NULL,
  profile TEXT
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO users (`username`, `password`, `email`, `profile`) VALUES ('admin', '$2a$13$Iep/OKFsIeSjUlYJyjQ6W.HGT9pUgbC2bSAY3KgmOr3G6FpPl4G9a', 'admin@yiiexample.com', 'System admin');