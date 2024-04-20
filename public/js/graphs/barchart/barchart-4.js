// https://blog.risingstack.com/d3-js-tutorial-bar-charts-with-javascript/

// dataset
const data = [
  {
    language: 'Rust',
    value: 78.9,
    color: '#000000'
  },
  {
    language: 'Kotlin',
    value: 75.1,
    color: '#00a2ee'
  },
  {
    language: 'Python',
    value: 68.0,
    color: '#fbcb39'
  },
  {
    language: 'TypeScript',
    value: 67.0,
    color: '#007bc8'
  },
  {
    language: 'Go',
    value: 65.6,
    color: '#65cedb'
  },
  {
    language: 'Swift',
    value: 65.1,
    color: '#ff6e52'
  },
  {
    language: 'JavaScript',
    value: 61.9,
    color: '#f9de3f'
  },
  {
    language: 'C#',
    value: 60.4,
    color: '#5d2f8e'
  },
  {
    language: 'F#',
    value: 59.6,
    color: '#008fc9'
  },
  {
    language: 'Clojure',
    value: 59.6,
    color: '#507dca'
  }
];
// dataset

// dimensions and margins
const margin = 60;
const width = 1000 - margin * 2;
const height = 600 - margin * 2;
// dimensions and margins

const svg = d3.select('#main').append('svg')
  .attr('class', 'graph')
  .attr('width', 1000)
  .attr('height',600)

const chart = svg.append('g')
  .attr('transform',`translate(${margin},${margin})`);


// Scaling, Axes
// In order to draw the y-axis, I need to set the lowest and the highest value limit
const yScale = d3.scaleLinear() // It converts a continuous input domain into a continuous output range
  .range([height,0]) // takes the length that should be divided between the limits of the domain values
  .domain([0,100]);
// Remember, the SVG coordinate system starts from the top left corner that’s why the range takes the height as the first parameter and not zero.

// Creating an axis on the left is as simple as adding another group and calling d3’s axisLeft method with the scaling function as a parameter.
chart.append('g')
    .call(d3.axisLeft(yScale));

// Line at the end of the graph
const Gen = d3.line(); 
const points = [ 
  [width, height], 
  [width, 0] 
  
]; 
const pathOfLine = Gen(points); 
// Line at the end of the graph

d3.select('path') 
    .attr('d', pathOfLine)
    .attr('stroke','black')
    .attr('stroke-width',0.7); 

const xScale = d3.scaleBand()
  .range([0, width])
  .domain(data.map((s) => s.language))
  .padding(0.2)

chart.append('g')
    .attr('transform', `translate(0, ${height})`)
    .call(d3.axisBottom(xScale));


// Be aware that I use scaleBand for the x-axis which helps to split the range into bands and compute the coordinates and widths of the bars with additional padding.
// D3.js is also capable of handling date type among many others. scaleTime is really similar to scaleLinear except the domain is here an array of dates.


let barGroups = chart.selectAll()
      .data(data) // Data function tells how many elements the DOM should be updated with based on the array length.
      .enter() // Identifies elements that are missing if the data input is longer than the selection. 
      // This returns a new selection representing the elements that need to be added.
      .append('g')

