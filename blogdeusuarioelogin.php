<?php
$profile = [
    "name" => "Pedro Ariel Neri Barros Melo",
    "address" => "Rua Tenente Oliveira 15",
    "email" => "pedroarielnery08@gmail.com",
    "phone" => "82 98803-5050",
    "categories" => ["Programador", "Técnico", "Full Stack Developer"],
    "description" => "Cursando técnico em programação no Senai, com objetivo de me tornar um programador full stack altamente qualificado. Busco constantemente expandir meus conhecimentos em desenvolvimento de software, contribuindo para projetos inovadores que desafiem minhas habilidades técnicas e criativas.",
    "career_goals" => "Desenvolver uma carreira sólida na área de desenvolvimento full stack, com foco em tecnologias modernas de front-end (HTML, CSS, JavaScript, React) e back-end (PHP, Node.js, SQL). Almejo atuar em projetos que envolvam criação de aplicações web escaláveis e seguras, aprimorando a experiência do usuário e as funcionalidades dos sistemas.",
    "skills" => [
        "Desenvolvimento Web (HTML, CSS, JavaScript, PHP)",
        "Programação Orientada a Objetos (POO)",
        "Frameworks de Front-end e Back-end",
        "Trabalho em equipe e Metodologias Ágeis",
        "Versionamento de Código (Git/GitHub)",
    ],
];

// Caminho para a imagem do usuário
$caminho_imagem = "https://img.myloview.com.br/quadros/icone-de-vetor-de-login-de-conta-de-pessoa-de-usuario-700-142085896.jpg";
$link_github = "https://github.com/ArielNeri";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Currículo - Pedro Ariel Neri Barros Melo</title>
    <style>
        :root {
            --primary-color: #4A90E2;
            --secondary-color: #34495E;
            --background-color: #F3F4F6;
            --card-background: #FFFFFF;
            --text-color: #333;
            --footer-text: #888;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            max-width: 800px;
            margin: auto;
            padding: 20px;
            background-color: var(--background-color);
            color: var(--text-color);
        }

        h1, h2 {
            color: var(--primary-color);
        }

        a {
            color: var(--primary-color);
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }

        .container {
            display: flex;
            align-items: flex-start;
            margin-bottom: 20px;
        }

        .profile-img {
            width: 100px;
            height: 100px;
            margin-right: 20px;
            border-radius: 50%;
            overflow: hidden;
            border: 3px solid var(--primary-color);
        }

        .profile-img img {
            width: 100%;
            height: auto;
        }

        .section {
            background: var(--card-background);
            padding: 20px;
            margin-top: 10px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        .categories, .skills ul {
            font-weight: bold;
        }

        ul {
            list-style-type: none;
            padding: 0;
        }

        footer {
            text-align: center;
            margin-top: 20px;
            color: var(--footer-text);
        }

        .skills ul {
            margin: 10px 0;
            padding: 10px;
            background-color: var(--background-color);
            border-radius: 8px;
        }

        .skills li {
            margin: 5px 0;
            background-color: var(--primary-color);
            color: white;
            padding: 8px;
            border-radius: 5px;
            text-align: center;
            font-size: 14px;
        }
    </style>
</head>
<body>

<h1><?php echo $profile["name"]; ?></h1>

<div class="container">
    <div class="profile-img">
        <a href="<?php echo $link_github; ?>"><img src="<?php echo $caminho_imagem; ?>" alt="Foto do usuário"></a>
    </div>
    <div>
        <p><?php echo $profile["address"]; ?></p>
        <p>Email: <a href="mailto:<?php echo $profile["email"]; ?>"><?php echo $profile["email"]; ?></a></p>
        <p>Telefone: <?php echo $profile["phone"]; ?></p>
        <p class="categories"><?php echo implode(" | ", $profile["categories"]); ?></p>
    </div>
</div>

<div class="section">
    <h2>Descrição do Perfil</h2>
    <p><?php echo $profile["description"]; ?></p>
</div>

<div class="section">
    <h2>Objetivos de Carreira</h2>
    <p><?php echo $profile["career_goals"]; ?></p>
</div>

<div class="section">
    <h2>Habilidades Técnicas</h2>
    <div class="skills">
        <ul>
            <?php foreach ($profile["skills"] as $skill) {
                echo "<li>$skill</li>";
            } ?>
        </ul>
    </div>
</div>

<footer>
    <p>Localização: Maceió, AL</p>
    <p>GitHub: <a href="<?php echo $link_github; ?>" target="_blank"><?php echo $link_github; ?></a></p>
</footer>

</body>
</html>
