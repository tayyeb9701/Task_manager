Instructions pour lancer l'application : 

- lancer le serveur avec cette commande : symfony server:start


Instructions pour exécuter les tests via POSTMAN : 

- pour tester la méthode POST : choisir la methode POST puis rentrer l'url du serveur/domaine (http://127.0.0.1:8000/api/tasks). Dans body selectionner RAW puis JSON. Entrer les information.

  Exemple :
  {
  "title": "Nouvelle tâche",
  "description": "Description de la tâche",
  "status": "todo"
  }

  Appuyer sur SEND. Une fois la tache enregistrer ce message devrais s'afficher :

  {
    "message": "Task created successfully"
  }



- pour tester la methode PUT/PATCH : choisir la methode PUT ou PATCH puis rentrer l'url du serveur/domaine avec l'id de la tache a mettre a jour (http://127.0.0.1:8000/api/tasks/7)


  Dans body selectionner RAW puis JSON. Entrer les information

  Exemple :
  {
  "title": "tâche mis a jour",
  "description": "Description de la tâche mis a jour",
  "status": "done "
  }

  Appuyer sur SEND. Une fois la tache mis a jour ce message devrais s'afficher :

  {
    "message": "Task updated successfully"
  }

- pour tester la methode DELETE : choisir la methode DELETE puis rentrer l'url du serveur/domaine avec l'id de la tache a supprimer (http://127.0.0.1:8000/api/tasks/7).
  
  Appuyer sur SEND. Une fois la tache supprimer ce message devrais s'afficher :

  {
    "message": "Task deleted successfully"
  }

  
