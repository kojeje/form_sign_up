<!DOCTYPE html>
<html lang="fr">
<head>
        <meta charset="UTF-8"/>
        <title>Upload - Formulaire</title>
        <link rel="stylesheet" href="assets/css/bootstrap.css"/>
        <link rel="stylesheet" href="assets/css/bootstrap-theme.css"/>
        <script src="assets/js/jquery.js"></script>
        <script src="assets/js/bootstrap.js"></script>
        <link rel="stylesheet" href="assets/css/custom.css"/>
</head>

<body>

<!--container bootstrap-->

<div class="container">
<!--    TITRE PAGE-->
        <h1>Créez votre compte</h1>

<!-- *********************************************  FORMULAIRE  *************************************************   -->


<!--    Titre-->
        <form action="crea_compte.php" method="post" enctype="multipart/form-data" class="form-horizontal">

<!--   ********* Identité ************  -->

        <!--             NOM -->
                        <div class="row">
                                <div class="form-group">
                                        <label for="last_name" class="control-label col-sm-2"><h3>Nom</h3></label>
                                        <input type="text" name="last_name"  class="input col-sm-8">
                                </div>
                        </div>

        <!--   *******************************  -->

        <!--            PRENOM -->
                        <div class="row">
                                <div class="form-group">
                                        <label for="first_name" class="control-label col-sm-2"><h4>Prénom</h4></label>
                                        <div class="offset-sm-2"></div>
                                        <input type="text" class="input col-sm-8" name="first_name"></input>
                                </div>
                        </div>
        <!--   *******************************  -->

        <!--            PSEUDO -->
                        <div class="row">
                                <div class="form-group">
                                        <label for="pseudo" class="control-label col-sm-2"><h4>Pseudo</h4></label>
                                        <div class="offset-sm-2"></div>
                                        <input type="text" class="input col-sm-8" name="pseudo"></input>
                                </div>
                        </div>
<!--   ***** coordonnées numériques *****************  -->

                <div id="coo">

        <!--            EMAIL -->

                        <div class="row">
                                <div class="form-group">
                                        <label for="email" class="control-label col-sm-2"><h4>Email</h4></label>
                                        <div class="offset-sm-2"></div>
                                        <input type="email" class="input col-sm-8" name="email"></input>
                                </div>
                        </div>
        <!--   *******************************  -->


        <!--            Tel -->

                        <div class="row">
                                <div class="form-group">
                                        <label for="tel" class="control-label col-sm-2"><h4>Tel</h4></label>
                                        <div class="offset-sm-2"></div>
                                        <input type="tel" class="input col-sm-8" name="tel"></input>
                                </div>
                        </div>
                </div>
<!--   ************** Adresse postale *****************  -->

                <div id="address">

        <!--            address1 -->

                        <div class="row">
                                <div class="form-group">
                                        <label for="address1" class="control-label col-sm-2"><h4>address 1</h4></label>
                                        <div class="offset-sm-2"></div>
                                        <input type="text" class="input col-sm-8" name="address1"></input>
                                </div
                        </div>
<!--   *******************************  -->

        <!--            address2 -->

                        <div class="row">
                                <div class="form-group">
                                        <label for="address2" class="control-label col-sm-2"><h4>address 2</h4></label>
                                        <div class="offset-sm-2"></div>
                                        <input type="text" class="input col-sm-8" name="address2"></input>
                                </div>
                        </div>

<!--   *******************************  -->

        <!--             zip code-->

                        <div class="row">
                                <div class="form-group">
                                        <label for="zip" class="control-label col-sm-2"><h4>Zip Code</h4></label>
                                        <div class="offset-sm-2"></div>
                                        <input type="text" class="input col-sm-8" name="zip"></input>
                                </div>
                        </div>
<!--   *******************************  -->

        <!--             Town-->

                        <div class="row">
                                <div class="form-group">
                                        <label for="town" class="control-label col-sm-2"><h4>Town</h4></label>
                                        <div class="offset-sm-2"></div>
                                        <input type="text" class="input col-sm-8" name="town"></input>
                                </div>
                        </div>

