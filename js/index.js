const logout = ()=>{
    Swal.fire({
        title: 'A jeni i sigurt?',
        text: "Ju do te Çkyçeni nga llogaria juaj!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Confirm'
      }).then((result) => {
        if (result.isConfirmed) {
          Swal.fire(
            'Sukses!',
            'Ju sapo u Çkyçet me sukses',
            'success'
          )
          window.location="/projekti_ueb/php/logout.php";
        }
      })
}