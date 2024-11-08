<div class="bg-white p-4 rounded shadow" style="max-width: 400px; margin: 0 auto;">
  <h1 class="display-6 text-center text-primary mb-4">Modifier Pokémon</h1>
  <form method="post" action="">
    <div class="mb-3">
      <label for="name" class="form-label">Nom :</label>
      <input type="text" id="name" name="name" class="form-control"
        value="<?php echo htmlspecialchars($pokemon['name']); ?>" required>
    </div>
    <div class="mb-3">
      <label for="type" class="form-label">Type :</label>
      <input type="text" id="type" name="type" class="form-control"
        value="<?php echo htmlspecialchars($pokemon['type']); ?>" required>
    </div>
    <button type="submit" class="btn btn-primary w-100">Modifier</button>
  </form>
</div>