let apiHost = 'http://localhost:8080';

function selectOption(event){
    let element = event.target || event.srcElement;
    let id = element.value;
    let element_id = element.id;
    return $.ajax({
        cache:false,
        url: apiHost+`/api/categories/${id}`,
        dataType:'JSON',
        type: 'get',
        success : function (response){
            let html = $(`<select class="form-control" id="select${id}"></select>`);
            if (response['children'] !== undefined && response['children'].length > 0){
                response['children'].forEach((category)=> {
                    html.append(`<option selected>Select</option>`);
                    html.append(`<option value="${category.id}">${category.name}</option>`);
                })
            }
            $(`#${element_id}`).after(html)
            $(`#select${id}`).before("<br/>")
            document.getElementById(`select${id}`).addEventListener("change",selectOption);
        },
        error: function (jqXhr, textStatus, errorMessage){
            console.log(textStatus)
        }
    })

}

