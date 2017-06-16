import { Routes } from '@angular/router';

import { AboutComponent } from './component/about/about.component';
import { HomeComponent } from './component/home/home.component';
import { RepoBrowserComponent } from './component/house/create/house-create.component';
import { RepoListComponent } from './component/house/repo-list/repo-list.component';
import { RepoDetailComponent } from './component/house/repo-detail/repo-detail.component';
import { ContactComponent } from './component/contact/contact.component';

export const rootRouterConfig: Routes = [
  { path: '', redirectTo: 'home', pathMatch: 'full' },
  { path: 'home', component: HomeComponent },
  { path: 'about', component: AboutComponent },
  { path: 'house', component: RepoBrowserComponent,
    children: [
      { path: '', component: RepoListComponent },
      { path: ':org', component: RepoListComponent,
        children: [
          { path: '', component: RepoDetailComponent },
          { path: ':repo', component: RepoDetailComponent }
        ]
      }]
  },
  { path: 'contact', component: ContactComponent }
];

