window.onload = function() {

};
var gauge = new Gauge({
    renderTo: 'gauge',
    // Dimensione del ddd
    width: 400,
    height: 400,
    // Attiva i contorni luminescenti
    glow: true,
    // Visualizza l'unità di misura
    // utilizzata dal tachimetro
    units: 'Km/h',
    title: 'Contachilometri',
    // Valore minimo della scala
    minValue: 0,
    // e valore massimo
    maxValue: 220,
    // Lista delle cifre sul tachimetro
    // per le quali vogliamo le tacche grandi
    majorTicks: ['0', '20', '40', '60', '80', '100', '120', '140',
        '160', '180', '200', '220'
    ],
    // Quante tacche intermedie
    // ci sono tra ogni tacca grande?
    minorTicks: 2,
    // Qui definisco dei colori
    // di sfondo per le tacche a seconda del valore
    /*highlights : [
    { from : 0, to : 100, color :
    'rgba(0, 255, 0, .15)' },
    { from : 100, to : 160, color :
    'rgba(255, 255, 0, .15)' },
    { from : 160, to : 220, color :
    'rgba(255, 30, 0, .25)' }
    ],*/
    // Questi sono i colori dei
    // vari componenti del tachimetro
    colors: {
        plate: '#222',
        majorTicks: '#f5f5f5',
        minorTicks: '#ddd',
        title: '#fff',
        units: '#ccc',
        numbers: '#eee',
        needle: {
            start: 'rgba(240, 128, 128, 1)',
            end: 'rgba(255, 160, 122, .9)'
        }
    }
});
// Piccola funzione che aggiorna il tachimetro
// con un valore casuale fino a un massimo di 220
// ogni 1000 millisecondi, cioé una volta al secondo.
gauge.onready = function() {
    setInterval(function() {
        gauge.setValue(Math.random() * 220);
    }, 1000);
};
gauge.draw();
