
create table light_novel(lnid int(11) primary key,lnname varchar(50),dor date not null,author varchar(20) not null, ratings int not null);
create table manga(mangaid int(11) primary key,manganame varchar(50), sales int not null,writer varchar(20) not null,dor date,artist varchar(20) not null);
create table adapts(lnid int(11) references light_novel(lnid),mangaid int(11) references manga(mangaid),astatus varchar(20) not null,primary key(lnid,mangaid));
create table anime(animeid int(11) primary key,animename varchar(50), director varchar(20) not null, dor date not null, lnid int(11) references light_novel(lnid),mangaid int(11) references manga(mangaid));
create table productions(prid int(11) primary key,prname varchar(50),ceo varchar(20) not null,doe date not null, noofemployees int not null, totalsales int not null);
create table produces(animeid int(11) references anime(aninmeid),prid int(11) references productions(prid),budget int,primary key(animeid,prid));
alter table anime modify animeid int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;
alter table manga modify mangaid int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;
alter table productions modify prid int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;
alter table light_novel modify lnid int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;
insert into light_novel values(100,'Arifureta: From Commonplace to Worlds Strongest','2012-10-10','Ryo Shirakome',4);
insert into light_novel(lnname,dor,author,ratings) values('Nano Machine','2010-12-30','Hanjungwolya',5);
insert into light_novel(lnname,dor,author,ratings)  values('The Catastrophe of the Great Hero','2015-09-20','Myojin Katou',3);
insert into light_novel(lnname,dor,author,ratings)  values('That Time I Got Reincarnated As A Slime','2009-01-11','Fuse',5);
insert into light_novel(lnname,dor,author,ratings)  values('The Classroom of the Elite','2015-08-10','Syougo Kinugasa',4);
insert into manga values(500,'One Piece',999,'Eiichiro Oda','1997-01-01','Chiaki Inaba');
insert into anime values(1,'One Piece','Eisaku Inoue','1999-01-01',NULL,500);
insert into productions values(1000,'Toei Animation','Hiroyuki Kinoshita','1990-06-13',600,343422);
insert into productions values(1001,'MAPPA Animation','Manabu Otsuka','2001-08-15',640,13422);
insert into produces values(1,1000,60000);
create event test_event
on schedule every 1 minute
starts CURRENT_TIMESTAMP
ENDS CURRENT_TIMESTAMP + INTERVAL 1 DAY
DO
	UPDATE manga
	set sales=sales+10;



