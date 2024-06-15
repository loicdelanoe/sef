import {Slider} from "./Slider";
import {Observer} from "./Observer";

class Main {
    constructor() {
        if (window.location.pathname === '/') {
            this.slider = new Slider();
        }

        this.observer = new Observer();
    }
}

new Main();