/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!********************************!*\
  !*** ./resources/js/footer.js ***!
  \********************************/
document.addEventListener('alpine:init', function () {
  Alpine.data('counterUp', function () {
    return {
      current: 0,
      time: 2000,
      startCounter: function startCounter(target) {
        var _this = this;

        start = this.current;
        var interval = Math.max(this.time / (target - start), 5);
        var step = (target - start) / (this.time / interval);
        var handle = setInterval(function () {
          if (_this.current < target) _this.current += step;else {
            clearInterval(handle);
            _this.current = target;
          }
        }, interval);
      }
    };
  });
  Alpine.data('carsFilterFirstPage', function () {
    return {
      selected: 'All',
      carsShow: function carsShow() {
        var _this2 = this;

        if (this.selected == "All") {
          return cars;
        } else {
          showCars = [];
          cars.forEach(function (car) {
            if (car.producer == _this2.selected) if (!showCars.includes(car)) {
              showCars.push(car);
            }
          });
          return showCars;
        }
      },
      filters: function filters() {
        var producers = [];
        cars.forEach(function (car) {
          if (!producers.includes(car.producer)) {
            producers.push(car.producer);
          }
        });
        return producers;
      }
    };
  });
});

Number.prototype.format = function (n, x) {
  var re = '\\d(?=(\\d{' + (x || 3) + '})+' + (n > 0 ? '\\.' : '$') + ')';
  return this.toFixed(Math.max(0, ~~n)).replace(new RegExp(re, 'g'), '$&,');
};
/******/ })()
;