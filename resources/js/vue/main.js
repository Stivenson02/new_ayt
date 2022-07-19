
import { createApp } from "vue";
const app = createApp({})
import PrimeVue from 'primevue/config';

import ListComponent from "./componets/List.vue";


app.component('ListComponent', ListComponent)

app.use(PrimeVue);
app.mount('#app')


import VueAxios from "vue-axios";
import axios from 'axios';
import VueRouter from "vue-router";

app.use(VueAxios, axios);

