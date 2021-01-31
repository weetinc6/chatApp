create table `page_create` (

`pgid` int(30) auto_increment,
`pagename` text not null,
`ccphone` text not null,
`pageid` text not null,
`timecreated` timestamp not null,
primary key(`pgid`)
)
engine=myisam character set utf8 collate=utf8_general_ci;