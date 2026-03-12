<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo self::titulo; ?></title>
    <link rel="stylesheet" href="<?= INCLUDE_PATH_FULL; ?>css/style.css">
    <link rel="stylesheet" href="<?= INCLUDE_PATH_FULL; ?>css/header.css">
</head>
<body>
    <header>
        <div class="container">
            <div class="logo">
                <h1>Matheus da Cruz</h1>
            </div>
            <nav>
                <div class="menu">
                    <?php
                        foreach ($this->menuItens as $key => $value) {
                            echo "<a href='".strtolower($value)."'>".$value."</a>";
                        }
                    ?>
                </div>
            </nav>
        </div>
    </header>