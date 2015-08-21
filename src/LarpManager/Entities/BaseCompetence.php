<?php

/**
 * Auto generated by MySQL Workbench Schema Exporter.
 * Version 2.1.6-dev (doctrine2-annotation) on 2015-08-21 10:51:34.
 * Goto https://github.com/johmue/mysql-workbench-schema-exporter for more
 * information.
 */

namespace LarpManager\Entities;

use Doctrine\Common\Collections\ArrayCollection;

/**
 * LarpManager\Entities\Competence
 *
 * @Entity()
 * @Table(name="competence", indexes={@Index(name="fk_competence_user1_idx", columns={"creator_id"})})
 * @InheritanceType("SINGLE_TABLE")
 * @DiscriminatorColumn(name="discr", type="string")
 * @DiscriminatorMap({"base":"BaseCompetence", "extended":"Competence"})
 */
class BaseCompetence
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
     * @Column(type="string", length=450, nullable=true)
     */
    protected $description;

    /**
     * @Column(type="datetime", nullable=true)
     */
    protected $creation_date;

    /**
     * @Column(type="datetime", nullable=true)
     */
    protected $update_date;

    /**
     * @OneToMany(targetEntity="CompetenceNiveau", mappedBy="competence")
     * @JoinColumn(name="id", referencedColumnName="competence_id")
     */
    protected $competenceNiveaus;

    /**
     * @OneToMany(targetEntity="PersonnageCompetence", mappedBy="competence")
     * @JoinColumn(name="id", referencedColumnName="competence_id")
     */
    protected $personnageCompetences;

    /**
     * @ManyToOne(targetEntity="User", inversedBy="competences")
     * @JoinColumn(name="creator_id", referencedColumnName="id")
     */
    protected $user;

    public function __construct()
    {
        $this->competenceNiveaus = new ArrayCollection();
        $this->personnageCompetences = new ArrayCollection();
    }

    /**
     * Set the value of id.
     *
     * @param integer $id
     * @return \LarpManager\Entities\Competence
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
     * @return \LarpManager\Entities\Competence
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
     * @return \LarpManager\Entities\Competence
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
     * Set the value of creation_date.
     *
     * @param \DateTime $creation_date
     * @return \LarpManager\Entities\Competence
     */
    public function setCreationDate($creation_date)
    {
        $this->creation_date = $creation_date;

        return $this;
    }

    /**
     * Get the value of creation_date.
     *
     * @return \DateTime
     */
    public function getCreationDate()
    {
        return $this->creation_date;
    }

    /**
     * Set the value of update_date.
     *
     * @param \DateTime $update_date
     * @return \LarpManager\Entities\Competence
     */
    public function setUpdateDate($update_date)
    {
        $this->update_date = $update_date;

        return $this;
    }

    /**
     * Get the value of update_date.
     *
     * @return \DateTime
     */
    public function getUpdateDate()
    {
        return $this->update_date;
    }

    /**
     * Add CompetenceNiveau entity to collection (one to many).
     *
     * @param \LarpManager\Entities\CompetenceNiveau $competenceNiveau
     * @return \LarpManager\Entities\Competence
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
     * @return \LarpManager\Entities\Competence
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

    /**
     * Add PersonnageCompetence entity to collection (one to many).
     *
     * @param \LarpManager\Entities\PersonnageCompetence $personnageCompetence
     * @return \LarpManager\Entities\Competence
     */
    public function addPersonnageCompetence(PersonnageCompetence $personnageCompetence)
    {
        $this->personnageCompetences[] = $personnageCompetence;

        return $this;
    }

    /**
     * Remove PersonnageCompetence entity from collection (one to many).
     *
     * @param \LarpManager\Entities\PersonnageCompetence $personnageCompetence
     * @return \LarpManager\Entities\Competence
     */
    public function removePersonnageCompetence(PersonnageCompetence $personnageCompetence)
    {
        $this->personnageCompetences->removeElement($personnageCompetence);

        return $this;
    }

    /**
     * Get PersonnageCompetence entity collection (one to many).
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getPersonnageCompetences()
    {
        return $this->personnageCompetences;
    }

    /**
     * Set User entity (many to one).
     *
     * @param \LarpManager\Entities\User $user
     * @return \LarpManager\Entities\Competence
     */
    public function setUser(User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get User entity (many to one).
     *
     * @return \LarpManager\Entities\User
     */
    public function getUser()
    {
        return $this->user;
    }

    public function __sleep()
    {
        return array('id', 'nom', 'description', 'creation_date', 'update_date', 'creator_id');
    }
}