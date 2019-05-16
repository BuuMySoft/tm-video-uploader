import { BrowserModule } from '@angular/platform-browser';
import { NgModule } from '@angular/core';

import { AppComponent } from './app.component';
import { AuthComponent } from './view/auth/auth.component';
import { PurchaseComponent } from './view/purchase/purchase.component';
import { ManagerComponent } from './view/manager/manager.component';
import { MessageComponent } from './view/message/message.component';
import { HeaderComponent } from './component/header/header.component';
import { VideoListComponent } from './component/video-list/video-list.component';
import {RouterModule, Routes} from '@angular/router';
import {FormsModule} from '@angular/forms';

const routes: Routes = [
  {path: '', component: AuthComponent},
  {path: 'logIn', component: AuthComponent},
  {path: 'purchase', component: PurchaseComponent},
  {path: 'manager', component: ManagerComponent},
  {path: 'message', component: MessageComponent},
  ];

@NgModule({
  declarations: [
    AppComponent,
    AuthComponent,
    PurchaseComponent,
    ManagerComponent,
    MessageComponent,
    HeaderComponent,
    VideoListComponent
  ],
  imports: [
    BrowserModule,
    RouterModule.forRoot(routes),
    FormsModule
  ],
  providers: [],
  bootstrap: [AppComponent]
})
export class AppModule { }
