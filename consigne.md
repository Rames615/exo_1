nom = $nom;
        $this->prix = $prix;
        $this->stock = $stock;
        $this->description = $description;
        
        // Message pour voir qu'un produit a été créé
        echo "✅ Nouveau produit créé : {$nom}\n";
    }
    
    /**
     * 📋 MÉTHODE : Afficher les infos du produit
     * 
     * Analogie : Comme lire l'étiquette à haute voix
     */
    public function afficherInfos() 
    {
        echo "🏷️ Produit : {$this->nom}\n";
        echo "💰 Prix : {$this->prix}€\n";
        echo "📦 Stock : {$this->stock} unités\n";
        echo "📝 Description : {$this->description}\n";
        echo "-------------------\n";
    }
    
    /**
     * 🔍 MÉTHODE : Vérifier si le produit est en stock
     * 
     * Analogie : Regarder sur l'étagère s'il reste des exemplaires
     */
    public function verifierStock() 
    {
        if ($this->stock > 0) {
            echo "✅ {$this->nom} est disponible ({$this->stock} en stock)\n";
            return true;
        } else {
            echo "❌ {$this->nom} est en rupture de stock\n";
            return false;
        }
    }
    
    /**
     * 💰 MÉTHODE : Calculer le prix avec remise éventuelle
     * 
     * Analogie : Comme appliquer une étiquette "SOLDES"
     */
    public function calculerPrix($remise = 0) 
    {
        $prixFinal = $this->prix * (1 - $remise / 100);
        
        if ($remise > 0) {
            echo "🏷️ Prix original : {$this->prix}€\n";
            echo "🎯 Remise : {$remise}%\n";
            echo "💸 Prix final : {$prixFinal}€\n";
        }
        
        return $prixFinal;
    }
}

// 🧪 EXEMPLE D'UTILISATION :
/*
// Créer un produit
$produit1 = new Produit("Tapis de souris Gaming", 25.99, 50, "Tapis de souris anti-dérapant");

// Utiliser les méthodes
$produit1->afficherInfos();
$produit1->verifierStock();
$produit1->calculerPrix(10); // 10% de remise
*/