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
    
 // ====================================   
        /** ajout des realisateurs
     * @ORM\ManyToMany(targetEntity="Casting", inversedBy="filmsRealises")
     * @ORM\JoinTable(name="film_realises")
     */
    private $realisateurs;
    
    