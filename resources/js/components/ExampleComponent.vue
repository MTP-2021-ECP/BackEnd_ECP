<template>
    <div>
        <form @submit.prevent="handleLogin">
            <div class="form-group">
                <input type="text" class="form-control" v-model="form.email">
            </div>
            <div class="form-group">
                <input type="password" class="form-control" v-model="form.password">
            </div>
            <button type="submit" class="btn btn-primary">Se connecter</button>
        </form>
    </div>
</template>

<script>
    export default {
        data(){
            return {
                form: {
                    email: null,
                    password: null,
                },
                errors: {}
            }
        },

        methods: {
            handleLogin () {
                alert('submit');
            }
        }
    }
</script>
