document.querySelector('.jumlahBTN button').addEventListener('click', function() {
    const num1 = parseFloat(document.getElementById('no1').value) || 0;
    const num2 = parseFloat(document.getElementById('no2').value) || 0;
    const result = num1 + num2;
    document.getElementById('hasilJML').textContent = result;
});

document.querySelector('.resetBTN button').addEventListener('click', function() {
    document.getElementById('no1').value = '';
    document.getElementById('no2').value = '';
    document.getElementById('hasilJML').textContent = '0';
});