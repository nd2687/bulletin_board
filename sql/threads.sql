DROP TABLE IF EXISTS threads;
CREATE TABLE threads (
    id          MEDIUMINT UNSIGNED NOT NULL AUTO_INCREMENT,
    title       VARCHAR(255) NOT NULL,
    body        TEXT NOT NULL,
    created_at  DATETIME NOT NULL,
    PRIMARY KEY (id)
);

INSERT INTO threads (title, body, created_at) VALUES('thread title その１', 'body text.body text.body text.', now());
INSERT INTO threads (title, body, created_at) VALUES('thread title その２', 'body text.body text.body text.', now());
