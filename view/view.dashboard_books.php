<h1 class="dashboard-title">Gestion des livres</h1>

<div class="menu">
    <div><a href="#livres" class="menu-btn">Livres</a></div>
    <div><a href="#auteurs" class="menu-btn">Auteurs</a></div>
    <div><a href="#genres" class="menu-btn">Genres</a></div>
</div>


<!-- ------------------------------ LIVRES ------------------------------ -->
<div id="livres" class="content-block active">
    <div class="filters">
        <div class="date">
            <select name="" id="" class="initialize">
                <option value="">Croissant</option>
                <option value="">Décroissant</option>
            </select>
        </div>
        <div class="search-bar">
            <input type="text" class="initialize style-input" placeholder="Rechercher par nom d'utilisateur...">
            <button class="initialize">
                <i class="bi bi-search"></i>
            </button>
        </div>
    </div>

    <div class="content">
        <table>
            <thead>
                <tr>
                    <th>Titre</th>
                    <th colspan="2">Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($books as $book):
                    $authorBook = select_all_authors_book($bdd, $book['id_book'])[0][0];
                ?>
                <tr>
                    <td><?=$book['title_book']?></td>
                    <td>
                    <button class="initialize" onclick="openModalBook(<?=htmlspecialchars(json_encode($book))?>, '<?=$authorBook?>')"><i class="bi bi-pencil-square"></i></button>
                    </td>
                    <td>
                        <button class="initialize style-btn">Supprimer</button>
                    </td>
                </tr>
                <?php endforeach?>
            </tbody>
        </table>
    </div>
    <br>
    <div><button class="initialize style-btn" onclick="openModalBook(null)">Ajouter</button></div>
</div>

<!-- Modal -->
<div class="modal-book">
    <form>
        <div>
            <label>Titre</label>
            <input type="text" id="titleBook">
        </div>
        <div>
            <label for="">Auteur</label>
            <select name="author" id="">
                <option value="" disabled selected id='defaultAuthor'>Auteur</option>
                <?php foreach($namesAuthors as $nameAuthor):?>
                <option value="<?=$nameAuthor['lastname']?>"><?=$nameAuthor['lastname']?></option>
                <?php endforeach?>
            </select>
        </div>
        <div>
            <label>Date de publication</label>
            <input type="date" id="dateBook">
        </div>
        <div>
            <label>Image</label>
            <input type="file" id="imgBook" class="custom-file-input custom-file">
        </div>
        <div>
            <label>URL du pdf</label>
            <input type="file" id="urlBook" class="custom-file-input custom-file">
        </div>
        <div>
            <label>Résumé</label>
            <textarea id="resumeBook" cols="30" rows="10"></textarea>
        </div>
        <div>
            <button type="button" class="initialize style-btn" id="cancelBook">Annuler</button>
            <button type="button" class="initialize style-btn" id="submitBook">Valider</button>
        </div>
    </form>
</div>

<!-- ------------------------------ AUTEURS ------------------------------ -->
<div id="auteurs" class="content-block">
    <div class="filters">
        <div class="date">
            <select name="" id="" class="initialize">
                <option value="">Croissant</option>
                <option value="">Décroissant</option>
            </select>
        </div>
        <div class="search-bar">
            <input type="text" class="initialize style-input" placeholder="Rechercher par nom d'utilisateur...">
            <button class="initialize">
                <i class="bi bi-search"></i>
            </button>
        </div>
    </div>

    <div class="content">
        <table class="actions">
            <thead>
                <tr>
                    <th>Nom</th>
                    <th colspan="2">Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($authors as $author):?>
                <tr>
                    <td><?=$author['first_name_author']." ".$author['last_name_author']?></td>
                    <td>
                        <button class="initialize"><i class="bi bi-pencil-square"></i></button>
                    </td>
                    <td>
                        <button class="initialize style-btn">Supprimer</button>
                    </td>
                </tr>
                <?php endforeach?>
            </tbody>
        </table>
    </div>
    <br>
    <button class="initialize style-btn">Ajouter</button>
</div>


<!-- ------------------------------ GENRES ------------------------------ -->

<div id="genres" class="content-block">
    <div class="filters">
        <div class="date">
            <select name="" id="" class="initialize">
                <option value="">Croissant</option>
                <option value="">Décroissant</option>
            </select>
        </div>
        <div class="search-bar">
            <input type="text" class="initialize style-input" placeholder="Rechercher par nom d'utilisateur...">
            <button class="initialize">
                <i class="bi bi-search"></i>
            </button>
        </div>
    </div>

    <div class="content">
        <table class="actions">
            <thead>
                <tr>
                    <th>Genre</th>
                    <th colspan="2">Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($genres as $genre):?>
                <tr>
                    <td><?=$genre['name_genre']?></td>
                    <td>
                        <button class="initialize"><i class="bi bi-pencil-square"></i></button>
                    </td>
                    <td>
                        <button class="initialize style-btn">Supprimer</button>
                    </td>
                </tr>
                <?php endforeach?>
            </tbody>
        </table>
    </div>
    <br>
    <button class="initialize style-btn">Ajouter</button>
</div>