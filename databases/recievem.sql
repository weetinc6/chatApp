create table `recievem` (

`mid` int(30) auto_increment,
`fromuser` text not null,
`touser` text not null,
`message_text` text not null,
`id` text not null,
`tym` timestamp not null,
primary key(`mid`)
)
engine=myisam character set utf8 collate=utf8_general_ci;