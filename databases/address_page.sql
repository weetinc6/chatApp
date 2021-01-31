create table `address_page`(

`adrid` int(30) auto_increment,
`address_page` text not null,
`address_city` text not null,
`address_zip` text not null,
`address_phone` text not null,
`ccphone` text not null,
`pagename` text not null,
`pageid` text not null,
primary key(`adrid`)
)
engine=myisam character set utf8 collate=utf8_general_ci;