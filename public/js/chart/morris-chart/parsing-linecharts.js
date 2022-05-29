new Morris.Line({
    // ID of the element in which to draw the chart.
    element: 'parsinglinecharts',
    // Chart data records -- each entry in this array corresponds to a point on
    // the chart.
    data: [
      { year: '2008', value1: 20,value2:10 },
      { year: '2009', value1: 10,value2:5 },
      { year: '2010', value1: 5,value2:60 },
      { year: '2011', value1: 5 ,value2:1},
      { year: '2012', value1: 50,value2:4 },
      { year: '2013', value1: 14,value2:6 },
      { year: '2014', value1: 23,value2:9 },
      { year: '2015', value1: 5 ,value2:10},
      { year: '2016', value1: 5 ,value2:20},
      { year: '2017', value1: 20,value2:30 },
      { year: '2018', value1: 20,value2:35 },
      { year: '2019', value1: 10 ,value2:40},
      { year: '2020', value1: 5 ,value2:5},
      { year: '2021', value1: 5,value2:10 },
      { year: '2022', value1: 20,value2:15 },
      { year: '2023', value1: 20,value2:20 },
      { year: '2024', value1: 10,value2:10 },
      { year: '2025', value1: 5,value2:10 },
      { year: '2026', value1: 5,value2:10 },
      { year: '2027', value1: 20,value2:10 },

    ],
    // The name of the data record attribute that contains x-values.
    xkey: 'year',
    // A list of names of data record attributes that contain y-values.
    ykeys: ['value1','value2'],
    // Labels for the ykeys -- will be displayed when you hover over the
    // chart.
    labels: ['Value'],
    lineColors:['blue','red'],
  });




