<?php

// A effacer

     /**
     * @ORM\joinColumn(name="film_id")
     * @ORM\ManyToOne(targetEntity="Film")
     */
    private $film;
    
// =====================================
    
     /**
     * @ORM\OneToMany(targetEntity="film", mappedBy="genre")
     */
    private $films;
    
    