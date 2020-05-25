<?php
    class Car{
        private $id;
        private $marque;
        private $modele;
        private $energie;
	    private $automatique;
        /**
         * Article constructor.
         * @param $id
         * @param $marque
         * @param $modele
         * @param $energie
         * @param $automatique
         */
        public function __construct($id = null, $marque, $modele, $energie,$automatique)
        {
            $this->id = $id;
            $this->marque = $marque;
            $this->modele = $modele;
            $this->energie = $energie;
	        $this->automatique = $automatique;


        }


        /**
         * @return mixed
         */
        public function getId()
        {
            return $this->id;
        }

        /**
         * @param mixed $id
         */
        public function setId($id)
        {
            $this->id = $id;
        }

        /**
         * @return mixed
         */
        public function getMarque()
        {
            return $this->marque;
        }

	    /**
	     * @param mixed $marque
	     */
        public function setMarque($marque)
        {
            $this->marque = $marque;
        }

        /**
         * @return mixed
         */
        public function getModele()
        {
            return $this->contenu;
        }

	    /**
	     * @param mixed $modele
	     */
        public function setModele($modele)
        {
            $this->modele = $modele;
        }

        /**
         * @return mixed
         */
        public function getEnergie()
        {
            return $this->energie;
        }

        /**
         * @param mixed $energie
         */
        public function setEnergie($energie)
        {
            $this->energie = $energie;
        }
	    /**
	     * @return mixed
	     */
	    public function getAutomatique()
	    {
		    return $this->automatique;
	    }

	    /**
	     * @param mixed $automatique
	     */
	    public function setAutomatique($automatique)
	    {
		    $this->automatiquew = $automatique;
	    }
    }

