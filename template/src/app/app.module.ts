import { NgModule } from '@angular/core';
import { BrowserModule } from '@angular/platform-browser';

import { AppRoutingModule } from './app-routing.module';
import { AppComponent } from './app.component';
import { NavComponent } from './nav/nav.component';
import { HorScrollComponent } from './hor-scroll/hor-scroll.component';
import { RecentWorkComponent } from './recent-work/recent-work.component';

@NgModule({
  declarations: [
    AppComponent,
    NavComponent,
    HorScrollComponent,
    RecentWorkComponent
  ],
  imports: [
    BrowserModule,
    AppRoutingModule
  ],
  providers: [],
  bootstrap: [AppComponent]
})
export class AppModule { }
