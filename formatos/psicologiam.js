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

    const canvas = document.querySelector("canvas");
    canvas.height = canvas.offsetHeight;
    canvas.width = canvas.offsetWidth;

    signaturePad = new SignaturePad(canvas, {});

    const form = document.querySelector('#form');
    form.addEventListener('submit', (e) => {
        e.preventDefault();

        let nombres = document.getElementById('nombres').value;
        let apellidos = document.getElementById('apellidos').value;
        let revoe = document.getElementById('revoe').value;
        let att = document.getElementById('att').value;
        let instituto = document.getElementById('instituto').value;
        let fecha = document.getElementById('fecha').value;


        generatePDF(nombres, apellidos, revoe, att, instituto, fecha);

    })

});

async function generatePDF(nombres, apellidos, revoe, att, instituto, fecha) {
    const image = await loadImage("plantilla_machotePsico.jpg");
    const signatureImage = signaturePad.toDataURL();


    const pdf = new jsPDF('p', 'pt', 'letter');

    pdf.addImage(image, 'PNG', 0, 0, 600, 900);
    pdf.addImage(signatureImage, 'PNG', 190, 665, 300, 60);

    pdf.setFontSize(12.5);
    pdf.text(instituto, 55, 323);

    pdf.setFontSize(28);
    pdf.text(nombres, 80, 420);
    pdf.text(apellidos, 335, 420);

    pdf.setFontSize(11);
    pdf.text(revoe, 460, 503);
    pdf.setFontSize(14);
    pdf.text(fecha, 465, 222)
    pdf.text(att, 200, 745);
    pdf.text(instituto, 160, 765);


    pdf.save(apellidos + " " + nombres + " MACHOTE - PSICOLOGIA.pdf");

}