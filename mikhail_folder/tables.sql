drop data;

create table data
(id integer PRIMARY KEY,
user varchar(20) not null,
location varchar(20) not null,
comment varchar(500),
upload double,
download double);