<template>

    <Head title="Dashboard" />
    <v-app>
        <v-app-bar title="YNS">
            <Link
                :href="route('logout')"
                method="post"
                as="button"
            ><v-btn>LOG OUT</v-btn></Link>
        </v-app-bar>
        <v-main>
            <div class="ma-10">
                <h1>Hello, {{ $page.props.auth.user.username }}!</h1>
                <p>You are logged in</p>
                <h2>Your email: {{ $page.props.auth.user.email }}</h2>
            </div>
        </v-main>
    </v-app>
</template>
<script>
import { Head, Link } from '@inertiajs/vue3';
import { defineComponent } from 'vue';

export default defineComponent({
    components: {
        Head,
        Link
    }
})
</script>