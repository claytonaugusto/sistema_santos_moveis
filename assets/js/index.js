var close = document.getElementById("close");
function eyeClose(){
    var close = document.getElementById("close");
    if (close.style.visibility === 'hidden'){
        close.style.visibility = 'visible';
    }else{
        close.style.visibility = 'hidden';
    }
}
function openNav() {
    document.getElementById("mySidebar").style.width = "210px";
    document.getElementById("main").style.marginLeft = "210px";
  }
  
  function closeNav() {
    document.getElementById("mySidebar").style.width = "0";
    document.getElementById("main").style.marginLeft = "0";
  }

  var dom = document.getElementById('grafics');
  var myChart = echarts.init(dom, null, {
    renderer: 'canvas',
    useDirtyRect: false
  });
  window.onresize = function(){
    myChart.onresize();
  };
  var app = {};
  
  var option;

  option = {
xAxis: {
  type: 'category',
  data: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun']
},
yAxis: {
  type: 'value'
},
series: [
  {
    data: [150, 230, 224, 218, 135, 147, 260],
    type: 'line'
  }
]
};


  if (option && typeof option === 'object') {
    myChart.setOption(option);
  }

  window.addEventListener('resize', myChart.resize);
