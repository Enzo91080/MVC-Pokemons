# Pokémon CRUD Application

Cette application est un système de gestion des Pokémons permettant d'effectuer des opérations **CRUD** (Créer, Lire, Mettre à jour, Supprimer) sur une base de données de Pokémons. Elle est construite en **PHP** en utilisant le modèle **MVC** (Modèle-Vue-Contrôleur) et utilise **Bootstrap** pour le style.

## Installation

1. **Clonez le dépôt** (ou téléchargez les fichiers) dans votre répertoire de serveur web.

   ```bash
   git clone https://github.com/votre-utilisateur/pokemon-crud-app.git

2. **Configurez la base de données :**

- Créez une base de données MySQL nommée pokemons_db.
- Importez le fichier SQL fourni (par exemple, database.sql) pour créer la table et insérer des données initiales.

3. **Configurez la connexion à la base de données :**

- Ouvrez le fichier config/database.php.
- Mettez à jour les informations de connexion (hôte, nom de la base de données, nom d'utilisateur, mot de passe) pour correspondre à votre configuration.

```php
<?php
function getDatabaseConnection() {
    try {
        $db = new PDO('mysql:host=localhost;dbname=pokemons_db;charset=utf8', 'root', '');
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $db;
    } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }
}
```

4. **Lancer l'application**
- Assurez-vous que votre serveur web est en cours d'exécution.
- Accédez à l'application dans votre navigateur via http://localhost/pokemons ou http://pokemons.local (si vous avez configuré un VirtualHost).
