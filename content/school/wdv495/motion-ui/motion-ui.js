// document.addEventListener('DOMContentLoaded', function() {
//     // Pie Chart
//     var pieData = [{
//         values: [19, 26, 55],
//         labels: ['Residential', 'Non-Residential', 'Utility'],
//         type: 'pie',
//         textinfo: 'label+percent',
//         textposition: 'outside',
//         automargin: true
//     }];

//     var pieLayout = {
//         height: 500,
//         width: 600,
//         title: 'Market Distribution',
//         showlegend: false
//     };

//     Plotly.newPlot('pieChart', pieData, pieLayout, {responsive: true});

//     // Line Graph
//     var lineData = [{
//         x: [1, 2, 3, 4, 5],
//         y: [10, 15, 13, 17, 22],
//         type: 'scatter',
//         mode: 'lines+markers',
//         marker: {color: 'blue'},
//     }];

//     var lineLayout = {
//         height: 500,
//         width: 600,
//         title: 'Sales Growth',
//         xaxis: {
//             title: 'Month'
//         },
//         yaxis: {
//             title: 'Sales'
//         }
//     };

//     Plotly.newPlot('lineGraph', lineData, lineLayout, {responsive: true});

//     // Bar Chart
//     var barData = [{
//         x: ['Q1', 'Q2', 'Q3', 'Q4'],
//         y: [20, 14, 23, 25],
//         type: 'bar',
//         marker: {
//             color: '#ab63fa'
//         },
//     }];

//     var barLayout = {
//         height: 500,
//         width: 600,
//         title: 'Quarterly Revenue',
//         xaxis: {
//             title: 'Quarter'
//         },
//         yaxis: {
//             title: 'Revenue (in thousands)'
//         }
//     };

//     Plotly.newPlot('barChart', barData, barLayout, {responsive: true});
// });

const layout = {
    height: 500,
    width: 600,
    colorway: ["#e91e63", "#673ab7"],
    barmode: "group",
    title: "Number and their squares and cubes",
    xaxis: { title: "Number" },
    yaxis: { title: "Function" },
    bargap: 0.3,
    paper_bgcolor: "transparent",
    plot_bgcolor: "transparent",
    font: {
      family: "Colfax, IBM Plex Sans",
      color: "white"
    },
    yaxis: {
      range: [0, 750],
      autorange: false
    }
  };
  
  const config = {
    displaylogo: false,
    responsive: true,
    scrollZoom: true
  };
  
  const animationConfig = {
    transition: {
      duration: 500,
      easing: "cubic-in-out"
    },
    frame: {
      duration: 500
    }
  };
  
  const numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9];
  const initialData = [
    {
      x: numbers,
      y: [0, 0, 0, 0, 0, 0, 0, 0, 0],
      name: "square",
      type: "bar"
    },
    {
      x: numbers,
      y: [0, 0, 0, 0, 0, 0, 0, 0, 0],
      name: "cube",
      type: "bar"
    }
  ];
  Plotly.newPlot("myDiv", initialData, layout, config);
  
  const squares = numbers.map((x) => x * x);
  const cubes = numbers.map((x) => x * x * x);
  const trace1 = {
    x: numbers,
    y: squares,
    name: "square",
    type: "bar"
  };
  const trace2 = { x: numbers, y: cubes, name: "cube", type: "bar" };
  const finalData = [trace1, trace2];
  Plotly.animate("myDiv", { data: finalData }, { ...animationConfig });
  
Plotly.plot('graph', [{
y: new Array(100).fill(0).map((d, i) => 
    Math.pow(i / 50, 2) + Math.sin(i * 4)

),
line: {dash: '0px 5200px'}
}]).then(function () {
return Plotly.animate('graph',
    [{data: [{'line.dash': '5200px 0px'}]}],
    {
    frame: {duration: 5000, redraw: false},
    transition: {duration: 5000}
    }
);
});