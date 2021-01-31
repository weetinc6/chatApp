create table `ccuser` (

`ccid` int(30) auto_increment,
`ccphone` text not null,
`ccfname` text not null,
`ccsurname` text not null,
`ccusername` text not null,
primary key(`ccid`)

)
engine = myisam character set utf8 collate=utf8_general_ci;