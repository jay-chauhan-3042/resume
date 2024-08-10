CREATE TABLE tblMails (
    mailId int primary key AUTO_INCREMENT,
    mailToEmail text not null,
    mailToName text not null,
    mailSubject varchar(256) not null,
    mailContent text not null,
    mailDate datetime not null default CURRENT_TIMESTAMP
);
