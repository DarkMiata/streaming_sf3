<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Film
 *
 * @ORM\Table(name="film")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\FilmRepository")
 */
class Film
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
     * @ORM\JoinColumn(name="genre_id")
     * @ORM\ManyToOne(targetEntity="Genre")
     */
    private $genre;

    /**
     * @var string
     *
     * @ORM\Column(name="titre", type="string", length=64)
     */
    private $titre;

    /**
     * @var string
     *
     * @ORM\Column(name="synposis", type="text", nullable=true)
     */
    private $synposis;

    /**
     * @var int
     *
     * @ORM\Column(name="duree", type="integer")
     */
    private $duree;

    /**
     * @var int
     *
     * @ORM\Column(name="anneeprod", type="integer")
     */
    private $anneeprod;


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
     * @return Film
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
     * Set synposis
     *
     * @param string $synposis
     *
     * @return Film
     */
    public function setSynposis($synposis)
    {
        $this->synposis = $synposis;

        return $this;
    }

    /**
     * Get synposis
     *
     * @return string
     */
    public function getSynposis()
    {
        return $this->synposis;
    }

    /**
     * Set duree
     *
     * @param integer $duree
     *
     * @return Film
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
     * Set anneeprod
     *
     * @param integer $anneeprod
     *
     * @return Film
     */
    public function setAnneeprod($anneeprod)
    {
        $this->anneeprod = $anneeprod;

        return $this;
    }

    /**
     * Get anneeprod
     *
     * @return int
     */
    public function getAnneeprod()
    {
        return $this->anneeprod;
    }

    /**
     * Set genre
     *
     * @param \AppBundle\Entity\Genre $genre
     *
     * @return Film
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
}
