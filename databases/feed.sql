create table `feed` (
`fid` int(30) auto_increment,
`ccphone` text not null,
`feed_text` text not null,
`feed_image` text not null,
`feed_video` text not null,
`fromuser` text not null,
`touser` text not null,
`tym` timestamp not null,

primary key(`fid`)
)
engine=myisam character set utf8 collate=utf8_general_ci;