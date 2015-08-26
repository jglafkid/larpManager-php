<?php

/**
 * Auto generated by MySQL Workbench Schema Exporter.
 * Version 2.1.6-dev (doctrine2-annotation) on 2015-08-26 15:28:16.
 * Goto https://github.com/johmue/mysql-workbench-schema-exporter for more
 * information.
 */

namespace LarpManager\Entities;

use Doctrine\Common\Collections\ArrayCollection;

/**
 * LarpManager\Entities\Gn
 *
 * @Entity()
 * @Table(name="gn")
 * @InheritanceType("SINGLE_TABLE")
 * @DiscriminatorColumn(name="discr", type="string")
 * @DiscriminatorMap({"base":"BaseGn", "extended":"Gn"})
 */
class BaseGn
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
    protected $label;

    /**
     * @Column(type="integer", nullable=true)
     */
    protected $xp_creation;

    /**
     * @Column(type="text", nullable=true)
     */
    protected $description;

    /**
     * @Column(type="datetime", nullable=true)
     */
    protected $date_debut;

    /**
     * @Column(type="datetime", nullable=true)
     */
    protected $date_fin;

    /**
     * @Column(type="datetime", nullable=true)
     */
    protected $date_installation_joueur;

    /**
     * @Column(type="datetime", nullable=true)
     */
    protected $date_fin_orga;

    /**
     * @Column(type="string", length=45, nullable=true)
     */
    protected $adresse;

    /**
     * @ManyToMany(targetEntity="Joueur", mappedBy="gns", cascade={"persist"})
     */
    protected $joueurs;

    public function __construct()
    {
        $this->joueurs = new ArrayCollection();
    }

    /**
     * Set the value of id.
     *
     * @param integer $id
     * @return \LarpManager\Entities\Gn
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
     * @return \LarpManager\Entities\Gn
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
     * Set the value of xp_creation.
     *
     * @param integer $xp_creation
     * @return \LarpManager\Entities\Gn
     */
    public function setXpCreation($xp_creation)
    {
        $this->xp_creation = $xp_creation;

        return $this;
    }

    /**
     * Get the value of xp_creation.
     *
     * @return integer
     */
    public function getXpCreation()
    {
        return $this->xp_creation;
    }

    /**
     * Set the value of description.
     *
     * @param string $description
     * @return \LarpManager\Entities\Gn
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
     * Set the value of date_debut.
     *
     * @param \DateTime $date_debut
     * @return \LarpManager\Entities\Gn
     */
    public function setDateDebut($date_debut)
    {
        $this->date_debut = $date_debut;

        return $this;
    }

    /**
     * Get the value of date_debut.
     *
     * @return \DateTime
     */
    public function getDateDebut()
    {
        return $this->date_debut;
    }

    /**
     * Set the value of date_fin.
     *
     * @param \DateTime $date_fin
     * @return \LarpManager\Entities\Gn
     */
    public function setDateFin($date_fin)
    {
        $this->date_fin = $date_fin;

        return $this;
    }

    /**
     * Get the value of date_fin.
     *
     * @return \DateTime
     */
    public function getDateFin()
    {
        return $this->date_fin;
    }

    /**
     * Set the value of date_installation_joueur.
     *
     * @param \DateTime $date_installation_joueur
     * @return \LarpManager\Entities\Gn
     */
    public function setDateInstallationJoueur($date_installation_joueur)
    {
        $this->date_installation_joueur = $date_installation_joueur;

        return $this;
    }

    /**
     * Get the value of date_installation_joueur.
     *
     * @return \DateTime
     */
    public function getDateInstallationJoueur()
    {
        return $this->date_installation_joueur;
    }

    /**
     * Set the value of date_fin_orga.
     *
     * @param \DateTime $date_fin_orga
     * @return \LarpManager\Entities\Gn
     */
    public function setDateFinOrga($date_fin_orga)
    {
        $this->date_fin_orga = $date_fin_orga;

        return $this;
    }

    /**
     * Get the value of date_fin_orga.
     *
     * @return \DateTime
     */
    public function getDateFinOrga()
    {
        return $this->date_fin_orga;
    }

    /**
     * Set the value of adresse.
     *
     * @param string $adresse
     * @return \LarpManager\Entities\Gn
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;

        return $this;
    }

    /**
     * Get the value of adresse.
     *
     * @return string
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * Add Joueur entity to collection.
     *
     * @param \LarpManager\Entities\Joueur $joueur
     * @return \LarpManager\Entities\Gn
     */
    public function addJoueur(Joueur $joueur)
    {
        $this->joueurs[] = $joueur;

        return $this;
    }

    /**
     * Remove Joueur entity from collection.
     *
     * @param \LarpManager\Entities\Joueur $joueur
     * @return \LarpManager\Entities\Gn
     */
    public function removeJoueur(Joueur $joueur)
    {
        $this->joueurs->removeElement($joueur);

        return $this;
    }

    /**
     * Get Joueur entity collection.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getJoueurs()
    {
        return $this->joueurs;
    }

    public function __sleep()
    {
        return array('id', 'label', 'xp_creation', 'description', 'date_debut', 'date_fin', 'date_installation_joueur', 'date_fin_orga', 'adresse');
    }
}