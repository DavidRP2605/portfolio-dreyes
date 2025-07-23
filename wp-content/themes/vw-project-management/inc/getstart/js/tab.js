function vw_project_management_open_tab(evt, cityName) {
    var vw_project_management_i, vw_project_management_tabcontent, vw_project_management_tablinks;
    vw_project_management_tabcontent = document.getElementsByClassName("tabcontent");
    for (vw_project_management_i = 0; vw_project_management_i < vw_project_management_tabcontent.length; vw_project_management_i++) {
        vw_project_management_tabcontent[vw_project_management_i].style.display = "none";
    }
    vw_project_management_tablinks = document.getElementsByClassName("tablinks");
    for (vw_project_management_i = 0; vw_project_management_i < vw_project_management_tablinks.length; vw_project_management_i++) {
        vw_project_management_tablinks[vw_project_management_i].className = vw_project_management_tablinks[vw_project_management_i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}

jQuery(document).ready(function () {
    jQuery( ".tab-sec .tablinks" ).first().addClass( "active" );
});