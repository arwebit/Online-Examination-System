CREATE TABLE admin
(
id int(5) NOT NULL ,
Name varchar(200),
Username varchar(20),
Password varchar(20), 
PRIMARY KEY(id)
);
CREATE TABLE student
(
Regd_id varchar(50),
Name varchar(200),
Password varchar(20),
PRIMARY KEY(Regd_id)
);
CREATE TABLE exam_name
(
id int(5) NOT NULL,
Exam_name varchar(200),
Exam_desc TEXT,
Exam_start_time datetime,
Exam_end_time datetime,
PRIMARY KEY(id)
);
CREATE TABLE exam_subjects
(
Sub_code int(5) NOT NULL ,
Sub_name varchar(200),
PRIMARY KEY(Sub_code)
);
CREATE TABLE exam_ques_set
(
id int(10) NOT NULL ,
Sub_code int(5),
Ques_no int(10),
Question TEXT,
Ques_crct_option varchar(5),
Ques_mark float(5,2),
Ques_neg_mark float(5,2),
PRIMARY KEY(id)
);
CREATE TABLE student_response
(
id int(10) NOT NULL ,
Cand_regd_id varchar(50),
Ques_no int(10),
Resp_choice varchar(5),
Mark_review varchar(1),
PRIMARY KEY(id)
);
CREATE TABLE student_mark
(
id int(10) NOT NULL ,
Cand_regd_id varchar(50),
Mark_ob float(5,2),
PRIMARY KEY(id)
);

INSERT INTO admin VALUES(1,'Soumyanjan Dey','admin','pass');