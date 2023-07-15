DROP PROCEDURE IF EXISTS `FetchComplaintData`;

DELIMITER $$
CREATE PROCEDURE `FetchComplaintData`()
BEGIN
    SELECT * FROM complaint_data;
END$$
DELIMITER ;
