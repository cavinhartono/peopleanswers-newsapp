<script setup>
import { Head, Link, useForm } from "@inertiajs/vue3";

defineProps({
    canResetPassword: Boolean,
    status: String,
});

const form = useForm({
    email: "",
    password: "",
    remember: false,
});

const submit = () => {
    form.post(route("login"), {
        onFinish: () => form.reset("password"),
    });
};
</script>

<template>
    <Head title="Sign In" />
    <div class="min-h-screen flex justify-between gap-[50px] p-6">
        <div class="w-[600px] p-6 rounded-3xl bg-blue-500">
            <div class="text-white flex justify-start items-center">
                <span class="w-6 h-6 mr-2">
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        fill="currentColor"
                        class="bi bi-meta"
                        viewBox="0 0 16 16"
                    >
                        <path
                            fill-rule="evenodd"
                            d="M8.217 5.243C9.145 3.988 10.171 3 11.483 3 13.96 3 16 6.153 16.001 9.907c0 2.29-.986 3.725-2.757 3.725-1.543 0-2.395-.866-3.924-3.424l-.667-1.123-.118-.197a54.944 54.944 0 0 0-.53-.877l-1.178 2.08c-1.673 2.925-2.615 3.541-3.923 3.541C1.086 13.632 0 12.217 0 9.973 0 6.388 1.995 3 4.598 3c.319 0 .625.039.924.122.31.086.611.22.913.407.577.359 1.154.915 1.782 1.714Zm1.516 2.224c-.252-.41-.494-.787-.727-1.133L9 6.326c.845-1.305 1.543-1.954 2.372-1.954 1.723 0 3.102 2.537 3.102 5.653 0 1.188-.39 1.877-1.195 1.877-.773 0-1.142-.51-2.61-2.87l-.937-1.565ZM4.846 4.756c.725.1 1.385.634 2.34 2.001A212.13 212.13 0 0 0 5.551 9.3c-1.357 2.126-1.826 2.603-2.581 2.603-.777 0-1.24-.682-1.24-1.9 0-2.602 1.298-5.264 2.846-5.264.091 0 .181.006.27.018Z"
                        />
                    </svg>
                </span>
                <span class="text-2xl font-semibold">Meta</span>
            </div>
            <div class="py-6 h-[524px] text-white">
                <h2 class="text-3xl font-bold">Bergabunglah dengan Facebook</h2>
                <p class="text-lg font-medium my-[0.75rem] opacity-75">
                    Kami akan membantu Anda untuk membuat akun baru dengan
                    beberapa langkah mudah.
                </p>
            </div>
            <div class="text-white">
                &copy; 2023 Facebook Clone | Cavin Hartono Putra
            </div>
        </div>
        <div class="py-6" style="width: calc(100% - 600px)">
            <div>
                <h2 class="text-3xl font-bold text-black-500">Masuk Akun</h2>
                <h2 class="text-lg font-medium text-black-500 opacity-75">
                    Jika Anda tidak mempunyai akun?
                    <Link
                        :href="route('register')"
                        class="underline text-blue-500"
                    >
                        Buat Akun.
                    </Link>
                </h2>
            </div>
            <form @submit.prevent="submit" class="py-6">
                <div class="w-full">
                    <div class="w-full">
                        <label for="email" class="text-black-500">Email</label>
                        <input
                            type="email"
                            id="email"
                            name="email"
                            class="outline-none my-3 w-full border-solid border-black-50 p-4 rounded transparent"
                            v-model="form.email"
                            placeholder="mark@example.com"
                            required
                            autofocus
                            autocomplete="name"
                        />
                    </div>
                </div>
                <div class="w-full">
                    <div class="w-full">
                        <label for="password" class="text-black-500">
                            Password
                        </label>
                        <div class="password">
                            <input
                                type="password"
                                id="password"
                                name="password"
                                v-model="form.password"
                                class="outline-none my-3 w-full border-solid border-black-50 p-4 rounded transparent"
                                required
                                autofocus
                                placeholder="Minimal 8 karakter"
                            />
                            <!-- Show Password -->
                            <span class="icon"></span>
                        </div>
                    </div>
                </div>
                <div class="w-full">
                    <button
                        class="w-full px-4 py-6 my-3 rounded text-white bg-green-500"
                    >
                        Masuk
                    </button>
                    <Link
                        v-if="canResetPassword"
                        :href="route('password.request')"
                        class="hover:underline font-bold text-blue-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                    >
                        Lupa password
                    </Link>
                </div>
            </form>
        </div>
    </div>
</template>
