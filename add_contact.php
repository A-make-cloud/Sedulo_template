<?php
include("parts/head.html");

include('parts/nav.html');

include("functions.php");
// var_dump($_POST);
$done = false;
if (
    isset($_POST["firstName"]) &&
    isset($_POST["lastName"]) &&
    isset($_POST["phone"]) &&
    isset($_POST["email"]) &&
    isset($_POST["message"])
) {
    // var_dump($_POST);
    $sql = "
        INSERT INTO 
        `contact` (`firstName`,`lastName`,`phone`,`email`,`message`)
            VALUES 
                ('" . addslashes($_POST["firstName"]) . "',
                '" . addslashes($_POST["lastName"]) . "',
                '" . $_POST["phone"] . "',
                '" . $_POST["email"] . "',
                '" . addslashes($_POST["message"]) . "')";

    $bdh = db_connect();

    $sth = $bdh->prepare($sql);

    $done = $sth->execute();
    // var_dump($sql);
}




include("parts/head.html");

?>
       
<style>
    body{
        margin: 0;
        padding: 0;
      
    }
     .middle_arrow {
            opacity: 0;
            position: absolute;
            top: 70%;
            right: 2em;
        }
        
        .bottom_arrow {
            opacity: 0;
            position: absolute;
            top: 160%;
            right: 2em;
            z-index: -2;
        }
        .top_arrow{
            position: absolute;
            top: 130%;
            right: 2em;
        }
        form{
            position: absolute;
            z-index: 1;
        }
       footer {
            position: fixed;
            bottom: 0;
            width: 100%;
            z-index: -1;
        }
        @media(min-width:1401px) {
            .contenuContact {
                background-color: #f1f5fa;
                box-shadow: 1px 1px 10px 1px black;
            }
        }
</style>
<div class="header_bottom container w-75">
    <div class="pt-5">
        <h1 class="text-center">Agence Web à votre disposition</h1>
    </div>

    <div class="contenuContact mt-5 p-5">
        <h2>Votre entreprise est unique, votre communication aussi :</h2>
        <h4>Notre objectif : vous rendre visible & vous aider à valoriser votre image</h4>

        <p>

            Nous vous proposons des solutions sur-mesure en fonction de vos besoins, vos objectifs et votre budget !</p>

        <h4>Devis gratuit et sans engagement</h4>
        <p>Pour une prise de contact, faire le point sur vos besoins, vos envies, là où vous en êtes aujourd'hui et où vous souhaitez aller</p>
        <p>Remplissez ce formulaire: vous serez contacté sous 48 heures</p>
    </div>
</div>

</header>
<section class="container">
    <h4 class="ms-5 my-5">Nous contacter</h4>
    <?php if (!isset($_POST["firstName"])) : ?>
        <form action="./add_contact.php" class="w-50 ms-5 p-5 bg-white" method="POST">
            <div class="row">
                <div class="col">
                    <label class="form-label" for="firstName">Prénom</label>
                    <input type="text" class="form-control" name="firstName" placeholder="Prénom" aria-label="First name" required>
                </div>
                <div class="col">

                    <label class="form-label" for="lastName">Nom</label>
                    <input type="text" class="form-control" name="lastName" placeholder="Nom" aria-label="last name" required>
                </div>
            </div>
            <div>
                <label class="form-label" for="phone">Téléphone</label>
                <input type="tel" class="form-control" name="phone" id="phone" placeholder="numéro de téléphone" required>
            </div>
            <div>
                <label class="form-label" for="email">Email</label>
                <input type="email" class="form-control" name="email" id="email" placeholder="nom@exemple.fr" required>
            </div>
            <div>
                <label class="form-label" for="message">Message</label>
                <textarea class="form-control" name="message" id="message" rows="3" required></textarea>

            </div>
            <div>
                <a href="./" class="btn btn-secondary float-stat my-4">annuler</a>
                <button type="submit" class="btn btn-secondary float-end my-4">envoyer</button>
            </div>
        </form>
    <?php else : ?>

        <?php if (isset($_POST["firstName"]) && $done) : ?>

            <p class="fs-4">votre message <?php echo $_POST["firstName"] ?>&nbsp;<?php echo $_POST["lastName"] ?>&nbsp;a bien été ajouté :)</p>
            <div> <a href="./add_contact.php" class="link-secondary">ajouter un autre message</a>
            </div>
        <?php elseif (isset($_POST["firstName"]) && !$done) : ?>
            <p>votre message <?php $_POST["firstName"] ?> n'a pas été ajouté :(</p>
            <div class="d-flex justify-content-around"> <a href="./add_contact.php" class="d-flex justify-content-start">ajouter un autre message</a>
                <a href="./accueil.php">retour a l'accueil</a>
            </div>
        <?php endif ?>

    <?php endif ?>
</section>
<?php include("parts/footer.html"); ?>