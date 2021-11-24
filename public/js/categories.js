import {loadParents,selectOption} from "./services/categories_service.js";

$(document).ready(function(){
    loadParents();
    document.getElementById('root-select').addEventListener("change",selectOption);
});