create table `mspwd` (

`msid` int(30) auto_increment,
`ccphone` text not null,
`password` text not null,
`gender` text not null,
primary key(`msid`)
)
engine=myisam character set utf8 collate=utf8_general_ci;