<?php

/**
 * Auto generated by MySQL Workbench Schema Exporter.
 * Version 2.1.6-dev (doctrine2-annotation) on 2015-08-20 12:55:34.
 * Goto https://github.com/johmue/mysql-workbench-schema-exporter for more
 * information.
 */

namespace LarpManager\Entities;

use Doctrine\Common\Collections\ArrayCollection;

/**
 * LarpManager\Entities\Niveau
 *
 * @Entity()
 * @Table(name="niveau")
 * @InheritanceType("SINGLE_TABLE")
 * @DiscriminatorColumn(name="discr", type="string")
 * @DiscriminatorMap({"base":"BaseNiveau", "extended":"Niveau"})
 */
class BaseNiveau
{
    /**
     * @Id
     * @Column(type="integer")
     * @GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @Column(type="integer")
     */
    protected $niveau;

    /**
     * @Column(type="string", length=45)
     */
    protected $label;

    /**
     * @Column(type="integer", nullable=true)
     */
    protected $cout;

    /**
     * @Column(type="integer", nullable=true)
     */
    protected $cout_favori;

    /**
     * @Column(type="integer", nullable=true)
     */
    protected $cout_meconu;

    /**
     * @OneToMany(targetEntity="CompetenceNiveau", mappedBy="niveau")
     * @JoinColumn(name="id", referencedColumnName="niveau_id")
     */
    protected $competenceNiveaus;

    public function __construct()
    {
        $this->competenceNiveaus = new ArrayCollection();
    }

    /**
     * Set the value of id.
     *
     * @param integer $id
     * @return \LarpManager\Entities\Niveau
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
     * Set the value of niveau.
     *
     * @param integer $niveau
     * @return \LarpManager\Entities\Niveau
     */
    public function setNiveau($niveau)
    {
        $this->niveau = $niveau;

        return $this;
    }

    /**
     * Get the value of niveau.
     *
     * @return integer
     */
    public function getNiveau()
    {
        return $this->niveau;
    }

    /**
     * Set the value of label.
     *
     * @param string $label
     * @return \LarpManager\Entities\Niveau
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
     * Set the value of cout.
     *
     * @param integer $cout
     * @return \LarpManager\Entities\Niveau
     */
    public function setCout($cout)
    {
        $this->cout = $cout;

        return $this;
    }

    /**
     * Get the value of cout.
     *
     * @return integer
     */
    public function getCout()
    {
        return $this->cout;
    }

    /**
     * Set the value of cout_favori.
     *
     * @param integer $cout_favori
     * @return \LarpManager\Entities\Niveau
     */
    public function setCoutFavori($cout_favori)
    {
        $this->cout_favori = $cout_favori;

        return $this;
    }

    /**
     * Get the value of cout_favori.
     *
     * @return integer
     */
    public function getCoutFavori()
    {
        return $this->cout_favori;
    }

    /**
     * Set the value of cout_meconu.
     *
     * @param integer $cout_meconu
     * @return \LarpManager\Entities\Niveau
     */
    public function setCoutMeconu($cout_meconu)
    {
        $this->cout_meconu = $cout_meconu;

        return $this;
    }

    /**
     * Get the value of cout_meconu.
     *
     * @return integer
     */
    public function getCoutMeconu()
    {
        return $this->cout_meconu;
    }

    /**
     * Add CompetenceNiveau entity to collection (one to many).
     *
     * @param \LarpManager\Entities\CompetenceNiveau $competenceNiveau
     * @return \LarpManager\Entities\Niveau
     */
    public function addCompetenceNiveau(CompetenceNiveau $competenceNiveau)
    {
        $this->competenceNiveaus[] = $competenceNiveau;

        return $this;
    }

    /**
     * Remove CompetenceNiveau entity from collection (one to many).
     *
     * @param \LarpManager\Entities\CompetenceNiveau $competenceNiveau
     * @return \LarpManager\Entities\Niveau
     */
    public function removeCompetenceNiveau(CompetenceNiveau $competenceNiveau)
    {
        $this->competenceNiveaus->removeElement($competenceNiveau);

        return $this;
    }

    /**
     * Get CompetenceNiveau entity collection (one to many).
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCompetenceNiveaus()
    {
        return $this->competenceNiveaus;
    }

    public function __sleep()
    {
        return array('id', 'niveau', 'label', 'cout', 'cout_favori', 'cout_meconu');
    }
}