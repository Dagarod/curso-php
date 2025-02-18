<main>
    <?php require 'banner.php'; ?>
    <section>
        <h2>La próxima película de Marvel</h2>
        <img src="<?= $poster_url; ?>" width=" 300" alt="Poster de <?= $title; ?>"
            style="border-radius: 16px" ; />
    </section>
    <?php require 'banner.php'; ?>
    <hgroup>
        <h3><?= $title; ?> - <?= $until_message; ?></h3>
        <p>Fecha de estreno: <?= $release_date; ?></p>
        <p>La siguiente es: <?= $following_production; ?></p>
    </hgroup>
</main>