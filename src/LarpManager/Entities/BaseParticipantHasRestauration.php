<?php

/**
 * Auto generated by MySQL Workbench Schema Exporter.
 * Version 2.1.6-dev (doctrine2-annotation) on 2017-01-19 11:27:09.
 * Goto https://github.com/johmue/mysql-workbench-schema-exporter for more
 * information.
 */

namespace LarpManager\Entities;

/**
 * LarpManager\Entities\ParticipantHasRestauration
 *
 * @Entity()
 * @Table(name="participant_has_restauration", indexes={@Index(name="fk_participant_has_restauration_participant1_idx", columns={"participant_id"}), @Index(name="fk_participant_has_restauration_restauration1_idx", columns={"restauration_id"})})
 * @InheritanceType("SINGLE_TABLE")
 * @DiscriminatorColumn(name="discr", type="string")
 * @DiscriminatorMap({"base":"BaseParticipantHasRestauration", "extended":"ParticipantHasRestauration"})
 */
class BaseParticipantHasRestauration
{
    /**
     * @Id
     * @Column(type="integer", options={"unsigned":true})
     * @GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @Column(name="`date`", type="datetime")
     */
    protected $date;

    /**
     * @ManyToOne(targetEntity="Participant", inversedBy="participantHasRestaurations", cascade={"persist", "remove"})
     * @JoinColumn(name="participant_id", referencedColumnName="id", nullable=false)
     */
    protected $participant;

    /**
     * @ManyToOne(targetEntity="Restauration", inversedBy="participantHasRestaurations")
     * @JoinColumn(name="restauration_id", referencedColumnName="id", nullable=false)
     */
    protected $restauration;

    public function __construct()
    {
    }

    /**
     * Set the value of id.
     *
     * @param integer $id
     * @return \LarpManager\Entities\ParticipantHasRestauration
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
     * Set the value of date.
     *
     * @param \DateTime $date
     * @return \LarpManager\Entities\ParticipantHasRestauration
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get the value of date.
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set Participant entity (many to one).
     *
     * @param \LarpManager\Entities\Participant $participant
     * @return \LarpManager\Entities\ParticipantHasRestauration
     */
    public function setParticipant(Participant $participant = null)
    {
        $this->participant = $participant;

        return $this;
    }

    /**
     * Get Participant entity (many to one).
     *
     * @return \LarpManager\Entities\Participant
     */
    public function getParticipant()
    {
        return $this->participant;
    }

    /**
     * Set Restauration entity (many to one).
     *
     * @param \LarpManager\Entities\Restauration $restauration
     * @return \LarpManager\Entities\ParticipantHasRestauration
     */
    public function setRestauration(Restauration $restauration = null)
    {
        $this->restauration = $restauration;

        return $this;
    }

    /**
     * Get Restauration entity (many to one).
     *
     * @return \LarpManager\Entities\Restauration
     */
    public function getRestauration()
    {
        return $this->restauration;
    }

    public function __sleep()
    {
        return array('id', 'participant_id', 'restauration_id', 'date');
    }
}