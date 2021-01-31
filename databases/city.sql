create table `userinfo_city` (

`fid` int(30) auto_increment,
`state` text not null,
`ccphone` text not null,
`id` text not null,
primary key(`fid`)
)
engine=myisam character set utf8 collate=utf8_general_ci;