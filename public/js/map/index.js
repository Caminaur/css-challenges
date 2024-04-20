const width = 850;
const height = 700;


const svg = d3.select('#main')
    .append('svg')
    .attr('width',width)
    .attr('height',height)
    .attr('class','sphere')
    .style('color','black')

const g = svg.append('g');
    
const projection = d3.geoMercator()
    .scale(140)
    .translate([width/2,height/1.5]);
    
const path = d3.geoPath(projection);


svg.call(d3.zoom().on('zoom',zoomed)
    .scaleExtent([1,15]));

svg.call(d3.drag().on('drag',dragged));

function zoomed({transform}) {
    g.attr("transform", transform);
}
    
function dragged({transform}) {
    console.log(transform);
}

function randomNumber(min, max) { 
    return Math.floor(Math.random() * (max - min + 1) + min)
}

Promise.all([
    d3.json('https://cdn.jsdelivr.net/npm/world-atlas@2/countries-50m.json')
]).then(([data])=>{
    const countries = topojson.feature(data, data.objects.countries);
    g.selectAll('path')
        .data(countries.features)
        .enter()
        .append('path')
        .attr('class','country')
        .attr('d',path)
        .append('title')
        .text( d=> `Country: ${d.properties.name}\n`)
        .append('title')
        .text( d=> `Country: ${randomNumber(0,100)}\n`);
});
    // https://cdn.jsdelivr.net/npm/world-atlas@2/countries-110m.json

    // https://www.youtube.com/watch?v=urfyp-r255A