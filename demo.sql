create database `mvcweb`;
create table `users`(
                        id int (11) not null auto_increment primary key ,
                        name varchar(200),
                        email varchar(255) unique,
                        password varchar(50),
                        birthday date,
                        address varchar(255)
);

create table `posts`(
                        id int (11) auto_increment primary key ,
                        title varchar(255),
                        content text (1000),
                        post_time timestamp default current_timestamp,
                        user_id int (11),
                        foreign key (user_id) references users(id) on delete cascade
);
alter table users add column image varchar(255);
alter table posts add column image varchar(255);