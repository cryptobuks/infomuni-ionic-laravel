import { Component } from '@angular/core';
import { IonicPage, NavController, NavParams, App, ToastController } from 'ionic-angular';

import { Observable } from 'rxjs/Observable';
import { Http } from '@angular/http';
import 'rxjs/add/operator/map';
import { DetallesemprendePage } from '../detallesemprende/detallesemprende';

@IonicPage()
@Component({
  selector: 'page-emprende',
  templateUrl: 'emprende.html',
})
export class EmprendePage {

  emprende:any;
  data:Observable<any>;

  constructor(public navCtrl: NavController,
              public navParams: NavParams,
              public app: App,
              public http: Http,
              private toastCtrl:ToastController) {

              this.http.get('https://159.89.80.36/app-infomuni/consulta_servicios.php')
                   .map(response => response.json())
                   .subscribe(data =>
                      {
                        this.emprende = data;
                        console.log(data);
                      },
                      err => {
                        console.log("Oops!");
                        this.presentToast("No existen registros aún");
                      }
                  );
  }

  presentToast(msg) {
    let toast = this.toastCtrl.create({
      message: msg,
      duration: 2000
    });
    toast.present();
  }

  ionViewDidLoad() {
    console.log('ionViewDidLoad EmprendePage');
  }

  detalles(id) {
    this.navCtrl.push(DetallesemprendePage,{valor: id});
  }

}