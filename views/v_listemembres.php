<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Prénom</th>
            <th scope="col">Nom</th>
        </tr>
    </thead>
    <tbody>

        <!-- // écrire le code pour afficher une ligne par membre avec 3 colonnes id, nom et prénom -->
        <?php foreach ($les_membres as $k => $membre) : ?>
            <tr>
                <td> <?php echo $membre['id']; ?></td>
                <td> <?php echo $membre['prenom']; ?></td>
                <td> <?php echo $membre['nom']; ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<ul>
    <li><a href='index.php'>retour accueil</a></li>
</ul>