create table `pending_friends_notify` (

`pid` int(30) auto_increment,
`fromuser` text not null,
`touser` text not null,
primary key(`pid`)
)
engine=myisam character set utf8 collate=utf8_general_ci;