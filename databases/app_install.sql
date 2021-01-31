create table `app_install`(

`apptid` int(30) auto_increment,
`appid` text not null,
`appname` text not null,
`launchpath` text not null,
`apptype` text not null,
`appimage` text not null,
`ccphone` text not null,
primary key(`apptid`)
)
engine=myisam character set utf8 collate=utf8_general_ci;