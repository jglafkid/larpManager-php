<?php

/**
 * Auto generated by MySQL Workbench Schema Exporter.
 * Version 2.1.6-dev (doctrine2-annotation) on 2016-09-05 09:25:27.
 * Goto https://github.com/johmue/mysql-workbench-schema-exporter for more
 * information.
 */

namespace LarpManager\Entities;

use LarpManager\Entities\BaseNotification;

/**
 * LarpManager\Entities\Notification
 *
 * @Entity()
 */
class Notification extends BaseNotification
{
	public function __contruct()
	{
		$this->setDate(new \Datetime('NOW'));
	}
}