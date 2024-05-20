<form action="<?= $this->url('afspraak/create') ?>" method="post">
    <label for="naam">Naam:</label>
    <input type="text" name="naam" id="naam" value="<?= $this->old('naam') ?>">
    <?= $this->showErrors('naam') ?>

    <label for="email">E-mail:</label>
    <input type="email" name="email" id="email" value="<?= $this->old('email') ?>">
    <?= $this->showErrors('email') ?>

    <label for="telefoon">Telefoon:</label>
    <input type="text" name="telefoon" id="telefoon" value="<?= $this->old('telefoon') ?>">
    <?= $this->showErrors('telefoon') ?>

    <label for="datum">Datum:</label>
    <input type="datetime-local" name="datum" id="datum" value="<?= $this->old('datum') ?>">
    <?= $this->showErrors('datum') ?>

    <label for="opmerkingen">Opmerkingen:</label>
    <textarea name="opmerkingen" id="opmerkingen"><?= $this->old('opmerkingen') ?></textarea>
    <?= $this->showErrors('opmerkingen') ?>

    <input type="submit" value="Verzenden">
</form>

<table>
    <thead>
        <tr>
            <th>Naam</th>
            <th>E-mail</th>
            <th>Telefoon</th>
            <th>Datum/Tijd</th>
            <th>Opmerkingen</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($data as $item): ?>
            <tr>
                <td><?= htmlspecialchars($item['naam']) ?></td>
                <td><?= htmlspecialchars($item['email']) ?></td>
                <td><?= htmlspecialchars($item['telefoon']) ?></td>
                <td><?= htmlspecialchars($item['datum']) ?></td>
                <td><?= htmlspecialchars($item['opmerkingen']) ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>