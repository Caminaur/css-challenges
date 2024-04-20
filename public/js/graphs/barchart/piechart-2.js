
/* Define Size */
const width=500,height=500;
/* Define Data */
const dataset = [
  {name:"East",value:125},
  {name:"West",value:40},
  {name:"Central",value:70},
  {name:"Central",value:99},
  {name:"East",value:125},
  {name:"West",value:40}
]
const color = d3.scaleOrdinal(d3.schemeTableau10);

/* Build the pie and dataset */
const svg = d3.select("#main").append('svg').attr("width",width).attr("height",height);


const pie = d3.pie().value(function(d){
  return d.value;
});
const data = pie(dataset);
const arc = d3.arc()
  .innerRadius(1) // donde arranca
  .outerRadius(150) // donde termina
  .cornerRadius(2)
  .padAngle(0.02); // 

/* Draw the pie */
let mainG = svg.append('g')
  .attr("transform",`translate(${width/2},${height/2})`); // lo ubicamos en el medio

let innerG = mainG.selectAll("myPie")
  .append('g')
  .attr("name","myPie")
  .data(data)
  .enter();
  
innerG.append('path')
  .attr('d',arc)
  .attr('fill',d=>color(d))

innerG.append('text')
  .text(d=>d.data.name +" "+d.value)
  .attr('x',d=> arc.centroid(d)[0]-30)
  .attr('y',d=> arc.centroid(d)[1])
    