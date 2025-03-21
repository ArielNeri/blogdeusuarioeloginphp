<?php
$profile = [
    "name" => "Pedro Ariel Neri Barros Melo",
    "address" => "Rua tenente oliveira 15 ",
    "email" => "pedroarielnery08@gmail.com",
    "phone" => "82 98803-5050",
    "categories" => ["Programador", "Tecnico", "Full Stack",],
    "description" => "Cursando tecnico em programação no Senai.",
];

// Caminho para a imagem do usuário
$caminho_imagem = "https://img.myloview.com.br/quadros/icone-de-vetor-de-login-de-conta-de-pessoa-de-usuario-700-142085896.jpg"; // Substitua pelo caminho real da sua imagem
$link_github = "https://github.com/ArielNeri";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Page</title>
    <style>
        body { font-family: Arial, sans-serif; max-width: 800px; margin: auto; }
        .container { display: flex; align-items: flex-start; }
        .profile-img { width: 100px; height: 100px; margin-right: 20px; border-radius: 50%; overflow: hidden;}
        .profile-img img{width: 100%; height: auto;}
        .categories { font-weight: bold; }
        .attachments { margin-top: 20px; }
        .attachment-item { display: block; }
        footer {text-align: center; margin-top:20px;}
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
        <p>Phone: <?php echo $profile["phone"]; ?></p>
        <p class="categories">
            <?php echo implode(" | ", $profile["categories"]); ?>
        </p>
    </div>
</div>
<p><?php echo $profile["description"]; ?></p>

<footer>
    <p>Localização: Maceió AL</p>
</footer>

</body>
</html>