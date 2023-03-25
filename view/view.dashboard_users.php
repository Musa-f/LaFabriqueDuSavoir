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
                <tr>
                    <td>user898</td>
                    <td>user@mail.com</td>
                    <td>
                        <select name="" id="" class="initialize">
                            <option value="">Membre</option>
                            <option value="">Admin</option>
                        </select>
                    </td>
                    <td>
                        <button class="initialize"><i class="bi bi-person-x"></i></button>
                    </td>
                </tr>
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
                <tr>
                    <td>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Perferendis tenetur, labore nihil quidem molestiae soluta dolores omnis eligendi nobis doloribus ducimus nesciunt</td>
                    <td>user@mail.com</td>
                    <td>
                        <button class="initialize"><i class="bi bi-eye"></i></button>
                    </td>
                    <td>
                        <button class="initialize style-btn">Supprimer</button>
                    </td>
                </tr>
                <tr>
                    <td>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Perferendis tenetur, labore nihil quidem molestiae soluta dolores omnis eligendi nobis doloribus ducimus nesciunt</td>
                    <td>user@mail.com</td>
                    <td>
                        <button class="initialize"><i class="bi bi-eye"></i></button>
                    </td>
                    <td>
                        <button class="initialize style-btn">Supprimer</button>
                    </td>
                </tr>
                <tr>
                    <td>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Perferendis tenetur, labore nihil quidem molestiae soluta dolores omnis eligendi nobis doloribus ducimus nesciunt</td>
                    <td>user883939@mail.com</td>
                    <td>
                        <button class="initialize visibility"><i class="bi bi-eye"></i></button>
                    </td>
                    <td>
                        <button class="initialize style-btn">Supprimer</button>
                    </td>
                </tr>
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
                <tr>
                    <td>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Perferendis tenetur, labore nihil quidem molestiae soluta dolores omnis eligendi nobis doloribus ducimus nesciunt</td>
                    <td>user883939@mail.com</td>
                    <td>
                        <button class="initialize visibility"><i class="bi bi-eye"></i></button>
                    </td>
                    <td>
                        <button class="initialize style-btn">Supprimer</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>