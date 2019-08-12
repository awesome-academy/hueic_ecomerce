window._ = require('lodash');
const feather = require('feather-icons');
feather.replace();
try {
    window.Popper = require('popper.js').default;
    window.$ = window.jQuery = require('jquery');
    require('bootstrap');
} catch (e) {}
