create table `comment` (

`cid` int(30) auto_increment,
`ccphone` text not null,
`comment_text` text not null,
`gcid` text not null,
primary key(`cid`)
)
engine=myisam character set utf8 collate=utf8_general_ci;