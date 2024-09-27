FROM debian:buster-slim

ENV DEBIAN_FRONTEND=noninteractive

# Mise à jour des paquets, installation de Nginx et nettoyage
RUN apt-get update && \
    apt-get install -y ca-certificates locales locales-all nginx-extras openssl ssl-cert && \
    rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/* 

# Expose les ports HTTP et HTTPS
EXPOSE 80 443

# Copie de la configuration Nginx dans l'image
COPY ["default.conf", "/etc/nginx/conf.d/default.conf"]

# Créer le répertoire /var/www/html si ce n'est pas déjà fait
RUN mkdir -p /var/www/html

# Définir les permissions correctes pour les répertoires et fichiers
RUN chown -R www-data:www-data /var/www/html/* && \
    chmod -R 755 /var/www/html/

# Définition du répertoire de travail
WORKDIR /var/www/html

# Commande par défaut pour démarrer Nginx
CMD ["nginx", "-g", "daemon off;"]
