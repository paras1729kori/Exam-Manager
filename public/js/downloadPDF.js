window.onload = function(){
    document.getElementById('generatePDF').addEventListener("click", ()=>{
        const content = this.document.getElementById("htmlContent")
        console.log(content)
        var opt = {
            // margin: 1,
            filename: 'time_table.pdf',
            image: { type: 'jpeg', quality: 0.98 },
            html2canvas: { scale: 2 },
            jsPDF: { unit: 'in', format: 'letter', orientation: 'landscape' }
        };
        html2pdf().from(content).set(opt).save();
    })
}