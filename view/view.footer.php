        </main>

        <footer>
            <div class="footer-links">
                <div class="useful-links">
                    <h2 class="footer-title">INFOS UTILES</h2>
                    <ul class="footer-list">
                        <li><i class="bi bi-caret-right"></i> <a href="../controller/controller.pages.php?page=view.we" class="footer-list-a">Qui sommes-nous ?</a></li>
                        <li><i class="bi bi-caret-right"></i> <a href="../controller/controller.pages.php?page=view.politique" class="footer-list-a">Politique de confidentialité</a></li>
                        <li><i class="bi bi-caret-right"></i> <a href="../controller/controller.pages.php?page=view.faq" class="footer-list-a">Foire aux questions</a></li>
                        <li><i class="bi bi-caret-right"></i> <a href="" class="footer-list-a">Contact</a></li>
                    </ul>
                </div>
                <div class="follow-us">
                    <h2 class="footer-title">SUIVEZ-NOUS</h2>
                    <div class="networks">
                        <a href=""><i class="bi bi-telegram i-networks"></i></a>
                        <a href=""><i class="bi bi-instagram i-networks"></i></a>
                        <a href=""><i class="bi bi-facebook i-networks"></i></a>
                        <a href=""><i class="bi bi-twitter i-networks"></i></a>
                    </div>
                    <div class="newsletter">
                        <form action="" method="post" class="newsletter-form">
                            <label for="newsletter" class="newsletter-label">S'inscrire à la newsletter</label>
                            <div class="submit-infos">
                                <input type="email" name="newsletter" placeholder="adresse@mail.com" class="newsletter-input">
                                <button type="submit" class="newsletter-btn"><i class="bi bi-send-fill"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="footer-info">
                La Fabrique du Savoir 
                <br>
                2022-2023
            </div>
        </footer>

        <script>
            let idBook = "<?= $book['id_book']?>";
            let session = "<?php
                            if(isset($_SESSION["user"])){
                                echo $_SESSION["user"]['id_user'];
                            }else{
                                echo "null";
                            }
                            ?>" ;
        </script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="/la_fabrique_du_savoir/view/js/footer.js"></script>
        <?php echo isset($script) ? $script : ''; ?>

    </body>
</html>