barGroups
    .append('rect') // append a rectangle for EVERY member of the array.
    .attr('class','bar')
    .attr('fill','#80cbc4')
    .attr('x', (actual, index, array) => xScale(actual.language)) // 3 parameters: the actual member of the input data, index of it and the whole input.
    .attr('y', (s) => yScale(s.value))
        // The scaling function returns the coordinate for a given domain value. Calculating the coordinates are a piece of cake, the trick is with the height of the bar. The computed y coordinate has to be subtracted from the height of the chart to get the correct representation of the value as a column.
    .attr('height', (s) => height - yScale(s.value))
    .attr('width', xScale.bandwidth())
    .on('mouseenter', function (actual, i) {

      d3.selectAll('.value')
        .attr('opacity', 0)
  
      d3.select(this)
        .transition()
        .duration(300)
        .attr('opacity', 0.6)
        .attr('x', (a) => xScale(a.language) - 5)
        .attr('width', xScale.bandwidth() + 10)
  
      const y = yScale(i.value)
  
      chart.append('line')
        .attr('id', 'limit')
        .attr('x1', 0)
        .attr('y1', y)
        .attr('x2', width)
        .attr('y2', y)

      barGroups.append('text')
        .attr('class', 'divergence')
        .attr('x', (a) => xScale(a.language) + xScale.bandwidth() / 2)
        .attr('y', (a) => yScale(a.value) + 30)
        .attr('fill', 'white')
        .attr('text-anchor', 'middle')
        .text((a, idx) => {
          const divergence = (a.value - i.value).toFixed(1)
          
          let text = ''
          if (divergence > 0) text += '+'
          text += `${divergence}%`

          return idx !== i ? text : '';
        });
      this.parentElement.querySelector('.divergence').innerHTML = i.language;

    })
    .on('mouseleave', function () {
      d3.selectAll('.value')
        .attr('opacity', 1)
  
      d3.select(this)
        .transition()
        .duration(300)
        .attr('opacity', 1)
        .attr('x', (a) => xScale(a.language))
        .attr('width', xScale.bandwidth())
  
      chart.selectAll('#limit').remove()
      chart.selectAll('.divergence').remove()
    });
    
    // I define the width of the rectangles with the scaling function as well. scaleBand has a bandwidth function which returns the computed width for one element based on the set padding.



    // D3.js Grid System
    // Highlight the values by adding grid lines in the background.
    // Go ahead, experiment with both vertical and horizontal lines but my advice is to display only one of them. Excessive lines can be distracting. 

    // chart.append('g')
    //   .attr('class', 'grid')
    //   .attr('transform', `translate(0, ${height})`)
    //   .call(d3.axisBottom()
    //       .scale(xScale)
    //       .tickSize(-height, 0, 0)
    //       .tickFormat(''))
      
    chart.append('g')
        .attr('class', 'grid')
        .call(d3.axisLeft()
            .scale(yScale)
            .tickSize(-width, 0, 0)
            .tickFormat(''))

// Labels in D3.js
// Adding some textual guidance
// Let’s give a name to the chart and add labels for the axes.




// Texts are SVG elements that can be appended to the SVG or group
// They can be positioned with x and y coordinates while text alignment is done with the TEXT-ANCHOR attribute
// To add the label itself, just call text method on the text element.

svg.append('text')
    .attr('x', -(height / 2) - margin)
    .attr('y', margin / 2.4)
    .attr('transform', 'rotate(-90)')
    .attr('text-anchor', 'middle')
    .text('Usage meter (%)')

svg.append('text')
    .attr('x', width / 2 + margin)
    .attr('y', 40)
    .attr('text-anchor', 'middle')
    .text('Most loved programming languages in 2018')

// Texts are SVG elements that can be appended to the SVG or groups
// They can be positioned with x and y coordinates while text alignment is done with the text-anchor attribute
// To add the label itself, just call text method on the text element.


// Interactivity with Javascript and D3
// I access the element via this keyword.
barGroups 
  .append('text')
  .attr('class', 'value')
  .attr('x', (a) => xScale(a.language) + xScale.bandwidth() / 2)
  .attr('y', (a) => yScale(a.value) + 30)
  .attr('text-anchor', 'middle')
  .text((a) => `${a.value}%`)

// You could also get the mouse coordinates with d3.mouse
// It returns an array with the x and y coordinate
// This way, displaying a tooltip at the tip of the cursor would be no problem at all.

// I have very similar values displayed on the chart so to highlight the divergences among the bar values, I set up an event listener for the mouseenter event
// Every time the user hovers over a specific a column, a horizontal line is drawn on top of that bar
// Furthermore, I also calculate the differences compared to the other bands and display it on the bars.
