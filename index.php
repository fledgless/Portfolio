<!DOCTYPE html>
<html lang="fr">

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <title>Cameron | Portfolio</title>
    <script src="index.js" defer></script>
</head>

<body>

</body>
<div id="container">
    <!-- le header qui contient notre entête de site (logo, nav etc) -->
    <header>
        <nav>
            <!-- id = unique (1 seul par page ) -->
            <i onclick="openMenu()" class="fa-solid fa-bars"></i>
            <ul class="liste">
                <!-- plusieurs classes possibles -->
                <li>
                    <a onclick="openMenu()" class="liens" href="#a-propos">A propos</a>
                </li>
                <li>
                    <a onclick="openMenu()" class="liens" href="#experiences">Expériences</a>
                </li>
                <li>
                    <a onclick="openMenu()" class="liens" href="#projets">Projets</a>
                </li>
                <li>
                    <a onclick="openMenu()" class="liens" href="#contact">Contact</a>
                </li>
            </ul>
        </nav>
    </header>
    <!-- contenu principal changeant à chaque page -->
    <main>
        <section id="portfolio">
            <h1>Mon portfolio</h1>
            <h2 style="text-align: center;">Cameron Cardinal</h2>
            <h2 style="text-align: center;">Développeur web et web mobile</h2>
        </section>
        <section id="a-propos">
            <h2>A-propos</h2>
            <div id="paragraphe">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic commodi in temporibus non rem! Quod impedit vero voluptate perferendis repudiandae molestias ut tenetur, saepe, fuga a magni cumque debitis repellat.</p>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Perferendis dolores quasi nam asperiores! Modi optio a hic provident reiciendis inventore ipsa quisquam non, quos temporibus quam saepe possimus sed veritatis?</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta maxime tempore eveniet sit architecto consectetur dolorem? Quibusdam, quod facere? Eius architecto sint in mollitia officiis quidem dolorum similique enim nesciunt!</p>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Numquam asperiores rem dolore blanditiis quis. Modi earum odio neque adipisci! Labore perspiciatis enim temporibus similique expedita aperiam atque omnis impedit corporis.</p>
            </div>
        </section>
        <section id="experiences">
            <h2>Expériences</h2>
            <div id="experience">
                <h3>Expérience n°1</h3>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maxime placeat eos alias maiores quae, necessitatibus, doloribus labore eligendi consectetur perspiciatis voluptatum. Sunt exercitationem omnis iste excepturi, similique voluptatibus eius itaque!</p>   
                <h3>Expérience n°2</h3>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maxime placeat eos alias maiores quae, necessitatibus, doloribus labore eligendi consectetur perspiciatis voluptatum. Sunt exercitationem omnis iste excepturi, similique voluptatibus eius itaque!</p>    
                <h3>Expérience n°3</h3>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maxime placeat eos alias maiores quae, necessitatibus, doloribus labore eligendi consectetur perspiciatis voluptatum. Sunt exercitationem omnis iste excepturi, similique voluptatibus eius itaque!</p>  
            </div>
        </section>
        <section id="projets">
            <h2>Projets</h2>
            <div id="projet">
                <div id="projet1">
                    <img src="Portfolio.png" alt="Image projet 1">
                    <h3><a target="_blank" href="https://github.com/fledgless/Portfolio">Ce portfolio</a></h3>
                </div>
                <div id="projet2">
                    <img src="#" alt="Image projet 2">
                    <h3>Projet n°2</h3>
                </div>    
                <div id="projet3">
                    <img src="#" alt="Image projet 3">
                    <h3>Projet °3</h3>
                </div>
            </section>
        <section id="contact">
            <h2>Contact</h2>
        </section>
    </main>
    <!-- notre pied de page -->
    <footer>
        
    </footer>
</div>

</html>