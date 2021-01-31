create table `profilephoto` (

`gid` int(30) auto_increment,
`feed_image` text not null,
`ccphone` text not null,
`feed_text` text not null,
primary key(`gid`)
)
engine=myisam character set utf8 collate=utf8_general_ci;