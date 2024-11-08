<h1 class="text-center text-primary mb-4">Liste des Pokémons</h1>
<div class="text-center mb-4">
    <a href="index.php?action=create" class="btn btn-success">Ajouter un Pokémon</a>
</div>

<div class="row row-cols-1 row-cols-md-2 g-4">
    <?php foreach ($pokemons as $pokemon): ?>
        <div class="col">
            <div class="card shadow-sm h-100">
                <div class="card-body d-flex justify-content-between align-items-center">
                    <div>
                        <h5 class="card-title mb-0"><?php echo htmlspecialchars($pokemon['name']); ?></h5>
                        <p class="card-text text-muted small">Type : <?php echo htmlspecialchars($pokemon['type']); ?></p>
                    </div>
                    <div>
                        <a href="index.php?action=view&id=<?php echo $pokemon['id']; ?>" class="btn btn-primary btn-sm me-1">Voir</a>
                        <a href="index.php?action=edit&id=<?php echo $pokemon['id']; ?>" class="btn btn-warning btn-sm me-1">Modifier</a>
                        <a href="index.php?action=delete&id=<?php echo $pokemon['id']; ?>" class="btn btn-danger btn-sm">Supprimer</a>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>
