create table `page_category`(

`pgid` int(30) auto_increment,
`pagename` text not null,
`pageid` text not null,
`ccphone` text not null,
`page_category` text not null,
primary key(`pgid`)
)
engine=myisam character set utf8 collate=utf8_general_ci;