FROM debian:jessie

ENV DEBIAN_FRONTEND=noninteractive

# Installer MariaDB
RUN apt-get update && \
    apt-get install -y mariadb-server && \
    apt-get clean && \
    rm -rf /var/lib/apt/lists/*

# Ajouter le script d'initialisation
COPY ./init_db.sh /usr/local/bin/init_db.sh
RUN chmod +x /usr/local/bin/init_db.sh

# Configurations de MariaDB (copier un fichier de configuration si nécessaire)
COPY ./COPY/my.cnf /etc/mysql/my.cnf

# Exposer le port 3306
EXPOSE 3306

# Démarrer MariaDB et exécuter le script d'initialisation
CMD ["sh", "-c", "mysqld_safe & sleep 10 && /usr/local/bin/init_db.sh && tail -f /var/log/mysql/error.log"]
