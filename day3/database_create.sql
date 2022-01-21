drop database if exists whiskydb;
create database if not exists whiskydb;
use whiskydb;

create table if not exists country (
	id int not null auto_increment primary key,
    country varchar(64) not null unique
);

create table if not exists region (
	id int not null auto_increment,
    country_id int not null,
    region varchar(64) not null,
    primary key (id, country_id),
    foreign key (country_id) references country (id) on delete restrict
);

create table if not exists brand (
	id int not null auto_increment,
    region_id int not null,
    brand varchar(64) not null,
    primary key (id, region_id),
    foreign key (region_id) references region (id) on delete restrict
);

create table if not exists whisky (
	id int not null auto_increment primary key,
    brand_id int not null,
    name varchar(512) not null,
    type enum('single_malt', 'blended', 'grain') default 'single_malt',
    purchase decimal(10,2) not null,
    own_judgment int(3) default 0,
    offical_judgment int(3) default 0,
    bottles_open int default 0,
    age int,
    bought date default curdate(),
    distilled date,
    bottlet date,
    remark text,
	bottles int default 1,
    taster_note text,
    foreign key (brand_id) references brand (id) on delete restrict
);

create table if not exists price (
	id int not null auto_increment primary key,
    whisky_id int not null,
    commercial decimal(10,2) not null,
    check_date date default curdate(),
    foreign key (whisky_id) references whisky (id) on delete cascade
);

