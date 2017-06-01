DROP TABLE IF EXISTS users;
CREATE TABLE users (
    id                MEDIUMINT UNSIGNED NOT NULL AUTO_INCREMENT,
    email             VARCHAR(255) NOT NULL,
    password          VARCHAR(255) NOT NULL,
    unsubscribe_flag  TINYINT(1) NOT NULL DEFAULT 0,
    PRIMARY KEY (id)
);

INSERT INTO users (email, password, unsubscribe_flag) VALUES('test1@example.com', '$2y$10$bai1r7LhtBVlOnJg6XRc0O5XW8we020Z68QCHs.O69h2E6Idx5Ehy', '0');
INSERT INTO users (email, password, unsubscribe_flag) VALUES('test2@example.com', '$2y$10$bai1r7LhtBVlOnJg6XRc0O5XW8we020Z68QCHs.O69h2E6Idx5Ehy', '0');
INSERT INTO users (email, password, unsubscribe_flag) VALUES('test3@example.com', '$2y$10$bai1r7LhtBVlOnJg6XRc0O5XW8we020Z68QCHs.O69h2E6Idx5Ehy', '1');
