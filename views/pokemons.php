<!DOCTYPE html>
<html>
<head>
    <title>Liste des Pokémons</title>
</head>
<body>
    <h1>Liste des Pokémons</h1>
    <ul>
        <?php foreach ($pokemons as $pokemon): ?>
            <li><?php echo htmlspecialchars($pokemon['name']) . " (" . htmlspecialchars($pokemon['type']) . ")"; ?></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
