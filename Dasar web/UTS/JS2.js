function submitForm() {
    const name = document.getElementById("name").value;
    const colors = Array.from(document.querySelectorAll('input[name="color"]:checked'))
                        .map(checkbox => checkbox.value)
                        .join(", ");
    
    const resultDiv = document.getElementById("result");
    resultDiv.innerHTML = `Nama: ${name} <br> Warna yang dipilih: ${colors}`;
}
