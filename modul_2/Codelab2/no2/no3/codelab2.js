document.getElementById('form-pendaftaran').addEventListener('submit', function(event) {
    event.preventDefault(); 

    let nama = document.getElementById('nama').value;
    let email = document.getElementById('email').value;
    let alamat = document.getElementById('alamat').value;
    
    let isValid = true;

    document.getElementById('namaerror').innerText = '';
    document.getElementById('emailerror').innerText = '';
    document.getElementById('alamaterror').innerText = '';
    document.getElementById('pesan').innerText = '';

    if (nama === '') {
        document.getElementById('namaerror');
        isValid = false;
        alert('Nama tidak boleh kosong')
    } else if (nama.length < 3) {
        document.getElementById('namaerror');
        isValid = false;
    }

    const emailPattern = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/;
    if (email === '') {
        document.getElementById('emailerror');
        isValid = false;
        alert('Email tidak boleh kosong')
    } else if (!email.match(emailPattern)) {
        document.getElementById('emailerror');
        alert('Email tidak valid')
        isValid = false;
    }

    if (alamat === '') {
        document.getElementById('alamaterror');
        isValid = false;
        alert('Alamat tidak boleh kosong')
    }
        alert('Pendaftaran berhasil')
});
