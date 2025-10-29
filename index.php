<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise sur POO</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1>Des exercises pratiques sur programmation orientée objet [POO]</h1>
    <h2>📆Jour-1</h2>
    <section>
        <h3>Exercise-1: Créez une classe JeuVideo avec nom, prix et plateforme. Instanciez "Call of Duty" à 60€ sur PS5.</h3>

        <?php
         class JeuVideo
        {
            // Propriétés de la classe
            private string $nom;
            private float $prix;
            private string $plateforme;

            // Constructeur pour initialiser les propriétés
            public function __construct(string $nom, float $prix, string $plateforme)
            {
                $this->nom = $nom;
                $this->prix = $prix;
                $this->plateforme = $plateforme;
            }

            // Méthode pour afficher les informations du jeu
            public function afficherInfos(): void
            {
                echo "Nom du jeu : " . $this->nom . "<br>";
                echo "Prix : " . $this->prix . " €<br>";
                echo "Plateforme : " . $this->plateforme . "<br>";
            }
        }

        // Instanciation d’un objet JeuVideo
        $jeu1 = new JeuVideo("Call of Duty", 60, "PS5");

        // Appel de la méthode pour afficher les infos du jeu
        $jeu1->afficherInfos();
        ?>
    </section>

    <section>
        <h3>Exercise-2: Ajoutez une méthode pour vérifier si le jeu est en stock. Si stock < 1, afficher "Rupture" .</h3>
                <?php
                class JeuVideo_1
                {
                    //vproppriétés de la classe
                    private string $nom;
                    private float $prix;
                    private string $plateforme;
                    private int $stock;

                    // constructeur pour initialiser les propriétés
                    public function __construct(string $nom, float $prix, string $plateforme, int $stock)
                    {
                        $this->nom = $nom;
                        $this->prix = $prix;
                        $this->plateforme = $plateforme;
                        $this->stock = $stock;
                    }

                    // méthode pour afficher les informations du jeu
                    public function afficherInfos(): void
                    {
                        echo "Nom du jeu : " . $this->nom . "<br>";
                        echo "Prix : " . $this->prix . " €<br>";
                        echo "Plateforme : " . $this->plateforme . "<br>";
                        echo "Stock : " . $this->stock . "<br>";
                    }

                    // méthode pour vérifier le stock
                    public function verifierStock(): void
                    {
                        if ($this->stock < 1) {
                            echo "❌ Rupture de stock<br>";
                        } else {
                            echo "✅ En stock (" . $this->stock . " disponibles)<br>";
                        }
                    }
                }

                // Instanciation de l’objet avec un stock donné
                $jeu1 = new JeuVideo_1("Call of Duty", 60, "PS5", 3);
                $jeu2 = new JeuVideo_1("FIFA 25", 70, "PS5", 0);

                // Affichage des infos et vérification du stock
                $jeu1->afficherInfos();
                $jeu1->verifierStock();

                echo "<hr>";

                $jeu2->afficherInfos();
                $jeu2->verifierStock();
                ?>

    </section>

    <section>
        <h3>Exercise-3: Créez 5 jeux différents et affichez leurs informations complètes. </h3>
                <?php
                class JeuVideo2
                {
                    private string $nom;
                    private float $prix;
                    private string $plateforme;
                    private int $stock;
                
                    public function __construct(string $nom, float $prix, string $plateforme, int $stock)
                    {
                        $this->nom = $nom;
                        $this->prix = $prix;
                        $this->plateforme = $plateforme;
                        $this->stock = $stock;
                    }
                
                    public function afficherInfos(): void
                    {
                        echo "<div style='border:1px solid #ccc; padding:10px; margin-bottom:10px; border-radius:8px;'>";
                        echo "<strong>Nom du jeu :</strong> " . $this->nom . "<br>";
                        echo "<strong>Prix :</strong> " . $this->prix . " €<br>";
                        echo "<strong>Plateforme :</strong> " . $this->plateforme . "<br>";
                        echo "<strong>Stock :</strong> " . $this->stock . "<br>";
                        echo "</div>";
                    }
                
                    public function verifierStock(): void
                    {
                        if ($this->stock < 1) {
                            echo "❌ Rupture de stock<br>";
                        } else {
                            echo "✅ En stock (" . $this->stock . " disponibles)<br>";
                        }
                    }
                }
                
                // Création de plusieurs jeux (instances)
                $catalogue = [
                    new JeuVideo2("Call of Duty", 60, "PS5", 3),
                    new JeuVideo2("FIFA 25", 70, "PS5", 5),
                    new JeuVideo2("Tears of the Kingdom", 59.99, "Nintendo Switch", 2),
                    new JeuVideo2("GTA VI", 89.99, "PS5", 0),
                    new JeuVideo2("Elden Ring", 49.99, "PC", 4),
                ];
                
                // Affichage du catalogue avec une boucle foreach
                echo "<h2>🎮 Catalogue de jeux vidéo</h2>";
                
                foreach ($catalogue as $jeu) {
                    $jeu->afficherInfos();
                    $jeu->verifierStock();
                    echo "<hr>";
                }
                
                ?>

    </section>

     <h2>📆Jour-2</h2>
    <section>
        <h3>Exercise-1: Rendez les propriétés privées et créez des getters/setters. Le prix ne peut être négatif. </h3>

        <?php
            class JeuVideo3
            {
                // Propriétés privées (encapsulation)
                private string $nom;
                private float $prix;
                private string $plateforme;
                private int $stock;
            
                // 🔧 Constructeur
                public function __construct(string $nom, float $prix, string $plateforme, int $stock)
                {
                    $this->setNom($nom);
                    $this->setPrix($prix);
                    $this->setPlateforme($plateforme);
                    $this->setStock($stock);
                }
            
                // 🧠 Getters (pour lire les valeurs)
                public function getNom(): string
                {
                    return $this->nom;
                }
            
                public function getPrix(): float
                {
                    return $this->prix;
                }
            
                public function getPlateforme(): string
                {
                    return $this->plateforme;
                }
            
                public function getStock(): int
                {
                    return $this->stock;
                }
            
                // 🧱 Setters (pour modifier les valeurs avec contrôle)
                public function setNom(string $nom): void
                {
                    $this->nom = $nom;
                }
            
                public function setPrix(float $prix): void
                {
                    if ($prix < 0) {
                        echo "⚠️ Erreur : le prix ne peut pas être négatif.<br>";
                        $this->prix = 0; // on peut mettre 0 par défaut
                    } else {
                        $this->prix = $prix;
                    }
                }
            
                public function setPlateforme(string $plateforme): void
                {
                    $this->plateforme = $plateforme;
                }
            
                public function setStock(int $stock): void
                {
                    $this->stock = $stock;
                }
            
                // Méthode pour afficher les infos du jeu
                public function afficherInfos(): void
                {
                    echo "<div style='border:1px solid #ccc; padding:10px; margin-bottom:10px; border-radius:8px;'>";
                    echo "<strong>Nom :</strong> " . $this->getNom() . "<br>";
                    echo "<strong>Prix :</strong> " . $this->getPrix() . " €<br>";
                    echo "<strong>Plateforme :</strong> " . $this->getPlateforme() . "<br>";
                    echo "<strong>Stock :</strong> " . $this->getStock() . "<br>";
                    echo "</div>";
                }
            }
    
            // ✅ Test avec validation
            $jeu1 = new JeuVideo3("Call of Duty", 60, "PS5", 3);
            $jeu2 = new JeuVideo3("FIFA 25", -10, "PS5", 5); // prix négatif volontaire
            
            $jeu1->afficherInfos();
            $jeu2->afficherInfos();
            
            // 🔁 Test du setter après instanciation
            $jeu1->setPrix(-50); // devrait afficher un message d’erreur
            $jeu1->afficherInfos();
        ?>
    </section>

    <section>
        <h3>Exercise-2: </h3>
                <?php
                
                ?>

    </section>
    <section>
        <h3>Exercise-3:  </h3>
                <?php
                ?>
    </section>
</body>

</html>