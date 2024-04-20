
// dataset
const dataURL = "https://gist.githubusercontent.com/curran/0ac4077c7fc6390f5dd33bf5c06cb5ff/raw/605c54080c7a93a417a3cea93fd52e7550e76500/UN_Population_2019.csv";
// dataset

// dimensions and margins
let margin = {
  top:40,
  right:20,
  bottom:30,
  left:80,
}
let width = 960 - margin.left - margin.right,
    height = 500 - margin.top - margin.bottom;
// dimensions and margins

const color = d3.scaleOrdinal(d3.schemeSet1);

// year 
const year = "2020";
// year 


// Ranges of the X and Y domains
const x = d3.scaleBand()
          .range([0, width])
          .padding(0.1);
const y = d3.scaleLinear()
          .range([height, 0]);
// Ranges of the X and Y domains

// Append SVG element
// Select the body on the webpage and append the SVG object to it
const svg = d3.select("body").append("svg")
  .attr("width", width + margin.left + margin.right)
  .attr("height", height + margin.top + margin.bottom)
  .append("g") // is used to group SVG shapes together
  .attr("transform", 
        "translate(" + margin.left + "," + margin.top + ")")
// Append SVG element
// Select the body on the webpage and append the SVG object to it

// Get data
var data = await d3.csv(dataURL);
// Get data


// Format
  data = data.slice(0,10); // reducimos el dataset a algo mas manejable
// Format

// Scale domains
// Let’s work through our x and y data to make sure it’s scaled to our set domains
// Scale the range of the data in the domains
x.domain(data.map((d) => d.Country ));
y.domain([ 0, d3.max( data, (d) => parseInt(d[year]) ) ]);

// Add bars
// Create the bars and associate each of them with a data set.
// Append rectangles for bar chart
svg.selectAll(".bar")
.data(data)
.enter().append("rect")
  .attr("class", "bar")
  .attr("x", (d) => x(d.Country))
  .attr("width", x.bandwidth())
  .attr("y", (d) => y(parseInt(d[year])))
  .attr("fill",d => color(d[year]))
  .attr("cursor","pointer")
  .attr("opacity",.7)
  .attr("height", d => height - y(d[year]))
  .on('mouseover', function(d,s) {
    svg.selectAll(".bar")
      .attr("opacity",.3)

    d3.select(this)
      .transition().duration(300)
      .attr("x", (d) => x(d.Country) - 5)
      .attr('width', x.bandwidth() +10)
      .attr('opacity',1)
    }
  )
  .on('mouseout', function(d,s) {
    svg.selectAll(".bar")
      .attr("opacity",.7)
    d3.select(this)
      .transition().duration(400)
      .attr("x", (d) => x(d.Country))
      .attr('width',x.bandwidth())
      .attr('opacity',.7)
    }
  );

// Add x axis
svg.append("g")
  .attr("transform", `translate(0, ${height})`)
  .call(d3.axisBottom(x));

// Add y axis
svg.append("g")
  .call(d3.axisLeft(y));