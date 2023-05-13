<h1 class="dashboard-title">Gestion des utilisateurs</h1>

<div class="menu">
    <div><a href="#utilisateurs" class="menu-btn">Utilisateurs</a></div>
    <div><a href="#critiques" class="menu-btn">Critiques</a></div>
    <div><a href="#commentaires" class="menu-btn">Commentaires</a></div>
</div>


<!-- ------------------------------ UTILISATEURS ------------------------------ -->
<div id="utilisateurs" class="content-block active">
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
                    <th>Nom d'utilisateur</th>
                    <th>Adresse mail</th>
                    <th colspan="2">Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($users as $user):?>
                <tr>
                    <td><?=$user['name_user']?></td>
                        <td><?=$user['email_user']?></td>
                    <td>
                        <select name="" class="initialize" onchange="change_role(this, <?=$user['id_user']?>)">
                            <?php 
                            $defaultValue = $user['name_role'];
                            foreach($roles as $role):?>
                            <option value="<?=$role['id_role']?>" <?= $defaultValue == $role['name_role'] ? "selected" : ""?> >
                                <?=$role['name_role']?>
                            </option>
                            <?php endforeach?>
                        </select>
                    </td>
                    <td>
                        <button class="initialize" onclick="delete_user(this, <?=$user['id_user']?>)"><i class="bi bi-person-x"></i></button>
                    </td>
                </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
</div>



<!-- ------------------------------ CRITIQUES ------------------------------ -->
<div id="critiques" class="content-block">
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
                    <th>Critique</th>
                    <th>Nom d'utilisateur</th>
                    <th colspan="2">Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($reviews as $review):?>
                <tr>
                    <td class="reviews"><?=$review['comment']?></td>
                    <td><?=$review['username']?></td>
                    <td>
                        <button class="initialize" onclick="display_review(this, <?=$review['id_review']?>)"><i class="bi <?=$review['visible'] ? 'bi-eye': 'bi-eye-slash'?>"></i></button>
                    </td>
                    <td>
                        <button class="initialize style-btn" onclick="delete_review(this, <?=$review['id_review']?>)">Supprimer</button>
                    </td>
                </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
</div>


<!-- ------------------------------ COMMENTAIRES ------------------------------ -->

<div id="commentaires" class="content-block">
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
                    <th>Commentaire</th>
                    <th>Nom d'utilisateur</th>
                    <th colspan="2">Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($comments as $comment):?>
                <tr>
                    <td><?=$comment['comment']?></td>
                    <td><?=$comment['username']?></td>
                    <td>
                        <button class="initialize visibility"><i class="bi bi-eye"></i></button>
                    </td>
                    <td>
                        <button class="initialize style-btn" onclick="delete_comment(this, <?=$comment['id_comment']?>)">Supprimer</button>
                    </td>
                </tr>
                <?php endforeach?>
            </tbody>
        </table>
    </div>
</div>