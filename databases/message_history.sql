create table `message_history` (

`snd` int(30) auto_increment,
`touser` text not null,
`fromuser` text not null,
`message_text` text not null,
`tym` timestamp not null,
primary key(`snd`)
)
engine=myisam character set utf8 collate=utf8_general_ci;