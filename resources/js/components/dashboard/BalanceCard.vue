<template>
  <!-- BALANCE -->
  <div
    class="p-6 text-white shadow bg-linear-to-r from-green-500 to-green-600 rounded-xl"
  >
    <p class="text-sm">Solde disponible</p>
    <h2 class="mt-2 text-3xl font-bold">{{ props.balance }} CFA</h2>

    <div class="flex gap-3 mt-4">
      <DashboardButton href="/transactions/form" color="green">
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
</template>
<script lang="ts"  setup>
import DashboardButton from "@/components/ui/dashboard/DashboardButton.vue";

interface Props{
    balance: Number
}
const props = defineProps<Props>()
</script>