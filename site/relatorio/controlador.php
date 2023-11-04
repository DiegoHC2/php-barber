<?php
?>
<?php
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../bootstrap-4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../fontawesome-6.4.2/css/fontawesome.css">
    <link rel="stylesheet" href="../../fontawesome-6.4.2/css/brands.css">
    <link rel="stylesheet" href="../../fontawesome-6.4.2/css/solid.css">
    <script src="../../jquery/code.jquery.com_jquery-3.5.1.min.js"></script>
    <script src="../../bootstrap-4.0.0/js/bootstrap.min.js"></script>
    <script src="../../fontawesome-6.4.2/js/fontawesome.min.js"></script>
    <title>Gerar Relatório</title>
</head>
<body class="bg-dark ">
<div class="text-center" style="display:flex;justify-content: center;">
    <div class="bg-light" style="margin-top:20%;width:400px;padding:50px;">
        <label for="birthday" style="font-size:25px;font-weight: bold;">Selecione o mês para emitir relatório:</label>
        <form method="POST" action="home.php">
            <input type="date" id="birthday" name="data" style="margin-top:5px;border:none;background-color: darkslategrey;font-weight: bold;padding:10px;border-radius: 10px;color:white;">
            <br>
            <button class="btn btn-success mt-4" style="font-weight: 500; font-size:19px; width: 150px; text-transform: uppercase;font-family: revert;letter-spacing: 2px;">Emitir</button>
        </form>
    </div>
</div>
</body>
<script>
</script>
<style>
</style>
</html>
