/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/**
 * Author:  agus
 * Created: Aug 13, 2021
 */

ALTER TABLE `clients`
	ADD COLUMN `seq` INT NOT NULL DEFAULT 0 AFTER `status`;

ALTER TABLE `galleries`
	ADD COLUMN `seq` INT NOT NULL DEFAULT 0 AFTER `status`;

ALTER TABLE `partners`
	ADD COLUMN `seq` INT NOT NULL DEFAULT 0 AFTER `position`;
