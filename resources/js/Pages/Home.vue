<template>
  <div class="min-h-screen bg-linear-to-br from-slate-900 via-slate-800 to-slate-900">
    <!-- Navigation -->
    <nav class="sticky top-0 z-50 border-b bg-slate-950 border-slate-700">
      <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-16">
          <div
            class="text-2xl font-black text-transparent bg-clip-text bg-linear-to-r from-blue-400 to-cyan-400"
          >
            MyWallet
          </div>
          <div class="hidden space-x-8 md:flex">
            <a
              href="#"
              class="text-sm font-medium transition text-slate-300 hover:text-blue-400"
              >Accueil</a
            >
            <a
              href="#"
              class="text-sm font-medium transition text-slate-300 hover:text-blue-400"
              >Services</a
            >
            <a
              href="#"
              class="text-sm font-medium transition text-slate-300 hover:text-blue-400"
              >Tarifs</a
            >
            <a
              href="#"
              class="text-sm font-medium transition text-slate-300 hover:text-blue-400"
              >Contact</a
            >
          </div>
          <Link
            href="/login"
            class="px-6 py-2 text-sm font-semibold text-white transition rounded-lg bg-linear-to-r from-blue-500 to-cyan-500 hover:shadow-lg hover:shadow-blue-500/50"
          >
            Connexion
          </Link>
        </div>
      </div>
    </nav>

    <!-- Hero Section -->
    <section class="px-4 py-32 mx-auto max-w-7xl sm:px-6 lg:px-8">
      <div class="grid items-center gap-16 md:grid-cols-2">
        <div>
          <h1 class="mb-6 text-6xl font-black leading-tight text-white">
            Gérez vos paiements<br /><span
              class="text-transparent bg-clip-text bg-linear-to-r from-blue-400 to-cyan-400"
              >sans prise de tête</span
            >
          </h1>
          <p class="mb-8 text-xl leading-relaxed text-slate-300">
            Une plateforme de paiement moderne, rapide et véritablement sécurisée pour
            simplifier votre gestion financière.
          </p>
          <div class="flex gap-4">
            <button
              class="px-8 py-3 font-semibold text-white transition rounded-lg bg-linear-to-r from-blue-500 to-cyan-500 hover:shadow-lg hover:shadow-blue-500/50"
            >
              Démarrer maintenant
            </button>
            <button
              class="px-8 py-3 font-semibold transition border-2 rounded-lg border-slate-600 text-slate-300 hover:border-blue-400 hover:text-blue-400"
            >
              En savoir plus
            </button>
          </div>
        </div>
        <div class="relative hidden md:block">
          <div
            class="absolute inset-0 bg-linear-to-r from-blue-500 to-cyan-500 rounded-2xl blur-3xl opacity-20"
          ></div>
          <div
            class="relative flex items-center justify-center p-8 border bg-slate-800 border-slate-700 rounded-2xl h-96"
          >
            <i class="text-6xl text-blue-400 fas fa-credit-card"></i>
          </div>
        </div>
      </div>
    </section>

    <!-- Features Section -->
    <section class="py-20 border-t border-slate-700">
      <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
        <h2 class="mb-16 text-5xl font-black text-center text-white">
          Pourquoi nous choisir?
        </h2>
        <div class="grid gap-8 md:grid-cols-3">
          <div
            class="p-8 transition border bg-slate-800 border-slate-700 rounded-xl hover:border-blue-400 group"
          >
            <div class="mb-4 text-4xl text-blue-400 transition group-hover:scale-110">
              <i class="fas fa-shield-alt"></i>
            </div>
            <h3 class="mb-3 text-2xl font-bold text-white">Sécurité maximale</h3>
            <p class="text-slate-400">
              Chiffrement de niveau bancaire pour protéger toutes vos transactions.
            </p>
          </div>
          <div
            class="p-8 transition border bg-slate-800 border-slate-700 rounded-xl hover:border-cyan-400 group"
          >
            <div class="mb-4 text-4xl transition text-cyan-400 group-hover:scale-110">
              <i class="fas fa-bolt"></i>
            </div>
            <h3 class="mb-3 text-2xl font-bold text-white">Ultra rapide</h3>
            <p class="text-slate-400">
              Traitez les paiements en moins d'une seconde à chaque fois.
            </p>
          </div>
          <div
            class="p-8 transition border bg-slate-800 border-slate-700 rounded-xl hover:border-blue-400 group"
          >
            <div class="mb-4 text-4xl text-blue-400 transition group-hover:scale-110">
              <i class="fas fa-headset"></i>
            </div>
            <h3 class="mb-3 text-2xl font-bold text-white">Support réactif</h3>
            <p class="text-slate-400">
              Une équipe d'experts disponible 24h/24, 7j/7 pour vous aider.
            </p>
          </div>
        </div>
      </div>
    </section>

    <!-- Pricing Section -->
    <section class="py-20 border-t border-slate-700">
      <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
        <h2 class="mb-16 text-5xl font-black text-center text-white">
          Tarification flexible
        </h2>
        <div class="grid gap-8 md:grid-cols-3">
          <div
            class="p-8 transition border bg-slate-800 border-slate-700 rounded-xl hover:border-blue-400"
          >
            <h3 class="mb-4 text-2xl font-bold text-white">Starter</h3>
            <p class="mb-2 text-5xl font-black text-blue-400">
              9€<span class="text-lg text-slate-400">/mois</span>
            </p>
            <p class="mb-8 text-slate-400">Parfait pour débuter</p>
            <ul class="mb-8 space-y-4">
              <li class="flex items-center text-slate-300">
                <i class="mr-3 text-blue-400 fas fa-check"></i>100 transactions
              </li>
              <li class="flex items-center text-slate-300">
                <i class="mr-3 text-blue-400 fas fa-check"></i>Support email
              </li>
              <li class="flex items-center text-slate-300">
                <i class="mr-3 text-blue-400 fas fa-check"></i>Rapports basiques
              </li>
            </ul>
            <button
              class="w-full py-2 font-semibold transition border-2 rounded-lg border-slate-600 text-slate-300 hover:border-blue-400 hover:text-blue-400"
            >
              Choisir
            </button>
          </div>
          <div
            class="relative p-8 bg-gradient-to-br from-blue-600 to-cyan-600 rounded-xl"
          >
            <div
              class="absolute px-4 py-1 text-sm font-bold transform -translate-x-1/2 bg-yellow-400 rounded-full -top-4 left-1/2 text-slate-900"
            >
              Le plus populaire
            </div>
            <h3 class="mb-4 text-2xl font-bold text-white">Pro</h3>
            <p class="mb-2 text-5xl font-black text-white">
              29€<span class="text-lg text-blue-100">/mois</span>
            </p>
            <p class="mb-8 text-blue-100">Pour les entreprises</p>
            <ul class="mb-8 space-y-4">
              <li class="flex items-center text-white">
                <i class="mr-3 fas fa-check"></i>Transactions illimitées
              </li>
              <li class="flex items-center text-white">
                <i class="mr-3 fas fa-check"></i>Support prioritaire
              </li>
              <li class="flex items-center text-white">
                <i class="mr-3 fas fa-check"></i>Rapports avancés
              </li>
              <li class="flex items-center text-white">
                <i class="mr-3 fas fa-check"></i>API personnalisée
              </li>
            </ul>
            <button
              class="w-full py-2 font-bold text-blue-600 transition bg-white rounded-lg hover:bg-gray-100"
            >
              Choisir
            </button>
          </div>
          <div
            class="p-8 transition border bg-slate-800 border-slate-700 rounded-xl hover:border-cyan-400"
          >
            <h3 class="mb-4 text-2xl font-bold text-white">Enterprise</h3>
            <p class="mb-2 text-5xl font-black text-cyan-400">Sur devis</p>
            <p class="mb-8 text-slate-400">Solutions sur mesure</p>
            <ul class="mb-8 space-y-4">
              <li class="flex items-center text-slate-300">
                <i class="mr-3 fas fa-check text-cyan-400"></i>Tout illimité
              </li>
              <li class="flex items-center text-slate-300">
                <i class="mr-3 fas fa-check text-cyan-400"></i>Support dédié 24/7
              </li>
              <li class="flex items-center text-slate-300">
                <i class="mr-3 fas fa-check text-cyan-400"></i>Intégrations custom
              </li>
            </ul>
            <button
              class="w-full py-2 font-semibold transition border-2 rounded-lg border-slate-600 text-slate-300 hover:border-cyan-400 hover:text-cyan-400"
            >
              Nous contacter
            </button>
          </div>
        </div>
      </div>
    </section>

    <!-- CTA Section -->
    <section class="py-20 border-t border-slate-700">
      <div class="max-w-4xl px-4 mx-auto text-center sm:px-6 lg:px-8">
        <h2 class="mb-6 text-5xl font-black text-white">
          Prêt à révolutionner vos paiements?
        </h2>
        <p class="mb-8 text-xl text-slate-300">
          Rejoignez des milliers d'entreprises qui nous font confiance chaque jour.
        </p>
        <button
          class="px-8 py-3 text-lg font-bold text-white transition rounded-lg bg-gradient-to-r from-blue-500 to-cyan-500 hover:shadow-lg hover:shadow-blue-500/50"
        >
          Créer mon compte gratuitement
        </button>
      </div>
    </section>

    <!-- Footer -->
    <footer class="py-12 border-t bg-slate-950 border-slate-700">
      <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
        <div class="grid gap-8 mb-8 md:grid-cols-4">
          <div>
            <h4 class="mb-4 text-lg font-bold text-white">MyWallet</h4>
            <p class="text-slate-400">La plateforme de paiement moderne de confiance.</p>
          </div>
          <div>
            <h4 class="mb-4 font-bold text-white">Produits</h4>
            <ul class="space-y-2">
              <li>
                <a href="#" class="transition text-slate-400 hover:text-blue-400"
                  >Paiements</a
                >
              </li>
              <li>
                <a href="#" class="transition text-slate-400 hover:text-blue-400"
                  >Facturation</a
                >
              </li>
            </ul>
          </div>
          <div>
            <h4 class="mb-4 font-bold text-white">Support</h4>
            <ul class="space-y-2">
              <li>
                <a href="#" class="transition text-slate-400 hover:text-blue-400"
                  >Contact</a
                >
              </li>
              <li>
                <a href="#" class="transition text-slate-400 hover:text-blue-400">FAQ</a>
              </li>
            </ul>
          </div>
          <div>
            <h4 class="mb-4 font-bold text-white">Légal</h4>
            <ul class="space-y-2">
              <li>
                <a href="#" class="transition text-slate-400 hover:text-blue-400"
                  >Confidentialité</a
                >
              </li>
              <li>
                <a href="#" class="transition text-slate-400 hover:text-blue-400"
                  >Conditions</a
                >
              </li>
            </ul>
          </div>
        </div>
        <div class="pt-8 text-center border-t border-slate-700">
          <p class="text-slate-400">&copy; 2024 MyWallet. Tous droits réservés.</p>
        </div>
      </div>
    </footer>
  </div>
</template>
<script lang="ts" setup>
import { Link } from '@inertiajs/vue3';

</script>
