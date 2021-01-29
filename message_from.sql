create table `message_from` (

`snd` int(30) auto_increment,
`from` text not null,
`touser` text not null,
`message_text` text not null,
`tym` timestamp not null,
primary key(`snd`)
)
engine=myisam character set utf8 collate=utf8_general_ci;