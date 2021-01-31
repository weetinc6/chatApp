create table `blockuser` (
`blockid` int(30) auto_increment,
`ip` text not null,
`port` text not null,
`ccphone` text not null,
primary key(`blockid`)
)
engine=myisam character set utf8 collate=utf8_general_ci;