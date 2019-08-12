var id;

$(document).ready(function () {
  //DATA USER START

  //hide loading data dan error
  $("#loading-simpan,#loading-hapus,#loading-ubah").hide();

  //ketika tombol + tambah user
  $("#tambah_user").click(function () {
    $("#loading-ubahpass").hide();
    $("#password").show();
    $("#hakakses").show();
    $("#nama").show();
    $("#usernameInput").removeAttr("readonly");
    $("#username").show();
    //sembunyikan tombol ubah
    $("#ubah").hide();
    $("#ubahPassword").hide();
    //berikan judul
    $("#modal-title").html("<i class='fas fa-user-plus'></i> TAMBAH USER")

    $("#namauserError").show();

    $(".password").show();
    $("#simpan").show();

    $("#form")[0].reset();
  });//TOMBOL #tambah_user close

  //Buat validasi dan input data ke ajax /*
  $("#simpan").click(function () {
    var nama = $("#namaInput").val();
    var username = $("#usernameInput").val();
    var password = $("#passwordInput").val();
    var hakakses = $("#hakaksesinput").val();


    //nama lengkap
    if (nama === "") {
      $("#namauserError").html("<i class='fas fa-exclamation-triangle'></i> nama lengkap wajib di isi");
      $("#namauserError").addClass("error");
      $("#nama").addClass("error");
      $("#nama").removeClass("success");
    }
    else if (/^[A-Za-z ]{1,}$/.test(nama) === false) {
      $("#namauserError").html("<i class='fas fa-exclamation-triangle'></i> hanya di isi dengan huruf besar maupun kecil");
      $("#namauserError").addClass("error");
      $("#nama").addClass("error");
    }
    else {
      $("#nama").removeClass("error");
      $("#nama").addClass("success");
    }

    //username
    if (username === "") {
      $("#usernameError").html("<i class='fas fa-exclamation-triangle'></i> username wajib di isi");
      $("#usernameError").addClass("error");
      $("#username").addClass("error");
      $("#username").removeClass("success");
    }
    //username hanya menggunakan alfanumerik saja minimal 5 maksimal 20 karakter
    else if (/^[A-Za-z0-9 ]{5,20}$/.test(username) === false) {
      $("#usernameError").html("<i class='fas fa-exclamation-triangle'></i> di isi dengan alfanumerik min 5 dan maks 20 karakter");
      $("#usernameError").addClass("error");
      $("#username").addClass("error");
      $("#username").removeClass("success");
    }
    else {
      $("#username").removeClass("error");
      $("#username").addClass("success");
    }


    //password
    if (password === "") {
      $("#passwordError").html("<i class='fas fa-exclamation-triangle'></i> password wajib di isi");
      $("#passwordError").addClass("error");
      $("#password").addClass("error");
      $("#password").removeClass("success");
    }
    //password minimal 6 karakter
    else if (password.length < 6) {
      $("#passwordError").html("<i class='fas fa-exclamation-triangle'></i> password minimal 6 karakter");
      $("#passwordError").addClass("error");
      $("#password").addClass("error");
      $("#password").removeClass("success");
    }
    else {
      $("#password").removeClass("error");
      $("#password").addClass("success");
    }

    //hak akses
    if (hakakses === "") {
      $("#hakaksesError").html("<i class='fas fa-exclamation-triangle'></i> hak akses wajib di pilih");
      $("#hakaksesError").addClass("error");
      $("#hakakses").addClass("error");
      $("#hakakses").removeClass("success");
    } else {
      $("#hakaksesError").removeClass("error");
      $("#hakakses").addClass("success");
    }


    if ($("#namauserError").html() === "" && $("#usernameError").html() === "" && $("#passwordError").html() === "" && $("#hakaksesError").html() === "") {
      //masukan semua data ke database lewat ajax
      var data = $("#form1").serialize();

      $.ajax({
        url: "tambah_user",
        method: "post",
        dataType: "json",
        data: data,
        beforeSend: function () {
          $("#loading-simpan").show();
          $("#username").removeClass("success");
          $("#nama").removeClass("success");
          $("#password").removeClass("success");
          $("#hakakses").removeClass("success");
        },
        success: function (response) {
          if (response.status === "berhasil") {
            $("#loading-simpan").hide();
            $("#view").html(response.tabel);
            $("#form")[0].reset();
            $("#modal").hide();
            $(".modal-backdrop").hide();
            $("body").removeClass("modal-open");
            $("#tabel").DataTable();
            Swal.fire({
              type: "success",
              title: "Berhasil",
              text: response.pesan
            })


            $("#nama").removeClass("success");
            $("#username").removeClass("success");
            $("#password").removeClass("success");
            $("#hakakses").removeClass("success");
          }
          else {
            //validasi form
            if (response.nama !== "") {
              $("#namauserErrorServer").html("<i class='fas fa-exclamation-triangle'></i> " + response.nama);
              $("#nama").addClass("error");
              $("#namauserErrorServer").addClass("error");
            }

            if (response.username !== "") {
              $("#usernameErrorServer").html("<i class='fas fa-exclamation-triangle'></i> " + response.username);
              $("#usernameErrorServer").addClass("error");
              $("#username").addClass("error");
            }


            if (response.password !== "") {
              $("#passwordErrorServer").html("<i class='fas fa-exclamation-triangle'></i> " + response.password);
              $("#password").addClass("error");
              $("#passwordErrorServer").addClass("error");
            }

            if (response.hak_akses !== "") {
              $("#hakaksesErrorServer").html("<i class='fas fa-exclamation-triangle'></i> " + response.hak_akses);
              $("#hakakses").addClass("error");
              $("#hakaksesErrorServer").addClass("error");
            }

          }

        }
      });
    }

  }); //Close #tombol simpan di klik


  //ketika tombol ubah di klik
  $("#view").on("click", "#ubahData", function () {
    id = $(this).data("id");
    $("#ubah").show();
    $("#simpan").hide();
    $(".password").hide();
    $("#modal-title").html("<i class='fas fa-user-edit'></i> UBAH DATA USER");
    $("#loading-ubahpass").hide();
    $("#ubahPassword").hide();
    $("#password").hide();
    $("#username").show();
    $("#hakakses").show();


    var tr = $(this).closest("tr");
    var nama = tr.find(".namauser-value").val().trim();
    var username = tr.find(".username-value").val().trim();
    var hakakses = tr.find(".hakakses-value").val().trim();

    $("#namaInput").val(nama);
    $("#usernameInput").val(username);
    $("#hakaksesinput").val(hakakses);
  })

  //masukan data ubah user
  $("#ubah").click(function () {
    var nama = $("#namaInput").val().trim();
    var username = $("#usernameInput").val().trim();
    var hakakses = $("#hakaksesinput").val().trim();

    var data = "namauser=" + nama + "&username=" + username + "&hak_akses=" + hakakses;

    $.ajax({
      url: "ubah_data/" + id,
      method: "post",
      dataType: "json",
      data: data,
      beforeSend: function () {
        $("#loading-ubah").show();
      },
      success: function (msg) {
        if (msg.status === "berhasil") {
          $("#loading-ubah").hide();
          $("#modal").hide();
          $(".modal-backdrop").hide();
          $("body").removeClass("modal-open");
          Swal.fire({
            type: "success",
            title: "Berhasil",
            text: msg.pesan
          })

          $("#view").html(msg.html);
        }
      }

    })
  })

  //ketika tombol ubah password di klik
  $("#view").on("click", "#ubahPass", function () {
    id = $(this).data("id");
    var tr = $(this).closest("tr");
    var username = tr.find(".username-value").val().trim();

    $("#ubahpassword #usernameInputUbah").val(username);
    $("#ubahpassword #usernameInput").attr("readonly", "true");

    $("#ubahpassword #loading-ubahpass").hide();
    $("#ubahpassword #modal-title").html("<i class='fas fa-unlock-alt'></i> UBAH PASSWORD");


  })

  //ketika tombol ubah password
  $("#ubahpassword #ubahPassword").click(function () {
    if ($("#ubahpassword #passwordInput").val().trim() === "") {
      $("#ubahpassword #passwordError").html("<i class='fas fa-exclamation-triangle'></i> password wajib di isi");
      $("#ubahpassword #passwordError").addClass("error");
      $("#ubahpassword #password").addClass("error");
    }
    else if ($("#ubahpassword #passwordInput").val().trim().length < 6) {
      $("#ubahpassword #passwordError").html("<i class='fas fa-exclamation-triangle'></i> password minimal 6 karakter");
      $("#ubahpassword #passwordError").addClass("error");
      $("#ubahpassword #password").addClass("error");
      $("#ubahpassword #password").removeClass("success");
    }
    else {
      $("#ubahpassword #passwordError").html("");
      $("#ubahpassword #passwordError").removeClass("error");
      $("#ubahpassword #password").removeClass("error");

    }

    if ($("#ubahpassword #passwordError").html() === "") {
      var data = $("#ubahpassword #passwordInput").val().trim();
      $.ajax({
        url: "ubahPassword/" + id,
        method: "post",
        dataType: "json",
        data: "password=" + data,
        beforeSend: function () {
          $("#ubahpassword #loading-ubahpass").show();
        },
        success: function (msg) {
          if (msg.status === "berhasil") {
            Swal.fire({
              type: "success",
              title: "Berhasil",
              text: msg.pesan
            })
            $("#view").html(msg.tabel);
            $("#ubahpassword #loading-ubahpass").hide();
            $("#ubahpassword #form")[0].reset();
            $("#ubahpassword").hide();
            $(".modal-backdrop").hide();
            $("body").removeClass("modal-open");
            $("#tabel").DataTable();
            $("#ubahpassword #password").removeClass("success");

          } else if (msg.status === "gagal") {
            $("#ubahpassword #loading-ubahpass").hide();
            $("#ubahpassword #passwordError").html("<i class='fas fa-exclamation-triangle'></i> " + msg.error);
            $("#ubahpassword #passwordError").addClass("error");
            $("#ubahpassword #password").addClass("error");
          }
        }
      })
    }
  })


  //ketika icon view password di klik
  $("#ubahpassword #viewPass").click(function () {
    if ($("#ubahpassword #passwordInput")[0].type === "password") {
      $("#ubahpassword #passwordInput")[0].type = "text";
      $("#ubahpassword #viewPass #view").html("<i class='fas fa-eye'></i>");
    }
    else {
      $("#ubahpassword #passwordInput")[0].type = "password";
      $("#ubahpassword #viewPass #view").html("<i class='fas fa-eye-slash'></i>");
    }
  })

  //hapus data user
  $("#view").on("click", "#hapusData", function () {

    Swal.fire({
      title: "Apakah anda yakin?",
      text: "Data akan di hapus secara permanen!",
      type: "warning",
      showCancelButton: true,
      confirmButtonColor: "#ff2525",
      cancelButtonColor: "#5a6268",
      confirmButtonText: "<i class='fas fa-trash-alt'></i>'",
      cancelButtonText: "<i class='fas fa-times'></i>"
    }).then((result) => {

      if (result.value) {
        id = $(this).data("id");
        $.ajax({
          url: "hapusData/" + id,
          method: "post",
          dataType: "json",
          beforeSend: function () {
            $("#loading-hapus").show();
          },
          success: function (msg) {
            Swal.fire({
              title: "Berhasil",
              text: msg.pesan,
              type: "success"
            })
            $("#modal").hide();
            $(".modal-backdrop").hide();
            $("body").removeClass("modal-open");
            $("#view").html(msg.html);
            $("#tabel").DataTable();
          }
        });
      }
    })
  })

  //ketika icon view password di klik
  $("#viewPass").click(function () {
    if ($("#passwordInput")[0].type === "password") {
      $("#passwordInput")[0].type = "text";
      $("#viewPass #view").html("<i class='fas fa-eye'></i>");
    }
    else {
      $("#passwordInput")[0].type = "password";
      $("#viewPass #view").html("<i class='fas fa-eye-slash'></i>");
    }
  })

  //hapus error
  //nama user
  $("#namaInput").focus(function () {
    $("#namauserError").removeClass("error");
    $("#nama").removeClass("error");
    $("#namauserError").html("");
    $("#namauserErrorServer").html("");
    $("#namauserErrorServer").removeClass("error");
  })
  //username
  $("#usernameInput").focus(function () {
    $("#usernameError").removeClass("error");
    $("#username").removeClass("error");
    $("#usernameError").html("");
    $("#usernameErrorServer").html("");
    $("#usernameErrorServer").removeClass("error");
  })
  //password
  $("#passwordInput").focus(function () {
    $("#passwordError").removeClass("error");
    $("#password").removeClass("error");
    $("#passwordError").html("");
    $("#passwordErrorServer").html("");
    $("#passwordErrorServer").removeClass("error");
  })


  //password ubah modal
  $("#ubahpassword #passwordInput").focus(function () {
    $("#ubahpassword #passwordError").removeClass("error");
    $("#ubahpassword #password").removeClass("error");
    $("#ubahpassword #passwordError").html("");
  })
  //hak akses
  $("#hakaksesinput").change(function () {
    $("#hakaksesError").removeClass("error");
    $("#hakakses").removeClass("error");
    $("#hakaksesError").html("");
  })



  //tombol tutup di klik
  $("#ubahpassword #tutup").click(function () {
    $("#form")[0].reset();
    $("#usernameError,#namauserError,#passwordError,#hakaksesError").html("");
    $("#usernameError,#namauserError,#passwordError,#hakaksesError").removeClass("error");
    $("#nama,#username,#password,#hakakses").removeClass("success");
    $("#nama,#username,#password,#hakakses").removeClass("error");
    $("#loading-simpan,#loading-ubah,#loadin-hapus").hide()
  })

  //tombol tutup di klik
  $("#tutup").click(function () {
    $("#form")[0].reset();
    $("#usernameError,#namauserError,#passwordError,#hakaksesError,#usernameErrorServer").html("");
    $("#usernameError,#namauserError,#passwordError,#hakaksesError,#usernameErrorServer").removeClass("error");
    $("#nama,#username,#password,#hakakses").removeClass("success");
    $("#nama,#username,#password,#hakakses").removeClass("error");
    $("#loading-simpan,#loading-ubah,#loadin-hapus").hide()
  })

  // ==> DATA USER CLOSES

  // =========================================

  // START USER HAK AKSES
  $("#tambah").click(function () {
    var nama = $("#namaInput").val().trim();
    var nohp = $("#nohpInput").val().trim();
    var email = $("#emailInput").val().trim();

    //nama
    if (nama === "") {
      $("#namaError").html("<i class='fas fa-exclamation-triangle'></i> nama lengkap wajib di isi");
      $("#namaError").addClass("error");
      $("#nama").addClass("error");
      $("#nama").removeClass("success");
    } else if (/^[A-Za-z ]{1,}$/.test(nama) === false) {
      $("#namaError").html("<i class='fas fa-exclamation-triangle'></i> hanya di isi dengan huruf besar maupun kecil");
      $("#namaError").addClass("error");
      $("#nama").addClass("error");
      $("#nama").removeClass("success");
    }
    else {
      $("#namaError").removeClass("error");
      $("#nama").addClass("success");
    }

    //no hp
    if (nohp === "") {
      $("#noHpError").html("<i class='fas fa-exclamation-triangle'></i> nomor handphone wajib di isi");
      $("#noHpError").addClass("error");
      $("#nohp").addClass("error");
      $("#nohp").removeClass("success");
    } else if (/^\d{1,}$/.test(nohp) === false) {
      $("#noHpError").html("<i class='fas fa-exclamation-triangle'></i> hanya di isi angka");
      $("#noHpError").addClass("error");
      $("#nohp").addClass("error");
      $("#nohp").removeClass("success");
    }
    else {
      $("#noHpError").removeClass("error");
      $("#nohp").addClass("success");
    }

    //email
    if (email === "") {
      $("#emailError").html("<i class='fas fa-exclamation-triangle'></i> email wajib di isi");
      $("#emailError").addClass("error");
      $("#email").addClass("error");
      $("#email").removeClass("success");
    } else if (/^\w{1,}@{1}\w{1,}\.{1}\w{1,}$/.test(email) === false) {
      $("#emailError").html("<i class='fas fa-exclamation-triangle'></i> format email salah");
      $("#emailError").addClass("error");
      $("#email").addClass("error");
      $("#email").removeClass("success");
    }
    else {
      $("#emailError").removeClass("error");
      $("#email").addClass("success");
    }

    if ($("#namaError").html() === "" && $("#noHpError").html() === "" && $("#emailError").html() === "") {
      var data = $("#form").serialize();

      $.ajax({
        url: "user/tambahData",
        method: "post",
        data: data,
        dataType: "json",
        beforeSend: function () {
          $("#loading-simpan").show();
        },
        success: function (msg) {
          if (msg.status === "berhasil") {
            $("#loading-simpan").hide();
            Swal.fire({
              title: "Berhasil",
              text: msg.pesan,
              type: "success"
            })
            $("#form")[0].reset();
            $("#nama,#nohp,#email").removeClass("success");
          }
          else if (msg.status === "gagal") {
            $("#loading-simpan").hide();
            if (msg.nama !== "") {
              $("#namaError").html(msg.nama);
              $("#namaError").addClass("error");
              $("#nama").addClass("error");
            }

            if (msg.nohp !== "") {
              $("#noHpError").html(msg.nohp);
              $("#noHpError").addClass("error");
              $("#nohp").addClass("error");
            }

            if (msg.email !== "") {
              $("#emailError").html(msg.email);
              $("#emailError").addClass("error");
              $("#email").addClass("error");
            }

          }
        }
      });
    }

  })

  //hapus error form data hak akses user
  $("#namaInput").focus(function () {
    $("#namaError").html("");
    $("#namaError").removeClass("error");
  })

  $("#nohpInput").focus(function () {
    $("#noHpError").html("");
    $("#noHpError").removeClass("error");
    $("#nohp").removeClass("error");
  })

  $("#emailInput").focus(function () {
    $("#emailError").html("");
    $("#emailError").removeClass("error");
    $("#email").removeClass("error");
  })

})
