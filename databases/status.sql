create table `userinfo_status` (

`fid` int(30) auto_increment,
`stat` text not null,
`ccphone` text not null,
`id` text not null,
primary key(`fid`)
)
engine=myisam character set utf8 collate=utf8_general_ci;