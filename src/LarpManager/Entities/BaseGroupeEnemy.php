<?php

/**
 * Auto generated by MySQL Workbench Schema Exporter.
 * Version 2.1.6-dev (doctrine2-annotation) on 2016-03-22 16:58:37.
 * Goto https://github.com/johmue/mysql-workbench-schema-exporter for more
 * information.
 */

namespace LarpManager\Entities;

/**
 * LarpManager\Entities\GroupeEnemy
 *
 * @Entity()
 * @Table(name="groupe_enemy", indexes={@Index(name="fk_groupe_enemy_groupe1_idx", columns={"groupe_id"}), @Index(name="fk_groupe_enemy_groupe2_idx", columns={"groupe_enemy_id"})})
 * @InheritanceType("SINGLE_TABLE")
 * @DiscriminatorColumn(name="discr", type="string")
 * @DiscriminatorMap({"base":"BaseGroupeEnemy", "extended":"GroupeEnemy"})
 */
class BaseGroupeEnemy
{
    /**
     * @Id
     * @Column(type="integer")
     * @GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @Column(type="boolean")
     */
    protected $groupe_peace;

    /**
     * @Column(type="boolean")
     */
    protected $groupe_enemy_peace;

    /**
     * @Column(type="text", nullable=true)
     */
    protected $message;

    /**
     * @Column(type="text", nullable=true)
     */
    protected $message_enemy;

    /**
     * @ManyToOne(targetEntity="Groupe", inversedBy="groupeEnemyRelatedByGroupeIds")
     * @JoinColumn(name="groupe_id", referencedColumnName="id", nullable=false)
     */
    protected $groupeRelatedByGroupeId;

    /**
     * @ManyToOne(targetEntity="Groupe", inversedBy="groupeEnemyRelatedByGroupeEnemyIds")
     * @JoinColumn(name="groupe_enemy_id", referencedColumnName="id", nullable=false)
     */
    protected $groupeRelatedByGroupeEnemyId;

    public function __construct()
    {
    }

    /**
     * Set the value of id.
     *
     * @param integer $id
     * @return \LarpManager\Entities\GroupeEnemy
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
     * Set the value of groupe_peace.
     *
     * @param boolean $groupe_peace
     * @return \LarpManager\Entities\GroupeEnemy
     */
    public function setGroupePeace($groupe_peace)
    {
        $this->groupe_peace = $groupe_peace;

        return $this;
    }

    /**
     * Get the value of groupe_peace.
     *
     * @return boolean
     */
    public function getGroupePeace()
    {
        return $this->groupe_peace;
    }

    /**
     * Set the value of groupe_enemy_peace.
     *
     * @param boolean $groupe_enemy_peace
     * @return \LarpManager\Entities\GroupeEnemy
     */
    public function setGroupeEnemyPeace($groupe_enemy_peace)
    {
        $this->groupe_enemy_peace = $groupe_enemy_peace;

        return $this;
    }

    /**
     * Get the value of groupe_enemy_peace.
     *
     * @return boolean
     */
    public function getGroupeEnemyPeace()
    {
        return $this->groupe_enemy_peace;
    }

    /**
     * Set the value of message.
     *
     * @param string $message
     * @return \LarpManager\Entities\GroupeEnemy
     */
    public function setMessage($message)
    {
        $this->message = $message;

        return $this;
    }

    /**
     * Get the value of message.
     *
     * @return string
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * Set the value of message_enemy.
     *
     * @param string $message_enemy
     * @return \LarpManager\Entities\GroupeEnemy
     */
    public function setMessageEnemy($message_enemy)
    {
        $this->message_enemy = $message_enemy;

        return $this;
    }

    /**
     * Get the value of message_enemy.
     *
     * @return string
     */
    public function getMessageEnemy()
    {
        return $this->message_enemy;
    }

    /**
     * Set Groupe entity related by `groupe_id` (many to one).
     *
     * @param \LarpManager\Entities\Groupe $groupe
     * @return \LarpManager\Entities\GroupeEnemy
     */
    public function setGroupeRelatedByGroupeId(Groupe $groupe = null)
    {
        $this->groupeRelatedByGroupeId = $groupe;

        return $this;
    }

    /**
     * Get Groupe entity related by `groupe_id` (many to one).
     *
     * @return \LarpManager\Entities\Groupe
     */
    public function getGroupeRelatedByGroupeId()
    {
        return $this->groupeRelatedByGroupeId;
    }

    /**
     * Set Groupe entity related by `groupe_enemy_id` (many to one).
     *
     * @param \LarpManager\Entities\Groupe $groupe
     * @return \LarpManager\Entities\GroupeEnemy
     */
    public function setGroupeRelatedByGroupeEnemyId(Groupe $groupe = null)
    {
        $this->groupeRelatedByGroupeEnemyId = $groupe;

        return $this;
    }

    /**
     * Get Groupe entity related by `groupe_enemy_id` (many to one).
     *
     * @return \LarpManager\Entities\Groupe
     */
    public function getGroupeRelatedByGroupeEnemyId()
    {
        return $this->groupeRelatedByGroupeEnemyId;
    }

    public function __sleep()
    {
        return array('id', 'groupe_id', 'groupe_enemy_id', 'groupe_peace', 'groupe_enemy_peace', 'message', 'message_enemy');
    }
}