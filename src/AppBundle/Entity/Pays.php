<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Pays
 *
 * @ORM\Table(name="pays")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\PaysRepository")
 */
class Pays
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
     * @ORM\OneToMany(targetEntity="serie", mappedBy="pays")
     */
    private $serie;
    
    
     /**
     * @ORM\OneToMany(targetEntity="film", mappedBy="pays")
     */
    private $films;

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
     * Constructor
     */
    public function __construct()
    {
        $this->serie = new \Doctrine\Common\Collections\ArrayCollection();
        $this->films = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add serie
     *
     * @param \AppBundle\Entity\serie $serie
     *
     * @return Pays
     */
    public function addSerie(\AppBundle\Entity\serie $serie)
    {
        $this->serie[] = $serie;

        return $this;
    }

    /**
     * Remove serie
     *
     * @param \AppBundle\Entity\serie $serie
     */
    public function removeSerie(\AppBundle\Entity\serie $serie)
    {
        $this->serie->removeElement($serie);
    }

    /**
     * Get serie
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getSerie()
    {
        return $this->serie;
    }

    /**
     * Add film
     *
     * @param \AppBundle\Entity\film $film
     *
     * @return Pays
     */
    public function addFilm(\AppBundle\Entity\film $film)
    {
        $this->films[] = $film;

        return $this;
    }

    /**
     * Remove film
     *
     * @param \AppBundle\Entity\film $film
     */
    public function removeFilm(\AppBundle\Entity\film $film)
    {
        $this->films->removeElement($film);
    }

    /**
     * Get films
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getFilms()
    {
        return $this->films;
    }
}
