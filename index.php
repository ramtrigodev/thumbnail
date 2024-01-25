<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galeria de Imagens</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <style>
        .thumbnail-container {
            width: 200px;
            height: 200px;
            overflow: hidden;
        }

        .thumbnail-image {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
    </style>
</head>
<body>

<div class="container mt-4">

    <div class="row">
        <?php
        $diretorioImagens = './';
        $index = 0;
        if (is_dir($diretorioImagens)) {
          
            $imagens = glob($diretorioImagens . '/*.{jpg,jpeg,png,gif}', GLOB_BRACE);
            foreach ($imagens as $imagem) {
                echo '<div class="col-md-3 mb-3">';
                echo '<div class="thumbnail-container">';
                echo '<a href="' . $imagem . '" data-lightbox="galeria" data-title="Imagem ' . $index . '">';
                echo '<img src="' . $imagem . '" class="img-thumbnail thumbnail-image" alt="Imagem ' . $index . '">';
                echo '</a>';
                echo '</div>';
                echo '</div>';
                $index++;
            }
        } else {
            echo '<p class="col-md-12">Diretório de imagens não encontrado.</p>';
        }
        ?>
    </div>

    <div class="text-center mt-3">
        <form action="upload.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="imagem">Selecione uma imagem:</label>
                <input type="file" class="form-control-file" id="imagem" name="imagem" accept="image/*" required>
            </div>
            <button type="submit" class="btn btn-primary">Enviar Imagem</button>
        </form>
    </div>

</div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/js/lightbox.min.js"></script>

</body>
</html>
