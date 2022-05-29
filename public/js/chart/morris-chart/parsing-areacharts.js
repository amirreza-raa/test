new Morris.Area({
    // ID of the element in which to draw the chart.
    element: 'parsingareacharts',
    // Chart data records -- each entry in this array corresponds to a point on
    // the chart.
    data: [
      { year: '2008',value1:10 ,value: 20 },
      { year: '2009',value1:20 , value: 10 },
      { year: '2010',value1:30 , value: 5 },
      { year: '2011',value1:40 , value: 5 },
      { year: '2012',value1:50 , value: 50 },
      { year: '2013',value1:60 , value: 14 },
      { year: '2014',value1:60 , value: 23 },
      { year: '2015',value1:50 , value: 5 },
      { year: '2016',value1:40 , value: 5 },
      { year: '2017',value1:30 , value: 20 },
      { year: '2018',value1:20 , value: 20 },
      { year: '2019',value1:10 , value: 10 },
    ],
    // The name of the data record attribute that contains x-values.
    xkey: 'year',
    // A list of names of data record attributes that contain y-values.
    ykeys: ['value1','value'],
    // Labels for the ykeys -- will be displayed when you hover over the
    // chart.
    labels: ['Value1','value2'],
    lineColors:['red','blue'],
    behaveLikeLine:true,
  });