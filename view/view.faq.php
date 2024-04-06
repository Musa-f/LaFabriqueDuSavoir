<div class="title">
    <img src="<?=$_ENV['URL']?>/assets/img/l-separator.svg" alt="">
    <h2>Foire aux questions</h2>
</div>

<style>
.faq {
    width: 80%;
    padding: 10px;
    margin-bottom: 10px;
    cursor: pointer;
    border-bottom: 1px solid #2c3638;
}
.faq .question {
    display: flex;
    justify-content: space-between;
    font-weight: bold;
}
.faq .answer {
    display: none;
    margin-top: 10px;
}
</style>

<div class="faq">
    <div class="question">
        <p>Comment lire un livre ?</p>
        <i class="bi bi-caret-down"></i>
    </div>
    <div class="answer">Pour lire un livre, il suffit de se rendre sur la fiche d'un livre à partir de l'accueil. <br> Si le livre est disponible, vous pourrez cliquer sur le bouton "Lire un livre" et commencer votre lecture !</div>
</div>

<div class="faq">
    <div class="question">
        <p>Comment ajouter un livre dans sa bibliothèque ?</p>
        <i class="bi bi-caret-down"></i>
    </div>
    <div class="answer">Pour ajouter un livre, il faut d'aborder vous connecter au site (ou vous inscrire si vous n'avez pas encore de compte). Vous devez ensuite vous rendre sur la fiche du livre et cliquer sur le bouton "Ajouter à mes livres". <br> Vous pourrez ensuite retrouver votre livre à partir de l'onglet "Mes livres" du menu.</div>
</div>

<div class="faq">
    <div class="question">
        <p>Est ce qu'on peut télécharger un livre ?</p>
        <i class="bi bi-caret-down"></i>
    </div>
    <div class="answer">L'option de téléchargement de livre n'est pas disponible pour l'instant.</div>
</div>

<div class="faq">
    <div class="question">
        <p>Comment puis-je contribuer au site ?</p>
        <i class="bi bi-caret-down"></i>
    </div>
    <div class="answer">Si vous souhaitez contribuer au site, soit pas l'ajout de nouveaux livres dans le catalogue ou en devenant bloggeur, il suffit d'envoyer votre candidature avec vos motivations à l'admin, via l'adresse : contact@fmusaeva.com</div>
</div>

<div class="faq">
    <div class="question">
        <p>Comment supprimer mon compte ?</p>
        <i class="bi bi-caret-down"></i>
    </div>
    <div class="answer">Pour supprimer son compte, il suffit d'envoyer un mail à l'admin, via cette adresse : contact@fmusaeva.com. <br> Le compte sera supprimé sous 72h après confirmation avec toutes les données associées. Cette action est irréversible.</div>
</div>

<?php
    $script = "<script src='" . $_ENV['URL'] . "/view/js/faq.js'></script>";
?>
