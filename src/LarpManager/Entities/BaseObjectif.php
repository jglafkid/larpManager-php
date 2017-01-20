<?php

/**
 * Auto generated by MySQL Workbench Schema Exporter.
 * Version 2.1.6-dev (doctrine2-annotation) on 2017-01-19 11:27:08.
 * Goto https://github.com/johmue/mysql-workbench-schema-exporter for more
 * information.
 */

namespace LarpManager\Entities;

use Doctrine\Common\Collections\ArrayCollection;

/**
 * LarpManager\Entities\Objectif
 *
 * @Entity()
 * @Table(name="objectif")
 * @InheritanceType("SINGLE_TABLE")
 * @DiscriminatorColumn(name="discr", type="string")
 * @DiscriminatorMap({"base":"BaseObjectif", "extended":"Objectif"})
 */
class BaseObjectif
{
    /**
     * @Id
     * @Column(type="integer", options={"unsigned":true})
     * @GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @Column(name="`text`", type="string", length=450)
     */
    protected $text;

    /**
     * @Column(type="datetime")
     */
    protected $date_creation;

    /**
     * @Column(type="datetime")
     */
    protected $date_update;

    /**
     * @OneToMany(targetEntity="IntrigueHasObjectif", mappedBy="objectif", cascade={"persist", "remove"})
     * @JoinColumn(name="id", referencedColumnName="objectif_id", nullable=false)
     */
    protected $intrigueHasObjectifs;

    public function __construct()
    {
        $this->intrigueHasObjectifs = new ArrayCollection();
    }

    /**
     * Set the value of id.
     *
     * @param integer $id
     * @return \LarpManager\Entities\Objectif
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
     * Set the value of text.
     *
     * @param string $text
     * @return \LarpManager\Entities\Objectif
     */
    public function setText($text)
    {
        $this->text = $text;

        return $this;
    }

    /**
     * Get the value of text.
     *
     * @return string
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * Set the value of date_creation.
     *
     * @param \DateTime $date_creation
     * @return \LarpManager\Entities\Objectif
     */
    public function setDateCreation($date_creation)
    {
        $this->date_creation = $date_creation;

        return $this;
    }

    /**
     * Get the value of date_creation.
     *
     * @return \DateTime
     */
    public function getDateCreation()
    {
        return $this->date_creation;
    }

    /**
     * Set the value of date_update.
     *
     * @param \DateTime $date_update
     * @return \LarpManager\Entities\Objectif
     */
    public function setDateUpdate($date_update)
    {
        $this->date_update = $date_update;

        return $this;
    }

    /**
     * Get the value of date_update.
     *
     * @return \DateTime
     */
    public function getDateUpdate()
    {
        return $this->date_update;
    }

    /**
     * Add IntrigueHasObjectif entity to collection (one to many).
     *
     * @param \LarpManager\Entities\IntrigueHasObjectif $intrigueHasObjectif
     * @return \LarpManager\Entities\Objectif
     */
    public function addIntrigueHasObjectif(IntrigueHasObjectif $intrigueHasObjectif)
    {
        $this->intrigueHasObjectifs[] = $intrigueHasObjectif;

        return $this;
    }

    /**
     * Remove IntrigueHasObjectif entity from collection (one to many).
     *
     * @param \LarpManager\Entities\IntrigueHasObjectif $intrigueHasObjectif
     * @return \LarpManager\Entities\Objectif
     */
    public function removeIntrigueHasObjectif(IntrigueHasObjectif $intrigueHasObjectif)
    {
        $this->intrigueHasObjectifs->removeElement($intrigueHasObjectif);

        return $this;
    }

    /**
     * Get IntrigueHasObjectif entity collection (one to many).
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getIntrigueHasObjectifs()
    {
        return $this->intrigueHasObjectifs;
    }

    public function __sleep()
    {
        return array('id', 'text', 'date_creation', 'date_update');
    }
}