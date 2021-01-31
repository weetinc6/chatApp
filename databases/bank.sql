create table `ccbank` (

`ccbid` int(30) auto_increment,
`bankname` text not null,
`accountname` text not null,
`accountnum` text not null,
`ccphone` text not null,

primary key(`ccbid`)


)
engine=myisam character set utf8 collate=utf8_general_ci;