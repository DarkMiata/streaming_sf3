<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Saison
 *
 * @ORM\Table(name="saison")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\SaisonRepository")
 */
class Saison
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
     * @ORM\joinColumn(name="serie_id")
     * @ORM\ManyToOne(targetEntity="Serie")
     */
    private $serie;
    
     /**
     * @ORM\OneToMany(targetEntity="episode", mappedBy="saison")
     */
    private $episode;
    
    /**
     * @var int
     *
     * @ORM\Column(name="numsaison", type="integer")
     */
    private $numsaison;

    /**
     * @var int
     *
     * @ORM\Column(name="nbepisodes", type="integer")
     */
    private $nbepisodes;


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
     * Set numsaison
     *
     * @param integer $numsaison
     *
     * @return Saison
     */
    public function setNumsaison($numsaison)
    {
        $this->numsaison = $numsaison;

        return $this;
    }

    /**
     * Get numsaison
     *
     * @return int
     */
    public function getNumsaison()
    {
        return $this->numsaison;
    }

    /**
     * Set nbepisodes
     *
     * @param integer $nbepisodes
     *
     * @return Saison
     */
    public function setNbepisodes($nbepisodes)
    {
        $this->nbepisodes = $nbepisodes;

        return $this;
    }

    /**
     * Get nbepisodes
     *
     * @return int
     */
    public function getNbepisodes()
    {
        return $this->nbepisodes;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->episode = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set serie
     *
     * @param \AppBundle\Entity\Serie $serie
     *
     * @return Saison
     */
    public function setSerie(\AppBundle\Entity\Serie $serie = null)
    {
        $this->serie = $serie;

        return $this;
    }

    /**
     * Get serie
     *
     * @return \AppBundle\Entity\Serie
     */
    public function getSerie()
    {
        return $this->serie;
    }

    /**
     * Add episode
     *
     * @param \AppBundle\Entity\episode $episode
     *
     * @return Saison
     */
    public function addEpisode(\AppBundle\Entity\episode $episode)
    {
        $this->episode[] = $episode;

        return $this;
    }

    /**
     * Remove episode
     *
     * @param \AppBundle\Entity\episode $episode
     */
    public function removeEpisode(\AppBundle\Entity\episode $episode)
    {
        $this->episode->removeElement($episode);
    }

    /**
     * Get episode
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getEpisode()
    {
        return $this->episode;
    }
}
