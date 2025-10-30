<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Complete PDO CRUD Example</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 2rem; }
        form { margin-bottom: 1rem; }
        input, button { padding: 0.5rem; margin: 0.25rem; }
        table { border-collapse: collapse; width: 100%; margin-top: 1rem; }
        th, td { border: 1px solid #ccc; padding: 0.5rem; text-align: left; }
        th { background-color: #f0f0f0; }
        .success { color: green; }
        .error { color: red; }
    </style>
</head>
<body>
<h1>PHP + MySQL PDO CRUD Example</h1>

<?php
// --- Database connection ---
$dsn = 'mysql:host=localhost;dbname=test_db';
$usuario = 'root';
$contrasena = '';

try {
    $pdo = new PDO($dsn, $usuario, $contrasena);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("<p class='error'>❌ Database connection failed: " . $e->getMessage() . "</p>");
}

// --- Create table if it doesn't exist ---
$pdo->exec("CREATE TABLE IF NOT EXISTS tabla (
    id INT AUTO_INCREMENT PRIMARY KEY,
    columna1 VARCHAR(100) NOT NULL,
    columna2 VARCHAR(100) NOT NULL
)");

// --- Handle form submissions ---
$message = '';

if (isset($_POST['create'])) {
    // CREATE
    $columna1 = $_POST['columna1'];
    $columna2 = $_POST['columna2'];

    $stmt = $pdo->prepare("INSERT INTO tabla (columna1, columna2) VALUES (:c1, :c2)");
    $stmt->execute(['c1' => $columna1, 'c2' => $columna2]);
    $message = "<p class='success'>✅ Record added successfully!</p>";
}

if (isset($_POST['update'])) {
    // UPDATE
    $id = $_POST['id'];
    $columna1 = $_POST['columna1'];
    $columna2 = $_POST['columna2'];

    $stmt = $pdo->prepare("UPDATE tabla SET columna1 = :c1, columna2 = :c2 WHERE id = :id");
    $stmt->execute(['c1' => $columna1, 'c2' => $columna2, 'id' => $id]);
    $message = "<p class='success'>✏️ Record updated successfully!</p>";
}

if (isset($_POST['delete'])) {
    // DELETE
    $id = $_POST['id'];
    $stmt = $pdo->prepare("DELETE FROM tabla WHERE id = :id");
    $stmt->execute(['id' => $id]);
    $message = "<p class='success'>🗑️ Record deleted successfully!</p>";
}

echo $message;

// --- Fetch all records ---
$stmt = $pdo->query("SELECT * FROM tabla ORDER BY id ASC");
$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!-- CREATE FORM -->
<h2>Add New Record</h2>
<form method="POST">
    <input type="text" name="columna1" placeholder="Value 1" required>
    <input type="text" name="columna2" placeholder="Value 2" required>
    <button type="submit" name="create">Add</button>
</form>

<!-- DISPLAY TABLE -->
<h2>Current Records</h2>
<table>
    <tr>
        <th>ID</th>
        <th>Columna1</th>
        <th>Columna2</th>
        <th>Actions</th>
    </tr>
    <?php if ($rows): ?>
        <?php foreach ($rows as $row): ?>
            <tr>
                <td><?= htmlspecialchars($row['id']) ?></td>
                <td><?= htmlspecialchars($row['columna1']) ?></td>
                <td><?= htmlspecialchars($row['columna2']) ?></td>
                <td>
                    <!-- Update Form -->
                    <form method="POST" style="display:inline;">
                        <input type="hidden" name="id" value="<?= $row['id'] ?>">
                        <input type="text" name="columna1" value="<?= htmlspecialchars($row['columna1']) ?>" required>
                        <input type="text" name="columna2" value="<?= htmlspecialchars($row['columna2']) ?>" required>
                        <button type="submit" name="update">Update</button>
                    </form>

                    <!-- Delete Form -->
                    <form method="POST" style="display:inline;">
                        <input type="hidden" name="id" value="<?= $row['id'] ?>">
                        <button type="submit" name="delete" onclick="return confirm('Are you sure?');">Delete</button>
                    </form>
                </td>
            </tr>
        <?php endforeach; ?>
    <?php else: ?>
        <tr><td colspan="4">No records found.</td></tr>
    <?php endif; ?>
</table>
</body>
</html>
