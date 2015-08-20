<?php

/**
 * Auto generated by MySQL Workbench Schema Exporter.
 * Version 2.1.6-dev (doctrine2-annotation) on 2015-08-20 12:55:35.
 * Goto https://github.com/johmue/mysql-workbench-schema-exporter for more
 * information.
 */

namespace LarpManager\Entities;

/**
 * LarpManager\Entities\Ressource
 *
 * @Entity()
 * @Table(name="ressource", indexes={@Index(name="fk_ressource_rarete1_idx", columns={"rarete_id"})})
 * @InheritanceType("SINGLE_TABLE")
 * @DiscriminatorColumn(name="discr", type="string")
 * @DiscriminatorMap({"base":"BaseRessource", "extended":"Ressource"})
 */
class BaseRessource
{
    /**
     * @Id
     * @Column(type="integer")
     * @GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @Column(type="string", length=100)
     */
    protected $label;

    /**
     * @ManyToOne(targetEntity="Rarete", inversedBy="ressources")
     * @JoinColumn(name="rarete_id", referencedColumnName="id")
     */
    protected $rarete;

    public function __construct()
    {
    }

    /**
     * Set the value of id.
     *
     * @param integer $id
     * @return \LarpManager\Entities\Ressource
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
     * Set the value of label.
     *
     * @param string $label
     * @return \LarpManager\Entities\Ressource
     */
    public function setLabel($label)
    {
        $this->label = $label;

        return $this;
    }

    /**
     * Get the value of label.
     *
     * @return string
     */
    public function getLabel()
    {
        return $this->label;
    }

    /**
     * Set Rarete entity (many to one).
     *
     * @param \LarpManager\Entities\Rarete $rarete
     * @return \LarpManager\Entities\Ressource
     */
    public function setRarete(Rarete $rarete = null)
    {
        $this->rarete = $rarete;

        return $this;
    }

    /**
     * Get Rarete entity (many to one).
     *
     * @return \LarpManager\Entities\Rarete
     */
    public function getRarete()
    {
        return $this->rarete;
    }

    public function __sleep()
    {
        return array('id', 'label', 'rarete_id');
    }
}