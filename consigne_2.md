nom = $nom;
        $this->email = $email;
        $this->age = $age;
        
        // Infos privées (sécurisées)
        $this->motDePasse = $this->hashPassword($motDePasse);
        $this->dateInscription = date('Y-m-d H:i:s');
        
        echo "👤 Nouvel utilisateur inscrit : {$nom}\n";
    }
    
    /**
     * 🔐 MÉTHODE PRIVÉE : Chiffrer le mot de passe
     * 
     * Analogie : Comme mettre le mot de passe dans un coffre-fort
     * Personne d'autre ne peut utiliser cette méthode !
     */
    private function hashPassword($password) 
    {
        // En réalité, on utiliserait password_hash()
        return "HASH_" . strtoupper(md5($password));
    }
    
    /**
     * 🔑 MÉTHODE : Se connecter
     * 
     * Analogie : Montrer sa carte d'identité et son mot de passe
     */
    public function seConnecter($email, $motDePasse) 
    {
        $motDePasseHash = $this->hashPassword($motDePasse);
        
        if ($this->email === $email && $this->motDePasse === $motDePasseHash) {
            echo "✅ Connexion réussie ! Bienvenue {$this->nom}\n";
            return true;
        } else {
            echo "❌ Email ou mot de passe incorrect\n";
            return false;
        }
    }
    
    /**
     * ✏️ MÉTHODE : Modifier le profil
     * 
     * Analogie : Mettre à jour ses informations personnelles
     */
    public function modifierProfil($nouveauNom = null, $nouvelAge = null) 
    {
        if ($nouveauNom !== null) {
            $ancienNom = $this->nom;
            $this->nom = $nouveauNom;
            echo "📝 Nom modifié : {$ancienNom} → {$nouveauNom}\n";
        }
        
        if ($nouvelAge !== null) {
            $ancienAge = $this->age;
            $this->age = $nouvelAge;
            echo "🎂 Âge modifié : {$ancienAge} → {$nouvelAge} ans\n";
        }
    }
    
    /**
     * 🔓 GETTER : Récupérer l'âge (méthode publique pour accéder à une info)
     * 
     * Analogie : Comme demander poliment "Quel âge avez-vous ?"
     * au lieu de fouiller dans les affaires personnelles
     */
    public function getAge() 
    {
        return $this->age;
    }
    
    /**
     * 🔓 GETTER : Récupérer le nom
     */
    public function getNom() 
    {
        return $this->nom;
    }
    
    /**
     * 🔓 GETTER : Récupérer l'email
     */
    public function getEmail() 
    {
        return $this->email;
    }
    
    /**
     * 🔒 GETTER : Récupérer la date d'inscription (info privée accessible)
     * 
     * Analogie : L'utilisateur peut consulter sa propre date d'inscription
     */
    public function getDateInscription() 
    {
        return $this->dateInscription;
    }
    
    /**
     * 🔐 SETTER : Changer le mot de passe (avec vérification)
     * 
     * Analogie : Changer la combinaison de son coffre-fort
     */
    public function changerMotDePasse($ancienMotDePasse, $nouveauMotDePasse) 
    {
        $ancienHash = $this->hashPassword($ancienMotDePasse);
        
        if ($this->motDePasse === $ancienHash) {
            $this->motDePasse = $this->hashPassword($nouveauMotDePasse);
            echo "🔐 Mot de passe modifié avec succès\n";
            return true;
        } else {
            echo "❌ Ancien mot de passe incorrect\n";
            return false;
        }
    }
    
    /**
     * 📋 MÉTHODE : Afficher les infos publiques de l'utilisateur
     * 
     * Analogie : Montrer sa carte de visite (pas ses secrets !)
     */
    public function afficherProfil() 
    {
        echo "👤 Profil utilisateur :\n";
        echo "📛 Nom : {$this->nom}\n";
        echo "📧 Email : {$this->email}\n";
        echo "🎂 Âge : {$this->age} ans\n";
        echo "📅 Inscrit le : {$this->dateInscription}\n";
        // Notez qu'on N'AFFICHE PAS le mot de passe !
        echo "-------------------\n";
    }
}

// 🧪 EXEMPLE D'UTILISATION :
/*
// Créer un utilisateur
$utilisateur = new Utilisateur("Alice Gamer", "alice@email.com", 25, "motdepasse123");

// Utiliser les méthodes publiques
$utilisateur->afficherProfil();
$utilisateur->seConnecter("alice@email.com", "motdepasse123");
$utilisateur->modifierProfil("Alice Pro-Gamer", 26);

// Utiliser les getters
echo "L'utilisateur s'appelle : " . $utilisateur->getNom() . "\n";
echo "Il a " . $utilisateur->getAge() . " ans\n";

// Changer le mot de passe
$utilisateur->changerMotDePasse("motdepasse123", "nouveaumotdepasse456");

// ATTENTION : Ceci ne marche PAS car $motDePasse est privé !
// echo $utilisateur->motDePasse; // ❌ ERREUR !
*/