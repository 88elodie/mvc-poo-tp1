<?php

RequirePage::requireModel('CRUD');
RequirePage::requireModel('Book');
RequirePage::requireModel('Auteur');
RequirePage::requireModel('Editeur');
RequirePage::requireModel('Categorie');

class ControllerBook{
    public function index(){
        $view = new view('book-index');
        $livres = new ModelBook;
        $select = $livres->select();
        $view->output('livres', $select);
    }
    public function list(){
        $livres = new ModelBook;
        $select = $livres->select();
        $view = new view('book-list');
        $view->output('livres', $select);
    }

    public function add(){
        $view = new view('book-add');
        //auteurs
        $auteurs = new ModelAuteur;
        $select = $auteurs->select();
        $view->output('auteurs', $select);
        //editeurs
        $editeurs = new ModelEditeur;
        $select = $editeurs->select();
        $view->output('editeurs', $select);
        //categories
        $categories = new ModelCategorie;
        $select = $categories->select();
        $view->output('categories', $select);

    }

    public function insert(){
        $data = $_POST;
        $livre = new ModelBook;
        $livre->insert($data);
        $this->list();
    }

    public function edit(){
        $livres = new ModelBook;
        $select = $livres->select();
        $view = new view('book-edit');
        $view->output('livres', $select);
        //auteurs
        $auteurs = new ModelAuteur;
        $select = $auteurs->select();
        $view->output('auteurs', $select);
        //editeurs
        $editeurs = new ModelEditeur;
        $select = $editeurs->select();
        $view->output('editeurs', $select);
        //categories
        $categories = new ModelCategorie;
        $select = $categories->select();
        $view->output('categories', $select);
    }

    public function update(){
        $data = $_POST;
        if($data['livre_id']){
            $id = $data['livre_id'];
            $livres = new ModelBook;
            $livres->update($data, $id);
        }elseif($data['auteur_id']){
            $id = $data['auteur_id'];
            $auteur = new ModelAuteur;
            $auteur->update($data, $id);
        }elseif($data['editeur_id']){
            $id = $data['editeur_id'];
            $editeur = new ModelEditeur;
            $editeur->update($data, $id);
        }elseif($data['categorie_id']){
            $id = $data['categorie_id'];
            $categorie = new ModelCategorie;
            $categorie->update($data, $id);
        }
        $this->list();

    }

    public function delete(){
        $data = $_POST;
        $livres = new ModelBook;
        $livres->delete($data);
        $this->list();
    }
}