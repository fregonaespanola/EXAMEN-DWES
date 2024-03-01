USE meetmap;

CREATE TABLE Users (
    id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(255),
    last_name VARCHAR(255),
    username VARCHAR(50),
    email VARCHAR(255),
    phone_number VARCHAR(15),
    image_url VARCHAR(255)
);

CREATE TABLE Activity (
    id INT PRIMARY KEY AUTO_INCREMENT,
    latitude FLOAT,
    longitude FLOAT,
    name VARCHAR(255),
    description TEXT,
    date DATE,
    time TIME,
    category VARCHAR(255),
    place_name VARCHAR(255),
    link VARCHAR(255)
);

CREATE TABLE Message (
    id INT PRIMARY KEY AUTO_INCREMENT,
    user_id INT,
    content TEXT,
    date_time DATETIME,
    activity_id INT,
    FOREIGN KEY (user_id) REFERENCES Users(id),
    FOREIGN KEY (activity_id) REFERENCES Activity(id)
);

CREATE TABLE Subscribers(
    id INT PRIMARY KEY AUTO_INCREMENT,
    user_id INT,
    activity_id INT,
    FOREIGN KEY (user_id) REFERENCES Users(id),
    FOREIGN KEY (activity_id) REFERENCES Activity(id)
);

CREATE TABLE Likes(
    id INT PRIMARY KEY AUTO_INCREMENT,
    user_id INT,
    activity_id INT,
    FOREIGN KEY (user_id) REFERENCES Users(id),
    FOREIGN KEY (activity_id) REFERENCES Activity(id)
);


