new Morris.Line({
    // ID of the element in which to draw the chart.
    element: 'parsing10rangecharts',
    // Chart data records -- each entry in this array corresponds to a point on
    // the chart.
    data: [
      {value1: 0,value2:52},
      {value1: 10,value2:20},
      {value1: 20,value2:15},
      {value1: 30,value2:41},
      {value1: 40,value2:25},
      {value1: 50,value2:32},
      {value1: 60,value2:41},
      {value1: 70,value2:74},
      {value1: 80,value2:2},
      {value1: 90,value2:1},
      {value1: 100,value2:23},
    ],
    // The name of the data record attribute that contains x-values.
    xkey: 'value1',
    // A list of names of data record attributes that contain y-values.
    ykeys: ['value2'],
    // Labels for the ykeys -- will be displayed when you hover over the
    // chart.
    labels: ['Value'],
    lineColors:['blue'],
    parseTime: !1,
  });




