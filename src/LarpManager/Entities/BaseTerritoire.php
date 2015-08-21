<?php

/**
 * Auto generated by MySQL Workbench Schema Exporter.
 * Version 2.1.6-dev (doctrine2-annotation) on 2015-08-21 10:51:35.
 * Goto https://github.com/johmue/mysql-workbench-schema-exporter for more
 * information.
 */

namespace LarpManager\Entities;

use Doctrine\Common\Collections\ArrayCollection;

/**
 * LarpManager\Entities\Territoire
 *
 * @Entity()
 * @Table(name="territoire", indexes={@Index(name="fk_zone_politique_zone_politique1_idx", columns={"territoire_id"}), @Index(name="fk_zone_politique_background1_idx", columns={"background_id"}), @Index(name="fk_territoire_territoire_guerre1_idx", columns={"territoire_guerre_id"}), @Index(name="fk_territoire_appelation1_idx", columns={"appelation_id"}), @Index(name="fk_territoire_langue1_idx", columns={"langue_id"})})
 * @InheritanceType("SINGLE_TABLE")
 * @DiscriminatorColumn(name="discr", type="string")
 * @DiscriminatorMap({"base":"BaseTerritoire", "extended":"Territoire"})
 */
class BaseTerritoire
{
    /**
     * @Id
     * @Column(type="integer")
     * @GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @Column(type="string", length=45)
     */
    protected $nom;

    /**
     * @Column(type="text", nullable=true)
     */
    protected $description;

    /**
     * @Column(type="string", length=45, nullable=true)
     */
    protected $capitale;

    /**
     * @Column(type="string", length=45, nullable=true)
     */
    protected $politique;

    /**
     * @Column(type="string", length=45, nullable=true)
     */
    protected $dirigeant;

    /**
     * @Column(type="string", length=45, nullable=true)
     */
    protected $population;

    /**
     * @Column(type="string", length=45, nullable=true)
     */
    protected $symbole;

    /**
     * @Column(type="string", length=45, nullable=true)
     */
    protected $tech_level;

    /**
     * @OneToMany(targetEntity="Chronologie", mappedBy="territoire")
     * @JoinColumn(name="id", referencedColumnName="zone_politique_id")
     */
    protected $chronologies;

    /**
     * @OneToMany(targetEntity="Groupe", mappedBy="territoire")
     * @JoinColumn(name="id", referencedColumnName="territoire_id")
     */
    protected $groupes;

    /**
     * @OneToMany(targetEntity="Territoire", mappedBy="territoire")
     * @JoinColumn(name="id", referencedColumnName="territoire_id")
     */
    protected $territoires;

    /**
     * @ManyToOne(targetEntity="Territoire", inversedBy="territoires")
     * @JoinColumn(name="territoire_id", referencedColumnName="id", nullable=true)
     */
    protected $territoire;

    /**
     * @ManyToOne(targetEntity="Background", inversedBy="territoires")
     * @JoinColumn(name="background_id", referencedColumnName="id", nullable=true)
     */
    protected $background;

    /**
     * @OneToOne(targetEntity="TerritoireGuerre", inversedBy="territoire")
     * @JoinColumn(name="territoire_guerre_id", referencedColumnName="id")
     */
    protected $territoireGuerre;

    /**
     * @ManyToOne(targetEntity="Appelation", inversedBy="territoires")
     * @JoinColumn(name="appelation_id", referencedColumnName="id")
     */
    protected $appelation;

    /**
     * @ManyToOne(targetEntity="Langue", inversedBy="territoires")
     * @JoinColumn(name="langue_id", referencedColumnName="id")
     */
    protected $langue;

    public function __construct()
    {
        $this->chronologies = new ArrayCollection();
        $this->groupes = new ArrayCollection();
        $this->territoires = new ArrayCollection();
    }

    /**
     * Set the value of id.
     *
     * @param integer $id
     * @return \LarpManager\Entities\Territoire
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
     * Set the value of nom.
     *
     * @param string $nom
     * @return \LarpManager\Entities\Territoire
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get the value of nom.
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set the value of description.
     *
     * @param string $description
     * @return \LarpManager\Entities\Territoire
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get the value of description.
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set the value of capitale.
     *
     * @param string $capitale
     * @return \LarpManager\Entities\Territoire
     */
    public function setCapitale($capitale)
    {
        $this->capitale = $capitale;

        return $this;
    }

    /**
     * Get the value of capitale.
     *
     * @return string
     */
    public function getCapitale()
    {
        return $this->capitale;
    }

    /**
     * Set the value of politique.
     *
     * @param string $politique
     * @return \LarpManager\Entities\Territoire
     */
    public function setPolitique($politique)
    {
        $this->politique = $politique;

        return $this;
    }

    /**
     * Get the value of politique.
     *
     * @return string
     */
    public function getPolitique()
    {
        return $this->politique;
    }

    /**
     * Set the value of dirigeant.
     *
     * @param string $dirigeant
     * @return \LarpManager\Entities\Territoire
     */
    public function setDirigeant($dirigeant)
    {
        $this->dirigeant = $dirigeant;

        return $this;
    }

    /**
     * Get the value of dirigeant.
     *
     * @return string
     */
    public function getDirigeant()
    {
        return $this->dirigeant;
    }

    /**
     * Set the value of population.
     *
     * @param string $population
     * @return \LarpManager\Entities\Territoire
     */
    public function setPopulation($population)
    {
        $this->population = $population;

        return $this;
    }

    /**
     * Get the value of population.
     *
     * @return string
     */
    public function getPopulation()
    {
        return $this->population;
    }

