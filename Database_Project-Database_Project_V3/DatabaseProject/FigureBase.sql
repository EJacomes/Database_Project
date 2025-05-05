--used to create the database in the XAMMP terminal
create database FigureDatabase;
use FigureDatabase;

--primary keys: FigureID, FigureName, ManufactorName, SellerName, UserName, CountryofUser
--Foreign keys: ManufactorName (Table: Manufacturer), SellerName (Table: Seller), UserName (Table: User), Price (Table: Seller), CountryofUser (Table: User)
create table Figures (
    FigureID number(8) NOT NULL,
    FigureName varchar(20) NOT NULL,
    Series varchar(20),
    ManufactorName varchar(20),
    SellerName varchar(20),
    UserName varchar(20),
    DataGotten date,
    DateRelease date,
    Price float,
    CountryOfOrigin varchar(20),
    CountryofUser varchar(20),
    primary key(FigureID, FigureName, ManufactorName, SellerName, UserName, CountryofUser),
    foreign key(ManufactorName) reference Manufacturer(ManufactorName),
    foreign key(SellerName) reference Seller(SellerName),
    foreign key(UserName) reference User(UserName),
    foreign key(Price) reference Seller(Price),
    foreign key(CountryofUser) reference User(CountryofUser)
);

