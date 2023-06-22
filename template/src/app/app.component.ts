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
    ScrollTrigger.create({
      trigger: "#first-line",
      start: "top 80%",
      end:"bottom 60%",
      animation: gsap.fromTo("#first-line", {
        opacity: 0,
        y: 100
      }, {
        opacity: 1,
        y: 0,
        duration: 1
      }),
      scrub: true,
      markers: true
    });

   


  }
}
