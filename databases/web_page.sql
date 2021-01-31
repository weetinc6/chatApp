create table `web_page`(
`wid` int(30) auto_increment,
`web_site` text not null,
`web_email` text not null,
`pageid` text not null,
primary key(`wid`)

)
engine=myisam character set utf8 collate=utf8_general_ci;