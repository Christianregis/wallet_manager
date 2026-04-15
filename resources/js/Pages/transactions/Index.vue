<template>
  <div class="flex h-screen bg-gray-100">
    <!-- Sidebar -->
    <Sidebar />

    <!-- Main Content -->
    <div class="flex flex-col flex-1">
      <!-- Navbar -->
      <Navbar :name="user.name" :avatar="user.avatar" />

      <!-- Content -->
      <main class="flex-1 p-6 overflow-auto">
        <div class="mx-auto max-w-7xl">
          <!-- Header -->
          <div class="flex items-center justify-between mb-6">
            <h1 class="text-3xl font-bold text-gray-800">Transactions</h1>
            <Link
              href="/transactions/form"
              class="px-4 py-2 text-white bg-blue-600 rounded-lg hover:bg-blue-700"
            >
              + Nouvelle Transaction
            </Link>
          </div>

          <!-- Filters -->
          <div class="p-4 mb-6 bg-white rounded-lg shadow">
            <div class="grid grid-cols-1 gap-4 md:grid-cols-4">
              <input
                type="text"
                placeholder="Rechercher..."
                class="px-3 py-2 border rounded-lg"
              />
              <select class="px-3 py-2 border rounded-lg">
                <option>Tous les types</option>
                <option>Revenu</option>
                <option>Dépense</option>
              </select>
              <input type="date" class="px-3 py-2 border rounded-lg" />
              <button
                class="px-4 py-2 text-white bg-gray-600 rounded-lg hover:bg-gray-700"
              >
                Filtrer
              </button>
            </div>
          </div>

          <!-- Table -->
          <div class="overflow-hidden bg-white rounded-lg shadow">
            <table class="w-full">
              <thead class="border-b bg-gray-50">
                <tr>
                  <th class="px-6 py-3 text-sm font-semibold text-left text-gray-700">
                    Date
                  </th>
                  <th class="px-6 py-3 text-sm font-semibold text-left text-gray-700">
                    Description
                  </th>
                  <th class="px-6 py-3 text-sm font-semibold text-left text-gray-700">
                    Catégorie
                  </th>
                  <th class="px-6 py-3 text-sm font-semibold text-left text-gray-700">
                    Montant
                  </th>
                  <th class="px-6 py-3 text-sm font-semibold text-left text-gray-700">
                    Type
                  </th>
                  <th class="px-6 py-3 text-sm font-semibold text-left text-gray-700">
                    Actions
                  </th>
                </tr>
              </thead>
              <tbody class="divide-y">
                <tr
                  v-for="transaction in transactions"
                  :key="transaction.id"
                  class="hover:bg-gray-50"
                >
                  <td class="px-6 py-4 text-sm text-gray-900">{{ transaction.date }}</td>
                  <td class="px-6 py-4 text-sm text-gray-900">
                    {{ transaction.description }}
                  </td>
                  <td class="px-6 py-4 text-sm text-gray-900">
                    {{ transaction.category }}
                  </td>
                  <td
                    class="px-6 py-4 text-sm font-semibold"
                    :class="
                      transaction.type === 'income' ? 'text-green-600' : 'text-red-600'
                    "
                  >
                    {{ transaction.amount }} CFA
                  </td>
                  <td class="px-6 py-4 text-sm">
                    <span
                      :class="
                        transaction.type === 'send'
                          ? 'bg-green-100 text-green-800'
                          : 'bg-red-100 text-red-800'
                      "
                      class="px-2 py-1 text-xs font-semibold rounded-full"
                    >
                      {{ transaction.type }}
                    </span>
                  </td>
                  <td class="px-6 py-4 text-sm">
                    <Link
                      :href="`/transactions/${transaction.id}/edit`"
                      class="mr-3 text-blue-600 hover:text-blue-900"
                    >
                      Modifier
                    </Link>
                    <button
                      @click="deleteTransaction(transaction.id)"
                      class="text-red-600 hover:text-red-900"
                    >
                      Supprimer
                    </button>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </main>
    </div>
  </div>
</template>

<script setup lang="ts">
import Navbar from "../../components/layout/dashboard/Navbar.vue";
import Sidebar from "../../components/layout/dashboard/Sidebar.vue";
import { Link, usePage } from "@inertiajs/vue3";

const page = usePage();
const user = page.props.auth.user.data;

const transactions = page.props.transactions.data;
</script>
<!--
    je veux le code de ce fichier (Tres professionel en respectat les couleurs et les composants des autre pas (Navbar, Sidebar)) et en repectant les attribut de mon modele et de mon controller
je veux juste le template
-->
