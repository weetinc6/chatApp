create table `app_market` (

`appid` int(30) auto_increment,
`appname` text not null,
`appdev` text not null,
`appemail` text not null,
`launchpath` text not null,
`appimage` text not null,
`appimage1` text not null,
`appimage2` text not null,
`appimage3` text not null,
`appdes` text not null,
`apptype` text not null,
primary key(`appid`)
)
engine=myisam character set utf8 collate=utf8_general_ci;