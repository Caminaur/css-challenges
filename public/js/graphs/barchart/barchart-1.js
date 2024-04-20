
 // create a tooltip
 var Tooltip = d3.select("main")
  .append("div")
  .style("opacity", 0)
  .attr("class", "tooltip")
  .style("background-color", "white")
  .style("border", "solid")
  .style("font-size", "18px")
  .style("border-width", "1px")
  .style("border-radius", "10px")
  .style("padding", "10px")

  // Three function that change the tooltip when user hover / move / leave a cell
  var mouseover = function(d) {
    Tooltip
      .style("opacity", 1)
    d3.select(this)
      .style("stroke", "black")
      .style("opacity", 1)
  }
  var mousemove = function(d) {
    let score = d3.select(this)['_groups'][0][0]['__data__'].score;
    let name = d3.select(this)['_groups'][0][0]['__data__'].name;
    Tooltip
      .html(`The exact value of<br>this ${name} is: ${score}`)
      .style("left", (d3.pointer(d)[0])/1.2 + "px")
      .style("top", (d3.pointer(d)[1])/1.2 + "px")
      .style("pointer-events", 'none')
      d3.select(this)
      .style("stroke", "none")
      .style("opacity", .8)
  }
  var mouseleave = function(d) {
    Tooltip
      .style("opacity", 0)
    d3.select(this)
      .style("stroke", "none")
      .style("opacity", 1)
  }

const data = [
    { name: 'John', score: 80 },
    { name: 'Simon', score: 76 },
    { name: 'Samantha', score: 90 },
    { name: 'Patrick', score: 82 },
    { name: 'Mary', score: 90 },
    { name: 'Christina', score: 75 },
    { name: 'Michael', score: 86 },
  ];

  const width = 900;
  const height = 450;
  const margin = { top: 50, bottom: 50, left: 50, right: 50 };
  
  const svg = d3.select('#main')
    .append('svg')
    .attr('width', width - margin.left - margin.right)
    .attr('height', height - margin.top - margin.bottom)
    .attr("viewBox", [0, 0, width, height]);
  
  const x = d3.scaleBand()
    .domain(d3.range(data.length))
    .range([margin.left, width - margin.right])
    .padding(0.1)
  
  const y = d3.scaleLinear()
    .domain([0, 100])
    .range([height - margin.bottom, margin.top])
  
  const cosa = svg
    .append("g")
    .attr("fill", 'royalblue')
    .selectAll("rect")
    .data(data.sort((a, b) => d3.descending(a.score, b.score)))
    .join("rect")
      .on("mouseover", mouseover)
      .on("mousemove", mousemove)
      .on("mouseleave", mouseleave)
      .attr("x", (d, i) => x(i))
      .attr("y", d => y(d.score))
      .attr('title', (d) => d.score)
      .attr("class", "rect")
      .attr("height", d => y(0) - y(d.score))
      .attr("width", x.bandwidth());
  
  function yAxis(g) {
    g.attr("transform", `translate(${margin.left}, 0)`)
      .call(d3.axisLeft(y).ticks(null, data.format))
      .attr("font-size", '20px')
  }
  
  function xAxis(g) {
    g.attr("transform", `translate(0,${height - margin.bottom})`)
      .call(d3.axisBottom(x).tickFormat(i => data[i].name))
      .attr("font-size", '20px')
  }

  
  
  
  svg.append("g").call(xAxis);
  svg.append("g").call(yAxis);
  svg.node();

