create table `userinfo_work` (

`wid` int(30) auto_increment,
`ccphone` text not null,
`id` text not null,
`workname` text  not null,
`workday` text not null,
`workmonth` text not null,
`workyear` text not null,
primary key(`wid`)
)
engine=myisam character set utf8 collate=utf8_general_ci;