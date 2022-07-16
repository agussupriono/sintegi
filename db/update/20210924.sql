/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/**
 * Author:  agus
 * Created: Sep 24, 2021
 */

ALTER TABLE `clients`
	ADD COLUMN `group` VARCHAR(50) NULL DEFAULT NULL AFTER `seq`;

ALTER TABLE `blogs`
	ADD UNIQUE INDEX `slug_blog` (`slug_blog`);