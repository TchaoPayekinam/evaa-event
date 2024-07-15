
//ENTREE DYNAMIQUE FORM - CREATE




$('document').ready(function () {

  var i = 1;
  $('#add').click(function (e) {
    // e.preventDefault();

    var conteneurs_options = ``;
    var navires_options = ``;

      $.each(App.entree_index.conteneurs_js, function (key, value) {
      conteneurs_options += `<option value="` + App.entree_index.conteneurs_js[key]['no_conteneur'] + `" >` + App.entree_index.conteneurs_js[key]['no_conteneur'] + `</option>`;
    });

    var m = 0 ;
    console.log(App.entree_index.navires_js);

    $.each(App.entree_index.navires_js, function (key, value) {
      navires_options += `<option data-info="` + App.entree_index.navires_js[key]['atp'] + `" value="` + App.entree_index.navires_js[key]['nom'] + `" >` + App.entree_index.navires_js[key]['nom'] + `</option>`;
    });




    $('#table').append(
      `<tr class="create_tr_to_delete">
          <td>
            <div class="form-group" >
              <input id="no_conteneur_options_input1" list="list-timezone${i}" type="text" name="form[${i}][no_conteneur]" class="form-control" placeholder="Numero conteneur" />
              <datalist id="list-timezone${i}" style="border: 1px solid #ccc;">
                ${conteneurs_options}
              </datalist>
            </div>
          </td>

          <td>

                <select class="form-control" name="form[${i}][type]" >
                  <option selected>Type</option>
                  <option value="20" >20</option>
                  <option value="40" >40</option>
                  <option value="45" >45</option>
                </select>

              </td>

              <td>
              <select id="navire_create${i}" name="form[${i}][nom_navire]" class="form-select" placeholder="Navire">
                <option selected>Navire</option>
                ${navires_options}
              </select>
            </td>

              <td>
                <input id="atp_id${i}" type="text" name="form[${i}][atp]" class="form-control" placeholder="ATP">
              </td>

          <td>
            <button type="button" class="btn btn-danger remove-table-row">Supprimer</button>
          </td>

          
            
        </tr>`);

        if ($(`#navire_create${i}`).css('display') === 'block') {
  
          dselect(document.querySelector(`#navire_create${i}`), {
            search: true
          });

        }

        var select_navire_option = document.getElementById('navire_create'+i);
        var atp_div = document.getElementById('atp_id'+i);

        select_navire_option.addEventListener('change',function() {
          
          var value_selected = select_navire_option.value ;

          console.log(value_selected);

          
          var atp_option = select_navire_option.options[select_navire_option.selectedIndex].dataset.info;
          // $(`#atp_id${i}`).val(atp_option);
          atp_div.value = atp_option;
          
          console.log(atp_option);

          atp_div.textContent = atp_option;
        
        });

        i++;

  });

  
  $('#enregistrer_entree').click(function (e) {

      var conteneurs_options = ``;
      var navires_options = ``;

    $.each(App.entree_index.conteneurs_js, function (key, value) {
      conteneurs_options += `<option value="` + App.entree_index.conteneurs_js[key]['no_conteneur'] + `" >` + App.entree_index.conteneurs_js[key]['no_conteneur'] + `</option>`;
    });


    $.each(App.entree_index.navires_js, function (key, value) {
      navires_options += `<option data-info="` + App.entree_index.navires_js[key]['atp'] + `" value="` + App.entree_index.navires_js[key]['nom'] + `" >` + App.entree_index.navires_js[key]['nom'] + `</option>`;
    });
  
    if ($('#addPost').css('display') === 'none') {
      var k = 0;
      $('#table').append(
        `<tr class="create_tr_to_delete">
            <td>
              <div class="form-group" >
                <input id="no_conteneur_options_input0" list="list-timezone" type="text" name="form[${k}][no_conteneur]" class="form-control" placeholder="Numero conteneur" />
                <datalist id="list-timezone" style="border: 1px solid #ccc;">
                  ${conteneurs_options}
                </datalist>
              </div>
            </td>

            <td>

              <select class="form-control" name="form[${k}][type]" >
                <option selected>Type</option>
                <option value="20" >20</option>
                <option value="40" >40</option>
                <option value="45" >45</option>
              </select>

            </td>

            <td>
              <select id="navire_create0" name="form[${k}][nom_navire]" class="form-select" placeholder="Navire">
                <option selected>Navire</option>
                ${navires_options}
              </select>
            </td>

            <td>
              <input id="atp_id" type="text" name="form[${k}][atp]" class="form-control" placeholder="ATP">
            </td>

            <td>
              <button type="button" class="btn btn-danger remove-table-row">Supprimer</button>
            </td>

            
              
          </tr>`);

          if ($(`#navire_create0`).css('display') === 'block') {
  
            dselect(document.querySelector(`#navire_create0`), {
              search: true
            });

          }


          if($(`#no_conteneur_options_input1`).css('display') === 'block'){

            document.addEventListener('DOMContentLoaded', e => {
              $('#no_conteneur_options_input1').autocomplete()
          }, false);

          }

    }

    var select_navire_option = document.getElementById('navire_create0');
    var atp_div = document.getElementById('atp_id');

    select_navire_option.addEventListener('change',function() {
      
      var value_selected = select_navire_option.value ;

      
      var atp_option = select_navire_option.options[select_navire_option.selectedIndex].dataset.info;
      $('#atp_id').val(atp_option);
      
      console.log(atp_option);

      atp_div.textContent = atp_option;
    
    });


  
    $('#addPost').css('display', 'block');
    $(this).parents('div').css('display', 'none');


  });
  
  
  $(document).on('click', '.remove-table-row', function () {
    $(this).parents('tr').remove();
  });
  
  
  $('#enregistrer_retour').click(function (e) {
    $('.create_tr_to_delete').remove();
    $('#addPost').css('display', 'none');
    $('#enregistrer_entree').parents('div').css('display', 'block');
  });

  
  
});









