const flashData = $(".flash-data").data("flashdata");

if (flashData) {
    Swal.fire({
        position: "top",
        icon: "success",
        title: "data berhasil" + flashData,
        showConfirmButton: false,
        timer: 1500,
    });
}

$(".tombol-hapus").on("click", function(e) {
    e.preventDefault();
    const href = $(this).attr("href");

    Swal.fire({
        title: "Anda yakin?",
        text: "data di hapus!",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Hapus!",
    }).then((result) => {
        if (result.value == true) {
            document.location.href = href;
        }
    });
});

$(".batal").on("click", function(e) {
    e.preventDefault();
    const href = $(this).attr("href");

    Swal.fire({
        title: "Anda yakin?",
        text: "Transaksi di batalkan!",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Hapus!",
    }).then((result) => {
        if (result.value == true) {
            document.location.href = href;
        }
    });
});


$("#myAlert").on("closed.bs.alert", function() {
    // do something…
});