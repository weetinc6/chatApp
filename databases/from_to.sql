create table `from_to` (

`snd` int(30) auto_increment,
`fromtouser` text not null,
`from` text not null,
`message_text` text not null,
primary key(`snd`)
)
engine=myisam character set utf8 collate=utf8_general_ci;