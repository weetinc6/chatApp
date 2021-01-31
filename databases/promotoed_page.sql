create table `promoted_page`(

`cid` int(30) auto_increment,
`pageid` text not null,
primary key(`cid`)
)
engine=myisam character set utf8 collate=utf8_general_ci;