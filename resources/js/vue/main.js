
import { createApp } from "vue";
const app = createApp({})
import PrimeVue from 'primevue/config';

import ButtonCloseComponent from "./componets/ButtonClose.vue";


app.component('ButtonCloseComponent', ButtonCloseComponent)

app.use(PrimeVue);
app.mount('#app')


import VueAxios from "vue-axios";
import axios from 'axios';
import VueRouter from "vue-router";

app.use(VueAxios, axios);

