<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>

  </head>
  <body>
    <div id="container">

    </div>
  <script src=""></script>
  <script src="https://code.highcharts.com/highcharts.js"></script>
  <script src="https://code.highcharts.com/modules/exporting.js"></script>
  <script>
  Highcharts.chart('container', {

  title: {
      text: 'Ventas de Boutique allen'
  },

  subtitle: {
      text: 'www.boutiqueallen.com'
  },

  yAxis: {
      title: {
          text: 'Cantidad de ventas'
      }
  },
  legend: {
      layout: 'vertical',
      align: 'right',
      verticalAlign: 'middle'
  },

  plotOptions: {
      series: {
          label: {
              connectorAllowed: false
          },
          pointStart: '10-Mayo'
      }
  },

  series: [{
      name: 'Ventas',
      data: [12908, 5948, 8105, 11248, 8989, 11816, 18274, 18111]
  }],

  responsive: {
      rules: [{
          condition: {
              maxWidth: 500
          },
          chartOptions: {
              legend: {
                  layout: 'horizontal',
                  align: 'center',
                  verticalAlign: 'bottom'
              }
          }
      }]
  }

});
  </script>
  </body>
</html>


<article class="section">
  <h2>Valores</h2>
  <p>Los valores son los puntos que orientarán la conducta dentro de la organización, es el ideal que tiene la organización de cada concepto.
Iniciativa. Hacer las cosas por voluntad propia, adelantándose a cualquier motivación externa o ajena a uno mismo.
Honradez. Trabajando en el bien comuna, tanto de la empresa como la de los compañeros de trabajo.
Respeto. Hacia la persona que representa cada puesto hacia la empresa, tanto dentro como fuera de esta.
Sentido de la responsabilidad. Obrar de tal modo que los efectos de tu acción sean por el bien propio y compatibles con la permanencia laboral en la empresa.
Flexibilidad. Capacidad de trabajar y de crear nuevas soluciones, innovar y promover nuevas formas de hacer y de pensar.
Vocación de servicio. Hacia los clientes, por los cuales se enfocan la mayoría de las estrategias de esta empresa, y es la razón de ser de la misma.
</p>
</article>
