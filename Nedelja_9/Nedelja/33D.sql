INSERT INTO `proizvodi`(`barkod`, `naziv`, `cena`) VALUES ('001','mleko','114'), ('002','secer','98'), ('003','brasno','55'), ('004','ulje','130'), ('005','sir','1145')



INSERT INTO `prodaja`( `barkod`, `kolicina`, `cena`, `datum`) VALUES ('001',4,456,'2021/6/17'), ('001',2,228,'2021/6/17'), ('002',1,98,'2021/6/17'), ('005',6,6500,'2021/6/17'), ('003',4,300,'2021/6/16'), ('004',9,844,'2021/6/16'), ('001',4,800,'2021/5/01'), ('004',3,666,'2021/5/01'), ('005',4,4500,'2021/5/01'), ('003',2,334,'2021/5/01')



INSERT INTO `proizvodi`(`barkod`, `naziv`, `cena`) VALUES (789,'paradajz',200), (776,'crni luk',50),(761,'beli luk',80)
//- koji odjednom dodaje 3 proizvoda:
 789, "paradajz", 200
- 776, "crni luk", 50
- 761, "beli luk", 80

INSERT INTO `prodaja`( `barkod`, `kolicina`, `cena`, `datum`) VALUES (789,50,200, '2021/06/16')


INSERT INTO `prodaja`(`barkod`, `kolicina`, `cena`, `datum`) VALUES (789,20,200,'2021/06/17')
INSERT INTO `prodaja`(`barkod`, `kolicina`, `cena`, `datum`) VALUES (789,40,250,'2021/06/17')
INSERT INTO `prodaja`(`barkod`, `kolicina`, `cena`, `datum`) VALUES (789,10,220,'2021/06/17')
INSERT INTO `prodaja`(`barkod`, `kolicina`, `cena`, `datum`) VALUES (776,30,50,'2021/05/01')


INSERT INTO `prodaja`(`barkod`, `kolicina`, `cena`, `datum`) VALUES (761,12,120,'2021/06/16'), (761,1,10,'2021/06/16'), (761,15,150,'2021/05/01')

DELETE FROM `prodaja` WHERE barkod=789 AND datum='2021/6/16'


UPDATE `prodaja` SET `cena`= (`cena`* 0.1)+`cena` WHERE `datum`='2021/06/17'

SELECT `barkod`
FROM `prodaja` 
WHERE `datum`='2021/05/01'


SELECT DISTINCT(`barkod`) 
FROM `prodaja` 
WHERE `datum`='2021/05/01'


SELECT datum , SUM(kolicina) AS ukupna_kolicina 
FROM `prodaja` 
GROUP BY datum


SELECT barkod , SUM(kolicina) AS ukupna_kolicina
FROM `prodaja` 
GROUP BY barkod


SELECT barkod ,datum, SUM(kolicina) AS ukupna_kolicina
 FROM `prodaja` 
 GROUP BY barkod, datum







