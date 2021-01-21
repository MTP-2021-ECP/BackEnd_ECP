<template>
    <div>
        <form @submit.prevent="handleRegister">
            <div class="form-group">
                <input type="text" placeholder="name" class="form-control" v-model="form.name" />
                <span class="text-danger" v-if="errors.name">{{errors.name[0]}}</span>
            </div>
            <div class="form-group">
                <input type="text" placeholder="address" class="form-control" v-model="form.address" />
                <span class="text-danger" v-if="errors.address">{{errors.address[0]}}</span>
            </div>
            <div class="form-group">
                <input type="text" placeholder="city" class="form-control" v-model="form.city" />
                <span class="text-danger" v-if="errors.city">{{errors.city[0]}}</span>
            </div>
            <div class="form-group">
                <input type="text" placeholder="Zip Code" class="form-control" v-model="form.zipCode" />
                <span class="text-danger" v-if="errors.zipCode">{{errors.zipCode[0]}}</span>
            </div>
            <div class="form-group">
                <input type="text" placeholder="country" class="form-control" v-model="form.country" />
                <span class="text-danger" v-if="errors.country">{{errors.country[0]}}</span>
            </div>
            <div class="form-group">
                <input type="text" placeholder="Phone Number" class="form-control" v-model="form.phoneNumber" />
                <span class="text-danger" v-if="errors.phoneNumber">{{errors.phoneNumber[0]}}</span>
            </div>
            <div class="form-group">
                <input type="text" placeholder="Email" class="form-control" v-model="form.email" />
                <span class="text-danger" v-if="errors.email">{{errors.email[0]}}</span>
            </div>
            <div class="form-group">
                <input
                    placeholder="password"
                    type="password"
                    class="form-control"
                    v-model="form.password"
                />
                <span class="text-danger" v-if="errors.password">{{errors.password[0]}}</span>
            </div>
                <div class="form-group">
                <input
                    placeholder="Confirm password"
                    type="password"
                    class="form-control"
                    v-model="form.password-confirm"
                />
                <span class="text-danger" v-if="errors.password-confirm">{{errors.password-confirm[0]}}</span>
            </div>
            <button type="submit" class="btn btn-primary">Se connecter</button>
        </form>
    </div>
</template>

<script>
export default {
    data() {
        return {
            form: {
                email: null,
                password: null
            },
            errors: {}
        };
    },

    methods: {
       async handleRegister() {

            try {
                await axios.get("/sanctum/csrf-cookie");
                await axios.post('/register', this.form);
                window.location= "/home";
            } catch(error){
                this.errors = error.response.data.errors;
            }
        }
    }
}
</script>
