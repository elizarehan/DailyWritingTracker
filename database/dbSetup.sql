CREATE TABLE userdata (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name NVARCHAR(50),
    email VARCHAR(255),
    password VARCHAR(255),
);

CREATE TABLE projects (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255),
    form VARCHAR(50),
    curr_words INT NOT NULL CHECK (word_count >= 0),
    goal_words INT NOT NULL CHECK (word_count >= 0),
    deadline DATE NULL,
    description VARCHAR(max),
    draft_link NVARCHAR(2083) NULL,
    genre VARCHAR(50),
    draft_num VARCHAR(20),
    notes VARCHAR(255)
);
