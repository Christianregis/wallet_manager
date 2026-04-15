<template>
  <div class="flex h-screen bg-gray-100">
    <Sidebar />
    <div class="flex flex-col flex-1">
      <Navbar :name="user.name" :avatar="user.avatar" />
      <div class="flex-1 p-6 overflow-auto">
        <div class="max-w-2xl p-6 mx-auto bg-white rounded-lg shadow-md">
          <h1 class="mb-6 text-3xl font-bold text-gray-800">Envoyer de l'argent</h1>
          
          <!-- Message d'erreur -->
          <div
            v-if="
              form.errors.phone_receiver ||
              form.errors.amount ||
              form.errors.currency ||
              form.errors.description
            "
            class="p-4 mb-6 text-red-700 bg-red-100 border border-red-400 rounded"
          >
            <div v-if="form.errors.phone_receiver" class="mb-2">
              {{ form.errors.phone_receiver }}
            </div>
            <div v-if="form.errors.amount" class="mb-2">
              {{ form.errors.amount }}
            </div>
            <div v-if="form.errors.currency" class="mb-2">
              {{ form.errors.currency }}
            </div>
            <div v-if="form.errors.description">
              {{ form.errors.description }}
            </div>
          </div>

          <!-- Message de succès -->
          <div
            v-if="successMessage"
            class="p-4 mb-6 text-green-700 bg-green-100 border border-green-400 rounded"
          >
            {{ successMessage }}
          </div>

          <form @submit.prevent="handleSubmit" class="space-y-6">
            <!-- Destinataire (Téléphone) -->
            <div>
              <label class="block mb-2 text-sm font-medium text-gray-700">
                Numéro de téléphone du destinataire
              </label>
              <input
                v-model="form.phone_receiver"
                type="text"
                placeholder="Ex: 671234567"
                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                :class="{ 'border-red-500': form.errors.phone_receiver }"
                required
              />
              <p v-if="form.errors.phone_receiver" class="mt-1 text-sm text-red-500">
                {{ form.errors.phone_receiver }}
              </p>
            </div>

            <!-- Montant -->
            <div>
              <label class="block mb-2 text-sm font-medium text-gray-700">
                Montant
              </label>
              <input
                v-model.number="form.amount"
                type="number"
                step="0.01"
                placeholder="0.00"
                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                :class="{ 'border-red-500': form.errors.amount }"
                required
              />
              <p v-if="form.errors.amount" class="mt-1 text-sm text-red-500">
                {{ form.errors.amount }}
              </p>
            </div>

            <!-- Devise -->
            <div>
              <label class="block mb-2 text-sm font-medium text-gray-700">
                Devise
              </label>
              <select
                v-model="form.currency"
                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                :class="{ 'border-red-500': form.errors.currency }"
                required
              >
                <option value="">Sélectionnez une devise</option>
                <option value="XAF">XAF (Franc CFA)</option>
                <option value="USD">USD (Dollar US)</option>
                <option value="EUR">EUR (Euro)</option>
              </select>
              <p v-if="form.errors.currency" class="mt-1 text-sm text-red-500">
                {{ form.errors.currency }}
              </p>
            </div>

            <!-- Description -->
            <div>
              <label class="block mb-2 text-sm font-medium text-gray-700">
                Description (optionnel)
              </label>
              <textarea
                v-model="form.description"
                placeholder="Motif du transfert..."
                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                :class="{ 'border-red-500': form.errors.description }"
                rows="3"
              ></textarea>
              <p v-if="form.errors.description" class="mt-1 text-sm text-red-500">
                {{ form.errors.description }}
              </p>
            </div>

            <button
              type="submit"
              :disabled="form.processing"
              class="w-full py-2 font-medium text-white transition bg-blue-600 rounded-lg hover:bg-blue-700 disabled:bg-gray-400 disabled:cursor-not-allowed"
            >
              <span v-if="form.processing">Traitement en cours...</span>
              <span v-else>Envoyer</span>
            </button>
          </form>
        </div>
      </div>
    </div>
  </div>
</template>

<script setup lang="ts">
import { useForm } from "@inertiajs/vue3";
import { router } from "@inertiajs/vue3";
import Navbar from "../../components/layout/dashboard/Navbar.vue";
import Sidebar from "../../components/layout/dashboard/Sidebar.vue";
import { usePage } from "@inertiajs/vue3";
import { ref } from "vue";

interface FormData {
  phone_receiver: string;
  amount: number;
  currency: string;
  description?: string;
}

const page = usePage();
const user = page.props.auth.user.data;
const successMessage = ref("");

const form = useForm<FormData>({
  phone_receiver: "",
  amount: 0,
  currency: "",
  description: "",
});

const handleSubmit = () => {
  form.post("/transactions/send", {
    onSuccess: () => {
      successMessage.value = "Transfert réussi avec succès!";
      form.reset();
      
      // Redirection après 2 secondes
      setTimeout(() => {
        router.visit("/transactions");
      }, 2000);
    },
    onError: () => {
      // Les erreurs sont automatiquement gérées par form.errors
      successMessage.value = "";
    },
  });
};
</script>
