function loadImage(url) {
    return new Promise(resolve => {
        const xhr = new XMLHttpRequest();
        xhr.open('GET', url, true);
        xhr.responseType = "blob";
        xhr.onload = function(e) {
            const reader = new FileReader();
            reader.onload = function(event) {
                const res = event.target.result;
                resolve(res);
            }
            const file = this.response;
            reader.readAsDataURL(file);
        }
        xhr.send();
    });
}



window.addEventListener('load', async() => {


    const form = document.querySelector('#form');
    form.addEventListener('submit', (e) => {
        e.preventDefault();

        let nombres = document.getElementById('nombres').value;
        let apellidos = document.getElementById('apellidos').value;
        let dia = document.getElementById('dia').value;
        let anio = document.getElementById('anio').value;
        let mes = document.getElementById('mes').value;


        generatePDF(nombres, apellidos, dia, anio, mes);

    })

});

async function generatePDF(nombres, apellidos, dia, anio, mes) {
    const image = await loadImage("cartaPasanteDer.jpg");



    const pdf = new jsPDF('p', 'pt', 'letter');

    pdf.addImage(image, 'PNG', 0, 0, 600, 800);

    pdf.setFontSize(12);
    pdf.text(apellidos, 250, 346);
    pdf.text(nombres, 350, 346);
    pdf.text(dia, 383, 556);
    pdf.text(anio, 172, 570);
    pdf.text(mes, 485, 556);


    pdf.save(apellidos + " " + nombres + " CARTA PASANTE DERECHO.pdf");

}