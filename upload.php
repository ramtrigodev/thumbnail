<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $diretorioImagens = './';
    $nomeArquivo = $_FILES["imagem"]["name"];
    $caminhoDestino = $diretorioImagens . $nomeArquivo;

    
    if (move_uploaded_file($_FILES["imagem"]["tmp_name"], $caminhoDestino)) {
        header("Location: index.php");
        exit();
    } else {
        echo "Erro ao fazer o upload da imagem.";
    }
}
?>
