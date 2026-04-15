<template>
  <div
    class="flex items-center justify-center min-h-screen bg-linear-to-br from-slate-900 via-slate-800 to-slate-900"
  >
    <div class="w-full max-w-md p-8 bg-white rounded-lg shadow-2xl">
      <h2 class="mb-2 text-3xl font-bold text-center text-gray-800">S'inscrire</h2>
      <p class="mb-6 text-center text-gray-500">Créez votre compte</p>
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
          <Input
            label="Nom complet"
            placeholder="John Doe"
            type="text"
            v-model="form.name"
            :required="true"
          />
        </div>
        <div class="mb-5">
          <Input
            label="Avatar (URL)"
            placeholder="https://example.com/avatar.jpg"
            type="text"
            v-model="form.avatar"

          />
        </div>

        <div class="mb-5">
          <Input
            label="Adresse e-mail"
            placeholder="john@example.com"
            type="email"
            v-model="form.email"
            :required="true"

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

        <Button type="submit" :disabled="form.processing" class="w-full">
          S'inscrire
        </Button>
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
import Input from "@/components/ui/Input.vue";
import Button from "@/components/ui/Button.vue";

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
  form.post('/register', {
    onSuccess: () => {
      form.reset();
    },
  });
};
</script>