<!--   *******************************  -->

        <!--           Country-->

                        <div class="row">
                                <div class="form-group">
                                        <label for="country" class="control-label col-sm-2"><h4>Country</h4></label>
                                        <div class="offset-sm-2"></div>
                                        <input type="text" class="input col-sm-8" name="country"></input>
                                </div>
                        </div>
                </div>
<!--   *************** données personnelles ****************  -->

                <div id="perso">

        <!--            Birthdate-->

                        <div class="row">
                                <div class="form-group">
                                        <label for="birthdate" class="control-label col-sm-2"><h4>Your Birthdate</h4></label>
                                        <div class="offset-sm-2"></div>
                                        <input type="date" class="input col-sm-8" name="birthdate"></input>
                                </div>
                        </div>
<!--   *******************************  -->

        <!--            job -->

                        <div class="row">
                                <div class="form-group">
                                        <label for="job" class="control-label col-sm-2"><h4>Your Job</h4></label>
                                        <div class="offset-sm-2"></div>
                                        <input type="text" class="input col-sm-8" name="job"></input>
                                </div>
                        </div>
<!--   *******************************  -->

        <!--            hobby1 -->

                        <div class="row">
                                <div class="form-group">
                                        <label for="hobby1" class="control-label col-sm-2"><h4>hobby 1</h4></label>
                                        <div class="offset-sm-2"></div>
                                        <input type="text" class="input col-sm-8" name="hobby1"></input>
                                </div>
                        </div>

<!--   *******************************  -->

        <!--            hobby2 -->

                        <div class="row">
                                <div class="form-group">
                                        <label for="hobby2" class="control-label col-sm-2"><h4>hobby 2</h4></label>
                                        <div class="offset-sm-2"></div>
                                        <input type="text" class="input col-sm-8" name="hobby2"></input>
                                </div>
                        </div>
<!--   *******************************  -->

        <!--            hobby3 -->

                        <div class="row">
                                <div class="form-group">
                                        <label for="hobby3" class="control-label col-sm-2"><h4>hobby 3</h4></label>
                                        <div class="offset-sm-2"></div>
                                        <input type="text" class="input col-sm-8" name="hobby3"></input>
                                </div>
                        </div>
<!--   *******************************  -->

        <!--            hobby4 -->

                        <div class="row">
                                <div class="form-group">
                                        <label for="hobby4" class="control-label col-sm-2"><h4>hobby 4</h4></label>
                                        <div class="offset-sm-2"></div>
                                        <input type="text" class="input col-sm-8" name="hobby4"></input>
                                </div>
                        </div>
<!--   *******************************  -->

        <!--            about me  -->

                        <div class="row">
                                <div class="form-group">
                                        <label for="about_me" class="control-label col-sm-2"><h4>About me</h4></label>
                                        <div class="offset-sm-2"></div>
                                        <textarea  class="input col-sm-8" name="about_me"></textarea>
                                </div>
                        </div>

                </div>
<!--   *******************************  -->


        <!--             FILE -->

                <div class="row">
                        <div id="file">
                                <div class="form-group file ">
                                        <label id="lbl_fichier" for="fichier" class="control-label col-sm-3"><h4 id="file_title">Fichier</h4></label>
                                        <div class="offset-sm-4"></div>
                                        <div >
                                                <input id="fichier" class="col-sm-4" name="fichier" type="file"/>
                                        </div>
                                </div>
                        </div>

                </div>

<!--   *******************************  -->

<!--   *******************************  -->

<!--              Submit-->
                <div class="form-group">
                        <div class="offset-sm-4"></div>
                        <div class="col-sm-4 ">
                                <input id="uploader" name="uploader" type="submit" value="envoyer" class="btn btn-primary"/>
                        </div>
                        <div class="offset-sm-4"></div>
                </div>

        </form>

</div>
</body>
</html>
