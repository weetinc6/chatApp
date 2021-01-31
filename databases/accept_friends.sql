create table `accept_friends` (

`acid` int(30) auto_increment,
`fromuser` text not null,
`touser` text not null,
primary key(`acid`)
)
engine=myisam character set utf8 collate=utf8_general_ci;