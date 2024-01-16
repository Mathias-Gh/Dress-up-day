Projet PHP : Site d'E-Commerce avec : 
Malicia, Tom, Charles, Aurelien, Matthias

# Dress UP
******Utilisation d'un Layout(view), de l'Objet (modèle), de sessions (panier, login), de controllers, de l'objet PDO (DAO) ******

Il s'agit d'une boutique qui permet à un utilisateur de mettre des produits dans un panier et de passer une commande.

Au niveau de la bdd : 4 tables : Client - Commande - LigneCommande - Produit (le script sql est dans le dossier config)(!!il manque une contrainte d'unicité sur le champ email du client!!)

Il y a 2 types d'utilisateurs :

Le client qui peut se logger et passer une commande et également modifier son compte

Exemple de client identifiant : coding@gmail.com
password : 1234

L'admin qui lui peut faire le CRUD sur les clients et les produits

Compte Administrateur identifiant : admin@dress-up.com
password : admin

