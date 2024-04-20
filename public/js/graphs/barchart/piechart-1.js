
/* Define Size */
const width=700,height=700;
/* Define Data */
const dataset = [ 40 ,12 ,15 , 30 , 50 , 72]
const color = d3.scaleOrdinal(d3.schemeTableau10);

/* Build the pie and dataset */
const svg = d3.select("#main").append('svg').attr("width",width).attr("height",height);


const pie = d3.pie().value((d) => d).sort(null);
const data = pie(Array.from(dataset));
const zeroArc = d3.arc()
  .innerRadius(0) // donde arranca
  .outerRadius(8) // donde termina
  .cornerRadius(1)
const arc = d3.arc()
  .innerRadius(0) // donde arranca
  .outerRadius(250) // donde termina
  .cornerRadius(20)
const hoverArc = d3.arc()
  .innerRadius(0) // donde arranca
  .outerRadius(260) // donde termina
  .cornerRadius(10)


/* Draw the pie */
let mainG = svg.append('g')
  .attr("transform",`translate(${width/2},${height/2})`); // lo ubicamos en el medio

let g = mainG.selectAll("myPie")
  .append('g')
  .attr("name","myPie")
  .data(data)
  .enter();
  
g.append('path')
  .attr('d',zeroArc)
  .attr('fill',d=>color(d))
  .style('opacity',.8)
  .on('mouseover',function(d,s){
    d3.select(this)
    .transition().duration(300)
    .style('opacity',.95)
    .attr('d',hoverArc)
  })
  .on('mouseout',function(d,s){
    d3.select(this)
    .transition().duration(300)
    .attr('d',arc)
  })
  .transition().duration(1500).delay((d,i) => 200 * i)
  .attr('d',arc)

const text = g.append('text')
  .attr('transform', d => `translate(${arc.centroid(d)})`)
  .text(d=>d.value)
  .style('font-size','24px')
  .style('fill','#afaff')
  .style('font-weight','bold')
  .style('pointer-events','none')
// const text = innerG.append('text')
//   .text(d=>d.data.name +" "+d.value)
//   .attr('x',d=> arc.centroid(d)[0]-30)
//   .attr('y',d=> arc.centroid(d)[1])
//   .style('font-size','14px')
//   .style('fill','#afaff')
//   .style('font-weight','bold')
    