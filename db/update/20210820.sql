/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/**
 * Author:  agus
 * Created: Aug 20, 2021
 */

ALTER TABLE `products`
	ADD COLUMN `position` VARCHAR(50) NOT NULL DEFAULT '0' AFTER `flag_home`;