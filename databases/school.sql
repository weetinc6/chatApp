create table `userinfo_school` (

`uid` int(30) auto_increment,
`ccphone` text not null,
`id` text not null,
`schoolname` text not null,
`schoolday` text not null,
`schoolmonth` text not null,
`schoolyear` text not null, 
primary key(`uid`)
)
engine=myisam character set utf8 collate=utf8_general_ci;