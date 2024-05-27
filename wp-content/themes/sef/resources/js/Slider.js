export class Slider {
    constructor() {
        this.section = document.querySelector('.testimonials');
        this.slider = document.querySelector('.testimonials__container');
        this.card = document.querySelector('.testimonialcard');
        this.gap = parseInt(window.getComputedStyle(this.slider).getPropertyValue("gap"));
        this.scrollValue = 0;

        this.createSliderButtons();

        this.buttonElements = document.querySelectorAll('.slider__button');

        this.scrollMax = this.slider.scrollWidth - this.slider.clientWidth;

        this.addEventListeners();

        window.addEventListener('resize', () => {
            this.slider.style.width = `${this.setSliderWidth()}px`;
        });
    }

    createSliderButtons() {
        this.section.insertAdjacentHTML('beforeend', `
        <div class="slider__container--button">
            <span class="slider__button" data-id="prev"><span class="sro">Précédent</span></span>
            <span class="slider__button" data-id="next"><span class="sro">Suivant</span></span>
        </div>`)

        this.slider.style.width = `${this.setSliderWidth()}px`
        this.slider.classList.add('container__slider');
        this.slider.classList.add('no-snap');
    }

    addEventListeners() {
        this.buttonElements.forEach(button => {
            button.addEventListener('click', () => {
                if (button.dataset.id === 'next') {
                    this.scrollValue += this.card.offsetWidth + this.gap;

                    if (this.scrollValue > this.slider.scrollWidth - this.slider.clientWidth) {
                        this.scrollValue = 0;
                    }

                    this.slider.scrollTo({
                        left: this.scrollValue,
                        behavior: 'smooth',
                    });
                }

                if (button.dataset.id === 'prev') {
                    this.scrollValue -= this.card.offsetWidth + this.gap;

                    if (this.scrollValue < 0) {
                        this.scrollValue = this.scrollMax;
                    }

                    this.slider.scrollTo({
                        left: this.scrollValue,
                        behavior: 'smooth',
                    });
                }
            });
        });
    }

    setSliderWidth() {
        if (window.matchMedia("(max-width: 1024px)").matches) {
            return this.card.offsetWidth + this.gap;
        }

        return this.card.offsetWidth * 2 + this.gap * 2;
    }
}