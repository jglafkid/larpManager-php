<?php

/**
 * Auto generated by MySQL Workbench Schema Exporter.
 * Version 2.1.6-dev (doctrine2-annotation) on 2017-05-13 16:49:12.
 * Goto https://github.com/johmue/mysql-workbench-schema-exporter for more
 * information.
 */

namespace LarpManager\Entities;

/**
 * LarpManager\Entities\IntrigueHasLieu
 *
 * @Entity()
 * @Table(name="intrigue_has_lieu", indexes={@Index(name="fk_intrigue_has_lieu_intrigue1_idx", columns={"intrigue_id"}), @Index(name="fk_intrigue_has_lieu_lieu1_idx", columns={"lieu_id"})})
 * @InheritanceType("SINGLE_TABLE")
 * @DiscriminatorColumn(name="discr", type="string")
 * @DiscriminatorMap({"base":"BaseIntrigueHasLieu", "extended":"IntrigueHasLieu"})
 */
class BaseIntrigueHasLieu
{
    /**
     * @Id
     * @Column(type="integer", options={"unsigned":true})
     * @GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ManyToOne(targetEntity="Intrigue", inversedBy="intrigueHasLieus", cascade={"persist", "remove"})
     * @JoinColumn(name="intrigue_id", referencedColumnName="id", nullable=false)
     */
    protected $intrigue;

    /**
     * @ManyToOne(targetEntity="Lieu", inversedBy="intrigueHasLieus")
     * @JoinColumn(name="lieu_id", referencedColumnName="id", nullable=false)
     */
    protected $lieu;

    public function __construct()
    {
    }

    /**
     * Set the value of id.
     *
     * @param integer $id
     * @return \LarpManager\Entities\IntrigueHasLieu
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
     * Set Intrigue entity (many to one).
     *
     * @param \LarpManager\Entities\Intrigue $intrigue
     * @return \LarpManager\Entities\IntrigueHasLieu
     */
    public function setIntrigue(Intrigue $intrigue = null)
    {
        $this->intrigue = $intrigue;

        return $this;
    }

    /**
     * Get Intrigue entity (many to one).
     *
     * @return \LarpManager\Entities\Intrigue
     */
    public function getIntrigue()
    {
        return $this->intrigue;
    }

    /**
     * Set Lieu entity (many to one).
     *
     * @param \LarpManager\Entities\Lieu $lieu
     * @return \LarpManager\Entities\IntrigueHasLieu
     */
    public function setLieu(Lieu $lieu = null)
    {
        $this->lieu = $lieu;

        return $this;
    }

    /**
     * Get Lieu entity (many to one).
     *
     * @return \LarpManager\Entities\Lieu
     */
    public function getLieu()
    {
        return $this->lieu;
    }

    public function __sleep()
    {
        return array('id', 'intrigue_id', 'lieu_id');
    }
}