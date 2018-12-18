create table `verilen_kitaplar` (
`ID`	INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT UNIQUE,
`uye_id`  integer not null,
`kitap_id`  integer not null
);
