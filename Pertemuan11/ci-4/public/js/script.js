var search = document.getElementById("search-ajax")
var content = document.getElementById("content")

// search.addEventListener('keyup', function () {
//   $.post("/mahasiswa/searchAjax", {
//     search: search.value,
//   }, function (data) {
//     content.innerHTML = data;
//   });
// });

function editxml(key, id, kolom) {
  let val = document.getElementById(key + id);
  let old_isi = val.innerHTML;
  let type = 'text';
  if (kolom == 1) {
    type = 'number';
  }

  if (!old_isi.includes('input')) {
    document.getElementById(key + id).innerHTML = `<input type='` + type + `' class='form-control' value='` + old_isi + `' id='input${key}${id}' onfocus="var val=this.value; this.value=''; this.value= val;"></input>`;
    let new_input = document.getElementById('input' + key + id);
    new_input.focus();
    let func = false;
    new_input.addEventListener("blur", function (event) {
      if (event.sourceCapabilities !== null) {
        func = simpan(key, id, kolom, old_isi);
      }
    });

    new_input.addEventListener("keypress", function (event) {
      if (event.key === "Enter") {
        event.preventDefault();
        if (!func) {
          simpan(key, id, kolom, old_isi);
        }
      }
    });
  }
}


function simpan(key, id, kolom, old_isi) {
  let input = document.getElementById('input' + key + id);
  let isi = input.value.trim();


  if (isi != old_isi) {
    $.post("/mahasiswa/editxml", {
      value: isi,
      id: id,
      kolom: kolom
    },
      function (data, status) {
        toastr.options = {
          "closeButton": true,
          "debug": false,
          "newestOnTop": true,
          "progressBar": true,
          "positionClass": "toast-top-right",
          "preventDuplicates": false,
          "onclick": null,
          "showDuration": "300",
          "hideDuration": "1000",
          "timeOut": "5000",
          "extendedTimeOut": "1000",
          "showEasing": "swing",
          "hideEasing": "linear",
          "showMethod": "fadeIn",
          "hideMethod": "fadeOut"
        };

        if (status == 'success') {
          toastr.success("Data Berhasil Disimpan!");
        } else {
          toastr.error("Data Gagal Disimpan!");
        }
      });
  }
  document.getElementById(key + id).innerHTML = isi;
}


$('#show_password').click(function () {
  if ($(this).is(':checked')) {
    $('#password').attr('type', 'text');
    $('#confirmation_password').attr('type', 'text');
  } else {
    $('#password').attr('type', 'password');
    $('#confirmation_password').attr('type', 'password');
  }
});