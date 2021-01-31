create table `profilepic` (

`ppid` int(30) auto_increment,
`fileupl` text not  null,
`ccphone` text not null,
primary key(`ppid`)
)
engine=myisam character set utf8 collate=utf8_general_ci;