#!/bin/bash
# Script pour ajouter le bouton retour dans tous les footers
# Usage: bash add-return-button.sh

OLD_FOOTER='        <div class="border-t border-gray-700 pt-8 text-center text-gray-400 text-sm">
            <p>&copy; 2026 GFE - Goncalves Frères Étanchéité | Tous droits réservés</p>
            <p class="mt-2">Entreprise d'"'"'étanchéité depuis 2011 | Siège : 116 Impasse des Rippes, 73800 Chignin - Savoie</p>
            <p class="mt-4 text-gray-500 text-xs italic">Créé en toute discrétion par <a href="https://site.agencedelombre.fr" target="_blank" rel="noopener" class="text-gray-400 hover:text-white transition-colors underline">l'"'"'Agence de L'"'"'Ombre</a></p>
        </div>'

NEW_FOOTER='        <div class="border-t border-gray-700 pt-8 text-center text-gray-400 text-sm">
            <div class="mb-6">
                <a href="index.html" class="inline-block bg-gradient-to-r from-blue-600 to-cyan-500 text-white px-8 py-3 rounded-full font-semibold hover:scale-105 transition-transform duration-300 shadow-lg hover:shadow-xl">
                    <i class="fas fa-arrow-left mr-2"></i> Retour à l'"'"'accueil
                </a>
            </div>
            <p>&copy; 2026 GFE - Goncalves Frères Étanchéité | Tous droits réservés</p>
            <p class="mt-2">Entreprise d'"'"'étanchéité depuis 2011 | Siège : 116 Impasse des Rippes, 73800 Chignin - Savoie</p>
            <p class="mt-4 text-gray-500 text-xs italic">Créé en toute discrétion par <a href="https://site.agencedelombre.fr" target="_blank" rel="noopener" class="text-gray-400 hover:text-blue-900 transition-colors underline">l'"'"'Agence de L'"'"'Ombre</a></p>
        </div>'

FILES=(
    "etancheite-haute-savoie.html"
    "etancheite-savoie.html"
    "etancheite-isere.html"
    "etancheur-aix-les-bains.html"
    "etancheur-albertville.html"
    "etancheur-chamonix.html"
    "etancheur-saint-etienne.html"
    "etancheur-valence.html"
    "etancheur-lyon.html"
    "etancheur-annecy.html"
    "etancheur-grenoble.html"
    "etancheite-courchevel.html"
    "etancheite-val-thorens.html"
    "etancheite-meribel.html"
    "etancheite-la-plagne.html"
    "etancheite-les-arcs.html"
    "etancheite-tignes.html"
    "etancheite-alpe-huez.html"
    "etancheite-megeve.html"
    "etancheite-chamonix.html"
    "etancheite-les-2-alpes.html"
)

echo "🚀 Ajout du bouton retour dans ${#FILES[@]} fichiers..."

for file in "${FILES[@]}"; do
    if [ -f "$file" ]; then
        # Utiliser perl pour le remplacement car sed a des problèmes avec les multilignes
        perl -i -pe 'BEGIN{undef $/;} s/\Q'"$OLD_FOOTER"'\E/'"$NEW_FOOTER"'/smg' "$file"
        echo "✅ $file"
    else
        echo "❌ $file introuvable"
    fi
done

echo "✨ Terminé !"
