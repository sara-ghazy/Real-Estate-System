create table register(fullname varchar(50),email varchar(30),gender varchar(10),username varchar(50) not null primary key,passwordd varchar(500));



create table register_an_advertisement(id int not null primary key auto_increment,username varchar(50),typee varchar(20),city varchar(100),
region varchar(100),real_state_type varchar(50),address varchar(50),detail varchar(200),dateAn varchar(20),spacee varchar(50),numberoffloors int, numberofrooms int,
price double, foreign key(username) references register(username),img longblob,
ownername varchar(100),email varchar(30),phonenumber varchar(20)
);

create table reviews(id int ,username varchar(50),commentt varchar(100),valuation varchar(100), suggestion varchar(100),
foreign key(username) references register(username),foreign key(id) references register_an_advertisement(id)
);

create table customer(username varchar(50),typee varchar(20),ownerr varchar(50),
foreign key(username) references register(username),foreign key(ownerr) references register(username)
);



drop table register;
drop table register_an_advertisement;
drop table reviews;
drop table customer;




