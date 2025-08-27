// dashboard-charts.js
// Small helpers to animate KPI numbers and improve Chart visuals
(function(){
  function animateNumber(el, start, end, duration){
    var range = end - start; // total change
    var minTimer = 50;
    var stepTime = Math.max(Math.floor(duration / range), minTimer);
    var current = start;
    var increment = end > start ? 1 : -1;
    var timer = setInterval(function(){
      current += increment;
      el.textContent = current;
      if(current == end){
        clearInterval(timer);
      }
    }, stepTime);
  }

  window.initDashboard = function(){
    // animate KPI numbers if elements exist
    var nodes = document.querySelectorAll('[data-kpi]');
    nodes.forEach(function(n){
      var to = parseInt(n.getAttribute('data-kpi'),10) || 0;
      animateNumber(n, 0, to, 900);
    });

    // style Chart.js tooltips default (Chart.js v2 global)
    if(window.Chart){
      Chart.defaults.global.defaultFontFamily = 'Nunito, Inter, system-ui, -apple-system, "Segoe UI", Roboto';
      Chart.defaults.global.defaultFontColor = '#6b7280';
      Chart.defaults.global.tooltips.backgroundColor = 'rgba(0,0,0,0.75)';
      Chart.defaults.global.legend.labels.boxWidth = 10;
    }
  };

  // auto init on DOM ready
  if(document.readyState === 'loading'){
    document.addEventListener('DOMContentLoaded', initDashboard);
  } else { initDashboard(); }
})();
