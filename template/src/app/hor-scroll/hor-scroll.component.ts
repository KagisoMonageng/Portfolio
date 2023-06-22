import { Component, OnInit } from '@angular/core';
import { gsap } from 'gsap';
import { ScrollTrigger } from 'gsap/ScrollTrigger';

gsap.registerPlugin(ScrollTrigger);

@Component({
  selector: 'app-hor-scroll',
  templateUrl: './hor-scroll.component.html',
  styleUrls: ['./hor-scroll.component.scss']
})
export class HorScrollComponent implements OnInit {
  container: any = document.querySelector('.main');
  sections: any = document.querySelectorAll('.section');

  ngOnInit(): void {
    this.startScroll()
  }

  startScroll() {
    gsap.to(this.sections, {
      xPercent: -100 * (this.sections.length - 1), // Distance to scroll horizontally
      ease: 'none',
      scrollTrigger: {
        trigger: this.container,
        scrub: true,
        pin: true,
        start: 'top top',
        end: () => `+=${this.container.offsetWidth}`, // Adjust the end position based on container width
      },
    });
  }

}