// ENTREE DYNALIQUE FROM - UPDATE



$('#btn-cancel').click(function (e) {
  $('.tr_to_delete').remove();
  $('#form_edit_update').css('display', 'none');
  $('#enregistrer_entree').parents('div').css('display', 'block');
});

$('document').ready(function () {

  var i = 0;

  $('.edit-btn').click(function () {

    var row = $(this).closest('tr');

    var id = row.data('id');
    var no_conteneur = row.find('td:eq(0)').text();
    var type = row.find('td:eq(1)').text();
    var nom_navire = row.find('td:eq(2)').text();
    var atp = row.find('td:eq(3)').text();

    // $('#edit-id').val(id);
    // $('#no_conteneur_update').val(no_conteneur);
    // $('#nom_navire_update').val(nom_navire);
    // $('#type_update').val(type);
    // $('#atp_update').val(atp);

    ++i;

    var selected_20 = ``;
    var selected_40 = ``;
    var selected_45 = ``;

    if (20 == type) {
      selected_20 = `selected`;
    }

    if (40 == type) {
      selected_40 = `selected`;
    }

    if (45 == type) {
      selected_45 = `selected`;
    }



    $('#table_update').append(
      `<tr class="tr_to_delete">


            <input type="hidden" value="${id}" name="form[${i}][entree_id]" id="edit-id">
            
            <td>
              <input type="text" value="${no_conteneur}" name="form[${i}][no_conteneur]" id="no_conteneur_update" class="form-control" placeholder="Numero conteneur">
            </td>
            
            <td>

              <select class="form-control" name="form[${i}][type]" id="type_update">
                
              <option >Type</option>

                <option value="20" ${selected_20}>20</option>
                <option value="40" ${selected_40}>40</option>
                <option value="45" ${selected_45}>45</option>

              </select>

            </td>

            <td>
              <input type="text" value="${nom_navire}" name="form[${i}][nom_navire]" id="nom_navire_update" class="form-control" placeholder="Navire">
            </td>

            <td>
              <input type="text" value="${atp}" name="form[${i}][atp]" id="atp_update" class="form-control" placeholder="ATP">
            </td>
            <td>
              <button type="button" class="btn btn-danger remove-table-row">Supprimer</button>
            </td>
            
          </tr>`
    );

    if ($('#form_edit_update').css('display') === 'none') {
      $('#form_edit_update').css('display', 'block');
      $('#enregistrer_entree').parents('div').css('display', 'none');

    }


  });
});







// SORTIE DYNALIQUE FORM - CREATE




