(function(w, d, b, u, o, f) {
  w[o] = w[o] || {};
  w[o].u = b;
  w[f] = function() {
    (w[o].q = w[o].q || []).push(arguments);
  };
  t = 'script';
  s = d.createElement(t);
  m = d.getElementsByTagName(t)[0];
  s.src = b + u;
  s.async = 1;
  m.parentNode.insertBefore(s, m);
})(
  window,
  document,
  'https://connect-analytics.maklare.vitec.net',
  '/scripts/v1/analytics.min.js',
  'VitecMAnalytics',
  'va'
);

var me = document.querySelector(
  'script[CURRENT_ESTATE_ID][data-name="vitecDataName"]'
);

if (me) {
  var CURRENT_ESTATE_ID = me.getAttribute('CURRENT_ESTATE_ID');

  var me = document.querySelector(
    'script[CUSTOMER_ID_FOR_CURRENT_ESTATE][data-name="vitecDataName"]'
  );
  var CUSTOMER_ID_FOR_CURRENT_ESTATE = me.getAttribute(
    'CUSTOMER_ID_FOR_CURRENT_ESTATE'
  );

  va('create', 'I1FOYmF8uZhU8RkV');
  va('set', 'target', CURRENT_ESTATE_ID);
  va('set', 'target_customer_id', CUSTOMER_ID_FOR_CURRENT_ESTATE);
}
