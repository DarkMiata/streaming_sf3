<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Serie
 *
 * @ORM\Table(name="serie")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\SerieRepository")
 */
class Serie
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
     * @ORM\joinColumn(name="genre_id")
     * @ORM\ManyToOne(targetEntity="Genre")
     */
    private $genre;  
    
     /**
     * @ORM\joinColumn(name="pays_id")
     * @ORM\ManyToOne(targetEntity="Pays")
     */
    private $pays;
    
     /**
     * @ORM\OneToMany(targetEntity="saison", mappedBy="serie")
     */
    private $saison;
    
    /**
     * @var string
     *
     * @ORM\Column(name="titre", type="string", length=64)
     */
    private $titre;

    /**
     * @var string
     *
     * @ORM\Column(name="synopsis", type="text")
     */
    private $synopsis;

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
     * Set titre
     *
     * @param string $titre
     *
     * @return Serie
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;

        return $this;
    }

    /**
     * Get titre
     *
     * @return string
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * Set synopsis
     *
     * @param string $synopsis
     *
     * @return Serie
     */
    public function setSynopsis($synopsis)
    {
        $this->synopsis = $synopsis;

        return $this;
    }

    /**
     * Get synopsis
     *
     * @return string
     */
    public function getSynopsis()
    {
        return $this->synopsis;
    }

    /**
     * Set nbepisodes
     *
     * @param integer $nbepisodes
     *
     * @return Serie
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
        $this->saison = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set genre
     *
     * @param \AppBundle\Entity\Genre $genre
     *
     * @return Serie
     */
    public function setGenre(\AppBundle\Entity\Genre $genre = null)
    {
        $this->genre = $genre;

        return $this;
    }

    /**
     * Get genre
     *
     * @return \AppBundle\Entity\Genre
     */
    public function getGenre()
    {
        return $this->genre;
    }

    /**
     * Set pays
     *
     * @param \AppBundle\Entity\Pays $pays
     *
     * @return Serie
     */
    public function setPays(\AppBundle\Entity\Pays $pays = null)
    {
        $this->pays = $pays;

        return $this;
    }

    /**
     * Get pays
     *
     * @return \AppBundle\Entity\Pays
     */
    public function getPays()
    {
        return $this->pays;
    }

    /**
     * Add saison
     *
     * @param \AppBundle\Entity\saison $saison
     *
     * @return Serie
     */
    public function addSaison(\AppBundle\Entity\saison $saison)
    {
        $this->saison[] = $saison;

        return $this;
    }

    /**
     * Remove saison
     *
     * @param \AppBundle\Entity\saison $saison
     */
    public function removeSaison(\AppBundle\Entity\saison $saison)
    {
        $this->saison->removeElement($saison);
    }

    /**
     * Get saison
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getSaison()
    {
        return $this->saison;
    }
}
