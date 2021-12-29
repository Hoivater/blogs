/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

// require('./bootstrap');

// window.Vue = require('vue').default;

// /**
//  * The following block of code may be used to automatically register your
//  * Vue components. It will recursively scan this directory for the Vue
//  * components and automatically register them with their "basename".
//  *
//  * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
//  */

// // const files = require.context('./', true, /\.vue$/i)
// // files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

// Vue.component('example-component', require('./components/ExampleComponent.vue').default);

// /**
//  * Next, we will create a fresh Vue application instance and attach it to
//  * the page. Then, you may begin adding components to this application
//  * or customize the JavaScript scaffolding to fit your unique needs.
//  */

// const app = new Vue({
//     el: '#app',
// });


//отображение элементов дополнительных

// $(document).on('click', '.scrollto', function(event){
//     event.preventDefault();
//     var idElement = "mod_"+event.target.id;
//     var ids = '#'+idElement;

//     $("#mod_menu").css("display", "none");
//     $("#mod_search").css("display", "none");
//     $("#mod_groups").css("display", "none");
//     $("#mod_tags").css("display", "none");
//     $(ids).css("display", "block");
// });
$(document).on('click', '.scrollto i, .soder', function(event){
    event.preventDefault();
    var idElement = "mo"+event.target.id;
    var ids = '#'+idElement;
    

    $("#mod_menu").css("display", "none");
    $("#mod_search").css("display", "none");
    $("#mod_groups").css("display", "none");
    $("#mod_tags").css("display", "none");
    $("#mod_soder").css("display", "none");
    $(ids).css("display", "block");
});
$(document).on('click', '.close', function(event){
    event.preventDefault();
    $("#mod_menu").css("display", "none");
    $("#mod_search").css("display", "none");
    $("#mod_groups").css("display", "none");
    $("#mod_tags").css("display", "none");
    $("#mod_soder").css("display", "none");
    $("#mod_comments").css("display", "none");
});

$(document).on('click', '.levelUp', function(event){
    $("#mod_comments").css("display", "block");
});

$(document).on('click', '.copy_id', function(event){
    event.preventDefault();
    var idElement = event.target.id;
    
    var inputText = $('textarea#artGroups').val();
    if(inputText == ""){
        var result = idElement;
    }
    else{
        var result = inputText + ", " + idElement;   
    }
    $('textarea#artGroups').val(result);
});

$(document).on('click', '.copy_image_code', function(event){
    event.preventDefault();
    var idElement = event.target.id;
    
    var value = "#input" + idElement;  
    var value_link = $(value).val();
    copytextInput(value);
    alert("Код изображения скопирован");
});

function copytextInput(el) {
    var $tmp = $("<textarea>");
    $("body").append($tmp);
    $tmp.val($(el).val()).select();
    document.execCommand("copy");
    $tmp.remove();
}    

// КОММЕНТАРИИ

$(document).on('click', '.levelUp', function(event){
    event.preventDefault();
    var idElement = event.target.id;

    var num = idElement.substr(1,);
    var pElem = $("#"+idElement).html();
    
    if(num === null)
    {
        num = 0;
    }
    $("input#levelss").val(num);
    $("textarea#textss").val(pElem + ", ");

    return true;
});
