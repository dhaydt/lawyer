function alertMessage(status, message){
    if(status == 1){
        icon = 'success';
        title = "Notice!";
    }else{
        icon = 'error'
        title = 'Warning!!'
    }
    Swal.fire({
        icon: icon,
        title: title,
        text: message,
    })
}

async function alertHapus(title = null, text = null){
    konfirmasi = await Swal.fire({
        title: title,
        text: text,
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, Delete it!'
    })
    return konfirmasi
}

async function logout(){
    konfirmasi = await Swal.fire({
        title: 'Warning!!!',
        text: 'Are you sure to logout???',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes!'
    })

    if(konfirmasi.isConfirmed == true){
        $('#form_logout').submit()
    }
}
