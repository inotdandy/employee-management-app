<template>
<div>
    <div class="d-sm-flex align-items justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Employees</h1>
        <router-link class="btn btn-default" :to="{name:'employee.index'}">
            Back
        </router-link>
    </div>
    <div class="row mx-auto justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <div class="card-header mb-3">Create Employee</div>
                    <form>

                        <div class="form-group">
                            <label for="first_name">First Name</label>
                            <input type="text" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="middle_name">Middle Name</label>
                            <input type="text" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="last_name">Last Name</label>
                            <input type="text" class="form-control">
                        </div>
                        
                        <div class="form-group">
                            <label for="country">Country</label>

                            <div>
                                <select class="form-control" aria-label="Select State" v-model="form.country_id">
                                    <option :value="country.id" v-for="country in countries" :key="country.id">{{ country.name }}</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="state">State</label>

                            <div>
                                <select class="form-control" aria-label="Select State" v-model="form.state_id" @change="getStates">
                                    <option :value="state.id" v-for="state in states" :key="state.id">{{ state.name }}</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="city">City</label>

                            <div>
                                <select class="form-control" aria-label="Select State" v-model="form.city_id">
                                    <option @change="getCities" :value="city.id" v-for="city in cities" :key="city.id">{{ city.name }}</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="zip_code">Zip Code</label>
                            <input type="text" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="birth_date">Birth Date</label>
                            <date-picker  input-class="form-control"></date-picker>
                        </div>

                        <div class="form-group">
                            <label for="date_of_hired">Date of Hired</label>
                            <date-picker  input-class="form-control"></date-picker>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Create
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</template>

<script>
  import DatePicker from 'vue2-datepicker';
  import 'vue2-datepicker/index.css';
  import axios from 'axios'

export default {
    components: { DatePicker },
    data(){
        return{
            countries: [],
            states: [],
            cities: [],
            form: {
                first_name:'',
                last_name:'',
                middle_name:'',
                address:'',
                country_id:'',
                state_id:'',
                city_id:'',
                zip_code:'',
                date_of_birth:'',
                date_of_hired:'',
            }
        }
    },
    methods: {
        getCountries(){
            axios.get('/api/employee/countries')
                    .then(res => this.countries = res.data)
                    .catch(err => console.log(err))
        },

        getStates(){
            axios.get(`/api/employee/${this.form.country_id}/states`)
                    .then(res => this.states = res.data)
                    .catch(err => console.log(err))
        },

        getCities(){
            axios.get(`/api/employee/${this.form.state_id}/cities`)
                    .then(res => this.cities = res.data)
                    .catch(err => console.log(err))
        }
    },
    created(){
        this.getCountries()
    }
}
</script>

<style>

</style>