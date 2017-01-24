<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Episode
 *
 * @ORM\Table(name="episode")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\EpisodeRepository")
 */
class Episode
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

     /**
     * @ORM\joinColumn(name="saison_id")
     * @ORM\ManyToOne(targetEntity="Saison")
     */
    private $saison;

    
    /**
     * @ORM\OneToMany(targetEntity="lien", mappedBy="episode")
     */
    private $lien;
    
    /**
     * @var int
     *
     * @ORM\Column(name="numepisode", type="integer")
     */
    private $numepisode;

    /**
     * @var int
     *
     * @ORM\Column(name="duree", type="integer")
     */
    private $duree;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set numepisode
     *
     * @param integer $numepisode
     *
     * @return Episode
     */
    public function setNumepisode($numepisode)
    {
        $this->numepisode = $numepisode;

        return $this;
    }

    /**
     * Get numepisode
     *
     * @return int
     */
    public function getNumepisode()
    {
        return $this->numepisode;
    }

    /**
     * Set duree
     *
     * @param integer $duree
     *
     * @return Episode
     */
    public function setDuree($duree)
    {
        $this->duree = $duree;

        return $this;
    }

    /**
     * Get duree
     *
     * @return int
     */
    public function getDuree()
    {
        return $this->duree;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->lien = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add lien
     *
     * @param \AppBundle\Entity\lien $lien
     *
     * @return Episode
     */
    public function addLien(\AppBundle\Entity\lien $lien)
    {
        $this->lien[] = $lien;

        return $this;
    }

    /**
     * Remove lien
     *
     * @param \AppBundle\Entity\lien $lien
     */
    public function removeLien(\AppBundle\Entity\lien $lien)
    {
        $this->lien->removeElement($lien);
    }

    /**
     * Get lien
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getLien()
    {
        return $this->lien;
    }

    /**
     * Set saison
     *
     * @param \AppBundle\Entity\Saison $saison
     *
     * @return Episode
     */
    public function setSaison(\AppBundle\Entity\Saison $saison = null)
    {
        $this->saison = $saison;

        return $this;
    }

    /**
     * Get saison
     *
     * @return \AppBundle\Entity\Saison
     */
    public function getSaison()
    {
        return $this->saison;
    }
}
