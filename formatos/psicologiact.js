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


let signaturePad = null;

window.addEventListener('load', async() => {


    const form = document.querySelector('#form');
    form.addEventListener('submit', (e) => {
        e.preventDefault();

        let nombres = document.getElementById('nombres').value;
        let apellidos = document.getElementById('apellidos').value;
        let revoe = document.getElementById('revoe').value;
        let fecha = document.getElementById('fecha').value;


        generatePDF(nombres, apellidos, revoe, fecha);

    })

});

async function generatePDF(nombres, apellidos, revoe, fecha) {
    const image = await loadImage("cartaTerPsic.jpg");

    const pdf = new jsPDF('p', 'pt', 'letter');

    pdf.addImage(image, 'PNG', 0, 0, 600, 800);

    pdf.setFontSize(11);
    pdf.text(apellidos, 164, 465);
    pdf.text(nombres, 261, 465);;
    pdf.text(revoe, 335, 376);
    pdf.text(fecha, 386, 252);


    pdf.save(apellidos + " " + nombres + " CARTA TERMINACIÓN PSICOLOGIA.pdf");

}