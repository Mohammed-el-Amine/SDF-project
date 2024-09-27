#!/bin/bash

# Attendre que MariaDB démarre complètement
echo "Attente de démarrage complet de MariaDB..."
while ! mysqladmin ping --silent; do
    sleep 1
done

# Créer un utilisateur avec des privilèges
echo "Création de l'utilisateur MariaDB..."
mysql -uroot -pmdpAmodifier -e "CREATE USER 'ibrahim'@'localhost' IDENTIFIED BY 'mdpAmodifier';"
mysql -uroot -pmdpAmodifier -e "GRANT ALL PRIVILEGES ON *.* TO 'ibrahim'@'localhost' WITH GRANT OPTION;"
mysql -uroot -pmdpAmodifier -e "FLUSH PRIVILEGES;"

echo "Utilisateur MariaDB créé avec succès."
