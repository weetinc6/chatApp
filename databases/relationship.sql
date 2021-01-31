
create table `userinfo_relationship` (

`wid` int(30) auto_increment,
`ccphone` text not null,
`id` text not null,
`rstatus` text not null,
primary key(`wid`)
)
engine=myisam character set utf8 collate=utf8_general_ci;