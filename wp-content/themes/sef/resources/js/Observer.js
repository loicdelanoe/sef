import {settings} from './settings';

export class Observer {

    constructor() {
        this.showUpElements = document.querySelectorAll(`[data-animation="${settings.showUpClass}"]`);
        this.slideLeftElements = document.querySelectorAll(`[data-animation="${settings.slideLeftClass}"]`)
        this.slideRightElements = document.querySelectorAll(`[data-animation="${settings.slideLeftClass}"]:nth-child(even)`)

        this.slideLeftElements.forEach((slideLeftElement) => {
            slideLeftElement.classList.add(settings.NoOpacityClass);
        });

        this.slideRightElements.forEach((slideRightElement) => {
            slideRightElement.classList.add(settings.NoOpacityClass);
        });

        this.showUpElements.forEach((showUpElement) => {
            showUpElement.classList.add(settings.NoOpacityClass);
        });

        this.showUpObserver = new IntersectionObserver(this.showUpAnimation);
        this.slideLeftObserver = new IntersectionObserver(this.slideLeftAnimation);
        this.slideRightObserver = new IntersectionObserver(this.slideRightAnimation);

        this.observeAction();
        this.delay = 0;
    }

    showUpAnimation = (entries) => {
        entries.forEach((entry) => {
            if (entry.isIntersecting) {
                setTimeout(() => {
                    entry.target.classList.add(settings.showUpClass);
                    entry.target.classList.remove(settings.NoOpacityClass);
                }, this.delay);

                this.delay += 100;
            }
        });

        this.delay = 0;
    }

    slideLeftAnimation = (entries) => {
        entries.forEach((entry) => {
            if (entry.isIntersecting) {
                setTimeout(() => {
                    entry.target.classList.add(settings.slideLeftClass);
                    entry.target.classList.remove(settings.NoOpacityClass);
                }, this.delay);

                this.delay += 100;
            }
        });

        this.delay = 0;
    }

    slideRightAnimation = (entries) => {
        entries.forEach((entry) => {
            if (entry.isIntersecting) {
                setTimeout(() => {
                    entry.target.classList.add(settings.slideRightClass);
                    entry.target.classList.remove(settings.NoOpacityClass);
                }, this.delay);

                this.delay += 100;
            }
        });

        this.delay = 0;
    }

    observeAction() {
        this.showUpElements.forEach((element) => {
            this.showUpObserver.observe(element);
        });

        this.slideLeftElements.forEach((element) => {
            this.slideLeftObserver.observe(element);
        });

        this.slideRightElements.forEach((element) => {
            this.slideRightObserver.observe(element);
        });
    }
}
