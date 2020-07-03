# ynov_b2_symfony

# 1. Qu'est-ce qu'un DTO et à quoi sert-il ? 

Tout simplement avec le principe de DTO (Data Transfer Object). Son but est de transformer la donnée brut en objet afin de faciliter la lisibilité et maintenabilité du code.

# 2. Quelle est la différence entre un listener et un subscriber dans Symfony ? 

Autant un subscriber doit implémenter une SubscriberInterface, autant une classe listener est une class PHP standard qu'on enregistre comme un service dans le DIC. 
C'est l'enregistrement dans le DIC qui indique quel évènement est écouté et quel méthode doit être appelée.

# 3. Qu'est-ce qu'un JWT ? Pourquoi l'utilise-t-on plutôt que les sessions PHP ?

Le principe d’authentification JSON Web Tokens est de retourner un token chiffré grâce à une clé secrète (en utilisant l’algorithme HMAC) ou en utilisant des clés de chiffrements de type SHA256 ou ECDSA par exemple. 
Le token comporte directement les information client tel que le username. Les sessions peuvent être modifiables, elles sont donc moins sécurisées.

# 4. Qu'est-ce que CORS ? 

Le « Cross-origin resource sharing » (CORS) ou « partage des ressources entre origines multiples » (en français, moins usité) est un mécanisme qui consiste à ajouter des en-têtes HTTP afin de permettre à un agent utilisateur d'accéder à des ressources d'un serveur situé sur une autre origine que le site courant.

# 5. Quelle est la différence entre JSON et JSON-LD ?

json ld permet d'avoir plus d'informations que le json. Il contient notamment des informations tel @id et @type. (informations pour le developeur).
