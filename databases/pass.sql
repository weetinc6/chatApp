create table `passwrd` (

`pasid` int(30) auto_increment,
`ccpasspin` text not null,
`ccphone` text not null,

primary key(`pasid`)



)
engine=myisam character set utf8 collate=utf8_general_ci;