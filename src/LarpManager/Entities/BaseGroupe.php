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
 * LarpManager\Entities\Groupe
 *
 * @Entity()
 * @Table(name="groupe", indexes={@Index(name="fk_groupe_users1_idx", columns={"scenariste_id"}), @Index(name="fk_groupe_user1_idx", columns={"creator_id"}), @Index(name="fk_groupe_user2_idx", columns={"responsable_id"}), @Index(name="fk_groupe_espace1_idx", columns={"territoire_id"})})
 * @InheritanceType("SINGLE_TABLE")
 * @DiscriminatorColumn(name="discr", type="string")
 * @DiscriminatorMap({"base":"BaseGroupe", "extended":"Groupe"})
 */
class BaseGroupe
{
    /**
     * @Id
     * @Column(type="integer")
     * @GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @Column(type="string", length=100, nullable=true)
     */
    protected $nom;

    /**
     * @Column(type="text", nullable=true)
     */
    protected $description;

    /**
     * @Column(type="integer")
     */
    protected $numero;

    /**
     * @Column(type="string", length=10, nullable=true)
     */
    protected $code;

    /**
     * @Column(type="boolean", nullable=true)
     */
    protected $jeu_maritime;

    /**
     * @Column(type="boolean", nullable=true)
     */
    protected $jeu_strategique;

    /**
     * @Column(type="datetime", nullable=true)
     */
    protected $creation_date;

    /**
     * @Column(type="datetime", nullable=true)
     */
    protected $update_date;

    /**
     * @Column(type="integer", nullable=true)
     */
    protected $classe_open;

    /**
     * @OneToMany(targetEntity="GroupeClasse", mappedBy="groupe", cascade={"persist"})
     * @JoinColumn(name="id", referencedColumnName="groupe_id")
     */
    protected $groupeClasses;

    /**
     * @OneToMany(targetEntity="Personnage", mappedBy="groupe")
     * @JoinColumn(name="id", referencedColumnName="groupe_id")
     */
    protected $personnages;

    /**
     * @ManyToOne(targetEntity="User", inversedBy="groupeRelatedByScenaristeIds")
     * @JoinColumn(name="scenariste_id", referencedColumnName="id", nullable=true)
     */
    protected $userRelatedByScenaristeId;

    /**
     * @ManyToOne(targetEntity="User", inversedBy="groupeRelatedByCreatorIds")
     * @JoinColumn(name="creator_id", referencedColumnName="id")
     */
    protected $userRelatedByCreatorId;

    /**
     * @ManyToOne(targetEntity="User", inversedBy="groupeRelatedByResponsableIds")
     * @JoinColumn(name="responsable_id", referencedColumnName="id")
     */
    protected $userRelatedByResponsableId;

    /**
     * @ManyToOne(targetEntity="Territoire", inversedBy="groupes")
     * @JoinColumn(name="territoire_id", referencedColumnName="id")
     */
    protected $territoire;

    /**
     * @ManyToMany(targetEntity="User", inversedBy="groupes", cascade={"persist"})
     * @JoinTable(name="groupe_user",
     *     joinColumns={@JoinColumn(name="groupe_id", referencedColumnName="id")},
     *     inverseJoinColumns={@JoinColumn(name="user_id", referencedColumnName="id")}
     * )
     */
    protected $users;

    public function __construct()
    {
        $this->groupeClasses = new ArrayCollection();
        $this->personnages = new ArrayCollection();
        $this->users = new ArrayCollection();
    }

    /**
     * Set the value of id.
     *
     * @param integer $id
     * @return \LarpManager\Entities\Groupe
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
     * @return \LarpManager\Entities\Groupe
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
     * @return \LarpManager\Entities\Groupe
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
     * Set the value of numero.
     *
     * @param integer $numero
     * @return \LarpManager\Entities\Groupe
     */
    public function setNumero($numero)
    {
        $this->numero = $numero;

        return $this;
    }

    /**
     * Get the value of numero.
     *
     * @return integer
     */
    public function getNumero()
    {
        return $this->numero;
    }

    /**
     * Set the value of code.
     *
     * @param string $code
     * @return \LarpManager\Entities\Groupe
     */
    public function setCode($code)
    {
        $this->code = $code;

        return $this;
    }

    /**
     * Get the value of code.
     *
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Set the value of jeu_maritime.
     *
     * @param boolean $jeu_maritime
     * @return \LarpManager\Entities\Groupe
     */
    public function setJeuMaritime($jeu_maritime)
    {
        $this->jeu_maritime = $jeu_maritime;

        return $this;
    }

    /**
     * Get the value of jeu_maritime.
     *
     * @return boolean
     */
    public function getJeuMaritime()
    {
        return $this->jeu_maritime;
    }

    /**
     * Set the value of jeu_strategique.
     *
     * @param boolean $jeu_strategique
     * @return \LarpManager\Entities\Groupe
     */
    public function setJeuStrategique($jeu_strategique)
    {
        $this->jeu_strategique = $jeu_strategique;

        return $this;
    }

