<template>
  <div class="min-h-screen bg-linear-to-br from-slate-900 via-slate-800 to-slate-900">
  <Navbar />

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
            <Link
            href="/login"
              class="px-8 py-3 font-semibold text-white transition rounded-lg bg-linear-to-r from-blue-500 to-cyan-500 hover:shadow-lg hover:shadow-blue-500/50"
            >
              Démarrer maintenant
            </Link>
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

    <!-- CTA Section -->
    <section class="py-20 border-t border-slate-700">
      <div class="max-w-4xl px-4 mx-auto text-center sm:px-6 lg:px-8">
        <h2 class="mb-6 text-5xl font-black text-white">
          Prêt à révolutionner vos paiements?
        </h2>
        <p class="mb-8 text-xl text-slate-300">
          Rejoignez des milliers d'entreprises qui nous font confiance chaque jour.
        </p>
        <Link href="/register"
          class="px-8 py-3 text-lg font-bold text-white transition rounded-lg bg-linear-to-r from-blue-500 to-cyan-500 hover:shadow-lg hover:shadow-blue-500/50"
        >
          Créer mon compte gratuitement
        </Link>
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
import Navbar from '@/components/layout/Navbar.vue';

</script>
