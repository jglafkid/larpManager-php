<?php

/**
 * Auto generated by MySQL Workbench Schema Exporter.
 * Version 2.1.6-dev (doctrine2-annotation) on 2015-09-10 10:49:20.
 * Goto https://github.com/johmue/mysql-workbench-schema-exporter for more
 * information.
 */

namespace LarpManager\Entities;

use LarpManager\Entities\BaseSecondaryGroup;

/**
 * LarpManager\Entities\SecondaryGroup
 *
 * @Entity(repositoryClass="LarpManager\Repository\SecondaryGroupRepository")
 */
class SecondaryGroup extends BaseSecondaryGroup
{
	/**
	 * Fourni le personnage responsable du groupe
	 */
	public function getResponsable()
	{
		return $this->getPersonnageRelatedByPersonnageId();
	}
	
	/**
	 * Défini le personnage responsable du groupe
	 * @param Personnage $personnage
	 */
	public function setResponsable(Personnage $personnage)
	{
		$this->setPersonnageRelatedByPersonnageId($personnage);
		return $this;
	}
		
}