import { Component, OnInit } from '@angular/core';
import { gsap } from 'gsap';
import { ScrollTrigger } from 'gsap/ScrollTrigger';

gsap.registerPlugin(ScrollTrigger);

@Component({
  selector: 'app-root',
  templateUrl: './app.component.html',
  styleUrls: ['./app.component.scss']
})
export class AppComponent implements OnInit {
  title = 'template';
  sec_sec = document.getElementById("2nd")
  ngOnInit(): void {
    gsap.to('.sec-sec', {
      scrollTrigger: {
        trigger: '.sec-sec',
        pin: true,
        start: 'top top',
        end: '+=150',
        pinSpacing: false
      }
    })
    ScrollTrigger.create({
      trigger: this.sec_sec,
      start: "top top",
      end: "bottom bottom",
      animation: gsap.fromTo("#first-line", {
        opacity: 0,
        y: 100
      }, {
        opacity: 1,
        y: 0,
        duration: 1
      }),
      scrub: true,
    });

    ScrollTrigger.create({
      trigger: this.sec_sec,
      start: "top top",
      end: "bottom bottom",
      animation: gsap.fromTo("#second-line", {
        opacity: 0
      }, {
        opacity: 1,        
      }),
      scrub: true,
    });


  }
}
