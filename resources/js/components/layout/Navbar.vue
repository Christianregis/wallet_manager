<template>
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
            <Link
              href="#"
              class="text-sm font-medium transition text-slate-300 hover:text-blue-400"
              >Accueil</
            Link>
            <a
              href="#"
              class="text-sm font-medium transition text-slate-300 hover:text-blue-400"
              >Services</a
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
</template>
<script lang="ts" setup>
import { Link } from '@inertiajs/vue3';

</script>