    /**
     * Set the value of symbole.
     *
     * @param string $symbole
     * @return \LarpManager\Entities\Territoire
     */
    public function setSymbole($symbole)
    {
        $this->symbole = $symbole;

        return $this;
    }

    /**
     * Get the value of symbole.
     *
     * @return string
     */
    public function getSymbole()
    {
        return $this->symbole;
    }

    /**
     * Set the value of tech_level.
     *
     * @param string $tech_level
     * @return \LarpManager\Entities\Territoire
     */
    public function setTechLevel($tech_level)
    {
        $this->tech_level = $tech_level;

        return $this;
    }

    /**
     * Get the value of tech_level.
     *
     * @return string
     */
    public function getTechLevel()
    {
        return $this->tech_level;
    }

    /**
     * Add Chronologie entity to collection (one to many).
     *
     * @param \LarpManager\Entities\Chronologie $chronologie
     * @return \LarpManager\Entities\Territoire
     */
    public function addChronologie(Chronologie $chronologie)
    {
        $this->chronologies[] = $chronologie;

        return $this;
    }

    /**
     * Remove Chronologie entity from collection (one to many).
     *
     * @param \LarpManager\Entities\Chronologie $chronologie
     * @return \LarpManager\Entities\Territoire
     */
    public function removeChronologie(Chronologie $chronologie)
    {
        $this->chronologies->removeElement($chronologie);

        return $this;
    }

    /**
     * Get Chronologie entity collection (one to many).
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getChronologies()
    {
        return $this->chronologies;
    }

    /**
     * Add Groupe entity to collection (one to many).
     *
     * @param \LarpManager\Entities\Groupe $groupe
     * @return \LarpManager\Entities\Territoire
     */
    public function addGroupe(Groupe $groupe)
    {
        $this->groupes[] = $groupe;

        return $this;
    }

    /**
     * Remove Groupe entity from collection (one to many).
     *
     * @param \LarpManager\Entities\Groupe $groupe
     * @return \LarpManager\Entities\Territoire
     */
    public function removeGroupe(Groupe $groupe)
    {
        $this->groupes->removeElement($groupe);

        return $this;
    }

    /**
     * Get Groupe entity collection (one to many).
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getGroupes()
    {
        return $this->groupes;
    }

    /**
     * Add Territoire entity to collection (one to many).
     *
     * @param \LarpManager\Entities\Territoire $territoire
     * @return \LarpManager\Entities\Territoire
     */
    public function addTerritoire(Territoire $territoire)
    {
        $this->territoires[] = $territoire;

        return $this;
    }

    /**
     * Remove Territoire entity from collection (one to many).
     *
     * @param \LarpManager\Entities\Territoire $territoire
     * @return \LarpManager\Entities\Territoire
     */
    public function removeTerritoire(Territoire $territoire)
    {
        $this->territoires->removeElement($territoire);

        return $this;
    }

    /**
     * Get Territoire entity collection (one to many).
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getTerritoires()
    {
        return $this->territoires;
    }

    /**
     * Set Territoire entity (many to one).
     *
     * @param \LarpManager\Entities\Territoire $territoire
     * @return \LarpManager\Entities\Territoire
     */
    public function setTerritoire(Territoire $territoire = null)
    {
        $this->territoire = $territoire;

        return $this;
    }

    /**
     * Get Territoire entity (many to one).
     *
     * @return \LarpManager\Entities\Territoire
     */
    public function getTerritoire()
    {
        return $this->territoire;
    }

    /**
     * Set Background entity (many to one).
     *
     * @param \LarpManager\Entities\Background $background
     * @return \LarpManager\Entities\Territoire
     */
    public function setBackground(Background $background = null)
    {
        $this->background = $background;

        return $this;
    }

    /**
     * Get Background entity (many to one).
     *
     * @return \LarpManager\Entities\Background
     */
    public function getBackground()
    {
        return $this->background;
    }

    /**
     * Set TerritoireGuerre entity (one to one).
     *
     * @param \LarpManager\Entities\TerritoireGuerre $territoireGuerre
     * @return \LarpManager\Entities\Territoire
     */
    public function setTerritoireGuerre(TerritoireGuerre $territoireGuerre)
    {
        $this->territoireGuerre = $territoireGuerre;

        return $this;
    }

    /**
     * Get TerritoireGuerre entity (one to one).
     *
     * @return \LarpManager\Entities\TerritoireGuerre
     */
    public function getTerritoireGuerre()
    {
        return $this->territoireGuerre;
    }

    /**
     * Set Appelation entity (many to one).
     *
     * @param \LarpManager\Entities\Appelation $appelation
     * @return \LarpManager\Entities\Territoire
     */
    public function setAppelation(Appelation $appelation = null)
    {
        $this->appelation = $appelation;

        return $this;
    }

    /**
     * Get Appelation entity (many to one).
     *
     * @return \LarpManager\Entities\Appelation
     */
    public function getAppelation()
    {
        return $this->appelation;
    }

    /**
     * Set Langue entity (many to one).
     *
     * @param \LarpManager\Entities\Langue $langue
     * @return \LarpManager\Entities\Territoire
     */
    public function setLangue(Langue $langue = null)
    {
        $this->langue = $langue;

        return $this;
    }

    /**
     * Get Langue entity (many to one).
     *
     * @return \LarpManager\Entities\Langue
     */
    public function getLangue()
    {
        return $this->langue;
    }

    public function __sleep()
    {
        return array('id', 'nom', 'description', 'capitale', 'politique', 'dirigeant', 'population', 'symbole', 'tech_level', 'territoire_id', 'background_id', 'territoire_guerre_id', 'appelation_id', 'langue_id');
    }
}