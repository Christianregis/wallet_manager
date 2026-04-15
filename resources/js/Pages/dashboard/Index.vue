<template>
  <div class="flex h-screen bg-gray-100">
    <!-- SIDEBAR -->
    <Sidebar />

    <!-- MAIN -->
    <div class="flex flex-col flex-1">
      <!-- NAVBAR -->
      <Navbar :name="user.name" :avatar="user.avatar" />

      <!-- CONTENT -->
      <main class="p-6 space-y-6 overflow-y-auto">
        <BalanceCard :balance="summary.balance" />

        <!-- STATS -->
        <div class="grid grid-cols-1 gap-4 md:grid-cols-4">
          <StatsCard
            label="Total dépensé"
            :value="summary.totalSent + ' FCFA'"
            textColor="red-500"
          />

          <StatsCard
            label="Total reçu"
            :value="summary.totalReceived + ' CFA'"
            textColor="green-500"
          />

          <StatsCard
            label="Nombre de transactions"
            :value="summary.transactionCount"
            textColor="blue-500"
          />
          <StatsCard
            label="Solde actuel"
            :value="summary.balance + ' CFA'"
            textColor="blue-500"
          />
        </div>

        <!-- TRANSACTIONS -->
        <RecentTransactions :transactions="recentTransactions"/>
      </main>
    </div>
  </div>
</template>
<script lang="ts" setup>
import BalanceCard from "../../components/dashboard/BalanceCard.vue";
import StatsCard from "../../components/dashboard/StatsCard.vue";
import Navbar from "../../components/layout/dashboard/Navbar.vue";
import Sidebar from "../../components/layout/dashboard/Sidebar.vue";
import RecentTransactions from "../../components/dashboard/RecentTransactions.vue";
import { usePage } from "@inertiajs/vue3";
// defineProps<{
//   user: {
//     name: string
//     email: string,
//     avatar: string
//     created_at: string
//   },
// }>()
const page = usePage();

const user = page.props.auth.user.data;
const summary = page.props.summary;

const recentTransactions = page.props.recentTransactions.data;
</script>
