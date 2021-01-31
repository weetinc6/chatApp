create table `room_name` (

`rrid` int(30) auto_increment,
`roomname` text not null,
`roomtime` timestamp not null,
`ccphone_admin` text not null,
primary key(`rrid`)

)
engine=myisam character set utf8 collate=utf8_general_ci;