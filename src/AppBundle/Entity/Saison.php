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
}
