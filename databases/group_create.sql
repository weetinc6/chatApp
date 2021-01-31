create table `group_name` (

`grid` int(30) auto_increment,
`grouppic1` text not null,
`groupname` text not null,
`groupdescrip` text not null,
`grouptime` timestamp not null,
`ccphone_admin` text not null,
primary key(`grid`)

)
engine=myisam character set utf8 collate=utf8_general_ci;