<h1>Welcome to the Home Page</h1>
<h2>Users: </h2>
<ul>
    <?php foreach($users as $user): ?>
        <ul><?php echo $user['name']; ?></ul>
    <?php endforeach; ?>
</ul>