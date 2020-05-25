<?php
    class CarManager extends DbManager {
        public function __construct()
        {
            parent::__construct();
        }

        public function selectAll()
        {
            $cars = [];
            $sql =  'SELECT * FROM cars ORDER BY id';
            foreach  ($this->bdd->query($sql) as $row) {
                $cars[] = new Car($row['id'], $row['marque'], $row['marque'], $row['energie'], $row['automatique']);
            }

            return $cars;
        }

        public function insert(Car $car)
        {
            $marque = $car->getMarque();
            $modele = $car->getModele();
            $energie = $car->getEnergie();
	        $automatique = $car->getAutomatique();

	        $requete = $this->bdd->prepare("INSERT INTO cars (marque, contenu, energie, atomatique) VALUES (?,?,?,?)");
            $requete->bindParam(1, $marque);
            $requete->bindParam(2, $modele);
            $requete->bindParam(3, $energie);
	        $requete->bindParam(4, $automatique);

	        $requete->execute();
            $car->setId($this->bdd->lastInsertId());
        }

        public function delete($id)
        {
            $requete = $this->bdd->prepare("DELETE FROM cars where id = ?");
            $requete->bindParam(1,$id);
            $requete->execute();
        }

        public function select($id)
        {
            $requete = $this->bdd->prepare("SELECT * FROM cars WHERE id=?");
            $requete->bindParam(1, $id);
            $requete->execute();
            $res = $requete->fetch();
            $car = new Car($res['id'], $res['titre'], $res['contenu'], $res['energie'], $res['automatique']);

            return $car;
        }

        public function update(Car $car)
        {
            $marque = $car->getMarque();
            $modele = $car->getModele();
            $energie = $car->getEnergie();
	        $automatique = $car->getAutomatique();
	        $id = $car->getId();
            $requete = $this->bdd->prepare("UPDATE  cars SET marque =?, modele = ?, energie = ?, automatique = ? WHERE id = ?");
            $requete->bindParam(1, $marque);
            $requete->bindParam(2, $modele);
            $requete->bindParam(3, $energie);
	        $requete->bindParam(4, $automatique);

	        $requete->bindParam(5, $id);
            $requete->execute();
        }

    }
?>