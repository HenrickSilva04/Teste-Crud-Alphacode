CREATE DATABASE contacts_db;
USE contacts_db;

CREATE TABLE contact (
	id INT AUTO_INCREMENT PRIMARY KEY NOT NULL, 
    full_Name VARCHAR(200) NOT NULL,
    birth_Date DATE NOT NULL, 
    occupation VARCHAR(200),
    email VARCHAR (200) NOT NULL,
    phone VARCHAR(15),
    mobile_Phone VARCHAR(15) NOT NULL,
    mobile_Is_Whatsapp BOOLEAN DEFAULT 0,
    receive_Email BOOLEAN DEFAULT 0,
    receive_Sms BOOLEAN DEFAULT 0
    );

    SELECT * FROM contact WHERE id = 1;

insert into contact (full_Name, birth_Date, email, occupation, phone, mobile_Phone, mobile_Is_Whatsapp, receive_Email, receive_Sms) values ('Letícia Pacheco', '2003-10-03', 'leticia@gmail.com', 'Desenvolvedora Web', '(11)2048-7896','(11)98493-2039', 1, 1, 0);
