/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/**
 * Author:  agus
 * Created: Sep 22, 2021
 */

ALTER TABLE `products`
	ADD COLUMN `seq` INT NOT NULL DEFAULT 0 AFTER `position`;