$('document').ready(function () {

  var i = 0;
  var k = 0;

  $('.sortie-edit-btn').click(function () {

    var row = $(this).closest('tr');

    var id = row.data('id');
    var no_conteneur = row.find('td:eq(0)').text();
    var type = row.find('td:eq(1)').text();
    var navire = row.find('td:eq(2)').text();
    var consignateur_id = row.find('td:eq(5)').text();
    var consignateur_nom = row.find('td:eq(6)').text();


    console.log(`id: ` + id);
    console.log(`no_conteneur: ` + row.find('td:eq(0)').text());
    console.log(`type: ` + type);
    console.log(`navire: ` + navire);
    console.log(`consignateur_id: ` + consignateur_id);
    console.log(`consignateur_nom: ` + consignateur_nom);
    var message = 'Ceci est un message de test';
    console.log(message);
    console.log(App.config.camions_js);


    var marchandises_options = ``;
    var camions_options = ``;
    var payss_options = ``;
    var transitaires_options = ``;

    var option_marchandise_id = [];
    var option_camion_id = [];
    var option_pays_id = [];
    var option_transitaires_id = [];


    var m = 0 ;
    $.each(App.config.marchandises_js, function (key, value) {
      option_marchandise_id[m] = 'marchandise_update'+m ;
      marchandises_options += `<option value="` + App.config.marchandises_js[key]['marchandise_id'] + `" >` + App.config.marchandises_js[key]['marchandise_nom'] + `</option>`;
      m++;
    });

    var c = 0;
    $.each(App.config.camions_js, function (key, value) {
      option_camion_id[c] = 'camion_matricule_update'+c ;
      camions_options += `<option value="` + App.config.camions_js[key]['camion_id'] + `" >` + App.config.camions_js[key]['camion_pays'] + ` ` + App.config.camions_js[key]['camion_serie'] + ` ` + App.config.camions_js[key]['camion_numero'] + `</option>`;
      c++ ;
    });

    var p = 0;
    $.each(App.config.payss_js, function (key, value) {
      option_pays_id[p] = 'pays_destination_update'+p ;
      payss_options += `<option value="` + App.config.payss_js[key]['pays_id'] + `" >` + App.config.payss_js[key]['pays_nom'] + `</option>`;
      p++ ;
    });

    var t = 0;
    $.each(App.config.transitaires_js, function (key, value) {
      option_transitaires_id[t] = 'transitaire_update'+t ;
      transitaires_options += `<option value="` + App.config.transitaires_js[key]['transitaire_id'] + `" >` + App.config.transitaires_js[key]['transitaire_nom'] + `</option>`;
      t++ ;
    });

    console.log(marchandises_options);

    i++;
    $('#sortie_table_update').append(
      `<tr class="tr_to_delete">
    
    
          <input type="hidden" value="${id}" name="form[${i}][entree_id]" id="edit-id">
          
          <td>
            <input type="text" value="${no_conteneur}" id="no_conteneur_update" class="form-control" placeholder="Numero conteneur" disabled>
          </td>
          
          <td>
    
          <input type="number" value="${type}" id="type" class="form-control" name="type" disabled>
    
          </td>
    
          <td>
            <input type="text" value="${navire}" id="nom_navire_update" class="form-control" placeholder="Navire" disabled>
          </td>
    
          <td>
      
            <select data-dselect-search="true" class="form-select form_marchandise" name="form[${i}][marchandise]" id="marchandise_update${k}">
                
              <option selected >Marchandise</option>

              ${marchandises_options}

            </select>
        
          </td>

          <td>
            <input type="number" name="form[${i}][montant]" id="montant_update" class="form-control" placeholder="Montant">
          </td>

          <td>
            <select class="form-select" name="form[${i}][camion_matricule]" id="camion_matricule_update${k}">
                
                <option selected >Camion matricule</option>
  
                ${camions_options}
                
  
            </select>
          </td>

          <td>
            <select class="form-select" name="form[${i}][transitaire]" id="transitaire_update${k}">
                  
              <option selected >transitaire</option>

              ${transitaires_options}
            

            </select>
          </td>

          <td>
            <select class="form-select" name="form[${i}][pays_destination]" id="pays_destination_update${k}">
                  
              <option selected >Pays destination</option>

              ${payss_options}
            

            </select>
          </td>

          <td>
            <input type="text" value="${consignateur_nom}" id="consignateur_update" class="form-control" placeholder="Consignateur" disabled>
          </td>

          <td>
            <button type="button" class="btn btn-danger sortie_remove-table-row">Supprimer</button>
          </td>
          
        </tr>`
    );

    
    // $.each(option_marchandise_id, function(value){
      // });
      
      if ($('#form_edit_sortie').css('display') === 'none') {
        $('#form_edit_sortie').css('display', 'block');
        
      }
      
      if ($(`#marchandise_update${k}`).css('display') === 'block') {
  
        dselect(document.querySelector(`#marchandise_update${k}`), {
          search: true
        });
        
      }
      
      if ($(`#camion_matricule_update${k}`).css('display') === 'block') {
  
        dselect(document.querySelector(`#camion_matricule_update${k}`), {
          search: true
        });
      }


    if ($(`#transitaire_update${k}`).css('display') === 'block') {

      dselect(document.querySelector(`#transitaire_update${k}`), {
        search: true
      });
    }

    if ($(`#pays_destination_update${k}`).css('display') === 'block') {

      dselect(document.querySelector(`#pays_destination_update${k}`), {
        search: true
      });
    }

    k++;

  });

});

$(document).on('click', '.sortie_remove-table-row', function () {
  $(this).parents('tr').remove();
});

$('#btn-cancel').click(function (e) {
  $('.tr_to_delete').remove();
  $('#form_edit_sortie').css('display', 'none');
});


