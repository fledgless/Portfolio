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
    <header>
        <nav>
            <i id="hamburger" class="fa-solid fa-bars"></i>
            <ul class="liste">
                <li>
                    <a class="liens" href="#portfolio">Accueil</a>
                </li>
                <li>
                    <a class="liens" href="#a-propos">A propos</a>
                </li>
                <li>
                    <a class="liens" href="#experiences">Expériences</a>
                </li>
                <li>
                    <a class="liens" href="#projets">Projets</a>
                </li>
                <li>
                    <a class="liens" href="#contact">Contact</a>
                </li>
            </ul>
        </nav>
    </header>
    
    <main>
        <section id="portfolio">
            <h1>Mon portfolio</h1>
            <h2 style="color: white;">Cameron Cardinal</h2>
            <h2 style="color: white;">Développeur web et web mobile</h2>
            <div id="reseaux">
                <a target="_blank" href="https://github.com/fledgless"><i class="fa-brands fa-github fa-xl" style="color: #406e8e;"></i></a>
                <a target="_blank" href="https://www.linkedin.com/in/cameron-cardinal-a4158b231/"><i class="fa-brands fa-linkedin-in fa-xl" style="color: #406e8e;"></i></a>
                <a target="_blank" href="mailto:cameriancardinal@gmail.com"><i class="fa-solid fa-envelope fa-xl" style="color: #406e8e;"></i></a>
            </div>
        </section>
        <section id="a-propos">
            <h2>A-propos</h2>
            <hr width="1" size="5"/>
            <div id="paragraphe">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic commodi in temporibus non rem! Quod impedit vero voluptate perferendis repudiandae molestias ut tenetur, saepe, fuga a magni cumque debitis repellat. Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus natus nulla id totam commodi voluptates dignissimos rerum molestias officiis harum molestiae at accusamus dicta ad ex fuga, tempore facilis nemo.</p>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Perferendis dolores quasi nam asperiores! Modi optio a hic provident reiciendis inventore ipsa quisquam non, quos temporibus quam saepe possimus sed veritatis?</p>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Perferendis dolore, praesentium cum quidem sed tenetur repellendus quam nostrum, a ipsum sit nesciunt neque perspiciatis, incidunt ad ex placeat accusantium impedit! Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta maxime tempore eveniet sit architecto consectetur dolorem? Quibusdam, quod facere? Eius architecto sint in mollitia officiis quidem dolorum similique enim nesciunt!</p>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Numquam asperiores rem dolore blanditiis quis. Modi earum odio neque adipisci! Labore perspiciatis enim temporibus similique expedita aperiam atque omnis impedit corporis.</p>
            </div>
        </section>
        <section id="experiences">
            <h2>Expériences</h2>
            <hr width="1" size="500"/>
            <div id="experience">
                <h3>Expérience n°1</h3>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maxime placeat eos alias maiores quae, necessitatibus, doloribus labore eligendi consectetur perspiciatis voluptatum. Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum deserunt, excepturi dolore deleniti molestiae id sit consequuntur maxime inventore ullam recusandae amet atque laborum tempore vel, et commodi, quaerat temporibus.</p>   
                <!-- <hr width="900" size="1"/> -->
                <h3>Expérience n°2</h3>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maxime placeat eos alias maiores quae, necessitatibus, doloribus labore eligendi consectetur perspiciatis voluptatum. Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum deserunt, excepturi dolore deleniti molestiae id sit consequuntur maxime inventore ullam recusandae amet atque laborum tempore vel, et commodi, quaerat temporibus.</p>    
                <!-- <hr width="900" size="1"/> -->
                <h3>Expérience n°3</h3>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maxime placeat eos alias maiores quae, necessitatibus, doloribus labore eligendi consectetur perspiciatis voluptatum. Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum deserunt, excepturi dolore deleniti molestiae id sit consequuntur maxime inventore ullam recusandae amet atque laborum tempore vel, et commodi, quaerat temporibus.</p>  
            </div>
        </section>
        <section id="projets">
            <h2>Projets</h2>
            <hr width="500" size="2"/>
            <div id="projet">
                <div class="projet">
                    <img src="Portfolio.png" alt="Image projet 1 ">
                    <h3><a target="_blank" href="https://github.com/fledgless/Portfolio">Ce portfolio</a></h3>
                </div>
                <div class="projet">
                    <img src="#" alt="Image projet 2">
                    <h3>Projet n°2</h3>
                </div>    
                <div class="projet">
                    <img src="#" alt="Image projet 3">
                    <h3>Projet n°3</h3>
                </div>
                <div class="projet">
                    <img src="#" alt="Image projet 4">
                    <h3>Projet n°4</h3>
                </div>
                <div class="projet">
                    <img src="#" alt="Image projet 5">
                    <h3>Projet n°5</h3>
                </div>
            </section>
        <section id="contact">
            <h2>Contact</h2>
            <hr width="500" size="2"/>
            <div class="form"> 
                <div id="error_message"></div> 
                <form action="" 
                    id="myform" 
                    onsubmit="return validate();"> 
                    <div class="input_field"> 
                        <input type="text" 
                            placeholder="Nom" 
                            id="name"> 
                    </div> 
                    <div class="input_field"> 
                        <input type="text" 
                            placeholder="Sujet" 
                            id="subject"> 
                    </div> 
                    <div class="input_field"> 
                        <input type="text" 
                            placeholder="Adresse mail" 
                            id="email"> 
                    </div> 
                    <div class="input_field"> 
                        <textarea placeholder="Message" 
                                id="message"> 
                        </textarea> 
                    </div> 
                    <button>Envoyer</button>
                </form> 
            </div> 
        </section>
    </main>
    
    <footer>
        
    </footer>
</div>

</html>