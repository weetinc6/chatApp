create table `page_likes` (

`pig` int(30) auto_increment,
`pageid` text not null,
primary key(`pig`)
)
engine=myisam character set utf8 collate=utf8_general_ci;