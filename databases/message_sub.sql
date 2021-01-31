create table `message_sub` (
`subid` int(30) auto_increment,
`fromuser` text not null,
`touser` text not null,
primary key(`subid`)
)
engine=myisam character set utf8 collate=utf8_general_ci;