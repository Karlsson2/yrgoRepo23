<?php require __DIR__ . '/app/autoload.php'; ?>
<?php require __DIR__ . '/views/header.php'; ?>

<article>
    <h1><?php echo $config['title']; ?></h1>
    <p>This is the home page.</p>
    <?php if (isset($_SESSION["user"])) : ?>
        <h1>Welcome <?= $_SESSION["user"]["name"] ?></h1>
    <?php endif; ?>
</article>

<?php require __DIR__ . '/views/footer.php'; ?>