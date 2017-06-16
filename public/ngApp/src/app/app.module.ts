import {NgModule} from '@angular/core'
import {RouterModule} from '@angular/router';
import {rootRouterConfig} from './app.routes';
import {AppComponent} from './component/app.component';
import {GithubService} from './component/house/shared/github.service';
import {FormsModule, ReactiveFormsModule} from '@angular/forms';
import {BrowserModule} from '@angular/platform-browser';
import {HttpModule} from '@angular/http';

import {AboutComponent} from './component/about/about.component';
import {HomeComponent} from './component/home/home.component';
import {RepoBrowserComponent} from './component/house/create/house-create.component';
import {RepoListComponent} from './component/house/repo-list/repo-list.component';
import {RepoDetailComponent} from './component/house/repo-detail/repo-detail.component';
import {LocationStrategy, HashLocationStrategy} from '@angular/common';
import {ContactComponent} from './component/contact/contact.component';

import {BuildQueryUtil} from './util/build-query.util';
import {HttpService} from "./service/http.service";
import * as spinner from 'ng-spin-kit/app/spinners'
import {DatePickerModule} from 'ng2-datepicker';

@NgModule({
    declarations: [
        AppComponent,
        AboutComponent,
        RepoBrowserComponent,
        RepoListComponent,
        RepoDetailComponent,
        HomeComponent,
        ContactComponent,
        spinner.FadingCircleComponent
    ],
    imports: [
        BrowserModule,
        FormsModule,
        ReactiveFormsModule,
        HttpModule,
        DatePickerModule,
        RouterModule.forRoot(rootRouterConfig, {useHash: true})
    ],
    providers: [
        GithubService,
        BuildQueryUtil,
        HttpService
    ],
    bootstrap: [AppComponent]
})
export class AppModule {

}
