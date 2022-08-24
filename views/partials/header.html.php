<!DOCTYPE html>
<html>
<head>
    <title>MVC</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        table {
            border-radius: 10px;
            background-color: #fff;
            border: 1px solid grey;
            width: 70%;
        }

        thead {
            background-color: #F1F1F8;
        }

        #books-table td {
            border-top: 1px solid grey;
            padding: 10px;
            text-align: center;
            width: 200px;
        }

        #insert-book {
            border: 1px solid grey;
            width: 500px;
            margin: 0 30px;
            padding: 15px;
            text-align: center;
        }

        #insert-book p {
            margin-bottom: 10px;
            font-size: 20px;
            font-weight: bold;
            width: 470px;
        }

        #form {
            display: column-reverse;
        }

        input {
            margin: 20px;
            width: 100%;
        }
    </style>
</head>
<body>
    <div class="mx-auto">
        <div class="flex justify-center items-center py-4 rounded-md">
            <h2 class="text-3xl"><img src="../../public/img/book.png" alt="Books" /></h2>
            <ul>
                <li>
                    <a class="px-4" href="<?= BASE_URL; ?>/">Accueil</a>
                    <a class="px-4" href="<?= BASE_URL; ?>/book/list">Liste des livres</a>
                    <a class="px-4" href="<?= BASE_URL; ?>/user/create">Modifier un livre</a>
                    <a class="px-4" href="<?= BASE_URL; ?>/user/create">Supprimer un livre</a>
                </li>
            </ul>
        </div>
    </div>
