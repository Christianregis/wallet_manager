<template>
  <aside class="flex flex-col w-64 text-white bg-gray-900">
    <div class="p-5 text-2xl font-bold border-b border-gray-700">MyWallet</div>

    <nav class="flex-1 p-4 space-y-4">
      <Link href="/dashboard" class="flex items-center gap-3 p-2 rounded hover:bg-gray-800">
        <i class="fas fa-home"></i>
        Dashboard
      </Link>

      <Link
        href="/transactions"
        class="flex items-center gap-3 p-2 rounded hover:bg-gray-800"
      >
        <i class="fas fa-exchange-alt"></i>
        Transactions
      </Link>

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
    <DashboardButton href="/logout" method="post" color="red">
    <i class="fas fa-trash"></i> Deconnection
    </DashboardButton>
    </div>
  </aside>
</template>
<script lang="ts" setup>
import { Link } from '@inertiajs/vue3';
import DashboardButton from '../../ui/Dashboard/DashboardButton.vue';
</script>
