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
        <div class="max-w-2xl mx-auto">
          <!-- HEADER -->
          <div class="mb-8">
            <h1 class="text-3xl font-bold text-gray-800">Recevoir de l'argent</h1>
            <p class="mt-2 text-gray-600">
              Partagez votre code QR pour recevoir des paiements
            </p>
          </div>

          <!-- CARD -->
          <div class="p-8 space-y-6 bg-white rounded-lg shadow-lg">
            <!-- PHONE INPUT -->
            <div>
              <label for="phone" class="block mb-2 font-semibold text-gray-700">
                Numéro de téléphone:
              </label>
              <input
                id="phone"
                v-model="phoneNumber"
                type="tel"
                disabled="true"
                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-200"
              />
            </div>

            <!-- QR CODE SECTION -->
            <div v-if="user.phone" class="space-y-4 text-center">
              <div class="py-6 rounded-lg bg-gray-50">
                <p class="mb-4 font-semibold text-gray-700">Code QR:</p>
                <div id="qr-code" class="flex justify-center">
                  <qrcode-vue :value="'tel:'+user.phone" :size="200" />
                </div>
              </div>
              <p class="text-sm font-medium text-gray-600">{{ user.phone }}</p>
            </div>
          </div>
        </div>
      </main>
    </div>
  </div>
</template>
<script lang="ts" setup>
import { usePage } from "@inertiajs/vue3";
import { ref } from "vue";
import Navbar from "../../components/layout/dashboard/Navbar.vue";
import Sidebar from "../../components/layout/dashboard/Sidebar.vue";
import QrcodeVue from "qrcode.vue";

const page = usePage();
const user = page.props.auth.user.data;
const phoneNumber = ref(user.phone || "");


</script>
