CREATE TABLE users (
    user_id INT NOT NULL AUTO_INCREMENT,
    username VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    `password` VARCHAR(255) NOT NULL,
    PRIMARY KEY (user_id)
);

CREATE TABLE posts (
    post_id INT NOT NULL AUTO_INCREMENT,
    title VARCHAR(255) NOT NULL,
    body TEXT NOT NULL,
    user_id INT DEFAULT NULL,
    PRIMARY KEY (post_id),
    FOREIGN KEY (user_id) REFERENCES users(user_id)
);

CREATE TABLE profiles (
    profile_id INT NOT NULL AUTO_INCREMENT,
    user_id INT NOT NULL,
    bio TEXT NOT NULL,
    PRIMARY KEY (profile_id),
    FOREIGN KEY (user_id) REFERENCES users(user_id)
);