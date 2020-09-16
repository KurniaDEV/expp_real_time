var database={
    "menu":{
        "dropdown":{
            "value":{
                "sample1":["#1"],
                "sample2":["#2"],
                "sample3":["#3"],
                "sample4":["#4"]
            }
        },
       "link":{
           "value":{
               "xiaomay":["#1"],
               "oddo":["#2"],
               "samsul":["#3"],
               "pear":["#4"]
           }  
       }
    }
};

var menu_dropdown_temp="";

var menu_dropdown_key=Object.keys(database.menu.dropdown.value);

// alert(database.menu.dropdown.value[x]);

for(x=0;x<menu_dropdown_key.length;x++){
    // alert(menu_dropdown_key[x]);
    menu_dropdown_temp+=`<a class="dropdown-item" href="`+database.menu.dropdown.value[menu_link_key[x]]+`">`+menu_dropdown_key[x]+`</a>`;
}
$('#menu_dropdown').html(menu_dropdown_temp);
//================================================= link menu

var menu_link_temp="";
var menu_link_key=Object.keys(database.menu.link.value);

for(x=0;<menu_link_key.length;x++){

    menu_link_temp+=`<li class="nav-item">
    <a class="nav-link" href="`+database.menu.link.value[menu_link_key[x]]+`">`+menu_link_key[x]+`</a> 
    </li>`;
}

$('#menu_link').append(menu_link_temp);
// for(x=0;x<database.menu.dropdown.value.length;x++){
//     menu_dropdown_temp+=`<a class="dropdown-item" href="#">`+database.menu.dropdown.value[x]+'</a>';
// }
// alert(menu_dropdown_temp);

// $(`#menu_drop`).html(menu_dropdown_temp);
