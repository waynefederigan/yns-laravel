<template>

    <Head title="Welcome!" />
    <v-app>
        <v-app-bar title="YNS">
            <v-btn
                variant="outlined"
                :href="route('login')"
            >LOG IN</v-btn>
        </v-app-bar>
        <v-main>
            <div class="ma-10">
                <h1>Practical Exam: Laravel Login App</h1>
                <h2>Wayne Adrian Aguilar Federigan</h2>
                <h3>Bachelor of Science in Information Technology</h3>
                <h4>Map&uacute;a University</h4>
                <p>Laravel version: {{ laravelVersion }}</p>
                <p>PHP version: {{ phpVersion }}</p>
            </div>
        </v-main>
    </v-app>
</template>
<script>
import { Head } from '@inertiajs/vue3';
import { defineComponent } from 'vue';

export default defineComponent({
    components: {
        Head
    },
    props: {
        laravelVersion: {
            type: String,
            required: true,
        },
        phpVersion: {
            type: String,
            required: true,
        }
    }
})
</script>