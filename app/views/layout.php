<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My MVC Application</title>
</head>
<body>
    <?php require '../app/views/' . $views . '.php'; ?>
</body>
</html>

<h1>Welcome to the Home Page</h1>
<h2>Users: </h2>
<ul>
    <?php foreach($users as $user): ?>
        <ul><?php echo $user['name']; ?></ul>
    <?php endforeach; ?>
</ul>