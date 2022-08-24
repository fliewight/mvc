<?php require __DIR__.'/../partials/header.html.php'; ?>

    <div class="mx-auto content-center flex items-center">
       <div id="insert-book" class="flex">
            <div class="flex-col flex-row-reverse" id="form">
                <p>Insert Employee Records</p>
                <form method="post">
                    <input type="text" name="name" placeholder="Titre du livre" /><br /><br />
                    <input type="number" name="price" placeholder="Prix du livre" /><br /><br />
                    <input type="number" name="isbn" placeholder="ISBN" /><br /><br />
                    <input type="text" name="author" placeholder="Auteur du livre" /><br /><br />
                    <input type="text" name="cover" placeholder="Couverture du livre" /><br /><br />
                    <button>Ajouter un livre</button>
                </form>
            </div>
        </div>
        <table id="books-table" class="rounded-md">
            <thead>
                <tr>
                    <td>Titre</td>
                    <td>Prix TTC</td>
                    <td>Code ISBN</td>
                    <td>Auteur</td>
                    <td>Date de parution</td>
                    <td>Couverture du livre</td>
                </tr>
            </thead>
            <tbody>
            <?php foreach ($books as $book) : ?>
                    <tr>
                        <td><?= $book->name; ?></td>
                        <td><?= $book->price; ?> €</td>
                        <td><?= $book->isbn; ?></td>
                        <td><?= $book->author; ?></td>
                        <td>
                            <?php
                                $dateToFrench = explode('-', $book->release_book);
                                
                                switch ($dateToFrench[2]) {
                                    case '01' : $dateToFrench[2] = 'janvier'; break;
                                    case '02' : $dateToFrench[2] = 'février'; break;
                                    case '03' : $dateToFrench[2] = 'mars'; break;
                                    case '04' : $dateToFrench[2] = 'avril'; break;
                                    case '05' : $dateToFrench[2] = 'mai'; break;
                                    case '06' : $dateToFrench[2] = 'juin'; break;
                                    case '07' : $dateToFrench[2] = 'juillet'; break;
                                    case '08' : $dateToFrench[2] = 'août'; break;
                                    case '10' : $dateToFrench[2] = 'octobre'; break;
                                    case '11' : $dateToFrench[2] = 'novembre'; break;
                                    case '12' : $dateToFrench[2] = 'décembre'; break;
                                }

                                echo $dateToFrench[1].' '.$dateToFrench[2].' '.$dateToFrench[0];
                            ?>
                        </td>
                        <td>
                            <?= $book->cover; ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

<?php require __DIR__.'/../partials/footer.html.php'; ?>
