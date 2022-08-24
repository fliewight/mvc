<?php

namespace M2i\Mvc\Controller;

use M2i\Mvc\Model\Book;
use M2i\Mvc\View;

class BookController extends Controller
{
    public function list()
    {
        $books = Book::all();

        return View::render('book/list', [
            'books' => $books,
        ]);
    }

    public function create()
    {
        $book = new Book();

        $book->name = $_POST['title'] ?? null;
        $book->price = $_POST['price'] ?? null;
        $book->isbn = $_POST['isbn'] ?? null;
        $book->author = $_POST['author'] ?? null;
        $book->release = $_POST['release'] ?? null;
        $book->cover = $_POST['cover'] ?? null;

        $errors = [];
        $success = false;

        if (!empty($_POST)) {
            if (empty($book->name)) {
                $errors['title'] = 'Le titre est invalide.';
            }

            if (empty($book->price)) {
                $errors['price'] = 'Le prix est invalide.';
            }

            if (empty($book->isbn) || 
                !preg_match('^(?:ISBN(?:-13)?:?\ )?(?=[0-9]{13}$|(?=(?:[0-9]+[-\ ]){4})[-\ 0-9]{17}$)97[89][-\ ]?[0-9]{1,5}[-\ ]?[0-9]+[-\ ]?[0-9]+[-\ ]?[0-9]$', $book->isbn)) {
                $errors['isbn'] = 'Le numéro ISBN est invalide.';
            }

            if (empty($book->author)) {
                $errors['author'] = 'L\'auteur est invalide.';
            }

            if (empty($book->release)) {
                $errors['release'] = 'La date de parution est invalide.';
            }

            if (empty($book->cover)) {
                $errors['cover'] = 'L\'image est invalide.';
            }

            if (empty($errors)) {
                $success = $book->save();
            }
        }

        return View::render('book/create', [
            'errors' => $errors,
            'success' => $success,
        ]);
    }

    public function show($id)
    {
        // @todo Ajouter une méthode statique find dans le modèle
        // Cela doit être une instance du modèle
        $book = Book::find($id);

        if (! $book) {
            return $this->notFound();
        }

        // @todo renvoyer une vue pour afficher les détails de l'utilisateur
        // On pourrait accèder à la page en cliquant sur un utilisateur dans la liste
        return View::render('book/show', [
            'book' => $book,
        ]);
    }

    public function delete()
    {

    }
}
