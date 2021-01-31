create table `like` (

`lid` int(30) auto_increment,
`ccphone` text not null,
`cid` text not null,
primary key(`lid`)
)
engine=myisam character set utf8 collate=utf8_general_ci;