<?php
$SQL = <<< END
DROP DATABASE IF EXISTS {$DBNAME};
CREATE DATABASE IF NOT EXISTS {$DBNAME};
USE {$DBNAME};

CREATE TABLE IF NOT EXISTS {$TABNAME} (
	id	INT	PRIMARY KEY	AUTO_INCREMENT,
	voce	VARCHAR(32)	NOT NULL	UNIQUE
);

INSERT INTO {$TABNAME}(voce) VALUES
	('acqua'),
	('latte'),
	('farina'),
	('zucchero'),
	('uova'),
	('lievito');

END;
