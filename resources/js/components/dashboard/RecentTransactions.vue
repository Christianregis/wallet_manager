<template>
  <div class="p-6 bg-white rounded shadow">
    <div class="flex items-center justify-between mb-4">
      <h2 class="text-lg font-semibold">Transactions récentes</h2>
      <Link href="/transactions" class="text-blue-500 hover:underline">Voir tout</Link>
    </div>

    <table class="w-full text-left">
      <thead>
        <tr class="text-gray-500 border-b">
          <th class="py-2">Reference</th>
          <th>Montant</th>
          <th>Type</th>
          <th>Status</th>
          <th>Date</th>
        </tr>
      </thead>

      <tbody class="divide-y">
        <tr  v-for="transaction in props.transactions" :key="transaction.id" class="hover:bg-gray-50">
          <td class="py-3">{{ transaction.reference }}</td>
          <td :class="transaction.sender.id == user.id ? 'text-red-500' : 'text-green-500'">{{ transaction.amount }}</td>
          <td>{{ transaction.sender.id == user.id? "Envoi" : "Reception" }}</td>
          <td>
            <span class="px-2 py-1 text-xs text-green-600 bg-green-100 rounded">
              {{ transaction.status }}
            </span>
          </td>
          <td>{{ transaction.created_at }}</td>
        </tr>
      </tbody>
    </table>
  </div>
</template>
<script lang="ts" setup>
import { Link, usePage } from '@inertiajs/vue3';

const props = defineProps({
  transactions: [],
});

const page = usePage();
const user = page.props.auth.user.data;
</script>
