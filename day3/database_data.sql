use whiskydb;
INSERT INTO `whiskydb`.`country` (`country`) VALUES ('Schottland');
INSERT INTO `whiskydb`.`country` (`country`) VALUES ('Irland');
INSERT INTO `whiskydb`.`country` (`country`) VALUES ('USA');
INSERT INTO `whiskydb`.`country` (`country`) VALUES ('Indien');
INSERT INTO `whiskydb`.`country` (`country`) VALUES ('Japan');
INSERT INTO `whiskydb`.`country` (`country`) VALUES ('Taiwan');
INSERT INTO `whiskydb`.`country` (`country`) VALUES ('Schweiz');
INSERT INTO `whiskydb`.`country` (`country`) VALUES ('Belgien');
INSERT INTO `whiskydb`.`country` (`country`) VALUES ('Österreich');
INSERT INTO `whiskydb`.`country` (`country`) VALUES ('Grossbritannien');
INSERT INTO `whiskydb`.`country` (`country`) VALUES ('Israel');

INSERT INTO `whiskydb`.`region` (`country_id`, `region`) VALUES ('1', 'Campbeltown');
INSERT INTO `whiskydb`.`region` (`country_id`, `region`) VALUES ('1', 'Highland');
INSERT INTO `whiskydb`.`region` (`country_id`, `region`) VALUES ('1', 'Islands');
INSERT INTO `whiskydb`.`region` (`country_id`, `region`) VALUES ('1', 'Islay');
INSERT INTO `whiskydb`.`region` (`country_id`, `region`) VALUES ('1', 'Lowland');
INSERT INTO `whiskydb`.`region` (`country_id`, `region`) VALUES ('1', 'Speyside');
INSERT INTO `whiskydb`.`region` (`country_id`, `region`) VALUES ('7', 'Bern');
INSERT INTO `whiskydb`.`region` (`country_id`, `region`) VALUES ('7', 'St. Gallen');
INSERT INTO `whiskydb`.`region` (`country_id`, `region`) VALUES ('5', 'Japan');
insert into region (country_id, region) (select country.id, country from country left join region on country_id = country.id where country_id is null);

INSERT INTO `whiskydb`.`brand` (`region_id`, `brand`) VALUES ('2', 'Aberfeldy');
INSERT INTO `whiskydb`.`brand` (`region_id`, `brand`) VALUES ('2', 'Aberlour');
INSERT INTO `whiskydb`.`brand` (`region_id`, `brand`) VALUES ('2', 'AnCnoc');
INSERT INTO `whiskydb`.`brand` (`region_id`, `brand`) VALUES ('2', 'Balblair');
INSERT INTO `whiskydb`.`brand` (`region_id`, `brand`) VALUES ('2', 'Cadenhead\'s');
INSERT INTO `whiskydb`.`brand` (`region_id`, `brand`) VALUES ('2', 'Blair Athol');
INSERT INTO `whiskydb`.`brand` (`region_id`, `brand`) VALUES ('2', 'Dalwhinnie');
INSERT INTO `whiskydb`.`brand` (`region_id`, `brand`) VALUES ('6', 'Aultmore');
INSERT INTO `whiskydb`.`brand` (`region_id`, `brand`) VALUES ('6', 'Benriach');
INSERT INTO `whiskydb`.`brand` (`region_id`, `brand`) VALUES ('6', 'Benromach');

INSERT INTO `whiskydb`.`whisky` (`brand_id`, `name`, `type`, `purchase`, `own_judgment`, `offical_judgment`, `age`, `bought`, `remark`, `bottles`, `taster_note`) VALUES ('1', 'Aberfeldy 12 Years Old Highland Single Malt 40% Vol. 1l in Geschenkbox', 'single_malt', '46', '6', '7', '12', '2013-08-15', 'The Golden Dram, dieser Single Malt Scotch Whisky reift für mindestens 12 Jahre in handgefertigten Eichenfässern.', '1', 'Farbe: Rotgold mit kupfernen Einschlägen.');
INSERT INTO `whiskydb`.`whisky` (`brand_id`, `name`, `type`, `purchase`, `own_judgment`, `offical_judgment`, `age`, `bought`, `remark`, `bottles`, `taster_note`) VALUES ('1', 'Aberfeldy 21 Years Old Highland Single Malt MADEIRA CASK FINISH 40% Vol. 0,7l in Geschenkbox', 'single_malt', '175', '8', '8', '21', '2015-12.12', 'Diese Limited Release erhält ein Finish in Madeira Casks.', '1', 'Farbe: Bernstein.');
INSERT INTO `whiskydb`.`whisky` (`brand_id`, `name`, `type`, `purchase`, `own_judgment`, `offical_judgment`, `age`, `bought`, `distilled`, `bottlet`, `remark`, `bottles`, `taster_note`) VALUES ('9', 'The BenRiach 35 Years Old Single Malt Scotch Whisky 42,5% Vol. 0,7l', 'single_malt', '756.5', '9', '10', '35', '2019-06-25', '1980-07-15', '2015-09-03', 'Der The BenRiach 35 Years Old Single Malt Scotch Whisky reift 35 Jahre lang und wird ohne Kältefiltration sowie in natürlicher Farbgebung abgefüllt.', '1', 'Farbe: Sattes Gold.');
INSERT INTO `whiskydb`.`whisky` (`brand_id`, `name`, `type`, `purchase`, `own_judgment`, `offical_judgment`, `age`, `bought`, `distilled`, `bottlet`, `remark`, `bottles`, `taster_note`, bottles_open) VALUES ('7', 'Dalwhinnie The Distillers Edition 2019 Double Matured 2004 43% Vol. 0,7l', 'single_malt', '67', '5', '8', '15', '2020-05-12', '2004-01-01', '2019-01-01', 'Das gälische Wort von dem Dalwhinnie abstammt ist \"Dail-coinneeamh\", was so viel heißt wie \"Treffpunkt\".', '2', 'Farbe: Sattes Gold.', 1);

INSERT INTO `whiskydb`.`price` (`whisky_id`, `commercial`) VALUES ('1', '55');
INSERT INTO `whiskydb`.`price` (`whisky_id`, `commercial`) VALUES ('2', '185');
INSERT INTO `whiskydb`.`price` (`whisky_id`, `commercial`) VALUES ('3', '815.50');
INSERT INTO `whiskydb`.`price` (`whisky_id`, `commercial`) VALUES ('4', '75');
INSERT INTO `whiskydb`.`price` (`whisky_id`, `commercial`, `check_date`) VALUES ('3', '788', '2021-12-24');
