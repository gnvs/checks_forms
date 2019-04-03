
// Нахрен не пригодился

function getAllUrlParams(url) {
  var queryString = url ? url.split('?')[1] : window.location.search.slice(1);
  
  var obj = {};

  if (queryString) {
    queryString = queryString.split('#')[0];
    var arr = queryString.split('&');

    for (var i = 0; i < arr.length; i++) {
      
      var a = arr[i].split('=');
      var paramName = a[0];
      var paramValue = typeof (a[1]) === 'undefined' ? true : a[1];

      paramName = paramName.toLowerCase();
      
      if (typeof paramValue === 'string') paramValue = paramValue.toLowerCase();

      if (paramName.match(/\[(\d+)?\]$/)) {
        
        var key = paramName.replace(/\[(\d+)?\]/, '');
        
        if (!obj[key]) obj[key] = [];

        if (paramName.match(/\[\d+\]$/)) {
          var index = /\[(\d+)\]/.exec(paramName)[1];
          obj[key][index] = paramValue;
        } else {
          obj[key].push(paramValue);
        }
      } else {
        if (!obj[paramName]) {
          obj[paramName] = paramValue;
        } else if (obj[paramName] && typeof obj[paramName] === 'string'){
          obj[paramName] = [obj[paramName]];
          obj[paramName].push(paramValue);
        } else {
          obj[paramName].push(paramValue);
        }
      }
    }

        return obj;

  }

}

var params = document.getElementById('params');
var results = document.getElementById('results');

results.innerText = JSON.stringify(getAllUrlParams(this.value), null, 2);

if (itschecker && erpchecker) {
       itschecker.checked = true;
       erpchecker.checked = true;
} else { alert('Значение не задано!'); }

if (gkhchecker && erpchecker) {   
       gkhchecker.checked = true;
       erpchecker.checked = true;
} else { alert('Значение не задано!'); }

if (konschecker) {    
       konschecker.checked = true;
} else { alert('Значение не задано!'); }

if (newsbchecker) {    
       newsbchecker.checked = true;
} else { alert('Значение не задано!'); }

if (edochecker) {      
       edochecker.checked = true;
} else { alert('Значение не задано!'); }

if (gsmetchecker) {      
       gsmetchecker.checked = true;
} else { alert('Значение не задано!'); }

if (ucntchecker) {     
       ucntchecker.checked = true;
} else { alert('Значение не задано!'); }

/* Так сказать эксперименты */


