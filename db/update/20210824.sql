/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/**
 * Author:  agus
 * Created: Aug 24, 2021
 */

ALTER TABLE `blogs`
	ADD COLUMN `seq` INT(5) NULL DEFAULT 0 AFTER `content_short`;