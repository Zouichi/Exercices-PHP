        <p>Derniers billets du blog :</p>
 
        <?php
        foreach($billets as $billet)
        {
            ?>
            <div class="news">
                <h3>
                    <?php echo $billet['titre']; ?>
                    <em>le <?php echo $billet['date_creation_fr']; ?></em>
                </h3>
                
                <p>
                <?php echo $billet['contenu']; ?>
                <br />
                <em><a href="blog.php?billet=<?php echo $billet['id']; ?>">Commentaires</a></em>
                </p>
            </div>
            <?php
        }
        ?>