    /**
     * Get the value of jeu_strategique.
     *
     * @return boolean
     */
    public function getJeuStrategique()
    {
        return $this->jeu_strategique;
    }

    /**
     * Set the value of creation_date.
     *
     * @param \DateTime $creation_date
     * @return \LarpManager\Entities\Groupe
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
     * @return \LarpManager\Entities\Groupe
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
     * Set the value of classe_open.
     *
     * @param integer $classe_open
     * @return \LarpManager\Entities\Groupe
     */
    public function setClasseOpen($classe_open)
    {
        $this->classe_open = $classe_open;

        return $this;
    }

    /**
     * Get the value of classe_open.
     *
     * @return integer
     */
    public function getClasseOpen()
    {
        return $this->classe_open;
    }

    /**
     * Add GroupeClasse entity to collection (one to many).
     *
     * @param \LarpManager\Entities\GroupeClasse $groupeClasse
     * @return \LarpManager\Entities\Groupe
     */
    public function addGroupeClasse(GroupeClasse $groupeClasse)
    {
        $this->groupeClasses[] = $groupeClasse;

        return $this;
    }

    /**
     * Remove GroupeClasse entity from collection (one to many).
     *
     * @param \LarpManager\Entities\GroupeClasse $groupeClasse
     * @return \LarpManager\Entities\Groupe
     */
    public function removeGroupeClasse(GroupeClasse $groupeClasse)
    {
        $this->groupeClasses->removeElement($groupeClasse);

        return $this;
    }

    /**
     * Get GroupeClasse entity collection (one to many).
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getGroupeClasses()
    {
        return $this->groupeClasses;
    }

    /**
     * Add Personnage entity to collection (one to many).
     *
     * @param \LarpManager\Entities\Personnage $personnage
     * @return \LarpManager\Entities\Groupe
     */
    public function addPersonnage(Personnage $personnage)
    {
        $this->personnages[] = $personnage;

        return $this;
    }

    /**
     * Remove Personnage entity from collection (one to many).
     *
     * @param \LarpManager\Entities\Personnage $personnage
     * @return \LarpManager\Entities\Groupe
     */
    public function removePersonnage(Personnage $personnage)
    {
        $this->personnages->removeElement($personnage);

        return $this;
    }

    /**
     * Get Personnage entity collection (one to many).
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getPersonnages()
    {
        return $this->personnages;
    }

    /**
     * Set User entity related by `scenariste_id` (many to one).
     *
     * @param \LarpManager\Entities\User $user
     * @return \LarpManager\Entities\Groupe
     */
    public function setUserRelatedByScenaristeId(User $user = null)
    {
        $this->userRelatedByScenaristeId = $user;

        return $this;
    }

    /**
     * Get User entity related by `scenariste_id` (many to one).
     *
     * @return \LarpManager\Entities\User
     */
    public function getUserRelatedByScenaristeId()
    {
        return $this->userRelatedByScenaristeId;
    }

    /**
     * Set User entity related by `creator_id` (many to one).
     *
     * @param \LarpManager\Entities\User $user
     * @return \LarpManager\Entities\Groupe
     */
    public function setUserRelatedByCreatorId(User $user = null)
    {
        $this->userRelatedByCreatorId = $user;

        return $this;
    }

    /**
     * Get User entity related by `creator_id` (many to one).
     *
     * @return \LarpManager\Entities\User
     */
    public function getUserRelatedByCreatorId()
    {
        return $this->userRelatedByCreatorId;
    }

    /**
     * Set User entity related by `responsable_id` (many to one).
     *
     * @param \LarpManager\Entities\User $user
     * @return \LarpManager\Entities\Groupe
     */
    public function setUserRelatedByResponsableId(User $user = null)
    {
        $this->userRelatedByResponsableId = $user;

        return $this;
    }

    /**
     * Get User entity related by `responsable_id` (many to one).
     *
     * @return \LarpManager\Entities\User
     */
    public function getUserRelatedByResponsableId()
    {
        return $this->userRelatedByResponsableId;
    }

    /**
     * Set Territoire entity (many to one).
     *
     * @param \LarpManager\Entities\Territoire $territoire
     * @return \LarpManager\Entities\Groupe
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
     * Add User entity to collection.
     *
     * @param \LarpManager\Entities\User $user
     * @return \LarpManager\Entities\Groupe
     */
    public function addUser(User $user)
    {
        $user->addGroupe($this);
        $this->users[] = $user;

        return $this;
    }

    /**
     * Remove User entity from collection.
     *
     * @param \LarpManager\Entities\User $user
     * @return \LarpManager\Entities\Groupe
     */
    public function removeUser(User $user)
    {
        $user->removeGroupe($this);
        $this->users->removeElement($user);

        return $this;
    }

    /**
     * Get User entity collection.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getUsers()
    {
        return $this->users;
    }

    public function __sleep()
    {
        return array('id', 'nom', 'description', 'numero', 'code', 'jeu_maritime', 'jeu_strategique', 'scenariste_id', 'creation_date', 'update_date', 'creator_id', 'classe_open', 'responsable_id', 'territoire_id');
    }
}