-- MySQL dump 10.13 Distrib 5.7.19, for Linux (i686)
--
-- Host: localhost Database: php
-- ------------------------------------------------------
-- Server version 5.7.19-0ubuntu0.16.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user` (
`id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
`benutzer` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
`passwort` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
`erstellt_am` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
PRIMARY KEY (`id`),
UNIQUE KEY `benutzer` (`benutzer`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES
(1,'Stephan','$2y$10$IhmUmzXUwTKdbgyasJ6P2.MtN4B8XWLGsv3d6y6UnOIe2Y4K46d62','2020-09
-14
14:52:36'),(7,'Hans','$2y$10$ImvAT8eMxs1mqmh0DnfD..tfaHMhISle6FJOZz3KmN3OieOl/itle','2
020-09-14
17:40:08'),(8,'Benutzer1','$2y$10$qcSIrb/9QYNtZfzyIB8lKu7xxppHpRH0l.8rx4otoR1plKgP9sUe
u','2020-09-14
17:41:13'),(9,'Benutzer2','$2y$10$1Id.C9lBLVv93S.tmEWpW.GWWwUqOtWF0x9tE7bPTnzI9gDVTyJV
S','2020-09-14
17:41:52'),(10,'Benutzer3','$2y$10$AF61We8OmrkrwQgW8dIdTei7sshg3T4qiCaXYj4o1OubKWr.qUX
Rq','2020-09-15
11:10:10'),(11,'Benutzer4','$2y$10$.0llNaXBXf3xi7wJS5AGfurqNVBoy3LzCIRrJyPyUnSjxnQq4s/
FO','2020-09-15 11:11:37');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `videoliste`
--

DROP TABLE IF EXISTS `videoliste`;
/*!40101 SET @saved_cs_client = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `videoliste` (
`id` int(10) unsigned NOT NULL AUTO_INCREMENT,
`name` varchar(50) NOT NULL,
`menge` int(10) unsigned NOT NULL,
`beschreibung` varchar(1000) NOT NULL,
`preis` double unsigned NOT NULL,
PRIMARY KEY (`id`),
UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `videoliste`
--

LOCK TABLES `videoliste` WRITE;
/*!40000 ALTER TABLE `videoliste` DISABLE KEYS */;
INSERT INTO `videoliste` VALUES (1,'You Are Wanted',10,'Hotelmanager und
Familienvater Lukas \r\n(Matthias SchweighÃ¶fer) wird brutal aus \r\nseinem Alltag
gerissen, als jemand seine \r\npersÃ¶nlichen Daten hackt und beginnt \r\nseine
IdentitÃ¤t zu verÃ¤ndern. Das BKA \r\nverdÃ¤chtigt ihn, Mitglied einer
\r\nterroristischen Vereinigung zu sein. \r\nSelbst seine Frau beginnt an ihm zu
\r\nzweifeln. Es ist klar: er muss sich \r\nwehren. Wer steckt hinter der
\r\nVerschwÃ¶rung? | HinzugefÃ¼gt von Stephan am 20. 09. 2020
16:08:57',9.99),(2,'American Gods',15,'Ein Sturm zieht auf, als Shadow Moon aus
\r\ndem GefÃ¤ngnis kommt und auf den \r\ngeheimnisvollen Mr. Wednesday trifft.
\r\nFreigelassen wegen des Todes seiner \r\nFrau, nimmt Shadow eine Stelle als
\r\nWednesdays Bodyguard an. Dort findet er \r\nsich in einer verborgenen Welt
wieder, \r\nin der Magie ganz real ist und in der \r\ndie alten GÃ¶tter nichts mehr
als ihre \r\nUnbedeutsamkeit und die aufsteigenden \r\nneuen GÃ¶tter fÃ¼rchten. |
HinzugefÃ¼gt von Hans am 16. 09. 2020 16:11:28',22.99),(3,'Kevin Can
Wait',8,'Endlich: Der \\&quot;King Of Queens\\&quot; hat ein \r\nneues Zuhause, eine
neue Frau und einen \r\nneuen Job: Das sÃ¼ÃŸe Nichtstun. Als \r\nfrisch
pensionierter Polizist darf sich \r\nKevin James hier auf die gemeinsame Zeit
\r\nmit Familie und ebenfalls pensionierten \r\nKollegen freuen. Und die will mit
\r\nallerhand Unsinn - und groÃŸartigen Gags \r\n- gefÃ¼llt werden. | HinzugefÃ¼gt
von Hans am 16. 09. 2020 16:12:05',33.49),(4,'The Grand Tour',12,'Jeremy Clarkson,
Richard Hammond und \r\nJames May kehren zurÃ¼ck fÃ¼r eine neue \r\nStaffel der
weltweit wichtigsten Serie \r\nÃ¼ber drei MÃ¤nner mittleren Alters, die \r\ndie Welt
unsicher machen, \r\nauÃŸergewÃ¶hnliche Abenteuer erleben, \r\ngroÃŸartige Autos
fahren und sich \r\npermanent darÃ¼ber streiten, welcher von \r\nihnen der grÃ¶ÃŸte
Idiot ist. | HinzugefÃ¼gt von Benutzer1 am 16. 01. 2018 16:15:50',12.99),(5,'Bibi
&amp; Tina: Tohuwabohu total',24,'Das TOHUWABOHU ist perfekt: Bibi und \r\nTina
begegnen einem AusreiÃŸer, der sich \r\nals MÃ¤dchen entpuppt und von seiner
\r\nFamilie verfolgt wird. Das \r\nFamilienoberhaupt ist weltfremd, \r\nengstirnig
und stur und selbst Bibi \r\nkommt mit Hexerei nicht weiter. AuÃŸerdem \r\nist
Schloss Falkenstein eine riesige \r\nBaustelle und der Graf Ã¼berfordert,
\r\nwÃ¤hrend Alex ein Musik-Festival plant \r\nund sich seinem Vater widersetzt....
| \r\nGeÃ¤ndert von Benutzer1 am 16. 09. 2020 \r\n16:17:24 | GeÃ¤ndert von Hans am
16. 01. 2018 16:20:41',9.99),(6,'Der Hobbit: Eine unerwartete Reise (Extended
Editi',45,'Fans von Mittelerde erwartet ein \r\nextralanges Filmerlebnis:
\\\\\\\\\\\\\\&quot;Der Hobbit \r\n- \r\nEine unerwartete Reise: Extended
\r\nEdition\\\\\\\\\\\\\\&quot; enthÃ¤lt 13 zusÃ¤tzliche \r\nFilmminuten. |
HinzugefÃ¼gt von Benutzer1 \r\nam 16. 09. 2020 16:18:16 | HinzugefÃ¼gt \r\nvon
Benutzer1 am 16. 09. 2020 16:18:27 | HinzugefÃ¼gt von Benutzer1 am 16. 09. 2020
16:18:38',11.99),(7,'Der Hobbit: Smaugs EinÃ¶de - Extended Edition',24,'Zusammen mit
13 Zwergen und Zauberer \r\nGandalf der Graue (Ian McKellen) begibt \r\ner sich zum
Einsamen Berg und gelangt in \r\nBesitz von Gollums \\&quot;kostbarem\\&quot; Ring
\r\nsowie seinem kÃ¼hnen Schwert, Stich. | GeÃ¤ndert von Hans am 16. 09. 2020
16:20:16',12.75),(8,'Raum',28,'Der fÃ¼nfjÃ¤hrige Jack lebt mit seiner \r\nMutter in
dem fensterlosen Raum, in dem \r\ner geboren wurde. Er ahnt nicht, dass es \r\neine
Welt auÃŸerhalb dieser 9 mÂ² gibt. \r\nBis zu dem Tag, an dem Ma einen \r\nriskanten
Fluchtplan schmiedet und es \r\nden beiden gelingt, ihrem GefÃ¤ngnis zu
\r\nentfliehen. | HinzugefÃ¼gt von Hans am 16. 09. 2020 16:21:43',9.99),(9,'La La
Land',35,'In der Neuerfindung des Musicals \r\nberÃ¼hren Ryan Gosling und Emma Stone
mit \r\nselbst performten Songs und mitreiÃŸenden \r\nTanznummern in einer traumhaft
\r\ninszenierten Liebesgeschichte. | HinzugefÃ¼gt von Hans am 16. 09. 2020
16:22:26',3.99),(11,'Testvideo 2',5,'Videotest zum Beschreiben einer \r\nDatenbank.
&lt;h1&gt;T E S T&lt;/h1&gt; | HinzugefÃ¼gt von Sebastian am 16. 09. 2020
16:25:34',0.05);
/*!40000 ALTER TABLE `videoliste` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-09-16 16:38:18