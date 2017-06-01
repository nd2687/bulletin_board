DROP TABLE IF EXISTS responses;
CREATE TABLE responses (
    id          MEDIUMINT UNSIGNED NOT NULL AUTO_INCREMENT,
    thread_id   MEDIUMINT NOT NULL,
    body        TEXT NOT NULL,
    name        VARCHAR(64),
    created_at  DATETIME NOT NULL,
    PRIMARY KEY (id)
);

INSERT INTO responses (thread_id, body, name, created_at) VALUES('1', 'body text.body text.body text.', '', now());
INSERT INTO responses (thread_id, body, name, created_at) VALUES('1', 'body text.body text.body text.', '', now());
INSERT INTO responses (thread_id, body, name, created_at) VALUES('1', 'body text.body text.body text.', '', now());
INSERT INTO responses (thread_id, body, name, created_at) VALUES('1', 'body text.body text.body text.', '', now());
INSERT INTO responses (thread_id, body, name, created_at) VALUES('1', 'body text.body text.body text.', '田中太郎', now());
INSERT INTO responses (thread_id, body, name, created_at) VALUES('1', 'body text.body text.body text.', '田中太郎', now());
INSERT INTO responses (thread_id, body, name, created_at) VALUES('1', 'body text.body text.body text.', '田中太郎', now());
INSERT INTO responses (thread_id, body, name, created_at) VALUES('1', 'body text.body text.body text.', '田中太郎', now());

INSERT INTO responses (thread_id, body, name, created_at) VALUES('2', 'body text.body text.body text.', '', now());
INSERT INTO responses (thread_id, body, name, created_at) VALUES('2', 'body text.body text.body text.', '', now());
INSERT INTO responses (thread_id, body, name, created_at) VALUES('2', 'body text.body text.body text.', '', now());
INSERT INTO responses (thread_id, body, name, created_at) VALUES('2', 'body text.body text.body text.', '', now());
INSERT INTO responses (thread_id, body, name, created_at) VALUES('2', 'body text.body text.body text.', '田中太郎', now());
INSERT INTO responses (thread_id, body, name, created_at) VALUES('2', 'body text.body text.body text.', '田中太郎', now());
INSERT INTO responses (thread_id, body, name, created_at) VALUES('2', 'body text.body text.body text.', '田中太郎', now());
INSERT INTO responses (thread_id, body, name, created_at) VALUES('2', 'body text.body text.body text.', '田中太郎', now());
