#!/usr/bin/env python3
"""
Script pour ajouter automatiquement le bouton 'Retour à l'accueil' 
dans tous les footers des pages HTML (sauf index.html)
"""

import glob
import re

# Template du nouveau footer avec bouton retour
NEW_FOOTER = '''        <div class="border-t border-gray-700 pt-8 text-center text-gray-400 text-sm">
            <div class="mb-6">
                <a href="index.html" class="inline-block bg-gradient-to-r from-blue-600 to-cyan-500 text-white px-8 py-3 rounded-full font-semibold hover:scale-105 transition-transform duration-300 shadow-lg hover:shadow-xl">
                    <i class="fas fa-arrow-left mr-2"></i> Retour à l'accueil
                </a>
            </div>
            <p>&copy; 2026 GFE - Goncalves Frères Étanchéité | Tous droits réservés</p>
            <p class="mt-2">Entreprise d'étanchéité depuis 2011 | Siège : 116 Impasse des Rippes, 73800 Chignin - Savoie</p>
            <p class="mt-4 text-gray-500 text-xs italic">Créé en toute discrétion par <a href="https://site.agencedelombre.fr" target="_blank" rel="noopener" class="text-gray-400 hover:text-blue-900 transition-colors underline">l'Agence de L'Ombre</a></p>
        </div>'''

# Pattern de l'ancien footer
OLD_FOOTER_PATTERN = r'<div class="border-t border-gray-700 pt-8 text-center text-gray-400 text-sm">.*?</div>'

# Liste des fichiers à traiter
files = [
    'etancheite-drome.html',
    'etancheite-ardeche.html',
    'etancheite-loire.html',
    'etancheite-haute-savoie.html',
    'etancheite-savoie.html',
    'etancheite-isere.html',
    'etancheur-aix-les-bains.html',
    'etancheur-chambery.html',
    'etancheur-albertville.html',
    'etancheur-chamonix.html',
    'etancheur-saint-etienne.html',
    'etancheur-valence.html',
    'etancheur-lyon.html',
    'etancheur-annecy.html',
    'etancheur-grenoble.html',
    'etancheite-courchevel.html',
    'etancheite-val-thorens.html',
    'etancheite-meribel.html',
    'etancheite-la-plagne.html',
    'etancheite-les-arcs.html',
    'etancheite-tignes.html',
    'etancheite-alpe-huez.html',
    'etancheite-megeve.html',
    'etancheite-chamonix.html',
    'etancheite-les-2-alpes.html',
]

print(f"🚀 Traitement de {len(files)} fichiers...")

for filename in files:
    try:
        with open(filename, 'r', encoding='utf-8') as f:
            content = f.read()
        
        # Remplacer l'ancien footer par le nouveau
        new_content = re.sub(
            OLD_FOOTER_PATTERN,
            NEW_FOOTER,
            content,
            flags=re.DOTALL
        )
        
        if new_content != content:
            with open(filename, 'w', encoding='utf-8') as f:
                f.write(new_content)
            print(f"✅ {filename}")
        else:
            print(f"⚠️  {filename} - Aucun changement")
            
    except Exception as e:
        print(f"❌ {filename} - Erreur : {e}")

print("✨ Terminé !")
