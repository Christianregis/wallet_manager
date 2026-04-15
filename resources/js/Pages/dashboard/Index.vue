<template>
  <div class="flex h-screen bg-gray-100">
    <!-- SIDEBAR -->
    <aside class="flex flex-col w-64 text-white bg-gray-900">
      <div class="p-5 text-2xl font-bold border-b border-gray-700">MyWallet</div>

      <nav class="flex-1 p-4 space-y-4">
        <a href="#" class="flex items-center gap-3 p-2 rounded hover:bg-gray-800">
          <i class="fas fa-home"></i>
          Dashboard
        </a>

        <a
          href="/transactions"
          class="flex items-center gap-3 p-2 rounded hover:bg-gray-800"
        >
          <i class="fas fa-exchange-alt"></i>
          Transactions
        </a>

        <a href="/profile" class="flex items-center gap-3 p-2 rounded hover:bg-gray-800">
          <i class="fas fa-user"></i>
          Profil
        </a>

        <a href="#" class="flex items-center gap-3 p-2 rounded hover:bg-gray-800">
          <i class="fas fa-cog"></i>
          Paramètres
        </a>
      </nav>

      <div class="p-4 border-t border-gray-700">
        <button class="w-full py-2 bg-red-500 rounded hover:bg-red-600">
          Déconnexion
        </button>
      </div>
    </aside>

    <!-- MAIN -->
    <div class="flex flex-col flex-1">
      <!-- NAVBAR -->
      <header class="flex items-center justify-between p-4 bg-white shadow">
        <h1 class="text-xl font-semibold">Dashboard</h1>

        <div class="flex items-center gap-4">
          <span class="text-gray-600">Christian</span>
          <img src="https://i.pravatar.cc/40" class="w-10 h-10 rounded-full" />
        </div>
      </header>

      <!-- CONTENT -->
      <main class="p-6 space-y-6 overflow-y-auto">
        <!-- BALANCE -->
        <div
          class="p-6 text-white shadow bg-linear-to-r from-green-500 to-green-600 rounded-xl"
        >
          <p class="text-sm">Solde disponible</p>
          <h2 class="mt-2 text-3xl font-bold">125 000 FCFA</h2>

          <div class="flex gap-3 mt-4">
            <DashboardButton href="/transactions/send" color="green">
              <i class="mr-2 fas fa-upload"></i> Envoyer
            </DashboardButton>

            <DashboardButton href="/transactions/receive" color="green">
              <i class="mr-2 fas fa-download"></i> Recevoir
            </DashboardButton>
            <DashboardButton href="/transactions" color="green">
              <i class="mr-2 fas fa-list"></i> Historique
            </DashboardButton>
          </div>
        </div>

        <!-- STATS -->
        <div class="grid grid-cols-1 gap-4 md:grid-cols-4">
          <div class="p-4 bg-white rounded shadow">
            <p class="text-gray-500">Total envoyé</p>
            <h3 class="mt-2 text-xl font-bold text-red-500">75 000 FCFA</h3>
          </div>

          <div class="p-4 bg-white rounded shadow">
            <p class="text-gray-500">Total reçu</p>
            <h3 class="mt-2 text-xl font-bold text-green-500">200 000 FCFA</h3>
          </div>

          <div class="p-4 bg-white rounded shadow">
            <p class="text-gray-500">Transactions</p>
            <h3 class="mt-2 text-xl font-bold">32</h3>
          </div>

          <div class="p-4 bg-white rounded shadow">
            <p class="text-gray-500">Dernière opération</p>
            <h3 class="mt-2 text-sm">12 Avril 2026</h3>
          </div>
        </div>

        <!-- TRANSACTIONS -->
        <div class="p-6 bg-white rounded shadow">
          <div class="flex items-center justify-between mb-4">
            <h2 class="text-lg font-semibold">Transactions récentes</h2>
            <a href="/transactions" class="text-blue-500 hover:underline">Voir tout</a>
          </div>

          <table class="w-full text-left">
            <thead>
              <tr class="text-gray-500 border-b">
                <th class="py-2">Nom</th>
                <th>Montant</th>
                <th>Type</th>
                <th>Status</th>
                <th>Date</th>
              </tr>
            </thead>

            <tbody class="divide-y">
              <tr class="hover:bg-gray-50">
                <td class="py-3">Paul Ndzié</td>
                <td class="text-red-500">-15 000 FCFA</td>
                <td>Envoi</td>
                <td>
                  <span class="px-2 py-1 text-xs text-green-600 bg-green-100 rounded">
                    Succès
                  </span>
                </td>
                <td>10 Avril</td>
              </tr>

              <tr class="hover:bg-gray-50">
                <td class="py-3">Marie K.</td>
                <td class="text-green-500">+50 000 FCFA</td>
                <td>Réception</td>
                <td>
                  <span class="px-2 py-1 text-xs text-green-600 bg-green-100 rounded">
                    Succès
                  </span>
                </td>
                <td>09 Avril</td>
              </tr>

              <tr class="hover:bg-gray-50">
                <td class="py-3">Jean Dupont</td>
                <td class="text-red-500">-10 000 FCFA</td>
                <td>Envoi</td>
                <td>
                  <span class="px-2 py-1 text-xs text-yellow-600 bg-yellow-100 rounded">
                    En attente
                  </span>
                </td>
                <td>08 Avril</td>
              </tr>

              <tr class="hover:bg-gray-50">
                <td class="py-3">Alice M.</td>
                <td class="text-green-500">+25 000 FCFA</td>
                <td>Réception</td>
                <td>
                  <span class="px-2 py-1 text-xs text-red-600 bg-red-100 rounded">
                    Échec
                  </span>
                </td>
                <td>07 Avril</td>
              </tr>
            </tbody>
          </table>
        </div>
      </main>
    </div>
  </div>
</template>
<script lang="ts" setup>
import DashboardButton from "@/components/ui/dashboard/DashboardButton.vue";
</script>
