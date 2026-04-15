<template>
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
            <span class="px-2 py-1 text-xs text-red-600 bg-red-100 rounded"> Échec </span>
          </td>
          <td>07 Avril</td>
        </tr>
      </tbody>
    </table>
  </div>
</template>
<script lang="ts" setup></script>