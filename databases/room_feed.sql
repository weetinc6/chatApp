create table `room_feed` (
`fid` int(30) auto_increment,
`ccphone` text not null,
`feed_text` text not null,
`roomid` text not null,
`tym` timestamp not null,

primary key(`fid`)
)
engine=myisam character set utf8 collate=utf8_general_ci;