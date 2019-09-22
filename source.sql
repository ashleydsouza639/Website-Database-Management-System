create table Visitor(visitor_id VARCHAR(15),visitor_name varchar(20),primary key(visitor_id));

create table Website(website_url varchar(20),website_type varchar(20),website_name
varchar(20),primary key(website_url));

create table Developer(developer_id int primary key auto_increment,first_name varchar(20),last_name
varchar(20),gender varchar(20),designation varchar(20),DOB varchar(20),website_url VARCHAR(20),foreign key(website_url) references
Website(website_url));


create table Visits(vdate date, vtime varchar(10),visitor_id varchar(15),website_url
varchar(20),primary key(visitor_id,website_url),foreign key(visitor_id) references
Visitor(visitor_id),foreign key(website_url) references Website(website_url));

insert into Visitor values('glen121','Glen');
insert into Visitor values('ashleydsouza882','Ashley');


insert into Website values('google.com','searchengine','google');	
insert into Website values('youtube.com','videos','youtube');	

insert into Developer values(1,'Glis','dsouza','female','frontend_developer',' 2019-09-21','google.com');
insert into Developer values(2,'ryan','fernandes','male','databasemanager',' 2019-09-21','google.com');

insert into Visits values('2019-09-21','1:23:32','glen121','google.com');
insert into Visits values('2019-09-21','1:23:32','ashleydsouza882','youtube.com');

//import in phpmyadmin