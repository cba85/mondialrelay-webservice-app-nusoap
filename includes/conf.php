<?php

/**
 * Web Application parameters
 */
$version = '1.0.1';
$repository = 'https://github.com/cba85/mondialrelay-webservice';

/**
 * i18n
 * You can choose between "fr" or "en"
 */
$LANG = 'fr';

/**
 * Mondial Relay webservice default parameters
 */
$Enseigne       = 'BDTEST13';
$ClePrivee     = 'PrivateK';

/**
 * Mondial Relay parameters
 */
$mondialrelay = 'http://www.mondialrelay.fr/';
$mondialrelayContact = 'http://www.mondialrelay.fr/solutionspro/contact/';

/**
 * Status
 *
 * @param $callback
 *
 * @return string
 */
function statut($callback)
{
    switch ($callback)
    {
        case 1:
            return "Enseigne invalide";
            break;
        case 2:
            return "Numéro d'enseigne vide ou inexistant";
            break;
        case 3:
            return "Numéro de compte enseigne invalide";
            break;
        case 5:
            return "Numéro de dossier enseigne invalide";
            break;
        case 7:
            return "Numéro de client enseigne invalide";
            break;
        case 8:
            return "Mot de passe ou hashage invalide";
            break;
        case 9:
            return "Ville non reconnu ou non unique";
            break;
        case 10:
            return "Type de collecte invalide";
            break;
        case 11:
            return "Numéro de Relais de Collecte invalide";
            break;
        case 12:
            return "Pays de Relais de Collecte invalide";
            break;
        case 13:
            return "Type de livraison invalide";
            break;
        case 14:
            return "Numéro de Relais de livraison invalide";
            break;
        case 15:
            return "Pays de Relais de livraison invalide";
            break;
        case 20:
            return "Poids du colis invalide";
            break;
        case 21:
            return "Taille (Longueur + Hauteur) du colis invalide";
            break;
        case 22:
            return "Taille du colis invalide";
            break;
        case 24:
            return "Numéro d'expédition ou de suivi invalide";
            break;
        case 26:
            return "Temps de montage invalide";
            break;
        case 27:
            return "Mode de collecte ou de livraison invalide";
            break;
        case 28:
            return "Mode de collecte invalide";
            break;
        case 29:
            return "Mode de livraison invalide";
            break;
        case 30:
            return "Adresse (L1) invalide";
            break;
        case 31:
            return "Adresse (L2) invalide";
            break;
        case 33:
            return "Adresse (L3) invalide";
            break;
        case 34:
            return "Adresse (L4) invalide";
            break;
        case 35:
            return "Ville invalide";
            break;
        case 36:
            return "Code postal invalide";
            break;
        case 37:
            return "Pays invalide";
            break;
        case 38:
            return "Numéro de téléphone invalide";
            break;
        case 39:
            return "Adresse e-mail invalide";
            break;
        case 40:
            return "Paramètres manquants";
            break;
        case 42:
            return "Montant CRT invalide";
            break;
        case 43:
            return "Devise CRT invalide";
            break;
        case 44:
            return "Valeur du colis invalide";
            break;
        case 45:
            return "Devise de la valeur du colis invalide";
            break;
        case 46:
            return "Plage de numéro d'expédition épuisée";
            break;
        case 47:
            return "Nombre de colis invalide";
            break;
        case 48:
            return "Multi-Colis Relais interdit";
            break;
        case 49:
            return "Action invalide";
            break;
        case 60:
            return "Champ texte libre invalide (Ce code erreur n'est pas invalidant)";
            break;
        case 61:
            return "Top avisage invalide";
            break;
        case 62:
            return "Instruction de livraison invalide";
            break;
        case 63:
            return "Assurance invalide";
            break;
        case 64:
            return "Temps de montage invalide";
            break;
        case 65:
            return "Top rendez-vous invalide";
            break;
        case 66:
            return "Top reprise invalide";
            break;
        case 67:
            return "Latitude invalide";
            break;
        case 68:
            return "Longitude invalide";
            break;
        case 69:
            return "Code Enseigne invalide";
            break;
        case 70:
            return "Numéro de Point Relais invalide";
            break;
        case 71:
            return "Nature de point de vente non valide";
            break;
        case 74:
            return "Langue invalide";
            break;
        case 78:
            return "Pays de collecte invalide";
            break;
        case 79:
            return "Pays de livraison invalide";
            break;
        case 80:
            return "Code tracing : colis enregistré";
            break;
        case 81:
            return "Code tracing : colis en traitement chez Mondial Relay";
            break;
        case 82:
            return "Code tracing : colis livré";
            break;
        case 83:
            return "Code tracing : anomalie";
            break;
        case 84:
            return "(Réservé Code Tracing)";
            break;
        case 85:
            return "(Réservé Code Tracing)";
            break;
        case 86:
            return "(Réservé Code Tracing)";
            break;
        case 87:
            return "(Réservé Code Tracing)";
            break;
        case 88:
            return "(Réservé Code Tracing)";
            break;
        case 89:
            return "(Réservé Code Tracing)";
            break;
        case 93:
            return "Aucun élément retourné par le plan de tri<br>Si vous effecture une collecte ou une livraison en Point Relaus, vérifiez que les Point Relais soient bien disponibles. Si vous effectuez une livraison à domicile, il est probable que le code postal que vous avez indiquez n'existe pas.";
            break;
        case 94:
            return "Colis inexistant";
            break;
        case 95:
            return "Compte Enseigne non activé";
            break;
        case 96:
            return "Type d'enseigne incorrect en Base";
            break;
        case 97:
            return "Clé de sécurité invalide";
            break;
        case 98:
            return "Erreur générique (Paramètres invalides)<br>Cette erreur masque une autre erreur de la liste et ne peut se produire que dans le cas où le compte utlisé est en mode \"Production\"";
            break;
        case 99:
            return "Erreur générique du service<br>Cette erreur peut être dû à un problème technique du service.<br> Veuillez notifier cette erreur à Mondial Relay en précisant la date et l'heure de la requête ainsi que les paramètres envoyés afin d'effectuer une vérification.";
            break;
        default:
            return "Aucune information disponible sur cette erreur";
            break;
    }
}