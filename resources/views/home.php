<?php include_once 'layouts/header.php'; ?>

<h1>Welcome to home page</h1>

<h2>Data: <?= $data; ?></h2>
<h2>Params: <?php dump($params ?? '') ?></h2>

<?php include_once 'layouts/footer.php'; ?>
