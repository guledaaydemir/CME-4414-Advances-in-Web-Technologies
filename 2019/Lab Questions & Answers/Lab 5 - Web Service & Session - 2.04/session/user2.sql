USE `testdb`;
					
CREATE TABLE IF NOT EXISTS `user2` (
`ID` int(11) NOT NULL,
`Name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
`Phone` varchar(16) COLLATE utf8_unicode_ci NOT NULL,
`Password` varchar(16) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;
					
ALTER TABLE `user2`
ADD PRIMARY KEY (`ID`);
					
ALTER TABLE `user2`
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=1;

INSERT INTO user2 (Name, Password, Phone)
				VALUES ('aslı', '123', '0542 1234567')