create table `ccbanktransfer` (

`ccbid` int(30) auto_increment,
`bankname` text not null,
`accountname` text not null,
`accountnum` text not null,
`ccamount` text not null,
`ccphone` text not null,
`cctime` timestamp not null,
`status` text not null,

primary key(`ccbid`)


)
engine=myisam character set utf8 collate=utf8_general_ci;