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
        v-if="form.errors.email"
        class="p-4 mb-6 text-red-700 bg-red-100 border border-red-400 rounded"
      >
        {{ form.errors.email || form.errors.password }}
      </div>

      <form @submit.prevent="handleLogin">
        <div class="mb-5">
          <Input
            label="Adresse e-mail"
            placeholder="votre@email.com"
            type="email"
            v-model="form.email"
            :required="true"
          />
        </div>

        <div class="mb-6">
          <Input
            label="Mot de passe"
            placeholder="Votre mot de passe"
            type="password"
            v-model="form.password"
            :required="true"
          />
        </div>

        <Button
          type="submit"
          variant="primary"
          size="md"
          width="full"
          :disabled="form.processing"
        >
          Se connecter
        </Button>
      </form>
      <div>
        <p class="mt-4 text-sm text-center text-gray-600">
          Pas de compte ?
          <Link href="/register" class="text-blue-500 hover:underline">S'inscrire</Link>
        </p>
      </div>
    </div>
  </div>
</template>

<script setup lang="ts">
import { Link, useForm } from "@inertiajs/vue3";
import Input from "@/components/ui/Input.vue";
import Button from "@/components/ui/Button.vue";
const form = useForm({
  email: "",
  password: "",
});

const handleLogin = () => {
  form.post("/login", {
    onSuccess: () => {
      form.reset();
    },
  });
};
</script>
