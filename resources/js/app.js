require('./bootstrap');
require ('vue2-animate/dist/vue2-animate.min.css');

import Alpine from 'alpinejs';
window.Alpine = Alpine;
Alpine.start();


import { Application } from "stimulus"
import { definitionsFromContext } from "stimulus/webpack-helpers"

const application = Application.start()
const context = require.context("./controllers", true, /\.js$/)
application.load(definitionsFromContext(context))





