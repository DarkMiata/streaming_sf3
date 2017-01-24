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
}

