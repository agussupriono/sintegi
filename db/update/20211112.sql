/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/**
 * Author:  agus
 * Created: Nov 13, 2021
 */

ALTER TABLE `config`
	ADD COLUMN `linkedin` VARCHAR(225) NOT NULL COLLATE 'latin1_swedish_ci' AFTER `pinterest`,
	ADD COLUMN `whatsapp` VARCHAR(225) NOT NULL COLLATE 'latin1_swedish_ci' AFTER `linkedin`,
	ADD COLUMN `telegram` VARCHAR(225) NOT NULL COLLATE 'latin1_swedish_ci' AFTER `whatsapp`,
	ADD COLUMN `line` VARCHAR(225) NOT NULL COLLATE 'latin1_swedish_ci' AFTER `telegram`,
	ADD COLUMN `messeger` VARCHAR(225) NOT NULL COLLATE 'latin1_swedish_ci' AFTER `line`;