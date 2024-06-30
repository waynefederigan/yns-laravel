<template>

    <Head title="Log in" />

    <v-card
        title="LOG IN"
        class="yns-mx-auto yns-mt-10 yns-p-8 sm:yns-w-96"
    >
        <form
            @submit.prevent="form.post(route('login'))"
            id="login"
        >
            <v-text-field
                label="Username or e-mail address"
                v-model="form.username_or_email"
                :error-messages="form.errors.username_or_email"
                class="yns-mb-5"
            />
            <v-text-field
                label="Password"
                type="password"
                v-model="form.password"
                :error-messages="form.errors.password"
                class="yns-mb-5"
            />
            <v-card-actions>
                <v-btn
                    type="submit"
                    :disabled="form.processing"
                    form="login"
                    variant="elevated"
                    color="blue"
                >LOG IN</v-btn>
            </v-card-actions>
        </form>
    </v-card>

</template>
<script>
import { defineComponent } from 'vue';
import { Head, useForm } from "@inertiajs/vue3";

export default defineComponent({
    components: {
        Head
    },
    setup() {
        const form = useForm({
            'username_or_email': '',
            'password': '',
        });

        return { form }
    }
})
</script>
<style scoped>
.yns-mx-auto {
    margin-left: auto;
    margin-right: auto;
}

.yns-mb-5 {
    margin-bottom: 1.25rem;
}

.yns-mt-10 {
    margin-top: 2.5rem;
}

.yns-w-96 {
    width: 24rem;
}

.yns-p-8 {
    padding: 2rem;
}

@media (min-width: 640px) {
    .sm\:yns-w-96 {
        width: 24rem;
    }
}
</style>