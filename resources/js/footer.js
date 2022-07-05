document.addEventListener('alpine:init', () => {
    Alpine.data('counterUp', () => ({
        current: 0,
        time: 2000,
        startCounter(target){
        start = this.current;
        const interval = Math.max(this.time / (target - start), 5);
        const step = (target - start) /  (this.time / interval);
        const handle = setInterval(() => {
            if(this.current < target)
                this.current += step
            else{
                clearInterval(handle);
                this.current = target
            }
        }, interval) }
    }))

    Alpine.data('carsFilterFirstPage', () => ({
        selected:'All',
        carsShow(){
            if(this.selected == "All"){
                return cars
            }
            else{
                showCars = [];
                cars.forEach((car) => {
                    if(car.producer == this.selected)
                    if (!showCars.includes(car)) {
                        showCars.push(car);
                    }
                });
                return showCars;
            }
        },
        filters(){
            let producers = [];
            cars.forEach((car) => {
                if (!producers.includes(car.producer)) {
                    producers.push(car.producer);
                }
            });
            return producers;
        },
    }))
})

Number.prototype.format = function(n, x) {
    var re = '\\d(?=(\\d{' + (x || 3) + '})+' + (n > 0 ? '\\.' : '$') + ')';
    return this.toFixed(Math.max(0, ~~n)).replace(new RegExp(re, 'g'), '$&,');
};
