# Laravel-StockManager-Project

Application web de gestion de stock développée avec le framework Laravel.

## 📌 Description

Ce projet est une application de gestion de stock permettant à un utilisateur de :

- Créer des **profils** (utilisateurs, clients, etc.)
- Ajouter des **produits** liés à un profil
- Consulter tous les produits via un tableau dynamique
- Modifier les informations des produits existants

Les données sont stockées dans une base de données **MySQL (phpMyAdmin)**.

> 🔧 **Ce projet est actuellement en cours de développement. De nouvelles fonctionnalités ainsi que des optimisations sont prévues dans les prochaines versions.**

## 🛠️ Technologies utilisées

- PHP / Laravel
- Blade (système de templates Laravel)
- HTML / CSS
- MySQL
- Git

## ⚙️ Fonctionnalités

- ✅ Ajout de profils
- ✅ Enregistrement de produits avec liaison à un profil
- ✅ Affichage dynamique des produits dans un tableau
- ✅ Modification,Suppression des produits
- ⏳ filtrage avancé, authentification à venir

## 📂 Structure du projet

- `/app/Models` – Modèles Eloquent (AddProduct, AddProfil)
- `/resources/views` – Vues Blade (register, welcome, profil, etc.)
- `/routes/web.php` – Définition des routes
- `/app/Http/Controllers` – Contrôleur principal (`AddproductController`)

## 🚀 Lancer le projet localement

1. Cloner le projet :
   ```bash
   git clone https://github.com/tonpseudo/Laravel-StockManager-Project.git
