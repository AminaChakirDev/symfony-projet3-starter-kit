/*
 * Welcome to your app's main JavaScript file!
 *
 * We recommend including the built version of this JavaScript file
 * (and its CSS file) in your base layout (base.html.twig).
 */

// any CSS you import will output into a single css file (app.css in this case)
import './styles/app.scss';

// start the Stimulus application
import './bootstrap';

// Importez Masonry depuis le package
import Masonry from 'masonry-layout';

// Attendez que le contenu du DOM soit chargé avant d'initialiser Masonry
document.addEventListener('DOMContentLoaded', () => {
  // Initialisez Masonry sur votre grille
  new Masonry('.grid', {
    itemSelector: '.grid-item',
    percentPosition: true,
    gutter: 10 // Vous pouvez ajuster l'espace entre les éléments ici
  });
});