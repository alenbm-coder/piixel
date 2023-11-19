$(document).ready(function() {
    $.ajax({
        url: "php/consulta.php",
        dataType: 'json',
        contentType: "application/json; charset=utf-8",
        method: "GET",
        success: function(data) {
            var nombres = [];
            var titulos = [];
            var color = ['rgba(255, 99, 132, 0.2)', 'rgba(54, 162, 235, 0.2)', 'rgba(255, 206, 86, 0.2)', 'rgba(75, 192, 192, 0.2)', 'rgba(153, 102, 255, 0.2)', 'rgba(255, 159, 64, 0.2)'];
            var bordercolor = ['rgba(255,99,132,1)', 'rgba(54, 162, 235, 1)', 'rgba(255, 206, 86, 1)', 'rgba(75, 192, 192, 1)', 'rgba(153, 102, 255, 1)', 'rgba(255, 159, 64, 1)'];
            console.log(data);

            for (var i in data) {
                nombres.push(data[i].Marca);
                titulos.push(data[i].Compras_id_compras);
            }

            var chartdata = {
                labels: nombres,
                datasets: [{
                    label: "Productos",
                    backgroundColor: color,
                    borderColor: color,
                    borderWidth: 2,
                    hoverBackgroundColor: color,
                    hoverBorderColor: bordercolor,
                    data: titulos
                }]
            };

            var mostrarPie = $("#graficoPie");

            var grafico = new Chart(mostrarPie, {
                type: 'pie',
                data: chartdata,
                options: {
                    responsive: true,
                    
                }
            });


            var mostrarLine = $("#graficoLine");

            var grafico = new Chart(mostrarLine, {
                type: 'line',
                data: chartdata,
                options: {
                    responsive: true,
                    scales: {
                        yAxes: [{
                            ticks: {
                                beginAtZero: true
                            }
                        }]
                    }
                }
            });
            
            var mostrarBar = $("#graficoBar");

            var grafico = new Chart(mostrarBar, {
                type: 'bar',
                data: chartdata,
                options: {
                    responsive: true,
                    scales: {
                        yAxes: [{
                            ticks: {
                                beginAtZero: true
                            }
                        }]
                    }
                }
            });
            var mostrarDoughnut = $("#graficoDoughnut");

            var grafico = new Chart(mostrarDoughnut, {
                type: 'doughnut',
                data: chartdata,
                options: {
                    responsive: true,
                    scales: {
                        yAxes: [{
                            ticks: {
                                beginAtZero: true
                            }
                        }]
                    }
                }
            });
        },
        error: function(data) {
            console.log(data);
        }
    });
});
