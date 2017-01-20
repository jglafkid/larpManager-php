<?php

/**
 * Auto generated by MySQL Workbench Schema Exporter.
 * Version 2.1.6-dev (doctrine2-annotation) on 2017-01-19 11:27:08.
 * Goto https://github.com/johmue/mysql-workbench-schema-exporter for more
 * information.
 */

namespace LarpManager\Entities;

/**
 * LarpManager\Entities\Membre
 *
 * @Entity()
 * @Table(name="membre", indexes={@Index(name="fk_personnage_groupe_secondaire_personnage1_idx", columns={"personnage_id"}), @Index(name="fk_personnage_groupe_secondaire_secondary_group1_idx", columns={"secondary_group_id"})})
 * @InheritanceType("SINGLE_TABLE")
 * @DiscriminatorColumn(name="discr", type="string")
 * @DiscriminatorMap({"base":"BaseMembre", "extended":"Membre"})
 */
class BaseMembre
{
    /**
     * @Id
     * @Column(type="integer")
     * @GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @Column(type="boolean", nullable=true)
     */
    protected $secret;

    /**
     * @ManyToOne(targetEntity="Personnage", inversedBy="membres")
     * @JoinColumn(name="personnage_id", referencedColumnName="id", nullable=false)
     */
    protected $personnage;

    /**
     * @ManyToOne(targetEntity="SecondaryGroup", inversedBy="membres")
     * @JoinColumn(name="secondary_group_id", referencedColumnName="id", nullable=false)
     */
    protected $secondaryGroup;

    public function __construct()
    {
    }

    /**
     * Set the value of id.
     *
     * @param integer $id
     * @return \LarpManager\Entities\Membre
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
     * Set the value of secret.
     *
     * @param boolean $secret
     * @return \LarpManager\Entities\Membre
     */
    public function setSecret($secret)
    {
        $this->secret = $secret;

        return $this;
    }

    /**
     * Get the value of secret.
     *
     * @return boolean
     */
    public function getSecret()
    {
        return $this->secret;
    }

    /**
     * Set Personnage entity (many to one).
     *
     * @param \LarpManager\Entities\Personnage $personnage
     * @return \LarpManager\Entities\Membre
     */
    public function setPersonnage(Personnage $personnage = null)
    {
        $this->personnage = $personnage;

        return $this;
    }

    /**
     * Get Personnage entity (many to one).
     *
     * @return \LarpManager\Entities\Personnage
     */
    public function getPersonnage()
    {
        return $this->personnage;
    }

    /**
     * Set SecondaryGroup entity (many to one).
     *
     * @param \LarpManager\Entities\SecondaryGroup $secondaryGroup
     * @return \LarpManager\Entities\Membre
     */
    public function setSecondaryGroup(SecondaryGroup $secondaryGroup = null)
    {
        $this->secondaryGroup = $secondaryGroup;

        return $this;
    }

    /**
     * Get SecondaryGroup entity (many to one).
     *
     * @return \LarpManager\Entities\SecondaryGroup
     */
    public function getSecondaryGroup()
    {
        return $this->secondaryGroup;
    }

    public function __sleep()
    {
        return array('id', 'personnage_id', 'secondary_group_id', 'secret');
    }
}