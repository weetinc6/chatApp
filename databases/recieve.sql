create table `recieved` (

`rcid` int(30) auto_increment,
`fromph` text not null,
`touser` text not null,
`ccamount` text not null,
`ctime` timestamp not null,
primary key(`rcid`)



)
engine=myisam character set utf8 collate=utf8_general_ci;


