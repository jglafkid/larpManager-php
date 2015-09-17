<?php

/**
 * Auto generated by MySQL Workbench Schema Exporter.
 * Version 2.1.6-dev (doctrine2-annotation) on 2015-09-17 19:02:38.
 * Goto https://github.com/johmue/mysql-workbench-schema-exporter for more
 * information.
 */

namespace LarpManager\Entities;

use Doctrine\Common\Collections\ArrayCollection;

/**
 * LarpManager\Entities\TerritoireGuerre
 *
 * @Entity()
 * @Table(name="territoire_guerre")
 * @InheritanceType("SINGLE_TABLE")
 * @DiscriminatorColumn(name="discr", type="string")
 * @DiscriminatorMap({"base":"BaseTerritoireGuerre", "extended":"TerritoireGuerre"})
 */
class BaseTerritoireGuerre
{
    /**
     * @Id
     * @Column(type="integer")
     * @GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @Column(type="integer", nullable=true)
     */
    protected $puissance;

    /**
     * @Column(type="integer", nullable=true)
     */
    protected $puissance_max;

    /**
     * @Column(type="integer", nullable=true)
     */
    protected $protection;

    /**
     * @OneToOne(targetEntity="Territoire", mappedBy="territoireGuerre")
     */
    protected $territoire;

    public function __construct()
    {
        $this->territoires = new ArrayCollection();
    }

    /**
     * Set the value of id.
     *
     * @param integer $id
     * @return \LarpManager\Entities\TerritoireGuerre
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of id.
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of puissance.
     *
     * @param integer $puissance
     * @return \LarpManager\Entities\TerritoireGuerre
     */
    public function setPuissance($puissance)
    {
        $this->puissance = $puissance;

        return $this;
    }

    /**
     * Get the value of puissance.
     *
     * @return integer
     */
    public function getPuissance()
    {
        return $this->puissance;
    }

    /**
     * Set the value of puissance_max.
     *
     * @param integer $puissance_max
     * @return \LarpManager\Entities\TerritoireGuerre
     */
    public function setPuissanceMax($puissance_max)
    {
        $this->puissance_max = $puissance_max;

        return $this;
    }

    /**
     * Get the value of puissance_max.
     *
     * @return integer
     */
    public function getPuissanceMax()
    {
        return $this->puissance_max;
    }

    /**
     * Set the value of protection.
     *
     * @param integer $protection
     * @return \LarpManager\Entities\TerritoireGuerre
     */
    public function setProtection($protection)
    {
        $this->protection = $protection;

        return $this;
    }

    /**
     * Get the value of protection.
     *
     * @return integer
     */
    public function getProtection()
    {
        return $this->protection;
    }

    /**
     * Set Territoire entity (one to one).
     *
     * @param \LarpManager\Entities\Territoire $territoire
     * @return \LarpManager\Entities\TerritoireGuerre
     */
    public function setTerritoire(Territoire $territoire = null)
    {
        $territoire->setTerritoireGuerre($this);
        $this->territoire = $territoire;

        return $this;
    }

    /**
     * Get Territoire entity (one to one).
     *
     * @return \LarpManager\Entities\Territoire
     */
    public function getTerritoire()
    {
        return $this->territoire;
    }

    public function __sleep()
    {
        return array('id', 'puissance', 'puissance_max', 'protection');
    }
}