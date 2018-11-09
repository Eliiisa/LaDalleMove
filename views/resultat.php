<div class="container-fluid bg-orange">
    <div class="row">
        <div class="col-12 p-0">

            <img src="web/Images/conffettis.svg" alt="">
            <img src="" alt="">

            <div>
                <h4 class="text-white text-center">Félicitations <?php echo $user->getPseudo();?></h4>
                <h5 class="text-white text-center">Tu es un </h5>
                <img src="web/Images/coupe.svg" alt="" style="width: 17%;" class="mx-auto d-block">
                <div>
                    <div class="oblique-ecran-hashtag" style="margin-top: -25px;">
                    </div>
                    <div class="button-black-resultat text-center">
                        <br>
                        <h3 class="text-white"><?php echo $profil->getName();?></h3>
                        <p class="texte-blanc"><?php echo $profil->getDescript(); ?></p>
                    </div>
                    <div class="oblique-ecran-hashtag-bas">
                    </div>
                </div>
                <p class="texte-blanc text-center mt-1">Pour participer <strong>au tirage au sort</strong> et tenter de gagner une carte
                de réduction, un t-shirt, ou d'autres surprises, <strong>partage ton score</strong> et <strong>rend toi</strong> au stand
                de <strong>#LaDalleAngevine</strong></p>

                <div class="mt-4 fixed-bottom">
                    <div class="oblique-resultat-partage">
                    </div>
                    <a href="https://twitter.com/intent/tweet?button_hashtag=LaDalleAngevine&ref_src=twsrc%5Etfw" class="">
                        <div class="button-red-resultat text-center">
                            <p class="text-button-resultat" style="font-size: 27px;"><strong>Partager mon score</strong>
                                <img src="web/Images/partage.svg" alt="" style="width: 10%; margin-top: 9px;"></p>
                        </div>
                    </a>
                    <div class="oblique-resultat-classement">
                    </div>
                    <a href="" class="">
                        <div class="button-bleu-resultat text-center">
                            <p class="text-button-resultat" style="font-size: 27px;"><strong>Classement</strong> &nbsp;
                                <img src="web/Images/classement.svg" alt="" style="width: 10%;"></p>
                            </p>
                        </div>
                    </a>
                    <div class="oblique-resultat-classement-bas">
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
