<div class="container-fluid p-0 bg-bleu">
    <div class="row">
        <div class="col-12"  style="height:100vh;">

            <p class="text-center texte-blanc mt-4">Avant de te lancer et en guise d’échauffement,</p>
            <p class="text-center texte-blanc mb-1" style="font-size: 27px;"><strong>Choisis un avatar</strong></p>

            <form action="index.php?p=signIn" method="post" class='text-center'>
                <?php foreach($listAvatar as $avatar){?>
                    <div class="form-check form-check-inline">
                        <input type="radio" name="idAvatar" value="<?php echo $avatar->getId(); ?>" id="<?php echo $avatar->getGenre(); ?>" required/>
                        <label for="<?php echo $avatar->getGenre(); ?>"><img src="<?php echo $avatar->getUrl(); ?>"  alt="" style="width: 120px;"></label>
                    </div>
                <?php } ?>
                <div class="form-group text-center text-white px-4">
                    <?php if(isset($retour)){ ?>
                        <p>Pseudo déjà utilisé</p>
                    <?php }?>
                    <label for="pseudo">Pseudo de Dalleux</label>
                    <input type="text" class="form-control mb-3 mx-auto" style="max-width: 300px;" name="pseudo" required>
                    <label for="password">Mot de passe</label>
                    <input type="password" class="form-control mb-3 mx-auto" style="max-width: 300px;" name="password" required>
                </div>
                <div class="fixed-bottom">
                    <div class="oblique-accueil">
                    </div>
                    <div class="button-orange text-center">
                        <input type="submit" class="btn btl-lg btn-block btn-submit pt-0" value="S'inscrire >" style="color: white; font-size: 37px;">
                    </div>
                </div>
<!--                <input type="submit" class="btn btn-primary btn-lg btn-block" value="Valider">-->

            </form>

        </div>
    </div>
</div>
