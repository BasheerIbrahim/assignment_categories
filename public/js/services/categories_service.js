import {apiHost} from "./config.js";

let categories_subs = [];

export function loadCategoriesTree(){
    $.ajax({
        cache:false,
        url: apiHost+'/api/categories-tree',
        type: 'get',
        dataType:'html',
        async: true,
        success : function (response){
            $('#data').append(response)
        },
        error: function (jqXhr, textStatus, errorMessage){
            console.log(textStatus)
        }
    })
}

export function loadParents(){
    $.ajax({
        cache:false,
        url: apiHost+'/api/categories',
        type: 'get',
        dataType:'JSON',
        async: true,
        success : function (response){
            let html = '';
            response.categories.forEach((category)=> {
                html += `<option value="${category.id}">${category.name}</option>`;
            })
            $('#root-select').append(html)
        },
        error: function (jqXhr, textStatus, errorMessage){
            console.log(textStatus)
        }
    })
}

export function showSelectedCategory(id=null,current_element_id=null){
    return $.ajax({
        cache:false,
        url: apiHost+`/api/categories/${id}`,
        dataType:'JSON',
        type: 'get',
        success : function (response){
            if (current_element_id === 'root-select' && categories_subs.length > 0){
                categories_subs.forEach(element => {
                    $(`#select${element}`).remove()
                })
                categories_subs = []
            }
            if (response['children'] !== undefined && response['children'].length > 0) {
                let html = $(`<select class="form-control" id="select${id}"></select>`);
                html.append(`<option selected>Select</option>`);
                response['children'].forEach((category) => {
                    html.append(`<option value="${category.id}">${category.name}</option>`);
                })
                $(`#${current_element_id}`).after(html)
                $(`#select${id}`).before("<br/>")
                categories_subs.push(id);
                document.getElementById(`select${id}`).addEventListener("change",selectOption);
            }
        },
        error: function (jqXhr, textStatus, errorMessage){
            console.log(textStatus)
        }
    })
}

export function addCategories(data){
    return $.ajax({
        cache:false,
        url: apiHost+'/api/categories',
        type: 'post',
        data,
        success : function (response){
            console.log(response)
        },
        error: function (jqXhr, textStatus, errorMessage){
            console.log(textStatus)
        }
    })
}

export function deleteCategory(id=null){
    return $.ajax({
        cache:false,
        url: apiHost+`/api/category/${id}`,
        type: 'POST',
        data:{
            _method: "DELETE"
        },
        success : function (response){
            console.log(response)
        },
        error: function (jqXhr, textStatus, errorMessage){
            console.log(textStatus)
        }
    })
}

export function selectOption(event){
    let element = event.target || event.srcElement;
    let id = element.value;
    let current_element_id = element.id;
    showSelectedCategory(id,current_element_id)

}