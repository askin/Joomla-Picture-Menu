CREATE TABLE #__jpm (
   ID INT AUTO_INCREMENT,
   page_url   VARCHAR(100) NOT NULL,
   page_title VARCHAR(100) NOT NULL,
   pic_small  VARCHAR(100) NOT NULL,
   pic_big    VARCHAR(100) NOT NULL,
   PRIMARY KEY(ID)
);

INSERT INTO #__jpm (`page_url`, `page_title`, `pic_small`, `pic_big`)
VALUES (
"/urunler/9", "Fotoselli Musluk Aparatı", 
"images/fotoselli_musluk_small.jpg", "images/fotoselli_musluk_mid.png");

SELECT * FROM #__jpm;