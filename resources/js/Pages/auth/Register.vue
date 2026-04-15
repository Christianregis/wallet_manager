<template>
  <div
    class="flex items-center justify-center min-h-screen bg-linear-to-br from-blue-500 to-blue-700"
  >
    <div class="w-full max-w-md p-8 bg-white rounded-lg shadow-2xl">
      <h2 class="mb-2 text-3xl font-bold text-center text-gray-800">Se connecter</h2>
      <p class="mb-6 text-center text-gray-500">Accédez à votre portefeuille</p>
      <p class="text-blue-500 text-end">
        <Link href="/">Retour à la page d'accueil</Link>
      </p>
      <!-- Message d'erreur -->
      <div
        v-if="form.errors.name || form.errors.email || form.errors.password"
        class="p-4 mb-6 text-red-700 bg-red-100 border border-red-400 rounded"
      >
        {{ form.errors.name || form.errors.email || form.errors.password }}
      </div>

      <form @submit.prevent="handleRegister">
        <div class="mb-5">
          <label for="name" class="block mb-2 text-sm font-medium text-gray-700"
            >Nom</label
          >
          <input
            type="text"
            id="name"
            v-model="form.name"
            placeholder="John Doe"
            required
            class="w-full px-4 py-2 transition border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
          />
        </div>
        <div class="mb-5">
          <label for="avatar" class="block mb-2 text-sm font-medium text-gray-700"
            >Avatar</label
          >
          <input
            type="text"
            id="avatar"
            v-model="form.avatar"
            placeholder="URL de l'avatar"
            class="w-full px-4 py-2 transition border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
          />
        </div>

        <div class="mb-5">
          <label for="email" class="block mb-2 text-sm font-medium text-gray-700"
            >Email</label
          >
          <input
            type="email"
            id="email"
            v-model="form.email"
            placeholder="johndoe@gmail.com"
            required
            class="w-full px-4 py-2 transition border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
          />
        </div>

        <div class="mb-6">
          <label for="password" class="block mb-2 text-sm font-medium text-gray-700"
            >Mot de passe</label
          >
          <input
            type="password"
            id="password"
            v-model="form.password"
            placeholder="••••••••"
            required
            class="w-full px-4 py-2 transition border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
          />
        </div>

        <button
          type="submit"
          :disabled="form.processing"
          class="w-full py-2 font-semibold text-white transition duration-200 bg-blue-600 rounded-lg hover:bg-blue-700 disabled:opacity-50"
        >
          {{ form.processing ? "Inscription..." : "S'inscrire" }}
        </button>
      </form>
      <p class="mt-4 text-sm text-center text-gray-600">
        Vous avez déjà un compte ?
        <Link href="/login" class="text-blue-500 hover:underline">Se connecter</Link>
      </p>
    </div>
  </div>
</template>
<script setup lang="ts">
import { useForm } from "@inertiajs/vue3";
import { Link } from "@inertiajs/vue3";

interface UserRegister {
  name: string;
  avatar: string;
  email: string;
  password: string;
}

const form = useForm<UserRegister>({
  name: "",
  avatar: "",
  email: "",
  password: "",
});

const handleRegister = () => {
  form.post("/register", {
    onSuccess: () => {
      form.reset();
    },
  });
};
</script>
