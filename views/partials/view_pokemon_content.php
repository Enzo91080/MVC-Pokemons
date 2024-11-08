<div class="bg-white p-4 rounded shadow text-center" style="max-width: 400px; margin: 0 auto;">
    <h1 class="display-6 text-primary mb-3"><?php echo htmlspecialchars($pokemon['name']); ?></h1>
    <p class="lead">Type : <?php echo htmlspecialchars($pokemon['type']); ?></p>
    <a href="index.php?action=list" class="btn btn-primary mt-3">Retour à la liste</a>
</div>
