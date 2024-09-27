#!/bin/bash
set -e

# Exécuter les scripts d'initialisation dans /docker-entrypoint-initdb.d/
for f in /docker-entrypoint-initdb.d/*; do
    case "$f" in
        *.sh)     echo "Exécution du script $f"; . "$f" ;;
        *.sql)    echo "Exécution du SQL $f"; mysql < "$f" ;;
        *.sql.gz) echo "Exécution du SQL $f"; gunzip -c "$f" | mysql ;;
        *)        echo "Ignorer $f" ;;
    esac
    echo
done

# Démarrer MariaDB
exec "$@"
